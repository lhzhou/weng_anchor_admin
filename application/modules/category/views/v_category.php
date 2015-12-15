<div class="row">
    <div class="col-sm-12">
        <h3 class="page-header">
            添加商品
        </h3>
		<ol class="breadcrumb">
			<li><a href="#">首页</a></li>
			<li><a class="active">分类管理</a></li>
		</ol>
    </div>
</div>

<div class="row">
	<div class="col-sm-4">
    <div class="search_panel">
        
    
		<ul id="tree2">
		<?php foreach ($category as $key => $root): ?>
			<li>
				<a href="#" data-parent="<?php echo $root['id'] ?>">
                    <?php echo $root['name'] ?>
                </a>
                <ul>
                <?php foreach ($root['sub'] as $key_1 => $sub_1): ?>
                    <li>
                        <a href="#" data-parent="<?php echo $sub_1['id'] ?>">
                            <?php echo $sub_1['name'] ?>
                        </a>
                        <ul>
                        <?php foreach ($sub_1['sub'] as $key_2 => $sub_2): ?>
                            <li>
                                <a href="#" data-parent="<?php echo $sub_2['id'] ?>">
                                    <?php echo $sub_2['name'] ?>
                                </a>
                            </li>
                        <?php endforeach ?>
                        </ul>
                    </li>
                <?php endforeach ?>
                </ul>
			</li>
			
		<?php endforeach ?>
		
		</ul>
	</div>
    </div>

	<div class="col-sm-8" id="category_form" >


	</div>

</div>




<style type="text/css" media="screen">

</style>