

<?php

require_once "config.php";
require_once "header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="pizza, delivery food, fast food, sushi, take away, chinese, italian food">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title>CHECKOUT</title>

    <!-- Favicons-->
    <link href="css-front/skins/square/grey.css" rel="stylesheet">
</head>

<body>
<div class="off_canvars_overlay">

</div>


    <!-- Header ================================================== -->

    <!-- End Header =============================================== -->

    <!-- SubHeader =============================================== -->
    <div class="breadcrumbs_area" style="height:200px;background-image:url(img-take/bg.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div id="subheader" style="height: 200px;">
                        <div id="sub_content">
                            <h1>Place your order</h1>
                            <div class="bs-wizard">
                                <div class="col-xs-4 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <a href="{{url('checkout_1')}}" class="bs-wizard-dot"></a>
                                </div>

                                <div class="col-xs-4 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <a href="{{url('checkout_2')}}" class="bs-wizard-dot"></a>
                                </div>

                                <div class="col-xs-4 bs-wizard-step complete">
                                    <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <a href="{{url('checkout_3')}}" class="bs-wizard-dot"></a>
                                </div>
                            </div><!-- End bs-wizard -->
                        </div><!-- End sub_content -->
                    </div><!-- End subheader -->
                </div>
            </div>
        </div>
    </div>

    <!-- End SubHeader ============================================ -->



    <!-- Content ================================================== -->
    <div class="container margin_60_35">
        <div class="row">
            <div class="col-lg-12">
                <div class="box_style_2">
                    <h2 class="inner">Order confirmed!</h2>
                    <div id="confirm1">
                        <i class="icon_check_alt2"></i>
                        <h3 style="margin-top: 10px;">Thank you!</h3>
                        <p>
                           TA-KE ได้รับคำสั่งซื้อเรียบร้อยแล้ว จะรีบจัดส่งให้เร็วที่สุด ขอบคุณที่ใช้บริการ
                        </p>
                    </div>
                    <h4 style=" margin-bottom: 5px;">สินค้าแบบเดริเวอรี่</h4>
                    <h5>Tracking No. <a href=""><strong>TK001</strong> </a></h5>
                    <table class="table table-striped nomargin">
                        <tbody>
                            <tr>
                                <td>
                                    <span>1x</span> Enchiladas
                                </td>
                                <td>
                                    <p class="pull-right">฿11</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>2x</span> Burrito
                                </td>
                                <td>
                                    <p class="pull-right">฿14</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>1x</span> Chicken
                                </td>
                                <td>
                                    <p class="pull-right">฿20</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>2x</span> Corona Beer
                                </td>
                                <td>
                                    <p class="pull-right">฿9</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>2x</span> Cheese Cake
                                </td>
                                <td>
                                    <p class="pull-right">฿12</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                กำหนดจัดส่ง <a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="Please consider 30 minutes of margin for the delivery!"><i class="icon_question_alt"></i></a>
                                </td>
                                <td>
                                    <strong class="pull-right">Today 07.30 pm</strong>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                    <br>
                    <h4 style=" margin-bottom: 5px;">สินค้าแบบรอจัดส่ง</h4>
                    <h5>Tracking No. <a href=""><strong>TKMP001</strong> </a></h5>
                    <table class="table table-striped nomargin">
                        <tbody>
                            <tr>
                                <td>
                                    <span>1x</span> Enchiladas
                                </td>
                                <td>
                                    <p class="pull-right">฿11</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>2x</span> Burrito
                                </td>
                                <td>
                                    <p class="pull-right">฿14</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>1x</span> Chicken
                                </td>
                                <td>
                                    <p class="pull-right">฿20</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>2x</span> Corona Beer
                                </td>
                                <td>
                                    <p class="pull-right">฿9</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>2x</span> Cheese Cake
                                </td>
                                <td>
                                    <p class="pull-right">฿12</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    กำหนดจัดส่ง <a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="Please consider 1-3 Days of margin for the delivery!"><i class="icon_question_alt"></i></a>
                                </td>
                                <td>
                                    <strong class="pull-right">1-3 Days</strong>
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                    <table class="table table-striped mt-lg-3">
                        <tbody>
                            <tr>
                                <td class="total_confirm">
                                    TOTAL
                                </td>
                                <td class="total_confirm">
                                    <span class="pull-right">฿66</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    <!-- End Content =============================================== -->

    <!-- Footer ================================================== -->
    <?php

require_once "footer.php";
?>
    <!-- End Footer =============================================== -->

    <div class="layer"></div><!-- Mobile menu overlay mask -->

    <!-- Login modal -->
    <div class="modal fade" id="login_2" tabindex="-1" role="dialog" aria-labelledby="myLogin" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <form action="#" class="popup-form" id="myLogin">
                    <div class="login_icon"><i class="icon_lock_alt"></i></div>
                    <input type="text" class="form-control form-white" placeholder="Username">
                    <input type="text" class="form-control form-white" placeholder="Password">
                    <div class="text-left">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-submit">Submit</button>
                </form>
            </div>
        </div>
    </div><!-- End modal -->

    <!-- Register modal -->
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myRegister" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <form action="#" class="popup-form" id="myRegister">
                    <div class="login_icon"><i class="icon_lock_alt"></i></div>
                    <input type="text" class="form-control form-white" placeholder="Name">
                    <input type="text" class="form-control form-white" placeholder="Last Name">
                    <input type="email" class="form-control form-white" placeholder="Email">
                    <input type="text" class="form-control form-white" placeholder="Password" id="password1">
                    <input type="text" class="form-control form-white" placeholder="Confirm password" id="password2">
                    <div id="pass-info" class="clearfix"></div>
                    <div class="checkbox-holder text-left">
                        <div class="checkbox">
                            <input type="checkbox" value="accept_2" id="check_2" name="check_2" />
                            <label for="check_2"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Register</button>
                </form>
            </div>
        </div>
    </div><!-- End Register modal -->

    <!-- Search Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="icon_close"></i></span>
        <form role="search" id="searchform" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="icon-search-6"></i>
            </button>
        </form>
    </div>
    <!-- End Search Menu -->

    <!-- COMMON SCRIPTS -->
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
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

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
    <script src="js-front/jquery-2.2.4.min.js"></script>
    <script src="js-front/common_scripts_min.js"></script>
    <script src="js-front/functions.js"></script>
    <script src="assets/validate.js"></script>

    <!-- SPECIFIC SCRIPTS -->
    <script src="js-front/ResizeSensor.min.js"></script>
    <script src="js-front/theia-sticky-sidebar.min.js"></script>
    <script>
        jQuery('#sidebar').theiaStickySidebar({
            additionalMarginTop: 80
        });
    </script>

    <!-- Date and time pickers -->
    <script src="js-front/bootstrap-datepicker.js"></script>
    <script src="js-front/bootstrap-timepicker.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $('input.date-pick').datepicker('setDate', 'today');
        $('input.time-pick').timepicker({
            minuteStep: 15,
            showInpunts: false
        })
    </script>
    <script>
        function show2() {
            document.getElementById('money').style.display = 'block';
        }
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script>
        function myFunctionPM1() {
            var x = document.getElementById("check1");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script>
        $('#collapseOne').on('shown', function() {
            $('#radio1').prop('checked', true);
        });

        $('#collapseTwo').on('shown', function() {
            $('#radio2').prop('checked', true);
        });
    </script>
</body>

</html>