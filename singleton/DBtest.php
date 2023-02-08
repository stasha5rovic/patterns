<?php

require "DB.php";

$instanca1 = SingletonDB::getInstance();
$conn1 = $instanca1->getConnection();
print_r($conn1);

$instanca2 = SingletonDB::getInstance();
$conn2 = $instanca2->getConnection();
print_r($conn2);

if($conn1 === $conn2){
    echo "Ista konekcija na bazu. <br>";
} else {
    echo "Napravljeno je vise konekcija.";
}


?>