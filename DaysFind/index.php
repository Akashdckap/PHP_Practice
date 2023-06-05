<?php

function findDate($firstDate,$secondDate){
    $calculation = strtotime($secondDate)-strtotime($firstDate);
    return abs(round($calculation/86400));
}

$output = findDate("12-05-2023","14-05-2023");
print_r("Days between given date's is :".$output."Days");

?>