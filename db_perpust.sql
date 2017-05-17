-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2017 pada 00.48
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpust`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_user` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'yusron', 'yusron', '0'),
(3, 'super', 'super', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(20) NOT NULL,
  `nama_anggota` varchar(300) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` varchar(30) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tgl_bergabung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama_anggota`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `alamat`, `tgl_bergabung`) VALUES
(1, 'Irsyad Rahman', 'Tuban', '2000-12-31', '087651278891', 'Jl. Wali Bonang', '2017-01-02'),
(2, 'Qoriatul Masfufah', 'Madiun', '1999-12-06', '0812387920', 'Jl Dian Pisang', '2017-12-01'),
(3, 'Yusron', 'Situbondo', '2000-02-03', '082251461910', 'Jl cempaka 2 no 2b', '2017-01-01'),
(4, 'Yessy', 'Blitar', '2000-08-08', '08123456182', 'srengat', '2017-01-01'),
(5, 'Yobel', 'Jombang', '2017-05-13', '08971561829', 'Jl bunga', '2017-06-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `sisa_buku` int(10) NOT NULL,
  `sampul` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`, `tgl_terbit`, `penerbit`, `sisa_buku`, `sampul`) VALUES
(1, 'My deer', 'as', '2017-12-03', 'Nub', 5, 'enjoy.png'),
(2, 'Superman Back', 'we', '2017-09-03', 'hox', 30, '90f636a46e5cfc8176495865fcb025c5.jpg'),
(3, 'My Place', 'gogli', '2009-02-13', 'Nub', 82, '27819c_2ab4ad2df53e97cab04b858c3923cd4d.png'),
(4, 'Butterfly', 'op', '2017-12-03', 'Nub', 9, 'cvr19.png'),
(5, 'Intuisi', 'joker', '2001-04-03', 'biu', 24, '53d7f9cd4e775ab66857731bfceab961.jpg'),
(6, 'Life cycle', 'hunian', '2010-12-03', 'nice', 44, '6e52dff2f0fb5e529e9f39a068a694ae.jpg'),
(8, 'Surat Kecil untuk Tuhan', 'Asma Nadia', '2017-05-09', 'Gramedia', 2, 'New_Doc_2017-03-05_4.jpg'),
(9, 'sajsdak', 'sakdnjasld;lksad', '2017-12-31', 'uhdabsijK', 90, '2_Lihat_versi_dan_create_db_latihan_1.PNG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(30) NOT NULL,
  `id_user` int(3) NOT NULL,
  `id_anggota` int(30) NOT NULL,
  `id_buku` int(30) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `jumlah_pinjam` int(50) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_anggota`, `id_buku`, `tgl_peminjaman`, `tgl_pengembalian`, `jumlah_pinjam`, `status`) VALUES
(33, 1, 4, 3, '2017-05-15', '2017-05-14', 1, 0),
(34, 1, 3, 2, '2017-05-16', '2017-05-17', 1, 0),
(35, 0, 3, 2, '2017-05-17', '2017-06-17', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
