<?php

$a = 16;
$b = 45;
$sum = add($a, $b);
echo $sum ;
$minus = subtract($a, $b);
echo $minus; 
$product = multiply($a, $b);
echo $product;
$div = divide($a, $b);
echo $div;
$mod = modulus($a, $b);
echo $mod;

 function errorMsg($param1, $param2){
	echo "Error: Numbers you entered in" . PHP_EOL;
	echo "\$a = $param1,  and  \$b = $param2"  . PHP_EOL;
}
		
		function add($a, $b) {
			if(is_numeric($a) && is_numeric($b)) {
		    	return $a + $b . PHP_EOL;

			} else {
				echo errorMsg($a, $b) . PHP_EOL;

			}
		}	

		function subtract($a, $b) {
		    if(is_numeric($a) && is_numeric($b)) {
		    	return $a - $b .PHP_EOL;
			} else {
				echo "ERROR: Numbers only please!" . PHP_EOL;

			}
		}	

		function multiply($a, $b) {
			if(is_numeric($a) && is_numeric($b)) {
		   		return $a * $b . PHP_EOL;

				} else {
				echo "ERROR: Numbers only please!" . PHP_EOL;

			}
		}	
		function divide($a, $b) {
			if(($a === 0) || ($b === 0)) {
				echo "Division Error: can not be divdided" . PHP_EOL;
				echo errorMsg($a, $b) . PHP_EOL;
			} elseif (is_numeric($a) && is_numeric($b)) {
					return $a / $b . PHP_EOL;
				} else {
						echo "ERROR: Numbers ONly" . PHP_EOL;
						}	
		}		
		
		function modulus($a, $b) {
			if(($a === 0) || ($b === 0)) {
				echo "Modulation Error: can not use zero" . PHP_EOL;
				echo errorMsg($a, $b);
			} elseif(is_numeric($a) && is_numeric($b)) {
			
				return $a % $b . PHP_EOL;

		}	else {
				echo "ERROR: Numbers only please!" . PHP_EOL;

			}
		}


add($a, $b);
subtract($a, $b);
multiply($a, $b);
divide($a, $b);
modulus($a, $b);


 