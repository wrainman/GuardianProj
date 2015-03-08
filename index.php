<?php
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_login($_GET['page']);
$Login = $Login_Process->log_in($_POST['user'], $_POST['pass'], $_POST['remember'], $_POST['page'], $_POST['submit']); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login</title>

<link href="include/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<style type="text/css">
   body { background: #66ddba; }
   h1, .h1 {
   font-size: 535%;
   margin-top: 5%;
   font-family: 'Oswald', sans-serif;
   color: #ffa500;}
   .jumbotron, .jumbotron h1, .jumbotron .h1 {
   background-color: #66ddba;
   width: 100%;
   padding: 1%;
   margin-top: 0%;
   font-size: 200%;
   color: black;
   margin-bottom: 0;}
   .form-control {
   width:75% } 
</style>
<head>

<div class="jumbotron">
<div class="container-fluid">
  <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
  <img src="sdgMainr.gif" style="margin-top:0%; margin-botton: 0%; margin-left:1px;" alt="Smiley face" class="imgSDG" height="25%" width="25%">
  <tr>
    <td><strong><h1>The South Dakota Guardianship Program, Inc.</h1></strong></td>
  </tr>
</div>
</div>
</head>

<body>
<div class="container-fluid">
<form method="post" class="bg" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >

<div class="container-fluid">
<div align="center">
<font id="h1">Log into your account</font>
</br> <h3>OR<h3>
<h2>Sign Up Below!</h2>

<div class="red">
<?php echo $Login; ?></div>
<br />

  <span id="sizing-addon1">Username</span>
  <input type="text" id="user" name="user" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
<br />

  <span id="sizing-addon1">Password</span>
  <input type="password" id="pass"  name="pass" class="form-control" placeholder="*********" aria-describedby="sizing-addon2">

<div class="right">
<label>Remember Me</label>
<input name="remember" type="checkbox" value="true" />
</div>

<input name="page" type="hidden" value="<? echo $_GET['page']; ?>" />
<div class="text-center">
<input name="submit" type="submit" class="btn-lg" value="Log In" />
</div>

<br />
<div class="center">
<a href="forgotpassword.php"><strong>Password Recovery</strong></a> | <a href="register.php"><strong>Sign Up</strong></a>
</div>  <!--container-fluid end -->
<br />
<br />

<?php
 Echo "<h5><a href=http://www.sdguardians.com/>Copyright 2011.The Guardianship Program, Inc. All Rights Reserved.</a></h5>"
?>
</div> <!--end of center align -->
</div>
</div>
</form>
</body>
</html>


<!--REGISTER PORTION -->
<?
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$New = $Login_Process->Register($_POST, $_POST['process']);
?>
<style type="text/css">
.container-fluid {
	margin-left: 0;
	width: 100%;
}
h1 center {
	background-color: white;
}
</style>

<head>
<h1 class="center">Register</h1>
</head>

<body>
<div class="jumbotron">

<div class="container-fluid">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="bge">

<div class="red">
<?php  echo $New; ?>
</div>

<a name="add" id="add"></a>
<form action="<?php echo $_SERVER['PHP_SELF']."#add"; ?>" method="post"  margin-top:0px;">

<div align="center">
	<label>First Name</label>	
	<input name="first_name" type="text" class="form-control" style="width: 70%;" value="<? echo $_POST['first_name']; ?>" />
</div>
<br />
<div align="center">
	<label>Last Name</label>
	<input name="last_name" type="text" class="form-control" style="width: 70%;" value="<? echo $_POST['last_name']; ?>" />
</div>
<br />
<div align="center">      
  <label>Email Address</label>
	<input name="email_address" type="email" class="form-control" style="width: 70%;" value="<? echo $_POST['email_address']; ?>"/>
</div>
<br />
<br />
<div align="center">
        <label>Code</label>
	<input name="info" type="text" class="form-control" style="width: 70%;" value="<? echo $_POST['info']; ?>"/>
</div>
<br />
<div align="center">
        <lable>Username</lable>
	<input name="username" type="text" class="form-control" style="width: 70%;" value="<? echo $_POST['username']; ?>"/>
</div>
<br />
<div align="center">
	<lable>Password</lable>
	<input name="pass1" type="password" class="form-control" style="width: 70%;" value="<? echo $_POST['pass1']; ?>"/>
</div>
<br />
<div align="center">
        <lable>Confirm password</lable>
	<input name="pass2" type="password" class="form-control" style="width: 70%;" value="<? echo $_POST['pass2']; ?>"/>
<br />

<div class="form-actions">
<input name="process" class="btn btn-large btn-info" type="submit" id="process" value="Add User" />

<!-- Button trigger modal -->
<button type="button" class="btn" data-toggle="modal" data-target="#myModal">
  Terms
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>
	<h1>HELLO<h1>
	<p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>
</form>
</div>  <!-- jumbotron -->
</body>
