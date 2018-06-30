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
        case "APS":add_profile();
            break;
        case "DPS":del_profile();
            break;
        case "del_selected":del_selected_profile();
            break;
        case "EPS":edit_profile();
            break;
        case "EPSM":edit_profile_main();
            break;
        case "SLEPS":sl_data_profile();
            break;
        case "SLPF":sl_prefix();
            break;
        case "get_type":get_type();
            break;
        case "get_position":get_position();
            break;
        case "get_level":get_level();
            break;
        case "get_levelBoss":get_levelBoss();
            break;
        case "get_class":get_classG();
            break;
        case "get_department":get_department();
            break;
        case "data_tranfer":data_tranfer();
            break;
        case "get_tranferOut":get_tranferOut();
            break;
    }
}

if (!empty($_FILES['filePerson'])) {
    $file_array = explode(".", $_FILES["filePerson"]["name"]);
    if (($file_array[1] == "xlsx") || ($file_array[1] == "xls")) {
        $tmpFolder = "../../doc/import-person/";
        move_uploaded_file($_FILES['filePerson']['tmp_name'], $tmpFolder . $_FILES['filePerson']['name']);
        $person_update = $_SESSION['name'];
        $date = date('Y-m-d H:i:s');
        include("../../PHPExcel/Classes/PHPExcel/IOFactory.php");
        $object = PHPExcel_IOFactory::load($tmpFolder . $_FILES["filePerson"]["name"]);
        $cn = new management;
        $cn->con_db();
        $pos_id = '';
        $type_id = '';
        $lvb_id = '';
        $lv_id = '';
        $class_id = '';
        $dep_id = '';
        foreach ($object->getWorksheetIterator() as $worksheet) {
            $highestRow = $worksheet->getHighestRow();
            for ($row = 2; $row <= $highestRow; $row++) {
                $card_id = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
                $pro_idpos = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
                $pro_sex = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
                if ($pro_sex == 'ชาย') {
                    $pro_sex = 1;
                } else {
                    $pro_sex = 2;
                }
                $pro_prefix = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
                $pro_fname = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
                $pro_lname = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
                $pro_status = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
                $pos_name = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(7, $row)->getValue());
                $sql_pos_id = "SELECT pos_id FROM ps_position WHERE pos_name = '$pos_name'";
                $query_pos_id = $cn->Connect->query($sql_pos_id);
                while ($rs_pos_id = mysqli_fetch_array($query_pos_id)) {
                    $pos_id = $rs_pos_id['pos_id'];
                }
                $type_name = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(8, $row)->getValue());
                $sql_type_id = "SELECT type_id FROM ps_type WHERE type_name = '$type_name'";
                $query_type_id = $cn->Connect->query($sql_type_id);
                while ($rs_type_id = mysqli_fetch_array($query_type_id)) {
                    $type_id = $rs_type_id['type_id'];
                }
                $lvb_name = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(9, $row)->getValue());
                $sql_lvb_id = "SELECT lvb_id FROM ps_levelboss WHERE lvb_name = '$lvb_name'";
                $query_lvb_id = $cn->Connect->query($sql_lvb_id);
                while ($rs_lvb_id = mysqli_fetch_array($query_lvb_id)) {
                    $lvb_id = $rs_lvb_id['lvb_id'];
                }
                $lv_name = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(10, $row)->getValue());
                $sql_lv_id = "SELECT lv_id FROM ps_level WHERE lv_name = '$lv_name'";
                $query_lv_id = $cn->Connect->query($sql_lv_id);
                while ($rs_lv_id = mysqli_fetch_array($query_lv_id)) {
                    $lv_id = $rs_lv_id['lv_id'];
                }
                $class_name = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(11, $row)->getValue());
                $sql_class_id = "SELECT class_id FROM ps_class WHERE class_name = '$class_name'";
                $query_class_id = $cn->Connect->query($sql_class_id);
                while ($rs_class_id = mysqli_fetch_array($query_class_id)) {
                    $class_id = $rs_class_id['class_id'];
                }
                $dep_name = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(12, $row)->getValue());
                $sql_dep_id = "SELECT dep_id FROM ps_department WHERE dep_name = '$dep_name'";
                $query_dep_id = $cn->Connect->query($sql_dep_id);
                while ($rs_dep_id = mysqli_fetch_array($query_dep_id)) {
                    $dep_id = $rs_dep_id['dep_id'];
                }
                $pro_salary = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(13, $row)->getValue());
                $pro_salary = str_replace(',', '', $pro_salary);
                $pro_dateIn = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(14, $row)->getValue());
                $pro_dateOut = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(15, $row)->getValue());
                $pro_transfer = mysqli_real_escape_string($cn->Connect, $worksheet->getCellByColumnAndRow(16, $row)->getValue());
                $sql_check = "SELECT * FROM ps_profile WHERE card_id = '$card_id'";
                $query_check = $cn->Connect->query($sql_check);
                $num = mysqli_num_rows($query_check);
                if (($num == 0) && ($card_id != '')) {
                    $sql = "INSERT INTO ps_profile (card_id, pro_idpos, pro_sex, pro_prefix, pro_fname, pro_lname, pro_status, pos_id, type_id, lvb_id, lv_id, class_id, dep_id, pro_salary, pro_dateIn, pro_dateOut, pro_transfer, pro_person_create, pro_date_create, pro_person_update, pro_date_update)"
                            . "VALUES('$card_id', '$pro_idpos', '$pro_sex', '$pro_prefix', '$pro_fname', '$pro_lname', '$pro_status', '$pos_id', '$type_id', '$lvb_id', '$lv_id', '$class_id', '$dep_id', '$pro_salary', '" . chistDate($pro_dateIn) . "', '" . chistDate($pro_dateOut) . "', '" . $pro_transfer . "', '$person_update', '$date', '$person_update', '$date')";
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
} else if (!empty($_FILES['Improfile'])) {
    $file_array = explode(".", $_FILES["Improfile"]["name"]);
    if ($file_array[1] == ('png' || "jpg")) {
        $cn = new management;
        $cn->con_db();
        $rand = substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'), 0, 10);
        $new_images = $rand . '-' . $_FILES["Improfile"]["name"];
        $tmpFolder = "../../images/img-profile/" . $new_images;
        move_uploaded_file($_FILES['Improfile']['tmp_name'], $tmpFolder);
        echo $tmpFolder;
        exit();
    }
} else {
    echo '0'; // No Input File
    exit();
}

