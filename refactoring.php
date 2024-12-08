<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Refactoring</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1>Recommended Books</h1>
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
      //Using generic names for function name and parameters $fn means function
      function filter($items,$fn){
        $filteredItems = [];
        
        foreach ($items as $item){
          if ($fn($item)){
            $filteredItems[] = $item;

          }
        }
        return $filteredItems;
      }   

      /* $releaseYear = "releaseYear";
       $year = 2019; */


      $filteredBooks = filter($books,function($book){

        return $book["releaseYear"] < 2000;

      });
    ?>
    <ul>
      <?php foreach($filteredBooks as $item) :?>

        <li>
          <a href="<?= $item["purchaseUrl"]?>">
          <?= $item["name"];?> (<?=$item["releaseYear"]?>) - By <?=$item["author"] ?>
          </a>
        </li> 

      <?php endforeach; ?>
    </ul>
  </body>
</html>