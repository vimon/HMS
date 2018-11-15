-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 15, 2018 at 12:51 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bloodtable`
--

CREATE TABLE IF NOT EXISTS `Bloodtable` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `bday` date NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `mobnum` varchar(10) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `weight` int(5) NOT NULL,
  `height` int(5) NOT NULL,
  `lastdonation` date NOT NULL,
  `q1.1` varchar(3) NOT NULL,
  `q1.2` varchar(3) NOT NULL,
  `q1.3` varchar(3) NOT NULL,
  `q1.4` varchar(3) NOT NULL,
  `q1.5` varchar(3) NOT NULL,
  `q1.6a` varchar(3) NOT NULL,
  `q1.6b` varchar(3) NOT NULL,
  `q1.6c` varchar(3) NOT NULL,
  `q1.6d` varchar(3) NOT NULL,
  `q1.6e` varchar(3) NOT NULL,
  `q1.7` varchar(3) NOT NULL,
  `q1.8a` varchar(3) NOT NULL,
  `q1.8b` varchar(3) NOT NULL,
  `q1.9` varchar(3) NOT NULL,
  `q1.9a` varchar(3) NOT NULL,
  `q1.9b` varchar(3) NOT NULL,
  `q1.9c` varchar(3) NOT NULL,
  `q1.10` varchar(3) NOT NULL,
  `q1.11` varchar(3) NOT NULL,
  `q2.1` varchar(3) NOT NULL,
  `q2.2` varchar(3) NOT NULL,
  `q2.3` varchar(3) NOT NULL,
  `q2.4` varchar(3) NOT NULL,
  `eligible` varchar(10) NOT NULL,
  `curdate` date NOT NULL,
  PRIMARY KEY (`mobnum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Bloodtable`
--

INSERT INTO `Bloodtable` (`first_name`, `last_name`, `bday`, `emailid`, `mobnum`, `gender`, `address`, `city`, `pincode`, `state`, `country`, `occupation`, `blood`, `weight`, `height`, `lastdonation`, `q1.1`, `q1.2`, `q1.3`, `q1.4`, `q1.5`, `q1.6a`, `q1.6b`, `q1.6c`, `q1.6d`, `q1.6e`, `q1.7`, `q1.8a`, `q1.8b`, `q1.9`, `q1.9a`, `q1.9b`, `q1.9c`, `q1.10`, `q1.11`, `q2.1`, `q2.2`, `q2.3`, `q2.4`, `eligible`, `curdate`) VALUES
('raj', '', '1993-11-11', '', '1234567891', 'Male', '', '', 0, '', 'India', '', '', 0, 0, '0000-00-00', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'donated', '2018-11-15'),
('vishnu', '', '1993-10-10', '', '7894561237', 'Male', '', '', 0, '', 'India', '', '', 0, 0, '0000-00-00', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'donated', '2018-11-15'),
('vimon', '', '1993-09-13', '', '8129831374', 'Male', '', '', 0, '', 'India', '', '', 0, 0, '0000-00-00', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '2018-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `passcode` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passcode`) VALUES
(1, 'vimon', '123'),
(3, 'ponnore', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
