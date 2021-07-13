<?php

class CreateDynamicProp {

	private $dynamicVars;


//	private function __construct(){
//		echo "Call to construct function\n";
//	}

//	private function __set($key, $value) {
//		echo "Call to set method\n";
//		$this->dynamicVars[$key] = $value;
//	}

	public function printDynamicPopLists() {
		var_dump($this->dynamicVars);
	}
}

$testObj = new CreateDynamicProp();
$testObj->name = "kesari";
$testObj->surname = "patil";
$testObj->printDynamicPopLists();

