<div class="form-group">
	<label class="col-sm-2 control-label">设置价格<sup class="red">*</sup></label>
	<div class="col-sm-10">
		<table class="table table-bordered">
			<col class="col-sm-2">
			<col class="col-sm-1">
			<col class="col-sm-2">
			<col class="col-sm-2">
			<thead>
				<tr>
					<th>颜色</th>
					<th>尺码</th>
					<th>价格</th>
					<th>数量</th>
					<th>编号</th>
					<th>条形码</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($color_size as $key => $value) {?>					
				<tr>
					<td><?php echo $value['color'] ?></td>
					<td><?php echo $value['size'] ?></td>
					<td><input class="form-control" type="text" name="" value="" placeholder=""></td>
					<td><input class="form-control product_count" type="text" name="product_count[]" value="0" placeholder=""></td>
					<td><input class="form-control product_num" type="text" name="product_num[]" value="" placeholder=""></td>
					<td><input class="form-control product_num" type="text" name="product_num[]" value="" placeholder=""></td>
				</tr>
				<?php } ?>
			</tbody>
			<tfoot>
				<tr>
					<td colspan="6">总数量：<span class="product_total">0</span></td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>