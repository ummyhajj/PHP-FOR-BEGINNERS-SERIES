<!-- Codes are executed from top to bottom, therefore the index.php file is the first to be executed. The variable $filteredBooks is created in index.php
and is used in index.view.php -->
<?php
require "index.php";
?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Separating the View from the logic</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1>Recommended Books</h1>
    
    <ul>
      <?php foreach($filteredBooks as $item) :?>

        <li>
          <a href="<?= $item["purchaseUrl"]?>">
          <?= $item["name"]?> (<?=$item["releaseYear"]?>) - By <?=$item["author"] ?>
          </a>
        </li> 

      <?php endforeach; ?>
    </ul>
  </body>
</html>
