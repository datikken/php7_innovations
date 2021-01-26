<?php
require_once 'vendor/autoload.php';

$array = array('a', 'b', 'c');
$string = serialize($array);

echo $string;
dump($array);