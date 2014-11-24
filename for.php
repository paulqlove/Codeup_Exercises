<?php

//ask user to input numbers
fwrite(STDOUT, 'Please enter your numbers' . PHP_EOL) ;
//user inputs numbers
$start = trim(fgets(STDIN));
$end = trim(fgets(STDIN));
//line break	
echo "========" . PHP_EOL;
//for loop
	for ($i= $start; $i <= $end ; $i++) { 
//echo out the count 	
	echo $i . PHP_EOL;
		}

