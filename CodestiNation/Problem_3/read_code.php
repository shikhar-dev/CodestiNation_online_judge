<?php
	header("Content-Type: text/plain");
	$usr = $_GET['username'] ;
	$fn = $_GET['file_name'] ;
	$add = "../user_info/$usr/$fn.cpp" ;
	$handle = fopen($add,"r") ;
	while (!feof($handle)) {
		echo fgets($handle) ;
 	}
 	fclose($handle) ;
?>