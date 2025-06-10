<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOLONTARIAT SZKOLNY</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>KONKURS - WOLONTARIAT SZKOLNY</h1>
    </header>
    <section id="lewy">
        <h3>Konkursowe nagrody</h3>
        <form action="konkurs.php" method="post">
            <!-- <input type="submit" value="Losuj nowe nagrody"> -->
             <button>Losuj nowe nagrody</button>
        </form>
        <table>
            <thead>
                <th>Nr</th>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Wartość</th>
            </thead>
            <tbody>
                 <?php
                    $con = mysqli_connect("localhost", "root", "", "konkurs");

                    $zapytanie = "SELECT nazwa, opis, cena FROM nagrody ORDER BY RAND() LIMIT 5;";
                    $wynik = mysqli_query($con, $zapytanie);
                    $licznik = 1;

                    while ($row = mysqli_fetch_row($wynik)) {
                        echo "<tr>
                        <td>$licznik</td>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>";
                        $licznik++;
                    }

                    mysqli_close($con);
                 ?>
            </tbody>
        </table>
    </section>
    <section id="prawy">
        <img src="puchar.png" alt="Puchar dla wolontariusza">
        <h4>Polecane linki</h4>
        <ul>
            <li><a href="kw1.png">Kwerenda1</a></li>
            <li><a href="kw2.png">Kwerenda2</a></li>
            <li><a href="kw3.png">Kwerenda3</a></li>
            <li><a href="kw4.png">Kwerenda4</a></li>
        </ul>
    </section>
    <footer>
        <p>Numer zdającego: fedoseevm</p>
    </footer>
</body>
</html>