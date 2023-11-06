-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 11:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bengkel_xxx`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_nasabah`
--

CREATE TABLE `data_nasabah` (
  `No_rekening` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `notlp` varchar(12) NOT NULL,
  `noplat` varchar(10) NOT NULL,
  `nama_kendaraan` varchar(25) NOT NULL,
  `Tipe_kendaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_nasabah`
--

INSERT INTO `data_nasabah` (`No_rekening`, `nama`, `alamat`, `notlp`, `noplat`, `nama_kendaraan`, `Tipe_kendaraan`) VALUES
('12345', 'ilham', 'padang timur kuranji', '082171215614', 'BA 5678 EY', 'scoopy', 'matic'),
('P-001', 'ILHAM ', 'padang', '0812345534', 'BA 1101 VJ', 'Agia', 'Matic');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_rekening` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `noplat` varchar(20) NOT NULL,
  `nama_kendaraan` varchar(25) NOT NULL,
  `tipe_kendaraan` varchar(20) NOT NULL,
  `layanan_service` varchar(25) NOT NULL,
  `biaya_service` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_rekening`, `nama`, `noplat`, `nama_kendaraan`, `tipe_kendaraan`, `layanan_service`, `biaya_service`) VALUES
('12345', 'ilham', 'BA 5678 EY', 'scoopy', 'matic', 'Tipe A', 1500000),
('12345', 'ilham', 'BA 5678 EY', 'scoopy', 'matic', 'Tipe A', 1500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_nasabah`
--
ALTER TABLE `data_nasabah`
  ADD PRIMARY KEY (`No_rekening`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
