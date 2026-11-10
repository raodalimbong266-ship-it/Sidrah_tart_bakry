-- Jalankan sekali melalui phpMyAdmin jika database sidrah_tart sudah terlanjur dibuat.
USE sidrah_tart;
ALTER TABLE produk ADD COLUMN harga DECIMAL(12,2) NULL COMMENT 'Isi setelah harga dikonfirmasi pemilik' AFTER nama_file_foto;
