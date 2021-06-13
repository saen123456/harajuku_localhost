<?php

require_once "config.php";
require_once "header.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Safira - cart page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->


    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>

</head>

<body>


    <!--header area start-->

    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>

    <!--header area end-->

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area" style="height:200px;background-image:url(img-take/ปกแบนเนอร์บนสุด-ติดตามสถานะสินค้า.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="breadcrumb_content">
                        <h3>Cart</h3>
                        <ul>
                            <li><a href="{{url('index')}}">home</a></li>
                            <li>Shopping Cart</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shopping cart area start -->
    <div class="shopping_cart_area mt-70">
        <div class="container">
            <form action="#">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <h3>สินค้าแบบเดลิเวอรี่</h3>
                    </div>
                    <div class="col-lg-9 col-xs-12">
                        <div class="table_desc">
                            <div class="cart_page">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th class="product_thumb">รูปภาพ</th>
                                            <th class="product_name">ชื่อรายการ</th>
                                            <th class="product-price">ราคา</th>
                                            <th class="product_quantity">จำนวน</th>
                                            <th class="product_total">ทั้งหมด</th>
                                            <th class="product_remove">ลบ</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product_thumb"><a href="#"><img src="img-take/ss1-ยำหมูยอไข่แดงเค็ม.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">ยำหมูยอไข่เค็ม</a><br><a href="">ยำแซ่บตัวแม่</a></td>
                                            <td class="product-price">200</td>
                                            <td class="product_quantity">
                                                <form id='myform' method='POST' action='#'>
                                                    <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-minus"></span>
                                                    </button>
                                                    <input type="text" name="quant[1]" class=" input-number" value="1" min="1" max="10">
                                                    <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[1]">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="product_total">200</td>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>


                                        </tr>

                                        <tr>
                                            <td class="product_thumb"><a href="#"><img src="img-take/ss2-ผัดไท.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">ผัดไท</a><br><a href="">ผัดไทเจ๊หก</a></td>
                                            <td class="product-price">100</td>
                                            <td class="product_quantity">
                                                <form id='myform' method='POST' action='#'>
                                                    <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[6]">
                                                        <span class="glyphicon glyphicon-minus"></span>
                                                    </button>
                                                    <input type="text" name="quant[6]" class=" input-number" value="1" min="1" max="10">
                                                    <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[6]">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="product_total">100</td>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>


                                        </tr>
                                       

                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <h3>สินค้าแบบรอการจัดส่ง</h3>
                        <div class="table_desc">
                            <div class="cart_page">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_thumb">รูปภาพ</th>
                                            <th class="product_name">ชื่อรายการ</th>
                                            <th class="product-price">ราคา</th>
                                            <th class="product_quantity">จำนวน</th>
                                            <th class="product_total">ทั้งหมด</th>
                                            <th class="product_remove">ลบ</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product_thumb"><a href="#"><img src="img-take/sss1-เสื้อเชิ้ต-Linen-blend-Shirt-Slim-Fit.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">เสื้อเชิ้ต</a><br><a href="">Zara</a></td>
                                            <td class="product-price">650</td>
                                            <td class="product_quantity">
                                                <form id='myform' method='POST' action='#'>
                                                    <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[4]">
                                                        <span class="glyphicon glyphicon-minus"></span>
                                                    </button>
                                                    <input type="text" name="quant[4]" class=" input-number" value="1" min="1" max="10">
                                                    <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[4]">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="product_total">650</td>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>


                                        </tr>

                                        <tr>
                                            <td class="product_thumb"><a href="#"><img src="img-take/sss2--MARILYN-HANDBAGS.jpg" alt=""></a></td>
                                            <td class="product_name"><a href="#">กระเป๋า</a><br><a href="">LYN</a></td>
                                            <td class="product-price">900</td>
                                            <td class="product_quantity">
                                                <form id='myform' method='POST' action='#'>
                                                    <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[3]">
                                                        <span class="glyphicon glyphicon-minus"></span>
                                                    </button>
                                                    <input type="text" name="quant[3]" class=" input-number" value="1" min="1" max="10">
                                                    <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[3]">
                                                        <span class="glyphicon glyphicon-plus"></span>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="product_total">900</td>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>


                                        </tr>
                                       

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-12">
                        <div class="coupon_code cart">
                            <h3 style="background: #ddd;">คูปอง</h3>
                            <div class="coupon_inner">
                                <p>ใส่รหัสคูปองที่นี่.</p>
                                <input placeholder="Coupon code" type="text" style="margin-right:0px;width: 66%;">
                                <button type="submit" style="background: #a8a8a8;">ใช้คูปอง</button>
                            </div>
                        </div>
                        <div class="coupon_code cart">
                            <h3 style="background:#e0e0e0;">รายการทั้งหมด</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>ยอดรวม</p>
                                    <p class="cart_amount">2150</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>ค่าจัดส่ง</p>

                                </div>
                                <div class="cart_subtotal" style="font-weight: 0px;">
                                    <span>เดลิเวอรี่:</span>
                                    <p style="font-weight: 0px !important;"> 0.00</p>
                                </div>

                                <div class="cart_subtotal">
                                    <p>รวมทั้งสิ้น</p>
                                    <p class="cart_amount">2150</p>
                                </div>
                                <div class="checkout_btn">
                                <a class="btn_full" href="{{url('checkout_1')}}" style="font-weight: bold;">ดำเนินการ</a>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->

                <!--coupon code area end-->
            </form>
        </div>
    </div>
    <!--shopping cart area end -->

    <!--footer area start-->
    <?php

    require_once "footer.php";
    ?>
    <!--footer area end-->

    <!-- JS
============================================ -->
    <!--jquery min js-->
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
    <script>
        //plugin bootstrap minus and plus
        //http://jsfiddle.net/laelitenetwork/puJ6G/
        $('.btn-number').click(function(e) {
            e.preventDefault();

            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {

                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }

                } else if (type == 'plus') {

                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                }
            } else {
                input.val(0);
            }
        });
        $('.input-number').focusin(function() {
            $(this).data('oldValue', $(this).val());
        });
        $('.input-number').change(function() {

            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());

            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the minimum value was reached');
                $(this).val($(this).data('oldValue'));
            }
            if (valueCurrent <= maxValue) {
                $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
            } else {
                alert('Sorry, the maximum value was reached');
                $(this).val($(this).data('oldValue'));
            }


        });
        $(".input-number").keydown(function(e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
                // Allow: Ctrl+A
                (e.keyCode == 65 && e.ctrlKey === true) ||
                // Allow: home, end, left, right
                (e.keyCode >= 35 && e.keyCode <= 39)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });
    </script>



</body>

</html>