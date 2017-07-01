
	<select>
		<option>Chon huyen</option>
		<?php foreach ($allDistrict as $key => $value): ?>

			<option value="<?= $key ?>"><?= $value ?></option>
		<?php endforeach ?>
	</select>