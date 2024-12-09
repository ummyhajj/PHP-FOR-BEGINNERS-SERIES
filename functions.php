<?php
// Function for dump and die. Every code after the die function will not be executed.
function dd($value){
    echo "<pre>";
    var_dump($value);
    
    echo "</pre>";
    die();
}
function urlIs($value){

    
   return ($_SERVER['REQUEST_URI']) === $value;
}

// function dump($value) {
//     echo "<pre>";
//     var_dump($value);
    
//     echo "</pre>";
// }