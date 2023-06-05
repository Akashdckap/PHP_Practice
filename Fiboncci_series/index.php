<?php
$series = (int)readline("Please enter number what would you want in fibonccie series:");

function fiboncci($series){
    $start = 0;
    $n = 1;
    $m = 2;
    echo $n." ".$m." ";
    while($start<=$series){
        $o = $n + $m;

        $n = $m;
        $m = $o;
        echo $o." ";
        $start += 1;
    }
}

fiboncci($series);
