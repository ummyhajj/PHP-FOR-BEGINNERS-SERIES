<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Built In Array</title>
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
      
// Added a built-in function array_filter
      $filteredBooks = array_filter($books,function($book){

        return $book["releaseYear"]  === 2019;

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