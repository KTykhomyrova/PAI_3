<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <header><h1>WITAMY W BIURZE PODRÓŻY</h1></header>

    <section id="arch">
    <h3>ARCHIWUM WYCIECZEK</h3>
    <?php
        $conn = mysqli_connect('localhost', 'root', '', 'egzamin4');
        if (!$conn) {
            echo "error" . mysqli_connect_error();
            exit();
        }

        $sql1 = "SELECT id, cel, cena FROM wycieczki WHERE dostepna = 0";
        $result1 = mysqli_query($conn, $sql1);
        if ($result1) {
            while ($row = mysqli_fetch_assoc($result1)) {
                echo $row['id'] . ". " . $row['cel'] . ", cena: " . $row['cena'] . "<br>";
            }
        }
    ?>
    </section>

    <section id="main">
        <div id="left">
            <h3>NAJTANIEJ...</h3>
            <table>
                <tr><td>Włochy</td><td>od 1200 zł</td></tr>
                <tr><td>Francja</td><td>od 1200 zł</td></tr>
                <tr><td>Hiszpania</td><td>od 1400 zł</td></tr>
            </table>
        </div>

        <div id = "middle">
            <h3>TU BYLIŚMY<br></h3>
            <?php
            $sql2 = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC";
            $result2 = mysqli_query($conn, $sql2);
            if ($result2) {
                while ($row = mysqli_fetch_assoc($result2)) {
                    echo '<img src="' . $row['nazwaPliku'] . '" alt="' . $row['podpis'] . '">';
                }
            }
            mysqli_close($conn);
            ?>
        </div>

        <div id = "right">
            <h3>SKONTAKTUJ SIĘ</h3>
            <a href="wycieczki@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </div>
    </section>
    <footer><p>Autor: Kateryna Tykhmoyrova</p></footer>
</body>
</html>