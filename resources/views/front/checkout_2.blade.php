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
    <div class="breadcrumbs_area" style="height:200px;background-image:url(img-take/ปกแบนเนอร์บนสุด-ติดตามสถานะสินค้า_1.jpg)">
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
                                    <a href="{{url('cart')}}" class="bs-wizard-dot"></a>
                                </div>

                                <div class="col-xs-4 bs-wizard-step active">
                                    <div class="text-center bs-wizard-stepnum"><strong>2.</strong> Payment</div>
                                    <div class="progress">
                                        <div class="progress-bar"></div>
                                    </div>
                                    <a href="#0" class="bs-wizard-dot"></a>
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

            <div class="col-lg-9 col-xs-12">
                <div class="head_tf">
                    <p>ชำระเงิน</p>
                </div>
                <div class="product_d_inner">
                    <div class="box_style_2 info" style="line-height:30px; margin-bottom:140px; ">
                        <h4>รายละเอียด</h4>
                        <div class="col-lg-6">
                            <div class="row">

                                <div class="col-lg-6 col-xs-6">
                                    <i class="fas fa-coins" style="color:#FFD700; display: inline;"></i>
                                    <p style="display: inline;">รวมยอดเงินที่ต้องชำระ</p>
                                    <!-- <h4>เงินคงเหลือ</h4>
                               <h4>ขาด</h4> -->
                                </div>
                                <div class="col-lg-6 col-xs-6">
                                    <p style="margin-left:-30px;"><b>฿ 1000</b> </p>
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
                                    <p style="margin-left:-30px; color:#1ab60d;"><b>200 Point(฿ 200)</b> </p>
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
                                    <p style="margin-left:-30px; color: #D01F44"><b>฿ 800</b> </p>
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
                            <img src="img-take/ta-kewallet.png" alt="" style="width: 90%; margin-top: -7px;">
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
                                                                    <img class="pull-right" width="50" style="height: 50px;" src="assets/img/icon/visa.png" alt="">
                                                                    <img class="pull-right" width="50" style="height: 50px;" src="assets/img/icon/mastercard.png" alt="">

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
                                                                    <!-- <img class="pull-right" width="150" src="assets/img/icon/papyel.png" alt=""> -->
                                                                    <img src="img-take/ibang_1.PNG" alt="" style="height: 30px;">
                                                                    <img src="img-take/ibang_2.PNG" alt="" style="height: 30px;">
                                                                    <img src="img-take/ibang_3.PNG" alt="" style="height: 30px;">
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
                                                                        <img src="img-take/ibang_1.PNG" alt="">
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
                                                                        <img src="img-take/ibang_2.PNG" alt="">
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
                                                                        <img src="img-take/ibang_3.PNG" alt="">
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
                                                                    <!-- <img class="pull-right" width="150" src="assets/img/icon/papyel.png" alt=""> -->
                                                                    <img src="assets/img/icon/paypal.png" alt="" style="height: 30px;">
                                                                </div>
                                                            </button></td>
                                                    </tr>

                                                </table>
                                            </div>
                                        </div>


                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample" style="border-left: 1px solid #ededed; border-right: 1px solid #ededed; border-bottom: 1px solid #ededed;">
                                        <div class="card-body">      
                                <div class="table table-borderless" style="margin-left:10%;">
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







            <div class="col-lg-3" id="sidebar">
                <div class="theiaStickySidebar">

                    <div id="cart_box">
                        <h3>รายการของคุณ <i class="icon_cart_alt pull-right"></i></h3>
                        <div class="row" id="options_2">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-6">
                                <!-- <hr> -->

                                <label style="padding: 10 0 15px 0px;" class="">
                                    Delivery
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
                                    การส่งแบบรอจัดส่ง
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
                                        ยอดรวม <span class="pull-right">฿2000</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ค่าจัดส่ง <span class="pull-right">0</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="total">
                                        ยอดรวมทังหมด <span class="pull-right">฿200</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <a class="btn_full" href="{{url('checkout_3')}}">ยืนยันชำระเงิน</a>
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
        function show1() {
            document.getElementById('money1').style.display = 'block';
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