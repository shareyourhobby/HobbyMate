-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2013 at 07:47 AM
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
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `hobbykop_hbmt`.`feedback` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
   `uid` int(4),
  `questA` varchar(10) NOT NULL,
  `questB` varchar(2000) NOT NULL,
  `questC` varchar(10) NOT NULL,
  `questD` varchar(50) NOT NULL,
  `questE` varchar(2000),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`questA`, `questB`, `questC`, `questD`, `questE`, `questF`, `id`) VALUES
(1, 'default text', 0, 'default text', ' ', 'default text', 1),
(1, 'default text', 0, 'default text', ' ', 'default text', 2),
(0, 'default text', 1, 'default text', ' on', 'default text', 3),
(0, 'default text', 1, 'default text', ' onon', 'default text', 4),
(0, 'default text', 1, 'default text', ' AC', 'default text', 5),
(1, 'default text', 1, 'default text', ' ', 'default text', 6),
(1, 'default text', 1, 'default text', ' B,C,', 'default text', 7),
(1, 'default text', 1, 'default text', ' ', 'default text', 8),
(1, 'default text', 1, 'default text', ' ', 'default text', 9),
(1, 'default text', 1, 'default text', ' ', 'default text', 10);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
