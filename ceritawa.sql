-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2026 at 12:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `ceritawa`;
USE `ceritawa`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `profile_picture` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `karya`
--

CREATE TABLE `karya` (
  `id_karya` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `judul_karya` varchar(200) NOT NULL,
  `penulis_karya` varchar(200) NOT NULL,
  `email_penulis_karya` varchar(200) NOT NULL,
  `tipe_karya` enum('anekdot','komik') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_karya`),
  KEY `fk_id_user_karya` (`id_user`),
  CONSTRAINT `fk_id_user_karya`
    FOREIGN KEY (`id_user`)
    REFERENCES `users` (`id_user`)
    ON DELETE RESTRICT
    ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `anekdot`
--

CREATE TABLE `anekdot` (
  `id_anekdot` int NOT NULL AUTO_INCREMENT,
  `id_karya` int DEFAULT NULL,
  `konten_anekdot` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_anekdot`),
  KEY `fk_id_karya_anekdot` (`id_karya`),
  CONSTRAINT `fk_id_karya_anekdot`
    FOREIGN KEY (`id_karya`)
    REFERENCES `karya` (`id_karya`)
    ON DELETE CASCADE
    ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `komik`
--

CREATE TABLE `komik` (
  `id_komik` int NOT NULL AUTO_INCREMENT,
  `id_karya` int NOT NULL,
  `deskripsi_komik` text NOT NULL,
  `file_name_komik` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_komik`),
  KEY `fk_id_karya_komik` (`id_karya`),
  CONSTRAINT `fk_id_karya_komik`
    FOREIGN KEY (`id_karya`)
    REFERENCES `karya` (`id_karya`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Trigger for table `anekdot`
--

DELIMITER $$

CREATE TRIGGER `tg_set_id_karya_anekdot`
BEFORE INSERT ON `anekdot`
FOR EACH ROW
BEGIN
    DECLARE last_id_karya INT;

    SELECT id_karya INTO last_id_karya
    FROM karya
    ORDER BY id_karya DESC
    LIMIT 1;

    SET NEW.id_karya = last_id_karya;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Trigger for table `komik`
--

DELIMITER $$

CREATE TRIGGER `tg_set_id_karya_komik`
BEFORE INSERT ON `komik`
FOR EACH ROW
BEGIN
    DECLARE last_id_karya INT;

    SELECT id_karya INTO last_id_karya
    FROM karya
    ORDER BY id_karya DESC
    LIMIT 1;

    SET NEW.id_karya = last_id_karya;
END$$

DELIMITER ;

COMMIT;