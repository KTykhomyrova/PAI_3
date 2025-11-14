<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Równaniw kwadratowe</h2>
    <h3>ax² + bx + c = 0</h3>
    <fieldset>
        <form method="post">
            <label>Podaj a: <input  name="numberA"></label><br><br>
            <label>Podaj b: <input  name="numberB"></label><br><br>
            <label>Podaj c: <input  name="numberC"></label><br><br><br>

            <input type="submit" name = "send" value = "Rozwiąż równanie">
        </form>
    </fieldset>
    

    <?php
    if (isset( $_POST['send'])) {
        if (empty($_POST["numberA"]) || empty($_POST["numberB"] || empty($_POST["numberC"]))) {
            echo "<p style = 'color::red'>Muszisz podać wszystkie liczby</p>";
        }

        $a = $_POST["numberA"];
        $b = $_POST["numberB"];
        $c = $_POST["numberC"];

        if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
            $a = floatval($a);
            $b = floatval($b);
            $c = floatval($c);
            
            $delta = ($b*$b) - (-4 * $a * $c);
            $delta = sqrt($delta);

            if ($delta < 0) {
                $delta = number_format($delta, 2, ",");

                echo"a = $a, b = $b, c = $c<br>";
                echo "delta = $delta<br>";
                echo "Równanie nie ma rozwiązania";
            }elseif ($delta == 0) {
                $x = (-1 * $b) / (2*$a);

                $x = number_format($x , 2 , ",");
                $delta = number_format($delta, 2, ",");

                echo"a = $a, b = $b, c = $c<br>";
                echo "delta = $delta<br>";
                echo "Równanie ma 1 pierwiastek rzeczywisty: $x";
            }else{
                $x1 = ((-1 * $b) - $delta) / (2*$a);
                $x2 = ((-1 * $b) + $delta) / (2*$a);

                $x1 = number_format($x1 , 2 , ",");
                $x2 = number_format($x2 , 2 , ",");
                $delta = number_format($delta, 2, ",");

                echo"a = $a, b = $b, c = $c<br>";
                echo "delta = $delta<br>";
                echo "Równanie ma 2 pierwiastki rzeczywiste: $x1 i $x2";
            }
        }else{
            echo'<p style = "color::red">Nieprawidlowe danne</p>';
        }


    }
    ?>
</body>
</html>