<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url() ?>">SB Admin</a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="<?php echo base_url('out') ?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav">
            <li class="active">
                <a href="<?php echo base_url() ?>"><i class="fa fa-fw fa-dashboard"></i> 首页</a>
            </li>

            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#category"> 商品分类 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="category" class="collapse">

                    <li><a href="<?php echo base_url('category/create') ?>">添加商品</a></li>
                    <li><a href="<?php echo base_url('category') ?>">分类管理</a></li>
                </ul>
            </li>

            <!-- 商品管理 -->
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#product"> 商品管理 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="product" class="collapse">
                   	<li><a href="<?php echo site_url('product/index') ?>">商品列表</a></li>
					<li><a href="<?php echo site_url('product/create') ?>">添加商品</a></li>
					<li><a href="<?php echo site_url('product/create') ?>">推荐商品</a></li>
                </ul>
            </li>
            <!-- 商品管理  结束 -->
            <!-- 商品属性 -->
            <li>
                <a href="javascript:;" data-toggle="collapse" data-target="#attr"> 销售属性 <i class="fa fa-fw fa-caret-down"></i></a>
                <ul id="attr" class="collapse">
                    <li><a href="<?php echo site_url('product/attributes/create') ?>">添加属性</a></li>
					<li><a href="<?php echo site_url('product/attributes') ?>">管理属性</a></li>
                </ul>
            </li>
            <!-- 商品属性 结束-->
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>