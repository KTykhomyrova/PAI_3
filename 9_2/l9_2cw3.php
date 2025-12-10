<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>

<?php
$nazwisko = "";
$imie = "";
$email = "";
$wynik = 0;

$errNazwisko = "";
$errImie = "";
$errEmail = "";
$errP1 = "";
$errP2 = "";
$errP3 = "";

$ok = false;

function clean($data) {
    return trim(htmlspecialchars($data));
}

if (isset($_POST['send'])) {

    if (empty($_POST["nazwisko"])) {
        $errNazwisko = "Uzupełnij nazwisko!";
    } else {
        $nazwisko = clean($_POST["nazwisko"]);
        if (!preg_match("/^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+$/", $nazwisko)) {
            $errNazwisko = "Nazwisko musi zaczynać się dużą literą i zawierać tylko litery.";
        }
    }

    if (empty($_POST["imie"])) {
        $errImie = "Uzupełnij imię!";
    } else {
        $imie = clean($_POST["imie"]);
        if (!preg_match("/^[A-ZĄĆĘŁŃÓŚŹŻ][a-ząćęłńóśźż]+$/", $imie)) {
            $errImie = "Imię musi zaczynać się dużą literą i zawierać tylko litery.";
        }
    }

    if (empty($_POST["email"])) {
        $errEmail = "Uzupełnij email!";
    } else {
        $email = clean($_POST["email"]);
        if (!filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
            $errEmail = "Niepoprawny adres email!";
        }
    }

    if (!isset($_POST["p1"])) {
        $errP1 = "Wybierz odpowiedź!";
    } else {
        if ($_POST["p1"] == "b") $wynik++;
    }

    if (!isset($_POST["p2"])) {
        $errP2 = "Wybierz odpowiedź!";
    } else {
        if ($_POST["p2"] == "a") $wynik++;
    }

    if (!isset($_POST["p3"])) {
        $errP3 = "Zaznacz przynajmniej jedną odpowiedź!";
    } else {
        $poprawne = ["a", "c"];
        $zaznaczone = $_POST["p3"];
        if ($zaznaczone == $poprawne) {
            $wynik++;
        }
    }

    if ($errNazwisko == "" && $errImie == "" && $errEmail == "" &&
        $errP1 == "" && $errP2 == "" && $errP3 == "") {
        $ok = true;
    }
}
?>

<h2>Test wiedzy</h2>

<fieldset>
<form method="post">

    <label>Nazwisko:<br>
        <input type="text" name="nazwisko" value="<?php echo $nazwisko; ?>">
    </label>
    <span style="color:red;"><?php echo $errNazwisko; ?></span>
    <br><br>

    <label>Imię:<br>
        <input type="text" name="imie" value="<?php echo $imie; ?>">
    </label>
    <span style="color:red;"><?php echo $errImie; ?></span>
    <br><br>

    <label>Email:<br>
        <input type="text" name="email" value="<?php echo $email; ?>">
    </label>
    <span style="color:red;"><?php echo $errEmail; ?></span>
    <br><br>

    <label>1. Wybierz poprawną opcję:</label><br>
    <select name="p1">
        <option value="">-- wybierz --</option>
        <option value="a">Opcja A</option>
        <option value="b">Opcja B (poprawna)</option>
        <option value="c">Opcja C</option>
    </select>
    <span style="color:red;"><?php echo $errP1; ?></span>
    <br><br>

    <label>2. Wybierz jedną odpowiedź:</label><br>
    <input type="radio" name="p2" value="a"> A (poprawna)<br>
    <input type="radio" name="p2" value="b"> B<br>
    <input type="radio" name="p2" value="c"> C<br>
    <span style="color:red;"><?php echo $errP2; ?></span>
    <br><br>

    <label>3. Zaznacz poprawne odpowiedzi:</label><br>
    <input type="checkbox" name="p3[]" value="a"> A (poprawna)<br>
    <input type="checkbox" name="p3[]" value="b"> B<br>
    <input type="checkbox" name="p3[]" value="c"> C (poprawna)<br>
    <span style="color:red;"><?php echo $errP3; ?></span>
    <br><br>

    <input type="submit" name="send" value="Wyślij">

</form>
</fieldset>

<?php
if ($ok) {
    echo "<h2>Wyniki</h2>";
    echo "Nazwisko: $nazwisko<br>";
    echo "Imię: $imie<br>";
    echo "Email: $email<br><br>";
    echo "<strong>Zdobyte punkty: $wynik / 3</strong>";
}
?>

</body>
</html>
