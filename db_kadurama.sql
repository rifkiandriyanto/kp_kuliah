-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 04 Des 2017 pada 11.23
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_kadurama`
--
CREATE DATABASE IF NOT EXISTS `db_kadurama` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_kadurama`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE IF NOT EXISTS `penduduk` (
  `nik` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `kwrg` varchar(50) NOT NULL,
  PRIMARY KEY (`nik`),
  KEY `nik` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `nama`, `tempat`, `jenis_kelamin`, `alamat`, `agama`, `status`, `pekerjaan`, `kwrg`) VALUES
(342343, 'wfsdfsfd', 'dfsdf', 'sfdsdfsdf', 'sdffsdf', 'fsDFSDF', 'DFSDFDSF', 'SDSDFDSF', 'SDFSDFSDF'),
(2147483647, 'Rifk', 'indramayu, 19-08-1996', 'Laki-laki', 'indramayu', 'islam', 'belum menikah', 'mahasiswa', 'indonesia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
