-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 01:47 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `waysgram`
--
CREATE DATABASE IF NOT EXISTS `waysgram` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `waysgram`;

-- --------------------------------------------------------

--
-- Table structure for table `post_tb`
--

CREATE TABLE IF NOT EXISTS `post_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `post_tb`
--

INSERT INTO `post_tb` (`id`, `content`, `image`, `id_user`) VALUES
(1, 'es teh, minuman penyegar dahaga cocok untuk mendampingi ketika makan', 'https://akcdn.detik.net.id/visual/2020/04/18/b0dd84fe-847e-42dc-9439-49b91a2cc23c_169.jpeg?w=700&q=90', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_tb`
--

CREATE TABLE IF NOT EXISTS `users_tb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users_tb`
--

INSERT INTO `users_tb` (`id`, `name`, `photo`, `email`, `password`) VALUES
(1, 'kurapika', 'https://i.pinimg.com/236x/10/6c/cd/106ccd99741ad168a16739276c956b6c.jpg', 'thechain1708@gmail.com', 'dragon1708');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
