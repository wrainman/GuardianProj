<?include_once '../include/admin_processes1.php';$Admin_Process = new Admin_Process;$Admin_Process->check_status($_SERVER['SCRIPT_NAME']);$editpass = $Admin_Process->edit_pass($_POST, $_POST['editpass']);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>AdminEditPass</title><link href="../include/style1.css" rel="stylesheet" type="text/css"><body>	<form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']."?userid=".$_GET['userid']; ?>"><h1>Edit Password : <? echo $_GET['userid']; ?></h1><div class="red"><?php  echo $editpass; ?></div><div class="label">New Password :</div><input name="pass1" type="password" class="field" /><div class="label">Confirm New :</div><input name="pass2" type="password" class="field" /><div class="right"><input name="userid" type="hidden" id="userid" value="<? echo $_GET['userid']; ?>" /><input name="editpass" type="submit" class="textfield" value="Save Changes" /></div></form>