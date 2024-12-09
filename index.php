<?php


   require "functions.php";

  //  require "router.php";


// Simple examples to understand the concerpt of classes
// function in a class is called a method
//   class Person{
//     public $name;
//     public $age;

//     public function breathe(){
      //$this is a keyword that refers to the current instance of the class
//       echo $this ->name . " is breathing";
//     }
//   }
   //instance of the class
// $person = new Person();

// $person->name = "John";
// $person->age = 30; 

// $person ->breathe();

//  connecct to MySQL Database. Create new instance of the PDO class to connect to MySQL. dsn stands for data source name.

$dsn ="mysql:host=localhost;port=3306;dbname=demo;user=root;charset=utf8mb4";
    $username = "root"; 

    $pdo = new PDO ($dsn, $username); 

    $statement = $pdo->prepare("SELECT * FROM blog_posts");
    $statement->execute();


    $posts = $statement->fetchAll(PDO::FETCH_ASSOC);


// dd($posts);

foreach ($posts as $post) {
  echo "<li>" . $post['title'] . "</li>";
}
