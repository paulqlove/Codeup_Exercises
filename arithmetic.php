<?php

$a = 16;
$b = 'five';

 function errorMsg($param1, $param2){
	echo "Error: Numbers Both Arguments must be numbers" . PHP_EOL;
	echo "\$a = $param1,  and  \$b = $param2"  . PHP_EOL;
}
		
		function add($a, $b) {
			if(is_numeric($a) && is_numeric($b)) {
		    	echo $a + $b . PHP_EOL;
			} else {
				echo errorMsg($a, $b) . PHP_EOL;

			}
		}	

		function subtract($a, $b) {
		    if(is_numeric($a) && is_numeric($b)) {
		    	echo $a - $b .PHP_EOL;
			} else {
				echo "ERROR: Numbers only please!" . PHP_EOL;

			}
		}	

		function multiply($a, $b) {
			if(is_numeric($a) && is_numeric($b)) {
		   		echo $a * $b . PHP_EOL;

				} else {
				echo "ERROR: Numbers only please!" . PHP_EOL;

			}
		}	
		function divide($a, $b) {
			if(($a === 0) || ($b === 0)) {
				echo "Error: can not be divdided" . PHP_EOL;
				echo errorMsg($a, $b) . PHP_EOL;
			} elseif (is_numeric($a) && is_numeric($b)) {
					echo $a / $b . PHP_EOL;
				} else {
						echo "ERROR: Numbers ONly" . PHP_EOL;
						}	
		}		
		
		function modulus($a, $b) {
			if(($a === 0) || ($b === 0)) {
				echo "Error: can not use zero" . PHP_EOL;
				
			} elseif(is_numeric($a) && is_numeric($b)) {
			
				echo $a % $b . PHP_EOL;

		}	else {
				echo "ERROR: Numbers only please!" . PHP_EOL;

			}
		}



add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);
modulus($a, $b);


 