<?php

class Musician implements iMusician
{
    private $name;
    private $instrument;
    private $musicianType;

    public function __construct($name, $musicianType)
    {       
        $this->name=$name;
		$this->musicianType=$musicianType;
        $this->instrument=array();
    }
   
    public function getName()
    {
        return $this->name;
    }
	
    public function getInstrument()
    {
        return $this->instrument;
    }
	
    public function getMusicianType()
    {
        return $this->musicianType;
    }
	
    public function addInstrument(iInstrument $obj)
    {       
        $this->instrument[] = $obj;
    }
	
    public function assingToBand(iBand $band)
    {
        $band->addMusician($this);       
    }
    
   

}

?>
