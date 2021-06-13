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
                <div class="col-lg-6 col-md-6">
                    <div class="product-details-tab">
                        <div id="img-1" class="zoomWrapper single-zoom">
                            <a href="#">
                                <img id="zoom1" src="assets/img/product/productbig4.jpg" data-zoom-image="assets/img/product/productbig4.jpg" alt="big-1">
                            </a>
                        </div>
                        <div class="single-zoom-thumb">
                            <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig4.jpg" data-zoom-image="assets/img/product/productbig4.jpg">
                                        <img src="assets/img/product/productbig4.jpg" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig1.jpg" data-zoom-image="assets/img/product/productbig1.jpg">
                                        <img src="assets/img/product/productbig1.jpg" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig2.jpg" data-zoom-image="assets/img/product/productbig2.jpg">
                                        <img src="assets/img/product/productbig2.jpg" alt="zo-th-1"/>
                                    </a>

                                </li>
                                <li >
                                    <a href="#" class="elevatezoom-gallery active" data-update="" data-image="assets/img/product/productbig3.jpg" data-zoom-image="assets/img/product/productbig3.jpg">
                                        <img src="assets/img/product/productbig3.jpg" alt="zo-th-1"/>
                                    </a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product_d_right">
                       <form action="#">
                           
                            <h1><a href="#">commodo augue nisi</a></h1>
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
                                <span class="current_price">£70.00</span>
                                <span class="old_price">£80.00</span>
                                
                            </div>
                            <div class="product_desc">
                                <p>eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in </p>
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
                                        <br>
                            <div class="product_variant quantity">
                                <label>quantity</label>
                                <input min="1" max="100" value="1" type="number">
                                <button class="button" type="submit">add to cart</button>  
                                
                            </div>
                            <div class=" product_d_action">
                               <ul>
                                   <li><a href="#" title="Add to wishlist">+ Add to Wishlist</a></li>
                                   <li><a href="#" title="Add to wishlist">+ Compare</a></li>
                               </ul>
                            </div>
                            <div class="product_meta">
                                <span>Category: <a href="#">Clothing</a></span>
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
                                                <span>อาหารอร่อยมากค่ะ</span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="comment_title">
                                        <h2>เพิ่มรีวิว </h2>
                                        <p>รีวิวโดยไม่เปิดเผยตัวตน </p>
                                    </div>
                                    <div class="product_ratting mb-10">
                                        <h3>เรตติ้วของคุณ</h3>
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
                                                <div class="col-lg-12">
                                                    <label for="review_comment">รีวิวของคุณ </label>
                                                    <textarea name="comment" id="review_comment"></textarea>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="author">ชื่อ</label>
                                                    <input id="author" type="text">

                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <label for="email">อีเมล </label>
                                                    <input id="email" type="text">
                                                </div>
                                            </div>
                                            <button type="submit">ยืนยัน</button>
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
                <div class="col-lg-12">
                    <div class="section_title">
                        <h2>Related Products	</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-12">
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                <div class="col-lg-12">
                    <div class="section_title">
                        <h2>Upsell Products	</h2>
                    </div>
                </div>
            </div> 
            <div class="row">
                <div class="col-lg-12">
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
                                        <ul>
                                            <li class="add_to_cart"><a href="{{url('cart')}}" title="Add to cart"><span class="lnr lnr-cart"></span></a></li>
                                            <li class="quick_button"><a href="#" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="lnr lnr-magnifier"></span></a></li>
                                             <li class="wishlist"><a href="{{url('wishlist')}}" title="Add to Wishlist"><span class="lnr lnr-heart"></span></a></li>  
                                            <li class="compare"><a href="#" title="Add to Compare"><span class="lnr lnr-sync"></span></a></li>
                                        </ul>
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
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true" >
        <div class="modal-dialog modal-dialog-centered" role="document" >
            <div class="modal-content" style="max-width: 30%;" >
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
                                                <input type="radio" value="option2" name="options_1" >Large <span>+ $5.30</span>
                                                </label>
                                                <label>
                                                <input type="radio" value="option3" name="options_1" >Extra Large <span>+ $8.30</span>
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


<!-- <script src="js-front/jquery-2.2.4.min.js"></script> -->
<script src="js-front/common_scripts_min.js"></script>
<script src="js-front/functions.js"></script>
<script src="assets/validate.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>

</html>