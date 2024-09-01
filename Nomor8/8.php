<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah Angka</title>
</head>
<body>
    <?php
        // data angka
        $data = [80, 90, 75, 100, 85, 100, 66];
        $cari = 100;

        // menghitung jumlah kemunculan angka 
        function hitungJumlah($array, $angka) {
            $jumlah = 0;
            foreach ($array as $item) {
                if ($item == $angka) {
                    $jumlah++;
                }
            }
            return $jumlah;
        }

        $jumlahAngka = hitungJumlah($data, $cari);
    ?>
    <strong>
    <p>Jumlah angka <?= $cari; ?> = <?= $jumlahAngka; ?></p>
    </strong>
</body>
</html>