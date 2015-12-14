<?php $this->load->view('block/v_attributes_search');?>
<div class="col-sm-offset-1 col-sm-10">
	<table class="table table-bordered">
		<col class="col-sm-1">
		<col class="col-sm-4">
		<col class="col-sm-4">
		<col class="col-sm-1">
		<thead>
			<tr>
				<th>No</th>
				<th>商品分类</th>
				<th>属性名称</th>
				<th>属性状态</th>
				<th>管理</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ($product as $key => $value) {?>					
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $value['category'] ?></td>
				<td><?php echo $value['name'] ?></td>
				<td><?php echo ($value['status'] == 1)? '<span class="label label-success">正常</span>' : '<span class="label label-warning">下架</span>';?></td>
				<td>
					<a class="btn btn-xs btn-primary" href="#">查看</a>
					<a class="btn btn-xs btn-info"href="#">编辑</a>
				</td>
			</tr>
			<?php $i++; ?>
			<?php } ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="7">总数量：<span class="product_total">0</span></td>
			</tr>
		</tfoot>
	</table>
</div>

