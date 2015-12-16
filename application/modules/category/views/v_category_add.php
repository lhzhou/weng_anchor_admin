<div class="row">
    <div class="col-sm-12">
        <h3 class="page-header">
            商品分类
        </h3>
		<ol class="breadcrumb">
			<li><a href="#">首页</a></li>
			<li><a class="active">添加分类</a></li>
		</ol>
    </div>
</div>

<div class="row">

<?php
    $attributes = array('class' => 'col-sm-offset-2 col-sm-8 form-horizontal ajax_form');
    echo form_open_multipart(base_url('category/update_category'), $attributes);
?>
	<div class="form-group">
		<label class="col-sm-2 control-label">选择分类<sup class="red">*</sup></label>
		<div class="col-sm-4">
			<select id="root_category" class="form-control" name="root_category">
				<option value="0">顶级分类</option>
				<?php foreach ($category as $key => $value): ?>
					<option value="<?php echo $value['id'] ?>"><?php echo $value['name'] ?></option>
				<?php endforeach ?>
			</select>
		</div>
		<div id="sub_category_select">
			
		</div>
		
	</div>

	<fieldset class="scheduler-border">
        <legend class="scheduler-border">中文 - 简体</legend>
		<div class="form-group">
			<label class="col-sm-2 control-label">分类名称<sup class="red">*</sup></label>
			<div class="col-sm-10">
				<input type="text" name="lang[1][name]" class="form-control"  value="" required>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">分类描述<sup class="red">*</sup></label>
			<div class="col-sm-10">
				<input type="text" name="lang[1][desc]" class="form-control"  value="" required>
			</div>
		</div>
	</fieldset>

	<fieldset class="scheduler-border">
        <legend class="scheduler-border">English - US</legend>
		<div class="form-group">
			<label class="col-sm-2 control-label">Category Name<sup class="red">*</sup></label>
			<div class="col-sm-10">
				<input type="text" name="lang[2][name]" class="form-control"  value="" required>
			</div>
		</div>
		
	<div class="form-group">
			<label class="col-sm-2 control-label">Dscription<sup class="red">*</sup></label>
			<div class="col-sm-10">
				<input type="text" name="lang[2][desc]" class="form-control"  value="" required>
			</div>
		</div>
	</fieldset>

	<div class="form-group">
		<label class="col-sm-2 control-label">排列序列<sup class="red">*</sup></label>
		<div class="col-sm-10">
			<input type="number" name="sort" class="form-control" value="0" required>
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label">上传图标<sup class="red">*</sup></label>
		<div class="col-sm-10">
			<input type="file" name="icon" class="form-control" >
		</div>
	</div>


	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">	
			<button type="submit" class="btn btn-success btn-block">添加数据</button>	
		</div>
	</div>

</form>

</div>