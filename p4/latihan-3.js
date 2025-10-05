function cekKelulusan() {
    console.clear();
    let nilai = document.getElementById("Nilai").value;

    if (nilai === "") {
        console.log("⚠️ Silakan masukkan nilai terlebih dahulu! ");
        return;
    }

    nilai = parseInt(nilai);

    if (nilai >= 70) {
        console.log("✅ SELAMAT! Nilai Anda " + nilai + ", Anda LULUS. ✅");
    } else {
        console.log("❌ Maaf, nilai Anda " + nilai + ", Anda BELUM LULUS. ❌");
    }
}