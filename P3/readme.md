# Instagram Profile Clone

Proyek ini berisi percobaan membuat tampilan **profil Instagram** sederhana menggunakan dua pendekatan berbeda:
1. [Bootstrap 5](https://getbootstrap.com)
2. [Tailwind CSS](https://tailwindcss.com)

Tujuannya untuk latihan memahami **CSS Framework**, utility classes, serta perbedaan Bootstrap dengan Tailwind.

---

## 🚀 Fitur yang Dibuat
- Header profil dengan foto, nama, tombol aksi (Edit Profil, Lihat Arsip).
- Statistik akun (kiriman, pengikut, diikuti).
- Highlight stories dengan lingkaran foto.
- Grid foto feed 3–4 kolom yang responsif.
- Efek hover & active pada elemen (gambar menggelap ketika ditekan).
- Favicon di tab browser.

---

## 📂 Struktur Proyek
📦 project-folder
┣ 📂 asset
┃ ┣ foto-profil.jpg
┃ ┣ highlight-1.jpg
┃ ┣ highlight-2.jpg
┃ ┣ post-1.jpg ... post-12.jpg
┃ ┗ favicon-16x16.png
┣ index-bootstrap.html
┣ index-tailwind.html
┗ README.md

yaml
Salin kode

---

## 🟦 Versi Bootstrap
File: **index-bootstrap.html**

### Cara pakai
1. Pastikan folder `asset/` berisi gambar yang digunakan.
2. Buka file `index-bootstrap.html` di browser.
3. Framework Bootstrap dimuat via CDN:
   ```html
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
Contoh Class yang Dipakai
d-flex, gap-3, me-4 → layout dengan flexbox & spacing.

cursor-pointer → kursor jadi tangan ketika diarahkan.

active:opacity-40 (CSS custom) → gambar feed menggelap saat ditekan.

small → ukuran teks lebih kecil.

my-4 → margin atas & bawah 1.5rem.

🌿 Versi Tailwind
File: index-tailwind.html

Cara pakai
Pastikan folder asset/ berisi gambar yang digunakan.

Buka file index-tailwind.html di browser.

Framework Tailwind dimuat via CDN:

html
Salin kode
<script src="https://cdn.tailwindcss.com"></script>
Contoh Class yang Dipakai
flex, gap-6, ml-[50px] → layout dengan flexbox & custom spacing.

w-[170px] h-[170px] → ukuran custom profile picture.

hover:bg-gray-700 → tombol berubah warna saat hover.

active:opacity-40 → gambar feed menggelap saat ditekan.

border-gray-600, bg-black text-white → dark theme.

📖 Perbedaan Utama
Bootstrap → punya utilitas siap pakai (gap-0 s/d gap-5, my-4, small), tapi skalanya terbatas.

Tailwind → sangat fleksibel, bisa pakai nilai custom (ml-[50px], w-[170px]), tapi verbose.

Keduanya mendukung hover & active state, hanya beda penulisan (:hover di CSS Bootstrap vs hover: di Tailwind).