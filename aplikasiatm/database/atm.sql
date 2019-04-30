-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 08:10 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `atm`
--

CREATE TABLE `atm` (
  `no_mesin` int(11) NOT NULL,
  `lokasi` varchar(15) NOT NULL,
  `jumlah_uang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atm`
--

INSERT INTO `atm` (`no_mesin`, `lokasi`, `jumlah_uang`) VALUES
(1, 'Telkom', 899750000),
(2, 'Alfamart', 96100000),
(3, 'Telkom', 248750000),
(4, 'Telkom', 300000000),
(5, 'Buah Batu', 400000000),
(6, 'Buah Batu', 150000000),
(7, 'Sukapura', 30000000),
(8, 'Sukapura', 48750000),
(9, 'muara bungo', 250000000),
(10, 'Mars', 0);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tagihan`
--

CREATE TABLE `jenis_tagihan` (
  `nama_jenis` varchar(20) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tagihan`
--

INSERT INTO `jenis_tagihan` (`nama_jenis`, `nama_kategori`) VALUES
('Tagihan Air', 'Air'),
('Lainnya', 'Lainnya'),
('Tagihan Listrik', 'Listrik'),
('BPP', 'Pendidikan'),
('Prabayar', 'Telepon/Ponsel'),
('Pulsa', 'Telepon/Ponsel'),
('Telepon', 'Telepon/Ponsel'),
('Kereta Api', 'Tiket'),
('Pesawat Udara', 'Tiket'),
('Internet', 'TV kabel/Internet'),
('TV kabel', 'TV kabel/Internet');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_tagihan`
--

CREATE TABLE `kategori_tagihan` (
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_tagihan`
--

INSERT INTO `kategori_tagihan` (`nama`) VALUES
('Air'),
('Lainnya'),
('Listrik'),
('Pendidikan'),
('Telepon/Ponsel'),
('Tiket'),
('TV kabel/Internet');

-- --------------------------------------------------------

--
-- Table structure for table `membayar`
--

CREATE TABLE `membayar` (
  `tanggal_pembayaran` date NOT NULL,
  `waktu` time NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `rekening` varchar(10) NOT NULL,
  `no_mesin` int(11) NOT NULL,
  `no_tagihan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membayar`
--

INSERT INTO `membayar` (`tanggal_pembayaran`, `waktu`, `no_transaksi`, `rekening`, `no_mesin`, `no_tagihan`) VALUES
('2019-02-17', '02:54:32', 32, '0123456789', 5, NULL),
('2019-04-30', '19:32:55', 54, '0123456789', 2, '082112083667'),
('2019-04-30', '19:42:35', 54, '0123456789', 2, '082112083667');

-- --------------------------------------------------------

--
-- Table structure for table `menarik_uang`
--

CREATE TABLE `menarik_uang` (
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `no_mesin` int(11) NOT NULL,
  `rekening` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menarik_uang`
--

INSERT INTO `menarik_uang` (`tanggal`, `waktu`, `no_transaksi`, `no_mesin`, `rekening`) VALUES
('2019-02-15', '07:48:36', 1, 2, '0123456789'),
('2019-02-15', '07:49:44', 1, 2, '0123456789'),
('2019-02-15', '07:51:56', 2, 4, '0123456789'),
('2019-02-15', '07:53:44', 3, 4, '0123456789'),
('2019-02-15', '08:16:32', 4, 4, '0123456789'),
('2019-02-15', '08:17:35', 5, 4, '0123456789'),
('2019-02-15', '08:18:34', 6, 4, '0123456789'),
('2019-02-15', '08:21:04', 6, 4, '0123456789'),
('2019-02-15', '08:21:40', 7, 4, '0123456789'),
('2019-02-15', '08:23:28', 8, 4, '0123456789'),
('2019-02-15', '08:23:34', 9, 4, '0123456789'),
('2019-02-15', '08:23:37', 10, 4, '0123456789'),
('2019-02-15', '08:23:44', 11, 4, '0123456789'),
('2019-02-15', '08:23:48', 12, 4, '0123456789'),
('2019-02-15', '08:25:34', 13, 4, '0123456789'),
('2019-02-15', '08:26:00', 13, 4, '0123456789'),
('2019-02-15', '08:26:02', 14, 4, '0123456789'),
('2019-02-15', '08:26:05', 15, 4, '0123456789'),
('2019-02-15', '08:26:07', 16, 4, '0123456789'),
('2019-02-15', '08:27:57', 17, 4, '0123456789'),
('2019-02-15', '08:28:02', 18, 4, '0123456789'),
('2019-02-15', '08:28:05', 19, 4, '0123456789'),
('2019-02-15', '08:28:10', 20, 4, '0123456789'),
('2019-02-15', '08:28:48', 20, 4, '0123456789'),
('2019-02-15', '08:28:51', 21, 4, '0123456789'),
('2019-02-15', '08:29:49', 22, 4, '0123456789'),
('2019-02-15', '09:50:34', 23, 3, '0123456789'),
('2019-02-15', '09:58:43', 24, 3, '0123456789'),
('2019-02-18', '02:13:11', 33, 7, '0123456789'),
('2019-02-18', '02:18:16', 35, 5, '0123456789'),
('2019-02-18', '06:23:50', 36, 6, '0123456789'),
('2019-02-18', '06:25:28', 37, 6, '0123456789'),
('2019-02-18', '06:26:06', 38, 6, '0123456789'),
('2019-02-18', '06:28:37', 39, 6, '0123456789'),
('2019-02-18', '06:29:41', 40, 6, '0123456789'),
('2019-02-18', '06:50:44', 41, 8, '0123456789'),
('2019-02-18', '06:51:33', 42, 8, '0123456789'),
('2019-02-18', '07:05:04', 43, 2, '9876543210'),
('2019-02-18', '07:06:33', 44, 2, '9876543210'),
('2019-02-18', '07:07:24', 45, 2, '9876543210'),
('2019-02-18', '07:07:38', 46, 2, '9876543210'),
('2019-02-18', '07:07:49', 47, 2, '9876543210'),
('2019-02-18', '07:08:45', 48, 2, '9876543210'),
('2019-02-22', '08:38:31', 49, 1, '0123456789'),
('2019-03-28', '08:42:17', 50, 3, '0123456789'),
('2019-03-28', '08:42:44', 51, 3, '0123456789'),
('2019-03-28', '08:44:31', 52, 3, '0123456789'),
('2019-04-30', '14:25:07', 58, 2, '0123456789'),
('2019-04-30', '14:29:25', 59, 2, '0123456789'),
('2019-04-30', '14:29:47', 60, 2, '0123456789'),
('2019-04-30', '14:30:06', 61, 2, '0123456789'),
('2019-04-30', '19:45:11', 62, 2, '0123456789'),
('2019-04-30', '19:45:31', 63, 2, '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `mentransfer`
--

CREATE TABLE `mentransfer` (
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `rekening` varchar(10) NOT NULL,
  `no_mesin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mentransfer`
--

INSERT INTO `mentransfer` (`tanggal`, `waktu`, `no_transaksi`, `rekening`, `no_mesin`) VALUES
('2019-02-15', '20:00:41', 26, '0123456789', 9),
('2019-02-16', '03:16:02', 27, '0123456789', 9),
('2019-02-18', '02:13:39', 34, '0123456789', 7),
('2019-04-30', '20:09:08', 64, '0123456789', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nasabah`
--

CREATE TABLE `nasabah` (
  `No_KTP` varchar(20) NOT NULL,
  `Nama_nasabah` varchar(20) NOT NULL,
  `pin` varchar(6) NOT NULL,
  `saldo` float NOT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `rekening` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nasabah`
--

INSERT INTO `nasabah` (`No_KTP`, `Nama_nasabah`, `pin`, `saldo`, `alamat`, `kontak`, `rekening`) VALUES
('31641321631655321', 'joko', '112233', 850000, 'sakjxajsmcinaioscnoaklsmnxnajsdioljmaklsnxlk', '02135316531', '0123456789'),
('9213810928309', 'Tatang', '221133', 1950000, 'asdfdawefvasdvcwerawed', '0819238981', '9876543210');

-- --------------------------------------------------------

--
-- Table structure for table `penarikan_uang`
--

CREATE TABLE `penarikan_uang` (
  `jumlah` int(11) NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `rekening` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penarikan_uang`
--

INSERT INTO `penarikan_uang` (`jumlah`, `no_transaksi`, `rekening`) VALUES
(250000, 1, '0123456789'),
(250000, 1, '0123456789'),
(500000, 2, '0123456789'),
(750000, 3, '0123456789'),
(1000000, 4, '0123456789'),
(1000000, 5, '0123456789'),
(1000000, 6, '0123456789'),
(1000000, 6, '0123456789'),
(1000000, 7, '0123456789'),
(1000000, 8, '0123456789'),
(500000, 9, '0123456789'),
(500000, 10, '0123456789'),
(500000, 11, '0123456789'),
(1000000, 12, '0123456789'),
(500000, 13, '0123456789'),
(500000, 13, '0123456789'),
(250000, 14, '0123456789'),
(250000, 15, '0123456789'),
(250000, 16, '0123456789'),
(1500000, 17, '0123456789'),
(1500000, 18, '0123456789'),
(1500000, 19, '0123456789'),
(1500000, 20, '0123456789'),
(1500000, 20, '0123456789'),
(1500000, 21, '0123456789'),
(1500000, 22, '0123456789'),
(1000000, 23, '0123456789'),
(200000, 24, '0123456789'),
(500000, 33, '0123456789'),
(750000, 35, '0123456789'),
(100000, 36, '0123456789'),
(100000, 37, '0123456789'),
(0, 38, '0123456789'),
(0, 39, '0123456789'),
(0, 40, '0123456789'),
(250000, 41, '0123456789'),
(1000000, 42, '0123456789'),
(250000, 43, '9876543210'),
(250000, 44, '9876543210'),
(250000, 45, '9876543210'),
(250000, 46, '9876543210'),
(1000000, 47, '9876543210'),
(1250000, 48, '9876543210'),
(250000, 49, '0123456789'),
(250000, 50, '0123456789'),
(0, 51, '0123456789'),
(1000000, 52, '0123456789'),
(-50000, 58, '0123456789'),
(50000, 59, '0123456789'),
(500000, 60, '0123456789'),
(50000, 61, '0123456789'),
(50000, 62, '0123456789'),
(50000, 63, '0123456789');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `kode_perusahaan` varchar(10) NOT NULL,
  `nama_perusahaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`kode_perusahaan`, `nama_perusahaan`) VALUES
('1001', 'XL'),
('1004', 'Telkomsel'),
('10094', 'Telkom University'),
('1026', 'Indosat'),
('10322', 'Universitas Padjadjaran'),
('1122', 'shopee'),
('1352', '3'),
('3051', 'MyRepublic'),
('3465', 'Firstmedia'),
('3855', 'Indihome'),
('3910', 'Biznet'),
('87800', 'PLN'),
('900100', 'Kereta Api Indonesia'),
('9201', 'K-Vision'),
('9384', 'TopTV'),
('9415', 'AoraTV'),
('9425', 'Indovision'),
('9470', 'Transvision'),
('96700', 'PAM'),
('980129', 'Garuda Indonesia'),
('980212', 'Air Asia'),
('980310', 'Nam Air'),
('980319', 'Sriwijaya Air'),
('980407', 'Batik Air'),
('980411', 'Lion Air');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan_jenis`
--

CREATE TABLE `perusahaan_jenis` (
  `kode_perusahaan` varchar(10) NOT NULL,
  `jenis_tagihan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan_jenis`
--

INSERT INTO `perusahaan_jenis` (`kode_perusahaan`, `jenis_tagihan`) VALUES
('10094', 'BPP'),
('10322', 'BPP'),
('980129', 'Pesawat Udara'),
('980411', 'Pesawat Udara'),
('980212', 'Pesawat Udara'),
('980319', 'Pesawat Udara'),
('980407', 'Pesawat Udara'),
('980310', 'Pesawat Udara'),
('1004', 'Pulsa'),
('1026', 'Pulsa'),
('1001', 'Pulsa'),
('1352', 'Pulsa'),
('1004', 'Prabayar'),
('3855', 'Internet'),
('3465', 'Internet'),
('3051', 'Internet'),
('3910', 'Internet'),
('9425', 'TV kabel'),
('9384', 'TV kabel'),
('9201', 'TV kabel'),
('9470', 'TV kabel'),
('9415', 'TV kabel'),
('87800', 'Tagihan Listrik'),
('96700', 'Tagihan Air'),
('1122', 'Lainnya'),
('900100', 'Kereta Api');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `status_pembayaran` varchar(20) NOT NULL DEFAULT 'belum lunas',
  `jumlah_tagihan` int(11) NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `rekening` varchar(10) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL DEFAULT 'Prabayar',
  `kode_perusahaan` varchar(10) NOT NULL,
  `no_tagihan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`status_pembayaran`, `jumlah_tagihan`, `no_transaksi`, `rekening`, `nama_jenis`, `kode_perusahaan`, `no_tagihan`) VALUES
('belum lunas', 200000, 56, '0123456789', 'Lainnya', '1122', '0020202020020'),
('belum lunas', 10000, 57, '9876543210', 'Prabayar', '1004', '081287053341'),
('belum lunas', 100000, 54, '0123456789', 'Pulsa', '1004', '082112083667'),
('belum lunas', 200000, 53, '9876543210', 'Kereta Api', '900100', '112345678'),
('lunas', 1000000, 32, '0123456789', 'BPP', '10094', '11301164667'),
('belum lunas', 800000, 55, '9876543210', 'Pesawat Udara', '980129', '800200100');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_transaksi` int(11) NOT NULL,
  `jenis_transaksi` varchar(20) NOT NULL,
  `rekening` varchar(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_transaksi`, `jenis_transaksi`, `rekening`, `tanggal`) VALUES
(1, 'tarik tunai', '0123456789', '2019-02-15'),
(2, 'tarik tunai', '0123456789', '2019-02-15'),
(3, 'tarik tunai', '0123456789', '2019-02-15'),
(4, 'tarik tunai', '0123456789', '2019-02-15'),
(5, 'tarik tunai', '0123456789', '2019-02-15'),
(6, 'tarik tunai', '0123456789', '2019-02-15'),
(7, 'tarik tunai', '0123456789', '2019-02-15'),
(8, 'tarik tunai', '0123456789', '2019-02-15'),
(9, 'tarik tunai', '0123456789', '2019-02-15'),
(10, 'tarik tunai', '0123456789', '2019-02-15'),
(11, 'tarik tunai', '0123456789', '2019-02-15'),
(12, 'tarik tunai', '0123456789', '2019-02-15'),
(13, 'tarik tunai', '0123456789', '2019-02-15'),
(14, 'tarik tunai', '0123456789', '2019-02-15'),
(15, 'tarik tunai', '0123456789', '2019-02-15'),
(16, 'tarik tunai', '0123456789', '2019-02-15'),
(17, 'tarik tunai', '0123456789', '2019-02-15'),
(18, 'tarik tunai', '0123456789', '2019-02-15'),
(19, 'tarik tunai', '0123456789', '2019-02-15'),
(20, 'tarik tunai', '0123456789', '2019-02-15'),
(21, 'tarik tunai', '0123456789', '2019-02-15'),
(22, 'tarik tunai', '0123456789', '2019-02-15'),
(23, 'tarik tunai', '0123456789', '2019-02-15'),
(24, 'tarik tunai', '0123456789', '2019-02-15'),
(26, 'transfer', '0123456789', '2019-02-15'),
(27, 'transfer', '0123456789', '2019-02-16'),
(32, 'pembayaran', '0123456789', '2019-02-17'),
(33, 'tarik tunai', '0123456789', '2019-02-18'),
(34, 'transfer', '0123456789', '2019-02-18'),
(35, 'tarik tunai', '0123456789', '2019-02-18'),
(36, 'tarik tunai', '0123456789', '2019-02-18'),
(37, 'tarik tunai', '0123456789', '2019-02-18'),
(38, 'tarik tunai', '0123456789', '2019-02-18'),
(39, 'tarik tunai', '0123456789', '2019-02-18'),
(40, 'tarik tunai', '0123456789', '2019-02-18'),
(41, 'tarik tunai', '0123456789', '2019-02-18'),
(42, 'tarik tunai', '0123456789', '2019-02-18'),
(43, 'tarik tunai', '9876543210', '2019-02-18'),
(44, 'tarik tunai', '9876543210', '2019-02-18'),
(45, 'tarik tunai', '9876543210', '2019-02-18'),
(46, 'tarik tunai', '9876543210', '2019-02-18'),
(47, 'tarik tunai', '9876543210', '2019-02-18'),
(48, 'tarik tunai', '9876543210', '2019-02-18'),
(49, 'tarik tunai', '0123456789', '2019-02-22'),
(50, 'tarik tunai', '0123456789', '2019-03-28'),
(51, 'tarik tunai', '0123456789', '2019-03-28'),
(52, 'tarik tunai', '0123456789', '2019-03-28'),
(53, 'pembayaran', '9876543210', '2019-04-30'),
(54, 'pembayaran', '0123456789', '2019-04-30'),
(55, 'pembayaran', '9876543210', '2019-04-30'),
(56, 'pembayaran', '0123456789', '2019-04-30'),
(57, 'pembayaran', '9876543210', '2019-04-30'),
(58, 'tarik tunai', '0123456789', '2019-04-30'),
(59, 'tarik tunai', '0123456789', '2019-04-30'),
(60, 'tarik tunai', '0123456789', '2019-04-30'),
(61, 'tarik tunai', '0123456789', '2019-04-30'),
(62, 'tarik tunai', '0123456789', '2019-04-30'),
(63, 'tarik tunai', '0123456789', '2019-04-30'),
(64, 'transfer', '0123456789', '2019-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `rekening_tujuan` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `rekening` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`rekening_tujuan`, `jumlah`, `no_transaksi`, `rekening`) VALUES
('9876543210', 1000000, 26, '0123456789'),
('9876543210', 100000, 27, '0123456789'),
('9876543210', 2000000, 34, '0123456789'),
('9876543210', 100000, 64, '0123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atm`
--
ALTER TABLE `atm`
  ADD PRIMARY KEY (`no_mesin`);

--
-- Indexes for table `jenis_tagihan`
--
ALTER TABLE `jenis_tagihan`
  ADD PRIMARY KEY (`nama_jenis`),
  ADD KEY `jenistagihankategoritagihan` (`nama_kategori`);

--
-- Indexes for table `kategori_tagihan`
--
ALTER TABLE `kategori_tagihan`
  ADD PRIMARY KEY (`nama`);

--
-- Indexes for table `membayar`
--
ALTER TABLE `membayar`
  ADD KEY `membayartransaksi` (`no_transaksi`),
  ADD KEY `membayarnasabah` (`rekening`),
  ADD KEY `membayaratm` (`no_mesin`),
  ADD KEY `membayartagihan` (`no_tagihan`);

--
-- Indexes for table `menarik_uang`
--
ALTER TABLE `menarik_uang`
  ADD KEY `menarikuangtransaksi` (`no_transaksi`),
  ADD KEY `menarikuangatm` (`no_mesin`),
  ADD KEY `menarikuangnasabah` (`rekening`);

--
-- Indexes for table `mentransfer`
--
ALTER TABLE `mentransfer`
  ADD KEY `mentransfertransaksi` (`no_transaksi`),
  ADD KEY `mentransfernasabah` (`rekening`),
  ADD KEY `mentransferatm` (`no_mesin`);

--
-- Indexes for table `nasabah`
--
ALTER TABLE `nasabah`
  ADD PRIMARY KEY (`rekening`);

--
-- Indexes for table `penarikan_uang`
--
ALTER TABLE `penarikan_uang`
  ADD KEY `penarikanuangtransaksi` (`no_transaksi`),
  ADD KEY `penarikanuangnasabah` (`rekening`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`kode_perusahaan`);

--
-- Indexes for table `perusahaan_jenis`
--
ALTER TABLE `perusahaan_jenis`
  ADD KEY `perusahaanjenistagihan` (`kode_perusahaan`),
  ADD KEY `jenistagihanperusahaan` (`jenis_tagihan`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`no_tagihan`),
  ADD KEY `tagihantransaksi` (`no_transaksi`),
  ADD KEY `tagihannasabah` (`rekening`),
  ADD KEY `tagihanperusahaan` (`kode_perusahaan`),
  ADD KEY `tagihanjenis` (`nama_jenis`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_transaksi`),
  ADD KEY `transaksinasabah` (`rekening`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD KEY `transfertransaksi` (`no_transaksi`),
  ADD KEY `transfernasabah` (`rekening`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atm`
--
ALTER TABLE `atm`
  MODIFY `no_mesin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenis_tagihan`
--
ALTER TABLE `jenis_tagihan`
  ADD CONSTRAINT `jenistagihankategoritagihan` FOREIGN KEY (`nama_kategori`) REFERENCES `kategori_tagihan` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membayar`
--
ALTER TABLE `membayar`
  ADD CONSTRAINT `membayaratm` FOREIGN KEY (`no_mesin`) REFERENCES `atm` (`no_mesin`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `membayarnasabah` FOREIGN KEY (`rekening`) REFERENCES `nasabah` (`rekening`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `membayartagihan` FOREIGN KEY (`no_tagihan`) REFERENCES `tagihan` (`no_tagihan`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `membayartransaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menarik_uang`
--
ALTER TABLE `menarik_uang`
  ADD CONSTRAINT `menarikuangatm` FOREIGN KEY (`no_mesin`) REFERENCES `atm` (`no_mesin`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `menarikuangnasabah` FOREIGN KEY (`rekening`) REFERENCES `nasabah` (`rekening`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `menarikuangtransaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mentransfer`
--
ALTER TABLE `mentransfer`
  ADD CONSTRAINT `mentransferatm` FOREIGN KEY (`no_mesin`) REFERENCES `atm` (`no_mesin`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mentransfernasabah` FOREIGN KEY (`rekening`) REFERENCES `nasabah` (`rekening`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mentransfertransaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penarikan_uang`
--
ALTER TABLE `penarikan_uang`
  ADD CONSTRAINT `penarikanuangnasabah` FOREIGN KEY (`rekening`) REFERENCES `nasabah` (`rekening`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `penarikanuangtransaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perusahaan_jenis`
--
ALTER TABLE `perusahaan_jenis`
  ADD CONSTRAINT `jenistagihanperusahaan` FOREIGN KEY (`jenis_tagihan`) REFERENCES `jenis_tagihan` (`nama_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `perusahaanjenistagihan` FOREIGN KEY (`kode_perusahaan`) REFERENCES `perusahaan` (`kode_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihanjenis` FOREIGN KEY (`nama_jenis`) REFERENCES `jenis_tagihan` (`nama_jenis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tagihannasabah` FOREIGN KEY (`rekening`) REFERENCES `nasabah` (`rekening`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tagihanperusahaan` FOREIGN KEY (`kode_perusahaan`) REFERENCES `perusahaan` (`kode_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tagihantransaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksinasabah` FOREIGN KEY (`rekening`) REFERENCES `nasabah` (`rekening`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `transfernasabah` FOREIGN KEY (`rekening`) REFERENCES `nasabah` (`rekening`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `transfertransaksi` FOREIGN KEY (`no_transaksi`) REFERENCES `transaksi` (`no_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
