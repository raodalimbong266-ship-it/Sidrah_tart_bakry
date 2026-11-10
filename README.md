# Website Sidrah Tart & Bakery

Website katalog dan profil usaha Sidrah Tart & Bakery, Belopa. Website ini berfungsi sebagai katalog informasi; pemesanan diarahkan ke WhatsApp dan produk tambahan dapat dilihat melalui Instagram.

## Tech stack
- PHP Native
- HTML5, CSS3, JavaScript
- MySQL/MariaDB (skema awal tersedia di `database/sidrah_tart.sql`)
- XAMPP dan Visual Studio Code

## Menjalankan secara lokal
1. Salin folder proyek ke `C:\xampp\htdocs\WEB SIDRAH TART_RAODA` (atau nama folder lain di `htdocs`).
2. Buka XAMPP Control Panel, jalankan **Apache**. Jalankan **MySQL** jika ingin menyiapkan database.
3. Buka `http://localhost/WEB%20SIDRAH%20TART_RAODA/` di browser.
4. Untuk menginisialisasi database, buka `http://localhost/phpmyadmin`, pilih menu **Import**, pilih `database/sidrah_tart.sql`, lalu tekan **Import/Go**.
5. Ganti file gambar di `assets/images/` dengan foto asli. Pertahankan nama file agar langsung terbaca oleh website.

## Daftar nama gambar
Simpan foto dengan nama file berikut ke folder `assets/images/`:
- `logo.png` — logo Sidrah
- `hero-cake.jpg` — foto utama kue tart pada Beranda
- `hero-donat.jpg` — foto banner Katalog
- `baking.jpg` — bahan/peralatan membuat kue untuk banner Profil/Kontak
- `toko-sidrah.jpg` — foto toko atau etalase usaha
- `kue-spesial.jpg` — foto aneka kue untuk bagian Visi/Misi
- `donat.jpg`, `donat-cokelat.jpg`, `kue-tart.jpg`, `roti-kecil.jpg`, `aneka-kue.jpg`
- `bento-cake.jpg`, `pudding.jpg`, `fondant-cake.jpg`, `snack-tower.jpg`, `custom-cake.jpg`, `roti-manis.jpg`, `snack-box.jpg`

Pastikan nama file dan ekstensi sama persis. Jika foto yang dimiliki berformat PNG, ubah juga nama pada `src` di file halaman atau simpan sebagai JPG.

## Catatan sebelum finalisasi
- Nomor WhatsApp saat ini contoh `62821234567890`; ganti dengan nomor resmi owner di `includes/header.php`, `views/beranda.php`, `views/kontak.php`, dan `assets/js/main.js`.
- Tautan Instagram mengarah ke `https://www.instagram.com/sidrahtart/`.
- Konfirmasi alamat, jam operasional, dan informasi bisnis dengan owner sebelum publikasi.
- Website belum menyimpan formulir ke database; formulir Kontak menyiapkan pesan lalu membuka WhatsApp.


## Catatan pembaruan
- Warna utama diselaraskan ke hijau tua dan krem identitas Sidrah Tart tanpa mengubah susunan/layout halaman.
- Kartu katalog menampilkan keterangan harga: 'Hubungi untuk informasi harga' sampai daftar harga resmi dikonfirmasi pemilik. Tidak ada nominal yang dibuat-buat.
- Struktur tabel `produk` kini menyediakan kolom `harga` (DECIMAL). Untuk database lama, jalankan `database/migrasi_tambah_harga.sql` satu kali melalui phpMyAdmin.
