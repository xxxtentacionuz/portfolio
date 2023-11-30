<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\Contactme $model */

$this->title = 'Create Contactme';
$this->params['breadcrumbs'][] = ['label' => 'Contactmes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contactme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
