<?php

use app\assets\AppAssetPosts;
use yii\helpers\Html;

AppAssetPosts::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <div class="wrap">
            <div class="container">
                <ul class="nav nav-tabs">
                    <li role="presentation" class="active"><?= Html::a('Главная','/')?></li>
                    <li role="presentation"><?= Html::a('Статьи',['post/index'])?></li>
                    <li role="presentation"><?= Html::a('Статья',['post/show'])?></li>
                </ul>
                <?= $content ?>
            </div>
        </div>        
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
