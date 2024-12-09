<?php

// $routes = require "routes.php";



  
  // Refactored the if statements below to the $route array
  //   if ( $uri === '/routers/index' ) {
  
  //     require "controllers/index.php";
  
  //   } else if ( $uri === '/routers/about' ) {
  
  //     require "controllers/about.php";
  
  //   } else if ( $uri === "/routers/contact") {
  
  //     require "controllers/contact.php";
  //   }
  


 
  
  
  //routing the current uri to the corresponding controller
  function routeToController($uri,$routes){

      if (array_key_exists($uri, $routes)) {
          require $routes[$uri];
      } else {
          abort(); 
      }
  }
  function abort($code = 404){
      http_response_code($code);
  
      require "views/{$code}.php";
  
      die();
  }
  $routes = require "routes.php";
  $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
  routeToController($uri,$routes);
  