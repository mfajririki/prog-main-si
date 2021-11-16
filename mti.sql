-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 12:42 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mti`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `slug`, `content`, `photo`, `created_at`, `updated_at`) VALUES
(9, 'JUMAT BAROKAH UNIVERSITAS BINA DARMA', 'jumat-barokah-universitas-bina-darma', '<p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">Universitas Bina Darma – Pada hari Jumat tanggal 8 Oktober 2021 Yayasan Bina Darma Palembang melalui Universitas Bina Darma bersama Himpunan Mahasiswa Sistem Informasi (HIMSIF) melaksanakan agenda rutin mingguan Jumat Barokah yang telah memasuki Periode 19.Pada kegiatan Jumat Barokah minggu ini Universitas Bina Darma memberikan santunan kepada:</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">– Warga Rt. 14 Rw. 04 Kel. Silaberanti</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">“Hidup ini indah, seindah kita dapat berbagi kepada sesama”</p>', 'photo/pengumuman/1A9elXFH0jVtoH7DCMMrCgTVe7sK9K8lHfwSXLQo.png', '2021-10-06 17:34:13', '2021-10-08 07:32:45'),
(10, 'PERWAKILAN MAHASISWA DI AJANG PON XX PAPUA 2021', 'perwakilan-mahasiswa-di-ajang-pon-xx-papua-2021', '<p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">Civitas Academica Universitas Bina Darma</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">Mengucapkan</p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\"><b>SELAMAT &amp; SUKSES&nbsp;<img draggable=\"false\" class=\"emoji\" alt=\"🎊\" src=\"https://s.w.org/images/core/emoji/11/svg/1f38a.svg\" style=\"height: auto; max-width: 100%; border-width: initial !important; border-color: initial !important; border-image: initial !important; vertical-align: -0.1em !important; display: inline !important; box-shadow: none !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"><img draggable=\"false\" class=\"emoji\" alt=\"🎉\" src=\"https://s.w.org/images/core/emoji/11/svg/1f389.svg\" style=\"height: auto; max-width: 100%; border-width: initial !important; border-color: initial !important; border-image: initial !important; vertical-align: -0.1em !important; display: inline !important; box-shadow: none !important; width: 1em !important; margin: 0px 0.07em !important; background: none !important; padding: 0px !important;\"></b></p><p style=\"margin-right: 0px; margin-bottom: 9px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Roboto, sans-serif; font-size: 13px;\">Aldo Pratama Arjoni Mahasiswa Program<br>Studi Manajemen Informatika (D3)<br>atas prestasinya mendapatkan<br>Mendali Perunggu pada PON XX Papua 2021 cabang Olahraga Anggar Floret Putra Perorangan</p>', 'photo/pengumuman/dZkCEDzwgDpZgXGmFZPXT6DysLR6OXYBykoYqidB.png', '2021-10-06 17:47:08', '2021-10-08 07:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `announcement_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `announcement_id`, `name`, `document`, `created_at`, `updated_at`) VALUES
(16, 9, 'logo bidar.jpeg', 'document/pengumuman/S7Vvmdvh5WR6K9gTbXRKipWMuAWy9lkdMO7PAXbv.jpg', NULL, NULL),
(20, 10, 'JUMAT-BAROKAH-5.png', 'document/pengumuman/71fLSY9iE2VQUZm46H5yvux6MxdDAF5GSXMUx5sI.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_03_023324_create_announcements_table', 1),
(6, '2021_10_03_023430_create_documents_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pascasarjana Admin', 'adminpasca@binadarma.ac.id', NULL, '$2y$10$hPkeMMQs.5CQr9FYpX.pA.9aKVOFr0tcb5WqUMKnrVUd3YbdJwHei', NULL, '2021-10-05 15:07:19', '2021-10-05 15:07:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `announcements_title_unique` (`title`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `documents_announcement_id_foreign` (`announcement_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_announcement_id_foreign` FOREIGN KEY (`announcement_id`) REFERENCES `announcements` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
