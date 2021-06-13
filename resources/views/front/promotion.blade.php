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
                        <h3>โปรโมชั่น</h3>
                        <ul>
                            <li><a href="{{url('/index')}}">home</a></li>
                            <li>โปรโมชั่น</li>
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
            <div class="shop_toolbar_wrapper">
            <div class="search_box">
                            <input placeholder="Search product..." type="text">
                             <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                        </div>
                <div class=" niceselect_option" style="margin-left:5%;">
                    <form class="select_option" action="#">
                        <select name="orderby" id="short">

                            <option selected value="1">Sort by average rating</option>
                            <option  value="2">Sort by popularity</option>
                            <option value="3">Sort by newness</option>
                            <option value="4">Sort by price: low to high</option>
                            <option value="5">Sort by price: high to low</option>
                            <option value="6">Product Name: Z</option>
                        </select>
                    </form>
                </div>
                <div class=" niceselect_option" style="margin-left:5%;">
                    <form class="select_option" action="#">
                        <select name="orderby" id="short">

                            <option selected value="1">Sort by average rating</option>
                            <option  value="2">Sort by popularity</option>
                            <option value="3">Sort by newness</option>
                            <option value="4">Sort by price: low to high</option>
                            <option value="5">Sort by price: high to low</option>
                            <option value="6">Product Name: Z</option>
                        </select>
                    </form>
                </div>
               
              
            </div>
              
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
                        
                        <div class="widget_inner">
                          
                            <div class="widget_list widget_filter">
                                <h3>Filter by price</h3>
                                <form action="#"> 
                                    <div id="slider-range"></div>   
                                    <input type="text" name="text" id="amount" />   


                                </form> 
                            </div>
                        
                            <div class="widget_list tags_widget">
                                <h3>Product tags</h3>
                                <div class="tag_cloud">
                                    <a href="#">Men</a>
                                    <a href="#">Women</a>
                                    <a href="#">Watches</a>
                                    <a href="#">Bags</a>
                                    <a href="#">Dress</a>
                                    <a href="#">Belt</a>
                                    <a href="#">Accessories</a>
                                    <a href="#">Shoes</a>
                                </div>
                            </div>
                            <div class="widget_list banner_widget">
                                <div class="banner_thumb">
                                    <a href="#"><img src="assets/img/bg/banner17.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="widget_list banner_widget">
                                <div class="banner_thumb">
                                    <a href="#"><img src="assets/img/bg/banner17.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <!--shop toolbar start-->
                    <div class="banner_area">
                     
                                    <div class="single_banner">
                                        <div class="banner_thumb">
                                            <a href="{{url('/shop')}}"><img src="assets/img/bg/banner3.jpg" alt=""></a> 
                                        </div>
                                   
                        </div>
                    </div>
                     <!--shop toolbar end-->
                     <div class="row shop_wrapper grid_4">
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




                                </div>
                               
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                        <a class="primary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig1.jpg" alt=""></a>
                                        <a class="secondary_img" href="{{url('/product-details')}}"><img src="assets/img/product/productbig2.jpg" alt=""></a>
                                        <div class="label_product">
                                            <span class="label_sale">Sale</span>
                                            <span class="label_new">New</span>
                                        </div>
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('/product-details')}}">Letraset Sheets</a></span>

                                        </div>
                                        <div class="col-lg-4">
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-4">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>




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
                <div class="modal_body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <img src="assets/img/product/productbig1.jpg" alt="">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2> Donec Ac Tempus</h2>
                                    </div>
                                    <hr>
                                    <div class="requiredmenu">
                                        <h5><b>Select an option</b> </h5>
                                        <label>
                                            <input type="radio" value="option1" name="options_1" checked> Medium <span>+ $3.30</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option2" name="options_1"> Large <span>+ $5.30</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option3" name="options_1"> Extra Large <span>+ $8.30</span>
                                        </label>

                                    </div>
                                    <hr>
                                    <div class="requiredmenu">

                                        <h5><b>Add ingredients</b> </h5>
                                        <label>
                                            <input type="radio" value=""> Extra Tomato <span>+ $4.30</span>
                                        </label>
                                        <label>
                                            <input type="radio" value=""> Extra Peppers <span>+ $2.50</span>
                                        </label>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-xs-12">
                                                <label>Notes for the restaurant</label>
                                                <textarea class="form-control" style="height:150px" placeholder="Ex. Allergies, cash change..." name="notes" id="notes"></textarea>
                                            </div>
                                        </div>
                                        <div class="mini_cart_wrapper mb-30">
                                            <a href="javascript:void(0)" data-dismiss="modal" class="add_to_basket">Add to cart</a>

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