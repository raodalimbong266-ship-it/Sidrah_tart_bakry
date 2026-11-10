# Website Sidrah Tart & Bakery

Website profil usaha dan katalog digital **Sidrah Tart & Bakery**, Belopa, Kabupaten Luwu. Website ini dirancang untuk membantu pelanggan memperoleh informasi mengenai usaha dan melihat berbagai produk kue yang tersedia.

Pemesanan dilakukan melalui WhatsApp, sedangkan informasi dan pilihan produk lainnya dapat dilihat melalui Instagram.

## 1. Teknologi yang Digunakan

- PHP Native
- HTML5
- CSS3
- JavaScript
- MySQL/MariaDB
- XAMPP
- Visual Studio Code

## 2. Fitur Website

- Halaman Beranda
- Profil dan informasi usaha
- Katalog produk berdasarkan kategori
- Informasi produk dan harga
- Tombol pemesanan melalui WhatsApp
- Tautan Instagram
- Halaman Kontak dan informasi alamat

## 3. Struktur Proyek

```text
sidrah_web/
├── assets/
│   ├── css/
│   ├── images/
│   └── js/
├── config/
├── database/
│   ├── sidrah_tart.sql
│   └── migrasi_tambah_harga.sql
├── includes/
├── views/
├── index.php
└── README.md
```

## 4. Cara Menjalankan Website

1. Pastikan XAMPP sudah terinstal di laptop.
2. Salin folder proyek ke dalam direktori `C:\xampp\htdocs\`.
3. Buka XAMPP Control Panel.
4. Jalankan Apache dan MySQL.
5. Buka phpMyAdmin melalui `http://localhost/phpmyadmin`.
6. Buat database dengan nama `sidrah_tart`.
7. Pilih menu Import dan unggah file `database/sidrah_tart.sql`.
8. Buka website melalui browser menggunakan alamat:

   `http://localhost/nama_folder_proyek/`

Sesuaikan `nama_folder_proyek` dengan nama folder yang digunakan di dalam `htdocs`.

## 5. Integrasi Database

Website menggunakan MySQL/MariaDB sebagai penyimpanan data produk.

Data produk dihubungkan dengan website menggunakan PHP dan PDO sehingga informasi katalog dapat ditampilkan secara dinamis.

Informasi produk yang tersimpan dalam database dapat diperbarui melalui phpMyAdmin, sesuai struktur tabel yang tersedia.

Untuk database lama yang belum memiliki kolom harga, jalankan file migrasi `database/migrasi_tambah_harga.sql` satu kali melalui phpMyAdmin, setelah memastikan struktur database sesuai.

## 6. Media dan Gambar

Gambar website disimpan di dalam folder `assets/images/`.

Beberapa nama file gambar yang digunakan antara lain:

- `logo.png`
- `hero-cake.jpg`
- `hero-donat.jpg`
- `baking.jpg`
- `toko-sidrah.jpg`
- `kue-spesial.jpg`
- `donat.jpg`
- `donat-cokelat.jpg`
- `kue-tart.jpg`
- `roti-kecil.jpg`
- `aneka-kue.jpg`
- `bento-cake.jpg`
- `pudding.jpg`
- `fondant-cake.jpg`
- `snack-tower.jpg`
- `custom-cake.jpg`
- `roti-manis.jpg`
- `snack-box.jpg`

Nama file dan ekstensi gambar harus disesuaikan dengan pemanggilan gambar pada kode website.

## 7. Informasi Kontak

- Instagram: [@sidrahtart](https://www.instagram.com/sidrahtart/)
- WhatsApp: Digunakan sebagai media komunikasi dan pemesanan pelanggan.
- Lokasi usaha: Belopa, Kabupaten Luwu, Sulawesi Selatan.

Nomor WhatsApp, alamat lengkap, dan jam operasional mengikuti informasi resmi dari pemilik usaha.

## 8. Batasan Sistem

Website ini berfungsi sebagai media informasi dan katalog digital, bukan sistem e-commerce.

Website belum menyediakan:
- Keranjang belanja.
- Pembayaran online.
- Login pelanggan.
- Pengelolaan stok otomatis.
- Penyimpanan formulir kontak ke database.

Proses pemesanan tetap dilakukan melalui komunikasi langsung dengan pihak Sidrah Tart & Bakery melalui WhatsApp.

## 9. Pengembang

**Proyek:** Website Profil dan Katalog Digital Sidrah Tart & Bakery

**Mata Kuliah:** Project Mandiri

**Program Studi:** D4 Teknologi Rekayasa Multimedia

**Institusi:** Politeknik Dewantara Palopo

**Pengembang:** Raoda

## 10. Catatan Pengembangan

Website dikembangkan sebagai proyek mata kuliah Project Mandiri melalui tahapan analisis kebutuhan mitra, perancangan UI/UX, pembuatan prototype, pengembangan website, dan integrasi database.

Repository ini digunakan sebagai dokumentasi kode sumber dan hasil pengembangan proyek.
