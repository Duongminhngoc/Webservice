@extends('layouts.home')
@section('content')
<div class="container background1">
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
    <h2>Nhà hàng</h2>
    <div class="row">
    	<div class="col-md-4">
        	<div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                  <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            
                  <div class="item active image-container-home img-thumbnail">
                    <a href="menu.html"><img src="assets/images/NCC1.jpg" class="image-home"></a>
                    <div class="carousel-caption">
                      <h3>Nhà hàng A</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="assets/images/NCC2.jpg" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>Nhà hàng B</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="assets/images/NCC3.jpg" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>Nhà hàng C</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="assets/images/NCC4.jpg" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>Nhà hàng D</h3>
                    </div>
                  </div>
              
                </div>
            </div>
        </div>
        <div class="col-md-4">
        	<div id="myCarousel1" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel1" data-slide-to="1"></li>
                  <li data-target="#myCarousel1" data-slide-to="2"></li>
                  <li data-target="#myCarousel1" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            
                  <div class="item active image-container-home img-thumbnail">
                    <img src="assets/images/NCC5.jpg" class="image-home">
                    <div class="carousel-caption">
                      <h3>Nhà hàng A</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC6.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng B</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC7.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng C</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC8.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng D</h3>
                    </div>
                  </div>
              
                </div>
            </div>
        </div>
        <div class="col-md-4">
        	<div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel2" data-slide-to="1"></li>
                  <li data-target="#myCarousel2" data-slide-to="2"></li>
                  <li data-target="#myCarousel2" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            
                  <div class="item active image-container-home img-thumbnail">
                    <img src="assets/images/NCC8.jpg" class="image-home">
                    <div class="carousel-caption">
                      <h3>Nhà hàng A</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC6.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng B</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC5.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng C</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC2.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng D</h3>
                    </div>
                  </div>
              
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="row">
    	<div class="col-md-4">
        	<div id="myCarousel7" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel7" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel7" data-slide-to="1"></li>
                  <li data-target="#myCarousel7" data-slide-to="2"></li>
                  <li data-target="#myCarousel7" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            
                  <div class="item active image-container-home img-thumbnail">
                    <img src="assets/images/NCC1.jpg" class="image-home">
                    <div class="carousel-caption">
                      <h3>Nhà hàng A</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC2.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng B</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC3.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng C</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC4.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng D</h3>
                    </div>
                  </div>
              
                </div>
            </div>
        </div>
        <div class="col-md-4">
        	<div id="myCarousel8" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel8" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel8" data-slide-to="1"></li>
                  <li data-target="#myCarousel8" data-slide-to="2"></li>
                  <li data-target="#myCarousel8" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            
                  <div class="item active image-container-home img-thumbnail">
                    <img src="assets/images/NCC5.jpg" class="image-home">
                    <div class="carousel-caption">
                      <h3>Nhà hàng A</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC6.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng B</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC7.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng C</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC8.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng D</h3>
                    </div>
                  </div>
              
                </div>
            </div>
        </div>
        <div class="col-md-4">
        	<div id="myCarousel3" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel3" data-slide-to="1"></li>
                  <li data-target="#myCarousel3" data-slide-to="2"></li>
                  <li data-target="#myCarousel3" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            
                  <div class="item active image-container-home img-thumbnail">
                    <img src="assets/images/NCC8.jpg" class="image-home">
                    <div class="carousel-caption">
                      <h3>Nhà hàng A</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC6.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng B</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC5.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng C</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/NCC2.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng D</h3>
                    </div>
                  </div>
              
                </div>
            </div>
        </div>
    </div>
    
     <h2>Món ăn</h2>
    <div class="row">
    	<div class="col-md-4">
        	<div id="myCarousel4" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel4" data-slide-to="1"></li>
                  <li data-target="#myCarousel4" data-slide-to="2"></li>
                  <li data-target="#myCarousel4" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            
                  <div class="item active image-container-home img-thumbnail">
                    <img src="assets/images/m1.jpg" class="image-home">
                    <div class="carousel-caption">
                      <h3>Nhà hàng A</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/m2.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng B</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/m3.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng C</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/m4.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng D</h3>
                    </div>
                  </div>
              
                </div>
            </div>
        </div>
        <div class="col-md-4">
        	<div id="myCarousel5" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel5" data-slide-to="1"></li>
                  <li data-target="#myCarousel5" data-slide-to="2"></li>
                  <li data-target="#myCarousel5" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            
                  <div class="item active image-container-home img-thumbnail">
                    <img src="assets/images/m5.jpg" class="image-home">
                    <div class="carousel-caption">
                      <h3>Nhà hàng A</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/m6.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng B</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/m5.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng C</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/m2.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng D</h3>
                    </div>
                  </div>
              
                </div>
            </div>
        </div>
        <div class="col-md-4">
        	<div id="myCarousel6" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel6" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel6" data-slide-to="1"></li>
                  <li data-target="#myCarousel6" data-slide-to="2"></li>
                  <li data-target="#myCarousel6" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            
                  <div class="item active image-container-home img-thumbnail">
                    <img src="assets/images/m4.jpg" class="image-home">
                    <div class="carousel-caption">
                      <h3>Nhà hàng A</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/m5.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng B</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/m2.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng C</h3>
                    </div>
                  </div>
                  <div class="item image-container-home img-thumbnail">
                    <img src="assets/images/m6.jpg" class="image-home">
                    <div class="carousel-caption">
                       <h3>Nhà hàng D</h3>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>    
</div>
@endsection