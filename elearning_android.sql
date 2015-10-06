-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Sep 2015 pada 12.08
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `elearning_android`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id_guru` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jk_guru` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `akses` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `alamat`, `jk_guru`, `tgl_lahir`, `akses`) VALUES
(1, '82091830', 'arapat Mania', 'Jl. Kucing', 'Perempuan', '2015-09-11', 'Administrator'),
(6, '53456565', 'Felichya Oktaviani Sewot', 'dg. miong', 'Perempuan', '0000-00-00', 'Guru'),
(7, 'dsadaw222', 'Resti', 'Jl Toraja', 'Perempuan', '2015-09-10', 'Guru'),
(8, 'yum', 'Stephen Chow', 'loid', 'Laki-laki', '2015-03-10', 'Administrator'),
(9, '123456', 'Seorang admin', 'Jl. Adminnya', 'Laki-laki', '2015-09-15', 'Administrator'),
(10, '092378403879', 'Kucing', 'Jl. Kucing', 'Laki-laki', '2015-07-17', ''),
(11, '123456789', 'kucing', 'Jl. kucinggggg', 'Perempuan', '0000-00-00', ''),
(12, '123456787', 'facebooookeeerrsss', 'dsdsssxxxxx', 'Perempuan', '2016-04-13', ''),
(13, '324324', 'Yahooooo', 'dssads', 'Laki-laki', '2015-09-16', ''),
(14, '12346789', 'Kucing', 'Jl. jalan', 'Laki-laki', '2012-06-13', ''),
(15, 'sdsa', 'sds', 'dsasddd', 'Perempuan', '2015-05-06', ''),
(16, '1234562', 'feli', 'as', 'Laki-laki', '2015-05-06', 'Administrator'),
(17, '2015020', 'hjdskj', 'dfhdkjnlsnksdjfjkbds k sd s sd nsn dsj jds kds\nk knds kn\n dsk nskd ds  nds  nsd dsn sd sdjkk', 'Entertainment', '0000-00-00', ''),
(18, 'Perempuan', 'yahahaha', '.jldskjfl', 'Politic', '0000-00-00', ''),
(19, '', 'hfdkjh', 'kjjkh', 'Sport', '0000-00-00', ''),
(20, '22', 'jhsdj', 'kfhd', 'Politic', '0000-00-00', ''),
(21, '22', 'uhh', 'fdsfds', 'Sport', '0000-00-00', ''),
(22, '10', 'hacibi', 'dasdsa', 'Entertainment', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
`id_kelas` int(10) NOT NULL,
  `kd_kelas` varchar(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kd_kelas`) VALUES
(5, 'X 1'),
(6, 'X 2'),
(7, 'X 3'),
(8, 'X 4'),
(10, 'XI IPA 1'),
(11, 'XI IPA 2'),
(12, 'XI IPA 3'),
(13, 'XI IPA 4'),
(14, 'XI IPA 5'),
(15, 'XI IPS 1'),
(16, 'XI IPS 2'),
(17, 'XI IPS 3'),
(18, 'XI IPS 4'),
(19, 'XI IPS 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
`id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `id_guru` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `id_guru`) VALUES
(1, 'Bahasa Indonesiax', '6'),
(2, 'Matematika II', '7'),
(3, 'Bahasa Inggris', '8'),
(4, 'Dota', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
`id_materi` int(11) NOT NULL,
  `judul_materi` varchar(150) NOT NULL,
  `nama_file` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_mapel` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`, `nama_file`, `waktu`, `id_mapel`) VALUES
(1, 'yahaaa', '25_1. TM Syahru_3.pdf', '2015-09-08 12:32:58', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengajar`
--

CREATE TABLE IF NOT EXISTS `mengajar` (
`id_diajarkan` int(11) NOT NULL,
  `id_mapel` varchar(15) NOT NULL,
  `id_kelas` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `mengajar`
--

INSERT INTO `mengajar` (`id_diajarkan`, `id_mapel`, `id_kelas`) VALUES
(2, '2', '11'),
(3, '3', '6'),
(4, '2', '10'),
(6, '1', '13'),
(7, '1', '10'),
(8, '2', '5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_quis` int(11) NOT NULL,
  `id_siswa` varchar(15) NOT NULL,
  `nilai` varchar(10) NOT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `quis`
--

CREATE TABLE IF NOT EXISTS `quis` (
`id_quis` int(10) NOT NULL,
  `id_mapel` varchar(11) NOT NULL,
  `judul_quis` text NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data untuk tabel `quis`
--

INSERT INTO `quis` (`id_quis`, `id_mapel`, `judul_quis`, `tgl_upload`) VALUES
(2, '4', 'sfkdjkjhkd', '2015-09-09 03:51:47'),
(4, '4', 'fsd', '2015-09-09 03:54:19'),
(7, '4', 'hyfhjfjf', '2015-09-09 03:54:19'),
(9, '4', 'hdfhjtkyu', '2015-09-09 03:54:19'),
(10, '4', 'hfhgf', '2015-09-09 03:54:19'),
(11, '4', 'hhdrwe', '2015-09-09 03:54:19'),
(12, '4', 'gdfgd', '2015-09-09 03:54:19'),
(13, '1', 'Kucing meong', '2015-09-11 07:44:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
`id_siswa` int(10) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `telp` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `alamat`, `jk`, `agama`, `telp`) VALUES
(1, '2015001', ' A. REZKY PUJIANTY RUSTAN', '', 'Perempuan', 'Islam', ''),
(2, '2015002', 'ALANJAYA PRANATA', '', 'Perempuan', 'Islam', ''),
(4, '2015003', 'ANDI ENDANG SYAM SURYA ALAM', '', 'Perempuan', 'Kristen', ''),
(6, '2015004', 'ANDI MUH. YUSRI', '', 'Laki-laki', 'Islam', ''),
(7, '2015005', 'DIMAS FIKRI ADJI', '', 'Laki-laki', 'Budha', ''),
(8, '2015006', 'FERNANDO MICHAEL MOA', '', 'Laki-laki', 'Hindu', ''),
(9, '2015007', 'HAMKA', '', 'Laki-laki', 'Islam', ''),
(10, '2015008', 'HASLIATY MANSYUR', '', 'Perempuan', 'Islam', ''),
(11, '2015009', 'HERIAN MAYCELON SAPUTRA', '', 'Laki-laki', 'Kristen', ''),
(12, '2015010', 'IRANTY DEWI', '', 'Perempuan', 'Islam', ''),
(13, '2015011', 'IRMAYANTI M', '', 'Perempuan', 'Islam', ''),
(14, '2015012', 'KHAERUL MUTMAINNAH', '', 'Perempuan', 'Kristen', ''),
(15, '2015013', 'LUCKY SUSANTO', '', 'Laki-laki', 'Kristem', ''),
(16, '2015014', 'MUH. BILGAIBI RAHMAN', '', 'Laki-laki', 'Kristen', ''),
(17, '2015015', 'MUH. JUANDA SAPUTRA', '', 'Laki-laki', 'Kristen', ''),
(18, '2015016', 'MUH. TAUFIQ', '', 'Laki-laki', 'Islam', ''),
(19, '2015017', 'NUR HIKMA', '', 'Perempuan', 'Kristen', ''),
(20, '2015018', 'NUR RIFKA ALFIAN', '', 'Perempuan', 'Islam', ''),
(21, '2015019', 'NUR APRIANI', '', 'Perempuan', 'Islam', ''),
(22, '2015020', 'NUR FADILLAH', 'Jl. Andi Tonro', 'Perempuan', 'Islam', ''),
(23, '2015021', 'SUKOCO', 'Jl. Kucing', 'Laki-laki', 'Islam', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa_kelas`
--

CREATE TABLE IF NOT EXISTS `siswa_kelas` (
`id_daftar_siswa` int(11) NOT NULL,
  `id_siswa` varchar(10) NOT NULL,
  `id_kelas` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data untuk tabel `siswa_kelas`
--

INSERT INTO `siswa_kelas` (`id_daftar_siswa`, `id_siswa`, `id_kelas`) VALUES
(1, '1', 5),
(2, '2', 18),
(3, '4', 11),
(5, '7', 5),
(6, '8', 5),
(8, '9', 10),
(10, '10', 5),
(11, '11', 5),
(12, '12', 5),
(13, '13', 5),
(14, '14', 5),
(15, '15', 5),
(16, '16', 5),
(17, '17', 5),
(18, '18', 5),
(19, '19', 5),
(20, '20', 5),
(21, '21', 5),
(22, '22', 5),
(23, '23', 5),
(24, '6', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal_quis`
--

CREATE TABLE IF NOT EXISTS `soal_quis` (
`id_soal` int(11) NOT NULL,
  `id_quis` varchar(10) NOT NULL,
  `soal` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `kunci` varchar(5) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data untuk tabel `soal_quis`
--

INSERT INTO `soal_quis` (`id_soal`, `id_quis`, `soal`, `a`, `b`, `c`, `d`, `kunci`) VALUES
(3, '2', 'Di mana Alamat Stmik ?', 'Perintis KM 7', 'Perintis KM 5', 'Perintis KM 9', 'Perintis KM 10', 'A'),
(4, '2', 'Warna Kucing ?', 'Merah', 'Hijau', 'Biru', 'Kuning', 'C'),
(18, '2', 'Media Sosial Buat Mark Szuckenberg ?Media Sosial Buat Mark Szuckenberg ?Media Sosial Buat Mark Szuckenberg ?Media Sosial Buat Mark Szuckenberg ?Media Sosial Buat Mark Szuckenberg ?', 'yahoo', 'facebook', 'Twitter', 'Friendstar', 'B'),
(19, '13', 'kjddhkas', 'ljdl', 'kljdslkj', 'ljldkjl', 'jljdslkjjl', 'A'),
(20, '13', 'lkkjljdslkl', 'kjlkk', 'lkjlkkl', 'kjlk', 'lkjlk', 'C'),
(21, '13', ';kdjfld', 'lkjlkjdlj', 'dshoh', 'hosdoh9', '89h9d8', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE IF NOT EXISTS `tugas` (
`id_tugas` int(11) NOT NULL,
  `judul_tugas` varchar(150) NOT NULL,
  `nama_file` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_mapel` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id_tugas`, `judul_tugas`, `nama_file`, `waktu`, `id_mapel`) VALUES
(1, 'Tugas_1ddd', '71_transkrip.pdf', '2015-09-08 11:15:43', '4'),
(4, 'ds', 'ds.dc', '2015-09-08 11:57:23', '4'),
(5, 'sds', 'fsfe', '2015-09-08 11:57:23', '2'),
(11, 'fsddasdas', '82_2.docx', '2015-09-10 04:51:12', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
 ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
 ADD PRIMARY KEY (`id_mapel`), ADD UNIQUE KEY `id_guru` (`id_guru`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
 ADD PRIMARY KEY (`id_materi`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
 ADD PRIMARY KEY (`id_diajarkan`);

--
-- Indexes for table `quis`
--
ALTER TABLE `quis`
 ADD PRIMARY KEY (`id_quis`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
 ADD PRIMARY KEY (`id_siswa`), ADD UNIQUE KEY `nis` (`nis`);

--
-- Indexes for table `siswa_kelas`
--
ALTER TABLE `siswa_kelas`
 ADD PRIMARY KEY (`id_daftar_siswa`);

--
-- Indexes for table `soal_quis`
--
ALTER TABLE `soal_quis`
 ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `tugas`
--
ALTER TABLE `tugas`
 ADD PRIMARY KEY (`id_tugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
MODIFY `id_kelas` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
MODIFY `id_materi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mengajar`
--
ALTER TABLE `mengajar`
MODIFY `id_diajarkan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `quis`
--
ALTER TABLE `quis`
MODIFY `id_quis` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
MODIFY `id_siswa` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `siswa_kelas`
--
ALTER TABLE `siswa_kelas`
MODIFY `id_daftar_siswa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `soal_quis`
--
ALTER TABLE `soal_quis`
MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tugas`
--
ALTER TABLE `tugas`
MODIFY `id_tugas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
