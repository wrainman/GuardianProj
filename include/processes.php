<?phperror_reporting(E_ERROR | 0);include 'constants.php';include 'mail.php';if (isset($_GET['log_out'])) {	$Login_Process = new Login_Process;	$Login_Process -> log_out($_SESSION['username'], $_SESSION['password']);}class Login_Process {	var $cookie_user = CKIEUS;	var $cookie_pass = CKIEPS;	function connect_db() {		$conn_str = mysql_connect(DBHOST, DBUSER, DBPASS);		mysql_select_db(DBNAME, $conn_str) or die('Could not select Database.');	}	function query($sql) {		$this -> connect_db();		$sql = mysql_query($sql);		$num_rows = mysql_num_rows($sql);		$result = mysql_fetch_assoc($sql);		return array("num_rows" => $num_rows, "result" => $result, "sql" => $sql);	}	function welcome_note() {		ini_set("session.gc_maxlifetime", Session_Lifetime);		session_start();		if (isset($_COOKIE[$this -> cookie_user]) && isset($_COOKIE[$this -> cookie_pass])) {			$this -> log_in($_COOKIE[$this -> cookie_user], $_COOKIE[$this -> cookie_pass], 'true', 'false', 'cookie');		}		if (isset($_SESSION['username'])) {			return "<a href=\"" . Script_URL . Script_Path . "main.php\">Welcome " . $_SESSION['first_name'] . "</a>";		} else {			return "<a href=\"" . Script_URL . Script_Path . "index.php\">Welcome Guest, Please Login</a>";		}	}	function check_login($page) {		ini_set("session.gc_maxlifetime", Session_Lifetime);		session_start();		if (isset($_COOKIE[$this -> cookie_user]) && isset($_COOKIE[$this -> cookie_pass])) {			$this -> log_in($_COOKIE[$this -> cookie_user], $_COOKIE[$this -> cookie_pass], 'true', $page, 'cookie');		} else if (isset($_SESSION['username'])) {			if (!$page) { $page = Script_Path . "main.php";			}			header("Location: http://" . $_SERVER['HTTP_HOST'] . $page);		} else {			return true;		}	}	function check_status($page) {		ini_set("session.gc_maxlifetime", Session_Lifetime);		session_start();		if (!isset($_SESSION['username'])) {			header("Location: http://" . $_SERVER['HTTP_HOST'] . Script_Path . "index.php?page=" . $page);		}	}	function log_in($username, $password, $remember, $page, $submit) {		try {			$options = array(PDO::ATTR_PERSISTENT => true);			$db = new PDO('mysql:host=localhost;dbname=SDG', 'root', '', $options);		} catch(PDOException $ex) {			die("Failed to connect to the database: " . $ex -> getMessage());		}		$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		$db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC, false);		header('Content-Type: text/html; charset=utf-8');		if (isset($submit)) {			if ($submit !== "cookie") {				$password = sha1($password);			}			$sql = "SELECT * FROM users WHERE username= :username AND password= :password";			$query1 = $db -> prepare($sql);			$query1 -> bindValue(':username', $username, PDO::PARAM_STR);			$query1 -> bindValue(':password', $password, PDO::PARAM_STR);			$query1 -> execute();			//$query = $this -> query("SELECT * FROM " . DBTBLE . " WHERE username='$username' AND password='$password'");			//  $query1->rowCount() == ;			if ($query1 -> rowCount() == 1) {				$this -> set_session($username, $password);				if (isset($remember)) {					$this -> set_cookie($username, $password, '+');				}			} else {				return "Username or Password not recognized.";			}			$sql = "UPDATE " . DBTBLE . " SET last_loggedin = '" . date("d/m/y G:i:s") . "' WHERE username = :username";			$query1 = $db -> prepare($sql);			$query1 -> bindValue(':username', $username, PDO::PARAM_STR);			$query1 -> execute();			if (!$page) { $page = Script_Path . "main.php";			}			if ($page == 'false') {				return true;			} else {				header("Location: http://" . $_SERVER['HTTP_HOST'] . $page);			}		}	}	function set_session($username, $password) {		//$obj = $db->query(		$query = $this -> query("SELECT * FROM " . DBTBLE . " WHERE username='$username' AND password='$password'");		ini_set("session.gc_maxlifetime", Session_Lifetime);		session_start();		$_SESSION['first_name'] = $query['result']['first_name'];		$_SESSION['last_name'] = $query['result']['last_name'];		$_SESSION['email_address'] = $query['result']['email_address'];		$_SESSION['username'] = $query['result']['username'];		$_SESSION['code'] = $query['result']['code'];		$_SESSION['user_level'] = $query['result']['user_level'];		$_SESSION['password'] = $query['result']['password'];		$_SESSION['userid'] = $query['result']['userid'];		$_SESSION['city'] = $query['result']['city'];		$_SESSION['zipcode'] = $query['result']['zipcode'];		$_SESSION['birthdate'] = $query['result']['birthdate'];	}	function set_cookie($username, $password, $set) {		if ($set == "+") { $cookie_expire = time() + 60 * 60 * 24 * 30;		} else { $cookie_expire = time() - 60 * 60 * 24 * 30;		}		setcookie($this -> cookie_user, $username, $cookie_expire, '/');		setcookie($this -> cookie_pass, $password, $cookie_expire, '/');	}	function log_out($username, $password, $header) {		session_start();		session_unset();		session_destroy();		$this -> set_cookie($username, $password, '-');		if (!isset($header)) {			header('Location: ../index.php');		} else {			return true;		}	}	function edit_details($post, $process) {		if (isset($process)) {			$first_name = $post['first_name'];			$last_name = $post['last_name'];			$email_address = $post['email_address'];			$code = $post['code'];			$username = $post['username'];			$password = $_SESSION['password'];			/*			 $zipcode = $post['zipcode'];			 $birthdate = $post['birthdate'];			 */			//$obj = $db->query(			$this -> query("UPDATE " . DBTBLE . " SET first_name = '$first_name', last_name = '$last_name', 			email_address = '$email_address', code = '$code', username = '$username' WHERE username = '$username'");			$this -> set_session($username, $password);			if (isset($_COOKIE[$this -> cookie_pass])) { $this -> set_cookie($username, $pass, '+');			}			return "Details sucessfully changed.";		}	}	function edit_password($post, $process) {		if (isset($process)) {			$pass1 = $post['pass1'];			$pass2 = $post['pass2'];			$password = $post['pass'];			$username = $post['username'];			if ((!$password) || (!$pass1) || (!$pass2)) {				return "Missing required details.";			}			if (sha1($password) !== $_SESSION['password']) {				return "Current password is incorrect.";			}			if ($pass1 !== $pass2) {				return "New passwords do not match.";			}			$new = sha1($pass1);			//$obj = $db->query(			$this -> query("UPDATE " . DBTBLE . " SET password = '$new' WHERE username = '$username'");			$this -> set_session($username, $new);			if (isset($_COOKIE[$this -> cookie_pass])) { $this -> set_cookie($username, $pass, '+');			}			return "Password update successfull.";		}	}	function Register($post, $process) {		 try {                        $options = array(PDO::ATTR_PERSISTENT => true);                        $db = new PDO('mysql:host=localhost;dbname=SDG', 'root', '', $options);                } catch(PDOException $ex) {                        die("Failed to connect to the database: " . $ex -> getMessage());                }                $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC, false);                header('Content-Type: text/html; charset=utf-8');		if (isset($process)) {			$pass1 = $post['pass1'];			$pass2 = $post['pass2'];			$username = $post['username'];			$email_address = $post['email_address'];			$first_name = $post['first_name'];			$last_name = $post['last_name'];			$code = $post['code'];			$city = $post['city'];			$zipcode = $post['zipcode'];			$birthdate = $post['birthdate'];			if ((!$pass1) || (!$pass2) || (!$username) || (!$email_address) || (!$first_name) || (!$last_name) || (!$zipcode) || (!$birthdate) || (!$city)) {				return "Some Fields Are Missing";			}			if ($pass1 !== $pass2) {				return "Passwords do not match";			}			$query = $this -> query("SELECT username FROM " . DBTBLE . " WHERE username = '$username'");			if ($query['num_rows'] > 0) {				return "Username unavialable, please try a new username";			}			$query = $this -> query("SELECT email_address FROM " . DBTBLE . " WHERE email_address = '$email_address'");			if ($query['num_rows'] > 0) {				return "Emails address registered to another account.";			}			if (Admin_Approvial == true) {				$status = "pending";			} else {				$status = "live";			}			$pass1 = sha1($pass1);			$query1 = $db -> prepare("INSERT INTO " . DBTBLE . " (first_name, last_name, email_address, username, password, code, status, zipcode, birthdate, city) VALUES (?,?,?,?,?,?,?,?,?,?)");			$query1 -> bindParam(1, $first_name);			$query1 -> bindParam(2, $last_name);			$query1 -> bindParam(3, $email_address);			$query1 -> bindParam(4, $username);			$query1 -> bindParam(5, $pass1);			$query1 -> bindParam(6, $code);			$query1 -> bindParam(7, $status);			$query1 -> bindParam(8, $zipcode);			$query1 -> bindParam(9, $birthdate);			$query1 -> bindParam(10, $city);			$query1 -> execute();			//DOESNT WORK??			User_Created($username, $email);			//$obj = $db->query(			$query = $this -> query("SELECT codes FROM codes WHERE codes = '$code'");			if ($query['num_rows'] > 0) {				$this -> query("UPDATE " . DBTBLE . " SET user_level = '4' WHERE username = '$username'");			}			/*			 $this -> query("INSERT INTO " . GCTBLE . " (course_name, played, course_stipulations, user_id_FK, course_location) VALUES ('Madison SD GG', '', 'Onee Round',' 1', 'Madison SD'), ('Aberdeen SD GG', '', 'One Round',' 2', 'Aberdeen SD')");			 */			if (Admin_Approvial == true) {				return 'Sign up was sucessful, your account must be reviewed by the administrator before you can login.';			} else {				echo '<script type="text/javascript">';				echo 'alert("Congratulations You are now signed up!");';				echo 'window.location.href = "index.php";';				echo '</script>';				return 'Sign up was sucessful, you may now log in.';			}		}	}	function Forgot_Password($get, $post) {		$username = $post['username'];		if (!$username) {			$username = $get['username'];		}		$code = $post['code'];		if (!$code) {			$code = $get['code'];		}		if (isset($code)) {			//$obj = $db->query(			$query = $this -> query("SELECT * FROM " . DBTBLE . " WHERE username='$username' AND forgot='$code'");			if ($query['num_rows'] == 1) {				return "<!-- !-->";			} else {				if (isset($code) && isset($username)) {					return "Link Invalid, Please Request a new link.";				} else {					return false;				}			}		}	}	function Request_Password($post, $process) {		$username = $post['username'];		$email = $post['email'];		if (isset($process)) {			//$obj = $db->query(			$query = $this -> query("SELECT * FROM " . DBTBLE . " WHERE username='$username' AND email_address = '$email'");			if ((!$username) || (!$email)) {				return "Please enter all details.";			}			if ($query['num_rows'] == 0) {				return "Matching details were not found.";			}			$chars = "abcdefghijkmnopqrstuvwxyz023456789";			srand((double)microtime() * 1000000);			$i = 0;			$pass = '';			while ($i <= 7) {				$num = rand() % 33;				$tmp = substr($chars, $num, 1);				$pass = $pass . $tmp;				$i++;			}			$code = sha1($pass);			//$obj = $db->query(			$this -> query("UPDATE " . DBTBLE . " SET forgot = '$code' WHERE username='$username' AND email_address='$email'");			Mail_Reset_Password($username, $code, $email);			return "We have sent an email to your address, this will allow you to reset your password.";		}	}	function Reset_Password($post, $process) {		if (isset($process)) {			$pass1 = $post['pass1'];			$pass2 = $post['pass2'];			$username = $post['username'];			if ($pass1 !== $pass2) {				return "New passwords do not match";			}			$password = sha1($pass1);			//$obj = $db->query(			$query = $this -> query("UPDATE " . DBTBLE . " SET password = '$password', forgot = 'NULL' WHERE username = '$username'");			Mail_Reset_Password_Confirmation($username, $email);			return "Password Reset Sucsessfull, You may now login.";		}	}}?>