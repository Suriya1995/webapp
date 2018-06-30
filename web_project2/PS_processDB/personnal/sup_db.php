
<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../../connect/connect_DB_personal.php';
header("Content-type: application/json;charset=utf-8");
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    switch ($_POST["FN"]) {
        case "get_year":get_data_year();
            break;
        case "getYear":getYear();
            break;
        case "get_year_between":get_year_between();
            break;
        case "get_prifile":get_prifile();
            break;
        case "get_data_year_table":get_data_year_table();
            break;
        case "getYbetween":getYbetweenTable();
            break;

    }
}
function getYbetweenTable() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $yearMaX = $get_data[0];
        $yearMin = $get_data[1];
        $sql = "SELECT * FROM `ps_profile` JOIN ps_position ON ps_position.pos_id = ps_profile.pos_id JOIN ps_class ON ps_class.class_id = ps_profile.class_id  WHERE YEAR(pro_dateOut) <= '$yearMaX' AND YEAR(pro_dateOut) >= '$yearMin'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_data_year() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $year = $get_data[0];
        $sql = "SELECT * ,YEAR(pro_dateOut)+543 AS year, COUNT(YEAR(pro_dateOut)) AS num FROM `ps_profile` WHERE YEAR(pro_dateOut) = '$year' GROUP BY year(pro_dateOut) ORDER BY year ASC";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_data_year_table() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $year = $get_data[0];
        //$sql = "SELECT * FROM `ps_profile` WHERE YEAR(pro_dateOut) = '$year' ";
        $sql = "SELECT pro_id ,card_id ,pro_prefix ,pro_fname , pro_lname ,pos_name , class_name , pro_dateOut  FROM `ps_profile`
        JOIN ps_position ON ps_position.pos_id = ps_profile.pos_id
        JOIN ps_class ON ps_class.class_id = ps_profile.class_id WHERE YEAR(pro_dateOut)  = '$year'";

        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function getYear() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $sql = "SELECT * ,YEAR(pro_dateOut)+543 AS year, COUNT(YEAR(pro_dateOut)) AS num FROM `ps_profile` GROUP BY year(pro_dateOut) ORDER BY year ASC";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_year_between() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $yearMaX = $get_data[0];
        $yearMin = $get_data[1];
        $sql = "SELECT * ,YEAR(pro_dateOut)+543 AS year, COUNT(YEAR(pro_dateOut)) AS num FROM `ps_profile` JOIN ps_position ON ps_position.pos_id = ps_profile.pos_id JOIN ps_class ON ps_class.class_id = ps_profile.class_id  WHERE YEAR(pro_dateOut) <= '$yearMaX' AND YEAR(pro_dateOut) >= '$yearMin' GROUP BY year(pro_dateOut) ORDER BY year ASC";
        //$sql = "SELECT * ,YEAR(pro_dateOut)+543 AS year, COUNT(YEAR(pro_dateOut)) AS num FROM `ps_profile` WHERE YEAR(pro_dateOut) <= '$yearMaX' AND YEAR(pro_dateOut) >= '$yearMin' GROUP BY year(pro_dateOut) ORDER BY year ASC";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_prifile() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        // $sql = "SELECT * FROM `ps_profile` JOIN  WHERE YEAR(pro_dateOut) > 0";
        $sql = "SELECT pro_id ,card_id ,pro_prefix ,pro_fname , pro_lname ,pos_name , class_name , pro_dateOut  FROM `ps_profile`
                JOIN ps_position ON ps_position.pos_id = ps_profile.pos_id
                JOIN ps_class ON ps_class.class_id = ps_profile.class_id WHERE YEAR(pro_dateOut) > 0" ;
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

?>
