<?php
if(!session_id()) session_start();
	if(!isset($_SESSION['username'])) {
		echo '<p align="right"><font size="4" ><a href="../login.php">LOG IN </a><strong>/</strong><a href="../signup.php"> SIGN UP</a></font></p>' ;
	}
	else {
		echo '<p align="right"><font size="4" color="blue">Hello '.$_SESSION['username'].'!<br><a href ="../logout.php">LOGOUT</a></font></p>' ;
	}
echo '<h2 align="center">Code Editor</h2><hr>' ;
echo  '<form action="code_to_file.php" method="POST" id="testformid">
<textarea rows=40 style="width: 29px; background: #aae; padding: 0; margin: 0; border: 0; overflow: hidden"> 1:
 2:
 3:
 4:
 5:
 6:
 7:
 8:
 9:
10:
11:
12:
13:
14:
15:
16:
17:
18:
19:
20:
21:
22:
23:
24:
25:
26:
27:
28:
29:
30:
31:
32:
33:
34:
35:
36:
37:
38:
39:
40:</textarea>
<textarea form ="testformid" name="tname" id="taid" rows="40" cols="140" wrap="soft" onScroll=""></textarea><mark><em><strong><br>NOTE: Please make sure to save your code before submitting, your submitted code will be deleted after the verdict.</strong></em></mark>
	<h4>Run Code: <input type="submit" name="submit" value="submit" /></form> OR <a href="./problem.php">GO BACK</a></h4>'
?>