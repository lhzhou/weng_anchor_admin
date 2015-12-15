<?php
    $attributes = array('class' => 'form-horizontal ajax_form');
    echo form_open_multipart(base_url('category/category_edit'), $attributes);
?>

	<div class="form-group">
		<label class="col-sm-2 control-label">分类名称<sup class="red">*</sup></label>
		<div class="col-sm-10">
			<input type="text" name="name" class="form-control" value="<?php echo $category['name'] ?>"  placeholder="商品名称" required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">分类描述<sup class="red">*</sup></label>
		<div class="col-sm-10">
			<input type="text" name="desc" class="form-control" value="<?php echo $category['desc'] ?>"  placeholder="商品名称" required>
		</div>
	</div>

	<div class="form-group">
		<label class="col-sm-2 control-label">排列序列<sup class="red">*</sup></label>
		<div class="col-sm-10">
			<input type="text" name="desc" class="form-control" value="<?php echo $category['sort'] ?>"  placeholder="商品名称" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">上传图标<sup class="red">*</sup></label>
		<div class="col-sm-10">
			<input type="file" name="icon" class="form-control" value="<?php echo $category['sort'] ?>"  placeholder="商品名称" required>
		</div>
	</div>

</form>