function sl_data_profile() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $id = $get_data[0];
        $lvb_claim = $_SESSION['lvb_claim'];
        $class_id = $_SESSION['class_id'];
        $class_claim = $_SESSION['class_claim'];
        $level = $_SESSION['level'];
        if (($id == '') && ($level == 1)) {
            $sql = "SELECT * from ps_profile LEFT JOIN ps_class ON ps_profile.class_id = ps_class.class_id";
        } else if ($id != '') {
            $sql = "SELECT * from ps_profile LEFT JOIN ps_class ON ps_profile.class_id = ps_class.class_id WHERE ps_profile.pro_id ='$id'";
        } else if ($class_claim == 0) {
            $sql = "SELECT * from ps_profile AS pp LEFT JOIN ps_class AS pc ON pp.class_id = pc.class_id LEFT JOIN ps_levelboss AS plb ON pp.lvb_id = plb.lvb_id WHERE plb.lvb_claim > '$lvb_claim' OR plb.lvb_claim IS NULL ORDER BY plb.lvb_claim IS NULL, plb.lvb_claim ASC";
        } else {
            $sql = "SELECT * from ps_profile AS pp LEFT JOIN ps_class AS pc ON pp.class_id = pc.class_id LEFT JOIN ps_levelboss AS plb ON pp.lvb_id = plb.lvb_id WHERE pc.class_id = '$class_id' AND (plb.lvb_claim > '$lvb_claim' OR plb.lvb_claim IS NULL) ORDER BY plb.lvb_claim IS NULL, plb.lvb_claim ASC";
        }
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function add_profile() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
//        print_r($get_data);exit();
        if ($get_data[19] == '0') {
            $path = '';
        } else {
            $path = $get_data[19];
        }
        $sql = "INSERT INTO ps_profile (card_id, pro_idpos, pro_sex, pro_prefix, pro_fname, pro_lname, pro_nickname, pro_birthday, pro_status, pos_id, type_id, lvb_id, lv_id, class_id, dep_id, pro_salary, pro_dateIn, pro_dateOut, pro_transfer, pro_picture, pro_person_create, pro_date_create, pro_person_update, pro_date_update)"
                . "VALUES('$get_data[0]', '$get_data[1]', '$get_data[2]', '$get_data[3]', '$get_data[4]', '$get_data[5]', '$get_data[6]', '$get_data[7]', '$get_data[8]', '$get_data[9]', '$get_data[10]', '$get_data[11]', '$get_data[12]', '$get_data[13]', '$get_data[14]', '$get_data[15]', '$get_data[16]', '$get_data[17]'"
                . ", '$get_data[18]', '$path', '$get_data[20]', '$get_data[21]', '$get_data[22]', '$get_data[23]')";
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
        $path = '';
        $sql_img = "SELECT pro_picture FROM ps_profile WHERE pro_id = '$get_data[0]'";
        $Query = $cn->Connect->query($sql_img);
        while ($Row = mysqli_fetch_array($Query)) {
            $path = $Row['pro_picture'];
        }
        if ($path != '') {
            $files = glob($path);
            foreach ($files as $file) { // iterate files
                if (is_file($file))
                    unlink($file); // delete file
            }
        }
        $sql_G = "DELETE FROM ps_geninformation WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_G);
        $sql_C = "DELETE FROM ps_changname WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_C);
        $sql_HM = "DELETE FROM ps_hismarry WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_HM);
        $sql_H = "DELETE FROM ps_heir WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_H);
        $sql_B = "DELETE FROM ps_blame WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_B);
        $sql_A = "DELETE FROM ps_address WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_A);
        $sql = "DELETE FROM ps_preaddress WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql);
        $sql_E = "DELETE FROM ps_education WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_E);
        $sql_HS = "DELETE FROM ps_hisservice WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_HS);
        $sql_HSP = "DELETE FROM ps_hisservicespecial WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_HSP);
        $sql_HA = "DELETE FROM ps_histreat_assignment WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_HA);
        $sql_HAWARD = "DELETE FROM ps_hisaward WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_HAWARD);
        $sql_AC = "DELETE FROM ps_academic WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_AC);
        $sql_P = "DELETE FROM ps_plan WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_P);
        $sql_HR = "DELETE FROM ps_hisroyal WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_HR);
        $sql_HS = "DELETE FROM ps_hissalaryup WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_HS);
        $sql_HSCP = "DELETE FROM ps_salaryspecial WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_HSCP);
        $sql_TRAN = "DELETE FROM ps_transferout WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_TRAN);
        $sql_USER = "DELETE FROM ps_personnal WHERE pro_id = '$get_data[0]'";
        $cn->exec($sql_USER);
        $sql = "DELETE FROM ps_profile WHERE pro_id = '$get_data[0]'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function del_selected_profile() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        for ($i = 0; $i < count($get_data); $i++) {
            $path = '';
            $sql_img = "SELECT pro_picture FROM ps_profile WHERE pro_id = '$get_data[$i]'";
            $Query = $cn->Connect->query($sql_img);
            while ($Row = mysqli_fetch_array($Query)) {
                $path = $Row['pro_picture'];
            }
            if ($path != '') {
                $files = glob($path);
                foreach ($files as $file) { // iterate files
                    if (is_file($file))
                        unlink($file); // delete file
                }
            }
            $sql_G = "DELETE FROM ps_geninformation WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_G);
            $sql_C = "DELETE FROM ps_changname WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_C);
            $sql_HM = "DELETE FROM ps_hismarry WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_HM);
            $sql_H = "DELETE FROM ps_heir WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_H);
            $sql_B = "DELETE FROM ps_blame WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_B);
            $sql_A = "DELETE FROM ps_address WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_A);
            $sql = "DELETE FROM ps_preaddress WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql);
            $sql_E = "DELETE FROM ps_education WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_E);
            $sql_HS = "DELETE FROM ps_hisservice WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_HS);
            $sql_HSP = "DELETE FROM ps_hisservicespecial WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_HSP);
            $sql_HA = "DELETE FROM ps_histreat_assignment WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_HA);
            $sql_HAWARD = "DELETE FROM ps_hisaward WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_HAWARD);
            $sql_AC = "DELETE FROM ps_academic WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_AC);
            $sql_P = "DELETE FROM ps_plan WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_P);
            $sql_HR = "DELETE FROM ps_hisroyal WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_HR);
            $sql_HS = "DELETE FROM ps_hissalaryup WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_HS);
            $sql_HSCP = "DELETE FROM ps_salaryspecial WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_HSCP);
            $sql_TRAN = "DELETE FROM ps_transferout WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_TRAN);
            $sql_USER = "DELETE FROM ps_personnal WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql_USER);
            $sql = "DELETE FROM ps_profile WHERE pro_id = '$get_data[$i]'";
            $cn->exec($sql);
        }
        echo '1';
    }
    exit();
}

