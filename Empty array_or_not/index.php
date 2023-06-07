<?php

// The given array is containing values so this will return "The array is not empty";
// (If we given empty array this will return "The array is empty");
$array = [23,45,5,6,89];

if($array == []){
    echo "The array is empty ";
    print_r($array);
}
else{
    echo "The array is not empty ";
    print_r($array);
}

