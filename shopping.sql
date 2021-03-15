-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 07:36 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `coloris`
--

CREATE TABLE `coloris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matériaus_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coloris`
--

INSERT INTO `coloris` (`id`, `matériaus_id`, `name`, `picture`, `created_at`, `updated_at`) VALUES
(5, 6, 'Ambra0', 'profile-1604842008-374024.jpg', '2020-11-08 08:26:48', '2020-11-08 08:26:48'),
(6, 6, 'Arabesque0', 'profile-1604842300-643230.jpg', '2020-11-08 08:31:40', '2020-11-08 08:31:40'),
(7, 6, 'Base Gloss0', 'profile-1604842361-46686.png', '2020-11-08 08:32:41', '2020-11-08 08:32:41'),
(8, 6, 'Basic0', 'profile-1604842447-194501.jpg', '2020-11-08 08:34:07', '2020-11-08 08:34:07'),
(9, 6, 'Bianco Artico0', 'profile-1604842488-334601.jpg', '2020-11-08 08:34:48', '2020-11-08 08:34:48'),
(10, 7, 'Amarelo Arabia0', 'profile-1604842567-126585.jpg', '2020-11-08 08:36:07', '2020-11-08 08:36:07'),
(11, 7, 'Amarelo California0', 'profile-1604842606-721333.jpg', '2020-11-08 08:36:46', '2020-11-08 08:36:46'),
(12, 7, 'Amarelo Saint Cecilia0', 'profile-1604842752-535121.jpg', '2020-11-08 08:39:12', '2020-11-08 08:39:12'),
(13, 7, 'Antique Brown0', 'profile-1604842781-820887.png', '2020-11-08 08:39:41', '2020-11-08 08:39:41'),
(14, 7, 'Baltic Brown0', 'profile-1604842814-420583.jpg', '2020-11-08 08:40:14', '2020-11-08 08:40:14'),
(15, 6, 'Alabama White0', 'profile-1604842865-18034.jpg', '2020-11-08 08:41:05', '2020-11-08 08:41:05'),
(16, 9, 'Eternal Emperador0', 'profile-1604843036-927030.jpg', '2020-11-08 08:43:56', '2020-11-08 08:43:56'),
(17, 10, 'Absolut Blanc0', 'profile-1604843314-460213.jpg', '2020-11-08 08:48:34', '2020-11-08 08:48:34'),
(18, 11, 'Abalone0', 'profile-1604843442-551397.jpg', '2020-11-08 08:50:42', '2020-11-08 08:50:42'),
(19, 12, 'Brossé0', 'profile-1604843502-860253.jpg', '2020-11-08 08:51:42', '2020-11-08 08:51:42'),
(20, 13, 'Arabescato0', 'profile-1604843589-66585.jpg', '2020-11-08 08:53:09', '2020-11-08 08:53:09'),
(21, 14, 'Arctic White0', 'profile-1604843676-56062.jpg', '2020-11-08 08:54:36', '2020-11-08 08:54:36'),
(22, 15, 'Aeri0', 'profile-1604843749-297149.jpg', '2020-11-08 08:55:49', '2020-11-08 08:55:49'),
(23, 16, 'Bianco Antico0', 'profile-1604843797-583419.jpg', '2020-11-08 08:56:37', '2020-11-08 08:56:37'),
(24, 17, 'Blue Imperador0', 'profile-1604843932-910966.jpg', '2020-11-08 08:58:52', '2020-11-08 08:58:52'),
(25, 18, 'Gc 03 - Ideal 0', 'profile-1604844015-452362.jpg', '2020-11-08 09:00:15', '2020-11-08 09:00:15'),
(26, 8, 'Alabama White0', 'profile-1604844489-795147.jpg', '2020-11-08 09:08:09', '2020-11-08 09:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `drainer_baskets`
--

CREATE TABLE `drainer_baskets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finitions`
--

CREATE TABLE `finitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matériaus_id` int(11) NOT NULL,
  `coloris_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `finitions`
--

INSERT INTO `finitions` (`id`, `matériaus_id`, `coloris_id`, `name`, `created_at`, `updated_at`) VALUES
(8, 8, 26, 'poli', '2020-11-08 09:11:12', '2020-11-08 09:11:12'),
(9, 6, 5, 'Poli', '2020-11-08 09:18:24', '2020-11-08 09:18:24'),
(10, 7, 10, 'poli', '2020-11-08 09:18:52', '2020-11-08 09:18:52'),
(11, 9, 16, 'poli', '2020-11-08 09:19:22', '2020-11-08 09:19:22'),
(12, 10, 17, 'Poli', '2020-11-08 09:19:47', '2020-11-08 09:19:47'),
(13, 11, 18, 'Mat', '2020-11-08 09:20:35', '2020-11-08 09:20:35'),
(14, 12, 19, 'Briillant', '2020-11-08 11:32:15', '2020-11-08 11:32:15'),
(15, 13, 20, 'Natural', '2020-11-08 11:33:10', '2020-11-08 11:33:10'),
(16, 14, 21, 'Silk', '2020-11-08 11:33:57', '2020-11-08 11:33:57'),
(17, 15, 22, 'Natural', '2020-11-08 11:34:55', '2020-11-08 11:34:55'),
(18, 16, 23, 'Poli', '2020-11-08 11:35:40', '2020-11-08 11:35:40'),
(19, 17, 24, 'Poli', '2020-11-08 11:36:14', '2020-11-08 11:36:14'),
(20, 18, 25, 'Silk', '2020-11-08 11:36:45', '2020-11-08 11:36:45'),
(22, 8, 26, 'Adouci', '2020-11-08 11:43:16', '2020-11-08 11:43:16'),
(23, 8, 26, 'Cuir', '2020-11-08 11:43:31', '2020-11-08 11:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `matériaus`
--

CREATE TABLE `matériaus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matériaus`
--

INSERT INTO `matériaus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'Quartz Stone italiana', '2020-11-08 08:16:03', '2020-11-08 08:16:03'),
(7, 'Granit', '2020-11-09 17:23:09', '2020-11-09 17:23:09'),
(8, 'Marbre', '2020-11-08 08:16:18', '2020-11-08 08:16:18'),
(9, 'Quartz Silestone', '2020-11-08 08:16:31', '2020-11-08 08:16:31'),
(10, 'Quartz Compac', '2020-11-08 08:16:39', '2020-11-08 08:16:39'),
(11, 'Corian', '2020-11-08 08:16:46', '2020-11-08 08:16:46'),
(12, 'Inox', '2020-11-08 08:16:54', '2020-11-08 08:16:54'),
(13, 'Ceramique Sapienstone', '2020-11-08 08:17:04', '2020-11-08 08:17:04'),
(14, 'Ceramique The Size', '2020-11-08 08:17:13', '2020-11-08 08:17:13'),
(15, 'Ceramique Dekton', '2020-11-08 08:17:22', '2020-11-08 08:17:22'),
(16, 'Granit Sensa', '2020-11-08 08:17:31', '2020-11-08 08:17:31'),
(17, 'Granit Texta', '2020-11-08 08:17:40', '2020-11-08 08:17:40'),
(18, 'Céramique Mirage', '2020-11-08 08:17:49', '2020-11-08 08:17:49');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_03_165532_create_users_table', 2),
(5, '2020_11_03_174740_create_matériaus_table', 3),
(6, '2020_11_04_145202_create_coloris_table', 4),
(7, '2020_11_04_145421_create_finitions_table', 4),
(8, '2020_11_04_190513_create_services_table', 5),
(9, '2020_11_04_200737_create_options_and_cuts_table', 6),
(10, '2020_11_04_203028_create_options_and_cuts_table', 7),
(11, '2020_11_04_212206_create_coloris_table', 8),
(12, '2020_11_13_185253_create_sinks_table', 9),
(13, '2020_11_13_185403_create_mixer_taps_table', 9),
(14, '2020_11_13_185452_create_soap_dispensers_table', 9),
(15, '2020_11_13_185526_create_drainer_baskets_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `mixer_taps`
--

CREATE TABLE `mixer_taps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mixer_taps`
--

INSERT INTO `mixer_taps` (`id`, `model`, `price`, `size`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Cerami', '195.00', 'Spout - 35 mm hole Height under spout 123 mm', 'mixer-1605367355-759394.jpg', '2020-11-14 09:59:23', '2020-11-14 10:22:35'),
(2, 'Allia', '195.00', 'Spout - Drilling 35 mm, H. 380 mm, Height under spout 258 mm', 'mixer-1605366016-613834.jpg', '2020-11-14 10:00:16', '2020-11-14 10:00:16'),
(3, 'Arrone', '195.00', 'Spout - Drilling 35 mm, Total H. 380 mm, Height under spout 302 mm', 'mixer-1605366050-756075.jpg', '2020-11-14 10:00:50', '2020-11-14 10:00:50'),
(4, 'Avisio 90', '195.00', 'Spout - Drilling 35 mm, Total H 290 mm, Height under spout 261 mm', 'mixer-1605366088-834302.jpg', '2020-11-14 10:01:28', '2020-11-14 10:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `options_and_cuts`
--

CREATE TABLE `options_and_cuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matériaus_id` int(11) NOT NULL,
  `coloris_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options_and_cuts`
--

INSERT INTO `options_and_cuts` (`id`, `matériaus_id`, `coloris_id`, `name`, `picture`, `rate`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'kjadcj', 'profile-1604522618-43215.jpg', '76', '2020-11-04 15:43:38', '2020-11-04 15:43:38');

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
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `material_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `finishing_id` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT current_timestamp(),
  `category` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `material_id`, `color_id`, `finishing_id`, `rate`, `category`, `created_at`, `updated_at`) VALUES
(1, 3, 2, 5, 23, 20, '2020-11-07 07:13:33', '2020-11-07 09:34:51'),
(4, 4, 1, 7, 45, NULL, '2020-11-07 07:50:39', '2020-11-07 07:50:39'),
(11, 3, 2, 5, 50, 8, '2020-11-07 09:35:30', '2020-11-07 09:35:30'),
(12, 3, 2, 5, 75, 30, '2020-11-07 09:36:01', '2020-11-07 09:36:01'),
(13, 3, 2, 5, 60, 12, '2020-11-07 09:36:14', '2020-11-07 09:36:14'),
(14, 3, 3, 3, 10, 20, '2020-11-07 11:52:28', '2020-11-07 11:52:28'),
(15, 3, 3, 4, 3, 30, '2020-11-07 11:52:40', '2020-11-07 11:52:40'),
(16, 3, 3, 3, 20, 12, '2020-11-07 11:53:23', '2020-11-07 11:53:23'),
(18, 8, 26, 22, 290, 12, '2020-11-08 11:44:10', '2020-11-08 11:44:10'),
(19, 8, 26, 22, 360, 20, '2020-11-08 11:44:35', '2020-11-08 11:44:35'),
(20, 12, 19, 14, 290, 12, '2020-11-08 11:47:31', '2020-11-08 11:47:31'),
(21, 12, 19, 14, 360, 12, '2020-11-08 11:47:55', '2020-11-08 11:47:55'),
(22, 12, 19, 14, 390, 60, '2020-11-08 11:48:17', '2020-11-08 11:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `rate`, `created_at`, `updated_at`) VALUES
(1, 'Measure at home 160', '160', '2020-11-04 14:31:48', '2020-11-11 11:44:04'),
(4, 'PACKAGING + TRANSPORT + * Paris, Ile de France Region 215', '215', '2020-11-11 10:32:13', '2020-11-11 11:44:14'),
(5, 'Standard Installation 440', '440', '2020-11-11 10:32:42', '2020-11-11 11:44:25'),
(6, 'Installation more than 5 m² 440', '440', '2020-11-11 10:33:21', '2020-11-11 11:44:36'),
(7, 'Installation over 8 m² 640', '640', '2020-11-11 10:34:27', '2020-11-11 11:44:46'),
(8, 'Supplement for installing backsplash (s) or splashback (s)> = 2 m² 110', '110', '2020-11-11 10:34:58', '2020-11-11 11:44:57'),
(9, 'Supplement for delivery by elevator or aids for floors, large plans, islands  270', '270', '2020-11-11 10:35:22', '2020-11-11 11:45:09'),
(10, 'Removal and removal of existing plan (s) 150', '150', '2020-11-11 10:35:39', '2020-11-11 11:45:19'),
(11, 'Connection 1 sink + 1 standard cooking except gas 180', '180', '2020-11-11 10:36:07', '2020-11-11 11:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `sinks`
--

CREATE TABLE `sinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sinks`
--

INSERT INTO `sinks` (`id`, `model`, `price`, `size`, `picture`, `created_at`, `updated_at`) VALUES
(3, 'FRANKE AMX 110-16', '78.00', 'armonia - 183 x 324', 'sink-1605363598-602404.jpg', '2020-11-14 08:52:30', '2020-11-14 09:19:58'),
(4, 'BLANCO BLANCOFLEX MINI', '79', 'Blancoflex - 780 x 435', 'sink-1605364074-506585.jpg', '2020-11-14 09:27:54', '2020-11-14 09:27:54'),
(5, 'BLANCO FREE-STANDING BLANCO R-ES 8 X 6', '95', 'Blanco - 800 x 600', 'sink-1605364106-795793.jpg', '2020-11-14 09:28:26', '2020-11-14 09:28:26'),
(6, 'FRANKE GAX 110-30', '10480', 'galassia - 330 x 370', 'sink-1605364174-478666.jpg', '2020-11-14 09:29:34', '2020-11-14 09:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `soap_dispensers`
--

CREATE TABLE `soap_dispensers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `soap_dispensers`
--

INSERT INTO `soap_dispensers` (`id`, `model`, `price`, `size`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'BELICE Inox Accessory pack', '76', 'BELICE - 35 mm hole, 250 ml reservoir', 'soap-1605369203-402014.jpg', '2020-11-14 10:53:23', '2020-11-14 10:53:23'),
(2, 'BELICE Stainless steel', '89', 'BELICE - 35 mm hole, 250 ml reservoir', 'soap-1605378963-101561.jpg', '2020-11-14 12:26:32', '2020-11-14 13:36:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `user` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `admin`, `user`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, 0, 'admin@admin.com', NULL, '$2y$10$nFnG1htYqMBdA0KsJ8.UlOr3QF3g6d3CVe1.7H1Wuj3e9Ptn1wkUq', NULL, '2020-11-03 11:58:40', '2020-11-03 11:58:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coloris`
--
ALTER TABLE `coloris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drainer_baskets`
--
ALTER TABLE `drainer_baskets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finitions`
--
ALTER TABLE `finitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matériaus`
--
ALTER TABLE `matériaus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mixer_taps`
--
ALTER TABLE `mixer_taps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options_and_cuts`
--
ALTER TABLE `options_and_cuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sinks`
--
ALTER TABLE `sinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soap_dispensers`
--
ALTER TABLE `soap_dispensers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `coloris`
--
ALTER TABLE `coloris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `drainer_baskets`
--
ALTER TABLE `drainer_baskets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finitions`
--
ALTER TABLE `finitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `matériaus`
--
ALTER TABLE `matériaus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `mixer_taps`
--
ALTER TABLE `mixer_taps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `options_and_cuts`
--
ALTER TABLE `options_and_cuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sinks`
--
ALTER TABLE `sinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `soap_dispensers`
--
ALTER TABLE `soap_dispensers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
