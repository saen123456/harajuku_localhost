@include('templates.config')
@include('templates.header')
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
    <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>
</head>

<body>

    <!--header area start-->

    <!--offcanvas menu area start-->



    <!--header area end-->
    <div class="off_canvars_overlay">

    </div>
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area" style="height:200px; background-image:url({{asset('img-take/แบนเนอร์อาหารไทย.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="breadcrumb_content">
                        <h3 style="color: white;">รวมร้านอาหารทั้งหมด</h3>
                        <ul>
                            <li><a href="{{url('index')}}" style="color: white;">home</a></li>
                            <li style="color: white;">รวมร้านอาหารทั้งหมด</li>
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
                <div class="col-lg-3 col-md-12 col-xs-12">
                    <!--sidebar widget start-->
                    <div class="filter-lg hidden-xs">
                        <aside class="sidebar_widget">


                            <div class="widget_inner">
                                <div class="widget_list widget_categories" >
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
                                        <div id="slider-range2"></div>
                                        <input type="text" name="text" id="amount2" />


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
                                        <a href="#"><img src="{{asset('img-take/แบนเนอร์ด้านข้าง-1f.jpg')}}" style="width:100%;" alt=""></a>
                                    </div>
                                </div>
                                <div class="widget_list banner_widget">
                                    <div class="banner_thumb">
                                        <a href="#"><img src="{{asset('img-take/แบนเนอร์ด้านข้าง-2f.jpg')}}" style="width:100%;" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="box_style_1 hidden-lg mt-xs-2">
                        <ul id="cat_nav">
                        <li><a href="#" onclick="myFunction()">FILTER <img class="pull-right" src="{{asset('img-take/filter.png')}}" width="20" alt=""> </a></li>

                        </ul>
                    </div><!-- End box_style_1 -->

                    <div class="filter-xs " id="filter-xs" style="display: none; ">
                        <div class="shop_toolbar_wrapper hidden-xs">

                            <div class="search_box col-lg-4 col-xs-12">
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

                            </div>
                        </aside>
                    </div>

                    <!--sidebar widget end-->
                </div>
                <div class="col-lg-9 col-md-12 col-xs-12">
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
                    <div class="banner-mini">
                        <section class="slider_section ">
                            <div class="slider_area owl-carousel">
                                <div class="banner_area">

                                    <div class="single_banner">
                                        <div class="banner_thumb">
                                            <a href="{{url('shop')}}"><img src="{{asset('img-take/แบนเนอร์อาหารไทยยาว-2.jpg')}}" alt=""></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="banner_area">

                                    <div class="single_banner">
                                        <div class="banner_thumb">
                                            <a href="{{url('shop')}}"><img src="{{asset('img-take/แบนเนอร์อาหารไทยยาว-3.jpg')}}" alt=""></a>
                                        </div>

                                    </div>
                                </div>
                                <div class="banner_area">

                                    <div class="single_banner">
                                        <div class="banner_thumb">
                                            <a href="{{url('shop')}}"><img src="{{asset('assets/img/bg/banner3.jpg')}}" alt=""></a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>


                    <!--shop toolbar end-->
                    <div class="row shop_wrapper grid_4 mt-xs-2">
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('restaurant')}}"><img src="https://img.wongnai.com/p/1920x0/2017/11/14/0f158a7d373c40bdbc6d6bb8b5268c5c.jpg" alt=""></a>
                                    <a class="secondary_img" href="{{url('restaurant')}}"><img src="https://img.wongnai.com/p/1920x0/2017/11/14/0f158a7d373c40bdbc6d6bb8b5268c5c.jpg" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
                                    <div class="action_links hidden-xs">
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt01.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt01.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt02.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt02.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt03.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt03.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt04.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt04.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>


                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt05.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt05.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt05.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt05.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt06.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt06.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt07.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt07.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt8.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt8.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt9.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt9.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
                                        </div>

                                    </div>



                                </div>

                            </div>

                        </div>
                        <div class="col-lg-4 col-xs-6">
                            <div class="single_product">
                                <div class="product_thumb">
                                    <a class="primary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt10.jpg')}}" alt=""></a>
                                    <a class="secondary_img" href="{{url('product-details')}}"><img src="{{asset('img-take/tt10.jpg')}}" alt=""></a>
                                    <div class="label_product">
                                        <span class="label_sale">Sale</span>
                                        <span class="label_new">New</span>
                                    </div>
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
                                            <span class="ratelist">4.8/5 (<small><a href="#0">98</a></small>)</span>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <span class="placelist">
                                                <a href="#">TAKE TOWN</a>
                                            </span>
                                        </div>
                                        <div class="col-lg-5">
                                            <i class="icon_star voted pull-right"></i>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="price_box">
                                                <span>฿ 120 ~ </span>
                                                <span>1048</span>
                                            </div>
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
    @include('templates.footer')

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
                        <div class="col-lg-5 col-xs-12">
                            <div class="modal_tab">
                                <img src="{{asset('assets/img/product/productbig1.jpg')}}" alt="">

                            </div>
                        </div>
                        <div class="col-lg-7 col-xs-12">
                            <div class="widget_list widget_post">
                                <div class="widget_title">
                                    <h3>BONCHON</h3>
                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="{{asset('assets/img/blog/post1.jpg')}}" alt=""></a>
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
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="{{asset('assets/img/blog/post1.jpg')}}" alt=""></a>
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
                                            <div class="">
                                                <a href="{{url('blog-details')}}"><img src="{{asset('assets/img/blog/post1.jpg')}}" alt=""></a>
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
                                <div class="row">
                                    <div class="col-lg-4">

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="checkout_btn">
                                            <a href="{{url('restaurant')}}" class="btn btn">เพิ่มเติม</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">

                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>

                    <br>



                    <br>


                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->


    <!--jquery min js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--popper min js-->
    <script src="{{asset('assets/js/popper.js')}}"></script>
    <!--bootstrap min js-->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!--owl carousel min js-->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!--slick min js-->
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <!--magnific popup min js-->
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!--counterup min js-->
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <!--jquery countdown min js-->
    <script src="{{asset('assets/js/jquery.countdown.js')}}"></script>
    <!--jquery ui min js-->
    <script src="{{asset('assets/js/jquery.ui.js')}}"></script>
    <!--jquery elevatezoom min js-->
    <script src="{{asset('assets/js/jquery.elevatezoom.js')}}"></script>
    <!--isotope packaged min js-->
    <script src="{{asset('assets/js/isotope.pkgd.min.js')}}"></script>
    <!--slinky menu js-->
    <script src="{{asset('assets/js/slinky.menu.js')}}"></script>
    <!--instagramfeed menu js-->
    <script src="{{asset('assets/js/jquery.instagramFeed.min.js')}}"></script>
    <!-- Plugins JS -->

    <script src="{{asset('assets/js/plugins.js')}}"></script>


    <!-- <script src="js-front/jquery-2.2.4.min.js')}}"></script> -->
    <script src="{{asset('js-front/common_scripts_min.js')}}"></script>
    <script src="{{asset('js-front/functions.js')}}"></script>
    <script src="{{asset('assets/validate.js')}}"></script>
    <!-- Main JS -->
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>
        function myFunction() {
            var x = document.getElementById("filter-xs");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</body>

</html>