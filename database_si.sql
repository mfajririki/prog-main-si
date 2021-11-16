-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 03:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_si`
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
(1, 'Pengumuman Perubahan Jadwal Wisuda Periode Ganjil Tahun Akademik 2020-2022', 'pengumuman-perubahan-jadwal-wisuda-periode-ganjil-tahun-akademik-2020-2022', '<p>Diberitahukan kepada seluruh calon wisudawan semester genap tahun akademik 2020-2021.</p><p>Semula terjadwal tanggal, 25 November 2021.</p><p>Diundur menjadi tanggal, 8 Desember 2021.</p><p>Tempat : Ballroom Wyndham OPI Hotel</p>', 'images/1636025499.png', '2021-11-04 04:31:39', '2021-11-04 04:31:39');

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
-- Table structure for table `kurikulum`
--

CREATE TABLE `kurikulum` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(15) NOT NULL,
  `nama_mk` varchar(50) NOT NULL,
  `kelompok_mk` varchar(5) NOT NULL,
  `sks` int(5) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kurikulum`
--

INSERT INTO `kurikulum` (`id`, `kode_mk`, `nama_mk`, `kelompok_mk`, `sks`, `semester`, `updated_at`, `created_at`) VALUES
(1, '141122101', 'Pengantar Bisnis dan Manajemen', 'MKB', 2, 'Semester 1', '2021-11-05 00:02:50', '2021-11-05 00:02:50'),
(2, '1401201', 'Pengantar Teknologi Informasi', 'MKB', 2, 'Semester 1', '2021-11-05 01:48:16', '2021-11-05 01:48:16'),
(4, '141142101', 'Pengantar Pemrograman', 'MKB', 4, 'Semester 1', '2021-11-05 22:21:31', '2021-11-05 22:17:00'),
(5, 'UBD2001', 'Bahasa Indonesia', 'MKK', 2, 'Semester 1', '2021-11-05 22:54:28', '2021-11-05 22:54:28'),
(6, 'UBD2006', 'Pendidikan Agama', 'MBB', 2, 'Semester 1', '2021-11-05 22:56:46', '2021-11-05 22:56:46'),
(7, '1401202', 'Bahasa Inggris 1', 'MKK', 2, 'Semester 1', '2021-11-05 22:57:48', '2021-11-05 22:57:48'),
(8, 'UBD2004', 'Pendidikan Kewarganegaraan', 'MKB', 2, 'Semester 1', '2021-11-05 22:58:45', '2021-11-05 22:58:45'),
(9, '141122102', 'Interpersonal Skill', 'MBP', 2, 'Semester 1', '2021-11-05 22:59:31', '2021-11-05 22:59:31'),
(10, '141222101', 'Analisa Proses Bisnis', 'MKK', 2, 'Semester 2', '2021-11-07 19:19:19', '2021-11-07 19:19:19'),
(11, '141242101', 'Matematika Diskrit', 'MKK', 4, 'Semester 2', '2021-11-07 19:21:13', '2021-11-07 19:21:13'),
(12, '141242102', 'Basis Data', 'MKB', 4, 'Semester 2', '2021-11-07 19:22:21', '2021-11-07 19:22:21'),
(13, '1402201', 'Bahasa Inggris 2', 'MKK', 2, 'Semester 3', '2021-11-07 19:28:19', '2021-11-07 19:28:19'),
(14, '141242103', 'Sistem Informasi Manajemen', 'MKK', 4, 'Semester 2', '2021-11-07 19:38:03', '2021-11-07 19:38:03'),
(15, '141222103', 'Interaksi Manusia dan Komputer', 'MBP', 2, 'Semester 2', '2021-11-07 19:39:25', '2021-11-07 19:39:25'),
(16, '141242104', 'Algoritma dan Struktur Data', 'MKK', 4, 'Semester 2', '2021-11-07 19:40:08', '2021-11-07 19:40:08'),
(17, '141342101', 'Jaringan Komputer dan Komunikasi Data', 'MKB', 4, 'Semester 3', '2021-11-07 20:02:59', '2021-11-07 20:02:59'),
(18, '141342102', 'Statistika dan Probabilitas', 'MKK', 4, 'Semester 3', '2021-11-07 20:03:44', '2021-11-07 20:03:44'),
(19, '141342103', 'UI/UX Design', 'MKK', 4, 'Semester 3', '2021-11-07 20:04:37', '2021-11-07 20:04:37'),
(20, '141342104', 'Pemrograman 1', 'MKK', 4, 'Semester 3', '2021-11-07 20:05:24', '2021-11-07 20:05:24'),
(21, '141322101', 'IT Enterpreneurship', 'MKB', 2, 'Semester 3', '2021-11-07 20:06:22', '2021-11-07 20:06:22'),
(22, '141322102', 'Teknologi Multimedia', 'MKK', 2, 'Semester 3', '2021-11-07 20:06:59', '2021-11-07 20:06:59'),
(23, '141442101', 'Pemrograman 2', 'MKK', 4, 'Semester 4', '2021-11-07 20:08:24', '2021-11-07 20:08:24'),
(24, '141442102', 'Analisa dan Perancangan Sistem', 'MKK', 4, 'Semester 4', '2021-11-07 20:09:04', '2021-11-07 20:09:04'),
(25, '141422101', 'IT Service Management', 'MBB', 2, 'Semester 4', '2021-11-07 20:09:43', '2021-11-07 20:09:43'),
(26, '141442103', 'Analisis dan Visualisasi Data', 'MKK', 4, 'Semester 4', '2021-11-07 20:10:46', '2021-11-07 20:10:46'),
(27, '1404204', 'Metodologi Penelitian', 'MKB', 2, 'Semester 4', '2021-11-07 20:11:28', '2021-11-07 20:11:28'),
(28, '141442104', 'Intelligent System', 'MKK', 4, 'Semester 4', '2021-11-07 20:12:01', '2021-11-07 20:12:01'),
(29, '141402101', 'Pengenalan Industri', 'MBB', 0, 'Semester 4', '2021-11-07 20:12:39', '2021-11-07 20:12:39'),
(30, '141542101', 'Rekayasa Perangkat Lunak', 'MKK', 4, 'Semester 5', '2021-11-07 20:55:44', '2021-11-07 20:55:44'),
(31, '141542102', 'Manejemen Proyek', 'MKB', 4, 'Semester 5', '2021-11-07 20:56:22', '2021-11-07 20:56:22'),
(32, '141522101', 'Etika dan Hukum TI', 'MBP', 2, 'Semester 5', '2021-11-07 20:58:52', '2021-11-07 20:58:52'),
(33, '141522102', 'IT Security', 'MKK', 2, 'Semester 5', '2021-11-07 21:01:31', '2021-11-07 21:01:31'),
(34, '141622101', 'Kerja Praktek', 'MBB', 2, 'Semester 6', '2021-11-07 21:06:01', '2021-11-07 21:06:01'),
(35, '141622102', 'Perencanaan Strategi SI', 'MKB', 2, 'Semester 6', '2021-11-07 21:07:23', '2021-11-07 21:07:23'),
(36, '141622103', 'IS Application Project', 'MKK', 2, 'Semester 6', '2021-11-07 21:10:00', '2021-11-07 21:10:00'),
(37, '141622104', 'IT Risk Management', 'MKK', 2, 'Semester 6', '2021-11-07 21:11:29', '2021-11-07 21:11:29'),
(38, '141622105', 'Enterprise Information System', 'MBP', 2, 'Semester 6', '2021-11-07 21:13:35', '2021-11-07 21:13:35'),
(39, '141622106', 'Enterprise Architecture', 'MBP', 2, 'Semester 6', '2021-11-07 21:14:49', '2021-11-07 21:14:49'),
(40, '141722101', 'Proposal', 'MBB', 2, 'Semester 7', '2021-11-07 21:16:10', '2021-11-07 21:16:10'),
(41, '141722102', 'Pemodelan Bisnis', 'MKB', 2, 'Semester 7', '2021-11-07 21:16:44', '2021-11-07 21:16:44'),
(42, '141842101', 'Skripsi', 'MKK', 4, 'Semester 8', '2021-11-07 21:17:17', '2021-11-07 21:17:17');

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
-- Table structure for table `mk_bidangminat`
--

