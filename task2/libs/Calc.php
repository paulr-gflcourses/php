<?php

class Calc
{
    private $mem;
	private $a;
	private $b;
	
	function __construct($a, $b){
		$this->a = $a;
		$this->b = $b;
	}

    public function add()
    {
        return $this->a+$this->b;
    }

    public function substract()
    {
        return $this->a-$this->b;
    }

    public function multiply()
    {
        return $this->a*$this->b;
    }

    public function divide()
    {
        return $this->a*$this->b;
    }
    

    public function squareRoot()
    {
        return sqrt($this->a);
    }

    public function mod()
    {
        return $this->a;//%$this->b;
    }


    public function frac()
    {
        return 1;///$this->a;
    }

    public function neg()
    {
        return -$this->a;
    }


    public function getMem()
    {
		return $this->mem;
    }


    public function setMem($a)
    {
		$this->mem = $a;
    }

    public function negateMem()
    {
		$this->mem = -$this->mem;
    }
}

?>
