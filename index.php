<?php


   require "functions.php";
   require "Database.php";

  

//Whenever you have a PHP file that only contains a class, conventionally,you make the d uppercase D
  $db = new Database();
  $posts = $db -> query('SELECT * FROM blog_posts')-> fetchAll(PDO::FETCH_ASSOC); 



dd($posts);


