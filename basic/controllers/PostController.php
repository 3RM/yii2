<?php

namespace app\controllers;

use Yii;

/**
 * Description of PostController
 *
 * @author rodnoy
 */
class PostController extends AppController {
    
    public $layout = 'basic';
    
    public function beforeAction($action)
    {
        if($action->id == 'index')
        {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);    
    }   

    public function actionIndex() {

        $arr = array('Vasya', 'Petya', 'Grisha');
        
        if(Yii::$app->request->isAjax){
            //debug($_GET);
            //debug($_POST);
            debug(Yii::$app->request->post());
        }
		
		self::varDebug('Hello');
		//$this->varDebug(Yii::$app);
            
        return $this->render('index', compact('arr'));
    }

    public function actionShow() {
        
        //$this->layout = 'basic';
        
        return $this->render('show');
    }

}
