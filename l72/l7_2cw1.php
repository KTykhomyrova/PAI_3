<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "Witamy dnia " . date("d.m.Y") . "<br>";

    $dayE = date("l");
    if ($dayE == "Monday") {
        $day = "poniedziałek";
    } else if ($dayE == "Tuesday") {
        $day = "wtorek";
    } else if ($dayE == "Wednesday") {
        $day = "środę";
    } else if ($dayE == "Thursday") {
        $day = "czwartek";
    } else if ($dayE == "Friday") {
        $day = "piątek";
    } else if ($dayE == "Saturday") {
        $day = "sobotę";
    } else if ($dayE == "Sunday") {
        $day = "niedzielę";
    }

    switch (date("n")) {
        case 1:  $month = "stycznia"; break;
        case 2:  $month = "lutego"; break;
        case 3:  $month = "marca"; break;
        case 4:  $month = "kwietnia"; break;
        case 5:  $month = "maja"; break;
        case 6:  $month = "czerwca"; break;
        case 7:  $month = "lipca"; break;
        case 8:  $month = "sierpnia"; break;
        case 9:  $month = "września"; break;
        case 10: $month = "października"; break;
        case 11: $month = "listopada"; break;
        case 12: $month = "grudnia"; break;
    }

    echo "Witamy w $day, dnia " . date("d") . " $month " . date("Y") . " roku.";
?>
</body>
</html>
