-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 06:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `k22cntt3_tranduyvu_day11`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc_tdv`
--

CREATE TABLE `danhmuc_tdv` (
  `MADM_TDV` char(5) NOT NULL,
  `TENDM_TDV` varchar(100) NOT NULL,
  `TRANGTHAI_TDV` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `danhmuc_tdv`
--

INSERT INTO `danhmuc_tdv` (`MADM_TDV`, `TENDM_TDV`, `TRANGTHAI_TDV`) VALUES
('00001', 'Tran Duy Vu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham_tdv`
--

CREATE TABLE `sanpham_tdv` (
  `SPID_TDV` char(10) NOT NULL,
  `TENSP_TDV` varchar(150) NOT NULL,
  `SOLUONG_TDV` int(11) NOT NULL,
  `GIAMUA_TDV` float NOT NULL,
  `GIABAN_TDV` float NOT NULL,
  `TRANGTHAI_TDV` tinyint(1) NOT NULL,
  `MADM_TDV` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `sanpham_tdv`
--

INSERT INTO `sanpham_tdv` (`SPID_TDV`, `TENSP_TDV`, `SOLUONG_TDV`, `GIAMUA_TDV`, `GIABAN_TDV`, `TRANGTHAI_TDV`, `MADM_TDV`) VALUES
('0000000001', 'Tran Duy Vu', 1, 100000000000000, 100000000000000, 1, '00001');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
