<?php include 'main_personnal.php'; ?>
<?php require_once '../../connect/connect_DB_personal.php'; ?>
<html>
    <body>
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">

                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        อนุมัติการลาพักผ่อน
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="table-responsive">
                                        <div id="table_approve_show"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2>
                                        อนุมัติการลาป่วย คลอดบุตร กิจส่วนตัว
                                    </h2>
                                </div>
                                <div class="body">
                                    <div class="table-responsive demo-checkbox">
                                        <div id="table_approvesmp_show"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal Add BnIN -->
            <div class="modal fade" id="detailLeavelax" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title " >ลาพักผ่อนประจำปี</h4>
                        </div>
                        <div class="modal-body">  <!-- ทำในนี้ -->
                            <!--<div class="card">-->
                            <form id="fm_addBnIn" method="POST">
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>เรื่อง</label>
                                        <label style="margin-left: 7.8em;">ขอลาพักผ่อน</label>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>ชื่อ</label>
                                        <span style="margin-left: 8.6em;" id="name"></span>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>ตำแหน่ง</label>
                                        <span style="margin-left: 6.3em;" id="position"></span>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>ระดับ</label>
                                        <span style="margin-left: 7.5em;" id="levels"></span> 
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>สังกัด</label>
                                        <span style="margin-left: 7.5em;" id="sangkad"></span>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>ขอลาตั้งแต่วันที่</label>
                                        <span style="margin-left: 3em;" id="Inday"></span> 
                                    </div>


                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>ถึงวันที่</label>
                                        <span style="margin-left: 6.8em;" id="outday"></span> 
                                    </div>


                                </div>
                            </form>
                            <!--</div>-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary waves-effect" onclick="javascript: addBnIn('ADDBNIN')">เพิ่ม</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Modal Show relax -->

            <!-- Modal Add BnIN -->
            <div class="modal fade" id="detailLeavesmp" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-green">
                            <h4 class="modal-title " >ลาป่วย คลอดบุตร กิจส่วนตัว</h4>
                        </div>
                        <div class="modal-body">  <!-- ทำในนี้ -->
                            <!--<div class="card">-->
                            <form  method="POST">
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>เรื่อง</label>
                                        <span style="margin-left: 7.8em;" id="type1"> </span>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>ชื่อ</label>
                                        <span style="margin-left: 8.6em;" id="nameme"></span>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>ตำแหน่ง</label>
                                        <span style="margin-left: 6.3em;" id="posiname"></span>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>ระดับ</label>
                                        <span style="margin-left: 7.5em;" id="degree"></span> 
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>สังกัด</label>
                                        <span style="margin-left: 7.5em;" id="sangkad2"></span>
                                    </div>

                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>ขอลาตั้งแต่วันที่</label>
                                        <span style="margin-left: 3em;" id="Indaysmp"></span> 
                                    </div>


                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8 form-control-label-l">
                                        <label>ถึงวันที่</label>
                                        <span style="margin-left: 6.8em;" id="outdaysmp"></span> 
                                    </div>


                                </div>
                            </form>
                            <!--</div>-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary waves-effect" onclick="javascript: addBnIn('ADDBNIN')">เพิ่ม</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Modal Show smp -->
        </section>
        <?php include ("../../PS_script/personnal/leave_relax.php"); ?>
    </body>
</html>