<?php 
include 'main_personnal.php'; 
include_once("../../connect/connect_DB_personal.php");
?>
<html>

    <html>
        <body>
            <section class="content">
                <div class="container-fluid">
                    <div class="block-header">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header bg-green" >
                                    <h2>
                                        อนุมัติการไปราชการ
                                    </h2>

                                </div>
                                <div class="body">
                                    <!-- Nav tabs -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="branch-in">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="body">
                                                        <div class="table-responsive">
                                                            <div id="table_statusmapprov_show"></div>
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
                </div>


                <!-- Modal Add BnIN -->
                <div class="modal fade" id="detailMeet" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-green">
                                <h4 class="modal-title " >หน่วยงานภายใน</h4>
                            </div>
                            <div class="modal-body">  <!-- ทำในนี้ -->
                                <!--<div class="card">-->
                                <form id="fm_addBnIn" method="POST">
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-4 form-control-label">
                                            <label>รหัส</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="code_class" maxlength="4" class="form-control" placeholder="กรอกรหัส">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-4 form-control-label">
                                            <label>ชื่อหน่วยงาน</label>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-8">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="name_class" class="form-control" placeholder="กรอกชื่อหน่อวยงาน">
                                                </div>
                                            </div>
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
                <!-- #END# Modal Add BnIN -->
            </section>



            <!-- Script -->
<?php include ("../../PS_script/personnal/meet_addData.php"); ?>


        </body>
    </html>