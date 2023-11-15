<?php

namespace api\controllers;

use common\models\Category;
use yii\data\ActiveDataProvider;
use yii\rest\ActiveController;
use yii\web\Application;

class CategoryController extends MyController
{
    public $modelClass = 'common\models\Category';

public function actions()
{
    $action = parent::actions();
    unset($action['index'], $action['delete']);
    return $action;
}

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query'=> Category::find(),
            'pagination'=> [
                'pageSize'=>2
            ]
        ]);
        return $dataProvider;
    }

}