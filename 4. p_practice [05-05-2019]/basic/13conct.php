<?php

$weather = 'sunny';
$degree = 30;

//$status = 'The current weather is '. $weather .' and it\'s '. $degree .' degree ';

//$status = "The current weather is  $weather and it's $degree degree";

$status = "The current weather is  {$weather} and it's " . $degree . "* degree";

echo $status;