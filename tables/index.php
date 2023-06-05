<?php

$tables = readline("Please Enter which number table you want: ");

for($i=1; $i<=10; $i++){
    
    echo $tables."*".$i."=".$i*$tables;
    echo "\n";
}
