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

</head>

<body style="font-size: 15px;">



    <!-- Header ================================================== -->

    <!-- End Header =============================================== -->

    <!-- SubHeader =============================================== -->
    <div class="breadcrumbs_area" style="height:200px;background-image:url(img-take/bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div id="subheader" style="height: 200px;">
                        <div id="sub_content">
                            <!-- <h1>Place your order</h1> -->
                            <div class="bs-wizard">
                                <div class="col-xs-4 bs-wizard-step active">
                                    <div class="text-center bs-wizard-stepnum"><strong>1.</strong> Your details</div>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <a href="#0" class="bs-wizard-dot"></a>
                                </div>

                                <div class="col-xs-4 bs-wizard-step disabled">
                                    <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <a href="{{url('cart_2')}}" class="bs-wizard-dot"></a>
                                </div>

                                <div class="col-xs-4 bs-wizard-step disabled">
                                    <div class="text-center bs-wizard-stepnum"><strong>3.</strong> Finish!</div>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <a href="{{url('cart_3')}}" class="bs-wizard-dot"></a>
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
            <div class="col-lg-9">
                <div class="head_tf">
                    <p>การจัดส่ง</p>
                </div>
            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-9">

                <div class="product_d_inner">
                    <div class="product_info_button">
                        <ul class="nav" role="tablist">
                            <li>
                                <a class="active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Delivery</a>
                            </li>

                            <li>
                                <a data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Shipping</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" style="padding: 0px;">
                        <div class="tab-pane fade show active" id="info" role="tabpanel">
                            <!-- <div class="box_style_2" id="order_process"> -->
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <input type="text" class="form-control" id="firstname_order" name="firstname_order" placeholder="First name">
                            </div>
                            <div class="form-group">
                                <label>นามสกุล</label>
                                <input type="text" class="form-control" id="lastname_order" name="lastname_order" placeholder="Last name">
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์</label>
                                <input type="text" id="tel_order" name="tel_order" class="form-control" placeholder="Telephone/mobile">
                            </div>
                            <div class="form-group">
                                <label>อีเมล</label>
                                <input type="email" id="email_booking_2" name="email_order" class="form-control" placeholder="Your email">
                            </div>
                            <div class="form-group">
                                <label>ที่อยู่</label>
                                <input type="text" id="address_order" name="address_order" class="form-control" placeholder=" Your full address">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>เมือง</label>
                                        <input type="text" id="city_order" name="city_order" class="form-control" placeholder="Your city">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>รหัสไปรษณีย์</label>
                                        <input type="text" id="pcode_oder" name="pcode_oder" class="form-control" placeholder=" Your postal code">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label><i class="icon-calendar-7"></i> วันที่</label>
                                        <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label><i class=" icon-clock"></i> เวลา</label>
                                        <input class="time-pick form-control" value="12:00 AM" type="text">
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <label>หมายเหตุ</label>
                                    <textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>


                        <div class="tab-pane fade" id="reviews" role="tabpanel">
                            <div class="form-group">
                                <label>ชื่อ</label>
                                <input type="text" class="form-control" id="firstname_order" name="firstname_order" placeholder="First name">
                            </div>
                            <div class="form-group">
                                <label>นามสกุล</label>
                                <input type="text" class="form-control" id="lastname_order" name="lastname_order" placeholder="Last name">
                            </div>
                            <div class="form-group">
                                <label>เบอร์โทรศัพท์</label>
                                <input type="text" id="tel_order" name="tel_order" class="form-control" placeholder="Telephone/mobile">
                            </div>
                            <div class="form-group">
                                <label>อีเมล</label>
                                <input type="email" id="email_booking_2" name="email_order" class="form-control" placeholder="Your email">
                            </div>
                            <div class="form-group">
                                <label>ที่อยู่</label>
                                <input type="text" id="address_order" name="address_order" class="form-control" placeholder=" Your full address">
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>เมือง</label>
                                        <input type="text" id="city_order" name="city_order" class="form-control" placeholder="Your city">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label>รหัสไปรษณีย์</label>
                                        <input type="text" id="pcode_oder" name="pcode_oder" class="form-control" placeholder=" Your postal code">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label><i class="icon-calendar-7"></i> วันที่</label>
                                        <input class="date-pick form-control" data-date-format="M d, D" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label><i class=" icon-clock"></i> เวลา</label>
                                        <input class="time-pick form-control" value="12:00 AM" type="text">
                                    </div>
                                </div>
                            </div>

                            <hr>
                            <div class="row">
                                <div class="col-md-12 col-xs-12">
                                    <label>หมายเหตุ</label>
                                    <textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="table_desc mb-0" style="margin-top:0px">
                                <div class="cart_page">
                                    <table class=" ">
                                        <tr>

                                            <td class="tkpoint1"> <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <div class="col-lg-9" style="padding:0;">
                                                        <input type="radio" id value="" checked name="payment_method" checked>
                                                        EMS
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <img class="pull-left" style="height: 30px; width:150px;" src="https://www.adhawk-inter.com/wp-content/uploads/2016/11/ems-logo_0.png" alt="">


                                                    </div>
                                                </button></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="table_desc mb-0" style="margin-top:0px">
                                <div class="cart_page">
                                    <table class=" ">
                                        <tr>

                                            <td class="tkpoint1"> <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <div class="col-lg-9" style="padding:0;">
                                                        <input type="radio" id value="" checked name="payment_method" checked>
                                                        Kerry Express
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <img class="pull-left" style="height: 30px; width:150px;" src="https://www.vippng.com/png/detail/377-3778594_kerry-express-logo-png-kerry-express.png" alt="">

                                                    </div>
                                                </button></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="table_desc mb-0" style="margin-top:0px">
                                <div class="cart_page">
                                    <table class=" ">
                                        <tr>

                                            <td class="tkpoint1"> <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    <div class="col-lg-9" style="padding:0;">
                                                        <input type="radio" id value="" checked name="payment_method" checked>
                                                        DHL
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <img class="pull-left" style="height: 30px; width:150px;" src="https://www.beartai.com/wp-content/uploads/2018/03/DHL_rgb.jpg" alt="">

                                                    </div>
                                                </button></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3" id="sidebar">
                <div class="theiaStickySidebar">

                    <div id="cart_box">
                        <h3>รายการของคุณ <i class="icon_cart_alt pull-right"></i></h3>
                        <div class="row" id="options_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                                <!-- <hr> -->

                                <label style="padding: 10 0 15px 0px;" class="">
                                    <div class="iradio_square-grey" style="position: relative;">Delivery</div>
                                </label>
                            </div>

                        </div><!-- Edn options 2 -->
                        <!-- <hr> -->
                        <table class="table table_summary">
                            <tbody>

                                <tr>
                                    <td>
                                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>2x</strong> ยำหมูยอไข่เค็ม
                                    </td>
                                    <td>
                                        <strong class="pull-right">฿200</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> ผัดไท
                                    </td>
                                    <td>
                                        <strong class="pull-right">฿100</strong>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <div class="row" id="options_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                                <hr>
                                <label style="padding: 10 0 15px 0px;">
                                    <div class="iradio_square-grey checked" style="position: relative;">การส่งแบบรอจัดส่ง</div>
                                </label>
                            </div>

                        </div><!-- Edn options 2 -->

                        <table class="table table_summary">
                            <tbody>
                                <tr>
                                    <td>
                                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> เสื้อเชื้ต
                                    </td>
                                    <td>
                                        <strong class="pull-right">฿600</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="#0" class="remove_item"><i class="icon_minus_alt"></i></a> <strong>1x</strong> กระเป๋า
                                    </td>
                                    <td>
                                        <strong class="pull-right">฿900</strong>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                        <table class="table table_summary">
                            <tbody>
                                <tr>
                                    <td>
                                        ยอดรวม <span class="pull-right">฿2,000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ค่าจัดส่ง <span class="pull-right">0</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="total">
                                        ยอดรวมทังหมด <span class="pull-right">฿2,000</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <a class="btn_full" href="{{url('checkout_2')}}">ต่อไป</a>
                        <a class="btn_full_outline" href="{{url('restaurent')}}"><i class="icon-right"></i> เลือกสินค้าเพิ่มเติม</a>
                    </div>


                </div><!-- End theiaStickySidebar -->
            </div><!-- End col-md-3 -->

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
    <script>
        $('input.date-pick').datepicker('setDate', 'today');
        $('input.time-pick').timepicker({
            minuteStep: 15,
            showInpunts: false
        })
    </script>

</body>

</html>
