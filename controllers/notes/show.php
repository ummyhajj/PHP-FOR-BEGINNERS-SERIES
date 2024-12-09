<?php

$config = require base_path('config.php');
$db = new Database($config['database'] );

// $heading = 'Note';
$currentUserId = 1;



/*fetching a note created by a user whose user_id is 2 from database.
 The user_id is replaced with :user and id is replaced with :id to prevent sql injection*/

$note  = $db -> query('SELECT * FROM notes WHERE id = :id', [
   
    'id' => $_GET['id']

    ])-> findOrFail();

   
    authorize($note['user_id'] === $currentUserId);
    
   

 
view("notes/show.view.php",[
    'heading' => 'My Notes', 
    'note' => $note
]);