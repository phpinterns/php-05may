<?php

// function fullname()
// {
// 	return'Tahir Shafi';
// }
// $fname = fullname();
// echo $fname;

function fullName($firstName, $lastName){
	// return $firstName ." ".$lastName;
	return "{$firstName} {$lastName}";
}
$fullname = fullName('Tahir', 'Shafi');
echo $fullname;