<?php
/*
	Objects are copied by reference. 
	i.e if object a is copied to object b, this means by a and b have the same reference.

	To copy an object by value, we would like to clone it.
 */

class User {
	private $email;
	private $password;

	public function __construct($fields=[]) {
		foreach($fields as $field => $value) {
			$this->$field = $value;
	}
}

	public function getEmail() {
		return $this->email;
	}
	
	public function setEmail($email) {
		$this->email = $email;
	}

	public function getPassword() {
		return $this->password;
	}

	public function setPassword($password) {
		return $this->password;
	}
}

// Copying objects
$first_user = new User(
	[
		'email' => 'yovan.juggoo@gmail.com',
		'password' => '12345678'
	]
);

$second_user = $first_user;

var_dump($first_user);
var_dump($second_user);

echo ($first_user == $second_user) . '<br>';
echo ($first_user === $second_user) . '<br>';

$third_user = clone $first_user;
echo ($first_user == $third_user) . '<br>';
echo ($first_user === $third_user) . '<br>';
