<?php

class MyClass
{
	private static $instance = null;

	private function __construct(){}
	private function __destruct(){}

	public static function getInstance(){

		if(!self::$instance){
			self::$instance = new self();
		}
		return self::$instance;
	}
}

$a = MyClass::getInstance();