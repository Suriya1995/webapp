<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../../connect/connect_DB_personal.php';
header("Content-type: application/json;charset=utf-8");
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    switch ($_POST["FN"]) {
        case "sl_table_inside":sl_table_inside();
            break;
        case "ADDBNIN":add_BnIn();
            break;
        case "DELBNIN":del_BnIn();
            break;
        case "EBNIN":edit_BnIn();
            break;
        case "sl_dataEdit_BnIn":sl_dataEdit_BnIn();
            break;
        case "sl_table_outside":sl_table_outside();
            break;
        case "ADDBNOUT":add_BnOut();
            break;
        case "DELBNOUT":del_BnOut();
            break;
        case "EBNOUT":edit_BnOut();
            break;
        case "sl_dataEdit_BnOut":sl_dataEdit_BnOut();
            break;
        case "sl_table_position":sl_data_position();
            break;
        case "APOSI":add_position();
            break;
        case "DPOSI":del_Posi();
            break;
        case "EPOSI":edit_Posi();
            break;
        case "sl_dataEdit_Posi":sl_data_position();
            break;
        case "sl_table_level":sl_data_level();
            break;
        case "sl_dataEdit_Level":sl_data_level();
            break;
        case "ALV":add_level();
            break;
        case "DLV":del_level();
            break;
        case "ELV":edit_level();
            break;
        case "sl_table_type":sl_data_type();
            break;
        case "sl_dataEdit_type":sl_data_type();
            break;
        case "ATYPE":add_type();
            break;
        case "DTYPE":del_type();
            break;
        case "ETYPE":edit_type();
            break;
        case "sl_table_lvboss":sl_data_lvboss();
            break;
        case "sl_dataEdit_lvboss":sl_data_lvboss();
            break;
        case "ALVB":add_lvboss();
            break;
        case "DLVB":del_lvboss();
            break;
        case "ELVB":edit_lvboss();
            break;
        case "sl_table_depart":sl_data_depart();
            break;
        case "sl_dataEdit_depart":sl_data_depart();
            break;
        case "ADPM":add_depart();
            break;
        case "DDPM":del_depart();
            break;
        case "EDPM":edit_depart ();
            break;
    }
}

function sl_table_inside() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $sql = "SELECT * from ps_class";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function add_BnIn() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $cod = $get_data[0];
        $cod = (int) $cod;
        $name = $get_data[1];
        $sql = "INSERT INTO ps_class (class_code, class_name, class_claim)"
                . "VALUES('$cod','$name', 9)";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_BnIn() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "DELETE FROM ps_class WHERE class_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function sl_dataEdit_BnIn() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "SELECT * from ps_class WHERE class_id ='$id'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function edit_BnIn() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "UPDATE ps_class SET class_code = '$get_data[1]', class_name = '$get_data[2]' WHERE class_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function sl_table_outside() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $sql = "SELECT * from ps_officeout";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function add_BnOut() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $cod = $get_data[0];
        $cod = (int) $cod;
        $name = $get_data[1];
        $sql = "INSERT INTO ps_officeout (off_number, off_name)"
                . "VALUES('$cod','$name')";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_BnOut() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "DELETE FROM ps_officeout WHERE id_off = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function sl_dataEdit_BnOut() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "SELECT * from ps_officeout WHERE id_off ='$id'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function edit_BnOut() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "UPDATE ps_officeout SET off_number = '$get_data[1]', off_name = '$get_data[2]' WHERE id_off = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function sl_data_position() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        if ($id == '') {
            $sql = "SELECT * from ps_position";
        } else {
            $sql = "SELECT * from ps_position WHERE pos_id ='$id'";
        }

        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function add_position() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $cod = $get_data[0];
        $cod = (int) $cod;
        $name = $get_data[1];
        $sql = "INSERT INTO ps_position  (pos_code, pos_name)"
                . "VALUES('$cod','$name')";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_Posi() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "DELETE FROM ps_position WHERE pos_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function edit_Posi() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "UPDATE ps_position SET pos_code = '$get_data[1]', pos_name = '$get_data[2]' WHERE pos_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function sl_data_level() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        if ($id == '') {
            $sql = "SELECT * from ps_level";
        } else {
            $sql = "SELECT * from ps_level WHERE lv_id ='$id'";
        }

        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function add_level() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "INSERT INTO ps_level (lv_code, lv_name)"
                . "VALUES('$get_data[0]', '$get_data[1]')";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_level() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "DELETE FROM ps_level WHERE lv_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function edit_level() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "UPDATE ps_level SET lv_code = '$get_data[1]', lv_name = '$get_data[2]' WHERE lv_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function sl_data_type() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        if ($id == '') {
            $sql = "SELECT * from ps_type";
        } else {
            $sql = "SELECT * from ps_type WHERE type_id ='$id'";
        }

        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function add_type() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "INSERT INTO ps_type (type_code, type_name)"
                . "VALUES('$get_data[0]', '$get_data[1]')";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_type() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "DELETE FROM ps_type WHERE type_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function edit_type() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "UPDATE ps_type SET type_code = '$get_data[1]', type_name = '$get_data[2]' WHERE type_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}
function sl_data_lvboss() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        if ($id == '') {
            $sql = "SELECT * from ps_levelboss";
        } else {
            $sql = "SELECT * from ps_levelboss WHERE lvb_id ='$id'";
        }

        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function add_lvboss() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "INSERT INTO ps_levelboss (lvb_code, lvb_name, lvb_claim)"
                . "VALUES('$get_data[0]', '$get_data[1]', 9)";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_lvboss() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "DELETE FROM ps_levelboss WHERE lvb_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function edit_lvboss() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "UPDATE ps_levelboss SET lvb_code = '$get_data[1]', lvb_name = '$get_data[2]' WHERE lvb_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}
function sl_data_depart() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        if ($id == '') {
            $sql = "SELECT * from ps_department";
        } else {
            $sql = "SELECT * from ps_department WHERE dep_id ='$id'";
        }

        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function add_depart() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "INSERT INTO ps_department (dep_code, dep_name)"
                . "VALUES('$get_data[0]','$get_data[1]')";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_depart() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "DELETE FROM ps_department WHERE dep_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function edit_depart() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $sql = "UPDATE ps_department SET dep_code = '$get_data[1]', dep_name = '$get_data[2]' WHERE dep_id = '$id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}
?>
  