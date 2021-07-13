<?php
$jsonData = '{"Cfa":{"id":"436","name":"now it should"}}';
$modelName = "Cfa";
$jsonData = json_decode($jsonData);
$name = $jsonData->{"$modelName"}->name;
echo "Name of cfa is - " . $name;

/*
function callMe(){
 echo "Hi from callMe";
}

$callMeVar = 'callMe';

//{"callMe"}();
callMe();
*/

