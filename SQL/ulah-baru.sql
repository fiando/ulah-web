-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2018 at 01:49 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ulah`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `kode` varchar(3) NOT NULL,
  `nama` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bcm_histori_pesan`
--

CREATE TABLE `bcm_histori_pesan` (
  `idhistori_pesan` int(11) NOT NULL,
  `pesan` varchar(45) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idunik` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bcm_kategori`
--

CREATE TABLE `bcm_kategori` (
  `idkategori` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `idunik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bcm_nomor`
--

CREATE TABLE `bcm_nomor` (
  `idnomor` int(11) NOT NULL,
  `nomor` varchar(25) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idunik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bcm_unik`
--

CREATE TABLE `bcm_unik` (
  `idunik` int(11) NOT NULL,
  `akses` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `identitas_sekolah`
--

CREATE TABLE `identitas_sekolah` (
  `ididentitas_sekolah` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL COMMENT 'Swasta\nNegeri',
  `bentuk_pendidikan` varchar(10) DEFAULT NULL COMMENT 'SD\nSMP\nSMA\nSMK',
  `akreditasi` char(1) DEFAULT NULL COMMENT 'A\nB\nC',
  `kurikulum` varchar(25) DEFAULT NULL COMMENT '2013\n2006',
  `kepala_sekolah` varchar(60) DEFAULT NULL,
  `alamat` varchar(120) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `rekening` varchar(15) DEFAULT NULL,
  `nama_bank` varchar(45) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `idjenis_pembayaran` int(11) NOT NULL,
  `nama_pembayaran` varchar(45) NOT NULL,
  `nominal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `nama_kategori` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `idorang_tua` int(11) NOT NULL,
  `idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idpembayaran` int(11) NOT NULL,
  `nis` varchar(45) NOT NULL,
  `tgl_tagihan` date DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `status` varchar(15) DEFAULT 'belum_bayar' COMMENT 'lunas,belum_lunas, cancel',
  `idjenis_pembayaran` int(11) NOT NULL,
  `idtahun_pelajaran` varchar(45) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `method` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(45) NOT NULL,
  `akses_pembayaran` tinyint(1) DEFAULT '0',
  `idusers` int(11) NOT NULL,
  `idtingkat` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idorang_tua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tahun_pelajaran`
--

CREATE TABLE `tahun_pelajaran` (
  `idtahun_pelajaran` int(11) NOT NULL,
  `tahun_pelajaran` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tingkat`
--

CREATE TABLE `tingkat` (
  `idtingkat` int(11) NOT NULL,
  `nama_tingkat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idusers` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(120) DEFAULT NULL,
  `idbank` varchar(45) DEFAULT NULL,
  `no_rekening` varchar(15) DEFAULT NULL,
  `level` varchar(15) NOT NULL COMMENT 'admin\ntata_usaha\norang_tua\nsiswa',
  `token` varchar(32) DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'belum_aktif',
  `otp` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `bcm_histori_pesan`
--
ALTER TABLE `bcm_histori_pesan`
  ADD PRIMARY KEY (`idhistori_pesan`);

--
-- Indexes for table `bcm_kategori`
--
ALTER TABLE `bcm_kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `bcm_nomor`
--
ALTER TABLE `bcm_nomor`
  ADD PRIMARY KEY (`idnomor`);

--
-- Indexes for table `bcm_unik`
--
ALTER TABLE `bcm_unik`
  ADD PRIMARY KEY (`idunik`);

--
-- Indexes for table `identitas_sekolah`
--
ALTER TABLE `identitas_sekolah`
  ADD PRIMARY KEY (`ididentitas_sekolah`);

--
-- Indexes for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`idjenis_pembayaran`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`idorang_tua`),
  ADD UNIQUE KEY `idusers_UNIQUE` (`idusers`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idpembayaran`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD UNIQUE KEY `idusers_UNIQUE` (`idusers`),
  ADD UNIQUE KEY `nis_UNIQUE` (`nis`);

--
-- Indexes for table `tahun_pelajaran`
--
ALTER TABLE `tahun_pelajaran`
  ADD PRIMARY KEY (`idtahun_pelajaran`);

--
-- Indexes for table `tingkat`
--
ALTER TABLE `tingkat`
  ADD PRIMARY KEY (`idtingkat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idusers`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bcm_histori_pesan`
--
ALTER TABLE `bcm_histori_pesan`
  MODIFY `idhistori_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `bcm_kategori`
--
ALTER TABLE `bcm_kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `bcm_nomor`
--
ALTER TABLE `bcm_nomor`
  MODIFY `idnomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=368;
--
-- AUTO_INCREMENT for table `bcm_unik`
--
ALTER TABLE `bcm_unik`
  MODIFY `idunik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `identitas_sekolah`
--
ALTER TABLE `identitas_sekolah`
  MODIFY `ididentitas_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  MODIFY `idjenis_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orang_tua`
--
ALTER TABLE `orang_tua`
  MODIFY `idorang_tua` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idpembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;
--
-- AUTO_INCREMENT for table `tahun_pelajaran`
--
ALTER TABLE `tahun_pelajaran`
  MODIFY `idtahun_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tingkat`
--
ALTER TABLE `tingkat`
  MODIFY `idtingkat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
