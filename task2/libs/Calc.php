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
        if ($this->b===0)
        {
            return DIVISION_BY_ZERO;
        }
        return $this->a/$this->b;
    }
    

    public function squareRoot()
    {
        if ($this->a<0)
        {
            return NEGATIVE_SQUARE_ROOT;
        }
        return sqrt($this->a);
    }

    public function mod()
    {
		if ($this->b===0)
        {
            return DIVISION_BY_ZERO;
        }
        return $this->a%$this->b;
    }


    public function frac()
    {
        return 1/$this->a;
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
        $this->a = $a;
		$this->mem = $a;
    }

}

?>
