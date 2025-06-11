<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KOŁO SZACHOWE</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h2>Koło szachowe <i>gambit piona</i></h2>
    </header>
    <section id="lewy">
        <h4>Polecane linki</h4>
        <ul>
            <li><a href="kw1.png">kwerenda1</a></li>
            <li><a href="kw2.png">kwerenda2</a></li>
            <li><a href="kw3.png">kwerenda3</a></li>
            <li><a href="kw4.png">kwerenda4</a></li>
        </ul>
        <img src="logo.png" alt="Logo koła">
    </section>
    <section id="prawy">
        <h3>Najlepsi gracze naszego koła</h3>
        <table>
            <thead>
                <th>Pozycja</th>
                <th>Pseudonim</th>
                <th>Tytuł</th>
                <th>Ranking</th>
                <th>Klasa</th>
            </thead>
            <tbody>
                <!-- SKRYPT 1 -->
                 <?php
                    $con = mysqli_connect("localhost", "root", "", "szachy");
                    $zapytanie1 = "SELECT pseudonim, tytul, ranking, klasa FROM zawodnicy WHERE ranking > 2787 ORDER BY ranking DESC;";

                    $wynik1 = mysqli_query($con, $zapytanie1);

                    $licznik = 1;
                    while ($row = mysqli_fetch_row($wynik1)) {
                        echo "<tr>
                        <td>$licznik</td>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>";
                        $licznik++;
                    }
                 ?>
            </tbody>
        </table>
        <form action="szachy.php" method="post">
            <input type="submit" name="losuj" value="Losuj nową parę graczy">
        </form>
            <!-- SKRYPT 2 -->
             <?php
                if (isset($_POST['losuj'])) {
                    $zapytanie2 = "SELECT pseudonim, klasa FROM zawodnicy ORDER BY RAND() LIMIT 2;";
                    $wynik2 = mysqli_query($con, $zapytanie2);
                    
                    echo "<h4>";
                    while ($row = mysqli_fetch_row($wynik2)) {
                        echo $row[0]." ".$row[1]." ";
                    }
                    echo "</h4>";
                }

                mysqli_close($con);
             ?>
        <p>Legenda: AM - Absolutny Mistrz, SM - Szkolny Mistrz, PM - Mistrz Poziomu, KM - Mistrz Klasowy</p>
    </section>
    <footer>
        <p>Stronę wykonał: fedoseevm</p>
    </footer>
</body>
</html>