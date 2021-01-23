-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 08:26 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbpenduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datapenduduk`
--

CREATE TABLE IF NOT EXISTS `tbl_datapenduduk` (
  `nik` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tmpt_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kel` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pendidikan` varchar(40) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_datapenduduk`
--

INSERT INTO `tbl_datapenduduk` (`nik`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jns_kel`, `alamat`, `agama`, `pendidikan`, `pekerjaan`) VALUES
('N001', 'Butet', 'Kisaran', '2020-12-12', 'Perempuan', 'Pasar Lembu', 'Kristen', 'SMK', 'Belum Bekerja'),
('N003', 'Nuriati Sirait', 'Medan', '2020-03-03', 'Perempuan', 'Jln. Sudirman', 'Islam', 'SMA', 'Mahasiswa'),
('N005', 'Rudi', 'Binjai', '2020-06-06', 'Laki-Laki', 'Jln. Cipto', 'Islam', 'SLTA', 'Belum Bekerja'),
('N006', 'Farhan', 'Palembang', '2017-10-10', 'Laki-Laki', 'Jln.Durian, No 12', 'Budha', 'SMP', 'Belum Bekerja'),
('N007', 'Rani', 'Malaysia', '2018-02-02', 'Perempuan', 'Jln. Cinta, No 01', 'Islam', 'SMA', 'Ibu Rumah Tangga'),
('N008', 'Juli', 'Silau Bonto', '2019-11-11', 'Perempuan', 'Silau Laut', 'Islam', 'SLTA', 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kartukeluarga`
--

CREATE TABLE IF NOT EXISTS `tbl_kartukeluarga` (
  `no_kk` varchar(30) NOT NULL,
  `nm_kpla_keluarga` varchar(30) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `kelurahan` varchar(20) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kode_pos` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kartukeluarga`
--

INSERT INTO `tbl_kartukeluarga` (`no_kk`, `nm_kpla_keluarga`, `alamat`, `kelurahan`, `kecamatan`, `kode_pos`) VALUES
('K001', 'Tami', 'Bali', 'Bunut Sebrang', 'Kuala Hulu', '32912'),
('K002', 'Luna Maya', 'Kisaran', 'Kisaran', 'Air Joman', '72312'),
('K003', 'Surani', 'Jln.Durian, No 09', 'Binjai Serbangan', 'Air Joman', '12112'),
('K004', 'Andira', 'Silau Laut', 'Silau Laut', 'Air Joman', '87612'),
('K005', 'Rusmansyah', 'Tapanuli', 'Deli Serdang', 'Sungai Rambe', '32231'),
('K006', 'Lalalala', 'Jln. Mangga', 'Kisaran Barat', 'Sungai Rambe', '12335');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ktp`
--

CREATE TABLE IF NOT EXISTS `tbl_ktp` (
  `no_urut` varchar(30) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `jenis_permohonan` varchar(40) NOT NULL,
  `nik_ktp` varchar(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ktp`
--

INSERT INTO `tbl_ktp` (`no_urut`, `tgl_permohonan`, `jenis_permohonan`, `nik_ktp`, `nama`, `alamat`) VALUES
('P001', '2021-01-15', 'Tidak Puas', 'N001', 'Akila Azahra', 'Pranggan Psr Baru'),
('P002', '2020-10-12', 'Baik', 'N002', 'Lelly Suranti', 'Jakarta'),
('P003', '2020-12-12', 'Cukup', 'N003', 'Jumari', 'Surabaya'),
('P004', '2019-04-01', 'Sangat Baik', 'N004', 'Tantri', 'Pasar Lembu'),
('P005', '2021-01-02', 'Kurang Puas', 'N005', 'Naya', 'Sentang'),
('P006', '2020-10-12', 'Baik', 'N006', 'Momo', 'Silau Laut');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  `ket` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `level`, `ket`, `email`, `nama`) VALUES
('datapendudukdesaabc', '21232f297a57a5a743894a0e4a801fc3', '1', 'Staff Data Penduduk', 'datapenduduk781@gmai', 'Sri Damai Yanti');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_datapenduduk`
--
ALTER TABLE `tbl_datapenduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tbl_kartukeluarga`
--
ALTER TABLE `tbl_kartukeluarga`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indexes for table `tbl_ktp`
--
ALTER TABLE `tbl_ktp`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
