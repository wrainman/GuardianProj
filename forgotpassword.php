<?phpinclude_once 'include/processes.php';$Login_Process = new Login_Process;$Check = $Login_Process->Forgot_Password($_GET, $_POST);$Request = $Login_Process->Request_Password($_POST, $_POST['Request']);$Reset = $Login_Process->Reset_Password($_POST, $_POST['Reset']);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title>Reguqest password reset</title><link href="include/style.css" rel="stylesheet" type="text/css"><body><?php switch($Check) {	case "<!-- !-->":?><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><div class="right" style="margin-top:-8px; margin-right:-6px;"><a href="main.php">Log In</a></div><h1>Reset Password</h1><div class="red"><?php  echo $Check.$Reset; ?></div><div class="label">New Password:</div><input name="pass1" type="password" class="field"/><div class="label">Confirm New:</div><input name="pass2" type="password" class="field"/><div class="right"><input name="username" type="hidden" id="username" value="<? echo $_GET['username']; ?>" /><input name="code" type="hidden" id="code" value="<? echo $_GET['code']; ?>" /><input name="Reset" type="submit" value="Reset Password" id="Reset"/></div></form><?php 	break;	default:?><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"><div class="right" style="margin-top:-8px; margin-right:-6px;"><a href="main.php">Log In</a></div><h1>Request Password Reset</h1><div class="red"><?php  echo $Check.$Request; ?></div><div class="label">Email Address:</div><input name="email" type="text" class="field" id="email" /><div class="label">Username:</div><input name="username" type="text" class="field" id="username" /><div class="right">  <input name="Request" type="submit" value="Request Reset Email" id="Request"/>        </td></div></form><?php }?>