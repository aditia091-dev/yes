-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 02:22 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_christianbretonid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username`, `password`, `is_active`) VALUES
(1, 'ramadhan', 'admin', '$2y$10$l5HhdVB/RhGldsaF0Y2oTeeLdezyFtzgxcJfmJtlZGY.5i8IiRHHu', 1),
(3, 'fikri', 'fikri', '$2y$10$ERux6CmdMk9V0dWX.mzmueHs.cPuD9TuilU/gneDeAuPjggcUemHe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `gambar` text NOT NULL,
  `kode_warna` varchar(10) NOT NULL,
  `tag` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `gambar`, `kode_warna`, `tag`) VALUES
(2, 'Gold Series', 'background-heading-page.png', '#D2B48C', 'gold-series'),
(3, 'Eye Priority', 'background-heading-page-eye.png', '#BA55D3', 'eye-priority'),
(4, 'Lips XL', 'background-heading-page-lips.png', '#FFB6C1', 'lips-xl');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tag` varchar(200) NOT NULL,
  `judul_konten` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL,
  `cara_penggunaan` text NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `id_kategori`, `tag`, `judul_konten`, `deskripsi`, `cara_penggunaan`, `gambar`) VALUES
(3, 2, 'gold-series', 'Christian Breton De Luxe Gold Serum', 'Dengan kandungan gold dan caviar dapat menghilangkan garis-garis halus pada kulit, mencerahkan kulit serta melembabkan, mengencangkan kulit, dan dapat mencegah penuaan dini. Sehingga Christian Breton De Luxe Gold Serum dapat mselalu meremajakan kulitmu', 'Digunakann pagi dan malam hari. Pastikan menggunakan Christin Breton De Luxe Gold Serum sebelum menggunakan Christian Breton De Luxe Gold Cream.', 'gld_ok.png'),
(4, 2, 'gold-series', 'Christian Breton De Luxe Gold Cream', 'Dengan kandungan gold dan caviar dapat menghaluskan dan mencerahan kulit dan dapat merangsang regenerasi sel serta dapat mengurangi bintik-bintik coklat dikulit serta juga dapat mencegah penuaan dini. Christian Breton De Luxe Gold Cream dapat membuat kulitmu selalu berkilau dan cerah.', 'Digunakan pagi dan malam hari setalah menggunakan Christian Bretin De Luxe Gold Serum.', 'gold_2.png'),
(5, 2, 'gold-series', 'Christian Breton De Luxe Gold Mask', 'Dengan kandungan gold dan caviar dapat mengencangkan dan menghaluskan kulit serat merangsang regenrasi sel. Christian Breton De Luxe Gold Mask dapat membuat cerah dan bersih.', 'Digunakan 2 kali seminggu. dan diplikasikan pada wajah yang sudah dibersihkan.', 'gold_3.png'),
(6, 3, 'eye-priority', 'Christian Breton Serum Elixir', 'Dengan teknologi cryotherapy yang pastinya dapat mengencangkan kulit daerah mata serta kandungan hyaluronic acid dan matrixyl dapat membantu pertumbuhan regenerasi sel dan memperlambat proses penuaan kulit.', 'Dioleskan didaerah kulit bagian mata setiap hari. Dapat digunakan sebelum menggunakan rangkain Gold Series.', 'eye_2.png'),
(7, 3, 'eye-priority', 'Christian Breton Eye Focus Active Cream', 'Dengan Teknologi Cryotherapy dan kandungan vitamin E dapat membantu mengencangkan dan mencerahkan kulit serta menghilangkan kantung mata.', 'Digunakan setiap hari sesudah menggunakan Christian Breton Serum Elixir', 'eye.png'),
(8, 4, 'lips-xl', 'Christian Breton Lips XL', 'Dapat menambah volume bibir secara instan dan juga dapat memberi kelembaban pada bibir.', 'Dapat diaplikasikan setelah menggunakan Lipstik.', 'lips.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
