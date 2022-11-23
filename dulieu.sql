-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 04:30 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dulieu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` text COLLATE utf8_unicode_nopad_ci NOT NULL,
  `password` text COLLATE utf8_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `password`) VALUES
(1, 'nguyen', '31102002');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `IDNV` int(11) NOT NULL,
  `Hoten` text COLLATE utf8_unicode_nopad_ci NOT NULL,
  `IDPB` varchar(11) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `Diachi` text COLLATE utf8_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`IDNV`, `Hoten`, `IDPB`, `Diachi`) VALUES
(1, 'nguyên', 'pb01', 'Đà nẵng'),
(2, 'Linh', 'pb01', 'da nang'),
(3, 'đăng', 'pb02', 'quảng nam'),
(4, 'ngoc', 'pb02', 'da nang'),
(5, 'phúc', 'pb03', 'đà nẵng'),
(6, 'quyên', 'pb03', 'Đà nẵng'),
(8, 'hằng', 'pb01', 'quảng nam');

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `IDPB` varchar(11) COLLATE utf8_unicode_nopad_ci NOT NULL,
  `Tenpb` text COLLATE utf8_unicode_nopad_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_nopad_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`IDPB`, `Tenpb`, `mota`) VALUES
('pb01', 'Phong ban 1', '...'),
('pb02', 'phong ban 2', '...'),
('pb03', 'phong ban 3', '...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`IDNV`),
  ADD KEY `IDPB` (`IDPB`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`IDPB`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `IDNV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_1` FOREIGN KEY (`IDPB`) REFERENCES `phongban` (`IDPB`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
