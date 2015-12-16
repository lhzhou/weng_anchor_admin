<div class="col-sm-4">
	<select class="form-control" name="parent_id">
		<?php foreach ($sub_category as $key => $value): ?>
			<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
		<?php endforeach ?>
	</select>
</div>