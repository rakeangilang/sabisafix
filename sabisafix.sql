-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 14, 2017 at 08:05 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.11-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabisafix`
--

CREATE DATABASE sabisafix
USE sabisafix

-- --------------------------------------------------------

--
-- Table structure for table `historis`
--

CREATE TABLE `historis` (
  `id` int(11) NOT NULL,
  `id_stok` int(11) NOT NULL,
  `jumlahawal` int(11) NOT NULL,
  `jumlahakhir` int(11) NOT NULL,
  `pengubah` varchar(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historis`
--

INSERT INTO `historis` (`id`, `id_stok`, `jumlahawal`, `jumlahakhir`, `pengubah`, `updated_at`, `created_at`) VALUES
(1, 1, 123, 321, '2', '2017-12-12 01:14:00', '2017-12-11 05:00:00'),
(2, 2, 44, 33, '23', '2017-12-12 02:08:56', '2017-12-11 04:04:01'),
(3, 3, 123, 122, '22', '2017-12-12 02:09:34', '2017-12-06 00:04:00'),
(4, 4, 56, 65, '3', '2017-12-12 02:10:13', '2017-12-01 00:14:00'),
(5, 3, 121, 122, '666666', '2017-12-12 02:35:20', '2017-12-12 09:35:20'),
(6, 3, 122, 400, '666666', '2017-12-12 02:35:42', '2017-12-12 09:35:42'),
(7, 6, 100, 40, '666666', '2017-12-12 02:40:48', '2017-12-12 09:40:48'),
(8, 6, 40, 70, '666666', '2017-12-12 05:57:37', '2017-12-12 12:57:37'),
(9, 6, 70, 50, '666666', '2017-12-12 05:58:14', '2017-12-12 12:58:14'),
(10, 3, 400, 380, '666666', '2017-12-12 08:43:17', '2017-12-12 15:43:17'),
(11, 3, 380, 360, '666666', '2017-12-12 18:24:32', '2017-12-13 01:24:32'),
(12, 3, 360, 360, '666666', '2017-12-12 18:55:28', '2017-12-13 01:55:28'),
(13, 3, 360, 360, '666666', '2017-12-12 18:55:30', '2017-12-13 01:55:30'),
(14, 3, 360, 360, '666666', '2017-12-13 03:20:29', '2017-12-13 10:20:29'),
(15, 3, 360, 370, '666666', '2017-12-13 03:20:34', '2017-12-13 10:20:34'),
(16, 3, 370, 390, '666666', '2017-12-13 03:31:30', '2017-12-13 10:31:30'),
(17, 4, 20, 40, 'gwadmin', '2017-12-13 04:06:22', '2017-12-13 11:06:22'),
(18, 3, 390, 9999, 'gwadmin', '2017-12-13 04:07:16', '2017-12-13 11:07:16'),
(19, 9, 10, 30, 'gwadmin', '2017-12-13 04:07:58', '2017-12-13 11:07:58'),
(20, 3, 9999, 9998, 'gwadmin', '2017-12-13 04:58:58', '2017-12-13 11:58:58'),
(21, 3, 9998, 9999, 'gwadmin', '2017-12-13 05:00:48', '2017-12-13 12:00:48'),
(22, 4, 40, 45, 'gwadmin', '2017-12-13 05:22:23', '2017-12-13 12:22:23'),
(23, 7, 999, 1000, 'gwadmin', '2017-12-13 05:23:49', '2017-12-13 12:23:49'),
(24, 3, 9999, 9999, 'qwe', '2017-12-13 06:36:38', '2017-12-13 13:36:38'),
(25, 3, 9999, 9988, 'qwe', '2017-12-13 06:36:52', '2017-12-13 13:36:52'),
(26, 3, 9988, 9988, 'qwe', '2017-12-13 06:39:44', '2017-12-13 13:39:44'),
(27, 3, 9988, 9988, 'qwe', '2017-12-13 06:40:25', '2017-12-13 13:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `Komoditas`
--

CREATE TABLE `Komoditas` (
  `id` int(255) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Stok` int(255) NOT NULL,
  `isEdited` int(1) NOT NULL DEFAULT '0',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Komoditas`
--

INSERT INTO `Komoditas` (`id`, `Nama`, `Stok`, `isEdited`, `updated_at`, `created_at`) VALUES
(3, 'Buah Naga', 9988, 1, '2017-12-13 11:41:11', '2017-12-03 05:23:08'),
(4, 'Durian', 45, 0, '2017-12-13 13:36:07', '2017-12-03 05:35:26'),
(6, 'Pohon toge', 50, 0, '2017-12-13 13:36:12', '2017-12-12 09:40:35'),
(7, 'Manggis', 1000, 0, '2017-12-13 05:23:49', '2017-12-13 01:44:08'),
(8, 'yoga', 100, 0, '2017-12-13 03:41:04', '2017-12-13 10:41:04'),
(9, 'Jambu batu', 30, 0, '2017-12-13 04:07:58', '2017-12-13 11:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `Kunjungan`
--

CREATE TABLE `Kunjungan` (
  `id` int(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Kunjungan`
--

INSERT INTO `Kunjungan` (`id`, `nama`, `jumlah`, `tanggal`, `updated_at`, `created_at`) VALUES
(3, 'hehe', 123, '2017-12-05', '2017-12-13 16:45:11', '2017-12-01 00:00:00'),
(4, 'The Seventies', 777, '2017-12-07', '2017-12-13 10:12:22', '2017-12-13 17:12:22'),
(5, 'SMP 3 Ciledug', 2, '2017-12-08', '2017-12-13 10:13:37', '2017-12-13 17:13:37'),
(6, 'SDN 04', 80, '2017-12-05', '2017-12-13 10:57:20', '2017-12-13 17:57:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supervisor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `nim`, `password`, `role`, `supervisor`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rachman Lazuardi', 'rachmanlazuardi.9a@gmail.com', 'G64150022', '$2y$10$8HHHq.TsZKIiyFFiUSIiTOAgXr.4IF2KQaE8Qa2DHxphnNENVbn2q', 'Administrator', '1', 'KC0AHkKZqou5Ga0gWeQMfFUQPQ05rTdUkSgWdW8M1UIMxgGsa3xgqP1ldnLY', '2017-12-07 06:59:39', '2017-12-07 06:59:39'),
(3, 'CTK', 'rachman_lazuardi14@yahoo.com', 'G641500222', '$2y$10$2Dmx085blgbsJsRBoHAdtOI1mZIS7rOyvYjf8xaQh6MZwtzWPSuZ.', 'administrator', '1', 'l9uCPKtgrtDAzlLIKogGbpEx7soUweHP0cX51olFCeJMz3TjmS81EYhaWpYr', '2017-12-07 07:09:34', '2017-12-07 07:09:34'),
(4, 'Jonggi', 'jonggi@gmail.com', 'G64150076', '$2y$10$8w2/i4ojMEiNsE5HJFapyOjyWeMXrRVBS6VX3kwsAMmTJzWxH7WLm', 'Karyawan', '3', NULL, '2017-12-07 07:51:19', '2017-12-07 07:51:19'),
(5, 'gilang', 'gilang@gmail.com', 'G64150040', '$2y$10$ttxg8wGonmtuTDkiNN9atOJ.vV7dxCfM2ou8iqa28A56Cft5DTDEK', 'Karyawan', '1', 'HKnSOv7yipKmRhzCqbBqVQ2KcQIFUSpbg9TrFm6ayGrk1jyhBNCJS8FsDXEf', '2017-12-12 08:44:58', '2017-12-12 08:44:58'),
(6, 'asdf', 'asdf@asdf.com', 'g64150090', 'asdfasdf', 'Administrator', '', NULL, '2017-12-10 18:00:00', '2017-12-04 01:00:00'),
(7, 'gwadmin', 'gwadmin@gmail.com', 'asdfsdf', '$2y$10$LU9gtlJ7pPLVuYc8ojHsaOQ/6.DPakxqCAxu1Q2VnQQ53E63kuyoC', 'Administrator', '1', 'W0aeCO1sSMVWn01jKCdybFt1XhxdQ2qFFyH4Fe1CpnUMwZ8tMxb4vyG1KEvd', '2017-12-12 09:52:35', '2017-12-12 09:52:35'),
(8, 'test', 'test@test.com', 'test', '$2y$10$EvK.uuh2JQuOjlPEBVUH7Oo38SR7rFrgQ4cZBlFN6QNn3PwIT67wy', 'Administrator', '1', NULL, '2017-12-12 17:48:05', '2017-12-12 17:48:05'),
(9, 'aku', 'aku@gmail.com', 'aku', '$2y$10$Dq.wdCoFHFMKkLvazGIeUO2rfltArps.9em/goyx9N41jAlAeW9rm', 'Administrator', '1', NULL, '2017-12-12 23:49:01', '2017-12-12 23:49:01'),
(10, 'qwe', 'qwe@qwe.com', 'qwe', '$2y$10$3I5okkHs1sFeVrYNzZuHmuuCp5ZpNeZzoMGOrQtf447FAwxqNDVqe', 'Administrator', '1', 'EWAGVnPL3JNhvpMgXlkBJ6Pt5uL7iqlk5OobLyUeOlcB6a7nXCAppkUpanKS', '2017-12-13 01:31:13', '2017-12-13 01:31:13'),
(11, 'userbiasa', 'userbiasa@gmail.com', 'sla;dfksa;dlkjf', '$2y$10$vkhiQrG7bseNSIO.d5M0JusdzA0iQgcrp3fvtt5r3.djqDLVvIGiC', 'Karyawan', '10', 'wkdJAwOxBA3zqLwJ327HhKcsBXKqmt3Hm5x2JL1xbpOnC6zzwz18GK3gl55O', '2017-12-13 01:32:21', '2017-12-13 01:32:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historis`
--
ALTER TABLE `historis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Komoditas`
--
ALTER TABLE `Komoditas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Kunjungan`
--
ALTER TABLE `Kunjungan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nim_unique` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historis`
--
ALTER TABLE `historis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `Komoditas`
--
ALTER TABLE `Komoditas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `Kunjungan`
--
ALTER TABLE `Kunjungan`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
