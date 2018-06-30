<?php include 'main_personnal.php'; ?>
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
                        <li><a href="../../PS_mainpage/personnal/person_DataProfile.php"><i class="material-icons">home</i> Home</a></li>
                        <li  class="active font-bold col-cyan font-14"><i class="material-icons">picture_in_picture</i> DashBoard</li>
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
                                        <a href="#personal-information" data-toggle="tab">
                                            <img class="logo-btn-personIn"/> 
                                            <span>ข้อมูลส่วนตัว</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#career-history" data-toggle="tab">
                                            <img class="logo-btn-address"/>
                                            <span>ข้อมูลที่อยู่</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#career-history" data-toggle="tab">
                                            <img class="logo-btn-education"/>
                                            <span>ประวัติการศึกษา</span>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#career-history" data-toggle="tab">
                                            <img class="logo-btn-hiswork"/>
                                            <span>ประวัติการทำงาน</span>
                                        </a>
                                    </li>
                                    <li>
                                    </li>
                                    <li>
                                    </li>
                                    <li class="navbar-right">
                                        <button type="button" class="btn bg-deep-orange waves-effect">แก้ไข</button>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="personal-information">
                                        <!-- ข้อมูลส่วนตัว -->
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="row clearfix">
                                                    <div class="image">
                                                        <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 align-center">
                                                            <div id="aniimated-thumbnials" class="list-unstyled">
                                                                <a href="../../images/moon.jpg" id="zoom-img" data-sub-html="รูปประจำตัว">
                                                                    <center><img class="img-responsive" id="imgS" src="../../images/moon.jpg" style="max-height: 150px; max-width: 150px;"alt="User"></center>
                                                                </a>
                                                            </div>
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
                                                                        <span class="form-control" id="pro_idpos"></span>
                                                                        <!--<input type="text" id="pro_idpos" class="form-control" placeholder="กรอกเลขที่ตำแหน่ง" disabled="">-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                <label >คำนำหน้า</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 ">
                                                                <select class="form-control show-tick" data-live-search="true" id="pro_prefix">
                                                                    <?php
                                                                    $cn = new management;
                                                                    $cn->con_db();
                                                                    echo '<option  value="">เลือก</opition>';
                                                                    $sql = "select * from ps_prefix ";
                                                                    $query = $cn->Connect->query($sql);
                                                                    while ($rs = mysqli_fetch_array($query)) {
                                                                        echo '<option  value="' . $rs['pf_name'] . '">' . $rs['pf_name'] . '</opition>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row clearfix">
                                                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                <label >ชื่อ</label>
                                                            </div>
                                                            <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="pro_fname" class="form-control" placeholder="กรอกชื่อ">
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
                                                                        <input type="text" id="pro_lname" class="form-control" placeholder="กรอกนามสกุล">
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
                                                                <input type="text" id="card_id" class="form-control" placeholder="กรอกเลขบัตรประชาชน">
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
                                                                <input type="text" id="pro_nickname" class="form-control" placeholder="กรอกชื่อเล่น">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4 form-control-label-l">
                                                        <label >เพศ</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 align-left form-control-radio" id="pro_sax">
                                                        <input name="group1" type="radio" value="1" id="sex_men" class="with-gap radio-col-purple" />
                                                        <label for="sex_men">ชาย</label>
                                                        <input name="group1" type="radio" value="2" id="sex_feman" class="with-gap radio-col-purple" />
                                                        <label for="sex_feman">หญิง</label>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 form-control-label-l">
                                                        <label >วันเดือนปีเกิด</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-9 col-xs-8" style="margin-bottom: 0px">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">date_range</i>
                                                            </span>
                                                            <div class="form-line">
                                                                <input type="text" id="pro_birthday" class="form-control date" placeholder="Ex: 30/07/2561">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >สถานะ</label>
                                                    </div>
                                                    <div class="col-lg-5 col-md-5 col-sm-9 col-xs-12 form-control-radio" id="pro_status">
                                                        <input name="group2" type="radio" value="โสด" id="status-alone" class="with-gap radio-col-purple" />
                                                        <label for="status-alone">โสด</label>
                                                        <input name="group2" type="radio" value="สมรส" id="status-marry" class="with-gap radio-col-purple" />
                                                        <label for="status-marry">สมรส</label>
                                                        <input name="group2" type="radio" value="หย่า" id="status-halt" class="with-gap radio-col-purple" />
                                                        <label for="status-halt">หย่า</label>
                                                        <input name="group2" type="radio" value="หม้าย" id="status-widow" class="with-gap radio-col-purple" />
                                                        <label for="status-widow">หม้าย</label>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >ประเภท</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                        <select class="form-control show-tick" data-live-search="true" id="type_id">
                                                            <?php
                                                            $cn = new management;
                                                            $cn->con_db();
                                                            echo '<option  value="">เลือก</opition>';
                                                            $sql = "select * from ps_type ";
                                                            $query = $cn->Connect->query($sql);
                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                echo '<option  value="' . $rs['type_id'] . '">' . $rs['type_name'] . '</opition>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >ตำแหน่ง</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                        <select class="form-control show-tick" data-live-search="true" id="pos_id">
                                                            <?php
                                                            $cn = new management;
                                                            $cn->con_db();
                                                            echo '<option  value="">เลือก</opition>';
                                                            $sql = "select * from ps_position ";
                                                            $query = $cn->Connect->query($sql);
                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                echo '<option  value="' . $rs['pos_id'] . '">' . $rs['pos_name'] . '</opition>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >ระดับ</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                        <select class="form-control show-tick" data-live-search="true" id="lv_id">
                                                            <?php
                                                            $cn = new management;
                                                            $cn->con_db();
                                                            echo '<option  value="">เลือก</opition>';
                                                            $sql = "select * from ps_level ";
                                                            $query = $cn->Connect->query($sql);
                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                echo '<option  value="' . $rs['lv_id'] . '">' . $rs['lv_name'] . '</opition>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >ตำแหน่งบริหาร</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                        <select class="form-control show-tick" data-live-search="true" id="lvb_id">
                                                            <?php
                                                            $cn = new management;
                                                            $cn->con_db();
                                                            echo '<option  value="">เลือก</opition>';
                                                            $sql = "select * from ps_leveboss ";
                                                            $query = $cn->Connect->query($sql);
                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                echo '<option  value="' . $rs['lvb_id'] . '">' . $rs['lvb_name'] . '</opition>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >กลุ่มงาน</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                        <select class="form-control show-tick" data-live-search="true" id="class_id">
                                                            <?php
                                                            $cn = new management;
                                                            $cn->con_db();
                                                            echo '<option  value="">เลือก</opition>';
                                                            $sql = "select * from ps_class ";
                                                            $query = $cn->Connect->query($sql);
                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                echo '<option  value="' . $rs['class_id'] . '">' . $rs['class_name'] . '</opition>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >สังกัด</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10t col-sm-9 col-xs-12">
                                                        <select class="form-control show-tick" data-live-search="true" id="dep_id">
                                                            <?php
                                                            $cn = new management;
                                                            $cn->con_db();
                                                            echo '<option  value="">เลือก</opition>';
                                                            $sql = "select * from ps_department ";
                                                            $query = $cn->Connect->query($sql);
                                                            while ($rs = mysqli_fetch_array($query)) {
                                                                echo '<option  value="' . $rs['dep_id'] . '">' . $rs['dep_name'] . '</opition>';
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label >วันเข้ารับราชการ</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="date" id="pro_dateIn" class="form-control" placeholder="กรอกรหัสตำแหน่ง">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label >วันเกษียณอายุ</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="date" id="pro_dateOut" class="form-control" placeholder="กรอกรหัสตำแหน่ง">
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
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">monetization_on</i>
                                                            </span>
                                                            <div class="form-line">
                                                                <input type="number" id="pro_salary" class="form-control" placeholder="กรุณาระบุจำนวนเงิน">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 form-control-label-l">
                                                        <label class="font-bold col-red">*บาท</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- #END# ข้อมูลส่วนตัว -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="career-history">
                                        <!-- หน่วยงานภายนอก -->
                                        <button type="button" data-toggle="modal" data-target="#addBnOut" class="btn bg-green waves-effect">เพิ่มกลุ่มงาน</button><br><br>
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="body">
                                                        <div class="table-responsive">
                                                            <div id="table_outside_show"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- #END# หน่วยงานภายนอก -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabs With Icon Title -->
        </section>
        <!-- Script -->
        <?php include ("../../PS_script/personnal/.php"); ?>
    </body>
</html>
