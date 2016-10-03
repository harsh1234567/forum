-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2015 at 05:37 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `textarea`
--

CREATE TABLE IF NOT EXISTS `textarea` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `textarea`
--

INSERT INTO `textarea` (`id`, `email`, `message`) VALUES
(1, '', '<pre><p><span style="text-decoration: underline;"><em><strong>hello test.....</strong></em></span></p>\r\n<p><span style="text-decoration: underline;"><em><strong><img style="vertical-align: top;" title="dfdfd" src="D:/voter%20id/Back.png" alt="dfdf" /></strong></em></span></p></pre>'),
(2, '', '<pre><h1>hellojjjjjjjjjjjjjjj</h1></pre>'),
(3, '', '<pre><p><strong>dfffffffffffffffffffffffffffff</strong></p>\r\n<p>&nbsp;</p></pre>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
