<?php 

//what is best practice
//ease to code, ease to mantain

// $dayOfWeek = 1;
// if ($dayOfWeek == 1) {
// 	echo 'It is Monday.';
// }

///////////////////////////////

// $dayOfWeek = 1;
// if ($dayOfWeek == 1) {
// 	echo 'It is Monday.';
// } else {
// 	echo 'It is not Monday.';
// }

///////////////////////////////

// $dayOfWeek = 2;
// if ($dayOfWeek == 1) {
// 	echo 'It is Monday.';
// } elseif ($dayOfWeek == 2) {
// 	echo 'It is not Tuseday.';
// } elseif ($dayOfWeek == 3) {
// 	echo 'It is not Wednesday.';
// }elseif ($dayOfWeek == 4){
// 	echo 'It is not Thursday.';
// }else {
// 	'Its not a valid day';
// }

//Note: But this is very complex to handle, So in this case we used array
///////////////////////////////

// $dayOfWeek = 1;

// $daysOfWeek = [
// 	1 => 'Monday',
// 	2 => 'Tuesday',
// 	3 => 'Wednesday'
// ];

// var_dump(array_keys($daysOfWeek));


///////////////////////////////

// $dayOfWeek = 4;

// $daysOfWeek = [
// 	1 => 'Monday',
// 	2 => 'Tuesday',
// 	3 => 'Wednesday'
// ];

// echo $daysOfWeek[2];

// in_array(needle, haystack)

// if(in_array($dayOfWeek, array_keys($daysOfWeek))){
// 	echo $daysOfWeek[$dayOfWeek];
// }else {
// 	echo 'This is not a Valid Day.';
// }


///////////////////////////////
//Nesting in php block is nesting in other block
// write a programe which find a name and also fina a long name

// $name = 'Asad';
// if($name){
// 	echo 'Your name is ' .$name;

// 	if(strlen($name) > 10){
// 		echo '. Oh, and you have a long name.';

// 		// if(strlen($name) > 10){
// 		// 	echo '. oh, and you have a very long name.';
// 		// }
// 	}
// }

/////////////////////////////////////
// using inversion operator got same result but code less comples and ease to understand

$name = 'Asad bin arif bin bin';

if(! $name){
	return;
}

echo 'Your name is '. $name . '.';

if (strlen($name) > 10){
	echo '. Oh, and you have a long name.';
}














































/*if statement basic*/

// $day = 2;
// if($day == 1){
// echo "Monday";
// } elseif ($day == 2) {
// 	echo "Tuesday";
// } else {
// 	echo "dont know";
// }

// ===========================

// $name = 'tahir shafi';
// if($name){
// 	echo "your name is $name <br>";
// 	if(strlen($name) > 8){
// 		echo "your name is too long!";
// 	}
// }

// ===========================