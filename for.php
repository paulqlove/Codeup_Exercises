<?php

//ask user to input numbers
fwrite(STDOUT, 'Please enter your numbers' . PHP_EOL) ;
//user inputs numbers
$start = trim(fgets(STDIN));
$end = trim(fgets(STDIN));
echo "========" . PHP_EOL;
//user chooses increment
fwrite(STDOUT, 'Choose the increment' . PHP_EOL);
$count = trim(fgets(STDIN));
//line break	
echo "========" . PHP_EOL;
//for loop
	for ($i= $start; $i <= $end ; $i += $count) { 
//echo out the count 	
	echo $i . PHP_EOL;
		}

