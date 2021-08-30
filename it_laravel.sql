-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Agu 2021 pada 10.27
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it_laravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_11_05_025230_create_troubleshootings_table', 1),
(4, '2020_11_19_070027_create_problems_table', 1),
(5, '2020_11_19_095052_create_repairs_table', 1),
(6, '2020_11_19_122723_add_soft_delete_to_troubleshootings', 1),
(7, '2020_11_19_125651_add_soft_delete_to_problems', 1),
(8, '2020_11_19_125809_add_soft_delete_to_repairs', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `problems`
--

CREATE TABLE `problems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uom_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskerusakan_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `problems`
--

INSERT INTO `problems` (`id`, `nama_r`, `qty_r`, `uom_r`, `jeniskerusakan_r`, `area_r`, `dept_r`, `pic_r`, `ket_r`, `harga_r`, `status_r`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IT', '10 Cctv | 4 apdator', 'Cctv | apdator', '10 Cctv | 4 apdator', 'Produksi & Maintemen', 'IT', 'Jow', 'Yang di betulin cuman 10 Cctv | 4 apdator', '1175000', 'Selesai', '2020-11-28 16:51:31', '2021-01-28 08:19:11', '2021-01-28 08:19:11'),
(2, 'Security', '1', 'Power Suplay', 'Power Suplay Mati', 'Security', 'Security', 'Jow', 'Power Suplay Mati, mesti diganti', '140000', 'Selesai', '2020-11-28 16:55:51', '2021-05-16 10:39:46', '2021-05-16 10:39:46'),
(3, 'Arif', '1', 'Power Suplay', 'Power Suplay Mati', 'Gudang', 'Gudang', 'Jow', 'Power Suplay Mati mesti diganti', '130000', 'Selesai', '2020-11-28 16:56:01', '2020-11-28 16:56:01', NULL),
(4, 'Sisca', '1', 'Myop', 'Lincensi', 'Finance', 'Finance', 'Jow', 'Serial no yg digunakan saat ini perlu di upgrade ke abss accounting v28.7 (released 12 Nov 2020).Biaya Upgrade utk MYOB Acxounting v22 ke ABSS Accounting v28.7 = Rp 3.5jt', '14000000', 'Selesai', '2021-01-11 03:19:19', '2021-01-11 03:21:46', '2021-01-11 03:21:46'),
(5, 'Feni', '1', 'Lan no connect', 'Port lan eror | Rusak', 'Finance', 'Finance', 'Jow', 'Port lan rusak, mesti ganti mainboard', '1050000', 'Selesai', '2021-01-11 03:20:31', '2021-01-11 03:21:40', '2021-01-11 03:21:40'),
(6, 'feni', '1', 'port lan tidak terdikteksi', 'port lan tidak terdikteksi', 'bj finance', 'finance', 'Jow', 'port lan tidak terdikteksi, harus ganti mainbord', '1050000', 'Selesai', '2021-01-26 03:31:33', '2021-01-26 03:31:41', '2021-01-26 03:31:41'),
(7, 'feni', '1', 'port lan eror', 'port lan eror', 'finance bj', 'finance bj', 'Jow', 'port lan eror, up wifi', '0', 'Selesai', '2021-01-26 03:33:37', '2021-01-26 03:33:44', '2021-01-26 03:33:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `repairs`
--

CREATE TABLE `repairs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uom_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskerusakan_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_r` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `repairs`
--

INSERT INTO `repairs` (`id`, `nama_r`, `qty_r`, `uom_r`, `jeniskerusakan_r`, `area_r`, `dept_r`, `pic_r`, `ket_r`, `harga_r`, `status_r`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ANI', '3', 'INTERNET TIDAK BISA , WIFI TIDAK BISA', 'INTERNET TIDAK BISA , WIFI TIDAK BISA', 'SO', 'SO', 'Jow', 'ERROR', '0', 'Selesai', '2020-12-01 02:29:15', '2020-12-01 02:29:15', NULL),
(2, 'LENI', '1', 'INTERNET TIDAK BISA, WIFI TIDAK BISA', 'INTERNET TIDAK BISA, WIFI TIDAK BISA', 'SO', 'SO', 'Jow', 'ERROR', '0', 'Selesai', '2020-12-01 02:29:29', '2020-12-01 02:29:29', NULL),
(3, 'WAWA WAHYUDIN', '1', 'INTERNET TIDAK BISA', 'JARINGAN', 'SO', 'DISTRIBUSI', 'Jow', 'EROR', '0', 'Selesai', '2020-12-01 02:29:36', '2020-12-01 02:29:36', NULL),
(4, 'Sisca', '1', 'Myop', 'Myop minta registrasi', 'Finance', 'Finance', 'Jow', 'Myop minta register', '0', 'Selesai', '2020-12-03 03:24:44', '2020-12-03 03:24:44', NULL),
(5, 'Ida Fitriyani', '2', 'WIFI tidak menyala, Internet Lemot, Komputer Lemot', 'Wifi, Internet, Komputer', 'Office Produksi', 'Produksi', 'Jow', 'Belum di apapain', '0', 'Selesai', '2020-12-03 03:26:43', '2020-12-03 03:26:43', NULL),
(6, 'Feni', '1', 'Accurate', 'Accurate lisensi', 'finance belinda jaya', 'finance belinda jaya', 'Jow', 'accurate tidak terhubung ke server', '0', 'Selesai', '2020-12-07 02:52:35', '2020-12-07 02:52:35', NULL),
(7, 'Desi', '1', 'Print', 'tidak keluar tinta hitam', 'finance', 'finance bmp', 'Jow', 'tidak hitam tidak kelihatan, mesti di clining', '0', 'Selesai', '2020-12-07 07:49:36', '2020-12-07 07:49:36', NULL),
(8, 'leni', '1', 'tinta hitam', 'tinta hitam tidak ngeprint', 'marketing', 'marketing', 'Jow', 'tinta hitam mesti di clining', '0', 'Selesai', '2020-12-07 10:37:50', '2020-12-07 10:37:50', NULL),
(9, 'Feni', '1', 'No access Network', 'No access Network', 'finance', 'finance', 'Jow', 'No access Network', '0', 'Selesai', '2020-12-15 05:00:27', '2020-12-15 05:00:27', NULL),
(10, 'Apang', '1', 'Tidak bisa ngeprint ke IP-101', 'Print', 'maintenance', 'maintenance', 'Jow', 'Tidak bisa ngeprint ke IP-101', '0', 'Selesai', '2021-01-04 03:59:17', '2021-01-04 03:59:17', NULL),
(11, 'Ida', '1', 'Printer Tidak Berjalan', 'Printer', 'office produksi', 'office Produksi', 'Jow', 'Printer tidak berjalan', '0', 'Selesai', '2021-01-05 10:37:24', '2021-01-05 10:37:24', NULL),
(12, 'Feni', '1', 'Lan no connect', 'Port lan eror | Rusak', 'Finance', 'Finance', 'Jow', 'Port lan rusak, mesti ganti mainboard', '1050000', 'Selesai', '2021-01-11 03:21:40', '2021-01-11 03:21:40', NULL),
(13, 'Sisca', '1', 'Myop', 'Lincensi', 'Finance', 'Finance', 'Jow', 'Serial no yg digunakan saat ini perlu di upgrade ke abss accounting v28.7 (released 12 Nov 2020).Biaya Upgrade utk MYOB Acxounting v22 ke ABSS Accounting v28.7 = Rp 3.5jt', '14000000', 'Selesai', '2021-01-11 03:21:46', '2021-01-11 03:21:46', NULL),
(14, 'Mr. eduard', '1', 'mail problem', 'mail kena virus', 'general manager', 'GM', 'Jow', 'mail kena virus', '0', 'Selesai', '2021-01-12 10:16:21', '2021-01-12 10:16:21', NULL),
(15, 'feni', '1', 'port lan tidak terdikteksi', 'port lan tidak terdikteksi', 'bj finance', 'finance', 'Jow', 'port lan tidak terdikteksi, harus ganti mainbord', '1050000', 'Selesai', '2021-01-26 03:31:41', '2021-01-26 03:31:41', NULL),
(16, 'feni', '1', 'port lan eror', 'port lan eror', 'finance bj', 'finance bj', 'Jow', 'port lan eror, up wifi', '0', 'Selesai', '2021-01-26 03:33:44', '2021-01-26 03:33:44', NULL),
(17, 'feni', '1', 'input pc', 'input pc', 'finance bj', 'finance bj', 'Jow', 'input pc', '0', 'Selesai', '2021-01-28 08:16:53', '2021-01-28 08:16:53', NULL),
(18, 'IT', '10 Cctv | 4 apdator', 'Cctv | apdator', '10 Cctv | 4 apdator', 'Produksi & Maintemen', 'IT', 'Jow', 'Yang di betulin cuman 10 Cctv | 4 apdator', '1175000', 'Selesai', '2021-01-28 08:19:11', '2021-01-28 08:19:11', NULL),
(19, 'IT', '5', 'Cctv', '5 cctv', 'it', 'it', 'Jow', '5 cctv blm di ganti', '1000000', 'Selesai', '2021-01-28 08:20:51', '2021-01-28 08:20:51', NULL),
(20, 'Security', '1', 'Power Suplay', 'Power Suplay Mati', 'Security', 'Security', 'Jow', 'Power Suplay Mati, mesti diganti', '140000', 'Selesai', '2021-05-16 10:39:46', '2021-05-16 10:39:46', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `troubleshootings`
--

CREATE TABLE `troubleshootings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeniskerusakan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `troubleshootings`
--

INSERT INTO `troubleshootings` (`id`, `nama`, `qty`, `uom`, `jeniskerusakan`, `area`, `dept`, `pic`, `ket`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'IT', '10 Cctv | 4 apdator', 'Cctv | apdator', '10 Cctv | 4 apdator', 'Produksi & Maintemen', 'IT', 'Jow', 'Yang di betulin cuman 10 Cctv | 4 apdator', '2020-11-28 16:49:03', '2020-11-28 16:51:31', '2020-11-28 16:51:31'),
(2, 'Arif', '1', 'Power Suplay', 'Power Suplay Mati', 'Gudang', 'Gudang', 'Jow', 'Power Suplay Mati mesti diganti', '2020-11-28 16:52:59', '2020-11-28 16:56:01', '2020-11-28 16:56:01'),
(3, 'Security', '1', 'Power Suplay', 'Power Suplay Mati', 'Security', 'Security', 'Jow', 'Power Suplay Mati, mesti diganti', '2020-11-28 16:53:59', '2020-11-28 16:55:51', '2020-11-28 16:55:51'),
(4, 'Whasinton', '1', 'Tv 32\" tidak nyala', 'Perkiraan Power Suplay', 'Whasinton', 'Whasinton', 'Jow', 'Repair Power Suplay Tv 32\'', '2020-11-28 16:55:19', '2020-11-28 16:55:19', NULL),
(5, 'ANI', '3', 'INTERNET TIDAK BISA , WIFI TIDAK BISA', 'INTERNET TIDAK BISA , WIFI TIDAK BISA', 'SO', 'SO', 'Jow', 'ERROR', '2020-11-30 07:22:49', '2020-12-01 02:29:15', '2020-12-01 02:29:15'),
(6, 'LENI', '1', 'INTERNET TIDAK BISA, WIFI TIDAK BISA', 'INTERNET TIDAK BISA, WIFI TIDAK BISA', 'SO', 'SO', 'Jow', 'ERROR', '2020-11-30 07:25:46', '2020-12-01 02:29:29', '2020-12-01 02:29:29'),
(7, 'WAWA WAHYUDIN', '1', 'INTERNET TIDAK BISA', 'JARINGAN', 'SO', 'DISTRIBUSI', 'Jow', 'EROR', '2020-11-30 07:28:29', '2020-12-01 02:29:36', '2020-12-01 02:29:36'),
(8, 'Ida Fitriyani', '2', 'WIFI tidak menyala, Internet Lemot, Komputer Lemot', 'Wifi, Internet, Komputer', 'Office Produksi', 'Produksi', 'Jow', 'Belum di apapain', '2020-12-03 02:48:33', '2020-12-03 03:26:43', '2020-12-03 03:26:43'),
(9, 'Sisca', '1', 'Myop', 'Myop minta registrasi', 'Finance', 'Finance', 'Jow', 'Myop minta register', '2020-12-03 02:48:38', '2020-12-03 03:24:44', '2020-12-03 03:24:44'),
(10, 'Sisca', '1', 'Myop', 'Lincensi', 'Finance', 'Finance', 'Jow', 'Serial no yg digunakan saat ini perlu di upgrade ke abss accounting v28.7 (released 12 Nov 2020).\r\nBiaya Upgrade utk MYOB Acxounting v22 ke ABSS Accounting v28.7 = Rp 3.5jt', '2020-12-03 09:44:39', '2021-01-11 03:19:19', '2021-01-11 03:19:19'),
(11, 'Feni', '1', 'Accurate', 'Accurate lisensi', 'finance belinda jaya', 'finance belinda jaya', 'Jow', 'accurate tidak terhubung ke server', '2020-12-07 02:49:19', '2020-12-07 02:52:35', '2020-12-07 02:52:35'),
(12, 'Desi', '1', 'Print', 'tidak keluar tinta hitam', 'finance', 'finance bmp', 'Jow', 'tidak hitam tidak kelihatan, mesti di clining', '2020-12-07 07:48:25', '2020-12-07 07:49:36', '2020-12-07 07:49:36'),
(13, 'leni', '1', 'tinta hitam', 'tinta hitam tidak ngeprint', 'marketing', 'marketing', 'Jow', 'tinta hitam mesti di clining', '2020-12-07 10:36:14', '2020-12-07 10:37:50', '2020-12-07 10:37:50'),
(14, 'Feni', '1', 'No access Network', 'No access Network', 'finance', 'finance', 'Jow', 'No access Network', '2020-12-11 07:09:03', '2020-12-15 05:00:27', '2020-12-15 05:00:27'),
(15, 'Apang', '1', 'Tidak bisa ngeprint ke IP-101', 'Print', 'maintenance', 'maintenance', 'Jow', 'Tidak bisa ngeprint ke IP-101', '2021-01-04 03:58:43', '2021-01-04 03:59:17', '2021-01-04 03:59:17'),
(16, 'Ida', '1', 'Printer Tidak Berjalan', 'Printer', 'office produksi', 'office Produksi', 'Jow', 'Printer tidak berjalan', '2021-01-05 09:30:28', '2021-01-05 10:37:24', '2021-01-05 10:37:24'),
(17, 'Feni', '1', 'Lan no connect', 'Port lan eror | Rusak', 'Finance', 'Finance', 'Jow', 'Port lan rusak, mesti ganti mainboard', '2021-01-11 03:18:28', '2021-01-11 03:20:31', '2021-01-11 03:20:31'),
(18, 'Mr. eduard', '1', 'mail problem', 'mail kena virus', 'general manager', 'GM', 'Jow', 'mail kena virus', '2021-01-12 10:15:51', '2021-01-12 10:16:21', '2021-01-12 10:16:21'),
(19, 'feni', '1', 'port lan tidak terdikteksi', 'port lan tidak terdikteksi', 'bj finance', 'finance', 'Jow', 'port lan tidak terdikteksi, harus ganti mainbord', '2021-01-26 03:30:43', '2021-01-26 03:31:33', '2021-01-26 03:31:33'),
(20, 'feni', '1', 'port lan eror', 'port lan eror', 'finance bj', 'finance bj', 'Jow', 'port lan eror, up wifi', '2021-01-26 03:33:26', '2021-01-26 03:33:37', '2021-01-26 03:33:37'),
(21, 'feni', '1', 'input pc', 'input pc', 'finance bj', 'finance bj', 'Jow', 'input pc', '2021-01-28 02:00:28', '2021-01-28 08:16:53', '2021-01-28 08:16:53'),
(22, 'IT', '5', 'Cctv', '5 cctv', 'it', 'it', 'Jow', '5 cctv blm di ganti', '2021-01-28 08:20:34', '2021-01-28 08:20:51', '2021-01-28 08:20:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `akses`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'jow', 'josefat23@gmail.com', NULL, '$2y$10$XKmJ27mFrmuAg.XbnTPcweafezgzaY8IFs3.DZO.y4uc9frbHQp1m', '0', NULL, '2020-11-28 16:51:11', '2020-11-28 16:51:11'),
(2, 'user 1', 'test@jowjosafat.com', NULL, '$2y$10$3X4KTBeo.RrfkKse6rb1kOZeg92fwUXQkDcypHkjBfeDecBonROs2', '0', NULL, '2021-08-27 07:12:12', '2021-08-27 07:12:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `repairs`
--
ALTER TABLE `repairs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `troubleshootings`
--
ALTER TABLE `troubleshootings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `problems`
--
ALTER TABLE `problems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `repairs`
--
ALTER TABLE `repairs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `troubleshootings`
--
ALTER TABLE `troubleshootings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
