<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $n = 10;
    for ($i = 1; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            if ($j > $n / 2 - 1 - $i && $j < $n / 2 + $i) {
                echo "*";
            }
            else echo "#";
        }
        echo "<br>";
    }
    ?>
</body>
</html>