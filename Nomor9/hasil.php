<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hasil.css">
    <title>Hasil</title>
</head>

<body>
    <!-- <h1>Lembar Rupiah</h1> -->

    <?php
    $pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100, 50, 20, 10, 5, 1];

    $jumlah = isset($_POST['jumlah']) ? intval($_POST['jumlah']) : 0;
    // hasil pembagian tidak akan memiliki bagian desimal, melainkan dibulatkan ke bawah 
    $original_amount = $jumlah;

    $result = [];
    foreach ($pecahan as $pecah) {
        if ($jumlah >= $pecah) {
            $result[$pecah] = intdiv($jumlah, $pecah);
            $jumlah %= $pecah;
        }
    }
    ?>
    <strong>
        <p>Uang: Rp. <?php echo number_format($original_amount, 0, ',', '.'); ?></p>
        <p>Lembar Rupiah</p>
    </strong>
    <?php foreach ($result as $pecah => $jumlah_lembar): ?>
        <p> Rp. <?php echo number_format($pecah, 0, ',', '.'); ?> : <?php echo $jumlah_lembar; ?></p>
    <?php endforeach; ?>

    <a href="9.php">Kembali</a>

</body>

</html>