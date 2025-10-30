<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tabel = range(13, 390, 13);
    echo implode("=>", $tabel) . "<br>";
    foreach ($tabel as $key => $value) {
        echo "$value=>";
    }

    if (!file_exists('L7_2funkcje')) {
        mkdir("c:/xampp/htdocs/l72/L7_2funkcje");
    }

    $file = fopen("L7_2funkcje/ciag.txt", 'w');
    fwrite($file, implode("=>", $tabel));
    fclose($file);
    ?>
</body>
</html>