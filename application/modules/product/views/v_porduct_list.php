<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">
            添加商品
        </h3>
		<ol class="breadcrumb">
			<li><a href="#">首页</a></li>
			<li><a href="#">商品管理</a></li>
			<li class="active">添加商品</li>
		</ol>
    </div>
</div>

<?php $this->load->view('block/v_porduct_search');?>

<div class="row">
	<div class="col-sm-12">
		<table class="table table-bordered">
			<col class="col-sm-1">
			<col class="col-sm-2">
			<col class="col-sm-2">
			<col class="col-sm-2">
			<thead>
				<tr>
					<th>No</th>
					<th>商品名称</th>
					<th>商品类型</th>
					<th>商品类别</th>
					<th>剩余库存</th>
					<th>商品状态</th>
					<th>管理</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($product as $key => $value) {?>					
				<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $value['name'] ?></td>
					<td><?php echo $value['type'] ?></td>
					<td><?php echo $value['category'] ?></td>
					<td><?php echo $value['last'] ?></td>
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
					<td colspan="7">翻页</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>