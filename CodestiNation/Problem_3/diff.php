<?php
	$hout = fopen("./out.txt","r") ;
	if (!$hout) {
		exit('error in opening') ;
	}
	$hout1 = @fopen("./out1.txt","r") ;
	if (!$hout1) {
		exit('error in opening1') ;
	}
	$sout = "" ;
	$sout1 = "" ;
	while (!feof($hout)) {
		$sout.=fgets($hout) ;
		$sout.='.' ;
	}
	while (!feof($hout1)) {
		$sout1.=fgets($hout1) ;
		$sout1.='.' ;
	}
	if ($sout == $sout1) {
		echo '<hr/>'.'<img src = "./accepted.png" hspace="600" vspace="280" />'.'<hr/>' ;  
	}
	else {
		echo '<hr/>'.'<img src = "./wrong.png" hspace="650" vspace="300" />'.'<hr/>' ; 
	}
	echo '<a href = "./problem.php">GO BACK </a>' ;
	fclose($hout1) ;
	fclose($hout) ;
?>