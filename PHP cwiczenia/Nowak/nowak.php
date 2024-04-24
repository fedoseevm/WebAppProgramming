<?php
function BubbleSort($lista) {
    $temp;
    for ($i = count($lista); $i >= 1; $i--) {
        for ($j = 1; $j < $i; $j++) {
            if ($lista[$j + 1] < $lista[$j]) {
                $temp = $lista[$j];
                $lista[$j] = $lista[$j + 1];
                $lista[$j + 1] = $temp;
            }
        }
    }
    return $lista;
}
    session_start();
    $lista = array();
    for ($i = 1; $i <= 10; $i++) {
        $liczba = rand(10,100);
        $lista[$i] = $liczba;
    }
    print("Początkowa lista: ");
    print_r($lista);
    // $_SESSION['lista'] = $lista;
    header("Location: s2.php", TRUE, 303);
?>