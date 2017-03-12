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

    public function actionIndex() {

        $arr = array('Vasya', 'Petya', 'Grisha');
        
        if(Yii::$app->request->isAjax){
            debug($_GET);
        }
            
        return $this->render('index', compact('arr'));
    }

    public function actionShow() {
        
        //$this->layout = 'basic';
        
        return $this->render('show');
    }

}
