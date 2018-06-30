<?php include 'main_personnal.php'; ?>
<?php require_once '../../connect/connect_DB_personal.php'; ?>

<html>
    <body>
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-green" >
                                <h2>
                                    ทำเรื่องการลา
                                </h2>

                            </div>

                            <div class="body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="">
                                        <a href="#home_with_icon_title" data-toggle="tab" aria-expanded="false">
                                            <i class="material-icons">home</i> แบบฟอร์มลาพักผ่อนประจำปี

                                        </a>
                                    </li>
                                    <li role="presentation" class="">
                                        <a href="#profile_with_icon_title" data-toggle="tab" aria-expanded="false">
                                            <i class="material-icons">face</i> แบบฟอร์มลาป่วย ลาคลอดบุตร ลากิจส่วนตัว
                                        </a>
                                    </li>


                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade fade active in form-horizontal" id="home_with_icon_title">
                                        <div class="card">
                                            <div class="body">
                                                <div style="margin-left: 30%;" class="col-lg-8 col-md-2 col-sm-3 col-xs-5 form-control-label" hidden>
                                                    <label>เขียนที่ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำนักงานป้องกันควบคุมโรคที่ 6 จังหวัดชลบุรี</label>
                                                </div>
                                                <div class="row clearfix hidden">
                                                    <div style="margin-left: 45%;" class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                        <label> วันที่</label>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="material-icons">date_range</i>
                                                            </span>
                                                            <div class="form-line">
                                                                <input type="text" id="leave_date" class="form-control" placeholder="Ex: 30/07/2561">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix hidden">
                                                    <div  class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                        <label>เรื่อง</label>
                                                    </div>
                                                    <div class="col-sm-2">

                                                        <label>ขอลาพักผ่อน</label>

                                                    </div>
                                                </div>
                                                <div class="row clearfix" hidden="">
                                                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                        <label >เรียน</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id ="leave_topic" class="form-control" placeholder="กรอกชื่อผู้อนุมัติ select" value="<?php
                                                                $cn = new management;
                                                                $cn->con_db();
                                                                $sql = "select p.pro_prefix,p.pro_fname, p.pro_lname from ps_profile as p left join ps_leveboss AS lb on p.lvb_id = lb.lvb_id where p.class_id = '" . $_SESSION['class_id'] . "' AND lb.lvb_claim = (select MIN(lb.lvb_claim) from ps_profile as p left join ps_leveboss AS lb on p.lvb_id = lb.lvb_id WHERE p.class_id = '" . $_SESSION['class_id'] . "')";
                                                                $query = $cn->Connect->query($sql);
                                                                while ($rs = mysqli_fetch_array($query)) {
                                                                    echo $rs['pro_prefix'] . $rs['pro_fname'] . ' ' . $rs['pro_lname'];
                                                                }
                                                                ?>"/>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix" hidden>
                                                    <div style="margin-left: 17%;" >
                                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                            <label >ข้าพเจ้า</label>
                                                        </div>
                                                        <div class="col-lg-9 col-md-9 col-sm-5 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <input type="text" id ="leave_name" class="form-control" placeholder="กรอกชื่อผู้ขออนุมัติ select" value="<?php echo $_SESSION['fullname']; ?>"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix" hidden>
                                                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >ตำแหน่ง</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="position_name" class="form-control" value="<?php echo $_SESSION['pos_name'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label">
                                                        <label >ระดับ</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="levels_la" class="form-control" value="<?php echo $_SESSION['lv_name'] ?>"/> 
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row clearfix" hidden>
                                                    <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >สังกัด</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10t col-sm-9 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="sangkad_la" class="form-control" value="<?php echo $_SESSION['dep_name'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >มีวันลาพักผ่อนสะสม</label>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-5">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <center> <input type="text" id="leave_daylax" class="form-control" placeholder=""></center>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-7 form-control-label-l">
                                                        <label>วันทำการ</label>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-control-label-l">
                                                        <label class="font-bold col-teal">มีสิทธิลาพักผ่อนประจำปีนี้อีก 10 วันทำการ </label>
                                                    </div>
                                                </div>

                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >รวมเป็น</label>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-5 form-control-label-l">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="leave_totalday" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-3 col-xs-7 form-control-label-l">
                                                        <label >วันทำการ   </label>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 form-control-label-l">
                                                        <label >ขอลาพักผ่อนตั้งแต่วันที่</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label" >
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="leave_Inday" class="form-control date" placeholder="__/__/____">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 form-control-label-l">
                                                        <label >ถึงวันที่ </label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label" >
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="leave_outday" class="form-control date" placeholder="__/__/____">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >มีกำหนด</label>
                                                    </div>
                                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-5 form-control-label">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="leave_dayreplace" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-7 form-control-label-l">
                                                        <label >วันทำการ   </label>
                                                    </div> 
                                                </div>     
                                                <div class="row clearfix">
                                                    <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 form-control-label-l">
                                                        <label >ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่</label>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea class="form-control" id="leave_address" placeholder="กรอกข้อมูลที่ติดต่อได้"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >โทรศัพท์</label>
                                                    </div>
                                                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="tel_leave" class="form-control" placeholder="กรอกหมายเลขโทรศัพท์"  maxlength="10" onkeypress="return isNumberKey(event)" value="<?php echo $_SESSION['tel'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row clearfix">
                                                    <div class="demo-checkbox">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 form-control-label-l">
                                                            <label><b><u>หมายเหตุ</u></b></label> &nbsp; <input  type="checkbox" id="ssss" class="filled-in chk-col-light-blue">
                                                            <label for="ssss">(ถ้ามี)ลาต่อเนื่องวันหยุด</label>
                                                        </div>
                                                    </div>
                                                </div>  
                                                <div class="row clearfix" id="input-hide">
                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >เนื่องจาก</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-9 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <textarea class="form-control" id="leave_since" placeholder="กรอกสาเหตุ"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix" id="input-2">
                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >ชื่อ-สกุล</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="leave_name2" class="form-control" placeholder="กรอกชื่อ-สกุล">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix" id="input-2">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >ตำแหน่ง</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                            <div class="form-group">
                                                                <div class="form-line">
                                                                    <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="pos_name">
                                                                        <?php
                                                                        $cn = new management;
                                                                        $cn->con_db();
                                                                        echo '<option  value="">เลือก</opition>';
                                                                        $sql = "select * from ps_position ";
                                                                        $query = $cn->Connect->query($sql);
                                                                        while ($rs = mysqli_fetch_array($query)) {
                                                                            echo '<option  value="' . $rs['pos_name'] . '">' . $rs['pos_name'] . '</opition>';
                                                                        }
                                                                        ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="row clearfix" id="input-Position">
                                                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                        <label >(ลงชื่อ)</label>
                                                    </div>
                                                    <div class="col-lg-4 col-md-9 col-sm-4 col-xs-12">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="name_place" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row clearfix" id="input-Position">
                                                        <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                                            <label >ผู้ปฎิบัติหน้าที่แทน</label>
                                                        </div>
                                                        <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                            <div class="input-group">
                                                                <span class="input-group-addon">
                                                                    <i class="material-icons">date_range</i>
                                                                </span>
                                                                <div class="form-line">
                                                                    <input type="text" id="leave_dates" class="form-control" placeholder="Ex: 30/07/2561">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary waves-effect" onclick="javascript: addRelax('ALR')">บันทึก</button>
                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                                        </div>

                                    </div>


                                    <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                        <div style="margin-left: 30%;" class="col-lg-8 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label>เขียนที่ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำนักงานป้องกันควบคุมโรคที่ 6 จังหวัดชลบุรี</label>
                                        </div>
                                        <div style="margin-left: 45%;" class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label> วันที่</label>

                                        </div>
                                        <div class="col-sm-4">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input type="text" id="leave_datesmp" class="form-control" placeholder="Ex: 30/07/2561">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div  class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label>เรื่อง</label>
                                            </div>
                                            <div class="col-sm-3">
                                                <select id="leave_type" class="form-control show-tick" data-live-search="true">
                                                    <option>ขอลาป่วย</option>
                                                    <option>ขอลาคลอดบุตร</option>
                                                    <option>ขอลากิจส่วนตัว</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div  class="col-lg-3 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label>อัปโหลดใบรับรองแพทย์</label>
                                            </div>
                                            <div class="image">
                                                <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12 align-center">
                                                    <div class="list-unstyled aniimated-thumbnials m-r--10">
                                                        <a href="../../images/moon.jpg" id="person_imgE" data-sub-html="รูปประจำตัว">
                                                            <img class="img-responsive img-css" id="imgSE" src="../../images/moon.jpg">
                                                        </a>
                                                    </div>
                                                    <label class="btn-file-upload m-l--60">
                                                        <input type='file' id="pro_pictureE" />
                                                        อัปโหลด
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >เรียน</label>
                                            </div>
                                            <div class="col-lg-4 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id ="leader_name" class="form-control" placeholder="กรอกชื่อผู้อนุมัติ" value="<?php
                                                        $cn = new management;
                                                        $cn->con_db();
                                                        $sql = "select p.pro_prefix,p.pro_fname, p.pro_lname from ps_profile as p left join ps_leveboss AS lb on p.lvb_id = lb.lvb_id where p.class_id = (select p.class_id from ps_profile as p left join ps_class as c on p.class_id = c.class_id where p.card_id = '" . $_SESSION['card_id'] . "') and lb.lvb_id ='7'";

                                                        $query = $cn->Connect->query($sql);
                                                        while ($rs = mysqli_fetch_array($query)) {
                                                            echo $rs['pro_prefix'] . $rs['pro_fname'] . ' ' . $rs['pro_lname'];
                                                        }
                                                        ?>"/>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div style="margin-left: 17%;" >
                                                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                    <label >ข้าพเจ้า</label>
                                                </div>
                                                <div class="col-lg-9 col-md-9 col-sm-5 col-xs-12">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" id="name_mesmp" class="form-control" placeholder="" value="<?php echo $_SESSION['pro_prefix'] . $_SESSION['name'] ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >ตำแหน่ง</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="posi_name" class="form-control" placeholder="" value="<?php echo $_SESSION['pos_name'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 form-control-label">
                                                <label >ระดับ</label>
                                            </div>
                                            <div class="col-lg-4 col-md-10 col-sm-9 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="degree_name" class="form-control" placeholder="" value="<?php echo $_SESSION['lv_name'] ?>">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >สังกัด</label>
                                            </div>
                                            <div class="col-lg-10 col-md-10t col-sm-9 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="sangkad_name" class="form-control" placeholder="" value="<?php echo $_SESSION['dep_name'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">

                                            <div  class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label>ขอลา</label>
                                            </div>
                                            <div class="col-sm-3" id="leave_type2">
                                                <input name="leave" type="radio" value="ลาป่วย" id="leave-sick" class="with-gap radio-col-purple">
                                                <label for="leave-sick">ลาป่วย</label>
                                                <br>
                                                <input name="leave" type="radio" value="กิจส่วนตัว" id="leave-private" class="with-gap radio-col-purple">
                                                <label for="leave-private">กิจส่วนตัว</label>
                                                <br>
                                                <input name="leave" type="radio" value="คลอดบุตร" id="leave-maternity" class="with-gap radio-col-purple">
                                                <label for="leave-maternity">คลอดบุตร</label>
                                            </div>
                                            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4 form-control-label-l">
                                                <label >เนื่องจาก</label>
                                            </div>
                                            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-8 align-left form-control-radio" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_sincesmp" class="form-control" placeholder="" maxlength="10">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >ตั้งแต่วันที่</label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12 form-control-label" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_Indaysmp" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >ถึงวันที่ </label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12 form-control-label" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_outdaysmp" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >มีกำหนด</label>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_totalsmp" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >วัน   </label>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-2 col-md-1 col-sm-1 col-xs-4 form-control-label-l">
                                                <label >ข้าพเจ้าได้ลา</label>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-8 align-left form-control-radio" id="leave_type3">
                                                <input name="leave2" type="radio" value="ป่วย" id="leave-sick2" class="with-gap radio-col-purple" />
                                                <label for="leave-sick2">ป่วย</label>
                                                <input name="leave2" type="radio" value="กิจส่วนตัว" id="leave-private2" class="with-gap radio-col-purple" />
                                                <label for="leave-private2">กิจส่วนตัว</label>
                                                <input name="leave2" type="radio" value="คลอดบุตร" id="leave-maternity2" class="with-gap radio-col-purple" />
                                                <label for="leave-maternity2">คลอดบุตร</label>
                                            </div>


                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label-l-l">
                                                <label >ครั้งสุดท้ายตั้งแต่วันที่</label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12 form-control-label-l" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_lastday" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >ถึงวันที่ </label>
                                            </div>
                                            <div class="col-lg-2 col-md-4 col-sm-8 col-xs-12 form-control-label" >
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_lastday2" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label >มีกำหนด</label>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="leave_totalsmp2" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label >วัน   </label>
                                            </div>
                                        </div>

                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-12 form-control-label-l">
                                                <label >ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่</label>
                                            </div>
                                            <div class="col-lg-3 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">

                                                    <textarea rows="3" cols="40" id="leave_address2"></textarea>

                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-2 col-sm-3 col-xs-12 form-control-label">
                                                <label >หมายเลขโทรศัพท์</label>
                                            </div>
                                            <div class="col-lg-2 col-md-9 col-sm-4 col-xs-12">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="Tel_me" class="form-control" placeholder="" onkeypress="return isNumberKey(event)" onkeyup="autoTab2(this, 2)" value="<?php echo $_SESSION['tel'] ?>"/>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary waves-effect" onclick="javascript: addPsm('ASM')">บันทึก</button>
                                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                                        </div>




                                    </div>








                                </div>

                            </div>

                        </div>
                    </div>      
                </div>
            </div>
        </div>


    </section>
    <?php include ("../../PS_script/personnal/leave_relax.php"); ?>

</body>
</html>


