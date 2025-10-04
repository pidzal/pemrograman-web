// ambil element 
const tombol = document.getElementById("btn")
const text = document.getElementById("text")

// event klik tombol 
tombol.addEventListener("click", function () {
    text.textContent = "text berhasil diubah dengan javascript!";
    text.style.color = "green";
});