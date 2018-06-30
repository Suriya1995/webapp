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
                <td><u><center><h4>ใบลาป่วย ลาคลอดบุตร ลากิจส่วนตัว</h4></center></u></td>
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
                <td class="aor"><span id="date"></span></td>
            </tr>
        </table>
        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td width="3%"><span><b>เรื่อง</b></td>
                <td class="aor"><span id="type1"></span></td>
            </tr>
        </table>
        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td width="3%"><span><b>เรียน</b></td>
                <td class="aor"><span id="leader"></span></td>
            </tr>
        </table>
        <table align="right" width="90%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td width="8%"><span><b>ข้าพเจ้า</b></span></td>
                <td class="aor"><span id="nameme"></span></td>

                <td width="5%"><span>ตำแหน่ง</span></td>
                <td width="0%" class="aor"><span id="posiname"></span></td>
            </tr>
        </table>
        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>               
                <td width="3%"><span>ระดับ</span></td>
                <td width="40%" class="aor"><span id="degree"></span></td>      

                <td width="5%"><span>สังกัดกลุ่ม</span></td>
                <td class="aor"><span id="sangkad2"></span></td>
            </tr>
        </table> 

        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <td width="3%"><label>ขอลา</label><td>
            <td>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="checkbox" type="checkbox">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="e">ลาป่วย</label>
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="checkbox" type="checkbox">            
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="e">กิจส่วนตัว</label>                   
                <br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input id="checkbox" type="checkbox">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="c">คลอดบุตร</label></td>


        </table> 

        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
                <td width="5%"><span><b>เนื่องจาก</b></td>
                <td class="aor"><span id="sincesmp"></span></td>
            </tr>
        </table>
        <table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>               
                <td width="8%"><span>ตั้งแต่วันที่</span></td>
                <td class="aor"><center><span id="Indaysmp"></span></center></td>
        <td width="8%"><span>ถึงวันที่</span> </td>
        <td class="aor"><center><span id="outdaysmp"></span></center></td>
    <td width="12%" ><span>มีกำหนด</span> </td>
    <td width="12%" class="aor"><center><span id="totalsmp"></span></center></td>
<td><span>วัน</span></td>  
</tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="5%"><span>ข้าพเจ้าได้ลา</span></td>

        <td width="8%"><input value="ขอลา" type="checkbox" class="ss uu" id="checkbox" > 
            <label for="a">ลาป่วย</label>
            <input value="กิจส่วนตัว" type="checkbox" class="ss aa" id="checkbox" > 
            <label for="b">กิจส่วนตัว</label>
            <input class="ss dd" value="คลอดบุตร" type="checkbox" id="checkbox" > 
            <label for="c">คลอดบุตร</label>
        </td>

        <td width="7%"><span>ครั้งสุดท้ายตั้งแต่วันที่</span></td>
        <td width="15%" class="aor"><center><span id="lastday"></span></center></td>

</tr>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="5%"><span>ถึงวันที่</span></td> 
        <td width="15%" class="aor"><center><span id="lastday2"></span></center></td>
<td width="5%"><span>มีกำหนด</span></td> 
<td width="15%" class="aor"><center><span id="totalsmp2"></span></center></td>
<td width="2%"><span>วัน</span></td>
<td width="10%"><span>ในระหว่างลาจะติดต่อข้าพเจ้าได้ที่</span></td>

</tr>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>

        <td width="20%" class="aor"><center><span id="address2"></span></center></td>
<td width="5%"><span>หมายเลขโทรศัพท์</span></td>
<td width=10%" class="aor"><center><span id="Tel"></span></center></td>

</tr> 

</table>
<br>
<br>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="54%"><span></span></td> 
        <td><span>(ลงชื่อ).................................................</span></td>

    </tr> 

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="56%"><span></span></td>
        <td ><span>(.......................................................)</span></td> 

    </tr>

</table>
<br>
<br>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="64%"><span></span></td>
        <td><u><b><span>ความเห็นผู้บังคับบัญชา</span></b></u></td>

    </tr> 

</table>
<br>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="62%"><span></span></td>
        <td><span>.......................................................</span></td>


    </tr> 

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="59%"><span></span></td>
        <td><span>.........................................................................</span></td>

    </tr> 
</table>
<br>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="59%"><span></span></td>
        <td><span>(ลงชื่อ).................................................</span></td>

    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="59%"><span></span></td>
        <td><span>(.......................................................)</span></td>

    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="59%"><span></span></td>
        <td><span>(ตำแหน่ง).................................................</span></td>

    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="62%"><span></span></td>
        <td><span>วันที่............./................./..............</span></td>

    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>(ลงชื่อ).................................................</span></td>
        <td ><span></span></td>
    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<td><span>(.......................................................)</span></td>

    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="0%">&nbsp;&nbsp;&nbsp;&nbsp;<td><span>(ตำแหน่ง).................................................</span></td>
        <td width="35%"><span><u><b>คำสั่ง</b></u></span>

        </td>
    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>

        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>วันที่............./................./..............</span>

    <center> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input id="checkbox" type="checkbox">
        <label for="e"> <label>อนุญาต</label></label>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input id="checkbox" type="checkbox">
        <label for="e"> <label>ไม่อนุญาต</label></label>
    </center>

</td>

</tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="62%"><span></span></td>
        <td><span>.......................................................</span></td>


    </tr> 

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="59%"><span></span></td>
        <td><span>.........................................................................</span></td>

    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="59%"><span></span></td>
        <td><span>(ลงชื่อ).................................................</span></td>

    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="62%"><span></span></td>
        <td><span>(.......................................................)</span></td>

    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="59%"><span></span></td>
        <td><span>(ตำแหน่ง).................................................</span></td>

    </tr> 
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
        <td width="62%"><span></span></td>
        <td><span>วันที่............./................./..............</span></td>

    </tr> 
</table>



<center> 
    <a href="leave_history.php"> <button type="button" class="btn bg-grey waves-effect">
            <i class="material-icons">home</i>
            <span>กลับ</span>
        </button>
    </a>
    <button type="button" class="btn bg-light-green waves-effect btn-print2">
        <i class="material-icons">print</i>
        <span>พิมพ์...</span>
    </button> 
</center>


<?php include '../../common/headerScript.php'; ?>
<?php include ("../../PS_script/personnal/leave_relax.php"); ?>
<?php include ("../../PS_script/personnal/leave_form2.php"); ?>
</body>
</html>

