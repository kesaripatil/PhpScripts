<?php
$needle = 'Test';
$hayStack = 'Test message-is-this';

$result = strpos($hayStack, $needle);
if($result === false){
	echo "-- result is empty --";
} else {
	echo "-- result is non empty --";
}