function edit_profile() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
//        print_r($get_data);
//        exit();
        $path = '';
        $sql_img = "SELECT pro_picture FROM ps_profile WHERE pro_id = '$get_data[21]'";
        $Query = $cn->Connect->query($sql_img);
        while ($Row = mysqli_fetch_array($Query)) {
            $path = $Row['pro_picture'];
        }
        if ($path != $get_data[22]) {
            $files = glob($path);
            foreach ($files as $file) { // iterate files
                if (is_file($file))
                    unlink($file); // delete file
            }
        }else if ($path != $get_data[18]) {
            $files = glob($get_data[18]);
            foreach ($files as $file) { // iterate files
                if (is_file($file))
                    unlink($file); // delete file
            }
            $get_data[18] = $path;
        }else if ($get_data[18] == "0") {
            $get_data[18] = "";
        }
        $sql_sl_geninfo = "SELECT * FROM ps_geninformation WHERE pro_id = '$get_data[43]'";
        $Query_geninfo = $cn->Connect->query($sql_sl_geninfo);
        if (mysqli_num_rows($Query_geninfo) == '0') {
            $sql_add_geninfo = "INSERT INTO ps_geninformation (gen_card_id, gen_prefix, gen_old, PROVINCE_ID, nationality_id, nationality_id_race, religion_id, gen_blood, gen_soldier, gen_tax, gen_passport, bank_id, gen_account_number, gen_email, gen_facebook, gen_twitter"
                    . ", gen_line, gen_talent, gen_interest, expert_name, expert_ex, pro_id)"
                    . " VALUES ('$get_data[0]', '$get_data[23]', '$get_data[24]', '$get_data[25]', '$get_data[26]', '$get_data[27]', '$get_data[28]', '$get_data[29]', '$get_data[30]', '$get_data[31]', '$get_data[32]', '$get_data[33]', '$get_data[34]', '$get_data[35]'"
                    . ", '$get_data[36]', '$get_data[37]', '$get_data[38]', '$get_data[39]', '$get_data[40]', '$get_data[41]', '$get_data[42]', '$get_data[43]')";
            $cn->exec($sql_add_geninfo);
        } else {
            $sql_edit_geninfo = "UPDATE ps_geninformation SET gen_card_id = '$get_data[0]', gen_prefix = '$get_data[23]', gen_old = '$get_data[24]', PROVINCE_ID = '$get_data[25]', nationality_id = '$get_data[26]', nationality_id_race = '$get_data[27]', religion_id = '$get_data[28]'"
                    . ", gen_blood = '$get_data[29]', gen_soldier = '$get_data[30]', gen_tax = '$get_data[31]', gen_passport = '$get_data[32]', bank_id = '$get_data[33]', gen_account_number = '$get_data[34]', gen_email = '$get_data[35]', gen_facebook = '$get_data[36]', gen_twitter = '$get_data[37]'"
                    . ", gen_line = '$get_data[38]', gen_talent = '$get_data[39]', gen_interest = '$get_data[40]', expert_name = '$get_data[41]', expert_ex = '$get_data[42]'"
                    . " WHERE pro_id = '$get_data[43]'";
            $cn->exec($sql_edit_geninfo);
        }

        $sql_address = "SELECT * FROM ps_address WHERE pro_id = '$get_data[43]'";
        $Query_address = $cn->Connect->query($sql_address);
        if (mysqli_num_rows($Query_address) == '0') {
            $sql_add_address = "INSERT INTO ps_address(address_number, address_swine, address_soi, address_road, address_village, address_province, address_amphur, address_district, address_zip_code, address_call, address_fhone, pro_id)"
                    . " VALUES ('$get_data[44]', '$get_data[45]', '$get_data[46]', '$get_data[47]', '$get_data[48]', '$get_data[49]', '$get_data[50]', '$get_data[51]', '$get_data[52]', '$get_data[53]', '$get_data[54]', '$get_data[43]')";
            $cn->exec($sql_add_address);
        } else {
            $sql_edit_address = " UPDATE ps_address SET address_number = '$get_data[44]', address_swine = '$get_data[45]', address_soi = '$get_data[46]', address_road= '$get_data[47]', address_village= '$get_data[48]', address_province= '$get_data[49]'"
                    . ", address_amphur = '$get_data[50]', address_district = '$get_data[51]', address_zip_code = '$get_data[52]', address_call = '$get_data[53]', address_fhone = '$get_data[54]'"
                    . " WHERE pro_id = '$get_data[43]'";
            $cn->exec($sql_edit_address);
        }

        $sql_pread = "SELECT * FROM ps_preaddress WHERE pro_id = '$get_data[43]'";
        $Query_pread = $cn->Connect->query($sql_pread);
        if (mysqli_num_rows($Query_pread) == '0') {
            $sql_add_pread = "INSERT INTO ps_preaddress(pread_number, pread_swine, pread_soi, pread_road, pread_village, pread_province, pread_amphur, pread_district, pread_zip_code, pread_call, pread_fhone, pro_id)"
                    . " VALUES ('$get_data[44]', '$get_data[45]', '$get_data[46]', '$get_data[47]', '$get_data[48]', '$get_data[49]', '$get_data[50]', '$get_data[51]', '$get_data[52]', '$get_data[53]', '$get_data[54]', '$get_data[43]')";
            $cn->exec($sql_add_pread);
        } else {
            $sql_edit_pread = " UPDATE ps_preaddress SET pread_number = '$get_data[55]', pread_swine = '$get_data[56]', pread_soi = '$get_data[57]', pread_road= '$get_data[58]', pread_village= '$get_data[59]', pread_province= '$get_data[60]'"
                    . ", pread_amphur = '$get_data[61]', pread_district = '$get_data[62]', pread_zip_code = '$get_data[63]', pread_call = '$get_data[64]', pread_fhone = '$get_data[65]'"
                    . " WHERE pro_id = '$get_data[43]'";
            $cn->exec($sql_edit_pread);
        }

        $sql_sl_personnal = "SELECT * FROM ps_personnal WHERE pro_id = '$get_data[21]'";
        $Query_personnal = $cn->Connect->query($sql_sl_personnal);
        if (mysqli_num_rows($Query_personnal) != '0') {
            $sql_edit_personnal = "UPDATE ps_personnal SET card_id = '$get_data[0]', nameuser = '$get_data[4]', lastname = '$get_data[5]', pos_id = '$get_data[9]', class_id = '$get_data[13]', dep_id = '$get_data[14]', tel = '$get_data[65]', email = '$get_data[35]', person_update = '$get_data[19]', date_update = '$get_data[20]'  WHERE pro_id = '$get_data[21]'";
            $cn->exec($sql_edit_personnal);
        }

        $sql = "UPDATE ps_profile
        SET card_id = '$get_data[0]', pro_idpos = '$get_data[1]', pro_sex = '$get_data[2]', pro_prefix = '$get_data[3]', pro_fname = '$get_data[4]', pro_lname = '$get_data[5]', pro_nickname = '$get_data[6]', pro_birthday = '$get_data[7]', pro_status = '$get_data[8]', pos_id = '$get_data[9]', type_id = '$get_data[10]', lvb_id = '$get_data[11]'
            , lv_id = '$get_data[12]', class_id = '$get_data[13]', dep_id = '$get_data[14]', pro_salary = '$get_data[15]', pro_dateIn = '$get_data[16]', pro_dateOut = '$get_data[17]', pro_picture = '$get_data[18]', pro_person_update = '$get_data[19]', pro_date_update = '$get_data[20]'
        WHERE pro_id = '$get_data[21]'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function edit_profile_main() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
