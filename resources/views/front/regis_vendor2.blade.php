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
    <link rel="stylesheet" type="text/css" href="../css/msdropdown/dd.css" />
    <script src="../js/msdropdown/jquery.dd.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/msdropdown/flags.css" />


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
                        <h3>สมัครบริการร้านอาหาร</h3>
                        <ul>
                            <li><a href="{{url('/index')}}">home</a></li>
                            <li>สมัครบริการร้านอาหาร</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--breadcrumbs area end-->


    <br>




    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <!-- One of three columns -->
            </div>
            <div class="col-sm-8">
                <!-- <div class="col-lg-12 col-md-12"> -->
                <div class="account_form register">
                 
                    <form action="#">



                        <h2 class="text-center">สมัครบริการร้านอาหาร</h2>
                        <hr>
                        <h4>ที่อยู่คลังสินค้า</h4>
                        <div class="row">

                            <div class="col-lg-4">
                                <label for="">ประเภทบัญชี</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">ร้านค้าใน</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" name="countries" id="countries">
                                        <option value='ad' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                                        <option value='ae' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                                        <option value='af' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                                        <option value='ag' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value='ai' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                                        <option value='al' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
                                        <option value='am' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                                        <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">ร้านค้าใน</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" name="countries" id="countries">
                                        <option value='ad' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                                        <option value='ae' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                                        <option value='af' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                                        <option value='ag' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value='ai' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                                        <option value='al' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
                                        <option value='am' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                                        <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">ร้านค้าใน</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" name="countries" id="countries">
                                        <option value='ad' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                                        <option value='ae' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                                        <option value='af' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                                        <option value='ag' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value='ai' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                                        <option value='al' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
                                        <option value='am' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                                        <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">ร้านค้าใน</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" name="countries" id="countries">
                                        <option value='ad' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                                        <option value='ae' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                                        <option value='af' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                                        <option value='ag' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value='ai' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                                        <option value='al' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
                                        <option value='am' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                                        <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">หมายเลขโทรศัพท์</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">66</div>
                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <h4>ที่อยู่ บริษัท</h4>

                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">เช่นเดียวกับที่อยู่คลังสินค้า</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">

                            </div>
                        </div>
                        <hr>
                        <h4>ที่อยู่ในการคืนสินค้า</h4>
                        <div class="row">

                            <div class="col-lg-4">
                                <label for="">ประเภทบัญชี</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">ร้านค้าใน</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" name="countries" id="countries">
                                        <option value='ad' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                                        <option value='ae' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                                        <option value='af' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                                        <option value='ag' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value='ai' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                                        <option value='al' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
                                        <option value='am' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                                        <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">ร้านค้าใน</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" name="countries" id="countries">
                                        <option value='ad' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                                        <option value='ae' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                                        <option value='af' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                                        <option value='ag' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value='ai' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                                        <option value='al' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
                                        <option value='am' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                                        <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">ร้านค้าใน</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" name="countries" id="countries">
                                        <option value='ad' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                                        <option value='ae' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                                        <option value='af' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                                        <option value='ag' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value='ai' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                                        <option value='al' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
                                        <option value='am' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                                        <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">ร้านค้าใน</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <select class="form-control" name="countries" id="countries">
                                        <option value='ad' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ad" data-title="Andorra">Andorra</option>
                                        <option value='ae' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ae" data-title="United Arab Emirates">United Arab Emirates</option>
                                        <option value='af' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag af" data-title="Afghanistan">Afghanistan</option>
                                        <option value='ag' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ag" data-title="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value='ai' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag ai" data-title="Anguilla">Anguilla</option>
                                        <option value='al' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag al" data-title="Albania">Albania</option>
                                        <option value='am' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag am" data-title="Armenia">Armenia</option>
                                        <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Netherlands Antilles</option>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <label for="">หมายเลขโทรศัพท์</label>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">66</div>
                                        <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>



            </form>
        </div>
        <!-- </div> -->
    </div>
    <div class="col-sm-2">
        <!-- One of three columns -->
    </div>
    </div>
    </div>


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
                                                <a href="{{url('/blog-details')}}"><img src="assets/img/blog/blogs1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('/blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>59.- </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="post_thumb">
                                                <a href="{{url('/blog-details')}}"><img src="assets/img/blog/blogs1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('/blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>59.- </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="view-menu">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="post_thumb">
                                                <a href="{{url('/blog-details')}}"><img src="assets/img/blog/blogs1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-lg-9">
                                            <div class="post_info">
                                                <h4><a href="{{url('/blog-details')}}">Lorem ipsum dolor </a></h4>
                                                <span>59.- </span>
                                            </div>
                                        </div>
                                    </div>


                                </div>


                            </div>
                        </div>
                    </div>
                    <br>
                    <a href="{{url('/restaurent')}}" class="btn btn center-block">เพิ่มเติม</a>


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


    <script>
        $("#confirm").on('change', function() {
            var slidepos = $(this).val();
            if (slidepos > 99) {
                // User slided the slider
                $("#confirm").fadeOut();
                $(".delete-notice").fadeIn();
            }
        });
    </script>
    <script>
        function show1() {
            document.getElementById('money1').style.display = 'block';
        }
    </script>
</body>

</html>