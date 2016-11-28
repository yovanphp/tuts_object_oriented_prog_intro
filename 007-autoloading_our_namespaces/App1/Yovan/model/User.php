<?php 

namespace Yovan\model;

class User {
	private $email;
	private $password;
	
	public function getEmail() {
	    return $this->email;
	}

	public function setEmail($email) {
	    $this->email = $email;
	     return $this;
	}
	
	public function getPassword() {
	    return $this->password;
	}

	public function setPassword($password) {
	    $this->password = $password;
	    return $this;
	}

	public function login() {
		return 'Logging with a vengeance...';
	}

	public function logout() {
		return 'Logging out...';
	}
}