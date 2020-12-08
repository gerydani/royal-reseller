-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 09:14 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reseller_23112020`
--

-- --------------------------------------------------------

--
-- Table structure for table `marketplace`
--

CREATE TABLE `marketplace` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketplace`
--

INSERT INTO `marketplace` (`id`, `name`, `desc`) VALUES
(1, 'tokopedia', 'toko'),
(2, 'bukalapak', 'buka'),
(3, 'shopee', 'shop');

-- --------------------------------------------------------

--
-- Table structure for table `peraturan`
--

CREATE TABLE `peraturan` (
  `id` int(11) NOT NULL,
  `Peraturan` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peraturan`
--

INSERT INTO `peraturan` (`id`, `Peraturan`, `updated_at`, `created_at`) VALUES
(10, 'Kecelakaan akibat kelalaian pengemudi masih sering terjadi. Sepanjang tahun 2019, sudah ada 15 orang yang meninggal karena kecelakaan lalu lintas, terutama di jalan tol. Mengendarai kendaraan saat mengantuk adalah salah satu penyumbang terbesar dari angka di atas. Hal ini bisa menyebabkan kecelakaan lalu lintas beruntun yang berakibat merugikan banyak orang. Insiden kecelakaan karena kelalaian ini bisa terjadi kapan saja, baik siang maupun malam. Maka kita harus selalu berkonsentrasi ketika mengendarai kendaraan di jalanan. Selain menjadi penyebab kecelakaan, kita juga bisa menjadi korban.', '2020-12-03 00:33:16', '2020-12-03 00:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

CREATE TABLE `tblorder` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `booking_code` varchar(100) DEFAULT NULL,
  `no_resi` varchar(100) DEFAULT NULL,
  `notes` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trx_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`id`, `shop_id`, `address`, `booking_code`, `no_resi`, `notes`, `status`, `trx_date`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL, '34232wefsdwr', 'Pelan pelan , sakit', 1, NULL, '2020-11-27 04:06:37', '2020-12-02 20:46:55'),
(2, 4, 'Jl. Sadang Saip No.21, Sadang Serang, Kecamatan Coblong, Kota Bandung', 'jhfjsdfjsdkf9298239u', '34232wefsdwr', 'Pelan pelan , sakit', 0, NULL, '2020-11-27 04:08:40', '2020-12-02 20:46:57'),
(5, 3, 'dsfsf', 'gsdgdsg', 'dsgsg', 'sdgsdg', 1, '2020-12-09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblorder_detail`
--

CREATE TABLE `tblorder_detail` (
  `id` int(11) NOT NULL,
  `trx_id` int(11) DEFAULT NULL,
  `prod_id` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `capital_price` int(11) DEFAULT NULL,
  `agreed_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblorder_detail`
--

INSERT INTO `tblorder_detail` (`id`, `trx_id`, `prod_id`, `qty`, `capital_price`, `agreed_price`, `created_at`, `updated_at`) VALUES
(1, 1, '2', '123', 124345, NULL, '2020-11-27 04:06:37', '2020-11-27 04:06:37'),
(3, 2, '4', '121', 124345, NULL, '2020-11-27 04:06:37', '2020-11-27 04:06:37'),
(4, 5, '5', '1', 124345, NULL, '2020-11-27 04:08:40', '2020-11-27 04:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(11) NOT NULL,
  `prod_id` varchar(100) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `sku` varchar(100) NOT NULL,
  `capital_price` int(11) DEFAULT NULL,
  `agreed_price` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `dimension` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `prod_id`, `name`, `sku`, `capital_price`, `agreed_price`, `weight`, `dimension`, `status`, `created_at`, `updated_at`) VALUES
(5, '2', 'alan ganteng', 'le', 10000, 15000, 1000, '12x13x14', 0, NULL, '2020-12-03 20:59:26'),
(6, '4', 'klorofil', 'kloro', 50000, 60000, 213, '12x45x23', 0, '2020-12-03 20:39:59', '2020-12-03 21:04:57'),
(8, '5', 'trwrwr', 'kloro', 1241424, 5235253, 213, '342f234', 1, '2020-12-03 20:42:31', '2020-12-03 20:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbltoko`
--

CREATE TABLE `tbltoko` (
  `id` int(10) NOT NULL,
  `id_user` int(10) DEFAULT NULL,
  `nama_toko` varchar(255) DEFAULT NULL,
  `username_mp` varchar(255) NOT NULL,
  `password_mp` varchar(255) NOT NULL,
  `status` varchar(255) DEFAULT NULL,
  `marketplace` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltoko`
--

INSERT INTO `tbltoko` (`id`, `id_user`, `nama_toko`, `username_mp`, `password_mp`, `status`, `marketplace`, `created_at`, `updated_at`) VALUES
(2, 2, 'breng breng', 'alanyy', 'nnfsdns', 'aktif', 2, '2020-12-08 04:27:47', '2020-12-08 04:27:47'),
(3, 4, 'saf', 'as', 'fa', 'aktif', 3, '2020-12-08 04:27:52', '2020-12-08 04:27:52'),
(4, 3, 'safas', 'safas', 'safasf', 'safasf', 1, '2020-12-08 05:50:20', '2020-12-08 05:50:20');

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
(1, 'ceking123', NULL, 'ceking123', 'Saypul', 'Ceking69', 'saypul123@gmail.com', '081234567890', '2', '2020-11-23 03:04:51', '2020-11-23 03:04:51'),
(2, 'ceking1234', NULL, 'ceking1234', 'Saypulidi', 'Ceking68', 'saypul123@gmail.com', '081234567890', '1', '2020-11-23 03:06:46', '2020-11-23 03:06:46'),
(3, 'tayilo11', 'tayilo11', '$2y$10$MAc7NZw.WTIZqrGP2MAjKe6Tpl0PPFDv7XOW9AtYuacvsmU5o2tSS', 'Tayilo', 'Tayori', 'tayilo21@gmail.com', '081243218765', NULL, '2020-11-29 20:17:53', '2020-11-29 20:17:53'),
(4, 'vinagarut123', 'vinagarut123', '$2y$10$J3axvwGDph7finAfZEajAO3dfTYGgTn6HbjcaFc7IlnTLHmLj.5Yi', 'vina', 'Dodol Garut', 'vinagarut@gmail.com', '081234567890', '3', '2020-11-23 22:51:35', '2020-11-23 22:51:35'),
(5, 'hayabusha123', 'hayabusha123', '$2y$10$.xjVzpkx5lejpqL.bGwISedsuXeyFeZSLzFDShFe1iBEI73KRnvHa', 'Hayabusha', 'Herooin', 'hayabusha123@gmail.com', '081234567898', NULL, '2020-11-26 02:55:16', '2020-11-26 02:55:16'),
(6, 'ginogarut', 'ginogarut', '$2y$10$2QHs1RcjIR70k86Vsp8O5.MoIlzq5hXNOf1wQNiy.sV8CGPb0QyWy', 'Gino', 'Bersayap 2', 'gino321@gmail.com', '081267543210', NULL, '2020-11-26 03:00:56', '2020-11-26 03:00:56'),
(7, 'cimoymontog', 'cimoymontog', '$2y$10$ZkPaRaYw60jDgLvKWS9douqRZBP5pNBoYeCOfg71WDSFXD3GC1tEi', 'Cimoy', 'Bersayap 3', 'cimoy321@gmail.com', '081267543211', NULL, '2020-11-26 03:02:29', '2020-11-26 03:02:29'),
(8, 'toritori', 'toritori', '$2y$10$8l4jDqJ1BgyqmqrdW6zxEONYjlQ8MeyEgIPawNh7NZ607vHQmLFKK', 'tori', 'toritori', 'tori111@gmail.com', '081254328765', NULL, '2020-11-26 03:05:50', '2020-11-26 03:05:50'),
(9, 'goregore', 'goregore', '$2y$10$WreCeC9WH3/.96Nh7zuTAuUeEfXv9LSn/hkJTbZFAj3q5I9fOS1V6', 'Gore', 'Satanic', 'gore12@gmail.com', '081298765432', NULL, '2020-11-26 03:07:18', '2020-11-26 03:07:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marketplace`
--
ALTER TABLE `marketplace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peraturan`
--
ALTER TABLE `peraturan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prod_id` (`prod_id`);

--
-- Indexes for table `tbltoko`
--
ALTER TABLE `tbltoko`
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
-- AUTO_INCREMENT for table `marketplace`
--
ALTER TABLE `marketplace`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peraturan`
--
ALTER TABLE `peraturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblorder`
--
ALTER TABLE `tblorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblorder_detail`
--
ALTER TABLE `tblorder_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbltoko`
--
ALTER TABLE `tbltoko`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
