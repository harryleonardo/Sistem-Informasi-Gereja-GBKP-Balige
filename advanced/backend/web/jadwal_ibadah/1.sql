-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2016 at 03:29 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(60) DEFAULT NULL,
  `Pengarang` varchar(30) NOT NULL,
  `Penerbit` varchar(30) NOT NULL,
  `ISBN` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `Pengarang`, `Penerbit`, `ISBN`) VALUES
(1, 'Matematika', 'Tumpal Tambunan', 'Erlangga', 'ISBN10000'),
(2, 'Bahasa Indonesia', 'Steven Tambunan', 'Erlangga', 'ISBN10001'),
(3, 'IPA', 'Heliman Tambunan', 'Erlangga', 'ISBN10003'),
(4, 'IPS', 'Harry Purba', 'Yudistria', 'ISBN10004'),
(5, 'PKN', 'Benni Pardosi', 'Yudistira', 'ISBN10002'),
(16, 'hai', 'tumpal', 'hai', 'tumpal'),
(17, 'jfds;lajflds;jfldsjl', 'jlk', 'jfds;lajflds;jfldsjl', 'jlk');

-- --------------------------------------------------------

--
-- Table structure for table `detilbuku`
--

CREATE TABLE IF NOT EXISTS `detilbuku` (
  `idDetilBuku` int(11) NOT NULL,
  `idBuku` int(11) DEFAULT NULL,
  `Pengarang` varchar(60) DEFAULT NULL,
  `Penerbit` varchar(60) DEFAULT NULL,
  `ISBN` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detilbuku`
--

INSERT INTO `detilbuku` (`idDetilBuku`, `idBuku`, `Pengarang`, `Penerbit`, `ISBN`) VALUES
(1, 1, 'Tumpal', 'Erlangga', 'ISBN10000'),
(2, 2, 'Steven ', 'Erlangga', 'ISBN10001'),
(3, 3, 'Heliman', 'Erlangga', 'ISBN10003'),
(4, 4, 'Roy', 'Erlangga', 'ISBN10004'),
(5, 5, 'Randy', 'Erlangga', 'ISBN10005');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detilbuku`
--
ALTER TABLE `detilbuku`
  ADD PRIMARY KEY (`idDetilBuku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `detilbuku`
--
ALTER TABLE `detilbuku`
  MODIFY `idDetilBuku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
