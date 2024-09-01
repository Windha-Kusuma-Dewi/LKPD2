<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="4.css">
    <title>No 4</title>
</head>
<body>
    <?php
    for ($h=1; $h <= 2; $h++) {
        for ($b=10; $b >= 1; $b--) {
            echo $b . " x $h " . " = " . ($h*$b) . "<br>";
        }
        echo "<br>";
    }
    ?>
</html>
</body>