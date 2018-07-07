-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jul 2018 pada 07.21
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sie_kepegawaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cuti`
--

CREATE TABLE `tb_cuti` (
  `kode_cuti` int(11) NOT NULL,
  `nip_peg` varchar(30) NOT NULL,
  `nama_peg` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `jns_cuti` varchar(50) NOT NULL,
  `tgl_cuti` date NOT NULL,
  `lama_cuti` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_cuti`
--

INSERT INTO `tb_cuti` (`kode_cuti`, `nip_peg`, `nama_peg`, `alamat`, `telepon`, `jns_cuti`, `tgl_cuti`, `lama_cuti`) VALUES
(1, '19611231 198602 1 055', 'I Putu Astawa, Sos.', 'Jl. Trengguli IX N0. 6 Dps\r\n', '081338174731', 'liburan', '2018-06-10', '3 hari'),
(2, '19621117 198303 2 013			', 'wijaya', 'dusun', '087114463619', 'liburan', '2018-06-07', '2 hari'),
(3, '19621117 198303 2 022		', 'KUSUMA', 'dusun', '087326555617', 'hari raya', '2018-06-20', '3 hari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_golongan`
--

CREATE TABLE `tb_golongan` (
  `kode_gol` int(11) NOT NULL,
  `golongan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_golongan`
--

INSERT INTO `tb_golongan` (`kode_gol`, `golongan`) VALUES
(1, 'pembina tk. 1 IV/B'),
(2, 'pembina IV/A'),
(3, 'penata III/C'),
(4, 'Penata Tk.I III/D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `kode_jbt` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_jbt` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `t_ijazah` varchar(10) NOT NULL,
  `pendidikan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`kode_jbt`, `nip`, `nama`, `nama_jbt`, `golongan`, `t_ijazah`, `pendidikan`) VALUES
(1, '150020009', 'widiantari', 'sekretaris', 'pembina IV/A', 'S1', 'hukum'),
(2, '150020002', 'martina dewi', 'kadis', 'pembina tk. 1 IV/B', 'S2', 'ekonomi pembangunan'),
(3, '150020007', 'wahyu cahyani', 'Staff', 'penata III/C', 'S1', 'ilmu sosial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jbt`
--

CREATE TABLE `tb_jbt` (
  `id_jbt` int(11) NOT NULL,
  `nama_jbt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jbt`
--

INSERT INTO `tb_jbt` (`id_jbt`, `nama_jbt`) VALUES
(1, 'kadis'),
(2, 'sekretaris'),
(3, 'Staff'),
(4, 'Pengawasan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pensiun`
--

CREATE TABLE `tb_pensiun` (
  `kode_pensiun` int(11) NOT NULL,
  `nip_peg` varchar(30) NOT NULL,
  `nama_peg` varchar(100) NOT NULL,
  `jenis_pensiun` varchar(50) NOT NULL,
  `tgl_pensiun` date NOT NULL,
  `alamat_pensiun` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pensiun`
--

INSERT INTO `tb_pensiun` (`kode_pensiun`, `nip_peg`, `nama_peg`, `jenis_pensiun`, `tgl_pensiun`, `alamat_pensiun`) VALUES
(1, '19611231 198602 1 055	', 'I Putu Astawa, Sos.	', 'tahunan', '2018-01-30', 'disnaker 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pegawai`
--

CREATE TABLE `user_pegawai` (
  `kode_user` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `jns_kel` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_pegawai`
--

INSERT INTO `user_pegawai` (`kode_user`, `nip`, `password`, `level`, `nama`, `tgl_lhr`, `jns_kel`, `agama`, `alamat`, `telp`, `email`) VALUES
(1, '150020009', '1234', 'PETUGAS', 'widiantari', '1997-04-21', 'Perempuan', 'Buddha', 'jln kunti II pandu', '083114463610', '@email.com'),
(2, '150020002', '1234', 'PIMPINAN', 'martina dewi', '1997-03-02', 'Perempuan', 'Hindu', 'pomogan', '089221554221', '@gmail.com'),
(3, '150020007', '1234', 'PEGAWAI', 'wahyu cahyani', '1997-03-03', 'Perempuan', 'Islam', 'gumicik', '098112563224', '@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_cuti`
--
ALTER TABLE `tb_cuti`
  ADD PRIMARY KEY (`kode_cuti`);

--
-- Indexes for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  ADD PRIMARY KEY (`kode_gol`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`kode_jbt`);

--
-- Indexes for table `tb_jbt`
--
ALTER TABLE `tb_jbt`
  ADD PRIMARY KEY (`id_jbt`);

--
-- Indexes for table `tb_pensiun`
--
ALTER TABLE `tb_pensiun`
  ADD PRIMARY KEY (`kode_pensiun`);

--
-- Indexes for table `user_pegawai`
--
ALTER TABLE `user_pegawai`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_cuti`
--
ALTER TABLE `tb_cuti`
  MODIFY `kode_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_golongan`
--
ALTER TABLE `tb_golongan`
  MODIFY `kode_gol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `kode_jbt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_jbt`
--
ALTER TABLE `tb_jbt`
  MODIFY `id_jbt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_pensiun`
--
ALTER TABLE `tb_pensiun`
  MODIFY `kode_pensiun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_pegawai`
--
ALTER TABLE `user_pegawai`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
