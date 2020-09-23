-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 02:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coin_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `email`, `password`, `google_id`, `facebook_id`, `image`, `account_type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin@gmail.com', '$2y$10$.n1IH5MSXQt/K3ax0ZZh4uzYh0ozjRY30Q7a0zyiiwUYn21XE.dFC', NULL, NULL, NULL, 'admin', NULL, '2020-08-06 06:11:15', '2020-08-06 06:11:15'),
(5, NULL, 'tikmtute@gmail.com', NULL, '115649064453392977425', NULL, NULL, NULL, NULL, '2020-08-09 04:25:07', '2020-08-09 04:25:07'),
(6, NULL, 'bacb4tvk@gmail.com', NULL, '102753765837552525791', NULL, NULL, NULL, NULL, '2020-08-09 04:25:47', '2020-08-09 04:25:47'),
(11, 'Victor Ha', NULL, NULL, NULL, '2699147326982950', 'https://graph.facebook.com/v3.3/2699147326982950/picture?type=normal', NULL, NULL, '2020-08-09 05:01:18', '2020-08-09 05:01:18'),
(12, 'Bắc Nguyễn', NULL, NULL, NULL, '2672610576360810', 'https://graph.facebook.com/v3.3/2672610576360810/picture?type=normal', NULL, NULL, '2020-08-09 05:12:16', '2020-08-09 05:12:16');

-- --------------------------------------------------------

--
-- Table structure for table `coins`
--

CREATE TABLE `coins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_summary` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_market` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sell_market` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `change24h` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coins`
--

INSERT INTO `coins` (`id`, `name`, `name_summary`, `image`, `buy_market`, `sell_market`, `change24h`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ripple', 'XRP', 'xrp.png', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coin_buy`
--

CREATE TABLE `coin_buy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `buy_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_transaction` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coin_buy`
--

INSERT INTO `coin_buy` (`id`, `transaction_id`, `user_id`, `buy_price`, `number`, `date_transaction`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '4721', '96', '2020-05-28 21:20:00', NULL, NULL, NULL),
(2, 1, 1, '4844', '104', '2020-05-31 12:32:00', NULL, NULL, NULL),
(3, 1, 1, '5756', '110', '2020-07-30 20:10:00', NULL, NULL, NULL),
(4, 1, 1, '6586', '270', '2020-08-22 11:09:00', NULL, NULL, NULL),
(5, 1, 1, '6055', '130', '2020-09-05 00:45:00', NULL, NULL, NULL),
(6, 1, 1, '5803', '100', '2020-09-11 07:20:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coin_sell`
--

CREATE TABLE `coin_sell` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `transaction_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `sell_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_transaction` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coin_sell`
--

INSERT INTO `coin_sell` (`id`, `transaction_id`, `user_id`, `sell_price`, `number`, `date_transaction`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '4850', '100', '2020-08-31 22:31:00', NULL, NULL, NULL),
(2, 1, 1, '6613', '189', '2020-08-02 20:20:00', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `coin_transaction`
--

CREATE TABLE `coin_transaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `coin_id` bigint(20) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coin_transaction`
--

INSERT INTO `coin_transaction` (`id`, `user_id`, `coin_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL);

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
(5, '2020_08_02_105356_create_accounts_table', 1),
(6, '2020_08_02_105411_create_coins_table', 1),
(7, '2020_08_04_132811_create_coin_buy_table', 1),
(8, '2020_08_04_132954_create_coin_sell_table', 1),
(9, '2020_08_05_030736_create_coin_transaction_table', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coin_buy`
--
ALTER TABLE `coin_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coin_sell`
--
ALTER TABLE `coin_sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coin_transaction`
--
ALTER TABLE `coin_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `coins`
--
ALTER TABLE `coins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coin_buy`
--
ALTER TABLE `coin_buy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coin_sell`
--
ALTER TABLE `coin_sell`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coin_transaction`
--
ALTER TABLE `coin_transaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
