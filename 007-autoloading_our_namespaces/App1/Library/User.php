<?php 

namespace Library;
use Yovan\utils\Validator as SuperValidator;
use Yovan\model\User as Agent;

class User {
	public function __construct() {
		echo 'Hello from vendor User class';
		//var_dump(new \Yovan\utils\Validator);
		var_dump(new SuperValidator);
		$agent = new Agent;
		$agent->setEmail('agent_007@secret.agent.com')
		->setPassword('james_bond');
		var_dump($agent);
	}
}