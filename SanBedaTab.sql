-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2019 at 10:00 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

CREATE TABLE `advocacyfemale` (
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

CREATE TABLE `AdvocacyMale` (
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

CREATE TABLE `Contestant` (
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

CREATE TABLE `fifth_judge_female` (
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
-- Table structure for table `fifth_judge_male`
--

CREATE TABLE `fifth_judge_male` (
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
(7, 'Viado', 0, 0, 0, 0),
(1, 'Leyva', 0, 0, 0, 0),
(2, 'Canoneo', 0, 0, 0, 0),
(3, 'Sarte', 0, 0, 0, 0),
(4, 'Limcangco', 0, 0, 0, 0),
(5, 'Reyes', 0, 0, 0, 0),
(6, 'Grey', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `first_judge_female`
--

CREATE TABLE `first_judge_female` (
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
-- Table structure for table `first_judge_male`
--

CREATE TABLE `first_judge_male` (
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
(7, 'Viado', 0, 0, 0, 0),
(1, 'Leyva', 0, 0, 0, 0),
(2, 'Canoneo', 0, 0, 0, 0),
(3, 'Sarte', 0, 0, 0, 0),
(4, 'Limcangco', 0, 0, 0, 0),
(5, 'Reyes', 0, 0, 0, 0),
(6, 'Grey', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fivetopsixfemale`
--

CREATE TABLE `fivetopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `fivetopsixmale`
--

CREATE TABLE `fivetopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `fourth_judge_female`
--

CREATE TABLE `fourth_judge_female` (
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
-- Table structure for table `fourth_judge_male`
--

CREATE TABLE `fourth_judge_male` (
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
(7, 'Viado', 0, 0, 0, 0),
(1, 'Leyva', 0, 0, 0, 0),
(2, 'Canoneo', 0, 0, 0, 0),
(3, 'Sarte', 0, 0, 0, 0),
(4, 'Limcangco', 0, 0, 0, 0),
(5, 'Reyes', 0, 0, 0, 0),
(6, 'Grey', 0, 0, 0, 0);
-- --------------------------------------------------------

--
-- Table structure for table `fourtopsixfemale`
--

CREATE TABLE `fourtopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fourtopsixmale`
--

CREATE TABLE `fourtopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Masterlist_female`
--

CREATE TABLE `Masterlist_female` (
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
-- Table structure for table `Masterlist_male`
--

CREATE TABLE `Masterlist_male` (
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
(7, 'Viado', 0, 0, 0, 0, 0, 0, 0, 0),
(1, 'Leyva', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Canoneo', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 'Sarte', 0, 0, 0, 0, 0, 0, 0, 0),
(4, 'Limcangco', 0, 0, 0, 0, 0, 0, 0, 0),
(5, 'Reyes', 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Grey', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `onetopsixfemale`
--

CREATE TABLE `onetopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `onetopsixmale`
--

CREATE TABLE `onetopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `second_judge_female`
--

CREATE TABLE `second_judge_female` (
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
-- Table structure for table `second_judge_male`
--

CREATE TABLE `second_judge_male` (
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
(7, 'Viado', 0, 0, 0, 0),
(1, 'Leyva', 0, 0, 0, 0),
(2, 'Canoneo', 0, 0, 0, 0),
(3, 'Sarte', 0, 0, 0, 0),
(4, 'Limcangco', 0, 0, 0, 0),
(5, 'Reyes', 0, 0, 0, 0),
(6, 'Grey', 0, 0, 0, 0);
-- --------------------------------------------------------

--
-- Table structure for table `seventopsixfemale`
--

CREATE TABLE `seventopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `seventopsixmale`
--

CREATE TABLE `seventopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `seven_judge_female`
--

CREATE TABLE `seven_judge_female` (
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

CREATE TABLE `seven_judge_male` (
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

CREATE TABLE `sixth_judge_female` (
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
-- Table structure for table `sixth_judge_male`
--

CREATE TABLE `sixth_judge_male` (
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
(7, 'Viado', 0, 0, 0, 0),
(1, 'Leyva', 0, 0, 0, 0),
(2, 'Canoneo', 0, 0, 0, 0),
(3, 'Sarte', 0, 0, 0, 0),
(4, 'Limcangco', 0, 0, 0, 0),
(5, 'Reyes', 0, 0, 0, 0),
(6, 'Grey', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sixtopsixfemale`
--

CREATE TABLE `sixtopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `sixtopsixmale`
--

CREATE TABLE `sixtopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `third_judge_female`
--

CREATE TABLE `third_judge_female` (
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
-- Table structure for table `third_judge_male`
--

CREATE TABLE `third_judge_male` (
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
(7, 'Viado', 0, 0, 0, 0),
(1, 'Leyva', 0, 0, 0, 0),
(2, 'Canoneo', 0, 0, 0, 0),
(3, 'Sarte', 0, 0, 0, 0),
(4, 'Limcangco', 0, 0, 0, 0),
(5, 'Reyes', 0, 0, 0, 0),
(6, 'Grey', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `threetopsixfemale`
--

CREATE TABLE `threetopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `threetopsixmale`
--

CREATE TABLE `threetopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `twotopsixfemale`
--

CREATE TABLE `twotopsixfemale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `twotopsixmale`
--

CREATE TABLE `twotopsixmale` (
  `Contestant_ID` int(5) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Beauty` float NOT NULL DEFAULT '0',
  `Intelligence` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `winnerfemale`
--

CREATE TABLE `winnerfemale` (
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

CREATE TABLE `winnermale` (
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

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
