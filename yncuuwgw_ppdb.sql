-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 28 Jan 2021 pada 18.46
-- Versi server: 5.7.24
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yncuuwgw_ppdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(16) NOT NULL,
  `nama_ortu` varchar(200) NOT NULL,
  `no_hportu` varchar(16) NOT NULL,
  `asal_smp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`id_pendaftaran`, `tgl_daftar`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `nama_ortu`, `no_hportu`, `asal_smp`) VALUES
(1, '2020-03-17', 'Ahmad Naim Permaidi', 'Pati', '2019-03-11', 'L', 'Islam', 'Jepara', '081324567890', 'Waidi', '08321456790', 'MTs Al Kafirun'),
(2, '2020-03-20', 'Hapsoro Mahendra Poetra', 'Bogor', '2004-11-26', 'L', 'Islam', 'Alamat \nJl. Sentot Alibasa \nLor. Masjid At-Taqwa\nPerum Graha Taman Pasar Baru\nBlok F. no 5. rt 17. selincah - JAMBI', '0895336781021', 'Didik Haryanto', '082112047874', 'MTsN 2 Kota Jambi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran1`
--

CREATE TABLE `pendaftaran1` (
  `id` int(8) NOT NULL,
  `id_pendaftaran` varchar(255) NOT NULL,
  `nm_lengkap` varchar(255) NOT NULL,
  `tmp_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `jns_kelamin` varchar(255) NOT NULL,
  `agm` varchar(255) NOT NULL,
  `no_hp` int(255) NOT NULL,
  `nm_ortu` int(255) NOT NULL,
  `no_hp_ortu` int(255) NOT NULL,
  `asl_sekolah` varchar(255) NOT NULL,
  `almt` varchar(255) NOT NULL,
  `nm_file` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `sem3_nl1` int(255) NOT NULL,
  `sem3_nl2` int(255) NOT NULL,
  `sem3_nl3` int(255) NOT NULL,
  `sem3_nl4` int(255) NOT NULL,
  `sem4_nl1` int(255) NOT NULL,
  `sem4_nl2` int(255) NOT NULL,
  `sem4_nl3` int(255) NOT NULL,
  `sem4_nl4` int(255) NOT NULL,
  `sem5_nl1` int(255) NOT NULL,
  `sem5_nl2` int(255) NOT NULL,
  `sem5_nl3` int(255) NOT NULL,
  `sem5_nl4` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nm_file_kk` varchar(255) NOT NULL,
  `nm_file_ak` varchar(255) NOT NULL,
  `nm_file_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran1`
--

INSERT INTO `pendaftaran1` (`id`, `id_pendaftaran`, `nm_lengkap`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `agm`, `no_hp`, `nm_ortu`, `no_hp_ortu`, `asl_sekolah`, `almt`, `nm_file`, `jurusan`, `sem3_nl1`, `sem3_nl2`, `sem3_nl3`, `sem3_nl4`, `sem4_nl1`, `sem4_nl2`, `sem4_nl3`, `sem4_nl4`, `sem5_nl1`, `sem5_nl2`, `sem5_nl3`, `sem5_nl4`, `email`, `nm_file_kk`, `nm_file_ak`, `nm_file_foto`) VALUES
(11, 'U2021001', 'alief', 'kelet', '2021-01-29', 'L', 'islam', 2147483647, 0, 2147483647, 'mts sunan muria', 'kelet keling jepara ', 'Screenshot (66).png', 'IPA', 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 99, 'rafiasik77@gmail.com', 'Screenshot (69).png', 'Screenshot (70).png', 'Screenshot (68).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'wsiswa', 'wsiswa', 'wsiswa'),
(2, 'wortu', 'wortu', 'wortu'),
(3, 'wsgm', 'wsgm', 'wsgm'),
(4, 'admin', 'admin', 'admin'),
(5, 'user', 'user', 'user'),
(12, 'user1', 'user1', 'user1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `pendaftaran1`
--
ALTER TABLE `pendaftaran1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran1`
--
ALTER TABLE `pendaftaran1`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
