-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08.05.2019 klo 19:31
-- Palvelimen versio: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liikuntakanta`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `kayttaja`
--

CREATE TABLE `kayttaja` (
  `KayttajaId` int(11) NOT NULL,
  `Paino` int(11) NOT NULL,
  `Nimi` text NOT NULL,
  `ika` int(11) NOT NULL,
  `Salasana` text NOT NULL,
  `kayttajanimi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `kayttaja`
--

INSERT INTO `kayttaja` (`KayttajaId`, `Paino`, `Nimi`, `ika`, `Salasana`, `kayttajanimi`) VALUES
(1, 100, 'Viljami', 45, 'kiekko', 'Viljo96'),
(2, 80, 'Sakari', 21, 'pallo', 'sakke97'),
(4, 100, 'Teemu', 22, 'kiekko', 'Teme96'),
(5, 50, 'Daniel', 35, 'kiekko', 'Daniel96');

-- --------------------------------------------------------

--
-- Rakenne taululle `liikunta`
--

CREATE TABLE `liikunta` (
  `RiviId` int(11) NOT NULL,
  `Kayttaja_kayttajaId` int(11) NOT NULL,
  `Paivamaara` date NOT NULL,
  `Tunnit` int(11) NOT NULL,
  `Kalorit` int(11) NOT NULL,
  `liikuntamuoto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Rakenne taululle `liikuntamuoto`
--

CREATE TABLE `liikuntamuoto` (
  `Liikuntamuotoid` int(11) NOT NULL,
  `Nimi` text NOT NULL,
  `Kulutus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `liikuntamuoto`
--

INSERT INTO `liikuntamuoto` (`Liikuntamuotoid`, `Nimi`, `Kulutus`) VALUES
(1, 'uinti', 995),
(2, 'juoksu', 433),
(3, 'sali', 360),
(4, 'pallopelit', 505);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kayttaja`
--
ALTER TABLE `kayttaja`
  ADD UNIQUE KEY `KayttajaID` (`KayttajaId`);

--
-- Indexes for table `liikunta`
--
ALTER TABLE `liikunta`
  ADD UNIQUE KEY `RiviId` (`RiviId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kayttaja`
--
ALTER TABLE `kayttaja`
  MODIFY `KayttajaId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `liikunta`
--
ALTER TABLE `liikunta`
  MODIFY `RiviId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
