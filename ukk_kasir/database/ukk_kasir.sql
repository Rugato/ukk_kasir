-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 05:27 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailpenjualan`
--

CREATE TABLE `detailpenjualan` (
  `DetailID` int(11) NOT NULL,
  `PenjualanID` int(11) NOT NULL,
  `ProdukID` int(11) NOT NULL,
  `JumlahProduk` int(11) NOT NULL,
  `Subtotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detailpenjualan`
--

INSERT INTO `detailpenjualan` (`DetailID`, `PenjualanID`, `ProdukID`, `JumlahProduk`, `Subtotal`) VALUES
(42, 22, 111, 1, '255000.00'),
(43, 23, 111, 1, '255000.00'),
(44, 24, 110, 1, '120000.00'),
(45, 25, 110, 1, '120000.00'),
(45, 26, 111, 1, '255000.00'),
(46, 27, 110, 1, '120000.00'),
(46, 28, 111, 1, '255000.00'),
(46, 29, 112, 1, '450000.00'),
(47, 30, 116, 1, '2500000.00'),
(48, 31, 113, 1, '600000.00'),
(49, 32, 108, 1, '800000.00'),
(50, 33, 110, 1, '120000.00'),
(50, 34, 111, 1, '255000.00'),
(51, 35, 117, 1, '30000.00'),
(53, 38, 109, 11, '11000.00'),
(54, 39, 109, 16, '11000.00'),
(55, 40, 109, 16, '11000.00'),
(56, 41, 111, 1, '255000.00');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `PelangganID` int(11) NOT NULL,
  `NamaPelanggan` varchar(255) NOT NULL,
  `nomor_meja` int(11) NOT NULL,
  `NomorTelepon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`PelangganID`, `NamaPelanggan`, `nomor_meja`, `NomorTelepon`) VALUES
(1, 'Lmemore', 1, ''),
(42, 'Lmemore', 1, ''),
(43, 'Lmemore', 1, ''),
(44, 'Lauel', 3, ''),
(45, 'Lauel', 3, ''),
(46, 'Raver', 2, ''),
(47, 'RuxeLV', 7, ''),
(48, 'Rugato', 2, ''),
(49, 'Lmemore', 2, ''),
(50, 'Adnan', 1, ''),
(51, 'Adnan', 1, ''),
(52, 'Adnan', 1, ''),
(53, 'Sonne', 6, ''),
(54, 'Sonne', 6, ''),
(55, 'Sonne', 6, ''),
(56, 'Sonne', 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `PenjualanID` int(11) NOT NULL,
  `TanggalPenjualan` date NOT NULL,
  `TotalHarga` decimal(10,2) NOT NULL,
  `PelangganID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`PenjualanID`, `TanggalPenjualan`, `TotalHarga`, `PelangganID`) VALUES
(42, '2024-02-26', '0.00', 0),
(43, '2024-02-26', '0.00', 0),
(44, '2024-02-26', '0.00', 0),
(45, '2024-02-26', '0.00', 0),
(46, '2024-02-26', '0.00', 0),
(47, '2024-02-26', '0.00', 0),
(48, '2024-02-26', '0.00', 0),
(49, '2024-02-26', '0.00', 0),
(50, '2024-02-26', '0.00', 0),
(51, '2024-02-26', '0.00', 0),
(52, '2024-02-26', '0.00', 0),
(53, '2024-02-26', '0.00', 0),
(54, '2024-02-27', '0.00', 0),
(55, '2024-02-27', '0.00', 0),
(56, '2024-02-27', '0.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `ProdukID` int(11) NOT NULL,
  `NamaProduk` varchar(255) NOT NULL,
  `Harga` decimal(10,2) NOT NULL,
  `Stok` int(11) NOT NULL,
  `Terjual` int(11) NOT NULL,
  `Foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`ProdukID`, `NamaProduk`, `Harga`, `Stok`, `Terjual`, `Foto`) VALUES
(109, 'Pangsit Pedas', '11000.00', 956, 44, '26022024043024.jpg'),
(110, 'Joki ke Silver', '120000.00', 498, 4, '26022024043635.png'),
(111, 'Joki ke Gold', '255000.00', 497, 6, '26022024051933.jpg'),
(112, 'Joki ke Platinum', '450000.00', 199, 1, '26022024071327.png'),
(113, 'Joki ke Diamond', '600000.00', 199, 1, '26022024071431.jpg'),
(114, 'Joki ke Ascendant', '880000.00', 100, 0, '26022024071501.jpg'),
(115, 'Joki ke Immortal', '1250000.00', 50, 0, '26022024071619.jpg'),
(116, 'Joki ke Radiant (Top 500)', '2500000.00', 19, 1, '26022024071734.jpg'),
(117, 'Joki ke Bronze', '30000.00', 997, 2, '26022024140808.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `NamaUser` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` enum('Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `NamaUser`, `Password`, `Level`) VALUES
(1, 'Ruxel', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(7, 'Petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `DetailID` (`DetailID`),
  ADD KEY `ProdukID` (`ProdukID`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`PelangganID`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`PenjualanID`),
  ADD KEY `PelangganID` (`PelangganID`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`ProdukID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailpenjualan`
--
ALTER TABLE `detailpenjualan`
  MODIFY `PenjualanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `PelangganID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `PenjualanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `ProdukID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
