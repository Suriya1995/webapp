<?php
@ob_start();
@session_start();
include '../../common/header.php';
?>
<?php require_once '../../connect/connect_DB_personal.php'; ?>
<html>

    <style type="text/css">
        @media print
        {
            .noprint {visibility:hidden;}
        }
        .aor {
            border-bottom: 1.5px dotted;
        }
        @font-face {
            .p{font-family: 'THSarabunNew';
               src: url('thsarabunnew_bolditalic-webfont.eot');
               src: url('thsarabunnew_bolditalic-webfont.eot?#iefix') format('embedded-opentype'),
                   url('thsarabunnew_bolditalic-webfont.woff') format('woff'),
                   url('thsarabunnew_bolditalic-webfont.ttf') format('truetype');
               font-weight: bold;
               font-style: italic;}

        }


    </style>
    <body  style="background-color: #ffffff;" >




        <table align="center" width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td td width="40%">
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                    <img src="../../images/ตราบันทึกข้อความ.png" width="100" height="100" alt="User" />
                    <br>
                </td>
                <td td width="60%">
                    <br>
                    <br>
                    <FONT SIZE=4><B>บันทึกข้อความ</B></FONT>  
                </td>

            </tr>


        </table>

        <table align="center" width="100%" cellspacing="0" cellpadding="0" >   
            <tr>
                <td width="13%">
                    <B>ส่วนราชการ </B>
                </td>
                <td width="40%">
                    สำนักงานป้องกันควบคุมโรคที่   6  &nbsp;&nbsp;  จังหวัดชลบุรี 
                </td>

                <td width="8%"><span>กลุ่ม/ฝ่าย</span></td>
                <td width="18%"class="aor"><center><span id ="m_class" ></span></center> </td>


        <td  width="20%">

            โทร &nbsp;&nbsp; 0382-71881-2

        </td>
    </tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0" >   
    <tr>
        <td width="70%">
            <B>ที่</B> &nbsp;&nbsp;&nbsp;&nbsp;สร &nbsp;&nbsp;0455......../........
        </td>

        <td width="5%">วันที่</td>              
        <td width="25%"class="aor"><span id = "m_date" ></span> </td>



    </tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td >
            <B>เรื่อง &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</B>ขออนุญาติเดินทางไปราชการ

        </td>

    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>
        <td width = "7%"><B>เรียน</B></td>
        <td width="30"class="aor"><span id ="m_lvb" ></span> </td>
        <td width="73%"> </td>


    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="5%"></td>
        <td width="3%"><span>ข้าพเจ้า</span></td>
        <td width="38%"class="aor"><center><span id ="m_cardname"></span></center></td>
<td width="19%">เเละผู้ร่วมเดินทาง</td>
<td width="5%">
    จำนวน 

</td>

<td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="12%">คน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ดังนี้</td>

</tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="5%"></td>
        <td width="1%">1.</td>
        <td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="1%">4.</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="1%">7.</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>

</tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="5%"></td>
        <td width="1%">2.</td>
        <td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="1%">5.</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="1%">8.</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>

</tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="5%"></td>
        <td width="1%">3.</td>
        <td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="1%">6.</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="1%">9.</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>

</tr>
</table>



<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>
        <td width="24%">
            จำเป็นต้องเดินทางไปราชการ  
        </td>
        <td width="4%">
            เรื่อง
        </td>

        <td width="52%"class="aor"><center><span id ="m_name"></span></center></td>
<td width="13%">
    ตามสถานที่ดังนี้
</td>

</tr>
</table>

</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="5%"></td>
        <td width="5%">สถานที่</td>
        <td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="1%">จ.</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="3%">ระหว่างวันที่</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>

</tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="5%"></td>
        <td width="5%">สถานที่</td>
        <td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="1%">จ.</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="3%">ระหว่างวันที่</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>

</tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="5%"></td>
        <td width="5%">สถานที่</td>
        <td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="1%">จ.</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="3%">ระหว่างวันที่</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>

</tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="5%"></td>
        <td width="5%">สถานที่</td>
        <td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="1%">จ.</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>
<td width="3%">ระหว่างวันที่</td>
<td width="18%"class="aor"><center><span id =""></span></center></td>

</tr>
</table>


