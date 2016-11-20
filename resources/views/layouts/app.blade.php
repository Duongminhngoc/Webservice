<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Food And Drink</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.min.css')}}">
    <script src="{{ URL::asset('js/jquery-2.1.1.min.js')}}" ></script>
    <script src="{{ URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{ URL::asset('js/jquery-ui.min.js')}}" ></script>
    <script src="{{ URL::asset('js/bootbox.js')}}"></script>
    <script src="{{ URL::asset('js/ckeditor.js')}}"></script>
    
</head>
<body id="app-layout" style='background-color:#{{$background or "fff"}}'>
    <nav class="navbar navbar-default navbar-static-top" style='background-color:#{{$nav or "62b896"}}'>
        <div class="container">
            <div class="navbar-header">
                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <!-- <h3 > -->
                    <a class="navbar-brand" href="{{ url('/home') }}" style="color:#009688">
                        <strong>FoodAndDrink.vn</strong>
                    </a>
                <!-- </h3> -->
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <strong>{{ Auth::user()->name }} <span class="caret"></span></strong>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-btn fa-product-hunt"></i>Profile</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    @if (!Auth::guest())
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
      <div class="modal-dialog" role="document" style="width: 40%;">
              <div class="panel panel-info">
                <div class="panel-heading">
                  <h3 class="panel-title">{{Auth::user()->name}}</h3>
                </div>
                <div class="panel-body" style="padding: 15px;">
                  <div class="row">
                    <div> 
                      <table class="table table-user-information" style="margin-bottom: -5px;">
                        <tbody>
                          <tr>
                            <td>Email:</td>
                            <td>{{Auth::user()->email}}</td>
                          </tr>
                          <tr>
                            <td>Date of Birth:</td>
                            <td>{{Auth::user()->birth_day}}</td>
                          </tr>
                          <tr>
                            <td>Gender:</td>
                            <td>@if(Auth::user()->gender==0)Nam @else Nữ @endif</td>
                          </tr>
                          <tr>
                            <td>Address:</td>
                            <td>{{Auth::user()->address}}</td>
                          </tr>
                          <tr>
                            <td>City:</td>
                            <td>{{Auth::user()->city}}</td>
                          </tr>
                          <tr>
                            <td>Phone Number:</td>
                            <td>{{Auth::user()->phone_number}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                     <div class="panel-footer">
                            <a><i class="glyphicon "></i></a>
                            <span class="btn-justified">
                                <a href="{{route('user.edit',Auth::user()->id)}}" ><button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-edit"></span> Edit</button></a>
                                <a><button class="btn btn-danger" type="submit"  data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button></a>

                            </span>
                        </div>
                
              </div>
            </div>
          </div>
    @endif
        @if(!Auth::guest())
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="{{url('/home')}}"><span class="glyphicon glyphicon-home">
                            </span>Visit website</a>
                        </h4>
                    </div>

                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user">
                            </span>User Management</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-th-list">
                                        </span>
                                        <a href="{{route('user.index')}}">List User</a>
                                        <!-- <span class="label label-success">$ 320</span> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus">
                                        </span>
                                        <a href="{{route('user.create')}}">Create User</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- if admin thi la quan ly Danh sach user con role custommer thi quan ly Account -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-lock">
                            </span>Restaurant Management</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-th-list">
                                        </span>
                                        <a href="{{route('restaurant.index')}}">List Restaurant</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus">
                                        </span>
                                        <a href="{{route('restaurant.create')}}">Create New Restaurant</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-book">
                            </span>Product Management</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-th-list">
                                        </span>
                                        <a href="{{route('product.index')}}">List Product</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus">
                                        </span>
                                        <a href="{{route('product.create')}}">Create Product</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-bell">
                            </span>Shipment Management</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-th-list">
                                        </span>
                                        <a href="{{route('shipment.index')}}">List Shipment</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-plus">
                                        </span>
                                        <a href="{{route('shipment.create')}}">Create Shipment</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="{{route('order.index')}}"><span class="glyphicon glyphicon-menu-hamburger">
                            </span>Oder Management</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="{{route('orderItem.index')}}"><span class="glyphicon glyphicon-cog">
                            </span>Order Item Management</a>
                        </h4>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a href="{{route('shipper.index')}}"><span class="glyphicon glyphicon-pencil">
                            </span>Shipper Management</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-sm-9 col-md-9">
            @yield('content')
        </div>
        @else
        <div class="col-sm-12 col-md-12">
            @yield('content')
        </div>
        @endif
    

</body>
</html>


