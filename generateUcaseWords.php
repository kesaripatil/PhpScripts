<?php

$testData = 'passed';
$ucaseTestData = ucwords($testData);
var_dump($ucaseTestData);
if(strpos($ucaseTestData, 'Email')) {
	echo "\nString has email word";
} else {
	echo "\n String don't has email word";
}
