<div class="col-sm-12">

  	<ol class="breadcrumb">
	  <li><a href="#">首页</a></li>
	  <li><a href="#">商品管理</a></li>
	  <li class="active">添加商品</li>
	</ol>
	<?php
	    $attributes = array('class' => 'form-horizontal col-sm-offset-1 col-sm-8 ajax_form');
	    echo form_open_multipart(base_url('category/type/add_type'), $attributes);
	?>
			<div class="form-group">
				<label class="col-sm-2 control-label">商品名称<sup class="red">*</sup></label>
				<div class="col-sm-10">
					<input type="text" id="product_name" name="product_name" class="form-control"  placeholder="商品名称" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">商品编号<sup class="red">*</sup></label>
				<div class="col-sm-10">
					<input type="text" id="product_num" name="product_num" class="form-control"  placeholder="20001" required>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label">选择颜色<sup class="red">*</sup></label>
				<div class="col-sm-10">
					<?php foreach ($color as $key => $value): ?>
						<label class="checkbox-inline col-sm-2">
  							<input class="color" type="checkbox" name="color[]"  value="<?php echo $value['name'] ?>"><b class="product_color" style="background:<?php echo $value['color'] ?>"></b><span class="product_color_name"><?php echo $value['name'] ?></span>
  						</label>
					<?php endforeach ?>
					
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">选择颜色<sup class="red">*</sup></label>
				<div class="col-sm-10">
					<?php foreach ($size as $key => $value): ?>
						<label class="checkbox-inline col-sm-2">
  							<input class="size" type="checkbox" name="size[]"  value="<?php echo $value['value'] ?>"><?php echo $value['name'] ?>
  						</label>
					<?php endforeach ?>
					
				</div>
			</div>
			
			<div class="color_upload_file">
				
			</div>
			<div class="set_color_and_size_unit">
				
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">选择颜色<sup class="red">*</sup></label>
				<div class="col-sm-10">
					<textarea id="editor" name="content" style="width:100%;height:700px;visibility:hidden;"><?php echo md5('123456') ?></textarea>
				</div>
			</div>

	</form>

</div>

<script>
</script>

