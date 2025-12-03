<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $price = "";
    $len = "";
    $sr = "";
    $error1 = "";
    $error2 = "";
    $error3 = "";
    $ok = false;

    if (isset($_POST['send'])) {

        $price = filter_input(INPUT_POST, "price", FILTER_VALIDATE_FLOAT);
        if ($price == false || $price <= 0) {
            $error1 = "Podaj prawidłową cenę (liczba dodatnia)";
        }

        $len = filter_input(INPUT_POST, "len", FILTER_VALIDATE_INT);
        if ($len == false || $len <= 0) {
            $error2 = "Podaj prawidłową ilość kilometrów";
        }

        $sr = filter_input(INPUT_POST, "sr", FILTER_VALIDATE_FLOAT);
        if ($sr == false || $sr <= 0) {
            $error3 = "Podaj prawidłowe spalanie";
        }

        if ($error1 == "" && $error2 == "" && $error3 == "") {
            $ok = true;
        }
    }
    ?>

    <fieldset>
        <form method="post">
            <label>Koszt benzyny:<br>
                <input type="text" name="price" value="<?php echo htmlspecialchars($_POST['price'] ?? "") ?>">
            </label>
            <span style="color:red;"><?php echo $error1; ?></span>

            <br><br>

            <label>Ilość kilometrów:<br>
                <input type="number" name="len" value="<?php echo htmlspecialchars($_POST['len'] ?? "") ?>">
            </label>
            <span style="color:red;"><?php echo $error2; ?></span>

            <br><br>

            <label>Średnie spalanie:<br>
                <input type="text" name="sr" value="<?php echo htmlspecialchars($_POST['sr'] ?? "") ?>">
            </label>
            <span style="color:red;"><?php echo $error3; ?></span>

            <br><br>
            <input type="submit" name="send" value="Wyślij">
        </form>
    </fieldset>

    <?php if ($ok): ?>
        <h2>Wynik:</h2>
        <?php
            $przejazd = ($len * $sr / 100) * $price;
            echo "<p>Koszt przejazdu: <strong>" . number_format($przejazd, 2, ',', ' ') . " zł</strong></p>";
        ?>
    <?php endif; ?>

</body>
</html>
