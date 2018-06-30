<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../../connect/connect_DB_personal.php';
header("Content-type: application/json;charset=utf-8");
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    switch ($_POST["FN"]) {
        case "LOGIN":chklogin();
            break;
        case "CHK_USER":check_user();
            break;
        case "CHK_PASS":check_pass();
            break;
    }
}

function chklogin() {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $cn = new management;
        $cn->con_db();
        $sql = "select * from ps_personnal as ps left join ps_profile as pp on ps.card_id = pp.card_id left join ps_class as pc on pc.class_id = pp.class_id"
                . " left join ps_position as ppo on pp.pos_id = ppo.pos_id left join ps_department as pd on pp.dep_id = pd.dep_id left join ps_level as pl on pp.lv_id = pl.lv_id left join ps_levelboss as lvb on pp.lvb_id = lvb.lvb_id where ps.username='" . $_POST["username"] . "' and ps.password='" . $_POST["password"] . "' and ps.status = '1'";
        $query = $cn->Connect->query($sql);
        if (mysqli_num_rows($query) >= 1) {
            while ($rs = mysqli_fetch_array($query)) {
                $_SESSION['card_id'] = $rs['card_id'];
                $_SESSION['username'] = $rs['username'];
                $_SESSION['password'] = $rs['password'];
                $_SESSION['class_name'] = $rs['class_name'];
                $_SESSION['class_id'] = $rs['class_id'];
                $_SESSION['class_claim'] = $rs['class_claim'];
                $_SESSION['pos_name'] = $rs['pos_name'];
                $_SESSION['pos_id'] = $rs['pos_id'];
                $_SESSION['dep_name'] = $rs['dep_name'];
                $_SESSION['dep_id'] = $rs['dep_id'];
                $_SESSION['lv_name'] = $rs['lv_name'];
                $_SESSION['lvb_name'] = $rs['lvb_name'];
                $_SESSION['lvb_id'] = $rs['lvb_id'];
                $_SESSION['lvb_claim'] = $rs['lvb_claim'];
                $_SESSION['pro_id'] = $rs['pro_id'];
                $_SESSION['level'] = $rs['level'];
                $_SESSION['pro_picture'] = $rs['pro_picture'];
                $_SESSION['tel'] = $rs['tel'];
                $_SESSION['name'] = $rs['pro_fname'] . ' ' . $rs['pro_lname'];
                $_SESSION['fullname'] = $rs['pro_prefix'].$rs['pro_fname'] . ' ' . $rs['pro_lname'];
            }
            echo "ok";
        } else {
            echo "no";
        }
    } else {
        echo "empty";
    }
    exit();
}

function check_user() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode(",", $_POST["PARM"]);
        $user = $get_data[0];
        $sql = "select * from ps_personnal where username='" . $user . "' and status = '1'";
        $nq = $cn->mysqli_num_rows($sql);
        echo $nq;
    }
    exit();
}

function check_pass() {
    $cn = new management;
    $cn->con_db();
    if ($cn->Connect) {
        $get_data = explode("|", $_POST["PARM"]);
        $user = $get_data[0];
        $pass = $get_data[1];
        $sql = "select * from ps_personnal where username='" . $user . "' and password='" . $pass . "' and status = '1'";
        $nq = $cn->mysqli_num_rows($sql);
        echo $nq;
    }
    exit();
}
?>

