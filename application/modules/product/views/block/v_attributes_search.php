<?php
    $attributes = array('class' => 'form-horizontal col-sm-offset-1 col-sm-10 ajax_form');
    echo form_open_multipart(base_url('category/type/add_type'), $attributes);
?>
<div class="search_panel">
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label">商品名称</label>
			<div class="col-sm-8">
				<input type="text" id="product_name" name="product_name" class="form-control"  placeholder="商品名称" required>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-4 control-label">排序方式</label>
			<div class="col-sm-8">
				<select class="form-control" name="">
					<option value="">创建时间</option>
					<option value="">库存最多</option>
					<option value="">库存最少</option>
					<option value="">商品状态</option>
				</select>
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label">商品类型</label>
			<div class="col-sm-8">
				<select class="form-control" name="">
					<option value="">全部(ALL)</option>
					<?php foreach ($type as $key => $value) {?>
						<option value=""><?php echo $value['name'] ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>

	<div class="col-sm-4">
		<div class="form-group">
			<label class="col-sm-4 control-label">商品类别</label>
			<div class="col-sm-8">
				<select class="form-control" name="">
					<option value="">全部(ALL)</option>
					<?php foreach ($category as $key => $value) {?>
						<option value=""><?php echo $value['name'] ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
	</div>

	
</div>
</form>
<div class="clearfix "></div>