<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $name = "wazniak";

    $mysqli = mysqli_connect($server, $user, $password, $name)
        or die("Brak połączenia z bazą danych");

    $sqlQuery = "
        SELECT NAZWISKO, ID_ZESP
        FROM pracownicy
        WHERE ID_ZESP = 20 
        AND (NAZWISKO LIKE 'M%' OR NAZWISKO LIKE '%SKI')
    ";

    $result = mysqli_query($mysqli, $sqlQuery)
        or die("Błąd w zapytaniu");

    if ($result) {
        $rowCount = mysqli_num_rows($result);
        printf("Znaleziono %d osób:<br>", $rowCount);

        while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
            printf("%s - %s<br>", $row[0], $row[1]);
        }
    }

    mysqli_close($mysqli);
    exit(); 
    ?>
</body>
</html>
