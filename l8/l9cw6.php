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

    <?php
    if (isset( $_POST['send'])) {
        if (empty($_POST["name"])) {
            echo "<p style = 'color:red'>Muszisz podać imię</p>";
        }elseif (empty($_POST["auto"])) {
            echo '<p style = "color:red">Muszisz wybrać opcję</p>';
        }else {
            $name = $_POST["name"];
            
            $auto = $_POST["auto"];

            echo "$name, samochód wybrany przez ciebie może wyglądać tak:<br>";
            switch ($auto) {
                case 'auto1':
                    echo '<img width="400" height="300" src="https://www.toyotapoznan.pl/content/dam/toyota/nmsc/central-europe/motorsport/common/hb_tcm-b.png" alt="toyota">';
                    break;
                case 'auto2':
                    echo '<img width="400" height="300" src="https://mediaservice.audi.com/media/fast/H4sIAAAAAAAA_1vzloG1tIiBOTrayfuvpGh6-m1zJgaGigIGBgZGoDhTtNOaz-I_2DhCHsCEtzEwF-SlMwJZKUycmbmJ6an6QD4_I3taTmV-aUkxO0grT2fL6UYf2Ya_srs3_sqZVvjw01rzNQysQF2Mi4AEMxuQ4AsHEpyeDGASZN4BEBEA4jPZMjMwsFYAGZEMIMDHV1qUU5BYlJirV56ZUpIhqGFAJBBmd3ENcfT0CQYAEE9u7ekAAAA" alt="audi">';
                    break;
                case 'auto3':
                    echo '<img width="400" height="300" src="https://www.bmw-bestauto.pl/www/media/mediapool/seria_5/5sedan-2023/bmw_5_config.png?v=001" alt="bmw">';
                    break;
                case 'auto4':
                    echo '<img width="400" height="300" src="https://images.vehistools.pl/imagin/?make=volkswagen&modelFamily=golf&modelRange=golf&modelVariant=ha&modelYear=2020&paintId=pspc0004&customer=plvehis-sp-z-oo&trim=0&fileType=webp&angle=28&width=900&zoomType=relative&zoomLevel=100&tailoring=vehis" alt="volkswagen">';
                    break;
                case 'auto5':
                    echo '<img width="400" height="300" src="https://mwauto.com.pl/up_files/cenniki/94_nowa-corsa-cennik.jpg" alt="opel">';
                    break;
                case 'auto6':
                    echo '<img width="400" height="300" src="https://alcf.s3.us-west-1.amazonaws.com/_custom/2025/land-rover/discovery-sport/TRANSPARENT_cc_2024LRS010001_01_1280_1AA.png" alt="landrover">';
                    break;
                default:
                    echo "Błąd";
                    break;
            }
            echo "<br>Jak Ci podoba?";
        }
    }
    ?>
</body>
</html>