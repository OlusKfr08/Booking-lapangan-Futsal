CREATE DATABASE IF NOT EXISTS futsal_db;
USE futsal_db;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(255)
);

CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  tanggal DATE,
  jam_mulai TIME,
  jam_selesai TIME,
  status ENUM('pending', 'confirmed', 'canceled') DEFAULT 'pending'
);