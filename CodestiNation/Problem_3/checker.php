<?php
	if(!session_id()) session_start();
		if(!isset($_SESSION['username'])) {
			echo '<h3 align="center"><a href="../login.php">LOG IN</a> to Submit.<br>Or<br><a href="../signup.php">SIGN UP</a><h3>' ;
	}
	else {
	if (!empty($_POST['submit'])) {
		if ($_FILES['upload']['error']) {
			echo '<h2 align="center">Error in uploading</h2>' ;
			echo '<h2 align="center"><a href="problem.php">GO BACK</a></h2>' ;
		}
		else {
			move_uploaded_file($_FILES['upload']['tmp_name'],'./'.'asd.cpp') ;
			echo '<h3 align="center">Upload Successful!</h3>' ;
			echo '<h3 align="center">Running . . .</h3>' ;
			shell_exec('g++ asd.cpp -o asd') ;
			if (!is_file("./asd.exe")) {
				echo '<hr/>'.'<img src = "./compile.png" hspace="650" vspace="300" />'.'<hr/>' ;
				echo '<a href = "./problem.php">GO BACK </a>' ;
				$_SESSION['verdict']=2 ;
			}
			else {
				shell_exec('asd < test_cases.txt > out1.txt') ;
				require_once("./diff.php") ;
			}
			
			//
			$db = @new mysqli('localhost','root','','cdb') ;
			if ($db->connect_error) {
				die ('Connection error: '.$db->connect_error) ;
			}
			$user = $_SESSION['username'] ;
			$tz = 'Asia/Kolkata';
			date_default_timezone_set('Asia/Kolkata');
			$dt =  date("Y-m-d") ;
			$tm = date("G:i:s") ;
			$prob = 3 ;
			$ver = $_SESSION['verdict'] ;
			$_SESSION['verdict'] = NULL ;
			$sql = "SELECT num_sub from user_pass where username ='$user'" ;
			$result = $db->query($sql) ;
			$array = $result->fetch_array() ;
			$file_name = $array['num_sub']+1 ;
			$sql = "UPDATE user_pass SET num_sub=$file_name WHERE username ='$user'" ;
			$result = $db->query($sql) ;
			$sql = "INSERT into sub_info (username,dt,tm,problem,file_name,verdict) VALUES ('$user','$dt','$tm',$prob,$file_name,$ver)" ;
			$db->query($sql)  ;
			rename("./asd.cpp", "../user_info/$user/$file_name.cpp") ;
			//

			@unlink("./asd.cpp") ;
			@unlink("./asd.exe") ;
			@unlink("./out1.txt") ;
		}
	}
}
?>