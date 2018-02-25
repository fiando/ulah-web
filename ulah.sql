-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2018 at 12:59 PM
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
-- Table structure for table `bcm_histori_pesan`
--

CREATE TABLE `bcm_histori_pesan` (
  `idhistori_pesan` int(11) NOT NULL,
  `pesan` varchar(45) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idunik` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bcm_histori_pesan`
--

INSERT INTO `bcm_histori_pesan` (`idhistori_pesan`, `pesan`, `idkategori`, `idunik`, `tanggal`) VALUES
(1, 'Pesan Broadcast keluarga 1', 1, 1, '2018-02-24 07:35:30'),
(2, 'Pesan Broadcast keluarga 1', 1, 1, '2018-02-24 07:35:30'),
(3, 'Pesan Broadcast keluarga 1', 1, 1, '2018-02-24 07:35:30'),
(4, 'Pesan Broadcast teman 2', 2, 1, '2018-02-24 07:35:30'),
(5, 'Pesan Broadcast teman 2', 2, 1, '2018-02-24 07:35:30'),
(6, 'Pesan Broadcast teman 2', 2, 1, '2018-02-24 07:35:30'),
(7, 'Pesan Broadcast relasi 3', 3, 1, '2018-02-24 07:35:31'),
(8, 'Pesan Broadcast relasi 3', 3, 1, '2018-02-24 07:35:31'),
(9, 'Pesan Broadcast relasi 3', 3, 1, '2018-02-24 07:35:31'),
(10, 'Pesan Broadcast customer 4', 4, 1, '2018-02-24 07:35:31'),
(11, 'Pesan Broadcast customer 4', 4, 1, '2018-02-24 07:35:31'),
(12, 'Pesan Broadcast customer 4', 4, 1, '2018-02-24 07:35:31'),
(13, 'Pesan Broadcast organisasi 5', 5, 1, '2018-02-24 07:35:32'),
(14, 'Pesan Broadcast organisasi 5', 5, 1, '2018-02-24 07:35:32'),
(15, 'Pesan Broadcast organisasi 5', 5, 1, '2018-02-24 07:35:32'),
(16, 'Pesan Broadcast tim 6', 6, 1, '2018-02-24 07:35:32'),
(17, 'Pesan Broadcast tim 6', 6, 1, '2018-02-24 07:35:32'),
(18, 'Pesan Broadcast tim 6', 6, 1, '2018-02-24 07:35:32'),
(19, 'Pesan Broadcast keluarga 1', 1, 2, '2018-02-24 07:35:33'),
(20, 'Pesan Broadcast keluarga 1', 1, 2, '2018-02-24 07:35:33'),
(21, 'Pesan Broadcast keluarga 1', 1, 2, '2018-02-24 07:35:33'),
(22, 'Pesan Broadcast teman 2', 2, 2, '2018-02-24 07:35:33'),
(23, 'Pesan Broadcast teman 2', 2, 2, '2018-02-24 07:35:33'),
(24, 'Pesan Broadcast teman 2', 2, 2, '2018-02-24 07:35:33'),
(25, 'Pesan Broadcast relasi 3', 3, 2, '2018-02-24 07:35:34'),
(26, 'Pesan Broadcast relasi 3', 3, 2, '2018-02-24 07:35:34'),
(27, 'Pesan Broadcast relasi 3', 3, 2, '2018-02-24 07:35:34'),
(28, 'Pesan Broadcast customer 4', 4, 2, '2018-02-24 07:35:34'),
(29, 'Pesan Broadcast customer 4', 4, 2, '2018-02-24 07:35:34'),
(30, 'Pesan Broadcast customer 4', 4, 2, '2018-02-24 07:35:34'),
(31, 'Pesan Broadcast organisasi 5', 5, 2, '2018-02-24 07:35:35'),
(32, 'Pesan Broadcast organisasi 5', 5, 2, '2018-02-24 07:35:35'),
(33, 'Pesan Broadcast organisasi 5', 5, 2, '2018-02-24 07:35:35'),
(34, 'Pesan Broadcast tim 6', 6, 2, '2018-02-24 07:35:35'),
(35, 'Pesan Broadcast tim 6', 6, 2, '2018-02-24 07:35:35'),
(36, 'Pesan Broadcast tim 6', 6, 2, '2018-02-24 07:35:35'),
(37, 'Pesan Broadcast keluarga 1', 1, 3, '2018-02-24 07:35:36'),
(38, 'Pesan Broadcast keluarga 1', 1, 3, '2018-02-24 07:35:36'),
(39, 'Pesan Broadcast keluarga 1', 1, 3, '2018-02-24 07:35:36'),
(40, 'Pesan Broadcast teman 2', 2, 3, '2018-02-24 07:35:37'),
(41, 'Pesan Broadcast teman 2', 2, 3, '2018-02-24 07:35:37'),
(42, 'Pesan Broadcast teman 2', 2, 3, '2018-02-24 07:35:37'),
(43, 'Pesan Broadcast relasi 3', 3, 3, '2018-02-24 07:35:37'),
(44, 'Pesan Broadcast relasi 3', 3, 3, '2018-02-24 07:35:37'),
(45, 'Pesan Broadcast relasi 3', 3, 3, '2018-02-24 07:35:38'),
(46, 'Pesan Broadcast customer 4', 4, 3, '2018-02-24 07:35:38'),
(47, 'Pesan Broadcast customer 4', 4, 3, '2018-02-24 07:35:38'),
(48, 'Pesan Broadcast customer 4', 4, 3, '2018-02-24 07:35:38'),
(49, 'Pesan Broadcast organisasi 5', 5, 3, '2018-02-24 07:35:38'),
(50, 'Pesan Broadcast organisasi 5', 5, 3, '2018-02-24 07:35:38'),
(51, 'Pesan Broadcast organisasi 5', 5, 3, '2018-02-24 07:35:38'),
(52, 'Pesan Broadcast tim 6', 6, 3, '2018-02-24 07:35:39'),
(53, 'Pesan Broadcast tim 6', 6, 3, '2018-02-24 07:35:39'),
(54, 'Pesan Broadcast tim 6', 6, 3, '2018-02-24 07:35:39'),
(55, 'Pesan Broadcast keluarga 1', 1, 4, '2018-02-24 07:35:40'),
(56, 'Pesan Broadcast keluarga 1', 1, 4, '2018-02-24 07:35:40'),
(57, 'Pesan Broadcast keluarga 1', 1, 4, '2018-02-24 07:35:40'),
(58, 'Pesan Broadcast teman 2', 2, 4, '2018-02-24 07:35:40'),
(59, 'Pesan Broadcast teman 2', 2, 4, '2018-02-24 07:35:40'),
(60, 'Pesan Broadcast teman 2', 2, 4, '2018-02-24 07:35:40'),
(61, 'Pesan Broadcast relasi 3', 3, 4, '2018-02-24 07:35:41'),
(62, 'Pesan Broadcast relasi 3', 3, 4, '2018-02-24 07:35:41'),
(63, 'Pesan Broadcast relasi 3', 3, 4, '2018-02-24 07:35:41'),
(64, 'Pesan Broadcast customer 4', 4, 4, '2018-02-24 07:35:41'),
(65, 'Pesan Broadcast customer 4', 4, 4, '2018-02-24 07:35:41'),
(66, 'Pesan Broadcast customer 4', 4, 4, '2018-02-24 07:35:41'),
(67, 'Pesan Broadcast organisasi 5', 5, 4, '2018-02-24 07:35:42'),
(68, 'Pesan Broadcast organisasi 5', 5, 4, '2018-02-24 07:35:42'),
(69, 'Pesan Broadcast organisasi 5', 5, 4, '2018-02-24 07:35:42'),
(70, 'Pesan Broadcast tim 6', 6, 4, '2018-02-24 07:35:42'),
(71, 'Pesan Broadcast tim 6', 6, 4, '2018-02-24 07:35:42'),
(72, 'Pesan Broadcast tim 6', 6, 4, '2018-02-24 07:35:42'),
(73, 'Pesan Broadcast keluarga 1', 1, 5, '2018-02-24 07:35:43'),
(74, 'Pesan Broadcast keluarga 1', 1, 5, '2018-02-24 07:35:43'),
(75, 'Pesan Broadcast keluarga 1', 1, 5, '2018-02-24 07:35:43'),
(76, 'Pesan Broadcast teman 2', 2, 5, '2018-02-24 07:35:44'),
(77, 'Pesan Broadcast teman 2', 2, 5, '2018-02-24 07:35:44'),
(78, 'Pesan Broadcast teman 2', 2, 5, '2018-02-24 07:35:44'),
(79, 'Pesan Broadcast relasi 3', 3, 5, '2018-02-24 07:35:44'),
(80, 'Pesan Broadcast relasi 3', 3, 5, '2018-02-24 07:35:44'),
(81, 'Pesan Broadcast relasi 3', 3, 5, '2018-02-24 07:35:44'),
(82, 'Pesan Broadcast customer 4', 4, 5, '2018-02-24 07:35:44'),
(83, 'Pesan Broadcast customer 4', 4, 5, '2018-02-24 07:35:45'),
(84, 'Pesan Broadcast customer 4', 4, 5, '2018-02-24 07:35:45'),
(85, 'Pesan Broadcast organisasi 5', 5, 5, '2018-02-24 07:35:45'),
(86, 'Pesan Broadcast organisasi 5', 5, 5, '2018-02-24 07:35:45'),
(87, 'Pesan Broadcast organisasi 5', 5, 5, '2018-02-24 07:35:45'),
(88, 'Pesan Broadcast tim 6', 6, 5, '2018-02-24 07:35:46'),
(89, 'Pesan Broadcast tim 6', 6, 5, '2018-02-24 07:35:46'),
(90, 'Pesan Broadcast tim 6', 6, 5, '2018-02-24 07:35:47'),
(91, 'Pesan Broadcast keluarga 1', 1, 6, '2018-02-24 07:35:47'),
(92, 'Pesan Broadcast keluarga 1', 1, 6, '2018-02-24 07:35:47'),
(93, 'Pesan Broadcast keluarga 1', 1, 6, '2018-02-24 07:35:47'),
(94, 'Pesan Broadcast teman 2', 2, 6, '2018-02-24 07:35:48'),
(95, 'Pesan Broadcast teman 2', 2, 6, '2018-02-24 07:35:48'),
(96, 'Pesan Broadcast teman 2', 2, 6, '2018-02-24 07:35:48'),
(97, 'Pesan Broadcast relasi 3', 3, 6, '2018-02-24 07:35:48'),
(98, 'Pesan Broadcast relasi 3', 3, 6, '2018-02-24 07:35:48'),
(99, 'Pesan Broadcast relasi 3', 3, 6, '2018-02-24 07:35:48'),
(100, 'Pesan Broadcast customer 4', 4, 6, '2018-02-24 07:35:49'),
(101, 'Pesan Broadcast customer 4', 4, 6, '2018-02-24 07:35:49'),
(102, 'Pesan Broadcast customer 4', 4, 6, '2018-02-24 07:35:49'),
(103, 'Pesan Broadcast organisasi 5', 5, 6, '2018-02-24 07:35:49'),
(104, 'Pesan Broadcast organisasi 5', 5, 6, '2018-02-24 07:35:49'),
(105, 'Pesan Broadcast organisasi 5', 5, 6, '2018-02-24 07:35:49'),
(106, 'Pesan Broadcast tim 6', 6, 6, '2018-02-24 07:35:50'),
(107, 'Pesan Broadcast tim 6', 6, 6, '2018-02-24 07:35:50'),
(108, 'Pesan Broadcast tim 6', 6, 6, '2018-02-24 07:35:50'),
(109, 'Pesan Broadcast keluarga 1', 1, 7, '2018-02-24 07:35:50'),
(110, 'Pesan Broadcast keluarga 1', 1, 7, '2018-02-24 07:35:50'),
(111, 'Pesan Broadcast keluarga 1', 1, 7, '2018-02-24 07:35:50'),
(112, 'Pesan Broadcast teman 2', 2, 7, '2018-02-24 07:35:51'),
(113, 'Pesan Broadcast teman 2', 2, 7, '2018-02-24 07:35:51'),
(114, 'Pesan Broadcast teman 2', 2, 7, '2018-02-24 07:35:51'),
(115, 'Pesan Broadcast relasi 3', 3, 7, '2018-02-24 07:35:51'),
(116, 'Pesan Broadcast relasi 3', 3, 7, '2018-02-24 07:35:51'),
(117, 'Pesan Broadcast relasi 3', 3, 7, '2018-02-24 07:35:51'),
(118, 'Pesan Broadcast customer 4', 4, 7, '2018-02-24 07:35:51'),
(119, 'Pesan Broadcast customer 4', 4, 7, '2018-02-24 07:35:51'),
(120, 'Pesan Broadcast customer 4', 4, 7, '2018-02-24 07:35:52'),
(121, 'Pesan Broadcast organisasi 5', 5, 7, '2018-02-24 07:35:52'),
(122, 'Pesan Broadcast organisasi 5', 5, 7, '2018-02-24 07:35:52'),
(123, 'Pesan Broadcast organisasi 5', 5, 7, '2018-02-24 07:35:52'),
(124, 'Pesan Broadcast tim 6', 6, 7, '2018-02-24 07:35:52'),
(125, 'Pesan Broadcast tim 6', 6, 7, '2018-02-24 07:35:53'),
(126, 'Pesan Broadcast tim 6', 6, 7, '2018-02-24 07:35:53'),
(127, 'Pesan Broadcast keluarga 1', 1, 8, '2018-02-24 07:35:53'),
(128, 'Pesan Broadcast keluarga 1', 1, 8, '2018-02-24 07:35:53'),
(129, 'Pesan Broadcast keluarga 1', 1, 8, '2018-02-24 07:35:53'),
(130, 'Pesan Broadcast teman 2', 2, 8, '2018-02-24 07:35:54'),
(131, 'Pesan Broadcast teman 2', 2, 8, '2018-02-24 07:35:54'),
(132, 'Pesan Broadcast teman 2', 2, 8, '2018-02-24 07:35:54'),
(133, 'Pesan Broadcast relasi 3', 3, 8, '2018-02-24 07:35:54'),
(134, 'Pesan Broadcast relasi 3', 3, 8, '2018-02-24 07:35:54'),
(135, 'Pesan Broadcast relasi 3', 3, 8, '2018-02-24 07:35:54'),
(136, 'Pesan Broadcast customer 4', 4, 8, '2018-02-24 07:35:55'),
(137, 'Pesan Broadcast customer 4', 4, 8, '2018-02-24 07:35:55'),
(138, 'Pesan Broadcast customer 4', 4, 8, '2018-02-24 07:35:55'),
(139, 'Pesan Broadcast organisasi 5', 5, 8, '2018-02-24 07:35:55'),
(140, 'Pesan Broadcast organisasi 5', 5, 8, '2018-02-24 07:35:55'),
(141, 'Pesan Broadcast organisasi 5', 5, 8, '2018-02-24 07:35:55'),
(142, 'Pesan Broadcast tim 6', 6, 8, '2018-02-24 07:35:56'),
(143, 'Pesan Broadcast tim 6', 6, 8, '2018-02-24 07:35:56'),
(144, 'Pesan Broadcast tim 6', 6, 8, '2018-02-24 07:35:56'),
(145, 'Pesan Broadcast keluarga 1', 1, 9, '2018-02-24 07:35:56'),
(146, 'Pesan Broadcast keluarga 1', 1, 9, '2018-02-24 07:35:56'),
(147, 'Pesan Broadcast keluarga 1', 1, 9, '2018-02-24 07:35:57'),
(148, 'Pesan Broadcast teman 2', 2, 9, '2018-02-24 07:35:57'),
(149, 'Pesan Broadcast teman 2', 2, 9, '2018-02-24 07:35:58'),
(150, 'Pesan Broadcast teman 2', 2, 9, '2018-02-24 07:35:58'),
(151, 'Pesan Broadcast relasi 3', 3, 9, '2018-02-24 07:35:58'),
(152, 'Pesan Broadcast relasi 3', 3, 9, '2018-02-24 07:35:58'),
(153, 'Pesan Broadcast relasi 3', 3, 9, '2018-02-24 07:35:58'),
(154, 'Pesan Broadcast customer 4', 4, 9, '2018-02-24 07:35:58'),
(155, 'Pesan Broadcast customer 4', 4, 9, '2018-02-24 07:35:58'),
(156, 'Pesan Broadcast customer 4', 4, 9, '2018-02-24 07:35:59'),
(157, 'Pesan Broadcast organisasi 5', 5, 9, '2018-02-24 07:35:59'),
(158, 'Pesan Broadcast organisasi 5', 5, 9, '2018-02-24 07:35:59'),
(159, 'Pesan Broadcast organisasi 5', 5, 9, '2018-02-24 07:35:59'),
(160, 'Pesan Broadcast tim 6', 6, 9, '2018-02-24 07:35:59'),
(161, 'Pesan Broadcast tim 6', 6, 9, '2018-02-24 07:35:59'),
(162, 'Pesan Broadcast tim 6', 6, 9, '2018-02-24 07:35:59'),
(163, 'Pesan Broadcast keluarga 1', 1, 10, '2018-02-24 07:36:00'),
(164, 'Pesan Broadcast keluarga 1', 1, 10, '2018-02-24 07:36:00'),
(165, 'Pesan Broadcast keluarga 1', 1, 10, '2018-02-24 07:36:00'),
(166, 'Pesan Broadcast teman 2', 2, 10, '2018-02-24 07:36:00'),
(167, 'Pesan Broadcast teman 2', 2, 10, '2018-02-24 07:36:00'),
(168, 'Pesan Broadcast teman 2', 2, 10, '2018-02-24 07:36:00'),
(169, 'Pesan Broadcast relasi 3', 3, 10, '2018-02-24 07:36:01'),
(170, 'Pesan Broadcast relasi 3', 3, 10, '2018-02-24 07:36:01'),
(171, 'Pesan Broadcast relasi 3', 3, 10, '2018-02-24 07:36:01'),
(172, 'Pesan Broadcast customer 4', 4, 10, '2018-02-24 07:36:02'),
(173, 'Pesan Broadcast customer 4', 4, 10, '2018-02-24 07:36:02'),
(174, 'Pesan Broadcast customer 4', 4, 10, '2018-02-24 07:36:02'),
(175, 'Pesan Broadcast organisasi 5', 5, 10, '2018-02-24 07:36:02'),
(176, 'Pesan Broadcast organisasi 5', 5, 10, '2018-02-24 07:36:02'),
(177, 'Pesan Broadcast organisasi 5', 5, 10, '2018-02-24 07:36:02'),
(178, 'Pesan Broadcast tim 6', 6, 10, '2018-02-24 07:36:03'),
(179, 'Pesan Broadcast tim 6', 6, 10, '2018-02-24 07:36:03'),
(180, 'Pesan Broadcast tim 6', 6, 10, '2018-02-24 07:36:03'),
(181, 'Pesan Broadcast', 1, 1, '2018-02-24 10:58:26'),
(182, 'Pesan Broadcast', 1, 1, '2018-02-24 10:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `bcm_kategori`
--

CREATE TABLE `bcm_kategori` (
  `idkategori` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `idunik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bcm_kategori`
--

INSERT INTO `bcm_kategori` (`idkategori`, `nama`, `idunik`) VALUES
(1, 'keluarga', 1),
(2, 'tes', 1),
(3, 'teman', 1),
(4, 'relasi', 1),
(5, 'customer', 1),
(6, 'organisasi', 1),
(7, 'tim', 1),
(9, 'teman', 2),
(10, 'relasi', 2),
(11, 'customer', 2),
(12, 'organisasi', 2),
(13, 'tim', 2),
(14, 'keluarga', 3),
(15, 'teman', 3),
(16, 'relasi', 3),
(17, 'customer', 3),
(18, 'organisasi', 3),
(19, 'tim', 3),
(20, 'keluarga', 4),
(21, 'teman', 4),
(22, 'relasi', 4),
(23, 'customer', 4),
(24, 'organisasi', 4),
(25, 'tim', 4),
(26, 'keluarga', 5),
(27, 'teman', 5),
(28, 'relasi', 5),
(29, 'customer', 5),
(30, 'organisasi', 5),
(31, 'tim', 5),
(32, 'keluarga', 6),
(33, 'teman', 6),
(34, 'relasi', 6),
(35, 'customer', 6),
(36, 'organisasi', 6),
(37, 'tim', 6),
(38, 'keluarga', 7),
(39, 'teman', 7),
(40, 'relasi', 7),
(41, 'customer', 7),
(42, 'organisasi', 7),
(43, 'tim', 7),
(44, 'keluarga', 8),
(45, 'teman', 8),
(46, 'relasi', 8),
(47, 'customer', 8),
(48, 'organisasi', 8),
(49, 'tim', 8),
(50, 'keluarga', 9),
(51, 'teman', 9),
(52, 'relasi', 9),
(53, 'customer', 9),
(54, 'organisasi', 9),
(55, 'tim', 9),
(56, 'keluarga', 10),
(57, 'teman', 10),
(58, 'relasi', 10),
(59, 'customer', 10),
(60, 'organisasi', 10),
(61, 'tim', 10),
(62, 'tes', 2);

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

--
-- Dumping data for table `bcm_nomor`
--

INSERT INTO `bcm_nomor` (`idnomor`, `nomor`, `idkategori`, `idunik`) VALUES
(1, '085743411430', 1, 1),
(2, '085743411430', 1, 1),
(3, '085743411430', 1, 1),
(4, '085743411430', 1, 1),
(5, '085743411430', 1, 1),
(6, '085743411430', 1, 1),
(7, '085743411430', 1, 1),
(8, '085743411430', 1, 1),
(9, '085743411430', 1, 1),
(10, '085743411430', 1, 1),
(11, '085743411430', 1, 1),
(12, '085743411430', 1, 1),
(13, '081733476032', 2, 1),
(14, '081723439138', 2, 1),
(15, '089703497539', 2, 1),
(16, '089723402336', 2, 1),
(17, '088713474132', 2, 1),
(18, '088763412830', 2, 1),
(19, '089753472131', 3, 1),
(20, '086703480633', 3, 1),
(21, '084773413236', 3, 1),
(22, '083743436938', 3, 1),
(23, '086723459939', 3, 1),
(24, '085733435738', 3, 1),
(25, '083783430635', 4, 1),
(26, '081713404838', 4, 1),
(27, '080753487430', 4, 1),
(28, '086733455833', 4, 1),
(29, '084763402530', 4, 1),
(30, '084793410930', 4, 1),
(31, '084783460735', 5, 1),
(32, '084753472537', 5, 1),
(33, '089733483831', 5, 1),
(34, '089733401034', 5, 1),
(35, '087763452032', 5, 1),
(36, '083783404436', 5, 1),
(37, '082713437334', 6, 1),
(38, '089763455036', 6, 1),
(39, '083713418539', 6, 1),
(40, '083773414633', 6, 1),
(41, '087743486137', 6, 1),
(42, '088703480333', 6, 1),
(43, '085743411430', 1, 2),
(44, '085743411430', 1, 2),
(45, '085743411430', 1, 2),
(46, '085743411430', 1, 2),
(47, '085743411430', 1, 2),
(48, '085743411430', 1, 2),
(49, '087743458930', 2, 2),
(50, '086743474330', 2, 2),
(51, '085743471136', 2, 2),
(52, '083723471436', 2, 2),
(53, '081783415232', 2, 2),
(54, '084703401830', 2, 2),
(55, '087743487837', 3, 2),
(56, '084783467739', 3, 2),
(57, '084773434437', 3, 2),
(58, '084783488631', 3, 2),
(59, '088763480034', 3, 2),
(60, '080703448532', 3, 2),
(61, '085773400634', 4, 2),
(62, '089793451838', 4, 2),
(63, '081743422430', 4, 2),
(64, '082703439733', 4, 2),
(65, '087773444531', 4, 2),
(66, '082763458636', 4, 2),
(67, '082753430436', 5, 2),
(68, '083713428739', 5, 2),
(69, '083723406731', 5, 2),
(70, '089733431833', 5, 2),
(71, '085713429331', 5, 2),
(72, '087703469935', 5, 2),
(73, '083723439131', 6, 2),
(74, '089733488037', 6, 2),
(75, '086763470937', 6, 2),
(76, '082753453239', 6, 2),
(77, '086793455535', 6, 2),
(78, '081783466734', 6, 2),
(79, '085743411430', 1, 3),
(80, '085743411430', 1, 3),
(81, '085743411430', 1, 3),
(82, '085743411430', 1, 3),
(83, '085743411430', 1, 3),
(84, '085743411430', 1, 3),
(85, '084753462331', 2, 3),
(86, '080793443639', 2, 3),
(87, '087763424535', 2, 3),
(88, '080773489934', 2, 3),
(89, '085743462433', 2, 3),
(90, '089743410732', 2, 3),
(91, '086713473034', 3, 3),
(92, '081733461932', 3, 3),
(93, '084743429835', 3, 3),
(94, '087703438930', 3, 3),
(95, '083723485135', 3, 3),
(96, '085723426834', 3, 3),
(97, '080753451234', 4, 3),
(98, '089793403039', 4, 3),
(99, '089763488034', 4, 3),
(100, '082753493737', 4, 3),
(101, '089783454934', 4, 3),
(102, '086723448233', 4, 3),
(103, '082793462938', 5, 3),
(104, '083773403532', 5, 3),
(105, '088713454232', 5, 3),
(106, '085763474034', 5, 3),
(107, '088783469531', 5, 3),
(108, '089783471938', 5, 3),
(109, '083783498231', 6, 3),
(110, '082713412232', 6, 3),
(111, '081703466033', 6, 3),
(112, '082733414432', 6, 3),
(113, '086703408331', 6, 3),
(114, '086703458638', 6, 3),
(115, '085743411430', 1, 4),
(116, '085743411430', 1, 4),
(117, '085743411430', 1, 4),
(118, '085743411430', 1, 4),
(119, '085743411430', 1, 4),
(120, '085743411430', 1, 4),
(121, '080733438531', 2, 4),
(122, '082783454037', 2, 4),
(123, '086703475835', 2, 4),
(124, '081783467838', 2, 4),
(125, '084733479639', 2, 4),
(126, '081763498530', 2, 4),
(127, '084763464732', 3, 4),
(128, '085703433033', 3, 4),
(129, '086763449034', 3, 4),
(130, '085703439131', 3, 4),
(131, '089733474736', 3, 4),
(132, '080753407432', 3, 4),
(133, '087713425637', 4, 4),
(134, '080723405930', 4, 4),
(135, '088743494638', 4, 4),
(136, '082773434935', 4, 4),
(137, '089763412336', 4, 4),
(138, '080723416739', 4, 4),
(139, '082763487237', 5, 4),
(140, '083793445836', 5, 4),
(141, '081773428235', 5, 4),
(142, '080703488937', 5, 4),
(143, '084703494839', 5, 4),
(144, '085723400733', 5, 4),
(145, '081743478338', 6, 4),
(146, '083763482332', 6, 4),
(147, '082773473133', 6, 4),
(148, '089733454131', 6, 4),
(149, '081773453638', 6, 4),
(150, '087773486739', 6, 4),
(151, '085743411430', 1, 5),
(152, '085743411430', 1, 5),
(153, '085743411430', 1, 5),
(154, '085743411430', 1, 5),
(155, '085743411430', 1, 5),
(156, '085743411430', 1, 5),
(157, '088733444235', 2, 5),
(158, '086713497330', 2, 5),
(159, '087773418930', 2, 5),
(160, '081783448530', 2, 5),
(161, '089723451432', 2, 5),
(162, '084733428030', 2, 5),
(163, '086763487330', 3, 5),
(164, '084743400030', 3, 5),
(165, '080703411237', 3, 5),
(166, '088703475738', 3, 5),
(167, '083773415333', 3, 5),
(168, '080793400635', 3, 5),
(169, '084733460036', 4, 5),
(170, '088773407139', 4, 5),
(171, '087703481834', 4, 5),
(172, '081723414534', 4, 5),
(173, '086733477136', 4, 5),
(174, '084743497430', 4, 5),
(175, '080783489838', 5, 5),
(176, '084773438633', 5, 5),
(177, '081743481239', 5, 5),
(178, '088763463934', 5, 5),
(179, '082783450933', 5, 5),
(180, '089743475336', 5, 5),
(181, '084733478039', 6, 5),
(182, '088773439830', 6, 5),
(183, '082713458330', 6, 5),
(184, '088773429532', 6, 5),
(185, '086793404638', 6, 5),
(186, '080773446031', 6, 5),
(187, '085743411430', 1, 6),
(188, '085743411430', 1, 6),
(189, '085743411430', 1, 6),
(190, '085743411430', 1, 6),
(191, '085743411430', 1, 6),
(192, '085743411430', 1, 6),
(193, '080703495432', 2, 6),
(194, '088793407736', 2, 6),
(195, '081723443731', 2, 6),
(196, '080783426737', 2, 6),
(197, '089733469038', 2, 6),
(198, '080793456137', 2, 6),
(199, '088743435530', 3, 6),
(200, '081733464238', 3, 6),
(201, '089733459533', 3, 6),
(202, '082703409739', 3, 6),
(203, '083703496135', 3, 6),
(204, '084763465430', 3, 6),
(205, '086733498137', 4, 6),
(206, '083703407836', 4, 6),
(207, '084793413732', 4, 6),
(208, '085753450832', 4, 6),
(209, '081753440439', 4, 6),
(210, '083723443436', 4, 6),
(211, '083783422336', 5, 6),
(212, '085773419531', 5, 6),
(213, '082703453831', 5, 6),
(214, '088753463933', 5, 6),
(215, '083743408332', 5, 6),
(216, '082773471530', 5, 6),
(217, '084793461933', 6, 6),
(218, '082713479132', 6, 6),
(219, '080793420632', 6, 6),
(220, '088743403233', 6, 6),
(221, '086723465239', 6, 6),
(222, '080733459834', 6, 6),
(223, '085743411430', 1, 7),
(224, '085743411430', 1, 7),
(225, '085743411430', 1, 7),
(226, '085743411430', 1, 7),
(227, '085743411430', 1, 7),
(228, '085743411430', 1, 7),
(229, '083723426436', 2, 7),
(230, '084743432036', 2, 7),
(231, '080723471137', 2, 7),
(232, '082773440831', 2, 7),
(233, '087773456238', 2, 7),
(234, '086763477930', 2, 7),
(235, '084793480437', 3, 7),
(236, '087783423237', 3, 7),
(237, '080713487935', 3, 7),
(238, '085703490136', 3, 7),
(239, '085793485035', 3, 7),
(240, '082753456132', 3, 7),
(241, '086793482637', 4, 7),
(242, '085743456433', 4, 7),
(243, '088723494336', 4, 7),
(244, '083723449932', 4, 7),
(245, '084783449037', 4, 7),
(246, '082733423034', 4, 7),
(247, '087713418137', 5, 7),
(248, '084743489435', 5, 7),
(249, '086713436832', 5, 7),
(250, '083743421933', 5, 7),
(251, '089703481534', 5, 7),
(252, '089743437539', 5, 7),
(253, '080733401732', 6, 7),
(254, '082723455530', 6, 7),
(255, '085763462234', 6, 7),
(256, '089733487930', 6, 7),
(257, '082793454739', 6, 7),
(258, '081723477135', 6, 7),
(259, '085743411430', 1, 8),
(260, '085743411430', 1, 8),
(261, '085743411430', 1, 8),
(262, '085743411430', 1, 8),
(263, '085743411430', 1, 8),
(264, '085743411430', 1, 8),
(265, '088703412538', 2, 8),
(266, '084713494934', 2, 8),
(267, '084783421036', 2, 8),
(268, '081793411938', 2, 8),
(269, '089793437138', 2, 8),
(270, '085723463534', 2, 8),
(271, '081743416438', 3, 8),
(272, '081763477334', 3, 8),
(273, '081753493632', 3, 8),
(274, '080793420833', 3, 8),
(275, '085773497035', 3, 8),
(276, '089763484934', 3, 8),
(277, '081743491936', 4, 8),
(278, '088783440236', 4, 8),
(279, '088723433835', 4, 8),
(280, '082733481737', 4, 8),
(281, '085763407331', 4, 8),
(282, '082763487336', 4, 8),
(283, '080763448034', 5, 8),
(284, '083743433739', 5, 8),
(285, '089703470336', 5, 8),
(286, '084783459132', 5, 8),
(287, '080703452435', 5, 8),
(288, '085793408635', 5, 8),
(289, '087703431339', 6, 8),
(290, '082763446630', 6, 8),
(291, '087723420236', 6, 8),
(292, '084723422530', 6, 8),
(293, '089703440538', 6, 8),
(294, '086723404439', 6, 8),
(295, '085743411430', 1, 9),
(296, '085743411430', 1, 9),
(297, '085743411430', 1, 9),
(298, '085743411430', 1, 9),
(299, '085743411430', 1, 9),
(300, '085743411430', 1, 9),
(301, '083733404931', 2, 9),
(302, '080713460337', 2, 9),
(303, '083753440133', 2, 9),
(304, '082713487537', 2, 9),
(305, '086773457235', 2, 9),
(306, '084783463238', 2, 9),
(307, '082743484233', 3, 9),
(308, '081703423232', 3, 9),
(309, '080733477434', 3, 9),
(310, '082703481737', 3, 9),
(311, '084743439931', 3, 9),
(312, '089763461931', 3, 9),
(313, '089713453737', 4, 9),
(314, '087763456536', 4, 9),
(315, '082743404837', 4, 9),
(316, '085783415635', 4, 9),
(317, '085763461938', 4, 9),
(318, '081723493839', 4, 9),
(319, '084783485633', 5, 9),
(320, '083703498933', 5, 9),
(321, '083763440733', 5, 9),
(322, '084773413539', 5, 9),
(323, '085793474538', 5, 9),
(324, '088793427731', 5, 9),
(325, '084753484935', 6, 9),
(326, '087733417031', 6, 9),
(327, '083753423137', 6, 9),
(328, '084763406733', 6, 9),
(329, '086763451938', 6, 9),
(330, '087723428730', 6, 9),
(331, '085743411430', 1, 10),
(332, '085743411430', 1, 10),
(333, '085743411430', 1, 10),
(334, '085743411430', 1, 10),
(335, '085743411430', 1, 10),
(336, '085743411430', 1, 10),
(337, '084783429736', 2, 10),
(338, '082743400033', 2, 10),
(339, '084733411138', 2, 10),
(340, '080793433130', 2, 10),
(341, '085723425236', 2, 10),
(342, '088703475937', 2, 10),
(343, '086743453530', 3, 10),
(344, '087713449033', 3, 10),
(345, '089753439432', 3, 10),
(346, '089743457135', 3, 10),
(347, '082723413235', 3, 10),
(348, '087703455433', 3, 10),
(349, '089763439237', 4, 10),
(350, '085723406732', 4, 10),
(351, '081733492331', 4, 10),
(352, '082753404733', 4, 10),
(353, '086723490231', 4, 10),
(354, '082703428039', 4, 10),
(355, '080753417033', 5, 10),
(356, '080773494638', 5, 10),
(357, '080753459436', 5, 10),
(358, '087733480730', 5, 10),
(359, '084753448530', 5, 10),
(360, '081723411539', 5, 10),
(361, '086703495631', 6, 10),
(362, '082763471837', 6, 10),
(363, '082793471234', 6, 10),
(364, '083763488537', 6, 10),
(365, '087763412437', 6, 10),
(366, '083773433733', 6, 10),
(367, '085743411430', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `bcm_unik`
--

CREATE TABLE `bcm_unik` (
  `idunik` int(11) NOT NULL,
  `akses` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bcm_unik`
--

INSERT INTO `bcm_unik` (`idunik`, `akses`) VALUES
(1, 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'c81e728d9d4c2f636f067f89cc14862c'),
(3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(4, 'a87ff679a2f3e71d9181a67b7542122c'),
(5, 'e4da3b7fbbce2345d7772b0674a318d5'),
(6, '1679091c5a880faf6fb5e6087eb1b2dc'),
(7, '8f14e45fceea167a5a36dedd4bea2543'),
(8, 'c9f0f895fb98ab9159f51fd0297e236d'),
(9, '45c48cce2e2d7fbdea1afc51c7c6ad26'),
(10, 'd3d9446802a44259755d38e6d163e820'),
(11, '6512bd43d9caa6e02c990b0a82652dca'),
(12, 'c20ad4d76fe97759aa27a0c99bff6710'),
(13, 'c51ce410c124a10e0db5e4b97fc2af39'),
(14, 'aab3238922bcc25a6f606eb525ffdc56'),
(15, '9bf31c7ff062936a96d3c8bd1f8f2ff3'),
(16, 'c74d97b01eae257e44aa9d5bade97baf'),
(17, '70efdf2ec9b086079795c442636b55fb'),
(18, '6f4922f45568161a8cdf4ad2299f6d23'),
(19, '1f0e3dad99908345f7439f8ffabdffc4'),
(20, '98f13708210194c475687be6106a3b84'),
(21, 'c4ca4238a0b923820dcc509a6f75849b'),
(22, 'c4ca4238a0b923820dcc509a6f75849b'),
(23, 'c4ca4238a0b923820dcc509a6f75849b'),
(24, 'c4ca4238a0b923820dcc509a6f75849b'),
(25, 'c4ca4238a0b923820dcc509a6f75849b'),
(26, 'c81e728d9d4c2f636f067f89cc14862c'),
(27, 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(28, 'a87ff679a2f3e71d9181a67b7542122c'),
(29, 'e4da3b7fbbce2345d7772b0674a318d5'),
(30, '1679091c5a880faf6fb5e6087eb1b2dc'),
(31, '8f14e45fceea167a5a36dedd4bea2543'),
(32, 'c9f0f895fb98ab9159f51fd0297e236d'),
(33, '45c48cce2e2d7fbdea1afc51c7c6ad26'),
(34, 'd3d9446802a44259755d38e6d163e820'),
(35, 'c4ca4238a0b923820dcc509a6f75849b'),
(36, 'c4ca4238a0b923820dcc509a6f75849b'),
(37, 'c4ca4238a0b923820dcc509a6f75849b'),
(38, 'c81e728d9d4c2f636f067f89cc14862c'),
(39, 'eccbc87e4b5ce2fe28308fd9f2a7baf3'),
(40, 'a87ff679a2f3e71d9181a67b7542122c'),
(41, 'e4da3b7fbbce2345d7772b0674a318d5'),
(42, '1679091c5a880faf6fb5e6087eb1b2dc'),
(43, '8f14e45fceea167a5a36dedd4bea2543'),
(44, 'c9f0f895fb98ab9159f51fd0297e236d'),
(45, '45c48cce2e2d7fbdea1afc51c7c6ad26'),
(46, 'd3d9446802a44259755d38e6d163e820'),
(47, 'e5c4cdf121e5e773c287649c62f15d85'),
(48, 'b60daf59e2fb26982ff633ee5fabff5c'),
(49, 'ee0d9321e98567d850784c9abc210d2d');

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
  `idtahun_pelajaran` varchar(45) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `method` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idpembayaran`, `nis`, `tgl_tagihan`, `tgl_bayar`, `status`, `idjenis_pembayaran`, `idtahun_pelajaran`, `ref`, `method`) VALUES
(1, '7001', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(2, '7001', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(3, '7001', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(4, '7001', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(5, '7001', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(6, '7001', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(7, '7001', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(8, '7001', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(9, '7001', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(10, '7001', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(11, '7001', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(12, '7001', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(13, '7001', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(14, '7001', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(15, '7001', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(16, '7001', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(17, '7001', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(18, '7001', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(19, '7001', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(20, '7001', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(21, '7001', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(22, '7001', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(23, '7001', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(24, '7001', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(25, '7001', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(26, '7001', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(27, '7001', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(28, '7001', '2017-12-15', '2017-12-25', 'lunas', 4, '3', NULL, NULL),
(29, '7002', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(30, '7002', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(31, '7002', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(32, '7002', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(33, '7002', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(34, '7002', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(35, '7002', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(36, '7002', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(37, '7002', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(38, '7002', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(39, '7002', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(40, '7002', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(41, '7002', '2017-10-01', '2017-10-10', 'lunas', 1, '3', NULL, NULL),
(42, '7002', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(43, '7002', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(44, '7002', '2017-12-15', '2017-12-25', 'lunas', 4, '3', NULL, NULL),
(45, '7003', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(46, '7003', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(47, '7003', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(48, '7003', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(49, '7003', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(50, '7003', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(51, '7003', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(52, '7003', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(53, '7003', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(54, '7003', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(55, '7003', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(56, '7003', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(57, '7003', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(58, '7003', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(59, '7003', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(60, '7003', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3', NULL, NULL),
(61, '7004', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(62, '7004', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(63, '7004', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(64, '7004', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(65, '7004', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(66, '7004', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(67, '7004', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(68, '7004', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(69, '7004', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(70, '7004', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(71, '7004', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(72, '7004', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(73, '7004', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(74, '7004', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(75, '7004', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(76, '7004', '2017-12-15', '2017-12-25', 'lunas', 4, '3', NULL, NULL),
(77, '7005', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(78, '7005', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(79, '7005', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(80, '7005', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(81, '7005', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(82, '7005', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(83, '7005', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(84, '7005', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(85, '7005', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(86, '7005', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(87, '7005', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(88, '7005', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(89, '7005', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(90, '7005', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(91, '7005', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(92, '7005', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3', NULL, NULL),
(93, '7006', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(94, '7006', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(95, '7006', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(96, '7006', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(97, '7006', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(98, '7006', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(99, '7006', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(100, '7006', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(101, '7006', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(102, '7006', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(103, '7006', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(104, '7006', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(105, '7006', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(106, '7006', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(107, '7006', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(108, '7006', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3', NULL, NULL),
(109, '7007', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(110, '7007', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(111, '7007', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(112, '7007', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(113, '7007', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(114, '7007', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(115, '7007', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(116, '7007', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(117, '7007', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(118, '7007', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(119, '7007', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(120, '7007', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(121, '7007', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(122, '7007', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(123, '7007', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(124, '7007', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3', NULL, NULL),
(125, '7008', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(126, '7008', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(127, '7008', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(128, '7008', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(129, '7008', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(130, '7008', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(131, '7008', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(132, '7008', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(133, '7008', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(134, '7008', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(135, '7008', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(136, '7008', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(137, '7008', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(138, '7008', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(139, '7008', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(140, '7008', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3', NULL, NULL),
(141, '7009', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(142, '7009', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(143, '7009', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(144, '7009', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(145, '7009', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(146, '7009', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(147, '7009', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(148, '7009', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(149, '7009', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(150, '7009', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(151, '7009', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(152, '7009', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(153, '7009', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(154, '7009', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(155, '7009', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(156, '7009', '2017-12-15', '2017-12-25', 'lunas', 4, '3', NULL, NULL),
(157, '7010', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(158, '7010', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(159, '7010', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(160, '7010', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(161, '7010', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(162, '7010', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(163, '7010', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(164, '7010', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(165, '7010', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(166, '7010', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(167, '7010', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(168, '7010', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(169, '7010', '2017-10-01', '2017-10-10', 'lunas', 1, '3', NULL, NULL),
(170, '7010', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(171, '7010', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(172, '7010', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3', NULL, NULL),
(173, '7011', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(174, '7011', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(175, '7011', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(176, '7011', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(177, '7011', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(178, '7011', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(179, '7011', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(180, '7011', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(181, '7011', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(182, '7011', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(183, '7011', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(184, '7011', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(185, '7011', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(186, '7011', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(187, '7011', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(188, '7011', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3', NULL, NULL),
(189, '7012', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(190, '7012', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(191, '7012', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(192, '7012', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(193, '7012', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(194, '7012', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(195, '7012', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(196, '7012', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(197, '7012', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(198, '7012', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(199, '7012', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(200, '7012', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(201, '7012', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(202, '7012', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(203, '7012', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(204, '7012', '2017-12-15', '2017-12-25', 'lunas', 4, '3', NULL, NULL),
(205, '7013', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(206, '7013', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(207, '7013', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(208, '7013', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(209, '7013', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(210, '7013', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(211, '7013', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(212, '7013', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(213, '7013', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(214, '7013', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(215, '7013', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(216, '7013', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(217, '7013', '2017-10-01', '2017-10-10', 'lunas', 1, '3', NULL, NULL),
(218, '7013', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(219, '7013', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(220, '7013', '2017-12-15', '2017-12-25', 'lunas', 4, '3', NULL, NULL),
(221, '7014', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(222, '7014', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(223, '7014', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(224, '7014', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(225, '7014', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(226, '7014', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(227, '7014', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(228, '7014', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(229, '7014', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(230, '7014', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(231, '7014', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(232, '7014', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(233, '7014', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(234, '7014', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(235, '7014', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(236, '7014', '2017-12-15', '2017-12-25', 'lunas', 4, '3', NULL, NULL),
(237, '7015', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(238, '7015', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(239, '7015', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(240, '7015', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(241, '7015', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(242, '7015', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(243, '7015', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(244, '7015', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(245, '7015', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(246, '7015', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(247, '7015', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(248, '7015', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(249, '7015', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(250, '7015', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(251, '7015', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(252, '7015', '2017-12-15', '2017-12-25', 'lunas', 4, '3', NULL, NULL),
(253, '7016', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(254, '7016', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(255, '7016', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(256, '7016', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(257, '7016', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(258, '7016', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(259, '7016', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(260, '7016', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(261, '7016', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(262, '7016', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(263, '7016', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(264, '7016', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(265, '7016', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(266, '7016', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(267, '7016', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(268, '7016', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3', NULL, NULL),
(269, '7017', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(270, '7017', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(271, '7017', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(272, '7017', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(273, '7017', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(274, '7017', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(275, '7017', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(276, '7017', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(277, '7017', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(278, '7017', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(279, '7017', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(280, '7017', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(281, '7017', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(282, '7017', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(283, '7017', '2017-12-01', '2018-02-24', 'belum_lunas', 1, '3', '5DB4C8FCC66DFFF05B663D3BB29B2354CD21BC884BCA44117E4653A3BF9149ED', 'trf'),
(284, '7017', '2017-12-15', '2018-02-23', 'belum_lunas', 4, '3', 'F0986F7D9848E339C96DBC442CF0945A40FD9AFE486B21326CD4FB6748653D37', 'trf'),
(285, '7018', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(286, '7018', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(287, '7018', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(288, '7018', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(289, '7018', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(290, '7018', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(291, '7018', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(292, '7018', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(293, '7018', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(294, '7018', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(295, '7018', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(296, '7018', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(297, '7018', '2017-10-01', '2017-10-10', 'lunas', 1, '3', NULL, NULL),
(298, '7018', '2017-11-01', '2017-11-10', 'lunas', 1, '3', NULL, NULL),
(299, '7018', '2017-12-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(300, '7018', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3', NULL, NULL),
(301, '7019', '2017-01-01', '2017-01-10', 'lunas', 1, '3', NULL, NULL),
(302, '7019', '2017-02-01', '2017-02-10', 'lunas', 1, '3', NULL, NULL),
(303, '7019', '2017-03-01', '2017-03-10', 'lunas', 1, '3', NULL, NULL),
(304, '7019', '2017-03-10', '2017-03-20', 'lunas', 3, '3', NULL, NULL),
(305, '7019', '2017-04-01', '2017-04-10', 'lunas', 1, '3', NULL, NULL),
(306, '7019', '2017-05-01', '2017-05-10', 'lunas', 1, '3', NULL, NULL),
(307, '7019', '2017-06-01', '2017-06-10', 'lunas', 1, '3', NULL, NULL),
(308, '7019', '2017-06-15', '2017-06-25', 'lunas', 4, '3', NULL, NULL),
(309, '7019', '2017-07-01', '2017-07-10', 'lunas', 1, '3', NULL, NULL),
(310, '7019', '2017-08-01', '2017-08-10', 'lunas', 1, '3', NULL, NULL),
(311, '7019', '2017-09-01', '2017-09-10', 'lunas', 1, '3', NULL, NULL),
(312, '7019', '2017-09-10', '2017-09-20', 'lunas', 3, '3', NULL, NULL),
(313, '7019', '2017-10-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(314, '7019', '2017-11-01', '0000-00-00', 'belum_lunas', 1, '3', NULL, NULL),
(315, '7019', '2017-12-01', '2017-12-10', 'lunas', 1, '3', NULL, NULL),
(316, '7019', '2017-12-15', '0000-00-00', 'belum_lunas', 4, '3', NULL, NULL);

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
  `status` varchar(25) NOT NULL DEFAULT 'belum_aktif',
  `otp` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idusers`, `email`, `username`, `password`, `nama`, `no_telp`, `alamat`, `idbank`, `no_rekening`, `level`, `token`, `status`, `otp`) VALUES
(1, 'zalindra1@gmail.com', '7001', '$2y$10$HV19HM0b.GSE7kntpk8UhO67ok6prKFef13vJsV/kNP7PZYfvseK.', 'Zalindra', '085743411430', 'Gg. Camar No. 71', '002', '8576975058', 'siswa', NULL, 'aktif', 0),
(2, 'lukita2@gmail.com', '7002', '$2y$10$TaBlWyNNBIqVctADeyHiz.i0.8JCa7UiH0YbFNkw6sYp39Esm5vLq', 'Lukita', '085743411430', 'Kpg. Taman No. 613', '008', '9153921525', 'siswa', NULL, 'aktif', 0),
(3, 'ella3@gmail.com', '7003', '$2y$10$lEjVUCBCBPaqWSv4jhPAfuLRHMR4sCkSmIoieTLF7bjVTIQNGvWpO', 'Ella', '085743411430', 'Kpg. Abdul Muis No. 884', '022', '9907635860', 'siswa', NULL, 'aktif', 0),
(4, 'raina4@gmail.com', '7004', '$2y$10$qijgnsLPBcdAn7HyVPqRkuwaX5QIifr6kdDFVy4cFkvRoBZrICvcy', 'Raina', '085743411430', 'Dk. Setia Budi No. 242', '008', '2528544630', 'siswa', NULL, 'aktif', 0),
(5, 'tantri5@gmail.com', '7005', '$2y$10$W1nxO6u9uATxXWxY5fJHQ.1nD/vNc3OXQwCHtuh9OAn09NIn5rZPy', 'Tantri', '085743411430', 'Ds. Sumpah Pemuda No. 128', '008', '6111483700', 'siswa', NULL, 'aktif', 0),
(6, 'lalita6@gmail.com', '7006', '$2y$10$GlNvwad.wgTsW9jfox/SpONcec16jAmGFNkaibPcJVio4s1uyiIWW', 'Lalita', '085743411430', 'Psr. Nangka No. 688', '022', '5389667849', 'siswa', NULL, 'aktif', 0),
(7, 'lintang7@gmail.com', '7007', '$2y$10$RL2OWqeOadYLx50IJww2ieCepDwuJKYdIomlTa4DhTLsswdVnApUO', 'Lintang', '085743411430', 'Psr. Rajawali Timur No. 256', '002', '1850781528', 'siswa', NULL, 'aktif', 0),
(8, 'kamaria8@gmail.com', '7008', '$2y$10$bQrqkd4/ey2TnkKh/YRbNuWCmg0GuAPXpMGTb10uPC0qfFibMgAYS', 'Kamaria', '085743411430', 'Jln. Bakau No. 553', '022', '8870800293', 'siswa', NULL, 'aktif', 0),
(9, 'bakijan9@gmail.com', '7009', '$2y$10$Hka8miCIQy5qNjmwvBmqfOIu9b6ZyPMJAC40FDyj/yXRCSu8r3AIq', 'Bakijan', '085743411430', 'Psr. Acordion No. 259', '009', '3173363914', 'siswa', NULL, 'aktif', 0),
(10, 'jati10@gmail.com', '7010', '$2y$10$7LteBdRMxG.kS57VNk9R4.qkT4CdbJNDnYHNDd8K6EjEjvPMuLBXy', 'Jati', '085743411430', 'Ds. Barasak No. 886', '014', '4550552077', 'siswa', NULL, 'aktif', 0),
(11, 'darijan11@gmail.com', '7011', '$2y$10$aaEcwSRbx0a3p8Sux0XhGuGW7eibNmvVzVmhyoQk8z24j6iw5B416', 'Darijan', '085743411430', 'Kpg. Ahmad Dahlan No. 290', '009', '3016572789', 'siswa', NULL, 'aktif', 0),
(12, 'baktiono12@gmail.com', '7012', '$2y$10$X7F9xT.6hDUTaSxdTjXFtOxdcYRsM48YQ6oCCEOrxa4hV91fb9uyu', 'Baktiono', '085743411430', 'Kpg. Baranang Siang No. 796', '014', '6704488589', 'siswa', NULL, 'aktif', 0),
(13, 'kartika13@gmail.com', '7013', '$2y$10$gVI4KcA/C1eJnh7E1Q8pteCPigPsFgqLCzhNW9iXPSL0KQ4VCcq2K', 'Kartika', '085743411430', 'Dk. Sunaryo No. 170', '009', '3178710408', 'siswa', NULL, 'aktif', 0),
(14, 'aswani14@gmail.com', '7014', '$2y$10$0t3K6aCsBafrseNBL2QRDOe/J1yGsd62EGNlI1E1su3lR0kXyvGf.', 'Aswani', '085743411430', 'Ds. Pasteur No. 480', '002', '2112995051', 'siswa', NULL, 'aktif', 0),
(15, 'baktiono15@gmail.com', '7015', '$2y$10$l8YlHlKo5GaZsyd5F3sRneE65BPB1F3e80PWQy2mS2pC6c6UsDjm6', 'Baktiono', '085743411430', 'Ki. Surapati No. 927', '014', '2004689894', 'siswa', NULL, 'aktif', 0),
(16, 'simon16@gmail.com', '7016', '$2y$10$w1P5Hb/rltaGhPumspyLYuNXNhujDhYQ2iDIJq0ksmae308pVgSIi', 'Simon', '085743411430', 'Ki. Krakatau No. 924', '014', '6941878703', 'siswa', NULL, 'aktif', 0),
(17, 'adiarja17@gmail.com', '7017', '$2y$10$3Ck0B2r4M3g5iohUDP5lZeojtNVp96InWyIC5sm/hTIRCAvxiG.K2', 'Adiarja', '085743411430', 'Ds. K.H. Maskur No. 183', '008', '9113109304', 'siswa', NULL, 'aktif', 0),
(18, 'cahya18@gmail.com', '7018', '$2y$10$hSrhjLShNWjSDALCnq3OgeB3s2lRbJ8voq0lGL9GyOt/fZgGYt0Oi', 'Cahya', '085743411430', 'Psr. Cikapayang No. 773', '008', '3569511434', 'siswa', NULL, 'aktif', 0),
(19, 'raden19@gmail.com', '7019', '$2y$10$cMz7jOZcYfHZg9/uDDsD1eYXjEba2MCW3Il6OxcmEZrRjx/DaTLaa', 'Raden', '085743411430', 'Gg. Setiabudhi No. 974', '014', '7948340737', 'siswa', NULL, 'aktif', 0),
(21, 'jumari1@gmail.com', '3137023814040003', '$2y$10$MIt/xj00EXzODSFmxkQ68O338r7aVkab9yTRBqn1Fuws.saH1sAGy', 'Jumari', '085743411430', 'Gg. Banal No. 270', '014', '6352627671', 'orang_tua', NULL, 'aktif', 0),
(22, 'darmaji2@gmail.com', '3166015916020002', '$2y$10$J6X6NND6C.b4qK6UOJ4EQu3c7t5BZRGfZ.UNnZeoncfsx4z3N1zYa', 'Darmaji', '085743411430', 'Dk. Bayan No. 130', '002', '1796020043', 'orang_tua', NULL, 'aktif', 0),
(23, 'vinsen3@gmail.com', '3111753319050002', '$2y$10$vdnoc7faB9VPGfFYjljhE.vSckv1P5T/kJqxjzToeyYXtnnMZyCGW', 'Vinsen', '085743411430', 'Jr. Bak Mandi No. 734', '022', '7897642858', 'orang_tua', NULL, 'aktif', 0),
(24, 'ikin4@gmail.com', '3187356715090003', '$2y$10$So4Ns.XwNKnQhQrTyc0yO.PlCsvCBoh5oizLySG.uHMsklWozI1o.', 'Ikin', '085743411430', 'Gg. Adisumarmo No. 460', '022', '0828538900', 'orang_tua', NULL, 'aktif', 0),
(25, 'lanjar5@gmail.com', '3199726415070001', '$2y$10$RiluuS6jveb/konwqF349eJp9ds.pyEwwIfSqwN3Hu8T2ze3GoP7C', 'Lanjar', '085743411430', 'Gg. Wahidin No. 75', '002', '9701256881', 'orang_tua', NULL, 'aktif', 0),
(26, 'rahmi6@gmail.com', '3149104912010005', '$2y$10$CogPJ0H6yqegVWu15UL7iOnFDufl8h/V.PM31dkIRBL.Pa90wPrwi', 'Rahmi', '085743411430', 'Jr. Gedebage Selatan No. 144', '008', '7559035483', 'orang_tua', NULL, 'aktif', 0),
(27, 'novi7@gmail.com', '3101100214020007', '$2y$10$C6UwvkoKhR2psAHXS1pfauGZpUUcDdIK3RIqYXlA0fXwEg8ZRkJFW', 'Novi', '085743411430', 'Ki. Halim No. 511', '008', '6619980887', 'orang_tua', NULL, 'aktif', 0),
(28, 'maya8@gmail.com', '3176363913020007', '$2y$10$ApY8JjYK0LvRp2nJFW/YX.PAvcqFG51TmHyCsr7OzLtCBaUljgDMy', 'Maya', '085743411430', 'Jr. Sampangan No. 701', '002', '3969225815', 'orang_tua', NULL, 'aktif', 0),
(29, 'prabu9@gmail.com', '3139905316070008', '$2y$10$z3rBLj9gNjUwfbNMyGt4CeaQ9YkPGWkjtQ2fqGstRF7F9mx8ERKFy', 'Prabu', '085743411430', 'Jln. Flora No. 646', '014', '0278628382', 'orang_tua', NULL, 'aktif', 0),
(30, 'gadang10@gmail.com', '3133654614010004', '$2y$10$T2LQ4ECQXHVSf3aT3Zoo9uWYXJnWgLAKqZEO6ReJFnCJ0HW4545Km', 'Gadang', '085743411430', 'Kpg. Krakatau No. 258', '008', '6593079613', 'orang_tua', NULL, 'aktif', 0),
(31, 'dalimin11@gmail.com', '3116556519040004', '$2y$10$o.XSUejkzpLNad1GRV1spOhvMmst4Dueu8NaEbQoNgRTHlOp3wjym', 'Dalimin', '085743411430', 'Jln. Bayam No. 575', '008', '4567023484', 'orang_tua', NULL, 'aktif', 0),
(32, 'rachel12@gmail.com', '3108759311060001', '$2y$10$kSXi2DKUCj61Gv8ggo2vtOc36yUDj7QZZ3XMGJg6enQTVFCrvvpmK', 'Rachel', '085743411430', 'Ki. Bakti No. 344', '022', '3181184993', 'orang_tua', NULL, 'aktif', 0),
(33, 'liman13@gmail.com', '3171030510080001', '$2y$10$N5DLc5SjTc3oPpNQakX92eg12GqanVKVXrY3gkHdkZek.kqJw5V4G', 'Liman', '085743411430', 'Ki. Barasak No. 382', '009', '5199133058', 'orang_tua', NULL, 'aktif', 0),
(34, 'cinthia14@gmail.com', '3183046214080003', '$2y$10$z9mBJ/PqDMsbgrbLKoe3He9DQD7PN8EnKPMqgoTVov261NPiOR25W', 'Cinthia', '085743411430', 'Ki. Supomo No. 106', '008', '8154381381', 'orang_tua', NULL, 'aktif', 0),
(35, 'bahuwarna15@gmail.com', '3118768113030006', '$2y$10$b7kBXyUvgj94XFWnWDNE0eCzpn/YTpjFAe46MLYh3GDDzTX1v24KW', 'Bahuwarna', '085743411430', 'Ki. Bakhita No. 206', '014', '7558708603', 'orang_tua', NULL, 'aktif', 0),
(36, 'virman16@gmail.com', '3151104217060009', '$2y$10$OTF0j9Tb2Y7hFCOe/Rw7SeJ3gvFvwPF.8tNwr5esGmrU4edxwPUFW', 'Virman', '085743411430', 'Ds. Abdul. Muis No. 522', '022', '7165419096', 'orang_tua', NULL, 'aktif', 0),
(37, 'yoga17@gmail.com', '3178449410040001', '$2y$10$t4qTtaTU1M9YWS1FhGmI..NqM/El0vxZ8fWGyOZ5qVveUTK0ZeiqK', 'Yoga', '085743411430', 'Kpg. Samanhudi No. 24', '008', '7703960101', 'orang_tua', NULL, 'aktif', 0),
(38, 'balapati18@gmail.com', '3137780013050008', '$2y$10$pfsHSF8b.7OzoZQhWJHRYOS3zNxDgr24dhc2liwO8dvpXn7qbIuNq', 'Balapati', '085743411430', 'Psr. Acordion No. 138', '022', '7632572266', 'orang_tua', NULL, 'aktif', 0),
(39, 'nova19@gmail.com', '3183604914020001', '$2y$10$M8mHI.7/mL7QLJlWf1RrDu0LrBbqSEU7LYN4DLz1lP5ApkRZkPXRi', 'Nova', '085743411430', 'Jln. Tubagus Ismail No. 492', '002', '7394081801', 'orang_tua', NULL, 'aktif', 0),
(41, 'admin@ulah.id', 'admin', '$2y$10$AaUThhozGcFsJ1MwHtqT2.mCRfZhC8JM0dpMVz.hdfqbo.f0KDoHG', 'Admin Sekolah', '085743411430', '', '', '', 'admin', NULL, 'aktif', 0),
(42, 'admin2@ulah.id', 'admin2', '$2y$10$AaUThhozGcFsJ1MwHtqT2.mCRfZhC8JM0dpMVz.hdfqbo.f0KDoHG', 'Admin2 Sekolah', '085743411430', '', '', '', 'admin', NULL, 'aktif', 1);

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
  MODIFY `idnomor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;
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
