	<div class="form-group">
		<label class="col-sm-2 control-label">选择颜色<sup class="red">*</sup></label>
		<div class="col-sm-10">
			<table class="table table-bordered">
				<col class="col-sm-2">
				<thead>
					<tr>
						<th>颜色分类</th>
						<th>图片</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($color as $key => $value) {?>					
					<tr>
						<td><?php echo $value['name'] ?></td>
						<td><input class="form-control" type="file" name="" value="" placeholder=""></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

	</div>