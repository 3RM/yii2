<?php

namespace app\controllers;

use Yii;
use app\models\TestForm;

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
        
        $this->view->title = "Index posts";
        
        if(Yii::$app->request->isAjax){
            //debug($_GET);
            //debug($_POST);
            debug(Yii::$app->request->post());
        }
		$model = new TestForm();
		//$this->varDebug(Yii::$app);
            
        return $this->render('index', compact('model'));
    }

    public function actionShow() {
        
        //$this->layout = 'basic';
        
        $this->view->title = "Одна статья!";
        $this->view->registerMetaTag(['name'=>'keywords','content'=>'ключевые слова']);               
        $this->view->registerMetaTag(['name'=>'description','content'=>'описанние страницы']);
        
        return $this->render('show');
    }

}
