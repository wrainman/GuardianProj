<?
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process -> check_status($_SERVER['SCRIPT_NAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>User interface</title>
<link href="include/style.css" rel="stylesheet" type="text/css">

<head>
<nav class="navbar navbar-inverse" style="background-color:#60e4a2; margin-bottom: 0px; border-color:#60e4a2;">
  <p style="color:white; background-color:#60e4a2; font-size:260%;">THE SOUTH DAKOTA GUARDIANSHIP</p>
</nav>
</head>

<body>
<div class="container-fluid">
<form class="bg">

<div>
<img src="sdgMainm.gif" class="pic"/>
	<div class="signOutbtn">
		<a href="include/processes.php?log_out=true" class="btn btn-xlarge btn-primary" style="padding: 15px 30px;">Log out</a>
	</div>
</div>

<div class="page-header">
<div class="welcome" style="font-family: oswald; width: 100%; text-align: center;">Welcome <? echo $_SESSION['first_name']; ?></div>
<div class="red"><?php echo $_GET['alert']; ?></div>
<nav role="navigation">
 <ul class="nav nav-pills nav-justified nav-stacked">
  <li class="large" role="presentation"><a href="courseinfo.php">Course Information</a></li>
  <li role="presentation"><a href="coursesplayed.php">Courses Played</a></li>
  <li role="presentation"><a href="edituser.php">My Information</a></li>
  <li role="presentation"><a href="editpassword.php">My Password</a></li>
 </ul>
</nav>
</div>

<div class="container-fluid">
  <div class="row">
	<!-- Button trigger modal -->
	<?php
	if ($_SESSION['user_level'] >= 4) {
		echo '<button type="button" class="btn btn-block btn-danger" data-toggle="modal" data-target="#myModal"><h1 style=margin-top: 0px;">My Pass</h1></button>';
	}
?>
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
	
	
<p>If you would like to make a donation to <strong>The Guardianship Program</strong>, you can
click on the DONATE button.</p>

<table class="catalog" cellpadding="8" cellspacing="8" >
<tr>
<td class="product" style="text-align:center; width: 35%; height: 319px;"><br />
		
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="sdguardians@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Golf Card">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="0.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">

<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="One Card">
<input type="hidden" name="option_amount0" value="30.00">
<input type="hidden" name="option_select1" value="Two Cards">
<input type="hidden" name="option_amount1" value="60.00">
<input type="hidden" name="option_select2" value="Three Cards">
<input type="hidden" name="option_amount2" value="90.00">
<input type="hidden" name="option_index" value="0">

<br />
</form>
</div>
</td>
								
<td class="product" style="text-align:center; height: 319px;">Gold Pak<br />
<strong>Price: $10.00</strong><br />
<img src="gb.jpg" width="154" height="151" alt="gold card" />
<p>Description: Golf Pass</p>

<div class="paypalbtn">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="sdguardians@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Gold Card">
<input type="hidden" name="amount" value="10.00">
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

<td class="product" style="text-align:center; width:35%; height: 319px;"><br />
		
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="business" value="sdguardians@gmail.com">
<input type="hidden" name="lc" value="US">
<input type="hidden" name="item_name" value="Golf Card">
<input type="hidden" name="button_subtype" value="products">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="tax_rate" value="0.000">
<input type="hidden" name="shipping" value="0.00">
<input type="hidden" name="add" value="1">
<input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">

<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="option_select0" value="One Card">
<input type="hidden" name="option_amount0" value="30.00">
<input type="hidden" name="option_select1" value="Two Cards">
<input type="hidden" name="option_amount1" value="60.00">
<input type="hidden" name="option_select2" value="Three Cards">
<input type="hidden" name="option_amount2" value="90.00">
<input type="hidden" name="option_index" value="0">

<br />
</form>
</div>
</td>

</tr>
</table>

</div> <!-- well end -->
</div> <!-- container end -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> South Dakota Guardianship </h4>
      </div>
      <div class="modal-body">
		<div class="container-fluid">
	   	<p>
  			   		
	   	<form method="post" action="passconfirmation.php" onsubmit="courseSelection()" >
	   		
	   	 
	   	 <div class="jumbotron" style="font-size: 80%; margin-bottom: 0%;">
	  
	  	 <h2 style="margin-top: 0%;">My Pass</h2>	
	  	
	 <div class="table-responsive">	
	   	<table class="table table-condensed"> 	
	   	<tr>
	   	 <td><div class="field" style="font-size:80%;"><? echo $_SESSION['birthdate']; ?></div></td>
	   	 
		 <td><div class="field" style="font-size:80%;"><? echo $_SESSION['zipcode']; ?></div></td>
		</tr>
		
		<tr>
 		 <td><div class="field" style="font-size:80%;"><? echo $_SESSION['first_name']; ?></td> 
 		 <td><? echo $_SESSION['last_name']; ?></div></td>
     	 </tr>
     	 
     	 <tr>	
     	 <td><? echo $_SESSION['email_address']; ?></td>
     	 <td><? echo $_SESSION['city']; ?></div></td>
     	</tr>
     	</table>
     </div>
     	   	 
     	 <select name="cselected" id="cselected" style="width: 100%;font-size: 130%;">
		 <?php
		$userid = $_SESSION['userid'];
		$query1 = $db -> prepare("
			select * from (SELECT userName, userid FROM users WHERE userid = '$userid') as a
    		join (SELECT courseId, courseName FROM golfcourses) as b
    		left outer join (SELECT * FROM coursesplayed) as c ON c.courseId = b.courseId AND c.userid = a.userid
    		WHERE c.userid IS NULL
    		ORDER BY b.courseId");
		$query1 -> execute();

		while ($r = $query1 -> fetch(PDO::FETCH_ASSOC)) {
			echo "<option value='" . $r['first_name'] . "'>" . $r['courseName'] . "</option>";
		}
		 ?>
		 </select> 
		 
		 <br>
		 <br>
     	 <button id="submit" type="submit" class="btn-lg"> Select this course </button> 
     	 </form> 
     	     	 
		<script>
			function courseSelection() {
				var x = document.getElementById("cselected").selectedIndex;
				var y = document.getElementById("cselected").options;
				var course = y[x].text;
				//alert(course);
				var data = {
					cselected : course
				}
				$.post('passconfirmation.php', data, function(returnData) {
					document.write(returnData);
					//document.getElementById("sel").innerHTML(returnData);
					document.close();
				});
			}
			</script>	
      	
      	</p>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <!-- <a href="passconfirmation.php"><button type="button" class="btn btn-primary">NEXT</button></a> -->
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- Modal END -->

<br />
<div class="center">
<a href="edituser.php">My Account</a> | <a href="editpassword.php">My Password</a> | <a href="include/processes.php?log_out=true">Log out</a>

<?php
if ($_SESSION['user_level'] == 5) {
	echo '<div><a href="admin/admin_center.php">Admin Centers</a></div>';
}
?>
		</div>
	  </div>
    </form>
  </div>
</body>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</html>
