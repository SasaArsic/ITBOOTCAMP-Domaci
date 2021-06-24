-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 01:54 PM
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
-- Database: `korpa_baza`
--
CREATE DATABASE IF NOT EXISTS `36D_Sasa_Arsic` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_nopad_ci;
USE `36D_Sasa_Arsic`;

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(11) NOT NULL,
  `datum_vreme` timestamp NOT NULL DEFAULT current_timestamp(),
  `ukupno` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `cena` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id`, `naziv`, `cena`) VALUES
(1, 'balon', '100.00'),
(2, 'bicikli', '1000.00'),
(3, 'autic', '300.00'),
(4, 'lutka', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpe`
--

CREATE TABLE `stavke_korpe` (
  `id` int(11) NOT NULL,
  `korpa_id` int(11) NOT NULL,
  `proizvod_id` int(11) NOT NULL,
  `cena` decimal(11,2) NOT NULL,
  `kolicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korpa_id` (`korpa_id`),
  ADD KEY `proizvod_id` (`proizvod_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD CONSTRAINT `stavke_korpe_ibfk_1` FOREIGN KEY (`korpa_id`) REFERENCES `korpa` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `stavke_korpe_ibfk_2` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvodi` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
