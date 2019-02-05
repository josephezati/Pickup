-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2018 at 03:18 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pickup_db`
--
CREATE DATABASE IF NOT EXISTS `pickup_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pickup_db`;

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE IF NOT EXISTS `child` (
  `idchild` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `idschool` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `idparent` int(11) NOT NULL,
  `idresidence` int(11) NOT NULL,
  PRIMARY KEY (`idchild`),
  KEY `idschool` (`idschool`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`idchild`, `fname`, `lname`, `idschool`, `class`, `idparent`, `idresidence`) VALUES
(14, 'Anyole', 'Ephraim', 11, 2, 1, 13),
(15, 'Tumukunde', 'Denis', 11, 3, 2, 13);

-- --------------------------------------------------------

--
-- Table structure for table `daily_travel`
--

CREATE TABLE IF NOT EXISTS `daily_travel` (
  `idtravel` int(11) NOT NULL AUTO_INCREMENT,
  `travelled_on` datetime NOT NULL,
  `idroute` int(11) NOT NULL,
  `iddriver` int(11) NOT NULL,
  `idchild` int(11) NOT NULL,
  PRIMARY KEY (`idtravel`),
  KEY `iddriver` (`iddriver`),
  KEY `idchild` (`idchild`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `iddistrict` int(11) NOT NULL,
  `district_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`iddistrict`, `district_name`) VALUES
(1, 'Mbarara'),
(2, 'Isingiro');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE IF NOT EXISTS `division` (
  `iddivision` int(11) NOT NULL AUTO_INCREMENT,
  `division_name` varchar(45) NOT NULL,
  `iddistrict` int(11) NOT NULL,
  PRIMARY KEY (`iddivision`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`iddivision`, `division_name`, `iddistrict`) VALUES
(11, 'Kamukuzi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `iddriver` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `telephone` int(11) NOT NULL,
  `permit_number` varchar(45) NOT NULL,
  `vehicle_number` varchar(15) NOT NULL,
  PRIMARY KEY (`iddriver`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`iddriver`, `fname`, `lname`, `telephone`, `permit_number`, `vehicle_number`) VALUES
(1, 'Ntamakemwa', 'David', 784536238, 'U545646P', 'UBE342X');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE IF NOT EXISTS `parent` (
  `idparent` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `idresidence` int(11) NOT NULL,
  PRIMARY KEY (`idparent`),
  KEY `idresidence` (`idresidence`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`idparent`, `fname`, `lname`, `telephone`, `email`, `idresidence`) VALUES
(1, 'Gift', 'Emmanuel', 784156404, 'alua@gmail.com', 13),
(2, 'Mambo', 'Davis', 701345261, 'mambo@gmail.com', 13);

-- --------------------------------------------------------

--
-- Table structure for table `residence`
--

CREATE TABLE IF NOT EXISTS `residence` (
  `idresidence` int(11) NOT NULL AUTO_INCREMENT,
  `iddistrict` int(11) NOT NULL,
  `iddivision` int(45) DEFAULT NULL,
  `cell` varchar(45) NOT NULL,
  PRIMARY KEY (`idresidence`),
  KEY `iddivision` (`iddivision`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `residence`
--

INSERT INTO `residence` (`idresidence`, `iddistrict`, `iddivision`, `cell`) VALUES
(13, 1, 11, 'Kashanyarazi');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `idschool` int(11) NOT NULL AUTO_INCREMENT,
  `school_name` varchar(45) NOT NULL,
  PRIMARY KEY (`idschool`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`idschool`, `school_name`) VALUES
(11, 'Kabateraine Kindergarten');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `usertype` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `fname`, `lname`, `telephone`, `email`, `username`, `usertype`, `password`) VALUES
(1, 'Gift', 'Emmanuel', 784156404, 'aluanuel@gmail.com', 'Alua', '1', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `child_ibfk_1` FOREIGN KEY (`idschool`) REFERENCES `school` (`idschool`);

--
-- Constraints for table `daily_travel`
--
ALTER TABLE `daily_travel`
  ADD CONSTRAINT `daily_travel_ibfk_1` FOREIGN KEY (`iddriver`) REFERENCES `driver` (`iddriver`),
  ADD CONSTRAINT `daily_travel_ibfk_2` FOREIGN KEY (`idchild`) REFERENCES `child` (`idchild`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`idresidence`) REFERENCES `residence` (`idresidence`);

--
-- Constraints for table `residence`
--
ALTER TABLE `residence`
  ADD CONSTRAINT `residence_ibfk_1` FOREIGN KEY (`iddivision`) REFERENCES `division` (`iddivision`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
