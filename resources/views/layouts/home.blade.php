<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/mystyle.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/common.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/hover.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/login.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/signup.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" ></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ URL::asset('js/common.js')}}"></script>
    <script src="{{ URL::asset('js/bars.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.nicescroll.js')}}"></script>
</head>

<body>
<nav class="navbar navbar-default header">
  <div class="container"><!--container-fluid -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
        <li><a href="{{url('/home')}}">Food and Drink</a></li>
       
      </ul>
       <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/login')}}" data-toggle="modal" class="login"><h4>Login</h4></a></li>
        
      </ul>
      
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  @yield('content')
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
