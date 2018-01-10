-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 07:36 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uasweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_games`
--

CREATE TABLE IF NOT EXISTS `data_games` (
  `Id` int(5) NOT NULL,
  `Judul` varchar(30) NOT NULL,
  `Dev` varchar(20) NOT NULL,
  `Publish` varchar(20) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `Cover` varchar(30) NOT NULL,
  `Genre` varchar(20) NOT NULL,
  `Harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_games`
--

INSERT INTO `data_games` (`Id`, `Judul`, `Dev`, `Publish`, `Tahun`, `Cover`, `Genre`, `Harga`) VALUES
(2, 'DOOM (2016)', 'id Software', 'Bethesda Softworks', '2016', 'doom_cover', 'FPS', 300000),
(3, 'Dishonored', 'Arkane Studios', 'Bethesda Softworks', '2012', 'dish_cover', 'Stealth', 100000),
(4, 'Stellaris', 'Paradox Development ', 'Paradox Interactive', '2016', 'stellaris_cover', 'Grand Strategy', 400000),
(5, 'The Elder Scrolls V : Skyrim', 'Bethesda Game Studio', 'Bethesda Softworks', '2011', 'tessky_cover', 'Action RPG', 300000),
(6, 'Divinity - Original Sin', 'Larian Studios', 'Larian Studios', '2014', 'divors_cover', 'RPG', 250000),
(7, 'Divinity - Original Sin 2', 'Larian Studios', 'Larian Studios', '2017', 'divors2_cover', 'RPG', 450000),
(8, 'The Witcher', 'CD Projekt Red', 'Atari', '2007', 'witcher_cover', 'Action RPG', 100000),
(9, 'The Witcher 2 : Assassins of K', 'CD Projekt Red', 'CD Projekt', '2011', 'witcher2_cover', 'Action RPG', 200000),
(10, 'The Witcher 3 : Wild Hunt', 'CD Projekt Red', 'CD Projekt', '2016', 'witcher3_cover', 'Action RPG', 400000),
(1, 'Nier : Automata', 'PlatinumGames', 'Square Enix', '2017', 'nierau_cover', 'Action RPG', 700000);

-- --------------------------------------------------------

--
-- Table structure for table `data_users`
--

CREATE TABLE IF NOT EXISTS `data_users` (
  `Id` int(5) DEFAULT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `NamaLeng` varchar(30) NOT NULL,
  `Gender` varchar(2) NOT NULL,
  `Umur` int(3) NOT NULL,
  `Dompet` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_users`
--

INSERT INTO `data_users` (`Id`, `Username`, `Password`, `NamaLeng`, `Gender`, `Umur`, `Dompet`) VALUES
(1, '', '2222', '', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
