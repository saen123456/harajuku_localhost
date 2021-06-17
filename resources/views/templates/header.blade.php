<header style="position:relative;">
    <div class="header_bottom sticky-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-2 col-xs-2">
                    <a href="/index" id="logo">
                        <img  src="{{asset('img-take/Logo-Harajuku.png')}}" width="100" alt="" data-retina="true" class="hidden-sm hidden-xs" style="float:left;">



                        <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close hidden-lg hidden-md" href="javascript:void(0);"><span>Menu mobile</span></a>

                    </a>
                    <div class="main-menu main-menu ml-lg-5 pull-left">
                        <div id="header_menu">
                            <a href="index"><img src="{{asset('img-take/Logo-Harajuku.png')}}" width="50" height="23" alt="" data-retina="true"></a>
                            <a href="#" class="open_close" id="close_in"><i class="icon_close"></i></a>

                        </div>
                        <ul>

                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">สั่งอาหาร<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="delivery">รวมร้านอาหารทั้งหมด</a></li>
                                    <li><a href="allfoods">รวมอาหารทั้งหมด</a></li>
                                    <li><a href="promotion_food">โปรโมชั่น</a></li>


                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">ช้อปปิ้ง<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="menu-list2">รวมสินค้าทั้งหมด</a></li>
                                    <li><a href="promotion_item">โปรโมชั่น</a></li>


                                </ul>
                            </li>


                        </ul>
                    </div>
                </div>
                <nav class="col-lg-6 col-md-4 col-sm-7 col-xs-5">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="index"><img src="/img/logo-take.png')}}" width="45" height="23" alt="" data-retina="true" class="hidden-lg hidden-md" style="float:right;"></a>

                            <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close hidden-sm hidden-xs" href="javascript:void(0);"><span>Menu mobile</span></a>

                            <div class="search_container">
                                <form action="#">
                                    <label for=""></label>
                                    <div class="search_box">

                                        <input placeholder="DELIVERY TO:" value="" type="text">
                                        <button type="submit"><i class="fas fa-angle-down"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>




                    </div>




                </nav>
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-5">
                    <div class="row align-items-center pull-right">
                        <span class="header_account_list  mini_cart_wrapper">
                            <a href="javascript:void(0)"><span class="lnr lnr-cart"></span><span class="item_count">2</span></a>
                            <!--mini cart-->

                            <!--mini cart end-->
                        </span>
                        <span class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle"><i class="icon ion-ios-contact-outline"></i></h2>
                            </div>

                        </span>
                        <span class="categories_menu_toggle">
                            <ul>

                                <li><a href="profile"> โปรไฟล์</a></li>
                                <li><a href="login"> ล็อกอิน/ลงทะเบียน</a></li>
                                <li><a href="#">จัดการร้านอาหาร</a></li>
                                <li><a href="login">ล็อกอินร้านค้า</a></li>
                                <li><a href="tracking">ติดตามสถานะ</a></li>

                            </ul>
                        </span>
                        <span class="language_currency language_currency2">
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

                      
                    </div>


                </div>

            </div><!-- End row -->
        </div>

    </div>

</header>
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
                  <a href="#"><img src="{{asset('img-take/ss1-ยำหมูยอไข่แดงเค็ม.jpg')}}" alt=""></a>
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
                  <a href="#"><img src="{{asset('img-take/ss2-ผัดไท.jpg')}}" alt=""></a>
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
                  <a href="#"><img src="{{asset('img-take/sss1-เสื้อเชิ้ต-Linen-blend-Shirt-Slim-Fit.jpg')}}" alt=""></a>
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
                  <a href="#"><img src="{{asset('img-take/sss2--MARILYN-HANDBAGS.jpg')}}" alt=""></a>
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
              <a href="cart"><i class="fa fa-shopping-cart"></i> ดูตะกร้าสินค้า</a>
          </div>
          <div class="cart_button">
              <a href="checkout_1"><i class="fa fa-sign-in"></i> ชำระเงิน</a>
          </div>

      </div>
  </div><div class="off_canvars_overlay">

</div>
<div class="cartdown hidden-lg hidden-md">
    <div class="row">
        <div class="col-xs-4">
            <a href="cart"> <span class="lnr lnr-cart"></span><span class="item_count">2</span></a>

        </div>
        <div class="col-xs-4">
            <a href="cart">ดูรถเข็น</a>

        </div>
        <div class="col-xs-4">
            <a href="cart">฿100.00</a>

        </div>

    </div>
</div>
