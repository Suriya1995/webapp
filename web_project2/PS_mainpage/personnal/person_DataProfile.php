<?php include 'main_personnal.php'; ?>
<?php
if (!isset($_GET['id'])) {
    $_GET['id'] = '';
    $_GET['page'] = '';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">
                    <ol class="breadcrumb breadcrumb-col-orange">
                        <li><a href="../../index.php"><i class="material-icons">home</i> หน้าหลัก</a></li>
                        <li><a href="../../PS_mainpage/personnal/person_DataProfile.php"><i class="material-icons">person</i> ระบบบุคลากร</a></li>
                        <li class="active font-bold col-cyan font-14"><i class="material-icons">picture_in_picture</i> ข้อมูลส่วนตัว <span id="showName"><span></li>
                                    </ol>
                                    </div>
                                    <!-- Tabs With Icon Title -->
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="card">

                                                <div class="body">
                                                    <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <li role="presentation" class="active">
                                                            <a href="#personal_information" data-toggle="tab">
                                                                <img class="logo-btn-personIn"/> 
                                                                <span>ข้อมูลส่วนตัว</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="#general_information" data-toggle="tab">
                                                                <img class="logo-btn-general"/> 
                                                                <span>ข้อมูลทั่วไป</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="#address_information" data-toggle="tab">
                                                                <img class="logo-btn-address"/>
                                                                <span>ข้อมูลที่อยู่</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="#history_education" data-toggle="tab">
                                                                <img class="logo-btn-education"/>
                                                                <span>ประวัติการศึกษา</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="#career_history" data-toggle="tab">
                                                                <img class="logo-btn-hiswork"/>
                                                                <span>ประวัติการทำงาน</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="#portfolio" data-toggle="tab">
                                                                <img class="logo-btn-trophy"/>
                                                                <span>ผลงาน</span>
                                                            </a>
                                                        </li>
                                                        <li role="presentation">
                                                            <a href="#more_information" data-toggle="tab">
                                                                <img class="logo-btn-more"/>
                                                                <span>ข้อมูลเพิ่มเติม</span>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <!-- Tab panes -->
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane fade in active" id="personal_information">
                                                            <!-- ข้อมูลส่วนตัว -->
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="card">
                                                                        <div class="body">
                                                                            <div class="demo-masked-input">
                                                                                <form class="form-horizontal">
                                                                                    <div class="row clearfix">
                                                                                        <div class="image">
                                                                                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 align-center">
                                                                                                <div class="list-unstyled aniimated-thumbnials">
                                                                                                    <a href="../../images/moon.jpg" id="person_imgE" data-sub-html="รูปประจำตัว">
                                                                                                        <center><img class="img-responsive img-css" id="imgSE" src="../../images/moon.jpg"></center>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <label class="btn-file-upload">
                                                                                                    <input type='file' id="pro_pictureE" />
                                                                                                    เลือกรูปภาพ
                                                                                                </label>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12" style="margin-bottom: 0px">
                                                                                            <div class="row clearfix">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                                                    <label >เลขที่ตำแหน่ง</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                                                                    <div class="form-group">
                                                                                                        <div class="form-line">
                                                                                                            <input type="text" id="pro_idposE" class="form-control" placeholder="กรอกรหัสตำแหน่ง" maxlength="4" onkeypress="return isNumberKey(event)">
                                                                                                            <input type="hidden" id="pro_id" class="form-control">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row clearfix">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                                                    <label >คำนำหน้า</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 ">
                                                                                                    <select style="width: 100%"  id="pro_prefixE"></select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row clearfix">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                                                    <label >ชื่อ</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                                                                    <div class="form-group">
                                                                                                        <div class="form-line">
                                                                                                            <input type="text" id="pro_fnameE" class="form-control" placeholder="กรอกชื่อ" onkeyup="javascript: keyupFname();">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row clearfix">
                                                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                                                    <label >สกุล</label>
                                                                                                </div>
                                                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 form-control-label-l">
                                                                                                    <div class="form-group">
                                                                                                        <div class="form-line">
                                                                                                            <input type="text" id="pro_lnameE" class="form-control" placeholder="กรอกนามสกุล" onkeyup="javascript: keyupLname();">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                                            <label >เลขบัตรประชาชน</label>
                                                                                        </div>
                                                                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <div class="form-line">
                                                                                                    <input type="text" id="card_idE" class="form-control card-id" placeholder="กรอกเลขบัตรประชาชน" onkeyup="javascript: keyupCardId();">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6 form-control-label-l">
                                                                                            <label >ชื่อเล่น</label>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                                                            <div class="form-group">
                                                                                                <div class="form-line">
                                                                                                    <input type="text" id="pro_nicknameE" class="form-control" placeholder="กรอกชื่อเล่น" onkeyup="javascript: keyupNickname();">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4 form-control-label-l">
                                                                                            <label >เพศ</label>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 align-left form-control-radio" id="pro_sexE" onchange="javascript: changeSex()">
                                                                                            <input name="group1E" type="radio" value="1" id="sex_menE" class="with-gap radio-col-purple" />
                                                                                            <label for="sex_menE">ชาย</label>
                                                                                            <input name="group1E" type="radio" value="2" id="sex_femanE" class="with-gap radio-col-purple" />
                                                                                            <label for="sex_femanE">หญิง</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                            <label >วันเดือนปีเกิด</label>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12" style="margin-bottom: 0px">
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon">
                                                                                                    <i class="material-icons">date_range</i>
                                                                                                </span>
                                                                                                <div class="form-line">
                                                                                                    <input type="text" id="pro_birthdayE" class="form-control date" placeholder="Ex: 30/07/2561" onchange="javascript: changeBirthday()">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-1 col-md-1 col-sm-3 col-xs-12 form-control-label-l">
                                                                                            <label >สถานะ</label>
                                                                                        </div>
                                                                                        <div class="col-lg-5 col-md-5 col-sm-9 col-xs-12 form-control-radio" id="pro_statusE" onchange="javascript: changeStatus()">
                                                                                            <input name="group2E" type="radio" value="โสด" id="status-aloneE" class="with-gap radio-col-purple" />
                                                                                            <label for="status-aloneE">โสด</label>
                                                                                            <input name="group2E" type="radio" value="สมรส" id="status-marryE" class="with-gap radio-col-purple" />
                                                                                            <label for="status-marryE">สมรส</label>
                                                                                            <input name="group2E" type="radio" value="หย่า" id="status-haltE" class="with-gap radio-col-purple" />
                                                                                            <label for="status-haltE">หย่า</label>
                                                                                            <input name="group2E" type="radio" value="หม้าย" id="status-widowE" class="with-gap radio-col-purple" />
                                                                                            <label for="status-widowE">หม้าย</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                            <label >ประเภท</label>
                                                                                        </div>
                                                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="type_idE"></select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                            <label >ตำแหน่ง</label>
                                                                                        </div>
                                                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pos_idE"></select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                            <label >ระดับ</label>
                                                                                        </div>
                                                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="lv_idE"></select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                            <label >ตำแหน่งบริหาร</label>
                                                                                        </div>
                                                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="lvb_idE"></select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                            <label >กลุ่มงาน</label>
                                                                                        </div>
                                                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="class_idE"></select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                            <label >สังกัด</label>
                                                                                        </div>
                                                                                        <div class="col-lg-10 col-md-10t col-sm-9 col-xs-12">
                                                                                            <select class="form-control show-tick" style="width: 100%"data-live-search="true" id="dep_idE"></select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                            <label >วันเข้ารับราชการ</label>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <div class="form-line">
                                                                                                    <input type="text" id="pro_dateInE" class="form-control date" placeholder="__/__/____">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                            <label >วันเกษียณอายุ</label>
                                                                                        </div>
                                                                                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                                                            <div class="form-group">
                                                                                                <div class="form-line">
                                                                                                    <input type="text" id="pro_dateOutE" class="form-control date" placeholder="__/__/____">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row clearfix">
                                                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                            <label >เงินเดือน</label>
                                                                                        </div>
                                                                                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                                                                                            <div class="input-group">
                                                                                                <span class="input-group-addon m-l--10">
                                                                                                    <i class="material-icons">credit_card</i>
                                                                                                </span>
                                                                                                <div class="form-line">
                                                                                                    <input type="number" id="pro_salaryE" class="form-control" placeholder="กรอกจำนวนเงิน">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 form-control-label-l">
                                                                                            <label class="font-bold col-red">*บาท</label>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <div class="row clearfix">
                                                                            <?php if ($_GET['id'] != '') { ?>
                                                                                <div class="align-left col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                                    <button type="button" class="btn btn-warning waves-effect" onclick="javascript: back()">ย้อนกลับ</button>
                                                                                </div>
                                                                                <div class="align-right col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-saveAll">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="align-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- #END# ข้อมูลส่วนตัว -->
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane fade" id="general_information">
                                                            <!-- ข้อมูลทั่วไป -->
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <!--                                                <div class="card">
                                                                                                                    <div class="body">-->
                                                                    <div class="demo-masked-input form-horizontal">
                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ข้อมูลเฉพาะ
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <!--<h2 class="card-inside-title">ข้อมูลเฉพาะ</h2>-->
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label >เลขบัตรประชาชน</label>
                                                                                    </div>
                                                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_card_id" class="form-control card-id" placeholder="กรอกเลขบัตรประชาชน" disabled>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-3 coผl-xs-12 form-control-label-l">
                                                                                        <label >คำนำหน้าเพศ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="gen_prefix">
                                                                                            <option  value="">เลือก</opition>
                                                                                            <option  value="นาย">นาย</opition>
                                                                                            <option  value="นาง">นาง</opition>
                                                                                            <option  value="นางสาว">นางสาว</opition>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >ชื่อ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_fname" class="form-control" placeholder="กรอกชื่อ" disabled>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >สกุล</label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_lname" class="form-control" placeholder="กรอกสกุล" disabled>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                        <label >เพศ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="gen_sex" disabled>
                                                                                            <option  value="">เลือก</opition>
                                                                                            <option  value="1">ชาย</opition>
                                                                                            <option  value="2">หญิง</opition>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >ชื่อเล่น</label>
                                                                                    </div>
                                                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_nickname" class="form-control" placeholder="กรอกชื่อเล่น" disabled>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >วันเดือนปีเกิด</label>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_birthday" class="form-control date" placeholder="กรอกวัน/เดือน/ปีเกิด" disabled>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                        <label >อายุ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_old" class="form-control" placeholder="กรอกอายุ (ปี)" disabled="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >จังหวัดที่เกิด</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="PROVINCE_ID">
                                                                                            <?php
                                                                                            $cn = new management;
                                                                                            $cn->con_db();
                                                                                            echo '<option  value="">เลือก</opition>';
                                                                                            $sql = "select * from ps_province ORDER BY PROVINCE_NAME ASC";
                                                                                            $query = $cn->Connect->query($sql);
                                                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                                                echo '<option  value="' . $rs['PROVINCE_ID'] . '">' . $rs['PROVINCE_NAME'] . '</opition>';
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >สัญชาติ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="nationality_id">
                                                                                            <?php
                                                                                            $cn = new management;
                                                                                            $cn->con_db();
                                                                                            echo '<option  value="">เลือก</opition>';
                                                                                            $sql_thai = "SELECT * FROM ps_nationality WHERE nationality_name = 'ไทย'";
                                                                                            $query_thai = $cn->Connect->query($sql_thai);
                                                                                            while ($rs_thai = mysqli_fetch_array($query_thai)) {
                                                                                                echo '<option  value="' . $rs_thai['nationality_id'] . '">' . $rs_thai['nationality_name'] . '</opition>';
                                                                                            }
                                                                                            $sql = "SELECT * FROM ps_nationality ORDER BY nationality_name ASC";
                                                                                            $query = $cn->Connect->query($sql);
                                                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                                                if ($rs['nationality_name'] != 'ไทย') {
                                                                                                    echo '<option  value="' . $rs['nationality_id'] . '">' . $rs['nationality_name'] . '</opition>';
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >เชื้อชาติ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="nationality_id_race">
                                                                                            <?php
                                                                                            $cn = new management;
                                                                                            $cn->con_db();
                                                                                            echo '<option  value="">เลือก</opition>';
                                                                                            $sql_thai = "SELECT * FROM ps_nationality WHERE nationality_name = 'ไทย'";
                                                                                            $query_thai = $cn->Connect->query($sql_thai);
                                                                                            while ($rs_thai = mysqli_fetch_array($query_thai)) {
                                                                                                echo '<option  value="' . $rs_thai['nationality_id'] . '">' . $rs_thai['nationality_name'] . '</opition>';
                                                                                            }
                                                                                            $sql = "SELECT * FROM ps_nationality ORDER BY nationality_name ASC";
                                                                                            $query = $cn->Connect->query($sql);
                                                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                                                if ($rs['nationality_name'] != 'ไทย') {
                                                                                                    echo '<option  value="' . $rs['nationality_id'] . '">' . $rs['nationality_name'] . '</opition>';
                                                                                                }
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >ศาสนา</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="religion_id">
                                                                                            <?php
                                                                                            $cn = new management;
                                                                                            $cn->con_db();
                                                                                            echo '<option  value="">เลือก</opition>';
                                                                                            $sql = "SELECT * FROM ps_religion ORDER BY religio_name ASC";
                                                                                            $query = $cn->Connect->query($sql);
                                                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                                                echo '<option  value="' . $rs['religion_id'] . '">' . $rs['religio_name'] . '</opition>';
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >กรุ๊ปเลือด</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="gen_blood">
                                                                                            <option  value="">เลือก</opition>
                                                                                            <option  value="A">A</opition>
                                                                                            <option  value="B">B</opition>
                                                                                            <option  value="O">O</opition>
                                                                                            <option  value="AB">AB</opition>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >สถานะภาพสมรส</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="gen_status" disabled>
                                                                                            <option  value="">เลือก</opition>
                                                                                            <option  value="โสด">โสด</opition>
                                                                                            <option  value="สมรส">สมรส</opition>
                                                                                            <option  value="หย่า">หย่า</opition>
                                                                                            <option  value="หม้าย">หม้าย</opition>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >สถานภาพทหาร</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="gen_soldier">
                                                                                            <option  value="">เลือก</opition>
                                                                                            <option  value="ได้รับการยกเว้น">ได้รับการยกเว้น</opition>
                                                                                            <option  value="รับการเกณฑ์ทหารเเล้ว">รับการเกณฑ์ทหารเเล้ว</opition>
                                                                                            <option  value="ยังไม่ได้รับการเกณฑ์ทหาร">ยังไม่ได้รับการเกณฑ์ทหาร</opition>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label >เลขประจำตัวผู้เสียภาษี</label>
                                                                                    </div>
                                                                                    <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_tax" class="form-control" placeholder="กรอกเลขประจำตัวผู้เสียภาษี">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label >เลขที่หนังสือเดินทาง (Passport)</label>
                                                                                    </div>
                                                                                    <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_passport" class="form-control" placeholder="กรอกเลขที่หนังสือเดินทาง">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >บัญชีธนาคาร</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="bank_id">
                                                                                            <?php
                                                                                            $cn = new management;
                                                                                            $cn->con_db();
                                                                                            echo '<option  value="">เลือก</opition>';
                                                                                            $sql = "SELECT * FROM ps_bank ORDER BY bank_name ASC";
                                                                                            $query = $cn->Connect->query($sql);
                                                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                                                echo '<option  value="' . $rs['bank_id'] . '">' . $rs['bank_name'] . '</opition>';
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >เลขที่บัญชี</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_account_number" class="form-control" placeholder="กรอกเลขที่หนังสือเดินทาง">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label>E-mail</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_email" class="form-control email" placeholder="กรอก E-mail">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label >Facebook</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_facebook" class="form-control" placeholder="กรอกชื่อ Facebook">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label >Twitter</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_twitter" class="form-control" placeholder="กรอกชื่อ Twitter">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label >LINE ID</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="gen_line" class="form-control" placeholder="กรอก LINE ID">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ความสามารถพิเศษ
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <!--<h2 class="card-inside-title">ความสามารถพิเศษ</h2>-->
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label >ความสามารถพิเศษ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <textarea type="text" id="gen_talent" class="form-control" placeholder="ระบุความสามารถพิเศษ"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label >ความสนใจ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <textarea type="text" id="gen_interest" class="form-control" placeholder="ระบุความสนใจ"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ความชำนาญพิเศษ
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <!--<h2 class="card-inside-title">ความชำนาญพิเศษ</h2>-->
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label >ด้านความชำนาญ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <textarea type="text" id="expert_name" class="form-control" placeholder="ระบุด้านความชำนาญ"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                        <label >เช่นทาง</label>
                                                                                    </div>
                                                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <textarea type="text" id="expert_ex" class="form-control" placeholder="ระบุตัวอย่างด้านความชำนาญ"></textarea>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ประวัติการเปลี่ยนชื่อ-สกุล
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <!--<h2 class="card-inside-title">ประวัติการเปลี่ยนชื่อ-สกุล</h2>-->
                                                                                <button id="btn_chName" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มประวัติการเปลี่ยนชื่อ" data-toggle="collapse" data-target="#add_chName" aria-expanded="false" aria-controls="collapseExample">
                                                                                    <div class=""> <i class="material-icons">add</i></div>
                                                                                </button>
                                                                                <div class="collapse" id="add_chName"><br>
                                                                                    <form>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่เปลี่ยน</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="chName_date" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >ชื่อเดิม</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="fname_old" class="form-control" placeholder="กรอกชื่อเดิม">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >สกุลเดิม</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="lname_old" class="form-control" placeholder="กรอกสกุลเดิม">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >ชื่อใหม่</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="fname_new" class="form-control" placeholder="กรอกชื่อใหม่">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >สกุลใหม่</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="lname_new" class="form-control" placeholder="กรอกสกุลใหม่">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addChName('ACN')">บันทึก</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div><br>
                                                                                <div class="table-responsive">
                                                                                    <div id="table_chName_show"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ประวัติการสมรส
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <!--<h2 class="card-inside-title">ประวัติการสมรส</h2>-->
                                                                                <button id="btn_marry" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มประวัติสมรส" data-toggle="collapse" data-target="#add_marry" aria-expanded="false" aria-controls="collapseExample">
                                                                                    <div class=""> <i class="material-icons">add</i></div>
                                                                                </button>
                                                                                <div class="collapse" id="add_marry"><br>
                                                                                    <form>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label-l">
                                                                                                <label >ชื่อ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-9">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="marry_fname" class="form-control" placeholder="กรอกชื่อ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-1 col-md-1 col-sm-2 col-xs-3 form-control-label-l">
                                                                                                <label >สกุล</label>
                                                                                            </div>
                                                                                            <div class="col-lg-5 col-md-5 col-sm-4 col-xs-9">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="marry_lname" class="form-control" placeholder="กรอกสกุล">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >สถานะปัจจุบัน</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="marry_relationship" class="form-control" placeholder="ระบุสถานะปัจจุบัน">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addMarry('AMR')">บันทึก</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div><br>
                                                                                <div class="table-responsive">
                                                                                    <div id="table_marry_show"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ข้อมูลทายาท
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <!--<h2 class="card-inside-title">ข้อมูลทายาท</h2>-->
                                                                                <button id="btn_heir" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มข้อมูลทายาท" data-toggle="collapse" data-target="#add_heir" aria-expanded="false" aria-controls="collapseExample">
                                                                                    <div class=""> <i class="material-icons">add</i></div>
                                                                                </button>
                                                                                <div class="collapse" id="add_heir"><br>
                                                                                    <form>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-control-label-l">
                                                                                                <label >ชื่อ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-9">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="heir_fname" class="form-control" placeholder="กรอกชื่อ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3 form-control-label-l">
                                                                                                <label >สกุล</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-9">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="heir_lname" class="form-control" placeholder="กรอกสกุล">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >ความสัมพันธ์</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="heir_relationship" class="form-control" placeholder="ระบุความสัมพันธ์">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addHeir('AH')">บันทึก</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div><br>
                                                                                <div class="table-responsive">
                                                                                    <div id="table_heir_show"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ประวัติทางวินัย
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <!--<h2 class="card-inside-title">ประวัติทางวินัย</h2>-->
                                                                                <button id="btn_blame" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มประวัติทางวินัย" data-toggle="collapse" data-target="#add_blame" aria-expanded="false" aria-controls="collapseExample">
                                                                                    <div class=""> <i class="material-icons">add</i></div>
                                                                                </button>
                                                                                <div class="collapse" id="add_blame"><br>
                                                                                    <form>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่รับโทษ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-5 col-sm-8 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="blame_date" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                                <label >ความผิด</label>
                                                                                            </div>  
                                                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="blame_mistake" class="form-control" placeholder="กรอกความผิด"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                                                                <label >กรณีความผิด</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="blame_mistakeCase" class="form-control" placeholder="กรอกกรณีความผิด"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addBlame('AB')">บันทึก</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div><br>
                                                                                <div class="table-responsive">
                                                                                    <div id="table_blame_show"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <div class="row clearfix">
                                                                            <?php if ($_GET['id'] != '') { ?>
                                                                                <div class="align-left col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                                    <button type="button" class="btn btn-warning waves-effect" onclick="javascript: back()">ย้อนกลับ</button>
                                                                                </div>
                                                                                <div class="align-right col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-saveAll">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="align-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                    <!--</div>-->
                                                                    <!--</div>-->
                                                                </div>
                                                            </div>
                                                            <!-- #END# ข้อมูลทั่วไป -->
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane fade" id="address_information">
                                                            <!-- ข้อมูลที่อยู่ -->
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="demo-masked-input form-horizontal">
                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ที่อยู่ตามทะเบียนบ้าน
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <!--<h2 class="card-inside-title">ที่อยู่ตามทะเบียนบ้าน</h2>-->
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >เลขที่</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="address_number" class="form-control" placeholder="กรอกเลขที่อยู่">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >หมู่</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="address_swine" class="form-control" placeholder="กรอกหมู่">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >ซอย</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="address_soi" class="form-control" placeholder="กรอกซอย">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >ถนน</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="address_road" class="form-control" placeholder="กรอกถนน">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >หมู่บ้าน</label>
                                                                                    </div>
                                                                                    <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="address_village" class="form-control" placeholder="กรอกหมู่บ้าน">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >จังหวัด</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="address_province">
                                                                                            <?php
                                                                                            $cn = new management;
                                                                                            $cn->con_db();
                                                                                            echo '<option  value="">เลือก</opition>';
                                                                                            $sql = "select * from ps_province ORDER BY PROVINCE_NAME ASC";
                                                                                            $query = $cn->Connect->query($sql);
                                                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                                                echo '<option  value="' . $rs['PROVINCE_ID'] . '">' . $rs['PROVINCE_NAME'] . '</opition>';
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >อำเภอ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="address_amphur">
                                                                                            <option  value="">กรุณาเลือกจังหวัด</opition>
                                                                                                <?php
//                                                                                $cn = new management;
//                                                                                $cn->con_db();
//                                                                                echo '<option  value="">กรุณาเลือกจังหวัด</opition>';
//                                                                                $sql = "select * from ps_amphur ORDER BY AMPHUR_NAME ASC";
//                                                                                $query = $cn->Connect->query($sql);
//                                                                                while ($rs = mysqli_fetch_array($query)) {
//                                                                                    echo '<option  value="' . $rs['AMPHUR_ID'] . '">' . $rs['AMPHUR_NAME'] . '</opition>';
//                                                                                }
                                                                                                ?>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >ตำบล</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="address_district">
                                                                                            <option  value="">กรุณาเลือกอำเภอ</opition>
                                                                                                <?php
//                                                                                $cn = new management;
//                                                                                $cn->con_db();
//                                                                                echo '<option  value="">เลือก</opition>';
//                                                                                $sql = "select * from ps_district ORDER BY DISTRICT_NAME ASC";
//                                                                                $query = $cn->Connect->query($sql);
//                                                                                while ($rs = mysqli_fetch_array($query)) {
//                                                                                    echo '<option  value="' . $rs['DISTRICT_ID'] . '">' . $rs['DISTRICT_NAME'] . '</opition>';
//                                                                                }
                                                                                                ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >รหัสไปรษณีย์</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="address_zip_code" class="form-control" maxlength="5" placeholder="กรอกรหัสไปรษณีย์" onkeypress="return isNumberKey(event)">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >โทรศัพท์</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="address_call" class="form-control phone-number" placeholder="กรอกหมายเลขโทรศัพท์">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >มือถือ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="address_fhone" class="form-control mobile-number" placeholder="กรอกเบอร์โทรศัพท์มือถือ">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey demo-checkbox" style="padding: 8px;">
                                                                                <h2>
                                                                                    ที่อยู่ปัจจุบันที่ติดต่อได้
                                                                                </h2>
                                                                                <span class="header-dropdown m-t--15">
                                                                                    <input type="checkbox" id="check_addr" class="filled-in" style="border: 5px solid red;"/>
                                                                                    <label for="check_addr">ที่อยู่เหมือนทะเบียนบ้าน</label>
                                                                                </span>
                                                                            </div>
                                                                            <div class="body">
                                                                                <!--<h2 class="card-inside-title">ที่อยู่ตามทะเบียนบ้าน</h2>-->
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >เลขที่</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="pread_number" class="form-control" placeholder="กรอกเลขที่อยู่">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >หมู่</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="pread_swine" class="form-control" placeholder="กรอกหมู่">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >ซอย</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="pread_soi" class="form-control" placeholder="กรอกซอย">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >ถนน</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="pread_road" class="form-control" placeholder="กรอกถนน">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >หมู่บ้าน</label>
                                                                                    </div>
                                                                                    <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="pread_village" class="form-control" placeholder="กรอกหมู่บ้าน">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >จังหวัด</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pread_province">
                                                                                            <?php
                                                                                            $cn = new management;
                                                                                            $cn->con_db();
                                                                                            echo '<option  value="">เลือก</opition>';
                                                                                            $sql = "select * from ps_province ORDER BY PROVINCE_NAME ASC";
                                                                                            $query = $cn->Connect->query($sql);
                                                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                                                echo '<option  value="' . $rs['PROVINCE_ID'] . '">' . $rs['PROVINCE_NAME'] . '</opition>';
                                                                                            }
                                                                                            ?>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >อำเภอ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pread_amphur">
                                                                                            <option  value="">กรุณาเลือกจังหวัด</opition>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >ตำบล</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pread_district">
                                                                                            <option  value="">กรุณาเลือกอำเภอ</opition>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >รหัสไปรษณีย์</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="pread_zip_code" class="form-control" placeholder="กรอกรหัสไปรษณีย์" maxlength="5" onkeypress="return isNumberKey(event)">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row clearfix">
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >โทรศัพท์</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="pread_call" class="form-control phone-number" placeholder="กรอกหมายเลขโทรศัพท์">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                        <label >มือถือ</label>
                                                                                    </div>
                                                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                        <div class="form-group">
                                                                                            <div class="form-line">
                                                                                                <input type="text" id="pread_fhone" class="form-control mobile-number" placeholder="กรอกเบอร์โทรศัพท์มือถือ">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <div class="row clearfix">
                                                                            <?php if ($_GET['id'] != '') { ?>
                                                                                <div class="align-left col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                                    <button type="button" class="btn btn-warning waves-effect" onclick="javascript: back()">ย้อนกลับ</button>
                                                                                </div>
                                                                                <div class="align-right col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-saveAll">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="align-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- #END# ข้อมูลที่อยู่ -->
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane fade" id="history_education">
                                                            <!-- ประวัติการศึกษา -->
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="demo-masked-input">
                                                                        <div class="card">
                                                                            <!--                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                                                                            <h2>
                                                                                                                                                ระดับการศึกษาสูงสุด
                                                                                                                                            </h2>
                                                                                                                                        </div>-->
                                                                            <div class="body">
                                                                                <button type="button" class="btn bg-indigo waves-effect btn-aedu btn_edu" style="padding: 2px 10px;" data-toggle-tootip="tooltip" data-placement="top" title="" data-original-title="เพิ่มช่องกรอกข้อมูล">
                                                                                    <i class="material-icons">add</i>
                                                                                </button>
                                                                                <button type="button" class="btn bg-red waves-effect btn-dedu btn_edu" style="padding: 2px 10px;" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="ลดช่องกรอกข้อมูล">
                                                                                    <i class="material-icons">remove</i>
                                                                                </button><br><br>
                                                                                <form class="form-horizontal btn_edu" id="reset_edu">
                                                                                    <div id="clone_edu">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >ระดับการศึกษา</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <select class="form-control show-tick hised_level" style="width: 100%" data-live-search="true" id="hised_level">
                                                                                                    <?php
                                                                                                    $cn = new management;
                                                                                                    $cn->con_db();
                                                                                                    echo '<option  value="">เลือก</opition>';
                                                                                                    $sql = "select * from ps_leveleducation ORDER BY edu_id ASC";
                                                                                                    $query = $cn->Connect->query($sql);
                                                                                                    while ($rs = mysqli_fetch_array($query)) {
                                                                                                        echo '<option  value="' . $rs['edu_id'] . '">' . $rs['edu_name'] . '</opition>';
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >ปีที่จบ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="hised_year">
                                                                                                    <?php
                                                                                                    echo '<option  value="">เลือก</opition>';
                                                                                                    $i = (date("Y") - 70) + 543;
                                                                                                    while ($i <= (date("Y") + 543)) {
                                                                                                        echo '<option  value="' . $i . '">' . $i . '</opition>';
                                                                                                        $i++;
                                                                                                    }
                                                                                                    ?>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >วุฒิการศึกษา</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hised_background" class="form-control" placeholder="กรอกวุฒิการศึกษา">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >วิชาเอก</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hised_major" class="form-control" placeholder="กรอกวิชาเอก">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >สถานศึกษา</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hised_address" class="form-control" placeholder="กรอกสถานศึกษา">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >ประเทศ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hised_country" class="form-control" placeholder="กรอกประเทศ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="insert-edu"></div>
                                                                                    <div class="row clearfix align-right m-r-15">
                                                                                        <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                        <button type="button" class="btn btn-success waves-effect" onclick="javascript: addEdu('AED')">บันทึก</button>
                                                                                    </div>
                                                                                </form>
                                                                                <br>
                                                                                <div class="table-responsive">
                                                                                    <div id="table_education_show"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <div class="row clearfix">
                                                                            <?php if ($_GET['id'] != '') { ?>
                                                                                <div class="align-left col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                                    <button type="button" class="btn btn-warning waves-effect" onclick="javascript: back()">ย้อนกลับ</button>
                                                                                </div>
                                                                                <div class="align-right col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-saveAll">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="align-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- #END# ประวัติการศึกษา -->
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane fade" id="career_history">
                                                            <!-- ประวัติการทำงาน -->
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="demo-masked-input">
                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ประวัติการรับราชการ
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <form class="form-horizontal">
                                                                                    <button id="btn_hisser" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มประวัติการรับราชการ" data-toggle="collapse" data-target="#add_hisser" aria-expanded="false" aria-controls="collapseExample">
                                                                                        <div class=""> <i class="material-icons">add</i></div>
                                                                                    </button>
                                                                                    <div class="collapse" id="add_hisser"><br>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >กรม</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hissv_office" class="form-control" placeholder="กรอกกรมที่เคยรับราชการ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >สังกัด</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hissv_department" class="form-control" placeholder="กรอกสังกัด">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >ตำแหน่ง</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hissv_position" class="form-control" placeholder="กรอกตำแหน่ง">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >เลขที่ตำแหน่ง</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hissv_poscod" class="form-control" placeholder="กรอกเลขที่ตำแหน่ง" maxlength="10" onkeypress="return isNumberKey(event)">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่รับราชการ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hissv_date" class="form-control date" placeholder="กรอกวันที่รับราชการ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >อัตราเงินเดือน</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                                                <div class="input-group m-l--10" style="margin-bottom: 0px;">
                                                                                                    <span class="input-group-addon">
                                                                                                        <i class="material-icons">credit_card</i>
                                                                                                    </span>
                                                                                                    <div class="form-line">
                                                                                                        <input type="number" id="hissv_salary" class="form-control" placeholder="กรอกอัตราเงินเดือน">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label-l">
                                                                                                <label >ประเภทการเคลื่อนไหว</label>
                                                                                            </div>
                                                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="hissv_type" class="form-control" placeholder="กรอกประเภทการเคลื่อนไหว"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addHisv('AHISV')">บันทึก</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="table-responsive">
                                                                                        <div id="table_hisService_show"></div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ประวัติราชการพิเศษ
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <form class="form-horizontal">
                                                                                    <button id="btn_serSpecial" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มประวัติราชการพิเศษ" data-toggle="collapse" data-target="#add_serSpecial" aria-expanded="false" aria-controls="collapseExample">
                                                                                        <div class=""> <i class="material-icons">add</i></div>
                                                                                    </button>
                                                                                    <div class="collapse" id="add_serSpecial"><br>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >ราชการพิเศษ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hissvp_special" class="form-control" placeholder="กรอกราชการพิเศษ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >หัวข้อโครงการ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hissvp_topic" class="form-control" placeholder="กรอกหัวข้อโครงการ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >เลขที่คำสั่ง</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hissvp_code" class="form-control" placeholder="กรอกเลขที่คำสั่ง" maxlength="10" onkeypress="return isNumberKey(event)">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่รับคำสั่ง</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hissvp_date" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >สถานที่</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="hissvp_place" class="form-control" placeholder="กรอกสถานที่"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >หมายเหตุ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="hissvp_note" class="form-control" placeholder="กรอกหมายเหตุ"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addHisvp('AHISVP')">บันทึก</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="table-responsive">
                                                                                        <div id="table_hisSerSpecial_show"></div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ประวัติการรักษาราชการ มอบหมายงาน
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <form class="form-horizontal">
                                                                                    <button id="btn_assignment" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มประวัติการรักษาราชการ" data-toggle="collapse" data-target="#add_assignment" aria-expanded="false" aria-controls="collapseExample">
                                                                                        <div class=""> <i class="material-icons">add</i></div>
                                                                                    </button>
                                                                                    <div class="collapse" id="add_assignment"><br>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >เลขที่คำสั่ง</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisas_code" class="form-control" placeholder="กรอกเลขที่คำสั่ง" maxlength="10" onkeypress="return isNumberKey(event)">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >เลขที่ตำแหน่ง</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisas_poscode" class="form-control" placeholder="กรอกเลขที่ตำแหน่ง" maxlength="10" onkeypress="return isNumberKey(event)">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่เริ่ม</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisas_date_start" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่สิ้นสุด</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisas_date_end" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >ตำแหน่งสายงาน</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisas_position" class="form-control" placeholder="กรอกตำแหน่งสายงาน">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >กรม</label>
                                                                                            </div>
                                                                                            <div class="col-lg-5 col-md-4 col-sm-8 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisas_office" class="form-control" placeholder="กรอกกรม">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >สำนัก/กอง</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisas_pile" class="form-control" placeholder="กรอกสำนัก/กอง">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label-l">
                                                                                                <label >ประเภทการเคลื่อนไหว</label>
                                                                                            </div>
                                                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="hisas_type" class="form-control" placeholder="กรอกประเภทการเคลื่อนไหว"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addHisas('AHISAS')">บันทึก</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="table-responsive">
                                                                                        <div id="table_assignment_show"></div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <div class="row clearfix">
                                                                            <?php if ($_GET['id'] != '') { ?>
                                                                                <div class="align-left col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                                    <button type="button" class="btn btn-warning waves-effect" onclick="javascript: back()">ย้อนกลับ</button>
                                                                                </div>
                                                                                <div class="align-right col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-saveAll">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="align-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- #END# ประวัติการทำงาน -->
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane fade" id="portfolio">
                                                            <!-- ผลงาน -->
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="demo-masked-input">
                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ประวัติการได้รับรางวัล ประกาศ เชิดชูเกียรติ
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <form class="form-horizontal">
                                                                                    <button id="btn_award" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มประวัติการรับรางวัล" data-toggle="collapse" data-target="#add_award" aria-expanded="false" aria-controls="collapseExample">
                                                                                        <div class=""> <i class="material-icons">add</i></div>
                                                                                    </button>
                                                                                    <div class="collapse" id="add_award"><br>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่ได้รับประกาศ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="award_date" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >เรื่องที่ได้รับ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="award_topic" class="form-control" placeholder="กรอกเรื่องที่ได้รับ">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label class="btn-file-upload-f align-center">
                                                                                                    <i class="material-icons" style="font-size: 15px;">attach_file</i>
                                                                                                    <input type='file' id="award_file" />
                                                                                                    เเนบไฟล์
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-8 p-t-12">
                                                                                                <span id="show_fileAward"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addAward('AAWARD')">บันทึก</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="table-responsive">
                                                                                        <div id="table_award_show"></div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ผลงานวิชาการ
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <form class="form-horizontal">
                                                                                    <button id="btn_academic" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มผลงานวิชาการ" data-toggle="collapse" data-target="#add_academic" aria-expanded="false" aria-controls="collapseExample">
                                                                                        <div class=""> <i class="material-icons">add</i></div>
                                                                                    </button>
                                                                                    <div class="collapse" id="add_academic"><br>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >ชื่อผลงานวิชาการ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="academic_name" class="form-control" placeholder="กรอกชื่อผลงานวิชาการ"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >ประเภทผลงานวิชาการ</label>
                                                                                            </div>  
                                                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="academic_type" class="form-control" placeholder="กรอกประเภทผลงานวิชาการ"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่ได้รับ</label>
                                                                                            </div>  
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="academic_date" class="form-control date" placeholder="__/__/____"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label class="btn-file-upload-f align-center">
                                                                                                    <i class="material-icons" style="font-size: 15px;">attach_file</i>
                                                                                                    <input type='file' id="academic_file" />
                                                                                                    เเนบไฟล์
                                                                                                </label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-9 col-xs-8 p-t-12">
                                                                                                <span id="show_fileacademic"></span>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addAcade('AACADE')">บันทึก</button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <br>
                                                                                    <div class="table-responsive">
                                                                                        <div id="table_acade_show"></div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <div class="row clearfix">
                                                                            <?php if ($_GET['id'] != '') { ?>
                                                                                <div class="align-left col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                                    <button type="button" class="btn btn-warning waves-effect" onclick="javascript: back()">ย้อนกลับ</button>
                                                                                </div>
                                                                                <div class="align-right col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-saveAll">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="align-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- #END# ผลงาน -->
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane fade" id="more_information">
                                                            <!-- ข้อมูลเพิ่มเติม -->
                                                            <div class="row clearfix">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="demo-masked-input">
                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    แผนงานพัฒนาตนเอง
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <button id="btn_plan" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle="collapse" data-target="#add_plan" aria-expanded="false" aria-controls="collapseExample" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มแผนงาน">
                                                                                    <div class=""> <i class="material-icons">add</i></div>
                                                                                </button> <br>
                                                                                <div class="collapse" id="add_plan">
                                                                                    <form class="form-horizontal" id="plan_reset">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                                                <label >หัวข้อ / เป้าหมายแผนงาน</label>
                                                                                            </div>
                                                                                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="plan_name" class="form-control" placeholder="กรอกหัวข้อ/เป้าหมายแผนงาน">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >รายละเอียด</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="plan_detail" class="form-control" placeholder="กรอกรายละเอียด"></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่เริ่มต้น</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="plan_dateStart" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่สิ้นสุด</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="plan_dateEnd" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addPlan('APLAN')">บันทึก</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div><br>
                                                                                <div class="table-responsive">
                                                                                    <div id="table_plan_show"></div>
                                                                                </div>
                                                                                <div class="card">
                                                                                    <div class="body">
                                                                                        <div id='calendar'></div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ประวัติการรับเครื่องราช
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <button id="btn_hisroyal" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle="collapse" data-target="#add_hisroyal" aria-expanded="false" aria-controls="collapseExample" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มประวัติการรับเครื่องราช">
                                                                                    <div class=""> <i class="material-icons">add</i></div>
                                                                                </button> <br>
                                                                                <div class="collapse" id="add_hisroyal">
                                                                                    <form class="form-horizontal">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 form-control-label-l">
                                                                                                <label >วันที่เปลี่ยน</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisroyal_date" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >ข้อเครื่องราชทานที่รับ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisroyal_name" class="form-control" placeholder="กรอกข้อเครื่องราชทานที่รับ"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                                                                <label >ราชกิจจานุเบกษา</label>
                                                                                            </div>
                                                                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisroyal_somename" class="form-control" placeholder="กรอกราชกิจจานุเบกษา"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addRoyal('AROYAL')">บันทึก</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div><br>
                                                                                <div class="table-responsive">
                                                                                    <div id="table_royal_show"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ประวัติการรับเลื่อนขั้นเงินเดือน
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <button id="btn_salaryup" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle="collapse" data-target="#add_salaryup" aria-expanded="false" aria-controls="collapseExample" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="ประวัติการรับเลื่อนขั้นเงินเดือน">
                                                                                    <div class=""> <i class="material-icons">add</i></div>
                                                                                </button> <br>
                                                                                <div class="collapse" id="add_salaryup">
                                                                                    <form class="form-horizontal">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 form-control-label-l">
                                                                                                <label >วันที่</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="hisslrup_date" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >เงินเดือน</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="input-group m-l--15" style="margin-bottom: 0px;">
                                                                                                    <span class="input-group-addon">
                                                                                                        <i class="material-icons">credit_card</i>
                                                                                                    </span>
                                                                                                    <div class="form-line">
                                                                                                        <input type="number" id="hisslrup_money" class="form-control" placeholder="กรอกเงินเดือน"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 form-control-label-l">
                                                                                                <label >ประเภทการเคลื่อนไหว</label>
                                                                                            </div>
                                                                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="hisslrup_type" class="form-control" placeholder="กรอกประเภทการเคลื่อนไหว"/></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addHisslrup('AHISSLRUP')">บันทึก</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div><br>
                                                                                <div class="table-responsive">
                                                                                    <div id="table_hisslrup_show"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="card">
                                                                            <div class="header bg-blue-grey" style="padding: 8px;">
                                                                                <h2>
                                                                                    ประวัติการรับเงินเพิ่มพิเศษ
                                                                                </h2>
                                                                            </div>
                                                                            <div class="body">
                                                                                <button id="btn_salaryspecial" type="button" class="btn bg-green btn-circle waves-effect waves-circle waves-float" data-toggle="collapse" data-target="#add_salaryspecial" aria-expanded="false" aria-controls="collapseExample" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="เพิ่มประวัติการรับเงินเพิ่มพิเศษ">
                                                                                    <div class=""> <i class="material-icons">add</i></div>
                                                                                </button> <br>
                                                                                <div class="collapse" id="add_salaryspecial">
                                                                                    <form class="form-horizontal">
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่เริ่ม</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="salarysp_startDate" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >วันที่สิ้นสุด</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <input type="text" id="salarysp_endDate" class="form-control date" placeholder="__/__/____">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                                                                <label >เงินพิเศษ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                                <div class="input-group m-l--15" style="margin-bottom: 0px;">
                                                                                                    <span class="input-group-addon">
                                                                                                        <i class="material-icons">credit_card</i>
                                                                                                    </span>
                                                                                                    <div class="form-line">
                                                                                                        <input type="number" id="salarysp_money" class="form-control" placeholder="กรอกเงินพิเศษ"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix">
                                                                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 form-control-label-l">
                                                                                                <label >ประเภทเงินพิเศษ</label>
                                                                                            </div>
                                                                                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                                                                                <div class="form-group">
                                                                                                    <div class="form-line">
                                                                                                        <textarea type="text" id="salarysp_type" class="form-control" placeholder="กรอกประเภทเงินพิเศษ"/></textarea>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row clearfix align-right m-r-15">
                                                                                            <button type="reset" class="btn btn-danger waves-effect m-r-5">ยกเลิก</button>
                                                                                            <button type="button" class="btn btn-success waves-effect" onclick="javascript: addSalarysp('ASALARYSP')">บันทึก</button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div><br>
                                                                                <div class="table-responsive">
                                                                                    <div id="table_salarysp_show"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <div class="row clearfix">
                                                                            <?php if ($_GET['id'] != '') { ?>
                                                                                <div class="align-left col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                                                    <button type="button" class="btn btn-warning waves-effect" onclick="javascript: back()">ย้อนกลับ</button>
                                                                                </div>
                                                                                <div class="align-right col-lg-6 col-md-6 col-sm-6 col-xs-6 btn-saveAll">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } else { ?>
                                                                                <div class="align-right col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPS')">บันทึก</button>
                                                                                </div>
                                                                            <?php } ?>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- #END# ข้อมูลเพิ่มเติม -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <!-- #END# Tabs With Icon Title -->

                                    <!-- Modal Edit Plan -->
                                    <div class="modal fade" id="editPlan" tabindex="-1" role="dialog">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content modal-md">
                                                <div class="modal-header bg-blue-grey">
                                                    <h4 class="modal-title" id="importPersonLabel">แก้ไขแผนงานพัฒนาตนเอง</h4>
                                                </div>
                                                <div class="modal-body demo-masked-input">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >หัวข้อ / เป้าหมายแผนงาน</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="plan_nameE" class="form-control" placeholder="กรอกหัวข้อ/เป้าหมายแผนงาน">
                                                                    <input type="hidden" id="plan_idE">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >รายละเอียด</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <textarea type="text" id="plan_detailE" class="form-control" placeholder="กรอกรายละเอียด"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label >วันที่เริ่มต้น</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="plan_dateStartE" class="form-control date" placeholder="__/__/____">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label >วันที่สิ้นสุด</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="plan_dateEndE" class="form-control date" placeholder="__/__/____">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                            <div class="switch">
                                                                <label><input type="checkbox" id="check_status"><span class="lever switch-col-light-blue"></span></label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 m-l--10">
                                                            <span class="font-bold col-orange" id="show_statusE"></span>
                                                            <span class="font-bold col-green" id="show_statusE2"></span>
                                                            <input type="hidden" id="plan_status" value="0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPlan('EPLAN')">บันทึก</button>
                                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- #END# Modal Import Person -->
                                    </section>
                                    <!-- Script -->
                                    <?php include ("../../PS_script/personnal/per_dataProfile.php"); ?>
                                    </body>
                                    </html>
