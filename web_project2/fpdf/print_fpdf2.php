
<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
@ob_start();
@session_start();
require_once '../connect/connect_DB_personal.php';
require('fpdf.php');
if (isset($_POST["FN"]) && !empty($_POST["FN"])) {
    $cn = new management;
    $cn->con_db();
    $sql = "SELECT * FROM ps_leavesmp WHERE leave_idsmp = (SELECT MAX(leave_idsmp) FROM ps_leavesmp)";
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
        $pdf->Cell(0, 7, iconv('UTF-8', 'TIS-620', 'ใบลาป่วย ลาคลอดบุตร ลากิจส่วนตัว'), 0, 1, 'C');
        $pdf->SetFont('angsana', 'B', 16);
        $pdf->Cell(195, 7, iconv('UTF-8', 'TIS-620', 'เขียนที่  สำนักงานป้องกันควบคุมโรคที่ 6'), 0, 1, 'R');
        $pdf->Cell(145, 7, iconv('UTF-8', 'TIS-620', 'วันที่'), 0, 0, 'R');
        $pdf->Cell(50, 7, iconv('UTF-8', 'TIS-620', '' . $row['leave_datesmp'] . ''), 0, 1, 'L');
        $pdf->Cell(10, 7, iconv('UTF-8', 'TIS-620', 'เรื่อง'), 0, 0, 'L');
        $pdf->Cell(50, 7, iconv('UTF-8', 'TIS-620', '' . $row['leave_type'] . ''), 0, 1, 'L');
        $pdf->Cell(10, 7, iconv('UTF-8', 'TIS-620', 'เรียน'), 0, 0, 'L');
        $pdf->Cell(150, 7, iconv('UTF-8', 'TIS-620', '' . $row['leader_name'] . ''), 0, 1, 'L');
        $pdf->Cell(45, 7, iconv('UTF-8', 'TIS-620', 'ข้าพเจ้า'), 0, 0, 'R');
        $pdf->Cell(61, 7, iconv('UTF-8', 'TIS-620', '' . $row['name_mesmp'] . ''), 0, 0, 'L');
        $pdf->Cell(17, 7, iconv('UTF-8', 'TIS-620', 'ตำแหน่ง'), 0, 0, 'L');
        $pdf->Cell(65, 7, iconv('UTF-8', 'TIS-620', '' . $row['posi_name'] . ''), 0, 1, 'L');
        $pdf->Cell(12, 7, iconv('UTF-8', 'TIS-620', 'ระดับ'), 0, 0, 'L');
        $pdf->Cell(70, 7, iconv('UTF-8', 'TIS-620', '' . $row['degree_name'] . ''), 0, 0, 'L');
        $pdf->Cell(12, 7, iconv('UTF-8', 'TIS-620', 'สังกัด'), 0, 0, 'L');
        $pdf->Cell(90, 7, iconv('UTF-8', 'TIS-620', '' . $row['sangkad_name'] . ''), 0, 1, 'L');
        $pdf->Cell(10, 20, iconv('UTF-8', 'TIS-620', 'ขอลา'), 0, 0, 'L');
        $pdf->Image('../images/img-print/sick.PNG', 30, 60, 20, 0);
        $pdf->Cell(100, 20, iconv('UTF-8', 'TIS-620', 'เนื่องจาก'), 0, 0, 'R');
        $pdf->Cell(80, 20, iconv('UTF-8', 'TIS-620', '' . $row['leave_sincesmp'] . ''), 0, 1, 'L');

        $pdf->Cell(18, 7, iconv('UTF-8', 'TIS-620', 'ตั้งแต่วันที่'), 0, 0, 'L');
        $pdf->Cell(40, 7, iconv('UTF-8', 'TIS-620', '' . $row['leave_Indaysmp'] . ''), 0, 0, 'L');
        $pdf->Cell(18, 7, iconv('UTF-8', 'TIS-620', 'ถึงวันที่'), 0, 0, 'L');
        $pdf->Cell(40, 7, iconv('UTF-8', 'TIS-620', '' . $row['leave_outdaysmp'] . ''), 0, 0, 'L');
        $pdf->Cell(18, 7, iconv('UTF-8', 'TIS-620', 'มีกำหนด'), 0, 0, 'L');
        $pdf->Cell(40, 7, iconv('UTF-8', 'TIS-620', '' . $row['leave_totalsmp'] . ''), 0, 0, 'C');
        $pdf->Cell(5, 7, iconv('UTF-8', 'TIS-620', 'วัน'), 0, 1, 'L');
        
        $pdf->Cell(23, 7, iconv('UTF-8', 'TIS-620', 'ข้าพเจ้าได้ลา'), 0, 0, 'L');
        $pdf->Image('../images/img-print/L.PNG', 32, 85.5, 50, 0);
        $pdf->Cell(49, 7, iconv('UTF-8', 'TIS-620', ''), 0, 0, 'L');
        $pdf->Cell(35, 7, iconv('UTF-8', 'TIS-620', 'ครั้งสุดท้ายตั้งแต่วันที่'), 0, 0, 'L');
        $pdf->Cell(40, 7, iconv('UTF-8', 'TIS-620', '' . $row['leave_lastday'] . ''), 0, 1, 'C');
        
        $pdf->Cell(15, 7, iconv('UTF-8', 'TIS-620', 'ถึงวันที่'), 0, 0, 'L');
        $pdf->Cell(23, 7, iconv('UTF-8', 'TIS-620', '' . $row['leave_lastday2'] . ''), 0, 0, 'C');
        $pdf->Cell(15, 7, iconv('UTF-8', 'TIS-620', 'มีกำหนด'), 0, 0, 'L');
        $pdf->Cell(20, 7, iconv('UTF-8', 'TIS-620', '' . $row['leave_totalsmp2'] . ''), 0, 0, 'C');
        $pdf->Cell(55, 7, iconv('UTF-8', 'TIS-620', 'ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่'), 0, 0, 'L');
        $pdf->Cell(60, 7, iconv('UTF-8', 'TIS-620', '' . $row['leave_address2'] . ''), 0, 1, 'C');
        
        $pdf->Cell(70, 7, iconv('UTF-8', 'TIS-620', ''), 0, 0, 'C');
        $pdf->Cell(30, 7, iconv('UTF-8', 'TIS-620', 'หมายเลขโทรศัพท์'), 0, 0, 'C');
        $pdf->Cell(70, 7, iconv('UTF-8', 'TIS-620', ''. $row['Tel_me'] . ''), 0, 1, 'C');
        
        
        
        $pdf->Cell(180, 10, iconv('UTF-8', 'TIS-620', '(ลงชื่อ................................................................'), 0, 1, 'R');
        $pdf->Cell(180, 10, iconv('UTF-8', 'TIS-620', '(.....................................................................)'), 0, 1, 'R');
        $pdf->SetFont('', 'U');
        $pdf->Cell(180, 7, iconv('UTF-8', 'TIS-620', 'ความคิดเห็นของผู้บังคับบัญชา'), 0, 1, 'R');
        $pdf->SetFont('angsana', 'B', 16);
        
        
        $pdf->Cell(190, 7, iconv('UTF-8', 'TIS-620', '.............................................................................'), 0, 1, 'R');
        $pdf->Cell(92, 7, iconv('UTF-8', 'TIS-620', ''), 0, 1, 'L');
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
        $pdf->Image('../images/img-print/status.PNG',150,183,40,0);
       
        $pdf->Output("MyPDF/print2.pdf", "F");
    }

    exit();
}
?>