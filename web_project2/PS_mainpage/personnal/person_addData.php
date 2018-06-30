<?php include 'main_personnal.php'; ?>
<?php
require_once '../../connect/connect_DB_personal.php';
$NoImg = '../../images/img-profile/no_img.png';
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
                        <li><a href="#"><i class="material-icons">assessment</i> จัดการบุคลากร</a></li>
                        <li  class="active font-bold col-cyan font-14"><i class="material-icons">assignment_ind</i> จัดการข้อมูลบุคลากร</li>
                    </ol>
                </div>
                <!-- Input -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    จัดการข้อมูลบุคลากร
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-xs-6">
                                        <button type="button" data-toggle="modal" data-target="#addPerson" class="btn btn-success waves-effect">
                                            <i class="material-icons">person_add</i>
                                            <span>เพิ่มข้อมูลบุคลากร</span>
                                        </button>
                                    </div>
                                    <div class="col-xs-6 align-right">
                                        <button type="button" data-toggle="modal" data-target="#importPerson" class="btn btn-primary waves-effect">
                                            <i class="material-icons">group_add</i>
                                            <span>นำเข้าแบบ Excel</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="body">
                                                <img class="btn-delete-selected" id="del_selected" data-toggle-tootip="tooltip" data-placement="right" title="" data-original-title="ลบข้อมูลที่เลือก" hidden/>
                                                <div class="table-responsive">
                                                    <div id="table_profile_show"></div>
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
            <!-- Modal Add DataPerson -->
            <div class="modal fade" id="addPerson" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="addPersonLabel">เพิ่มข้อมูลบุคลากร</h4>
                        </div>
                        <div class="modal-body">
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
                                                                    <!--<a href="<?php echo $NoImg; ?>" id="person_img" data-sub-html="รูปประจำตัว">-->
                                                                    <center><img class="img-responsive img-css" id="imgS" src="<?php echo $NoImg; ?>"></center>
                                                                    <!--</a>-->
                                                                </div>
                                                                <label class="btn-file-upload ">
                                                                    <input type='file' id="pro_picture" />
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
                                                                            <input type="text" id="pro_idpos" class="form-control" placeholder="กรอกรหัสตำแหน่ง" maxlength="4" onkeypress="return isNumberKey(event)">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                    <label >คำนำหน้า</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                                    <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pro_prefix">
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
                                                                    <input type="text" id="card_id" class="form-control card-id" placeholder="กรอกเลขบัตรประชาชน">
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
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 align-left form-control-radio" id="pro_sex">
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
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="type_id">
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
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pos_id">
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
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="lv_id">
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
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="lvb_id">
                                                                <?php
                                                                $cn = new management;
                                                                $cn->con_db();
                                                                echo '<option  value="">เลือก</opition>';
                                                                $sql = "select * from ps_levelboss ";
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
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="class_id">
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
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="dep_id">
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
                                                                    <input type="text" id="pro_dateIn" class="form-control date" placeholder="__/__/____">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >วันเกษียณอายุ</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="pro_dateOut" class="form-control date" placeholder="__/__/____">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label >เงินเดือน</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                                                            <div class="input-group" style="margin-bottom: 0px;">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">credit_card</i>
                                                                </span>
                                                                <div class="form-line">
                                                                    <input type="number" id="pro_salary" class="form-control" placeholder="กรอกจำนวนเงินเริ่มต้น">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 form-control-label-l">
                                                            <label class="font-bold col-red">*บาท</label>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label >โอนย้ายเข้า</label>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 demo-checkbox form-control-label-l">
                                                            <input type="checkbox" id="check_tran" class="filled-in chk-col-orange">
                                                            <label class="font-bold col-red" for="check_tran">ถ้ามี</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" id="sw_input">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="pro_transfer" class="form-control" placeholder="กรอกสถานที่หรือสังกัดที่โอนย้ายเข้า">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary waves-effect" onclick="javascript: addPerson('APS')">บันทึก</button>
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Modal Add DataPerson -->

            <!-- Modal edit DataPerson -->
            <div class="modal fade" id="editPerson" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="editPersonLabel">แก้ไขข้อมูลบุคลากร</h4>
                        </div>
                        <div class="modal-body">
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
                                                                    <!--<a href="<?php echo $NoImg; ?>" id="person_imgE" data-sub-html="รูปประจำตัว">-->
                                                                    <center><img class="img-responsive img-css" id="imgSE" src="<?php echo $NoImg; ?>"></center>
                                                                    <!--</a>-->
                                                                </div>
                                                                <label class="btn-file-upload ">
                                                                    <input type='file' id="pro_pictureE"/>
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
                                                                            <input type="text" id="pro_fnameE" class="form-control" placeholder="กรอกชื่อ">
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
                                                                            <input type="text" id="pro_lnameE" class="form-control" placeholder="กรอกนามสกุล">
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
                                                                    <input type="text" id="card_idE" class="form-control card-id" placeholder="กรอกเลขบัตรประชาชน">
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
                                                                    <input type="text" id="pro_nicknameE" class="form-control" placeholder="กรอกชื่อเล่น">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4 form-control-label-l">
                                                            <label >เพศ</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 align-left form-control-radio" id="pro_sexE">
                                                            <input name="group1E" type="radio" value="1" id="sex_menE" class="with-gap radio-col-purple" />
                                                            <label for="sex_menE">ชาย</label>
                                                            <input name="group1E" type="radio" value="2" id="sex_femanE" class="with-gap radio-col-purple" />
                                                            <label for="sex_femanE">หญิง</label>
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
                                                                    <input type="text" id="pro_birthdayE" class="form-control date" placeholder="Ex: 30/07/2561">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-1 col-md-1 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >สถานะ</label>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 col-sm-9 col-xs-12 form-control-radio" id="pro_statusE">
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
                                                                    <input type="text" id="pro_dateInE" class="form-control date" placeholder="__/__/___">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >วันเกษียณอายุ</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="pro_dateOutE" class="form-control date" placeholder="__/__/___">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label >เงินเดือน</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8">
                                                            <div class="input-group" style="margin-bottom: 0px;">
                                                                <span class="input-group-addon">
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
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                            <label >โอนย้ายเข้า</label>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 demo-checkbox form-control-label-l">
                                                            <input type="checkbox" id="check_tranE" class="filled-in chk-col-orange">
                                                            <label class="font-bold col-red" for="check_tranE">ถ้ามี</label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12" id="sw_inputE">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="pro_transferE" class="form-control" placeholder="กรอกสถานที่หรือสังกัดที่โอนย้าย">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >โอนย้ายออก</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 demo-checkbox form-control-label-l">
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="tran_status">
                                                                <option  value="">เลือก</opition>
                                                                <option  value="1">โอนย้ายออก</opition>
                                                                <option  value="2">ลาออก</opition>
                                                            </select>
                                                        </div>
                                                        <div class="row clearfix see_tranout">
                                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                                <label >ทำเรื่องวันที่</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 demo-checkbox form-control-label-l">
                                                                <div class="form-group">
                                                                    <div class="form-line">
                                                                        <input type="text" id="tran_date" class="form-control input" disabled="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix see_tranout">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label>หมายเหตุ</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <textarea type="text" id="tran_note" class="form-control input" placeholder="กรอกหมายเหตุหรือสาเหตุที่ลาออก"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix see_tranout see_out">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label>ย้ายไปที่</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="tran_name" class="form-control input" placeholder="กรอกสถานที่หรือสังกัดที่ย้ายไป"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editPerson('EPSM')">บันทึก</button>
                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Modal Edit DataPerson -->

            <!-- Modal Detail DataPerson -->
            <div class="modal fade" id="detailPerson" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="detailPersonLabel">รายละเอียดข้อมูลบุคลากร</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="body">
                                            <div class="demo-masked-input">
                                                <form class="form-horizontal">
                                                    <div class="row clearfix">
                                                        <div class="image">
                                                            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 align-center p-t-15">
                                                                <div class="list-unstyled aniimated-thumbnials">
                                                                    <!--<a href="<?php echo $NoImg; ?>" id="person_imgD" data-sub-html="รูปประจำตัว">-->
                                                                    <center><img class="img-responsive img-css" id="imgSD" src="<?php echo $NoImg; ?>"></center>
                                                                    <!--</a>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-7 col-xs-12" style="margin-bottom: 0px">
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                    <label >เลขที่ตำแหน่ง</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 p-t-8">
                                                                    <span class="sp-pad" id="pro_idposD"></span>
                                                                </div>
                                                            </div>

                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                    <label >คำนำหน้า</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 p-t-8">
                                                                    <span class="sp-pad" id="pro_prefixD"></span>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                    <label >ชื่อ</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 p-t-8">
                                                                    <span class="sp-pad" id="pro_fnameD"></span>
                                                                </div>
                                                            </div>
                                                            <div class="row clearfix">
                                                                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                                    <label >สกุล</label>
                                                                </div>
                                                                <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 p-t-8">
                                                                    <span class="sp-pad" id="pro_lnameD"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >เลขบัตรประชาชน</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="card_idD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 form-control-label-l">
                                                            <label >ชื่อเล่น</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 p-t-8">
                                                            <span class="sp-pad" id="pro_nicknameD"></span>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 form-control-label-l">
                                                            <label >เพศ</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 p-t-8">
                                                            <span class="sp-pad" id="pro_sexD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-4 form-control-label-l">
                                                            <label >วันเดือนปีเกิด</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-9 col-xs-8 p-t-8" style="margin-bottom: 0px">
                                                            <div class="input-group m-t--10">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">date_range</i>
                                                                </span>
                                                                <span class="sp-pad" id="pro_birthdayD"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >สถานะ</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="pro_statusD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >ประเภท</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="type_nameD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >ตำแหน่ง</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="pos_nameD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >ระดับ</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="lv_nameD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >ตำแหน่งบริหาร</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="lvb_nameD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >กลุ่มงาน</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="class_nameD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >สังกัด</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10t col-sm-9 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="dep_nameD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >วันเข้ารับราชการ</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="pro_dateInD"></span>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >วันเกษียณอายุ</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="pro_dateOutD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label >เงินเดือน</label>
                                                        </div>
                                                        <div class="col-lg-3 col-md-3 col-sm-8 col-xs-8 p-t-8">
                                                            <div class="input-group" style="margin-bottom: 0px;">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">credit_card</i>
                                                                </span>
                                                                <span class="sp-pad" id="pro_salaryD"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 form-control-label-l">
                                                            <label class="font-bold col-red">*บาท</label>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix" id="sw_inputD">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label class="font-bold col-blue">โอนย้ายมา</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="pro_transferD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix see_tranout">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label class="font-bold col-orange" id="topic_tran"></label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="tran_dateD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix see_tranout">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label>หมายเหตุ</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="tran_noteD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix see_tranout see_out">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label>ย้ายไปที่</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 p-t-8">
                                                            <span class="sp-pad" id="tran_nameD"></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <label></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label >ผู้สร้าง</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-t-8">
                                                            <span id="pro_person_create"></span>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                            <label >วันที่สร้าง</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-t-8">
                                                            <span id="pro_date_create"></span>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >ผู้แก้ไขล่าสุด</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 p-t-8">
                                                            <span id="pro_person_update"></span>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >วันที่แก้ไขล่าสุด</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-9 col-xs-12 p-t-8">
                                                            <span id="pro_date_update"></span>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Modal Detail DataPerson -->

            <!-- Modal Import Person -->
            <div class="modal fade" id="importPerson" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="importPersonLabel">นำเข้าข้อมูลบุคลากรแบบ Excel</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row clearfix">
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 form-control-label-l">
                                    <label class="btn-file-upload-ex align-center">
                                        <i class="material-icons">touch_app</i>
                                        <input type='file' id="filePerson" />เลือกไฟล์ <b>.xlsx</b>
                                    </label>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 p-t-30">
                                    <span id="show_filePerson"></span>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <a href="../../doc/example/Templat_เพิ่มข้อมูลบุคลากร.xlsx" download>
                                <button type="button" class="btn btn-default waves-effect m-t--5 m-r-5" style="padding: 2px 12px;">
                                    <i class="material-icons">file_download</i>
                                    <span>ดาวน์โหลดไฟล์ตัวอย่าง</span>
                                </button>
                            </a>
                            <button type="button" class="btn btn-primary waves-effect" onclick="javascript: importPerson('IMPERSON')">นำเข้าข้อมูล</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Modal Import Person -->
        </section>
        <!-- Script -->
        <?php include ("../../PS_script/personnal/per_addData.php"); ?>
    </body>
</html>