//        print_r($get_data);
//        exit();
        $path = '';
        $sql_img = "SELECT pro_picture FROM ps_profile WHERE pro_id = '$get_data[22]'";
        $Query = $cn->Connect->query($sql_img);
        while ($Row = mysqli_fetch_array($Query)) {
            $path = $Row['pro_picture'];
        }
        if ($path != $get_data[23]) {
            $files = glob($path);
            foreach ($files as $file) { // iterate files
                if (is_file($file))
                    unlink($file); // delete file
            }
        }else if ($path != $get_data[19]) {
            $files = glob($get_data[19]);
            foreach ($files as $file) { // iterate files
                if (is_file($file))
                    unlink($file); // delete file
            }
            $get_data[19] = $path;
        }


        $sql_sl_personnal = "SELECT * FROM ps_personnal WHERE pro_id = '$get_data[22]'";
        $Query_personnal = $cn->Connect->query($sql_sl_personnal);
        if (mysqli_num_rows($Query_personnal) != '0') {
            $sql_edit_personnal = "UPDATE ps_personnal SET card_id = '$get_data[0]', nameuser = '$get_data[4]', lastname = '$get_data[5]', pos_id = '$get_data[9]', class_id = '$get_data[13]', dep_id = '$get_data[14]', person_update = '$get_data[20]', date_update = '$get_data[21]'  WHERE pro_id = '$get_data[22]'";
            $cn->exec($sql_edit_personnal);
        }

        $sql = "UPDATE ps_profile
        SET card_id = '$get_data[0]', pro_idpos = '$get_data[1]', pro_sex = '$get_data[2]', pro_prefix = '$get_data[3]', pro_fname = '$get_data[4]', pro_lname = '$get_data[5]', pro_nickname = '$get_data[6]', pro_birthday = '$get_data[7]', pro_status = '$get_data[8]', pos_id = '$get_data[9]', type_id = '$get_data[10]', lvb_id = '$get_data[11]'
            , lv_id = '$get_data[12]', class_id = '$get_data[13]', dep_id = '$get_data[14]', pro_salary = '$get_data[15]', pro_dateIn = '$get_data[16]', pro_dateOut = '$get_data[17]', pro_transfer = '$get_data[18]', pro_picture = '$get_data[19]', pro_person_update = '$get_data[20]', pro_date_update = '$get_data[21]'
        WHERE pro_id = '$get_data[22]'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}

