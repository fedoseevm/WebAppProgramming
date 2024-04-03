<?php
    $a = $_POST['liczba1'];
    $b = $_POST['liczba2'];
    $c = $_POST['liczba3'];

    print("<b>A</b> ma wartosc $a<br>");
    print("<b>B</b> ma wartosc $b<br>");
    print("<b>C</b> ma wartosc $c<br>");

    if ($a > $b && $a > $c) {
        print("Liczba a jest większa, ma wartość $a");
    }
    elseif ($a < $b && $c < $b) {
        print("Liczba b jest większa, ma wartość $b");
    }
    elseif ($c > $a && $c > $b) {
        print("Liczba c jest większa: ma wartość $c");
    }
    elseif ($a == $b && $a == $c) {
        print("Liczba a jest równa liczbie b: $a = $b");
    }
    else {
        print("Nie ma największej liczby");
    }
?>