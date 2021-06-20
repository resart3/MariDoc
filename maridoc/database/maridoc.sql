-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Des 2019 pada 16.20
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nip` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nip`, `password`, `nama`) VALUES
('1', '1', 'adam'),
('10', '10', 'jaim'),
('2', '2', 'bejo'),
('3', '3', 'cindi'),
('4', '4', 'dea'),
('5', '5', 'endro'),
('6', '6', 'fega'),
('7', '7', 'gian'),
('8', '8', 'haji'),
('9', '9', 'ijam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `username_c` varchar(20) DEFAULT NULL,
  `username_d` varchar(20) DEFAULT NULL,
  `pesan_c` varchar(200) NOT NULL,
  `pesan_d` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`username_c`, `username_d`, `pesan_c`, `pesan_d`) VALUES
('c', 'a', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'a', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'a', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'a', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'a', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'a', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'a', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'a', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'a', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'a', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'b', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'c', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'c', 'assalamuallaikum dokter', 'lapo'),
('muzakkialfarisi', 'a', '', ''),
('muzakkialfarisi', 'a', 'dokter', ''),
('muzakkialfarisi', 'a', ':(', ''),
('a', 'a', 'woi', ''),
('a', 'a', 'haloo', ''),
('c', 'a', '', ''),
('c', 'a', '', 'halo'),
('c', 'a', '', 'halo'),
('c', 'a', '', 'pie'),
('c', 'a', '', 'pie'),
('c', 'a', '', 'pie'),
('muzakkialfarisi', 'c', 'gapopo', ''),
('a', 'a', '', 'halo'),
('a', 'a', '', 'huhu'),
('a', 'a', '', 'yuhuu'),
('k', 'c', 'yuhuuu', ''),
('k', 'c', 'pak dokter', ''),
('k', 'c', 'oi', ''),
('muzakkialfarisi', 'd', 'assalamuallaikum', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `username_c` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `saldo` int(7) DEFAULT NULL,
  `no_rek` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`username_c`, `password`, `nama`, `alamat`, `jk`, `tgl_lahir`, `tempat_lahir`, `saldo`, `no_rek`) VALUES
('a', 'a', 'a', 'a', 'l', '0000-00-00', '', -16768, '12'),
('b', 'b', 'b', 'b', 'l', '0000-00-00', '', 100000, '13'),
('c', 'c', 'c', 'c', 'l', '0000-00-00', '', 100000, '23'),
('d', 'd', 'd', 'd', 'l', '0000-00-00', '', 100000, '34'),
('danu', 'danu', 'danu', 'danu', 'P', '2019-11-13', 'danu', NULL, NULL),
('e', 'e', 'e', 'e', 'l', '0000-00-00', '', 100000, '43'),
('f', 'f', 'f', 'f', 'l', '0000-00-00', '', 100000, '655'),
('g', 'g', 'g', 'g', 'l', '0000-00-00', '', 100000, '33'),
('h', 'h', 'h', 'h', 'l', '0000-00-00', '', 100000, '343'),
('hehe', 'hehe', 'hehe', 'hehe', 'L', '0012-12-09', 'hehe', NULL, NULL),
('i', 'i', 'i', 'i', 'l', '0000-00-00', '', 100000, '555'),
('j', 'j', 'j', 'j', 'l', '0000-00-00', '', 100000, '3433'),
('k', 'kk', 'k', 'k', 'L', '2019-11-06', 'k', 82800, NULL),
('ksdnosng', '274745', 'p', 'kns', 'L', '2019-11-07', 'jakarta', NULL, NULL),
('l', 'll', 'l', 'l', 'L', '2019-10-10', 'l', 100000, NULL),
('muzakkialfarisi', 'muzakkialfarisi', 'Muzakki Ahmad Al Farisi', 'Pemalang', 'L', '1999-07-10', 'Pemalang', 80388, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `username_d` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_ijin_prak` varchar(20) NOT NULL,
  `gelar` varchar(20) NOT NULL,
  `ket_gelar` varchar(30) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `jk` char(1) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`username_d`, `password`, `nama`, `no_ijin_prak`, `gelar`, `ket_gelar`, `alamat`, `jk`, `ttl`, `photo`) VALUES
('c', 'c', 'cahyadi sugono', '3', 'dr', 'dokter umum', 'c', 'l', '0000-00-00', ''),
('d', 'd', 'dandang sudirman', '4', 'drg', 'dokter gigi', 'd', 'l', '2019-11-11', ''),
('e', 'e', 'endang suyitno', '5', 'dr', 'dokter umum', 'e', 'l', '0000-00-00', ''),
('g', 'g', 'gagah sudarjo', '7', 'drg', 'dokter gigi', 'g', 'l', '0000-00-00', ''),
('h', 'h', 'halimatus sadiyah', '8', 'dr', 'dokter umum', 'h', 'l', '0000-00-00', ''),
('haha', 'wkwk', 'Sukiman', '90', 'drg', 'dokter umum', 'bojong', 'P', '2019-11-09', ''),
('hey', 'hehe', 'Muzakki Ahmad Al Farisi', '30', 'dr', 'dokter umum', 'pemalang', 'L', '2019-11-05', ''),
('wukwuk', 'a', 'meme', '12', 'dr', 'dokter umum', 'pemalang', 'L', '0010-10-10', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `kode_obat` varchar(10) NOT NULL,
  `nama_obat` varchar(20) NOT NULL,
  `katagori` varchar(10) NOT NULL,
  `harga_obat` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `katagori`, `harga_obat`) VALUES
('199', 'lele', 'luar', 1212),
('2', 'b', 'dalam', 2000),
('3', 'c', 'dalam', 2000),
('4', 'd', 'luar', 2000),
('5', 'e', 'luar', 2000),
('6', 'f', 'luar', 2000),
('7', 'g', 'dalam', 2000),
('8', 'h', 'dalam', 2000),
('9', 'i', 'luar', 2000),
('909', '90', 'luar', 9090),
('a300', 'ultramexx', 'luar', 900),
('fsfs', 'fqwf', 'luar', 11333),
('huhu', 'extra', 'dalam', 10000),
('wkwk', 'wkwkw', 'dalam', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `kode_obat` varchar(10) DEFAULT NULL,
  `username_c` varchar(20) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_obat`, `username_c`, `status`) VALUES
