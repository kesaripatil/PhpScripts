<?php

class Base {
	public function greet(){
		echo "Greetings from base class";
	}
}

trait HiGreet {
	public function greet() {
		echo "Hi!";
	}
}

trait HelloGreet {
	public function greet() {
		echo "Hello!";
	}
}

class Derived{
	use HiGreet, HelloGreet {
		HelloGreet::greet insteadof HiGreet;
		HiGreet::greet as hiGreet;
	}
}

$derivedObj = new Derived();
$derivedObj->greet();
$derivedObj->hiGreet();

