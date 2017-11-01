<?php
	echo '<h1 align = "center">Problem 2: Just Add</h1>' ;
	if(!session_id()) session_start();
	echo '<p align="right"><font size="4" color="blue">Hello '.$_SESSION['username'].'!<br>' ;
	echo '<p align ="right"><a href ="../logout.php">LOGOUT</a></font></p>' ;
	echo '<h3 align="right"><a href="../main.php">GO BACK<a></h3>	<h2>Past Submissions for this Problem:</h2><hr>' ;
	$db = @new mysqli('localhost','root','','cdb') ;
	if ($db->connect_error) {
			die ('Connection error: '.$db->connect_error) ;
	}
	$user = $_SESSION['username'] ;
	$sql = "SELECT ID, dt, tm, file_name, verdict FROM sub_info where username='$user' and problem=2" ;				//change this for diff problem
	$result = $db->query($sql) ;
	echo "<h3>Showing all $result->num_rows Submissions: </h3><br>" ;
	while ($array = $result->fetch_array()) {
		if ($array['verdict']==0) {
			$add = "../acc.png" ;
		}
		else if ($array['verdict']==1) {
			$add = "../wa.png" ;
		}
		else {
			$add = "../cee.png" ;
		}
		$arr[]='<p align="center"><font size="5">
		Sub ID: <font color="blue">'.$array['ID'].'</font> || Date: <font color="green">'.$array['dt'].'</font> || Time: <font color="green">'.$array['tm'].'</font> || Verdict: <img src="'.$add.'"> || Source Code: <a href="read_code.php?username='.$_SESSION['username'].'&file_name='.$array['file_name'].'">here</a></font></p>' ;
	}
	for ($i=count($arr)-1;$i>-1;$i--) {
		echo $arr[$i] ;
	}
?>