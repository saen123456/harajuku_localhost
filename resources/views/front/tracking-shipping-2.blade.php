<?php

require_once "config.php";
require_once "header.php";
?>







<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Safira - shop list</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <!-- CSS 
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="assets/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="assets/css/font.awesome.css">
    <!--ionicons css-->
    <link rel="stylesheet" href="assets/css/ionicons.min.css">
    <!--linearicons css-->
    <link rel="stylesheet" href="assets/css/linearicons.css">
    <!--animate css-->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="assets/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="assets/css/plugins.css">
    
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<body>

   <!--header area start-->
    
   
    <!--header area end-->

   <!--breadcrumbs area start-->
    <div class="breadcrumbs_area" style="height:200px; background-image:url(img-take/แบนเนอร์บนสุด1.jpg)">
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

    <div id="position">
        <div class="container">
            <ul>
                <li><a href="#0">Home</a></li>
                <li><a href="#0">Category</a></li>
                <li>Page active</li>
            </ul>
        </div>
    </div><!-- Position -->

    
    
    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-70 mb-70">
        <div class="container">


            <div class="row">
                <div class="col-lg-3 col-md-9 col-sm-9 col-xs-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget_track">
                        <div class="box_style_1">
                            <ul  class="track_nav" id="cat_nav">
                                <li><a href="#" class="active">ติดตามการสั่งซื้อ</a></li>
                                <li><a href="#">ประวัติการสั่งซื้อ</a>
                                <li><a href="#">ตั้งค่าบัญชีผู้ใช้</a></li>
                                <li><a href="#">เครดิต</a></li>
                                <li><a href="#">ที่อยู่และการจัดส่ง</a></li>
                                <li><a href="#">ออกจากระบบ</a></li>
                            </ul>
                        </div><!-- End box_style_1 -->

                       
                    </aside>
                    <!--sidebar widget end-->
                </div>
            
        
                <!--Table Tracking -->
                <div class="col-lg-9 col-md-9 col-sm-19 col-xs-12 ">
                 <div class="product_tracking_inner">
                    <div class="product_tracking_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#Delivery" role="tab" aria-controls="Delivery" aria-selected="false">Delivery</a>
                            </li>

                            <li>
                                <a class="" data-toggle="tab" href="#Shipping" role="tab" aria-controls="Shipping" aria-selected="false">Shipping</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" style="padding: 40px; padding-bottom: 10px; margin: 0px; background: transparent;">
                        <div class="tab-pane fade show active" id="Delivery" role="tabpanel">    
                    <div class="tr_table" style="border: none;">
                            <div class="table_tracking table-responsive">
                            <table class="table">
                                    <thead>
                                        <tr>
                                                            <th class="track_order"><h5>Order ID</h5>#123456</th>
                                                            <th class="track_date"><h5>Date purchased</h5>Dec 1, 2017</th>
                                                            <th class="track_icon hidden-xs"><i class="fas fa-angle-right"></i></th>
                                                            <th class="track_deli"><h5>Estimated Delivery</h5>Tue, Dec 3, 2018</th>
                                                            <th class="track_botton"><button type="summit">Manage Order</button></th>
                                                        </tr>
                                    </thead>
                                    <tbody>
                <tr>
                    <td colspan="12">
                    <div class="">
                        <ul id="progressbar" class="">
                            <li class="active" id="step1"><div class="d-md-block">กำลังเตรียมอาหาร</div></li>
                            <li class="" id="step2"><div class="d-md-block">กำลังจัดส่ง</div></li>
                            <li class="" id="step3"><div class="d-md-block">จัดส่งเสร็จสมบูรณ์</div></li>
                        </ul>
                    </div>
                    </td>
                </tr>
               
                <tr>
                    <td class="tracking_thumb"><a href="#"><img src="http://www.msr.co.th/wp-content/uploads/2019/08/P_28-%E0%B8%81%E0%B9%8B%E0%B8%A7%E0%B8%A2%E0%B9%80%E0%B8%95%E0%B8%B5%E0%B9%8B%E0%B8%A2%E0%B8%A7%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B8%9E%E0%B8%B4%E0%B9%80%E0%B8%A8%E0%B8%A9-1024x1024.jpg" alt="" width="100"></a></td>
                    <td class="tracking_name"><a href="#">หอยทอด</a><br><a href=""><h5>Maesriruen</h5></a></td>
                </tr>

                                </tbody>


                            </table>
                        </div>
                    </div>

                        </div>


                        <div class="tab-pane fade " id="Shipping" role="tabpanel">
                    <div class="tr_table">
                            <div class="table_tracking table-responsive">
                            <table class="table">
                                    <thead>
                                        <tr>
                                                            <th class="track_order"><h5>Order ID</h5>#654321</th>
                                                            <th class="track_date"><h5>Date purchased</h5>Dec 1, 2017</th>
                                                            <th class="track_icon hidden-xs"><i class="fas fa-angle-right"></i></th>
                                                            <th class="track_deli"><h5>Estimated Delivery</h5>Tue, Dec 3, 2018</th>
                                                            <th class="track_botton"><button type="summit">Manage Order</button></th>
                                                        </tr>
                                    </thead>
                                    <tbody>
                <tr>
                    <td colspan="12">
                    <div class="">
                        <ul id="progressbar" class="">
                            <li class="complete" id="step1"><div class="d-md-block">ชำระเงินสำเร็จ</div></li>
                            <li class="active" id="step2"><div class="d-md-block">กำลังจัดส่ง<br>Tracking : <a href="#">123456</a></div></li>
                            <li class="" id="step3"><div class="d-md-block">จัดส่งเสร็จสมบูรณ์</div></li>
                        </ul>
                    </div>
                    </td>
                </tr>
               
                <tr>
                    <td class="tracking_thumb"><a href="#"><img src="https://assets.adidas.com/images/w_385,h_385,f_auto,q_auto:sensitive,fl_lossy/dbf421a63979498aa5c4a34e00f9edb5_9366/%E0%B8%A3%E0%B8%AD%E0%B8%87%E0%B9%80%E0%B8%97%E0%B9%89%E0%B8%B2-stan-smith.jpg" alt="" width="100" ></a></td>
                    <td class="tracking_name"><a href="#">รองเท้า STAN SMITH</a><br><a href=""><h5>Adidas</h5></a></td>
                </tr>

                                </tbody>


                            </table>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>



                <!--Table Tracking End -->
            </div>
        </div>
    </div>
  <!--footer area start-->
   <?php

