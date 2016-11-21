<?php

namespace app\controllers;

use Yii;
use app\models\Product;
use app\models\Groups;
use app\models\Categories;
use app\models\Svoistva;

class UpdateController extends \yii\web\Controller
{
    public function actionIndex()
    {

    	$request = Yii::$app->request;
		$post = $request->post();
		$data = new SimpleXMLElement($post);
		var_dump($data); exit();

		file_put_contents('test.txt', $data);

        //return $this->render('index');
    }

    public function actionTest()
    {

    	$xml = file_get_contents('pr.xml');
    	$xml = iconv('UTF-8', '', $xml);
    	file_put_contents('pr.xml', $xml);
    	$xml = simplexml_load_file('pr.xml');
    	foreach($xml as $datas){
    		$group = null;
    		$group = Groups::findOne([
			    'code' => $datas->GroupNom->Code,
			]);
    		if($group == NULL){
    			$group = new Groups();
    			$group->code = $datas->GroupNom->Code;
    			$group->name = $datas->GroupNom->Name;
    			$group->save();
    		}else{
    			$group = Groups::find()->where(['code'=>$datas->GroupNom->Code])->one();
    			$group->code = $datas->GroupNom->Code;
    			$group->name = $datas->GroupNom->Name;
    			$group->save();
    		}
    		$product = Product::find()->where(['code'=>$datas->Code])->one();
    		if($product == NULL){
				$group_id = Groups::findOne([
					'code' => $datas->GroupNom->Code,
				]);
				$group_id = $group_id->id;
    			$product = new Product();
    			$product->name = $datas->Name;
    			$product->code = $datas->Code;
    			$product->description = $datas->Discription;
    			$product->delete = $datas->Delete;
    			$product->price = $datas->Price;
    			$product->articul = $datas->Articul;
    			$product->group = $group_id;
    			$product->save();
    		}else{
    			$group_id = Groups::findOne([
					'code' => $datas->GroupNom->Code,
				]);
				$group_id = $group_id['id'];
    			$product = Product::findOne([
    				'code' => $datas->Code,
    			]);
    			$product->name = $datas->Name;
    			$product->code = $datas->Code;
    			$product->description = $datas->Discription;
    			$product->delete = $datas->Delete;
    			$product->price = $datas->Price;
    			$product->articul = $datas->Articul;
    			$product->group = $group_id;
    			$product->save();
    		}
    		$product_id = Product::findOne([
    			'code' => $datas->Code,
    		]);
    		$product_id = $product_id['id'];
    		
    		$svoistva = $datas->Svoistva;
    		foreach($svoistva as $svoistvo){
    			$sv = Svoistva::findOne([
				    'product_id' => $product_id,
				    'code' => $svoistvo->Code,
				]);
	    		if($sv == NULL){
	    			$sv = new Svoistva();
	    			$sv->code = $svoistvo->Code;
	    			$sv->name = $svoistvo->Name;
	    			$sv->product_id = $product_id;
	    			$sv->save();
	    		}else{
	    			$sv = Svoistva::findOne([
	    				'product_id' => $product_id,
	    				'code' => $svoistvo->Code,
	    			]);
	    			$sv->code = $svoistvo->Code;
	    			$sv->name = $svoistvo->Name;
	    			$sv->product_id = $product_id;
	    			$sv->save();
	    		}
    		}

    		$categories = $datas->Categories;
    		foreach($categories as $category){
    			$cat = categories::findOne([
				    'product_id' => $product_id,
				    'code' => $category->Code,
				]);
	    		if($cat == NULL){
	    			$cat = new Categories();
	    			$cat->code = $category->Code;
	    			$cat->name = $category->Name;
	    			$cat->product_id = $product_id;
	    			$cat->save();
	    		}else{
	    			$cat = Categories::findOne([
	    				'product_id' => $product_id,
	    				'code' => $category->Code,
	    			]);
	    			$cat->code = $category->Code;
	    			$cat->name = $category->Name;
	    			$cat->product_id = $product_id;
	    			$cat->save();
	    		}
    		}

    		
    	}
    	exit();

    	

	}

}
