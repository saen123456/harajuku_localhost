
@include('templates.config')
@include('templates.header')

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Safira - shop list</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!--slick min css-->
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{asset('assets/css/font.awesome.css')}}">
    <!--ionicons css-->
    <link rel="stylesheet" href="{{asset('assets/css/ionicons.min.css')}}">
    <!--linearicons css-->
    <link rel="stylesheet" href="{{asset('assets/css/linearicons.css')}}">
    <!--animate css-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{asset('assets/css/jquery-ui.min.css')}}">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{asset('assets/css/slinky.menu.css')}}">
    <!--plugins css-->
    <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!--modernizr min js here-->
    <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
    <style>
        .avatar-upload {
            position: relative;
            max-width: 205px;
            margin: 50px auto;
        }

        .avatar-upload .avatar-edit {
            position: absolute;
            right: 12px;
            z-index: 1;
            padding: 4px;
            top: 70%;
        }

        .avatar-upload .avatar-edit input {
            display: none;
        }

        .avatar-upload .avatar-edit input+label {
            display: inline-block;
            width: 34px;
            height: 34px;
            margin-bottom: 0;
            border-radius: 100%;
            background: #FFFFFF;
            border: 1px solid transparent;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
            cursor: pointer;
            font-weight: normal;
            transition: all 0.2s ease-in-out;
        }

        .avatar-upload .avatar-edit input+label:hover {
            background: #f1f1f1;
            border-color: #d6d6d6;
        }

        .avatar-upload .avatar-edit input+label:after {
            content: "\f040";
            font-family: 'FontAwesome';
            color: #757575;
            position: absolute;
            top: 10px;
            left: 0;
            right: 0;
            text-align: center;
            margin: auto;
        }

        .avatar-upload .avatar-preview {
            width: 192px;
            height: 192px;
            position: relative;
            border-radius: 100%;
            border: 6px solid #F8F8F8;
            box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        }

        .avatar-upload .avatar-preview>div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
</head>

