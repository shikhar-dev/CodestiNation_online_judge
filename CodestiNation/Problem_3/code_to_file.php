<?php
	if(!session_id()) session_start();
		if(!isset($_SESSION['username'])) {
			echo '<h3 align="center"><a href="../login.php">LOG IN</a> to Submit.<br>Or<br><a href="../signup.php">SIGN UP</a><h3>' ;
	}
	else {
	if (!empty($_POST['submit'])) {
		$handle = @fopen ("asd.cpp","w") ;
		fwrite($handle, $_POST['tname']) ;
		fclose($handle) ;
		echo '<h3 align="center">Running . . .</h3>' ;
		shell_exec('g++ asd.cpp -o asd') ;
		if (!is_file("./asd.exe")) {
			echo '<hr/>'.'<img src = "./compile.png" hspace="650" vspace="300" />'.'<hr/>' ;
			echo '<a href = "./problem.php">GO BACK </a>' ;
		}
		else {
			shell_exec('asd < test_cases.txt > out1.txt') ;
			require_once("./diff.php") ;
		}
		@unlink("./asd.cpp") ;
		@unlink("./asd.exe") ;
		@unlink("./out1.txt") ;
	}
}
?>