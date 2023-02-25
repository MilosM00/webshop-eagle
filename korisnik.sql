-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 10:03 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webprodavnica`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `ID` int(11) NOT NULL,
  `Ime` varchar(50) NOT NULL,
  `Prezime` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `BrojTelefona` varchar(20) NOT NULL,
  `Paket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`ID`, `Ime`, `Prezime`, `Email`, `BrojTelefona`, `Paket`) VALUES
(1, 'Laza', 'Lazic', 'lazalazic@gmail.com', '064123456', 'Junior'),
(2, 'Mika', 'Mikic', 'mikamikic@gmail.com', '064654321', 'Medior'),
(3, 'Zika', 'Zikic', 'zikazikic@gmail.com', '065456789', 'Senior'),
(4, 'Misa', 'Misic', 'misamisic@gmail.com', '065987654', 'Senior'),
(5, 'Mila', 'Milic', 'milamilic@gmail.com', '061777999', 'Junior'),
(6, 'Jana', 'Janic', 'janajanic@gmail.com', '061444888', 'Medior'),
(7, 'Pera', 'Peric', 'peraperic@gmail.com', '062147258', 'Medior'),
(8, 'Mara', 'Maric', 'maramaric@gmail.com', '062369258', 'Senior'),
(9, 'Nikola', 'Nikolic', 'nikolanikolic@gmail.com', '062333222', 'Medior'),
(10, 'Uros', 'Urosevic', 'urosuresevic@gmail.com', '063444111', 'Junior'),
(11, 'Jet', 'Li', 'jetli@gmail.com', '065713982', 'Medior'),
(12, 'Luka', 'Lukic', 'lukalukic@gmail.com', '064525252', 'Senior');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
