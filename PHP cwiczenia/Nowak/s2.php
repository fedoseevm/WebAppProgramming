<?php
    session_start();
    // $lista = $_SESSION['lista'];
    print("<br>Posortowana lista: ");
    print_r(BubbleSort($lista));
?>