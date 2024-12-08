<?php 
    //Array with nested arrays
      $books = [
        ["name" => "Do androids dream of electric sheep?",
        "author" => "Philip K Dick",
        "purchaseUrl" => "http://example.com",
        "releaseYear" => 1910],

        ["name" => "Project Hail Mary",
        "author" => "Andy Weir",
        "purchaseUrl" => "http://example.com",
        "releaseYear" => 2014],

        ["name" => "The Longliers",
        "author"=> "Andy Weir",
        "purchaseUrl" => "http://example.com",
        "releaseYear" => 2019]       
      ];
    
      
// Added a built-in function array_filter()
      $filteredBooks = array_filter($books,function($book){

        return $book["releaseYear"]  === 2019;

      });
      //The codes at the top will be executed before the codes in index.view.php.
      //All the arrays that are used in the index.view.php are already declared in index.php and the index.php executes first and so there will be no error.
    require "index.view.php";