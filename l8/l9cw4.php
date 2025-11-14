<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, td, th{
            border: solid black 1px;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>Tabliczka mnożenia</h1>
    <fieldset>
        <form method = "post">
            <label><b>Podaj liczbę początkową:</b> <input name = "numberA"></label><br><br>
            <label><b>Podaj liczbę końcową:</b> <input name = "numberB"></label><br><br><br>

            <input type="submit" name = "send" value = "Utwórz">
        </form>
    </fieldset>

    <?php
        if (isset( $_POST['send'])) {
            if (empty($_POST["numberA"]) || empty($_POST["numberB"])) {
            echo "<p style = 'color::red'>Muszisz podać wszystkie liczby</p>";
            }

            $a = $_POST["numberA"];
            $b = $_POST["numberB"];

            if (is_numeric($a) && is_numeric($b)) {
                $a = floatval($a);
                $b = floatval($b);
                

                echo "a = $a, b = $b";

                if ($a > $b) {
                    echo "<br>a nie może być większe od b";
                }else {
                    echo "<table>";
                    echo "<tr> <th></th>";
                    for ($i=$a; $i <= $b ; $i++) { 
                        echo "<th>$i</th>";
                    }
                    echo "</tr>";

                    for ($i=$a; $i <= $b ; $i++) { 
                        echo "<tr>";
                        echo "<th>$i</th>";

                        for ($j=$a; $j <= $b ; $j++) { 
                            echo "<td>";
                            echo $j * $i;
                            echo "</td>";
                        }
                        echo"</tr>";
                    }
                    echo "<table>";
                }
            }else{
                echo'<p style = "color::red">Nieprawidlowe danne</p>';
            }
        }
    ?>
</body>
</html>