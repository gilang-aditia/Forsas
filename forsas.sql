-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2021 at 09:32 AM
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
-- Database: `forsas`
--

-- --------------------------------------------------------

--
-- Table structure for table `kantor`
--

CREATE TABLE `kantor` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kantor` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kantor`
--

INSERT INTO `kantor` (`id`, `nama_kantor`, `alamat`, `no_telp`) VALUES
(1, 'STO Wonosari', 'Jl Pangandaran', '0274-567890'),
(4, 'Telkom Witel', 'Jl Yos Sudarso no 9', '12');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` varchar(20) NOT NULL,
  `id_kantor` bigint(20) NOT NULL,
  `tgl_laporan` date NOT NULL,
  `mesin_tempel` varchar(255) NOT NULL,
  `perahu_karet` varchar(255) NOT NULL,
  `tenda` varchar(255) NOT NULL,
  `pompa` varchar(255) NOT NULL,
  `genset_pln` varchar(255) NOT NULL,
  `bbm` varchar(255) NOT NULL,
  `kapasitas` varchar(255) NOT NULL,
  `genangan_air` varchar(255) NOT NULL,
  `catudaya` varchar(255) NOT NULL,
  `cuaca` varchar(25) NOT NULL,
  `pln` varchar(255) NOT NULL,
  `genset_pompa` varchar(255) NOT NULL,
  `suhu_central` varchar(255) NOT NULL,
  `suhu_trans` varchar(255) NOT NULL,
  `suhu_rect` varchar(255) NOT NULL,
  `nama_pelapor` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_kantor`, `tgl_laporan`, `mesin_tempel`, `perahu_karet`, `tenda`, `pompa`, `genset_pln`, `bbm`, `kapasitas`, `genangan_air`, `catudaya`, `cuaca`, `pln`, `genset_pompa`, `suhu_central`, `suhu_trans`, `suhu_rect`, `nama_pelapor`, `kondisi`, `foto`, `created_at`, `updated_at`) VALUES
('SAS-001', 2, '2021-06-29', 'Ada', 'Ada', 'Ada', 'Standby', 'On', '1', '1', 'Ada', '1', '1', 'On', 'Standby', '1', '1', '1', 'Naja', '123', '368-hoodie.png', '2021-06-29 04:49:27', '2021-06-29 04:49:27'),
('SAS-002', 2, '2021-06-29', 'Ada', 'Ada', 'Ada', 'Standby', 'On', '123', '123', 'Ada', '123', '123', 'On', 'Standby', '123', '123', '123', 'Naja', '123', '730-Crewneck_Sweatshirt_Mockup_by_Miksa.png', '2021-06-29 04:57:09', '2021-06-29 04:57:09'),
('SAS-003', 2, '2021-06-29', 'Ada', 'Ada', 'Ada', 'Standby', 'On', '123', '142', 'Ada', '4123', '243', 'On', 'Standby', '145', '156', '156', 'Naja', '243', '613-Crewneck_Sweatshirt_Mockup_by_Miksa.png', '2021-06-29 06:13:45', '2021-06-29 06:13:45'),
('SAS-004', 1, '2021-06-29', 'Ada', 'Ada', 'Ada', 'Standby', 'On', '5', '5', 'Ada', '5', '5', 'On', 'Standby', '5', '5', '5', 'Naja', '5', '691-hoodie.png', '2021-06-29 06:32:22', '2021-06-29 06:32:22'),
('SAS-005', 1, '2021-07-05', 'Ada', 'Ada', 'Ada', 'Standby', 'On', '123', '123', 'Ada', '123', '123', 'On', 'Standby', '123', '123', '123', 'Naja', '123', '611-d-call.png', '2021-07-05 06:02:15', '2021-07-05 06:02:15'),
('SAS-006', 4, '2021-07-13', 'Ada', 'Ada', 'Ada', 'Standby', 'On', '1', '1', 'Ada', '1', '1', 'On', 'Standby', '1', '1', '1', 'Naja', '1', '17-Crewneck_Sweatshirt_Mockup_by_Miksa1.png', '2021-07-13 08:57:04', '2021-07-13 08:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `nik`, `password`) VALUES
(1, 'Naja', 'najanailaa@gmail.com', '1202184084', '$2y$10$uafOOBJSLxqIcyTAyGG22etVUZCd11Y783n9rE2M2GPJg.3K3sTae');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kantor`
--
ALTER TABLE `kantor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kantor`
--
ALTER TABLE `kantor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
