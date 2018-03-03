<?php

function __autoload($classe){
	echo "new classe nao existe";
	die();
}

$a = new Foo();