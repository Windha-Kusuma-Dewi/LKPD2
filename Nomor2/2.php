<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen</title>
</head>
<body>
    <form method="post">
        <label for="mulaiKerja">Waktu Mulai Kerja :</label>
        <input type="time" id="mulaiKerja" name="mulaiKerja" required><br><br>
        <label for="pulangKerja">Waktu Pulang Kerja :</label>
        <input type="time" id="pulangKerja" name="pulangKerja" required><br><br>
        <input type="submit" value="Hitung Kompensasi">
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mulaiKerja = $_POST['mulaiKerja'];
            $pulangKerja = $_POST['pulangKerja'];

            function hitungKompensasiLembur($mulaiKerja, $pulangKerja) {
                $jamMulai = strtotime($mulaiKerja);
                $jamPulang = strtotime($pulangKerja);

                if ($jamPulang <= $jamMulai) {
                    $jamPulang += 24 * 3600; 
                }

                $durasiKerja = floor(($jamPulang - $jamMulai) / 3600);
                echo "<h3>Lama Kerja: $durasiKerja jam</h3>";

                $jamLebih = $durasiKerja - 8;
                echo "<h3>Jam Lebih: " . ($jamLebih > 0 ? $jamLebih : 0) . " jam</h3>";

                $kompensasi = 0;
                if ($jamLebih > 0) {
                    if ($jamLebih > 1) {
                        $kompensasi += 50000;
                        $jamLebih -= 1;
                        $kompensasi += $jamLebih * 25000; 
                    } else {
                        $kompensasi += 50000; 
                    }
                }

                return $kompensasi;
            }

            $kompensasi = hitungKompensasiLembur($mulaiKerja, $pulangKerja);
            echo "<h3>Kompensasi Lembur: Rp " . number_format($kompensasi, 0, ',', '.') . "</h3>";
        }
    ?>
</body>
</html>
