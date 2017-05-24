<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\modules\testing\models\Countries;
use common\modules\testing\models\States;
use common\modules\testing\models\Cities;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\modules\testing\models\Food */
/* @var $form yii\widgets\ActiveForm */
?>


<div class="food-form">

    <?php $form = ActiveForm::begin(); ?>

    
	<?= $form->field($model, 'id')->dropDownList($allCountries,
		[
			'prompt'=>'-- Choose a countries --',
			'id'=>'food_countries_id',
			'onchange'=>'
				$.post(
		            "states/lists?id='.'"+$(this).val(),
		            function(data) {
		                $("select#food_state_id").html(data);

		         });',
		]) ?> 

		<?= $form->field($model, 'state_id')->dropDownList($allCountries,
		[
			'prompt'=>'-- Choose a states --',
			'id'=>'food_states_id',
			// 'onchange'=>'
			// 	$.post(
		 //            "states/lists?id='.'"+$(this).val(),
		 //            function(data) {
		 //                $("select#food_state_id").html(data);

		 //         });',
		]) ?> 

    <!-- <?= $form->field($model, 'state_id')->dropDownList(States::dropdown(),['prompt'=>'Choose...','id'=>'food_state_id']) ?> -->

    <?= $form->field($model, 'citiy')->dropDownList(Cities::dropdown(),['prompt'=>'Choose...']) ?>





    <?= $form->field($model, 'food_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<script type="text/javascript">
	<script>
	     function validate_dropdown(id)
	    {
	        alert("Selected id = "+id);
	        
	    }
	</script>
</script>