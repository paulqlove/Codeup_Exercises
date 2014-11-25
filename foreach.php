<?php

$things = array('Sgt. Pepper', "11", null , array(1,2,3), 9, 3.14, "12 + 7", false, (string) 11);

foreach ($things as $values) {
	if (is_integer($values)) {
		echo $values . " is a integer" . PHP_EOL;
	} elseif (is_float($values)) {
		echo $values . " is a float" . PHP_EOL;
	} elseif (is_bool($values) && ($values != '')) {
		echo $values . " is a boolean" . PHP_EOL;
	} elseif (is_array($values)) {
		foreach ($values as $index) {
			echo $index . " is an array" . PHP_EOL;
		}
	} elseif (is_null($values)) {
		echo $values . PHP_EOL;
	} elseif (is_string($values)){
		echo $values . " is a string" . PHP_EOL;
	} elseif (is_scalar($values)) {
		echo $values . PHP_EOL;
	}
}