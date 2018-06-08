<?php

class BowStringsPlayer implements iMusician
{   
    private $instruments=array();

    public function addInstrument(iInstrument $instrument)
    {
        $this->instruments[]=$instrument;
    }

    public function getInstrument()
    {
        return $this->instrument;
    }

    public function assignToBand(iBand $nameBand)
    {
        $nameBand->addMusician($this);
    }

    public function getMusicianType()
    {
        return "Bow strings player";
    }
}
