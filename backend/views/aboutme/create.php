<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Aboutme $model */

$this->title = 'Create Aboutme';
$this->params['breadcrumbs'][] = ['label' => 'Aboutmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aboutme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
