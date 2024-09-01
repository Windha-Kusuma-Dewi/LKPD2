<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Usia</title>
</head>
<body>
    <?php
    // Fungsi untuk menghitung jumlah usia anak-anak dan dewasa
    function hitungUsia($usianya) {
        $jumlah_anak = 0;
        $jumlah_dewasa = 0;

        foreach ($usianya as $usia) {
            if ($usia < 17) {
                $jumlah_anak++;
            } else {
                $jumlah_dewasa++;
            }
        }

        return [
            'anak' => $jumlah_anak,
            'dewasa' => $jumlah_dewasa
        ];
    }

    // Daftar usia
    $usia_list = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
    
    // Hitung jumlah usia anak-anak dan dewasa
    $hasil = hitungUsia($usia_list);

    // Tampilkan hasil
    echo "Jumlah usia anak-anak (kurang dari 17 tahun): " . $hasil['anak'] . "<br>";
    echo "Jumlah usia dewasa (17 tahun atau lebih): " . $hasil['dewasa'] . "<br>";

    ?>
</body>
</html>
