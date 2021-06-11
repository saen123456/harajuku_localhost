<?php

require_once "config.php";
require_once "header.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>menu-list</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="stylesheet" type="text/css" href="../css/msdropdown/dd.css" />
    <script src="../js/msdropdown/jquery.dd.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/msdropdown/flags.css" />


    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body>

    <!--header area start-->

    <!--offcanvas menu area start-->



    <!--header area end-->
    <div class="off_canvars_overlay">

    </div>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area" style="height:200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="breadcrumb_content">
                        <h2>สมัครสมาชิก</h2>
                        <ul>
                            <li><a href="{{url('/index')}}">home</a></li>
                            <li>สมัครสมาชิก</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--breadcrumbs area end-->


    <br>




    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <!-- One of three columns -->
            </div>
            <div class="col-sm-8">
                <!-- <div class="col-lg-12 col-md-12"> -->
                <div class="customer_login" style="padding:0px">
                    <div class="container">
                        <div class="row">
                            <!--login area start-->
                            <!-- <div class="col-lg-12 col-md-12 col-xs-12"> -->
                            <div class="col-lg-12 col-md-12 col-xs-12">

                                <div class="col-lg-12 col-xs-12">
                                    <div class="head_tf">
                                        <p>สมัครคนส่งอาหาร</ย>
                                    </div>

                                </div>
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6 col-xs-12">
                                    <div class="account_form">
                                        <div class="col-lg-12">
                                            <p>
                                                <label>ชื่อ</label>
                                                <input type="text" name="first-name" placeholder="ชื่อ">
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p>
                                                <label>นามสกุล</label>
                                                <input type="text" name="last-name" placeholder="นามสกุล">
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p>
                                                <label>เบอร์</label>
                                                <input type="text" name="last-name" placeholder="เบอร์">
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p>
                                                <div class="checkout_form">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xs-12">
                                                            <label>คุณรู้จักเราผ่านช่องทางใด</label><br>
                                                            <select class="select_option" name="cuntry" id="country">
                                                                <option value="2">ป้ายโฆษณา โปสเตอร์</option>
                                                                <option value="3">โทรทัศน์</option>
                                                                <option value="4">วิทยุ</option>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <p>
                                                <div class="login_submit">
                                                    <a href="{{url('/register_rider')}}"><button type="submit" style="margin-left:0;width:100%;">SAVE</button></a>
                                                </div>
                                            </p>

                                        </div>
                                    </div>
                                    <!--login area start-->
                                    <div class="col-lg-3"></div>
                                </div>
                            </div>

                            <!--login area start-->
                        </div>
                    </div>

                </div>
                <br><br>
            </div>

            <div class="col-sm-2">
                <!-- One of three columns -->
            </div>
        </div>
        <!-- </div> -->
    </div>

    <!--footer area start-->
    <?php

    require_once "footer.php";
    ?>
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <div class="modal_body" id="optionsmenu">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12">
                            <div class="modal_tab">
                                <img src="assets/img/product/productbig1.jpg" alt="">

                            </div>
                        </div>

                    </div>
                    <br>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget_list widget_post">
                                <div class="widget_title">
                                    <h3>BONCHON</h3>
                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="post_thumb">
                                                <a href="{{url('/blog-details')}}"><img src="assets/img/blog/blogs1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('/blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>59.- </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="post_thumb">
                                                <a href="{{url('/blog-details')}}"><img src="assets/img/blog/blogs1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('/blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>59.- </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="post_thumb">
                                                <a href="{{url('/blog-details')}}"><img src="assets/img/blog/blogs1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('/blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>59.- </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>
                    <br>
                    <a href="{{url('/restaurent')}}" class="btn btn center-block">เพิ่มเติม</a>


                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->


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


    <!-- <script src="js-front-front/jquery-2.2.4.min.js"></script> -->
    <script src="js-front/common_scripts_min.js"></script>
    <script src="js-front/functions.js"></script>
    <script src="assets/validate.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>


    <script>
        $("#confirm").on('change', function() {
            var slidepos = $(this).val();
            if (slidepos > 99) {
                // User slided the slider
                $("#confirm").fadeOut();
                $(".delete-notice").fadeIn();
            }
        });
    </script>
    <script>
        function show1() {
            document.getElementById('money1').style.display = 'block';
        }
    </script>
</body>

</html>