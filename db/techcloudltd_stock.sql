-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2018 at 10:54 AM
-- Server version: 10.1.24-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techcloudltd_stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Woman'),
(2, 'Man'),
(3, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `csvfile`
--

CREATE TABLE IF NOT EXISTS `csvfile` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `filelocation` varchar(500) NOT NULL,
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `csvfile`
--

INSERT INTO `csvfile` (`id`, `name`, `filelocation`, `createtime`) VALUES
(1, '123', 'csv/123.csv', '2018-02-09 14:44:04'),
(34, 'vfd', 'csv/vfd.csv', '2018-02-09 14:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `detailedcolor`
--

CREATE TABLE IF NOT EXISTS `detailedcolor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `colorName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `detailedcolor`
--

INSERT INTO `detailedcolor` (`id`, `colorName`) VALUES
(1, 'Bordeaux'),
(2, 'Cobalt');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'tcl@123', 'admin'),
(2, 'sakib', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quanity` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `productidtype` varchar(255) NOT NULL,
  `disprice` varchar(255) NOT NULL,
  `disstartdate` varchar(255) NOT NULL,
  `disenddate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `category`, `sku`, `price`, `quanity`, `state`, `productidtype`, `disprice`, `disstartdate`, `disenddate`) VALUES
(1, 'Man', 'ABCD-RDS-123', '500', '2', '11', 'SHOP-SKU', '350', '2018-06-02', '2018-10-02'),
(2, 'Man', 'test', '30', '12', '2', '123', '350', '2018-12-02', '2018-20-02');

-- --------------------------------------------------------

--
-- Table structure for table `productinfo`
--

CREATE TABLE IF NOT EXISTS `productinfo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `category` varchar(5) NOT NULL,
  `style` varchar(100) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `productName` varchar(200) NOT NULL,
  `productDecription` varchar(1000) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `standardcolor` varchar(20) NOT NULL,
  `detailedcolor` varchar(20) NOT NULL,
  `size` varchar(5) NOT NULL,
  `swatch` varchar(255) NOT NULL,
  `mainImage` varchar(255) NOT NULL,
  `outfit` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `LastExportedBy` varchar(45) NOT NULL,
  `LastExportedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `productinfo`
--

INSERT INTO `productinfo` (`id`, `category`, `style`, `sku`, `productName`, `productDecription`, `brand`, `standardcolor`, `detailedcolor`, `size`, `swatch`, `mainImage`, `outfit`, `image2`, `status`, `LastExportedBy`, `LastExportedDate`) VALUES
(2, 'Woman', 'asdas', 'asd', 'sdfsdf', '<p>asdasd</p>\r\n', 'asdsad', 'Blue', '', '6', '', '', '', '', NULL, '', '2018-02-13 07:03:59'),
(3, 'Man', 'rtye', '34545', '656', '<p>dfgfdg</p>\r\n', 'asdgfjh', 'Red', '', 'test', '', '', '', '', NULL, '', '2018-02-13 07:03:59'),
(4, 'Man', 'ABCD-123', 'ABCD-123-RDS', 'pant', '<p>asdasqwe</p>\r\n', 'Rosetta Getty', 'Red', 'Bordeaux', 'L', '', '', '', '', NULL, '', '2018-02-13 07:03:59'),
(5, 'Man', 'asdf', 'adsf', 'asdf', '<p>asdf</p>\r\n', 'asdf', 'Red', 'Bordeaux', 'L', '14900406_1023011481155352_4768715051129103434_n.jpg', '', '', '', 'Active', '', '2018-02-13 10:14:43'),
(6, 'Woman', 'test', 'test', 'test', '<p>test</p>\r\n', 'test', 'Red', 'Bordeaux', 'L', '16409954_1312700575454227_1399036344_o.jpg', '', '', '', 'Active', '', '2018-02-13 10:20:26');

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`id`, `name`) VALUES
(1, 'L'),
(2, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `standardcolor`
--

CREATE TABLE IF NOT EXISTS `standardcolor` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `colorName` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `standardcolor`
--

INSERT INTO `standardcolor` (`id`, `colorName`) VALUES
(1, 'Red'),
(2, 'Blue');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
