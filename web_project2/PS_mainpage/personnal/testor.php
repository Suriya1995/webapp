
<?php
session_start();
ob_start();
?>


<?php include 'main_personnal.php'; ?>
<html>
    <body>
        <section class="content">

            <div class="container-fluid">
                <!-- No Header Card -->


                <?php
                $cn = new management;
                $cn->con_db();



                $sql = "SELECT * FROM `ps_class` LEFT JOIN ps_profile ON ps_class.class_id = ps_profile.class_id 
                    LEFT JOIN ps_position ON ps_position.pos_id = ps_profile.pos_id
                    LEFT JOIN ps_type ON ps_type.type_id = ps_profile.type_id
                    LEFT JOIN ps_leveboss ON ps_leveboss.lvb_id = ps_profile.lvb_id
                    LEFT JOIN ps_level ON ps_level.lv_id = ps_profile.lv_id
                    LEFT JOIN ps_department ON ps_department.dep_id = ps_profile.dep_id
                    WHERE ( ps_class.class_id = " . $_GET['id'] . " OR ps_profile.pos_id = 0000 )
					AND ps_profile.pro_fname != 'NULL'
					ORDER BY ps_profile.lvb_id ASC;";

                $query = $cn->Connect->query($sql);
                ?>



                <div class="card" >   
                    <div class = "table-responsive">        
                        <div id="chart_div"></div>
                    </div>
                </div>

            </div>
        </section>
    </body>
</html>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {packages: ["orgchart"]});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        data.addRows([
<?php
$lvb_id = 0;
$lvb_id_test = 0;
$person = "";
$person_test = "";
$pro_picture = "";
$i = 0;

while ($rs = mysqli_fetch_array($query)) {

    if ($rs['pro_picture'] == "") {
        $pro_picture = "noimg.jpg";
    } else {
        $pro_picture = $rs['pro_picture'];
    }

    if ($rs['lvb_id'] - $lvb_id > 1) {
        $person = $person_test;
        $lvb_id = $lvb_id_test;
    }
    if ($i == 0) {

        $person = "<img src='../../images/img-profile/$pro_picture' height='100' width='100'><br><h5>" . $rs['class_id'] . "&nbsp;" .
                $rs['pro_fname'] . "&nbsp;" .
                $rs['pro_lname'] . "<br>" . "<div style='color:red;'>" .
                $rs['lvb_name'] . "&nbsp;" .
                $rs['type_name'] . "</div>" .
                "</h5>";
        $lvb_id = $rs['lvb_id'];
    }

    if ($rs['lvb_id'] > $lvb_id) {
        ?>
                    ["<?php
        echo "<img src='../../images/img-profile/$pro_picture' height='100' width='100'><br><h5>" . $rs['class_id'] . "&nbsp;" .
        $rs['pro_fname'] . "&nbsp;" .
        $rs['pro_lname'] . "<br>" . "<div style='color:red;'>" .
        $rs['lvb_name'] . "&nbsp;" .
        $rs['type_name'] . "</div>" .
        "</h5>";
        ?>", "<?php echo $person; ?>", ''],

        <?php
    } else if ($rs['lvb_id'] == $lvb_id) {
        ?>
                    ["<?php
        echo "<img src='../../images/img-profile/$pro_picture' height='100' width='100'><br><h5>" . $rs['class_id'] . "&nbsp;" .
        $rs['pro_fname'] . "&nbsp;" .
        $rs['pro_lname'] . "<br>" . "<div style='color:red;'>" .
        $rs['lvb_name'] . "&nbsp;" .
        $rs['type_name'] . "</div>" .
        "</h5>";
        ?>", "<?php echo $person; ?>", ''],
        <?php
    } else {
        ?>
                    ["<?php
        echo "<img src='../../images/img-profile/$pro_picture' height='100' width='100'><br><h5>" . $rs['class_id'] . "&nbsp;" .
        $rs['pro_fname'] . "&nbsp;" .
        $rs['pro_lname'] . "<br>" . "<div style='color:red;'>" .
        $rs['lvb_name'] . "&nbsp;" .
        $rs['type_name'] . "</div>" .
        "</h5>";
        ?>", "", ''],
        <?php
    }

    $lvb_id_test = $rs['lvb_id'];
    $person_test = "<img src='../../images/img-profile/$pro_picture' height='100' width='100'><br><h5>" . $rs['class_id'] . "&nbsp;" .
            $rs['pro_fname'] . "&nbsp;" .
            $rs['pro_lname'] . "<br>" . "<div style='color:red;'>" .
            $rs['lvb_name'] . "&nbsp;" .
            $rs['type_name'] . "</div>" .
            "</h5>";
    $i++;
}
?>
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml: true});

        if ("<?php echo $i; ?>" == "1") {
            window.location.href = "../../PS_mainpage/personnal/person_GovernmentHouse.php";
        }

    }
</script>


