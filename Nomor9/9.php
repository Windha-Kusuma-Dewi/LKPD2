<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="9.css">
    <title>Lembar Uang</title>
</head>
<body>
    <h1>Menghitung pecahan lembar <br>uang rupiah</h1>

    <form action="hasil.php" method="post">
        <label for="jumlah">Uang : </label>
        <input type="number" id="jumlah" name="jumlah" min="1" required>
        <input type="submit" value="Jumlah">
    </form>
</body>
</html>