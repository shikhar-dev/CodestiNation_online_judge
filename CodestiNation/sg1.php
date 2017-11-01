<?php
	if (!empty($_POST['submit'])) {
		$db = @new mysqli('localhost','root','','cdb') ;
		$usr = '"'.$_POST['username'].'"' ;
		$pass = '"'.$_POST['password'].'"' ;
		$nm = '"'.$_POST['name'].'"' ;
		$m = '"'.$_POST['mail'].'"' ;
		$sql = "SELECT username from user_pass where username=".$usr ;
		$result = $db->query($sql) ;
		if ($result->fetch_array()) {
			echo 'Username already exists! Choose a different one.<br>' ;
			echo '<a href="./signup.php">GO BACK</a>' ;
		}
		else if ($_POST['password'] != $_POST['cpassword']) {
			echo 'Passwords do not match! Please fill the form again.<br>' ;
			echo '<a href="./signup.php">GO BACK</a>' ;
		} 
		else {
			$sql = "INSERT INTO user_pass values(" .$usr. ',' .$pass. ',' .$nm. ',' .$m. ',0)' ;
			if ($db->query($sql) == true) {
				@mkdir("./user_info/".$_POST['username']) ;
				echo 'Account created!<br>' ;
				echo '<a href="./main.php">GO BACK</a>' ;
			}
			else {
				echo 'Error.<br>' ;
				echo '<a href="./signup.php">GO BACK</a>' ;
			}
		}
	}
?>