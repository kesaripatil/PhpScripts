<?php

trait staticTrait{
	#static $count = 0;

	static public function inc(){
		static $count = 0;
		$count+=1;
		echo "$count\n";
	}
}

class A{
	use staticTrait;
}

class B{
        use staticTrait;
}

$a1 = new A();
$b1 = new B();
$a2 = new A();

A::inc();
B::inc();
A::inc();
#$b1->inc();
#$a2->inc();

