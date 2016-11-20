@extends('layouts.home')
@section('content')
@include('layouts.search')
</br>
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
                            <table class="table table-bordered fixed" style="background: #cdd">
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
    <script type="text/javascript">
  $(document).ready(function () {
    $('#country').change(function(){
      var country_id = $(this).val();
    //ajax
    $.get('/ajaxRestaurant/'+country_id, function (data) {
            //success data
            console.log(data);
            if($('#restaurant').empty()){
            $.each(data,function(index,restaurantObj){
              $('#restaurant').append('<option value="'+restaurantObj.id+'">'+restaurantObj.name+'</option>');
            });
            }
            else 
              $('#restaurant').append('<option value=""></option>');

  });
  });
  });

</script>
@endsection