-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 12:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yuknjahit`
--

-- --------------------------------------------------------

--
-- Table structure for table `baju`
--

CREATE TABLE `baju` (
  `idBaju` int(10) UNSIGNED NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsiBaju` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hargaBaju` varchar(50) DEFAULT NULL,
  `namaBaju` varchar(255) DEFAULT NULL,
  `kainBaju` varchar(255) DEFAULT NULL,
  `warnaBaju` varchar(255) DEFAULT NULL,
  `idGender` int(10) DEFAULT NULL,
  `idUser` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baju`
--

INSERT INTO `baju` (`idBaju`, `file`, `deskripsiBaju`, `created_at`, `updated_at`, `hargaBaju`, `namaBaju`, `kainBaju`, `warnaBaju`, `idGender`, `idUser`) VALUES
(31, '1685553379_batik.jpg', 'Batik Cokelat', '2023-05-31 10:16:19', '2023-05-31 10:16:19', '100.000', 'Batik', 'katun', 'Cokelat', 1, 2),
(32, '1685553420_52c4d566550eec374efd70905101de30.jpeg', 'Kemeja Cokelat', '2023-05-31 10:17:00', '2023-05-31 10:17:00', '125.000', 'Kemeja', 'katun', 'Cokelat', 2, 12),
(33, '1685560429_jakethitam.jpg', 'Jaket Hoodie Warna Hitam \r\nKeren banget', '2023-05-31 12:13:49', '2023-05-31 12:13:49', '150.000', 'Hoodie', 'Fleece', 'Hitam', 1, 2),
(34, '1685561400_HTB1rWX3bzzuK1Rjy0Fpq6yEpFXaz.jpg', 'Baju Kaos APEX LEGEND Hitam', '2023-05-31 12:30:00', '2023-05-31 12:30:00', '60.000', 'Kaos APEX LEGEND', 'katun', 'Hitam', 1, 2),
(35, '1685561482_Kaos_Fortnite_Mobile_Game_Logo_1.jpg', 'Baju Kaos FORTNITE \r\nWarna: Hitam\r\nDiantar Sampai Tujuan!', '2023-05-31 12:31:22', '2023-05-31 12:31:22', '65.000', 'Baju Kaos FORTNITE', 'katun', 'hitam', 1, 2),
(36, '1685561705_86808073-0213-4c23-be23-08c0ee3697a3.jpg', 'Jaket Zipper \r\nWarna : Pink\r\nUkuran request di message\r\ncocok untuk cewek cowok', '2023-05-31 12:35:05', '2023-05-31 12:35:05', '150.000', 'Jaket Zipper Pink', 'Fleece', 'Pink', 2, 2),
(37, '1685561783_ea590d4d-7a78-49a5-ba52-002218462203.jpg', 'Baju Kaos VALORANT Cewek \r\nWarna Hitam', '2023-05-31 12:36:23', '2023-05-31 12:36:23', '70.000', 'Baju Kaos VALORANT', 'katun', 'hitam', 2, 12),
(39, '1685562041_Kaos_Baju_Jersey_PUBG_FK06_Full_Print_Kaos_Keren_Kaos_Game.jpg', 'Jersey PUBG Custom\r\nHarap cantumkan gambar referensi!', '2023-05-31 12:40:41', '2023-05-31 12:40:41', '80.000', 'Jersey PUBG', 'katun', 'hitam', 1, 12),
(40, '1685562272_images.jpeg', 'Baju SOLO LEVELING \r\nHarap tulis ukuran di message', '2023-05-31 12:44:32', '2023-05-31 12:44:32', '75.000', 'Baju SOLO LEVELING', 'katun', 'hitam', 1, 12),
(44, '1686975221_3beaa648a50770c636adfc4d9072ab57.jpeg', 'Kemeja keren', '2023-06-16 21:13:41', '2023-06-16 21:13:41', '100.000', 'Kemeja', 'katun', 'Custom', 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idCart` int(10) NOT NULL,
  `idBaju` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idPenjahit` int(11) DEFAULT NULL,
  `ukuran` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idCart`, `idBaju`, `idUser`, `message`, `file`, `created_at`, `updated_at`, `idPenjahit`, `ukuran`) VALUES
(102, 37, 1, 'Kirim', NULL, '2023-06-16 21:10:32', '2023-06-16 21:10:32', 12, 62);

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `idCustomerOrder` int(10) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `ukuran` int(11) DEFAULT NULL,
  `totalHarga` int(10) DEFAULT NULL,
  `kuantitas` int(10) DEFAULT NULL,
  `alamatPengiriman` varchar(255) NOT NULL,
  `idPayment` int(10) NOT NULL,
  `idBaju` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idPenjahit` int(11) DEFAULT NULL,
  `idStatus` int(11) DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`idCustomerOrder`, `file`, `ukuran`, `totalHarga`, `kuantitas`, `alamatPengiriman`, `idPayment`, `idBaju`, `message`, `idUser`, `created_at`, `updated_at`, `idPenjahit`, `idStatus`) VALUES
