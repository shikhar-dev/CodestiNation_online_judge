<?php
	
	if(!session_id()) session_start();
	echo '<h1 align="center"><img src="./logo.png" /></h1>' ;
	echo '<h1 align="center">Welcome to CodestiNation!</h1>' ;
	if(!isset($_SESSION['username'])) {
		echo '<p align="right"><font size="4" ><a href="./login.php">LOG IN </a><strong>/</strong><a href="signup.php"> SIGN UP</a></font></p>' ;
	}
	else {
		echo '<p align="right"><font size="4" color="blue">Hello '.$_SESSION['username'].'!<br><a href ="./logout.php">LOGOUT</a></font></p>' ;
	}
	echo '<h3 align="right"><a href="./activity.php">Recent Submissions</a></h3>' ;
	echo '<h2>Problem Archive: </h2><hr>' ;
	echo '<table align="center" cellspacing="100">
			<tr>
				<td><a href="./Problem_1/problem.php"><img src="question.jpg" /></a><br><p align="center"><strong>Problem 1<br>Watermelon</strong></p></td>
				<td><a href="./Problem_2/problem.php"><img src="question.jpg" /></a><br><p align="center"><strong>Problem 2<br>Just Add</strong></p></td>
				<td><a href="./Problem_3/problem.php"><img src="question.jpg" /></a><br><p align="center"><strong>Problem 3<br>Hmm.</strong></p></td>
			</tr>
			</table>
			<em>More Problems coming soon!</em>' ;
?>