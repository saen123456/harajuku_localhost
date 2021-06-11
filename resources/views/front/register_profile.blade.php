<?php

require_once "config.php";
require_once "header.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Safira - login</title>
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
                        <h3>Create your profile</h3>
                        <ul>
                            <li><a href="{{url('/index')}}">home</a></li>
                            <li>Create your profile</li>
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
                        <h2>Create your profile</h2>
                        <form action="#">
                        <div class="row">
                                <div class="small-12 medium-2 large-2 columns">
                                    <div class="circle">
                                        <!-- User Profile Image -->
                                        <img class="profile-pic" src="http://cdn.cutestpaw.com/wp-content/uploads/2012/07/l-Wittle-puppy-yawning.jpg">

                                        <!-- Default Image -->
                                        <!-- <i class="fa fa-user fa-5x"></i> -->
                                    </div>
                                    <div class="p-image">
                                        <i class="fa fa-camera upload-button"></i>
                                        <input class="file-upload" type="file" accept="image/*">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <p>
                                <label>First <span>*</span></label>
                                <input type="text">
                            </p>
                            <p>
                                <label>Last <span>*</span></label>
                                <input type="text">
                            </p>
                            <p>
                                <label>Passwords <span>*</span></label>
                                <input type="password">
                            </p>
                            <p>
                                <label>Address</label>
                                <input type="text" placeholder="&#xF041" style=" font-family: FontAwesome;">
                                
                            </p>
                            <div class="login_submit">
                                <button type="submit">Register</button>
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
    <footer class="footer_widgets footer_border">
        <div class="container">
            <div class="footer_top">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-7">
                        <div class="widgets_container contact_us">
                            <div class="footer_logo">
                                <a href="{{url('/index')}}"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <p class="footer_desc">We are a team of designers and developers that create high quality eCommerce, WordPress, Shopify .</p>
                            <p><span>Address:</span> 4710-4890 Breckinridge USA</p>
                            <p><span>Email:</span> <a href="#">demo@hasthemes.com</a></p>
                            <p><span>Call us:</span> <a href="tel:(08)23456789">(08) 23 456 789</a> </p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-5">
                        <div class="widgets_container widget_menu">
                            <h3>Information</h3>
                            <div class="footer_menu">

                                <ul>
                                    <li><a href="{{url('/about')}}">About Us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#"> Privacy Policy</a></li>
                                    <li><a href="#"> Terms & Conditions</a></li>
                                    <li><a href="{{url('/contact')}}"> Contact Us</a></li>
                                    <li><a href="#"> Site Map</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4">
                        <div class="widgets_container widget_menu">
                            <h3>Extras</h3>
                            <div class="footer_menu">
                                <ul>
                                    <li><a href="#">Brands</a></li>
                                    <li><a href="#"> Gift Certificates</a></li>
                                    <li><a href="#">Affiliate</a></li>
                                    <li><a href="#">Specials</a></li>
                                    <li><a href="#">Returns</a></li>
                                    <li><a href="#"> Order History</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="widgets_container widget_newsletter">
                            <h3>Sign up newsletter</h3>
                            <p class="footer_desc">Get updates by subscribe our weekly newsletter</p>
                            <div class="subscribe_form">
                                <form id="mc-form" class="mc-form footer-newsletter">
                                    <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email" />
                                    <button id="mc-submit">Subscribe</button>
                                </form>
                                <!-- mailchimp-alerts Start -->
                                <div class="mailchimp-alerts text-centre">
                                    <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                    <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                    <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                </div><!-- mailchimp-alerts end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright_area">
                            <p>Copyright © 2020 <a href="#">Safira</a> . All Rights Reserved.Design by <a href="#">Safira</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="footer_payment">
                            <ul>
                                <li><a href="#"><img src="assets/img/icon/paypal1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/paypal2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/paypal3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="assets/img/icon/paypal4.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
<script>
    $(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.profile-pic').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});

$(".upload-button").on('click', function() {
   $(".file-upload").click();
});
});
</script>
</body>

</html>