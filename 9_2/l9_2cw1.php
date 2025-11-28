<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "";
    $komen = "";
    $error1 = "";
    $error2 = "";
    $ok = false;

    if (isset($_POST['send'])) {

        if (empty($_POST["name"]) || !is_numeric($num)) {
            $error1 = "uzupełnij pole";
        } else {
            $name = htmlspecialchars($_POST["name"]);
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
            <label>Pseudonim:<br>
                <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
            </label>
            <span style="color:red;"><?php echo $error1; ?></span>

            <label><br><br>Komentarz:<br>
                <textarea name="komen"><?php echo htmlspecialchars($komen); ?></textarea>
            </label>
            <span style="color:red;"><?php echo $error2; ?></span>

            <br><br><input type="submit" name="send" value="Wyślij">
        </form>
    </fieldset>

    <?php
    if ($ok) {
        echo "Pseudonim: $name<br>";
        echo "Komentarz: $komen<br>";
        echo "Komentarz z znakami: " . htmlspecialchars($komen);
    }
    ?>
</body>
</html>