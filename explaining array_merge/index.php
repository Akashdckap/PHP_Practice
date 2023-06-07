<?php

$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
$referenceTable['val2'] = 3;
$referenceTable['val3'] = array(4, 5);
// print_r($referenceTable);

$testArray = array();

// $testArray = array_merge($testArray, $referenceTable);
// var_dump($testArray);

$testArray = array_merge($testArray, $referenceTable['val1']);
var_dump($testArray);
$testArray = array_merge($testArray, $referenceTable['val2']);
var_dump($testArray);
$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray);

/*
Here the second $reference['val2'] variable value is integer so here the
array_merge will not succeed because array_merge method will succeed for arrays only

But here if we want the output as like altogether we can use only variable name instead 
of using variable key example: print_r($referenceTable); after declaration of all 
varible this will shows the ouput like all together

Array
(
    [val1] => Array
        (
            [0] => 1
            [1] => 2
        )

    [val2] => 3
    [val3] => Array
        (
            [0] => 4
            [1] => 5
        )

)

or 

if we want this array in another array by using array_merge we can but here
same don't use keys with the declared variable.

So we can apply like this

$testArray = array();

$testArray = array_merge($testArray, $referenceTable);
var_dump($testArray);

Output will give like this

array(3) {
  ["val1"]=>
  array(2) {
    [0]=>
    int(1)
    [1]=>
    int(2)
  }
  ["val2"]=>
  int(3)
  ["val3"]=>
  array(2) {
    [0]=>
    int(4)
    [1]=>
    int(5)
  }
}


*/