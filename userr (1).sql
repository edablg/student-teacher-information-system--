-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Haz 2022, 19:12:47
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `project3`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `userr`
--

CREATE TABLE `userr` (
  `ssn` varchar(20) NOT NULL,
  `role` varchar(10) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `userr`
--

INSERT INTO `userr` (`ssn`, `role`, `Password`) VALUES
('i1', 'instructor', '123'),
('i2', 'instructor', '456'),
('i3', 'instructor', '111'),
('i4', 'instructor', '222'),
('i5', 'instructor', '444'),
('i6', 'instructor', '555'),
('i7', 'instructor', '666'),
('i8', 'instructor', '777'),
('i9', 'instructor', '888'),
('s1', 'student', '789'),
('s2', 'student', '7894'),
('s3', 'student', '999'),
('s30', 'student', '1010'),
('s4', 'student', '1111'),
('s40', 'student', '1212'),
('s5', 'student', '1313'),
('s6', 'student', '333');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`ssn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
