-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 08:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datalra`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabkota`
--

CREATE TABLE `kabkota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kabkota` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_provinsi` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabkota`
--

INSERT INTO `kabkota` (`id`, `nama_kabkota`, `id_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'Jakarta Utara', 1, '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(2, 'Jakarta Pusat', 1, '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(3, 'Jakarta Timur', 1, '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(4, 'Jakarta Barat', 1, '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(5, 'Bandung', 2, '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(6, 'Cirebon', 2, '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(8, 'Bantul', 7, '2020-12-22 22:48:30', '2020-12-22 22:48:30'),
(10, 'Majalengka', 2, '2020-12-28 12:25:43', '2020-12-28 12:26:22'),
(12, 'Lampung', 12, '2020-12-29 00:23:51', '2020-12-29 00:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `lra`
--

CREATE TABLE `lra` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penAnggaran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penRealisasi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penPersen` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `belAnggaran` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `belRealisasi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `belPersen` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_provinsi` bigint(20) UNSIGNED NOT NULL,
  `id_kabkota` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lra`
--

INSERT INTO `lra` (`id`, `tanggal`, `penAnggaran`, `penRealisasi`, `penPersen`, `belAnggaran`, `belRealisasi`, `belPersen`, `id_provinsi`, `id_kabkota`, `id_users`, `created_at`, `updated_at`) VALUES
(1, '11-2020', '2,000,000.00', '1,000,090.00', '50.00', '1,000,000.00', '890,000.00', '89.00', 2, 6, 1, '2020-11-04 01:59:28', '2020-12-28 12:57:37'),
(2, '09-2020', '1,199,922,993.75', '713,432,343.12', '59.46', '1,300,000.00', '1,000,000.22', '76.92', 1, 3, 1, '2020-11-10 23:07:59', '2020-12-28 12:57:52'),
(3, '10-2020', '2,000,000,000.00', '1,500,000,000.00', '75.00', '1,750,000,000.00', '1,500,000,000.00', '85.71', 1, 2, 1, '2020-12-22 22:45:43', '2020-12-28 12:58:07'),
(5, '11-2020', '1,200,000,000.00', '800,000,000.00', '66.67', '1,800,000,000.00', '1,700,000,000.00', '94.44', 7, 8, 1, '2020-12-29 00:55:28', '2020-12-29 00:56:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2020_08_13_031709_create_table_provinsi', 1),
(3, '2020_08_19_070534_create_table_kabkota', 1),
(4, '2020_09_28_053954_create_users_table', 1),
(5, '2020_11_02_061752_create_table_lra', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_provinsi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'DKI Jakarta', '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(2, 'Jawa Barat', '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(3, 'Jawa Tengah', '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(4, 'Jawa Timur', '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(6, 'Sumatera Utara', '2020-10-08 03:10:15', '2020-10-08 03:10:15'),
(7, 'DIY Yogyakarta', '2020-12-22 22:47:49', '2020-12-22 22:47:49'),
(12, 'Sumatera Selatan', '2020-12-29 00:21:36', '2020-12-29 00:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telfon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('admin','operator') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `telfon`, `email`, `email_verified_at`, `password`, `remember_token`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', '081234458382', 'admin@kemendagri.go.id', NULL, '$2y$10$C8CZ7rCM0ss77DX19195lOtv0QPSp6yQEyjpE8cieym936DeHGQxC', NULL, 'admin', '2020-11-03 20:26:34', '2021-06-28 23:55:57'),
(3, 'alfis rama', '081236437283', 'alfis@gmail.com', NULL, '$2y$10$3w3O2swConAxA6/jz7sZfOHspyv4q7NOBm4lr8tFJiBGpKbsHfjzy', NULL, 'operator', '2020-11-03 20:58:00', '2020-12-29 01:07:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kabkota_nama_kabkota_unique` (`nama_kabkota`),
  ADD KEY `kabkota_id_provinsi_index` (`id_provinsi`);

--
-- Indexes for table `lra`
--
ALTER TABLE `lra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lra_id_provinsi_index` (`id_provinsi`),
  ADD KEY `lra_id_kabkota_index` (`id_kabkota`),
  ADD KEY `lra_id_users_index` (`id_users`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `provinsi_nama_provinsi_unique` (`nama_provinsi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_telfon_unique` (`telfon`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabkota`
--
ALTER TABLE `kabkota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `lra`
--
ALTER TABLE `lra`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kabkota`
--
ALTER TABLE `kabkota`
  ADD CONSTRAINT `kabkota_id_provinsi_foreign` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lra`
--
ALTER TABLE `lra`
  ADD CONSTRAINT `lra_id_kabkota_foreign` FOREIGN KEY (`id_kabkota`) REFERENCES `kabkota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lra_id_provinsi_foreign` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `lra_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
