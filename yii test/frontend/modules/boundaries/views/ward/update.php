<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\boundaries\models\Ward */

$this->title = 'Update Ward: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Wards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Ward_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ward-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