<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>
        <td width="10%">
            ทั้งนี้ &nbsp;&nbsp;ขอใช้  
        </td>
        <td width="45%">
            <input id="checkbox" type="checkbox">
        </td>
        <td width="45%">
            <input id="checkbox" type="checkbox">
        </td>

    </tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>
        <td width="10%">
            ทั้งนี้ &nbsp;&nbsp;ขอใช้  
        </td>
        <td width="45%">
            <input id="checkbox" type="checkbox">
        </td>
        <td width="45%">
            <input id="checkbox" type="checkbox">
        </td>

    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>
        <td width="16%">
            <b><u>โดยเบิกจาก</u></b>  
        </td>
        <td width="28%">
            <input id="checkbox" type="checkbox">
        </td>
        <td width="28%">
            <input id="checkbox" type="checkbox">
        </td>
        <td width="28%">
            <input id="checkbox" type="checkbox">
        </td>

    </tr>
</table>
          
<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>
        <td width="15%">
            <b><u>ออกเดินทาง</u></b>  
        </td>
        <td width="4%">
            วันที่  
        </td>
        <td width="15%"class="aor"><center><span id ="m_dateout"></span></center></td>
<td width="4%">เวลา</td>
<td width="10%"class="aor"><center><span id =""></span></center></td>
<td width="1%">น.</td>

<td width="5%"></td>
<td width="15%">
    <b><u>เดินทางกลับ</u></b>  
</td>
<td width="4%">
    วันที่  
</td>

<td width="15%"class="aor"><center><span id ="m_dateback"></span></center></td>
<td width="4%">
    เวลา  
</td>
<td width="10%"class="aor"><center><span id =""></span></center></td>
<td width="1%">
    น.  
</td>
</tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td>
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  จึงเรียนมาเพื่อโปรดพิจารณาอนุมัติต่อไปด้วย &nbsp;&nbsp;จะเป็นพระคุณ
        </td>

    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "54%">
            เรียน &nbsp;&nbsp; ผอ.สคร &nbsp;6&nbsp;ชลบุรี
        </td>
        <td width="25%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ....................................................</td>
        <td width="20%"></td>


    </tr>
</table>


<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เพื่อโปรดอนุมัติ
        </td>
        <td width="30%">(............................................................)</td>

        <td width="15%"></td>


    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "50%">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </td>
        <td width="30%">ตำเเหน่ง............................................................</td>

        <td width="15%"></td>


    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>


        <td width="30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;............................................................หัวหน้ากลุ่ม/ฝ่าย/ศูนย์</td>



    </tr>
</table>


