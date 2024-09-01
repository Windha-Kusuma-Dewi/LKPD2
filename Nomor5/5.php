<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan</title>
</head>
<body>
    <?php
        $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
        $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

        // Mengelompokkan bilangan 
        $sama = array_intersect($bil1, $bil2); 
        $beda = array_merge(array_diff($bil1, $bil2), array_diff($bil2, $bil2));
    
        // menampilkan hasil 
        echo "<h2>Bilangan yang ada di kedua variabel</h2>" , implode(", " , $sama);
        echo "<h2> bilangan yang tidak ada di kedua variabel</h2>", implode(", ", $beda);
    ?>
</body>
</html>