<?php
include "KrofnaFactory.php";

$factory = new KrofnaFactory();

$krofna1 = $factory->napraviKrofnu("Nutela", "Lesnici");

print_r($krofna1->naruciKrofnu());



?>