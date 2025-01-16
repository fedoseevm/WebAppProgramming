<?php
function createDB($dbname)
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    $sql = "CREATE DATABASE $dbname";
    if (mysqli_query($conn, $sql)) {
        echo "Baza danych została pomyślnie utworzona pod nazwą $dbname";
    } else {
        echo "Błąd podczas tworzenia bazy danych: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}


?>