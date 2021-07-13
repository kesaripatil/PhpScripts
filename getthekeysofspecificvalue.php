<?php
$data = array(
	'key1' => '',
	'key2' => '',
	'key3' => 'value3'
);
$result = array();
array_filter($data, 
function($value, $key) use(&$result){
	if($value == '') {
		$result[] = $key;
	}
}, 
ARRAY_FILTER_USE_BOTH
);

var_dump($result);

