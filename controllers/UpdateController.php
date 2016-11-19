<?php

namespace app\controllers;

use Yii;

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
    		var_dump($datas);
    		echo '<hr>';
    		foreach($datas as $key => $value){
    			echo mb_detect_encoding($value);
    			//$value = iconv('cp-1251', 'UTF-8', $value);
    			echo $key.' - '.$value.'<br>';
    		}
    		echo '<hr>';
    		echo '<hr>';
    	}
    	exit();

    	

	}

}
