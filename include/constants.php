<?php// Database Server (localhost)define("DBHOST","localhost");// Database Usernamedefine("DBUSER","root"); // Database Passworddefine("DBPASS","");// Database Namedefine("DBNAME","sdg1");// Database Tabeldefine("DBTBLE","cw_users");# Databse Infomation try { 	$options = array(PDO::ATTR_PERSISTENT => true);    $db = new PDO('mysql:host=localhost;dbname=sdg1','root','', $options);}          catch(PDOException $ex)        {        die("Failed to connect to the database: " . $ex->getMessage());        }     $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES, false);     header('Content-Type: text/html; charset=utf-8'); /*<?php     $username = "root";     $password = "";     $host = "localhost";     $dbname = "sdg1";         $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_PERSISTENT => true);     try {  		$db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options); } 	    	catch(PDOException $ex) *  	{  * 		die("Failed to connect to the database: " . $ex->getMessage());}      *  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);     header('Content-Type: text/html; charset=utf-8');  ?> *  *  */# Location Infomation// Path of script with trailing slashes-- Path issues with main.phpdefine("Script_Path","/GuardianProjtest/");// URL of script (no trailing slash)define("Script_URL","http://www.loganwray.ae/");# System Infomation// System Namedefine("Site_Name","Guardianship");// Name on system emailsdefine("Email_From","wrainman");// Webmaster email addressdefine("Email_Address","webmaster@sdguardians.com");// Dont reply email addressdefine("Non_Reply","webmaster@sdguardians.com");# Session and Cookie Infomation// Session Lifetimr in Secondsdefine("Session_Lifetime", 60*60);              // Cookie names--security probably changedefine("CKIEUS","USERNAME");              define("CKIEPS","PASSWORDMD5");              # System Settings// Require admin approvial for new usersdefine("Admin_Approvial", false); // true or false?>