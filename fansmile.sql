-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 أغسطس 2019 الساعة 09:52
-- إصدار الخادم: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fansmile`
--

-- --------------------------------------------------------

--
-- بنية الجدول `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_Of_Appointment` date NOT NULL,
  `time` time NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `patient_id`, `gender`, `Status`, `date_Of_Appointment`, `time`, `details`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, 'female', 'afas', '2019-08-23', '00:05:00', 'sad', '2019-08-28 05:19:19', '2019-08-28 05:19:19', NULL),
(2, 3, 3, 'female', 'afas', '2019-08-16', '01:02:00', 'asdad', '2019-08-28 06:48:19', '2019-08-28 06:48:19', NULL),
(3, 4, 4, 'female', 'afas', '2019-08-07', '01:58:00', 'sad', '2019-08-28 06:53:38', '2019-08-28 06:53:38', NULL),
(4, 5, 3, 'female', 'sdfsd', '2019-08-25', '14:02:00', 'safsdf', '2019-08-29 03:21:15', '2019-08-29 03:21:15', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `aderss` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialization` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `surname`, `user_id`, `aderss`, `specialization`, `qualification`, `phone`, `email`, `gender`, `DOB`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'zourob', 'ds', 1, 'asdasd', 'sdfsdf', 'sadas', 597408019, 'mohammedzourov@gmail.com', 'female', '2019-08-22', '2019-08-28 05:04:44', '2019-08-28 05:04:44', NULL),
(3, 'zourob', 'asdad', 1, 'asdasd', 'تكنولوجيا', 'sadas', 597408019, 'mohammesdzourov@gmail.com', 'male', '2019-08-22', '2019-08-28 05:06:14', '2019-08-28 05:06:14', NULL),
(4, 'Mr. Vicente Purdy Sr.', 'Graham', 3, '11248 Michael Turnpike Suite 107\nLamberttown, WV 99114-5110', 'Mr.', 'Miss', 31128, 'louisa.wunsch@example.org', 'female', '1998-11-22', '2019-08-28 05:07:19', '2019-08-28 05:07:19', NULL),
(5, 'Zoey Maggio', 'Schaden', 4, '66536 Rubye Haven Apt. 149\nSchusterberg, VT 65103-0204', 'Miss', 'Prof.', 2054018, 'labadie.elise@example.org', 'female', '2000-09-21', '2019-08-28 05:07:19', '2019-08-28 05:07:19', NULL),
(6, 'Willis Cartwright', 'Bednar', 5, '7985 Grant Plaza Suite 791\nLake Orieport, ID 24104-1839', 'Miss', 'Dr.', 43023, 'funk.bettye@example.com', 'male', '1993-07-20', '2019-08-28 05:07:19', '2019-08-28 05:07:19', NULL),
(7, 'Chelsea Wunsch DDS', 'Howell', 6, '809 Eula Loaf Apt. 695\nNew Raphaelburgh, ND 56044-4926', 'Dr.', 'Prof.', 29548, 'trenton31@example.com', 'female', '2018-08-05', '2019-08-28 05:07:19', '2019-08-28 05:07:19', NULL),
(8, 'Dr. May Quitzon', 'Jerde', 7, '5912 Schaefer Plains\nEast Izabellachester, KY 63101-2976', 'Dr.', 'Mrs.', 828769, 'patience56@example.com', 'male', '1999-09-10', '2019-08-28 05:07:19', '2019-08-28 05:07:19', NULL),
(9, 'zourob', 'asdad', 2, 'asdasd', 'IT', 'sadas', 597408019, 'mohsaammedzourov@gmail.com', 'female', '2019-08-04', '2019-08-28 05:09:40', '2019-08-28 05:09:40', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_20_094058_create_patients_table', 1),
(4, '2019_08_22_061609_create_doctors_table', 1),
(5, '2019_08_27_201459_create_appointments_table', 1);

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aderss` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `DOB` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `patients`
--

INSERT INTO `patients` (`id`, `name`, `aderss`, `phone`, `user_id`, `email`, `gender`, `DOB`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Mohammed zourob', 'zourobbbb', 597408019, 1, 'mohammedzourov@gmail.com', 'male', '2019-08-09', '2019-08-28 05:01:36', '2019-08-28 05:01:36', NULL),
(3, 'Ahmed Mohammed', 'zourobbbb', 597408019, 1, 'asda@gmail.com', 'female', '2019-08-16', '2019-08-28 06:46:38', '2019-08-28 06:46:38', NULL),
(4, 'zourob Ahmed', 'zourob Ahmed', 597408019, 1, 'as@gmail.com', 'female', '2019-08-16', '2019-08-28 06:52:49', '2019-08-28 06:52:49', NULL);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohammed Zourob', 'mohammedzourov@gmail.com', NULL, '$2y$10$6XeGWRhq.zwrQOMMy3/QA.XZpIdACWgh.BML/yHfg2v3wfIpl/ULa', 0, NULL, '2019-08-28 04:42:07', '2019-08-28 04:42:07'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$/QVOMJAn1SoPmBMg3.JgMu5baAmYuHylT7vJvMdINYxZU3rNOk6Pq', 0, NULL, NULL, NULL),
(3, 'Mrs. Ruthie Ziemann I', 'ursula.von@example.com', '2019-08-28 05:07:18', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'huGEW2SCQo', '2019-08-28 05:07:18', '2019-08-28 05:07:18'),
(4, 'Autumn Barrows DVM', 'heathcote.diana@example.com', '2019-08-28 05:07:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'jH0ELQly6f', '2019-08-28 05:07:19', '2019-08-28 05:07:19'),
(5, 'Ms. Matilda Ferry', 'jkutch@example.com', '2019-08-28 05:07:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'ldPpcflcd8', '2019-08-28 05:07:19', '2019-08-28 05:07:19'),
(6, 'Kyle Schmitt', 'aurelio48@example.net', '2019-08-28 05:07:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'OtHzzNESMa', '2019-08-28 05:07:19', '2019-08-28 05:07:19'),
(7, 'Prof. Marianna Walsh MD', 'jimmie11@example.org', '2019-08-28 05:07:19', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, 'DUO3l5B73v', '2019-08-28 05:07:19', '2019-08-28 05:07:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`),
  ADD KEY `doctors_user_id_foreign` (`user_id`);

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
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_email_unique` (`email`),
  ADD KEY `patients_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- القيود للجدول `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
