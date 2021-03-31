-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 01:56 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smk1blk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE IF NOT EXISTS `tb_anggota` (
  `nis` int(10) NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') COLLATE latin1_general_ci NOT NULL,
  `kelas` enum('X','XI','XII') COLLATE latin1_general_ci NOT NULL,
  `username` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `kelas`, `username`, `password`, `tgl_input`) VALUES
(2016210001, 'Andi Nurqamal Ady Putra', 'Bulukumba', '1996-02-01', 'l', 'XII', 'nurka', '96de4eceb9a0c2b9b52c0b618819821b', '2021-03-30 12:49:15'),
(2016210005, 'Nurfahmi Ahmad', 'Bulukumba', '1996-12-03', 'l', 'XI', 'fahmi', '96de4eceb9a0c2b9b52c0b618819821b', '2021-03-30 12:49:19'),
(2016210007, 'Yuliana', 'Bulukumba', '1996-07-05', 'p', 'X', 'yuli', '96de4eceb9a0c2b9b52c0b618819821b', '2021-03-30 12:49:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
`id_buku` int(11) NOT NULL,
  `judul` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `pengarang` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `penerbit` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tahun_terbit` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `isbn` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `lokasi` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(27, 'Bahasa Indonesia', 'Nurul Akhma', 'Erlangga', '2008', '1234556', 1, 'Rak 2', '2021-03-31 11:40:55'),
(28, 'TIK', 'Budi', 'Bumi Aksara', '1992', '1234576890', 0, 'Rak 1', '2021-03-25 16:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE IF NOT EXISTS `tb_lokasi` (
`id_lokasi` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `lokasi`) VALUES
(1, 'Rak 1'),
(4, 'Rak 2'),
(5, 'Rak 3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
`id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `judul` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tgl_pinjam` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tgl_kembali` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=386 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_buku`, `judul`, `nis`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`, `tgl_input`) VALUES
(384, 27, 'Bahasa Indonesia', 2016210007, 'Yuliana', '31-03-2021', '07-04-2021', 'Pinjam', '2021-03-31 11:38:37'),
(382, 27, 'Bahasa Indonesia', 2016210005, 'Nurfahmi Ahmad', '24-03-2021', '31-03-2021', 'Pinjam', '2021-03-24 13:41:38'),
(383, 28, 'TIK', 2016210001, 'Andi Nurqamal Ady Putra', '25-03-2021', '01-04-2021', 'Pinjam', '2021-03-25 16:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id` int(11) NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `level` enum('admin','user') COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(14, 'admin', '66b65567cedbc743bda3417fb813b9ba', 'Administrator', 'admin', 'download.png'),
(12, 'nurqa', '96de4eceb9a0c2b9b52c0b618819821b', 'Andi Nurqamal Ady Putra', 'admin', 'download.png'),
(13, 'andy', '96de4eceb9a0c2b9b52c0b618819821b', 'Andi Nurqamal Ady Putra', 'user', 'download.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
 ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
 ADD PRIMARY KEY (`id_buku`), ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indexes for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
 ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=386;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
