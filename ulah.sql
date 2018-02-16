-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2018 at 07:23 AM
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

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`kode`, `nama`) VALUES
('002', 'BANK BRI'),
('003', 'BANK EKSPOR INDONESIA'),
('008', 'BANK MANDIRI'),
('009', 'BANK BNI'),
('011', 'BANK DANAMON'),
('013', 'PERMATA BANK'),
('014', 'BANK BCA'),
('016', 'BANK BII'),
('019', 'BANK PANIN'),
('020', 'BANK ARTA NIAGA KENCANA'),
('022', 'BANK NIAGA'),
('023', 'BANK BUANA IND'),
('026', 'BANK LIPPO'),
('028', 'BANK NISP'),
('030', 'AMERICAN EXPRESS BANK LTD'),
('031', 'CITIBANK N.A.'),
('032', 'JP. MORGAN CHASE BANK, N.A.'),
('033', 'BANK OF AMERICA, N.A'),
('034', 'ING INDONESIA BANK'),
('036', 'BANK MULTICOR TBK.'),
('037', 'BANK ARTHA GRAHA'),
('039', 'BANK CREDIT AGRICOLE INDOSUEZ'),
('040', 'THE BANGKOK BANK COMP. LTD'),
('041', 'THE HONGKONG & SHANGHAI B.C.'),
('042', 'THE BANK OF TOKYO MITSUBISHI UFJ'),
('045', 'BANK SUMITOMO MITSUI INDONESIA'),
('046', 'BANK DBS INDONESIA'),
('047', 'BANK RESONA PERDANIA'),
('048', 'BANK MIZUHO INDONESIA'),
('050', 'STANDARD CHARTERED BANK'),
('052', 'BANK ABN AMRO'),
('053', 'BANK KEPPEL TATLEE BUANA'),
('054', 'BANK CAPITAL INDONESIA, TBK.'),
('057', 'BANK BNP PARIBAS INDONESIA'),
('058', 'BANK UOB INDONESIA'),
('059', 'KOREA EXCHANGE BANK DANAMON'),
('060', 'RABOBANK INTERNASIONAL INDONESIA'),
('061', 'ANZ PANIN BANK'),
('067', 'DEUTSCHE BANK AG.'),
('068', 'BANK WOORI INDONESIA'),
('069', 'BANK OF CHINA LIMITED'),
('076', 'BANK BUMI ARTA'),
('087', 'BANK EKONOMI'),
('088', 'BANK ANTARDAERAH'),
('089', 'BANK HAGA'),
('093', 'BANK IFI'),
('095', 'BANK CENTURY, TBK.'),
('097', 'BANK MAYAPADA'),
('110', 'BANK JABAR'),
('111', 'BANK DKI'),
('112', 'BPD DIY'),
('113', 'BANK JATENG'),
('114', 'BANK JATIM'),
('115', 'BPD JAMBI'),
('116', 'BPD ACEH'),
('117', 'BANK SUMUT'),
('118', 'BANK NAGARI'),
('119', 'BANK RIAU'),
('120', 'BANK SUMSEL'),
('121', 'BANK LAMPUNG'),
('122', 'BPD KALSEL'),
('123', 'BPD KALIMANTAN BARAT'),
('124', 'BPD KALTIM'),
('125', 'BPD KALTENG'),
('126', 'BPD SULSEL'),
('127', 'BANK SULUT'),
('128', 'BPD NTB'),
('129', 'BPD BALI'),
('130', 'BANK NTT'),
('131', 'BANK MALUKU'),
('132', 'BPD PAPUA'),
('133', 'BANK BENGKULU'),
('134', 'BPD SULAWESI TENGAH'),
('135', 'BANK SULTRA'),
('145', 'BANK NUSANTARA PARAHYANGAN'),
('146', 'BANK SWADESI'),
('147', 'BANK MUAMALAT'),
('151', 'BANK MESTIKA'),
('152', 'BANK METRO EXPRESS'),
('153', 'BANK SHINTA INDONESIA'),
('157', 'BANK MASPION'),
('159', 'BANK HAGAKITA'),
('161', 'BANK GANESHA'),
('162', 'BANK WINDU KENTJANA'),
('164', 'HALIM INDONESIA BANK'),
('166', 'BANK HARMONI INTERNATIONAL'),
('167', 'BANK KESAWAN'),
('200', 'BANK TABUNGAN NEGARA (PERSERO)'),
('212', 'BANK HIMPUNAN SAUDARA 1906, TBK '),
('213', 'BANK TABUNGAN PENSIUNAN NASIONAL'),
('405', 'BANK SWAGUNA'),
('422', 'BANK JASA ARTA'),
('426', 'BANK MEGA'),
('427', 'BANK JASA JAKARTA'),
('441', 'BANK BUKOPIN'),
('451', 'BANK SYARIAH MANDIRI'),
('459', 'BANK BISNIS INTERNASIONAL'),
('466', 'BANK SRI PARTHA'),
('472', 'BANK JASA JAKARTA'),
('484', 'BANK BINTANG MANUNGGAL'),
('485', 'BANK BUMIPUTERA'),
('490', 'BANK YUDHA BHAKTI'),
('491', 'BANK MITRANIAGA'),
('494', 'BANK AGRO NIAGA'),
('498', 'BANK INDOMONEX'),
('501', 'BANK ROYAL INDONESIA'),
('503', 'BANK ALFINDO'),
('506', 'BANK SYARIAH MEGA'),
('513', 'BANK INA PERDANA'),
('517', 'BANK HARFA'),
('520', 'PRIMA MASTER BANK'),
('521', 'BANK PERSYARIKATAN INDONESIA'),
('523', 'BANK DIPO INTERNATIONAL'),
('525', 'BANK AKITA'),
('526', 'LIMAN INTERNATIONAL BANK'),
('531', 'ANGLOMAS INTERNASIONAL BANK'),
('535', 'BANK KESEJAHTERAAN EKONOMI'),
('536', 'BANK UIB'),
('542', 'BANK ARTOS IND'),
('547', 'BANK PURBA DANARTA'),
('548', 'BANK MULTI ARTA SENTOSA'),
('553', 'BANK MAYORA'),
('555', 'BANK INDEX SELINDO'),
('558', 'BANK EKSEKUTIF'),
('559', 'CENTRATAMA NASIONAL BANK'),
('562', 'BANK FAMA INTERNASIONAL'),
('564', 'BANK SINAR HARAPAN BALI'),
('566', 'BANK VICTORIA INTERNATIONAL'),
('567', 'BANK HARDA'),
('945', 'BANK FINCONESIA'),
('946', 'BANK MERINCORP'),
('947', 'BANK MAYBANK INDOCORP'),
('948', 'BANK OCBC – INDONESIA'),
('949', 'BANK CHINA TRUST INDONESIA'),
('950', 'BANK COMMONWEALTH');

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

