<?php 
    include 'main_personnal.php'; 
    include_once("../../connect/connect_DB_personal.php");

?>

    <html>
        <body>
            <section class="content">
                <div class="container-fluid">
                    <div class="block-header">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header bg-green" >
                                    <h2>
                                        สถานะการขอเดินทางไปราชการ
                                </div>
                                <div class="body">
                                    <!-- Nav tabs -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="branch-in">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="body">
                                                        <div class="table-responsive">
                                                            <div id="table_statusmeet_show"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header bg-green" >
                                    <h2>
                                        รายงานรอแจ้งผลยืนยันการไปประชุม/อบรม/สัมมนา
                                </div>
                                <div class="body">
                                    <!-- Nav tabs -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="branch-in">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="body">
                                                        <div class="table-responsive">
                                                            <div id="table_reportapprov_show"></div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="body">
                                <div class="modal fade" id="editreport" tabindex="-1" role="dialog">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header bg-green">
                                                <h4 class="modal-title " >รายงานการประชุม/อบรม/สัมมนา</h4>
                                            </div>
                                            <div class="modal-body">  <!-- ทำในนี้ -->
                                                <!--<div class="card">-->
                                                <form id="fm_addBnIn" method="POST">


                                                    <div class="row clearfix" >


                                                        <div class="col-xs-12 ol-sm-12 col-md-12 col-lg-12">
                                                            <b>เขียนรายงาน</b>
                                                            <div class="panel-group" id="accordion_2" role="tablist" aria-multiselectable="true">
                                                                <div class="panel panel-success">
                                                                    <div class="panel-heading" role="tab" id="headingOne_2">
                                                                        <h4 class="panel-title">
                                                                            <a role="button" data-toggle="collapse" data-parent="#accordion_2" href="#collapseOne_2" aria-expanded="false" aria-controls="collapseOne_2" class="collapsed">
                                                                                เป้าหมาย/วัตถุประสงค์การไปประชุม/อบรม/สัมมนา :
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseOne_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_2" aria-expanded="false" style="height: 0px;">
                                                                        <div class="panel-body">
                                                                            <div class="form-group">
                                                                                <br>
                                                                                <textarea id="meet_goal"rows="5" cols="110s"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-success">
                                                                    <div class="panel-heading" role="tab" id="headingTwo_2">
                                                                        <h4 class="panel-title">
                                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion_2" href="#collapseTwo_2" aria-expanded="false" aria-controls="collapseTwo_2">
                                                                                เนื้อหาการประชุมโดยสรุป :
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseTwo_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo_2" aria-expanded="false" style="height: 0px;">
                                                                        <div class="panel-body">
                                                                            <div class="form-group">
                                                                                <br>
                                                                                <textarea id ="meet_contents" rows="5" cols="110s"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="panel panel-success">
                                                                    <div class="panel-heading" role="tab" id="headingThree_2">
                                                                        <h4 class="panel-title">
                                                                            <a class="" role="button" data-toggle="collapse" data-parent="#accordion_2" href="#collapseThree_2" aria-expanded="true" aria-controls="collapseThree_2">
                                                                                ประโยชน์ที่ได้รับ :
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="collapseThree_2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree_2" aria-expanded="true" style="">
                                                                        <div class="panel-body">
                                                                            <div class="form-group">
                                                                                <br>
                                                                                <textarea id ="meet_benefits" rows="5" cols="110s"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 form-control-label-l">
                                                            <label class="btn-file-upload-pdf align-center">
                                                                <i class="material-icons">touch_app</i>
                                                                <input type='file' id="pro_pdf"  />เลือกไฟล์ <b>.pdf</b>


                                                            </label>
                                                            <div id ="name_pdf">


                                                            </div>

                                                        </div>

                                                    </div>
                                                </form>
                                                <!--</div>-->
                                            </div>


                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary waves-effect" onclick="javascript:add_report('ARP')">บันทึก</button>
                                                <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>.
                        </div>


                    </div>
                </div>











            </section>

            <!-- Script -->
            <?php include ("../../PS_script/personnal/meet_addData.php"); ?>


        </body>
    </html>