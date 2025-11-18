<?php
$angkaBln = date("n");   // Ambil bulan saat ini (1–12)
$tahun = date("Y");      // Ambil tahun sekarang, untuk cek Februari (kabisat)

switch($angkaBln)
{
    case 1 : 
        $namaBln = "Januari";
        $hari = 31;
        break;

    case 2 :
        $namaBln = "Februari";

        // cek tahun kabisat:
        if (($tahun % 400 == 0) || ($tahun % 4 == 0 && $tahun % 100 != 0)) {
            $hari = 29;
        } else {
            $hari = 28;
        }
        break;

    case 3 :
        $namaBln = "Maret";
        $hari = 31;
        break;

    case 4 :
        $namaBln = "April";
        $hari = 30;
        break;

    case 5 :
        $namaBln = "Mei";
        $hari = 31;
        break;

    case 6 :
        $namaBln = "Juni";
        $hari = 30;
        break;

    case 7 :
        $namaBln = "Juli";
        $hari = 31;
        break;

    case 8 :
        $namaBln = "Agustus";
        $hari = 31;
        break;

    case 9 :
        $namaBln = "September";
        $hari = 30;
        break;

    case 10 :
        $namaBln = "Oktober";
        $hari = 31;
        break;

    case 11 :
        $namaBln = "November";
        $hari = 30;
        break;

    case 12 :
        $namaBln = "Desember";
        $hari = 31;
        break;
}

echo "Nama bulan sekarang: $namaBln<br>";
echo "Jumlah hari: $hari";
?>
