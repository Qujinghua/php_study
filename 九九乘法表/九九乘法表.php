<?php
	header("content-type:text/html;charset=utf-8");

	for ($i=1;$i<=9;$i++){ 
		for ($j=1;$j<=$i;$j++) { 
			echo "$j*$i=".($j*$i);
			
		}
		echo "<br>";
	}
?>