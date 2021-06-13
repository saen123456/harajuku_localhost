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
                                    <h1>Maesriruen</h1>
                                    <div><em>BKK / Thailand</em></div>
                                    <div><i class="icon_pin"></i> 135 Newtownards Road, Belfast, BT4 1AB - <strong>Delivery charge:</strong> $10, free over $15.</div>
                                </div><!-- End sub_content -->
                            </div><!-- End subheader -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--shop  area start-->
    <div class="product_details mt-70 mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="product-details-tab">
                        <img src="img-take/ss1-ยำหมูยอไข่แดงเค็ม-ไซส์-600.jpg" data-zoom-image="assets/img/product/productbig4.jpg" alt="big-1">

                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                        <form action="#">

                            <h1><a href="#">ผัดไทยประตูผี</a></h1>
                            <div class="product_nav">
                                <ul>
                                    <li class="prev"><a href="{{url('product-details')}}"><i class="fa fa-angle-left"></i></a></li>
                                    <li class="next"><a href="{{url('variable-product')}}"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                            <div class=" product_ratting">
                                <ul>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li class="review"><a href="#"> (customer review ) </a></li>
                                </ul>

                            </div>
                            <div class="price_box">
                                <span class="current_price">100.00฿</span>
                                <span class="old_price">120.00฿</span>

                            </div>
                            <div class="product_desc">
                                <p>
                                    ยำหมูยอไข่เเดงเค็ม คัดไข่เเดงเองกับมือ รับประความสด อร่อย ไม่คาว
                                    เค็ม ๆ มัน ๆ นัว ๆ บวกกับหมูยอ ส่งตรงจากอุบล เนื้อเเน่น รสชาติเยี่ยม
                                    สามารถเลือกคาวมเเซ่บได้ ไม่ว่าจะเป็นทั้งความเผ็ด กุ้ง ปลาหมึก
                                    เลืแกได้ตามใจชอบ ตัวโต ๆ เนื้อเเน่น ๆ เต็มปากเต็มคำ สั่งเลย !!
                                </p>
                            </div>
                            <div class="product_variant options">
                                <h3>Available Options</h3>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <h4 class="mt-lg-3">Topping</h4>
                                        <ul>
                                            <li class="optionfood"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">กุ้ง</label><br></li>
                                            <li class="optionfood"><input type="checkbox" id="vehicle2" name="vehicle2" value="Bike">
                                                <label for="vehicle2">ทะเล</label><br></li>
                                            <li class="optionfood"><input type="checkbox" id="vehicle3" name="vehicle3" value="Bike">
                                                <label for="vehicle3">ปลาหมึก</label><br></li>
                                            <li class="optionfood"><input type="checkbox" id="vehicle4" name="vehicle4" value="Bike">
                                                <label for="vehicle4">รวมมิตร</label><br></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-xs-12">
                                        <h4 class="mt-lg-3">Taste</h4>
                                        <ul>
                                            <li class="optionfood"><input type="radio" id="taste1" name="taste1" value="Bike">
                                                <label for="taste1">ไม่เผ็ด</label><br></li>
                                            <li class="optionfood"><input type="radio" id="taste2" name="taste2" value="Bike">
                                                <label for="taste2">เผ็ดน้อย</label><br></li>
                                            <li class="optionfood"><input type="radio" id="taste3" name="taste3" value="Bike">
                                                <label for="taste3">เผ็ดกลาง</label><br></li>
                                            <li class="optionfood"><input type="radio" id="taste4" name="taste4" value="Bike">
                                                <label for="taste14">ไม่เผ็ด</label><br></li>
                                        </ul>
                                    </div>
                                </div>



                            </div>

                            <div class="product_quantity1">
                                <form id='myform2' method='POST' action='#'>
                                    <button type="button" class="btn btn-default btn-number qtyminus butsmallleft" disabled="disabled" data-type="minus" data-field="quant[1]">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                    <input type="text" name="quant[1]" class=" input-number" value="0" min="0" max="10">
                                    <button type="button" data-toggle="modal" data-target="#modal_box3" class="btn btn-default btn-number qtyplus butsmallright" data-type="plus" data-field="quant[1]">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </form>
                                <div class="product_variant quantity" style="display: contents;">

                                    <button class="button" type="submit" style="min-width: 70px;">add to cart</button>

                                </div>
                            </div>

                            <div class="product_meta">
                                <span>Category: <a href="#">Food</a></span>
                            </div>

                        </form>
                        <div class="priduct_social">
                            <ul>
                                <li><a class="facebook" href="#" title="facebook"><i class="fa fa-facebook"></i> Like</a></li>
                                <li><a class="twitter" href="#" title="twitter"><i class="fa fa-twitter"></i> tweet</a></li>
                                <li><a class="pinterest" href="#" title="pinterest"><i class="fa fa-pinterest"></i> save</a></li>
                                <li><a class="google-plus" href="#" title="google +"><i class="fa fa-google-plus"></i> share</a></li>
                                <li><a class="linkedin" href="#" title="linkedin"><i class="fa fa-linkedin"></i> linked</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product details end-->

    <!--product info start-->
    <div class="product_d_info mb-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="product_d_inner">
                        <div class="product_info_button">
                            <ul class="nav" role="tablist">


                                <li>
                                    <a class="active" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (1)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content">



                            <div class="tab-pane fade show active" id="reviews" role="tabpanel">
                                <div class="reviews_wrapper">
                                    <h2>1 review for Donec eu furniture</h2>
                                    <div class="reviews_comment_box">
                                        <div class="comment_thmb">
                                            <img src="assets/img/blog/comment2.jpg" alt="">
                                        </div>
                                        <div class="comment_text">
                                            <div class="reviews_meta">
                                                <div class="star_rating">
                                                    <ul>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                        <li><a href="#"><i class="icon-star"></i></a></li>
                                                    </ul>
                                                </div>
                                                <p><strong>admin </strong>- September 12, 2018</p>
                                                <span>roadthemes</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>Add a review </h2>
                                        <p>Your email address will not be published. Required fields are marked </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                        <h3>Your rating</h3>
                                        <ul>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product_review_form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="review_comment">Your review </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">Name</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">Email </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--product info end-->

    <!--product area start-->
    <section class="product_area related_products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">
                        <h2>Related Products </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="product_carousel product_column5 owl-carousel">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product20.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product21.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Quisque In Arcu</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$55.00</span>
                                        <span class="old_price">$235.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product15.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product14.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Cas Meque Metus</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product17.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product16.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Aliquam Consequat</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product14.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product15.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Mauris Vel Tellus</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$48.00</span>
                                        <span class="old_price">$257.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product16.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product17.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Nunc Neque Eros</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$245.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product18.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product19.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Proin Lectus Ipsum</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--product area start-->
    <section class="product_area upsell_products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="section_title">
                        <h2>Upsell Products </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="product_carousel product_column5 owl-carousel">
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product1.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Proin Lectus Ipsum</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product9.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product4.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Quisque In Arcu</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$55.00</span>
                                        <span class="old_price">$235.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product13.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product1.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Mauris Vel Tellus</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$48.00</span>
                                        <span class="old_price">$257.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product12.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Nunc Neque Eros</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$35.00</span>
                                        <span class="old_price">$245.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product1.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product2.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Aliquam Consequat</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$26.00</span>
                                        <span class="old_price">$362.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                        <article class="single_product">
                            <figure>
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="assets/img/product/product3.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="assets/img/product/product4.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                    </div>
                                    <div class="action_links">
                                        <div class="action_links">
                                            <ul>
                                                <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box3" title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <figcaption class="product_content">
                                    <h4 class="product_name"><a href="{{url('product-details')}}">Donec Non Est</a></h4>
                                    <p><a href="#">Fruits</a></p>
                                    <div class="price_box">
                                        <span class="current_price">$46.00</span>
                                        <span class="old_price">$382.00</span>
                                    </div>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shop  area end-->

    <!--footer area start-->
    <?php
    require_once "footer.php";
    ?>
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="max-width: 30%;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fa fa-times"></i></span>
                </button>
                <div class="modal_body" id="optionsmenu">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="modal_tab">
                                    <img src="assets/img/product/productbig1.jpg" alt="">

                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2> Donec Ac Tempus</h2>
                                    </div>
                                    <div class="requiredmenu">
                                        <h5><b>Select an option</b> </h5>
                                        <label>
                                            <input type="radio" value="option1" name="options_1" checked>Medium <span>+ $3.30</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option2" name="options_1">Large <span>+ $5.30</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="option3" name="options_1">Extra Large <span>+ $8.30</span>
                                        </label>

                                    </div>

                                    <div class="requiredmenu">

                                        <h5><b>Add ingredients</b> </h5>
                                        <label>
                                            <input type="radio" value="">Extra Tomato <span>+ $4.30</span>
                                        </label>
                                        <label>
                                            <input type="radio" value="">Extra Peppers <span>+ $2.50</span>
                                        </label>
                                        <a href="#0" class="add_to_basket">Add to cart</a>
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

    <div class="modal fade" id="modal_box3" tabindex="-1" role="dialog" aria-hidden="true">
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

    <script src="assets/js/js-take_products.js"></script>
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


    <!-- <script src="js-front-front/jquery-2.2.4.min.js"></script> -->
    <script src="js-front-front/common_scripts_min.js"></script>
    <script src="js-front-front/functions.js"></script>
    <script src="assets/validate.js"></script>
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