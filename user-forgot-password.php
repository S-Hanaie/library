<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['change']))
{
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=md5($_POST['newpassword']);
  $sql ="SELECT EmailId FROM tblstudents WHERE EmailId=:email and MobileNumber=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tblstudents set Password=:newpassword where EmailId=:email and MobileNumber=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
echo "<script>alert('رمز عبور شما با موفقیت تغییر کرد');</script>";
}
else {
echo "<script>alert('آدرس ایمیل یا شماره تلفن همراه صحیح نمی باشد');</script>"; 
}
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>سامانه آنلاین مدیریت کتابخانه|ثبت نام کاربر</title>
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

</head>
<script type="text/javascript">
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("تکرار رمز عبور با آن مطابقت ندارد");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>

<style>
  body {

text-align: right;
}

.sidebar {
float: right;
direction: rtl;
margin-right: 0;
}

.content-wrapper {
margin-right: 0;
margin-left: 0;
direction: rtl;
}

.form-control, .card-title, label {
text-align: right;
}
.card-footer {
text-align: center;
}
.card-body {
width: 100%;
}

</style>

<body class="hold-transition sidebar-mini layout-fixed">

    <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
<div class="col-md-12">
<h4 class="header-line">فراموشی رمز عبور</h4>
</div>
</div>
             
<!--LOGIN PANEL START-->           
<div class="row">
<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
<div class="panel panel-info">
<div class="panel-heading">
 ورود
</div>
<div class="panel-body">
<form role="form" name="chngpwd" method="post" onSubmit="return valid();">

<div class="form-group">
<label>ایمیل</label>
<input class="form-control" type="email" name="email" required autocomplete="off" />
</div>

<div class="form-group">
<label>شماره تلفن همراه</label>
<input class="form-control" type="text" name="mobile" required autocomplete="off" />
</div>

<div class="form-group">
<label>رمز عبور</label>
<input class="form-control" type="password" name="newpassword" required autocomplete="off"  />
</div>

<div class="form-group">
<label>تکرار رمز عبور</label>
<input class="form-control" type="password" name="confirmpassword" required autocomplete="off"  />
</div>
<div class ="col-md-8">
<button type="submit" name="change" class="btn btn-info">ثبت تغییرات</button> | <a href="index.php">ورود</a>
</div>

</form>
 </div>
</div>
</div>
</div>  
<!---LOGIN PABNEL END-->            
             
 
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
 <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
