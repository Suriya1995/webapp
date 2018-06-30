<?php include 'main_personnal.php'; ?>
<?php require_once '../../connect/connect_DB_personal.php'; ?>

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
                        <li  class="active font-bold col-cyan font-14"><i class="material-icons">settings</i> ตั้งค่าสิทธิ์เข้าใช้งาน</li>
                    </ol>
                </div>
                <!-- Input -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>
                                    ตั้งค่าผู้เข้าใช้งาน
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-xs-6">
                                        <button type="button" data-toggle="modal" data-target="#addUser" class="btn bg-deep-purple waves-effect">
                                            <i class="material-icons">person_add</i>
                                            <span>เพิ่มผู้ใช้งานระบบ</span>
                                        </button>
                                    </div>
                                    <div class="col-xs-6 align-right">
                                        <button type="button" data-toggle="modal" data-target="#importUser" class="btn btn-primary waves-effect">
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
                                                    <div id="table_setting_show"></div>
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

            <!-- Modal Add User -->
            <div class="modal fade" id="addUser" role="dialog">
                <div class="modal-dialog" role="document" >
                    <div class="modal-content modal-md">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title" id="addUserLabel">เพิ่มผู้ใช้งานระบบ</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <div class="body">
                                            <div class="demo-masked-input">
                                                <form class="form-horizontal" id="fm_addUser">
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >เลขบัตรประชาชน</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="card_id" class="form-control card-id" placeholder="กรอกเลขบัตรประชาชน" onkeyup="javascript: check_cardId()">
                                                                    <div id="error-cardId"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >ชื่อ</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-9 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="nameuser" class="form-control" placeholder="กรุณาใส่เลขบัตรประชาชน" disabled="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >สกุล</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-9 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="lastname" class="form-control" placeholder="กรุณาใส่เลขบัตรประชาชน" disabled="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >เบอร์โทร</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-9 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="tel" class="form-control mobile-number" placeholder="กรอกเบอร์โทร">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >E-mail</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-9 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="email" class="form-control email" placeholder="กรอก E-mail">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label >ตำแหน่ง</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pos_id" disabled="">
                                                                <?php
                                                                $cn = new management;
                                                                $cn->con_db();
                                                                echo '<option  value="">กรุณาใส่เลขบัตรประชาชน</opition>';
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
                                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label>กลุ่มงาน</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="class_id" disabled="">
                                                                <?php
                                                                $cn = new management;
                                                                $cn->con_db();
                                                                echo '<option  value="">กรุณาใส่เลขบัตรประชาชน</opition>';
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
                                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label>สังกัด</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="dep_id" disabled="">
                                                                <?php
                                                                $cn = new management;
                                                                $cn->con_db();
                                                                echo '<option  value="">กรุณาใส่เลขบัตรประชาชน</opition>';
                                                                $sql = "select * from ps_department";
                                                                $query = $cn->Connect->query($sql);
                                                                while ($rs = mysqli_fetch_array($query)) {
                                                                    echo '<option  value="' . $rs['dep_id'] . '">' . $rs['dep_name'] . '</opition>';
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label> ชื่อผู้ใช้งาน</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id="username" class="form-control validate" placeholder="กรอกชื่อผู้ใช้งาน" required>
                                                                    <div id="username-error"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label> รหัสผ่าน</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="password" id="password" class="form-control validate" placeholder="กรอกรหัสผ่าน">
                                                                    <div id="password-error"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label> ยืนยันรหัสผ่าน</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="password" id="ch_password" class="form-control validate" placeholder="กรอกรหัสยืนยัน">
                                                                    <div id="ch-password-error"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label> ระดับผู้ใช้</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
                                                            <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="level">
                                                                <option value="">เลือก</opition>
                                                                <option value="0">ผู้ใช้ทั่วไป</opition>
                                                                <option value="1">แอดมิน</opition>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix">
                                                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label> การเปิดใช้</label>
                                                        </div>
                                                        <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
                                                            <div class="demo-switch p-t-5">
                                                                <div class="switch">
                                                                    <label><input type="checkbox" name="status" id="status" checked><span class="lever switch-col-green"></span></label>
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary waves-effect" onclick="javascript: addUser('AUSER')">บันทึก</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Modal Add User -->

        <!-- Modal edit User -->
        <div class="modal fade" id="editUser" role="dialog">
            <div class="modal-dialog" role="document" >
                <div class="modal-content modal-md">
                    <div class="modal-header bg-green">
                        <h4 class="modal-title" id="editUserLabel">แก้ไขผู้ใช้งานระบบ</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="body">
                                        <div class="demo-masked-input">
                                            <form class="form-horizontal">
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
                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label >ชื่อ</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-8 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="nameuserE" class="form-control" placeholder="กรอกชื่อ">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label >สกุล</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-8 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="lastnameE" class="form-control" placeholder="กรอกสกุล">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label >เบอร์โทร</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-8 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="telE" class="form-control mobile-number" placeholder="กรอกเบอร์โทร">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label >E-mail</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-8 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="emailE" class="form-control email" placeholder="กรอก E-mail">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label >ตำแหน่ง</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pos_idE"></select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label>กลุ่มงาน</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="class_idE"></select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label>สังกัด</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="dep_idE"></select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label> ชื่อผู้ใช้งาน</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="usernameE" class="form-control validateE" placeholder="กรอกชื่อผู้ใช้งาน">
                                                                <div id="usernameE-error"></div>
                                                                <input type="hidden" id="member_id">
                                                                <input type="hidden" id="pro_id">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label> รหัสผ่าน</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="passwordE" class="form-control validateE" placeholder="กรอกรหัสผ่าน">
                                                                <div id="passwordE-error"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label> ยืนยันรหัสผ่าน</label>
                                                    </div>
                                                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="password" id="ch_passwordE" value="555555" class="form-control validateE" placeholder="กรอกรหัสยืนยัน">
                                                                <div id="ch-passwordE-error"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label> ระดับผู้ใช้</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
                                                        <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="levelE"></select>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label> การเปิดใช้</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
                                                        <div class="demo-switch p-t-5">
                                                            <div class="switch">
                                                                <label><input type="checkbox" id="statusE" checked><span class="lever switch-col-green"></span></label>
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary waves-effect" onclick="javascript: editUser('EUSER')">บันทึก</button>
                        <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Modal Edit User -->

    <!-- Modal Detail User -->
    <div class="modal fade" id="detailUser" role="dialog">
        <div class="modal-dialog" role="document" >
            <div class="modal-content modal-md">
                <div class="modal-header bg-green">
                    <h4 class="modal-title" id="detailUserLabel">ดูรายละเอียดผู้ใช้งานระบบ</h4>
                </div>
                <div class="modal-body">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <div class="demo-masked-input">
                                        <form class="form-horizontal">
                                            <div class="row clearfix">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                    <label >เลขบัตรประชาชน</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-d-8">
                                                    <span class="sp-pad" id="card_idD"></span>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label >ชื่อ</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-d-8">
                                                    <span id="nameuserD"></span>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label >สกุล</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-d-8">
                                                    <span id="lastnameD"></span>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label >เบอร์โทร</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-d-8">
                                                    <span id="telD"></span>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label >E-mail</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-d-8">
                                                    <span id="emailD"></span>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label >ตำแหน่ง</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 p-d-8">
                                                    <span id="pos_idD"></span>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label>กลุ่มงาน</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 p-d-8">
                                                    <span id="class_idD"></span>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label>สังกัด</label>
                                                </div>
                                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 p-d-8">
                                                    <span id="dep_idD"></span>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label> ชื่อผู้ใช้งาน</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-d-8">
                                                    <span id="usernameD"></span>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label> รหัสผ่าน</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-d-8">
                                                    <span id="passwordD"></span>
                                                </div>
                                            </div>

                                            <div class="row clearfix">
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label> ระดับผู้ใช้</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-d-8">
                                                    <span id="levelD"></span>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l ">
                                                    <label> การเปิดใช้</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                    <div class="demo-switch p-t-5">
                                                        <div class="switch">
                                                            <!--<span id="nameuserD"></span>-->
                                                            <label><input type="checkbox" id="statusD" disabled><span class="lever switch-col-green"></span></label>
                                                        </div>
                                                    </div>
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
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-d-8">
                                                    <span id="person_create"></span>
                                                </div>
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                    <label >วันที่สร้าง</label>
                                                </div>
                                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 p-d-8">
                                                    <span id="date_create"></span>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                    <label >ผู้แก้ไขล่าสุด</label>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 p-d-8 m-l--20">
                                                    <span id="person_update"></span>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                    <label >วันที่แก้ไขล่าสุด</label>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 p-d-8 m-l--20">
                                                    <span id="date_update"></span>
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
</div>
<!-- #END# Modal Detail User -->

<!-- Modal Import User -->
<div class="modal fade" id="importUser" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-green">
                <h4 class="modal-title" id="importUserLabel">นำเข้าข้อมูลผู้ใช้แบบ Excel</h4>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 form-control-label-l">
                        <label class="btn-file-upload-ex align-center">
                            <i class="material-icons">touch_app</i>
                            <input type='file' id="fileUser" />เลือกไฟล์ <b>.xlsx</b>
                        </label>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 p-t-30">
                        <span id="show_fileUser"></span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <a href="../../doc/example/Templat_เพิ่มข้อมูลผู้ใช้.xlsx" download>
                    <button type="button" class="btn btn-default waves-effect m-t--5 m-r-5" style="padding: 2px 12px;">
                        <i class="material-icons">file_download</i>
                        <span>ดาวน์โหลดไฟล์ตัวอย่าง</span>
                    </button>
                </a>
                <button type="button" class="btn btn-primary waves-effect" onclick="javascript: importUser('IMUSER')">นำเข้าข้อมูล</button>
                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
            </div>
        </div>
    </div>
</div>
<!-- #END# Modal Import User -->

</section>
<!-- Script -->
<?php include ("../../PS_script/personnal/per_setting.php"); ?>
</body>
</html>