<div class="col-sm-12">

  	<ol class="breadcrumb">
	  <li><a href="#">首页</a></li>
	  <li><a href="#">商品管理</a></li>
	  <li class="active">添加属性</li>
	</ol>
	<?php
	    $attributes = array('class' => 'form-horizontal col-sm-offset-1 col-sm-8 ajax_form');
	    echo form_open_multipart(base_url('product/attributes/ajaxConfirmAddAttributes'), $attributes);
	?>
		<div class="form-group">
			<label class="col-sm-2 control-label">选择类型<sup class="red">*</sup></label>
			<div class="col-sm-10">
				<select class="form-control" name="category" required>
					<option value="">选择</option>
					<?php foreach ($type as $key => $value) {?>
						<option value=""><?php echo $value['name'] ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		
		<div class="form-group">
			<label class="col-sm-2 control-label">属性名称<sup class="red">*</sup></label>
			<div class="col-sm-10">
				<input type="text" id="name" name="name" class="form-control"  placeholder="" required>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">设置颜色<sup class="red">*</sup></label>
			<label class="checkbox-inline col-sm-2">
				<input type="radio" name="is_color" value="Y" required> 是
			</label>
			<label class="checkbox-inline col-sm-2">
				<input type="radio" name="is_color" value="N" required checked> 否
			</label>

		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">销售属性<sup class="red">*</sup></label>
			<label class="checkbox-inline col-sm-2">
				<input type="radio" name="key_sales" value="Y" required checked> 关键属性
			</label>
			<label class="checkbox-inline col-sm-2">
				<input type="radio" name="key_sales" value="N" required> 销售属性
			</label>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">属性内容<sup class="red">*</sup></label>
			<label class="checkbox-inline col-sm-2">
				<input type="radio" name="select_input" value="Y" required checked> 选择框
			</label>
			<label class="checkbox-inline col-sm-2">
				<input type="radio" name="select_input" value="N" required> 输入框
			</label>
		</div>

		<div class="select_input_group">
			<div class="form-group">
	            <div class="col-sm-offset-2 col-sm-10  input-group">
		            <input type="text" name="key_value[]" class="form-control" placeholder="value">
		            <span class="input-group-btn">
		                <button type="button" class="btn btn-success btn-add">+</button>
		            </span>
	            </div>
			</div>

		</div>

		<div class="form-group">
			<div class="col-sm-2 pull-right">
				<button type="submit" class="btn btn-success btn-block">添加数据</button>	
			</div>
			<div class="col-sm-2 pull-right">
				<button type="reset" class="btn btn-danger btn-block">取消</button>	
			</div>
			
		</div>

	</form>
</div>


<style type="text/css" media="screen">
.form-group .input-group{padding-left: 15px;padding-right: 15px}
</style>