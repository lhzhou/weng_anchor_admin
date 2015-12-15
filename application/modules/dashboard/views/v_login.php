    <div class="loginmodal-container" style="margin-top: 100px;">
		<h1>Weng Anchor</h1>
        <h3>Admin Panel</h3><br>
        <?php
            $attributes = array('class' => 'form-horizontal row ajax_form');
            echo form_open_multipart(base_url('login'), $attributes);
        ?>
        <div class="form-group">
            <label class="col-sm-3 control-label">Account<sup class="red">*</sup></label>
            <div class="col-sm-9">
                <input type="text" name="username" class="form-control"  placeholder="Username">
            </div>
        </div>
        
        <div class="form-group">
            <label class="col-sm-3 control-label">Password<sup class="red">*</sup></label>
            <div class="col-sm-9">
                <input type="password" name="password" class="form-control"  placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <div class=" col-sm-offset-3 col-sm-9">
                <label class="radio-inline">
                    <input type="radio" name="lang"  value="1" checked=""> 中文
                </label>

                <label class="radio-inline">
                    <input type="radio" name="lang"  value="2"> English
                </label>
            </div>

        </div>

        <input type="submit" name="login" class="login loginmodal-submit" value="Login">

			
		</form>
	</div>


<style type="text/css" media="screen">
@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {

  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container h3 {
  text-align: center;
  font-size: 1.4em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}




.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}	
#wrapper{padding-left: 0px;}
</style>