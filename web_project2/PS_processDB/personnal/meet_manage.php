<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../../connect/connect_DB_personal.php';
header("Content-type: application/json;charset=utf-8");
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    switch ($_POST["FN"]) {
        case "sl_table_profile":sl_data_profile();
            break;
        case "APM":add_meet();
            break;
        case "APM2":add_meet2();
            break;
        case "APM3":add_meet3();
            break;
        case "sl_data_form":sl_data_form();
            break;
        case "sl_table_statusmeet":sl_table_statusmeet();
            break;
        case "sl_table_statusmapprov":sl_table_statusmapprov();
            break;
        case "sl_table_statusmapprov_di":sl_table_statusmapprov_di();
            break;
        case "sl_table_reportapprov":sl_table_reportapprov();
            break;
        case "APPROV":YNAPPROV();
            break;
        case "APPROV_DI":YNAPPROV_DI();
            break;
        case "ARP":add_report();
            break;
        case "sl_table_statusreport":sl_table_statusreport();
            break;
        case "sl_table_meet_report":sl_table_meet_report();
            break;
        case "sl_table_reportcount":sl_table_reportcount();
            break;
    }
}


    if (!empty($_FILES['Improfile'])){

        $file_array = explode(".", $_FILES["Improfile"]["name"]);
        if ($file_array[1] == ('pdf')) {
            $cn = new management;
            $cn->con_db();

            $new_images = $_FILES["Improfile"]["name"];
            $tmpFolder = "../../fpdf17/MyPDF/" . $new_images;
            move_uploaded_file($_FILES['Improfile']['tmp_name'], $tmpFolder);
            echo $tmpFolder;
            exit();
        }
    }

    function add_meet(){
        $cn = new management;
        $cn->con_db();
        if ($cn->Connect) {
            $get_data = explode("|", $_POST["PARM"]);
            $user = $_SESSION['pro_id'];
            $sql = "INSERT INTO ps_hismeetting(class_name,meet_no,meet_date,lvb_name,meet_psname,
                                                meet_name,meet_type,meet_datefrom,meet_dateto,meet_budget,
                                                meet_dateout,meet_timeout,meet_dateback,meet_datecome,pro_id)"
                                    
                                . "VALUES('$get_data[0]','$get_data[1]','$get_data[2]','$get_data[3]','$get_data[4]',
                                            '$get_data[5]','$get_data[6]','$get_data[7]','$get_data[8]','$get_data[9]',
                                                '$get_data[10]','$get_data[11]','$get_data[12]','$get_data[13]', '$user')";
            //echo $sql ;exit();
            $rs = $cn->execute($sql);
            echo $rs;
        }
        exit();
    }


    function add_meet2(){
        $cn = new management;
        $cn->con_db();
        if ($cn->Connect) {
            $get_data = explode("|", $_POST["PARM"]);
            $sql = "INSERT INTO meet_location(meet_id,location_name,location_provice,location_datefrom,location_dateto)"
                                . "VALUES('$get_data[0]','$get_data[1]','$get_data[2]' , '$get_data[3]' , '$get_data[4]')";
            //echo $sql; exit();                   
            $rs = $cn->execute($sql);
            echo $rs;
        }
        exit();
    }

    function add_meet3(){
        $cn = new management;
        $cn->con_db();
        if ($cn->Connect) {
            $get_data = explode("|", $_POST["PARM"]);
            $sql = "INSERT INTO meet_pspart(name_pspart)"
                                . "VALUES('$get_data[0]')";
            //echo $sql; exit();                   
            $rs = $cn->execute($sql);
            echo $rs;
        }
        exit();
    }

    function add_report(){
        $cn = new management;
        $cn->con_db();
        if ($cn->Connect) {
            $get_data = explode("|", $_POST["PARM"]);
            
            $sql = "INSERT INTO meet_report(report_goal,report_contents,report_benefits,report_pdf)"
                    . "VALUES('$get_data[0]','$get_data[1]','$get_data[2]', '$get_data[3]' )";
            $rs = $cn->execute($sql);
            echo $rs;
        }
        exit();
    }

//PDF report//
function sl_data_form() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_hismeetting WHERE meet_id = (SELECT MAX(meet_id) FROM ps_hismeetting)";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}
//PDF report//


function sl_table_statusmeet() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_hismeetting";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_table_statusmapprov() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_hismeetting WHERE meet_status = '0'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_table_statusmapprov_di() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_hismeetting WHERE meet_status_director = '0' AND meet_status = '1' AND meet_status_vehicle = '1'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_table_reportapprov() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_hismeetting WHERE meet_status_director  = '1' AND meet_psname = '$get_data[0]'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_table_statusreport() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_hismeetting WHERE meet_status = '0' AND meet_psname = '$get_data[0]'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_table_meet_report(){
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_class";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}
function sl_table_reportcount(){
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_profile WHERE class_id = '$get_data[0]'";
//        echo $sql;exit();
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}



function YNAPPROV() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);

        if ($get_data[0] == '1') {
            $sql = "UPDATE ps_hismeetting SET meet_status = '1' WHERE meet_id = '$get_data[1]]'";
        } else {
            $sql = "UPDATE ps_hismeetting SET meet_status = '2' WHERE meet_id = '$get_data[1]]'";
        }
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}


function YNAPPROV_DI() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);

        if ($get_data[0] == '1') {
            $sql = "UPDATE ps_hismeetting SET meet_status_director = '1' WHERE meet_id = '$get_data[1]]'";
        } else {
            $sql = "UPDATE ps_hismeetting SET meet_status_director = '2' WHERE meet_id = '$get_data[1]]'";
        }
        $rs = $cn->execute($sql);
        echo $rs;
       
    }
    exit();
}
?>

