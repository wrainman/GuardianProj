<?
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$New = $Login_Process->Register($_POST, $_POST['process']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Register Page</title>

<link href="include/style.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<body>
<div class="jumbotron">
<div class="bg"></div>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<div class="right" style="margin-top:-8px; margin-right:-6px;"><a href="main.php">Log In</a></div>

<h1 class="center">Register</h1>

<div class="red">
<?php  echo $New; ?>
</div>

<a name="add" id="add"></a>
<form action="<?php echo $_SERVER['PHP_SELF']."#add"; ?>" method="post"  margin-top:0px;">

<form role="form-inline">
<div class="input-group">
	<label for="comment">F Name</label>	
	<input name="first_name" type="text" class="form-control" value="<? echo $_POST['first_name']; ?>" />
</div>
<br />

<form role="form-inline">
<div class="input-group">
	<label for="comment">L Name</label>
	<input name="last_name" type="text" class="form-control" value="<? echo $_POST['last_name']; ?>" />
</div>
<br />

<form role="form-inline">
<div class="input-group">
        <label for="comment">Email</label>
	<input name="email_address" type="email" class="form-control" value="<? echo $_POST['email_address']; ?>"/>
</div>
<br />

<form role="form">
<div class="input-group">
        <span class="input-group-addon" id="sizing-addon1">Information</span>
	<input name="info" type="text" class="form-control" value="<? echo $_POST['info']; ?>"/>
</div>
<br />

<form role="form">
<div class="input-group">
        <span class="input-group-addon" id="sizing-addon1">Username</span>
	<input name="username" type="text" class="form-control" value="<? echo $_POST['username']; ?>"/>
</div>
<br />

<form role="form">
<div class="input-group">
	<span class="input-group-addon" id="sizing-addon1">Password</span>
	<input name="pass1" type="password" class="form-control"/>
</div>
<br />

<form role="form">
<div class="input-group">
        <span class="input-group-addon" id="sizing-addon1">Confirm password</span>
	<input name="pass2" type="password" class="form-control"/>
</div>
<br />

<div class="form-actions">
<input name="process" class="btn btn-large btn-info" type="submit" id="process" value="Add User" />
<button type="button" class="btn btn-large cbtn"><a href="index.php">Cancel</a></button>

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
        ...
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
