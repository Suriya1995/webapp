<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../../connect/connect_DB_personal.php';
header("Content-type: application/json;charset=utf-8");
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    switch ($_POST["FN"]) {
        case "sl_detail_power":sl_detail_power();
            break;
        case "sl_detail_power_man":sl_detail_power_Man();
            break;
        case "sl_detail_power_feman":sl_detail_power_feman();
            break;
        case "sl_detail_power_all":sl_detail_power_all();
            break;
    }
}

function sl_detail_power() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_profile AS ps LEFT JOIN ps_type AS pt ON ps.type_id = pt.type_id LEFT JOIN ps_class AS pc ON ps.class_id = pc.class_id LEFT JOIN ps_position AS pp ON ps.pos_id = pp.pos_id WHERE ps.class_id = '" . $get_data[0] . "' AND ps.type_id = '" . $get_data[1] . "'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_detail_power_man() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_profile AS ps LEFT JOIN ps_type AS pt ON ps.type_id = pt.type_id LEFT JOIN ps_class AS pc ON ps.class_id = pc.class_id LEFT JOIN ps_position AS pp ON ps.pos_id = pp.pos_id WHERE ps.class_id = '" . $get_data[0] . "' AND ps.type_id IN (2, 6, 9, 10, 11, 12) AND ps.pro_sex = 1";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_detail_power_feman() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_profile AS ps LEFT JOIN ps_type AS pt ON ps.type_id = pt.type_id LEFT JOIN ps_class AS pc ON ps.class_id = pc.class_id LEFT JOIN ps_position AS pp ON ps.pos_id = pp.pos_id WHERE ps.class_id = '" . $get_data[0] . "' AND ps.type_id IN (2, 6, 9, 10, 11, 12) AND ps.pro_sex = 2";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_detail_power_all() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_profile AS ps LEFT JOIN ps_type AS pt ON ps.type_id = pt.type_id LEFT JOIN ps_class AS pc ON ps.class_id = pc.class_id LEFT JOIN ps_position AS pp ON ps.pos_id = pp.pos_id WHERE ps.class_id = '" . $get_data[0] . "' AND ps.type_id IN (2, 6, 9, 10, 11, 12) ORDER BY ps.pro_sex ASC";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}
?>