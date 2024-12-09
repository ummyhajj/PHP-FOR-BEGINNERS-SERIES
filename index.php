<?php


   require "functions.php";
   require "Database.php";

  $config = require "config.php";

//Whenever you have a PHP file that only contains a class, conventionally,you make the d uppercase D. The symbol :: is a scope resolution operator
  $db = new Database($config['database'] );
  $posts = $db -> query('SELECT * FROM blog_posts')-> fetchAll(); 



dd($posts);