<body>

    <!--header area start-->


    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area" style="height:200px; background-image:url(https://www.ta-kemore.com/demo/takemore/img-take/bg.jpg); color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="breadcrumb_content">
                        <h3>ติดตามสถานะ</h3>
                        <ul>
                            <li><a href="{{url('/index')}}">home</a></li>
                            <li>ติดตามสถานะ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-30">
        <div class="container">


            <div class="row">


                <div class="col-lg-3 col-md-12 col-xs-12">
                    <!--sidebar widget start-->

                    <div class="filter-lg hidden-xs">
                        <aside class="sidebar_widget_track">

                            <div class="box_style_1">
                                <ul class="track_nav nav" id="cat_nav" role="tablist" style="display: block;">
                                    <li><a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">ติดตามการสั่งซื้อ</a></li>
                                    <li><a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">ประวัติการสั่งซื้อ</a>
                                    <li><a data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">ตั้งค่าบัญชีผู้ใช้</a></li>
                                    <!-- <li><a data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">เปลี่ยนรหัสผ่าน</a></li> -->
                                    <li><a data-toggle="tab" href="#credit" role="tab" aria-controls="credit" aria-selected="false">วอลเล็ต</a></li>
                                    <li><a data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">ที่อยู่และการจัดส่ง</a></li>
                                    <!-- <li><a data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">วอลเล็ต</a></li> -->
                                    <li><a data-toggle="tab" href="#coupon" role="tab" aria-controls="coupon" aria-selected="false">คูปองส่วนลด</a></li>
                                    <li><a href="{{('/index')}}" aria-selected="false">ออกจากระบบ</a></li>
                                    <!-- <button href="#" class="btn btn-success" data-toggle="modal" data-target="#modal_box3" title="" data-original-title="quick view" style="font-size: 13px;"><i class="fas fa-plus"></i>เพิ่มที่อยู่</button> -->
                                </ul>
                            </div><!-- End box_style_1 -->

                        </aside>
                    </div>
                    <div class="box_style_1 hidden-lg  mt-xs-2">
                        <ul id="cat_nav">
                            <li><a href="#" onclick="myFunction()">เมนู จัดการอื่นๆ <img class="pull-right" src="{{asset('img-take/filter.PNG')}}" width="20" alt=""> </a></li>

                        </ul>
                    </div><!-- End box_style_1 -->

                    <div class="filter-xs " id="filter-xs" style="display: none; ">
                        <aside class="sidebar_widget_track">
                            <div class="box_style_1">
                                <ul class="track_nav nav" id="cat_nav" role="tablist" style="display: block;">
                                    <li><a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">ติดตามการสั่งซื้อ</a></li>
                                    <li><a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">ประวัติการสั่งซื้อ</a>
                                    <li><a data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">ตั้งค่าบัญชีผู้ใช้</a></li>
                                    <!-- <li><a data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">เปลี่ยนรหัสผ่าน</a></li> -->
                                    <li><a data-toggle="tab" href="#credit" role="tab" aria-controls="credit" aria-selected="false">วอลเล็ต</a></li>
                                    <li><a data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">ที่อยู่และการจัดส่ง</a></li>
                                    <!-- <li><a data-toggle="tab" href="#address" role="tab" aria-controls="address" aria-selected="false">วอลเล็ต</a></li> -->
                                    <li><a data-toggle="tab" href="#coupon" role="tab" aria-controls="coupon" aria-selected="false">คูปองส่วนลด</a></li>
                                    <li><a href="{{url('/index')}}" aria-selected="false">ออกจากระบบ</a></li>
                                    <!-- <button href="#" class="btn btn-success" data-toggle="modal" data-target="#modal_box3" title="" data-original-title="quick view" style="font-size: 13px;"><i class="fas fa-plus"></i>เพิ่มที่อยู่</button> -->
                                </ul>
                            </div><!-- End box_style_1 -->
                        </aside>
                    </div>

                    <!--sidebar widget end-->
                </div>


                <!--Table Tracking -->


                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <div class="head_tf">
                                <p>ติดตามการสั่งซื้อ</p>
                            </div>

                            <div class="product_tracking_inner">
                                <div class="product_tracking_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#Delivery" role="tab" aria-controls="Delivery" aria-selected="false">Food</a>
                                        </li>

                                        <li>
                                            <a class="" data-toggle="tab" href="#Shipping" role="tab" aria-controls="Shipping" aria-selected="false">Shopping</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" style="padding-top: 10px; padding-bottom: 10px; margin: 0px; background: transparent;">
                                    <div class="tab-pane fade show active" id="Delivery" role="tabpanel">
                                        <div class="tr_table" style="border: none;">
                                            <div class="table_tracking">
                                                <div class="row track_head">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-3 track_order">
                                                            <h5>Order ID</h5>#987654
                                                        </div>
                                                        <div class="col-lg-4 col-xs-3 ">

                                                        </div>
                                                        <div class="col-lg-4 col-xs-3 ">

                                                        </div>
                                                        <div class="col-lg-2 col-xs-3 ">
                                                            <h4 style="font-size: 24px;">20นาที</h4>
                                                        </div>


                                                    </div>
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-3 track_order">
                                                            <!-- <h5>Order ID</h5>#987654 -->
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 track_date">
                                                            <h5>Date Purchased</h5>Dec 1, 2017 13:00
                                                        </div>
                                                        <div class="col-lg-1 hidden-xs track_icon"><i class="fas fa-angle-right fa-lg"></i></div>
                                                        <div class="col-lg-3 col-xs-3 track_deli">
                                                            <h5>Estimated Delivery</h5>Dec 1, 2017 13:20
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 ">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <ul id="progressbar" class="">
                                                            <!-- <li class="active" id="step1">
                                                                <div class="d-md-block">ยืนยันออเดอร์</div>
                                                            </li> -->
                                                            <li class="" id="step2">
                                                                <div class="d-md-block">กำลังเตรียมอาหาร</div>
                                                            </li>
                                                            <li class="" id="step3">
                                                                <div class="d-md-block">ไรเดอร์กำลังไปรับอาหาร</div>
                                                            </li>
                                                            <li class="" id="step4">
                                                                <div class="d-md-block">กำลังจัดส่ง</div>
                                                            </li>
                                                            <li class="" id="step5">
                                                                <div class="d-md-block">จัดส่งเสร็จสมบูรณ์</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="row track_bottom">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-6 tracking_thumb"><a href="#"><img src="{{asset('img-take/bonchon.jpg')}}" alt="" width="50" height="50"></a>
                                                        </div>
                                                        <div class="col-lg-5 col-xs-6 tracking_name">
                                                             <div class="nameorder">
                                                                <a href="">ปีกไก่ 6 ชิ้น</a>
                                                                <p> x 1</p>
                                                            </div>

                                                            <h5><a class="nameshop" href="">Bonchon</a></h5>
                                                        </div>

 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table_tracking">
                                                <div class="row track_head">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-3 track_order">
                                                            <!-- <h5>Order ID</h5>#987654 -->
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 track_date">
                                                            <h5>Date Purchased</h5>Dec 1, 2017 13:00
                                                        </div>
                                                        <div class="col-lg-1 hidden-xs track_icon"><i class="fas fa-angle-right fa-lg"></i></div>
                                                        <div class="col-lg-3 col-xs-3 track_deli">
                                                            <h5>Estimated Delivery</h5>Dec 1, 2017 13:20
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3"></div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <ul id="progressbar" class="">
                                                            <!-- <li class="active" id="step1">
                                                                <div class="d-md-block">ยืนยันออเดอร์</div>
                                                            </li> -->
                                                            <li class="active" id="step2">
                                                                <div class="d-md-block">กำลังเตรียมอาหาร</div>
                                                            </li>
                                                            <li class="" id="step3">
                                                                <div class="d-md-block">ไรเดอร์กำลังไปรับอาหาร</div>
                                                            </li>
                                                            <li class="" id="step4">
                                                                <div class="d-md-block">กำลังจัดส่ง</div>
                                                            </li>
                                                            <li class="" id="step5">
                                                                <div class="d-md-block">จัดส่งเสร็จสมบูรณ์</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="row track_bottom">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-6 tracking_thumb"><a href="#"><img src="{{asset('img-take/หอยทอด.jpeg')}}" alt="" width="50" height="50"></a>
                                                        </div>
                                                        <div class="col-lg-5 col-xs-6 tracking_name">
                                                        <div class="nameorder">
                                                            <a class="" href="">หอยทอด</a>
                                                            <p> x 1</p>
                                                        </div>
                                                         
                                                            <h5><a class="nameshop" href="">Maesriruen</a></h5>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table_tracking">
                                                <div class="row track_head">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-3 track_order">
                                                            <!-- <h5>Order ID</h5>#987654 -->
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 track_date">
                                                            <h5>Date Purchased</h5>Dec 1, 2017 13:00
                                                        </div>
                                                        <div class="col-lg-1 hidden-xs track_icon"><i class="fas fa-angle-right fa-lg"></i></div>
                                                        <div class="col-lg-3 col-xs-3 track_deli">
                                                            <h5>Estimated Delivery</h5>Dec 1, 2017 13:20
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3"></div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <ul id="progressbar" class="">
                                                            <!-- <li class="active" id="step1">
                                                                <div class="d-md-block">ยืนยันออเดอร์</div>
                                                            </li> -->
                                                            <li class="" id="step2">
                                                                <div class="d-md-block">กำลังเตรียมอาหาร</div>
                                                            </li>
                                                            <li class="" id="step3">
                                                                <div class="d-md-block">ไรเดอร์กำลังไปรับอาหาร</div>
                                                            </li>
                                                            <li class="" id="step4">
                                                                <div class="d-md-block">กำลังจัดส่ง</div>
                                                            </li>
                                                            <li class="" id="step5">
                                                                <div class="d-md-block">จัดส่งเสร็จสมบูรณ์</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="row track_bottom">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-6 tracking_thumb"><a href="#"><img src="{{asset('img-take/641742.jpg')}}" alt="" width="50" height="50"></a>
                                                        </div>
                                                        <div class="col-lg-5 col-xs-6 tracking_name">
                                                        <div class="nameorder">
                                                            <a  href="">ก๋วยเตี๋ยวเรือ</a>
                                                            <p> x 1</p>
                                                        </div>
                                                          
                                                            <h5><a class="nameshop" href="">ทองสมิทธ์</a></h5>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <hr style="border: 2px solid #D01F44;">

                                            <div class="table_tracking">
                                                <div class="row track_head">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-3 track_order">
                                                            <h5>Order ID</h5>#987654
                                                        </div>
                                                        <div class="col-lg-4 col-xs-3 ">

                                                        </div>
                                                        <div class="col-lg-4 col-xs-3 ">

                                                        </div>
                                                        <div class="col-lg-2 col-xs-3 ">
                                                            <h4 style="font-size: 24px;">20นาที</h4>
                                                        </div>


                                                    </div>
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-3 track_order">
                                                            <!-- <h5>Order ID</h5>#987654 -->
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 track_date">
                                                            <h5>Date Purchased</h5>Dec 1, 2017 13:00
                                                        </div>
                                                        <div class="col-lg-1 hidden-xs track_icon"><i class="fas fa-angle-right fa-lg"></i></div>
                                                        <div class="col-lg-3 col-xs-3 track_deli">
                                                            <h5>Estimated Delivery</h5>Dec 1, 2017 13:20
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 ">

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <ul id="progressbar" class="">
                                                            <!-- <li class="active" id="step1">
                                                                <div class="d-md-block">ยืนยันออเดอร์</div>
                                                            </li> -->
                                                            <li class="" id="step2">
                                                                <div class="d-md-block">กำลังเตรียมอาหาร</div>
                                                            </li>
                                                            <li class="" id="step3">
                                                                <div class="d-md-block">ไรเดอร์กำลังไปรับอาหาร</div>
                                                            </li>
                                                            <li class="" id="step4">
                                                                <div class="d-md-block">กำลังจัดส่ง</div>
                                                            </li>
                                                            <li class="" id="step5">
                                                                <div class="d-md-block">จัดส่งเสร็จสมบูรณ์</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="row track_bottom">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-6 tracking_thumb"><a href="#"><img src="{{asset('img-take/ramen.jpg')}}" alt="" width="50" height="50"></a>
                                                        </div>
                                                        <div class="col-lg-5 col-xs-6 tracking_name">
                                                        <div class="nameorder">
                                                            <a class="" href="">Tokyo Ramen</a>
                                                            <p> x 1</p>
                                                        </div>
                                                          
                                                            <h5><a class="nameshop" href="">Misoya Ramen</a></h5>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>

                                            <div class="table_tracking">
                                                <div class="row track_head">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-3 track_order">
                                                            <!-- <h5>Order ID</h5>#987654 -->
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 track_date">
                                                            <h5>Date Purchased</h5>Dec 1, 2017 13:00
                                                        </div>
                                                        <div class="col-lg-1 hidden-xs track_icon"><i class="fas fa-angle-right fa-lg"></i></div>
                                                        <div class="col-lg-3 col-xs-3 track_deli">
                                                            <h5>Estimated Delivery</h5>Dec 1, 2017 13:20
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3"> </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <ul id="progressbar" class="">
                                                            <!-- <li class="active" id="step1">
                                                                <div class="d-md-block">ยืนยันออเดอร์</div>
                                                            </li> -->
                                                            <li class="active" id="step2">
                                                                <div class="d-md-block">กำลังเตรียมอาหาร</div>
                                                            </li>
                                                            <li class="" id="step3">
                                                                <div class="d-md-block">ไรเดอร์กำลังไปรับอาหาร</div>
                                                            </li>
                                                            <li class="" id="step4">
                                                                <div class="d-md-block">กำลังจัดส่ง</div>
                                                            </li>
                                                            <li class="" id="step5">
                                                                <div class="d-md-block">จัดส่งเสร็จสมบูรณ์</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="row track_bottom">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-6 tracking_thumb"><a href="#"><img src="{{asset('img-take/หอยทอด.jpeg')}}" alt="" width="50" height="50"></a>
                                                        </div>
                                                        <div class="col-lg-5 col-xs-6 tracking_name">
                                                        <div class="nameorder">
                                                            <a class="" href="">หอยทอด</a>
                                                            <p> x 1</p>
                                                        </div>
                                                            
                                                            <h5><a class="nameshop" href="">Maesriruen</a></h5>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table_tracking">
                                                <div class="row track_head">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-3 track_order">
                                                            <!-- <h5>Order ID</h5>#987654 -->
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3 track_date">
                                                            <h5>Date Purchased</h5>Dec 1, 2017 13:00
                                                        </div>
                                                        <div class="col-lg-1 hidden-xs track_icon"><i class="fas fa-angle-right fa-lg"></i></div>
                                                        <div class="col-lg-3 col-xs-3 track_deli">
                                                            <h5>Estimated Delivery</h5>Dec 1, 2017 13:20
                                                        </div>
                                                        <div class="col-lg-3 col-xs-3"></div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <ul id="progressbar" class="">
                                                            <!-- <li class="active" id="step1">
                                                                <div class="d-md-block">ยืนยันออเดอร์</div>
                                                            </li> -->
                                                            <li class="" id="step2">
                                                                <div class="d-md-block">กำลังเตรียมอาหาร</div>
                                                            </li>
                                                            <li class="" id="step3">
                                                                <div class="d-md-block">ไรเดอร์กำลังไปรับอาหาร</div>
                                                            </li>
                                                            <li class="" id="step4">
                                                                <div class="d-md-block">กำลังจัดส่ง</div>
                                                            </li>
                                                            <li class="" id="step5">
                                                                <div class="d-md-block">จัดส่งเสร็จสมบูรณ์</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="row track_bottom">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-6 tracking_thumb"><a href="#"><img src="{{asset('img-take/nara.jpg')}}" alt="" width="50" height="50"></a>
                                                        </div>
                                                        <div class="col-lg-5 col-xs-6 tracking_name">
                                                        <div class="nameorder">
                                                            <a class="" href="">ลาบทอด</a>
                                                            <p> x 1</p>
                                                        </div>
                                                           
                                                            <h5><a class="nameshop" href="">นารา</a></h5>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="tab-pane fade" id="Shipping" role="tabpanel">
                                        <div class="tr_table" style="border: none;">
                                            <div class="table_tracking">
                                                <div class="row track_head">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-12 track_order">
                                                            <h5>Order ID</h5>#0123456789
                                                        </div>
                                                        <div class="col-lg-3 col-xs-12 track_date">
                                                            <h5>Date Purchased</h5>Dec 1, 2017 13:00
                                                        </div>
                                                        <div class="col-lg-1 hidden-xs track_icon"><i class="fas fa-angle-right fa-lg"></i></div>
                                                        <div class="col-lg-3 col-xs-12 track_deli">
                                                            <h5>Estimated Delivery</h5>Tue, Dec 3, 2018
                                                        </div>
                                                        <!-- <div class="col-lg-3 col-xs-12 track_botton"><button type="summit">Manage Order</button></div> -->
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <ul id="progressbar" class="">
                                                            <!-- <li class="active" id="step1">
                                                                <div class="d-md-block">ยืนยันออเดอร์</div>
                                                            </li> -->
                                                            <li class="active" id="step2">
                                                                <div class="d-md-block">ยืนยันคำสั่งซื้อ</div>
                                                            </li>
                                                            <li class="active" id="step3">
                                                                <div class="d-md-block">เข้ารับพัสดุจากร้านค้า</div>
                                                            </li>
                                                            <li class="" id="step4">
                                                                <div class="d-md-block">กำลังจัดส่ง</div>

                                                            </li>
                                                            <li class="" id="step5">
                                                                <div class="d-md-block">จัดส่งเสร็จสมบูรณ์</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="row track_bottom">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-6 tracking_thumb"><a href="#"><img src="https://assets.adidas.com/images/w_385,h_385,f_auto,q_auto:sensitive,fl_lossy/dbf421a63979498aa5c4a34e00f9edb5_9366/%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2-stan-smith.jpg" alt="" width="50"></a>
                                                        </div>
                                                        <div class="col-lg-5 col-xs-6 tracking_name">
                                                            <a class="nameorder" href="">รองเท้า STAN SMITH</a>
                                                           
                                                            <h5><a class="nameshop" href="">Adidas</a></h5>
                                                            <br>
                                                            <img src="{{asset('img-take/Logo-Kerry-Express_2-3.png')}}" width="50" height="50" alt="">
                                                            <p class="d-md-">หมายเลขพัสดุ
                                                                <a href="#" data-toggle="modal" data-target="#modal_box6" title="" data-original-title="quick view" style="font-size: 13px;">KR001</a>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table_tracking">
                                                <div class="row track_head">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-12 track_order">
                                                            <h5>Order ID</h5>#0123456789
                                                        </div>
                                                        <div class="col-lg-3 col-xs-12 track_date">
                                                            <h5>Date Purchased</h5>Dec 1, 2017 13:00
                                                        </div>
                                                        <div class="col-lg-1 hidden-xs track_icon"><i class="fas fa-angle-right fa-lg"></i></div>
                                                        <div class="col-lg-3 col-xs-12 track_deli">
                                                            <h5>Estimated Delivery</h5>Tue, Dec 3, 2018
                                                        </div>
                                                        <!-- <div class="col-lg-3 col-xs-12 track_botton"><button type="summit">Manage Order</button></div> -->
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <ul id="progressbar" class="">
                                                            <!-- <li class="active" id="step1">
                                                                <div class="d-md-block">ยืนยันออเดอร์</div>
                                                            </li> -->
                                                            <li class="active" id="step2">
                                                                <div class="d-md-block">ยืนยันคำสั่งซื้อ</div>
                                                            </li>
                                                            <li class="" id="step3">
                                                                <div class="d-md-block">เข้ารับพัสดุจากร้านค้า</div>
                                                            </li>
                                                            <li class="" id="step4">
                                                                <div class="d-md-block">กำลังจัดส่ง</div>

                                                            </li>
                                                            <li class="" id="step5">
                                                                <div class="d-md-block">จัดส่งเสร็จสมบูรณ์</div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="row track_bottom">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-2 col-xs-6 tracking_thumb"><a href="#"><img src="https://freitag.rokka.io/neo_square_thumbnail/b6c45fcbe29ef0e286dd84a08edcfee144c49b7b/produktregistrierung-f41-0.jpg" alt="" width="50" height="50"></a>
                                                        </div>
                                                        <div class="col-lg-5 col-xs-6 tracking_name">
                                                            <a class="nameorder" href="">Bags Freitag</a>
                                                           
                                                            <h5><a class="nameshop" href="">Freitag</a></h5>

                                                        </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- end1 -->
                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="head_tf">
                                <p>ประวัติการสั่งซื้อ</p>
                                <br>
                            </div>

                            <div class="product_tracking_inner">
                                <div class="product_tracking_button">
                                    <ul class="nav" role="tablist">
                                        <li>
                                            <a class="active" data-toggle="tab" href="#Delivery2" role="tab" aria-controls="Delivery" aria-selected="false">Food</a>
                                        </li>

                                        <li>
                                            <a class="" data-toggle="tab" href="#Shipping2" role="tab" aria-controls="Shipping" aria-selected="false">Shopping</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" style="padding: 20px; padding-bottom: 10px; margin: 0px; background: transparent;">
                                    <div class="tab-pane fade show active" id="Delivery2" role="tabpanel">
                                        <div class="tr_table" style="border: none;">
                                            <div class="table_tracking">
                                                <div class="row track_head">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-10 col-xs-7" style="margin-top: 10px;">
                                                            <h4>เพลินพุง</h4>
                                                        </div>
                                                        <div class="col-lg-2 col-xs-5" style="margin-top: 10px;">
                                                            <h5>฿3.30</h5>
                                                        </div>

                                                        <div class="col-lg-12 col-xs-12" style="margin-top: -10px;">
                                                            <hr>
                                                        </div>

                                                        <div class="col-lg-10 col-xs-7">
                                                            <!-- <h4>เพลินพุง</h4> -->
                                                            <h5>ส่งโดย</h5>
                                                            <h5>5 ต.ค. 2020</h5>
                                                            <h5>1x กระเพราหมูสับ,1x กระเพราไก่สับ</h5>
                                                        </div>
                                                        <div class="col-lg-2 col-xs-5">
                                                            <!-- <h5>฿3.30</h5> -->
                                                            <button>สั่งอีกครั้ง</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade " id="Shipping2" role="tabpanel">
                                        <div class="tr_table" style="border: none;">
                                            <div class="table_tracking">
                                                <div class="row track_head">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <div class="col-lg-10 col-xs-8">
                                                            <span>Adidas</span>
                                                        </div>
                                                        <!-- <div class="col-lg-2 col-xs-4 ">
                                                            <i class="fas fa-rv"></i>
                                                            Completed
                                                            <span style="color:#f4f4f4">|</span>
                                                        </div> -->

                                                        <div class="col-lg-2 col-xs-4">
                                                            <p style="color: #D01F44;">ที่ต้องส่ง</p>
                                                        </div>
                                                        <div class="col-lg-12 col-xs-12">
                                                            <hr>
                                                        </div>
                                                        <div class="col-lg-1 col-xs-4">
                                                            <img src="{{asset('assets/img/product/product3.jpg')}}" alt="">
                                                        </div>
                                                        <div class="col-lg-9 col-xs-6">
                                                            <p> Apple iPad Pro Case เคสไอแพด 11 iPad case 2020</p>
                                                            <h5>ตัวลือกสินค้า:ม่วง</h5>
                                                            <p>x1</p>
                                                        </div>
                                                        <div class="col-lg-2 col-xs-2">
                                                            <h4>฿299</h4>
                                                        </div>
                                                        <div class="col-lg-9 col-xs-4" style="float: left;">
                                                        </div>
                                                        <div class="col-lg-3 col-xs-8" style="float: left;">
                                                            <!-- <span>รวมการสั่งซื้อ:</span>
                                                            <span style="color: #D01F44;font-size:25px">฿299</span> -->
                                                            <span>รวมการสั่งซื้อ:</span>
                                                            <span style="color: #D01F44;font-size:25px">฿299</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end2 -->
                        <div class="tab-pane fade" id="setting" role="tabpanel">
                            <!-- <div class="col-lg-12 col-xs-12"> -->
                            <div class="head_tf">
                                <p>ตั้งค่าบัญชีผู้ใช้</ย>
                            </div>

                            <!-- </div> -->
                            <div class="product_tracking_inner">
                                <div class="customer_login" style="padding:0px">

                                    <div class="container">
                                        <div class="row">
                                            <!--login area start-->
                                            <!-- <div class="col-lg-12 col-md-12 col-xs-12"> -->

                                            <div class="col-lg-12 col-md-12 col-xs-12">

                                                <div class="col-lg-4 col-xs-2">
                                                </div>
                                                <div class="col-lg-4 col-xs-8">
                                                    <div class="avatar-upload">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg')}}" />
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <div id="imagePreview" style="    background-image: url({{asset('img/img-nong.png')}});">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-xs-2">
                                                </div>
                                                <div class="col-lg-12 col-xs-12">
                                                    <div class="account_form">

                                                        <p>
                                                            <label>ชื่อผู้ใช้</label>
                                                            <input type="text" name="first-name" placeholder="take">
                                                        </p>
                                                        <p>
                                                            <label>ชื่อ</label>
                                                            <input type="text" name="last-name" placeholder="take more">
                                                        </p>
                                                        <p>
                                                            <label>อีเมลล์</label> <br>
                                                            <label>ad*****@take.com</label> <a style="text-decoration: underline;color:lightskyblue">เปลี่ยน</a>
                                                        </p>
                                                        <p>
                                                            <label>เบอร์มือถือ</label><br>
                                                            <label>********90</label> <a style="text-decoration: underline;color:lightskyblue">เปลี่ยน</a>
                                                        </p>
                                                        <p>
                                                            <!-- <div class="input-radio">
                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                                        <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Other</span>
                                                    </div> -->

                                                        </p>
                                                        <!-- <p> -->
                                                        <div class="checkout_form">
                                                            <div class="row">

                                                                <div class="col-lg-6 col-xs-12">
                                                                    <label for="country">เพศ</label>
                                                                    <select class="select_option" name="cuntry" id="country">
                                                                        <option value="2">ชาย</option>
                                                                        <option value="3">หญิง</option>
                                                                        <option value="4">อื่นๆ</option>
                                                                    </select>
                                                                </div>
                                                                <br><br>
                                                                <br><br>

                                                                <div class="col-lg-6 col-xs-12">
                                                                    <p>
                                                                        <label for="country">วัน/เดือน/ปี เกิด:</label>
                                                                        <input type="date" id="birthday" name="birthday">
                                                                    </p>
                                                                </div>

                                                            </div>

                                                        </div>
                                                        <!-- </p> -->
                                                        <div class="row">
                                                            <div class="col-4">
                                                                <p>
                                                                    <div class="login_submit">
                                                                        <button type="submit">SAVE</button>
                                                                    </div>
                                                                </p>
                                                            </div>
                                                            <div class="col-4">

                                                            </div>
                                                            <div class="col-4">

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                                <!--login area start-->
                                            </div>
                                        </div>

                                        <!--login area start-->
                                    </div>
                                </div>
                            </div>
                            <!--login area start-->
                            <br>
                            <div class="head_tf">
                                <p>เปลี่ยนรหัสผ่าน</p>
                            </div>
                            <div class="product_tracking_inner">
                                <div class="customer_login" style="padding:0px;">
                                    <div class="container">
                                        <div class="row">
                                            <!--login area start-->
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <div class="account_form">
                                                    <!-- <div class="col-lg-12 col-xs-12">
                                                        

                                                    </div> -->

                                                    <p>
                                                        <label>รหัสผ่านปัจจุบัน</label>
                                                        <input type="text" name="first-name"> <a>ลืมรหัสผ่าน?</a>
                                                    </p>
                                                    <p>
                                                        <label>รหัสผ่านใหม่</label>
                                                        <input type="text" name="last-name">
                                                    </p>
                                                    <p>
                                                        <label>ยืนยันรหัสผ่าน</label>
                                                        <input type="text" name="email-name">
                                                    </p>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <p>
                                                                <div class="login_submit">
                                                                    <button type="submit">SAVE</button>
                                                                </div>
                                                            </p>
                                                        </div>
                                                        <div class="col-4">

                                                        </div>
                                                        <div class="col-4">

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                            <!--login area start-->
                                        </div>
                                    </div>
                                </div>
                                <!--login area start-->
                            </div>
                        </div>
                        <!-- end3 -->
                        <div class="tab-pane fade" id="coupon" role="tabpanel">
                            <div class="head_tf">
                                <p>คูปองส่วนลด</p>
                            </div>
                            <!-- <div class="product_tracking_inner"> -->
                            <!-- <div class="container"> -->
                            <!-- <form action="#"> -->
                            <div class="row">
                                <div class="col-lg-12 col-xs-12">
                                    <div class="table_desc wishlist line">
                                        <div class="cart_page table-responsive">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="product_remove">ใช้งาน</th>
                                                        <th class="product_thumb">ใช้งานได้</th>
                                                        <th class="product_name">โค้ดส่วนลด</th>
                                                        <th class="product-price">ใช้งานได้ตั้งแต่</th>
                                                        <th class="product_quantity">ใช้งานได้ถึง</th>
                                                        <th class="product_total">มูลค่า</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="product_remove"><a href="#">No</a></td>
                                                        <td class="product_thumb"></td>
                                                        <td class="product_name"><a>EEM0987</a> &nbsp; <a style="color:#d10f44;">คัดลอก</a></td>
                                                        <td class="product-product_quantity">22/10/63 07:00</td>
                                                        <td class="product_quantity">22/11/63 07:00</td>
                                                        <td class="product_quantity"><a href="#">฿100.00</a></td>


                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- </form> -->
                        </div>
                        <!-- end4 -->

                        <div class="tab-pane fade" id="info" role="tabpanel">
                            <div class="head_tf">
                                <p>วอลเลต</p>
                            </div>

                            <div class="product_d_inner">
                                <div class="box_style_2 info" style="line-height:30px; margin-bottom:140px; ">

                                    <div class="col-lg-6">
                                        <div class="row">

                                            <div class="col-lg-6 col-xs-6">
                                                <i class="fas fa-coins" style="color:#FFD700; display: inline;"></i>
                                                <p style="display: inline;">รวมยอดเงินที่ต้องชำระ</p>
                                                <!-- <h4>เงินคงเหลือ</h4>
                               <h4>ขาด</h4> -->
                                            </div>
                                            <div class="col-lg-6 col-xs-6">
                                                <p style="margin-left:-30px;"><b>1000 บาท</b> </p>
                                                <!-- <h4>เงินคงเหลือ</h4>
                               <h4>ขาด</h4> -->
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-6">
                                                <i class="fas fa-coins" style="color:#FFD700; display: inline;"></i>
                                                <p style="display: inline;">TA-KE Point ที่มี</p>
                                                <!-- <h4>เงินคงเหลือ</h4>
                               <h4>ขาด</h4> -->
                                            </div>
                                            <div class="col-lg-6 col-xs-6">
                                                <p style="margin-left:-30px; color:#1ab60d;"><b>200 Point(200 บาท)</b> </p>
                                                <!-- <h4>เงินคงเหลือ</h4>
                               <h4>ขาด</h4> -->
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-xs-6">
                                                <i class="fas fa-coins" style="color:#FFD700; display: inline;"></i>
                                                <p style="display: inline;">ขาด</p>
                                                <!-- <h4>เงินคงเหลือ</h4>
                               <h4>ขาด</h4> -->
                                            </div>
                                            <div class="col-lg-6 col-xs-6">
                                                <p style="margin-left:-30px; color: #D01F44"><b>800 บาท</b> </p>
                                                <!-- <h4>เงินคงเหลือ</h4> 
                               <h4>ขาด</h4> -->
                                            </div>

                                        </div>

                                        <br>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <button onclick="show1();" style="background-color: #1ab60d; width: 70%; color:white;" class="btn">เติมpoint</button>

                                            </div>
                                            <div class="col-lg-6">
                                                <button onclick="show2();" class="btn" style="width: 70%;  margin-left: -30px;color:white;   background-color: #b7b7b7;">ชำระเงินทันที</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{asset('img-take/ta-kewallet.PNG')}}" alt="" style="width: 90%; margin-top: -7px;">
                                    </div>
                                    <div class="col-lg-3">
                                    </div>

                                </div><!-- End box_style_1 -->
                                <br>
                                <div id="money1" class="table_point" style="padding-left: 20px;">
                                    <h4 class="nomargin_top"> เติม TA-KE POINT</h4>

                                    <div class="table_desc mb-4">

                                        <div class="cart_page">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Product</th>
                                                        <th>เติมเงิน</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td class="tkpoint"><i class="fas fa-coins" style="color:#FFD700;"></i></td>
                                                        <td class="tkpoint1">50 (+10 PTS)</label></td>
                                                        <td class="tkpoint" style="width:152px;"> <button onclick="show2();" style="height:40px;" class="button_wallet_money">THB 50</button></td>


                                                    </tr>

                                                    <tr>

                                                        <td class="tkpoint"> <i class="fas fa-coins" style="color:#FFD700;"></i></td>
                                                        <td class="tkpoint1">100 (+20 PTS)</label></td>
                                                        <td class="tkpoint" style="width:152px;"> <button onclick="show2();" style="height:40px;" class="button_wallet_money">THB 100 </button></td>


                                                    </tr>
                                                    <tr>

                                                        <td class="tkpoint"><i class="fas fa-coins" style="color:#FFD700;"></i></td>
                                                        <td class="tkpoint1">1000 (+100 PTS)</label></td>
                                                        <td class="tkpoint" style="width:152px;"> <button onclick="show2();" style="height:40px;" class="button_wallet_money">THB 1000</button></td>


                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>


                                <div id="money" class="mt-4" style="padding-left: 20px;">
                                    <div class="">
                                        <h4 class="inner">Choose payment method</h4>

                                        <div class="accordion" id="accordionExample">
                                            <div class="">
                                                <div class="table_desc mb-0">
                                                    <div class="cart_page">
                                                        <table class=" ">
                                                            <tr>

                                                                <td class="tkpoint1" style="border:none; border-bottom:1px solid #ededed;"> <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                        <div class="col-lg-8" style="margin-top: 13px;padding:0;">
                                                                            <input type="radio" id value="" name="payment_method">
                                                                            Credit card
                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <img class="pull-right" width="50" style="height: 50px;" src="{{asset('assets/img/icon/visa.png')}}" alt="">
                                                                            <img class="pull-right" width="50" style="height: 50px;" src="{{asset('assets/img/icon/mastercard.png')}}" alt="">

                                                                        </div>
                                                                    </button></td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample" style="border-left: 1px solid #ededed; border-right: 1px solid #ededed;">
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label>Name on card</label>
                                                            <input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Card number</label>
                                                            <input type="text" id="card_number" name="card_number" class="form-control" placeholder="Card number">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label>Expiration date</label>
                                                                <div class="row">
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="mm">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 col-sm-6">
                                                                        <div class="form-group">
                                                                            <input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="yyyy">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label>Security code</label>
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-sm-6">
                                                                            <div class="form-group">
                                                                                <input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-8 col-sm-6">
                                                                            <img src="img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--End row -->
                                                        <div class="order_button">
                                                            <button type="submit">Proceed</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="table_desc mt-0 mb-0">
                                                    <div class="cart_page">
                                                        <table class="">
                                                            <tr>

                                                                <td class="tkpoint1" style="border:none; border-bottom:1px solid #ededed;"> <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                                                                        <div class="col-lg-8" style="padding:0;">
                                                                            <input type="radio" id value="" checked="" name="payment_method">
                                                                            Mobile Banking
                                                                        </div>
                                                                        <div class="col-lg-4  pull-right" style="text-align: right;">
                                                                            <!-- <img class="pull-right" width="150" src="{{asset('assets/img/icon/papyel.png')}}" alt=""> -->
                                                                            <img src="{{asset('img-take/ibang_1.PNG')}}" alt="" style="height: 30px;">
                                                                            <img src="{{asset('img-take/ibang_2.PNG')}}" alt="" style="height: 30px;">
                                                                            <img src="{{asset('img-take/ibang_3.PNG')}}" alt="" style="height: 30px;">
                                                                        </div>
                                                                    </button></td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>

                                                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample" style="border-left: 1px solid #ededed; border-right: 1px solid #ededed;">
                                                    <div class="card-body" style="margin-left:10%;">
                                                        <div class="table table-borderless">
                                                            <div class="payment_method">
                                                                <div class="cart_page">
                                                                    <div class="">
                                                                        <div>
                                                                            <div class="bank_choice">
                                                                                <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                                                                <img src="{{asset('img-take/ibang_1.PNG')}}" alt="">
                                                                                <label for="payment" style="font-size: 15px;">ธนาคารกรุงไทย</label>
                                                                                <span for="payment" style="font-size: 15px;">เลขบัญชี 444-444-4444</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="cart_page">
                                                                    <div class="">
                                                                        <div>
                                                                            <div class="bank_choice">
                                                                                <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                                                                <img src="{{asset('img-take/ibang_2.PNG')}}" alt="">
                                                                                <label for="payment" style="font-size: 15px;">ธนาคารกสิกรไทย</label>
                                                                                <span for="payment" style="font-size: 15px;">เลขบัญชี 444-444-4444</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                                <div class="cart_page">
                                                                    <div class="">
                                                                        <div>
                                                                            <div class="bank_choice">
                                                                                <input id="payment" name="check_method" type="radio" data-target="createp_account" />
                                                                                <img src="{{asset('img-take/ibang_3.PNG')}}" alt="">
                                                                                <label for="payment" style="font-size: 15px;">ธนาคารกรุงเทพ</label>
                                                                                <span for="payment" style="font-size: 15px;">เลขบัญชี 444-444-4444</span>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <div class="order_button" style="padding-top:10px">
                                                                    <button type="submit">Proceed</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                            <div class="">
                                                <div class="table_desc mt-0 mb-0">
                                                    <div class="cart_page">
                                                        <table class="">
                                                            <tr>

                                                                <td class="tkpoint1" style="border:none; border-bottom:1px solid #ededed"> <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">

                                                                        <div class="col-lg-8" style="padding:0;">
                                                                            <input type="radio" id="" value="" name="payment_method">
                                                                            Paypal
                                                                        </div>
                                                                        <div class="col-lg-4 pull-right" style="text-align: right;">
                                                                            <!-- <img class="pull-right" width="150" src="{{asset('assets/img/icon/papyel.png')}}" alt=""> -->
                                                                            <img src="{{asset('assets/img/icon/paypal.png')}}" alt="" style="height: 30px;">
                                                                        </div>
                                                                    </button></td>
                                                            </tr>

                                                        </table>
                                                    </div>
                                                </div>


                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="border-left: 1px solid #ededed; border-right: 1px solid #ededed; border-bottom: 1px solid #ededed;">
                                                <div class="card-body>      
                                <div class=" table table-borderless" style="margin-left:10%;">
                                                    <div class="payment_method">
                                                        <br>

                                                        <div class="order_button">
                                                            <button type="submit">Proceed to PayPal</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <!-- end5 -->

                        <div class="tab-pane fade" id="address" role="tabpanel">
                            <div class="head_tf">
                                <p>ที่อยู่และการจัดส่ง</ย>
                            </div>

                            <div class="product_tracking_inner">

                                <!-- <div class="customer_login"> -->
                                <!-- <div class="container"> -->
                                <div class="row">
                                    <!--login area start-->
                                    <div class="col-lg-12 col-xs-12">
                                        <div class="col-lg-10 col-xs-8">

                                        </div>
                                        <div class="col-lg-2 col-xs-4">
                                            <button href="#" class="btn btn-success" data-toggle="modal" data-target="#modal_box3" title="" data-original-title="quick view" style="font-size: 13px;"><i class="fas fa-plus"></i>เพิ่มที่อยู่</button>
                                        </div>

                                        <div class="col-lg-10 col-xs-8">
                                            <h4>บ้าน</h4>
                                        </div>
                                        <div class="col-lg-2 col-xs-4">

                                        </div>

                                        <div class="col-lg-12 col-xs-12">
                                            <hr>
                                        </div>

                                        <div class="col-lg-2 col-xs-4">
                                            <h5>ชื่อ-นามสกุล</h5>
                                            <h5>โทรศัพท์</h5>
                                            <h5>ที่อยู่</h5>
                                        </div>
                                        <div class="col-lg-8 col-xs-8">
                                            <h5>อดิ เกิดเกลี้ยง</h5>
                                            <h5>0953332145</h5>
                                            <h5>78/11 หมู่บ้านซิตี้เซนส์ โซนอี 2 วัชรพล แขวงท่าแร้ง เขตบางเขน จังหวัดกรุงเทพมหานคร 10230</h5>
                                        </div>

                                        <div class="col-lg-2 col-xs-12">
                                            <a data-toggle="modal" data-target="#modal_box3"><i class="fas fa-edit"></i></a>
                                            <a style="text-decoration: underline;margin-left: 15px;"><i class="fas fa-trash-alt"></i></a>
                                            <br><br>
                                            <span class="btn btn-light" href="" hidden-xs style="width: 75px;">
                                                <p style="margin-left: -7px;">ตั้งเป็นค่าเริ่มต้น</p>
                                            </span>

                                        </div>

                                        <div class="col-lg-10 col-xs-8">
                                            <br>
                                            <h4>ออฟฟิศ</h4>
                                        </div>
                                        <div class="col-lg-2 col-xs-4">

                                        </div>
                                        <div class="col-lg-12 col-xs-12">
                                            <hr>
                                        </div>
                                        <div class="col-lg-2 col-xs-4">
                                            <h5>ชื่อ-นามสกุล</h5>
                                            <h5>โทรศัพท์</h5>
                                            <h5>ที่อยู่</h5>
                                        </div>
                                        <div class="col-lg-8 col-xs-8">
                                            <h5>อดิ เกิดเกลี้ยง</h5>
                                            <h5>0953332145</h5>
                                            <h5>78/11 หมู่บ้านซิตี้เซนส์ โซนอี 2 วัชรพล แขวงท่าแร้ง เขตบางเขน จังหวัดกรุงเทพมหานคร 10230</h5>
                                        </div>
                                        <div class="col-lg-2 col-xs-4">
                                            <a data-toggle="modal" data-target="#modal_box3"><i class="fas fa-edit"></i></a>
                                            <a style="text-decoration: underline;margin-left: 15px;"><i class="fas fa-trash-alt"></i></a>
                                            <br><br>
                                            <span class="btn btn-light" href="" hidden-xs style="width: 75px;">
                                                <p style="margin-left: -7px;">ตั้งเป็นค่าเริ่มต้น</p>
                                            </span>

                                        </div>
                                    </div>

                                    <!--login area start-->


                                </div>
                                <!-- </div> -->
                                <!-- </div> -->
                            </div>
                        </div>
                        <!-- end6 -->


                    </div>



                    <!--Table Tracking End -->
                </div>
            </div>
        </div>

        <!--footer area start-->

        @include('templates.footer')

        <!-- modal area start-->
        <div class="modal fade " id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-x"></i></span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Name on card</label>
                                        <input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Card number</label>
                                        <input type="text" id="card_number" name="card_number" class="form-control" placeholder="Card number">
                                    </div>
                                </div>



                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <label>Expiration date</label>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="expire_month" name="expire_month" class="form-control" placeholder="mm">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" id="expire_year" name="expire_year" class="form-control" placeholder="yyyy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 ">
                                    <div class="form-group">
                                        <label>Security code</label>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-6">
                                                <div class="form-group">
                                                    <input type="text" id="ccv" name="ccv" class="form-control" placeholder="CCV">
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-6">
                                                <img src="img/icon_ccv.gif" width="50" height="29" alt="ccv"><small>Last 3 digits</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="btn_full" href="{{url('/checkout_3')}}">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade " id="modal_box2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-x"></i></span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>ชื่อ</label>
                                        <input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>เลขประจำตัวประชาชน</label>
                                        <input type="text" id="card_number" name="card_number" class="form-control" placeholder="เลขประจำตัวประชาชน">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>เลขที่บัญชี</label>
                                        <input type="text" id="card_number" name="card_number" class="form-control" placeholder="เลขที่บัญชี">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label>ชื่อธนาคาร</label>
                                        <input type="text" id="card_number" name="card_number" class="form-control" placeholder="ชื่อธนาคาร">
                                    </div>
                                </div>
                            </div>

                            <a class="btn_full" href="{{url('/checkout_3')}}">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade " id="modal_box3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-x"></i></span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-xs-12">
                                    <div class="form-group">
                                        <label>ชื่อ-นามสกุล</label>
                                        <input type="text" class="form-control" id="name_card_order" name="name_card_order" placeholder="First and last name">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xs-12">
                                    <div class="form-group">
                                        <label>หมายเลขโทรศัพท์</label>
                                        <input type="text" id="card_number" name="card_number" class="form-control" placeholder="หมายเลขโทรศัพท์">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xs-12">
                                    <div class="form-group">
                                        <label>จังหวัด</label>
                                        <input type="text" id="card_number" name="card_number" class="form-control" placeholder="หมายเลขโทรศัพท์">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xs-12">
                                    <div class="form-group">
                                        <label>เขต/อำเภอ</label>
                                        <input type="text" id="card_number" name="card_number" class="form-control" placeholder="ชื่อธนาคาร">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xs-12">
                                    <div class="form-group">
                                        <label>รหัสไปรษณีย์</label>
                                        <input type="text" id="card_number" name="card_number" class="form-control" placeholder="ชื่อธนาคาร">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xs-12">
                                    <div class="form-group">
                                        <label>ตั้งชื่อสถานที่</label>
                                        <div class="checkout_form">

                                            <select class="select_option" name="cuntry" id="country">
                                                <option value="2">บ้าน</option>
                                                <option value="3">ออฟฟิศ</option>
                                                <option value="4">อื่นๆ</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <a class="btn_full" href="{{url('/checkout_3')}}">Confirm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade " id="modal_box4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-x"></i></span>
                    </button>
                    <div class="modal_body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-xs-12">
                                    <h4>คุณต้องการออกจากระบบ</h4>
                                </div>

                            </div>

                            <a class="btn btn-danger" href="{{url('/checkout_3')}}">ออกจากระบบ</a>
                            <a class="btn btn-secondary" href="{{url('/tracking')}}">ยกเลิก</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal_box5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close_track" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times"></i></span>
                    </button>
                    <div class="modal_body" id="optionsmenu">
                        <div class="row widget_list_track">
                            <div class="col-lg-12 widget_title">
                                <h3>เลือกคำสั่งที่ต้องการ</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <select class="browser-default custom-select-track" data-width="auto" id="check_tr">
                                    <option value="" disabled selected>กรุณาเลือกคำสั่ง</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="cancel">ยกเลิกคำสั่งซื้อ</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 select-cancel">
                            <div id="show"></div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-6 track_btn">
                                    <button type="button" class="">ยืนยัน</button>
                                </div>
                                <div class="col-lg-6 track_btn">
                                    <button type="button" class="" data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modal_box6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog " role="document">
                <div class="modal-content">
                    <button type="button" class="close_track" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times"></i></span>
                    </button>
                    <div class="modal_body" id="optionsmenu">
                        <img src="{{asset('img-take/krtracking.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- modal area end-->
        <!--footer area end-->

        <!-- modal area start-->

        <!-- modal area end-->
        <div class="modal fade" id="modal_box6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content_track">
                    <button type="button" class="close_track" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-times"></i></span>
                    </button>
                    <div class="modal_body" id="optionsmenu">
                        <div class="row widget_list_track">
                            <div class="col-lg-12 widget_title_track">
                                <h3>เลือกคำสั่งที่ต้องการ</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 form-group">
                                <select class="browser-default custom-select-track" data-width="auto" id="check_track">
                                    <option value="" disabled selected>กรุณาเลือกคำสั่ง</option>
                                    <option value="1">-------------------</option>
                                    <option value="cancel_track">ยกเลิกคำสั่งซื้อ</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-12 select-cancel">
                            <div id="show_track" class="radio"></div>
                        </div>



                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-6 track_btn">
                                    <button type="button" class="btn btn-take">ยืนยัน</button>
                                </div>
                                <div class="col-lg-6 track_btn">
                                    <button type="button" class="btn btn-take" data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--news letter popup start-->

        <!--news letter popup start-->



        <!-- JS
