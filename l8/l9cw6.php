<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ulubiony samohód</h1>
    <fieldset>
        <form method = "post">
            <label>Podaj swoje imię:<br><br><input name = "name"></label>
            <label><br><br>Wybierz ulubiony samochód:<br>
                <label><input type="radio" name="auto" value = "auto1">Toyota<br></label>
                <label><input type="radio" name="auto" value = "auto2">Audi<br></label>
                <label><input type="radio" name="auto" value = "auto3">BMW<br></label>
                <label><input type="radio" name="auto" value = "auto4">Volkswagen<br></label>
                <label><input type="radio" name="auto" value = "auto5">Opel<br></label>
                <label><input type="radio" name="auto" value = "auto6">Land Rover<br></label>
            </label>
            <br><input type="submit" name = "send" value = "Pokaż">
        </form>
    </fieldset>
</body>
</html>