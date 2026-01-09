<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki krajoznawcze</title>
    <link rel="stylesheet" href="style.css">
    <?php $mysql = mysqli_connect('localhost', 'root', '', 'egzamin3');?>

</head>
<body>
    <header><h1>WITAMY W BIURZE PODRÓŻY</h1></header>
    <section id="first">
        <h3>ARCHIWUM WYCIECZEK</h3><br>
        
    </section>
    <section id = "second">
        <div clsas = "div" id = "left">
            <h3>NAJTANIEJ...</h3><br>
            <table>
                <tr>
                    <td>Włochy</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Francja</td>
                    <td>od 1200 zł</td>
                </tr>
                <tr>
                    <td>Hiszpania</td>
                    <td>od 1400 zł</td>
                </tr>
            </table>
        </div>
        <div class = "div" id = "middle">
            <h3>TU BYLIŚMY</h3>
        </div>
        <div class = "div" id = "right">
            <h3>SKONTAKTUJ SIĘ</h3>
            <a href="wycieczki@wycieczki.pl">napisz do nas</a>
        </div>
    </section>
    <footer>
        <p>Stronę wykonał: Kateryna Tykhomyrova</p>
    </footer>
</body>
</html>