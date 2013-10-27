-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2013 at 10:06 PM
-- Server version: 5.6.14
-- PHP Version: 5.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hbmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `hobbydetails`
--

CREATE TABLE IF NOT EXISTS `hobbydetails` (
  `learn` tinyint(1) NOT NULL,
  `share` tinyint(1) NOT NULL,
  `teach` tinyint(1) NOT NULL,
  `hobbyname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobbydetails`
--

INSERT INTO `hobbydetails` (`learn`, `share`, `teach`, `hobbyname`, `username`) VALUES
(0, 1, 0, 'asd', 'asd'),
(0, 1, 0, 'asd', 'asd'),
(0, 1, 0, 'asd', 'asd'),
(0, 1, 0, 'asd', 'asd'),
(0, 1, 0, 'asd', 'asd'),
(0, 1, 0, 'asd', 'asd'),
(0, 1, 0, 'cheese', 'asdasdasd'),
(0, 1, 0, '', 'asdasdasd'),
(0, 1, 0, 'aerobics', 'asdasdasd'),
(0, 1, 0, 'guitar', 'asdasdasd'),
(0, 1, 0, '', 'asdasdasd'),
(0, 1, 0, '', 'asdasdasd'),
(0, 1, 0, '', 'asdasdasd'),
(0, 1, 0, '', 'asdasdasd'),
(0, 1, 0, 'painting', 'asdasdasd'),
(0, 1, 0, 'painting', 'asdasdasd'),
(0, 1, 0, 'painting', 'asdasdasd'),
(0, 1, 0, 'painting', 'asdasdasd'),
(0, 1, 0, 'guitar', ''),
(0, 1, 0, 'painting', ''),
(0, 1, 0, 'guitar', ''),
(0, 1, 0, 'painting', ''),
(0, 1, 0, 'guitar', ''),
(0, 1, 0, 'painting', ''),
(0, 1, 0, 'guitar', ''),
(0, 1, 0, 'painting', ''),
(0, 1, 0, 'guitar', ''),
(0, 1, 0, 'painting', ''),
(0, 1, 0, 'guitar', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL COMMENT 'login name for user',
  `password` varchar(100) NOT NULL COMMENT 'the password',
  `verified` binary(1) DEFAULT '0' COMMENT 'If the user has verified his email id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Contains data for user login' AUTO_INCREMENT=8 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `verified`) VALUES
(1, 'Vishal Arhatia', 'abc', '0'),
(2, 'Vishal Sinha', 'abc', '0'),
(4, 'asd', '7815696ecbf1c96e6894b779456d330e', '0'),
(6, 'asdasdasd', 'a8f5f167f44f4964e6c998dee827110c', '0'),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', '0');

-- --------------------------------------------------------

--
-- Table structure for table `userhobby`
--

CREATE TABLE IF NOT EXISTS `userhobby` (
  `hobbyid` int(6) NOT NULL,
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `id` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`fname`, `lname`, `username`, `id`) VALUES
('Vishal', 'Arhatia', 'Vishal Arhatia', 1),
('Vishal', 'Sinha', 'Vishal Sinha', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