CREATE TABLE `mk_bidangminat` (
  `id` int(11) NOT NULL,
  `kode_mk` varchar(255) NOT NULL,
  `nama_mk` varchar(255) NOT NULL,
  `bidangminat` varchar(255) NOT NULL,
  `kelompok_mk` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `sks` int(100) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mk_bidangminat`
--

INSERT INTO `mk_bidangminat` (`id`, `kode_mk`, `nama_mk`, `bidangminat`, `kelompok_mk`, `semester`, `sks`, `stream`, `updated_at`, `created_at`) VALUES
(3, '141542103', 'IT Governance', 'IT GOVERNANCE', 'MBB', 'Semester 5', 4, 'Stream 1', '2021-11-08 23:42:12', '2021-11-08 23:42:12'),
(4, '141642101', 'IT Audit', 'IT GOVERNANCE', 'MKK', 'Semester 6', 4, 'Stream 2', '2021-11-08 23:52:17', '2021-11-08 23:52:17'),
(5, '141742101', 'Smart Government', 'IT GOVERNANCE', 'MBB', 'Semester 7', 4, 'Stream 3', '2021-11-08 23:53:16', '2021-11-08 23:53:16'),
(6, '141742111', 'Penjaminan Mutu Sistem Informasi', 'IT GOVERNANCE', 'MKB', 'Semester 7', 4, 'Stream 4', '2021-11-08 23:54:46', '2021-11-08 23:54:46'),
(7, '141542104', 'Business Intelligence 1', 'DATA SCIENCE', 'MKK', 'Semester 5', 4, 'Stream 1', '2021-11-08 23:56:41', '2021-11-08 23:56:41'),
(8, '141642102', 'Business Intelligence 2', 'DATA SCIENCE', 'MKK', 'Semester 6', 4, 'Stream 2', '2021-11-08 23:57:51', '2021-11-08 23:57:51'),
(9, '141742103', 'Data Mining & Data Warehouse', 'DATA SCIENCE', 'MKK', 'Semester 7', 4, 'Stream 3', '2021-11-08 23:58:53', '2021-11-08 23:58:53'),
(10, '141742104', 'Data Science', 'DATA SCIENCE', 'MBB', 'Semester 7', 4, 'Stream 4', '2021-11-08 23:59:49', '2021-11-08 23:59:49'),
(11, '141542105', 'Knowledge Management System', 'ENTERPRISE SYSTEM', 'MKK', 'Semester 5', 4, 'Stream 1', '2021-11-09 00:02:10', '2021-11-09 00:02:10'),
(12, '141642106', 'E-commerce', 'ENTERPRISE SYSTEM', 'MKK', 'Semester 6', 4, 'Stream 2', '2021-11-09 00:03:16', '2021-11-09 00:03:16'),
(13, '141742105', 'Customer Relationship Management', 'ENTERPRISE SYSTEM', 'MKK', 'Semester 7', 4, 'Stream 3', '2021-11-09 00:04:48', '2021-11-09 00:04:48'),
(14, '141742102', 'E-Business', 'ENTERPRISE SYSTEM', 'MBB', 'Semester 7', 4, 'Stream 4', '2021-11-09 00:06:57', '2021-11-09 00:06:57'),
(15, '141542106', 'Perancangan & Pengembangan SI Berbasis Web', 'APPLICATION DEVELOPMENT', 'MKB', 'Semester 5', 4, 'Stream 1', '2021-11-09 00:08:18', '2021-11-09 00:08:18'),
(16, '1416', 'Pemrograman Berorientasi Objek', 'APPLICATION DEVELOPMENT', 'MKB', 'Semester 6', 4, 'Stream 2', '2021-11-09 00:14:29', '2021-11-09 00:14:29'),
(17, '141642103', 'Sistem Informasi Geografis 1', 'APPLICATION DEVELOPMENT', 'MKK', 'Semester 6', 4, 'Stream 2', '2021-11-09 00:15:35', '2021-11-09 00:15:35'),
(18, '141742107', 'Mobile Technology', 'APPLICATION DEVELOPMENT', 'MKB', 'Semester 7', 4, 'Stream 3', '2021-11-09 00:16:48', '2021-11-09 00:16:48'),
(19, '141742108', 'Distributed Programming', 'APPLICATION DEVELOPMENT', 'MKB', 'Semester 7', 4, 'Stream 4', '2021-11-09 00:18:11', '2021-11-09 00:18:11'),
(20, '141742106', 'Sistem Informasi Geografis', 'APPLICATION DEVELOPMENT', 'MKK', 'Semester 7', 4, 'Stream 4', '2021-11-09 00:19:03', '2021-11-09 00:19:03'),
(21, '141542107', 'Visualisasi dan Animasi', 'MULTIMEDIA', 'MKB', 'Semester 5', 4, 'Stream 1', '2021-11-09 00:20:46', '2021-11-09 00:20:46'),
(22, '141642105', 'Pemrograman Multimedia', 'MULTIMEDIA', 'MKB', 'Semester 6', 4, 'Stream 2', '2021-11-09 00:21:32', '2021-11-09 00:21:32'),
(23, '141742109', 'Pemrograman Animasi', 'MULTIMEDIA', 'MKB', 'Semester 7', 4, 'Stream 3', '2021-11-09 00:22:24', '2021-11-09 00:22:24'),
(24, '141742110', 'Proyek Multimedia', 'MULTIMEDIA', 'MKB', 'Semester 7', 4, 'Stream 4', '2021-11-09 00:23:04', '2021-11-09 00:23:04');

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
-- Table structure for table `staf_pengajar`
--

CREATE TABLE `staf_pengajar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nidn` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staf_pengajar`
--

INSERT INTO `staf_pengajar` (`id`, `nama`, `nidn`, `jabatan`, `updated_at`, `created_at`) VALUES
(4, 'Afriyudi, M. Kom.', '202047501', 'Lektor', '2021-11-05 21:03:50', '2021-11-04 08:40:26'),
(5, 'Andri, M. Cs.', '214037901', 'Lektor', '2021-11-05 21:03:30', '2021-11-05 15:19:48'),
(6, 'Deni Eriansyah, M. Kom.', '215107601', 'Lektor', '2021-11-05 21:01:35', '2021-11-05 20:39:58'),
(7, 'Eka Puji Agustini, M. Kom', '207087801', 'Lektor', '2021-11-05 20:58:27', '2021-11-05 20:41:02'),
(8, 'Iin Saprina, M. Kom.', '218038302', 'Asisten Ahli', '2021-11-05 20:58:06', '2021-11-05 20:44:36'),
(9, 'Ilman Zuhri Yadi, M. Kom.', '229047501', 'Asisten Ahli', '2021-11-05 20:57:41', '2021-11-05 20:51:01'),
(10, 'Irman Effendy, M. Kom.', '214068601', 'Asisten Ahli', '2021-11-05 20:57:21', '2021-11-05 20:57:21'),
(11, 'Kiky Rizky Nova Wadani, M. Kom.', '225118702', 'Asisten Ahli', '2021-11-05 21:10:26', '2021-11-05 21:10:26'),
(12, 'Kurniawan, M. Kom.', '209087902', 'Lektor', '2021-11-05 21:16:42', '2021-11-05 21:16:42'),
(13, 'Leon Andretti Abdillah, M. Kom.', '214097801', 'Lektor Kepala', '2021-11-05 21:22:24', '2021-11-05 21:22:24'),
(14, 'Linda Atika, M. Kom.', '215017501', 'Lektor', '2021-11-05 21:25:43', '2021-11-05 21:25:43'),
(15, 'Muhammad Ariandi, M. Kom.', '228018504', 'Asisten Ahli', '2021-11-05 21:30:31', '2021-11-05 21:30:31'),
(16, 'Nia Oktaviani, M. Kom.', '224048601', 'Lektor', '2021-11-05 21:38:21', '2021-11-05 21:38:21'),
(17, 'Edi Supratman, M. Kom.', '221127302', 'Asisten Ahli', '2021-11-05 21:41:06', '2021-11-05 21:41:06'),
(18, 'Novri Hadinata, M. Kom.', '222118201', 'Lektor', '2021-11-05 21:42:20', '2021-11-05 21:42:20'),
(19, 'Tri Basuki, S. Kom., M. Eng., Ph.D.', '23017401', 'Asisten Ahli', '2021-11-05 21:45:24', '2021-11-05 21:45:24'),
(20, 'Rahayu Amalia, M. Kom.', '211019201', 'Asisten Ahli', '2021-11-05 21:49:53', '2021-11-05 21:49:53'),
(21, 'Susan Dian Purnamasari, M. Kom.', '212047101', 'Lektor', '2021-11-05 21:53:48', '2021-11-05 21:53:48'),
(22, 'Suyanto, M.M., M. Kom.', '225087301', 'Kaprodi', '2021-11-07 19:01:55', '2021-11-05 21:55:40'),
(23, 'Suzi Oktavia Kunang, S.T., M. Kom.', '201107405', 'Asisten Ahli', '2021-11-05 21:56:35', '2021-11-05 21:56:35'),
(24, 'Ria Andryani, M. Kom.', '203107801', 'Lektor', '2021-11-05 21:59:38', '2021-11-05 21:59:38'),
(25, 'Taqrim Ibadi, M.Kom.', '230039101', 'Asisten Ahli', '2021-11-05 22:01:55', '2021-11-05 22:01:55'),
(26, 'Tri Oktarina, M. Kom.', '201109102', 'Asisten Ahli', '2021-11-05 22:02:45', '2021-11-05 22:02:45'),
(27, 'Winoto Chandra, S.T., M. Kom.', '209125801', 'Asisten Ahli', '2021-11-05 22:03:45', '2021-11-05 22:03:45'),
(28, 'Yesi Novaria Kunang, S.T., M. Kom.', '226117501', 'Lektor', '2021-11-05 22:04:43', '2021-11-05 22:04:43'),
(29, 'Nyimas Sopiah, M. Kom.', '-', 'Lektor', '2021-11-05 22:05:31', '2021-11-05 22:05:31'),
(30, 'Maria Ulfa, M. Kom.', '-', 'Lektor', '2021-11-05 22:06:03', '2021-11-05 22:06:03'),
(31, 'Megawaty, M. Kom.', '-', 'Lektor', '2021-11-05 22:06:57', '2021-11-05 22:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `konten_tentang` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `konten_tentang`, `updated_at`, `created_at`) VALUES
(1, '<p><span style=\"color: rgb(140, 140, 140); font-family: Poppins, sans-serif; text-align: justify;\">Program Studi Sistem Informasi adalah salah satu program studi yang ada di Fakultas Ilmu Komputer Universitas Bina Darma. Akreditasi Program Studi yaitu “A” Tahun 2014. Keunggulan Program Studi Sistem Informasi adalah pada kurikulumnya yang berbasis kompetensi yang menggabungakan kurikulum standar APTIKOM, kurikulum internasional (NIIT) dan Muatan kurikulum lokal, selain pengayaan kurikulum dengan sertifikasi internasional PASAS.</span></p><p><span style=\"color: rgb(140, 140, 140); font-family: Poppins, sans-serif; text-align: justify;\">Prospek lulusan Program Studi Sistem Informasi ini bisa bekerja menjadi IT Manager, Analyst, Database Analyst, Data Administrator, Software Applications Programmer, Security Manager, System Auditor, Training Manager dan Configuration Manager.</span><span style=\"color: rgb(140, 140, 140); font-family: Poppins, sans-serif; text-align: justify;\"><br></span></p><p><br></p>', '2021-11-04 20:19:02', '2021-11-04 20:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `tujuan`
--

CREATE TABLE `tujuan` (
  `id` int(11) NOT NULL,
  `konten_tujuan` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tujuan`
--

INSERT INTO `tujuan` (`id`, `konten_tujuan`, `updated_at`, `created_at`) VALUES
(1, '<ol><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\">Menghasilkan sumber daya manusia yang mampu mengembangkan sistem informasi di berbagai bidang yang relevan.</li><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\">Menghasilkan sumber daya manusia yang mampu menciptakan lapangan pekerjaan sendiri/berwiraswasta.</li><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\">Menghasilkan lulusan yang berpotensi dan berkualitas yang cerdas dan berkarakter.</li><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\">Menghasilkan sumber daya manusia yang mampu bersaing dengan lulusan lain baik secara regional, nasional, maupun internasional.</li><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\">Menghasilkan penelitian yang berkualitas di bidang sistem informasi.</li><li style=\"border: 0px rgb(230, 230, 230); outline: 0px; vertical-align: baseline; background: transparent; margin: 0px; padding: 0px;\">Melakukan berbagai wujud pengabdian yang berguna bagi masyarakat.</li></ol>', '2021-11-04 19:24:38', '2021-11-04 19:24:38');

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
(1, 'adminpasca', 'adminpasca@binadarma.ac.id', NULL, '$2y$10$3K6DWF2.EAiTDBHvJqPJgerq4lHnNk9.mEQ3ovG1QbfDu0ADsl7gq', NULL, '2021-11-05 15:23:45', '2021-11-05 15:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi`, `updated_at`, `created_at`) VALUES
(1, 'Menjadi program studi unggulan dalam mengembangkan, meneliti, dan memiliki keterampilan rekayasa di bidang Sistem Informasi dan berstandar Internasional pada tahun 2025.', '1. Menyelenggarakan pendidikan di bidang Sistem Informasi dengan memperhatikan kurikulum yang berbasis kompetensi untuk menciptakan proses belajar mengajar dengan pelayanan pendidikan yang berkualitas internasional melalui pemanfaatan teknologi informasi. <br>\r\n2. Penyelenggaran penelitian di bidang rekayasa sistem informasi yang berkualitas. <br>\r\n3. Penyelenggaraan pengabdian kepada masyarakat dengan penerapan hasil penelitian dan kajian bidang rekayasa sistem informasi.', '2021-11-04 19:50:48', '2021-11-05 02:50:48');

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
-- Indexes for table `kurikulum`
--
ALTER TABLE `kurikulum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mk_bidangminat`
--
ALTER TABLE `mk_bidangminat`
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
-- Indexes for table `staf_pengajar`
--
ALTER TABLE `staf_pengajar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tujuan`
--
ALTER TABLE `tujuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kurikulum`
--
ALTER TABLE `kurikulum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mk_bidangminat`
--
ALTER TABLE `mk_bidangminat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staf_pengajar`
--
ALTER TABLE `staf_pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tujuan`
--
ALTER TABLE `tujuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
