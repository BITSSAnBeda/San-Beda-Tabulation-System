-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2019 at 08:32 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SanBedaTab`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocacyfemale`
--

CREATE TABLE IF NOT EXISTS `advocacyfemale` (
  `Contestant_ID` int(11) NOT NULL,
  `judge1` float NOT NULL,
  `judge2` float NOT NULL,
  `judge3` float NOT NULL,
  `judge4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocacyfemale`
--

INSERT INTO `advocacyfemale` (`Contestant_ID`, `judge1`, `judge2`, `judge3`, `judge4`) VALUES
(1, 7.2, 8, 9.3, 7.3),
(2, 7.3, 8.2, 9.6, 6.4),
(3, 7.3, 8, 9.4, 8.3),
(4, 8.5, 9.1, 10, 8.4),
(5, 7.2, 8.1, 8.9, 6.9),
(6, 7, 8.7, 9.1, 7.9),
(7, 8.2, 8.5, 8.5, 7.8),
(8, 7.5, 8.6, 8, 8.5),
(9, 8.5, 9, 9.5, 9.3),
(10, 7.1, 8.6, 9, 7.7),
(11, 7.1, 8, 8.9, 7.6),
(12, 7.3, 8.6, 9.6, 8.9),
(13, 7, 7.9, 9, 6.9);

-- --------------------------------------------------------

--
-- Table structure for table `AdvocacyMale`
--

CREATE TABLE IF NOT EXISTS `AdvocacyMale` (
  `Contestant_ID` int(11) NOT NULL,
  `judge1` float NOT NULL,
  `judge2` float NOT NULL,
  `judge3` float NOT NULL,
  `judge4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AdvocacyMale`
--

INSERT INTO `AdvocacyMale` (`Contestant_ID`, `judge1`, `judge2`, `judge3`, `judge4`) VALUES
(1, 7.3, 8.6, 9.5, 7.5),
(3, 7.8, 8.3, 9.2, 7.3),
(4, 8, 8.7, 8.4, 8),
(5, 8.4, 9.4, 10, 9.2),
(7, 8, 8.4, 9.3, 8.2),
(8, 8.5, 9.5, 9.5, 7.6),
(9, 8.6, 8.8, 9.8, 8.3),
(10, 7.9, 9, 9.4, 8.1),
(12, 7.6, 8.6, 8.6, 7.7),
(13, 7.9, 9.3, 9.2, 7.7),
(14, 7.8, 8.3, 9.3, 7.4);

-- --------------------------------------------------------

--
-- Table structure for table `Contestant`
--

CREATE TABLE IF NOT EXISTS `Contestant` (
  `Photo` blob NOT NULL,
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Section` varchar(70) NOT NULL,
  `Gender` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contestant`
--

INSERT INTO `Contestant` (`Photo`, `Contestant_ID`, `Last_Name`, `First_Name`, `Section`, `Gender`) VALUES
('', 7, 'Viado', 'Christian Diether', '1AMC, Marketing', 'M'),
('', 1, 'Leyva', 'Alexander', 'Grade 12, STEM-2', 'M'),
('', 2, 'Canoneo', 'Jean Luigi', '3AMC, Marketing', 'M'),
('', 3, 'Sarte', 'Alejandro Ivan Adred', 'Grade 11, STEM9', 'M'),
('', 4, 'Limcangco', 'Samuel Lyk', 'Grade 11, STEM-1', 'M'),
('', 5, 'Reyes', 'Exequiel Maurice', 'Grade 11, HUMSS-2', 'M'),
('', 6, 'Grey', 'Francis Joseph', 'Grade 12 HUMSS', 'M'),
('', 1, 'Millado', 'Johanne', 'Grade 11, STEM 7', 'F'),
('', 2, 'Arcenal', 'Mikaela Denise', '1st year Economics & Public Policy', 'F'),
('', 3, 'Gomez', 'May Joy', '1st year Marketing Management', 'F'),
('', 4, 'Sy', 'Dannah Ruth', 'Grade 12, HUMSS-2', 'F'),
('', 5, 'Santos', 'Ma. Vanessa', '3rd year Psychology', 'F'),
('', 6, 'Fujimoto', 'Yoko Angelica', 'Grade 11, HUMSS-2', 'F'),
('', 7, 'Que', 'Ma. Alessandra Nadine', 'Grade 12, ABM-3', 'F'),
('', 8, 'Caballero', 'Tamara Rose Francine', 'Grade 12, STEM-7', 'F'),
('', 9, 'Robledo', 'Czarina Francesca', 'Grade 12, HUMSS-3', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `fifth_judge_female`
--

CREATE TABLE IF NOT EXISTS `fifth_judge_female` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifth_judge_female`
--

INSERT INTO `fifth_judge_female` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Millado', 18, 19, 20, 26),
(2, 'Arcenal', 19, 18, 20, 27),
(3, 'Gomez', 18, 16, 19, 25),
(4, 'Sy', 17, 17, 18, 25),
(5, 'Santos', 17, 19, 20, 29),
(6, 'Fujimoto', 19, 19, 19, 26),
(7, 'Que', 15, 16, 18, 28),
(8, 'Caballero', 19, 19, 18, 30),
(9, 'Robledo', 15, 17, 19, 29);

-- --------------------------------------------------------

--
-- Table structure for table `fifth_judge_male`
--

CREATE TABLE IF NOT EXISTS `fifth_judge_male` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fifth_judge_male`
--

INSERT INTO `fifth_judge_male` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Leyva', 17, 18, 15, 27),
(2, 'Canoneo', 15, 18, 18, 27),
(3, 'Sarte', 17, 16, 16, 29),
(4, 'Limcangco', 19, 17, 17, 28),
(5, 'Reyes', 16, 18, 15, 27),
(6, 'Grey', 17, 15, 16, 29),
(7, 'Viado', 17, 17, 17, 26);

-- --------------------------------------------------------

--
-- Table structure for table `first_judge_female`
--

CREATE TABLE IF NOT EXISTS `first_judge_female` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_judge_female`
--

INSERT INTO `first_judge_female` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Millado', 15, 18, 20, 25),
(2, 'Arcenal', 17, 18, 20, 25),
(3, 'Gomez', 15, 17, 19, 25),
(4, 'Sy', 15, 17, 15, 24),
(5, 'Santos', 19, 18, 15, 26),
(6, 'Fujimoto', 17, 18, 16, 20),
(7, 'Que', 17, 17, 16, 28),
(8, 'Caballero', 19, 19, 17, 29),
(9, 'Robledo', 18, 17, 16, 28);

-- --------------------------------------------------------

--
-- Table structure for table `first_judge_male`
--

CREATE TABLE IF NOT EXISTS `first_judge_male` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL DEFAULT '0',
  `FormalWear` float NOT NULL DEFAULT '0',
  `Production` float NOT NULL DEFAULT '0',
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `first_judge_male`
--

INSERT INTO `first_judge_male` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Leyva', 15, 17, 18, 25),
(2, 'Canoneo', 15, 16, 15, 26),
(3, 'Sarte', 16, 17, 18, 29),
(4, 'Limcangco', 18, 19, 18, 28),
(5, 'Reyes', 17, 17, 18, 26),
(6, 'Grey', 16, 16, 15, 28),
(7, 'Viado', 17, 16, 15, 27);

-- --------------------------------------------------------

--
-- Table structure for table `fivetopsixfemale`
--

CREATE TABLE IF NOT EXISTS `fivetopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fivetopsixmale`
--

CREATE TABLE IF NOT EXISTS `fivetopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fourth_judge_female`
--

CREATE TABLE IF NOT EXISTS `fourth_judge_female` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fourth_judge_female`
--

INSERT INTO `fourth_judge_female` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Millado', 16, 17, 17, 22),
(2, 'Arcenal', 18, 20, 18, 25),
(3, 'Gomez', 18, 18, 18, 25),
(4, 'Sy', 16, 18, 17, 23),
(5, 'Santos', 17, 18, 16, 26),
(6, 'Fujimoto', 18, 18, 17, 22),
(7, 'Que', 17, 19, 16, 26),
(8, 'Caballero', 19, 19, 18, 28),
(9, 'Robledo', 19, 18, 17, 26);

-- --------------------------------------------------------

--
-- Table structure for table `fourth_judge_male`
--

CREATE TABLE IF NOT EXISTS `fourth_judge_male` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fourth_judge_male`
--

INSERT INTO `fourth_judge_male` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Leyva', 17, 18, 18, 22),
(2, 'Canoneo', 18, 17, 17, 25),
(3, 'Sarte', 18, 18, 19, 28),
(4, 'Limcangco', 19, 19, 18, 29),
(5, 'Reyes', 18, 17, 17, 24),
(6, 'Grey', 17, 18, 17, 29),
(7, 'Viado', 16, 17, 17, 25);

-- --------------------------------------------------------

--
-- Table structure for table `fourtopsixfemale`
--

CREATE TABLE IF NOT EXISTS `fourtopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fourtopsixmale`
--

CREATE TABLE IF NOT EXISTS `fourtopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Masterlist_female`
--

CREATE TABLE IF NOT EXISTS `Masterlist_female` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(11) NOT NULL,
  `firstjudge` float NOT NULL DEFAULT '0',
  `secondjudge` float NOT NULL DEFAULT '0',
  `thirdjudge` float NOT NULL DEFAULT '0',
  `fourthjudge` float NOT NULL DEFAULT '0',
  `fifthjudge` float NOT NULL DEFAULT '0',
  `sixthjudge` float NOT NULL DEFAULT '0',
  `sevenjudge` float NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Masterlist_female`
--

INSERT INTO `Masterlist_female` (`Contestant_ID`, `Last_Name`, `firstjudge`, `secondjudge`, `thirdjudge`, `fourthjudge`, `fifthjudge`, `sixthjudge`, `sevenjudge`, `total`) VALUES
(1, 'Millado', 78, 79, 75, 72, 83, 74, 75, 0),
(2, 'Arcenal', 80, 83, 80, 81, 84, 77, 80, 0),
(3, 'Gomez', 76, 82, 72.5, 79, 78, 77, 72.5, 0),
(4, 'Sy', 71, 81, 68, 74, 77, 73, 68, 0),
(5, 'Santos', 78, 82, 74, 77, 85, 74, 74, 0),
(6, 'Fujimoto', 71, 76, 74, 75, 83, 73, 74, 0),
(7, 'Que', 78, 84, 78, 78, 77, 75, 78, 0),
(8, 'Caballero', 84, 85, 88, 84, 86, 80, 88, 0),
(9, 'Robledo', 79, 80, 80, 80, 80, 86, 80, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Masterlist_male`
--

CREATE TABLE IF NOT EXISTS `Masterlist_male` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(11) NOT NULL,
  `firstjudge` float NOT NULL DEFAULT '0',
  `secondjudge` float NOT NULL DEFAULT '0',
  `thirdjudge` float NOT NULL DEFAULT '0',
  `fourthjudge` float NOT NULL DEFAULT '0',
  `fifthjudge` float NOT NULL DEFAULT '0',
  `sixthjudge` float NOT NULL DEFAULT '0',
  `sevenjudge` float NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Masterlist_male`
--

INSERT INTO `Masterlist_male` (`Contestant_ID`, `Last_Name`, `firstjudge`, `secondjudge`, `thirdjudge`, `fourthjudge`, `fifthjudge`, `sixthjudge`, `sevenjudge`, `total`) VALUES
(7, 'Viado', 15, 80, 67, 75, 77, 74, 0, 0),
(1, 'Leyva', 18, 82, 71, 75, 77, 79, 0, 0),
(2, 'Canoneo', 15, 83, 76, 77, 78, 76, 0, 0),
(3, 'Sarte', 18, 86, 80, 83, 78, 84, 0, 0),
(4, 'Limcangco', 18, 84, 81, 85, 81, 85, 0, 0),
(5, 'Reyes', 18, 81, 69, 76, 76, 75, 0, 0),
(6, 'Grey', 15, 83, 69, 81, 77, 83, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `onetopsixfemale`
--

CREATE TABLE IF NOT EXISTS `onetopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `onetopsixmale`
--

CREATE TABLE IF NOT EXISTS `onetopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `second_judge_female`
--

CREATE TABLE IF NOT EXISTS `second_judge_female` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_judge_female`
--

INSERT INTO `second_judge_female` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Millado', 18, 18, 18, 25),
(2, 'Arcenal', 18, 20, 19, 26),
(3, 'Gomez', 19, 18, 18, 27),
(4, 'Sy', 19, 19, 16, 27),
(5, 'Santos', 18, 20, 16, 28),
(6, 'Fujimoto', 19, 18, 15, 24),
(7, 'Que', 19, 19, 17, 29),
(8, 'Caballero', 18, 20, 18, 29),
(9, 'Robledo', 19, 19, 15, 27);

-- --------------------------------------------------------

--
-- Table structure for table `second_judge_male`
--

CREATE TABLE IF NOT EXISTS `second_judge_male` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second_judge_male`
--

INSERT INTO `second_judge_male` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Leyva', 18, 18, 19, 27),
(2, 'Canoneo', 19, 19, 17, 28),
(3, 'Sarte', 19, 18, 20, 29),
(4, 'Limcangco', 20, 19, 18, 27),
(5, 'Reyes', 18, 18, 19, 26),
(6, 'Grey', 18, 19, 18, 28),
(7, 'Viado', 18, 18, 17, 27);

-- --------------------------------------------------------

--
-- Table structure for table `seventopsixfemale`
--

CREATE TABLE IF NOT EXISTS `seventopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seventopsixmale`
--

CREATE TABLE IF NOT EXISTS `seventopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seven_judge_female`
--

CREATE TABLE IF NOT EXISTS `seven_judge_female` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seven_judge_female`
--

INSERT INTO `seven_judge_female` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Millado', 0, 0, 0, 0),
(2, 'Arcenal', 0, 0, 0, 0),
(3, 'Gomez', 0, 0, 0, 0),
(4, 'Sy', 0, 0, 0, 0),
(5, 'Santos', 0, 0, 0, 0),
(6, 'Fujimoto', 0, 0, 0, 0),
(7, 'Que', 0, 0, 0, 0),
(8, 'Caballero', 0, 0, 0, 0),
(9, 'Robledo', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `seven_judge_male`
--

CREATE TABLE IF NOT EXISTS `seven_judge_male` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seven_judge_male`
--

INSERT INTO `seven_judge_male` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(7, 'Viado', 0, 0, 0, 0),
(1, 'Leyva', 0, 0, 0, 0),
(2, 'Canoneo', 0, 0, 0, 0),
(3, 'Sarte', 0, 0, 0, 0),
(4, 'Limcangco', 0, 0, 0, 0),
(5, 'Reyes', 0, 0, 0, 0),
(6, 'Grey', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sixth_judge_female`
--

CREATE TABLE IF NOT EXISTS `sixth_judge_female` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sixth_judge_female`
--

INSERT INTO `sixth_judge_female` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Millado', 16, 17, 15, 26),
(2, 'Arcenal', 18, 17, 18, 24),
(3, 'Gomez', 17, 16, 18, 26),
(4, 'Sy', 17, 16, 15, 25),
(5, 'Santos', 18, 17, 15, 24),
(6, 'Fujimoto', 17, 17, 15, 24),
(7, 'Que', 17, 16, 15, 27),
(8, 'Caballero', 19, 18, 15, 28),
(9, 'Robledo', 19, 19, 19, 29);

-- --------------------------------------------------------

--
-- Table structure for table `sixth_judge_male`
--

CREATE TABLE IF NOT EXISTS `sixth_judge_male` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sixth_judge_male`
--

INSERT INTO `sixth_judge_male` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Leyva', 18, 18, 18, 25),
(2, 'Canoneo', 16, 17, 15, 28),
(3, 'Sarte', 17, 17, 20, 30),
(4, 'Limcangco', 18, 19, 19, 29),
(5, 'Reyes', 17, 17, 16, 25),
(6, 'Grey', 18, 19, 16, 30),
(7, 'Viado', 16, 16, 15, 27);

-- --------------------------------------------------------

--
-- Table structure for table `sixtopsixfemale`
--

CREATE TABLE IF NOT EXISTS `sixtopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sixtopsixmale`
--

CREATE TABLE IF NOT EXISTS `sixtopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `third_judge_female`
--

CREATE TABLE IF NOT EXISTS `third_judge_female` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `third_judge_female`
--

INSERT INTO `third_judge_female` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Millado', 18, 17, 18, 22),
(2, 'Arcenal', 19, 19, 19, 23),
(3, 'Gomez', 19, 15, 18.5, 20),
(4, 'Sy', 15, 17, 16, 20),
(5, 'Santos', 15, 18, 17, 24),
(6, 'Fujimoto', 17, 18, 19, 20),
(7, 'Que', 18, 17, 17, 26),
(8, 'Caballero', 20, 20, 18, 30),
(9, 'Robledo', 17, 18, 18, 27);

-- --------------------------------------------------------

--
-- Table structure for table `third_judge_male`
--

CREATE TABLE IF NOT EXISTS `third_judge_male` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `CasualWear` float NOT NULL,
  `FormalWear` float NOT NULL,
  `Production` float NOT NULL,
  `QA` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `third_judge_male`
--

INSERT INTO `third_judge_male` (`Contestant_ID`, `Last_Name`, `CasualWear`, `FormalWear`, `Production`, `QA`) VALUES
(1, 'Leyva', 16, 18, 17, 20),
(2, 'Canoneo', 17, 15, 16, 28),
(3, 'Sarte', 16, 18, 18, 28),
(4, 'Limcangco', 18, 15, 19, 29),
(5, 'Reyes', 16, 16, 17, 20),
(6, 'Grey', 17, 15, 16, 21),
(7, 'Viado', 15, 16, 16, 20);

-- --------------------------------------------------------

--
-- Table structure for table `threetopsixfemale`
--

CREATE TABLE IF NOT EXISTS `threetopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `threetopsixmale`
--

CREATE TABLE IF NOT EXISTS `threetopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `twotopsixfemale`
--

CREATE TABLE IF NOT EXISTS `twotopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `twotopsixmale`
--

CREATE TABLE IF NOT EXISTS `twotopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `winnerfemale`
--

CREATE TABLE IF NOT EXISTS `winnerfemale` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(11) NOT NULL,
  `firstjudge` float NOT NULL DEFAULT '0',
  `secondjudge` float NOT NULL DEFAULT '0',
  `thirdjudge` float NOT NULL DEFAULT '0',
  `fourthjudge` float NOT NULL DEFAULT '0',
  `fifthjudge` float NOT NULL DEFAULT '0',
  `sixthjudge` float NOT NULL DEFAULT '0',
  `sevenjudge` float NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winnerfemale`
--

INSERT INTO `winnerfemale` (`Contestant_ID`, `Last_Name`, `firstjudge`, `secondjudge`, `thirdjudge`, `fourthjudge`, `fifthjudge`, `sixthjudge`, `sevenjudge`, `total`) VALUES
(1, 'Millado', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Arcenal', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Gomez', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Sy', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Santos', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Fujimoto', 0, 0, 0, 0, 0, 0, 0, 0),
(7, 'Que', 0, 0, 0, 0, 0, 0, 0, 0),
(8, 'Caballero', 0, 0, 0, 0, 0, 0, 0, 0),
(9, 'Robledo', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `winnermale`
--

CREATE TABLE IF NOT EXISTS `winnermale` (
  `Contestant_ID` int(11) NOT NULL,
  `Last_Name` varchar(11) NOT NULL,
  `firstjudge` float NOT NULL DEFAULT '0',
  `secondjudge` float NOT NULL DEFAULT '0',
  `thirdjudge` float NOT NULL DEFAULT '0',
  `fourthjudge` float NOT NULL DEFAULT '0',
  `fifthjudge` float NOT NULL DEFAULT '0',
  `sixthjudge` float NOT NULL DEFAULT '0',
  `sevenjudge` float NOT NULL DEFAULT '0',
  `total` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winnermale`
--

INSERT INTO `winnermale` (`Contestant_ID`, `Last_Name`, `firstjudge`, `secondjudge`, `thirdjudge`, `fourthjudge`, `fifthjudge`, `sixthjudge`, `sevenjudge`, `total`) VALUES
(7, 'Viado', 0, 0, 0, 0, 0, 0, 0, 0),
(1, 'Leyva', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Canoneo', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Sarte', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Limcangco', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Reyes', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Grey', 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fifth_judge_female`
--
ALTER TABLE `fifth_judge_female`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `fifth_judge_male`
--
ALTER TABLE `fifth_judge_male`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `first_judge_female`
--
ALTER TABLE `first_judge_female`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `first_judge_male`
--
ALTER TABLE `first_judge_male`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `fourth_judge_female`
--
ALTER TABLE `fourth_judge_female`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `fourth_judge_male`
--
ALTER TABLE `fourth_judge_male`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `second_judge_female`
--
ALTER TABLE `second_judge_female`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `second_judge_male`
--
ALTER TABLE `second_judge_male`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `sixth_judge_female`
--
ALTER TABLE `sixth_judge_female`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `sixth_judge_male`
--
ALTER TABLE `sixth_judge_male`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `third_judge_female`
--
ALTER TABLE `third_judge_female`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `third_judge_male`
--
ALTER TABLE `third_judge_male`
  ADD PRIMARY KEY (`Contestant_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
