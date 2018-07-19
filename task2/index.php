<?php
include_once 'config.php';
include_once 'libs/Calc.php';

$a = 3;
$b = 0;

$calc = new Calc($a, $b);
if (!$calc->getErrors())
{
    $add = $calc->add();
    $substract = $calc->substract();
    $multiply = $calc->multiply();
    $divide = $calc->divide();
    $squareRoot = $calc->squareRoot();
    $mod = $calc->mod();
    $frac = $calc->frac();
    $neg = $calc->neg();
    $calc->setMem();
    $mem = $calc->getMem();
    $memOper = $calc->add();
}else
{
    $errors=$calc->getErrors();
}
include_once TEMPLATE;

?>
