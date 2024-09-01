<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function bandingkan ($nama1, $nama2) {
            $jumlah1 = strlen($nama1);
            // Fungsi strlen di PHP digunakan untuk menghitung panjang atau jumlah karakter dalam sebuah string. 
            $jumlah2 = strlen($nama2);

            if ($jumlah1 > $jumlah2 ) {
                $selisih = $jumlah1 - $jumlah2;
                echo $nama1 . " Memiliki jumlah karakter lebih dari " . $nama2 . " Selisih : " . $selisih . " karakter";
            } else if ($jumlah2 - $jumlah1) {
                $selisih = $jumlah2 - $jumlah1;
                echo $nama1 . " Memiliki jumlah karakter sedikit dari " . $nama2 . " Selisih : " . $selisih . " karakter";
            } else {
                echo $nama1 . " Memiliki jumlah karakter yang sama dengan " . $nama2;
            }
        } bandingkan ("Fema Flanelina Putri", "Artasya Legina");
    ?>
</body>
</html>