<?php
@ob_start();
@session_start();
if (!isset($_SESSION['card_id']) || !isset($_SESSION['username']) || !isset($_SESSION['password'])) {
    $_SESSION['card_id'] = '';
    $_SESSION['username'] = '';
    $_SESSION['password'] = '';
}
include_once("connect/connect_DB_personal.php");
?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <title>สำนักงานกรมป้องกันควบคุมโรคที่ 6 จังหวัดชลบุรี</title>
        <!-- Favicon-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core Css -->
        <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Waves Effect Css -->
        <link href="plugins/node-waves/waves.css" rel="stylesheet" />

        <!-- Animation Css -->
        <link href="plugins/animate-css/animate.css" rel="stylesheet" />

        <!-- Morris Chart Css-->
        <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

        <!-- Custom Css -->
        <link href="css/style.css" rel="stylesheet">

        <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
        <link href="css/themes/all-themes.css" rel="stylesheet" />

    </head>
    <style>
        .sidebar .menu .list a {
            padding: 0px 5px;
        }
        /*        .dropdown-menu .header{
                    min-width: 150px
                }*/
        .container-fluid{
            margin-top: -10px;
        }
        .font-menu{
            padding-top: 5px;
        }
    </style>

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
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                    <a href="javascript:void(0);" class="bars"></a>

                    <a class="navbar-brand" href="index.php">
                        <span>
                            <img src="images/logo2.png" width="45" height="35" align="absmiddle" />
                            สำนักงานกรมป้องกันควบคุมโรคที่ 6 จังหวัดชลบุรี</span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Call Search -->
                        <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                        <!-- #END# Call Search -->
                        <!--  Login -->
                        <li class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <?php if ($_SESSION['card_id'] != '') { ?>
                                    <i class="material-icons">view_list</i>
                                <?php } else { ?>
                                    <i class="material-icons">perm_identity</i>
                                <?php } ?>
                            </a>
                            <ul class="dropdown-menu">
                                <?php if ($_SESSION['card_id'] != '') { ?>
                                    <li class="header">System option</li>
                                    <li data-toggle="modal" data-target="#"><a href="javascript:void(0);"><i class="material-icons link_log">assignment_ind</i>Change Password</a></li>
                                    <li><a href="js/logout.php"><i class="material-icons">exit_to_app</i>Sign Out</a></li>
                                <?php } else { ?>
                                    <li class="header">System login</li>
                                    <li data-toggle="modal" data-target="#login"><a href="javascript:void(0);"><i class="material-icons link_log">account_circle</i>Sign in</a></li>
                                    <li data-toggle="modal" data-target="#register"><a href="javascript:void(0);"><i class="material-icons">person_add</i>Sign up</a></li>
                                <?php } ?>
                            </ul>
                        </li>
                        <!-- #END# Login -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- #Top Bar -->
        <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">สำหรับเจ้าหน้าที่</li>
                        <li class="active">
                            <a href="index.php" style="padding-top: 20px">
                                <div style="cursor: pointer; width: 90%; border-radius: 15px; background-color: #DCDCDC;" class="info-box hover-zoom-effect hover-expand-effect">
                                    <div class="icon">
                                        <i class="material-icons">home</i>
                                    </div>
                                    <div class="content">
                                        <div class="text font-menu"><h5>หน้าหลัก</h5></div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <?php if ($_SESSION['card_id'] != '') { ?>
                                <a href="PS_mainpage/main_personnal.php">
                                <?php } else { ?>
                                    <a href="#" data-toggle="modal" data-target="#login">
                                    <?php } ?> 
                                    <div style="cursor: pointer; width: 90%; border-radius: 15px; background-color: #DCDCDC;" class="info-box hover-zoom-effect hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">accessibility</i>
                                        </div>
                                        <div class="content">
                                            <div class="text font-menu"><h5>ระบบบุคลากร</h5></div>
                                        </div>
                                    </div>
                                </a>
                        </li>
                        <li>
                            <?php if ($_SESSION['card_id'] != '') { ?>
                                <a href="pages/typography.html">
                                <?php } else { ?>
                                    <a href="#" data-toggle="modal" data-target="#login">
                                    <?php } ?> 
                                    <div style="cursor: pointer; width: 90%; border-radius: 15px; background-color: #DCDCDC;" class="info-box hover-zoom-effect hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">directions_car</i>
                                        </div>
                                        <div class="content">
                                            <div class="text font-menu"><h5>ระบบจองรถ</h5></div>
                                        </div>
                                    </div>
                                </a>
                        </li>
                        <li>
                            <?php if ($_SESSION['card_id'] != '') { ?>
                                <a href="pages/helper-classes.html">
                                <?php } else { ?>
                                    <a href="#" data-toggle="modal" data-target="#login">
                                    <?php } ?> 
                                    <div style="cursor: pointer; width: 90%; border-radius: 15px; background-color: #DCDCDC;" class="info-box hover-zoom-effect hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">shopping_cart</i>
                                        </div>
                                        <div class="content">
                                            <div class="text font-menu"><h5>ระบบคุรุภัณณ์</h5></div>
                                        </div>
                                    </div>
                                </a>
                        </li>
                        <li>
                            <?php if ($_SESSION['card_id'] != '') { ?>
                                <a href="../demo-tmpmeterial/" >
                                <?php } else { ?>
                                    <a href="#" data-toggle="modal" data-target="#login">
                                    <?php } ?> 
                                    <div style="cursor: pointer; width: 90%; border-radius: 15px; background-color: #DCDCDC;" class="info-box hover-zoom-effect hover-expand-effect">
                                        <div class="icon">
                                            <i class="material-icons">build</i>
                                        </div>
                                        <div class="content">
                                            <div class="text font-menu"><h5>ระบบเเจ้งซ่อม</h5></div>
                                        </div>
                                    </div>
                                </a> 
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        <a href="javascript:void(0);">ส่วนงานอื่น ๆ </a>.
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>

        <!--   body-->
        <section class="content">
            <div class="container-fluid">
                <div class="body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="images/LogoIN1000-new.png">
                            </div>
                            <div class="item">
                                <img src="images/plan.jpg">
                            </div>
                            <div class="item">
                                <img src="images/vision.jpg">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="login-box">
                            <div class="logo" align="center">
                                <a href="javascript:void(0);" class="font-20">Personal<b>DPC6</b></a><br>
                                <small class="font-15">ล็อคอินระบบบุคลากร</small>
                            </div>
                            <div class="card">
                                <div class="body">
                                    <form id="sign_in" method="POST">
                                        <!--<div class="msg">Sign in to start your session</div>-->
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
                                                <label style="display:none" id="error-username" class="error" for="email">รหัสผู้ใช้งานไม่ถูกต้อง</label>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                                <label style="display:none" id="error-password" class="error" for="email">รหัสผ่านไม่ถูกต้อง</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 align-center">
                                            <div id="chkststus"></div>
                                        </div>
                                        <div class="row loading">
                                            <div class="col-xs-8 p-t-5">
                                                <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                                                <label for="rememberme">Remember Me</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <button class="btn btn-block bg-pink waves-effect" type="button" onclick="javascript: btn_login('LOGIN')">SIGN IN</button>
                                            </div>
                                        </div>
                                        <div class="row m-t-15 m-b--20 loading">
                                            <div class="col-xs-12 align-right">
                                                <a href="forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End login -->
        <!-- Register -->
        <div class="modal fade" id="register" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="signup-box">
                            <div class="logo">
                                <a href="javascript:void(0);">Admin<b>BSB</b></a>
                                <small>Admin BootStrap Based - Material Design</small>
                            </div>
                            <div class="card">
                                <div class="body">
                                    <form id="sign_up" method="POST">
                                        <div class="msg">Register a new membership</div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="namesurname" placeholder="Name Surname" required autofocus>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                                            </div>
                                        </div>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                                            <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                                        </div>

                                        <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">SIGN UP</button>

                                        <div class="m-t-25 m-b--5 align-center">
                                            <a href="sign-in.html">You already have a membership?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End register-->
        <!--End body-->

        <!-- Jquery Core Js -->
        <script src="plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
        <script src="plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Select Plugin Js -->
        <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Waves Effect Plugin Js -->
        <script src="plugins/node-waves/waves.js"></script>

        <!-- Jquery CountTo Plugin Js -->
        <script src="plugins/jquery-countto/jquery.countTo.js"></script>

        <!-- Sparkline Chart Plugin Js -->
        <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

        <!-- Demo Js -->
        <script src="js/demo.js"></script>

        <!-- Validation Plugin Js -->
        <script src="plugins/jquery-validation/jquery.validate.js"></script>

        <!-- Custom Js -->
        <script src="js/admin.js"></script>
        <script src="js/pages/index.js"></script>
        <script src="js/pages/ui/modals.js"></script>
        <script src="js/pages/examples/sign-in.js"></script>
        <?php include ("js/script.php"); ?>

    </body>

</html>