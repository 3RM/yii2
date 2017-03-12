<?php

namespace app\controllers;

//use yii\web\Controller;

/**
 * Description of MyController
 *
 * @author rodnoy
 */
class MyController extends AppController{
    
    public function actionIndex($id = null){
        $var = 'Hello world!!!';
        $arr = array('Ivan','Petr','Grisha');
        //return $this->render('index', ['var' => $var, 'names' => $arr]);
        return $this->render('index', compact('var','arr','id'));
    }
    
    public function actionBlogPost(){
        
        return 'BlogPost';
    }
}