<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>


        <td width="30%">(......................................................................)</td>
    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>


        <td width="100" class="aor" >.</td>
    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0" border="1">   
    <tr>

        <td width = "50%" >
            เรียน ผอ ศคร.6 ชลบุรี
        </td>
        <td width="50%"> เรียน ผอ ศคร.6 ชลบุรี</td>



    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "50%">
            &nbsp;&nbsp;&nbsp;&nbsp;ขออนุมัติรถราชการหมายเลขทะเบียน
        </td>
        <td width="15%"> &nbsp;&nbsp;&nbsp;&nbsp;ขออนุมัติค่าเช่ารถ &nbsp;&nbsp;&nbsp;&nbsp;จำนวน </td>   
        <td width="10%" class="aor"><span id ="m_budget_ve_num"></span> </td>
        <td width="5" > วัน </td>   
        <td width="10%"> &nbsp;&nbsp;&nbsp;&nbsp;เป็นเงิน </td> 
        <td width="10%" class="aor"><center><span id ="m_budget_ve_money"></span></center></td>
        <td width="5" > บาท</td> 


    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="1%"> 1.) </td> 
        <td width="17%" class='aor'>  </td> 
        <td width="3%"> โดยมี </td> 
        <td width="19%" class='aor'>  </td>
        <td width="10%"> เป็นพนักงานขับรถยนต์ </td>    
        <td width="50%"> &nbsp;&nbsp;&nbsp;(รวมน้ำมันเชื้อเพลิงเเละค่าทางด่วน) </td> 

    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="1%"> 2.) </td> 
        <td width="17%" class='aor'>  </td> 
        <td width="3%"> โดยมี </td> 
        <td width="19%" class='aor'>  </td>
        <td width="10%"> เป็นพนักงานขับรถยนต์ </td> 
        <td width="50%"> </td> 

    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="1%"> 3.) </td> 
        <td width="17%" class='aor'>  </td> 
        <td width="3%"> โดยมี </td> 
        <td width="19%" class='aor'>  </td>
        <td width="10%"> เป็นพนักงานขับรถยนต์ </td>   
        <td width="50%">  </td> 

    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width="1%"> 4.) </td> 
        <td width="17%" class='aor'>  </td> 
        <td width="3%"> โดยมี </td> 
        <td width="19%" class='aor'>  </td>
        <td width="10%"> เป็นพนักงานขับรถยนต์ </td> 
        <td width="50%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.............................................. </td> 

    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "10%">
            &nbsp;&nbsp;&nbsp;&nbsp;ยืมรถจาก&nbsp;&nbsp;&nbsp;ศตม.
        </td>
        <td width="15%" class="aor"></td>  
        <td width="10%">หมายเลขทะเบียน</td> 
        <td width="15%" class="aor"><span id ="m_liceplate_stm"></span></td>


        <td width="50%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เจ้าพนักงานพัสดุ </td> 


    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "10%">
            &nbsp;&nbsp;&nbsp;&nbsp;โดยมี
        </td>
        <td width="30%" class="aor"></td>  
        <td width="10%" >เป็นพนักงานขับรถยนต์</td>


        <td width="50%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ............/.........../...........</td> 


    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "15%">
            &nbsp;&nbsp;&nbsp;&nbsp;ไม่มีรถราชการสนับสนุน &nbsp;&nbsp;&nbsp;ได้ประสาน
        </td>
        <td width="25%" class="aor"></td>  
        <td width="10%">ทราบเเล้ว</td> 
        <td width="50%"> เรียน ผอ ศคร.6 ชลบุรี</td>
    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "50%">
            
        </td>
         
        <td width="50%">  &nbsp;&nbsp;&nbsp;&nbsp; เพื่อโปรดอนุมัติเช่ารถ</td>
    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "50%">
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.........................................ยานพาหนะ
        </td>
         
        <td width="50%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.............................................. </td> 
    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "50%">
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
              &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.............../................/...............
        </td>
         
       <td width="50%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; หัวหน้ากลุ่มบริหารงานทั่วไป</td> 
    </tr>
</table>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "50%">
            <B><U>หมายเหตุ</U></B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp;กรณีมีรถสนับสนุนให้เสนอ&nbsp;&nbsp;&nbsp; ผอ.&nbsp;อนุมัติ
        </td>
         
       <td width="50%"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ............/.........../...........</td> 
    </tr>
</table>



<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "50%">
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp;กรณีไม่มีรถสนับสนุน&nbsp;&nbsp;&nbsp;ให้ส่งงานพัสดุ
        </td>
         
       <td width="50%"> </td> 
    </tr>
</table>
<br>

<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "30%">
             <FONT SIZE=4><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            
          อนุมัติ</B></FONT>
        </td>
         
        
    </tr>
</table>




<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "30%">
             <FONT SIZE=4><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            
          .........................................................</B></FONT>
        </td>
         
        
    </tr>
</table>
<table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "30%">
             <FONT SIZE=4><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            
          (.........................................................)</B></FONT>
        </td>
         
        
    </tr>
</table>
    <table align="center" width="100%" cellspacing="0" cellpadding="0">   
    <tr>

        <td width = "30%">
             <FONT SIZE=4><B>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            
          ตำเเหน่ง.........................................................</B></FONT>
        </td>
         
        
    </tr>
    
    </table>

    <br>
    <br>
<center class = "noprint "> 
    <button type="button" class="btn bg-grey waves-effect">
        <a href="tranning_form.php"<i class="material-icons">home</i>
        <span>กลับ</span></a>
    </button>
    
    <button type="button" class="btn bg-light-green waves-effect btn-print">
        <i class="material-icons">print</i>
        <span>พิมพ์...</span>
    </button> 
    </center>







<!-- #END# Modal Add BnIN -->
</section>

<?php
@ob_start();
@session_start();
include '../../common/header.php';
?>
<?php require_once '../../connect/connect_DB_personal.php'; ?>
<?php include '../../common/headerScript.php'; ?>
<?php include ("../../PS_script/personnal/meet_addData.php"); ?>
</body>

</html>

