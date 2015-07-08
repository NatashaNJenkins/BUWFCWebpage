-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 18, 2015 at 10:31 PM
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
  KEY `Muppet_of_Match` (`Muppet_of_Match`),
  KEY `Man_of_Match` (`Man_of_Match`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `Match`
--

INSERT INTO `Match` (`ID`, `Date`, `Location`, `Opposition`, `Man_of_Match`, `Muppet_of_Match`, `Report`) VALUES
(15, '2015-06-01', 'Place', 'People', 1, 2, 'stuff'),
(19, '2015-06-13', 'Place', 'Leeds', 1, 2, ' Enter report details here!\r\n'),
(29, '2015-06-07', 'Bradford', 'Leeds', 2, 3, 'Enter report details here!\r\n'),
(30, '2015-06-12', 'Leeds', 'Leeds', 2, 1, 'Things');

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
  `ImageName` varchar(100) NOT NULL,
  PRIMARY KEY (`Player_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `Player_Profiles`
--

INSERT INTO `Player_Profiles` (`Player_ID`, `Name`, `Birthday`, `Course`, `YearOfStudy`, `YearsOfActivity`, `Position`, `Tag`, `Hobbies`, `ImageName`) VALUES
(1, 'Ellen Page', '2015-01-08', 'Computing', 'Masters', 2, 'Striker', 'Senior', NULL, 'img/cat.jpg'),
(2, 'dave', '0000-00-00', 'dave', 'dave', 0, 'dave', 'dave', 'dave', ''),
(3, 'Natasha', '1994-06-23', 'kjfdjh', '4', 3, 'Striker', 'Senior', 'Apples', ''),
(5, 'Natasha Micic', '0000-00-00', 'Comp Math', 'Second', 5, 'Striker', 'Senior', 'Pie, apple pie, cheese pie', ''),
(6, 'Person', '2000-10-10', 'things', 'Second', 1, 'Striker', 'Senior', 'Things', ''),
(7, 'Second person', '2017-02-01', 'A thing', 'More things', 1, 'Striker', 'Senior', 'Even more things!', 'img/Helpful physics paper.png');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `Social_Events`
--

INSERT INTO `Social_Events` (`ID`, `Name`, `Date`, `Location`, `Start_Time`, `End_Time`, `Details`) VALUES
(1, 'The Big event!', '2015-06-21', 'Bradford uni', '15:30:00', '00:00:00', 'Bring football boots'),
(4, 'Bit event 2', '2015-06-12', 'Place', '15:15:00', '20:00:00', 'Bring your face!'),
(10, '', '0000-00-00', '', '00:00:00', '00:00:00', ''),
(11, '', '0000-00-00', '', '00:00:00', '20:00:00', ''),
(12, 'Natasha', '2015-06-03', 'PLAce', '15:05:00', '00:00:00', 'THINGS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(9, 'ADMIN1', '835d6dc88b708bc646d6db82c853ef4182fabbd4a8de59c213f2b5ab3ae7d9be');

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