require_once "footer.php";
?>
    
    <!--footer area end-->
    
    <!-- modal area start-->

    <!-- modal area end-->

    <!--news letter popup start-->

    <!--news letter popup start-->



    <!-- JS
============================================ -->


    <!--map js code here-->
    <script src="https://maps.google.com/maps/api/js?sensor=false&amp;libraries=geometry&amp;v=3.22&amp;key=AIzaSyChs2QWiAhnzz0a4OEhzqCXwx_qA9ST_lE"></script>
    <script  src="https://www.google.com/jsapi"></script>
    <script src="assets/js/map.js"></script>

    <!--jquery min js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--popper min js-->
    <script src="assets/js/popper.js"></script>
    <!--bootstrap min js-->
    <script src="assets/js/bootstrap.min.js"></script>
    <!--owl carousel min js-->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!--slick min js-->
    <script src="assets/js/slick.min.js"></script>
    <!--magnific popup min js-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--counterup min js-->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!--jquery countdown min js-->
    <script src="assets/js/jquery.countdown.js"></script>
    <!--jquery ui min js-->
    <script src="assets/js/jquery.ui.js"></script>
    <!--jquery elevatezoom min js-->
    <script src="assets/js/jquery.elevatezoom.js"></script>
    <!--isotope packaged min js-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--slinky menu js-->
    <script src="assets/js/slinky.menu.js"></script>
    <!--instagramfeed menu js-->
    <script src="assets/js/jquery.instagramFeed.min.js"></script>
    <!-- Plugins JS -->

    <script src="assets/js/plugins.js"></script>


    <!-- <script src="js-front/jquery-2.2.4.min.js"></script> -->
    <script src="js-front/common_scripts_min.js"></script>
    <script src="js-front/functions.js"></script>
    <script src="assets/validate.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>




</body>

</html>