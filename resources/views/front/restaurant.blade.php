<?php

require_once "config.php";
require_once "header.php";
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Restaurent</title>
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
    <div class="breadcrumbs_area" style="background: url(https://scontent.fbkk2-7.fna.fbcdn.net/v/t1.0-9/119456233_3296082977145867_6490698462509468864_o.jpg?_nc_cat=106&_nc_sid=dd9801&_nc_ohc=gkxZojRAHtEAX-EB3ql&_nc_ht=scontent.fbkk2-7.fna&oh=0f82b856dbc166071c46b1bae9fe02e1&oe=5F894CD2) no-repeat 0 0;" height="400">
        <div class="bgsub">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_content">
                            <div id="subheader">
                                <div id="sub_content">
                                    <div id="thumb"><img src="https://img.wongnai.com/p/1920x0/2017/11/14/0f158a7d373c40bdbc6d6bb8b5268c5c.jpg" alt=""></div>
                                    <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i> (<small><a href="{{url('/detail_page_2')}}">Read 98 reviews</a></small>)</div>
                                    <h1>Maesriruen</h1>
                                    <div><em>BKK / Thailand</em></div>
                                    <div><i class="icon_pin"></i> 135 Newtownards Road, Belfast, BT4 1AB - <strong>Delivery charge:</strong> $10, free over $15.</div>
                               <div><strong><i class="far fa-clock"></i> </strong> 19 นาที <strong><i class="fas fa-motorcycle"></i></strong> 4.7 กม</div>
                                </div><!-- End sub_content -->
                            </div><!-- End subheader -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--breadcrumbs area start-->

    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_fullwidth mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">

                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">

                            <!-- <button data-role="grid_3" type="button" class=" btn-grid-3" data-toggle="tooltip" title="3"></button> -->

                            <!-- <button data-role="grid_4" type="button" class="active btn-grid-4" data-toggle="tooltip" title="4"></button> -->

                            <!-- <button data-role="grid_list" type="button"  class="btn-list" data-toggle="tooltip" title="List"></button> -->
                        </div>
                        <div class=" niceselect_option">
                            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="pills-1-tab" data-toggle="pill" href="#pills-1" role="tab" aria-controls="pills-1" aria-selected="true">ก๋วยเตี๋ยว</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-2-tab" data-toggle="pill" href="#pills-2" role="tab" aria-controls="pills-2" aria-selected="false">ผัดไท</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pills-3-tab" data-toggle="pill" href="#pills-3" role="tab" aria-controls="pills-3" aria-selected="false">หอยทอด</a>
                                </li>
                            </ul>

                        </div>


                        <div class="page_amount">
                            <!-- <p>Showing 1–9 of 21 results</p> -->
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <div class="row shop_wrapper">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-1-tab">
                          
                            <div id="listmunu">
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="pills-2-tab">
                                <div id="listmunu">

                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="pills-3-tab">
                                <div id="listmunu">

                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li class="next"><a href="#">next</a></li>
                                <li><a href="#">>></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
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
                <span aria-hidden="true"><i class="icon-cancel-7"></i></span>
            </button>
            <div id="list_detail"></div>
            
        </div>
    </div> 
      
    </div>

    <!-- modal area end-->

    <script src="assets/js/js-take_products.js"></script>
    <script src="assets/js/js-take_option.js"></script>
    <script src="assets/js/js-detailres.js"></script>
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