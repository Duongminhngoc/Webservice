<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="assets/js/jquery-2.1.1.min.js"></script>       
<script src="assets/js/bootstrap.js"></script>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/common.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/login.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/signup.css" rel="stylesheet" type="text/css" media="all">
<style>
 div #map-canvas {
	height: 250px;
	margin-top:10px;
	padding: 0px;
}  
</style> 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&language=vi"></script>
<script>
	google.maps.event.addDomListener(window, 'load', initialize);
	function initialize() {
	var mapOptions = {
		scaleControl: true,
		center: new google.maps.LatLng(16.072299, 108.208312),
			zoom: 16
		  };
		
		  var map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);
		
		  var marker = new google.maps.Marker({
			map: map,
			position: map.getCenter()
		  });
		  var infowindow = new google.maps.InfoWindow();
		  infowindow.setContent('<b>Zé Food</b>');
		  google.maps.event.addListener(marker, 'click', function() {
			  infowindow.open(map, marker);
		  });
		}
</script>          
</head>

<body>
<nav class="navbar navbar-default header">
  <div class="container"><!--container-fluid -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="home.html" >Food and Drink</a></li>
        <!--<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        -->
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" class="login"><h4>Login</h4></a></li>
        
      </ul>
     
      
      <script type="text/javascript">
	  	$(document).on('click','a.login', function (){
			$('#myModal').modal('show');
		});
	  	$(document).on('click','a.signup', function (){
			$('#myModal').modal('hide');
			$('#SignUp').modal('show');
		});
	  </script>
      
      
      
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--body-->
 
