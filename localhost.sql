-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2021 at 12:21 AM
-- Server version: 1.0.417
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_anime`
--
CREATE DATABASE `db_anime` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_anime`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_anime`
--

CREATE TABLE IF NOT EXISTS `tb_anime` (
  `animenum` int(11) NOT NULL,
  `animename` varchar(50) NOT NULL,
  `animestudio` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `episode` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`animenum`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_anime`
--

INSERT INTO `tb_anime` (`animenum`, `animename`, `animestudio`, `date`, `episode`, `status`) VALUES
(101, 'Demon Slayer ', 'ufotable', '2019-04-19', 26, 'Completed'),
(102, 'AOT', 'Mappa', '2021-01-12', 24, 'Completed'),
(103, 'Katekyo Hitman Reborn', 'Tv Tokyo', '2008-07-17', 202, 'Completed'),
(104, 'Hellsing', '8bits', '2006-06-18', 12, 'Completed'),
(105, 'Slime S1', '8bits', '2018-08-25', 24, 'Completed'),
(106, 'Fire Force S1', 'David Production', '2019-02-12', 24, 'Completed'),
(107, 'Dr. Stone S1', 'aniplex', '2018-10-18', 24, 'Completed'),
(108, 'To Your Eternity', 'Mafia', '2021-04-04', 24, 'Completed'),
(109, 'Toilet Bound Hanako-kun', 'Mafia', '2018-09-19', 12, 'Completed'),
(113, 'Fruit Basket (Remake)', 'MaD', '2018-09-23', 12, 'Completed'),
(114, 'AOT', 'Tv Tokyo', '2021-02-09', 202, 'ONGOING');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`) VALUES
(1, 'weeb', '101');
