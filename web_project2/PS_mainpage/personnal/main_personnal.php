<?php
@ob_start();
@session_start();
include_once("../../connect/connect_DB_personal.php");
include '../../common/header.php';

if (!isset($_POST['ch_new'])) {
    $_POST['ch_new'] = '';
} else {
    if (($_POST['img'] != '0') && ($_POST['img'] != '')) {
        $_SESSION["pro_picture"] = $_POST['img'];
    }
    $_SESSION["name"] = $_POST['name'];
    $_SESSION["card_id"] = $_POST['card_id'];
    if (isset($_POST['fullname'])) {
        $_SESSION["fullname"] = $_POST['fullname'];
    }
    $_SESSION["class_id"] = $_POST['class_id'];
    $cn = new management;
    $cn->con_db();
    $class_id = $_POST['class_id'];
    $sql_class_name = "SELECT class_name FROM ps_class WHERE class_id = '$class_id'";
    $query_class_name = $cn->Connect->query($sql_class_name);
    while ($rs_class_name = mysqli_fetch_array($query_class_name)) {
        $_SESSION["class_name"] = $rs_class_name['class_name'];
    }
    $_SESSION["pos_id"] = $_POST['pos_id'];
    $_SESSION["dep_id"] = $_POST['dep_id'];
    $_SESSION["lvb_id"] = $_POST['lvb_id'];
    if (isset($_POST['tel'])) {
        $_SESSION["tel"] = $_POST['tel'];
    }
}
?>
﻿<!DOCTYPE html>
<html>
    <body class="theme-green">
        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- #END# Page Loader -->
        <!-- Overlay For Sidebars -->
        <div class="overlay"></div>
        <!-- #END# Overlay For Sidebars -->
        <!-- Search Bar -->
        <div class="search-bar">
            <div class="search-icon">
                <i class="material-icons">search</i>
            </div>
            <input type="text" placeholder="START TYPING...">
            <div class="close-search">
                <i class="material-icons">close</i>
            </div>
        </div>
        <!-- #END# Search Bar -->
        <!-- Top Bar -->
        <!-- Top Bar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="../../index.php" style="padding: 8px 15px;">
                        <span>
                            <img class="logo-head" />
                            สำนักงานกรมป้องกันควบคุมโรคที่ 6 จังหวัดชลบุรี
                        </span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <!-- #END# Call Search -->
                        <!-- Login -->
                        <li class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="material-icons">view_list</i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">System option</li>
                                <li data-toggle="modal" data-target="#change_pass"><a href="javascript:void(0);"><i class="material-icons link_log">assignment_ind</i>Change Password</a></li>
                                <li><a href="../../js/logout.php"><i class="material-icons">exit_to_app</i>Sign Out</a></li>
                            </ul>
                        </li>
                        <!-- #END# Login -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 m-t-10">
                            <div class="list-unstyled aniimated-thumbnials">
                                <a href="<?php
                                if (($_SESSION['pro_picture'] != '') || ($_POST['ch_new'] != '')) {
                                    if ($_POST['ch_new'] != '') {
                                        echo $_POST['ch_new'];
                                    } else {
                                        echo $_SESSION['pro_picture'];
                                    }
                                } else {
                                    echo '../../images/img-profile/no_img.png';
                                }
                                ?>" id="zoom" data-sub-html="รูปประจำตัว">
                                    <img class="img-responsive thumbnail" id="blah" src="<?php
                                    if ($_SESSION['pro_picture'] != '') {
                                        echo $_SESSION['pro_picture'];
                                    } else {
                                        echo '../../images/img-profile/no_img.png';
                                    }
                                    ?>" style="height: 80px; width: 110px;"alt="User">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                            <div class="info-container">
                                <div class="name font-bold" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name']; ?></div>
                                <div class="font-bold email"><?php echo $_SESSION['class_name']; ?></div>
                                <div class="font-bold col-light-green">Online</div>
                            </div><br>
                            <div class="col-white user-helper-dropdown m-l-110 m-t-10">
                                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="person_DataProfile.php"><i class="material-icons">person</i>ข้อมูลส่วนตัว</a></li>
                                    <li data-toggle="modal" data-target="#change_pass"><a href="javascript:void(0);"><i class="material-icons">assignment_ind</i>เปลี่ยนรหัสผ่าน</a></li>
                                    <li><a href="../../js/logout.php"><i class="material-icons">input</i>ออกจากระบบt</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="active">
                            <a href="../../PS_mainpage/personnal/person_DataProfile.php">
                                <i class="material-icons">home</i>
                                <span>ข้อมูลส่วนตัว</span>
                            </a>
                        </li>

                        <?php if ($_SESSION['level'] == '1') { ?>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <div class="image">
                                        <img class="logo-head-person"/> 
                                    </div>
                                    <span>จัดการบุคลากร</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="person_manageBasic.php"><img class="logo-data-basic"/> 
                                            <span>จัดการข้อมูลพื้นฐาน</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="person_addData.php"><img class="logo-add-person"/> 
                                            <span>จัดการข้อมูลบุคลากร</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="person_setting.php"><img class="logo-setting-person"/> 
                                            <span>ตั้งค่าสิทธิ์เข้าใช้งาน</span>
                                        </a>
                                    </li>
                                    <!--                                <li>
                                                                        <a href="javascript:void(0);" class="menu-toggle">
                                                                            <img class="logo-setting-person"/> 
                                                                            <span>ตั้งค่าการใช้งานระบบ</span>
                                                                        </a>
                                                                        <ul class="ml-menu">
                                                                            <li>
                                                                                <a href="person_setting.php">
                                                                                    <img class="logo-setting1-person"/> 
                                                                                    <span>ตั้งค่าผู้ใช้งานระบบ</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="person_authority.php">
                                                                                    <img class="logo-setting2-person"/> 
                                                                                    <span>ตั้งค่าสิทธิ์เข้าใช้งาน</span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </li>-->
                                </ul>

                            </li>
                        <?php } ?>
                        <?php if (($_SESSION['lvb_claim'] != '9') && ($_SESSION['lvb_claim'] != NULL) && ($_SESSION['lvb_claim'] != '') && ($_SESSION['level'] != '1')) { ?>
                            <li>
                                <a href="person_addData.php"><img class="logo-data-person"/> 
                                    <span>ข้อมูลบุคลากร</span>
                                </a>
                            </li>
                        <?php } ?>
                        <li>
                            <a href="person_GovernmentHouse.php" >
                                <div class="image">
                                    <img class="logo-head-Government_House"/> 

                                </div>
                                <span>ทำเนียบบุคลากร</span>
                            </a>
                        </li>
                        <li>
                            <a href="report_power.php">
                                <div class="image">
                                    <img src="../../images/calculation.png" width="40" height="40" alt="User" /> 
                                </div>
                                <span>กรอบอัตรากำลัง</span>
                            </a>	
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <div class="image">
                                    <img src="../../images/leaves.png" width="40" height="40" alt="User" /> 
                                </div>
                                <span>การลา</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <div class="image">
                                        <a href="leave_history.php">
                                            <img src="../../images/doleave.png" width="25" height="25" alt="User" /> 
                                            <span>ทำเรื่องการลา</span>
                                        </a>
                                    </div>
                                </li>
                                <li>

                                    <div class="image">
                                        <a href="leaves_approv.php"><img src="../../images/approval.png" width="25" height="25" alt="User" /> 
                                            <span>อนุมัติ</span>
                                            <?php
                                            $cn = new management;
                                            $cn->con_db();
                                            $sql = "SELECT * FROM ps_leaverelax WHERE status_leaves = '0'";
                                            $rs = $cn->mysqli_num_rows($sql);
                                            if ($rs > '99') {

                                                echo '99+';
                                            } else {
                                                if ($rs != '0') {
                                                    echo '<span style="color: white; width: 4em; margin-left: 6em;" class="badge bg-red">' . $rs . '</span>';
                                                }
                                            }
                                            ?></a>

                                    </div>

                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                        <div class="image">
                                            <img src="../../images/calculation.png" width="25" height="25" alt="User" /> 

                                            <span>ตรวจสอบสถานะเเละพิมพ์ฟอร์ม</span>
                                        </div>
                                    </a> 
                                    <ul class="ml-menu">
                                        <li> 
                                            <div class="image" >
                                                <a href="check_status.php"><img src="../../images/printer.png" width="25" height="25" alt="User" /> 
                                                    <span>ตรวจสอบสถานะการลาพักผ่อน</span></a>
                                            </div>
                                        </li>
                                        <li> 
                                            <div class="image" >
                                                <a href="check_status2.php"><img src="../../images/printer.png" width="25" height="25" alt="User" /> 
                                                    <span>ตรวจสอบสถานะการลาป่วย ลาคลอดบุตร ลากิจส่วนตัว </span></a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="image">
                                        <a href="leave_history.php"><img src="../../images/leave.png" width="25" height="25" alt="User" /> 
                                            <span>ประวัติการลา</span></a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <div class="image">
                                    <img src="../../images/writing.png" width="40" height="40" alt="User" /> 
                                </div>
                                <span>รายงาน</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <a href="report_personnal.php">
                                        <!--class="menu-toggle"-->
                                        <span>รายงานบุคลากร</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="report_position.php">
                                        <!--class="menu-toggle"-->
                                        <span>รายงานตำเเหน่ง</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!--                        <li>
                                                    <a href="javascript:void(0);" class="menu-toggle">
                                                        <div class="image">
                                                            <img src="../../images/lecture.png" width="40" height="40" alt="User" /> 
                                                        </div>
                                                        <span>อบรม สัมนา ดูงาน</span>
                                                    </a>
                                                    <ul class="ml-menu">
                                                        <li>
                                                            <div class="image">
                                                                <a><img src="../../images/notes.png" width="30" height="30" alt="User" /> 
                                                                    <span>หลักสูตรการอบรม</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="image">
                                                                <a><img src="../../images/ereader.png" width="30" height="30" alt="User" /> 
                                                                    <span>ทำเรื่องไปอบรม</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="image">
                                                                <a><img src="../../images/printer.png" width="30" height="30" alt="User" /> 
                                                                    <span>ตรวจสอบสถานะเเละพิมพ์ฟอร์ม</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="image">
                                                                <a><img src="../../images/report.png" width="30" height="30" alt="User" /> 
                                                                    <span>รายงานการอบรม</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>-->

                        <li>
                            <a href="superannuate.php" >
                                <div class="image">
                                    <div class="logo-head-retirement"></div>
                                </div>
                                <span>เกษียณอายุราชการ</span>
                            </a>

                        </li>
                        <li>
                            <a href="javascript:void(0);" class="menu-toggle">
                                <div class="image">
                                    <img src="../../images/lecture.png" width="40" height="40" alt="User" /> 
                                </div>
                                <span>อบรม สัมนา ดูงาน</span>
                            </a>
                            <ul class="ml-menu">
                                <li>
                                    <div class="image">
                                        <a href="meeting_report.php"><img src="../../images/notes.png" width="30" height="30" alt="User" /> 
                                            <span>หลักสูตรการอบรม</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="image">
                                        <a href="tranning_form.php"><img src="../../images/ereader.png" width="30" height="30" alt="User" /> 
                                            <span>ทำเรื่องการเดินทางไปราชการ</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="image">
                                        <a href="meeting_approv.php"><img src="../../images/printer.png" width="30" height="30" alt="User" /> 
                                            <span>จัดการการเดินทางไปราชการ (สำหรับหัวหน้างาน)</span></a>
                                    </div>
                                </li>
                                <li>
                                    <div class="image">
                                        <a href="meeting_approv_Director.php"><img src="../../images/printer.png" width="30" height="30" alt="User" /> 
                                            <span>จัดการการเดินทางไปราชการ(ผู้อำนวยการ)</span></a>
                                    </div>
                                </li>
                                <li>

                                    <div class="image">
                                        <a href="meeting_status.php"><img src="../../images/report.png" width="30" height="30" alt="User" /> 
                                            <span>ตรวจสอบสถานะเเละรายงานการเดินทางไปราชการ</span></a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        new. version(2018) <a href="javascript:void(0);">Personnal System</a>.
                    </div>
                    <div class="version">
                        <b>Version: </b> 1.55
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->

        </section>
        <!--Change Pass-->
        <div class="modal fade" id="change_pass" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title font-bold col-pink font-18 align-center" id="defaultModalLabel">เปลี่ยนรหัสผ่าน</h4>
                    </div>
                    <div class="modal-body">
                        <div class="card">
                            <div class="body">

                                <form id="ch_pass" method="POST">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" id="cp_username" placeholder="Acount ผู้ใช้งาน" required autofocus>
                                            <label style="display:none" id="error-username-cp" class="error">รหัสผู้ใช้งานไม่ถูกต้อง</label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="old_pass" placeholder="รหัสผ่านเก่า" required>
                                            <label style="display:none" id="error-old-pass" class="error">รหัสผ่านไม่ถูกต้อง</label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="cp_password" minlength="6" placeholder="รหัสผ่านใหม่" required>
                                            <label style="display:none" id="error-new-pass" class="error">รหัสผ่านไม่ตรงกัน</label>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="password" class="form-control" id="confirm" minlength="6" placeholder="ยืนยันรหัสผ่านใหม่" required>
                                            <label style="display:none" id="error-confirm-pass" class="error">รหัสผ่านไม่ตรงกัน</label>
                                        </div>
                                    </div>
                                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="button" onclick ="javascript: btn_chPass('CHPASS')">บันทึก</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--#End# Change Pass-->
        <?php include ("../../common/headerScript.php"); ?>
        <?php include ("../../js/script.php"); ?>
    </body>

</html>