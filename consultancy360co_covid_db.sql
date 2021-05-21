-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2021 at 02:48 AM
-- Server version: 10.3.27-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consultancy360co_covid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Covid Event', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `covid_codes`
--

CREATE TABLE `covid_codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `covid_codes`
--

INSERT INTO `covid_codes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'UOOOI -CDC 2019-nCOV Real-Time RT-PCR Diagnostic Panel', '2021-02-15 23:52:11', '2021-02-15 23:52:11'),
(2, '86328- Immunoassay for infectious agent antibody(ies), qualitative or semiquantitative, single step method (eg, reagent strip); severe acute respiratory syndrome coronavirus 2(SARS-CoV-2) (Coronavirus disease [COVID-19])', '2021-02-15 23:52:11', '2021-02-15 23:52:11'),
(4, 'G2023-COVID19 Specimen Collection (Any Source)', '2021-02-15 23:53:20', '2021-02-15 23:53:20'),
(5, 'Super Bill Antibodies Test/ Specimen (UOOOI , U0004, 86328, G2023)', '2021-02-15 23:53:20', '2021-02-15 23:53:20'),
(6, 'Super Bill Swab Test/Specimen (UOOOI , U0002, U0003, G2023)', '2021-02-15 23:55:11', '2021-02-14 23:55:11'),
(7, 'Super Bill Swab/Antibodies Test/ Specimen (UOOOI , U0002, U0004, 86769, G2023)', '2021-02-15 23:55:11', '2021-02-15 23:55:11'),
(8, 'Super Bill Antigen Testing (99072,87811 ,87428)', '2021-02-15 23:55:56', '2021-02-15 23:55:56'),
(9, 'Superbill Rapid Retest [Specimen ( UOOOI , 86328, G2023)', '2021-02-15 23:55:56', '2021-02-15 23:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_11_233259_create_patient_data_table', 1),
(5, '2021_02_14_120329_create_categories_table', 1),
(6, '2021_02_15_233959_create_covid_codes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_data`
--

CREATE TABLE `patient_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medicalnum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medicalrelease` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstsign` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `test` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secondsign` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patient_data`
--

INSERT INTO `patient_data` (`id`, `name`, `birthday`, `gender`, `phone`, `email`, `address`, `language`, `provider`, `medicalnum`, `medicalrelease`, `firstsign`, `test`, `exam`, `secondsign`, `state`, `code`, `date`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'test', '02/02/2021', 'Male', '123456789', 'test@test.com', 'xxxx xxxx xxx 12', 'English', 'test', '1', 'true', 'sign', 'null', 'null', 'null', 'Negative', 'Superbill Rapid Retest [Specimen ( UOOOI , 86328, G2023)', '2021/02/16', '1', '2021-02-15 18:51:40', '2021-02-15 19:11:57'),
(2, 'Test 2', '02/03/2021', 'Female', '123456789', 'mail@mail.com', 'xxx xxx xxx x45', 'English', 'test 2', '2', 'true', 'sign', 'null', 'null', 'null', 'Negative', '86328- Immunoassay for infectious agent antibody(ies), qualitative or semiquantitative, single step method (eg, reagent strip); severe acute respiratory syndrome coronavirus 2(SARS-CoV-2) (Coronavirus disease [COVID-19])', '2021/02/16', '1', '2021-02-16 01:12:04', '2021-02-16 01:17:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'ballcryst@yandex.com', NULL, NULL, '$2y$10$NwjKbdDk4oSbLzyN8sDc2Oe1p3mpmQeYIFqN8znEnJ37aHH8BLpxa', NULL, '2021-02-15 18:50:34', '2021-02-15 18:50:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `covid_codes`
--
ALTER TABLE `covid_codes`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient_data`
--
ALTER TABLE `patient_data`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `covid_codes`
--
ALTER TABLE `covid_codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient_data`
--
ALTER TABLE `patient_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
