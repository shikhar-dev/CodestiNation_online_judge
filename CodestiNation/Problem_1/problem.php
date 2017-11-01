<?php 
	echo '<h1 align = "center">Problem 1: Watermelon</h1>
		 <h2 align = "center">input: standard input<br>
		 output: standard output</h2>' ;
	if(!session_id()) session_start();
	if(!isset($_SESSION['username'])) {
		echo '<p align="right"><font size="4" ><a href="../login.php">LOG IN </a><strong>/</strong><a href="../signup.php"> SIGN UP</a></font></p>' ;
	}
	else {
		echo '<p align="right"><font size="4" color="blue">Hello '.$_SESSION['username'].'!<br>' ;
		echo '<a href="./sub.php">Past Submissions</a></font></p>' ;
		echo '<p align ="right"><a href ="../logout.php">LOGOUT</a></font></p>' ;
	}
	echo '<h3 align="right"><a href="../main.php">GO TO HOME PAGE<a></h3>	<h2>Problem Statement:</h2>' ;
	echo '<p ><font size="5">One hot summer day Pete and his friend Billy decided to buy a watermelon. They chose the biggest and the ripest one, in their opinion. After that the watermelon was weighed, and the scales showed w kilos. They rushed home, dying of thirst, and decided to divide the berry, however they faced a hard problem.</font></p>' ;
	echo '<p ><font size="5">Pete and Billy are great fans of even numbers, that is why they want to divide the watermelon in such a way that each of the two parts weighs even number of kilos, at the same time it is not obligatory that the parts are equal. The boys are extremely tired and want to start their meal as soon as possible, that is why you should help them and find out, if they can divide the watermelon in the way they want. For sure, each of them should get a part of positive weight.</font></p>' ;
	echo '<h2>Input</h2>' ;
	echo '<p ><font size="5">The first input line contains number of test cases t followed by t lines, on each line an integer number w (1 ≤ w ≤ 100) — the weight of the watermelon bought by the boys.</font></p>' ;
	echo '<h2>Output</h2>' ;
	echo '<p ><font size="5">Print YES, if the boys can divide the watermelon into two parts, each of them weighing even number of kilos; and NO in the opposite case.</font></p>' ;
	echo '<h2>Example</h2>' ;
	echo '<p ><font size="5"><hr>input <hr>8 <br><br><hr>output <hr>8 </font></p>' ;
	echo '<h2 align="center">Submit:</h2>' ;
	echo '<h2 align ="center"><form action="./checker.php" method="POST" enctype="multipart/form-data"> 
		     <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
		     <input type="file" name="upload" value="" />
		     <input type="submit" name="submit" value="submit" />
		  </form>Or go to code <a href="./editor.php">Editor</a></h2>' ;
?>