(1, '1', 'muzakkialfarisi', 'lunas'),
(2, '1', 'k', 'lunas'),
(3, '2', 'k', 'lunas'),
(4, '10', 'k', 'lunas'),
(5, '3', 'k', 'lunas'),
(6, '3', 'k', 'lunas'),
(7, '12', 'k', 'lunas'),
(8, '11', 'muzakkialfarisi', 'lunas'),
(9, '10', 'muzakkialfarisi', 'lunas'),
(11, '12', 'muzakkialfarisi', 'lunas'),
(12, '11', 'muzakkialfarisi', 'lunas'),
(13, '3', 'muzakkialfarisi', 'lunas'),
(14, '1', 'muzakkialfarisi', 'lunas'),
(15, '1', 'muzakkialfarisi', 'lunas'),
(16, '10', 'muzakkialfarisi', 'lunas'),
(17, '12', 'muzakkialfarisi', 'lunas'),
(18, '1', 'muzakkialfarisi', 'lunas'),
(19, '10', 'muzakkialfarisi', 'lunas'),
(20, '1', 'muzakkialfarisi', 'lunas'),
(21, '1', 'a', 'lunas'),
(22, '10', 'a', 'lunas'),
(23, '1', 'muzakkialfarisi', 'lunas'),
(24, '1', 'muzakkialfarisi', 'lunas'),
(25, '1', 'muzakkialfarisi', 'lunas'),
(26, '12', 'muzakkialfarisi', 'lunas'),
(27, '2', 'muzakkialfarisi', 'lunas'),
(28, '3', 'muzakkialfarisi', 'lunas'),
(30, '1', 'a', 'lunas'),
(31, '1', 'a', 'lunas'),
(32, '1', 'a', 'lunas'),
(33, '1', 'a', 'lunas'),
(34, '1', 'a', 'lunas'),
(35, '1', 'a', 'lunas'),
(36, '1', 'a', 'lunas'),
(38, '1', 'b', 'lunas'),
(39, '1', 'c', 'lunas'),
(40, '1', 'c', 'lunas'),
(41, '10', 'c', 'lunas'),
(42, '12', 'c', 'lunas'),
(43, '1', 'c', 'lunas'),
(44, '10', 'c', 'lunas'),
(45, '1', 'c', ''),
(46, '10', 'c', ''),
(47, '12', 'c', ''),
(48, '1', 'muzakkialfarisi', 'lunas'),
(49, '10', 'muzakkialfarisi', 'lunas'),
(51, '12', 'muzakkialfarisi', 'lunas'),
(52, '11', 'muzakkialfarisi', 'lunas'),
(53, '12', 'muzakkialfarisi', 'lunas'),
(54, '1', 'k', 'lunas'),
(55, '10', 'k', 'lunas'),
(56, '11', 'k', 'lunas'),
(60, '1', 'a', 'lunas'),
(61, '10', 'a', 'lunas'),
(62, '12', 'a', 'lunas'),
(63, '1', 'a', 'lunas'),
(64, '11', 'k', 'lunas'),
(65, '10', 'k', 'lunas'),
(66, '11', 'k', 'lunas'),
(67, '11', 'k', 'lunas'),
(68, '10', 'k', 'lunas'),
(69, '11', NULL, ''),
(70, '10', NULL, ''),
(71, '10', NULL, ''),
(72, '10', NULL, ''),
(73, '10', NULL, ''),
(74, '2', NULL, ''),
(75, '3', NULL, ''),
(76, '10', 'muzakkialfarisi', 'lunas'),
(77, '11', 'muzakkialfarisi', 'lunas'),
(78, '3', 'muzakkialfarisi', 'lunas'),
(79, '1', 'k', ''),
(80, '11', 'a', 'lunas'),
(81, '11', 'a', 'lunas'),
(82, '1', 'a', 'lunas'),
(83, '1', 'a', 'lunas'),
(84, '1', 'a', 'lunas'),
(85, '1', 'a', 'lunas'),
(86, '12', 'k', ''),
(87, '199', 'k', ''),
(88, '12', 'a', 'lunas'),
(89, '199', 'a', 'lunas'),
(90, '2', 'a', 'lunas'),
(91, '199', 'a', 'lunas'),
(92, 'huhu', 'a', 'lunas'),
(93, 'huhu', 'a', 'lunas'),
(94, 'huhu', 'a', 'lunas'),
(95, 'huhu', 'a', 'lunas'),
(96, 'fsfs', 'a', 'lunas'),
(97, 'fsfs', 'a', 'lunas'),
(98, 'fsfs', 'a', 'lunas'),
(99, 'fsfs', 'a', 'lunas'),
(101, '199', 'a', 'lunas'),
(102, '2', 'a', 'lunas'),
(103, '199', 'muzakkialfarisi', 'lunas'),
(104, '2', 'muzakkialfarisi', 'lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_login`
--

CREATE TABLE `riwayat_login` (
  `id_login` int(11) NOT NULL,
  `username_c` varchar(20) DEFAULT NULL,
  `username_d` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_login`
--

INSERT INTO `riwayat_login` (`id_login`, `username_c`, `username_d`) VALUES
(1, 'muzakkialfarisi', NULL),
(2, NULL, 'a'),
(3, 'a', NULL),
(4, NULL, 'a'),
(5, NULL, 'b'),
(6, NULL, 'c'),
(7, NULL, 'd'),
(8, NULL, 'a'),
(9, 'muzakkialfarisi', NULL),
(10, 'k', NULL),
(11, 'muzakkialfarisi', NULL),
(12, 'muzakkialfarisi', NULL),
(13, NULL, 'a'),
(14, 'a', NULL),
(15, NULL, 'a'),
(16, 'k', NULL),
(17, NULL, 'a'),
(18, 'k', NULL),
(19, NULL, 'a'),
(20, 'k', NULL),
(21, NULL, 'a'),
(22, 'danu', NULL),
(23, 'k', NULL),
(24, NULL, 'a'),
(25, 'muzakkialfarisi', NULL),
(26, 'k', NULL),
(27, 'a', NULL),
(28, 'a', NULL),
(29, NULL, 'a'),
(30, 'k', NULL),
(31, 'a', NULL),
(32, 'k', NULL),
(33, NULL, 'a'),
(34, NULL, 'a'),
(35, 'a', NULL),
(36, 'muzakkialfarisi', NULL),
(37, NULL, 'a'),
(38, 'muzakkialfarisi', NULL),
(39, NULL, 'a'),
(40, NULL, 'd'),
(41, NULL, 'a');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username_c`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`username_d`);

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `riwayat_login`
--
ALTER TABLE `riwayat_login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT untuk tabel `riwayat_login`
--
ALTER TABLE `riwayat_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
