<!DOCTYPE html>
<html lang="en">
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

    $SqliQuery = "SELECT NAZWISKO, ETAT, NAZWA, ADRES FROM pracownicy, zespoly WHERE pracownicy.ID_ZESP = zespoly.ID_ZESP AND ADRES LIKE 'PIOTROWO%'";

    $result = mysqli_query($mysqli, $SqliQuery);
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        echo "
        <table>
            <tr>
                <th>Nazwisko</th>
                <th>Etat</th>
                <th>Nazwa</th>
                <th>Adres</th>
            </tr>
        ";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>". $row["NAZWISKO"] . "</td><td>" . $row["ETAT"] . "</td><td>" . $row["NAZWA"] . "</td><td>" . $row["ADRES"] . "</td>";

        }
        echo "</table>";

    }else{
        echo "0 wyników";
    }

    mysqli_close($mysqli);
    ?>
</body>
</html>