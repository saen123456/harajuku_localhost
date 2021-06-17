
@include('templates.config')
@include('templates.header')
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
    <div class="breadcrumbs_area" style="height: 200px; background: url({{asset('img-take/bg.jpg')}}) no-repeat 0 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_content">
                        <h3 style="color: #fff;">Login</h3>
                        <ul>
                            <li><a href="{{url('index')}}" style="color: #fff;">home</a></li>
                            <li style="color: #fff;">Login</li>
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
                    <div class="account_form">
                        <h2 style="text-align: center;font-size: 25px;font-weight: 700px" ;>login</h2>
                        <form action="#">
                            <p>
                                <label>Email <span style="color: red;">*</span></label>
                                <input type="text">
                            </p>
                            <p>
                                <label>Passwords <span style="color: red;">*</span></label>
                                <input type="password">
                            </p>
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4">
                                    <div class="login_submit square" style="text-align: center;">
                                        <button type="submit" style="border-radius: 5px;width: 100%;">login</button>
                                    </div>
                                    <a href="{{url('forgetpassword')}}" style="float: right;">Forget your password?</a>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                            <hr>
                            <h3 style="text-align: center;font-size: 25px;font-weight: 700px;">login with social</h3>
                            <br>
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">

                                    <div class="col-lg-4">
                                        <a href="#" class="fb btn" style="width: 100%;height:40px;">
                                            <i class="fab fa-facebook-f" style="font-size: 25px;"></i> <span>Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="twitter btn" style="width: 100%;height:40px;">
                                            <i class="fab fa-twitter" style="font-size: 25px;"></i> <span>Twitter</span>
                                        </a>
                                    </div>
                                    <div class="col-lg-4">
                                        <a href="#" class="google btn" style="width: 100%;height:40px;">
                                            <i class="fab fa-google-plus-g" style="font-size: 25px;"></i> <span>Google+</span>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-lg-1"></div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                <a href="{{url('register')}}">Don't have an account? Register Now!</a>
                                </div>
                                <div class="col-lg-3"></div>


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
    @include('templates.footer')
    



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

</body>


</html>