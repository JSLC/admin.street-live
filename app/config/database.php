<?php
class DATABASE_CONFIG {

	var $test = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
	);
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => '127.0.0.1:3306',
		'login' => 'root',
		'password' => '',
		'database' => 'slive',
		'encoding' => 'utf8'
	);
}
?>
