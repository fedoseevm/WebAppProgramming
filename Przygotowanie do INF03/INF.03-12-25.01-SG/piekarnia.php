<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <img src="wypieki.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="kw1.png">KWERENDA1</a>
        <a href="kw2.png">KWERENDA2</a>
        <a href="kw3.png">KWERENDA3</a>
        <a href="kw4.png">KWERENDA4</a>
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <h4>Wybierz rodzaj wypieków:</h4>
        <form action="" method="post">
            <select name="rodzaj" id="rodzaj">
                 <?php
                    $con = mysqli_connect("localhost", "root", "", "piekarnia");
                    if (!$con) {
                        echo "No connection";
                    }
                    $zapytanie1 = "SELECT DISTINCT Rodzaj FROM wyroby ORDER BY Rodzaj DESC;";
                    $wynik1 = mysqli_query($con, $zapytanie1);

                    while ($row = mysqli_fetch_array($wynik1)) {
                        echo "<option value='".$row['Rodzaj']."'>".$row['Rodzaj']."</option>";
                    }
                 ?>
            </select>
            <input type="submit" name="submit" value="Wybierz">
        </form>
        <table>
            <thead>
                <th>Rodzaj</th>
                <th>Nazwa</th>
                <th>Gramatura</th>
                <th>Cena</th>
            </thead>
            <tbody>
                 <?php
                    if (isset($_POST['submit'])) {                
                        $wybrany_rodzaj = $_POST['rodzaj'];
    
                        $zapytanie2 = "SELECT Rodzaj, Nazwa, Gramatura, Cena FROM wyroby WHERE Rodzaj = '$wybrany_rodzaj';";
                        $wynik2 = mysqli_query($con, $zapytanie2);
    
                        while ($row = mysqli_fetch_row($wynik2)) {
                            echo "<tr>
                            <td>$row[0]</td>
                            <td>$row[1]</td>
                            <td>$row[2]</td>
                            <td>$row[3]</td>
                            </tr>";
                        }
                    }
                    mysqli_close($con);
                 ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>AUTOR fedoseevm</p>
        <p>Data: 09.06.2025</p>
    </footer>
</body>
</html>