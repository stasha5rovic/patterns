<?php
include "AutomobilFactory.php";


$factory = new AutomobilFactory();

$vozilo1 = $factory->kreiraj('BMW', 'Z3');

print_r($vozilo1->ispisiMarkuModel());


?>