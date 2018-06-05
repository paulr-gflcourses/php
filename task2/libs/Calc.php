<?php

class Calc
{
    private $mem;

    private $a;
    private $b;

    public function add($a, $b)
    {
        return $a+$b;
    }

    public function substract($a, $b)
    {
        return $a-$b;
    }

    public function multiply($a, $b)
    {
        return $a*$b;
    }

    public function divide($a, $b)
    {
        return $a*$b;
    }
    

    public function sqareRoot($a)
    {
        return sqrt($a);
    }

    public function mod($a, $b)
    {
        return $a%$b;
    }


    public function fraction($a)
    {
        return 1/$a;
    }

    public function negation($a)
    {
        return -$a;
    }


    public function getMem($a, $b)
    {
    }


    public function setMem($a)
    {
    }

    public function negateMem($a, $b)
    {
    }
}

?>
