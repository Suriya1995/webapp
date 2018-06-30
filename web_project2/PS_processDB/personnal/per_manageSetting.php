<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../../connect/connect_DB_personal.php';
header("Content-type: application/json;charset=utf-8");
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    switch ($_POST["FN"]) {
        case "sl_table_setting":sl_data_setting();
            break;
        case "AUSER":add_user();
            break;
        case "SLUSER":sl_data_setting();
            break;
        case "EUSER": edit_user();
            break;
        case "DUSER": del_user();
            break;
        case "del_selected": del_selected_user();
            break;
        case "IMUSER": import_user();
            break;
        case "sl_data_profile": sl_data_profile();
            break;
        case "check_user_personnal": check_user_personnal();
            break;
    }
}

if (!empty($_FILES['fileUser'])) {
    $file_array = explode(".", $_FILES["fileUser"]["name"]);
    if ($file_array[1] == "xlsx") {
        $tmpFolder = "../../doc/import-user/";
        move_uploaded_file($_FILES['fileUser']['tmp_name'], $tmpFolder . $_FILES['fileUser']['name']);
        $person_update = $_SESSION['name'];
        $date = date('Y-m-d H:i:s');
        include("../../PHPExcel/Classes/PHPExcel/IOFactory.php");
        $object = PHPExcel_IOFactory::load($tmpFolder . $_FILES["fileUser"]["name"]);
        $cn = new management;
        $cn->con_db();
        $pos_id = '';
        $class_id = '';
        $dep_id = '';
        $pro_id = '';
        $person_create = $_SESSION['name'];
        foreach ($object->getWorksheetIterator() as $worksheet) {
            $highestRow = $worksheet->getHighestRow();
            for ($row = 2; $row <= $highestRow; $row++) {
                $card_id = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                $nameuser = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                $lastname = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                $pos_name = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                $sql_pos_id = "SELECT pos_id FROM ps_position WHERE pos_name = '$pos_name'";
                $query_pos_id = $cn->Connect->query($sql_pos_id);
                while ($rs_pos_id = mysqli_fetch_array($query_pos_id)) {
                    $pos_id = $rs_pos_id['pos_id'];
                }
                $class_name = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                $sql_class_id = "SELECT class_id FROM ps_class WHERE class_name = '$class_name'";
                $query_class_id = $cn->Connect->query($sql_class_id);
                while ($rs_class_id = mysqli_fetch_array($query_class_id)) {
                    $class_id = $rs_class_id['class_id'];
                }
                $dep_name = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                $sql_dep_id = "SELECT dep_id FROM ps_department WHERE dep_name = '$dep_name'";
                $query_dep_id = $cn->Connect->query($sql_dep_id);
                while ($rs_dep_id = mysqli_fetch_array($query_dep_id)) {
                    $dep_id = $rs_dep_id['dep_id'];
                }
                $tel = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                $email = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                $username = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                $password = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                $level = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
                $status = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
                $sql_check = "SELECT * FROM ps_personnal WHERE card_id = '$card_id'";
                $query_check = $cn->Connect->query($sql_check);
                $num = mysqli_num_rows($query_check);
                $sql_checkProfile = "SELECT * FROM ps_profile WHERE card_id = '$card_id'";
                $query_checkProfile = $cn->Connect->query($sql_checkProfile);
                $num_profile = mysqli_num_rows($query_checkProfile);
                if (($num == 0) && ($card_id != '') && ($num_profile != 0)) {
                    while ($rs_pro_id = mysqli_fetch_array($query_checkProfile)) {
                        $pro_id = $rs_pro_id['pro_id'];
                    }
                    $sql = "INSERT INTO ps_personnal (pro_id, card_id, nameuser, lastname, pos_id, class_id, dep_id, tel, email, username, password, level, status, person_create, date_create, person_update, date_update)"
                            . "VALUES('$pro_id', '$card_id', '$nameuser', '$lastname', '$pos_id', '$class_id', '$dep_id', '$tel', '$email', '$username', '$password', '$level', '$status', '$person_create', '$date', '$person_update', '$date')";
                    $stmt = $cn->Connect->prepare($sql);
                    $ret = $stmt->execute();
                }
            }
        }
        echo '1'; // Success
    } else {
        echo '2'; // Filename Error
    }
    exit();
} else {
    echo '0'; // No Input File
    exit();
}

