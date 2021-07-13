<?php
include('baseClassCache.php');
$helloObj = new Hello();
$helloObj->greet();
include('baseClassCache.php');
$helloObj2 = new Hello();
$helloObj2->greet();

