<?php
	echo '<h1 align="center"><img src="./logo.png" /></h1>' ;
	echo '<h3 align ="right"><a href="./main.php">GO BACK</a></h3>' ;
	echo '<h2>Recent Submissions of various users: <h2><hr>' ;
	$db = @new mysqli('localhost','root','','cdb') ;
	if ($db->connect_error) {
			die ('Connection error: '.$db->connect_error) ;
	}
	$sql = "SELECT * FROM sub_info ORDER BY id DESC" ;				
	$result = $db->query($sql) ;
	while ($array = $result->fetch_array()) {
		if ($array['verdict']==0) {
			$add = "./acc.png" ;
		}
		else if ($array['verdict']==1) {
			$add = "./wa.png" ;
		}
		else {
			$add = "./cee.png" ;
		}
		echo '<p align="center"><font size="5">
		Sub ID: <font color="blue">'.$array['ID'].'</font> || username: <font color="red">'.$array['username'].'</font> || Date: <font color="green">'.$array['dt'].'</font> || Time: <font color="green">'.$array['tm'].'</font> || Problem_no: <font color="purple">'.$array['problem'].'</font> || Verdict: <img src="'.$add.'"></p>' ;
	}
?>