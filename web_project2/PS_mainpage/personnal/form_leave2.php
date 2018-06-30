<?php
@ob_start();
@session_start();
include '../../common/header.php';
?>
<?php require_once '../../connect/connect_DB_personal.php'; ?>
<html>
    <body>
        <style type="text/css">
            @media print
            {
                .noprint {visibility:hidden;}
            }
        </style>



        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <br>
                <div >
                    <center><label><u>ใบลาพักผ่อนประจำปี</u></label></center>
                </div>

                <div class="body">


                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade fade active in" id="home_with_icon_title">


                            <div class="row clearfix">

                                <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label-l">
                                    <label style="margin-left: 29em;">เขียนที่</label>
                                    <span style="margin-left: 5em;" id="write"></span>

                                </div>
                            </div>
                            <div class="row clearfix">

                                <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label-l">
                                    <label style="margin-left: 30em;">วันที่</label>
                                    <span style="margin-left: 5em;" id="date1"></span>

                                </div>
                            </div>

                            <div class="row clearfix">
                                <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label-l">
                                    <label>เรื่อง</label>
                                    <span style="margin-left: 5em;">ขอลาพักผ่อน</span>

                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label-l">
                                    <label >เรียน</label>
                                    <span style="margin-left: 5em;" id="topic"></span>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label-l">
                                    <label style="margin-left: 8em;">ข้าพเจ้า</label>
                                    <span style="margin-left: 5em;" id="name"></span> 
                                </div>

                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label-l">
                                    <label >ตำแหน่ง</label>
                                    <span style="margin-left: 5em; "id="position"></span>
                                    <label style="margin-left: 5em;">ระดับ</label>
                                    <span style="margin-left: 5em;" id="levels"></span>
                                </div>

                            </div>    
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label-l">
                                    <label style="margin-left: 8em;">สังกัด</label>
                                    <span style="margin-left: 5em;" id="sangkad"></span> 
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label-l">
                                    <label >มีวันลาพักผ่อนสะสม</label>
                                    <span style="margin-left: 1em;" id="lacollect"></span>
                                    <label style="margin-left: 2em;">วันทำการ  &nbsp; &nbsp;มีสิทธิลาพักผ่อนประจำปีนี้อีก 10 วัน </label>
                                    <label >รวมเป็น</label>
                                    <span style="margin-left: 1em;" id="latotal"></span>
                                    <label >วันทำการ</label>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label-l">
                                    <label >ขอลาพักผ่อนตั้งแต่วันที่</label>
                                    <span style="margin-left: 2em;" id="Inday"></span>
                                    <label style="margin-left: 2em;">ถึงวันที่</label>
                                    <span style="margin-left: 2em;" id="outday"></span>
                                    <label style="margin-left: 2em;">มีกำหนด</label>
                                    <span style="margin-left: 2em;" id="dayreplace"></span>
                                    <label >วันทำการ</label>
                                </div>

                            </div>

                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                    <div class="row clearfix">
                                        <div  class="col-lg-6 col-md-6 col-sm-3 col-xs-12 form-control-label-l">
                                            <label><b><u>หมายเหตุ</u> &nbsp;&nbsp;&nbsp;(ถ้ามี )1.ลาต่อเนื่องวันหยุด</b></label>  
                                        </div>
                                    </div>   
                                    <div class="row clearfix">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 form-control-label-l">
                                            <label >เนื่องจาก</label> 
                                            <span id="since"></span>
                                        </div>

                                        <div  class="col-lg-3 col-md-3 col-sm-3 col-xs-5 form-control-label-l">
                                            <div class="form-group">         
                                                <span id="since"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div  class="col-lg-6 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ในระหว่างลาข้าพเจ้าขอมอบหมาย</label>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div  class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                            <div class="form-group">         
                                                <center>  <label >ชื่อ </label> </center>
                                            </div>

                                        </div>
                                        <div  class="col-lg-6 col-md-1 col-sm-2 col-xs-4 ">
                                            <div class="form-group">

                                                <span id="name2"></span>

                                            </div>
                                        </div>

                                    </div>
                                    <div class="row clearfix">
                                        <div  class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                            <div class="form-group">         
                                                <center>  <label >ตำแหน่ง</label> </center>
                                            </div>

                                        </div>
                                        <div  class="col-lg-6 col-md-1 col-sm-2 col-xs-4 ">
                                            <div class="form-group">

                                                <span id="pos"></span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div  class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                            <div class="form-group">         
                                                <center>  <label >(ลงชื่อ)</label> </center>
                                            </div>

                                        </div>
                                        <div  class="col-lg-4 col-md-1 col-sm-2 col-xs-4 ">
                                            <div class="form-group">

                                                <span id="place"></span>

                                            </div>
                                        </div>
                                        <div  class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label">
                                            <div class="form-group">         
                                                <center>  <label >ผู้ปฎิบัติหน้าที่แทน</label> </center>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div  class="col-lg-3 col-md-3 col-sm-3 col-xs-12 form-control-label-l">
                                            <div class="form-group">         
                                                <center>  <label >วันที่</label> </center>
                                            </div>

                                        </div>
                                        <div  class="col-lg-6 col-md-1 col-sm-2 col-xs-4 ">
                                            <div class="form-group">

                                                <span id="dates"></span>

                                            </div>
                                        </div>
                                    </div>

                                    <label>&nbsp;&nbsp;&nbsp;&nbsp;<u>สถิติการลาในปีงบประมาณนี้</u></label>
                                    <table border='1' width='300'>
                                        <tr>
                                            <th><center><label>ลามาแล้ว<br>(วันทำการ)</label></center></th>
                                        <th><center><label>ลาครั้งนี้<br>(วันทำการ)</label></center></th>
                                        <th><center><label>รวม<br>(วันทำการ)</label></center></th>
                                        </tr>
                                        <tr>
                                            <td>-</td>
                                            <td>-</td>
                                            <td>-</td>
                                        </tr>

                                    </table> 
                                    <br>
                                    <br>
                                    <label >(ลงชื่อ) ................................................................ ผู้ตรวจสอบ</label>
                                    <br>
                                    <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(................................................................) </label>
                                    <br>
                                    <label >ตำแหน่ง ..............................................................................</label>
                                    <br>
                                    <label >วันที่ ..................../............................/................</label>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                    <label >&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ..............................................................</label>
                                    <br>
                                    <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(................................................................) </label>
                                    <br>
                                    <br>
                                    <br>
                                    <center><label><u>ความเห็นของผู้บังคับบัญชา</u></label></center>
                                    <br>
                                    <center><label >...............................................................</label></center>

                                    <center><label >......................................................................................</label></center>
                                    <br>
                                    <br>
                                    <label >&nbsp;&nbsp;&nbsp;&nbsp;ลงชื่อ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ..............................................................</label>
                                    <br>
                                    <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(................................................................) </label>
                                    <br>
                                    <label >ตำแหน่ง ..............................................................................</label>
                                    <br>
                                    <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่ ..................../............................/................</label>
                                    <br>
                                    <br>
                                    <center><label><u>คำสั่ง</u></label></center>
                                    <br>
                                    <center><input id="checkbox" type="checkbox">
                                        <label for="e"> <label>อนุญาต</label></label>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input id="checkbox" type="checkbox">
                                        <label for="e"> <label>ไม่อนุญาต</label></label>
                                    </center>
                                    <br>
                                    <br>
                                    <center><label >...............................................................</label></center>
                                    <center><label >......................................................................................</label></center>
                                    <br>
                                    <br>
                                    <label >(ลงชื่อ) ................................................................ ผู้ตรวจสอบ</label>
                                    <br>
                                    <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(................................................................) </label>
                                    <br>
                                    <label >ตำแหน่ง ..............................................................................</label>
                                    <br>
                                    <label >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วันที่ ..................../............................/................</label>
                                </div>

                            </div>

                            <center class="noprint"> 
                                <a href="leave_history.php">
                                    <button type="button" class="btn bg-grey waves-effect">
                                        <i class="material-icons">home</i>
                                        <span>กลับ</span>
                                    </button>
                                </a> 
                                <button type="button" class="btn bg-light-green waves-effect btn-print">
                                    <i class="material-icons">print</i>
                                    <span>พิมพ์...</span>
                                </button> 
                            </center>


                        </div>

                    </div>

                </div>

            </div>
        </div>      

        <?php include '../../common/headerScript.php'; ?>
        <?php include ("../../PS_script/personnal/leave_relax.php"); ?>
    </body>
</html>

