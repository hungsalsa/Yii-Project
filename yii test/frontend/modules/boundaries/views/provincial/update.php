<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\boundaries\models\Provincial */

$this->title = 'Update Provincial: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Provincials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id_provincial]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="provincial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>