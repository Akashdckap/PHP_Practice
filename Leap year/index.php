<?php


$year = (int)readline("Please enter the value which you want to check whether it is leap year or not:");

if($year % 4== 0){
    echo "\n";
    echo $year." It's a leap year";
}
else{
    echo "\n";
    echo $year." It is not an leap year";
}


