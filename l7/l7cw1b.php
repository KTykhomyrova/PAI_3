<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tekst = <<<TEKST
    Ooo, ale jazz! 
    Hardkorowo pada deszcz 
    Tak na maksa wieje też 
    Ja łagodnie uśmiechnięta 
    Błyska gdzieś 
    Na mej dłoni czuję dreszcz 
    Moje oczy błyszczą też 
    Ja łagodnie uśmiechnięta 
    Ooooo, hardkorowo pada deszcz 
    Ja łagodnie uśmiechnięta
    TEKST;

    $ilosclit = mb_strlen($tekst);
    $iloscwyr = str_word_count($tekst);
 
    printf("Tekst składa się z %1.2f znaków oraz %2.3f słów", $ilosclit, $iloscwyr);
    ?>
</body>
</html>