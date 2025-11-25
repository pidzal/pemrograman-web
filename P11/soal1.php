<!DOCTYPE html>
<html>
<head>
    <title>Hitung Saldo Akhir Tabungan</title>
</head>
<body>

<h2>Hitung Saldo Akhir Setelah N Bulan</h2>

<form method="post">
    Saldo Awal : <input type="number" name="saldo" required><br><br>
    Lama Menabung (N bulan): <input type="number" name="bulan" required><br><br>
    <input type="submit" value="Hitung">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $saldo = $_POST['saldo'];
    $n = $_POST['bulan'];

    for ($i = 1; $i <= $n; $i++) {

        if ($saldo < 1100000) {
            $bunga = 0.03; 
        } else {
            $bunga = 0.04;  
        }

        $bunga_bulanan = $saldo * ($bunga / 12);

        $saldo = $saldo + $bunga_bulanan;

        $saldo = $saldo - 9000;
    }

    echo "<h3>Saldo akhir setelah $n bulan adalah: Rp " . number_format($saldo, 0, ',', '.') . "</h3>";
}
?>

</body>
</html>
