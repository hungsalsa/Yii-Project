<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Departments */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departments-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'company_id')->dropdownlist(
        $allCompany,['prompt'=>'--Select a company--',
       
                ]);
        ?>

 <?= $form->field($model, 'company_id')->dropdownlist(
        $allCompany,
        [
            'prompt'=>'--Select a company--',
            'id'=>'departments_company_id',
       
        ]);
        ?>    







	<?= $form->field($model, 'branch_id')->dropdownlist($allBranchs,['prompt'=>'--Select a branch--']) ?> 

    <?= $form->field($model, 'department_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department_status')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>


<?php
$script = <<< JS
    alert("Hi");
JS;
$this->registerJs($script);
?>

