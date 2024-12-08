<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Functions</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1>Recommended Books</h1>
    <?php 
      $books = [
        ["name" => "Do androids dream of electric sheep?",
        "author" => "Philip K Dick",
        "purchaseUrl" => "http://example.com",
        "releaseYear" => 2010],

        ["name" => "Project Hail Mary",
        "author" => "Andy Weir",
        "purchaseUrl" => "http://example.com",
        "releaseYear" => 2014],

        ["name" => "The Longliers",
        "author"=> "Andy Weir",
        "purchaseUrl" => "http://example.com",
        "releaseYear" => 2019]       
      ];
      
      function filterByAuthor($books,$author){
        $filteredBooks = [];

        foreach ($books as $book){
          if ($book["author"] === $author){
            $filteredBooks[] = $book;

          }
        }
        return $filteredBooks;
      }
      $filteredBooks = filterByAuthor($books,"Philip K Dick");
    ?>
    <ul>
      <?php foreach ($filteredBooks as $book ):?>

        <li>
          <a href="<?= $book["purchaseUrl"]?>">
          <?= $book["name"];?> (<?=$book["releaseYear"]?>) - By <?=$book["author"] ?>
          </a>
        </li> 

      <?php endforeach; ?>
    </ul>
  </body>
</html>