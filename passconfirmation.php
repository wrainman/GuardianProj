<?php
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process -> check_status($_SERVER['SCRIPT_NAME']);

$courseSel = $_POST['cselected'];
$userid = $_SESSION['userid'];
	

	$course_id = $db -> prepare("SELECT courseId FROM `golfcourses` WHERE courseName= ?");
	$course_id -> execute(array($courseSel));
	$id = $course_id -> fetchColumn();

	$query1 = $db -> prepare("INSERT INTO `coursesplayed`(`courseId`, `userid`) VALUES(:courseId, :userid)");
	$query1 -> execute(array(':courseId' => $id, ':userid' => $userid));

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>My Golfing Pass</title>
<link href="include/style.css" rel="stylesheet" type="text/css">

<head>
<nav class="navbar navbar-inverse" style="background-color:#60e4a2; margin-bottom: 0px; border-color:#60e4a2;">
  <p style="color:white; background-color:#60e4a2; font-size:260%; padding-left: 1%;"><strong>THE SOUTH DAKOTA GUARDIANSHIP</strong></p>
</nav>
</head>

<body>
<br />
<br />

<button onClick="window.print()">Print this page</button>
 <?php
  echo "\t";
 ?>
<br />
<div class="jumbotron">
<div class="container-fluid">
      <h2 class="text-danger">MY PASS</h2>                                                                                     
      <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th><h3><?php echo $_SESSION['first_name']; ?></h3> <h3><?php echo $_SESSION['last_name']; ?></h3></th>
          </tr>
        </thead>
        <tbody>
          <tr>
          	<td><h3>Email Address: </h3></td>
            <td><h3><?php echo $_SESSION['birthdate']; ?></h3></td>
          </tr>
          <tr>
          	<td><h3>First Name: </h3></td>
            <td><h3><?php echo $_SESSION['city']; ?></h3></td>
          </tr>
          <tr>
          	<td><h3>Last Name: </h3></td>
            <td><h3><?php echo $_SESSION['zipcode']; ?></h3></td>
          </tr>
          <tr>
          	<td><h3>Codes Entered*mabey*: </h3></td>
            <td><h3><?php echo $_SESSION['email_address']; ?></h3></td>
          </tr>     
          <tr>
          	<td><h3>Course: </h3></td>
            <td><h3><?php echo $courseSel; ?></h3></td>
          </tr>   
        </tbody>
      </table>
      </div>
    </div>
</div>
<div>
<button type="submit" class="btn-lg btn-block btn-success"><a href="coursesplayed.php"><h2><div class="glyphicon glyphicon-thumbs-up" style="color: white;"> Confirm </div></h2></a></div></button>
</div>
<br />
<br />
<br />

<div style="margin-bottom: 0px; margin-top: 0px; text-align: center; padding: 0px;">
<?php
 Echo "<h4><a href=http://www.sdguardians.com/>Copyright 2011.The Guardianship Program, Inc. All Rights Reserved.</a></h4>"
?>
</div>
</body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</html>


