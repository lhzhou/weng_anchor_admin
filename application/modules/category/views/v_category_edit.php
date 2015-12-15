<?php
    $attributes = array('class' => 'form-horizontal ajax_form');
    echo form_open_multipart(base_url('category/update_category'), $attributes);
?>

	<div class="form-group">
		<label class="col-sm-2 control-label">分类名称<sup class="red">*</sup></label>
		<div class="col-sm-10">
			<input type="text" name="name" class="form-control" value="<?php echo $category['name'] ?>"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">分类描述<sup class="red">*</sup></label>
		<div class="col-sm-10">
			<input type="text" name="desc" class="form-control" value="<?php echo $category['desc'] ?>"  required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">排列序列<sup class="red">*</sup></label>
		<div class="col-sm-10">

			<input type="number" name="sort" class="form-control" value="<?php echo $category['sort'] ?>" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">上传图标<sup class="red">*</sup></label>
		<div class="col-sm-10">
			<input type="file" name="icon" class="form-control" >
		</div>
	</div>
	<fieldset class="scheduler-border">
        <legend class="scheduler-border">中文 - 简体</legend>
		<div class="form-group">
			<label class="col-sm-2 control-label">分类名称<sup class="red">*</sup></label>
			<div class="col-sm-10">
				<input type="text" name="lang[1][name]" class="form-control"  value="<?php echo $categroy_lang[0]['name'] ?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">分类描述<sup class="red">*</sup></label>
			<div class="col-sm-10">
				<input type="text" name="lang[1][desc]" class="form-control"  value="<?php echo $categroy_lang[0]['desc'] ?>" required>
			</div>
		</div>
	</fieldset>

	<fieldset class="scheduler-border">
        <legend class="scheduler-border">English - US</legend>
		<div class="form-group">
			<label class="col-sm-2 control-label">Category Name<sup class="red">*</sup></label>
			<div class="col-sm-10">
				<input type="text" name="lang[2][name]" class="form-control"  value="<?php echo $categroy_lang[1]['name'] ?>" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">Dscription<sup class="red">*</sup></label>
			<div class="col-sm-10">
				<input type="text" name="lang[2][desc]" class="form-control"  value="<?php echo $categroy_lang[1]['desc'] ?>" required>
			</div>
		</div>
	</fieldset>


	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $category['id'] ?>">
		<input type="hidden" name="parent_id" value="<?php echo $category['parent_id'] ?>">
		<div class="col-sm-offset-2 col-sm-10">	
			<button type="submit" class="btn btn-success btn-block">更新数据</button>	
		</div>
	</div>

</form>