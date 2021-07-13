<?php
/*
$date = '2020-11-25 00:00:00';
$output = date('h:i', strtotime($date));
echo $output;
*/

//flag value change at end of loop
$flag = false;
for($i = 0; $i< 2; $i++) {
	if($flag == true) {
		echo "flag value is true for i value $i";
		$flag = false;
	} else {
		echo "flag value is false for i value $i";
		$flag = true;
	}
}
?>
