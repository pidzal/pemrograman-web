// Fungsi ubah teks & warna menggunakan document.getElementById()
function ubahDenganID() {
    const paragrafId = document.getElementById("teks-id");
    paragrafId.textContent = "✅ teks ini diubah dengan getElementById().";
    paragrafId.style.color = "green";
    paragrafId.style.fontWeight = "bold";
    console.log("berhasil diubah dengan getElementById()");
}

// Fungsi ubah teks  & warna menggunakan querySelector()
function ubahDenganQuery() {
    const paragrafClass = document.querySelector(".teks-class");
    paragrafClass.textContent = "⭐️ teks ini diubah dengan  querySelector().";
    paragrafClass.style.color = "blue";
    paragrafClass.style.fontStyle = "italic";
    console.log("berhasil diubah dengan querySelector()");
}