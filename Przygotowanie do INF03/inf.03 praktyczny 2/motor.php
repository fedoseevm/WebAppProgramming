<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motocykle</title>
    <link rel="stylesheet" href="styl.css" />
  </head>
  <body>
    <img src="pliki/motor.png" alt="motocykl" />
    <header>
      <h1>Motocykle - moja pasja</h1>
    </header>
    <main>
      <section class="lewy">
        <h2>Gdzie pojechać?</h2>
        <dl>
          <?php
            $serwer = "localhost";
            $uzytkownik = "root";
            $haslo = "";
            $baza = "motory";
        
            $con = mysqli_connect($serwer, $uzytkownik, $haslo, $baza);
            $zapytanie1 = "SELECT nazwa, opis, poczatek, zrodlo FROM wycieczki INNER JOIN zdjecia ON wycieczki.id=zdjecia.id;";

            $wynik = mysqli_query($con, $zapytanie1);

            while ($row = mysqli_fetch_row($wynik)) {
              echo "<dt>".$row[0]."rozpoczyna się w ".$row[2]."</dt>";
              echo "<a href='pliki/".$row[3].".jpg'>zobacz zdjęcie</a>";
              echo "<dd>".$row[1]."</dd>";
            }
          ?>
        </dl>
      </section>
      <section class="prawy1">
        <h2>Co kupić?</h2>
        <ol>
          <li>Honda CBR125R</li>
          <li>Yamaha YBR125</li>
          <li>Honda VFR800i</li>
          <li>Honda CBR1100XX</li>
          <li>BMW R1200GS LC</li>
        </ol>
      </section>
      <section class="prawy2">
        <h2>Statystyki</h2>
        <p>Wpisanych wycieczek:
          <?php
          $zapytanie2 = "SELECT COUNT(id) AS ilosc FROM wycieczki";

          $wynik2 = mysqli_query($con, $zapytanie2);

          $row = mysqli_fetch_array($wynik2);
          echo $row['ilosc'];

          mysqli_close($con);
          ?>
        </p>
        <p>Użytkowników forum: 200</p>
        <p>Przesłanych zdjęć: 1300</p>
      </section>
    </main>
    <footer>
      <p>Stronę wykonał: fedoseevm</p>
    </footer>
  </body>
</html>
