<?php



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

//if $count is identical to ' ' then it is true and equal to 1. if false then it is equal to $count;
$count = ($count == '') ? 1 : $count;

//line break	
echo "========" . PHP_EOL;


//for loop	
	if(is_numeric($start . $end . $count)) {	
		
		for ($i= $start; $i <= $end; $i += $count){ 
		//echo out the count 	
		echo $i . PHP_EOL;
		}
	} else {
		echo 'Error: Please enter numbers only' . PHP_EOL;
		}
			
	