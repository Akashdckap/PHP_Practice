<?php

// Factorial is meaning is if you 4 as a input the output need to come as 24 how it working is 4*3*2*1
$input = (int)readline("Please enter value: ");

function factorial($input){

    $factorial = 1;
    // Loop needs to starts from 1
    for($i=1; $i<=$input; $i++){
        $factorial = $factorial*$i;
    }
    echo "The factorial output is: ".$factorial."\n";
}
factorial($input);