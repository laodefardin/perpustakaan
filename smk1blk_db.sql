-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 08:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk1blk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ksp15`
--

CREATE TABLE `ksp15` (
  `id_ksp1` int(11) NOT NULL,
  `id_anggota` int(100) NOT NULL,
  `sdh_pokok` int(100) NOT NULL,
  `sdh_jasa` int(100) NOT NULL,
  `totpokok` varchar(100) NOT NULL,
  `totjasa` varchar(100) NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ksp15`
--

INSERT INTO `ksp15` (`id_ksp1`, `id_anggota`, `sdh_pokok`, `sdh_jasa`, `totpokok`, `totjasa`, `bulan`, `tahun`, `waktu`) VALUES
(14, 12, 150000, 15000, '300000', '30000', 'November', '2019', '11-05-2021 09:26:29'),
(15, 12, 150000, 15000, '450000', '45000', 'Desember', '2019', '11-05-2021 09:30:52'),
(16, 13, 150000, 15000, '150000', '15000', 'November', '2021', '11-05-2021 10:06:24'),
(17, 12, 150000, 15000, '150000', '15000', 'Oktober', '2019', '11-05-2021 09:24:09'),
(18, 12, 150000, 15000, '300000', '30000', 'November', '2019', '11-05-2021 09:26:29'),
(19, 12, 150000, 15000, '450000', '45000', 'Desember', '2019', '11-05-2021 09:30:52'),
(20, 13, 150000, 15000, '150000', '15000', 'November', '2021', '11-05-2021 10:06:24'),
(21, 12, 150000, 15000, '150000', '15000', 'Oktober', '2019', '11-05-2021 09:24:09'),
(22, 12, 150000, 15000, '300000', '30000', 'November', '2019', '11-05-2021 09:26:29'),
(23, 12, 150000, 15000, '450000', '45000', 'Desember', '2019', '11-05-2021 09:30:52'),
(24, 13, 150000, 15000, '150000', '15000', 'November', '2021', '11-05-2021 10:06:24'),
(25, 12, 150000, 15000, '150000', '15000', 'Oktober', '2019', '11-05-2021 09:24:09'),
(26, 12, 150000, 15000, '300000', '30000', 'November', '2019', '11-05-2021 09:26:29'),
(27, 12, 150000, 15000, '450000', '45000', 'Desember', '2019', '11-05-2021 09:30:52'),
(28, 13, 150000, 15000, '150000', '15000', 'November', '2021', '11-05-2021 10:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `nis` int(10) NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tempat_lahir` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('l','p') COLLATE latin1_general_ci NOT NULL,
  `kelas` enum('X','XI','XII') COLLATE latin1_general_ci NOT NULL,
  `username` varchar(500) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_anggota`
--

INSERT INTO `tb_anggota` (`nis`, `nama`, `tempat_lahir`, `tgl_lahir`, `jk`, `kelas`, `username`, `password`, `tgl_input`) VALUES
(2016210001, 'Andi Nurqamal Ady Putra', 'Bulukumba', '1996-02-01', 'l', 'XII', 'nurka', '96de4eceb9a0c2b9b52c0b618819821b', '2021-03-30 12:49:15'),
(2016210005, 'Nurfahmi Ahmad', 'Bulukumba', '1996-12-03', 'l', 'XI', 'fahmi', '96de4eceb9a0c2b9b52c0b618819821b', '2021-03-30 12:49:19'),
(2016210007, 'Yuliana', 'Bulukumba', '1996-07-05', 'p', '', 'yuli', '96de4eceb9a0c2b9b52c0b618819821b', '2021-04-18 07:21:13'),
(111232, 'Nama Sendiri', 'mam', '2021-06-10', 'l', 'XI', 'admin', '96de4eceb9a0c2b9b52c0b618819821b', '2021-06-10 05:47:10'),
(111232888, 'nuridil fitriidris', 'mamam', '2021-06-10', 'l', '', 'fardin1', 'd9cb37ef61610c0a2ccf8825373d92ce', '2021-06-10 05:48:02'),
(1112329999, 'LAODE Maa', 'mamam', '2021-06-10', 'l', 'X', 'fardinrikudou@yahoo.co.id', '96de4eceb9a0c2b9b52c0b618819821b', '2021-06-10 06:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `judul` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `pengarang` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `penerbit` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tahun_terbit` varchar(4) COLLATE latin1_general_ci NOT NULL,
  `isbn` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `jumlah_buku` int(11) NOT NULL,
  `lokasi` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `jumlah_buku`, `lokasi`, `tgl_input`) VALUES
(27, 'Bahasa Indonesia', 'Nurul Akhma', 'Erlangga', '2008', '1234556', 29, 'Rak 1', '2021-04-26 14:25:08'),
(28, 'TIK', 'Budi', 'Bumi Aksara', '1992', '1234576890', 48, 'Rak 1', '2021-04-26 14:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ebook`
--

CREATE TABLE `tb_ebook` (
  `id_ebook` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi`
--

CREATE TABLE `tb_lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lokasi`
--

INSERT INTO `tb_lokasi` (`id_lokasi`, `lokasi`) VALUES
(1, 'Rak 1'),
(4, 'Rak 2'),
(5, 'Rak 3'),
(6, 'Kabupaten Papalang, Provinsi Sulawesi Barat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `judul` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `nis` int(11) NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `tgl_pinjam` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tgl_kembali` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `status` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `id_buku`, `judul`, `nis`, `nama`, `tgl_pinjam`, `tgl_kembali`, `status`, `tgl_input`) VALUES
(384, 27, 'Bahasa Indonesia', 2016210007, 'Yuliana', '31-03-2021', '07-04-2021', 'Pinjam', '2021-03-31 11:38:37'),
(382, 27, 'Bahasa Indonesia', 2016210005, 'Nurfahmi Ahmad', '24-03-2021', '31-03-2021', 'Pinjam', '2021-03-24 13:41:38'),
(396, 27, 'Bahasa Indonesia', 2016210001, 'Andi Nurqamal Ady Putra', '26-04-2021', '03-05-2021', 'Pinjam', '2021-04-26 14:43:04'),
(393, 28, 'TIK', 2016210005, 'Nurfahmi Ahmad', '31-03-2021', '07-04-2021', 'Pinjam', '2021-04-18 07:15:39'),
(395, 28, 'TIK', 2016210007, 'Yuliana', '18-04-2021', '02-05-2021', 'Pinjam', '2021-04-26 14:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `level` enum('admin','user') COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(200) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`, `level`, `foto`) VALUES
(14, 'admin', '66b65567cedbc743bda3417fb813b9ba', 'Administrator', 'admin', 'download.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ksp15`
--
ALTER TABLE `ksp15`
  ADD PRIMARY KEY (`id_ksp1`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indexes for table `tb_ebook`
--
ALTER TABLE `tb_ebook`
  ADD PRIMARY KEY (`id_ebook`);

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
-- AUTO_INCREMENT for table `ksp15`
--
ALTER TABLE `ksp15`
  MODIFY `id_ksp1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tb_ebook`
--
ALTER TABLE `tb_ebook`
  MODIFY `id_ebook` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_lokasi`
--
ALTER TABLE `tb_lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=397;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