function sl_prefix() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_prefix";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_type() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $sql = "select * from ps_type";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_position() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $sql = "select * from ps_position";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_level() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $sql = "select * from ps_level";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_levelBoss() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $sql = "select * from ps_levelboss";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_classG() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $sql = "select * from ps_class";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function get_department() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $sql = "select * from ps_department ";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function data_tranfer() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_transferout WHERE pro_id = '$get_data[4]'";
        $query = $cn->Connect->query($sql);
        $num = mysqli_num_rows($query);
        if ($num > 0) {
            while ($row = mysqli_fetch_array($query)) {
                if ($get_data[3] == '') {
                    $sql_change_status = "UPDATE ps_personnal SET status = '1' WHERE pro_id = '$get_data[4]'";
                    $rs_edit = $cn->exec($sql_change_status);

                    $tran_id = $row['tran_id'];
                    $sql_del = "DELETE FROM ps_transferout WHERE tran_id = '$tran_id'";
                    $rs_del = $cn->execute($sql_del);
                    echo $rs_del;
                } else {
                    $sql_change_status = "UPDATE ps_personnal SET status = '0' WHERE pro_id = '$get_data[4]'";
                    $rs_edit = $cn->exec($sql_change_status);

                    $sql_edit = "UPDATE ps_transferout SET tran_name = '$get_data[0]', tran_note = '$get_data[1]', tran_date = '$get_data[2]', tran_status = '$get_data[3]' WHERE pro_id = '$get_data[4]'";
                    $rs_edit = $cn->execute($sql_edit);
                    echo $rs_edit;
                }
            }
        } else {
            if ($get_data[3] != '') {
                $sql_change_status = "UPDATE ps_personnal SET status = '0' WHERE pro_id = '$get_data[4]'";
                $rs_edit = $cn->exec($sql_change_status);

                $sql_add = "INSERT INTO ps_transferout (tran_name, tran_note, tran_date, tran_status, pro_id) VALUES ('$get_data[0]', '$get_data[1]', '$get_data[2]', '$get_data[3]', '$get_data[4]')";
                $rs_add = $cn->execute($sql_add);
                echo $rs_add;
            } else {
                echo 1;
            }
        }
    }
    exit();
}

function get_tranferOut() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM ps_transferout WHERE pro_id = '$get_data[0]'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}
?>

