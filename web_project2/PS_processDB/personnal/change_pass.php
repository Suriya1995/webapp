<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../../connect/connect_DB_personal.php';
header("Content-type: application/json;charset=utf-8");
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    switch ($_POST["FN"]) {
        case "CHPASS":change_pass();
            break;
    }
}

function change_pass() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $card_id = $get_data[0];
        $new_pass = $get_data[1];
        $sql = "UPDATE ps_personnal SET password = '$new_pass' WHERE card_id = '$card_id'";
        $rs = $cn->execute($sql);
        echo $rs;
    }
    exit();
}
?>

