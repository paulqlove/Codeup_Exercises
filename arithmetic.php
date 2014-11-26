<?php
$a = 5;
$b = 3;

function add($a, $b) {

    echo $a + $b . PHP_EOL;
}
	add($a, $b);

function subtract($a, $b) {
    echo $a - $b .PHP_EOL;
}
	subtract($a, $b);

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;

}
	multiply($a, $b);

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}
	divide($a, $b);

function modulus($a, $b){
	echo $a % $b . PHP_EOL;
}
	modulus($a, $b);
?>