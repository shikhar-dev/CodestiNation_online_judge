<?php 
	/////////////////////////////////////////////////////////////////////////////////////
	// Preprocessing First time
	$db = @new mysqli('localhost','root','') ;
	if ($db->connect_error) {
		die ('Connection error: '.$db->connect_error) ;
	}
	$sql = 'CREATE DATABASE IF NOT EXISTS cdb' ;
	if ($db->query($sql) == false ) {
		die ('Database Error.') ;	
	}
	$sql = 'USE cdb' ;
	if ($db->query($sql) == false ) {
		die ('Database Error.') ;	
	}
	$sql = 'CREATE TABLE user_pass(username varchar(32),password varchar(32),name varchar(32),mail varchar(32),num_sub INT, PRIMARY KEY(username))' ;
	$db->query($sql) ;
	$sql = 'CREATE TABLE sub_info (ID int NOT NULL AUTO_INCREMENT,username varchar(32),dt date,tm time,problem int,file_name int,verdict int,PRIMARY KEY (ID))' ;
	$db->query($sql) ;
	//Ends
	/////////////////////////////////////////////////////////////////////////////////////
?>