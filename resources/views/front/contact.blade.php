<?php

require_once "config.php";
require_once "header_home.php";


?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Main</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">


    <!--modernizr min js here-->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
</head>

<body style="overflow: visible;">

    <!-- Header ================================================== -->
    
    <!-- End Header =============================================== -->
   
    
    <!--contact map start-->

    <div class="contact_map">
       <div class="map-area">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3874.5006696372616!2d100.92156551483113!3d13.808947690310534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d6dd7f9d585bd%3A0xa2f0ad9d19c86690!2z4Lij4LmJ4Liy4LiZ4Lit4Liy4Lir4Liy4Lij4LmB4Lia4Lih4Lia4Li5IOC5g-C4q-C4jeC5iA!5e0!3m2!1sth!2sth!4v1603220359198!5m2!1sth!2sth" width="600" style="border:0; height:300px;" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       </div>
    </div>
    <!--contact map end-->
    
    <!--contact area start-->
    <div class="contact_area">
        <div class="container">   
            <div class="row">
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message content">
                        <h2>ติดต่อเรา</h2>    
                        <ul>
                            <li>&nbsp;<i class="icon_pin_alt fa-lg"></i>ที่อยู่ : 78/11 หมู่บ้าน ซิตี้เซนส์ วัชรพล โซนอี 2 ถนนวัชรพล แขวงท่าแร้ง เขตบางเขน จังหวัดกรุงเทพ 10230</li>
                            <li>&nbsp;<i class="fab fa-facebook-f fa-lg"></i>Facebook : @Ecadigital</li>
                            <li>&nbsp;<i class="fab fa-line fa-lg"></i>LINE : @Ecadigital</li>
                            <li>&nbsp;<i class="fab fa-instagram fa-lg"></i>Instagram : @Ecadigital</li>
                        </ul>
                       
                        <div class="contact_follow">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-xs-6 botton-left" >
                                        <a href="#"><img draggable="false" src="assets/img/icon/instagram.png" width="200" height="100" alt=""></a>
                                        <a href="#"><img draggable="false" src="assets/img/icon/facebook.png" width="200" height="100" alt=""></a>
                                    </div>

                                    <div class="row">
                                        <img draggable="false" src="assets/img/icon/cool.png" width="5" height="50" alt="">
                                    </div>

                                   <div class="col-lg-6 col-md-6 col-xs-6 botton-right">
                                        <a href="#"><img draggable="false" src="assets/img/icon/line.png" width="200" height="100" alt=""></a>
                                        <a href="#"><img  draggable="false" src="assets/img/icon/qrcode.png" width="170" height="100" alt="" class="qrcode_con"></a>
                                    </div>
                                </div>
                        </div> 

                    </div> 
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="contact_message form">
                        <br>  
                        <form id="contact-form" method="POST"  action="assets/mail.php">
                            <p>  
                               <label> Your Name (required)</label>
                                <input name="name" placeholder="Name *" type="text"> 
                            </p>
                            <p>       
                               <label>  Your Email (required)</label>
                                <input name="email" placeholder="Email *" type="email">
                            </p>
							 <p>  
                               <label> Your Name (required)</label>
                                <input name="subject" placeholder="subject *" type="text"> 
                            </p>
                            <p>       
                               <label>  Your Email (required)</label>
                                <input name="phone" placeholder="phone *" type="email">
                            </p>
                           
                            <div class="contact_textarea">
                                <label>  Your Message</label>
                                <textarea placeholder="Message *" name="message"  class="form-control2" ></textarea>     
                            </div>   
                            <button type="submit">Send</button>  
                            <p class="form-messege"></p>
                        </form> 

                    </div> 
                </div>
            </div>
        </div>    
    </div>

    <!--contact area end-->    
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
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="assets/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="assets/img/product/product7.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
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
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
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
