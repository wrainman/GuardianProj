<?
include_once 'include/processes.php';
$Login_Process = new Login_Process;
$Login_Process -> check_status($_SERVER['SCRIPT_NAME']);
$courseSel = $_POST['cselected']
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>My Pass</title>
<link href="include/style.css" rel="stylesheet" type="text/css">

<body>
<h1>
	Welcome <? echo $_SESSION['username']; ?>, thanks for loging in to your pass
</h1>

<div class="jumbotron">
<div class="container-fluid">
      <h2>MY PASS</h2>
      <p>This is your pass!!</p>                                                                                      
      <div class="table-responsive">          
      <table class="table">
        <thead>
          <tr>
            <th><h3><? echo $_SESSION['username']; ?></h3></th>
          </tr>
        </thead>
        <tbody>
          <tr>
          	<td><h3>Email Address: </h3></td>
            <td><h3><? echo $_SESSION['email_address']; ?></h3></td>
          </tr>
          <tr>
          	<td><h3>First Name: </h3></td>
            <td><h3><? echo $_SESSION['first_name']; ?></h3></td>
          </tr>
          <tr>
          	<td><h3>Last Name: </h3></td>
            <td><h3><? echo $_SESSION['last_name']; ?></h3></td>
          </tr>
          <tr>
          	<td><h3>Codes Entered*mabey*: </h3></td>
            <td><h3><? echo $_SESSION['info']; ?></h3></td>
          </tr>     
          <tr>
          	<td><h3>Course: </h3></td>
            <td><h3><? echo $courseSel; ?></h3></td>
          </tr>   
        </tbody>
      </table>
      </div>
    </div>
</div>
<div>
	<button onClick="window.print()">Print this page</button>
	<?
	echo "\t";
	?>
	<a href="main.php">Home</a>
</div>
</body>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

</html>
