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
                        <h3>อาหารไทย</h3>
                        <ul>
                            <li><a href="{{url('index')}}">home</a></li>
                            <li>อาหารไทย</li>
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

                <div class=" niceselect_option">
                    <form class="select_option" action="#">
                        <select name="orderby" id="short">

                            <option selected value="1">Sort by average rating</option>
                            <option value="2">Sort by popularity</option>
                            <option value="3">Sort by newness</option>
                            <option value="4">Sort by price: low to high</option>
                            <option value="5">Sort by price: high to low</option>
                            <option value="6">Product Name: Z</option>
                        </select>
                    </form>
                </div>
                <div class=" niceselect_option" style="margin-left: -50%;">
                    <form class="select_option" action="#">
                        <select name="orderby" id="short">

                            <option selected value="1">Sort by average rating</option>
                            <option value="2">Sort by popularity</option>
                            <option value="3">Sort by newness</option>
                            <option value="4">Sort by price: low to high</option>
                            <option value="5">Sort by price: high to low</option>
                            <option value="6">Product Name: Z</option>
                        </select>
                    </form>
                </div>
                <div class="shop_toolbar_btn">

                    <button data-role="grid_3" type="button" class=" btn-grid-3" data-toggle="tooltip" title="3"></button>


                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <!--sidebar widget start-->
                    <aside class="sidebar_widget">
                        <div class="search_box">
                            <input placeholder="Search product..." type="text">
                            <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                        </div>
                        <br>
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


                            <div class="widget_list comments">
                                <div class="widget_title">
                                    <h3>Best Seller</h3>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{url('blog-details')}}"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <a href="{{url('blog-details')}}">ส้มตำ</a>
                                        <p>75</p>
                                    </div>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{url('blog-details')}}"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <a href="{{url('blog-details')}}">ส้มตำ</a>
                                        <p>75</p>
                                    </div>
                                </div>
                                <div class="post_wrapper">
                                    <div class="post_thumb">
                                        <a href="{{url('blog-details')}}"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                                    </div>
                                    <div class="post_info">
                                        <a href="{{url('blog-details')}}">ส้มตำ</a>
                                        <p>75</p>
                                    </div>
                                </div>
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
                        </div>
                    </aside>
                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12">
                    <!--shop wrapper start-->
                    <div class="shop_toolbar_wrapper hidden-xs">

                        <div class="search_box2 search_box col-lg-4 col-xs-12">
                            <input placeholder="Search product..." type="text">
                            <button type="submit"><span class="lnr lnr-magnifier"></span></button>
                        </div>
                        <div class=" niceselect_option ml-5 col-lg-4 col-xs-12">
                            <form class="select_option" action="#">
                                <select name="orderby" id="short">

                                    <option selected value="1">Sort by average rating</option>
                                    <option value="2">Sort by popularity</option>
                                    <option value="3">Sort by newness</option>
                                    <option value="4">Sort by price: low to high</option>
                                    <option value="5">Sort by price: high to low</option>
                                    <option value="6">Product Name: Z</option>
                                </select>
                            </form>
                        </div>


                    </div>
                    <!--shop toolbar start-->

                    <!--shop toolbar end-->
                    <div class="banner_area">
                        <div class="">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="single_banner">
                                        <div class="banner_thumb">
                                            <a href="{{url('shop')}}"><img src="assets/img/bg/banner3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row shop_wrapper">
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/productbig14.jpg" alt=""></a>

                                    <div class="action_links">
                                        <ul>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="product_content grid_content">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

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
                                <div class="product_content list_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></h4>
                                    <div>
                                        <span>
                                            <p><a href="#">Fruits</a></p>
                                        </span>
                                        <span>4.8/5</span>
                                        <span>(<small><a href="#0">98</a></small>)</span>

                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="price_box">
                                        <span class="current_price">$56.00</span>
                                        <span class="old_price">$286.00</span>
                                    </div>
                                    <div class="product_desc">
                                        <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Viva..</p>
                                    </div>
                                    <div class="action_links list_action_right">
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart">Add to Cart</a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                            <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                                <a href="{{url('blog-details')}}"><img src="assets/img/blog/blogs1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>59.- </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="post_thumb">
                                                <a href="{{url('blog-details')}}"><img src="assets/img/blog/blogs1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>59.- </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="post_thumb">
                                                <a href="{{url('blog-details')}}"><img src="assets/img/blog/blogs1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>59.- </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>
                    <br>
                    <a href="{{url('restaurent')}}" class="btn btn center-block">เพิ่มเติม</a>


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