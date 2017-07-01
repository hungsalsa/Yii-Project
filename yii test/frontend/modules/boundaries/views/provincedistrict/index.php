<?php
/* @var $this yii\web\View */
?>
<h1>provincedistrict/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
<div class="tinh" >
	<label>Tinh</label>
	<select id="tinh">
	<?php foreach ($allProvince as $key => $value): ?>

		<option value="<?= $key ?>"><?= $value ?></option>
	<?php endforeach ?>
	</select>
</div>

<div class="tinh" >
	<label>Huyen</label>
	<select id="huyen">
		<option></option>
	</select>
</div>

<div class="tinh">
	<label>Tinh</label>
	<select>
	<?php foreach ($allProvince as $key => $value): ?>

		<option value="<?= $key ?>"><?= $value ?></option>
	<?php endforeach ?>
	</select>
</div>


<script type="text/javascript">
	$(document).ready(function() {
		var tinh = $("#tinh").val();
		$("#tinh").change(function(event) {
			$.post('boundaries/provincedistrict/', {'provincial_id': tinh}, function(data) {
				$("#huyen").html(data);
			});
		});
	});
</script>