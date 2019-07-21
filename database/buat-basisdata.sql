--- Buat DB
DROP DATABASE IF EXISTS db_harga;
CREATE DATABASE db_harga;
--- Buat user
CREATE USER 'websoftid'@'localhost'
 IDENTIFIED BY 'websoftid';
--- Tambahkan akses user ke DB
GRANT ALL PRIVILEGES ON db_harga.*
 TO'websoftid'@'localhost'
