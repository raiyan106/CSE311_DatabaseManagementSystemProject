-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2017 at 06:11 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `police`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('admin', 'p123');

-- --------------------------------------------------------

--
-- Table structure for table `artillery`
--

CREATE TABLE `artillery` (
  `Name` varchar(30) NOT NULL,
  `Model` int(5) NOT NULL,
  `Date` int(5) DEFAULT NULL,
  `Total_Rounds` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artillery`
--

INSERT INTO `artillery` (`Name`, `Model`, `Date`, `Total_Rounds`) VALUES
('Sniper', 145, 1987, 200),
('Ak47', 156, 1947, 300),
('DEagle', 215, 1995, 51),
('Revolver', 258, 1956, 800),
('MIG-6', 431, 1996, 300),
('Uzi', 540, 1951, 200),
('M4', 1987, 2000, 200),
('Magnum', 4540, 2011, 420);

-- --------------------------------------------------------

--
-- Table structure for table `criminal_info`
--

CREATE TABLE `criminal_info` (
  `Name` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Area` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal_info`
--

INSERT INTO `criminal_info` (`Name`, `Age`, `Area`) VALUES
('Hitler', 56, 'Germany'),
('Joseph Stalin', 59, 'Moscow'),
('Chengis Khan', 43, 'Mongolia'),
('Copernicus', 87, 'Nashevill');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Name` varchar(20) NOT NULL,
  `Title` varchar(5) NOT NULL,
  `total_employee` int(5) DEFAULT NULL,
  `case_handled` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Name`, `Title`, `total_employee`, `case_handled`) VALUES
('Crime_Division', 'CD', NULL, NULL),
('Intelligence', 'INTEL', NULL, NULL),
('Logistics', 'LOG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Name` varchar(20) NOT NULL,
  `ID` int(5) NOT NULL,
  `Salary` int(20) NOT NULL,
  `Dept_Title` tinyint(4) NOT NULL DEFAULT '0',
  `SRG_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Name`, `ID`, `Salary`, `Dept_Title`, `SRG_ID`) VALUES
('Shovon', 300, 5000, 0, 201),
('Vladimir', 301, 7000, 1, 202),
('Rikimaru', 302, 10000, 2, 203),
('Romario', 303, 15000, 1, 202),
('Sultan', 304, 7500, 2, 203),
('Morty', 305, 5600, 0, 201),
('Raiyan', 309, 3000, 0, 0),
('Ayat', 311, 3000, 2, 0),
('Jonah Hill', 312, 5900, 1, 0),
('Shuvo', 313, 40000, 1, 0),
('FAISAL ', 314, 10000, 2, 0),
('Sabila Noor', 315, 1500, 2, 0),
('Shuvo', 316, 5400, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gets`
--

CREATE TABLE `gets` (
  `Priviledge` tinyint(4) NOT NULL,
  `SI_ID` int(11) NOT NULL,
  `SRG_ID` int(11) NOT NULL,
  `E_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gets`
--

INSERT INTO `gets` (`Priviledge`, `SI_ID`, `SRG_ID`, `E_ID`) VALUES
(4, 100, 202, 310),
(2, 100, 203, 301),
(3, 101, 201, 309),
(1, 101, 202, 303),
(0, 102, 201, 300),
(0, 101, 202, 303),
(3, 101, 203, 314);

-- --------------------------------------------------------

--
-- Table structure for table `lost_and_found`
--

CREATE TABLE `lost_and_found` (
  `Name` varchar(50) NOT NULL,
  `Age` int(5) NOT NULL,
  `ID` int(4) NOT NULL,
  `Gender` tinyint(4) NOT NULL DEFAULT '0',
  `Status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lost_and_found`
--

INSERT INTO `lost_and_found` (`Name`, `Age`, `ID`, `Gender`, `Status`) VALUES
('Gandhi', 69, 401, 0, 1),
('Solomon', 25, 403, 0, 0),
('Julee', 14, 404, 1, 1),
('hill', 34, 405, 1, 0),
('Rosemary', 23, 406, 1, 1),
('Willberg', 56, 407, 0, 1),
('Marie', 23, 410, 1, 1),
('Jessabel', 21, 411, 1, 0),
('sabah', 25, 412, 1, 1),
('Fahad', 22, 413, 0, 1),
('Sami', 22, 414, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `priviledge`
--

CREATE TABLE `priviledge` (
  `Priviledge` tinyint(4) NOT NULL DEFAULT '0',
  `Bonus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priviledge`
--

INSERT INTO `priviledge` (`Priviledge`, `Bonus`) VALUES
(0, 1000),
(1, 2500),
(2, 3500),
(3, 4500),
(4, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `sergeants`
--

CREATE TABLE `sergeants` (
  `Name` varchar(20) NOT NULL,
  `ID` int(5) NOT NULL,
  `dept_title` varchar(5) NOT NULL,
  `SI_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sergeants`
--

INSERT INTO `sergeants` (`Name`, `ID`, `dept_title`, `SI_ID`) VALUES
('Hossain', 200, 'LOG', 100),
('Sheikh', 201, 'INTEL', 101),
('Rana', 202, 'CD', 103);

-- --------------------------------------------------------

--
-- Table structure for table `subinspector`
--

CREATE TABLE `subinspector` (
  `Name` varchar(20) NOT NULL,
  `ID` int(11) NOT NULL,
  `Age` int(5) NOT NULL,
  `Salary` int(10) NOT NULL,
  `dept_in_charge` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subinspector`
--

INSERT INTO `subinspector` (`Name`, `ID`, `Age`, `Salary`, `dept_in_charge`) VALUES
('Hilary', 100, 56, 50000, 'LOG'),
('Putin', 101, 63, 45000, 'INTEL'),
('Justin', 102, 45, 70000, 'CD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artillery`
--
ALTER TABLE `artillery`
  ADD PRIMARY KEY (`Model`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Title`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lost_and_found`
--
ALTER TABLE `lost_and_found`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sergeants`
--
ALTER TABLE `sergeants`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `subinspector`
--
ALTER TABLE `subinspector`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;
--
-- AUTO_INCREMENT for table `lost_and_found`
--
ALTER TABLE `lost_and_found`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;
--
-- AUTO_INCREMENT for table `sergeants`
--
ALTER TABLE `sergeants`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT for table `subinspector`
--
ALTER TABLE `subinspector`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
