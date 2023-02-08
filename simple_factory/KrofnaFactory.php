<?php
include "Krofna.php";

class KrofnaFactory {

    public function napraviKrofnu($fil, $dodatak){
        return new Krofna($fil, $dodatak);
    }
}



?>