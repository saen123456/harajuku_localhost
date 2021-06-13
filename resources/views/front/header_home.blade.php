<!-- Header ================================================== -->
<header style="padding-bottom:5px !important;">
    <div class="header_bottom sticky-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-2">
                <a href="{{url('index')}}"><img src="img/logo-take.png" width="50" height="15" alt="" data-retina="true" class="hidden-xs"></a>

                    <a href="{{url('index')}}" id="logo">
                        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close hidden-lg hidden-md hidden-sm" href="javascript:void(0);"><span>Menu mobile</span></a>

                    </a>
                </div>
                <nav class="col-lg-8 col-md-8 col-sm-6 col-xs-5">

                    <img src="img/logo-take.png" width="45" height="23" alt="" data-retina="true" class="hidden-lg hidden-md hidden-sm" style="float: right;">

                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close hidden-xs" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu main-menu2">
                        <div id="header_menu">
                            <img src="img/logo-take.png" width="45" height="23" alt="" data-retina="true">
                            <a href="#" class="open_close" id="close_in"><i class="icon_close hidden-lg"></i></a>

                        </div>
                        <ul>

                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">สั่งอาหาร<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="{{url('delivery')}}">รวมร้านอาหารทั้งหมด</a></li>
                                    <li><a href="{{url('allfoods')}}">รวมอาหารทั้งหมด</a></li>
                                    <li><a href="{{url('promotion_food')}}">โปรโมชั่นอาหาร</a></li>


                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">ช้อปปิ้ง<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="{{url('menu-list2')}}">รวมสินค้าทั้งหมด</a></li>
                                    <li><a href="{{url('promotion_item')}}">โปรโมชั่น</a></li>


                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">โปรโมชัน<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="{{url('promotion_food')}}">โปรโมชันอาหาร</a></li>
                                    <li><a href="{{url('promotion_item')}}">โปรโมชันของใช้</a></li>


                                </ul>
                            </li>

                            <li><a href="{{url('event')}}">กิจกรรม</a></li>
                            <li><a href="{{url('contact')}}">ติดต่อเรา</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">ร่วมเป็นส่วนหนึ่งกับเรา<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="{{url('regis_vendor')}}">สมัครเปิดร้านอาหาร</a></li>
                                    <li><a href="{{url('register_index_rider')}}">สมัครไรเดอร์</a></li>


                                </ul>
                            </li>

                        </ul>
                    </div><!-- End main-menu -->
                </nav>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-5">
                    <div class="row align-items-center" id="vendor_icon">


                        <span class="header_account_list homecart  mini_cart_wrapper" style="float:right;">
                            <a href="javascript:void(0)"><span class="lnr lnr-cart"></span><span class="item_count">2</span></a>
                            <!--mini cart-->

                            <!--mini cart end-->
                        </span>

                        <span>

                            <span class="categories_menu " style="width: 25px;">
                                <div class="categories_title home ">
                                    <h2 class="categori_toggle"><i class="icon ion-ios-contact-outline"></i></h2>
                                </div>

                            </span>
                        </span>
                        <span class="categories_menu_toggle">
                            <ul>

                                <li><a href="{{url('profile')}}">Profile</a></li>
                                <li><a href="{{url('login')}}">Login/Register</a></li>
                                <li><a href="{{url('login')}}">Login vendor</a></li>
                                <li><a href="{{url('tracking')}}">ติดตามสถานะ</a></li>

                                <li><a href="#">Oil & Vinegars</a></li>
                                <li><a href="#"> Bread</a></li>
                                <li><a href="#"> Jam & Honey</a></li>
                                <li><a href="#"> Frozen Food</a></li>
                                <li class="hidden"><a href="{{url('shop')}}">New Sofas</a></li>
                                <li class="hidden"><a href="{{url('shop')}}">Sleight Sofas</a></li>
                            </ul>
                        </span>
                        <ul>
                            <li><a href="#"><i class="fas fa-store" style="color: #D01F44; font-size: 18px; display: flex;"></i></a></li>
                        </ul>
                        <span>
                            <span class="language_currency ml-5 mr-5" style="width: 25px;">
                                <ul>
                                    <li class="language"><a href="#"> <i class="fa fa-globe"></i> <i class="fa fa-sort-down" style="margin-top: -5px;"></i></a>
                                        <ul class="dropdown_language">
                                            <li><a href="#">THAI</a></li>
                                            <li><a href="#">ENGLISH</a></li>
                                            <li><a href="#">CHINESE</a></li>
                                        </ul>
                                    </li>

                                </ul>
                            </span>

                        </span>







                    </div>


                </div>

            </div><!-- End row -->
        </div>

    </div>

</header>
<!-- End Header =============================================== -->
<div class="mini_cart">
      <div class="cart_gallery">
          <div class="cart_close">
              <div class="cart_text">
                  <h3>ตะกร้าสินค้า</h3>
              </div>
              <div class="mini_cart_close">
                  <a href="javascript:void(0)"><i class="icon-cancel-2"></i></a>
              </div>
          </div>
          <div class="cart_item">
              <div class="cart_img">
                  <a href="#"><img src="img-take/ss1-ยำหมูยอไข่แดงเค็ม.jpg" alt=""></a>
              </div>
              <div class="cart_info">
                  <a href="#">ยำหมูยอไข่เค็ม</a>
                  <p>1 x <span> ฿200 </span></p>
              </div>
              <div class="cart_remove">
                  <a href="#"><i class="icon-cancel-2"></i></a>
              </div>
          </div>
          <div class="cart_item">
              <div class="cart_img">
                  <a href="#"><img src="img-take/ss2-ผัดไท.jpg" alt=""></a>
              </div>
              <div class="cart_info">
                  <a href="#">ผัดไท</a>
                  <p>1 x <span> ฿100 </span></p>
              </div>
              <div class="cart_remove">
                  <a href="#"><i class="icon-cancel-2"></i></a>
              </div>
          </div>
          <div class="cart_item">
              <div class="cart_img">
                  <a href="#"><img src="img-take/sss1-เสื้อเชิ้ต-Linen-blend-Shirt-Slim-Fit.jpg" alt=""></a>
              </div>
              <div class="cart_info">
                  <a href="#">เสื้อเชื้ต</a>
                  <p>1 x <span> ฿600 </span></p>
              </div>
              <div class="cart_remove">
                  <a href="#"><i class="icon-cancel-2"></i></a>
              </div>
          </div>
          <div class="cart_item">
              <div class="cart_img">
                  <a href="#"><img src="img-take/sss2--MARILYN-HANDBAGS.jpg" alt=""></a>
              </div>
              <div class="cart_info">
                  <a href="#">กระเป๋า</a>
                  <p>1 x <span> ฿900 </span></p>
              </div>
              <div class="cart_remove">
                  <a href="#"><i class="icon-cancel-2"></i></a>
              </div>
          </div>
      </div>
      <div class="mini_cart_table">
          <div class="cart_table_border">
              <div class="cart_total">
                  <span>ยอดรวม</span>
                  <span class="price">฿2150</span>
              </div>
              <div class="cart_total mt-10">
                  <span>ยอดรวมทั้งหมด</span>
                  <span class="price">฿2150</span>
              </div>
          </div>
      </div>
      <div class="mini_cart_footer">
          <div class="cart_button">
              <a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i> ดูตะกร้าสินค้า</a>
          </div>
          <div class="cart_button">
              <a href="{{url('checkout_1')}}"><i class="fa fa-sign-in"></i> ชำระเงิน</a>
          </div>

      </div>
  </div>
   