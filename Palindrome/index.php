<?php

//Declaring function
function palindrome($input){
    //Declaring variable to store reverse string
    $input = strval($input); 
    $reverse = "";
    //Reverse loop
    
    for($i=strlen($input)-1; $i>=0; $i--){
        //Assaing value to reverse variable 
       $reverse = $reverse.$input[$i];
    }
    //Checking the value is palindrome or not
    if($reverse == $input){
        return $input." "."It is a Palindrome";
    }
    else{
        return $input." "."It is not a Palindrome";
    }
}
echo palindrome("malayalam");

?>