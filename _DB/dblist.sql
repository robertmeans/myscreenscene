
-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 68.178.139.184
-- Generation Time: Feb 15, 2014 at 05:22 PM
-- Server version: 5.0.96
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `homepage80439`
--

-- --------------------------------------------------------

--
-- Table structure for table `dblist`
--

CREATE TABLE `dblist` (
  `dbId` int(11) NOT NULL auto_increment,
  `userId` int(11) NOT NULL,
  `note_url` varchar(1024) NOT NULL,
  `label` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `sort_order` int(11) NOT NULL,
  PRIMARY KEY  (`dbId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `dblist`
--

INSERT INTO `dblist` VALUES(4, 4, '', 'Stanton Rules!', 'I love you. - Daddy-O!', 8);
INSERT INTO `dblist` VALUES(5, 5, '', 'Meredith Rules!', 'I love you! - Daddy-O!', 9);
INSERT INTO `dblist` VALUES(10, 1, 'http://www.ups.com/', 'Router return', '1Z3136V79030437693', 15);
INSERT INTO `dblist` VALUES(11, 1, 'https://www.healthcare.gov/marketplace/individual/', 'Affordable Health Care', 'apply', 16);
INSERT INTO `dblist` VALUES(14, 1, 'https://accounts.google.com/AccountChooser?service=CPanel&continue=https%3A%2F%2Fadmin.google.com%2FDashboard&hl=en', 'Google Admin', 'Need to login here to get to DNS settings for Josh\\''s site.', 18);
INSERT INTO `dblist` VALUES(15, 20, 'http://www.lynda.com', 'HTML5', 'Look up videos on HTML5.', 19);
