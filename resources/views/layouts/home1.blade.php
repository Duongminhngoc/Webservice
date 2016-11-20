<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food And Drink</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css')}}">
<!--     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700"> -->
    <!-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}"> -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/signup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.css')}}">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css')}}">
    <script src="{{ URL::asset('js/jquery-2.1.1.min.js')}}" ></script>
    <script src="{{ URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{ URL::asset('js/jquery-ui.min.js')}}" ></script>
    <script src="{{ URL::asset('js/bootbox.js')}}"></script>
    <script src="{{ URL::asset('js/ckeditor.js')}}"></script>
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
        
        <li><a href="{{url('/home')}}" >Food and Drink</a></li>
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
</br>
    @yield('content')
</br>
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
@include('layouts.modal')
</body>
</html>

