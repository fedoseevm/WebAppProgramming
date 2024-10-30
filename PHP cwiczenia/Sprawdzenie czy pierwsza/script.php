<?php
    $number = (int)$_POST['number'];    
    function CzyPierwsza($num) {
        if ($num <= 1) return false;
        for ($i = 2; $i <= sqrt($num); $i++)
            if ($num % $i === 0) return false;
        return true;
    }

    if (CzyPierwsza($number)) 
        echo "<p>pierwsza</p>";
    else 
        echo "nie pierwsza</p>";
?>