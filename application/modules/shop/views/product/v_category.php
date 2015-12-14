<div class="row">
	<div class="col-sm-12">
		<h3>商品分类</h3>
		<?php echo form_open_multipart(base_url('shop/product/category/category_action'), array('class' => 'form-horizontal ')); ?>
			<div class="form-group">
				<label class="col-sm-2 control-label">第一分类</label>
				<div class="col-sm-3">
					<select class="form-control" id="category_first"></select>
				</div>
				<div class="col-sm-3">
					<input type="text" name="name" class="form-control" id="first_input" required>
					<input type="hidden" name="id" class="form-control" id="first_id">
				</div>
				<div class="col-sm-4">
					<button  type="submit" name="action" value="add" class="btn btn-primary ">添加</button>
					<button  type="submit" name="action" value="update" class="btn btn-warning">更新</button>
					<button  type="submit" name="action" value="delete" class="btn btn-danger">删除</button>
				</div>
			</div>
		</form>
		<?php echo form_open_multipart(base_url('shop/product/category/category_action'), array('class' => 'form-horizontal ')); ?>
			<div class="form-group">
				<label class="col-sm-2 control-label">第二分类</label>
				<div class="col-sm-3">
					<select class="form-control" id="category_sec"></select>
				</div>
				<div class="col-sm-3">
					<input type="text"   name="name" class="form-control" id="sec_name" required>
					<input type="hidden" name="id" class="form-control" id="sec_id" required>
					<input type="hidden" name="pid" class="form-control" id="sec_pid" required>

				</div>
				<div class="col-sm-4">
					<button  type="submit" name="action" value="add" class="sec_btn btn btn-primary">添加</button>
					<button  type="submit" name="action" value="update"  class="sec_btn btn btn-warning">更新</button>
					<button  type="submit" name="action" value="delete" class="sec_btn btn btn-danger">删除</button>
				</div>
			</div>
		</form>
		<?php echo form_open_multipart(base_url('shop/product/category/category_action'), array('class' => 'form-horizontal ')); ?>
			<div class="form-group">
				<label class="col-sm-2 control-label">第三分类</label>
				<div class="col-sm-3">
					<select class="form-control" id="category_third"></select>
				</div>
				<div class="col-sm-3">
					<input type="text"   name="name" class="form-control" id="third_name" required>
					<input type="hidden" name="id" class="form-control" id="third_id" required>
					<input type="hidden" name="pid" class="form-control" id="third_pid" required>

				</div>
				<div class="col-sm-4">
					<button  type="submit" name="action" value="add" class="third_btn btn btn-primary">添加</button>
					<button  type="submit" name="action" value="update"  class="third_btn btn btn-warning">更新</button>
					<button  type="submit" name="action" value="delete" class="third_btn btn btn-danger">删除</button>				</div>
			</div>
		</form>
	</div>
	<div class="col-sm-12">
		<h3>包装规格</h3>
		<?php echo form_open_multipart(base_url('shop/product/category/pack_unit_action'), array('class' => 'form-horizontal ')); ?>
			<div class="form-group">
				<label class="col-sm-2 control-label">包装单位</label>
				<div class="col-sm-3">
					<select class="form-control" id="select_pack_unit"></select>
				</div>
				<div class="col-sm-3">
					<input type="text"   name="name" class="form-control" id="pack_unit_name" required>
					<input type="hidden" name="id" class="form-control" id="pack_unit_id" required>

				</div>
				<div class="col-sm-4">
					<button  type="submit" name="action" value="add" class="btn btn-primary">添加</button>
					<button  type="submit" name="action" value="update"  class="btn btn-warning">更新</button>
					<button  type="submit" name="action" value="delete" class="btn btn-danger">删除</button>				</div>
			</div>
		</form>
	</div>

	<div class="col-sm-12">
		<h3>包装单位</h3>
		<?php echo form_open_multipart(base_url('shop/product/category/product_unit_action'), array('class' => 'form-horizontal ')); ?>
			<div class="form-group">
				<label class="col-sm-2 control-label">商品单位</label>
				<div class="col-sm-3">
					<select class="form-control" id="select_product_unit"></select>
				</div>
				<div class="col-sm-3">
					<input type="text"   name="name" class="form-control" id="product_unit_name" value="" required>
					<input type="hidden" name="id" class="form-control" id="product_unit_id" value="" required>

				</div>
				<div class="col-sm-4">
					<button  type="submit" name="action" value="add" class="btn btn-primary">添加</button>
					<button  type="submit" name="action" value="update"  class="btn btn-warning">更新</button>
					<button  type="submit" name="action" value="delete" class="btn btn-danger">删除</button>				</div>
			</div>
		</form>
	</div>

</div><!-- end row -->



<script id="category_first-template" type="text/x-handlebars-template">
    <option value="">第一分类</option>
    {{#each first}}
    <option value="{{id}}">{{name}}</option>
	{{/each}}
</script>

<script id="category_sec-template" type="text/x-handlebars-template">
    <option value="">第二分类</option>
    {{#each this}}
    <option value="{{id}}">{{name}}</option>
	{{/each}}
</script>

<script id="category_third-template" type="text/x-handlebars-template">
    <option value="">第三分类</option>
    {{#each this}}
    <option value="{{id}}">{{name}}</option>
	{{/each}}
</script>

<script id="select-pack-unit-template" type="text/x-handlebars-template">
    <option value="">请选择</option>
    {{#each this}}
    <option value="{{id}}">{{name}}</option>
	{{/each}}
</script>

<script id="select-product-unit-template" type="text/x-handlebars-template">
    <option value="">请选择</option>
    {{#each this}}
    <option value="{{id}}">{{name}}</option>
	{{/each}}
</script>

<script type="text/javascript">
	JsonCategory = <?php echo $category_json.PHP_EOL;  ?>;
	JosnProductPackageUnit = <?php echo $product_pack_unit_json.PHP_EOL ?>; 
	JosnProductUnit = <?php echo $product_unit_json.PHP_EOL ?>;


</script>
