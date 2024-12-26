<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fa">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>سامانه آنلاین کتابخانه | خانه</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link rel="stylesheet" href="css/forms.css">

    <style>
        .navbar-inverse {
            background-color:rgb(255, 255, 255);
            border: none;
        }
        .color-bg {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
        }
        .color-bg h1 {
            color: rgb(71, 4, 42);
            margin-bottom: 10px;
        }
        .image-container {
            width: 100px;
            height: 100px; 
            overflow: hidden;
            margin-bottom: 10px;
        }
        .image-container img {
            width: 100%; 
            height: 100%; 
            object-fit: cover; 
        }
        .right-div a {
            margin-top: 10px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">

<div class="navbar navbar-inverse set-radius-zero">
    <div class="container color-bg">
        <div class="image-container">
            <img src="assets/img/library.png" alt="Library Logo" />
        </div>
        <h1>سامانه آنلاین مدیریت کتابخانه</h1>
        <?php if($_SESSION['login']) { ?>
            <div class="right-div">
                <a href="logout.php" class="btn btn-danger">خروج</a>
            </div>
        <?php } ?>
    </div>
</div>
<?php if($_SESSION['login']) { ?>  
<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="dashboard.php" class="menu-top-active">داشبورد</a></li>
                            <li><a href="issued-books.php"> کتاب های امانت گرفته شده</a></li>
                             <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> حساب کاربری <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu bg-" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="my-profile.php">پروفایل من</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="change-password.php">تغییر رمز عبور</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <?php } else { ?>
        <section class="menu-section">
        <div class="container">

        <div class="right-div text-center">

            <div class="row">
                
                <div class="col-md-12">

                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                          
      <li><a href="index.php">خانه</a></li>
      <li><a href="index.php#ulogin">ورود کاربر</a></li>
                            <li><a href="signup.php">ثبت نام کاربر</a></li>
                         

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php } ?>
    </body>