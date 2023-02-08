<?php

class Krofna {
    private $fil;
    private $dodatak;

    public function __construct($fil, $dodatak)
    {
        $this->fil = $fil;
        $this->dodatak = $dodatak;
    }

    public function naruciKrofnu(){
        print "Zelim krofnu sa punjenjem: " . $this->fil .
        " i dodatkom: " . $this->dodatak . "<br>";
    }
}


?>