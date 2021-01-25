-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 25, 2021 at 09:13 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jss school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
CREATE TABLE IF NOT EXISTS `admission` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Number` int(10) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `Course` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assesments`
--

DROP TABLE IF EXISTS `assesments`;
CREATE TABLE IF NOT EXISTS `assesments` (
  `Student ID` int(15) NOT NULL,
  `Course ID` varchar(20) NOT NULL,
  `Course Name` varchar(100) NOT NULL,
  `Test Mark` int(11) NOT NULL,
  ` Test %` int(11) NOT NULL,
  `Assignement Mark` int(11) NOT NULL,
  `Assignment %` int(11) NOT NULL,
  `Average Total` int(11) NOT NULL,
  `Status` enum('Pass','Fail') NOT NULL,
  PRIMARY KEY (`Course ID`),
  UNIQUE KEY `Student ID` (`Student ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `Course Code` int(15) NOT NULL,
  `Course Name` varchar(100) NOT NULL,
  PRIMARY KEY (`Course Code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examination result`
--

DROP TABLE IF EXISTS `examination result`;
CREATE TABLE IF NOT EXISTS `examination result` (
  `Course ID` varchar(20) NOT NULL,
  `Course Name` varchar(50) NOT NULL,
  `CA Mark` int(11) NOT NULL,
  `Exam Mark` int(11) NOT NULL,
  `Average %` int(11) NOT NULL,
  `Total Mark` int(11) NOT NULL,
  `Status` enum('Pass','Fail') NOT NULL,
  PRIMARY KEY (`Course ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `ID` int(11) NOT NULL,
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Number` int(10) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Date Of Birth` date NOT NULL,
  `Address` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sign up`
--

DROP TABLE IF EXISTS `sign up`;
CREATE TABLE IF NOT EXISTS `sign up` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `Staff ID` int(11) NOT NULL,
  `First Name` varchar(55) NOT NULL,
  `Last Name` varchar(55) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  PRIMARY KEY (`Staff ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Student ID` int(11) NOT NULL,
  `First Name` varchar(55) NOT NULL,
  `Last Name` varchar(55) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Course Code` int(15) NOT NULL,
  PRIMARY KEY (`Student ID`),
  UNIQUE KEY `Course Code` (`Course Code`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `First Name` varchar(50) NOT NULL,
  `Last Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`First Name`, `Last Name`, `Email`, `Password`) VALUES
('Jeanne', 'Strauss', 'jstrauss62@gmail.com', '12091997');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
