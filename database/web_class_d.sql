-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2023 pada 17.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_class_d`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` bigint(13) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `nama`, `nim`, `foto`, `alamat`, `jabatan`) VALUES
(1, 'Rachel Ardana Putra Ginting', 2022573010111, '..\\assets\\img\\rachel.jpg', 'Pulau Tiga', 'Ex-komisaris SM 1&2'),
(2, 'M Akbar Zulfikar', 2022573010093, '..\\assets\\img\\abay.jpg', 'Kota Langsa', 'Ex-Wakil SM 1&2..Komisaris SM3'),
(3, 'A\'fiyyah Salsabillah Nhazalta', 2022573010003, 'assets\\img\\afiyyah.jpg', 'Lhokseumawe', 'Ex-Bendahara'),
(4, 'Agung Ramadhan Setiawan', 2022573010081, '..\\assets\\img\\agung.jpg', 'Pangkalan Susu', 'Wakil Komisaris SM3'),
(5, 'Andrian Fakhruza', 2022573010060, '..\\assets\\img\\andrian.jpg', 'Lhokseumawe', 'Anggota'),
(6, 'Aura Syaskia', 2022573010005, '..\\assets\\img\\aura.jpg', 'Lhokseumawe', 'Anggota'),
(7, 'Cut Siti Sarah Azkiani', 2022573010007, '..\\assets\\img\\cutsarah.jpg', 'Lhokseumawe', 'Anggota'),
(8, 'Dimas Kurniawan', 2022573010009, '..\\assets\\img\\dimas.jpg', 'Pematang Siantar', 'Anggota'),
(9, 'Fachrul Rozi Rangkuti', 2022573010011, '..\\assets\\img\\dimas.jpg', 'Lhokseumawe', 'Anggota'),
(10, 'Febri Fanisa', 2022573010090, '..\\assets\\img\\febrifanisa.jpg', 'Bireuen', 'Anggota'),
(11, 'Jabal Akbar', 2022573010065, '..\\assets\\img\\jabal.jpg', 'Brandan', 'Anggota'),
(12, 'Muhammad Abil', 2022573010067, '..\\assets\\img\\abil.jpg', 'Lhokseumawe', 'Anggota'),
(13, 'Muhammad Alfitrah', 2022573010020, '..\\assets\\img\\fitrah.jpg', 'Lhokseumawe', 'Anggota'),
(14, 'Muhammad Fadhillah', 2022573010097, '..\\assets\\img\\fadil.jpg', 'Julok Rayeuk', 'Anggota'),
(15, 'Muhammad Maulana', 2022573010100, '..\\assets\\img\\momol.jpg', 'Lhokseumawe', 'Anggota'),
(16, 'Muhammad Rafi Aulia', 2022573010069, '..\\assets\\img\\rafli.jpg', 'Kota Langsa', 'Anggota'),
(17, 'Muhammad Rizki', 2022573010023, '..\\assets\\img\\reyhan dan rizki.jpg', 'Bireuen', 'Developer'),
(18, 'Mulyani', 2022573010026, '..\\assets\\img\\mulyani.jpg', 'Kota Binjei', 'Anggota'),
(19, 'Naomi Natalie BR Sembiring', 2022573010029, '..\\assets\\img\\naomi.jpg', 'Kota Medan', 'Anggota'),
(20, 'Nia Ramadhani', 2022573010107, '..\\assets\\img\\nia.jpg', 'Bireuen', 'Anggota'),
(21, 'Nora Syuhada', 2022573010035, '..\\assets\\img\\nora.jpg', 'Lhokseumawe', 'Anggota'),
(22, 'Nurul Afiqah Simbolon', 2022573010073, '..\\assets\\img\\nurul afiqa.jpg', 'Kota Medan', 'Anggota'),
(23, 'Nurul Agustina', 2022573010037, '..\\assets\\img\\nurul agustina.jpg', 'Kota Medan', 'Anggota'),
(24, 'Reyhan Putra Syahmi', 2022573010114, '..\\assets\\img\\reyhan dan rizki.jpg', 'Padang', 'Anggota'),
(25, 'Safira Dara Sholehah', 2022573010041, '..\\assets\\img\\safira.jpg', 'Lhokseumawe', 'Anggota'),
(26, 'Sri Mutia', 2022573010009, '..\\assets\\img\\sri.jpg', 'Lhokseumawe', 'Anggota'),
(27, 'Syahira Maharani', 2022573010048, '..\\assets\\img\\syahira.jpg', 'Lhokseumawe', 'Anggota'),
(28, 'Tasya Anisa', 2022573010118, '..\\assets\\img\\tasya.jpg', 'Lhokseumawe', 'Anggota'),
(29, 'Riski Ananda', 2022573010115, '..\\assets\\img\\kinan.jpg', 'Lhokseumawe', 'Anggota'),
(30, 'Teuku Aldie Aulia ', 2022573010079, '..\\assets\\img\\aldi.jpg', 'Lhokseumawe', 'Anggota'),
(31, 'Sunil Hukmi', 2022573010077, '..\\assets\\img\\sunil.jpg', 'Lhokseumawe', 'Anggota'),
(32, 'Afifa Lhokseum Dwi Putri', 2022573010002, '..\\assets\\img\\afifa.jpg', 'Lhokseumawe', 'Anggota'),
(33, 'Vidya Ayu Ningtyas', 2022573010053, '..\\assets\\img\\vidya.jpg', 'Lhokseumawe', 'Anggota'),
(34, 'Cut Evana Salsabila', 2022573010085, '..\\assets\\img\\evana.jpg', 'Lhokseumawe', 'Anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `informasi` varchar(250) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `tgl_isi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `informasi`, `foto`, `tgl_isi`) VALUES
(1, 'Mahasiswa yang lulus PMM 2023', 'Selamat kepada Dua Mahasiswa Kelas TI-1D yang telah berhasil lolos Pertukaran Mahasiswa Merdeka(PMM) Rachel Ardana Putra Ginting telah lolos pada Universitas Gadjah Mada dan Muhammad Fadhillah pada Universitas Padjajaran.', '../assets/img/p.jpg', '2023-06-01'),
(2, 'KMIPN 2023', 'Salah satu mahasiswa kelas TI-Class-D berhasil menjadi Finalis KMIPN 2023', '../assets/img/rachel.jpg', '2023-03-20'),
(3, 'Reyhan Laptop Baru', 'Ikut terharu dengan sudah sampainya laptop baru Reyhan', '../assets/img/reyhan dan rizki.jpg', '2023-10-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `tgl_isi` date NOT NULL,
  `informasi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id_kegiatan`, `judul`, `foto`, `tgl_isi`, `informasi`) VALUES
(1, 'Piknik Bersama', '..\\assets\\img\\piknik.jpg', '2022-07-17', 'Makan-makan bersama setelah ujian akhir semester 1'),
(2, 'PDKT TIK 2022', '..\\assets\\img\\bukber.jpg', '2022-10-30', 'Mengikuti agenda kegiatan Pelatihan Dasar Kepemimpinan Terpadu Jurusan TIK Tahun 2022'),
(3, 'Bukber pertama semester 2', '..\\assets\\img\\bukber.jpg', '2022-03-13', 'Buka Puasa bersama kelas ti 1D Semester 2'),
(4, 'Lomba Badminton Pormatik', '..\\assets\\img\\pormatik.jpg', '2022-03-18', 'Rachel Ardana Putra Ginting dan Muhammad Maulana Meraih juara pertama pada perlombaan badminton pormatik ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `tgl_isi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `user`, `pass`, `tgl_isi`) VALUES
(1, 'admin@gmail.com', 'admin123', '2023-11-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(250) NOT NULL,
  `informasi` varchar(250) NOT NULL,
  `tgl_isi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
