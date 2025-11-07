<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Wybór koloru strony</h1><br>
    <form method ="post">
        <fieldset>
        <label>Wybierz kolor tła strony<br><br>
        <select name="color" id="color">
            <option value="white">Biały</option>
            <option value="red">Czerwony</option>
            <option value="blue">Nebieski</option>
            <option value="green">Zielony</option>
            <option value="pink">Różowy</option>
            <option value="orange">Pomarańczowy</option>
        </select>
        </label><br><br>
        <button>Zmień kolor strony</button>
        </fieldset>
    </form>

    <?php
    if (isset( $_POST[] )) {
        # code...
    }
    ?>
</body>
</html>