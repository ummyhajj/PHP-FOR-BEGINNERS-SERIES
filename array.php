<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <?php
    // Associative arrays
    $books = [
        ["name" => "Do androids dream of electric sheep?",
        "author" => "Philip K Dick",
        "relaeaseYear"=> "1968",
        "purchaseUrl" => "http://example.com"],

        ["name" => "Project Hail Mary",
        "author" => "Andy Weir",
        "relaeaseYear"=> "2024",
        "purchaseUrl" => "http://example.com"],
        
        ["name" => "The Martian",
        "author" => "Andy Weir",
        "relaeaseYear"=> "2011",
        "purchaseUrl" => "http://example.com"]
      ];
      function filterByAuthor(){
        return "Gebberish";
      }
      filterByAuthor();
    ?>
    <ul>
    <?php
    // This is a foreach loop
        foreach($books as $book):?>
        <?php if ($book["author"] === "Andy Weir");
        
        ?>
        <li> <a href="<?= $book["purchaseUrl"];?>"><?= $book["name"];?></a> </li>
        <?php
        endforeach;
        ?> 


    </ul>
</body>
</html>