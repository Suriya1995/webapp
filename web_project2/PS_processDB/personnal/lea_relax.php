<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../../connect/connect_DB_personal.php';
header("Content-type: application/json;charset=utf-8");
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    switch ($_POST["FN"]) {
        case "sl_table_profile":sl_data_leave();
            break;
        case "ALR":addRelax();
            break;
        case "ASM":addPsm();
            break;
        case "sl_data_form":sl_data_form();
            break;
        case "sl_data_form2":sl_data_form2();
            break;
        case "sl_table_leaves":sl_table_leaves();
            break;
        case "sl_table_leavesmp":sl_table_leavesmp();
            break;
        case "sl_table_approve":sl_table_approve();
            break;
        case "sl_table_approvesmp":sl_table_approvesmp();
            break;
        case "APPROV":YNAPPROV();
            break;
        case "APPROV2":YNAPPROV2();
            break;
        case "DLX":del_approvlax();
            break;
        case "DSMP":del_smp();
            break;
        case "get_data_day":get_data_day();
            break;
        case "get_data_day2":get_data_day2();
            break;
        case "get_data_lastDate":get_data_lastDate();
            break;
        case "get_data_form2":get_data_form2();
            break;
        case "sl_detail_form1":sl_detail_form1();
            break;
    }
}
if (!empty($_FILES['Improfile'])) {
    $file_array = explode(".", $_FILES["Improfile"]["name"]);
    if ($file_array[1] == ('png' || "jpg")) {
        $cn = new management;
        $cn->con_db();
        $rand = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'), 0, 15);
        $new_images = $rand . '-' . $_FILES["Improfile"]["name"];
        $tmpFolder = "../../images/img-leave/" . $new_images;
        move_uploaded_file($_FILES['Improfile']['tmp_name'], $tmpFolder);
        echo $tmpFolder;
        exit();
    }
}

function addRelax() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $pro_id = $_SESSION['pro_id'];
        $sql = "INSERT INTO ps_leaverelax (leave_write, leave_date, leave_rerng, leave_topic, leave_name, position_name"
                . ", levels_la, sangkad_la, leave_daylax, leave_totalday"
                . ", leave_Inday, leave_outday, leave_dayreplace, leave_address, tel_leave, leave_since"
                . ",leave_name2, pos_name, name_place, leave_dates, pro_id)"
                . "VALUES('$get_data[0]','$get_data[1]', '$get_data[2]', '$get_data[3]', '$get_data[4]', '$get_data[5]', '$get_data[6]', '$get_data[7]', '$get_data[8]', '$get_data[9]', '$get_data[10]', '$get_data[11]', '$get_data[12]', '$get_data[13]', '$get_data[14]', '$get_data[15]', '$get_data[16]', '$get_data[17]', '$get_data[18]', '$get_data[19]', $pro_id )";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function addPsm() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $pro_id = $_SESSION['pro_id'];
        $sql = "INSERT INTO ps_leavesmp (leave_writesmp, leave_type, leave_type2, leave_sincesmp, leave_Indaysmp, leave_outdaysmp, leave_totalsmp, leave_lastday, leave_lastday2, leave_totalsmp2, leave_address2, leave_type3, leave_datesmp, leader_name, name_mesmp, posi_name, degree_name, sangkad_name, Tel_me, pic_lasick, pro_id)"
                . "VALUES('$get_data[0]','$get_data[1]','$get_data[2]','$get_data[3]','$get_data[4]','$get_data[5]','$get_data[6]','$get_data[7]','$get_data[8]','$get_data[9]','$get_data[10]','$get_data[11]','$get_data[12]','$get_data[13]','$get_data[14]','$get_data[15]','$get_data[16]','$get_data[17]', '$get_data[18]' , '$get_data[19]' , '$pro_id')";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function sl_data_form() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_leaverelax WHERE leavelax_id = (SELECT MAX(leavelax_id) FROM ps_leaverelax)";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_detail_form1() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_leaverelax WHERE leavelax_id = '$get_data[0]'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_data_form2() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_leavesmp WHERE leave_idsmp = (SELECT MAX(leave_idsmp) FROM ps_leavesmp)";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_data_form2() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_leavesmp WHERE leave_idsmp = '$get_data[0]]'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_table_leaves() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_leaverelax ";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_table_leavesmp() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_leavesmp ";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_table_approve() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_leaverelax WHERE status_leaves = '0'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function sl_table_approvesmp() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_leavesmp WHERE status_leaves2 = '0'";
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
            $sql = "UPDATE ps_leaverelax SET status_leaves = '1' WHERE leavelax_id = '$get_data[1]]'";
        } else {
            $sql = "UPDATE ps_leaverelax SET status_leaves = '2' WHERE leavelax_id = '$get_data[1]]'";
        }
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function YNAPPROV2() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        if ($get_data[0] == '1') {
            $sql = "UPDATE ps_leavesmp SET status_leaves2 = '1' WHERE leave_idsmp = '$get_data[1]]'";
        } else {
            $sql = "UPDATE ps_leavesmp SET status_leaves2 = '2' WHERE leave_idsmp = '$get_data[1]]'";
        }
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

////ฟอร์มแรก////

function del_approvlax() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "DELETE FROM ps_leaverelax WHERE leavelax_id = '$get_data[0]'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_smp() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "DELETE FROM ps_leavesmp WHERE leave_idsmp = '$get_data[0]'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function get_data_day() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT SUM(leave_dayreplace) AS num FROM ps_leaverelax ";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_data_day2() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT SUM(leave_totalsmp) AS num2 FROM ps_leavesmp ";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_data_lastDate() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_leavesmp WHERE leave_idsmp = (SELECT MAX(leave_idsmp) FROM ps_leavesmp)";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

?>