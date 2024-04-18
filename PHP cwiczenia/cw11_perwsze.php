<?php
    $n = $_POST['n'];
    $pierwsza = true;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $pierwsza = !$pierwsza;
            break;
        }
    }
    if ($pierwsza) {
        print('Liczba pierwsza!');
    }
    else {
        print('Liczba nie jest pierwszą');
    }
?>