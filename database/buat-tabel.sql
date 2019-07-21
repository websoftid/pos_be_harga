--- Masuk ke DB
USE db_harga;

--- Buat tabel Kategori
DROP TABLE IF EXISTS data_kategori;
CREATE TABLE data_kategori (
 id TINYINT PRIMARY KEY AUTO_INCREMENT,
 kategori VARCHAR(30) NOT NULL
) ENGINE=InnoDB;

--- Buat tabel Produk
DROP TABLE IF EXISTS data_produk;
CREATE TABLE data_produk (
 id TINYINT PRIMARY KEY AUTO_INCREMENT,
 idkategori TINYINT NOT NULL,
 kode VARCHAR(30) UNIQUE NOT NULL,
 produk VARCHAR(30) NOT NULL
) ENGINE=InnoDB;

--- Buat tabel Harga
DROP TABLE IF EXISTS data_harga;
CREATE TABLE data_harga (
  id TINYINT PRIMARY KEY AUTO_INCREMENT,
  idproduk TINYINT NOT NULL,
  harga BIGINT NOT NULL,
  tglupdate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
