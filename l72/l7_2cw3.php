<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $products = ["jabko", "chleb", "pomidor", "kapusta", "banan"];
    
      echo "1: <br>";
      print_r($products);
      echo "<br>2:<br> ";
      var_dump($products);
      echo "<br>3: <br>";
      var_export($products);

      echo "<br><br>Sortowanie:<br>";
      sort($products);
      print_r($products);

      echo "<br>Wsatwianie elementu:<br>";
      array_unshift($products, "gruszka");
      echo count($products);

      array_pop($products);
      rsort($products);

      echo "<h1>Lista Zakupów</h1>";
      echo "<ol>";
      for ($i=0; $i < count($products); $i++) { 
        echo "<li>" . $products[$i] ."</li>";
      }
      echo "</ol>";
    ?>
</body>
</html>