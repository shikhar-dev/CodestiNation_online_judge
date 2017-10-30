<?php
	if(!session_id()) session_start();
	$_SESSION['username']=NULL ;
	echo '<h3>Logged out...</h3><br><a href="./main.php">GO BACK</a>'  
?>