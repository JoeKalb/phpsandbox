<?php
	# CONDITIONALS

	/*
		==
		===
		< 
		>
		<=
		>=
		!=
		!==
	*/
		/*
	$num = 4;

	if($num == 5) {
		echo '5 passed';
	} else if($num === 6) {
		echo '6 passed';
	} else {
		echo 'Did not pass';
	}
	*/

	#Nested if

	//$num = 9;

	/*
	if($num > 4){
		if($num < 10){
			echo "$num passed";
		}
	}
	*/
	/*
		Logical operators

		and &&
		or ||
		xor - one true but now both
	*/
	/*
	if($num > 4 XOR $num < 10) {
		echo "$num passed";
	}
	*/

	# Switch

	$favColor = 'black';

	switch($favColor){
		case 'red':
			echo 'Your favorite color is red';
			break;
		case 'blue':
			echo 'Your favorite color is blue';
			break;
		case 'green':
			echo 'Your favorite color is green';
			break;
		default:
			echo "Your favorite color is $favColor";
			break;
	}
?>