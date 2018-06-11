<?php
include_once 'config.php';
include_once 'libs/Calc.php';

$a = 5;
$b = 6;

$calc = new Calc($a, $b);

$add = $calc->add();
$substract = $calc->substract();
$multiply = $calc->multiply();
$divide = $calc->divide();
$squareRoot = $calc->squareRoot();
$mod = $calc->mod();
$frac = $calc->frac();
$neg = $calc->neg();



include_once TEMPLATE;

?>
