<?php include 'main_personnal.php'; ?>
<head>
</head>
<body>
    <section class="content">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                        รายงานบุคคลในองค์กร
                        </h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="body">
                                    <div class="table-responsive">
                                            <div id="table_report_per"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Modal Add BnIN -->
    <div class="modal fade" id="modal_report_per" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-green">
                                <h4 class="modal-title " >ข้อมูลบุคลากรภายใน</h4>
                            </div>
                            <div class="modal-body">  <!-- ทำในนี้ -->
                                <!--<div class="card">-->
                                <div class="table-responsive">
                                    <div id="table_inmodal_report_per"></div>
                                </div>
                                
                            </div>  
                            
                        </div>
                    </div>
                </div>
                <!-- #END# Modal Add BnIN -->
</section>
<?php include_once("../../PS_script/personnal/re_personnal.php"); ?>
</body>
</html>
