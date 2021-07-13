<?php
class Test{
	public function getUnique($array1, $array2) {
		$common = array_intersect($array1, $array2);
		$array1Unique = array_diff($array1, $array2);
		$array2Unique = array_diff($array2, $array1);
		return array_merge($common, $array1Unique, $array2Unique);
	}
}

$array1 = array('kesari');
$array2 = array('kesari');
$test = new Test();
var_dump($test->getUnique($array1, $array2));
