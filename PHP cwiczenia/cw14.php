<?php
    // Szukamy najmniejszego i takiego, ze suma liczb od 1 do i przekracza 100.
    $i = 500;
    $suma = 1000;
    do {
        $suma -= --$i;
    } while ($suma < -1000);
    print("Roznica liczb 1000 i $i wynosi $suma");
?>