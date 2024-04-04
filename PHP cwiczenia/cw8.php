<?php
    $login = $_POST['login'];
    $password = $_POST['password'];

    if ($login == "pomidor" && $password == "Dziennik") {
        print("<h1>Ukryta strona</h1> <img src='obrazek.jpg' width='500px'>");
    }
    else {
        print("Niepoprawny login lub hasło :(");
    }
?>