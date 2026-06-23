-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2026 pada 13.17
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikmat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2026_06_17_032051_create_partnertypes_table', 1),
(2, '2026_06_17_032129_create_partners_table', 1),
(3, '2026_06_17_032159_create_users_table', 1),
(4, '2026_06_17_032213_create_profiles_table', 1),
(5, '2026_06_17_032228_create_promos_table', 1),
(6, '2026_06_17_151217_create_sessions_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namausaha` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `typeID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `partners`
--

INSERT INTO `partners` (`id`, `namausaha`, `alamat`, `deskripsi`, `typeID`, `created_at`, `updated_at`) VALUES
(2, 'Kopi Senja Kelapa', 'Jl. Merdeka No. 10, Medan', 'Spesialis kopi arabika lokal dengan nuansa outdoor santai.', 2, '2026-06-20 04:05:30', '2026-06-20 04:05:30'),
(3, 'Resto Bumbu Desa', 'Jl. Sudirman No. 45, Medan', 'Menyajikan masakan khas Sunda dan Minang dengan resep warisan.', 3, '2026-06-20 04:05:47', '2026-06-20 04:05:47'),
(4, 'Seblak Mercon Nampol', 'Alun-Alun Kota, Stand B4', 'Seblak pedas berlevel dengan lebih dari 30 macam pilihan topping.', 4, '2026-06-20 04:06:05', '2026-06-20 04:06:05'),
(5, 'Warung Tegal Bahari', 'Jl. Diponegoro No. 8, Medan', 'Nasi rames 24 jam dengan lauk pauk segar yang berganti setiap hari.', 5, '2026-06-20 04:06:20', '2026-06-20 04:06:20'),
(6, 'Sweet Pastry & Bakery', 'Jl. Gajah Mada No. 12, Medan', 'Spesialis roti sobek, croissant, dan kue ulang tahun custom.', 6, '2026-06-20 04:06:36', '2026-06-20 04:06:36'),
(7, 'Sate Taichan Senayan', 'Jl. Pahlawan No. 99, Medan', 'Coworking space cafe yang nyaman untuk bekerja dan meeting.', 2, '2026-06-20 04:06:52', '2026-06-20 04:06:52'),
(8, 'Pondok Ikan Bakar', 'Jl. Pantai Indah No. 1, Belawan', 'Hidangan laut (seafood) segar tangkapan nelayan lokal harian.', 3, '2026-06-20 04:07:08', '2026-06-20 04:07:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `partnertypes`
--

CREATE TABLE `partnertypes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `partnertypes`
--

INSERT INTO `partnertypes` (`id`, `tipe`, `deskripsi`, `created_at`, `updated_at`) VALUES
(2, 'Cafe Modern', 'Tempat berkumpul estetik dengan sajian kopi kekinian, pastry, dan fasilitas WiFi cepat.', '2026-06-20 04:04:30', '2026-06-20 04:04:30'),
(3, 'Restoran Keluarga', 'Tempat makan berkapasitas besar yang menyajikan hidangan berat untuk rombongan keluarga.', '2026-06-20 04:04:39', '2026-06-20 04:04:39'),
(4, 'Street Food & Jajanan', 'Stand makanan ringan dan minuman praktis di area terbuka atau pinggir jalan.', '2026-06-20 04:04:50', '2026-06-20 04:04:50'),
(5, 'Warung Tradisional', 'Warung makan yang fokus menyajikan menu lauk pauk khas Nusantara dengan harga terjangkau.', '2026-06-20 04:05:02', '2026-06-20 04:05:02'),
(6, 'Toko Roti & Kue', 'Usaha kuliner spesialis pembuat roti manis, kue ulang tahun, dan aneka jajanan pasar.', '2026-06-20 04:05:09', '2026-06-20 04:05:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `jabatan` enum('O','S') DEFAULT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `promos`
--

CREATE TABLE `promos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `persen` int(11) NOT NULL,
  `mulai_tgl` date NOT NULL,
  `hingga_tgl` date NOT NULL,
  `partnerID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `promos`
--

INSERT INTO `promos` (`id`, `persen`, `mulai_tgl`, `hingga_tgl`, `partnerID`, `created_at`, `updated_at`) VALUES
(2, 20, '2026-07-01', '2026-07-15', 2, '2026-06-20 04:11:33', '2026-06-20 04:11:33'),
(3, 15, '2026-07-10', '2026-07-20', 3, '2026-06-20 04:11:48', '2026-06-20 04:11:48'),
(4, 10, '2026-08-01', '2026-08-31', 4, '2026-06-20 04:12:04', '2026-06-20 04:12:04'),
(5, 30, '2026-08-15', '2026-08-17', 6, '2026-06-20 04:12:23', '2026-06-20 04:12:23'),
(6, 15, '2026-07-05', '2026-07-15', 8, '2026-06-20 04:13:04', '2026-06-20 04:13:04'),
(7, 10, '2026-08-17', '2026-08-20', 2, '2026-06-20 04:13:42', '2026-06-20 04:13:42'),
(8, 20, '2026-08-01', '2026-08-08', 7, '2026-06-20 04:14:01', '2026-06-20 04:14:01'),
(9, 5, '2026-08-10', '2026-08-20', 5, '2026-06-20 04:14:23', '2026-06-20 04:14:23'),
(10, 25, '2026-10-01', '2026-10-31', 3, '2026-06-20 04:14:46', '2026-06-20 04:14:46'),
(11, 15, '2026-11-01', '2026-11-10', 6, '2026-06-20 04:15:01', '2026-06-20 04:15:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('aXJ4dVsRUwROaW0bRwjcUYOu9OVaswpyHB1Z5VsY', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGtkVUI4OFVJQThJSTRwUXhHZkpXbFpBWDRTSW05VGptMFo5OWdNYiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1781954149);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `partnerID` bigint(20) UNSIGNED NOT NULL,
  `role` enum('admin','partner','staff') NOT NULL DEFAULT 'staff',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `partnerID`, `role`, `created_at`, `updated_at`) VALUES
(2, 'admin.pusat@nikmat.com', '$2y$12$Nq2QpS8cFLVjBATqblhlhudZAR2CLDGP26dC4.I6IvgMOh.SAErTK', 2, 'admin', '2026-06-20 04:08:00', '2026-06-20 04:08:00'),
(3, 'manager@kopisenja.com', '$2y$12$jv1XNNYN5ioKH8EW2vq2Au1xNq74g5SbjUB.N2soNSDLS0rBz6PWK', 2, 'partner', '2026-06-20 04:08:13', '2026-06-20 04:08:13'),
(4, 'kasir.senja@kopisenja.com', '$2y$12$Y/em2BEovmdBxT7xVvQahuL/I.2DEl4Y5wcHkzf1rL3zvrWWHI/8a', 2, 'staff', '2026-06-20 04:08:27', '2026-06-20 04:08:27'),
(5, 'owner@bumbudesa.com', '$2y$12$okiamowTd3Q6ca2ywuP1F..VJf0BpX0/nG.PKw3d50fixFdwS3TzO', 3, 'partner', '2026-06-20 04:08:41', '2026-06-20 04:08:41'),
(6, 'pelayan@bumbudesa.com', '$2y$12$4ZwIdjrvf/KVgnwG09fCF.kyUZbEquE1.5RG0HSDL2ux/UlScMwo.', 3, 'staff', '2026-06-20 04:08:58', '2026-06-20 04:08:58'),
(7, 'bos.seblak@gmail.com', '$2y$12$vH0UsrIaXfsvZAoEmPCR2emoMRR4NgHBAi2SWrKJqHokH0vQcaeDC', 4, 'partner', '2026-06-20 04:09:10', '2026-06-20 04:09:10'),
(8, 'warteg.bahari@yahoo.com', '$2y$12$ZLVc7jSZBAwlWh8cpUxQmeddJgr.T93cYP77QEQlyagGCpUYTBKbe', 5, 'partner', '2026-06-20 04:09:30', '2026-06-20 04:09:30'),
(9, 'admin.sweet@pastry.com', '$2y$12$ZQMU8yWE8ySt4nl8QvDYge8EHmZVFTttnRWD35t.gUGTAIdhEwke6', 6, 'partner', '2026-06-20 04:09:45', '2026-06-20 04:09:45'),
(10, 'ruangtemu.id@gmail.com', '$2y$12$9VaFjUiNmiYRzUHQ6BRtQO3SOjJeghYHI2Xkh/swDCriiafUHLrdG', 8, 'partner', '2026-06-20 04:10:22', '2026-06-20 04:10:22'),
(11, 'owner.ikanbakar@gmail.com', '$2y$12$hA18LCzx54HfwBAWbDfFI.DJFZIg8sO6H2t3OuPp3U9MpDeoSJ47e', 8, 'admin', '2026-06-20 04:10:37', '2026-06-20 04:10:37');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `partners_namausaha_unique` (`namausaha`),
  ADD KEY `partners_typeid_foreign` (`typeID`);

--
-- Indeks untuk tabel `partnertypes`
--
ALTER TABLE `partnertypes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_userid_foreign` (`userID`);

--
-- Indeks untuk tabel `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promos_partnerid_foreign` (`partnerID`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_password_unique` (`password`),
  ADD KEY `users_partnerid_foreign` (`partnerID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `partnertypes`
--
ALTER TABLE `partnertypes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `promos`
--
ALTER TABLE `promos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `partners`
--
ALTER TABLE `partners`
  ADD CONSTRAINT `partners_typeid_foreign` FOREIGN KEY (`typeID`) REFERENCES `partnertypes` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `promos`
--
ALTER TABLE `promos`
  ADD CONSTRAINT `promos_partnerid_foreign` FOREIGN KEY (`partnerID`) REFERENCES `partners` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_partnerid_foreign` FOREIGN KEY (`partnerID`) REFERENCES `partners` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
