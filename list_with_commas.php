<?php
//creates function into a humanizedList
function humanizedList($physicistArray){
	$lastItem = array_pop($physicistArray);
	array_push($physicistArray,  'and ' . $lastItem);
	var_dump($physicistArray);
	//return the value of the function
	return $physicistArray;
} 
//create a function to sort alphabetical
function sortAlpha($physicistArray){
	//sorts the array
	$sort = asort($physicistArray);
	//dumps the array that is sorted
	var_dump($sort);
	//return the value of the function
	return $physicistArray;
}

	//String
	$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark, Carl Sagan, Ted Cruz';
	//convert to an array
	$physicistArray = explode(', ', $physicistsString);
	$physicistArray = sortAlpha($physicistArray);
	//Ask user if they would like to Sort the Array
	//echo 'Press (A) to sort A-Z and (Z) for Z-A' . PHP_EOL;
	//call the function by defining it
	$physicistArray = humanizedList($physicistArray);
	//convert the list into a string
	$famousFakePhysicists = implode(', ', $physicistArray);
	//echo out the string
	echo $famousFakePhysicists . PHP_EOL;
	

	//echo out the array at the end of this string
	echo PHP_EOL . "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}." . PHP_EOL;










