<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Aboutme $model */

$this->title = 'Update Aboutme: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Aboutmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aboutme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
