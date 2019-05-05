<?php 

//empty array
// $names = [];
// var_dump($names);

///////////////////////////////////
//associatev array
// values associate with spacific key

// $names = [

// 	'suffian' => 17,
// 	'humza' => 22,
// 	'qadir' => 19,
// 	'jawad' => 18,
// 	'liaqat' => 72

// ];

//  $names['jimi'] = 20;

//  echo '<pre>',var_dump($names), '</pre>';

// $people = [

// 	'hum' => 21.5, 
// 	'suf' => 'twenty',
// 	'suf2' => 24
// ];

// echo $people[] = ['1'=>44];
// echo "<br>";
// var_dump($people);


// $songs = array('wo_challi','chall_chiyan','chall_chiyan','kamiz_teri_kali','neend-ati-nahi');


// echo $songs[2] = 'ja-tujh-se-na-bolon';
// echo "<br>";
// echo $songs[] = 'aj-kam-kerna-hi';
// echo "<br>";
// echo '<pre>',var_dump($songs), '</pre>';
//var_dump($song);


// $people = [
// 	'alex' => 21,
// 	'billy' => 24
// ];

// echo $people[0]; // error  
// echo $people['billy'];

///////////////////////////////////

//multidimential array
// we create array in an other array
//e.g list of users, list of comments etc


// $users = [

// 	['username' => 'alex'],
// 	['username' => 'bily'],
// 	['username' => 'hope']

// ];

//  $users[0] = ['name' => 'shan'];


// var_dump($users);
//grab first users
 //echo $users[2]['username'];
// echo $users[1]['username'];


///////////////////////////////////
//more level in m.d.array

// $users = [
// 	[
// 		'username' => 'alex',
// 		'email' => 'alex@abc.com'
// 	],

// 	[
// 		'username' => 'billy',
// 		'email' => 'bily@abc.com'

// 	]

// ];

//echo '<pre>', var_dump($users), '</pre>';
 //

// echo $users[0]['email'];

////////////////////////////////////////
//more go deep in level

$users = [
	[
		'username' => 'alex',
		'email' => 'alex@abc.com',
		'like' => ['cats', 'dogs']
	],

	[
		'username' => 'billy',
		'email' => 'bily@abc.com',
		'like' => ['music', 'cats']

	]

];

foreach ($users as $user) {
	var_dump($user);
	//echo $user['username'] . '<br>';
}

//echo 'UserName: ' . $users[1]['username'];
//echo '<br>';
//echo 'Email: ' . $users[1]['email'];
//echo '<pre>', var_dump($users), '</pre>';

//echo $users[0]['like'][1];
// echo $users[1]['like'][2];


////////////////////////////////////////////

//best technique to accssing array with loop

// foreach ($users as $user) {
// 	//var_dump($user);
// 	echo $user['username'] . '<br>';
// }


//////////////////////////////////////////// 
//add to this array

// $users[] = [
// 	'username' => 'abdul',
// 	'email' => 'abdul@abc.com',
// 	'likes' => ['reading', 'cooking'],

// ];

//update to this array

//$users[0]['likes'][1] = 'dancing';
//$users[1]['about']='I am learnig to code';

// echo '<pre>', var_dump($users), '</pre>';


////////////////////////////////////////
