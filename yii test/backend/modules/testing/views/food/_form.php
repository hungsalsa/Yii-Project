<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\modules\testing\models\Countries;
use common\modules\testing\models\States;
use common\modules\testing\models\Cities;

/* @var $this yii\web\View */
/* @var $model common\modules\testing\models\Food */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'country_id')->textInput() ?> -->
    <?= $form->field($model, 'country_id')->dropDownList(Countries::dropdown(),['prompt'=>'Choose...']) ?>

    <?= $form->field($model, 'state_id')->dropDownList(States::dropdown(),['prompt'=>'Choose...']) ?>

    <?= $form->field($model, 'citiy')->dropDownList(Cities::dropdown(),['prompt'=>'Choose...']) ?>

    <!-- <?= $form->field($model, 'state_id')->textInput() ?> -->

    <!-- <?= $form->field($model, 'citiy')->textInput() ?> -->

    <?= $form->field($model, 'food_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
