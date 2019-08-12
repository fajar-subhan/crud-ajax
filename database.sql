-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2019 at 05:31 AM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hapus`
--

-- --------------------------------------------------------

--
-- Table structure for table `referral`
--

CREATE TABLE IF NOT EXISTS `referral` (
  `referral_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  PRIMARY KEY (`referral_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `referral`
--

INSERT INTO `referral` (`referral_id`, `nama_user`, `no_hp`, `email`, `user`) VALUES
(9, 'Chandra Widjaja', '085745199222', 'chandra@gmail.com', 'Wulandari'),
(10, 'Christina Sumarlin Pribadi', '081265122341', 'christina@gmail.com', 'Wulandari'),
(11, 'Daniel Kurniawan Lukman', '085274547852', 'daniel@gmail.com', 'Adhi Utomo Jusman'),
(12, 'Anisa Tri Kusuma', '083898510410', 'anisa@gmail.com', 'Hendra Susanto');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_hak_akses` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `username`, `user_password`, `user_hak_akses`) VALUES
(4, 'Wulandari', 'Wulan', '$2y$10$YBdrRyAavqH1FicXGpwU6ONI6tVA7nsOBOxVfsoyXdQ49WDa3F02.', 'User'),
(62, 'Adhi Utomo Jusman', 'Adhi Utomo', '$2y$10$.8AVCZ1QjBcQQIDmlja7MudlE8ExTLD1QXR.mCMOEqWdsxRHwLnUW', 'User'),
(64, 'Ravi Shyam Sadarangani', 'Ravi Shyam', '$2y$10$wNhxakGxU8SAYzYzWvfzW./dwO6rUrIiECitUCHuboxuXg2FR5GZe', 'User'),
(66, 'Anji Susanto', 'Anji Susan', '$2y$10$DVoweLMK1quCI7Y.X7bBSuUjdgk00g1Wefb1LFM534cTbfEyj59Yu', 'User'),
(67, 'Admin', 'Admin', '$2y$10$1n92x88JB3Jim8jHtw2CPe/vOufwjIj8yL5gGr5I7pBdopwQsTdWK', 'Admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
