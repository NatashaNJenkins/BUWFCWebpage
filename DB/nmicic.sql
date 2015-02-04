-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2015 at 06:12 PM
-- Server version: 5.5.21
-- PHP Version: 5.4.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nmicic`
--

-- --------------------------------------------------------

--
-- Table structure for table `Match`
--

CREATE TABLE IF NOT EXISTS `Match` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Opposition` varchar(100) NOT NULL,
  `Man_of_Match` int(11) DEFAULT NULL,
  `Muppet_of_Match` int(11) DEFAULT NULL,
  `Report` text,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `Date` (`Date`),
  UNIQUE KEY `Man_of_Match` (`Man_of_Match`),
  UNIQUE KEY `Muppet_of_Match` (`Muppet_of_Match`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Player_Profiles`
--

CREATE TABLE IF NOT EXISTS `Player_Profiles` (
  `Player_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Birthday` date NOT NULL,
  `Course` varchar(100) NOT NULL,
  `YearOfStudy` varchar(100) NOT NULL,
  `YearsOfActivity` int(10) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Tag` varchar(100) NOT NULL,
  `Hobbies` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`Player_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `Player_Profiles`
--

INSERT INTO `Player_Profiles` (`Player_ID`, `Name`, `Birthday`, `Course`, `YearOfStudy`, `YearsOfActivity`, `Position`, `Tag`, `Hobbies`) VALUES
(1, 'Ellen Page', '2015-01-08', 'Computing', 'Masters', 2, 'Striker', 'Senior', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Social_Events`
--

CREATE TABLE IF NOT EXISTS `Social_Events` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `Location` varchar(100) NOT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time DEFAULT NULL,
  `Details` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'User1', 'Pa55word'),
(3, 'ADMIN', 'ADMIN');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Match`
--
ALTER TABLE `Match`
  ADD CONSTRAINT `Match_ibfk_1` FOREIGN KEY (`Man_of_Match`) REFERENCES `Player_Profiles` (`Player_ID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Match_ibfk_2` FOREIGN KEY (`Muppet_of_Match`) REFERENCES `Player_Profiles` (`Player_ID`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
