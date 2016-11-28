<?php

namespace Yovan\utils;

class Validator {
	private $errors = [];

	public function getErrors() {
		return $this->errors;
	}

	public function validate (Array $data, Array $rules) {
		$valid = true;
		foreach ($rules as $item => $ruleset) {
			//required|email|min:8
			$ruleset = explode('|', $ruleset);
			foreach ($ruleset as $rule) {
				$pos = strpos($rule, ':');
				if($pos !== false) {
					$parameter = substr($rule, $pos + 1);
					$rule = substr($rule, 0, $pos);
				} else {
					$parameter = '';
				}
				//validateEmail($item, $value, $param)
				$methodName = 'validate' . ucfirst($rule);
				$value = isset($data[$item]) ? $data[$item] : null;
				if(method_exists($this, $methodName)) {
					$this->$methodName($item, $value, $parameter) OR $valid = false;
				}
			}
		}
		return $valid;
	}

	private function validateRequired($item, $value, $parameter) {
		if($value == '' || $value == null) {
			$this->errors[$item] = 'The ' . $item . ' field is required'; 
			return false;
		}
		return true;
	}

	private function validateEmail($item, $value, $parameter) {
		if( isset($value) && !empty($value) && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
			$this->errors[$item] = 'The ' . $item . ' is not valid';
			return false;
		}
		return true;
	}

	private function validateMin($item, $value, $parameter) {
		if(strlen($value) < $parameter) {
			$this->errors[$item] = 'The value of the ' . $item . ' is too short';
			return false;
		}
		return true;
	}



}
