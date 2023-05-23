-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 01:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sandi_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `sandi_bank`, `nama_bank`, `created_at`, `updated_at`) VALUES
(1, '232', 'mandiri', '2023-04-15 17:21:35', '2023-04-15 17:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `bank_sekolahs`
--

CREATE TABLE `bank_sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank_sekolahs`
--

INSERT INTO `bank_sekolahs` (`id`, `kode`, `nama_bank`, `nama_rekening`, `nomor_rekening`, `created_at`, `updated_at`) VALUES
(1, '1212', 'mandiri', 'bagus aja', '12345', '2023-04-15 17:19:35', '2023-04-15 17:19:35');

-- --------------------------------------------------------

--
-- Table structure for table `biayas`
--

CREATE TABLE `biayas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biayas`
--

INSERT INTO `biayas` (`id`, `parent_id`, `nama`, `jumlah`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'SPP 2023', 0, 26, '2023-04-19 16:39:59', '2023-04-19 16:39:59'),
(2, 1, 'spp', 6000000, 26, '2023-04-19 16:40:21', '2023-04-19 16:40:21'),
(3, NULL, 'gedung', 0, 26, '2023-04-19 16:40:35', '2023-04-19 16:40:35'),
(4, 3, 'Pembangunan gedung', 900000, 26, '2023-04-19 16:41:07', '2023-04-19 16:41:07');

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
(6, '2023_03_24_040027_create_siswas_table', 2),
(43, '2023_04_04_213030_add_parent_id_to_biayas_table', 6),
(83, '2014_10_00_000000_create_settings_table', 7),
(84, '2014_10_00_000001_add_group_column_on_settings_table', 7),
(85, '2023_03_24_224137_create_biayas_table', 7),
(86, '2023_03_25_105008_create_tagihans_table', 7),
(87, '2023_03_26_115534_create_tagihan_details_table', 7),
(88, '2023_03_26_230852_create_pembayarans_table', 7),
(89, '2023_03_29_143605_create_bank_sekolahs_table', 7),
(90, '2023_03_30_115437_create_banks_table', 7),
(91, '2023_03_30_200747_create_wali_banks_table', 7),
(92, '2023_03_31_115659_add_wali_bank_id_and_sekolah_bank_id_to_pembayarans_table', 7),
(93, '2023_03_31_204331_create_notifications_table', 7),
(94, '2023_04_02_202324_add_tanggal_konfirmasi_to_pembayarans_table', 7),
(95, '2023_04_02_221133_drop_status_konfirmasi_to_pembayarans_table', 7),
(96, '2023_04_04_213602_add_parent_id_to_biayas_table', 7),
(97, '2023_04_05_123421_add_biaya_id_to_siswas_table', 7),
(98, '2023_04_05_125357_create_statuses_table', 7),
(99, '2023_04_18_142546_add_lunas_to_tagihans_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('037691c8-e0fd-4a82-aceb-56bd9a1b5c45', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 15, '{\"tagihan_id\":\"10\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/15\"}', NULL, '2023-05-07 14:56:12', '2023-05-07 14:56:12'),
('078b7cbd-a2ad-41d9-a896-13fbbf4ec54b', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 15, '{\"tagihan_id\":\"4\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/6\"}', NULL, '2023-04-19 17:07:12', '2023-04-19 17:07:12'),
('08b75c84-23eb-4de4-b22d-1d3c1e58d018', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":12,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama bagus Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/12\"}', '2023-05-01 06:20:49', '2023-05-01 06:16:06', '2023-05-01 06:20:49'),
('141d804d-8296-4e80-b09f-64c0c354da15', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 26, '{\"tagihan_id\":\"10\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/15\"}', '2023-05-09 15:30:31', '2023-05-07 14:56:12', '2023-05-09 15:30:31'),
('26d98d17-56be-47fa-b574-3a75f8a3e783', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":4,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama bagus Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/4\"}', NULL, '2023-04-19 16:46:39', '2023-04-19 16:46:39'),
('2c357aa6-cf5d-4e68-a95d-6a20804736d6', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 20, '{\"tagihan_id\":\"4\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/6\"}', NULL, '2023-04-19 17:07:12', '2023-04-19 17:07:12'),
('2fa352f3-9e89-4192-ae6e-0c766240169f', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":3,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama bagus Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/3\"}', NULL, '2023-04-19 16:46:17', '2023-04-19 16:46:17'),
('392bd865-774d-4100-bd35-3ddd8404c0ec', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":16,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama desi Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/16\"}', NULL, '2023-05-07 14:57:41', '2023-05-07 14:57:41'),
('39c338b8-4b18-42bf-87e2-811a658aac89', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan desi\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/3\"}', NULL, '2023-04-19 16:45:17', '2023-04-19 16:45:17'),
('41e40c97-11ea-46bf-b77a-b5788a3947f7', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":10,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama andin Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/10\"}', '2023-04-28 14:22:37', '2023-04-20 16:27:12', '2023-04-28 14:22:37'),
('43c7be13-870f-44dd-a94c-a82325cd4822', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 15, '{\"tagihan_id\":\"1\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/1\"}', NULL, '2023-04-19 16:32:53', '2023-04-19 16:32:53'),
('47bc6582-452e-4367-a601-031e1dbdbe1c', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 13, '{\"tagihan_id\":\"1\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/1\"}', NULL, '2023-04-19 16:32:53', '2023-04-19 16:32:53'),
('4d4a4ba0-93d8-409f-9e8a-992996a73b8a', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 4, '{\"tagihan_id\":null,\"title\":\"Tagihan iyo\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/5\"}', NULL, '2023-04-19 16:35:08', '2023-04-19 16:35:08'),
('4fff31b2-5033-4b75-94e3-416c2cc5ca16', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 20, '{\"tagihan_id\":\"10\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/15\"}', NULL, '2023-05-07 14:56:12', '2023-05-07 14:56:12'),
('53ab4e36-1e13-4324-8462-253b4adfbd9e', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan ovi\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/3\"}', NULL, '2023-04-19 16:32:20', '2023-04-19 16:32:20'),
('54d59307-105d-4df3-866b-14cff0ff6a3d', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 4, '{\"tagihan_id\":null,\"title\":\"Tagihan iyo\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/9\"}', NULL, '2023-04-19 16:36:39', '2023-04-19 16:36:39'),
('596a416b-a9c5-44dd-83a2-52aa96ed1bf4', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 13, '{\"tagihan_id\":\"12\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/17\"}', NULL, '2023-05-09 16:17:49', '2023-05-09 16:17:49'),
('59dad16f-708a-42a8-a9e3-156e1188eb26', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":11,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama bagus Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/11\"}', '2023-05-01 14:01:33', '2023-04-30 14:03:37', '2023-05-01 14:01:33'),
('635ed687-503b-4e95-b9e5-79e2616b5ee6', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":9,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama bagus Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/9\"}', '2023-05-01 13:12:01', '2023-05-01 06:15:50', '2023-05-01 13:12:01'),
('65c52870-7612-4170-a4f9-c200d1db18a6', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":15,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama andin Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/15\"}', NULL, '2023-05-07 14:57:28', '2023-05-07 14:57:28'),
('66f2c814-1dd4-49bd-9406-2a963b14c12c', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 13, '{\"tagihan_id\":\"1\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/9\"}', NULL, '2023-04-20 16:02:23', '2023-04-20 16:02:23'),
('6a30b5ec-824f-4411-a4c8-be572e1f4435', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan bp\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/6\"}', NULL, '2023-04-19 16:36:39', '2023-04-19 16:36:39'),
('6c580354-6933-48ef-aba0-c987eacc90b6', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan qqq\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/8\"}', NULL, '2023-04-19 16:36:39', '2023-04-19 16:36:39'),
('71c03794-4759-433d-aa22-9b47e61f05df', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan bagus dwi prasery\",\"messages\":\"Tagihan Juni 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/9\"}', NULL, '2023-05-07 14:54:59', '2023-05-07 14:54:59'),
('7382ddaa-aa33-4f35-95ea-b98e1735f94b', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan ovi\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/7\"}', NULL, '2023-04-19 16:36:39', '2023-04-19 16:36:39'),
('74f16fc9-9c1e-46b7-85db-ee24f65ff50a', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan riza\",\"messages\":\"Tagihan Mei 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/8\"}', '2023-05-01 14:01:40', '2023-04-20 16:26:47', '2023-05-01 14:01:40'),
('810f2f91-0fdb-42ab-a9cd-ce05a7fdfe85', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 13, '{\"tagihan_id\":\"4\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/6\"}', NULL, '2023-04-19 17:07:12', '2023-04-19 17:07:12'),
('82e36ae5-5e6e-4812-84cc-4d14eee63e16', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 26, '{\"tagihan_id\":\"12\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/17\"}', NULL, '2023-05-09 16:17:49', '2023-05-09 16:17:49'),
('874d8de5-351f-4dec-b8c8-bc75147f6143', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 15, '{\"tagihan_id\":\"1\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/9\"}', NULL, '2023-04-20 16:02:23', '2023-04-20 16:02:23'),
('8a1991ca-aaa4-49a3-988d-16262c4233c5', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":7,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama desi Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/7\"}', NULL, '2023-04-20 15:45:04', '2023-04-20 15:45:04'),
('8e5ed768-43a0-4d2c-95da-65e8361825c7', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan bagus\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/1\"}', NULL, '2023-04-19 16:45:17', '2023-04-19 16:45:17'),
('931b6f20-e0cb-47ea-84a1-7a98e43b4436', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":6,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama riza Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/6\"}', '2023-04-19 17:08:31', '2023-04-19 17:07:36', '2023-04-19 17:08:31'),
('94f0992f-aed5-424f-bf45-452180384b20', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 25, '{\"tagihan_id\":\"4\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/6\"}', NULL, '2023-04-19 17:07:12', '2023-04-19 17:07:12'),
('99f887b0-0821-4f96-9586-0e74fa97b9bf', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 13, '{\"tagihan_id\":\"10\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/15\"}', NULL, '2023-05-07 14:56:12', '2023-05-07 14:56:12'),
('9d97c0ff-f430-4dd7-a1f2-36640127e006', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":1,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama messi Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/1\"}', NULL, '2023-04-19 16:33:29', '2023-04-19 16:33:29'),
('a1037814-e2ea-4b54-a9d0-6395a3dee88e', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan bp\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/2\"}', NULL, '2023-04-19 16:32:20', '2023-04-19 16:32:20'),
('a6e7575f-ec5e-4500-993a-65c995622fdf', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan desi\",\"messages\":\"Tagihan Juni 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/11\"}', NULL, '2023-05-07 14:54:59', '2023-05-07 14:54:59'),
('a6e8a2b8-d758-4ee5-ac7b-0c4f0b278556', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 25, '{\"tagihan_id\":\"12\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/17\"}', NULL, '2023-05-09 16:17:49', '2023-05-09 16:17:49'),
('aa42925f-66e3-4fa0-811d-7030d1bd342b', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 26, '{\"tagihan_id\":\"1\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/9\"}', '2023-04-28 15:57:18', '2023-04-20 16:02:23', '2023-04-28 15:57:18'),
('add6dfa5-5e05-4b17-a165-95a94af63765', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan qqq\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/4\"}', NULL, '2023-04-19 16:32:20', '2023-04-19 16:32:20'),
('afdb0355-d45b-4f33-87c0-e8108020f050', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":1,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama bagus Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/1\"}', NULL, '2023-04-19 16:46:00', '2023-04-19 16:46:00'),
('b2e76b93-65fd-4d9d-a565-786f8573d590', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan riza\",\"messages\":\"Tagihan Juni 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/12\"}', NULL, '2023-05-07 14:54:59', '2023-05-07 14:54:59'),
('b5789762-185c-4ed9-ab97-960b0ad2e2f8', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":8,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama desi Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/8\"}', '2023-05-01 14:01:44', '2023-04-20 15:45:11', '2023-05-01 14:01:44'),
('b62cc4f7-46ba-48c7-ab94-6a866c440c37', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 25, '{\"tagihan_id\":\"10\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/15\"}', NULL, '2023-05-07 14:56:12', '2023-05-07 14:56:12'),
('b9fd3bba-0dd7-47c0-93e3-70e1b48f3498', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan andin\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/2\"}', NULL, '2023-04-19 16:45:17', '2023-04-19 16:45:17'),
('be37995e-4445-49b6-9e32-135b4fe13e94', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 20, '{\"tagihan_id\":\"1\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/1\"}', NULL, '2023-04-19 16:32:53', '2023-04-19 16:32:53'),
('bea9c506-da7a-4311-8113-8670522a0729', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan bagus\",\"messages\":\"Tagihan Mei 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/5\"}', NULL, '2023-04-20 16:26:47', '2023-04-20 16:26:47'),
('ca8677bf-46b6-4060-a71e-2395dbb200b2', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":5,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama andin Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/5\"}', NULL, '2023-04-19 17:05:00', '2023-04-19 17:05:00'),
('cb9c15d0-9f98-45a9-93ff-cdae523f3cd8', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 25, '{\"tagihan_id\":\"1\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/1\"}', NULL, '2023-04-19 16:32:53', '2023-04-19 16:32:53'),
('ced6e6c8-5f84-4c79-91dd-6cd31555a94d', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 20, '{\"tagihan_id\":\"1\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/9\"}', NULL, '2023-04-20 16:02:23', '2023-04-20 16:02:23'),
('d23b982b-b92b-46b8-8305-3dccee82feb1', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan riza\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/4\"}', NULL, '2023-04-19 16:45:17', '2023-04-19 16:45:17'),
('d3736635-5eae-41c4-a22d-1dbececb7f61', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":13,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama desi Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/13\"}', NULL, '2023-05-07 14:41:54', '2023-05-07 14:41:54'),
('d62bdb42-dfee-4494-8c2e-9ec96301378a', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 26, '{\"tagihan_id\":\"1\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/1\"}', '2023-04-19 16:33:23', '2023-04-19 16:32:53', '2023-04-19 16:33:23'),
('d794152e-8bec-42d3-8896-c104884809d5', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan messi\",\"messages\":\"Tagihan April 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/1\"}', NULL, '2023-04-19 16:32:20', '2023-04-19 16:32:20'),
('dcf78b01-523a-4005-b28f-2b9145251c7c', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan desi\",\"messages\":\"Tagihan Mei 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/7\"}', NULL, '2023-04-20 16:26:47', '2023-04-20 16:26:47'),
('dfc88c27-273f-48fa-a41d-abd7c29611b7', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":2,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama bagus Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/2\"}', NULL, '2023-04-19 16:46:08', '2023-04-19 16:46:08'),
('e28408f3-1d35-4a2f-a63e-180f216e6ba6', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan andin\",\"messages\":\"Tagihan Juni 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/10\"}', NULL, '2023-05-07 14:54:59', '2023-05-07 14:54:59'),
('f149bd33-6c47-4c8f-bebd-039946ef90d2', 'App\\Notifications\\PembayaranKonfirmasiNotification', 'App\\Models\\User', 22, '{\"pembayaran_id\":14,\"title\":\"Konfirmasi Pembayaran \",\"messages\":\" Pembayaran Tagihan SPP Atas Nama bagus dwi prasery Telah Dikonfiramsi .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/14\"}', NULL, '2023-05-07 14:55:10', '2023-05-07 14:55:10'),
('f7e37921-c184-4e49-a8ed-d3520658b5f2', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 15, '{\"tagihan_id\":\"12\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/17\"}', NULL, '2023-05-09 16:17:49', '2023-05-09 16:17:49'),
('fa02cd8d-1831-46c6-8962-4fe15a064d98', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 20, '{\"tagihan_id\":\"12\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/17\"}', NULL, '2023-05-09 16:17:49', '2023-05-09 16:17:49'),
('fc35283e-61a8-4e78-9306-79d24fd12d91', 'App\\Notifications\\TagihanNotification', 'App\\Models\\User', 22, '{\"tagihan_id\":null,\"title\":\"Tagihan andin\",\"messages\":\"Tagihan Mei 2023\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/wali\\/pembayaran\\/6\"}', NULL, '2023-04-20 16:26:47', '2023-04-20 16:26:47'),
('fcf2fa72-f54c-495f-ac6d-3472904ea40b', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 26, '{\"tagihan_id\":\"4\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/6\"}', '2023-04-30 13:38:27', '2023-04-19 17:07:12', '2023-04-30 13:38:27'),
('fea2a604-bae8-4a7e-a94e-4cb4e6344a31', 'App\\Notifications\\PembayaranNotification', 'App\\Models\\User', 25, '{\"tagihan_id\":\"1\",\"wali_id\":22,\"title\":\"Pembayaran Tagihan\",\"messages\":\"joko Melakukan Pembayaran Tagihan .\",\"url\":\"http:\\/\\/127.0.0.1:8000\\/operator\\/pembayaran\\/9\"}', NULL, '2023-04-20 16:02:23', '2023-04-20 16:02:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('joko@gmail.com', '$2y$10$4bjgI6a.bR6zc8CoEuQlNO.oGwyZtCqRZD7glWh0NSyiTdYVLMd9i', '2023-05-15 15:13:59'),
('admin@gmail.com', '$2y$10$tTajCJuC5zQf1bFrBC/9bO6D631K868vJ6xP3O8Ac9zyn6j52pDti', '2023-05-15 15:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `pembayarans`
--

CREATE TABLE `pembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bank_sekolah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `wali_bank_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tagihan_id` bigint(20) UNSIGNED NOT NULL,
  `wali_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_bayar` datetime NOT NULL,
  `tanggal_konfirmasi` datetime DEFAULT NULL,
  `jumlah_dibayar` double NOT NULL,
  `bukti_bayar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metode_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pembayarans`
--

INSERT INTO `pembayarans` (`id`, `bank_sekolah_id`, `wali_bank_id`, `tagihan_id`, `wali_id`, `tanggal_bayar`, `tanggal_konfirmasi`, `jumlah_dibayar`, `bukti_bayar`, `metode_pembayaran`, `user_id`, `created_at`, `updated_at`) VALUES
(5, NULL, NULL, 2, 22, '2023-04-20 00:00:00', '2023-04-20 00:04:59', 900000, NULL, 'manual', 26, '2023-04-19 17:04:59', '2023-04-19 17:04:59'),
(6, 1, 3, 4, 22, '2023-04-20 00:00:00', '2023-04-20 00:07:36', 6000000, 'public/wXKY60wKAaN97ASPg2jhPiDF5sQT5bue9mGQOPod.jpg', 'transfer', 26, '2023-04-19 17:07:12', '2023-04-19 17:07:36'),
(7, NULL, NULL, 3, 22, '2023-04-20 00:00:00', '2023-04-20 22:45:02', 5000000, NULL, 'manual', 26, '2023-04-20 15:45:02', '2023-04-20 15:45:02'),
(8, NULL, NULL, 3, 22, '2023-04-20 00:00:00', '2023-04-20 22:45:11', 1000000, NULL, 'manual', 26, '2023-04-20 15:45:11', '2023-04-20 15:45:11'),
(9, 1, 3, 1, 22, '2023-04-20 00:00:00', '2023-05-01 13:15:50', 6000000, 'public/XpQKdIxFDn5VpkBshPyTsEf78oxVYVHqmveIw5qR.jpg', 'transfer', 26, '2023-04-20 16:02:23', '2023-05-01 06:15:50'),
(10, NULL, NULL, 6, 22, '2023-04-20 00:00:00', '2023-04-20 23:27:12', 900000, NULL, 'manual', 26, '2023-04-20 16:27:12', '2023-04-20 16:27:12'),
(11, NULL, NULL, 5, 22, '2023-04-30 00:00:00', '2023-04-30 21:03:36', 3000000, NULL, 'manual', 26, '2023-04-30 14:03:36', '2023-04-30 14:03:36'),
(12, NULL, NULL, 5, 22, '2023-05-01 00:00:00', '2023-05-01 13:16:06', 3000000, NULL, 'manual', 26, '2023-05-01 06:16:06', '2023-05-01 06:16:06'),
(13, NULL, NULL, 7, 22, '2023-05-07 00:00:00', '2023-05-07 21:41:53', 2000000, NULL, 'manual', 26, '2023-05-07 14:41:53', '2023-05-07 14:41:53'),
(14, NULL, NULL, 9, 22, '2023-05-07 00:00:00', '2023-05-07 21:55:10', 6000000, NULL, 'manual', 26, '2023-05-07 14:55:10', '2023-05-07 14:55:10'),
(15, 1, 3, 10, 22, '2023-05-07 00:00:00', '2023-05-07 21:57:28', 900000, 'public/kWjpUMz1RPy1G2ACtubW7StbWIhHq5NCG5DbYoCv.jpg', 'transfer', 26, '2023-05-07 14:56:12', '2023-05-07 14:57:28'),
(16, NULL, NULL, 11, 22, '2023-05-07 00:00:00', '2023-05-07 21:57:41', 6000000, NULL, 'manual', 26, '2023-05-07 14:57:41', '2023-05-07 14:57:41'),
(17, 1, 3, 12, 22, '2023-05-09 00:00:00', NULL, 6000000, 'public/XjoIgC4v3jkOWAXfleg37yHsttOEDSehPi2pbeWF.jpg', 'transfer', 22, '2023-05-09 16:17:48', '2023-05-09 16:17:48');

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `val` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `siswas`
--

CREATE TABLE `siswas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `biaya_id` bigint(20) UNSIGNED NOT NULL,
  `wali_id` int(11) DEFAULT NULL,
  `wali_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nisn` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siswas`
--

INSERT INTO `siswas` (`id`, `biaya_id`, `wali_id`, `wali_status`, `nama`, `nisn`, `foto`, `jurusan`, `kelas`, `angkatan`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 22, 'oke', 'bagus dwi prasery', '7654', 'uploads/foto/1681922501-IMG_20200802_205716_628.jpg', 'Teknik Kendaraan Ringan', '12', '2023', 26, '2023-04-19 16:41:41', '2023-05-03 04:51:46'),
(2, 3, 22, 'oke', 'andin', '3232', 'uploads/foto/1681922531-IMG_20200802_205716_628.jpg', 'Teknik Komputer Jaringan', '12', '2023', 26, '2023-04-19 16:42:11', '2023-04-19 16:42:11'),
(3, 1, 22, 'oke', 'desi', '4343', 'uploads/foto/1681922664-IMG_20200802_205716_628.jpg', 'Rekayasa Perangkat Lunak', '11', '2022', 26, '2023-04-19 16:44:24', '2023-05-07 13:46:31'),
(4, 1, 22, 'oke', 'riza', '323233', 'uploads/foto/1681922700-IMG_20200802_205716_628.jpg', 'Teknik Komputer Jaringan', '10', '2023', 26, '2023-04-19 16:45:00', '2023-05-07 13:46:23');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `reason`, `model_type`, `model_id`, `created_at`, `updated_at`) VALUES
(1, 'aktif', NULL, 'App\\Models\\Siswa', 1, '2023-04-19 16:41:41', '2023-04-19 16:41:41'),
(2, 'aktif', NULL, 'App\\Models\\Siswa', 2, '2023-04-19 16:42:11', '2023-04-19 16:42:11'),
(3, 'aktif', NULL, 'App\\Models\\Siswa', 3, '2023-04-19 16:44:24', '2023-04-19 16:44:24'),
(4, 'aktif', NULL, 'App\\Models\\Siswa', 4, '2023-04-19 16:45:00', '2023-04-19 16:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `tagihans`
--

CREATE TABLE `tagihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `siswa_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `angkatan` int(11) DEFAULT NULL,
  `kelas` int(11) DEFAULT NULL,
  `tanggal_tagihan` date NOT NULL,
  `tanggal_lunas` date DEFAULT NULL,
  `tanggal_jatuh_tempo` date NOT NULL,
  `denda` double DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('baru','angsur','lunas') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagihans`
--

INSERT INTO `tagihans` (`id`, `siswa_id`, `user_id`, `angkatan`, `kelas`, `tanggal_tagihan`, `tanggal_lunas`, `tanggal_jatuh_tempo`, `denda`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 26, NULL, NULL, '2023-04-11', '2023-04-20', '2023-04-19', NULL, 'ddsa', 'lunas', '2023-04-19 16:45:17', '2023-05-01 06:15:50'),
(2, 2, 26, NULL, NULL, '2023-04-11', '2023-04-20', '2023-04-19', NULL, 'ddsa', 'lunas', '2023-04-19 16:45:17', '2023-04-19 17:04:59'),
(3, 3, 26, NULL, NULL, '2023-04-11', '2023-04-20', '2023-04-19', NULL, 'ddsa', 'lunas', '2023-04-19 16:45:17', '2023-04-20 15:45:11'),
(4, 4, 26, NULL, NULL, '2023-04-11', '2023-04-20', '2023-04-19', NULL, 'ddsa', 'lunas', '2023-04-19 16:45:17', '2023-04-19 17:07:36'),
(5, 1, 26, NULL, NULL, '2023-05-04', '2023-05-01', '2023-05-20', NULL, 'd', 'lunas', '2023-04-20 16:26:47', '2023-05-01 06:16:06'),
(6, 2, 26, NULL, NULL, '2023-05-04', '2023-04-20', '2023-05-20', NULL, 'd', 'lunas', '2023-04-20 16:26:47', '2023-04-20 16:27:12'),
(7, 3, 26, NULL, NULL, '2023-05-04', NULL, '2023-05-20', NULL, 'd', 'angsur', '2023-04-20 16:26:47', '2023-05-07 14:41:53'),
(8, 4, 26, NULL, NULL, '2023-05-04', NULL, '2023-05-20', NULL, 'd', 'baru', '2023-04-20 16:26:47', '2023-04-20 16:26:47'),
(9, 1, 26, NULL, NULL, '2023-06-07', '2023-05-07', '2023-06-29', NULL, NULL, 'lunas', '2023-05-07 14:54:59', '2023-05-07 14:55:10'),
(10, 2, 26, NULL, NULL, '2023-06-07', '2023-05-07', '2023-06-29', NULL, NULL, 'lunas', '2023-05-07 14:54:59', '2023-05-07 14:57:28'),
(11, 3, 26, NULL, NULL, '2023-06-07', '2023-05-07', '2023-06-29', NULL, NULL, 'lunas', '2023-05-07 14:54:59', '2023-05-07 14:57:41'),
(12, 4, 26, NULL, NULL, '2023-06-07', NULL, '2023-06-29', NULL, NULL, 'baru', '2023-05-07 14:54:59', '2023-05-07 14:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan_details`
--

CREATE TABLE `tagihan_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tagihan_id` bigint(20) UNSIGNED NOT NULL,
  `nama_biaya` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_biaya` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tagihan_details`
--

INSERT INTO `tagihan_details` (`id`, `tagihan_id`, `nama_biaya`, `jumlah_biaya`, `created_at`, `updated_at`) VALUES
(1, 1, 'spp', 6000000, '2023-04-19 16:45:17', '2023-04-19 16:45:17'),
(2, 2, 'Pembangunan gedung', 900000, '2023-04-19 16:45:17', '2023-04-19 16:45:17'),
(3, 3, 'spp', 6000000, '2023-04-19 16:45:17', '2023-04-19 16:45:17'),
(4, 4, 'spp', 6000000, '2023-04-19 16:45:17', '2023-04-19 16:45:17'),
(5, 5, 'spp', 6000000, '2023-04-20 16:26:47', '2023-04-20 16:26:47'),
(6, 6, 'Pembangunan gedung', 900000, '2023-04-20 16:26:47', '2023-04-20 16:26:47'),
(7, 7, 'spp', 6000000, '2023-04-20 16:26:47', '2023-04-20 16:26:47'),
(8, 8, 'spp', 6000000, '2023-04-20 16:26:47', '2023-04-20 16:26:47'),
(9, 9, 'spp', 6000000, '2023-05-07 14:54:59', '2023-05-07 14:54:59'),
(10, 10, 'Pembangunan gedung', 900000, '2023-05-07 14:54:59', '2023-05-07 14:54:59'),
(11, 11, 'spp', 6000000, '2023-05-07 14:54:59', '2023-05-07 14:54:59'),
(12, 12, 'spp', 6000000, '2023-05-07 14:54:59', '2023-05-07 14:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` enum('operator','admin','wali') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `akses`, `email`, `email_verified_at`, `nohp`, `nohp_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'andi', 'wali', 'andi@gmail.com', '2023-03-23 06:28:13', '434343', '2023-03-24 13:28:13', '$2y$10$PTB1Vj59dK/5.D2RPReAbOz5E/O.f520nIs5VUGMYupIqZ1XLbYQ.', NULL, '2023-03-23 06:28:13', '2023-04-02 14:50:22'),
(13, 'yanto', 'operator', 'operator@gmail.com', NULL, '0988888222', NULL, '$2y$10$oYEgg4CzUymQwkFL8YVziuhCKvtDOw0jh41pUzk1gayiZldGyutQe', NULL, '2023-03-23 19:41:06', '2023-03-23 20:55:25'),
(15, 'santi', 'operator', 'sati@gmail.com', NULL, '00808448', NULL, '$2y$10$rWtADHAIVi.6RfMmqkw/w.7ShsMZLqRkWU76hlQ/BSOQvSE.omcs6', NULL, '2023-03-23 20:14:03', '2023-03-23 20:57:40'),
(18, 'Santoso', 'wali', 'user@gmail.com', NULL, '32323', NULL, '$2y$10$bZpDksrZfmHV1zJ6t/lNquEieyYT6kGJapd6KcH4Y6HMz0ychlp1.', NULL, '2023-03-24 05:49:06', '2023-04-02 15:59:18'),
(20, 'sutris', 'operator', 'sutris@gmail.com', NULL, '0821212', NULL, '$2y$10$er4JtgJ81e3IVjGhkfj5/upsJ9muIIIfxvO9qaDQ6yUsBAX7Ch9pi', NULL, '2023-03-25 03:02:47', '2023-03-25 03:02:47'),
(21, 'rizky11', 'admin', 'rizky@gmail.com', NULL, '0869696', NULL, '$2y$10$y2PAAF6N8Xx.E6RokbEBRO3IkWvKaU4p0IUVjKsWS/SF8rXjxalW2', NULL, '2023-03-25 13:30:50', '2023-03-25 13:31:08'),
(22, 'joko', 'wali', 'joko@gmail.com', NULL, '0707676760', NULL, '$2y$10$Y4.s8HXGmoZ66DWcG17LeuTgt8kcD0sErLKH3fO8NuH7aLIEI/ooy', NULL, '2023-03-25 13:31:49', '2023-03-25 13:31:49'),
(23, 'budi', 'wali', 'budi@gmail.com', NULL, '0080833', NULL, '$2y$10$8GZVmduv59R.zbblNYpKG.0glyAzEG/qTizaDw5eKOGNGbBoyvEXK', NULL, '2023-03-28 06:17:01', '2023-03-28 06:17:01'),
(25, 'admin', 'operator', 'admingmail.com', NULL, '00808666', NULL, '$2y$10$JgVdyVTo0geGgK/HIV/X6eAesh2WvUa3KYNB85MH2o91DGwUBdT.C', NULL, '2023-04-01 07:12:40', '2023-04-01 07:12:40'),
(26, 'admin', 'operator', 'admin@gmail.com', NULL, '0080866622', NULL, '$2y$10$6vgCBGVE1zBAaMprcKUJq.MhqlqcG7mKx0cUDaMZrSeT0.VjTQvAW', NULL, '2023-04-01 07:12:57', '2023-04-01 07:12:57');

-- --------------------------------------------------------

--
-- Table structure for table `wali_banks`
--

CREATE TABLE `wali_banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wali_id` bigint(20) UNSIGNED NOT NULL COMMENT 'wali id adalah primary key di user id',
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomor_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wali_banks`
--

INSERT INTO `wali_banks` (`id`, `wali_id`, `kode`, `nama_bank`, `nama_rekening`, `nomor_rekening`, `created_at`, `updated_at`) VALUES
(3, 22, '232', 'mandiri', 'bagus aja', '3232', '2023-04-19 17:06:43', '2023-04-19 17:06:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_sekolahs`
--
ALTER TABLE `bank_sekolahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biayas`
--
ALTER TABLE `biayas`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pembayarans`
--
ALTER TABLE `pembayarans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pembayarans_tagihan_id_index` (`tagihan_id`),
  ADD KEY `pembayarans_wali_id_index` (`wali_id`),
  ADD KEY `pembayarans_user_id_index` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `siswas_nisn_unique` (`nisn`),
  ADD KEY `siswas_wali_id_index` (`wali_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `statuses_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `tagihans`
--
ALTER TABLE `tagihans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tagihans_siswa_id_index` (`siswa_id`),
  ADD KEY `tagihans_user_id_index` (`user_id`);

--
-- Indexes for table `tagihan_details`
--
ALTER TABLE `tagihan_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nohp_unique` (`nohp`);

--
-- Indexes for table `wali_banks`
--
ALTER TABLE `wali_banks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bank_sekolahs`
--
ALTER TABLE `bank_sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `biayas`
--
ALTER TABLE `biayas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `pembayarans`
--
ALTER TABLE `pembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tagihans`
--
ALTER TABLE `tagihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tagihan_details`
--
ALTER TABLE `tagihan_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `wali_banks`
--
ALTER TABLE `wali_banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
