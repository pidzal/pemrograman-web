<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Hitung Upah Karyawan per Golongan</title>
</head>
<body>
<h2>Hitung Upah Mingguan Karyawan Berdasarkan Golongan</h2>

<form method="post" action="">
  <label>Jumlah Jam Kerja per Minggu:</label><br>
  <input type="number" name="jam" min="0" required><br><br>

  <label>Pilih Golongan:</label><br>
  <select name="gol" required>
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
  </select>
  <br><br>

  <button type="submit">Hitung Upah</button>
</form>

<?php
if (isset($_POST['jam']) && isset($_POST['gol'])) {
    $jam = (int)$_POST['jam'];
    $gol = $_POST['gol'];

    // Upah per golongan
    $upah_gol = [
        'A' => 4000,
        'B' => 5000,
        'C' => 6000,
        'D' => 7500
    ];

    $upah_lembur = 3000; // sama untuk semua golongan

    // Ambil upah per jam sesuai golongan
    $upah_per_jam = $upah_gol[$gol];

    if ($jam > 48) {
        $jam_normal = 48;
        $jam_lembur = $jam - 48;
        $total = ($jam_normal * $upah_per_jam) + ($jam_lembur * $upah_lembur);
    } else {
        $total = $jam * $upah_per_jam;
    }

    echo "<p>Total upah untuk golongan <strong>$gol</strong>: <strong>Rp. " . number_format($total, 0, ',', '.') . "</strong></p>";
}
?>

</body>
</html>
