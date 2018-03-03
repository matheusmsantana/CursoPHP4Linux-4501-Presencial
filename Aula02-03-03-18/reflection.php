<?php

echo '<pre>';

$reflection = new ReflectionClass('PDO');

//var_dump($reflection->getMethods());

var_dump($reflection->getProperties());

