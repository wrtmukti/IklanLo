-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Nov 2019 pada 17.19
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_olx2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(70) NOT NULL,
  `telp_admin` varchar(20) NOT NULL,
  `bagian` varchar(30) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `pass_admin` varchar(50) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `email_admin`, `telp_admin`, `bagian`, `username_admin`, `pass_admin`, `gambar`) VALUES
(123180067, 'Muhammad Pramudya Wicaksono', 'muhammadpramudya18@gmail.com', '081277058441', 'Database', 'muddy', 'rajakecik', ''),
(469655999, 'Wiratama Mukti', 'mukti.wiratama 99@gmail.com', '085888867756', 'Back-End', 'mukti', '1212', '5dc912b446eeb.jpg'),
(902461298, 'Fredrio Arcello', 'fredrioarcello169@gmail.com', '082213531645', 'Front-End', 'fredrio', '1122', '5dc8dce5a9d73.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_iklan` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `kategori` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_iklan`, `id_user`, `nama_barang`, `kategori`, `harga`, `lokasi`, `gambar`) VALUES
(223896616, 290327971, 'Meja Set Up Programmer Pro', 'Perlengkapan', '200.000', 'Jawa Tengah', '5dc8ddfe8dbde.jpg'),
(329175617, 272116080, 'Era jadulll, Mobil Chevy Chevelle kece abis bro', 'Kendaraan', '240.000.000', 'Jawa Barat', '5dc8d67ca17c0.jpg'),
(399392739, 338066342, 'ROG Bekas lanjay no minus', 'Elektronik', '13.000.000', 'Jawa Tengah', '5dc8da197b80e.jpg'),
(400366137, 247743176, 'Mulussss, Motor Ninja Kawasaki 250R baru pakai 2 tahun', 'Kendaraan', '20.000.000', 'DKI Jakarta', '5dc8d2255ca48.jpg'),
(469992020, 272116080, 'Kerennn abis Vespa Classic jaman dulu... mulussss', 'Kendaraan', '29.000.000', 'Jawa Barat', '5dc8d5b802944.jpg'),
(567538052, 290327971, 'iphone 11 pro max  256 gb mulusss negoo aja', 'Elektronik', '13.000.000', 'DI Yogyakarta', '5dc8de9fb5c3b.jpg'),
(593665781, 729233520, 'Hisense32\" R4 HD Smart LED TV', 'Elektronik', '5.000.000', 'Aceh', '5dc8df4bc9ae4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `id_iklan` int(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `ket_e` text NOT NULL,
  `id_e` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`id_iklan`, `jenis`, `ket_e`, `id_e`) VALUES
(593665781, 'Lain - lain', 'TV BARU, ukuran sesuai judul', '452836115'),
(567538052, 'Handphone', 'baru pakai buat review brooo', '592317482'),
(399392739, 'Laptop', 'ram asli, bonus ssd dan flashdisk 36gb, nego tipisss', '919904291');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_iklan` int(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `ket_k` text NOT NULL,
  `id_k` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id_iklan`, `jenis`, `tahun`, `ket_k`, `id_k`) VALUES
(469992020, 'Motor', '2015', 'warna sesuai gambar, mesin baguss, rajin servicen plat bandungg', '337717146'),
(400366137, 'Motor', '2017', 'motor mulus, plat b, knalpot asli, bodi asli', '452584699'),
(329175617, 'Mobil', '2014', 'antikk, keren, kece parah, mesin 100% aman, knalpot asli daleman mantappp, nego tipiss', '660839176');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perlengkapan`
--

CREATE TABLE `perlengkapan` (
  `id_iklan` int(10) NOT NULL,
  `id_p` varchar(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `kondisi_p` varchar(10) NOT NULL,
  `ket_p` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `perlengkapan`
--

INSERT INTO `perlengkapan` (`id_iklan`, `id_p`, `jenis`, `kondisi_p`, `ket_p`) VALUES
(223896616, '566283575', 'Perlengkapan Rumah', 'Baru', 'baru keluar dari pabrik, berkaki 4, cat muluss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `username_user` varchar(20) DEFAULT NULL,
  `pass_user` varchar(25) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(300) DEFAULT NULL,
  `telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username_user`, `pass_user`, `nama`, `email`, `alamat`, `telp`) VALUES
(247743176, 'andika', 'kangenbang', 'andika kangen bang', 'andikakangenbang@gmail.com', 'tebet, jakarta selatan', '81389823566'),
(272116080, 'fiersa', 'besari', 'Fiersa Besari', 'fiersabesarkali@gmail.com', 'Bandung, Jawa Barat', '08128839432'),
(290327971, 'ihza', 'passya', 'Ihza Passya', 'ihzapasya@gmail.com', 'boyolali,jawa tengah, indonesia', '08776526333'),
(338066342, 'bryan', 'bule', 'Bryan Sutrisno', 'bryanorgjawa@yahoo.com', 'magelang, jawa tengah', '089987234675'),
(729233520, 'wahyu', 'aja', 'Wahyu aja', 'wahyuaja@yahoo.com', 'pekanbaru,riau', '089837737193');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_iklan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id_e`),
  ADD KEY `id_iklan` (`id_iklan`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_k`),
  ADD KEY `id_iklan` (`id_iklan`);

--
-- Indeks untuk tabel `perlengkapan`
--
ALTER TABLE `perlengkapan`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_iklan` (`id_iklan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD CONSTRAINT `elektronik_ibfk_1` FOREIGN KEY (`id_iklan`) REFERENCES `barang` (`id_iklan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `kendaraan_ibfk_1` FOREIGN KEY (`id_iklan`) REFERENCES `barang` (`id_iklan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `perlengkapan`
--
ALTER TABLE `perlengkapan`
  ADD CONSTRAINT `perlengkapan_ibfk_1` FOREIGN KEY (`id_iklan`) REFERENCES `barang` (`id_iklan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
