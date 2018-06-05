<?php
include 'config.php';
include 'libs/Calc.php';

session_start();

$result = 0;
if ($_GET['action'])
{
    echo $_GET['action'];
    $a = $_GET['a'];
    $b = $_GET['b'];

    switch ($action)
    {
    case 'add':
        $result = add($a,$b); 
        break;
    case 'sub':
        $result = substract($a,$b); 
        break;
    case 'mul':
        $result = multiply($a,$b); 
        break;
    case 'div':
        $result = divide($a,$b); 
        break;
    case 'sqrt':
        $result = squareRoot($a); 
        break;
    case 'mod':
        $result = mod($a,$b); 
        break;
    case 'frac':
        $result = fraction($a); 
        break;
    case 'neg':
        $result = negation($a); 
        break;
    }
}


include 'templates/index.php';

?>
