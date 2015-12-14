<div class="row">
	<div class="col-sm-8 col-md-offset-2">
		<h3>商品分类</h3>

		<?php echo form_open_multipart(base_url('shop/account/save'), array('class' => 'form-horizontal '));?>
			<div class="form-group">
		        <label  class="col-sm-2 control-label">商家名称</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" placeholder="商家名称"  name="name" required >
		        </div>
		    </div>

		    <div class="form-group">
		        <label  class="col-sm-2 control-label">登陆密码</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" placeholder="************"   name="password" required>
		        </div>
		    </div>

		    <div class="form-group">
		        <label  class="col-sm-2 control-label">配送电话</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" placeholder="13900000000"   name="tel" required>
		        </div>
		    </div>

		    <div class="form-group">
		        <label  class="col-sm-2 control-label">联系手机</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" placeholder="13900000000"   name="phone" required>
		        </div>
		    </div>
		    <div class="form-group">
		        <label  class="col-sm-2 control-label">联系人</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" placeholder="13900000000"   name="contacts" required>
		        </div>
		    </div>

		    
		    <div class="form-group">
		        <label  class="col-sm-2 control-label">店铺地址</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" placeholder="人民路190号路北"   name="address" required>
		        </div>
		    </div>

		    <div class="form-group">
		    	<div class="col-sm-6">
		    		<label  class="col-sm-4 control-label">开店时间</label>
	                <div class="input-group date form_time col-sm-8" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii" >
	                    <input class="form-control" size="16" name="start_date" type="text" value="" readonly required>
	                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
						<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
	                </div>	
		    	</div>
		        
		        <div class="col-sm-6">
		    		<label  class="col-sm-4 control-label">开店时间</label>
                <div class="input-group date form_time col-sm-8" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                    <input class="form-control" size="16" name="end_date" type="text" value="" readonly required>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>	
		    	</div>
                
          	</div>

		    <div class="form-group">
		        <label  class="col-sm-2 control-label">地图位置</label>
		        <div class="col-sm-10">
		            <input type="text" class="form-control" placeholder="商家名称"  name="coordinates" required>
		            <span class="help-block"><a href="http://api.map.baidu.com/lbsapi/getpoint/index.html" target="new">抓取地图</a></span>
		        </div>
		    </div>

		    <div class="form-group">
		        <label  class="col-sm-2 control-label">封面图片</label>
		        <div class="col-sm-10">
		            <input type="file" class="form-control"  name="photo">
		        </div>
		    </div>

		    <div class="form-group">
		    	<label  class="col-sm-2 control-label">商家介绍</label>
		    	<div class="col-sm-10">
		        	<textarea id="container" name="content" style="width:100%;height:600px;"></textarea>
		        </div>
		    </div>

		    <div class="form-group">
		        <div class="col-sm-12">
		            <button type="submit" class="btn btn-success btn-block">创建商家</button>
		        </div>
		    </div>
		</form>
	</div>
</div><!-- end row -->
<script type="text/javascript">
  $('.form_time').datetimepicker({
        language:  'zh-CN',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
    KindEditor.ready(function(K) {
                window.editor = K.create('#container');
        });
</script>            
