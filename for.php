<?php

//ask user to input numbers

// Get starting number
fwrite(STDOUT, 'Please enter your starting number' . PHP_EOL) ;
$start = trim(fgets(STDIN));

// Get Ending number
fwrite(STDOUT, 'Please enter your ending number' . PHP_EOL) ;
$end = trim(fgets(STDIN));

echo "========" . PHP_EOL;

//user chooses increment
fwrite(STDOUT, 'Choose the increment' . PHP_EOL);
$count = trim(fgets(STDIN));



$count = ($count == '') ? 1 : $count;


//line break	
echo "========" . PHP_EOL;
//for loop
	
		
			
for ($i= $start; $i <= $end; $i += $count) { 
	//echo out the count 	
	echo $i . PHP_EOL;

}			
	