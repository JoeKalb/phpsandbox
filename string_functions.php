<?php
	#substr()
	#returns a portion of a string

	//$output = substr('Hello', 1, 3);
	//$output = substr('Hello', -2);
	//echo $output;

	# strlen()
	# Returns the length of a string

	//$output = strlen('Hello World');
	//echo $output

	#strpos()
	# Finds the position of the first occurence of a sub string

	//$output = strpos('Hello World', 'o');
	//echo $output;

	#strrpos()
	# Finds the position of the last occurence of a sub string

	//$output = strrpos('Hello World', 'o');
	//echo $output;

	#trim()
	# Strips whitespace
/*
	$text = 'Hello World                             ';
	//var_dump($text);

	$trimmed = trim($text);
	var_dump($trimmed);
*/

	# strtoupper
	# Makes everything uppercase

	//$output = strtoupper('Hello World');
	//echo $output;

	# strtolower
	# Makes everything lowercase

	//$output = strtolower('Hello World');
	//echo $output;

	# ucwords()
	# Capitalize every word

	//$output = ucwords('hello world');
	//echo $output;

	# str_replace()
	# Replace all occurences of a search string with a replacement

	//$text = 'Hello World';
	//$output = str_replace('World', 'Everyone', $text);
	//echo $output;

	# is_string()
	# Check if string

	//$val = '22';
	//$output = is_string($val);

	//echo $output;
/*
	$values = array(true, false, null, 'abc', 33, '33', 24.5, '24.5', '', ' ', 0, '0');

	foreach($values as $value){
		if(is_string($value)) {
			echo "{$value} is a string<br>";
		}
	}
*/
	# gzcompress()
	# Compress a string

	$string = 'Thorough understanding of REST-ful API design: it means that you can design a client server protocol and successfully develop the client side.
	Strong proficiency with JavaScript
	Highly Knowledge of Node.js and frameworks available for RESTful apis.
	Understanding the nature of asynchronous programming and its quirks and workarounds
	User authentication and authorization between multiple systems, servers, and environments
	Mocha
	AWS Lambda
	MySQL
	NoSQL (DynamoDB, MongoDB)
	git';

	$compressed = gzcompress($string);
	//echo $compressed;

	$original = gzuncompress($compressed);
	echo $original;
?>