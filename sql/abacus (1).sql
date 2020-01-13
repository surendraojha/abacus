-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2020 at 12:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abacus`
--

-- --------------------------------------------------------

--
-- Table structure for table `articals`
--

CREATE TABLE `articals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_reason` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `contact_reason`, `email`, `first_name`, `last_name`, `phone`, `phone_type`, `created_at`, `updated_at`) VALUES
(17, 'quote', 'sojha060@gmail.com', 'Surendra', 'Ojha', '9860347384', 'Private', '2020-01-08 04:39:51', '2020-01-08 04:39:51'),
(18, 'quote', 'sojha060@gmail.com', 'Surendra', 'Ojha', '9860347384', 'Work', '2020-01-08 22:32:04', '2020-01-08 22:32:04'),
(19, 'General question', 'sojha060@gmail.com', 'Surendra', 'Ojha', '9860347384', 'Work', '2020-01-08 22:34:12', '2020-01-08 22:34:12'),
(20, 'quote', 'sojha060@gmail.com', 'Surendra', 'Ojha', '9860347384', 'Work', '2020-01-08 22:34:31', '2020-01-08 22:34:31'),
(21, 'quote', 'surendra@bsaitechnosales.com', 'Surendra', 'Ojha', '9860347384', 'Private', '2020-01-08 23:00:34', '2020-01-08 23:00:34'),
(22, 'quote', 'surendra@bsaitechnosales.com', 'Surendra', 'Ojha', '9860347384', 'Work', '2020-01-09 03:54:05', '2020-01-09 03:54:05'),
(23, 'quote', 'surendra@bsaitechnosales.com', 'Gita', 'Ojha', '9860347384', 'Private', '2020-01-09 03:55:01', '2020-01-09 03:55:01');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_05_041101_create_contacts_table', 2),
(5, '2020_01_06_041646_create_quotes_table', 3),
(6, '2020_01_06_060610_create_payment_cashes_table', 4),
(7, '2020_01_06_060748_create_payment_banks_table', 4),
(8, '2020_01_06_083143_create_our_services_table', 5),
(9, '2020_01_06_094122_create_articals_table', 6),
(10, '2020_01_09_094214_create_subscribers_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payment_banks`
--

CREATE TABLE `payment_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_of_insured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_of_insured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amt_of_transaction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_ac_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `routing_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submitted_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_banks`
--

INSERT INTO `payment_banks` (`id`, `name_of_insured`, `email`, `address_of_insured`, `amt_of_transaction`, `bank_ac_no`, `routing_no`, `attachment`, `signature`, `submitted_date`, `created_at`, `updated_at`) VALUES
(7, 'Surendra Ojha', 'sojha060@gmail.com', 'Dadeldhura', '10000', '1234567891011121', '12345678910', 'storage7_filename.pdf', NULL, '2020-01-08', '2020-01-08 04:48:35', '2020-01-08 04:48:36'),
(8, 'Surendra Ojha', 'sojha060@gmail.com', 'Dadeldhura', '10000', '1234567891011121', '12345678910', 'storage8_filename.pdf', NULL, '2020-01-09', '2020-01-08 22:25:31', '2020-01-08 22:25:32'),
(9, 'Surendra Ojha', 'sojha060@gmail.com', 'Dadeldhura', '10000', '1234567891011121', '12345678910', 'storage9_filename.pdf', NULL, '2020-01-09', '2020-01-08 22:36:10', '2020-01-08 22:36:11');

-- --------------------------------------------------------

--
-- Table structure for table `payment_cashes`
--

CREATE TABLE `payment_cashes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_of_insured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_of_insured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amt_of_transaction` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_card_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `csv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `billing_address_zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` text COLLATE utf8mb4_unicode_ci,
  `signature` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submitted_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_cashes`
--

INSERT INTO `payment_cashes` (`id`, `name_of_insured`, `address_of_insured`, `email`, `amt_of_transaction`, `credit_card_no`, `expiration_date`, `csv`, `billing_address_zip_code`, `attachment`, `signature`, `submitted_date`, `created_at`, `updated_at`) VALUES
(1, 'Surendra Ojha', 'Dadeldhura', 'sojha060@gmail.com', '10000', '123456789011121314', '2020-01-08', '123456789', '12345', 'storage1_filename.pdf', NULL, '2020-01-08', '2020-01-08 04:52:25', '2020-01-08 04:56:50');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quote` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(4, 'surendra@bsaitechnosales.com', '2020-01-09 05:22:42', '2020-01-09 05:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Surendra Ojha', 'sojha060@gmail.com', NULL, '$2y$10$dqKxzHRmrw2bqR12mYEPxOP2WMAJMjeWW1.fy5oJs64idIClDNU5K', NULL, '2020-01-05 00:41:05', '2020-01-05 22:20:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articals`
--
ALTER TABLE `articals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_banks`
--
ALTER TABLE `payment_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_cashes`
--
ALTER TABLE `payment_cashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articals`
--
ALTER TABLE `articals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_banks`
--
ALTER TABLE `payment_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment_cashes`
--
ALTER TABLE `payment_cashes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
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
