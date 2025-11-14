<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Piramida znaków</h1>
    <fieldset>
        <form method = "post">
            <label><b>Wybierz znak </b>
                <select name="selected">
                    <option value="*">*</option>
                    <option value="$">$</option>
                    <option value="@">@</option>
                    <option value="#">#</option>
                    <option value="^">^</option>
                    <option value="%">&</option>
                </select>
            </label><br><br>

            <label><b>Wpisz ilość poziomów piramidy </b><input name = "num"></label><br><br><br>
            
            <input type="submit" name = "send" value = "Utwórz">
        </form>
    </fieldset>
</body>
</html>