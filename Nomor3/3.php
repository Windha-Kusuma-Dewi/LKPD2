<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="3.css">
    <title>Perkalian 5</title>
</head>
<style>
</style>
<body>
    <?php
        for ($i = 1; $i <= 11; $i++) {
            $result = 5 * $i;
            if (strpos((string)$result, '0') == false) {
                echo "$i x 5 = $result<br>";
            }
        } 
    ?>
</body>
</html>