<?php
require 'App/model/User.php';
require 'App/utils/Validator.php';
require 'App/utils/Helper.php';
require 'Library/User.php';

/*$rules = [
	'email' => 'required|email',
	'password' => 'required|min:8'
];

$data = [
	'email' => 'yovan.juggoogmail.com',
	'password' => '12345678'
];

$validator = new Validator;

if($validator->validate($data, $rules)) {
	var_dump($data);
} else {
	var_dump($validator->getErrors());
}*/


$yovan = new User;
$yovan->setEmail('yovan.juggoo@gmail.com')
->setPassword(getHash('12345678'));

var_dump($yovan);

$john = new Library\Auth\classes\User;
