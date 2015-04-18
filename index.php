<?php
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process -> check_login($_GET['page']);
$Login = $Login_Process -> log_in($_POST['user'], $_POST['pass'], $_POST['remember'], $_POST['page'], $_POST['submit']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Login</title>

<link href="include/style.css" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<head>
	
<style type="text/css">
	body {
		background: white;
	}
	h1, .h1 {
		font-size: 635%;
		margin-top: 5%;
		font-family: 'Oswald', sans-serif;
		color: #ffa500;
	}
	.jumbotron, .jumbotron h1, .jumbotron .h1 {
		background-color: #60e4a2;
		width: 100%;
		padding: 1%;
		margin-top: 0%;
		font-size: 200%;
		color: #2e2e2e;
		margin-bottom: -5px;
	}
	.form-control {
		width: 75%
	}
</style>

<div class="jumbotron" style="box-shadow: 0 8px 40px #e5e5e5;">
<div class="container-fluid">

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
  <input type="text" id="user" name="user" class="form-control input-lg" placeholder="Username" aria-describedby="sizing-addon2">
<br />

  <span id="sizing-addon1">Password</span>
  <input type="password" id="pass"  name="pass" class="form-control input-lg" placeholder="*********" aria-describedby="sizing-addon2">

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
<a href="forgotpassword.php"><strong>Password Recovery</strong></a> | <a href="#reg"><strong>Sign Up</strong></a>
</div>  <!--container-fluid end -->
<br />
<br />

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
$New = $Login_Process -> Register($_POST, $_POST['process']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style type="text/css">
	.container-fluid {
		margin-left: 0;
		width: 100%;
	}
	h1 center {
		background-color: white;
	}
	element.style {
	}
	.bge {
		width: 100%;
		padding: 5%;
	}
	form {
		border-radius: 4%;
		border: white;
	}
	label {
		font-size: 120%;
	}
</style>

<body style="margin-bottom: 0px; margin-top: 0px;">
	
<a name="reg"><a>
	
<div class="jumbotron" style="background-color: #ebeff0; color: #2491EA; box-shadow: 0 80px 100px #e5e5e5;">

<h2 class="center" style="margin-bottom: 0px; background-color: #ebeff0;">Register</h2>
<div class="container-fluid" style="background-color: #ebeff0;">
	
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="bge" style="background-color: #ebeff0;">
<div class="red">
<?php  echo $New; ?>
</div>

<!--<a name="add" id="add"></a>-->
<form action="<?php echo $_SERVER['PHP_SELF'] . "#add"; ?>" method="post"  margin-top:0px;">
<br />
<div align="center">
	<label>First Name</label>	
	<input name="first_name" type="text" class="form-control input-lg" style="width: 70%;" value="<? echo $_POST['first_name']; ?>" />

<br />
<div align="center">
	<label>Last Name</label>
	<input name="last_name" type="text" class="form-control input-lg" style="width: 70%;" value="<? echo $_POST['last_name']; ?>" />
</div>
<br />
<div align="center">      
  	<label>Email Address</label>
	<input name="email_address" type="email" class="form-control input-lg" style="width: 70%;" value="<? echo $_POST['email_address']; ?>"/>
</div>
<br />
<div align="center">
    <label>Birthdate</label>
    <br />
	<input name="birthdate" type="date" class="form-control input-lg" style="width: 70%; font-size: 130%;" value="<? echo $_POST['birthdate']; ?>"/>
</div>
<br />
<div align="center">
    <label>City</label>
	<input name="city" type="text" class="form-control input-lg" style="width: 70%;" value="<? echo $_POST['city']; ?>"/>
</div>
<br />
<div align="center">
    <label>Zip Code</label>
	<input name="zipcode" type="number" class="form-control input-lg" style="width: 70%;" value="<? echo $_POST['zipcode']; ?>"/>
</div>
<br />
<div align="center">
    <label>Username</label>
	<input name="username" type="text" class="form-control input-lg" style="width: 70%;" value="<? echo $_POST['username']; ?>"/>
</div>
<br />
<div align="center">
	<label>Password</label>
	<input name="pass1" type="password" class="form-control input-lg" style="width: 70%;" value="<? echo $_POST['pass1']; ?>"/>
</div>
<br />
<div align="center">
    <label>Confirm password</label>
	<input name="pass2" type="password" class="form-control input-lg" style="width: 70%;" value="<? echo $_POST['pass2']; ?>"/>
</div>
<br />
<div align="center">
    <label>Code</label>
	<input name="code" type="text" class="form-control input-lg" style="width: 70%;" value="<? echo $_POST['code']; ?>"/>
</div>

<br />
<br />
<div class="form-actions">
<input name="process" style="font-size: 100%;" class="btn btn-large btn-info" type="submit" id="process" value="Add User" />

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
</div>
</div>  <!-- container -->

<br />

<div class="container text-center" style="width: 85%;">
<div class="well" style="margin-bottom: 0px; margin-top: 0px; text-align: center; padding: 0px;">
<?php
 Echo "<h4><a href=http://www.sdguardians.com/>Copyright 2011.The Guardianship Program, Inc. All Rights Reserved.</a></h4>"
?>
</div>
</div>
</div> 	<!-- jumbotron -->
</body>
</html>
