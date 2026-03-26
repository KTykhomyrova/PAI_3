<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <header>
        <div id="h_left">
            <img src="logo.png" alt="meteo">
        </div>
        <div id="h_middle">
            <h1>Prognoza dla Wrocławia</h1>
        </div>
        <div id="h_right">
            <p>maj, 2019 r.</p>
        </div>
    </header>

    <main>
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "prognoza");

            $sql = "SELECT * FROM pogoda WHERE miasta_id = 1 ORDER BY data_prognozy";
            $result = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$row['data_prognozy']."</td>";
                echo "<td>".$row['temperatura_noc']."</td>";
                echo "<td>".$row['temperatura_dzien']."</td>";
                echo "<td>".$row['opady']."</td>";
                echo "<td>".$row['cisnienie']."</td>";
                echo "</tr>";
            }

            mysqli_close($conn);
            ?>
        </table>
    </main>

    <section>
        <div id="left">
            <img src="obraz.jpg" alt="Polska, Wrocław">
        </div>
        <div id = "right">
            <a href="kwerendy.txt">Pobierz kwerendy</a>
        </div>
    </section>

    <footer>
        <p>Autor: Kateryna Tykhomyrova</p>
    </footer>
</body>
</html>