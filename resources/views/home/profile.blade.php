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
            
</head>

<body>
<nav class="navbar navbar-default header">
  <div class="container"><!--container-fluid -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">   
        <li><a href="home.html" >Food and Drink</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span style="font-size:16px">Account</span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="profile.html"><h4>Profile</h4></a></li>
            <li><a href="#">...</a></li>
            <li><a href="#">...</a></li>
          </ul>
        </li>
        
      </ul>
     
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--body-->
 
<div class="container background">
	<br />
	<div class="row">
    	<div class="col-md-3">
        	<img src="assets/images/404.png" class="image-profile img-thumbnail"/>
        </div>
        <div class="col-md-4">
        	<table class="table table-striped">
                  <tr>
                    <td>Họ tên :</td>
                    <td>Lê Hùng</td>
                   
                  </tr>
                  <tr>
                    <td>Địa chỉ</td>
                    <td> .... </td>
                   
                  </tr>
                  <tr>
                    <td>Ngày sinh :</td>
                    <td>20/11/1994</td>
                  </tr>
                   <tr>
                    <td>Giới tính :</td>
                    <td>Nam</td>
                  </tr>
                   <tr>
                    <td>Số điện thoại :</td>
                    <td>0969304641</td>
                  </tr>
                  <tr>
                    <td>Email :</td>
                    <td>Hung@gmail.com</td>
                  </tr>
          </table>
        </div>
        <div class="col-md-3">
        	<h3>Đổi mật khẩu</h3>
            <button class="btn btn-primary">Đồi mật khẩu</button>
        </div>
    </div>
    <br />
    <script>
		$(document).ready(function(){
			$("table#histoty").hide();
			$("button#History").click(function(){
				$("table#histoty").toggle();
			});
		});
	</script>
    <div class="row">
    	<div class="col-md-3">
        	<button id="History" class="btn btn-primary">Lịch sử mua </button>
        </div>
    </div>
    <div class="row">
    	<div class="col-md-8">
        	<table id="histoty" class="table table-striped">
                <thead>
                  <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>John</td>
                    <td>Doe</td>
                    <td>john@example.com</td>
                  </tr>
                  <tr>
                    <td>Mary</td>
                    <td>Moe</td>
                    <td>mary@example.com</td>
                  </tr>
                  <tr>
                    <td>July</td>
                    <td>Dooley</td>
                    <td>july@example.com</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
    <br />
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