function sl_data_setting() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        if ($id == '') {
            $sql = "SELECT * from ps_personnal AS ps LEFT JOIN ps_class AS pc ON ps.class_id = pc.class_id LEFT JOIN ps_position AS pp ON ps.pos_id = pp.pos_id LEFT JOIN ps_profile AS pro ON ps.pro_id = pro.pro_id ORDER BY ps.status DESC";
        } else {
            $sql = "SELECT * from ps_personnal AS ps LEFT JOIN ps_class AS pc ON ps.class_id = pc.class_id LEFT JOIN ps_position AS pp ON ps.pos_id = pp.pos_id LEFT JOIN ps_profile AS pro ON ps.pro_id = pro.pro_id WHERE ps.member_id ='$id' ORDER BY ps.status DESC";
        }
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function add_user() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);

        $sql_sl_geninfo = "SELECT * FROM ps_geninformation WHERE pro_id = '$get_data[0]'";
        $Query_geninfo = $cn->Connect->query($sql_sl_geninfo);
        if ($get_data[5] != '') {
            if (mysqli_num_rows($Query_geninfo) == '0') {
                $sql_add_geninfo = "INSERT INTO ps_geninformation (gen_email, pro_id) VALUES('$get_data[5]', '$get_data[0]')";
                $cn->exec($sql_add_geninfo);
            } else {
                $sql_edit_geninfo = "UPDATE ps_geninformation SET gen_email = '$get_data[5]' WHERE pro_id = '$get_data[0]'";
                $cn->exec($sql_edit_geninfo);
            }
        }
        $sql_address = "SELECT * FROM ps_address WHERE pro_id = '$get_data[0]'";
        $Query_address = $cn->Connect->query($sql_address);
        if ($get_data[4] != '') {
            if (mysqli_num_rows($Query_address) == '0') {
                $sql_add_address = "INSERT INTO ps_address(address_fhone, pro_id) VALUES('$get_data[4]', '$get_data[0]')";
                $cn->exec($sql_add_address);
                $sql_add_preaddress = "INSERT INTO ps_preaddress(pread_fhone, pro_id) VALUES('$get_data[4]', '$get_data[0]')";
                $cn->exec($sql_add_preaddress);
            } else {
                $sql_edit_address = " UPDATE ps_address SET address_fhone = '$get_data[4]'"
                        . " WHERE pro_id = '$get_data[0]'";
                $cn->exec($sql_edit_address);
                $sql_edit_preaddress = " UPDATE ps_preaddress SET pread_fhone = '$get_data[4]'"
                        . " WHERE pro_id = '$get_data[0]'";
                $cn->exec($sql_edit_preaddress);
            }
        }

        $sql = "INSERT INTO ps_personnal (pro_id, card_id, nameuser, lastname, tel, email, pos_id, class_id, dep_id, username, password, level, status, person_create, date_create, person_update, date_update)"
                . "VALUES('$get_data[0]', '$get_data[1]', '$get_data[2]', '$get_data[3]', '$get_data[4]', '$get_data[5]', '$get_data[6]', '$get_data[7]', '$get_data[8]', '$get_data[9]', '$get_data[10]', '$get_data[11]', '$get_data[12]', '$get_data[13]', '$get_data[14]', '$get_data[15]', '$get_data[16]')";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_profile() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "DELETE FROM ps_profile WHERE pro_id = '$get_data[0]'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function edit_user() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
//        print_r($get_data);exit();
        $sql_update_profile = "UPDATE ps_profile SET card_id = '$get_data[0]', pro_fname = '$get_data[1]', pro_lname = '$get_data[2]', pos_id= '$get_data[5]', class_id = '$get_data[6]', dep_id = '$get_data[7]', pro_person_update = '$get_data[12]', pro_date_update = '$get_data[13]'"
                . " WHERE pro_id = '$get_data[15]'";
        $cn->exec($sql_update_profile);

        $sql_sl_geninfo = "SELECT * FROM ps_geninformation WHERE pro_id = '$get_data[15]'";
        $Query_geninfo = $cn->Connect->query($sql_sl_geninfo);
        if (mysqli_num_rows($Query_geninfo) == '0') {
            $sql_add_geninfo = "INSERT INTO ps_geninformation (gen_email, pro_id) VALUES('$get_data[4]', '$get_data[15]')";
            $cn->exec($sql_add_geninfo);
        } else {
            $sql_edit_geninfo = "UPDATE ps_geninformation SET gen_email = '$get_data[4]' WHERE pro_id = '$get_data[15]'";
            $cn->exec($sql_edit_geninfo);
        }

        $sql_pread = "SELECT * FROM ps_preaddress WHERE pro_id = '$get_data[15]'";
        $Query_pread = $cn->Connect->query($sql_pread);
        if (mysqli_num_rows($Query_pread) == '0') {
            $sql_add_pread = "INSERT INTO ps_preaddress(pread_fhone, pro_id) VALUES('$get_data[3]', '$get_data[15]')";
            $cn->exec($sql_add_pread);
        } else {
            $sql_edit_pread = " UPDATE ps_preaddress SET pread_fhone = '$get_data[3]'"
                    . " WHERE pro_id = '$get_data[15]'";
            $cn->exec($sql_edit_pread);
        }

        $sql = "UPDATE ps_personnal SET card_id = '$get_data[0]', nameuser = '$get_data[1]', lastname = '$get_data[2]', tel = '$get_data[3]', email = '$get_data[4]', pos_id= '$get_data[5]', class_id = '$get_data[6]', dep_id = '$get_data[7]', username = '$get_data[8]', password= '$get_data[9]', level = '$get_data[10]', status ='$get_data[11]', person_update = '$get_data[12]', date_update = '$get_data[13]'"
                . " WHERE member_id = '$get_data[14]'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_user() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "DELETE FROM ps_personnal WHERE member_id = '$get_data[0]'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_selected_user() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        for ($i = 0; $i < count($get_data); $i++) {
            $sql = "DELETE FROM ps_personnal WHERE member_id = '$get_data[$i]'";
            $cn->exec($sql);
        }
        echo '1';
    }
    exit();
}

function import_user() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "DELETE FROM ps_personnal WHERE member_id = '$get_data[0]'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function sl_data_profile() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * from ps_profile AS pp LEFT JOIN ps_position AS pps ON pp.pos_id = pps.pos_id LEFT JOIN ps_class AS pc ON pp.class_id = pc.class_id LEFT JOIN ps_department AS pd ON pp.dep_id = pd.dep_id WHERE card_id = '$get_data[0]'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function check_user_personnal() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_personnal WHERE card_id = '$get_data[0]'";
        $rs = $cn->mysqli_num_rows($sql);
        echo $rs;
    }
    exit();
}
?>

