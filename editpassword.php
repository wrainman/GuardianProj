<?php
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);
$Edit = $Login_Process->edit_password($_POST, $_POST['process']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
@media screen and (min-width: 381px) {
  .label{
 	font-size: 150% !important;
 }
 a{
 	font-size: 275%;
 }
 .bg{
   font-size: 175% !important;
 }
 h1{
  font-size: 350% !important;
 }
 .pic {
 	height: 19%;
 	width: 19%;
 } 
}
@media screen and (max-width: 380px) {
  .label{
 	font-size: 150% !important;
 }
 a{
 	font-size: 270%;
 }
 .bg{
   font-size: 145% !important;
 }
 h1{
  font-size: 350% !important;
 }
 .pic {
 	height: 21%;
 	width: 21%;
 } 
}
@media screen and (max-width: 358px) {
  .label{
 	font-size: 150% !important;
 }
 a{
 	font-size: 265%;
 }
 .bg{
   font-size: 140% !important;
 }
  h1{
  font-size: 325% !important;
 }
 .pic {
 	height: 25%;
 	width: 25%;
 } 
}
@media screen and (max-width: 340px) {
  .label{
 	font-size: 150% !important;
 }
 a{
 	font-size: 265%;
 }
 .bg{
   font-size: 135% !important;
 }
  h1{
  font-size: 300% !important;
 }
 .pic {
 	height: 27%;
 	width: 27%;
 } 
}
@media screen and (max-width: 330px) {
 .label{
 	font-size: 150% !important;
 }
 a{
 	font-size: 260%;
 }
 .bg{
   font-size: 130% !important;
 }
  h1{
  font-size: 200% !important;
 }
 .pic {
 	height: 29%;
 	width: 29%;
 } 
}
.container-fluid {
	padding-right: 0px !important;
	padding-left: 0px !important; 
}
</style>

<title>Edit password</title>

<head>
<nav class="navbar navbar-inverse" style="background-color:#60e4a2; margin-bottom: 0px; border-color:#60e4a2;">
  <p style="color:white; background-color:#60e4a2; font-size:260%;">THE SOUTH DAKOTA GUARDIANSHIP</p>
</nav>
</head>

<body>
	
<div class="container-fluid">	
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="height: 100%;">

<div class="right" style="margin-top:-8px; margin-right:-6px;"><a href="main.php">Home</a></div>

<div class="container-fluid">
<h1>Change Password</h1>
<div class="red"><?php echo $Edit; ?></div>
<br />

<div class="label" style="color: black;">Current Pass:</div>
<input name="pass" type="password" class="form-control input-lg" />
<br />
<br />

<div class="label" style="color: black;">New Password:</div>
<input name="pass1" type="password" class="form-control input-lg" />
<br />
<br />

<div class="label" style="color: black;">Confirm New:</div>
<input name="pass2" type="password" class="form-control input-lg"/>
<br />

<div class="right">
<input name="username" type="hidden" value="<? echo $_SESSION['username']; ?>" size="50" />
<input name="process" type="submit" class="textfield" id="process" value="Save Changes"/>
</div>
</div> <!--end container -->
</form>
</div> <!--end container outer -->
</body>

<link href="include/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</html>