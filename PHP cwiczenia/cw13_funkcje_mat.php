<?php
    $a = $_POST['a'];
    print(gettype($a));
    $pierwiastek = sqrt($a);
    $a_potegowana = pow($a, 2);
    if (!empty($a) && gettype($a) != "string") {

        print("Perwsiastek z liczby $a = $pierwiastek <br>");
        print("Liczba $a podniesiona do kwadratu = $a_potegowana");
    }
    else {
        print("Nieprawidłowe dane");
    }
?>