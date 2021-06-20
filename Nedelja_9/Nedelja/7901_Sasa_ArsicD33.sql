-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 12:58 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baza_prodaja`
--
CREATE DATABASE IF NOT EXISTS `7901_Sasa_ArsicD33` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci;
USE `7901_Sasa_ArsicD33`;

-- --------------------------------------------------------

--
-- Table structure for table `prodaja`
--

CREATE TABLE `prodaja` (
  `id` int(11) NOT NULL,
  `barkod` varchar(13) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` decimal(11,2) NOT NULL,
  `datum` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `prodaja`
--

INSERT INTO `prodaja` (`id`, `barkod`, `kolicina`, `cena`, `datum`) VALUES
(1, '001', 4, '501.60', '2021-06-17'),
(2, '001', 2, '250.80', '2021-06-17'),
(3, '002', 1, '107.80', '2021-06-17'),
(4, '005', 6, '7150.00', '2021-06-17'),
(5, '003', 4, '300.00', '2021-06-16'),
(6, '004', 9, '844.00', '2021-06-16'),
(7, '001', 4, '800.00', '2021-05-01'),
(8, '004', 3, '666.00', '2021-05-01'),
(9, '005', 4, '4500.00', '2021-05-01'),
(10, '003', 2, '334.00', '2021-05-01'),
(12, '789', 20, '220.00', '2021-06-17'),
(13, '789', 40, '275.00', '2021-06-17'),
(14, '789', 10, '242.00', '2021-06-17'),
(15, '776', 30, '50.00', '2021-05-01'),
(16, '761', 12, '120.00', '2021-06-16'),
(17, '761', 1, '10.00', '2021-06-16'),
(18, '761', 15, '150.00', '2021-05-01'),
(19, '001', 4, '567.00', '2021-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `barkod` varchar(13) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `naziv` varchar(30) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `cena` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`barkod`, `naziv`, `cena`) VALUES
('001', 'mleko', '114.00'),
('002', 'secer', '98.00'),
('003', 'brasno', '55.00'),
('004', 'ulje', '130.00'),
('005', 'sir', '1145.00'),
('761', 'beli luk', '80.00'),
('776', 'crni luk', '50.00'),
('789', 'paradajz', '200.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barkod` (`barkod`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`barkod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prodaja`
--
ALTER TABLE `prodaja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `prodaja`
--
ALTER TABLE `prodaja`
  ADD CONSTRAINT `prodaja_ibfk_1` FOREIGN KEY (`barkod`) REFERENCES `proizvodi` (`barkod`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
