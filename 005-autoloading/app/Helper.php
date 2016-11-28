<?php 
function getHash($string) {
	return hash('sha256', $string);
}

function autoload($className) {
	$file = dirname(__FILE__) . '/' .$className . '.php';
	if(file_exists($file)) {
		require $file;
	}
}

spl_autoload_register('autoload');