<?php

$data = array(
	'8f6030522df966635a619fe4332b42ac' => array(
		'browserExpiryTime' => '2020-08-20 07:59:10',
		'days' => 10,
		'hrs' => 1
	)	
);

$serialized = serialize($data);
var_dump($serialized);

