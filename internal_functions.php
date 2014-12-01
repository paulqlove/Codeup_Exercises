<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, and display "$variable_name is SET|EMPTY"

function check($variable){
	if (empty($variable)) {
		echo  " is empty" . PHP_EOL;
	} else {
			echo " is set" . PHP_EOL;
	}
	
}


check($nothing);
check(serialize($array));
echo serialize($array);


// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results