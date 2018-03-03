<?php

class Foo
{
	public function __construct(){
		echo "construindo";
	}

		public function __destruct(){
		echo "destruindo";
	}
}

$a = new Foo();