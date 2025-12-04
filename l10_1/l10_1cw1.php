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

    $mysqli = mysqli_connect($server, $user, $password, $name);
    $sqlQuery = "SELECT id_zesp, nazwisko FROM pracownicy WHERE id_zesp = 20 and nazwisko like '%ski' and nazwisko like 'M%'";
    $result = mysqli_query($mysqli, $sqlQuery)
        or die("Błąd w zapytaniu");
    if($result){
        printf('Result:<br>');
        
    }

    ?>
</body>
</html>