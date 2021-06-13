<?php

require_once "config.php";
require_once "header.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>menu list</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">



</head>

<body>

    <!--header area start-->

    <!--offcanvas menu area start-->




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

    <!--shop  area start-->
    <div class="shop_area shop_reverse mt-70 mb-70">
        <div class="container">


            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">


                        <div class="widget_inner">
                            <div class="widget_list widget_categories">
                                <h3>Menu Categories</h3>

                            </div>

                        </div>

                        <div class="box_style_1">
                            <ul id="cat_nav">
                                <li><a href="#" class="active">Starters <span>(141)</span></a></li>
                                <li><a href="#">Main Courses <span>(20)</span></a></li>
                                <li><a href="#">Beef <span>(12)</span></a></li>
                                <li><a href="#">Desserts <span>(11)</span></a></li>
                                <li><a href="#">Drinks <span>(20)</span></a></li>
                            </ul>
                        </div><!-- End box_style_1 -->

                       
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="shopping_cart_area">
                        <div class="container">
                            <form action="#">
                                <div class="row">
                                    <div class="col-lg-9 col-xs-12">
                                        <h3>การจัดส่ง Delivery</h3>
                                        <div class="table_desc">
                                            <div class="cart_page">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product_thumb">Image</th>
                                                            <th class="product_name">Product</th>
                                                            <th class="product_name">Product</th>
                                                            <th class="product_name">Product</th>


                                                        </tr>
                                                    </thead>
                                                    <thead>
                                                        <tr>
                                                            <th colspan="12">Image</th>


                                                        </tr>
                                                    </thead>

                                                </table>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="product_thumb"><a href="#"><img src="http://www.msr.co.th/wp-content/uploads/2019/08/P_3-%E0%B8%81%E0%B9%8B%E0%B8%A7%E0%B8%A2%E0%B9%80%E0%B8%95%E0%B8%B5%E0%B9%8B%E0%B8%A2%E0%B8%A7%E0%B8%95%E0%B9%89%E0%B8%99%E0%B8%95%E0%B8%B3%E0%B8%A3%E0%B8%B1%E0%B8%9A-1024x1024.jpg" alt=""></a></td>
                                                            <td class="product_name"><a href="#">ก๋วยเตี๋ยวไก่ต้นตำรับ (น้ำ/แห้ง/ต้มยำ)</a><br><a href="">Maesriruen</a></td>


                                                        </tr>

                                                        <tr>
                                                            <td class="product_thumb"><a href="#"><img src="http://www.msr.co.th/wp-content/uploads/2019/08/P_28-%E0%B8%81%E0%B9%8B%E0%B8%A7%E0%B8%A2%E0%B9%80%E0%B8%95%E0%B8%B5%E0%B9%8B%E0%B8%A2%E0%B8%A7%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B8%9E%E0%B8%B4%E0%B9%80%E0%B8%A8%E0%B8%A9-1024x1024.jpg" alt=""></a></td>
                                                            <td class="product_name"><a href="#">ก๋วยเตี๋ยวไก่สูตรพิเศษ (น้ำ/แห้ง/ต้มยำ)</a><br><a href="">Maesriruen</a></td>


                                                        </tr>
                                                        <tr>
                                                            <td class="product_thumb"><a href="#"><img src="http://www.msr.co.th/wp-content/uploads/2019/08/P_18-%E0%B8%AB%E0%B8%AD%E0%B8%A2%E0%B8%99%E0%B8%B4%E0%B8%A7%E0%B8%97%E0%B8%AD%E0%B8%94%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%B0%E0%B8%A3%E0%B9%89%E0%B8%AD%E0%B8%99-1024x1024.jpg" alt=""></a></td>
                                                            <td class="product_name"><a href="#">หอยทอด</a><br><a href="">Maesriruen</a></td>


                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                        <h3>สินค้าแบบรอจัดส่ง</h3>
                                        <div class="table_desc">
                                            <div class="cart_page">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product_thumb">Image</th>
                                                            <th class="product_name">Product</th>
                                                            <th class="product_name">Product</th>
                                                            <th class="product_name">Product</th>


                                                        </tr>
                                                    </thead>
                                                    <thead>
                                                        <tr>
                                                            <th colspan="12">Image</th>


                                                        </tr>
                                                    </thead>

                                                </table>
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td class="product_thumb"><a href="#"><img src="http://www.msr.co.th/wp-content/uploads/2019/08/P_3-%E0%B8%81%E0%B9%8B%E0%B8%A7%E0%B8%A2%E0%B9%80%E0%B8%95%E0%B8%B5%E0%B9%8B%E0%B8%A2%E0%B8%A7%E0%B8%95%E0%B9%89%E0%B8%99%E0%B8%95%E0%B8%B3%E0%B8%A3%E0%B8%B1%E0%B8%9A-1024x1024.jpg" alt=""></a></td>
                                                            <td class="product_name"><a href="#">ก๋วยเตี๋ยวไก่ต้นตำรับ (น้ำ/แห้ง/ต้มยำ)</a><br><a href="">Maesriruen</a></td>


                                                        </tr>

                                                        <tr>
                                                            <td class="product_thumb"><a href="#"><img src="http://www.msr.co.th/wp-content/uploads/2019/08/P_28-%E0%B8%81%E0%B9%8B%E0%B8%A7%E0%B8%A2%E0%B9%80%E0%B8%95%E0%B8%B5%E0%B9%8B%E0%B8%A2%E0%B8%A7%E0%B8%AA%E0%B8%B9%E0%B8%95%E0%B8%A3%E0%B8%9E%E0%B8%B4%E0%B9%80%E0%B8%A8%E0%B8%A9-1024x1024.jpg" alt=""></a></td>
                                                            <td class="product_name"><a href="#">ก๋วยเตี๋ยวไก่สูตรพิเศษ (น้ำ/แห้ง/ต้มยำ)</a><br><a href="">Maesriruen</a></td>


                                                        </tr>
                                                        <tr>
                                                            <td class="product_thumb"><a href="#"><img src="http://www.msr.co.th/wp-content/uploads/2019/08/P_18-%E0%B8%AB%E0%B8%AD%E0%B8%A2%E0%B8%99%E0%B8%B4%E0%B8%A7%E0%B8%97%E0%B8%AD%E0%B8%94%E0%B8%81%E0%B8%A3%E0%B8%B0%E0%B8%97%E0%B8%B0%E0%B8%A3%E0%B9%89%E0%B8%AD%E0%B8%99-1024x1024.jpg" alt=""></a></td>
                                                            <td class="product_name"><a href="#">หอยทอด</a><br><a href="">Maesriruen</a></td>


                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <!--coupon code area start-->

                                <!--coupon code area end-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->

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
                    <span aria-hidden="true"><i class="icon-x"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <img src="assets/img/product/productbig1.jpg" alt="">

                                </div>
                            </div>
                            <div class="col-lg-5 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">

                                            </form>
                                        </div>
                                        <div class="mini_cart_wrapper mb-15">
                                            <a href="javascript:void(0)" data-dismiss="modal" class="btn btn add_to_basket">Add to cart</a>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->

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