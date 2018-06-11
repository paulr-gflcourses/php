<?php
include_once 'config.php';
include_once 'libs/Calc.php';

$a = 9;
$b = 3;

$calc = new Calc($a, $b);

$add = $calc->add();
$substract = $calc->substract();
$multiply = $calc->multiply();
$divide = $calc->divide();
$squareRoot = $calc->squareRoot();
$mod = $calc->mod();
$frac = $calc->frac();
$neg = $calc->neg();
$calc->setMem(10);
$mem = $calc->getMem();
$memOper = $calc->add();

include_once TEMPLATE;

?>
