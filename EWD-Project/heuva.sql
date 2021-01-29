-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2021 at 11:56 AM
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
-- Database: `heuva`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

DROP TABLE IF EXISTS `admission`;
CREATE TABLE IF NOT EXISTS `admission` (
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` int(10) NOT NULL,
  `Field` varchar(100) NOT NULL,
  `Grade` int(10) NOT NULL,
  `POBox` int(10) NOT NULL,
  `Dissability` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assesments`
--

DROP TABLE IF EXISTS `assesments`;
CREATE TABLE IF NOT EXISTS `assesments` (
  `Leaner ID` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Test Mark` int(11) NOT NULL,
  ` Test %` int(11) NOT NULL,
  `Assignement Mark` int(11) NOT NULL,
  `Assignment %` int(11) NOT NULL,
  `Average Total` int(11) NOT NULL,
  PRIMARY KEY (`Leaner ID`),
  UNIQUE KEY `Subject` (`Subject`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examination result`
--

DROP TABLE IF EXISTS `examination result`;
CREATE TABLE IF NOT EXISTS `examination result` (
  `Learner ID` int(15) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `CA Mark` int(11) NOT NULL,
  `Exam Mark` int(11) NOT NULL,
  `Average %` int(11) NOT NULL,
  `Total Mark` int(11) NOT NULL,
  PRIMARY KEY (`Learner ID`),
  UNIQUE KEY `Subject` (`Subject`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `Learner ID` int(15) UNSIGNED NOT NULL,
  `First Name` varchar(55) NOT NULL,
  `Last Name` varchar(55) NOT NULL,
  `Gender` enum('Male','Female') NOT NULL,
  `Field` varchar(100) NOT NULL,
  PRIMARY KEY (`Learner ID`),
  UNIQUE KEY `Course Code` (`Field`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(15) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` text NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
