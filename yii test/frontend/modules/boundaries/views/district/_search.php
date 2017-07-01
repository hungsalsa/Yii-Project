<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\boundaries\models\DistrictSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="district-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'district_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'provincial_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
