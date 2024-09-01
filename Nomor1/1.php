<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $teks = "Selamat ulang tahun yang ke-17";

    $number = preg_replace('/[^0-9]/', '', $teks);
    if ($number) {
        $arrNumber = str_split($number, 1);
        echo "teks mengandung angka : " . implode(', ', str_split($number, 1));
    } else {
        echo "teks tidak mengandung angka.";
    }
    ?>
</body>

</html>