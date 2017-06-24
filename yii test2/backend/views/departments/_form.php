<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Company;
use backend\models\Branch;

/* @var $this yii\web\View */
/* @var $model backend\models\Departments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-form">

    <?php $form = ActiveForm::begin(); ?>

    <!-- <?= $form->field($model, 'company_id')->textInput() ?> -->
    <?= $form->field($model, 'company_id')->dropdownlist(Company::dropdown(),
     	[
	     	'prompt'=>'--Select a branch--',
	     	'onchange'=>'$.post("'.Yii::$app->urlManager->createUrl('departments/list_branch?id=').'"+$(this).val(), function( data ){$("select#departments_branch_id").html( data );});',
     	]);
 	?>  

    <?= $form->field($model, 'branch_id')->dropdownlist(Branch::dropdown(),['prompt'=>'--Select a branch--','id'=>'departments_branch_id']) ?> 

    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
