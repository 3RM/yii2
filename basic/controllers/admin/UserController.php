<?php

namespace app\controllers\admin;

use app\controllers\AppController;

/**
 * Description of UserController
 *
 * @author rodnoy
 */
class UserController extends AppController {

    public function actionIndex() {
        return $this->render('index');
    }

}
