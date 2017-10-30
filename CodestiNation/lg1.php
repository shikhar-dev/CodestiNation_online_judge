<?php
	if (!empty($_POST['submit'])) {
		$db = @new mysqli('localhost','root','','cdb') ;
		$usr = '"'.$_POST['username'].'"' ;
		$pass = '"'.$_POST['password'].'"' ;
		$sql = "SELECT * from user_pass where username=".$usr ;
		$result = $db->query($sql) ;
		if (!($array = $result->fetch_array())) {
			echo 'Wrong Username or Password!<br>' ;
			echo '<a href="./login.php">GO BACK</a>' ;
		} 
		else {
			if ($array['username']==$_POST['username'] and $array['password']==$_POST['password']) {
				echo '<p align="center" >'.'WELCOME<br>'.$array['name'].'</p>' ;
				if(!session_id()) session_start();
				if(!isset($_SESSION['username'])) {
    				$_SESSION['username'] = $_POST['username'];
				}
				echo '<a href="./main.php">GO BACK</a>' ;
			}
			else {
				echo 'Wrong Username or Password!<br>' ;
				echo '<a href="./login.php">GO BACK</a>' ;
			}
		}
	}
?>