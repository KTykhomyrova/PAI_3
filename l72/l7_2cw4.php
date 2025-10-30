<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $musicb = ["SadSvit", "Lana Del Ray", "Lady Gaga", "Michael Jackson", "Billie Eillish"];
    $songs = ["Cassette", "Yung amd Beautiful", "Bad Romance", "Billie Jean", "BLUE"];

    $ar = array_combine($musicb, $songs);
    krsort($ar);
    echo "<pre>";
    print_r($ar);
    echo "</pre>";

    array_push($ar, "Poker fase");
    asort($ar);
    foreach ($ar as $key => $value) {
        echo "$key - $value<br>";
    }
    ?>
</body>
</html>