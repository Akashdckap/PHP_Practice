<?php

// $a = 2;
// $b =3;

// $c = $a;
// $a = $b;
// $b = $c;

// echo "A value is has been changed: ".$a."\n";
// echo "B value is has been changed: ".$b;


$aValue = (int)readline("Please enter first value what you want to swap: ");
$bValue = (int)readline("Please enter second value what you want to swap: ");

$aValue = $aValue + $bValue;
$bValue = $aValue - $bValue;
$aValue = $aValue - $bValue;

echo "First value has been changed now: ".$aValue."\n";
echo "Second value has been changed now: ".$bValue."\n";
