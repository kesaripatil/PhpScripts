<?php
$test = array("name" => "nikita", "name" => "kesari");
$encoded = json_encode($test);
$decoded = json_decode($encoded, true);
echo $decoded['name'];
