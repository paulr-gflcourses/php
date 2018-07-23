<?php

class Calc
{
    private $mem;
    private $a;
    private $b;
    private $result;

    private $errors;    

    function __construct($a, $b)
    {
        if (!is_numeric($a)||!is_numeric($b))
        {
            $this->errors[] = ERR_OPERAND_NOT_NUMBER;
        }else
        {
            $this->a = $a;
            $this->b = $b;
        }
    }

    public function add()
    {
        $this->result = $this->a+$this->b;
        return $this->result;
    }

    public function substract()
    {
        $this->result = $this->a-$this->b;
        return $this->result;
    }
    public function multiply()
    {
        $this->result = $this->a*$this->b;
        return $this->result;
    }

    public function divide()
    {
        if ($this->b===0)
        {
            return DIVISION_BY_ZERO;
        }else
        {
            $this->result = round($this->a/$this->b, 3);
            return $this->result;
        }
    }


    public function squareRoot()
    {
        if ($this->a<0)
        {
            return NEGATIVE_SQUARE_ROOT;
        }else
        {
            $this->result = round(sqrt($this->a), 3);
            return $this->result;

        }
    }

    public function mod()
    {
        if ($this->b===0)
        {
            return DIVISION_BY_ZERO;
        }else
        {
            $this->result = $this->a%$this->b;
            return $this->result;
        }
    }


    public function frac()
    {
        if ($this->a===0)
        {
            return DIVISION_BY_ZERO;
        }else
        {
            $this->result = round(1/$this->a, 3);
            return $this->result;
        }

    }

    public function neg()
    {
        $this->result = -$this->a;
        return $this->result;
    }


    public function getMem()
    {
        return $this->mem;
    }


    public function setMem()
    {
        if (is_numeric($this->result))
        {
            $this->mem = $this->result;
            $this->a = $this->mem;
        }
    }

    public function restoreMem()
    {
        $this->a = $this->mem;
    }

    public function clearMem()
    {
        $this->mem = 0;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}

?>
