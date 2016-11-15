<?php 
/** 
* 1cservice.php 
*/ 

header("Content-Type: text/xml; charset=utf-8"); 
header('Cache-Control: no-store, no-cache'); 
header('Expires: '.date('r')); 

set_include_path(get_include_path() 
.PATH_SEPARATOR.'classes' 
.PATH_SEPARATOR.'objects'); 


const CONF_NAME = "config.ini"; 
ini_set('memory_limit', '5555555'); 
define('DRUPAL_ROOT', getcwd()); 

require_once DRUPAL_ROOT . '/includes/bootstrap.inc'; 
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL); 
/* Наша функция-хэндлер */ 

ini_set('display_errors',1); 
error_reporting(E_ALL); 
function __autoload($class_name){ 
include $class_name.'.class.php'; 
} 

class DFileHelper 
{ 
public static function getRandomFileName($path, $extension='') 
{ 
$extension = $extension ? '.' . $extension : ''; 
$path = $path ? $path . '/' : ''; 
do { 
$name = md5(microtime() . rand(0, 9999)); 
$file = $path . $name . $extension; 
} while (file_exists($file)); 

return $file; 
} 
} 
class Soap1cGateWay { 
public function log($text){ 
error_log(date("l dS of F Y h:i:s A").$text.PHP_EOL, 3, dirname($_SERVER['SCRIPT_FILENAME']).'/error.log'); 
} 
public function create_node($type = 'page', $title = 'default_title', $save = TRUE) { 
global $user; 

$values = array( 
'type' => $type, 
'uid' => 1, 
'status' => 1, 
'comment' => 0, 
'promote' => 0, 
); 
$entity = entity_create('node', $values); 

$ewrapper = entity_metadata_wrapper('node', $entity); 
$ewrapper->language->set('ru');

$ewrapper->revision->set(1); 
if ($save) { 
$ewrapper->save(); 
return $entity; 
} 
else { 
return $ewrapper; 
} 
} 

//product_id by Article Code 
public function get_pid_by_code($code) { 
$query = new EntityFieldQuery; 
$result = $query->entityCondition('entity_type', 'commerce_product', '=') 
->propertyCondition('type', 'product') 
->fieldCondition('field_code', 'value', $code) 
->range(0, 1) 
->execute(); 

if (empty($result['commerce_product'])) { 
return FALSE; 
} 

return reset($result['commerce_product'])->product_id; 
} 
//uid by UID by INN 
public function get_uid_by_inn($inn, $product_field_name = 'field_inn') { 
$query = new EntityFieldQuery; 
$result = $query->entityCondition('entity_type', 'profile2', '=') 
//->propertyCondition('type', 'client') 
->fieldCondition($product_field_name, 'value', $inn, '=') 
->range(0, 1) 
->execute(); 

if (empty($result['profile2'])) { 
return 0; 
} 
$pid=reset($result['profile2'])->pid; 
$uid= db_query("SELECT uid FROM {profile} WHERE pid = :pid", array(':pid' => $pid))->fetchField(); 
if(!empty($uid)){ 
return $uid; 
} 
else return 0; 

} 
// Node ID by product_id 
public function get_nid_by_pid($product_id, $product_field_name = 'field_product') { 
$query = new EntityFieldQuery; 
$result = $query->entityCondition('entity_type', 'node', '=') 
->propertyCondition('type', 'mockup') 
->fieldCondition($product_field_name, 'product_id', $product_id, '=') 
->range(0, 1) 
->execute(); 

if (empty($result['node'])) { 
return FALSE; 
} 

return reset($result['node'])->nid; 
} 

// Delete node and product 
public function delete_item($singleItem){ 
$pid=$this->get_pid_by_code($singleItem->Code); 
$nid=$this->get_nid_by_pid($pid); 
if($nid>0){ 
$this->log('nid='.$nid); 
node_delete($nid); 
$this->log('deleted nid='.$nid); 
} 
else{ 
$this->log('no nid'); 
return false; 
} 

if($pid>0){ 
commerce_product_delete($pid); 
$this->log('pid='.$pid); 
$this->log('deleted pid='.$pid); 
} 
else{ 
$this->log('no pid'); 
return false; 
} 



return true; 
} 

// Create new or update existing node and product 
public function create_update_item($singleItem){ 
$pid=$this->get_pid_by_code($singleItem->Code); 
if($pid>0){ 
$product =entity_metadata_wrapper('commerce_product', $pid); 
} 
elseif(!$pid){ 
$product =entity_metadata_wrapper('commerce_product', commerce_product_new('product'));// commerce_product_new('product'); 
}
$product->field_code = $singleItem->Code; 
$product->title=$singleItem->Name; 
$product->field_min_run = $singleItem->MinKolvo; 
$product->field_min_batch = $singleItem->KolVoList; 

$product->field_unit =$singleItem->Edinica->Name; 
$product->language = LANGUAGE_NONE; 
$product->uid = 1; 
$product->status = 1; 
$product->commerce_price->amount = $singleItem->NomCena*100; // Price in minors units 500 = 5$ 
$product->commerce_price->currency_code = 'RUB'; 
$product->save(); 


// NODE display 
$nid=$this->get_nid_by_pid($pid); 
if($nid>0){ 
$node=entity_load_single('node', $nid); 
} 
elseif(!$nid){ 
$node=$this->create_node($type = 'mockup', $title = $singleItem->Name, $save = TRUE); 
node_object_prepare($node); 
} 
$node->title = $singleItem->Name; 
//$node->field_user[LANGUAGE_NONE][]['target_id']=$this->get_uid_by_inn($singleItem->INN); 


if(!empty($singleItem->File)){ 
//$path='sites/default/files/images/mockups/'; 
$path='sites/default/files/'; 
$extension='jpg'; 
$img=base64_decode($singleItem->File); 
$filename = DFileHelper::getRandomFileName($path, $extension); 
file_put_contents($filename,$img); 
$img_url = "http://{$_SERVER['HTTP_HOST']}/".$filename; 
$data = drupal_http_request($img_url); 
if($data->code==200){ 
$file = file_save_data($data->data, 'public://' . basename($img_url)); 
$fid=$node->field_image[LANGUAGE_NONE][0][0]; 
if(!empty($fid)){ 
file_delete($fid); 
} 
if ($file) { 
$node->field_image[LANGUAGE_NONE][0] = (array)$file; 
unlink($filename); 
} 
} 
} 
$node->uid = 1; 
$node->field_product[LANGUAGE_NONE][]['product_id'] = $product->product_id->value(); 
$node->language = LANGUAGE_NONE; 
$user_id=$this->get_uid_by_inn($singleItem->INN); 
if($user_id>0){ 
/*$nodewrapper=entity_metadata_wrapper('node', $nid); 
$nodewrapper->field_user=$user_id; 
$nodewrapper->save();*/ 
$node->field_user[LANGUAGE_NONE][]['target_id']=$user_id; 
} 
node_save($node); 


return true; 
} 

//SOAP-server function 
public function send1c($req){ 
//$rawPost = "Input:\r\n"; 
$rawPost .= file_get_contents('php://input'); 
//$rawPost .= "\r\n---\r\nmessageData:\r\n"; 
//$rawPost .= serialize($req); 
file_put_contents("log.xml",$rawPost); 
if(count($req->CatalogList->CatalogNom)>1){ 
foreach($req->CatalogList->CatalogNom as $singleItem){ 
if(!empty($singleItem->Code)){ 
if($singleItem->Delete>0){ 
$true=$this->delete_item($singleItem); 
} 
else{ 
$true=$this->create_update_item($singleItem); 
} 
} 
} 
} 
else{ 
if(!empty($req->CatalogList->CatalogNom->Code)){ 
if($req->CatalogList->CatalogNom->Delete>0){ 
$true=$this->delete_item($req->CatalogList->CatalogNom); 
} 
else{ 
$true=$this->create_update_item($req->CatalogList->CatalogNom); 
} 
} 
/*$true=$this->create_update_item($req->CatalogList->CatalogNom);*/ 
} 

return array("status" => true,"file"=>'file'); 
} 

} 

ini_set("soap.wsdl_cache_enabled", "0"); 

$server = new SoapServer("http://{$_SERVER['HTTP_HOST']}/1cservice.wsdl.php", 
array( 'soap_version' => SOAP_1_2,'cache_wsdl' => WSDL_CACHE_NONE)); 
$server->setClass("Soap1cGateWay"); 
$server->handle();
Комплексная набирает сообщение..
