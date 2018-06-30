
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
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2 text-center>
                                    จัดการข้อมูลเกษียณอายุราชการ
                                </h2>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <select id="datein" class="form-control show-tick" style="width: 100%" data-live-search="true" onchange="secdatein()">
                                            <option value ="">เลือก</option>
                                            <?php
                                            $cn = new management;
                                            $cn->con_db();
                                            $sql = "SELECT * ,YEAR(pro_dateOut)+543 AS year FROM `ps_profile` GROUP BY year(pro_dateOut)";
                                            $query = $cn->Connect->query($sql);

                                            while ($row = mysqli_fetch_array($query)) {
                                                if ($row["year"] != '543') {
                                                    echo '<option value ="' . $row["year"] . '">' . $row["year"] . '</option>';
                                                }
                                            };
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <select id="dateout" class="form-control show-tick" style="width: 100%" data-live-search="true" onchange="secdateout()">
                                            <option value ="">เลือก</option>
                                            <?php
                                            $cn = new management;
                                            $cn->con_db();
                                            $sql = "SELECT * ,YEAR(pro_dateOut)+543 AS year FROM `ps_profile` GROUP BY year(pro_dateOut)";
                                            $query = $cn->Connect->query($sql);
                                            while ($row = mysqli_fetch_array($query)) {
                                                if ($row["year"] != '543') {
                                                    echo '<option value ="' . $row["year"] . '">' . $row["year"] . '</option>';
                                                }
                                            };
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="body">
                                    <div class="row clearfix align-center">
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>กราฟแท่ง</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="bar_chart" class="graph"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div  class="col-lg-2 col-md-2 col-sm-2 col-xs-2">

                                                <div >
                                                    <h2>รวม</h2>
                                                      <div class="card">
                                                        <div class="body bg-green">
                                                          <h3 id="count"></h3>
                                                        </div>
                                                          </div>
                                                </div>

                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>กราฟวงกลม</h2>

                                                </div>

                                                <div class="body">
                                                    <div id="donut_chart" class="graph"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="card">
                                                    <div class="body">
                                                        <div class="table-responsive">
                                                                    <div id="table_chart"></div>
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
        <?php include_once("../../PS_script/personnal/getchart.php"); ?>

    </body>
</html>
