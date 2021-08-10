-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2019 at 09:01 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_jadwal`
--

CREATE TABLE `tbl_detail_jadwal` (
  `detail_jadwal` int(4) NOT NULL,
  `nis` int(11) DEFAULT NULL,
  `id_jadwal` int(4) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `p1` time DEFAULT NULL,
  `p2` time DEFAULT NULL,
  `p3` time DEFAULT NULL,
  `p4` time DEFAULT NULL,
  `p5` time DEFAULT NULL,
  `p6` time DEFAULT NULL,
  `p7` time DEFAULT NULL,
  `p8` time DEFAULT NULL,
  `p9` time DEFAULT NULL,
  `p10` time DEFAULT NULL,
  `p11` time DEFAULT NULL,
  `p12` time DEFAULT NULL,
  `p13` time DEFAULT NULL,
  `p14` time DEFAULT NULL,
  `p15` time DEFAULT NULL,
  `p16` time DEFAULT NULL,
  `p17` time DEFAULT NULL,
  `p18` time DEFAULT NULL,
  `p19` time DEFAULT NULL,
  `p20` time DEFAULT NULL,
  `p21` time DEFAULT NULL,
  `p22` time DEFAULT NULL,
  `p23` time DEFAULT NULL,
  `p24` time DEFAULT NULL,
  `total_masuk` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_jadwal`
--

