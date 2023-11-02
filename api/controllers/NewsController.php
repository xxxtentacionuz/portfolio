<?php

namespace api\controllers;

use yii\rest\ActiveController;

class NewsController extends ActiveController
{
    public $modelClass = 'common\models\News';
}