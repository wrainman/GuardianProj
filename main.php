<?
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>User interface</title>
<link href="include/style.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<head>
<style type="text/css">
html, body {
   margin-bottom: 1%; 
   height: 100%;
   background: #66ddba; }
form { border-radius: 4%;}
h1, .h1 {
   font-size: 200%;
   font-family: 'Oswald', sans-serif;
   color: #ffa500;}
.jumbotron, .jumbotron h1, .jumbotron .h1 {
   background-color: #DD7E66;
   width: 50%;
   padding: 1%;
   margin-top: 0%;
   font-size: 230%;
   color: black;
   margin-bottom: 0;}
.panel-primary {
   width: 70%;
}
h4, .h4 {
font-size: 200%;
}
.btn .btn-block {
 width: 90%;
 margin-left: auto;
}
.signOutbtn{
    float: right;
}
.btn-primary {
 font-size: x-large;
}
.page-header {
   border-bottom: 2px solid blue;}
   @media (max-width: 768px) {
  .nav-justified > li {
    display: table-cell;
    width: 1%;
  }
 .nav-justified > li > a  {
    border-bottom: 1px solid #ddd !important;
    border-radius: 4px 4px 0 0 !important;
    margin-bottom: 0 !important;
  }
}
</style>
<nav class="navbar navbar-inverse">
  <p><H4 style="color:white">THE SOUTH DAKOTA GUARDIANSHIP</H4></p>
</nav>
</head>

<body>
<div class="container-fluid">
<form class="bg">
<div>
<img src="sdgMain.gif" style="height:25%;width:25%;" alt="25"/>
<div class="signOutbtn">
<a href="include/processes.php?log_out=true" class="btn btn-xlarge btn-primary">Log out</a>
</div>
</div>

<div class="page-header">
<h1>Welcome <? echo $_SESSION['first_name']; ?></h1>
<div class="red"><?php echo $_GET['alert']; ?></div>
<nav role="navigation">
 <ul class="nav nav-pills nav-justified nav-stacked">
  <li class="large" role="presentation"><a href="#">Course Information</a></li>
  <li role="presentation"><a href="edituser.php">My Information</a></li>
  <li role="presentation"><a href="#">About SD Guardians</a></li>
 </ul>
</nav>
</div>

<div class="container-fluid">
  <div class="row">
	<!-- Button trigger modal -->
	<?php 
	if($_SESSION['user_level'] == 5) {
	echo '<button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#myModal"><h1 style=margin-top: 0px;">My Pass</h1></button>';}?>
  </div>
</div>



<div class="container-fluid">

<div class="box4">
<!-- #BeginEditable "body1" -->
				

<h3>Golf Cards</h3>

	<p>Golf for Guardianship is offering you a chance to play golf at each of 
	the 87 participating golf courses.&nbsp; You can purchase a Golf card for 
	just $30.&nbsp; Gold Paks offer a discount of four cards for $100.&nbsp; Buy 
	yours today and help support a meaningful service for people with 
	disabilities.&nbsp; </p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>

<h4>Select your card</h4>
<div class="well">

	<table class="catalog" cellpadding="8" cellspacing="8" >
		<tr>	
		<td class="product" style="text-align:center; height: 319px;">
		Gold Pak<br />
		<strong>Price: $100.00</strong><br />
		<img src="Site/images/golf3.jpg" width="154" height="151" alt="gold card" />
		<p>Description: Four Golf Cards</p>

<div class="paypalbtn">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="sdguardians@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Gold Card">
<input type="hidden" name="amount" value="100.00">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="button_subtype" value="services">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</div>

 </td>
</tr>
</table>

<hr style="height: -12px" />
<p>&nbsp;</p>

<!-- #EndEditable -->
</div>
</div> <!-- well end -->
</div> <!-- container end -->











<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">My Pass</h4>
      </div>
      <div class="modal-body">
        <p>
	<h1>HELLO<h1>
	<button onClick="window.print()">Print this page</button>
	<p>
	<div>
	   <p>
		<div class="label">Username:</div>
		<div class="field"><? echo $_SESSION['username']; ?></div>
		<div class="label">Email:</div>
		<div class="field"><? echo $_SESSION['email_address']; ?></div>
		<div class="label">Name:</div>
<		div class="field"><? echo $_SESSION['first_name']; ?> <? echo $_SESSION['last_name']; ?></div>
		<div class="label">Info:</div>
		<div class="field"><? echo $_SESSION['info']; ?></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="anypage.php"><button type="button" class="btn btn-primary">Save changes</button></a>
      </div>
    </div>
  </div>
</div>
</p>

<br />
<div class="center">
<a href="edituser.php">My Account</a> | <a href="editpassword.php">My Password</a> | <a href="include/processes.php?log_out=true">Log out</a>

<?php 
if($_SESSION['user_level'] == 5) {
echo '<div><a href="admin/admin_center.php">Admin Centers</a></div>';} 
?>
</div>
</div>
</form>
</body>
