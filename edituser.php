<?
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);
$Edit = $Login_Process->edit_details($_POST, $_POST['process']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Edit user information</title>
<link href="include/style.css" rel="stylesheet" type="text/css">
<body>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<div class="right" style="margin-top:-8px; margin-right:-6px;"><a href="main.php">Home</a></div>
<h1>Edit Account Details</h1>
<div class="red"><?php echo $Edit; ?></div>

<div class="label">First Name:</div>
<input name="first_name" type="text" class="field" value="<? echo $_SESSION['first_name']; ?>" />

<div class="label">Last Name:</div>
<input name="last_name" type="text" class="field" value="<? echo $_SESSION['last_name']; ?>" />

<div class="label">Email Address:</div>
<input name="email_address" type="text" class="field" value="<? echo $_SESSION['email_address']; ?>" />

<div class="label">Username:</div>
<input name="username" type="text" class="field" value="<? echo $_SESSION['username']; ?>"  />

<div class="label">Password:</div>
<input name="password" type="text" class="field" />

<div class="right">
<input name="username" type="hidden" id="username" value="<? echo $_SESSION['username']; ?>" />
<input name="process" type="submit" class="textfield" value="Save Changes" id="process"/>
        </td>
</div>

</form>
