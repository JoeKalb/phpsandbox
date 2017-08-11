<?php 
//people Array to mimic Database
$people[] = "Abby";
$people[] = "Bill";
$people[] = "Casper";
$people[] = "Dave";
$people[] = "Eathan";
$people[] = "Felicia, bye";
$people[] = "Gale";
$people[] = "Human";
$people[] = "Ian";
$people[] = "Joe";
$people[] = "Kim";
$people[] = "Lani";
$people[] = "Mothra";
$people[] = "Nicole";
$people[] = "Oscar";
$people[] = "Peter";
$people[] = "Quail";
$people[] = "Rick";
$people[] = "Steve";
$people[] = "Trevor";
$people[] = "Ursala";
$people[] = "Victoria";
$people[] = "Wade";
$people[] = "Sara";
$people[] = "Butt";
$people[] = "Cookie";
$people[] = "Lily";
$people[] = "Brad";
$people[] = "Jefffff";
$people[] = "Chewy";
$people[] = "Luke";
$people[] = "Morty";
$people[] = "Summer";
$people[] = "Jerry";

// Get Query String
$q = $_REQUEST['q'];

$suggestion = "";

// Get Suggestions
if($q !== ""){
	$q = strtolower($q);
	$len = strlen($q);
	foreach ($people as $person) {
		if(stristr($q, substr($person, 0, $len))){
			if($suggestion === ""){
				$suggestion = $person;
			}else{
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;
?>