<div class="container background">
	
        <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog " style="width:60%">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
            <!--form login -->
                 <div class="omb_login ">
                    <h3 class="omb_authTitle">Login or <a href="#" data-toggle="modal" class='signup'>Sign up</a></h3>
                    <div class="row omb_row-sm-offset-3  omb_socialButtons">
                        <div class="col-xs-3 col-sm-3">
                            <a href="#" class="btn btn-lg btn-block omb_btn-facebook ">
                                <i class="fa fa-facebook visible-xs "></i>
                                <span class="hidden-xs ">
                                Facebook</span>
                            </a>
                        </div>
                        <div class="col-xs-3 col-sm-3">
                            <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                                <i class="fa fa-twitter visible-xs"></i>
                                <span class="hidden-xs">Twitter</span>
                            </a>
                        </div>	
                        <div class="col-xs-3 col-sm-3">
                            <a href="#" class="btn btn-lg btn-block omb_btn-google">
                                <i class="fa fa-google-plus visible-xs"></i>
                                <span class="hidden-xs">Google+</span>
                            </a>
                        </div>	
                    </div>
            
                    <div class="row omb_row-sm-offset-31 omb_loginOr">
                        <div class="col-xs-12 col-sm-6">
                            <hr class="omb_hrOr">
                            <span class="omb_spanOr">or</span>
                        </div>
                    </div>
            
                    <div class="row omb_row-sm-offset-31">
                        <div class="col-xs-12 col-sm-6">	
                            <form class="omb_loginForm" action="" autocomplete="off" method="POST">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="username" placeholder="email address">
                                </div>
                                <span class="help-block"></span>
                                                    
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                    <input  type="password" class="form-control" name="password" placeholder="Password">
                                </div>
                                <span class="help-block">Password error</span>
            
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="row omb_row-sm-offset-31">
                        <div class="col-xs-12 col-sm-3">
                            <label class="checkbox">
                                <input type="checkbox" value="remember-me">Remember Me
                            </label>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <p class="omb_forgotPwd">
                                <a href="#">Forgot password?</a>
                            </p>
                        </div>
                    </div>	    	
                </div>
                <!--end form-->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>
      
      <!-- Modal -->
      <div class="modal fade" id="SignUp" role="dialog">
        <div class="modal-dialog " style="width:60%">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
             <!--form sign up-->
                  <form class="form-horizontal" role="form">
                <h2>Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" placeholder="Full Name" class="form-control" autofocus>
                        <span class="help-block">Last Name, First Name, eg.: Smith, Harry</span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="country" class="col-sm-3 control-label">Country</label>
                    <div class="col-sm-9">
                        <select id="country" class="form-control">
                            <option>Afghanistan</option>
                            <option>Bahamas</option>
                            <option>Cambodia</option>
                            <option>Denmark</option>
                            <option>Ecuador</option>
                            <option>Fiji</option>
                            <option>Gabon</option>
                            <option>Haiti</option>
                        </select>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="uncknownRadio" value="Unknown">Unknown
                                </label>
                            </div>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <label class="control-label col-sm-3">Meal Preference</label>
                    <div class="col-sm-9">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="calorieCheckbox" value="Low calorie">Low calorie
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="saltCheckbox" value="Low salt">Low salt
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
      </div>
      
     


	<br />
	<div class="row search-city">
    	<div class="dropdown col-md-4" >
			<select id="ChuDe" name="ChuDe"  class="form-control"  >
				<option value="">Hải Châu</option>
				<option value="">Thanh Khê</option>
                <option value="">Sơn Trà</option>
                <option value="">Ngũ Hành Sơn</option>
				<option value="">Liên Chiểu</option>
                <option value="">Hòa Vang</option>
			</select>	
		</div>
        <div class="dropdown col-md-4" >
			<select id="ChuDe" name="ChuDe"  class="form-control"  >
				<option value="">Nhà hàng A</option>
				<option value="">Nhà hàng B</option>
                <option value="">Nhà hàng C</option>
                <option value="">Nhà hàng D</option>
                <option value="">Nhà hàng E</option>
                <option value="">Nhà hàng F</option>
                <option value="">Nhà hàng H</option>
			</select>	
		</div>
         <div class="dropdown col-md-1 ">
            <button class=" btn btn-primary" type="submit">Tìm kiếm</button>
         </div>
  	</div>
    <br />
    <div class="row">
    	<div class="col-md-9">
            <ul class="nav nav-tabs ">
                <li class="active "><a data-toggle="tab" href="#home"><span style="font-size:20px">Menu</span></a></li>
                <li><a data-toggle="tab" href="#menu1"><span style="font-size:20px">Information</span></a></li>
            </ul>
            <div class="tab-content clear_ background-menu">
                <div id="home" class="tab-pane fade in active">
                <br />
                	<div class="row">
                    	<div class="dropdown col-md-1 ">
                        </div>
                    	<div class="dropdown col-md-9 ">
                            <input class="form-control" id="TimKiem"  name="TimKiem" type="text" size="60px" placeholder="Nhập tên thức ăn ...." onkeyup="findNhaCungCap();">
                            <div id="result" class='col-md-3 col-md-offset-0' style="position: absolute;height: auto; border: 1px white solid;background:white; box-shadow: 0 2px 4px rgba(0,0,0,0.2);" >
                            </div>
                        </div>
                        <div class="dropdown col-md-1 ">
                            <button class=" btn btn-primary" type="submit" onclick="return validate();">Tìm kiếm</button>
                        </div>
                    </div>
                    <br />
                    <br />
                    <div class="row">
                    	 <form class="padding-left">
                            <label class="radio-inline">
                              <input type="radio" name="optradio" checked="checked"><span class="color-food">Food</span>
                            </label>
                            <label class="radio-inline">
                              <input type="radio" name="optradio"><span class="color-drink">Drink</span>
                            </label>
                          </form>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-md-3">
                            <div class="left-section shadow-left">
                               
                                <br />
                                <ul class="list-group ">
                                    <a href="#MonMoi"><li class="list-group-item shadow-left-ul">Món mới</li></a>
                                    <a href="#MyY"><li class="list-group-item shadow-left-ul">Mỳ ý</li></a>
                                    <a href="#GaGion"><li class="list-group-item shadow-left-ul">Gà giòn</li></a>
                                    <a href="#ComNgonGiaDinh"><li class="list-group-item shadow-left-ul">Cơm Ngon Gia đình</li></a>
                                </ul>
                                <div>
                                   <h4 class="padding-bottom border-bottom"> Giá tiền</h4>
                                       <ul class="list-group ">
                                           <li class="list-group-item shadow-left-ul"><input name="radioGroup2" type="radio"> >100.000</li>
                                           <li class="list-group-item shadow-left-ul"><input name="radioGroup2" type="radio"> 70.000-->100.000</li>
                                           <li class="list-group-item shadow-left-ul"><input name="radioGroup2" type="radio"> 40.000-->70.000</li>
                                           <li class="list-group-item shadow-left-ul"><input name="radioGroup2" type="radio"> 20.000-->40.000</li>
                                       </ul>
                            	</div>
                            </div>  
                        </div>
                        <div class="col-md-8 all-right-section">
                            <div class="right-section shadow-right">
                                <div>
                                    <h3 class="border-bottom" ><a class="none_under" name="MonMoi"> Món mới</a></h3>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <a href="detail.html"><img src="assets/images/m1.jpg" class="img-thumbnail"  alt="Cinque Terre" ></a>
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt.</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/m2.jpg" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/m3.jpg" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/m4.jpg" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/m5.jpg" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    
                                </div >
                                <div class="clear_">
                                    <h3 class="border-bottom"><a class="none_under" name="MyY"> Mỳ ý</a></h3>
                                    <div>
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/m6.jpg" class="img-thumbnail"  alt="Cinque Terre"  >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    
                                </div >
                               
                                <div class="clear_">
                                    <h3 class="border-bottom"><a class="none_under" name="GaGion">Gà giòn</a></h3>
                                    <div>
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail"  alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    
                                </div >
                                <div class="clear_">
                                    <h3 class="border-bottom"><a class="none_under" name="ComNgonGiaDinh">Cơm ngon gia đình</a></h3>
                                    <div>
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail"  alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="clear_">
                                        <div class="col-md-3 frame-image">
                                            <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                                        </div>
                                        <div class="col-md-6">
                                            <h4>Cơm Thịt Heo Xốt Nấm + Súp Gà + Nước Ngọt</h4>
                                            <span>50.000đ </span>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>
                                                <a href="#" class="btn btn-danger glyphicon glyphicon-plus" role="button"> </a>
                                            </h4>
                                        </div>
                                    </div> 
                                    <div class="clear_"></div>
                                  
                               </div >
                            </div>
                        </div>
                    </div>
                </div> 
                <div id="menu1" class="tab-pane fade ">
                	<div class="information">
                        <h2> <span style="color:#F00">Zé Food</span></h2>
                        <div class="row">
                            <div class="col-md-3">
                                <h4>+ Địa chỉ :</h4>
                                <span>112/, 71 Trần Cao Vân, Tam Thuận, Q. Thanh Khê, Đà Nẵng, Việt Nam</span>           
                                <h4>+ Ẩm thực :</h4>
                                <span>Món Pháp , Món Chay , Điểm tâm sáng , Đồ uống</span>
                            </div>
                       
                            <div class="col-md-4">
                                <table class="table table-bordered ">
                                    <caption><h3>Giờ giao hàng</h3></caption>
                                    <tbody>
                                        <tr>
                                            <td> Thứ Hai</td>
                                            <td>08:30 - 20:30</td>        
                                        </tr>
                                        <tr>
                                            <td>Thứ Ba </td>
                                            <td>08:30 - 20:30</td>
                                        </tr>
                                        <tr>
                                            <td> Thứ Tư</td>
                                            <td>08:30 - 20:30</td>        
                                        </tr>
                                        <tr>
                                            <td>Thứ Năm </td>
                                            <td>08:30 - 20:30</td>
                                        </tr>
                                        <tr>
                                            <td> Thứ Sáu</td>
                                            <td>08:30 - 20:30</td>        
                                        </tr>
                                        <tr>
                                            <td>Thứ Bảy </td>
                                            <td>08:30 - 20:30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            

                            <div class="col-md-5">
                            	<h3>Bản đồ</h3>
                            	<div  id="map-canvas"></div>
                            </div>
                		</div>
                	</div>
                </div>   
            </div>
    	</div>
        <div class="col-md-3">
        	<div class="frame-left">
            	<div class="frame-cart">
                    <div class="frame-cart-head">
                    	<div class="row">
                        	<div class="col-md-10"><h4>Đơn hàng của bạn</h4>
                            </div>
                        </div>
                        
                    </div>
                    <div class="frame-cart-body row">
                    	<div class="col-md-12">
                            <table class="table table-bordered fixed">
                                <thead>
                                  <tr>
                                    <th>Menu</th>
                                    <th>Giá tiền</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td> Pizza hải sản </td>
                                    <td>100 000đ</td>        
                                  </tr>
                                  <tr>
                                    <td>Pizza Gà Nướng BBQ</td>
                                    <td>100 000đ</td>
                                   </tr>
                                </tbody>
                              </table>
                         </div>
                    </div>
                    <div class="frame-cart-footer row">
                    	<div class="col-md-3">
                    		<button  class="btn btn-primary">Order</button>
                        </div>
                        <div class="col-md-9">
                        	<h4>Tổng tiền : 200.000 VNĐ</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<nav class="navbar navbar-default navbar-bottom footer-border" role="navigation">
  <div class="container">
  	<center>
        <h5>Tư vấn - hỗ trợ</h5>
        <h5>Số điện thoại: 0969304641</h5>
        <h5>Email: kasan@gmail.com</h5>
    </center>
  </div>
</nav>
</body>
</html>
