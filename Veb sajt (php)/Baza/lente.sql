-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 10:21 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lente`
--

-- --------------------------------------------------------

--
-- Table structure for table `auto`
--

CREATE TABLE `auto` (
  `vozilo_id` int(11) NOT NULL,
  `marka` text NOT NULL,
  `model` text NOT NULL,
  `cijena` double NOT NULL,
  `godiste` int(4) NOT NULL,
  `karoserija` text NOT NULL,
  `gorivo` text NOT NULL,
  `lokacija` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auto`
--

INSERT INTO `auto` (`vozilo_id`, `marka`, `model`, `cijena`, `godiste`, `karoserija`, `gorivo`, `lokacija`) VALUES
(13, 'BMW', 'X4', 25999, 2017, 'Dzip/SUV', 'Dizel', 'Oslo'),
(14, 'BMW', '320', 35000, 2017, 'Limuzina', 'Dizel', 'Beograd'),
(15, 'Audi', 'Q8', 79900, 2019, 'Dzip/Suv', 'Dizel', 'Podgorica'),
(16, 'Audi', 'A4', 15950, 2016, 'Limuzina', 'Dizel', 'Podgorica'),
(17, 'Mercedes Benz', 'GLC 250', 38000, 2016, 'Dzip/Suv', 'Dizel', 'Madrid'),
(18, 'Mercedes Benz', 'GLE 300', 79900, 2019, 'Dzip/SUV', 'Dizel', 'Pariz');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `poruka_id` int(11) NOT NULL,
  `tema` text NOT NULL,
  `poruka` text NOT NULL,
  `korisnik_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`poruka_id`, `tema`, `poruka`, `korisnik_id`) VALUES
(1, 'Poboljsanje', 'asasas', 8),
(2, 'fbxfbxfb', 'dfgfdgdfg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnik_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `email` text NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnik_id`, `username`, `password`, `ime`, `prezime`, `email`, `admin`) VALUES
(8, 'milanS', '57441ba57f2f63d37f57a174bc974087', 'Milan', 'Spanovic', 'milanSpan1999@gmail.com', 1),
(12, 'milicaK', 'e1573417a8446d7156c60ad300d7fec8', 'Milica', 'Knezevic', 'milica1999@gmail.com', 0),
(13, 'milenaD', '79f85d5540a46e65993d9657d1e34231', 'Milena', 'Draskovic', 'milena2000@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `porudzbina`
--

CREATE TABLE `porudzbina` (
  `porudzbina_id` int(11) NOT NULL,
  `korisnik_id` int(11) NOT NULL,
  `vozilo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `porudzbina`
--

INSERT INTO `porudzbina` (`porudzbina_id`, `korisnik_id`, `vozilo_id`) VALUES
(8, 8, 18);

-- --------------------------------------------------------

--
-- Table structure for table `slika`
--

CREATE TABLE `slika` (
  `slika_id` int(11) NOT NULL,
  `vozilo_id` int(11) NOT NULL,
  `slika` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slika`
--

INSERT INTO `slika` (`slika_id`, `vozilo_id`, `slika`) VALUES
(3, 13, 'img/bmw1.jpg'),
(4, 14, 'img/bmw2.jpg'),
(5, 15, 'img/audi2.jpg'),
(6, 16, 'img/audi1.jpg'),
(7, 17, 'img/mercedes2.jpg'),
(8, 18, 'img/mercedes1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vlasnistvo`
--

CREATE TABLE `vlasnistvo` (
  `vlasnistvo_id` int(11) NOT NULL,
  `korisnik_id` int(11) NOT NULL,
  `vozilo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vlasnistvo`
--

INSERT INTO `vlasnistvo` (`vlasnistvo_id`, `korisnik_id`, `vozilo_id`) VALUES
(30, 8, 13),
(31, 8, 16),
(32, 13, 14),
(33, 13, 17),
(35, 12, 15),
(37, 12, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`vozilo_id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`poruka_id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnik_id`);

--
-- Indexes for table `porudzbina`
--
ALTER TABLE `porudzbina`
  ADD PRIMARY KEY (`porudzbina_id`);

--
-- Indexes for table `slika`
--
ALTER TABLE `slika`
  ADD PRIMARY KEY (`slika_id`);

--
-- Indexes for table `vlasnistvo`
--
ALTER TABLE `vlasnistvo`
  ADD PRIMARY KEY (`vlasnistvo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auto`
--
ALTER TABLE `auto`
  MODIFY `vozilo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `poruka_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnik_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `porudzbina`
--
ALTER TABLE `porudzbina`
  MODIFY `porudzbina_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `slika`
--
ALTER TABLE `slika`
  MODIFY `slika_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vlasnistvo`
--
ALTER TABLE `vlasnistvo`
  MODIFY `vlasnistvo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
