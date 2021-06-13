<?php

require_once "config.php";
require_once "header.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Forget Password</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    


</head>

<body>

    <!--header area start-->
    
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">
                
    </div>
   

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area" style="height: 200px; background: url(../take-web/assets/img/bg/banner18.jpg) no-repeat 0 0;">
        <div class="container">   
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_content">
                       <h3>Forget Password</h3>
                        <ul>
                            <li><a href="{{url('index')}}">home</a></li>
                            <li>Forget Password</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!-- customer login start -->
    <div class="customer_login">
        <div class="container">
            <div class="row">
               <!--login area start-->
               <div class="col-lg-3 col-md-3">
                   
                </div>
                <div class="col-lg-6 col-md-6">
                <div class="account_form register">
                        <h2>Forget Password</h2>
                        <form action="#">
                            <p>   
                                <label>New Password  <span>*</span></label>
                                <input type="text">
                             </p>
                             <p>   
                                <label>Confirm New Password  <span>*</span></label>
                                <input type="text">
                             </p>
                             
                            <div class="login_submit">
                                <button type="submit"><a href="{{url('index')}}">Reset Password</a> </button>
                            </div>
                        </form>
                    </div>    
                </div>
                <!--login area start-->

                <!--register area start-->
                <div class="col-lg-3 col-md-3">
                
                </div>
                <!--register area end-->
            </div>
        </div>    
    </div>
    <!-- customer login end -->

    <!--footer area start-->
    <?php

require_once "footer.php";
?>
    <!--footer area end-->
    


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