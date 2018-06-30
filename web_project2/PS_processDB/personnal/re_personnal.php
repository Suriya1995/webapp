
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../../connect/connect_DB_personal.php';
header("Content-type: application/json;charset=utf-8");
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    switch ($_POST["FN"]) {
        case "table_report_personnal":table_report_personnal();
            break;
        case "modal_table_report_personnal":modal_table_report_personnal();
            break;
       
    }
}


function table_report_personnal() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $sql = "SELECT * FROM `ps_class` ORDER BY `ps_class`.`class_id` ASC";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}

function modal_table_report_personnal(){
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);

        $sql = "SELECT pro_prefix , pro_fname , pro_lname ,type_name,  pos_name ,lv_name ,tel , email FROM `ps_profile` 
        LEFT JOIN ps_type ON ps_type.type_id = ps_profile.type_id 
        LEFT JOIN ps_position ON ps_position.pos_id = ps_profile.pos_id 
        LEFT JOIN ps_level ON ps_level.lv_id = ps_profile.lv_id 
        LEFT JOIN ps_personnal ON ps_personnal.card_id = ps_profile.card_id WHERE ps_profile.class_id = '$get_data[0]'";
        $rs = $cn->select($sql);
        $json = json_encode($rs);
        echo $json;
    }
    exit();
}




?>