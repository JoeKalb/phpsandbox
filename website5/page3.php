<?php 
	$user = ['name' => 'Joe', 'email' => 'test@test.com', 'age' => 25];

	$user = serialize($user);

	setcookie('user', $user, time() + (86400 * 30));

	$user = unserialize($_COOKIE['user']);

	print_r($user);
?>