INSERT INTO `tbl_detail_jadwal` (`detail_jadwal`, `nis`, `id_jadwal`, `id_kelas`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `p16`, `p17`, `p18`, `p19`, `p20`, `p21`, `p22`, `p23`, `p24`, `total_masuk`) VALUES
(36, 151610008, 54, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(35, 151610008, 53, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(34, 151610008, 52, 0, '22:48:56', '22:49:47', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 2),
(33, 151610008, 51, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(32, 151610008, 50, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(31, 151610008, 49, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(30, 151610007, 54, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(29, 151610007, 53, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(28, 151610007, 52, 0, '22:48:52', '22:49:44', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 2),
(27, 151610007, 51, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(26, 151610007, 50, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(25, 151610007, 49, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(48, 151610017, 54, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(47, 151610017, 53, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(46, 151610017, 52, 0, '22:49:00', '22:49:50', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 2),
(45, 151610017, 51, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(44, 151610017, 50, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(43, 151610017, 49, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(42, 151610010, 54, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(41, 151610010, 53, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(40, 151610010, 52, 0, '22:48:58', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 1),
(39, 151610010, 51, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(38, 151610010, 50, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0),
(37, 151610010, 49, 0, '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pelajaran`
--

CREATE TABLE `tbl_detail_pelajaran` (
  `detail_pelajaran` int(4) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `id_pelajaran` int(4) NOT NULL,
  `hari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_pelajaran`
--

INSERT INTO `tbl_detail_pelajaran` (`detail_pelajaran`, `id_kelas`, `id_pelajaran`, `hari`) VALUES
(1, 0, 6, '52 ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(4) NOT NULL,
  `id_kelas` int(4) NOT NULL,
  `hari` varchar(10) DEFAULT NULL,
  `buka_kelas` datetime DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `pertemuan` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_kelas`, `hari`, `buka_kelas`, `status`, `pertemuan`) VALUES
(51, 0, 'rabu', '0000-00-00 00:00:00', 'N', 0),
(52, 0, 'kamis', '2019-01-24 22:52:41', 'Y', 3),
(53, 0, 'jumat', '0000-00-00 00:00:00', 'N', 0),
(54, 0, 'sabtu', '0000-00-00 00:00:00', 'N', 0),
(50, 0, 'selasa', '0000-00-00 00:00:00', 'N', 0),
(49, 0, 'senin', '0000-00-00 00:00:00', 'N', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(4) NOT NULL,
  `kelas` varchar(3) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `nip` int(15) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `jurusan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kelas`, `nama_kelas`, `nip`, `tahun_ajaran`, `jurusan`) VALUES
(0, 'X', 'Kelas B', 102030405, '2019', 'IPA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keterangan`
--

CREATE TABLE `tbl_keterangan` (
  `id_keterangan` int(3) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_kelas` int(4) DEFAULT NULL,
  `pertemuan` int(2) DEFAULT NULL,
  `nis` int(11) DEFAULT NULL,
  `keterangan` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keterangan`
--

INSERT INTO `tbl_keterangan` (`id_keterangan`, `tanggal`, `id_kelas`, `pertemuan`, `nis`, `keterangan`) VALUES
(1, '2019-01-17', 0, 1, 0, 'Ijin'),
(7, '2019-01-24', 0, 2, 151610010, 'Ijin'),
(3, '2019-01-18', 1, 1, 0, 'Ijin'),
(6, '2019-01-18', 0, 1, 151610016, 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelajaran`
--

CREATE TABLE `tbl_pelajaran` (
  `id_pelajaran` int(4) NOT NULL,
  `nama_pelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelajaran`
--

INSERT INTO `tbl_pelajaran` (`id_pelajaran`, `nama_pelajaran`) VALUES
(1, 'B.Inggris'),
(2, 'Kimia'),
(4, 'Kewarnegaraan'),
(5, 'Biologi'),
(6, 'Agama'),
(7, 'Matematika'),
(8, 'Ipa'),
(9, 'Ips');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lhr` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `alamat`, `tempat_lhr`, `tgl_lhr`, `jk`, `telp`) VALUES
(151610019, 'NANA SUPRIATNA', 'Kp Tegal Kunir', 'Jakarta', '1996-06-12', 'Pria', ''),
(151610018, 'MUHAMMAD FAUZI', 'Kp Kebon Kelapa Desa Pekayon Kecamatan Sukadiri Kabupaten Tangerang', 'Tangerang', '1994-07-13', 'Pria', ''),
(151610016, 'FANI FAUZI', 'Kp Duri Kecamatan Pakuhaji Kabupaten Tangerang', 'Papua', '1997-12-03', 'Wanita', ''),
(151610015, 'DENI ANDREAS', 'Kp Sukamanah Kecamatan Sukadiri Kabupaten Tangerang', 'Tangerang', '1995-12-27', 'Pria', ''),
(151610014, 'DITA AIRATNA SARI', 'Desa Jati Waringin Kecamatan Mauk Kabupaten Tangerang', 'Tangerang', '1997-02-24', 'Wanita', ''),
(151610013, 'DILAN SETIAWAN', 'Villa Tomang Baru 2 Block A Kuta Baru Kecamatan Pasar Kemis Kabupaten Tangerang', 'Tangerang', '1996-02-03', 'Pria', ''),
(151610012, 'DEDE SUNANDAR', 'Kp Kebon Kelapa Desa Pekayon Kecamatan Sukadiri Kabupaten Tangerang', 'Tangerang', '1995-12-07', 'Pria', ''),
(151610011, 'CICI PARMIDA', 'Kp Ganepo Desa Pakayon Kecamatan Sukadiri Kabupaten Tangerang', 'Majalengka', '1997-11-12', 'Wanita', ''),
(151610010, 'BAYNA SINTA', 'Villa Tomang Baru 2 Block A Kuta Baru Kecamatan Pasar Kemis Kabupaten Tangerang', 'Jakarta', '1996-02-01', 'Wanita', ''),
(151610009, 'BADURRAHMAN', 'Desa Jati Waringin Kecamatan Mauk Kabupaten Tangerang', 'Bandung', '1995-09-12', 'Pria', ''),
(151610008, 'ASEP UGI KURNIAWAN', 'Kp Duri Kecamatan Pakuhaji Kabupaten Tangerang', 'Tangerang', '1997-01-16', 'Pria', ''),
(151610017, 'MUHAMMAD FAISAL', 'Kp Kebon Kelapa Desa Pekayon Kecamatan Sukadiri Kabupaten Tangerang', 'Tangerang', '1994-01-12', 'Pria', ''),
(151610007, 'ANDRI MULYA', 'Kp Kebon Kelapa Desa Pekayon Kecamatan Sukadiri Kabupaten Tangerang', 'Tangerang', '1995-11-02', 'Pria', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nip` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lhr` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jk` enum('Pria','Wanita') NOT NULL,
  `mulai_ngajar` date NOT NULL,
  `riwayat_pendidikan` text,
  `telp` int(20) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`nip`, `nama`, `alamat`, `tempat_lhr`, `tgl_lhr`, `jk`, `mulai_ngajar`, `riwayat_pendidikan`, `telp`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', '2018-12-05', 'Pria', '2018-12-05', 'admin', 1, 'admin', 'admin', 'admin'),
(151610018, 'MUHAMMAD FAUZI', 'Kp Kebon Kelapa Desa Pekayon Kecamatan Sukadiri Kabupaten Tangerang', 'Tangerang', '1994-07-13', 'Pria', '0000-00-00', '', 0, '151610018', '151610018', 'siswa'),
(151610017, 'MUHAMMAD FAISAL', 'Kp Kebon Kelapa Desa Pekayon Kecamatan Sukadiri Kabupaten Tangerang', 'Tangerang', '1994-01-12', 'Pria', '0000-00-00', '', 0, '151610017', '151610017', 'siswa'),
(151610007, '', '', '', '0000-00-00', '', '0000-00-00', NULL, 0, '151610007', '151610007', 'siswa'),
(151610008, '', '', '', '0000-00-00', '', '0000-00-00', NULL, 0, '151610008', '151610008', 'siswa'),
(151610009, '', '', '', '0000-00-00', '', '0000-00-00', NULL, 0, '151610009', '151610009', 'siswa'),
(111111, 'PADELI', 'Kp Tegal Kunir', 'Tangerang', '1995-02-16', 'Pria', '2020-02-05', 'S2', 0, 'padeli', 'guru', 'Guru'),
(151610010, '', '', '', '0000-00-00', '', '0000-00-00', NULL, 0, '151610010', '151610010', 'siswa'),
(151610011, '', '', '', '0000-00-00', '', '0000-00-00', NULL, 0, '151610011', '151610011', 'siswa'),
(151610012, '', '', '', '0000-00-00', '', '0000-00-00', NULL, 0, '151610012', '151610012', 'siswa'),
(151610013, '', '', '', '0000-00-00', '', '0000-00-00', NULL, 0, '151610013', '151610013', 'siswa'),
(102030405, 'MUHAMMAD EMAN', 'Kp Kebon Kelapa Desa Pekayon Kecamatan Sukadiri Kabupaten Tangerang', 'Tangerang', '1990-12-13', 'Pria', '2017-01-11', 'S1', 0, 'Muhammad', 'guru', 'Guru'),
(111222, 'ATIKAH', 'Kp Kebon Kelapa Desa Pekayon Kecamatan Sukadiri Kabupaten Tangerang', 'Tangerang', '1996-02-29', 'Wanita', '2018-02-16', 'S1', 0, 'atikah', 'guru', 'Guru'),
(1411482274, 'ADE SETIAWAN', 'Kp Kebon Kelapa Desa Pekayon Kecamatan Sukadiri Kabupaten Tangerang', 'Tangerang', '1996-06-04', 'Pria', '2018-01-02', 'S1', 0, 'ade', 'admin', 'admin'),
(151610015, '', '', '', '0000-00-00', '', '0000-00-00', NULL, 0, '151610015', '151610015', 'siswa'),
(151610014, '', '', '', '0000-00-00', '', '0000-00-00', NULL, 0, '151610014', '151610014', 'siswa'),
(151610016, '', '', '', '0000-00-00', '', '0000-00-00', NULL, 0, '151610016', '151610016', 'siswa'),
(151610019, 'NANA SUPRIATNA', 'Kp Tegal Kunir', 'Jakarta', '1996-06-12', 'Pria', '0000-00-00', '', 0, '151610019', '151610019', 'siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_detail_jadwal`
--
ALTER TABLE `tbl_detail_jadwal`
  ADD PRIMARY KEY (`detail_jadwal`);

--
-- Indexes for table `tbl_detail_pelajaran`
--
ALTER TABLE `tbl_detail_pelajaran`
  ADD PRIMARY KEY (`detail_pelajaran`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_keterangan`
--
ALTER TABLE `tbl_keterangan`
  ADD PRIMARY KEY (`id_keterangan`);

--
-- Indexes for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_jadwal`
--
ALTER TABLE `tbl_detail_jadwal`
  MODIFY `detail_jadwal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `tbl_detail_pelajaran`
--
ALTER TABLE `tbl_detail_pelajaran`
  MODIFY `detail_pelajaran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `tbl_keterangan`
--
ALTER TABLE `tbl_keterangan`
  MODIFY `id_keterangan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_pelajaran`
--
ALTER TABLE `tbl_pelajaran`
  MODIFY `id_pelajaran` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `nip` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1411482275;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
