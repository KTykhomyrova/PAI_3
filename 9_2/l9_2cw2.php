<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $price ="";
    $len = 0;
    $sr = "";
    $error1 ="";
    $error2 = "";
    $error3 = "";
    $ok = false;

    if (isset($_POST['send'])) {
        $price = $_POST["price"];
        if ($price ="") {
            $error1 = "uzupełnij pole";
        }elseif (!is_numeric($price) || $price < 0) {
            $error2 = "Podaj prawidłową liczbę";
        }
        else {
            $ok = true;
        }

        if (empty($_POST["komen"])) {
            $error2 = "uzupełnij pole";
        } else {
            $komen = htmlspecialchars($_POST["komen"]);
        }

        if ($error1 === "" && $error2 === "") {
            $ok = true;
        }
    }
    ?>
    <fieldset>
        <form method="post">
            <label>Koszt benzyny:<br><input type="text" name="price"><?php echo htmlspecialchars($price); ?></label>
            <span style="color:red;"><?php echo $error1; ?></span>
            <label ><br>Ilość kilometrów:<br> <input type="number" name="len"><?php echo $len; ?></label>
            <span style="color:red;"><?php echo $error2; ?></span>
            <label><br>Średnie spalanie: <input type="text" name = "sr"><?php echo htmlspecialchars($sr); ?></label>
            <span style="color:red;"><?php echo $error3; ?></span>

            <br><br><input type="submit" name="send" value="Wyślij">
        </form>
    </fieldset>
</body>
</html>