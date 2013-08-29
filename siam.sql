-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2013 at 11:55 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE IF NOT EXISTS `tbl_artikel` (
  `id_artikel` int(5) NOT NULL AUTO_INCREMENT,
  `tanggal_publish` date DEFAULT NULL,
  `penulis` varchar(50) DEFAULT NULL,
  `judul_berita` varchar(200) DEFAULT NULL,
  `isi_berita` text,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cln_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_cln_mahasiswa` (
  `id_daftar` int(5) NOT NULL AUTO_INCREMENT,
  `tanggal_daftar` date DEFAULT NULL,
  `nama_pendaftar` varchar(75) DEFAULT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `status` varchar(35) DEFAULT NULL,
  `lulusan_sekolah` varchar(75) DEFAULT NULL,
  `tahun_ajaran` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pekerjaan` varchar(120) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kelurahan` varchar(45) DEFAULT NULL,
  `kecamatan` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `provinsi` varchar(45) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `website` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE IF NOT EXISTS `tbl_komentar` (
  `id_komentar` int(5) NOT NULL AUTO_INCREMENT,
  `id_berita_kampus` int(5) DEFAULT NULL,
  `tanggal_komentar` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `nama` varchar(75) DEFAULT NULL,
  `isi_komentar` text,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhsiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_mhsiswa` (
  `id_mahasiswa` int(5) NOT NULL AUTO_INCREMENT,
  `nama_mahasiswa` varchar(75) DEFAULT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `status` varchar(35) DEFAULT NULL,
  `jurusan` varchar(75) DEFAULT NULL,
  `nim` int(15) DEFAULT NULL,
  `lulusan_sekolah` varchar(75) DEFAULT NULL,
  `tahun_ajaran` varchar(30) DEFAULT NULL,
  `pekerjaan` varchar(75) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kelurahan` varchar(45) DEFAULT NULL,
  `kecamatan` varchar(45) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `provinsi` varchar(75) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `website` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id_mahasiswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai_mahasiswa`
--

CREATE TABLE IF NOT EXISTS `tbl_nilai_mahasiswa` (
  `id_nilai` int(5) NOT NULL AUTO_INCREMENT,
  `nim` int(20) DEFAULT NULL,
  `mata_kuliah` varchar(50) DEFAULT NULL,
  `nilai_mahasiswa` varchar(3) DEFAULT NULL,
  `dosen_mata_kuliah` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(2, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_profile`
--

CREATE TABLE IF NOT EXISTS `tbl_user_profile` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(75) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jns_kelamin` varchar(15) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `kelurahan` varchar(75) DEFAULT NULL,
  `kecamatan` varchar(75) DEFAULT NULL,
  `kota` varchar(75) DEFAULT NULL,
  `provinsi` varchar(75) DEFAULT NULL,
  `telp` varchar(50) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `website` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
