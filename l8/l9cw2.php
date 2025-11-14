<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <form method = "post">
            <label for="numberA">Podaj 1 liczbę:</label><br>
            <input name="numberA"><br><br>
            <label for="numberB">Podaj 2 liczbę: </label><br>
            <input name="numberB"><br><br>
            <label>Wybierz działanie:<br>
                <label><input type="radio" name="operation" value = "+"> +</label><br>
                <label><input type="radio" name="operation" value = "-"> -</label><br>
                <label><input type="radio" name="operation" value = "/"> /</label><br>
                <label><input type="radio" name="operation" value = "*"> *</label>
            </label><br><br>
            <input type="submit" name = "send" value = "Wykonaj">
        </form>
    </fieldset>

    <?php
    if (isset( $_POST['send'])) {
        if (empty($_POST["numberA"]) || empty($_POST["numberB"])) {
            echo "<p style = 'color::red'>Muszisz podać obie liczby</p>";
        }elseif (empty($_POST["operation"])) {
            echo '<p style = "color::red">Muszisz wybrać opcję</p>';
        }else {
            $a = $_POST["numberA"];
            $b = $_POST["numberB"];

            $opt = $_POST["operation"];

            if (is_numeric($a) && is_numeric($b)) {
            $a = floatval($a);
            $b = floatval($b);

            switch ($opt) {
                case '+':
                    echo "Wybrane liczby: $a i $b<br>";
                    echo "<h2>$a + $b = " . $a+$b . "</h2>";
                    break;
                case '-':
                    echo "Wybrane liczby: $a i $b<br>";
                    echo "<h2>$a - $b = " . $a-$b . "</h2>";
                    break;
                case '*':
                    echo "Wybrane liczby: $a i $b<br>";
                    echo "<h2>$a * $b = " . $a*$b . "</h2>";
                    break;
                case '/':
                    if ($b==0) {
                        echo "<p style = 'color::red'>Nie można dzielicz przez 0!</p>";

                    }else{
                        echo "Wybrane liczby: $a i $b<br>";
                        echo "<h2>$a / $b = " . $a/$b . "</h2>";
                    }
                    break;
                default:
                        echo "<p style = 'color::red'>Muszisz  wybrać opcję</p>";
                    break;
            }
            }else{
                echo'<p style = "color::red">Nieprawidlowe danne</p>';

            }
        }
    }
    ?>
</body>
</html>