(23, '1685556317_batik3.jpg', 31, 100, NULL, 'Padang', 2, 31, 'Antar Sampai Alamat ya', 1, '2023-05-31 11:05:17', '2023-05-31 11:05:17', 2, 2),
(24, '1685556370_batik3.jpg', 31, 100, NULL, 'Padang', 2, 31, 'Antar Sampai Alamat ya', 1, '2023-05-31 11:06:10', '2023-05-31 11:06:10', 2, 2),
(25, '1685556509_measurement.png', 37, 125, NULL, 'Surabaya', 1, 32, 'Antar Sampai Alamat!', 13, '2023-05-31 11:08:29', '2023-05-31 11:08:29', 12, 2),
(26, '1685562728_measurement.png', 38, 65, NULL, 'Sijunjung', 2, 35, 'Ukuran : M terus sesuaikan sama detailed ukuran', 1, '2023-05-31 12:52:08', '2023-05-31 12:52:08', 2, 2),
(58, '1686641045_batik2.jpg', 46, 80, NULL, 'dadada', 1, 39, 'dada', 1, '2023-06-13 00:24:05', '2023-06-13 00:24:05', 12, 2),
(61, '1686641107_batik.jpg', 46, 75, NULL, 'dada', 2, 40, 'dada', 1, '2023-06-13 00:25:07', '2023-06-13 00:25:07', 12, 2),
(62, '1686643722_batik2.jpg', 58, 75, NULL, 'dada', 2, 40, 'dada', 1, '2023-06-13 01:08:42', '2023-06-13 01:08:42', 12, 2),
(65, '1686975057_ea590d4d-7a78-49a5-ba52-002218462203.jpg', 62, 70, NULL, 'Padang', 1, 37, 'Kirim', 1, '2023-06-16 21:10:57', '2023-06-16 21:10:57', 12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `idGender` int(10) NOT NULL,
  `gender` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`idGender`, `gender`) VALUES
(1, 'Pria'),
(2, 'Wanita');

-- --------------------------------------------------------

--
-- Table structure for table `metodepembayaran`
--

