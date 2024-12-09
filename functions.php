<?php
/* Function for dump and die.This is usually used for debugging. 
The dump function is used to display the contents of a variable, and the die function after the dump has output the contents, 
it stops the execution of the script preventing any further code from running*/
function dd($value){
    echo "<pre>";
    var_dump($value);
    
    echo "</pre>";
    die();
}
function urlIs($value){

   return $_SERVER['REQUEST_URI'] === $value;
}