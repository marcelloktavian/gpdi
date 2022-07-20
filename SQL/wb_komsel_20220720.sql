-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2022 at 04:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gpdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `wb_komsel`
--

CREATE TABLE `wb_komsel` (
  `id` int(11) NOT NULL,
  `nama_komsel` varchar(50) DEFAULT NULL,
  `pks` varchar(100) DEFAULT NULL,
  `hp_pks` varchar(15) DEFAULT NULL,
  `wilayah` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wb_komsel`
--

INSERT INTO `wb_komsel` (`id`, `nama_komsel`, `pks`, `hp_pks`, `wilayah`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Mahanaim', 'Elika', '087737082155 \n', 'Youth', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(2, 'Exodus', 'Teofilus', '082218360780', 'Youth', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(3, 'D\'Worshippers', 'Marline', '082124248434', 'Youth', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(4, 'D\'Fruits', 'Winda', '089512121393', 'Youth', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(5, 'Faith Wisdom', 'Lydia', '089686171208', 'Youth', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(6, 'Aoa', 'Vanda', '087833197646', 'Youth', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(7, 'Disciple', 'Deflin', '082118529259', 'Youth', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(8, 'PPA', 'Delmin', '087719062744', 'Youth', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(9, 'IMANUEL', 'Bpk Dedi Herianto', '085974214289', 'Pesantren, Taman Mutiara, Jln. Sentral, Cihanjuang, Citeureup', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(10, 'EKLESIA', 'Bpk Hesron T', '085220430187', 'Padalarang, Cilame, Graha Bukit Raya, Haji Gofur, Padasuka', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(11, 'MARANATHA', 'Bpk J. Simatupang', '08125004483', 'Kota Mas, Nusa Hijau, Nusa Sari, Cipageran, Kolmas', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(12, 'AGAPE', 'Ibu Yani Darmanto', '081214272878', 'Pondok Cipta Mas', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(13, 'EBENHAEZER', 'Bpk Edy', '081220698990 ', 'Pondok Cipta Mas, Cibeber', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(14, 'ABBALOVE', 'Ibu Mey', '081322091726 ', 'Pondok Cipta Mas', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(15, 'BETHESDA', 'Ibu Rosmery', '081321200649 \n', 'Cibogo Atas dan sekitarnya', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(16, 'UNITY', 'Bpk Yulius', '087822394336 \n', 'Cimahi', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(17, 'BERMAZMUR', 'Bpk Iwan Nadeak', '081320715079', 'Batujajar, Cimareme, Cililin, Cihamplas', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(18, 'BETHANY', 'Bpk Heri Purnama', '082214440563 ', 'Cibogo Bawah dan sekitarnya', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(19, 'HALELUYA', 'Bpk Didik', '087837690524 ', 'Bandung Kota', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(20, 'SHALOM', 'Bpk Rudy', '081222397563 \n', 'Cimindi (gang Arsad), Bumi Indah, Asrama Kipal', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(21, 'BEREA', 'Ibu Pitawati', '081382523228 \n', 'Cimindi, Cigugur, Cibaligo, Leuwi Gajah', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(22, 'BERDASI', 'Bpk Jhon Litbagay', '081321591234 \n', 'Kebon Kopi, Rancabentang, Parmindo, Cijerah', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(23, 'KANAAN', 'Ibu Arni', '082117944921 \n', 'Cigugut Tengah, Gunung Batu', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(24, 'HOSANA', 'Ibu Tri', '0881023715906 \n', 'Baros, Wr. Contong, Pondok Mas, Jln. Cijerah', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(25, 'HOSEA', 'Bpk Encung', '081802061434 ', 'Lembur Sawah, Baros Senang, Cimahi Selatan', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(26, 'GALILEA', 'Bpk B. Siagian', '081320362203', 'Margaasih', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(27, 'EDEN', 'Bpk David', '08102689128 \n', 'Margaasih', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(28, 'ELSHADAI', 'Ibu Pipit', '081221756695 \n', 'Margaasih', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(29, 'SILOAM', 'Ibu Lilis Bambang', '085217784749 \n', 'Margaasih', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL),
(30, 'Belum Ada', '-', '-', '-', '0000-00-00 00:00:00', 0, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wb_komsel`
--
ALTER TABLE `wb_komsel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wb_komsel`
--
ALTER TABLE `wb_komsel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
