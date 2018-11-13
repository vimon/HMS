-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 12, 2018 at 12:12 PM
-- Server version: 5.5.59-0ubuntu0.14.04.1
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
  `mobnum` int(10) NOT NULL,
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
  `eligible` varchar(3) NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passcode`) VALUES
(1, 'vimon', '123'),
(3, 'ponnore', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
