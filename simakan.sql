-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 29, 2026 at 04:47 PM
-- Server version: 12.2.2-MariaDB
-- PHP Version: 8.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangsal`
--

CREATE TABLE `bangsal` (
  `id` int(11) NOT NULL COMMENT 'ID Bangsal',
  `nama_bangsal` varchar(100) NOT NULL COMMENT 'Contoh: ''Palem'', ''Melati'', ''Mawar'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detail_makanan_pasien`
--

CREATE TABLE `detail_makanan_pasien` (
  `id` int(11) NOT NULL COMMENT 'ID Baris Pasien',
  `permintaan_id` int(11) NOT NULL COMMENT 'Menghubungkan ke Header Form',
  `kamar_kelas` varchar(50) NOT NULL COMMENT 'Ditulis manual oleh bangsal, contoh: Kamar 8',
  `nama_pasien` varchar(150) NOT NULL COMMENT 'Nama lengkap pasien',
  `no_rm` varchar(20) NOT NULL COMMENT 'Nomor Rekam Medis (Contoh: 02.30.20)',
  `tanggal_lahir` date DEFAULT NULL COMMENT 'Tanggal lahir pasien',
  `diet_pasien` varchar(255) DEFAULT NULL COMMENT 'Detail diet pasien (Contoh: Rendah Garam)',
  `keterangan` text DEFAULT NULL COMMENT 'Catatan tambahan dari bangsal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pasien_bentuk_makanan`
--

CREATE TABLE `pasien_bentuk_makanan` (
  `id` int(11) NOT NULL COMMENT 'ID Unik',
  `detail_makanan_pasien_id` int(11) NOT NULL COMMENT 'Menghubungkan ke baris pasien',
  `bentuk_makanan` enum('NASI','BUBUR','MASAKAN CAIR / SUSU','BS','SONDE') NOT NULL COMMENT 'Pilihan bentuk makanan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_makanan`
--

CREATE TABLE `permintaan_makanan` (
  `id` int(11) NOT NULL COMMENT 'ID Lembar Permintaan',
  `bangsal_id` int(11) NOT NULL COMMENT 'Asal Bangsal yang meminta',
  `user_id` int(11) NOT NULL COMMENT 'Petugas bangsal yang menginput',
  `sub_ruangan` varchar(50) DEFAULT NULL COMMENT 'Zonasi internal, misal: Palem 2, Palem 3',
  `tanggal_pemberian` date NOT NULL COMMENT 'Tanggal makanan disajikan',
  `waktu_makan` enum('Pagi','Siang','Malam') NOT NULL COMMENT 'Waktu Shift',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'ID User',
  `username` varchar(50) NOT NULL COMMENT 'Username login',
  `password` varchar(255) NOT NULL COMMENT 'Password yang sudah di-hash',
  `nama_lengkap` varchar(100) NOT NULL COMMENT 'Nama petugas',
  `role` enum('bangsal','dapur','admin','superadmin') NOT NULL COMMENT 'Kategori akun',
  `bangsal_id` int(11) DEFAULT NULL COMMENT 'Hanya terisi jika role = bangsal',
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama_lengkap`, `role`, `bangsal_id`, `created_at`) VALUES
(1, 'superadmin', '$2y$12$NBTQ9S5Ep9reUnMg0Syl3.qqztke5y1yOGsWiSWQKZnV4Ofph4cB6', 'Superadmin Utama', 'superadmin', NULL, '2026-05-28 17:35:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangsal`
--
ALTER TABLE `bangsal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_bangsal` (`nama_bangsal`);

--
-- Indexes for table `detail_makanan_pasien`
--
ALTER TABLE `detail_makanan_pasien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permintaan_id` (`permintaan_id`);

--
-- Indexes for table `pasien_bentuk_makanan`
--
ALTER TABLE `pasien_bentuk_makanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_pasien_id` (`detail_makanan_pasien_id`);

--
-- Indexes for table `permintaan_makanan`
--
ALTER TABLE `permintaan_makanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bangsal_id` (`bangsal_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `bangsal_id` (`bangsal_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangsal`
--
ALTER TABLE `bangsal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Bangsal';

--
-- AUTO_INCREMENT for table `detail_makanan_pasien`
--
ALTER TABLE `detail_makanan_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Baris Pasien';

--
-- AUTO_INCREMENT for table `pasien_bentuk_makanan`
--
ALTER TABLE `pasien_bentuk_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Unik';

--
-- AUTO_INCREMENT for table `permintaan_makanan`
--
ALTER TABLE `permintaan_makanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Lembar Permintaan';

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID User', AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_makanan_pasien`
--
ALTER TABLE `detail_makanan_pasien`
  ADD CONSTRAINT `1` FOREIGN KEY (`permintaan_id`) REFERENCES `permintaan_makanan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pasien_bentuk_makanan`
--
ALTER TABLE `pasien_bentuk_makanan`
  ADD CONSTRAINT `1` FOREIGN KEY (`detail_makanan_pasien_id`) REFERENCES `detail_makanan_pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permintaan_makanan`
--
ALTER TABLE `permintaan_makanan`
  ADD CONSTRAINT `1` FOREIGN KEY (`bangsal_id`) REFERENCES `bangsal` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `1` FOREIGN KEY (`bangsal_id`) REFERENCES `bangsal` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
