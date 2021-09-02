-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 05:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtera`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat`
--

CREATE TABLE `alat` (
  `id_alat` int(20) NOT NULL,
  `nama_alat` varchar(20) CHARACTER SET latin1 NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alat`
--

INSERT INTO `alat` (`id_alat`, `nama_alat`, `gambar`) VALUES
(5, 'Timbangan Duduk', '1892241146_TIMBANGAN DUDUK.jpg'),
(6, 'Timbangan Menja', '290436757_TIMBANGAN MEJA.jpg'),
(7, 'Timbangan Dacin', '1782458830_TIMBANGAN DACIN.jpg'),
(8, 'Timbangan Sentimal', '903723924_TIMBANGAN SENTIMAL.jpg'),
(9, 'Timbangan Elektronik', '111733164_TIMBANGAN ELEKTRONIK.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `tempat` varchar(20) CHARACTER SET latin1 NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `tanggal`, `tempat`, `gambar`, `keterangan`) VALUES
(20, '2021-03-22', 'Japan', '2144750765_shutterstock_1017748132-L.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(21, '2021-03-22', 'Korea', '348136903_139256_SouthKoreaarticle.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(23, '2021-03-23', 'Prance', '190015085_Manfaat-KUR-Bagi-Petani.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(24, '2021-03-23', 'Pasar Banjaran', '1013125894_1896347857_2.png', 'Kami Melakukan Obserpasi Mengenai perkembangan Pasar Modern Bersama Dinas KUMKM Kota Banjar '),
(25, '2021-03-23', 'UPTD banjar', '842510483_1358174812_924451109_cek neraca tera.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pemeriksaan`
--

CREATE TABLE `tbl_pemeriksaan` (
  `no` int(30) NOT NULL,
  `kode_pemilik` int(30) NOT NULL,
  `tgl_pengecekan_awal` varchar(20) NOT NULL,
  `tgl_pengecekan_akhir` varchar(20) NOT NULL,
  `nama_pemilik` varchar(10) NOT NULL,
  `nm_pemeriksa` varchar(30) NOT NULL,
  `kekuatan` int(20) NOT NULL,
  `hasil` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pemeriksaan`
--

INSERT INTO `tbl_pemeriksaan` (`no`, `kode_pemilik`, `tgl_pengecekan_awal`, `tgl_pengecekan_akhir`, `nama_pemilik`, `nm_pemeriksa`, `kekuatan`, `hasil`) VALUES
(1, 72, '22-04-2021', '22-05-2021', 'SUKAESIH1', 'DADANG MULYANA', 50, 50),
(2, 72, '22-04-2021', '22-03-2021', 'SUKAESIH1', 'DADANG MULYANA', 50, 80),
(3, 74, '22-04-2021', '22-05-2021', 'DEDEVIRAWA', 'GUGUN GUNAWAN', 50, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengecekan`
--

CREATE TABLE `tbl_pengecekan` (
  `no` int(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `nm_petugas` varchar(20) NOT NULL,
  `nm_pemilik` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `jenisuttp` varchar(20) NOT NULL,
  `standar_kekuatan` varchar(20) NOT NULL,
  `noseri` int(20) NOT NULL,
  `hasil_pengecekan` int(20) NOT NULL,
  `kualitas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengecekan`
--

INSERT INTO `tbl_pengecekan` (`no`, `tanggal`, `nm_petugas`, `nm_pemilik`, `alamat`, `jenisuttp`, `standar_kekuatan`, `noseri`, `hasil_pengecekan`, `kualitas`) VALUES
(72, '2021-03-22', 'DADANG MULYANA', 'SUKAESIH', 'Tasikmalaya', 'Timbangan', '50', 50, 52, ''),
(74, '2021-03-23', 'GUGUN GUNAWAN', 'DEDEVIRAWAN', 'TASIKMALAYA', 'TIMBANGAN', '50', 511555, 20, ''),
(76, '2021-03-23', 'GUGUN GUNAWAN', 'SUGIONO', 'TOKYO', 'TIMBANGAN', '50', 5221555, 50, ''),
(85, '2020-04-18', 'SUDRAJAT', 'GILANG HERMAWAN', 'CISAYONG', 'timbangan digital', '50', 88888, 30, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_petugas`
--

CREATE TABLE `tbl_petugas` (
  `tanggal_input` varchar(20) NOT NULL,
  `kode_petugas` varchar(30) NOT NULL,
  `nm_petugas` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_petugas`
--

INSERT INTO `tbl_petugas` (`tanggal_input`, `kode_petugas`, `nm_petugas`, `alamat`, `gender`, `telp`, `jabatan`) VALUES
('22-04-2021', 'PTG002', 'DEDEN SUDRAJAT', 'CIHAURBEUTI', 'Perempuan', '(+62)87765443221', 'SEKERTARIS'),
('22-04-2021', 'PTG003', 'RESTU NURAZIZAH', 'CIKALONG', 'Perempuan', '(+62)8765342211', 'ANGGOTA'),
('22-04-2021', 'PTG004', 'GILANG PERMATA', 'CILACAP', 'Laki - Laki', '(+62)87556447332', 'ANGGOTA'),
('22-04-2021', 'PTG005', 'KURNIAWAN', 'CIMAHI', 'Laki - Laki', '(+62)89776556777', 'KAPTEN'),
('22-04-2021', 'PTG006', 'SUGIONO', 'JAPAN', 'Laki - Laki', '(+62)8923772777', 'KETUA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Julia Refoliani', 'admin', 'admin123', 'admin'),
(2, 'Julia ', 'Julia', 'Refoliani', 'admin');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_informasi`
-- (See below for the actual view)
--
CREATE TABLE `view_informasi` (
`kode_pemilik` int(30)
,`tanggal` varchar(20)
,`nm_petugas` varchar(20)
,`nm_pemilik` varchar(20)
,`alamat` text
,`jenisuttp` varchar(20)
,`standar_kekuatan` varchar(20)
,`noseri` int(20)
,`hasil_pengecekan` int(20)
,`kualitas` varchar(10)
,`tgl_pengecekan_awal` varchar(20)
,`tgl_pengecekan_akhir` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pemeriksaan`
-- (See below for the actual view)
--
CREATE TABLE `view_pemeriksaan` (
`kode_pemilik` int(30)
,`tanggal` varchar(20)
,`nm_petugas` varchar(20)
,`nm_pemilik` varchar(20)
,`alamat` text
,`jenisuttp` varchar(20)
,`standar_kekuatan` varchar(20)
,`noseri` int(20)
,`hasil_pengecekan` int(20)
,`kualitas` varchar(10)
,`tgl_pengecekan_awal` varchar(20)
,`tgl_pengecekan_akhir` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `view_informasi`
--
DROP TABLE IF EXISTS `view_informasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_informasi`  AS  select `bencana`.`kode_pemilik` AS `kode_pemilik`,`info`.`tanggal` AS `tanggal`,`info`.`nm_petugas` AS `nm_petugas`,`info`.`nm_pemilik` AS `nm_pemilik`,`info`.`alamat` AS `alamat`,`info`.`jenisuttp` AS `jenisuttp`,`info`.`standar_kekuatan` AS `standar_kekuatan`,`info`.`noseri` AS `noseri`,`info`.`hasil_pengecekan` AS `hasil_pengecekan`,`info`.`kualitas` AS `kualitas`,`bencana`.`tgl_pengecekan_awal` AS `tgl_pengecekan_awal`,`bencana`.`tgl_pengecekan_akhir` AS `tgl_pengecekan_akhir` from (`tbl_pengecekan` `info` join `tbl_pemeriksaan` `bencana`) where `info`.`no` = `bencana`.`kode_pemilik` ;

-- --------------------------------------------------------

--
-- Structure for view `view_pemeriksaan`
--
DROP TABLE IF EXISTS `view_pemeriksaan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pemeriksaan`  AS  select `bencana`.`kode_pemilik` AS `kode_pemilik`,`info`.`tanggal` AS `tanggal`,`info`.`nm_petugas` AS `nm_petugas`,`info`.`nm_pemilik` AS `nm_pemilik`,`info`.`alamat` AS `alamat`,`info`.`jenisuttp` AS `jenisuttp`,`info`.`standar_kekuatan` AS `standar_kekuatan`,`info`.`noseri` AS `noseri`,`info`.`hasil_pengecekan` AS `hasil_pengecekan`,`info`.`kualitas` AS `kualitas`,`bencana`.`tgl_pengecekan_awal` AS `tgl_pengecekan_awal`,`bencana`.`tgl_pengecekan_akhir` AS `tgl_pengecekan_akhir` from (`tbl_pengecekan` `info` join `tbl_pemeriksaan` `bencana`) where `info`.`no` = `bencana`.`kode_pemilik` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indexes for table `tbl_pemeriksaan`
--
ALTER TABLE `tbl_pemeriksaan`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_pengecekan`
--
ALTER TABLE `tbl_pengecekan`
  ADD PRIMARY KEY (`no`) USING BTREE;

--
-- Indexes for table `tbl_petugas`
--
ALTER TABLE `tbl_petugas`
  ADD PRIMARY KEY (`kode_petugas`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat`
--
ALTER TABLE `alat`
  MODIFY `id_alat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_pemeriksaan`
--
ALTER TABLE `tbl_pemeriksaan`
  MODIFY `no` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pengecekan`
--
ALTER TABLE `tbl_pengecekan`
  MODIFY `no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
