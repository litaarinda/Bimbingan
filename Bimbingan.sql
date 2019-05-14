-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14 Mei 2019 pada 06.15
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kedua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'administrator@gmail.com', '$2y$10$.jg6Ft06ViNIyDF5riY5bOIhgaKrMUsJ6uSG6u04B6d9/5dj1nN7m', '028lTdtafgUIoxnvwqCScuO9Ummct7l510MpQzE9GVGaSaE7GfGdJnyRFIvm', '2019-04-29 13:34:54', '2019-04-29 13:34:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosens`
--

CREATE TABLE `dosens` (
  `id` int(10) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosens`
--

INSERT INTO `dosens` (`id`, `nip`, `name`, `jabatan`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1117788', 'Wisnu Uriawan S.T, M,kom', 'ketua jurusan', 'wisnuuriawa@gmail.com', '$2y$10$TnGFtAdaR.nWYxgUH4tTDOPlKvD7QFbcD/np4YI.8oJFIASCI1RWO', 'PhXAn26iJxHGoo0j4fRimViH20Ts4hnXHPqNW0GTcjcmnNTwiCz55Llsi4Qu', '2019-05-06 11:27:25', '2019-05-06 11:27:25'),
(2, '1117799', 'Mohamad Irfan', 'Dekan', 'mohamadirfan@gmail.com', '$2y$10$btzC5XPHn6Va5K7aLOcouuanIntOO.YXt24CWXULsQOgA9T2DH6ci', 's8uV7g0fjKZBWeIJUfx6C8HS3iffPvfF9u4ECOk6CeRhG7DE40rBvPikUoZd', '2019-05-06 12:51:32', '2019-05-06 12:51:32'),
(3, '1117777', 'RIan Adrian S.T M.kom', 'Dosen Pembimbing RPL', 'rian@gmail.com', '$2y$10$D4guQJ3m9UAz5tDT6E0SFOmMIhk7sDW2tOewnKDsHB8IR9UBAKuMu', NULL, '2019-05-11 06:08:22', '2019-05-11 06:08:22'),
(4, '1117779', 'Jumadi S.T., M.kom', 'Dosen Pembimbing ib', 'Jumadi@gmail.com', '$2y$10$FZMQ2lVCpm.I0nNqTK18TOOl32kt6NO.FAKuncPQKPkTU94aiOvFq', NULL, '2019-05-12 23:55:42', '2019-05-12 23:55:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen_password_resets`
--

CREATE TABLE `dosen_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswas`
--

CREATE TABLE `mahasiswas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nim` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `angkatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dosen_id` int(11) NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `nim`, `name`, `angkatan`, `dosen_id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1167050089', 'litaarinda', '2016', 3, 'litaarinda98@gmail.com', '$2y$10$yv6wI9KO8bwMzXsQAOcXyurZlahnZWH0bgfkgGI2sSW/U51zS3iqG', '2BS6QEI237HhwpD5msk3y2AHcCVlk5YsMkhfK7tnqHiDG7ap8mpH9y58ni4C', '2019-04-27 04:25:25', '2019-04-27 04:25:25'),
(2, '1167050149', 'silmi', '2016', 1, 'silmi@gmail.com', '$2y$10$QHhkVFcb2.FnuD8mB/7sFu/JvUBTjyzPVr5g93RCy7g0rMdrueSwu', 'oxlzbdIJNhLrBtAcKxDjlB4gpLoTz6lbla33S1EPqyKHN1cpXpNHaux5uzTF', '2019-05-06 11:32:05', '2019-05-06 11:32:05'),
(4, '1165030171', 'rina', '2016', 1, 'rinaanjari75@gmail.com', '$2y$10$E1.lHjhgaZO/arA10NHux.dE/ifCWBU0zfIAUdbIVHxcU2I6AWoZi', 'FxQSXsDNHsLAu5gB57l7QnHKU7GEr48Q5D47NZeaJU1qCXGRg8qFp9TV03Zv', '2019-05-06 12:14:06', '2019-05-06 12:14:06'),
(5, '1165030140', 'rizka', '2016', 3, 'rizka@gmail.com', '$2y$10$2Kaipc6V87QxkSkhyGS/k.opw5W.iE2D2jutp/ipCnFU1Xm69oxfC', NULL, '2019-05-06 12:16:52', '2019-05-06 12:16:52'),
(6, '1167050088', 'khusnul', '2017', 1, 'khusnul@gmail.com', '$2y$10$AkxvhVw3tvo9QtSHC09dEejwuO3QUN0frm1d3.RRP1k6sVLNdt3um', '5KSFZWdlNjhXWytoQ9gzogHKdA8IJdbOQsxKkiRcSqyoPaxH1w5sq9xUOWS1', '2019-05-10 14:24:49', '2019-05-10 14:24:49'),
(7, '1167050001', 'alfi gusman', '2015', 2, 'alfigusman@gmail.com', '$2y$10$T8yGrTdnyXXvfsJeyQqfveIwkvfNcq.vCfBzeuK0qnL3Q0jwUA0Rq', NULL, '2019-05-10 14:31:57', '2019-05-10 14:31:57'),
(8, '116705002', 'ariffqi', '2016', 2, 'rifqi123@gmail.com', '$2y$10$PGwdzM4M1OIDvPY3IVx/fehPIYeGqm35H2uCdFT9RD3iXQlOb/5Pu', NULL, '2019-05-11 06:06:46', '2019-05-11 06:06:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_password_resets`
--

CREATE TABLE `mahasiswa_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_03_08_034941_create_admins_table', 1),
(20, '2019_03_08_034942_create_admin_password_resets_table', 1),
(21, '2019_03_08_034959_create_dosens_table', 1),
(22, '2019_03_08_035000_create_dosen_password_resets_table', 1),
(23, '2019_03_08_035041_create_mahasiswas_table', 1),
(24, '2019_03_08_035042_create_mahasiswa_password_resets_table', 1),
(25, '2019_04_29_173810_create_skripsis_table', 2),
(26, '2019_05_08_211105_add_dosen_to_mhs', 3),
(27, '2019_05_14_022807_create_perkembangans_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perkembangans`
--

CREATE TABLE `perkembangans` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `skripsis`
--

CREATE TABLE `skripsis` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul_skripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_skripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `skripsis`
--

INSERT INTO `skripsis` (`id`, `judul_skripsi`, `file_skripsi`, `created_at`, `updated_at`) VALUES
(1, 'BAB 1', 'Web Service Moodle.pdf', '2019-05-13 22:14:00', '2019-05-14 07:26:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`),
  ADD KEY `admin_password_resets_token_index` (`token`);

--
-- Indexes for table `dosens`
--
ALTER TABLE `dosens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dosens_email_unique` (`email`);

--
-- Indexes for table `dosen_password_resets`
--
ALTER TABLE `dosen_password_resets`
  ADD KEY `dosen_password_resets_email_index` (`email`),
  ADD KEY `dosen_password_resets_token_index` (`token`);

--
-- Indexes for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mahasiswas_nim_unique` (`nim`),
  ADD UNIQUE KEY `mahasiswas_email_unique` (`email`);

--
-- Indexes for table `mahasiswa_password_resets`
--
ALTER TABLE `mahasiswa_password_resets`
  ADD KEY `mahasiswa_password_resets_email_index` (`email`),
  ADD KEY `mahasiswa_password_resets_token_index` (`token`);

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
-- Indexes for table `perkembangans`
--
ALTER TABLE `perkembangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skripsis`
--
ALTER TABLE `skripsis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dosens`
--
ALTER TABLE `dosens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mahasiswas`
--
ALTER TABLE `mahasiswas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `perkembangans`
--
ALTER TABLE `perkembangans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skripsis`
--
ALTER TABLE `skripsis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
