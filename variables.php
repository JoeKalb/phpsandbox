<?php
	// Single line comment
	# Single line also
/*
	Multiline
	comment
*/
	# Variables
	/*
		-Prefix with $
		-Must start with a letter or an underscore
		-Only letters, mubers and underscores
		-Case sensitive
	*/

	# Data Types
	/*
		String
		Integers
		floats
		booleans
		arrays
		objects
		null
		resource
	*/

	$string1 = 'Hello';
	$string2 = 'World';
	$greeting = $string1 .' '. $string2 . '!';
	$greeting2 = "$string1 $string2";

	$string3 = 'They\'re Here';
	$num1 = 4;
	$num2 = 10;
	$sum = $num1 + $num2;

	$float1 = 4.4;
	$bool = true;

	define('GREETING', 'Hello Everyone', true);

	echo greeting;
?>