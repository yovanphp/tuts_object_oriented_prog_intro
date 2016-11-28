<?php  
class UserDetail {
	private $email;
	private $password;
	const MIN_CHARS = 8;

	public function login() {
		return 'logging with a vengeance';
	}

	public function logout() {
		return 'logging out...';
	}

	private function validateEmail($email) {
		 return isset($email) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
	}

	public function setEmail($email) {
		if(!$this->validateEmail($email)) {
			throw new Exception('The email is not valid!');
		}
		else $this->email = $email;
	}

	public function setPassword($password) {
		if(!$this->validatePassword($password))
			throw new Exception('The password should be ' . self:: MIN_CHARS . ' long <br>');
		else $this->password = hash('sha256', $password);
	}

	private function validatePassword($password) {
		return isset($password) && !empty($password) && strlen($password) >= self::MIN_CHARS ? true : false;
	}

	public function getPassword() {
		return $this->password;
	}
}