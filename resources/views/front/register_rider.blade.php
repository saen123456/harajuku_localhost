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
                        <h2>สมัครสมาชิก</h2>
                        <ul>
                            <li><a href="{{url('/index')}}">home</a></li>
                            <li>สมัครสมาชิก</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--breadcrumbs area end-->


    <br>
    <div class="accordion_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6 col-xs-12">
                    <h2>ข้อมูลส่วนตัว</h2>
                    <div id="accordion" class="card__accordion">
                        <div class="card card_dipult">
                            <div class="card-header card_accor" id="headingOne">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    รูปถ่ายหน้าตรง

                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>

                                </button>

                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="account_form">

                                        <p>
                                            <label>อัปโหลดรูปถ่ายหน้าตรงของคุณ <span style="color:#D4840B;">(บังคับ)</span></label><br>
                                            <a href="" style="color:#00B6C2;">ดูตัวอย่าง</a>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="avatar-uploadrider">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <div id="imagePreview">
                                                            </div>
                                                        </div>
                                                        <div> <span style="text-align: center;color:#808080">อัพโหลดรูป</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>

                                        </p>

                                        <label><b>รูปโปรไฟล์ที่ดี ควรมีลักษณะดังต่อไปนี้:</b> </label> <br>
                                        <div class="txt_regitride" style="margin-left: 25px;">
                                            <li>รูปถ่ายหน้าตรง ใบหน้าชัดเจน</li>
                                            <li>ไม่มีบุคคล สัตว์ และ/หรือสิ่งของอยู่ในพื้นหลัง</li>
                                            <li>ไม่สวมเครื่องประดับบดบังใบหน้า(หมวก, แว่นกันแคต)</li>
                                            <li>แต่งกายเหมาะสม</li>
                                            <li>เป็นรูปสีไม่เกิน 6 เดือน</li>
                                        </div>


                                        <p>
                                            <!-- <div class="input-radio">
                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Other</span>
                                            </div> -->

                                        </p>
                                        <!-- <p> -->

                                        <!-- </p> -->
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                </p>
                                                <div class="login_submit">
                                                    <button type="submit">SAVE</button>
                                                </div>
                                                <p></p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingTwo">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    บัตรประจำตัวประชาชน
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>

                                </button>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="account_form">

                                        <p>
                                            <label>อัปโหลดรูปบัตรประจำตัวประชาชน (ด้านหน้า) <span style="color:#D4840B;">(บังคับ)</span></label><br>
                                            <a href="" style="color:#00B6C2;">ดูตัวอย่าง</a>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="avatar-uploadrider">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <div id="imagePreview">
                                                            </div>
                                                        </div>
                                                        <div> <span style="text-align: center;color:#808080">อัพโหลดรูป</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>

                                        </p>
                                        <p>
                                            <label style="font-size: 15px;"><b>บัตรประจำตัวประชาชนที่ถูกต้อง ควรมีลักษณะดังต่อไปนี้:</b> </label>
                                            <div class="txt_regitride" style="margin-left: 25px;">
                                                <li>บัตรประจำตัวประชาชนอยู่ในสภาพสมบูรณ์และไม่หมดอายุ</li>
                                                <li>ไม่แห้ไขและตกแต่งรูป</li>
                                                <li>เห็นข้อมูลชัดเจนและครบถ้วน</li>
                                                <li>คลิกเพื่อดูตัวอย่างเอกสารบัตรประจำตัวประชาชน</li>
                                                <li>เป็นรูปสีไม่เกิน 6 เดือน</li>
                                            </div>
                                        </p>
                                        <p>
                                            <label>หมายเลขบัตรประจำตัวประชาชน<span style="color:#D4840B;">(บังคับ)</span></label>
                                            <input type="text" name="first-name" placeholder="หมายเลขบัตรประจำตัวประชาชน">
                                        </p>
                                        <!-- </p> -->
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                </p>
                                                <div class="login_submit">
                                                    <button type="submit">SAVE</button>
                                                </div>
                                                <p></p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingThree">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    ไบอนุญาตขับรถ (ใบขับขี่)
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="account_form">

                                        <p>
                                            <label>อัปโหลดรูปใบขับขี่ (ด้านหน้า) <span style="color:#D4840B;">(บังคับ)</span></label><br>
                                            <a href="" style="color:#00B6C2;">ดูตัวอย่าง</a>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="avatar-uploadrider">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <div id="imagePreview">
                                                            </div>
                                                        </div>
                                                        <div> <span style="text-align: center;color:#808080">อัพโหลดรูป</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>

                                        </p>
                                        <p>
                                            <label style="font-size: 15px;"><b>ใบขับขี่ที่ถูกต้อง ควรมีลักษณะดังต่อไปนี้:</b> </label>
                                            <div class="txt_regitride" style="margin-left: 25px;">
                                                <li>โปรดอัพโหลดใบขับขี่สาธารณะ ถ้ามี</li>
                                                <li>กรณีไม่มีใบขับขี่สารรณะ สามารถอัพโหลดใบขับขี่ส่วนบุคคลได้</li>
                                                <li>ข้อมูลในใบขับขี่ต้องตรงกับบัตรประจำตัวประชาชน</li>
                                                <li>ใบขับขี่อยู่ในสภาพสมบูรณ์และไม่หมดอายุ</li>
                                                <li>ไม่แก้ไขและตกแต่งรูป</li>
                                                <li>เห็นข้อมูลชัดเจนและครบถ้วน</li>
                                            </div>
                                        </p>
                                        <p>
                                            <label>หมายเลขบัตรประจำตัวประชาชน<span style="color:#D4840B;">(บังคับ)</span></label>
                                            <input type="text" name="first-name" placeholder="หมายเลขบัตรประจำตัวประชาชน">
                                        </p>
                                        <!-- </p> -->
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                </p>
                                                <div class="login_submit">
                                                    <button type="submit">SAVE</button>
                                                </div>
                                                <p></p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card_dipult">
                            <div class="card-header card_accor" id="headingfour">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                    บุคคลที่ติดต่อได้ในกรณีฉุกเฉิน
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapseeight" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="account_form">

                                        <p>
                                            <label>ชื่อ-สกุลของบุคคลที่ติตต่อได้ในกรณีฉุกเฉิน<span style="color:#D4840B;">(บังคับ)</span></label>
                                            <input type="text" name="first-name" placeholder="สกุลของบุคคลที่ติตต่อได้ในกรณีฉุกเฉิน">
                                        </p>
                                        <p>
                                            <div class="checkout_form">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <label>ความสัมพันธ์<span style="color:#D4840B;">(บังคับ)</span></label><br>
                                                        <select class="select_option" name="cuntry" id="country">
                                                            <option value="2">บิดา</option>
                                                            <option value="3">มารดา</option>
                                                            <option value="4">พี่น้อง</option>
                                                            <option value="4">เพื่อน</option>
                                                            <option value="4">อื่นๆ</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                        <label>ชื่อ-เบอร์ติตต่อฉุกเฉิน<span style="color:#D4840B;">(บังคับ)</span></label>
                                        <!-- <input type="text" name="first-name" placeholder="เบอร์ติตต่อฉุกเฉิน"> -->
                                        <div class="input-group">
                                            <div class="input-group-addon">66</div>
                                            <input type="text" class="form-control" id="exampleInputAmount" placeholder="">
                                        </div>
                                        <span style="color: #A9A9A9;">เมื่อกดปุ่มอุกเฉิน ทาเกะจะส่ง SMS บอกตำแหน่งปัจจุบันของคุณแก่ผู้ติดต่อกรณีฉุกเฉิน</span>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    <div class="login_submit">
                                                        <button type="submit">SAVE</button>
                                                    </div>
                                                </p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card_dipult">
                            <div class="card-header card_accor" id="headingfive">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                    ข้อมูลบัญชีธนาคาร
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapseseven" class="collapse" aria-labelledby="headingfive" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="account_form">
                                        <p>
                                            <div class="checkout_form">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <label>ชื่อธนาคาร</label><br>
                                                        <select class="select_option" name="cuntry" id="country">
                                                            <option value="2">กสิกร</option>
                                                            <option value="3">กรุงเทพ</option>
                                                            <option value="4">กรุงไทย</option>
                                                            <option value="4">กรุงศี</option>
                                                            <option value="4">อื่นๆ</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <label>เลขบัญชีธนาคาร</label>
                                            <input type="text" name="first-name" placeholder="เลขบัญชีธนาคาร">
                                        </p>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    <div class="login_submit">
                                                        <button type="submit">SAVE</button>
                                                    </div>
                                                </p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingsix">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    ช่องแสดงความยินยอม
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapsefour" class="collapse" aria-labelledby="headingsix" data-parent="#accordion">
                                <div class="card-body">

                                    <!-- <div class="checkout_info"> -->
                                    <form action="#">
                                        <div class="form_group">
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span>ข้าพเจ้าขอรับรองว่า เอกสารที่นำมายื่นกับ ทาเกะ เป็นความความจริง ถูกต้อง และครบถ้วนทุกประการ</span>
                                            </label>
                                            <label for="remember_box">
                                                <input id="remember_box" type="checkbox">
                                                <span>ข้าพเจ้ายินยอมให้ทาเกะหักค่าลงทะเบียน มูลค่า 200 บาทผ่านกระเป้าเงินสด ทันทีหลังเปิตระบบ (ซึ่งท่านสามารถเปิดระบบรับงานได้ตามปกติ)</span>
                                            </label>
                                        </div>
                                        </p>

                                    </form>
                                    <div class="account_form">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    <div class="login_submit">
                                                        <button type="submit">SAVE</button>
                                                    </div>
                                                </p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingseven">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    การรับรองความบกพร่องทางร่างกาย (ถ้ามี)
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingseven" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Donec mattis finibus elit ut tristique. Nullam tempus nunc eget arcu vulputate, eu porttitor tellus commodo. Aliquam erat volutpat. Aliquam consectetur lorem eu viverra lobortis. Morbi gravida, nisi id fringilla ultricies, elit lorem eleifend lorem</p>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingeight">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    Consents
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapsesix" class="collapse" aria-labelledby="headingeight" data-parent="#accordion">
                                <div class="card-body">

                                    <!-- <div class="checkout_info"> -->
                                    <div class="form_group">
                                        <label for="remember_box">
                                            <input id="remember_box" type="checkbox">
                                            <span>ข้าพเจ้าได้อ่าน เข้าใจ และยอมรับ <span style="color: #0FACD4;"> นโยบายความเป็นส่วนของ</span> TA-KE แล้ว</span>
                                        </label>
                                        <label for="remember_box">
                                            <input id="remember_box" type="checkbox">
                                            <span>ข้าพเจ้าได้อ่าน เข้าใจ และยอมรับ <span style="color: #0FACD4;"> เงื่อนไขการให้บริการ</span> TA-KE แล้ว</span>
                                        </label>
                                        <label for="remember_box">
                                            <input id="remember_box" type="checkbox">
                                            <span>ข้าพเจ้าได้อ่าน เข้าใจ และยอมรับ <span style="color: #0FACD4;"> หลักปฏิบัติและจรรยา</span> TA-KE แล้ว</span>
                                        </label>
                                        <label for="remember_box">
                                            <input id="remember_box" type="checkbox">
                                            <span>ข้าพเจ้าได้อ่าน เข้าใจ และยอมรับ <span style="color: #0FACD4;"> เงื่อนไขการให้บริการ</span> TA-KE แล้ว</span>
                                        </label>
                                        <!-- <label>ข้อเสนอจากTA-KE</label> -->

                                    </div>

                                    <div class="account_form">
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                    <div class="login_submit">
                                                        <button type="submit">SAVE</button>
                                                    </div>
                                                </p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </div>
    </div>
    <div class="accordion_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-6 col-xs-12">
                    <h2>ข้อมูลรถยนต์</h2>
                    <div id="accordion2" class="card__accordion">
                        <div class="card card_dipult">
                            <div class="card-header card_accor" id="headingOne">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne1" aria-expanded="false" aria-controls="collapseOne2">
                                    รายละเอียดรถ

                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>

                                </button>

                            </div>

                            <div id="collapseOne1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="account_form">

                                        <p>
                                            <label>อัปโหลดรูปรายการจดทะเบียนรถจักรยานยนต์ <span style="color:#D4840B;">(บังคับ)</span></label><br>
                                            <a href="" style="color:#00B6C2;">ดูตัวอย่าง</a>
                                        </p>
                                        <p>
                                            <div class="row">
                                                <div class="col-lg-4"></div>
                                                <div class="col-lg-4">
                                                    <div class="avatar-uploadrider">
                                                        <div class="avatar-edit">
                                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                            <label for="imageUpload"></label>
                                                        </div>
                                                        <div class="avatar-preview">
                                                            <div id="imagePreview">
                                                            </div>
                                                        </div>
                                                        <div> <span style="text-align: center;color:#808080">อัพโหลดรูป</span></div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4"></div>
                                            </div>

                                        </p>

                                        <label><b>กรณีที่ผู้สมัครเป็นเจ้ของรถ ข้อมูลรถจักรยานยนต์ที่ถูกต้องควรมีลักษณะดังต่อไปนี้ :</b> </label> <br>
                                        <div class="txt_regitride" style="margin-left: 25px;">
                                            <li>ชื่อบนเอกสารต้องตรงกับชื่อผู้สมัคร</li>
                                            <li>ไม่แก้ไขและตกแต่งรูป</li>
                                            <li>เห็นข้อมูลชัดเจนและครบถ้วน</li>
                                        </div>
                                        <br>
                                        <label><b>กรณีที่ผู้สมัครไม่ได้เป็นเจ้ของรถ ข้อมูลรถจักรยานยนต์ที่ถูกต้องควรมีลักษณะดังต่อไปนี้ :</b> </label> <br>
                                        <div class="txt_regitride" style="margin-left: 25px;">
                                            <li>มีใบลงนามยินยอมจากเจ้าของรถ</li>
                                            <li>มีใบลงนามยินยอมจากเจ้าของรถ</li>
                                        </div>

                                        <p>
                                            <!-- <div class="input-radio">
                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                            <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Other</span>
                                            </div> -->

                                        </p>
                                        <!-- <p> -->

                                        <!-- </p> -->
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                </p>
                                                <div class="login_submit">
                                                    <button type="submit">SAVE</button>
                                                </div>
                                                <p></p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card_dipult">
                            <div class="card-header card_accor" id="headingTwo">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo">
                                    ประเภทป้ายรถจักรยานยนต์
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>

                                </button>
                            </div>
                            <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="account_form">
                                        <p>
                                            <div class="checkout_form">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <label>ประเภทป้ายรถจักรยานยนต์<span style="color:#D4840B;">(บังคับ)</span></label><br>
                                                        <select class="select_option" name="cuntry" id="country">
                                                            <option value="2">ป้ายเหลือง</option>
                                                            <option value="3">ป้ายขาว</option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                </p>
                                                <div class="login_submit">
                                                    <button type="submit">SAVE</button>
                                                </div>
                                                <p></p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card  card_dipult">
                            <div class="card-header card_accor" id="headingThree">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree">
                                    กรรมสิทธิ์เจ้าของรถจักรยานยนต์
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapseThree3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <div class="account_form">

                                        <p>
                                            <div class="checkout_form">
                                                <div class="row">
                                                    <div class="col-lg-12 col-xs-12">
                                                        <label>กรรมสิทธิ์เจ้าของรถจักรยานยนต์<span style="color:#D4840B;">(บังคับ)</span></label><br>
                                                        <select class="select_option" name="cuntry" id="country">
                                                            <!-- show_owner -->
                                                            <option value="2" onclick="showowner();">เจ้าของ</option>
                                                            <!-- show_lend -->
                                                            <option value="3" onclick="showlend();">รถยืม </option>
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div id="show_owner">
                                                <div class="checkout_form">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-xs-12">
                                                            <label>ชื่อผู้ถือกรรมสิทธิ์<span style="color:#D4840B;">(บังคับ)</span></label><br>
                                                            <select class="select_option" name="cuntry" id="country">
                                                                <option value="2">ตนเอง</option>
                                                                <option value="3">รถไฟแนนซ์ </option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </p>
                                        <p>
                                            <div id="show_lend">
                                                <div class="checkout_form">
                                                    <p>
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xs-12">

                                                                <div id="show_owner">
                                                                    <div class="checkout_form">
                                                                        <div class="row">
                                                                            <div class="col-lg-12 col-xs-12">
                                                                                <label>ชื่อผู้ถือกรรมสิทธิ์<span style="color:#D4840B;">(บังคับ)</span></label><br>
                                                                                <select class="select_option" name="cuntry" id="country">
                                                                                    <option value="2">ผู้อื่นเป็นเจ้าของ</option>
                                                                                    <option value="3">รถไฟแนนซ์ </option>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </p>
                                                    <div id="">
                                                        <p>
                                                            <label>อัปโหลดรูปหนังสือยินยอมให้ใช้รถจักรยานยนต์ <span style="color:#D4840B;">(บังคับ)</span></label><br>
                                                            <a href="" style="color:#00B6C2;">ดูตัวอย่าง</a>
                                                        </p>
                                                        <p>
                                                            <div class="row">
                                                                <div class="col-lg-4"></div>
                                                                <div class="col-lg-4">
                                                                    <div class="avatar-uploadrider">
                                                                        <div class="avatar-edit">
                                                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                                            <label for="imageUpload"></label>
                                                                        </div>
                                                                        <div class="avatar-preview">
                                                                            <div id="imagePreview">
                                                                            </div>
                                                                        </div>
                                                                        <div> <span style="text-align: center;color:#808080">อัพโหลดรูป</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4"></div>
                                                            </div>

                                                        </p>
                                                        <p>
                                                            <label style="font-size: 15px;"><b>เอกสารยินยอมให้ใช้รถจากเจ้าของรถ ควรมีลักษณะดังต่อไป:</b> </label>
                                                            <div class="txt_regitride" style="margin-left: 25px;">
                                                                <li>ลงนามสำเนาถูกต้อง ชื่อ-สกุลเจ้ของรถ ว่ายินยอมให้นาย/นาง/ใช้รถยี่ห้อ.....รุ่น....ทะเบียน....ในการขับTA-KE ด้วยปากกาน้ำเงินเท่านั้น</li>
                                                                <li>ไม่แก้ไขและตกแต่งรูป</li>
                                                                <li>เห็นข้อมูลชัดเจนและครบถ้วน</li>
                                                            </div>
                                                        </p>
                                                    </div>
                                                    <div id="">
                                                        <p>
                                                            <label>อัปโหลดสัญญาเช่าซื้อ</label><br>
                                                            <a href="" style="color:#00B6C2;">ดูตัวอย่าง</a>
                                                        </p>
                                                        <p>
                                                            <div class="row">
                                                                <div class="col-lg-4"></div>
                                                                <div class="col-lg-4">
                                                                    <div class="avatar-uploadrider">
                                                                        <div class="avatar-edit">
                                                                            <input type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                                            <label for="imageUpload"></label>
                                                                        </div>
                                                                        <div class="avatar-preview">
                                                                            <div id="imagePreview">
                                                                            </div>
                                                                        </div>
                                                                        <div> <span style="text-align: center;color:#808080">อัพโหลดรูป</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4"></div>
                                                            </div>

                                                        </p>
                                                        <p>
                                                            <label style="font-size: 15px;"><b>สัญญาเช่าซื้อ ควรมีลักษณะดังต่อไป:</b> </label>
                                                            <div class="txt_regitride" style="margin-left: 25px;">
                                                                <li>สัญญาซื้อขาย ที่ระบุชื่อผู้ขายคือ ไฟแนนซ์ และ ผู้ซื้อคือบุคคลตามเอกสารยืนยอมน</li>
                                                                <li>ไม่แก้ไขและตกแต่งรูป</li>
                                                                <li>เห็นข้อมูลชัดเจนและครบถ้วน</li>
                                                            </div>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </p>

                                        <div class="row">
                                            <div class="col-4">
                                                <p>
                                                </p>
                                                <div class="login_submit">
                                                    <button type="submit">SAVE</button>
                                                </div>
                                                <p></p>
                                            </div>
                                            <div class="col-4">

                                            </div>
                                            <div class="col-4">

                                            </div>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card_dipult">
                            <div class="card-header card_accor" id="headingfour">
                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseeight8" aria-expanded="false" aria-controls="collapseeight">
                                    อัปโหลดรูปพ.ร.บ.รถจักรยานยนต์ (ป้ายวงกลม/ ใบเสียภาษี)
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                </button>
                            </div>
                            <div id="collapseeight8" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        <label>อัปโหลดสัญญาเช่าซื้อ</label><br>
                                        <a href="" style="color:#00B6C2;">ดูตัวอย่าง</a>
                                    </p>
                                    <p>
                                        <div class="row">
                                            <div class="col-lg-4"></div>
                                            <div class="col-lg-4">
                                                <div class="avatar-uploadrider">
                                                    <div class="avatar-edit">
                                                        <input type='file' id="imageUpload1" accept=".png, .jpg, .jpeg" />
                                                        <label for="imageUpload1"></label>
                                                    </div>
                                                    <div class="avatar-preview">
                                                        <div id="imagePreview1">
                                                        </div>
                                                    </div>
                                                    <div> <span style="text-align: center;color:#808080">อัพโหลดรูป</span></div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4"></div>
                                        </div>

                                    </p>
                                    <p>
                                        <label style="font-size: 15px;"><b>สัญญาเช่าซื้อ ควรมีลักษณะดังต่อไป:</b> </label>
                                        <div class="txt_regitride" style="margin-left: 25px;">
                                            <li>สัญญาซื้อขาย ที่ระบุชื่อผู้ขายคือ ไฟแนนซ์ และ ผู้ซื้อคือบุคคลตามเอกสารยืนยอมน</li>
                                            <li>ไม่แก้ไขและตกแต่งรูป</li>
                                            <li>เห็นข้อมูลชัดเจนและครบถ้วน</li>
                                        </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
        </div>

    </div>


    <!--footer area start-->
    <?php

    require_once "footer.php";
    ?>
    <!--footer area end-->

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
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview1').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview1').hide();
                    $('#imagePreview1').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload1").change(function() {
            readURL(this);
        });
    </script>
    <script>
        function showowner() {
            document.getElementById('show_owner').style.display = 'block';
        }
    </script>
    <script>
        function showlend() {
            document.getElementById('show_lend').style.display = 'block';
        }
    </script>
</body>

</html>