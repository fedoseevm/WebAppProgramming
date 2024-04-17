<?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    print("a = $a<br> b = $b<br> c = $c<br>");

    $delta = $b * $b - 4 * $a * $c;
    if ($delta < 0) {
        print("Nie ma rozwiązań!");
    }
    elseif ($delta > 0) {
        $x1 = (- $b + sqrt($delta)) / 2 * $a;
        $x2 = (- $b - sqrt($delta)) / 2 * $a;
        print("x<sub>1</sub> = $x1 <br>x<sub>2</sub> = $x2");
    }
    else {
        $x = - $b / 2 * $a;
        print("x = $x");
    }
?>