-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2023 pada 06.29
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
(1, 'Rachel Ardana Putra Ginting', 2022573010111, '..\\assets\\img\\rachel.jpeg', 'Pulau Tiga', 'Ex-komisaris SM 1&2'),
(2, 'M Akbar Zulfikar', 2022573010093, '..\\assets\\img\\abay.jpeg', 'Kota Langsa', 'Ex-Wakil SM 1&2..Komisaris SM3'),
(3, 'A\'fiyyah Salsabillah Nhazalta', 2022573010003, 'assets\\img\\afiyyah.jpeg', 'Lhokseumawe', 'Ex-Bendahara'),
(4, 'Agung Ramadhan Setiawan', 2022573010081, '..\\assets\\img\\agung.jpg', 'Pangkalan susu', 'Wakil Komisaris SM3'),
(5, 'Andrian Fakhruza', 2022573010060, '..\\assets\\img\\andrian.jpeg', 'Lhokseumawe', 'Anggota'),
(6, 'Aura Syaskia', 2022573010005, '..\\assets\\img\\aura.jpeg', 'Lhokseumawe', 'Anggota'),
(7, 'Cut Siti Sarah Azkiani', 2022573010007, '..\\assets\\img\\cutsarah.jpeg', 'Lhokseumawe', 'Anggota'),
(8, 'Dimas Kurniawan', 2022573010009, '..\\assets\\img\\dimas.jpeg', 'Pematang Siantar', 'Anggota'),
(9, 'Fachrul Rozi Rangkuti', 2022573010011, '..\\assets\\img\\joe.jpg', 'Lhokseumawe', 'Anggota'),
(10, 'Febri Fanisa', 2022573010090, '..\\assets\\img\\febrifanisa.jpg', 'Bireuen', 'Anggota'),
(11, 'Jabal Akbar', 2022573010065, '..\\assets\\img\\jabal.jpeg', 'Brandan', 'Anggota'),
(12, 'Muhammad Abil', 2022573010067, '..\\assets\\img\\abil.jpg', 'Lhokseumawe', 'Anggota'),
(13, 'Muhammad Alfitrah', 2022573010020, '..\\assets\\img\\fitrah.jpeg', 'Lhokseumawe', 'Anggota'),
(14, 'Muhammad Fadhillah', 2022573010097, '..\\assets\\img\\fadil.jpeg', 'Julok Rayeuk', 'Anggota'),
(15, 'Muhammad Maulana', 2022573010100, '..\\assets\\img\\momol.jpeg', 'Lhokseumawe', 'Anggota'),
(16, 'Muhammad Rafi Aulia', 2022573010069, '..\\assets\\img\\rafli.jpeg', 'Kota Langsa', 'Anggota'),
(17, 'Muhammad Rizki', 2022573010023, '..\\assets\\img\\reyhan dan rizki.jpeg', 'Bireuen', 'Developer'),
(18, 'Mulyani', 2022573010026, '..\\assets\\img\\mulyani.jpeg', 'Kota Binjei', 'Anggota'),
(19, 'Naomi Natalie BR Sembiring', 2022573010029, '..\\assets\\img\\naomi.jpeg', 'Kota Medan', 'Anggota'),
(20, 'Nia Ramadhani', 2022573010107, '..\\assets\\img\\nia.jpeg', 'Bireuen', 'Anggota'),
(21, 'Nora Syuhada', 2022573010035, '..\\assets\\img\\nora.jpeg', 'Lhokseumawe', 'Anggota'),
(22, 'Nurul Afiqah Simbolon', 2022573010073, '..\\assets\\img\\nurul afiqa.jpeg', 'Kota Medan', 'Anggota'),
(23, 'Nurul Agustina', 2022573010037, '..\\assets\\img\\nurul agustina.jpeg', 'Kota Medan', 'Anggota'),
(24, 'Reyhan Putra Syahmi', 2022573010114, '..\\assets\\img\\reyhan dan rizki.jpeg', 'Padang', 'Anggota'),
(25, 'Safira Dara Sholehah', 2022573010041, '..\\assets\\img\\safira.jpeg', 'Lhokseumawe', 'Anggota'),
(26, 'Sri Mutia', 2022573010009, '..\\assets\\img\\sri.jpeg', 'Lhokseumawe', 'Anggota'),
(27, 'Syahira Maharani', 2022573010048, '..\\assets\\img\\syahira.jpeg', 'Lhokseumawe', 'Anggota'),
(28, 'Tasya Anisa', 2022573010118, '..\\assets\\img\\tasya.jpeg', 'Lhokseumawe', 'Anggota'),
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
(1, 'Mahasiswa yang lulus PMM 2023', 'Selamat kepada Dua Mahasiswa Kelas TI-1D yang telah berhasil lolos Pertukaran Mahasiswa Merdeka(PMM) Rachel Ardana Putra Ginting telah lolos pada Universitas Gadjah Mada dan Muhammad Fadhillah pada Universitas Padjajaran.', '../assets/img/p.JPG', '2023-06-01'),
(2, 'KMIPN 2023', 'Salah satu mahasiswa kelas TI-Class-D berhasil menjadi Finalis KMIPN 2023', '../assets/img/rachel.jpeg', '2023-03-20'),
(3, 'Reyhan Laptop Baru', 'Ikut terharu dengan sudah sampainya laptop baru Reyhan', '../assets/img/reyhan dan rizki.jpeg', '2023-10-30');

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
(2, 'PDKT TIK 2022', '..\\assets\\img\\pdkt.jpeg', '2022-10-30', 'Mengikuti agenda kegiatan Pelatihan Dasar Kepemimpinan Terpadu Jurusan TIK Tahun 2022'),
(3, 'Bukber pertama semester 2', '..\\assets\\img\\bukber.jpeg', '2022-03-13', 'Buka Puasa bersama kelas ti 1D Semester 2'),
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
-- Dumping data untuk tabel `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `judul`, `foto`, `informasi`, `tgl_isi`) VALUES
(1, 'Juara 1 Badminton ganda putra di pormatik', '..\\assets\\img\\p.jpg', 'rachel dan momol memenangkan pertandingan badminton ganda putra dengan mendapat juara 1 di pormatik', '2023-06-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `start_datetime` datetime NOT NULL,
  `end_datetime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `title`, `description`, `start_datetime`, `end_datetime`) VALUES
(1, 'Sample 101', 'This is a sample schedule only.', '2022-01-10 10:30:00', '2022-01-11 18:00:00'),
(2, 'Sample 102', 'Sample Description 102', '2022-01-08 09:30:00', '2022-01-08 11:30:00'),
(4, 'Sample 102', 'Sample Description', '2022-01-12 14:00:00', '2022-01-12 17:00:00'),
(5, 'testing', 'testing', '2023-12-19 20:55:00', '2023-12-19 20:55:00');

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
-- Indeks untuk tabel `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

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
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
