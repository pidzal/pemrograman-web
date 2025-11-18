<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Hitung Upah Karyawan</title>
</head>
<body>
<h2>Hitung Upah Mingguan Karyawan</h2>

<form method="post" action="">
  <label>Jumlah Jam Kerja per Minggu:</label><br>
  <input type="number" name="jam" min="0" required>
  <button type="submit">Hitung</button>
</form>

<?php
if (isset($_POST['jam'])) {
    $jam = (int)$_POST['jam'];

    $upah_per_jam = 2000;
    $upah_lembur = 3000;

    if ($jam > 48) {
        $jam_normal = 48;
        $jam_lembur = $jam - 48;
        $total = ($jam_normal * $upah_per_jam) + ($jam_lembur * $upah_lembur);
    } else {
        $total = $jam * $upah_per_jam;
    }

    echo "<p>Total upah: <strong>Rp. " . number_format($total, 0, ',', '.') . "</strong></p>";
}
?>

</body>
</html>