<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <title>Cek Tahun Kabisat</title>
</head>
<body>

<h2>Cek Tahun Kabisat</h2>

<form method="post" action="">
  <label>Tahun:</label><br>
  <input type="number" name="tahun" required>
  <button type="submit">Cek</button>
</form>

<?php
if (isset($_POST['tahun'])) {
    $t = (int)$_POST['tahun'];

    if (($t % 400 == 0) || ($t % 4 == 0 && $t % 100 != 0)) {
        echo "<p><strong>$t adalah tahun kabisat</strong></p>";
    } else {
        echo "<p><strong>$t bukan tahun kabisat</strong></p>";
    }
}
?>

</body>
</html>
