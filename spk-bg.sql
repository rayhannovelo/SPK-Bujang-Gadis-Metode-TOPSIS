-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2018 at 10:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk-bg`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahasa_peserta`
--

CREATE TABLE `bahasa_peserta` (
  `id_bahasa` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `nama_bahasa` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahasa_peserta`
--

INSERT INTO `bahasa_peserta` (`id_bahasa`, `id_peserta`, `nama_bahasa`) VALUES
(8, 5, 'Bahasa Indonesia'),
(10, 7, 'Bahasa Indonesia'),
(11, 8, 'Bahasa Indonesia'),
(12, 9, 'indonesia'),
(13, 10, 'indonesia'),
(15, 12, 'daerah'),
(16, 13, 'indonesia'),
(18, 15, 'Bahasa Indonesia'),
(19, 16, 'Bahasa Indonesia'),
(20, 17, 'Bahasa Indonesia'),
(21, 18, 'Bahasa Indonesia'),
(22, 19, 'Bahasa Indonesia'),
(23, 20, 'bahasa inggris'),
(24, 21, 'Bahasa Indonesia'),
(25, 22, 'indonesia'),
(26, 23, 'Bahasa Indonesia'),
(27, 24, 'Bahasa Indonesia'),
(28, 25, 'indonesia'),
(29, 26, 'bahasa jerman'),
(30, 27, 'Bahasa Indonesia'),
(31, 28, 'Bahasa Indonesia'),
(32, 29, 'Bahasa Indonesia'),
(33, 30, 'Bahasa Indonesia'),
(34, 31, '1'),
(35, 32, '2'),
(36, 33, '2'),
(37, 34, '2'),
(38, 35, '3');

-- --------------------------------------------------------

--
-- Table structure for table `bakat_peserta`
--

CREATE TABLE `bakat_peserta` (
  `id_bakat` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `nama_bakat` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bakat_peserta`
--

INSERT INTO `bakat_peserta` (`id_bakat`, `id_peserta`, `nama_bakat`) VALUES
(6, 5, 'MC'),
(8, 7, 'MODELLLING'),
(9, 8, 'fashion show'),
(10, 9, 'menyanyi'),
(11, 10, 'berpidato'),
(13, 12, 'tae kwon do'),
(14, 13, 'menyanyi'),
(16, 15, 'story telling'),
(17, 16, 'main alat musik gendang'),
(18, 17, 'sepak bola'),
(19, 18, 'debat'),
(20, 19, 'kempo'),
(21, 20, 'menyanyi'),
(22, 21, 'futsal'),
(23, 22, 'modeling'),
(24, 23, 'menari'),
(25, 24, 'melukis'),
(26, 25, 'menari'),
(27, 26, 'menggambar'),
(28, 27, 'menari'),
(29, 28, 'menari'),
(30, 29, 'modelling'),
(31, 30, 'fashion show'),
(32, 31, '111'),
(33, 34, '2'),
(34, 35, '3');

-- --------------------------------------------------------

--
-- Table structure for table `hobi_peserta`
--

CREATE TABLE `hobi_peserta` (
  `id_hobi` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_kategori_hobi` int(11) NOT NULL,
  `nama_hobi` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobi_peserta`
--

INSERT INTO `hobi_peserta` (`id_hobi`, `id_peserta`, `id_kategori_hobi`, `nama_hobi`) VALUES
(8, 5, 1, 'Traveling wisata alam'),
(10, 7, 1, 'BACA'),
(11, 8, 1, 'bermain basket'),
(12, 9, 1, 'menyanyi'),
(13, 10, 1, 'mengarang cerpen'),
(15, 12, 1, 'tae kwon do'),
(16, 13, 1, 'olahraga'),
(18, 15, 1, 'travelling'),
(19, 16, 1, 'basket'),
(20, 17, 1, 'travelling'),
(21, 18, 1, 'bermain basket'),
(22, 19, 1, 'hunting'),
(23, 20, 1, 'olahraga'),
(24, 21, 1, 'futsal'),
(25, 22, 1, 'catwalk'),
(26, 23, 1, 'menyanyi'),
(27, 24, 1, 'melukis'),
(28, 25, 1, 'menari'),
(29, 26, 1, 'make up'),
(30, 27, 1, 'renang'),
(31, 28, 1, 'menari'),
(32, 29, 1, 'modelling'),
(33, 30, 1, 'bermain basket'),
(34, 34, 3, '2'),
(35, 35, 1, '2'),
(36, 35, 2, '2'),
(37, 35, 1, '2'),
(38, 24, 3, '1');

-- --------------------------------------------------------

--
-- Table structure for table `juri`
--

CREATE TABLE `juri` (
  `id_juri` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_juri` varchar(55) NOT NULL,
  `jenis_kelamin` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `juri`
--

INSERT INTO `juri` (`id_juri`, `id_users`, `id_kriteria`, `nama_juri`, `jenis_kelamin`) VALUES
(1, 3, 3, 'juri1', 'Laki-laki'),
(2, 4, 4, 'juri2', 'Perempuan'),
(3, 5, 5, 'juri3', 'Perempuan'),
(4, 6, 6, 'juri4', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_hobi`
--

CREATE TABLE `kategori_hobi` (
  `id_kategori_hobi` int(11) NOT NULL,
  `nama_kategori` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_hobi`
--

INSERT INTO `kategori_hobi` (`id_kategori_hobi`, `nama_kategori`) VALUES
(1, 'Olahraga'),
(2, 'Seni'),
(3, 'Sastra');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(55) NOT NULL,
  `bobot` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `bobot`) VALUES
(1, 'Berat Badan Ideal', 4),
(2, 'Tes Tertulis', 5),
(3, 'Pengetahuan Budaya Pariwisata', 5),
(4, 'Bahasa Asing', 5),
(5, 'Bakat', 4),
(6, 'Public Speaking', 5),
(7, 'Attitude', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kriteria`
--

CREATE TABLE `nilai_kriteria` (
  `id_nilai_kriteria` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `tahun` char(4) NOT NULL,
  `nilai_kriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_kriteria`
--

INSERT INTO `nilai_kriteria` (`id_nilai_kriteria`, `id_peserta`, `id_kriteria`, `tahun`, `nilai_kriteria`) VALUES
(29, 7, 1, '2018', 2),
(30, 7, 2, '2018', 81),
(31, 7, 3, '2018', 66),
(32, 7, 4, '2018', 25),
(33, 7, 5, '2018', 77),
(34, 7, 6, '2018', 60),
(35, 7, 7, '2018', 77),
(43, 5, 1, '2017', 3),
(44, 5, 2, '2017', 76),
(45, 5, 3, '2017', 99),
(46, 5, 4, '2017', 50),
(47, 5, 5, '2017', 30),
(48, 5, 6, '2017', 45),
(49, 5, 7, '2017', 54),
(50, 10, 1, '2017', 3),
(51, 10, 2, '2017', 84),
(52, 10, 3, '2017', 80),
(53, 10, 4, '2017', 70),
(54, 10, 5, '2017', 55),
(55, 10, 6, '2017', 60),
(56, 10, 7, '2017', 75),
(57, 9, 1, '2017', 2),
(58, 9, 2, '2017', 78),
(59, 9, 3, '2017', 75),
(60, 9, 4, '2017', 75),
(61, 9, 5, '2017', 30),
(62, 9, 6, '2017', 80),
(63, 9, 7, '2017', 86),
(64, 8, 1, '2017', 3),
(65, 8, 2, '2017', 65),
(66, 8, 3, '2017', 50),
(67, 8, 4, '2017', 50),
(68, 8, 5, '2017', 50),
(69, 8, 6, '2017', 45),
(70, 8, 7, '2017', 54),
(71, 13, 1, '2017', 3),
(72, 13, 2, '2017', 55),
(73, 13, 3, '2017', 70),
(74, 13, 4, '2017', 90),
(75, 13, 5, '2017', 80),
(76, 13, 6, '2017', 68),
(77, 13, 7, '2017', 80),
(78, 12, 1, '2017', 3),
(79, 12, 2, '2017', 49),
(80, 12, 3, '2017', 50),
(81, 12, 4, '2017', 15),
(82, 12, 5, '2017', 50),
(83, 12, 6, '2017', 45),
(84, 12, 7, '2017', 63),
(85, 19, 1, '2017', 3),
(86, 19, 2, '2017', 77),
(87, 19, 3, '2017', 45),
(88, 19, 4, '2017', 25),
(89, 19, 5, '2017', 80),
(90, 19, 6, '2017', 45),
(91, 19, 7, '2017', 25),
(92, 16, 1, '2017', 3),
(93, 16, 2, '2017', 86),
(94, 16, 3, '2017', 60),
(95, 16, 4, '2017', 30),
(96, 16, 5, '2017', 55),
(97, 16, 6, '2017', 53),
(98, 16, 7, '2017', 56),
(99, 17, 1, '2017', 3),
(100, 17, 2, '2017', 72),
(101, 17, 3, '2017', 50),
(102, 17, 4, '2017', 65),
(103, 17, 5, '2017', 30),
(104, 17, 6, '2017', 30),
(105, 17, 7, '2017', 40),
(106, 15, 1, '2017', 3),
(107, 15, 2, '2017', 65),
(108, 15, 3, '2017', 80),
(109, 15, 4, '2017', 70),
(110, 15, 5, '2017', 75),
(111, 15, 6, '2017', 71),
(112, 15, 7, '2017', 84),
(113, 18, 1, '2017', 2),
(114, 18, 2, '2017', 69),
(115, 18, 3, '2017', 60),
(116, 18, 4, '2017', 35),
(117, 18, 5, '2017', 65),
(118, 18, 6, '2017', 40),
(119, 18, 7, '2017', 75),
(127, 20, 1, '2017', 3),
(128, 20, 2, '2017', 78),
(129, 20, 3, '2017', 90),
(130, 20, 4, '2017', 80),
(131, 20, 5, '2017', 85),
(132, 20, 6, '2017', 55),
(133, 20, 7, '2017', 82),
(134, 21, 1, '2017', 2),
(135, 21, 2, '2017', 74),
(136, 21, 3, '2017', 50),
(137, 21, 4, '2017', 15),
(138, 21, 5, '2017', 50),
(139, 21, 6, '2017', 30),
(140, 21, 7, '2017', 62),
(141, 23, 1, '2017', 2),
(142, 23, 2, '2017', 67),
(143, 23, 3, '2017', 60),
(144, 23, 4, '2017', 80),
(145, 23, 5, '2017', 60),
(146, 23, 6, '2017', 45),
(147, 23, 7, '2017', 80),
(148, 22, 1, '2017', 3),
(149, 22, 2, '2017', 73),
(150, 22, 3, '2017', 60),
(151, 22, 4, '2017', 40),
(152, 22, 5, '2017', 65),
(153, 22, 6, '2017', 70),
(154, 22, 7, '2017', 78),
(155, 26, 1, '2017', 2),
(156, 26, 2, '2017', 50),
(157, 26, 3, '2017', 60),
(158, 26, 4, '2017', 30),
(159, 26, 5, '2017', 65),
(160, 26, 6, '2017', 40),
(161, 26, 7, '2017', 70),
(162, 25, 1, '2017', 3),
(163, 25, 2, '2017', 50),
(164, 25, 3, '2017', 70),
(165, 25, 4, '2017', 30),
(166, 25, 5, '2017', 60),
(167, 25, 6, '2017', 50),
(168, 25, 7, '2017', 75),
(169, 27, 1, '2017', 2),
(170, 27, 2, '2017', 78),
(171, 27, 3, '2017', 60),
(172, 27, 4, '2017', 65),
(173, 27, 5, '2017', 65),
(174, 27, 6, '2017', 60),
(175, 27, 7, '2017', 80),
(176, 24, 1, '2017', 2),
(177, 24, 2, '2017', 56),
(178, 24, 3, '2017', 55),
(179, 24, 4, '2017', 15),
(180, 24, 5, '2017', 50),
(181, 24, 6, '2017', 50),
(182, 24, 7, '2017', 65),
(183, 28, 1, '2017', 2),
(184, 28, 2, '2017', 59),
(185, 28, 3, '2017', 85),
(186, 28, 4, '2017', 40),
(187, 28, 5, '2017', 60),
(188, 28, 6, '2017', 60),
(189, 28, 7, '2017', 87),
(190, 29, 1, '2017', 2),
(191, 29, 2, '2017', 60),
(192, 29, 3, '2017', 55),
(193, 29, 4, '2017', 90),
(194, 29, 5, '2017', 50),
(195, 29, 6, '2017', 50),
(196, 29, 7, '2017', 89),
(197, 30, 1, '2018', 3),
(198, 30, 2, '2018', 0),
(199, 30, 3, '2018', 0),
(200, 30, 4, '2018', 0),
(201, 30, 5, '2018', 0),
(202, 30, 6, '2018', 0),
(203, 30, 7, '2018', 0),
(204, 31, 1, '2018', 1),
(205, 31, 2, '2018', 0),
(206, 31, 3, '2018', 0),
(207, 31, 4, '2018', 0),
(208, 31, 5, '2018', 0),
(209, 31, 6, '2018', 0),
(210, 31, 7, '2018', 0),
(211, 34, 1, '2018', 1),
(212, 34, 2, '2018', 0),
(213, 34, 3, '2018', 0),
(214, 34, 4, '2018', 0),
(215, 34, 5, '2018', 0),
(216, 34, 6, '2018', 0),
(217, 34, 7, '2018', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`status`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `nama_lengkap` varchar(55) NOT NULL,
  `nama_panggilan` varchar(55) NOT NULL,
  `jenis_kelamin` varchar(55) NOT NULL,
  `tempat_lahir` varchar(55) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia_tahun` int(11) NOT NULL,
  `usia_bulan` int(11) NOT NULL,
  `agama` varchar(55) NOT NULL,
  `tinggi_badan` float(11,2) NOT NULL,
  `berat_badan` float(11,2) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `email` varchar(55) NOT NULL,
  `no_hp` varchar(55) NOT NULL,
  `fb` varchar(55) NOT NULL,
  `twitter` varchar(55) NOT NULL,
  `instagram` varchar(55) NOT NULL,
  `sd` varchar(55) NOT NULL,
  `smp` varchar(55) NOT NULL,
  `sma` varchar(55) NOT NULL,
  `universitas` varchar(55) NOT NULL,
  `pekerjaan` varchar(55) NOT NULL,
  `riwayat_sakit` int(1) NOT NULL,
  `keterangan_sakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `id_users`, `nama_lengkap`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `usia_tahun`, `usia_bulan`, `agama`, `tinggi_badan`, `berat_badan`, `alamat_lengkap`, `email`, `no_hp`, `fb`, `twitter`, `instagram`, `sd`, `smp`, `sma`, `universitas`, `pekerjaan`, `riwayat_sakit`, `keterangan_sakit`) VALUES
(5, 11, 'Elva Dwi Dayanti', 'elva', 'Perempuan', 'Lahat', '1995-06-12', 22, 1, 'Islam', 170.00, 60.00, 'Jl. Letnan Munandar, Lahat', 'elvadwiyanti@gmail.com', '082116770398', '', '', '', 'SD N 14 Lahat', 'SMP N 2 Pagaralaman', 'SMA N 4 Pagaralaman', 'Akademi Keperawatan Pemkab Lahat', 'Staf PMI Kabupaten Lahat', 0, ''),
(7, 13, 'andri mahendra', 'andre', 'Laki-laki', 'tanjung kurung', '2000-12-11', 16, 7, 'Islam', 170.00, 45.00, 'Jl. Letnan Munandar, Lahat', 'mahendraandre@gmail.com', '0823', '', '', '', 'SD TANJUNG TEBAT', 'MTS N LAHAT', 'MAN LAHAT', '', '', 0, 'tidak ada riwayat sakit'),
(8, 14, 'yunila maryani', 'yunila', 'Perempuan', 'Lubuk Linggau', '1999-06-12', 18, 1, 'Islam', 163.00, 53.00, 'desa telatang', 'yunia.naka@yahoo.com', '083173400721', 'yunila maryanie', '', '', 'SD N 1 Jati Mulyo', 'SMP N 1 Merapi Barat', 'SMK N 1 Lahat', '', '', 0, ''),
(9, 15, 'shafira tasya nabila', 'shafira', 'Perempuan', 'lahat', '2000-08-12', 16, 11, 'Islam', 167.00, 50.00, 'jalan ahmad yani', 'shafiratasyanabila@yahoo.co.id', '089536905824', '', '', '', 'sd santo yosef lahat', 'smp santo yosef lahat', 'sam n 1 lahat', '', '', 0, ''),
(10, 16, 'indra gunawan', 'indra', 'Laki-laki', 'pajar menang', '1996-09-09', 20, 10, 'Islam', 170.00, 58.00, 'relly jalan  cuhup griya indah ', 'gunawanindra055@gmail.com', '081996444480', 'indra kevin', '', '', 'sd negeri 4 pagaralam', 'smp xaverius pagaralam', 'man lahat', 'universitas terbuka lahat', '', 0, ''),
(12, 18, 'abdullah nur', 'abdul', 'Laki-laki', 'Lahat', '2000-07-18', 17, 1, 'Islam', 171.00, 71.00, 'jalan pahlawan guru-guru', 'rezki.aigm@ymail.com', '082281104025', '', '', '', 'sd negeri 31 lahat', 'smp negeri 3 lahat', 'sma n 2lahat', '', '', 0, ''),
(13, 19, 'abdul djabar nur rochim', 'abdul djabar', 'Laki-laki', 'cirebon', '1995-03-22', 22, 4, 'Islam', 173.00, 65.00, 'blok c ujung', 'abduldjabarnurrochim@yahoo.com', '082177740365', '', '', '', 'sdn 95 palembang', 'smpn 1 pagaralam', 'sman 1 pagaralam', '', '', 0, ''),
(15, 21, 'ilham juliantino', 'iam', 'Laki-laki', 'Lahat', '1997-07-13', 20, 1, 'Islam', 180.00, 68.00, 'jalan kemala', 'ijuliantino@gmail.com', '082176761256', '', '', '', 'sdn 24 lahat', 'smpn 5 lahat', 'sman 2 lahat', 'kesdam II/sriwijaya', 'mahasiswa', 0, ''),
(16, 22, 'dio pahrenata', 'dio', 'Laki-laki', 'gedung agung', '2000-06-25', 17, 1, 'Islam', 175.00, 69.00, 'desa gedung agung', 'pahrenatadio@gmail.com', '083163727195', '', '', '', 'sdn 3 merapi timur', 'smp n 1 merapi timur', 'smkn 1 lahat', '', '', 0, ''),
(17, 23, 'ferdian anggara', 'ferdian', 'Laki-laki', 'lahat', '2000-08-09', 17, 1, 'Islam', 174.00, 65.00, 'jalan bukit barisan', 'ferdian@gmail.com', '082281707478', '', '', '', 'sdn 35 lahat', 'smpn 1 lahat', 'SMK N 1 Lahat', '', 'pelajar', 0, ''),
(18, 24, 'muhammad kahfi dhiya ulhaq', 'kahfi', 'Laki-laki', 'Lahat', '2000-06-14', 17, 1, 'Islam', 183.00, 89.00, 'asrama tepbek lahat', 'kahfiulhaq@yahoo.com', '081272242334', '', '', '', 'sdn 47 lahat', 'smpn 2 lahat', 'sman 4 lahat', '', '', 0, ''),
(19, 25, 'aldo agung saputra', 'aldo', 'Laki-laki', 'Lahat', '2000-04-20', 17, 3, 'Islam', 170.00, 55.00, 'gang bangsal tl jawa lahat', 'aldoagung2004@gmail.com', '085268094082', '', '', '', 'sd santo yosef lahat', 'santo yosef lahat', 'sman 1 lahat', '', '', 0, ''),
(20, 26, 'yogi marta pratama', 'yogi', 'Laki-laki', 'jadian baru', '1996-03-28', 21, 6, 'Islam', 172.00, 63.00, 'jalan kehutanan', 'yogimarta@yahoo.com', '08127328953', '', '', '', 'sd 11 mulak ', 'smpn 3 mulak', 'sman 1 mulak', 'stie serelo lahat', 'honorer', 0, ''),
(21, 27, 'redian meihabbi', 'abi', 'Laki-laki', 'Lahat', '1999-05-20', 18, 2, 'Islam', 170.00, 53.00, 'jalan laskar syamsudin', 'reidianmeihabbi@yahoo.com', '082177272619', '', '', '', 'juni 2005 -juni 2011', 'juni 2011- juni 2014', 'juni 2014 - juni 2017', '', '', 0, ''),
(22, 28, 'natasha nurullita', 'natasha', 'Perempuan', 'aceh', '2000-05-09', 17, 1, 'Islam', 165.00, 55.00, 'perumahan griya revari desa ulak lebar', 'nurullitanatasha94@gmail.com', '0858019900049', '', '', '', 'sd n 002 selensen', 'mts n lahat', 'man lahat', '', '', 0, ''),
(23, 29, 'fitria damayanti', 'fida', 'Perempuan', 'Lahat', '2001-02-24', 16, 5, 'Islam', 168.00, 50.00, 'ganga sentral talang jawa', 'fitriadamayanti64@gmail.com', '081369169579', '', '', '', 'sd n 48 prabumulih', 'smp n 5 lahat', 'sma n 4 lahat', '', '', 0, ''),
(24, 30, 'wulandari', 'wulan', 'Perempuan', 'tanjung aur', '2001-06-06', 16, 1, 'Islam', 169.00, 50.00, 'desa ulak lebar lahat', 'wulandari@yahoo.com', '082176689431', '', '', '', 'sd 17 lahat', 'smp n 1 lahat', 'sma negeri 1 lahat', '', '', 0, '1'),
(25, 31, 'tri aprilia', 'lia', 'Perempuan', 'lahat', '2000-04-16', 17, 3, 'Islam', 170.00, 60.00, 'desa kebur kecamatan merapi barat', 'liatriaprilia@gmail.com', '085267850367', '', '', '', 'sd n 2 merapi barat', 'smp n 5 lahat', 'sma n 1 lahat', '', '', 0, ''),
(26, 32, 'rikha julia saputri gumay', 'rikha', 'Perempuan', 'Lahat', '2001-07-07', 16, 1, 'Islam', 167.00, 50.00, 'jalan anggrek prumnas 2', 'rikhasllabidah@yahoo.com', '085840548184', '', '', '', 'sd santo yosef lahat ', 'smp santo yosef lahat ', 'sma santo yosef lahat', '', '', 0, ''),
(27, 33, 'weny ria shafitri', 'weny', 'Perempuan', 'Lahat', '2000-07-13', 17, 1, 'Islam', 168.00, 49.00, 'desa karang dalam seberang', 'wenyria13@gmail.com', '081330819077', '', '', '', 'sd muhammdiyah', 'smp n 3 lahat', 'sma n 2 lahat', '', '', 0, ''),
(28, 34, 'riski rahmadanti', 'kiki', 'Perempuan', 'pagaralam', '1998-01-14', 19, 6, 'Islam', 166.00, 50.00, 'jalan peltu m goha no 12 bndar agung', 'rizkiramadhanti79@gmail.com', '0895336338985', '', '', '', 'sd n 22 lahat', 'smp santo yosef lahat', 'sma n 2 lahat', 'pgri palembang', '', 0, ''),
(29, 35, 'sella anggraeni', 'sella', 'Perempuan', 'pekan baru', '2000-10-10', 16, 9, 'Islam', 165.00, 43.00, 'pasar lama ', 'sellaanggraeni@yahoo.com', '082282968231', '', '', '', 'sd negeri 3 lahat ', 'smp negeri 01 lahat', 'sma negeri 2 lahat', '', '', 0, ''),
(30, 36, 'yunila maryani', 'yunila', 'Perempuan', 'Lubuk Linggau', '1999-06-12', 18, 1, 'Islam', 165.00, 53.00, 'desa telatang', 'yuniladata@yahoo.com', '083173400721', 'yunila maryanie', '', '', 'SD N 1 Jati Mulyo', 'SMP N 1 Merapi Barat', 'SMK N 1 Lahat', '', '', 0, ''),
(31, 37, '111', '111', 'Laki-laki', '111', '2018-01-12', 111, 1, 'Islam', 111.00, 111.00, '111', '111@a', '111', '111', '111', '111', '111', '1111', '11', '1', '1', 0, '111'),
(32, 38, '2', '2', 'Laki-laki', '2', '2018-01-12', 2, 2, 'Islam', 2.00, 2.00, '2', '2@2', '2', '2', '', '', '2', '2', '2', '', '', 0, '2'),
(33, 39, '2', '2', 'Laki-laki', '2', '2018-01-12', 2, 2, 'Islam', 2.00, 2.00, '2', '2@2', '2', '2', '', '', '2', '2', '2', '', '', 0, '2'),
(34, 40, '2', '2', 'Laki-laki', '2', '2018-01-12', 2, 2, 'Islam', 2.00, 2.00, '2', '2@2', '2', '2', '', '', '2', '2', '2', '', '', 0, '2'),
(35, 41, '3', '3', 'Laki-laki', '3', '2018-01-12', 3, 3, 'Islam', 3.00, 1.00, '3', '3@2', '3', '3', '3', '3', '3', '3', '3', '3', '3', 0, '3');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi_peserta`
--

CREATE TABLE `prestasi_peserta` (
  `id_prestasi` int(11) NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `tahun` char(4) NOT NULL,
  `nama_kegiatan` varchar(55) NOT NULL,
  `prestasi` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi_peserta`
--

INSERT INTO `prestasi_peserta` (`id_prestasi`, `id_peserta`, `tahun`, `nama_kegiatan`, `prestasi`) VALUES
(5, 5, '2011', 'Paskibra  kota Pagaralam', 'Baki Pagi'),
(7, 7, '2011', 'paskib', 'PELATIH'),
(8, 8, '2011', 'paskib', 'PELATIH'),
(9, 9, '2016', 'paskibraka kabupaten lahat', 'pasukan 17 pagi'),
(10, 10, '2015', 'lomba pidato', 'juara 1'),
(12, 12, '2016', 'paskib', 'tingkat kabupaten lahat'),
(13, 13, '2015', 'top 30 ', 'semifinal bujang kampus'),
(15, 15, '2016', 'fashionshow', 'juara 1'),
(16, 16, '2013', 'basket', 'runner up'),
(17, 17, '2015', 'turnamen sepak bola', 'juara 3'),
(18, 18, '2016', 'paskibraka', 'danton'),
(19, 19, '2014', 'kejuaraan beladiri kempo', 'perunggu'),
(20, 20, '2004', 'musabaqah tilawatil quran', 'harapan 3'),
(21, 21, '2016', 'futsal pelajar lahat cup ', 'juara 3'),
(22, 22, '2014', 'model muslimah', 'harapan 1'),
(23, 23, '2013', 'lomba menari antar sekolah', 'harapan 2'),
(24, 24, '2014', 'lomba melukis', 'juara 3'),
(25, 25, '2014', 'lomba melukis', 'juara 3'),
(26, 26, '2012', 'menggambar', 'juara 2'),
(27, 27, '2016', 'PKS Polres Lahat', 'Instruktur muda'),
(28, 28, '2016', 'membuat film pendek', 'juara 3'),
(29, 29, '2017', 'pemilihan wajah lahat pos', 'juara 1'),
(30, 30, '2016', 'fashion show ', 'harapan 3'),
(31, 31, '111', '111', '11'),
(32, 34, '2', '2', '2'),
(33, 35, '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`, `level`, `status`) VALUES
(1, 'kasi', 'b68fcc3e90e4fecf7182587472526728', 1, 1),
(2, 'kabid', '6d6827e38b382572cc5be098158174d3', 2, 1),
(3, 'juri1', '8ec59cb5a587a2016263427d17b94790', 3, 1),
(4, 'juri2', 'f807fe8fa76f83bb7c1770229a0475e9', 3, 1),
(5, 'juri3', 'fe2db04b38c700a8af8f401177b0ebbb', 3, 1),
(6, 'juri4', 'ca5e3e3cbf8ed4f750dbe177269fcf91', 3, 1),
(11, 'Elva', '788bd84addbcf8f1767869759d4a2ad9', 4, 1),
(13, 'andri', '6bd3108684ccc9dfd40b126877f850b0', 4, 1),
(14, 'yunila', '08a14a27ae4d327ea68fc8e831f6a789', 4, 1),
(15, 'shafira', '2ec4b0bdf35a294f7b42496e0a19ceea', 4, 1),
(16, 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 4, 1),
(18, 'abdul', '82027888c5bb8fc395411cb6804a066c', 4, 1),
(19, 'abduldjabar', '73cf294bf0ca338377e37c0683464228', 4, 1),
(21, 'iam', '0ebc580ae6450fce8762fad1bff32e7b', 4, 1),
(22, 'dio', '27b205035c328b16d8c8329c4b41e87e', 4, 1),
(23, 'ferdian', 'c5a1b2f2f36b113de298403789203e7b', 4, 1),
(24, 'kahfi', '64d2753197ba92f6fe30371c52d1b824', 4, 1),
(25, 'aldo', 'b104ab9a0e58c861b9628208b3fecd58', 4, 1),
(26, 'yogi', '938e14c074c45c62eb15cc05a6f36d79', 4, 1),
(27, 'abi', '19a9228dbbbe3b613190002e54dc3429', 4, 1),
(28, 'natasha', '6275e26419211d1f526e674d97110e15', 4, 1),
(29, 'fida', '58464c56b74af7c2ce29a1af50912b53', 4, 1),
(30, 'wulan', 'e8c6e11b8491d0dc6399c343fa54d7e8', 4, 1),
(31, 'lia', '8d84dd7c18bdcb39fbb17ceeea1218cd', 4, 1),
(32, 'rikha ', 'efd784788e708a002c05559c56b2bf33', 4, 1),
(33, 'weny', '6be01d362dcfe2faa076c6666e07c21d', 4, 1),
(34, 'kiki', '0d61130a6dd5eea85c2c5facfe1c15a7', 4, 1),
(35, 'sella', 'cd22631a7f2cdcc84838beb4da2c8118', 4, 1),
(36, 'yunila', '08a14a27ae4d327ea68fc8e831f6a789', 4, 1),
(37, '111', '698d51a19d8a121ce581499d7b701668', 4, 1),
(38, '2', 'c81e728d9d4c2f636f067f89cc14862c', 4, 0),
(39, '2', 'c81e728d9d4c2f636f067f89cc14862c', 4, 0),
(40, '2', 'c81e728d9d4c2f636f067f89cc14862c', 4, 1),
(41, 'z', 'fbade9e36a3f36d3d676c1b808451dd7', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahasa_peserta`
--
ALTER TABLE `bahasa_peserta`
  ADD PRIMARY KEY (`id_bahasa`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `bakat_peserta`
--
ALTER TABLE `bakat_peserta`
  ADD PRIMARY KEY (`id_bakat`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `hobi_peserta`
--
ALTER TABLE `hobi_peserta`
  ADD PRIMARY KEY (`id_hobi`),
  ADD KEY `id_peserta` (`id_peserta`),
  ADD KEY `id_kategori_hobi` (`id_kategori_hobi`);

--
-- Indexes for table `juri`
--
ALTER TABLE `juri`
  ADD PRIMARY KEY (`id_juri`),
  ADD KEY `id_users` (`id_users`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `kategori_hobi`
--
ALTER TABLE `kategori_hobi`
  ADD PRIMARY KEY (`id_kategori_hobi`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  ADD PRIMARY KEY (`id_nilai_kriteria`),
  ADD KEY `id_peserta` (`id_peserta`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `prestasi_peserta`
--
ALTER TABLE `prestasi_peserta`
  ADD PRIMARY KEY (`id_prestasi`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahasa_peserta`
--
ALTER TABLE `bahasa_peserta`
  MODIFY `id_bahasa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `bakat_peserta`
--
ALTER TABLE `bakat_peserta`
  MODIFY `id_bakat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `hobi_peserta`
--
ALTER TABLE `hobi_peserta`
  MODIFY `id_hobi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `juri`
--
ALTER TABLE `juri`
  MODIFY `id_juri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kategori_hobi`
--
ALTER TABLE `kategori_hobi`
  MODIFY `id_kategori_hobi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  MODIFY `id_nilai_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `status` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `prestasi_peserta`
--
ALTER TABLE `prestasi_peserta`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bahasa_peserta`
--
ALTER TABLE `bahasa_peserta`
  ADD CONSTRAINT `bahasa_peserta_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id_peserta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bakat_peserta`
--
ALTER TABLE `bakat_peserta`
  ADD CONSTRAINT `bakat_peserta_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id_peserta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hobi_peserta`
--
ALTER TABLE `hobi_peserta`
  ADD CONSTRAINT `hobi_peserta_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id_peserta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hobi_peserta_ibfk_2` FOREIGN KEY (`id_kategori_hobi`) REFERENCES `kategori_hobi` (`id_kategori_hobi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `juri`
--
ALTER TABLE `juri`
  ADD CONSTRAINT `juri_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `juri_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  ADD CONSTRAINT `nilai_kriteria_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id_peserta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_kriteria_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_ibfk_1` FOREIGN KEY (`id_users`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `prestasi_peserta`
--
ALTER TABLE `prestasi_peserta`
  ADD CONSTRAINT `prestasi_peserta_ibfk_1` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`id_peserta`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
