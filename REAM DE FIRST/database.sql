-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 11, 2020 at 05:46 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('testAdmin', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `indexNumber` int(11) NOT NULL,
  `year` int(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `district` int(7) NOT NULL,
  `island` int(7) NOT NULL,
  `zscore` float NOT NULL,
  `stream` varchar(80) NOT NULL,
  `sub1Name` varchar(80) NOT NULL,
  `sub2Name` varchar(80) NOT NULL,
  `sub3Name` varchar(80) NOT NULL,
  `sub1Marks` varchar(1) NOT NULL,
  `sub2Marks` varchar(1) NOT NULL,
  `sub3Marks` varchar(1) NOT NULL,
  `commonMarks` int(11) NOT NULL,
  `englishMarks` varchar(1) NOT NULL,
  UNIQUE KEY `index` (`indexNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`indexNumber`, `year`, `name`, `district`, `island`, `zscore`, `stream`, `sub1Name`, `sub2Name`, `sub3Name`, `sub1Marks`, `sub2Marks`, `sub3Marks`, `commonMarks`, `englishMarks`) VALUES
(125001, 2016, 'Amal Perera', 116, 1813, 16539, 'ART', 'LOGIC', 'MEDIA STUDIES', 'ICT', 'A', 'B', 'C', 57, 'C'),
(125002, 2016, 'Sandun Danushka', 52, 1200, 1.8524, 'BIO SCIENCE', 'BIOLOGY', 'PHYSICS', 'CHEMISTRY', 'A', 'A', 'A', 64, 'C'),
(125003, 2016, 'Kamal Hasan', 150, 4258, 1.5842, 'PHYSICAL SCIENCE', 'COMBINED MATHS', 'PHYSICS', 'CHEMISTRY', 'A', 'A', 'B', 75, 'B'),
(125004, 2016, 'Harry Potter', 72, 1452, 1.8254, 'COMMERCE', 'BUSINESS STUDIES', 'ACCOUNTING', 'ECON', 'A', 'A', 'A', 48, 'S'),
(125005, 2016, 'Nayana Kumari', 452, 7812, 1.1584, 'TECHNOLOGY', 'ENGINEERING FOR TECH', 'SCIENCE FOR TECH', 'ICT', 'B', 'B', 'C', 51, 'C');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
