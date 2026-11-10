CREATE DATABASE IF NOT EXISTS sidrah_tart CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE sidrah_tart;

CREATE TABLE IF NOT EXISTS kategori_produk (
  id_kategori INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nama_kategori VARCHAR(100) NOT NULL,
  slug VARCHAR(100) NOT NULL UNIQUE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS produk (
  id_produk INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_kategori INT UNSIGNED NULL,
  nama_produk VARCHAR(150) NOT NULL,
  deskripsi TEXT NULL,
  nama_file_foto VARCHAR(255) NULL,
  harga DECIMAL(12,2) NULL COMMENT 'Isi setelah harga dikonfirmasi pemilik',
  unggulan TINYINT(1) NOT NULL DEFAULT 0,
  status ENUM('aktif','nonaktif') NOT NULL DEFAULT 'aktif',
  dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT fk_produk_kategori FOREIGN KEY (id_kategori) REFERENCES kategori_produk(id_kategori) ON DELETE SET NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS pesan_kontak (
  id_pesan INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(120) NOT NULL,
  nomor_whatsapp VARCHAR(30) NULL,
  isi_pesan TEXT NOT NULL,
  status ENUM('baru','dibaca','selesai') NOT NULL DEFAULT 'baru',
  dibuat_pada TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

INSERT IGNORE INTO kategori_produk (nama_kategori, slug) VALUES
('Donat','donat'),('Kue Tart','kue-tart'),('Roti & Roti Kecil','roti'),('Aneka Kue','aneka-kue'),('Lainnya','lainnya');
