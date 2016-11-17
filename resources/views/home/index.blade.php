<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="assets/js/jquery-2.1.1.min.js"></script>       
<script src="assets/js/bootstrap.js"></script>
<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="assets/css/common.css" rel="stylesheet" type="text/css" media="all">
            
</head>

<body>
<nav class="navbar navbar-default header">
  <div class="container"><!--container-fluid -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="home.html">Food and Drink</a></li>
       
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" class="login">Login</a></li>
        
      </ul>
      
     <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
      -->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!--body-->
 
<div class="container background">
	<br />
	<div class="row search-city">
    	<div class="dropdown col-md-4" >
			<select id="ChuDe" name="ChuDe"  class="form-control"  >
				<option value="">Hà Nội</option>
				<option value="">Hồ Chí Minh</option>
                <option value="">Đà Nẵng</option>
			</select>	
		</div>
        <div class="dropdown col-md-4" >
			<select id="ChuDe" name="ChuDe"  class="form-control"  >
				<option value="">Tây Hồ</option>
				<option value="">Ba Đình</option>
                <option value="">Hoàn Kiếm</option>
                <option value="">Cầu Giấy</option>
                <option value="">Đống Đa</option>
                <option value="">Hà Đông</option>
                <option value="">Long Biên</option>
			</select>	
		</div>
         <div class="dropdown col-md-1 ">
            <button class=" btn btn-primary" type="submit" onclick="return validate();">Tìm kiếm</button>
         </div>
  	</div>
    <br />
    <div class="row">
    	<div class="col-md-3">
        	<div class="left-section">
            	<ul><h3>Danh sách nhà hàng</h3>
            	<li>
                	<img class="image-adv1" src="assets/images/m1.jpg"/>
                </li>
                <li>
                	<img class="image-adv1" src="assets/images/m2.jpg"/>
                </li>
                <li>
                	<img class="image-adv1" src="assets/images/m3.jpg"/>
                </li>
                 <li>
                	<img class="image-adv1" src="assets/images/m4.jpg"/>
                </li>
                 <li>
                	<img class="image-adv1" src="assets/images/m5.jpg"/>
                </li>
                
               
                
            </ul>
            </div>
        </div>
        <div class="col-md-9 all-right-section">
            <div class="right-section">
            	<div>
                <br />
                    <div class="col-md-2">
                        <a href="menu.html"><img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" ></a>
                    </div>
                    <div class="col-md-6">
                        <h4><i>Nhà hàng A</i></h4>
                        <h4>Món ăn nhanh, Món Tây, Mỳ ý</h4>
                        
                    </div>
                    <div class="icon-promotion col-md-1">
                            <img src="assets/images/NoiBat.png"/>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </h5>
                        <h4>Nhận xét</h4>
                        <a href="menu.html" class="btn btn-info" role="button">Xem Menu</a>
                    </div>
            	</div >
                
                <div class="clear_">
                 <br />
                    <div class="col-md-2">
                        <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                    </div>
                    <div class="col-md-6">
                        <h4><i>Nhà hàng B</i></h4>
                        <h4>Món ăn nhanh, Món Tây, Mỳ ý</h4>
                        
                    </div>
                    <div class="icon-promotion col-md-1">
                            <img src="assets/images/NoiBat.png"/>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </h5>
                        <h4>Nhận xét</h4>
                        <a href="#" class="btn btn-info" role="button">Xem Menu</a>
                    </div>
            	</div>
                <div class="clear_">
                 <br />
                    <div class="col-md-2">
                        <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                    </div>
                    <div class="col-md-6">
                        <h4><i>Nhà hàng C</i></h4>
                        <h4>Món ăn nhanh, Món Tây, Mỳ ý</h4>
                        
                    </div>
                    <div class="icon-promotion col-md-1">
                            <img src="assets/images/NoiBat.png"/>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </h5>
                        <h4>Nhận xét</h4>
                        <a href="#monan" class="btn btn-info" role="button">Xem Menu</a>
                    </div>
            	</div>
                <div class="clear_">
                 <br />
                    <div class="col-md-2">
                        <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                    </div>
                    <div class="col-md-6">
                        <h4><i>Nhà hàng D</i></h4>
                        <h4>Món ăn nhanh, Món Tây, Mỳ ý</h4>
                       
                    </div>
                    <div class="icon-promotion col-md-1">
                            <img src="assets/images/NoiBat.png"/>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </h5>
                        <h4>Nhận xét</h4>
                        <a href="#" class="btn btn-info" role="button">Xem Menu</a>
                    </div>
            	</div>
                <div class="clear_">
                 <br />
                    <div class="col-md-2">
                        <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                    </div>
                    <div class="col-md-6">
                        <h4><i>Nhà hàng E</i></h4>
                        <h4>Món ăn nhanh, Món Tây, Mỳ ý</h4>
                       
                    </div>
                    <div class="icon-promotion col-md-1">
                            <img src="assets/images/NoiBat.png"/>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </h5>
                        <h4>Nhận xét</h4>
                        <a href="#" class="btn btn-info" role="button">Xem Menu</a>
                    </div>
            	</div>
                <div class="clear_">
                 <br />
                    <div class="col-md-2">
                        <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                    </div>
                    <div class="col-md-6">
                        <h4><i>Nhà hàng F</i></h4>
                        <h4>Món ăn nhanh, Món Tây, Mỳ ý</h4>
                        
                    </div>
                    <div class="icon-promotion col-md-1">
                            <img src="assets/images/NoiBat.png"/>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </h5>
                        <h4>Nhận xét</h4>
                        <a href="#monan" class="btn btn-info" role="button">Xem Menu</a>
                    </div>
            	</div><div class="clear_">
                 <br />
                    <div class="col-md-2">
                        <img src="assets/images/404.png" class="img-thumbnail" alt="Cinque Terre" >
                    </div>
                    <div class="col-md-6">
                        <h4><i>Nhà hàng H</i></h4>
                        <h4>Món ăn nhanh, Món Tây, Mỳ ý</h4>
                        
                    </div>
                    <div class="icon-promotion col-md-1">
                            <img src="assets/images/NoiBat.png"/>
                    </div>
                    <div class="col-md-3">
                        <h5>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                            <span>☆</span>
                        </h5>
                        <h4>Nhận xét</h4>
                        <a href="#monan" class="btn btn-info" role="button">Xem Menu</a>
                    </div>
            	</div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>
