<?php
	#Array - Variable that holds multiple values
	/*
		-Indexed
		-Associative
		-Multi-dimensional
	*/

	// Indexed
	$people = array('Kevin', 'Jeremy', 'Sara');
	$ids = array(23, 55, 29);
	$cars = ['Honda', 'Toyota', 'Ford'];
	$cars[3] = 'Mazda';
	$cars[] = 'VW';

	//echo count($cars);
	//print_r($cars);
	//var_dump($cars);

	//echo $people[2];
	//echo $ids[2];
	//echo $cars[4];

	// Associative array
	$people = array('Brad' => 35, 'Joe' => 25, 'William' => 37);
	$ids = [22 => 'Brad', 28 => 'Joe', 99 => 'William'];

	//echo $people['Joe'];
	//echo $ids[22];
	//$people['Jill'] = 42;
	//print_r($people);
	//var_dump($people);

	//Multi-Dimensional
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 30, 60),
		array('Ford', 23, 14)
	);

	echo $cars[1][1];
?>