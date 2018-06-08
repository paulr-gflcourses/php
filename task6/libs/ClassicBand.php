<?php

class ClassicBand implements iBand
{

    private $musicians=array();

    public function getName()
    {
        return "Classic Band";
    }

    public function getGenre()
    {
        return "Classics";
    }

    public function addMusician(iMusician $mus)
    {
        $this->musicians[]=$mus;
    }

    public function getMusician()
    {
        return 0;
    }
}
