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

    <div class="banner_area banner2_sidebar banner_gallery2">
        <div class="product_container">
            <div class="row">

                <div class="col-lg-6 col-md-5 col-xs-12">
                    <section class="slider_section bg_left">
                        <div class="slider_area owl-carousel ">
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="{{url('shop')}}"><img src="img-take/ปกบนซ้าย-1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="{{url('shop')}}"><img src="img-take/ปกบนซ้าย-2.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="single_banner">
                                <div class="banner_thumb">
                                    <a href="{{url('shop')}}"><img src="img-take/ปกบนซ้าย-3.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
                <div class="col-lg-6 col-md-3 col-xs-12 hidden-xs">

                    <div class="banner2_sidebar">
                        <section class="slider_section mb-1">
                            <div class="slider_area owl-carousel">
                                <div class="single_banner">
                                    <div class="banner_thumb" id="single_banner">
                                        <a href="{{url('shop')}}"><img src="img-take/ปกบนแบบใหม่-บนขวา-1.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="banner_thumb" id="single_banner">
                                    <a href="{{url('shop')}}"><img src="img-take/ปกบนแบบใหม่-บนขวา-2.jpg" alt=""></a>
                                </div>
                                <div class="banner_thumb" id="single_banner">
                                    <a href="{{url('shop')}}"><img src="img-take/ปกบนแบบใหม่-บนขวา-3.jpg" alt=""></a>
                                </div>
                            </div>
                        </section>
                        <br>
                        <section class="slider_section mt-3 ">
                            <div class="slider_area owl-carousel">
                                <div class="single_banner">
                                    <div class="banner_thumb">
                                        <a href="{{url('shop')}}"><img src="img-take/ปกบนแบบใหม่ล่างขวา1.jpg" alt=""></a>
                                    </div>
                                </div>
                                <div class="banner_thumb">
                                    <a href="{{url('shop')}}"><img src="img-take/ปกบนแบบใหม่ล่างขวา2.jpg" alt=""></a>
                                </div>
                                <div class="banner_thumb">
                                    <a href="{{url('shop')}}"><img src="img-take/ปกบนแบบใหม่ล่างขวา3.jpg" alt=""></a>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area start-->
    <div class="  product_area product_deals orderag  mb-30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title section_title2">

                        <h2>หมวดหมู่</h2>
                    
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="product_carousel product_column5 owl-carousel">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb product_thumb1">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/01-อาหารเกาหลี.jpg" alt=""></a>


                                </div>
                                <div class="catagory_take ">
                                    <h4 href="#">อาหารไทย</h4>

                                </div>

                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb product_thumb1">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/02-อาหารจีน.jpg" alt=""></a>



                                </div>
                                <div class="catagory_take">
                                     <h4 href="#">อาหารไทย</h4>

                                </div>
                            </figure>
                        </article>

                        <article class="single_product">
                            <figure>
                                <div class="product_thumb product_thumb1">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/03-อาหารญี่ปุ่น.jpg" alt=""></a>


                                    <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>
                                </div>

                            </figure>
                        </article>

                        <article class="single_product">
                            <figure>
                                <div class="product_thumb product_thumb1">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/04-อาหารไทย.jpg" alt=""></a>

                                    <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>

                                </div>

                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb product_thumb1">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/05-อาหารตะวันตก.jpg" alt=""></a>

                                    <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>

                                </div>

                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb product_thumb1">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/06-อาหารอินเดีย.jpg" alt=""></a>

                                    <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>

                                </div>

                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb product_thumb1">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/07-อาหารเวียดนาม.jpg" alt=""></a>

                                    <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>

                                </div>

                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb product_thumb1">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/08-อาหารเม็กซิกัน.jpg" alt=""></a>

                                    <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>

                                </div>

                            </figure>
                        </article>



                    </div>

                </div>
            </div>
        </div>
        <br>
        <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <a href="{{url('allfoods')}}" class="btn-take">ดูทั้งหมด</a>
                    </div>
                </div>
            </div>
    </div>
    <section class="productbg_right_side blog_section3 blog_section blog_section2 color_two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title section_title2">
                        <h2>ดีลเด็ดประจำเดือน</h2>
                       
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="product_carousel product_column3 owl-carousel">
                    <div class="col-lg-12 col-xs-12">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{url('blog-details')}}"><img src="img-take/d1.jpg" alt=""></a>
                                </div>

                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{url('blog-details')}}"><img src="img-take/d2.jpg" alt=""></a>
                                </div>

                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{url('blog-details')}}"><img src="img-take/d3.jpg" alt=""></a>
                                </div>

                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{url('blog-details')}}"><img src="img-take/d4.jpg" alt=""></a>
                                </div>

                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{url('blog-details')}}"><img src="img-take/d5.jpg" alt=""></a>
                                </div>

                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-12 col-xs-12">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{url('blog-details')}}"><img src="img-take/d6.jpg" alt=""></a>
                                </div>

                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <a href="{{url('allfoods')}}" class="btn-take">ดูทั้งหมด</a>
                    </div>
                </div>
            </div>
            <br>
    <div class="product_area product_deals mb-30 orderag">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title section_title2">

                        <h2>สั่งอีกครั้ง</h2>
                       
                    </div>
                </div>
            </div>
            <div class="container-fluid productbg_right_side ">
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div class="product_carousel product_column8 owl-carousel ">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/01.jpg" alt=""></a>
                                        <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/02.jpg" alt=""></a>
                                        <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/03.jpg" alt=""></a>
                                        <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/04.jpg" alt=""></a>

                                        <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>


                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/05.jpg" alt=""></a>
                                        <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>



                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/06.jpg" alt=""></a>

                                        <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>


                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/07.jpg" alt=""></a>

                                        <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>


                                    </div>

                                </figure>
                            </article>
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                        <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/08.jpg" alt=""></a>
                                        <div class="catagory_take">
                                         <h4 href="#">อาหารไทย</h4>

                                    </div>



                                    </div>

                                </figure>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">

                        <a href="{{url('allfoods')}}" class="btn-take">ดูทั้งหมด</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!--shop wrapper start-->
                <!--shop toolbar start-->
                <div class="section_title">

                    <h2>เมนูแนะนำ</h2>
                </div>
                <!--shop toolbar end-->
                <div class="row shop_wrapper grid_4">
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/01 สเต็กปลาแซลมอน.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/01 สเต็กปลาแซลมอน.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[1]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[1]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[1]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/01 สเต็กปลาแซลมอน.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/01 สเต็กปลาแซลมอน.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                             <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[2]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[2]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[2]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/02 แพนเค้ก.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/02 แพนเค้ก.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[3]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[3]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[3]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/03 ต้มยำทะเลน้ำข้น.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/03 ต้มยำทะเลน้ำข้น.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                             <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[4]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[4]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[4]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/04 ส้มตำปูปลาร้า.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/04 ส้มตำปูปลาร้า.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                             <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[5]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[5]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[5]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/05 ซูชิ.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/05 ซูชิ.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                             <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[6]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[6]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[6]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/06 ปูผัดผงกะหรี่.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/06 ปูผัดผงกะหรี่.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                             <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[7]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[7]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[7]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/07 ไก่ทอดแม่พลอย.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/07 ไก่ทอดแม่พลอย.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                             <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[8]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[8]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[8]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/08 ชาไข่มุก.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/08 ชาไข่มุก.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                             <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[9]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[9]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[9]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/09 ปลาหมึกทอดกระเทียมพริกไทย.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/09 ปลาหมึกทอดกระเทียมพริกไทย.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                             <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[10]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[10]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[10]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/09 ปลาหมึกทอดกระเทียมพริกไทย.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/09 ปลาหมึกทอดกระเทียมพริกไทย.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>

                             <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[11]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[11]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[11]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-xs-6">
                        <div class="single_product">
                            <div class="product_thumb">
                                <a class="primary_img" href="{{url('product-details')}}"><img src="img-take/10 ไก่ทอดเกาหลี.jpg" alt=""></a>
                                <a class="secondary_img" href="{{url('product-details')}}"><img src="img-take/10 ไก่ทอดเกาหลี.jpg" alt=""></a>

                                <div class="action_links">
                                    <ul>
                                        <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                    </ul>
                                </div>
                            </div>
                             <div class="product_content grid_content">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <span class="product_name"><a href="{{url('product-details')}}">Letraset Sheets</a></span>

                                    </div>
                                    <div class="col-lg-5">
                                        <span class="placelist pull-right">
                                            <a href="#">TAKE TOWN</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="price_box">

                                            <span>฿ 1048</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="product_quantity1">
                                            <form id='myform2' method='POST' action='#'>
                                                <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[12]">
                                                    <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                                <input type="text" name="quant[12]" class=" input-number" value="1" min="1" max="10">
                                                <button type="button" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[12]">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>
                                            </form>
                                        </div>
                                    </div>

                                </div>



                            </div>

                        </div>

                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 col-xs-12">
                        <div class="section_title iconview-menu">

                            <a href="{{url('delivery')}}" class="btn-take">ดูทั้งหมด</a>
                        </div>
                    </div>
                </div>

                <!--shop toolbar end-->
                <!--shop wrapper end-->
            </div>
        </div>
    </div>

    <!--footer area start-->
    <?php
    require_once "footer.php"
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
                                    <img src="img-take/01 สเต็กปลาแซลมอน.jpg" alt="">

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
        </div>
    </div>
    <div class="modal fade" id="modal_box2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-cancel-7"></i></span>
                </button>
                <div class="modal_body">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12">
                                <div class="modal_tab">
                                    <img src="assets/img/product/productbig1.jpg" alt="">

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12">
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
                                                <div class="mini_cart_wrapper mt-5 mb-30">
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
    <script>
        $("#single_banner > div:gt(0)").hide();
        setInterval(function() {
            $('#single_banner > div:first')
                .fadeOut(1000)
                .next()
                .fadeIn(1000)
                .end()
                .appendTo('#single_banner');
        }, 3000);
    </script>
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