<?php

class management {

    var $host = "localhost"; //ของผมใช้ localhost ครับ
    var $user = "root"; //""; //username phpmyadmin
    var $pass = ""; //""; //password phpmyadmin
    var $db = "dbo_personnel"; //ชื่อฐานข้อมูล//smalldev_mat
    var $Connect;

    function con_db() {
        $this->Connect = mysqli_connect($this->host, $this->user, $this->pass, $this->db)or die("Error : ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
        $charset = "SET character_set_results=UTF8";
        mysqli_query($this->Connect, $charset) or die(mysqli_error($this->Connect));
        $charset = "SET character_set_client='UTF8'";
        mysqli_query($this->Connect, $charset) or die(mysqli_error($this->Connect));
        $charset = "SET character_set_connection='UTF8'";
        mysqli_query($this->Connect, $charset) or die(mysqli_error($this->Connect));
//        try {
//            $this->Connect = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//            // set the PDO error mode to exception
//            $this->Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//            echo "Connected successfully";
//        } catch (PDOException $e) {
//            echo "Connection failed: " . $e->getMessage();
//        }
    }

    function close_db() {
        mysqli_close($this->Connect);
        $this->Connect = null;
    }

    function select($sql) {
        $array_result = array();
        $Query = $this->Connect->query($sql);
        if ($Query) {
                while ($Row = mysqli_fetch_array($Query)) {

                array_push($array_result, $Row);
            }

            $this->Connect = null;
            unset($Query);
            unset($Row);
        } else {
            return false;
        }
        return $array_result;
    }

    function execute($sql) {
        $stmt = $this->Connect->prepare($sql);
        $ret = $stmt->execute();
        $this->Connect->commit();
        $this->Connect = null;
        return $ret;
    }

    function mysqli_num_rows($sql) {
        $Query = $this->Connect->query($sql);
        $num = mysqli_num_rows($Query);
        return $num;
    }

    function exec($sql) {
        $stmt = $this->Connect->prepare($sql);
        $ret = $stmt->execute();
    }

}

function FnID($var) {
    $srt[0] = substr($var, 0, 1);
    $srt[1] = substr($var, 1, 4);
    $srt[2] = substr($var, 5, 5);
    $srt[3] = substr($var, 10, 2);
    $srt[4] = substr($var, 12, 1);
    return $srt[0] . "-" . $srt[1] . "-" . $srt[2] . "-" . $srt[3] . "-" . $srt[4];
}

function rev_date($date) {
    $array = explode("/", $date);
    $rev = array_reverse($array);
    $date = implode("-", $rev);
    return $date;
}

function thaiDate($datetime) {
    list($date, $time) = split(' ', $datetime); // แยกวันที่ กับ เวลาออกจากกัน
    list($H, $i, $s) = split(':', $time); // แยกเวลา ออกเป็น ชั่วโมง นาที วินาที
    list($Y, $m, $d) = split('-', $date); // แยกวันเป็น ปี เดือน วัน
    $Y = $Y + 543; // เปลี่ยน ค.ศ. เป็น พ.ศ.

    switch ($m) {
        case "01": $m = "ม.ค.";
            break;
        case "02": $m = "ก.พ.";
            break;
        case "03": $m = "มี.ค.";
            break;
        case "04": $m = "เม.ย.";
            break;
        case "05": $m = "พ.ค.";
            break;
        case "06": $m = "มิ.ย.";
            break;
        case "07": $m = "ก.ค.";
            break;
        case "08": $m = "ส.ค.";
            break;
        case "09": $m = "ก.ย.";
            break;
        case "10": $m = "ต.ค.";
            break;
        case "11": $m = "พ.ย.";
            break;
        case "12": $m = "ธ.ค.";
            break;
    }
    return $d . " " . $m . " " . $Y;
}

function chistDate($date) {
    $array = explode(" ", $date);
    $d = $array[0];
    $m = $array[1];
    $Y = $array[2] - 543; // เปลี่ยน ค.ศ. เป็น พ.ศ.
    switch ($m) {
        case "ม.ค.": $m = "01";
            break;
        case "ก.พ.": $m = "02";
            break;
        case "มี.ค.": $m = "03";
            break;
        case "เม.ย.": $m = "04";
            break;
        case "พ.ค.": $m = "05";
            break;
        case "มิ.ย.": $m = "06";
            break;
        case "ก.ค.": $m = "07";
            break;
        case "ส.ค.": $m = "08";
            break;
        case "ก.ย.": $m = "09";
            break;
        case "ต.ค.": $m = "10";
            break;
        case "พ.ย.": $m = "11";
            break;
        case "ธ.ค.": $m = "12";
            break;
    }
    return $Y . "-" . $m . "-" . $d;
}

?>