============================================ -->


        <!--map js code here-->
        <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>
        <script src="https://www.google.com/jsapi"></script>
        <script src="{{asset('assets/js/map.js')}}"></script>

        <!--jquery min js-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!--popper min js-->
        <script src="{{asset('assets/js/popper.js')}}"></script>
        <!--bootstrap min js-->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!--owl carousel min js-->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!--slick min js-->
        <script src="{{asset('assets/js/slick.min.js')}}"></script>
        <!--magnific popup min js-->
        <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
        <!--counterup min js-->
        <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
        <!--jquery countdown min js-->
        <script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
        <!--jquery ui min js-->
        <script src="{{asset('assets/js/jquery.ui.js')}}"></script>
        <!--jquery elevatezoom min js-->
        <script src="{{asset('assets/js/jquery.elevatezoom.js')}}"></script>
        <!--isotope packaged min js-->
        <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
        <!--slinky menu js-->
        <script src="{{asset('assets/js/slinky.menu.js')}}"></script>
        <!--instagramfeed menu js-->
        <script src="{{asset('assets/js/jquery.instagramFeed.min.js')}}"></script>
        <!-- Plugins JS -->

        <script src="{{asset('assets/js/plugins.js')}}"></script>


        <!-- <script src="js-front/jquery-2.2.4.min.js')}}"></script> -->
        <script src="{{asset('js-front/common_scripts_min.js')}}"></script>
        <script src="{{asset('js-front/functions.js')}}"></script>
        <script src="{{asset('assets/validate.js')}}"></script>
        <!-- Main JS -->
        <script src="{{asset('assets/js/main.js')}}"></script>

        <script>
            function myFunction() {
                var x = document.getElementById("filter-xs");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#imagePreview').css')}}('background-image', 'url(' + e.target.result + ')');
                        $('#imagePreview').hide();
                        $('#imagePreview').fadeIn(650);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#imageUpload").change(function() {
                readURL(this);
            });
        </script>

        <script>
            function show2() {
                document.getElementById('money').style.display = 'block';
            }
        </script>
        <script>
            function show1() {
                document.getElementById('money1').style.display = 'block';
            }
        </script>

        <script>
            var select = document.getElementById("check_track"),
                showOption = document.querySelector('#show_track');

            select.addEventListener('change', function() {
                if (this.value == "cancel_track") {
                    showOption.innerHTML = `<div class="radio_track">
  <label><input  type="radio" name="optradio">ผู้ขายไม่ตอบกลับต่อคำสั่งซื้อของฉัน</label>
</div>
<div class="radio_track">
  <label><input type="radio" name="optradio">ผู้ขายสอบถามเพื่อยกเลิกคำสั่งซื้อของฉัน</label>
</div>
<div class="radio_track">
  <label><input type="radio" name="optradio">ฉันต้องการเปลี่ยนแปลงคำสั่งซื้อ (สี,ขนาด,ที่อยู่,voucher,เป็นต้น)</label>
</div>
<div class="radio_track">
  <label><input type="radio" name="optradio"> สินค้าถูกวิจารณ์ (ไม่ตรงตามความเป็นจริง,บรรยายสินค้าเกินจริง,เป็นต้น)</label>
</div>
<div class="radio_track">
  <label><input type="radio" name="optradio">ผู้ขายใช้ระยะเวลาในการจัดส่งนานเกินไป</label>
</div>
<div class="radio_track">
  <label><input type="radio" name="optradio">ผู้ขายไม่มีความน่าเชื่อถือ (ขอให้ยกเลิกการทำธุรกรรมจากทาง Shopee เป็นต้น)</label>
</div>
<div class="radio_track">
  <label><input type="radio" name="optradio">อื่น ๆ (เปลี่ยนใจ,พบผู้ขายรายอื่นพร้อมราคาที่ถูกกว่า, เป็นต้น)</label>
</div>`;
                } else {
                    showOption.innerHTML = `<div class=""></div>`;
                }
            });

            function myFunction() {
                var x = document.getElementById("filter-xs");
                if (x.style.display === "none") {
                    x.style.display = "block";
                } else {
                    x.style.display = "none";
                }
            }
        </script>


</body>

</html>