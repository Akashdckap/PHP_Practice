<?php

function checkPrimeNumber($num){
    $check  = 0;
    if($num == 1 || $num == 0){
        echo "It is not a prime number it is composite number";
    }
    else if($num>1){
        for($i=2; $i<$num; $i++){
            if($num % $i == 0){
                $check++;
            }
        }
        if($check >0){
            echo $num." "."It is not a prime number";
        }
        else{
            echo $num." ". "It is a prime number";
        }
    }
    else{
        echo "Please give value more than 1 or 0";
    }
}
checkPrimeNumber(1);

?>


