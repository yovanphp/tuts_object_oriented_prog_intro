<?php 
require 'user.php';
$yovan = new UserDetail;
$yovan->setEmail('yovan.juggoo@gmail.com');
$yovan->setPassword('12345678');
var_dump($yovan);
var_dump($yovan->login());

echo "The class constant: " . UserDetail::MIN_CHARS . " <br>";

try {
	$yovan->setPassword('123');
} catch (Exception $e) {
	echo $e->getMessage();
}

echo "The password is: {$yovan->getPassword()} <br>";

try {
	$yovan->setPassword('abcdefgh');
} catch (Exception $e) {
	echo $e->getMessage();
}

echo "The password is: {$yovan->getPassword()} <br>";