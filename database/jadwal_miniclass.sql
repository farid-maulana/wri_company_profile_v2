-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 08:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_polinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_miniclass`
--

CREATE TABLE `jadwal_miniclass` (
  `id` int(11) NOT NULL,
  `miniclass` enum('web','mobile','game','uiux') NOT NULL,
  `topik` varchar(250) NOT NULL,
  `tanggal_waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_miniclass`
--

INSERT INTO `jadwal_miniclass` (`id`, `miniclass`, `topik`, `tanggal_waktu`) VALUES
(1, 'web', 'Pengenalan HTML', '2022-09-02 19:00:00'),
(2, 'web', 'Pengenalan cSS', '2022-09-09 19:00:00'),
(3, 'mobile', 'Pengenalan Variabel Java', '2022-09-03 19:00:00'),
(4, 'mobile', 'Conditional', '2022-09-10 19:00:00'),
(5, 'uiux', 'Dasar UI UX', '2022-09-04 19:00:00'),
(6, 'uiux', 'Color Theory', '2022-09-11 19:00:00'),
(7, 'game', 'Pengenalan Unity', '2022-09-05 19:00:00'),
(8, 'game', 'Pengenalan C#', '2022-09-12 19:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal_miniclass`
--
ALTER TABLE `jadwal_miniclass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal_miniclass`
--
ALTER TABLE `jadwal_miniclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
