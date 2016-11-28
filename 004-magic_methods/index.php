<?php 
 require 'User.php';

 $data = [
 	'email' => 'yovan.juggoo@gmail.com',
 	'password' => '12345678'
 ];

 $yovan_juggoo = new User($data);
 var_dump($yovan_juggoo);

 $data = [
 	'email' => 'john.doe@example.com',
 	'password' => '555555555'
 ];

 $john_doe = new User($data);
 $john_doe->password = '7522111339';
 $john_doe->profession = 'Programmer';
 var_dump($john_doe);

$jane_smith = new User([
						'email' => 'jane.smith@test.com',
						'password' => 'ab58966123',
						'license' => 'B'
	]);
var_dump($jane_smith);

$user_fillable = new User([
		'email' => 'user@fillable.mu',
		'password' => 'user78945612' // set through constructor but not in fillable => Still set
	]);

$user_fillable->hashed_password = hash('sha1', 'user78945612'); //hashed_password is not in the fillable array so is not set
$user_fillable->password = 'This should not be set'; // remains the same as in the constructor as this is not set.
var_dump($user_fillable);


//__get
var_dump($yovan_juggoo->email);
var_dump($yovan_juggoo->password);

echo $yovan_juggoo;