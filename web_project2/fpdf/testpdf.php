
<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../connect/connect_DB_personal.php';
require('fpdf.php');
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    $cn = new management;
    $cn->con_db();
    $sql = "SELECT * FROM ps_leaverelax WHERE leavelax_id = (SELECT MAX(leavelax_id) FROM ps_leaverelax)";
    $query = $cn->Connect->query($sql);
    while ($row = mysqli_fetch_array($query)) {
        define('FPDF_FONTPATH', 'font/');

        $pdf = new FPDF();
        $pdf = new FPDF('P', 'mm', 'A4');
        $pdf->AddPage();
        $pdf->AddFont('angsana', '', 'angsa.php');
        $pdf->AddFont('angsana', 'B', 'angsa.php');
        $pdf->AddFont('angsana', 'I', 'angsa.php');
        $pdf->SetFont('angsana', 'B', 18);
        $pdf->SetFont('', 'U');
        $pdf->Cell(0, 7, iconv('UTF-8', 'TIS-620', 'ใบลาพักผ่อนประจำปี'), 0, 1, 'C');
        $pdf->SetFont('angsana', 'B', 16);
        $pdf->Cell(195, 7, iconv('UTF-8', 'TIS-620', 'เขียนที่  สำนักงานป้องกันควบคุมโรคที่ 6'), 0, 1, 'R');
        $pdf->Cell(145, 7, iconv('UTF-8', 'TIS-620', 'วันที่'), 0, 0, 'R');
        $pdf->Cell(50, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_date'].''), 0, 1, 'L');
        $pdf->Cell(0, 7, iconv('UTF-8', 'TIS-620', 'เรื่อง   ขอลาพักผ่อน'), 0, 1, 'L');
        $pdf->Cell(10, 7, iconv('UTF-8', 'TIS-620', 'เรียน'), 0, 0, 'L');
        $pdf->Cell(150, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_topic'].''), 0, 1, 'L');
        $pdf->Cell(50, 7, iconv('UTF-8', 'TIS-620', 'ข้าพเจ้า'), 0, 0, 'R');
        $pdf->Cell(70, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_name'].''), 0, 1, 'L');
        $pdf->Cell(17, 7, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง'), 0, 0, 'L');
        $pdf->Cell(60, 7, iconv('UTF-8', 'TIS-620', ''.$row['position_name'].''), 0, 0, 'L');
        $pdf->Cell(12.5, 7, iconv('UTF-8', 'TIS-620', 'ระดับ'), 0, 0, 'L');
        $pdf->Cell(60, 7, iconv('UTF-8', 'TIS-620', ''.$row['levels_la'].''), 0, 1, 'L');
        $pdf->Cell(12, 7, iconv('UTF-8', 'TIS-620', 'สังกัด'), 0, 0, 'L');
        $pdf->Cell(90, 7, iconv('UTF-8', 'TIS-620', ''.$row['sangkad_la'].''), 0, 1, 'L');
        $pdf->Cell(36, 7, iconv('UTF-8', 'TIS-620', 'มีวันลาพักผ่อนสะสม'), 0, 0, 'L');
        $pdf->Cell(23, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_daylax'].''), 0, 0, 'C');
        $pdf->Cell(18.5, 7, iconv('UTF-8', 'TIS-620', 'วันทำการ '), 0, 0, 'L');
        $pdf->Cell(70, 7, iconv('UTF-8', 'TIS-620', 'มีสิทธิลาพักผ่อนประจำปีนี้อีก 10 วัน รวมเป็น '), 0, 0, 'L');
        $pdf->Cell(23, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_totalday'].''), 0, 0, 'C');
        $pdf->Cell(18.5, 7, iconv('UTF-8', 'TIS-620', 'วันทำการ '), 0, 1, 'L');
        $pdf->Cell(40, 7, iconv('UTF-8', 'TIS-620', 'ขอลาพักผ่อนตั้งแต่วันที่'), 0, 0, 'L');
        $pdf->Cell(31, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_Inday'].''), 0, 0, 'L');
        $pdf->Cell(18.5, 7, iconv('UTF-8', 'TIS-620', 'ถึงวันที่ '), 0, 0, 'L');
        $pdf->Cell(31.5, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_outday'].''), 0, 0, 'L');
        $pdf->Cell(18.5, 7, iconv('UTF-8', 'TIS-620', 'มีกำหนด'), 0, 0, 'L');
        $pdf->Cell(31, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_dayreplace'].''), 0, 0, 'C');
        $pdf->Cell(18.5, 7, iconv('UTF-8', 'TIS-620', 'วันทำการ'), 0, 1, 'L');
        $pdf->Cell(55, 7, iconv('UTF-8', 'TIS-620', 'ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่'), 0, 0, 'L');
        $pdf->Cell(134, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_address'].''), 0, 1, 'L');
        $pdf->Cell(18, 7, iconv('UTF-8', 'TIS-620', 'โทรศัพท์'), 0, 0, 'L');
        $pdf->Cell(134, 7, iconv('UTF-8', 'TIS-620', ''.$row['tel_leave'].''), 0, 1, 'L');
        $pdf->SetFont('', 'U');
        $pdf->Cell(20, 7, iconv('UTF-8', 'TIS-620', 'หมายเหตุ '), 0, 0, 'L');
        $pdf->SetFont('angsana', 'B', 16);
        $pdf->Cell(0, 7, iconv('UTF-8', 'TIS-620', ' (ถ้ามี) 1.ลาต่อเนื่องวันหยุด'), 0, 1, 'L');
        $pdf->Cell(16, 7, iconv('UTF-8', 'TIS-620', 'เนื่องจาก'), 0, 0, 'L');
        $pdf->Cell(73, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_since'].''), 0, 0, 'L');
        $pdf->Cell(105, 7, iconv('UTF-8', 'TIS-620', '                            (ลงชื่อ................................................................'), 0, 1, 'L');
        $pdf->Cell(20, 7, iconv('UTF-8', 'TIS-620', '                                                                                                                                   (.....................................................................)'), 0, 1, 'L');
        $pdf->Cell(0, 7, iconv('UTF-8', 'TIS-620', '                                 2.ในระหว่างลาข้าพเจ้าขอมอบหมาย'), 0, 1, 'L');
        $pdf->Cell(8, 7, iconv('UTF-8', 'TIS-620', 'ชื่อ'), 0, 0, 'L');
        $pdf->Cell(70, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_name2'].''), 0, 0, 'L');
        $pdf->SetFont('', 'U');
        $pdf->Cell(100, 7, iconv('UTF-8', 'TIS-620', 'ความคิดเห็นของผู้บังคับบัญชา'), 0, 1, 'R');
        $pdf->SetFont('angsana', 'B', 16);
        $pdf->Cell(16, 7, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง'), 0, 0, 'L');
        $pdf->Cell(74, 7, iconv('UTF-8', 'TIS-620', ''.$row['pos_name'].''), 0, 0, 'L');
        $pdf->Cell(105, 7, iconv('UTF-8', 'TIS-620', '                                     ...............................................................'), 0, 1, 'L');
        $pdf->Cell(15, 7, iconv('UTF-8', 'TIS-620', '(ลงชื่อ)'), 0, 0, 'L');
        $pdf->Cell(50, 7, iconv('UTF-8', 'TIS-620', ''.$row['name_place'].''), 0, 0, 'L');
        $pdf->Cell(32, 7, iconv('UTF-8', 'TIS-620', 'ผู้ปฎิบัติหน้าที่แทน'), 0, 0, 'L');
        $pdf->Cell(90, 7, iconv('UTF-8', 'TIS-620', '                  .............................................................................'), 0, 1, 'L');
        $pdf->Cell(10, 7, iconv('UTF-8', 'TIS-620', 'วันที่'), 0, 0, 'L');
        $pdf->Cell(92, 7, iconv('UTF-8', 'TIS-620', ''.$row['leave_dates'].''), 0, 1, 'L');
        $pdf->Cell(185, 7, iconv('UTF-8', 'TIS-620', '(ลงชื่อ   ................................................................)'), 0, 1, 'R');
        $pdf->Cell(190, 7, iconv('UTF-8', 'TIS-620', '(............................................................................)'), 0, 1, 'R');
        $pdf->Cell(185, 7, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง ................................................................'), 0, 1, 'R');
        $pdf->Cell(185, 7, iconv('UTF-8', 'TIS-620', 'วันที่ ................/............................./...................'), 0, 1, 'R');
        $pdf->SetFont('', 'U');
        $pdf->Cell(160, 7, iconv('UTF-8', 'TIS-620', 'คำสั่ง'), 0, 1, 'R');
        $pdf->SetFont('angsana', 'B', 16);
        $pdf->Cell(185, 7, iconv('UTF-8', 'TIS-620', ''), 0, 1, 'R');
        $pdf->Cell(185, 7, iconv('UTF-8', 'TIS-620', '...............................................................'), 0, 1, 'R');
        $pdf->Cell(90, 7, iconv('UTF-8', 'TIS-620', '(ลงชื่อ).............................................................ผู้ตรวจสอบ'), 0, 0, 'L');
        $pdf->Cell(105, 7, iconv('UTF-8', 'TIS-620', '..............................................................................................'), 0, 1, 'R');
        $pdf->Cell(90, 7, iconv('UTF-8', 'TIS-620', '(.............................................................)'), 0, 1, 'C');
        $pdf->Cell(90, 7, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง..............................................................'), 0, 0, 'L');
        $pdf->Cell(95, 7, iconv('UTF-8', 'TIS-620', '(ลงชื่อ)................................................................)'), 0, 1, 'R');
        $pdf->Cell(90, 7, iconv('UTF-8', 'TIS-620', 'วันที่.................../........................../.......................'), 0, 0, 'L');
        $pdf->Cell(100, 7, iconv('UTF-8', 'TIS-620', '(............................................................................)'), 0, 1, 'R');
        $pdf->Cell(90, 7, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง..............................................................'), 0, 0, 'L');
        $pdf->Cell(95, 7, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง ................................................................'), 0, 1, 'R');
        $pdf->Cell(185, 7, iconv('UTF-8', 'TIS-620', 'วันที่ ................/............................./...................'), 0, 1, 'R');
        $pdf->Image('../images/img-print/status.PNG',150,185,40,0);
//        $pdf->Rect(5, 5, 200, 287, 'D'); //For A4 
        
        $pdf->Output("MyPDF/a.pdf", "F");
    }
    
   
}
?>