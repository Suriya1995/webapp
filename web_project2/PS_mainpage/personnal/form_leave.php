<?php
@ob_start();
@session_start();
include '../../common/header.php';
?>
<?php require_once '../../connect/connect_DB_personal.php'; ?>
<html>
    <body style="background-color: #ffffff;">
        <style type="text/css">
            @media print
            {
                .noprint {visibility:hidden;}
            }
            .aor {
                border-bottom: 1.4px dotted;
            }
        </style>


        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td><u><center><h4>ใบลาพักผ่อนประจำปี</h4></center></u></td>
            </tr>
        </table>    

        <table align="right" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>              
                <td><div class="col-md-12" align="right"><span>เขียนที่&nbsp;&nbsp;สำนักงานป้องกันควบคุมโรคที่ 6 </span></div></td>
            </tr>
        </table>
        <table align="right" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td width="74%"><div class="col-md-12" align="right"><span>วันที่ </span></div></td>
                <td class="aor"><span id="date1"></span></div></td>
            </tr>
        </table>
        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td><span><b>เรื่อง</b></span>&nbsp;ขอลาพักผ่อน</td>
            </tr>
        </table> 

        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td width="5%"><span><b>เรียน</b></span></td>
                <td class="aor"><span id="topic"></span></td>
            </tr>
        </table> 

        <table align="right" width="90%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td width="8%"><span><b>ข้าพเจ้า</b></span></td>
                <td class="aor"><span id="name"></span></td>
            </tr>
        </table> 

        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>               
                <td width="5%"><span>ตำแหน่ง</span></td>
                <td width="0%" class="aor"><span id="position"></span></td>

                <td width="3%"><span>ระดับ</span></td>
                <td width="40%" class="aor"><span id="levels"></span></td>                
            </tr>
        </table>   

        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td width="5%"><span>สังกัดกลุ่ม</span></td>
                <td class="aor"><span id="sangkad"></span></td>
            </tr>
        </table>

        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>               
                <td width="10%"><span>มีวันลาผักผ่อนสะสม</span></td>
                <td width="12%" class="aor"><center><span id="lacollect"></span></center></td>
        <td width="40%"><span><center>วันทำการ &nbsp;มีสิทธิลาพักผ่อนประจำปีนี้อีก 10 วัน&nbsp;รวมเป็น</center></span></td>
        <td width="12%" class="aor"><center><span  id="latotal"></span></center></td>
    <td><span>วันทำการ</span></td>                

</tr>
</table>   
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>               
        <td width="12%"><span>ขอลาพักผ่อนตั้งแต่วันที่</span></td>
        <td class="aor"><center><span id="Inday"></span></center></td>
<td width="8%"><span>ถึงวันที่</span> </td>
<td class="aor"><center><span id="outday"></span></center></td>
<td><span>มีกำหนด</span> </td>
<td width="12%" class="aor"><center><span id="dayreplace"></span></center></td>
<td><span>วันทำการ</span></td>                

</tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="17%"><span>ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่</span></td>
        <td class="aor"><span id="address"></span></td>
    </tr>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="6%"><span>โทรศัพท์</span></td>
        <td class="aor" ><span id="Tel1"></span></td>
    </tr>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td ><span><u><b>หมายเหตุ</b></u></span>&nbsp;&nbsp;<span> (ถ้ามี) 1. ลาต่อเนื่องวันหยุด</span></td>
    </tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0"> 
    <tr>
        <td width="2%"><span><b>เนื่องจาก</b></span></td>
        <td width="17%" class="aor"><span id="since"> </span></td>
        <td width="15%"></td>
        <td width="3%"> <span>(ลงชื่อ...........................................................</span></td>

    </tr>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0"> 
    <tr>
        <td width="44%" class="aor"><span></span></td>
        <td></td>
        <td width="20%"><span>(...........................................................)</span></td>
    </tr>

</table>


<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>2. ในระหว่างลาข้าพเจ้าขอมอบหมาย</span></td>
    </tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="2%"><span><b>ชื่อ</b></span></td>
        <td width="15%" class="aor"><span id="name2"> </span></td>

        <td class="col-md-2"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><u>ความเห็นของผู้บังคับบัญชา</u></b></span></td>

    </tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="2%"><span><b>ตำแหน่ง</b></span></td>
        <td width="17%" class="aor" ><span id="pos"style="margin-right:15em;"> </span></td>
        <td class="col-md-4"><span >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center>......................................................</center></span></td>

    </tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="4%"><span style="margin-left:em;"><b>(ลงชื่อ)</b></span></td>
        <td width="33%" class="aor"><span id="place"style="margin-right:15em;"></span></td>
        <td>    <span style="margin-left:em;"><b>ผู้ปฎิบัติหน้าที่แทน</b></span></span></td>
        <td>    <span style="margin-left:em;">........................................................................</span></span></td>

    </tr>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="4%"><span style="margin-left:em;"><b>วันที่</b></td>
        <td class="aor"><span id="dates"style="margin-right:15em;"></span></td>
        <td width="50%"></td>
    </tr>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td ></td>
        <td class="col-md-6"><span><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

        <td>
            <span span style="margin-left:5em;">(ลงชื่อ)...........................................................</span>
            <br>
            <span span style="margin-left:5em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(......................................................)</span> 
            <br>
            <span span style="margin-left:5em;">ตำแหน่ง...........................................................</span>
            <br>
            <span span style="margin-left:5em;">วันที่.............../............................/...................</span>
        </td>

    </tr>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">

    <br>
    <td class="col-md-6"><span><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <u>คำสั่ง</u></b></span> 
        <br>
        <br>
    <center> <input id="checkbox" type="checkbox">
        <label for="e"> <label>อนุญาต</label></label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input id="checkbox" type="checkbox">
        <label for="e"> <label>ไม่อนุญาต</label></label></center>
    <br>
    <center>    <span>...........................................................</span>
        <br>
        <span>............................................................................</span></center>



</td>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td><span >(ลงชื่อ)...........................................................ผู้ตรวจสอบ</span>
            <br>
            <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(......................................................)</span> 
            <br>
            <span>ตำแหน่ง...........................................................</span>
            <br>
            <span>วันที่.............../............................/...................</span>
        </td>

    </tr>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>

        <td class="col-md-6"><span><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

        <td>
            <span style="margin-left:5em;">(ลงชื่อ)...........................................................</span>
            <br>
            <span style="margin-left:5em;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(......................................................)</span> 
            <br>
            <span style="margin-left:5em;">ตำแหน่ง...........................................................</span>
            <br>
            <span style="margin-left:5em;">วันที่.............../............................/...................</span>
        </td>

    </tr>

</table>
<br>


<center class="noprint"> 
    <a href="leave_history.php">
        <button type="button" class="btn bg-grey waves-effect">
            <i class="material-icons">home</i>
            <span>กลับ</span>
        </button>
    </a>
    <button type="button" class="btn bg-light-green waves-effect btn-print"> 
        <i class="material-icons">print</i>
        <span>พิมพ์...</span>
    </button> 
</center>


<?php include '../../common/headerScript.php'; ?>
<?php include ("../../PS_script/personnal/leave_relax.php"); ?>
<?php include ("../../PS_script/personnal/leave_form1.php"); ?>
</body>
</html>

