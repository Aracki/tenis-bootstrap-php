-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2015 at 02:09 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tenis3`
--

-- --------------------------------------------------------

--
-- Table structure for table `istok`
--

CREATE TABLE IF NOT EXISTS `istok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mesto` int(11) NOT NULL,
  `takmicar` text COLLATE utf8_unicode_ci NOT NULL,
  `broj_meceva` int(11) NOT NULL,
  `gem_razlika` int(11) NOT NULL,
  `broj_poena` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `istok`
--

INSERT INTO `istok` (`id`, `mesto`, `takmicar`, `broj_meceva`, `gem_razlika`, `broj_poena`) VALUES
(1, 1, 'Lazar Vujanić', 3, 20, 9),
(2, 2, 'Blagoje Ace Marjanović', 3, 19, 9),
(3, 3, 'Mark Ruso', 3, 7, 6),
(4, 4, 'Nemanja Smiljević-Neka', 3, 0, 4),
(5, 5, 'Stefan Drobnjak', 2, 0, 3),
(6, 6, 'Stefan Tanackovic', 2, -2, 3),
(7, 7, 'Stefan Mihajlović', 2, 2, 3),
(8, 8, 'Djordje Trajković	', 3, -2, 3),
(9, 9, 'Periša Tomić', 3, -29, 1),
(10, 10, 'Aleksa Jacimović', 3, -24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tereni`
--

CREATE TABLE IF NOT EXISTS `tereni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv_terena` text COLLATE utf8_unicode_ci NOT NULL,
  `opstina` text COLLATE utf8_unicode_ci NOT NULL,
  `cena_termina` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `tereni`
--

INSERT INTO `tereni` (`id`, `naziv_terena`, `opstina`, `cena_termina`) VALUES
(1, 'ivanov teren', 'nbg', 5555),
(2, 'Beli', 'Zvezdara', 222222),
(6, 'Srbija', 'Medak', 333),
(9, 'Marko', 'Markooo', 999),
(14, 'Teren122', 'Medak3', 2552),
(17, 'Naksjasdk', 'Ajndskjasdn', 500),
(18, 'Ana', 'Ana', 100);

-- --------------------------------------------------------

--
-- Table structure for table `zapad`
--

CREATE TABLE IF NOT EXISTS `zapad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mesto` int(11) NOT NULL,
  `takmicar` text COLLATE utf8_unicode_ci NOT NULL,
  `broj_meceva` int(11) NOT NULL,
  `gem_razlika` int(11) NOT NULL,
  `broj_poena` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `zapad`
--

INSERT INTO `zapad` (`id`, `mesto`, `takmicar`, `broj_meceva`, `gem_razlika`, `broj_poena`) VALUES
(1, 1, 'Che Voj', 3, 21, 9),
(2, 2, 'Stefan Matović', 3, 19, 8),
(3, 3, 'Petar Kolundžija', 3, 8, 6),
(4, 4, 'Matija Silaški', 3, 0, 5),
(5, 5, 'Uroš Majstorović', 3, -6, 4),
(6, 6, 'Damir Djordjević', 2, 6, 3),
(7, 7, 'Uroš Topalović', 2, 2, 3),
(8, 8, 'Nikola Radojičić', 3, -2, 3),
(9, 9, 'Dalibor Djekić', 3, -29, 1),
(10, 10, 'Luković Nikola', 3, -24, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
