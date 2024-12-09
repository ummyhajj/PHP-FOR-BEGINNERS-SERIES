<?php

// require 'Validator.php';


$config = require base_path('config.php');
$db = new Database($config['database']);

// $heading = 'Create a note'; 

$errors  = [];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   



    // $validator = new Validator();
 
    
    if(! Validator::string($_POST['body'], 1,1000)){
        $errors['body'] = 'A body of no more than 1,000 characters is required';

    } 
    
    if(empty($errors)){
        $db->query('INSERT INTO notes (body,user_id) VALUES (:body,:user_id)',[
  
        'body' => $_POST['body'],
        'user_id' => 1
    ]);

    }
}  
        
    // if (! Validator ::email('ummyhajj222@gmail.com')){
    // dd('That is not a valid email address'); 
    // }





view ("notes/create.view.php", [
    'heading' => 'Create a note',
    'errors' => $errors
]);


