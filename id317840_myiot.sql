-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2017 at 12:24 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `id317840_myiot`
--

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `api` varchar(12) COLLATE utf8_unicode_ci DEFAULT 'api123',
  PRIMARY KEY (`userid`),
  UNIQUE KEY `Username` (`Username`),
  UNIQUE KEY `api` (`api`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`userid`, `Username`, `email`, `Password`, `api`) VALUES
(1, 'sudeesh', 'sudeeshvs01@gmail.com', 'sude', 'api123');

-- --------------------------------------------------------

--
-- Table structure for table `sensorsvalue`
--

CREATE TABLE IF NOT EXISTS `sensorsvalue` (
  `Updatedatetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `Sensor1` int(11) NOT NULL,
  `Sensor2` int(11) NOT NULL,
  `Sensor3` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sensorsvalue`
--

INSERT INTO `sensorsvalue` (`Updatedatetime`, `Sensor1`, `Sensor2`, `Sensor3`, `userid`) VALUES
('2017-11-23 16:49:49', 10, 20, 30, 1),
('2017-11-23 16:52:00', 10, 75, 78, 1),
('2017-11-24 11:25:17', 101, 90, 20, 1),
('2017-11-24 11:27:03', 101, 90, 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `switchstatus`
--

CREATE TABLE IF NOT EXISTS `switchstatus` (
  `Currentstatus` binary(1) NOT NULL DEFAULT '0',
  `lupdatetime` datetime DEFAULT CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `switchstatus`
--

INSERT INTO `switchstatus` (`Currentstatus`, `lupdatetime`, `userid`) VALUES
('1', '2017-11-23 16:10:20', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
