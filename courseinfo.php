<?
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process->check_status($_SERVER['SCRIPT_NAME']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Course information</title>

<head>
<nav class="navbar navbar-inverse" style="background-color:#60e4a2; margin-bottom: 0px; border-color:#60e4a2;">
  <p style="color:white; background-color:#60e4a2; font-size:260%;">THE SOUTH DAKOTA GUARDIANSHIP</p>
</nav>
</head>

<style>
@media screen and (min-width: 381px) {
  .label{
 	font-size: 150% !important;
 }
 a{
 	font-size: 275%;
 }
 .bg{
   font-size: 175% !important;
 }
 h1{
  font-size: 350% !important;
 }
 .pic {
 	height: 19%;
 	width: 19%;
 } 
}
@media screen and (max-width: 380px) {
  .label{
 	font-size: 150% !important;
 }
 a{
 	font-size: 270%;
 }
 .bg{
   font-size: 145% !important;
 }
 h1{
  font-size: 350% !important;
 }
 .pic {
 	height: 21%;
 	width: 21%;
 } 
}
@media screen and (max-width: 358px) {
  .label{
 	font-size: 150% !important;
 }
 a{
 	font-size: 265%;
 }
 .bg{
   font-size: 140% !important;
 }
  h1{
  font-size: 325% !important;
 }
 .pic {
 	height: 25%;
 	width: 25%;
 } 
}
@media screen and (max-width: 340px) {
  .label{
 	font-size: 150% !important;
 }
 a{
 	font-size: 265%;
 }
 .bg{
   font-size: 135% !important;
 }
  h1{
  font-size: 300% !important;
 }
 .pic {
 	height: 27%;
 	width: 27%;
 } 
}
@media screen and (max-width: 330px) {
 .label{
 	font-size: 150% !important;
 }
 a{
 	font-size: 260%;
 }
 .bg{
   font-size: 130% !important;
 }
  h1{
  font-size: 200% !important;
 }
 .pic {
 	height: 29%;
 	width: 29%;
 } 
}
.container-fluid {
	padding-right: 0px !important;
	padding-left: 0px !important; 
}
</style>

<body>
<div class="container-fluid">
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<div class="right" style="margin-top:-8px; margin-right:-6px;"><a href="main.php">Home</a></div>
<h1>Course Information</h1>
<br />


<div class="table-responsive">
<table id="myTable" class="table table-striped">
    <thead>
      <tr>
	<th width="3%" align="left">Course </th>
	<th width="10%" align="left"> Info </th>
	<th width="3%" align="left"> Location </th>
	<th width="10%" align="left"> Address </th>
       	
     </tr>
    </thead>
    <tbody>

<?php
	$userid = $_SESSION['userid'];	
	$sql = "select * from (SELECT userName, userid FROM users WHERE userid = '$userid') as a
    		join (SELECT courseId, courseName, courseStipulations, courseLocation, courseAddress FROM golfcourses) as b
    		left outer join (SELECT * FROM coursesplayed) as c ON c.courseId = b.courseId AND c.userid = a.userid
    		WHERE c.userid IS NULL
    		ORDER BY b.courseId"; 
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$results = $stmt->fetchAll();
	
	foreach($results as $row) 
 {
echo ' <tr class="info"> ';
echo ' <td> ';
echo $row['courseName'];
echo ' <td> ';
echo $row['courseStipulations'];
echo ' <td> ';
echo $row['courseLocation'];
echo ' <td> ';
echo $row['courseAddress'];
}
?>
  </tbody>
 </table>
</div>




</div> <!-- end container -->
</form>
</body>


<link href="include/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
