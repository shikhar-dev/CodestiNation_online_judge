<?php 
	echo '<h1 align = "center">Problem 1: Just Add</h1>
		 <h2 align = "center">input: standard input<br>
		 output: standard output</h2>' ;
	if(!session_id()) session_start();
	if(!isset($_SESSION['username'])) {
		echo '<p align="right"><font size="4" ><a href="../login.php">LOG IN </a><strong>/</strong><a href="../signup.php"> SIGN UP</a></font></p>' ;
	}
	else {
		echo '<p align="right"><font size="4" color="blue">Hello '.$_SESSION['username'].'!<br><a href ="../logout.php">LOGOUT</a></font></p>' ;
	}
	echo '<h3 align="right"><a href="../main.php">GO TO HOME PAGE<a></h3>	<h2>Problem Statement:</h2>' ;
	echo '<p ><font size="5">This problem is pretty easy. All you need to do is to find the total number of chocolates that Tim and Ben have.</font></p>' ;
	echo '<p ><font size="5">You are given with number of chocolates Ben and Tim have.</font></p>' ;
	echo '<h2>Input</h2>' ;
	echo '<p ><font size="5">The first input line contains number of test cases T followed by T lines, on each line there are two integers t (0<=t<=1000) and b (0<=b<=100); chocolates that Tim and Ben have respectively.</font></p>' ;
	echo '<h2>Output</h2>' ;
	echo '<p ><font size="5">Print the total number of chocolates for every test case on a new line.</font></p>' ;
	echo '<h2>Example</h2>' ;
	echo '<p ><font size="5"><hr>input <hr>1<br>8 10<br><br><hr>output <hr>18 </font></p>' ;
	echo '<h2 align="center">Submit:</h2>' ;
	echo '<h2 align ="center"><form action="./checker.php" method="POST" enctype="multipart/form-data"> 
		     <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
		     <input type="file" name="upload" value="" />
		     <input type="submit" name="submit" value="submit" />
		  </form>Or go to code <a href="./editor.php">Editor</a></h2>' ;
?>