<?php

$finalOutput = [];

$keys = array(
    "field1"=>"first",
    "field2"=>"second",
    "field3"=>"third"
);
$values = array(
    "field1value"=>"dinosaur",
    "field2value"=>"pig",
    "field3value"=>"platypus"
);

$keys1 = array_values($keys);
$values1 = array_values($values);

$combineArray = array_combine($keys1,$values1);
print_r($combineArray);
