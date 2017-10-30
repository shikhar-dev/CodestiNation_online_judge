<?php
	require_once("./db.php") ;
	echo '<h1 align="center"><img src="./logo.png" /></h1>' ;
	echo '<h2>LOGIN!' ;
	echo '<h3 align ="right"><a href="./main.php">GO BACK</a></h3>'.'<hr>' ;
	echo '<form action="lg1.php" method="POST">
			<h4>FILL DETAILS : </h4> <br>
			<p align="center"><font size="4" color="blue">Username : <input type="text" name="username" value=""><br><br>
			Password  : <input type="password" name="password" value=""><br><br> 
			<input type="submit" name="submit" value="submit"></font></p>
		</form><hr>'
?>