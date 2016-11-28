<?php 

class User {
	private $email;
	private $password;
	private $hashed_password;

	private $fillable = ['email', 'hashed_password'];
	private $accessible = ['email', 'hashed_password'];

	public function __construct(Array $params) {
		if(count($params) > 0)
			foreach ($params as $field => $value) {
				$this->$field = $value;
			}
	}

	public function __set($name, $value) {
		// $this->$name = $value;
		
		if(!in_array($name, $this->fillable)) {
			return false;
		}

		if(isset($this->$name)) {
			$this->$name = $value;
		}
	}

	public function __get($name) {
		if(!in_array($name, $this->accessible)) {
			return null;
		}
		return isset($this->$name) ? $this->$name : null;
	}

	public function __toString() {
		$data = [];
		foreach (($this->accessible) as $key) {
			$data[$key] = $this->$key;
		}
		return json_encode($data);
	}

	public function login() {
		return 'Logging with a vengeance...';
	}

	public function logout() {
		return 'Logging out...';
	}
}