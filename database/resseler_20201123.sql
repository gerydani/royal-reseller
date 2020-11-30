-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 04:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resseler_20201123`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `id` int(11) NOT NULL,
  `nama_toko` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kode_booking` varchar(100) DEFAULT NULL,
  `no_resi` varchar(100) DEFAULT NULL,
  `marketplace` varchar(100) DEFAULT NULL,
  `catatan` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`id`, `nama_toko`, `alamat`, `kode_booking`, `no_resi`, `marketplace`, `catatan`, `created_at`, `updated_at`) VALUES
(1, 'Dodol Garut', NULL, NULL, '34232wefsdwr', 'Shopee', 'Pelan pelan , sakit', '2020-11-27 04:06:37', '2020-11-27 04:06:37'),
(2, 'Dodol Garut', 'Jl. Sadang Saip No.21, Sadang Serang, Kecamatan Coblong, Kota Bandung', 'jhfjsdfjsdkf9298239u', '34232wefsdwr', 'Tokopedia', 'Pelan pelan , sakit', '2020-11-27 04:08:40', '2020-11-27 04:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder_detail`
--

CREATE TABLE `tblorder_detail` (
  `id` int(11) NOT NULL,
  `trx_id` int(11) DEFAULT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorder_detail`
--

INSERT INTO `tblorder_detail` (`id`, `trx_id`, `kode_produk`, `qty`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 'yoyo', '123', '124345', '2020-11-27 04:06:37', '2020-11-27 04:06:37'),
(2, 1, 'yaya', '124', '555', '2020-11-27 04:06:37', '2020-11-27 04:06:37'),
(3, 1, 'yoyo', '121', '124345', '2020-11-27 04:06:37', '2020-11-27 04:06:37'),
(4, 2, 'yoyo', '1', '124345', '2020-11-27 04:08:40', '2020-11-27 04:08:40'),
(5, 2, 'yoyo', '2', '555', '2020-11-27 04:08:40', '2020-11-27 04:08:40'),
(6, 2, 'yaya', '3', '124345', '2020-11-27 04:08:40', '2020-11-27 04:08:40'),
(7, 2, 'yaya', '4', '555', '2020-11-27 04:08:40', '2020-11-27 04:08:40'),
(8, 2, 'yoyo', '5', '124345', '2020-11-27 04:08:40', '2020-11-27 04:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduk`
--

CREATE TABLE `tblproduk` (
  `id` int(11) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `bck_pass` varchar(199) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(199) CHARACTER SET latin1 DEFAULT NULL,
  `namaowner` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `namatoko` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `nohp` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `id_toko` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `bck_pass`, `password`, `namaowner`, `namatoko`, `email`, `nohp`, `id_toko`, `created_at`, `updated_at`) VALUES
(1, 'ceking123', NULL, 'ceking123', 'Saypul', 'Ceking69', 'saypul123@gmail.com', '081234567890', NULL, '2020-11-23 03:04:51', '2020-11-23 03:04:51'),
(2, 'ceking1234', NULL, 'ceking1234', 'Saypulidi', 'Ceking68', 'saypul123@gmail.com', '081234567890', NULL, '2020-11-23 03:06:46', '2020-11-23 03:06:46'),
(4, 'vinagarut123', 'vinagarut123', '$2y$10$J3axvwGDph7finAfZEajAO3dfTYGgTn6HbjcaFc7IlnTLHmLj.5Yi', 'vina', 'Dodol Garut', 'vinagarut@gmail.com', '081234567890', NULL, '2020-11-23 22:51:35', '2020-11-23 22:51:35'),
(5, 'hayabusha123', 'hayabusha123', '$2y$10$.xjVzpkx5lejpqL.bGwISedsuXeyFeZSLzFDShFe1iBEI73KRnvHa', 'Hayabusha', 'Herooin', 'hayabusha123@gmail.com', '081234567898', NULL, '2020-11-26 02:55:16', '2020-11-26 02:55:16'),
(6, 'ginogarut', 'ginogarut', '$2y$10$2QHs1RcjIR70k86Vsp8O5.MoIlzq5hXNOf1wQNiy.sV8CGPb0QyWy', 'Gino', 'Bersayap 2', 'gino321@gmail.com', '081267543210', NULL, '2020-11-26 03:00:56', '2020-11-26 03:00:56'),
(7, 'cimoymontog', 'cimoymontog', '$2y$10$ZkPaRaYw60jDgLvKWS9douqRZBP5pNBoYeCOfg71WDSFXD3GC1tEi', 'Cimoy', 'Bersayap 3', 'cimoy321@gmail.com', '081267543211', NULL, '2020-11-26 03:02:29', '2020-11-26 03:02:29'),
(8, 'toritori', 'toritori', '$2y$10$8l4jDqJ1BgyqmqrdW6zxEONYjlQ8MeyEgIPawNh7NZ607vHQmLFKK', 'tori', 'toritori', 'tori111@gmail.com', '081254328765', NULL, '2020-11-26 03:05:50', '2020-11-26 03:05:50'),
(9, 'goregore', 'goregore', '$2y$10$WreCeC9WH3/.96Nh7zuTAuUeEfXv9LSn/hkJTbZFAj3q5I9fOS1V6', 'Gore', 'Satanic', 'gore12@gmail.com', '081298765432', NULL, '2020-11-26 03:07:18', '2020-11-26 03:07:18'),
(10, 'aabbccdd', 'aabbccdd', '$2y$10$amdyTLQUJRg/cVmncMtwN.sKui2bQq5nVwktQkzGQ4gltBFmF4vGi', 'aabb', 'aa', 'aabb@gmail.com', '081254369876', NULL, '2020-11-26 03:26:25', '2020-11-26 03:26:25'),
(11, 'torigo11', 'torigo11', '$2y$10$bKiSFG1qv5sL0ToBVl5ayeVQsNBCIIvrxkKk343yj63hKCyN7/O/e', 'Torigo', 'Yohoo11', 'torigo11@gmail.com', '081235432987', NULL, '2020-11-29 20:12:45', '2020-11-29 20:12:45'),
(12, 'tayilo11', 'tayilo11', '$2y$10$MAc7NZw.WTIZqrGP2MAjKe6Tpl0PPFDv7XOW9AtYuacvsmU5o2tSS', 'Tayilo', 'Tayori', 'tayilo21@gmail.com', '081243218765', NULL, '2020-11-29 20:17:53', '2020-11-29 20:17:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblorder_detail`
--
ALTER TABLE `tblorder_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduk`
--
ALTER TABLE `tblproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblorder_detail`
--
ALTER TABLE `tblorder_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblproduk`
--
ALTER TABLE `tblproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
