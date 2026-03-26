<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinie klientów</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <?php
    $mysqlcon = mysqli_connect("localhost", "root", "", "hurtownia");

    $skr1 = mysqli_query($mysqlcon, "select zdjecie, imie, opinia from klienci, opinie where klienci.id = opinie.Klienci_id and (klienci.Typy_id = 2 or klienci.Typy_id = 3)");


    ?>
    <header>
        <h1>Hurtownia spożywcza</h1>
    </header>

    <main>
        <h2>Opinie naszych klientów</h2>
        <?php
            while ($row = mysqli_fetch_array($skr1)) {
                echo"<div class = 'skr1'>";
                echo"<img src='$row[zdjecie]' alt='klient'>";
                echo"<q>$row[opinia]</q>";
                echo"<h4>$row[imie]</h4>";
                echo"</div>";
            }
        ?>
        
    </main>

    <footer>
        <div class = "footer">
            <h3>Współpracują z nami</h3>
            <a href="http://sklep.pl/">Sklep 1</a>
        </div>

        <div class = "footer">
            <h3>Nasi top klienci</h3>
            <ul>
                <?php
                $skr2 = mysqli_query($mysqlcon, "SELECT imie, nazwisko, punkty FROM klienci ORDER BY punkty DESC LIMIT 3");

                while($row = mysqli_fetch_array($skr2)){
                    echo "<li>$row[imie] $row[nazwisko], $row[punkty] pkt.</li>";
                }
                ?>
            </ul>
        </div>

        <div class = "footer">
            <h3>Skontaktuj się</h3>
            <p>telefon: 111222333</p>
        </div>

        <div class = "footer">
            <h3>Autor: Kateryna Tykhomyrova</h3>
        </div>
    </footer>
   
</body>
</html>