<?php
	# LOOPS - Executes code set number of times
	/*
		For
		While
		DO..While
		ForEach
	*/

	#For Loop
	# @params - init, condition, inc
/*
	for($i = 5; $i <= 10; $i++){
		echo 'Number ' . $i;
		echo '<br>';
	}
*/
	#While Loop
	# @params - condition
/*
	$i = 0;

	while($i < 10){
		echo $i;
		echo '<br>';
		$i++;
	}
*/
	# Do While loops
	# @params - condition
/*
	$i = 0;
	do{
		echo $i;
		echo '<br>';
		$i++;
	}

	while($i < 10);
*/
	#ForEach loop - for arrays
/*
	$people = array('Brad', 'Joe', 'Wookie');

	foreach($people as $person){
		echo $person;
		echo '<br>';
	}
*/

	$people = array('Brad' => 'brad@gmail.com', 'Joe' => 'joe@gmail.com', 'Wookie' => 'wookie@gmail.com');

	foreach($people as $person => $email){
		echo $person. ': '. $email;
		echo '<br>';
	}
?>