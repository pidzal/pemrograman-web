// File: script.js (untuk Latihan 3)

function cekKelulusan() {
    console.clear(); // bersihkan console sebelum jalan

    // 1. Ambil nilai dari input teks
    let nilai = document.getElementById("Nilai").value;

    // Cek apakah input kosong
    if (nilai === "") {
        console.log("⚠️ Silakan masukkan nilai terlebih dahulu! ⚠️");
        return;
    }

    // Konversi nilai menjadi tipe Number (Integer)
    nilai = parseInt(nilai);

    // 2. Terapkan logika if-else
    if (nilai >= 70) {
        // Blok ini berjalan jika kondisi benar (lulus)
        console.log("✅ SELAMAT! Nilai Anda " + nilai + ", Anda LULUS. ✅");
    } else {
        // Blok ini berjalan jika kondisi salah (tidak lulus)
        console.log("❌ Maaf, nilai Anda " + nilai + ", Anda BELUM LULUS. ❌");
    }
}