CREATE TABLE `metodepembayaran` (
  `idPayment` int(10) NOT NULL,
  `namaMetode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metodepembayaran`
--

INSERT INTO `metodepembayaran` (`idPayment`, `namaMetode`) VALUES
(1, 'COD'),
(2, 'QRIS');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_19_081714_create_sessions_table', 1),
(7, '2023_05_26_131509_create_gambars_table', 2),
(8, '2023_05_26_132315_create_gambars_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orderstatus`
--

CREATE TABLE `orderstatus` (
  `idStatus` int(10) NOT NULL,
  `statusPesanan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderstatus`
--

INSERT INTO `orderstatus` (`idStatus`, `statusPesanan`) VALUES
(1, 'On Process'),
(2, 'Finished'),
(3, 'Menunggu Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ramadhanul.husna.1@gmail.com', '$2y$10$VFGoeDpxRwWwC7QbJL8L..WlB.xp0srMU6aSCW.Ksis6TR7mzJjoW', '2023-06-11 05:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('FKTd75Ya1KlLFjjAZ6e5QXvqcwbBQ1Dk1OLt6HBz', 32, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSEdDQjlkV0VGSk5CZzRvTTJSSUtzS0Q3SjRwbXN1RHRCMFp4aFlEVyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmRwZW5qYWhpdCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjMyO30=', 1686998654),
('JicST9E8fjRRVVcPSqmlxA84idquMbbRnRSTcMaE', 32, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibTNQSFVGckREdHl4R0R4MjRJd0VvYVlWVTJicjRNd1NBSUpUUWdwNiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmRwZW1iZWxpIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MzI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czozMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwL2Rhc2hib2FyZCI7fX0=', 1686998598);

-- --------------------------------------------------------

--
-- Table structure for table `ukuranbaju`
--

CREATE TABLE `ukuranbaju` (
  `idUkuran` int(11) NOT NULL,
  `idUser` int(11) DEFAULT NULL,
  `A` int(11) NOT NULL,
  `B` int(11) NOT NULL,
  `C` int(11) NOT NULL,
  `D` int(11) NOT NULL,
  `idBaju` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ukuranbaju`
--

INSERT INTO `ukuranbaju` (`idUkuran`, `idUser`, `A`, `B`, `C`, `D`, `idBaju`) VALUES
(31, 1, 60, 40, 60, 5, 31),
(37, 13, 60, 30, 40, 5, 32),
(38, 1, 60, 30, 50, 5, 35),
(46, 1, 60, 20, 20, 20, 39),
(55, 1, 2, 2, 2, 2, 40),
(58, 1, 3, 3, 3, 3, 40),
(62, 1, 1, 1, 1, 1, 37),
(63, 31, 23, 21, 11, 44, 33);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `notelp` varchar(20) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT 'pembeli'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `notelp`, `alamat`, `role`) VALUES
(1, 'Ramadhanul Husna', 'danuldanul22@gmail.com', '2023-06-16 21:09:38', '$2y$10$3lCQnWMS7YhGzfJ3/SzY9ulrRVQul.IYqr7uaYqEBMaT9jiVU0GFK', NULL, NULL, NULL, 'Wl5pgE8yweLpUbFfEcoCH08G7vdxwo20xa4R2d0IwtGC3db1x0BvtKYywHoT', NULL, NULL, '2023-05-26 03:33:59', '2023-06-16 21:20:00', '082283234505', 'Surabaya', 'pembeli'),
(2, 'Ramadhanul', 'ramadhanulhusna@gmail.com', NULL, '$2y$10$3dTmQdzpPHGway8F3dt7MOJNxXk2NqcaZb8vAHCJR4gINexcTmJ86', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-26 04:11:23', '2023-05-26 04:11:23', '822', 'Mulyosari', 'penjahit'),
(12, 'Ramadhanul Penjahit 23', 'ramadhanul.husna.1@gmail.com', '2023-06-07 15:29:32', '$2y$10$bMQuRN31W2EzTNfB03DCMe1ItPBDjNSBCxZ2EZb5iXASYFentX0W6', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-31 09:59:55', '2023-06-07 15:29:32', '082283234505', 'Padang', 'penjahit'),
(13, 'Ramadhanul Pembeli 2', 'danuldanul33@gmail.com', NULL, '$2y$10$.QOkfYuAW8JU2McO4uT6AuUqtqCQp8W2jeW0fQdy16LIt7C.fHB4K', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-31 10:00:40', '2023-05-31 10:00:40', '082283234505', 'Sijunjung', 'pembeli'),
(31, 'Muhammad Yafi', 'muhammadyafinegsaboy@gmail.com', '2023-06-17 03:39:29', '$2y$10$SFTtSHOTGiQhExDw08q6../ymMP/4YH6EgasiECmQGmj8YOWaT.ee', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-17 03:39:16', '2023-06-17 03:39:29', NULL, NULL, 'pembeli'),
(32, 'Yafi aja', 'muhammadyafipadang@gmail.com', '2023-06-17 03:43:17', '$2y$10$zyiK.HSucibqsjF5ZVeD6uQYgtoUm93URlWGKAuOGrrRo4fJpm.qK', NULL, NULL, NULL, NULL, NULL, NULL, '2023-06-17 03:42:52', '2023-06-17 03:43:17', NULL, NULL, 'penjahit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baju`
--
ALTER TABLE `baju`
  ADD PRIMARY KEY (`idBaju`),
  ADD KEY `idGender` (`idGender`),
  ADD KEY `idUser` (`idUser`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idCart`);

--
-- Indexes for table `customerorder`
--
ALTER TABLE `customerorder`
  ADD PRIMARY KEY (`idCustomerOrder`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`idGender`);

--
-- Indexes for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  ADD PRIMARY KEY (`idPayment`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderstatus`
--
ALTER TABLE `orderstatus`
  ADD PRIMARY KEY (`idStatus`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `ukuranbaju`
--
ALTER TABLE `ukuranbaju`
  ADD PRIMARY KEY (`idUkuran`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baju`
--
ALTER TABLE `baju`
  MODIFY `idBaju` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idCart` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `customerorder`
--
ALTER TABLE `customerorder`
  MODIFY `idCustomerOrder` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `idGender` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `metodepembayaran`
--
ALTER TABLE `metodepembayaran`
  MODIFY `idPayment` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderstatus`
--
ALTER TABLE `orderstatus`
  MODIFY `idStatus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ukuranbaju`
--
ALTER TABLE `ukuranbaju`
  MODIFY `idUkuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baju`
--
ALTER TABLE `baju`
  ADD CONSTRAINT `baju_ibfk_1` FOREIGN KEY (`idGender`) REFERENCES `gender` (`idGender`),
  ADD CONSTRAINT `baju_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
