<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\boundaries\models\Provincial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="provincial-form">

    <?php $form = ActiveForm::begin(); ?>



<?= $form->field('')->dropDownList($allProvince

, ['prompt' => ' -- Select Category --']) ?>

   <!--  <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div> -->

    <?php ActiveForm::end(); ?>

</div>
