<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    if (isset( $_POST['send'] )) {
        $color = $_POST["color"];      
    }
    ?>
    <style>
        body{
            background-color: <?php echo $color;?>;
        }
    </style>
</head>
<body>
    <h1>Wybór koloru strony</h1><br>
    <form method ="post">
        <fieldset>
        <label>Wybierz kolor tła strony<br><br>
        <select name="color" id="color">
            <option  value="white" selected>Biały</option>
            <option value="red">Czerwony</option>
            <option value="blue">Nebieski</option>
            <option value="green">Zielony</option>
            <option value="pink">Różowy</option>
            <option value="orange">Pomarańczowy</option>
        </select>
        </label><br><br>
        <input type="submit" name = "send" value = "Zmień kolor strony">
        </fieldset>
    </form>
</body>
</html>