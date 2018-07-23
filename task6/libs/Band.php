<?php

class Band implements iBand
{
    private $name;
    private $genre;
    private $musician;

    public function __construct($name, $genre)
    {
        $this->name=$name;
        $this->genre=$genre;
        $this->musician=array();
    }
    
    public function getName()
    {
        return $this->name;
    }
   
    public function getGenre()
    {
        return $this->genre;
    }
    
    public function getMusician()
    {
        return $this->musician;
    }

	public function addMusician(iMusician $obj)
    {
        this->musician[] = $obj;
    }
}

?>
