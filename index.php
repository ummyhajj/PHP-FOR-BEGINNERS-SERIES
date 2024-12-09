<?php


   require "functions.php";
   require "Database.php";
  //  require "router.php";

  $config = require "config.php";


  $db = new Database($config['database'] );

  $id = $_GET['id'];
  //when accepting user inputs through a query string or through a form,never inline them with SQL query.To prevent sql injection
  $query = "SELECT * FROM blog_posts WHERE id = ?";

  // dd($query);
  
  $posts = $db-> query($query,[$id])-> fetch(); 

  
dd($posts);