--
-- Dumping data for table `identitas_sekolah`
--

INSERT INTO `identitas_sekolah` (`ididentitas_sekolah`, `nama`, `status`, `bentuk_pendidikan`, `akreditasi`, `kurikulum`, `kepala_sekolah`, `alamat`, `email`, `no_telp`, `rekening`, `nama_bank`, `website`) VALUES
(1, 'Garuda', 'Swasta', 'SMK', 'A', '2013', 'Alberto Fino', 'Jl. Apel no. 2018', 'smkgaruda@smk.com', '0832138213', '988920182017', 'BNI', 'smkgaruda.com');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `idjenis_pembayaran` int(11) NOT NULL,
  `nama_pembayaran` varchar(45) NOT NULL,
  `nominal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_pembayaran`
--

INSERT INTO `jenis_pembayaran` (`idjenis_pembayaran`, `nama_pembayaran`, `nominal`) VALUES
(1, 'SPP', '250000'),
(2, 'Paket Buku Belajar', '150000'),
(3, 'Ujian Tengah Semester', '50000'),
(4, 'Ujian Akhir Semester', '75000'),
(5, 'Ekstra Fotografi', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `nama_kategori` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nama_kategori`) VALUES
(1, 'Multimedia'),
(2, 'Administrasi Perkantoran'),
(3, 'Akuntansi');

-- --------------------------------------------------------

--
-- Table structure for table `orang_tua`
--

CREATE TABLE `orang_tua` (
  `idorang_tua` int(11) NOT NULL,
  `idusers` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orang_tua`
--

INSERT INTO `orang_tua` (`idorang_tua`, `idusers`) VALUES
(1, 21),
(2, 22),
(3, 23),
(4, 24),
(5, 25),
(6, 26),
(7, 27),
(8, 28),
(9, 29),
(10, 30),
(11, 31),
(12, 32),
(13, 33),
(14, 34),
(15, 35),
(16, 36),
(17, 37),
(18, 38),
(19, 39),
(20, 40);

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
  `idtahun_pelajaran` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idpembayaran`, `nis`, `tgl_tagihan`, `tgl_bayar`, `status`, `idjenis_pembayaran`, `idtahun_pelajaran`) VALUES
(1, '7001', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(2, '7001', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(3, '7001', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(4, '7001', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(5, '7001', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(6, '7001', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(7, '7001', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(8, '7001', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(9, '7001', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(10, '7001', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(11, '7001', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(12, '7001', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(13, '7001', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(14, '7001', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(15, '7001', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(16, '7001', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(17, '7001', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(18, '7001', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(19, '7001', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(20, '7001', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(21, '7001', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(22, '7001', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(23, '7001', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(24, '7001', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(25, '7001', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(26, '7001', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(27, '7001', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(28, '7001', '2017-12-15', '2017-12-25', 'lunas', 4, '3'),
(29, '7002', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(30, '7002', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(31, '7002', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(32, '7002', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(33, '7002', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(34, '7002', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(35, '7002', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(36, '7002', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(37, '7002', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(38, '7002', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(39, '7002', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(40, '7002', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(41, '7002', '2017-10-01', '2017-10-10', 'lunas', 1, '3'),
(42, '7002', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(43, '7002', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(44, '7002', '2017-12-15', '2017-12-25', 'lunas', 4, '3'),
(45, '7003', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(46, '7003', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(47, '7003', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(48, '7003', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(49, '7003', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(50, '7003', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(51, '7003', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(52, '7003', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(53, '7003', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(54, '7003', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(55, '7003', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(56, '7003', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(57, '7003', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(58, '7003', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(59, '7003', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3'),
(60, '7003', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3'),
(61, '7004', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(62, '7004', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(63, '7004', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(64, '7004', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(65, '7004', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(66, '7004', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(67, '7004', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(68, '7004', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(69, '7004', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(70, '7004', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(71, '7004', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(72, '7004', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(73, '7004', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(74, '7004', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3'),
(75, '7004', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3'),
(76, '7004', '2017-12-15', '2017-12-25', 'lunas', 4, '3'),
(77, '7005', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(78, '7005', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(79, '7005', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(80, '7005', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(81, '7005', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(82, '7005', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(83, '7005', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(84, '7005', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(85, '7005', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(86, '7005', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(87, '7005', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(88, '7005', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(89, '7005', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(90, '7005', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3'),
(91, '7005', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(92, '7005', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3'),
(93, '7006', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(94, '7006', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(95, '7006', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(96, '7006', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(97, '7006', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(98, '7006', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(99, '7006', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(100, '7006', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(101, '7006', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(102, '7006', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(103, '7006', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(104, '7006', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(105, '7006', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(106, '7006', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3'),
(107, '7006', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(108, '7006', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3'),
(109, '7007', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(110, '7007', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(111, '7007', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(112, '7007', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(113, '7007', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(114, '7007', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(115, '7007', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(116, '7007', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(117, '7007', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(118, '7007', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(119, '7007', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(120, '7007', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(121, '7007', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(122, '7007', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(123, '7007', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(124, '7007', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3'),
(125, '7008', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(126, '7008', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(127, '7008', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(128, '7008', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(129, '7008', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(130, '7008', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(131, '7008', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(132, '7008', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(133, '7008', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(134, '7008', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(135, '7008', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(136, '7008', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(137, '7008', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(138, '7008', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(139, '7008', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3'),
(140, '7008', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3'),
(141, '7009', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(142, '7009', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(143, '7009', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(144, '7009', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(145, '7009', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(146, '7009', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(147, '7009', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(148, '7009', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(149, '7009', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(150, '7009', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(151, '7009', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(152, '7009', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(153, '7009', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(154, '7009', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3'),
(155, '7009', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(156, '7009', '2017-12-15', '2017-12-25', 'lunas', 4, '3'),
(157, '7010', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(158, '7010', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(159, '7010', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(160, '7010', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(161, '7010', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(162, '7010', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(163, '7010', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(164, '7010', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(165, '7010', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(166, '7010', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(167, '7010', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(168, '7010', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(169, '7010', '2017-10-01', '2017-10-10', 'lunas', 1, '3'),
(170, '7010', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(171, '7010', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(172, '7010', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3'),
(173, '7011', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(174, '7011', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(175, '7011', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(176, '7011', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(177, '7011', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(178, '7011', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(179, '7011', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(180, '7011', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(181, '7011', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(182, '7011', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(183, '7011', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(184, '7011', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(185, '7011', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(186, '7011', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(187, '7011', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(188, '7011', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3'),
(189, '7012', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(190, '7012', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(191, '7012', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(192, '7012', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(193, '7012', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(194, '7012', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(195, '7012', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(196, '7012', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(197, '7012', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(198, '7012', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(199, '7012', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(200, '7012', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(201, '7012', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(202, '7012', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3'),
(203, '7012', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3'),
(204, '7012', '2017-12-15', '2017-12-25', 'lunas', 4, '3'),
(205, '7013', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(206, '7013', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(207, '7013', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(208, '7013', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(209, '7013', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(210, '7013', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(211, '7013', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(212, '7013', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(213, '7013', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(214, '7013', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(215, '7013', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(216, '7013', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(217, '7013', '2017-10-01', '2017-10-10', 'lunas', 1, '3'),
(218, '7013', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(219, '7013', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(220, '7013', '2017-12-15', '2017-12-25', 'lunas', 4, '3'),
(221, '7014', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(222, '7014', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(223, '7014', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(224, '7014', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(225, '7014', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(226, '7014', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(227, '7014', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(228, '7014', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(229, '7014', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(230, '7014', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(231, '7014', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(232, '7014', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(233, '7014', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(234, '7014', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3'),
(235, '7014', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3'),
(236, '7014', '2017-12-15', '2017-12-25', 'lunas', 4, '3'),
(237, '7015', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(238, '7015', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(239, '7015', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(240, '7015', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(241, '7015', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(242, '7015', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(243, '7015', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(244, '7015', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(245, '7015', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(246, '7015', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(247, '7015', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(248, '7015', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(249, '7015', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(250, '7015', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3'),
(251, '7015', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(252, '7015', '2017-12-15', '2017-12-25', 'lunas', 4, '3'),
(253, '7016', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(254, '7016', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(255, '7016', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(256, '7016', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(257, '7016', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(258, '7016', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(259, '7016', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(260, '7016', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(261, '7016', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(262, '7016', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(263, '7016', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(264, '7016', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(265, '7016', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(266, '7016', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(267, '7016', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3'),
(268, '7016', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3'),
(269, '7017', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(270, '7017', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(271, '7017', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(272, '7017', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(273, '7017', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(274, '7017', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(275, '7017', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(276, '7017', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(277, '7017', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(278, '7017', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(279, '7017', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(280, '7017', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(281, '7017', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(282, '7017', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(283, '7017', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3'),
(284, '7017', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3'),
(285, '7018', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(286, '7018', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(287, '7018', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(288, '7018', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(289, '7018', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(290, '7018', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(291, '7018', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(292, '7018', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(293, '7018', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(294, '7018', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(295, '7018', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(296, '7018', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(297, '7018', '2017-10-01', '2017-10-10', 'lunas', 1, '3'),
(298, '7018', '2017-11-01', '2017-11-10', 'lunas', 1, '3'),
(299, '7018', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3'),
(300, '7018', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3'),
(301, '7019', '2017-01-01', '2017-01-10', 'lunas', 1, '3'),
(302, '7019', '2017-02-01', '2017-02-10', 'lunas', 1, '3'),
(303, '7019', '2017-03-01', '2017-03-10', 'lunas', 1, '3'),
(304, '7019', '2017-03-10', '2017-03-20', 'lunas', 3, '3'),
(305, '7019', '2017-04-01', '2017-04-10', 'lunas', 1, '3'),
(306, '7019', '2017-05-01', '2017-05-10', 'lunas', 1, '3'),
(307, '7019', '2017-06-01', '2017-06-10', 'lunas', 1, '3'),
(308, '7019', '2017-06-15', '2017-06-25', 'lunas', 4, '3'),
(309, '7019', '2017-07-01', '2017-07-10', 'lunas', 1, '3'),
(310, '7019', '2017-08-01', '2017-08-10', 'lunas', 1, '3'),
(311, '7019', '2017-09-01', '2017-09-10', 'lunas', 1, '3'),
(312, '7019', '2017-09-10', '2017-09-20', 'lunas', 3, '3'),
(313, '7019', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3'),
(314, '7019', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3'),
(315, '7019', '2017-12-01', '2017-12-10', 'lunas', 1, '3'),
(316, '7019', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3');

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

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `akses_pembayaran`, `idusers`, `idtingkat`, `idkategori`, `idorang_tua`) VALUES
('7001', 1, 1, 1, 3, 1),
('7002', 1, 2, 3, 2, 2),
('7003', 1, 3, 1, 1, 3),
('7004', 1, 4, 1, 2, 4),
('7005', 1, 5, 2, 1, 5),
('7006', 1, 6, 2, 2, 6),
('7007', 1, 7, 3, 3, 7),
('7008', 1, 8, 2, 2, 8),
('7009', 1, 9, 1, 1, 9),
('7010', 1, 10, 2, 2, 10),
('7011', 1, 11, 2, 3, 11),
('7012', 1, 12, 1, 1, 12),
('7013', 1, 13, 1, 3, 13),
('7014', 1, 14, 2, 1, 14),
('7015', 1, 15, 1, 1, 15),
('7016', 1, 16, 3, 1, 16),
('7017', 1, 17, 2, 3, 17),
('7018', 1, 18, 3, 2, 18),
('7019', 1, 19, 3, 3, 19);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_pelajaran`
--

CREATE TABLE `tahun_pelajaran` (
  `idtahun_pelajaran` int(11) NOT NULL,
  `tahun_pelajaran` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tahun_pelajaran`
--

INSERT INTO `tahun_pelajaran` (`idtahun_pelajaran`, `tahun_pelajaran`) VALUES
(1, '2015/2016'),
(2, '2016/2017'),
(3, '2017/2018');

-- --------------------------------------------------------

--
-- Table structure for table `tingkat`
--

CREATE TABLE `tingkat` (
  `idtingkat` int(11) NOT NULL,
  `nama_tingkat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tingkat`
--

INSERT INTO `tingkat` (`idtingkat`, `nama_tingkat`) VALUES
(1, 10),
(2, 11),
(3, 12);

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
  `status` varchar(25) NOT NULL DEFAULT 'belum_aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `email`, `username`, `password`, `nama`, `no_telp`, `alamat`, `idbank`, `no_rekening`, `level`, `token`, `status`) VALUES
(1, 'zalindra1@gmail.com', '7001', '$2y$10$HV19HM0b.GSE7kntpk8UhO67ok6prKFef13vJsV/kNP7PZYfvseK.', 'Zalindra', '087703428335', 'Gg. Camar No. 71', '002', '8576975058', 'siswa', NULL, 'aktif'),
(2, 'lukita2@gmail.com', '7002', '$2y$10$TaBlWyNNBIqVctADeyHiz.i0.8JCa7UiH0YbFNkw6sYp39Esm5vLq', 'Lukita', '087723402932', 'Kpg. Taman No. 613', '008', '9153921525', 'siswa', NULL, 'aktif'),
(3, 'ella3@gmail.com', '7003', '$2y$10$lEjVUCBCBPaqWSv4jhPAfuLRHMR4sCkSmIoieTLF7bjVTIQNGvWpO', 'Ella', '084703471830', 'Kpg. Abdul Muis No. 884', '022', '9907635860', 'siswa', NULL, 'aktif'),
(4, 'raina4@gmail.com', '7004', '$2y$10$qijgnsLPBcdAn7HyVPqRkuwaX5QIifr6kdDFVy4cFkvRoBZrICvcy', 'Raina', '089793423739', 'Dk. Setia Budi No. 242', '008', '2528544630', 'siswa', NULL, 'aktif'),
(5, 'tantri5@gmail.com', '7005', '$2y$10$W1nxO6u9uATxXWxY5fJHQ.1nD/vNc3OXQwCHtuh9OAn09NIn5rZPy', 'Tantri', '088723480433', 'Ds. Sumpah Pemuda No. 128', '008', '6111483700', 'siswa', NULL, 'aktif'),
(6, 'lalita6@gmail.com', '7006', '$2y$10$GlNvwad.wgTsW9jfox/SpONcec16jAmGFNkaibPcJVio4s1uyiIWW', 'Lalita', '082783449135', 'Psr. Nangka No. 688', '022', '5389667849', 'siswa', NULL, 'aktif'),
(7, 'lintang7@gmail.com', '7007', '$2y$10$RL2OWqeOadYLx50IJww2ieCepDwuJKYdIomlTa4DhTLsswdVnApUO', 'Lintang', '082703436336', 'Psr. Rajawali Timur No. 256', '002', '1850781528', 'siswa', NULL, 'aktif'),
(8, 'kamaria8@gmail.com', '7008', '$2y$10$bQrqkd4/ey2TnkKh/YRbNuWCmg0GuAPXpMGTb10uPC0qfFibMgAYS', 'Kamaria', '088713458030', 'Jln. Bakau No. 553', '022', '8870800293', 'siswa', NULL, 'aktif'),
(9, 'bakijan9@gmail.com', '7009', '$2y$10$Hka8miCIQy5qNjmwvBmqfOIu9b6ZyPMJAC40FDyj/yXRCSu8r3AIq', 'Bakijan', '085743471934', 'Psr. Acordion No. 259', '009', '3173363914', 'siswa', NULL, 'aktif'),
(10, 'jati10@gmail.com', '7010', '$2y$10$7LteBdRMxG.kS57VNk9R4.qkT4CdbJNDnYHNDd8K6EjEjvPMuLBXy', 'Jati', '087733433633', 'Ds. Barasak No. 886', '014', '4550552077', 'siswa', NULL, 'aktif'),
(11, 'darijan11@gmail.com', '7011', '$2y$10$aaEcwSRbx0a3p8Sux0XhGuGW7eibNmvVzVmhyoQk8z24j6iw5B416', 'Darijan', '089723425536', 'Kpg. Ahmad Dahlan No. 290', '009', '3016572789', 'siswa', NULL, 'aktif'),
(12, 'baktiono12@gmail.com', '7012', '$2y$10$X7F9xT.6hDUTaSxdTjXFtOxdcYRsM48YQ6oCCEOrxa4hV91fb9uyu', 'Baktiono', '084773411332', 'Kpg. Baranang Siang No. 796', '014', '6704488589', 'siswa', NULL, 'aktif'),
(13, 'kartika13@gmail.com', '7013', '$2y$10$gVI4KcA/C1eJnh7E1Q8pteCPigPsFgqLCzhNW9iXPSL0KQ4VCcq2K', 'Kartika', '083733469739', 'Dk. Sunaryo No. 170', '009', '3178710408', 'siswa', NULL, 'aktif'),
(14, 'aswani14@gmail.com', '7014', '$2y$10$0t3K6aCsBafrseNBL2QRDOe/J1yGsd62EGNlI1E1su3lR0kXyvGf.', 'Aswani', '089713409135', 'Ds. Pasteur No. 480', '002', '2112995051', 'siswa', NULL, 'aktif'),
(15, 'baktiono15@gmail.com', '7015', '$2y$10$l8YlHlKo5GaZsyd5F3sRneE65BPB1F3e80PWQy2mS2pC6c6UsDjm6', 'Baktiono', '083793467238', 'Ki. Surapati No. 927', '014', '2004689894', 'siswa', NULL, 'aktif'),
(16, 'simon16@gmail.com', '7016', '$2y$10$w1P5Hb/rltaGhPumspyLYuNXNhujDhYQ2iDIJq0ksmae308pVgSIi', 'Simon', '084723448237', 'Ki. Krakatau No. 924', '014', '6941878703', 'siswa', NULL, 'aktif'),
(17, 'adiarja17@gmail.com', '7017', '$2y$10$3Ck0B2r4M3g5iohUDP5lZeojtNVp96InWyIC5sm/hTIRCAvxiG.K2', 'Adiarja', '085743411430', 'Ds. K.H. Maskur No. 183', '008', '9113109304', 'siswa', NULL, 'aktif'),
(18, 'cahya18@gmail.com', '7018', '$2y$10$hSrhjLShNWjSDALCnq3OgeB3s2lRbJ8voq0lGL9GyOt/fZgGYt0Oi', 'Cahya', '080743431739', 'Psr. Cikapayang No. 773', '008', '3569511434', 'siswa', NULL, 'aktif'),
(19, 'raden19@gmail.com', '7019', '$2y$10$cMz7jOZcYfHZg9/uDDsD1eYXjEba2MCW3Il6OxcmEZrRjx/DaTLaa', 'Raden', '082763487137', 'Gg. Setiabudhi No. 974', '014', '7948340737', 'siswa', NULL, 'aktif'),
(21, 'jumari1@gmail.com', '3137023814040003', '$2y$10$MIt/xj00EXzODSFmxkQ68O338r7aVkab9yTRBqn1Fuws.saH1sAGy', 'Jumari', '087733440131', 'Gg. Banal No. 270', '014', '6352627671', 'orang_tua', NULL, 'aktif'),
(22, 'darmaji2@gmail.com', '3166015916020002', '$2y$10$J6X6NND6C.b4qK6UOJ4EQu3c7t5BZRGfZ.UNnZeoncfsx4z3N1zYa', 'Darmaji', '084743443131', 'Dk. Bayan No. 130', '002', '1796020043', 'orang_tua', NULL, 'aktif'),
(23, 'vinsen3@gmail.com', '3111753319050002', '$2y$10$vdnoc7faB9VPGfFYjljhE.vSckv1P5T/kJqxjzToeyYXtnnMZyCGW', 'Vinsen', '084733483139', 'Jr. Bak Mandi No. 734', '022', '7897642858', 'orang_tua', NULL, 'aktif'),
(24, 'ikin4@gmail.com', '3187356715090003', '$2y$10$So4Ns.XwNKnQhQrTyc0yO.PlCsvCBoh5oizLySG.uHMsklWozI1o.', 'Ikin', '089763409433', 'Gg. Adisumarmo No. 460', '022', '0828538900', 'orang_tua', NULL, 'aktif'),
(25, 'lanjar5@gmail.com', '3199726415070001', '$2y$10$RiluuS6jveb/konwqF349eJp9ds.pyEwwIfSqwN3Hu8T2ze3GoP7C', 'Lanjar', '081763425234', 'Gg. Wahidin No. 75', '002', '9701256881', 'orang_tua', NULL, 'aktif'),
(26, 'rahmi6@gmail.com', '3149104912010005', '$2y$10$CogPJ0H6yqegVWu15UL7iOnFDufl8h/V.PM31dkIRBL.Pa90wPrwi', 'Rahmi', '080753400733', 'Jr. Gedebage Selatan No. 144', '008', '7559035483', 'orang_tua', NULL, 'aktif'),
(27, 'novi7@gmail.com', '3101100214020007', '$2y$10$C6UwvkoKhR2psAHXS1pfauGZpUUcDdIK3RIqYXlA0fXwEg8ZRkJFW', 'Novi', '084793469132', 'Ki. Halim No. 511', '008', '6619980887', 'orang_tua', NULL, 'aktif'),
(28, 'maya8@gmail.com', '3176363913020007', '$2y$10$ApY8JjYK0LvRp2nJFW/YX.PAvcqFG51TmHyCsr7OzLtCBaUljgDMy', 'Maya', '081763451838', 'Jr. Sampangan No. 701', '002', '3969225815', 'orang_tua', NULL, 'aktif'),
(29, 'prabu9@gmail.com', '3139905316070008', '$2y$10$z3rBLj9gNjUwfbNMyGt4CeaQ9YkPGWkjtQ2fqGstRF7F9mx8ERKFy', 'Prabu', '089783408933', 'Jln. Flora No. 646', '014', '0278628382', 'orang_tua', NULL, 'aktif'),
(30, 'gadang10@gmail.com', '3133654614010004', '$2y$10$T2LQ4ECQXHVSf3aT3Zoo9uWYXJnWgLAKqZEO6ReJFnCJ0HW4545Km', 'Gadang', '081793496833', 'Kpg. Krakatau No. 258', '008', '6593079613', 'orang_tua', NULL, 'aktif'),
(31, 'dalimin11@gmail.com', '3116556519040004', '$2y$10$o.XSUejkzpLNad1GRV1spOhvMmst4Dueu8NaEbQoNgRTHlOp3wjym', 'Dalimin', '087703438638', 'Jln. Bayam No. 575', '008', '4567023484', 'orang_tua', NULL, 'aktif'),
(32, 'rachel12@gmail.com', '3108759311060001', '$2y$10$kSXi2DKUCj61Gv8ggo2vtOc36yUDj7QZZ3XMGJg6enQTVFCrvvpmK', 'Rachel', '083743453330', 'Ki. Bakti No. 344', '022', '3181184993', 'orang_tua', NULL, 'aktif'),
(33, 'liman13@gmail.com', '3171030510080001', '$2y$10$N5DLc5SjTc3oPpNQakX92eg12GqanVKVXrY3gkHdkZek.kqJw5V4G', 'Liman', '080723426237', 'Ki. Barasak No. 382', '009', '5199133058', 'orang_tua', NULL, 'aktif'),
(34, 'cinthia14@gmail.com', '3183046214080003', '$2y$10$z9mBJ/PqDMsbgrbLKoe3He9DQD7PN8EnKPMqgoTVov261NPiOR25W', 'Cinthia', '087743407634', 'Ki. Supomo No. 106', '008', '8154381381', 'orang_tua', NULL, 'aktif'),
(35, 'bahuwarna15@gmail.com', '3118768113030006', '$2y$10$b7kBXyUvgj94XFWnWDNE0eCzpn/YTpjFAe46MLYh3GDDzTX1v24KW', 'Bahuwarna', '086723431534', 'Ki. Bakhita No. 206', '014', '7558708603', 'orang_tua', NULL, 'aktif'),
(36, 'virman16@gmail.com', '3151104217060009', '$2y$10$OTF0j9Tb2Y7hFCOe/Rw7SeJ3gvFvwPF.8tNwr5esGmrU4edxwPUFW', 'Virman', '085783435836', 'Ds. Abdul. Muis No. 522', '022', '7165419096', 'orang_tua', NULL, 'aktif'),
(37, 'yoga17@gmail.com', '3178449410040001', '$2y$10$t4qTtaTU1M9YWS1FhGmI..NqM/El0vxZ8fWGyOZ5qVveUTK0ZeiqK', 'Yoga', '088733453338', 'Kpg. Samanhudi No. 24', '008', '7703960101', 'orang_tua', NULL, 'aktif'),
(38, 'balapati18@gmail.com', '3137780013050008', '$2y$10$pfsHSF8b.7OzoZQhWJHRYOS3zNxDgr24dhc2liwO8dvpXn7qbIuNq', 'Balapati', '086783482539', 'Psr. Acordion No. 138', '022', '7632572266', 'orang_tua', NULL, 'aktif'),
(39, 'nova19@gmail.com', '3183604914020001', '$2y$10$M8mHI.7/mL7QLJlWf1RrDu0LrBbqSEU7LYN4DLz1lP5ApkRZkPXRi', 'Nova', '082753499039', 'Jln. Tubagus Ismail No. 492', '002', '7394081801', 'orang_tua', NULL, 'aktif'),
(41, 'admin@ulah.id', 'admin', '$2y$10$AaUThhozGcFsJ1MwHtqT2.mCRfZhC8JM0dpMVz.hdfqbo.f0KDoHG', 'Admin Sekolah', '085247313217', '', '', '', 'admin', NULL, 'aktif');

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
  MODIFY `idusers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
