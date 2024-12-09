
<?php

require "config.php";
//Whenever you have a PHP file that only contains a class,conventionally,you make the first letter of the file name uppercase so in this instance D. The symbol :: is a scope resolution operator
class Database{
    
    public $connection;
    public function __construct($config,$username = 'root', $password = '')
     {
      $dsn ='mysql:'.http_build_query($config,'',';');
      $this->connection = new PDO ($dsn,$username,$password,[
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
    }


    public function query($query,$params = []){
   
  
      $statement =$this->connection-> prepare($query);
      $statement->execute($params);
  
  
      return $statement;
  
    }
  }
  