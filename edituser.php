<?
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);
$Edit = $Login_Process->edit_details($_POST, $_POST['process']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Edit user information</title>

<body>

<div class="container-fluid">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<div class="right" style="margin-top:-8px; margin-right:-6px;"><a href="main.php">Home</a></div>
<h1>Edit Account Details</h1>
<div class="red"><?php echo $Edit; ?></div>

<div class="label" style="text-align: left;"><h3>First Name: </h3></div>
<input name="first_name" type="text" class="form-control" value="<? echo $_SESSION['first_name']; ?>" />

<div class="label" style="text-align: left;"><h3>Last Name: </h3></div>
<input name="last_name" type="text" class="form-control" value="<? echo $_SESSION['last_name']; ?>" />

<div class="label" style="text-align: left;"><h3>Email Address: </h3></div>
<input name="email_address" type="text" class="form-control" value="<? echo $_SESSION['email_address']; ?>" />

<br />
<div class="right">
<input name="username" type="hidden" id="username" value="<? echo $_SESSION['username']; ?>" />
<input name="process" type="submit" class="textfield" value="Save Changes" id="process"/>
</div>
</div> <!-- end container -->
</form>
</body>


<link href="include/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
