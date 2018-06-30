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
                                        รายงานการเดินทางไปราชการจำแนกตามกลุ่มงาน 
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
                                                            <div id="table_meet_report_show"></div>
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
                 <!-- Modal Add BnIN -->
                <div class="modal fade" id="detailreport" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-green">
                                <h4 class="modal-title " >หน่วยงานภายใน</h4>
                            </div>
                            <div class="modal-body">  <!-- ทำในนี้ -->
                                <!--<div class="card">-->
                               <div class="body">
                                    <!-- Nav tabs -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="branch-in">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="body">
                                                        <div class="table-responsive">
                                                            <div id="table_reportcount_show"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--</div>-->
                            </div>  
                           
                        </div>
                    </div>
                </div>
                <!-- #END# Modal Add BnIN -->
                <!-- #END# Modal Add BnIN -->
            </section>



            <!-- Script -->
<?php include ("../../PS_script/personnal/meet_addData.php"); ?>
        </body>
 </html>