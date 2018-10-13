-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 13, 2018 at 11:56 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliances`
--

DROP TABLE IF EXISTS `appliances`;
CREATE TABLE IF NOT EXISTS `appliances` (
  `appID` int(50) NOT NULL AUTO_INCREMENT,
  `channelNumber` int(11) NOT NULL,
  `appName` varchar(50) NOT NULL,
  `appPlace` varchar(50) NOT NULL,
  `appWatts` double(10,5) NOT NULL,
  `appPic` varchar(150) NOT NULL,
  PRIMARY KEY (`appID`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliances`
--

INSERT INTO `appliances` (`appID`, `channelNumber`, `appName`, `appPlace`, `appWatts`, `appPic`) VALUES
(78, 1, 'Aircon', 'Room', 1000.00000, './img/aircon.png'),
(79, 2, 'Super Fan', 'Bedroom', 1000.00000, './img/fan.png'),
(80, 3, 'Charger', 'CR', 1.00000, './img/charge.png'),
(81, 4, 'Super TV', 'CR', 1000.00000, './img/tv.png');

-- --------------------------------------------------------

--
-- Table structure for table `channel`
--

DROP TABLE IF EXISTS `channel`;
CREATE TABLE IF NOT EXISTS `channel` (
  `channelNumber` int(11) NOT NULL AUTO_INCREMENT,
  `channelStatus` int(11) NOT NULL,
  PRIMARY KEY (`channelNumber`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `channel`
--

INSERT INTO `channel` (`channelNumber`, `channelStatus`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `scheduleID` int(11) NOT NULL AUTO_INCREMENT,
  `applianceID` varchar(500) NOT NULL,
  `timeStart` datetime DEFAULT NULL,
  `timeEnd` datetime DEFAULT NULL,
  PRIMARY KEY (`scheduleID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`scheduleID`, `applianceID`, `timeStart`, `timeEnd`) VALUES
(1, '78', '2018-07-26 17:38:00', '2018-07-26 17:37:00'),
(2, '78', '2018-07-26 17:40:00', '2018-07-26 17:41:00'),
(3, '78', '2018-07-26 17:40:00', '2018-07-26 17:41:00'),
(4, '78', '2018-07-26 17:43:00', '2018-07-26 17:44:00'),
(5, '78', '2018-07-26 17:43:00', '2018-07-26 17:44:00'),
(6, '78', '2018-07-26 17:43:00', '2018-07-26 17:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

DROP TABLE IF EXISTS `templates`;
CREATE TABLE IF NOT EXISTS `templates` (
  `templateID` int(11) NOT NULL AUTO_INCREMENT,
  `templateName` varchar(50) NOT NULL,
  `templateSettings` varchar(50) NOT NULL,
  PRIMARY KEY (`templateID`)
) ENGINE=MyISAM AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`templateID`, `templateName`, `templateSettings`) VALUES
(96, 'Off All', '000000000');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `transID` int(50) NOT NULL AUTO_INCREMENT,
  `appID` int(50) NOT NULL,
  `startTime` datetime NOT NULL,
  `endTime` datetime DEFAULT NULL,
  PRIMARY KEY (`transID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transID`, `appID`, `startTime`, `endTime`) VALUES
(1, 78, '2018-07-26 20:35:04', '2018-07-26 20:35:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT '1',
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `usertype`, `name`) VALUES
('admin', 'admin', 0, 'Administrator'),
('Tecause', 'myrpiaccount', 1, 'Tecause');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
