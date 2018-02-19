-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Feb 2018 pada 14.42
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logindulu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id` int(10) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL,
  `dari` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL,
  `idtransport` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id`, `jam`, `tanggal`, `dari`, `tujuan`, `harga`, `idtransport`) VALUES
(30, '11:00:00', '2018-03-03', 'jakarta', 'bali', 600000, 5),
(47, '12:00:00', '2018-03-03', 'jayapura', 'sabang', 4700000, 2),
(48, '12:15:00', '2018-03-03', 'bandung', 'merauke', 2000000, 3),
(57, '01:45:00', '2018-03-03', 'palembang', 'medan', 500000, 4),
(58, '07:15:00', '2018-03-03', 'bandung', 'palembang', 600000, 3),
(59, '03:15:00', '2018-03-03', 'yogyakarta', 'palembang', 1000000, 5),
(60, '10:45:00', '2018-03-03', 'yogyakarta', 'jakarta', 600000, 2),
(61, '06:45:00', '2018-03-03', 'yogyakarta', 'medan', 1300000, 4),
(62, '17:15:00', '2018-03-03', 'jakarta', 'balikpapan', 850000, 2),
(63, '18:00:00', '2018-03-03', 'yogyakarta', 'surabaya', 750000, 3),
(64, '22:30:00', '2018-03-03', 'jakarta', 'kendari', 900000, 4),
(65, '10:30:00', '2018-03-03', 'bandung', 'pontianak', 750000, 3),
(66, '15:30:00', '2018-03-03', 'bandung', 'medan', 650000, 4),
(67, '20:00:00', '2018-03-03', 'jakarta', 'balikpapan', 850000, 2),
(68, '15:00:00', '2018-03-03', 'jakarta', 'balikpapan', 900000, 5),
(70, '08:45:00', '2018-03-03', 'bali', 'medan', 1200000, 4),
(71, '03:30:00', '2018-03-03', 'palembang', 'bali', 650000, 4),
(72, '20:30:00', '2018-03-03', 'palembang', 'bali', 600000, 3),
(74, '18:30:00', '2018-03-03', 'palembang', 'bali', 450000, 3),
(76, '16:15:00', '2018-03-03', 'palembang', 'bali', 500000, 2),
(77, '21:00:00', '2018-03-03', 'palembang', 'bali', 580000, 5),
(78, '11:45:00', '2018-03-03', 'bali', 'jakarta', 700000, 3),
(79, '04:45:00', '2018-03-03', 'jakarta', 'palembang', 400000, 1),
(80, '19:00:00', '2018-03-03', 'jakarta', 'palembang', 380000, 2),
(81, '09:15:00', '2018-03-03', 'jakarta', 'palembang', 500000, 3),
(82, '07:30:00', '2018-03-03', 'yogyakarta', 'palembang', 800000, 1),
(83, '10:45:00', '2018-03-03', 'cilacap', 'semarang', 400000, 2),
(84, '04:45:00', '2018-03-03', 'bandung', 'semarang', 310000, 4),
(86, '08:15:00', '2018-03-03', 'cilacap', 'semarang', 350000, 3),
(87, '07:45:00', '2018-03-03', 'semarang', 'yogyakarta', 340000, 6),
(88, '18:30:00', '2018-03-03', 'cilacap', 'semarang', 290000, 2),
(89, '15:00:00', '2018-03-03', 'kendari', 'jakarta', 800000, 4),
(90, '11:00:00', '2018-03-03', 'palembang', 'jakarta', 1000000, 4),
(91, '14:00:00', '2018-03-03', 'kendari', 'jakarta', 1100000, 1),
(92, '12:30:00', '2018-03-03', 'jakarta', 'kendari', 950000, 1),
(93, '14:00:00', '2018-03-03', 'jakarta', 'kendari', 8500000, 2),
(94, '19:00:00', '2018-03-03', 'semarang', 'palembang', 700000, 8),
(96, '18:00:00', '2018-03-03', 'semarang', 'palembang', 750000, 7),
(97, '13:00:00', '2018-03-03', 'semarang', 'palembang', 780000, 1),
(98, '20:15:00', '2018-03-03', 'palembang', 'semarang', 900000, 5),
(99, '12:15:00', '2018-03-03', 'palembang', 'semarang', 880000, 1),
(100, '09:45:00', '2018-03-03', 'palembang', 'sabang', 500000, 2),
(101, '13:30:00', '2018-03-03', 'jakarta', 'balikpapan', 920000, 3),
(102, '18:45:00', '2018-03-03', 'jakarta', 'balikpapan', 750000, 8),
(103, '20:45:00', '2018-03-03', 'jakarta', 'balikpapan', 600000, 5),
(104, '03:15:00', '2018-03-03', 'jakarta', 'balikpapan', 650000, 4),
(105, '08:00:00', '2018-03-03', 'pekanbaru', 'banda aceh', 400000, 2),
(106, '11:07:00', '2018-03-03', 'cirebon', 'padang', 800000, 5),
(107, '13:30:00', '2018-03-03', 'palembang', 'lampung', 300000, 7),
(108, '07:30:00', '2018-03-03', 'jakarta', 'bali', 500000, 2),
(109, '08:30:00', '2018-03-03', 'jakarta', 'makasar', 800000, 4),
(110, '01:00:00', '2018-03-03', 'jakarta', 'makasar', 850000, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `kode` varchar(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `seat` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `logo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transport`
--

INSERT INTO `transport` (`id`, `nama`, `kode`, `deskripsi`, `seat`, `id_type`, `logo`) VALUES
(1, 'Garuda Indonesia', 'GA-123', 'Boeing 777 300', 200, 1, 'garuda.png'),
(2, 'Lion Air', 'LA-424', 'Airbus A320', 150, 3, 'lion.png'),
(3, 'AirAsia', 'AA-834', 'Airbus A320 neo', 180, 3, 'airasia.png'),
(4, 'Sriwijaya Air', 'SA-993', 'Boeing 737', 185, 3, 'sriwijaya.png'),
(5, 'Nam Air', 'NA-482', 'Boeing 737', 170, 1, 'nam.png'),
(6, 'Citilink', 'CA-639', 'Airbus A320', 200, 1, 'citilink.png'),
(7, 'Batik Air', 'BA-610', 'Airbus A320', 200, 2, 'batik.png'),
(8, 'JetStar', 'JA-630', 'Boeing 777', 190, 2, 'jetstrar.png'),
(9, 'Susi air', 'SA-490', 'ATR 230', 50, 2, 'susi.png'),
(10, 'Tiger Air', 'TA-740', 'Airbus A320 neo', 180, 4, 'tiger.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'bulan', 'bulan1'),
(2, 'mawar', 'mawar1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idtransport` (`idtransport`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
