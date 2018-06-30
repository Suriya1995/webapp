<?php include 'main_personnal.php'; ?>
<html>
    <body>
        <section class="content">
            <div class="container-fluid">
                <div class="block-header">


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header bg-green" >
                                <h2>
                                    การไปราชการ
                                </h2>

                            </div>

                            <div class="body">
                                
                               

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="row clearfix">
                                        <div class="col-lg-5 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                            <label>ส่วนราชการ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สำนักงานป้องกันควบคุมโรคที่ 6 จังหวัดชลบุรี</label>
                                        </div>


                                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l"style="margin-left: 15%;">
                                            <label>กลุ่ม/ฝ่าย</label>
                                        </div>

                                        <div class="col-lg-2 col-md-9 col-sm-4 col-xs-12">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id ="class_name" class="form-control" placeholder="กรอกชื่อหน่วยงาน select" 
                                                           value="<?php
                                                           $cn = new management;
                                                           $cn->con_db();
                                                           $sql = "select * from ps_profile as p left join ps_class as c on p.class_id = c.class_id where p.card_id = '" . $_SESSION['card_id'] . "'";

                                                           $query = $cn->Connect->query($sql);
                                                           while ($rs = mysqli_fetch_array($query)) {
                                                               echo $rs['class_name'];
                                                           }
                                                           ?>"/>
                                                </div>
                                            </div>
                                        </div>


                                    </div>


                                    <!-- Tab panes -->


                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                            <label> เลขที่หนังสือ สร</label>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-9 col-xs-8" style="margin-bottom: 0px">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id= "meet_no" class="form-control" placeholder="กรอกเลขที่หนังสือ"  />
                                                </div>
                                            </div>
                                        </div>
                     <?php

                    function datethai(){
                        $TH_Month = array("1","2","3","4","5","6","7","8","9","10","11","12");
                        $nDay = date("w");             //เก็บค่าของลำดับวันของสัปดาห์
                        $nMonth = date("n")-1;       //เก็บค่าลำดับของเดือน
                        $date = date("j");               //เก็บค่าวันที่
                        $year = date("Y")+543;      //เก็บค่า พ.ศ. (ค.ศ. + 543 = พ.ศ.
                     
                      echo("$date /$TH_Month[$nMonth] /  $year");

                    }
                        
                     
                     ?>

                                        <div  class="col-lg-3 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label>วันที่</label>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-9 col-xs-8" style="margin-bottom: 0px">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">date_range</i>
                                                </span>
                                                <div class="form-line">
                                                    <input disabled  type="text" id="meet_date"  value="<?php  echo datethai(); ?> "class="form-control" >
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                            <label>เรียน</label>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id ="lvb_name" class="form-control" placeholder="กรอกชื่อผู้อนุมัติ select" value="<?php
                                                    $cn = new management;
                                                    $cn->con_db();
                                                    $sql = "select p.pro_fname, p.pro_lname from ps_profile as p left join ps_leveboss AS lb on p.lvb_id = lb.lvb_id where p.class_id = (select p.class_id from ps_profile as p left join ps_class as c on p.class_id = c.class_id where p.card_id = '" . $_SESSION['card_id'] . "') and lb.lvb_id ='7'";

                                                    $query = $cn->Connect->query($sql);
                                                    while ($rs = mysqli_fetch_array($query)) {
                                                        echo $rs['pro_fname'] . ' ' . $rs['pro_lname'];
                                                    }
                                                    ?>"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div style="margin-left: 15%;" >
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label>ข้าพเจ้า</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id = "meet_psname" class="form-control" placeholder="กรอกชื่อผู้ขออนุมัติ select" value="<?php echo $_SESSION['name'] ?>"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div style="margin-left: 15%;" >
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10 form-control-label-l">
                                                <label>เเละผู้ร่วมเดินทาง (ถ้ามี)</label>
                                               
                                          <?php 
                                              
                                            $cn = new management;
                                            $cn->con_db();
                                            $sql = "SELECT * FROM `ps_profile` JOIn ps_class ON ps_class.class_id = ps_profile.class_id ORDER BY ps_class.class_id DESC";
                                            $query = $cn->Connect->query($sql); 
                                            echo "<select id='optgroup' multiple='multiple'>";
                                            while($rs = mysqli_fetch_array($query)){
                                                echo " <optgroup label=". $rs['class_name'].">";
                                                echo '<option  id='.$rs['pro_id'].' value='.$rs['pro_id'].'>'. $rs['pro_prefix']  .''. $rs['pro_fname'] . ' ' . $rs['pro_lname']. '</option>';
                                                echo " </optgroup>";
                                            }
                                            echo "</select>";
                                            ?>

                                          
                                            
                                               
                                    
                                      
                                                                                    
                                 
                            <script>
                           
                           $('#optgroup').multiSelect({ selectableOptgroup: true });
                            </script>

                                            
  



                                            
                                            <!-- <div class="col-md-4" >
                                                <div class="form-group uu">
                                                    <div class="form-line">                                       
                                                        <input type="text" id = "name_pspart" class="form-control" placeholder="กรอกชื่อผู้เข้าร่วม" />								
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4" >
                                               <img  src="../../images/pl.png" width="45" height="45" alt="U" name="add" id="add" onclick="javascript: AddRow()" >
                                           
                                             

                                            </div> -->
                                        </div>
                                    </div>


                                    <div class="row clearfix">

                                        <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                            <label><u>จำเป็นต้องไปราชการ</u></label>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div style="margin-left: 10%;" >
                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label><u>เรื่อง</u></label>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group ">
                                                    <div class="form-line">
                                                        <input type="text" id="meet_name" class="form-control" placeholder="กรอกเรื่องไปราชการ" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div style="margin-left: 15%;" >
                                            <div  class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label>ประเภทไปราชการ</label>
                                            </div>

                                            <div class="col-lg-5 col-md-5 col-sm-9 col-xs-12 form-control-radio" id="meet_type">

                                                <input  type="radio" value="อบรม" id="type_training"   name= "group2" class="with-gap radio-col-purple" />
                                                <label for="type_training">อบรม</label>
                                                <input type="radio" value="ประชุม" id="type_meeting" name= "group2"  class="with-gap radio-col-purple" />
                                                <label for="type_meeting">ประชุม</label>
                                                <input  type="radio" value="สัมมนา" id="type_seminar"   name= "group2" class="with-gap radio-col-purple" />
                                                <label for="type_seminar">สัมมนา</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div style="margin-left: 10%;" >
                                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label>วันที่ไปอรม</label>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="meet_datefrom" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style=" " class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label>ถึงวันที่ </label>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="meet_dateto" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>



                                    <div class="row clearfix locationh">
                                        <div style="margin-left:1%;" >

                                            <div class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">

                                                <label><u>สถานที่</u></label>

                                            </div>

                                        </div>
                                        <div class="col-md-3">

                                            <div class = "form-group" >

                                                <div class="form-line"  >
                                                    <input type="text" id = "meet_location" class="form-control" placeholder="กรอกสถานที่ไปอบรม" />
                                                </div>

                                            </div>
                                        </div>                       

                                        <div style=" " class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label>จังหวัด</label>
                                        </div>

                                        <div class="col-sm-2">
                                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-12">
                                                <select class="form-control show-tick" style="width: 100%" data-live-search="true" id="provinces_name" >

                                                    <?php
                                                    $cn = new management;
                                                    $cn->con_db();
                                                    echo '<option>เลือก</opition>';
                                                    $sql = "select * from ps_province ";
                                                    $query = $cn->Connect->query($sql);
                                                    while ($rs = mysqli_fetch_array($query)) {
                                                        echo '<option  value="' . $rs['PROVINCE_CODE'] . '">' . $rs['PROVINCE_NAME'] . '</opition>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div style=" " class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                            <label>วันที่</label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group ">
                                                <div class="form-line">
                                                    <input type="text" id="location_date_form" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div style=" " class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                            <label>ถึงวันที่ </label>
                                        </div>
                                        <div class="col-sm-1">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="location_todate_form" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>

                                        <div class = "dddd">
                                        </div>


                                    </div>


                                    <!-- <div class="row clearfix">
                                        <div class="col-md-4" >
                                            <img  name="addlo" id="addlo" class ="btn-null" onclick="javascript:Addlocation()" >
                                            
                                        </div>
                                    </div> -->



                                    <div class="row clearfix" >
                                            <div  class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                    <label> <u>โดยเบิกจาก</u></label>
                                            </div>
                                         <div class="col-lg-6 col-md-5 col-sm-8 col-xs-12 form-control-radio" id="meet_budget">
                                            <div class="demo-radio-button">
                                                <input  type="radio" value="เงินงบประมาณ" id="budget_1"  name="group4"   class="with-gap radio-col-purple" />
                                                    <label for="budget_1">เงินงบประมาณ</label>
                                                <label id="hiden" >ผลผลิต  </label>
                                                    <input class="form-line" id="input-Position" type="text" id = "product_money" class="form-control" placeholder="จำนวนเงิน" />   
                                            </div>  
                                            <div class="demo-radio-button"> 
                                                <input type="radio" value="ผู้จัดประชุมอบรม" id="budget_2"   name="group4" class="with-gap radio-col-purple" />
                                                <label for="budget_2">ผู้จัดประชุมอบรม</label>
                                            </div>   
                                            <div class="demo-radio-button">
                                                <input  type="radio" value="เงินนอกงบประมาณ" id="budget_3"   name="group4" class="with-gap radio-col-purple" />
                                                <label for="budget_3">เงินนอกงบประมาณ</label>
                                                <label id="hiden2" >ระบุ </label>
                                                <input  class="form-line" id="input-Position2" type="text" id = "budget_money" class="form-control" placeholder="จำนวนเงิน" />                                               
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div style="margin-left: 10%;" >
                                            <div style="" class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label><u>ออกเดินทางไปวันที่</u></label>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="meet_dateout" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="" class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label>เวลา</label>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="meet_timeout" class="form-control time24" placeholder="Ex: 23:59">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div style="margin-left: 10%;" >
                                            <div style="" class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                                <label><u>เดินทางกลับวันที่</u></label>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="meet_dateback" class="form-control" placeholder="__/__/____">
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="" class="col-lg-1 col-md-2 col-sm-3 col-xs-5 form-control-label">
                                                <label>เวลา</label>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" id="meet_timeback" class="form-control time24" placeholder="Ex: 23:59">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div style="" class="col-lg-2 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                            <label><U>ทั้งนี้ขอใช้</u></label>
                                        </div>
                                        <div class="col-lg-8 col-md-5 col-sm-9 col-xs-12 form-control-radio" id="meet_vehicle" >
                                            <div class="demo-radio-button">
                                                        <input name="group3" type="radio" value="ยานพาหนะของทางราชการ" id="stm_se" class="with-gap radio-col-pink">
                                                        <label for="stm_se">ยานพาหนะของทางราชการ  (หากไม่มีรถราชการสนับสนุน)</label>
                                                        <br>
      
                                                                    <label id="hiden3" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ขออนุมัติรถราชการหมายเลขทะเบียน</label>
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <div class="row clearfix">
                                                                                    <div class="col-md-12 col-md-12 col-sm-12 col-xs-12" style="margin-left: 40px">
                                                                                                <input   name="group3" type="text" id="input-Position3"  id="liceplate_stm"  placeholder="เลขทะเบียนรถ"> 
                                                                                                <label id="hiden4" style="margin-left: 40px" >โดยมี</label>
                                                                                                <input type="text"   id="input-Position4"  id="oficer_stm_car" placeholder="เป็นพนักงานขับรถ">    
                                                                                    </div>   
                                                                                </div>   
                                                              

                                            </div>
                                            <div class="demo-radio-button">
                                                            <input   name="group3" type="radio" value="ขอเช่ารถ" id="budget_ve" class="with-gap radio-col-pink">
                                                                <label for="budget_ve">ขออนุมัติเช่ารถ (ตู้ เก๋ง กระบะ)</label>
                                                                <br>
                                                                <label id="hiden5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;จำนวน</label>
                                                                <input  name="group3"  class="form-line"  type="text" id="input-Position5" id = "budget_ve_num" placeholder="จำนวนวัน" /> 
                                                                <label id="hiden6">วัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นเงิน</label>
                                                                <input  class="form-line"  type="text" id="input-Position6" id = "budget_ve_money"  placeholder="จำนวนเงิน" />   

                                            </div>

                                            <div class="demo-radio-button">
                                                            <input  name="group3" type="radio" value="รถโดยสารประจำทาง" id="bus" class="with-gap radio-col-pink">
                                                                <label for="bus">รถโดยสารประจำทาง</label>
                                            </div>
                                            <div class="demo-radio-button">
                                                            <input name="group3" type="radio" id="car_ve" value="รถส่วนตัว" class="with-gap radio-col-pink">
                                                            <label for="car_ve">รถส่วนตัว</label>
                                                            <br>
                                                            <label id="hiden7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;หมายเลขทะเบียน&nbsp;&nbsp;</label>
                                                        <input  name="group3"  type="text"  id="input-Position7" id ="liceplate_car"  placeholder="หมายเลขทะเบียน" /> 
                                            </div>
                                        </div>
                                    </div>
                                            

                                            <!-- <div class="demo-radio-button">
                                                <input name="group3" type="radio" id="budget_ve" value="ขอเช่ารถ" class="with-gap radio-col-pink">
                                                <label for="budget_ve">ขออนุมัติเช่ารถ (ตู้ เก๋ง กระบะ)</label>  
                                                <br>
                                                <label id="hiden5"> จำนวน</label>
                                                <input  class="form-line"  type="text" id="input-Position5" id = "budget_ve_num" class="form-control" placeholder="จำนวนวัน" /> 
                                                
                                                <label id="hiden6">วัน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เป็นเงิน</label>
                                                <input  class="form-line"  type="text" id="input-Position6" id = "budget_ve_money" class="form-control" placeholder="จำนวนเงิน" />    
                                                
                                            </div> -->

                                            <!-- <div class="demo-radio-button">
                                                <input name="group3" type="radio" id="car_ve" value="รถส่วนตัว" class="with-gap radio-col-pink">
                                                <label for="car_ve">รถส่วนตัว</label>
                                                <br>
                                                <label id="hiden7">หมายเลขทะเบียน&nbsp;&nbsp;</label>
                                               <input  name="group3"  class="form-line"  type="text"  id="input-Position7" id ="liceplate_car" class="form-control" placeholder="หมายเลขทะเบียน" /> 
                                            </div> -->
                                            
                                             <!-- <div class="demo-radio-button">
                                                <input name="group3" type="radio" id="car_no" value="ไม่มีรถราชการสนับสนุน" class="with-gap radio-col-pink">
                                                <label for="car_no">ไม่มีรถราชการสนับสนุน</label>
                                                <br>
                                                
                                               
                                            </div> -->
                                           
                                           
                              
                                <div class="modal-footer">

                                    <div style="" class="col-lg-4 col-md-2 col-sm-3 col-xs-5 form-control-label-l">
                                        <b>หมายเหตุ :</b><label style="color:red;">*</label>ต้องกรอกข้อมูลให้สมบูรณ์</label>
                                    </div>	

                                    <button type="button" class="btn btn-primary waves-effect" onclick="javascript: addmeet('APM')">บันทึก</button>
                                    <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">ยกเลิก</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Script -->
        <?php include ("../../PS_script/personnal/meet_addData.php"); ?>
    </body>
</html>