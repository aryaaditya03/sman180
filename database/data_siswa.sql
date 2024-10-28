-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 09:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_siswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` varchar(255) NOT NULL,
  `kode_guru` varchar(255) NOT NULL,
  `nama_guru` varchar(255) NOT NULL,
  `mapel` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `no_telp` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `kode_guru`, `nama_guru`, `mapel`, `email`, `no_telp`) VALUES
('', '11232', 'Udin', 'Pendidikan Agama Islam', 'aryaaditya2222@gmail.com', '08312293842');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(255) NOT NULL,
  `statuspembayaran` enum('Lunas','Belum') NOT NULL,
  `nominal` int(11) NOT NULL,
  `tanggal_upload` timestamp NULL DEFAULT current_timestamp(),
  `bukti` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `statuspembayaran`, `nominal`, `tanggal_upload`, `bukti`) VALUES
('665c390a52599', 'Belum', 350000, NULL, NULL),
('665c3938c14ca', 'Belum', 350000, NULL, NULL),
('665c3a3c00068', 'Belum', 350000, NULL, NULL),
('665c4193d029a', 'Belum', 350000, NULL, NULL),
('665c431cef2b3', 'Belum', 350000, NULL, NULL),
('665c4f204f8d7', 'Belum', 350000, NULL, NULL),
('665c5218d68cc', 'Belum', 350000, NULL, NULL),
('665c5b8364ca5', 'Belum', 350000, NULL, NULL),
('7', 'Belum', 350000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` varchar(120) NOT NULL,
  `nisn` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `asal_sekolah` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kota_lahir` varchar(128) NOT NULL,
  `no_handphone` varchar(16) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `jenis_kelamin` varchar(35) NOT NULL,
  `agama` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_wali` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ijazah` varchar(120) DEFAULT NULL,
  `nilai_siswa` varchar(255) DEFAULT NULL,
  `skhun` varchar(120) DEFAULT NULL,
  `status` enum('Pending','Lulus','Tidak') NOT NULL,
  `id_pembayaran` varchar(255) NOT NULL,
  `statuspembayaran` enum('Lunas','Belum') NOT NULL,
  `ujian` enum('Belum','Sudah') NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `bukti` varchar(255) DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nisn`, `nik`, `nama_siswa`, `jurusan`, `asal_sekolah`, `tanggal_lahir`, `kota_lahir`, `no_handphone`, `alamat`, `jenis_kelamin`, `agama`, `email`, `nama_ibu`, `nama_ayah`, `nama_wali`, `password`, `ijazah`, `nilai_siswa`, `skhun`, `status`, `id_pembayaran`, `statuspembayaran`, `ujian`, `avatar`, `bukti`, `last_login`) VALUES
('665b0d59b01be', '19220186', '12345678', 'Arya Nur Aditya', 'IPA', 'SMP 108 Jakarta', '2003-03-03', 'Jakarta', '083144513376', 'JL.Budi Swadaya', 'Laki-Laki', 'Islam', 'aryaaditya2222@gmail.com', 'Sri Wahyuni', 'Udin Petot', 'Sri Wahyuni', '$2y$10$8ycvvmcfrIboDSMPxKP.AeL1WOEKc0UysaogphZafCdU64X91n6yy', '19220186.jpg', NULL, NULL, 'Lulus', '665c5b8364ca5', 'Lunas', 'Sudah', NULL, 'Arya_Nur_Aditya.JPG', '2024-06-02 18:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(120) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login` timestamp NULL DEFAULT NULL,
  `id_pembayaran` varchar(255) DEFAULT NULL,
  `password_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `email`, `username`, `password`, `avatar`, `created_at`, `last_login`, `id_pembayaran`, `password_updated_at`) VALUES
('', 'Arya Nur Aditya', 'aryaaditya0303@gmail.com', 'aryaaditya113', '$2y$10$wxDdaL.YGdOzjHhulslOBua9mUAR95i.GE1IvmxJgmU5dknlxsi9e', NULL, '2024-06-01 11:55:11', '2024-06-02 17:50:04', NULL, '2024-06-01 18:55:11'),
('665cb7a1d80bf', 'Arya Aditya', 'aryagawo114@gmail.com', 'AryaAditya', '$2y$10$mbEeYLRhU8Es4NoKjC4vVuEkDH5mECnRKh2/L6EmVIXZRrfL096Ji', '', '2024-06-02 18:19:14', '2024-06-02 18:50:26', NULL, '2024-06-03 01:19:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `siswa_ibfk_1` (`id_pembayaran`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_pembayaran` (`id_pembayaran`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_pembayaran` FOREIGN KEY (`id_pembayaran`) REFERENCES `pembayaran` (`id_pembayaran`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
