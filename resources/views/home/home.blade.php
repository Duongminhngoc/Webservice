@extends('layouts.home')
@section('content')
<!-- <div class="container background1">
  <br /> -->
@include('layouts.search')
    <br />
    <h2>Nhà hàng</h2>
    <div class="row">
    	<div class="col-md-4">
        	<div id="myCarousel0" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel0" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel0" data-slide-to="1"></li>
                  <li data-target="#myCarousel0" data-slide-to="2"></li>
                  <li data-target="#myCarousel0" data-slide-to="3"></li>
                </ol>
            
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
            
                  <div class="item active image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[0]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                      <h3>{{$restaurants[0]['name']}}</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[1]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$restaurants[1]['name']}}</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[2]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$restaurants[2]['name']}}</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[3]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$restaurants[3]['name']}}</h3>
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
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[4]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                      <h3>{{$restaurants[4]['name']}}</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[5]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$restaurants[5]['name']}}</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[6]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$restaurants[6]['name']}}</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[7]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$restaurants[7]['name']}}</h3>
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
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[8]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                      <h3>{{$restaurants[8]['name']}}</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[9]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$restaurants[9]['name']}}</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[10]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$restaurants[10]['name']}}</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$restaurants[11]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$restaurants[11]['name']}}</h3>
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
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[0]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                      <h3>{{$products[0]->name}}</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[1]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$products[1]->name}}</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[2]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$products[2]->name}}</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[3]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$products[3]->name}}</h3>
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
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[4]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                      <h3>N{{$products[4]->name}}</h3>                   
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[5]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$products[5]->name}}</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[6]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$products[6]->name}}</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[7]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$products[7]->name}}</h3>
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
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[8]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                      <h3>{{$products[8]->name}}</h3>
                    </div>
                  </div>
            
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[9]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$products[9]->name}}</h3>
                    </div>
                  </div>
                
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[10]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$products[10]->name}}</h3>
                    </div>
                  </div>
                  <div class="item image-container-home img-thumbnail">
                    <a href="menu.html"><img src="{{url('/')}}/assets/images/{{$products[11]['image']}}" class="image-home"></a>
                    <div class="carousel-caption">
                       <h3>{{$products[11]->name}}</h3>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>    
<!-- </div> -->
<script type="text/javascript">
    $('#country').change(function(){
      var country_id = $(this).val();

    //ajax
    $.get('/ajaxRestaurant/'+country_id, function (data) {
            //success data
            //console.log(data);
            if($('#restaurant').empty()){
            $.each(data,function(index,restaurantObj){
              $('#restaurant').append('<option value="'+restaurantObj.id+'">'+restaurantObj.name+'</option>');
            });
            }
            else 
              $('#restaurant').append('<option value=""></option>');

  });
  });

</script>
@endsection