<?php
include "burger.php";
include "sir.php";
include "kecap.php";

$b = new Burger();
$bsir = new Sir($b);
$bkecap = new Kecap($b);
$bkecapsir = new Kecap($bsir);

echo $b->cena() . "<br>"; // osnovna cena je 100

echo $bsir->cena(). "<br>";

echo $bkecap->cena(). "<br>";

echo $bkecapsir->cena(). "<br>";




?>