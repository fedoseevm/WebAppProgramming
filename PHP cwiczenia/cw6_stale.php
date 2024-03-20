<?php
    define("KWOTA_DO_ODJECIA", 436.20); // Nazwa stalej bez spacji
    define("STAWKA_PODATKOWA", 0.19);
    print("Podatek od dochodu 500 PLN w 2022 roku wynosi: ");
    printf("%0.2f", (5000 * STAWKA_PODATKOWA - KWOTA_DO_ODJECIA));
    print(" PLN");
?>