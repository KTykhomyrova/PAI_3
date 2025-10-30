<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a = rand(10, 99);
    $b = rand(10, 99);

    echo "Pierwsza liczba: $a<br>";
    echo "Druga liczba: $b";

   $dz = $a/$b;
    echo "<br>Liczba ograniczająca z góry: " . ceil($dz);
    echo "<br>Liczba ograniczająca z dołu: " . floor($dz);
    echo "<br>Przybliżenie ilorazu do trzech miejsc po przecinku: " . round($dz, 3);

    ?>
</body>
</html>