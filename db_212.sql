-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Agu 2018 pada 16.21
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_212`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `satuan_barang` varchar(10) NOT NULL,
  `id_kategori` varchar(5) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stock_barang` int(11) NOT NULL,
  `id_mitra` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `satuan_barang`, `id_kategori`, `harga_beli`, `harga_jual`, `stock_barang`, `id_mitra`) VALUES
('BG0001', 'Bimoli', 'PCS', 'KG001', 19000, 20000, 0, 'MT001'),
('BG0002', 'Royco', 'PCS', 'KG001', 1000, 1100, 0, 'MT001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk`
--

CREATE TABLE IF NOT EXISTS `barang_masuk` (
  `kode_barangmasuk` varchar(10) NOT NULL,
  `tgl_barangmasuk` datetime NOT NULL,
  `total_qty` int(3) NOT NULL,
  `total_harga_beli` int(11) NOT NULL,
  `username` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_masuk_details`
--

CREATE TABLE IF NOT EXISTS `barang_masuk_details` (
  `kode_barangmasuk` varchar(10) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `qty` int(3) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `id_mitra` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL,
  `deskripsi_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`) VALUES
('KG001', 'Bumbu dapur', 'Segala jenis aneka bumbu dapur');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE IF NOT EXISTS `mitra` (
  `id_mitra` varchar(5) NOT NULL,
  `nama_mitra` varchar(30) NOT NULL,
  `alamat_mitra` varchar(100) NOT NULL,
  `telp_mitra` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `nama_mitra`, `alamat_mitra`, `telp_mitra`) VALUES
('MT001', 'Subur Jaya', 'Kp. Kadu', '089630963190');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
  `kode_penjualan` varchar(10) NOT NULL,
  `tgl_penjualan` date NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `username` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan_details`
--

CREATE TABLE IF NOT EXISTS `penjualan_details` (
  `kode_penjualan` varchar(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `retur_penjualan`
--

CREATE TABLE IF NOT EXISTS `retur_penjualan` (
  `kode_returpenjualan` varchar(10) NOT NULL,
  `tgl_returpenjualan` date NOT NULL,
  `kode_penjualan` varchar(10) NOT NULL,
  `jumlah_barangretur` int(11) NOT NULL,
  `username` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `retur_penjualan_details`
--

CREATE TABLE IF NOT EXISTS `retur_penjualan_details` (
  `kode_returpenjualan` varchar(10) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `qty_retur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(8) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `authorization` varchar(20) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `fullname`, `authorization`, `photo`) VALUES
('arigo', '1bc0249a6412ef49b07fe6f62e6dc8de', 'Arigo', 'Kasir', 'assets/images/avatars/arigo.jpg'),
('elisa', '1bc0249a6412ef49b07fe6f62e6dc8de', 'Elisa Fitriani', 'Kepala Toko', 'assets/images/avatars/elisa.jpg'),
('fitri', '1bc0249a6412ef49b07fe6f62e6dc8de', 'Fitri Nurul Fathonah', 'Administrator', 'assets/images/avatars/fitri.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id_barang`), ADD KEY `id_mitra` (`id_mitra`), ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
 ADD PRIMARY KEY (`kode_barangmasuk`), ADD KEY `username` (`username`);

--
-- Indexes for table `barang_masuk_details`
--
ALTER TABLE `barang_masuk_details`
 ADD KEY `kode_barangmasuk` (`kode_barangmasuk`), ADD KEY `id_barang` (`id_barang`), ADD KEY `id_mitra` (`id_mitra`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
 ADD PRIMARY KEY (`id_mitra`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
 ADD PRIMARY KEY (`kode_penjualan`), ADD KEY `username` (`username`);

--
-- Indexes for table `penjualan_details`
--
ALTER TABLE `penjualan_details`
 ADD KEY `kode_penjualan` (`kode_penjualan`), ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `retur_penjualan`
--
ALTER TABLE `retur_penjualan`
 ADD PRIMARY KEY (`kode_returpenjualan`), ADD KEY `kode_penjualan` (`kode_penjualan`), ADD KEY `username` (`username`);

--
-- Indexes for table `retur_penjualan_details`
--
ALTER TABLE `retur_penjualan_details`
 ADD KEY `id_barang` (`id_barang`), ADD KEY `kode_returpenjualan` (`kode_returpenjualan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`),
ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barang_masuk`
--
ALTER TABLE `barang_masuk`
ADD CONSTRAINT `barang_masuk_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `barang_masuk_details`
--
ALTER TABLE `barang_masuk_details`
ADD CONSTRAINT `barang_masuk_details_ibfk_1` FOREIGN KEY (`kode_barangmasuk`) REFERENCES `barang_masuk` (`kode_barangmasuk`) ON UPDATE CASCADE,
ADD CONSTRAINT `barang_masuk_details_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON UPDATE CASCADE,
ADD CONSTRAINT `barang_masuk_details_ibfk_3` FOREIGN KEY (`id_mitra`) REFERENCES `mitra` (`id_mitra`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualan_details`
--
ALTER TABLE `penjualan_details`
ADD CONSTRAINT `penjualan_details_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
ADD CONSTRAINT `penjualan_details_ibfk_2` FOREIGN KEY (`kode_penjualan`) REFERENCES `penjualan` (`kode_penjualan`);

--
-- Ketidakleluasaan untuk tabel `retur_penjualan`
--
ALTER TABLE `retur_penjualan`
ADD CONSTRAINT `retur_penjualan_ibfk_1` FOREIGN KEY (`kode_penjualan`) REFERENCES `penjualan` (`kode_penjualan`),
ADD CONSTRAINT `retur_penjualan_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `retur_penjualan_details`
--
ALTER TABLE `retur_penjualan_details`
ADD CONSTRAINT `retur_penjualan_details_ibfk_1` FOREIGN KEY (`kode_returpenjualan`) REFERENCES `retur_penjualan` (`kode_returpenjualan`),
ADD CONSTRAINT `retur_penjualan_details_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
