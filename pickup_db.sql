-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2019 at 12:20 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickup_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `idchild` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `idschool` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `idparent` int(11) NOT NULL,
  `idresidence` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `daily_travel` (
  `idtravel` int(11) NOT NULL,
  `travelled_on` datetime NOT NULL,
  `idroute` int(11) NOT NULL,
  `iddriver` int(11) NOT NULL,
  `idchild` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
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

CREATE TABLE `division` (
  `iddivision` int(11) NOT NULL,
  `division_name` varchar(45) NOT NULL,
  `iddistrict` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`iddivision`, `division_name`, `iddistrict`) VALUES
(11, 'Kamukuzi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `iddriver` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `telephone` int(11) NOT NULL,
  `permit_number` varchar(45) NOT NULL,
  `vehicle_number` varchar(15) NOT NULL,
  `driver_status` int(11) NOT NULL DEFAULT '0',
  `idschool` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`iddriver`, `fname`, `lname`, `telephone`, `permit_number`, `vehicle_number`, `driver_status`, `idschool`) VALUES
(2, 'Gift', 'Emmanuel', 785627819, 'UH435536738', 'UAZ287091', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `idparent` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `idresidence` int(11) NOT NULL,
  `parent_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`idparent`, `fname`, `lname`, `telephone`, `email`, `idresidence`, `parent_status`) VALUES
(1, 'Gift', 'Emmanuel', 784156404, 'alua@gmail.com', 13, 1),
(2, 'Mambo', 'Davis', 701345261, 'mambo@gmail.com', 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `residence`
--

CREATE TABLE `residence` (
  `idresidence` int(11) NOT NULL,
  `iddistrict` int(11) NOT NULL,
  `iddivision` int(45) DEFAULT NULL,
  `cell` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residence`
--

INSERT INTO `residence` (`idresidence`, `iddistrict`, `iddivision`, `cell`) VALUES
(13, 1, 11, 'Kashanyarazi');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `idschedule` int(11) NOT NULL,
  `schedule_type` int(11) NOT NULL,
  `schedule_date` date NOT NULL,
  `idchild` int(11) NOT NULL,
  `idschool` int(11) NOT NULL,
  `schedule_status` varchar(50) NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `idschool` int(11) NOT NULL,
  `school_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`idschool`, `school_name`) VALUES
(11, 'Kabateraine Kindergarten'),
(12, 'St. Francis Nursery and Primary School');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `idschool` int(11) NOT NULL,
  `user_status` int(11) DEFAULT '0',
  `username` varchar(45) NOT NULL,
  `usertype` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `fname`, `lname`, `telephone`, `email`, `idschool`, `user_status`, `username`, `usertype`, `password`) VALUES
(2, 'Ezati', 'Joseph', '075623120', 'jose@gmail.com', 11, 1, 'Jose', '1', '662eaa47199461d01a623884080934ab');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`idchild`),
  ADD KEY `idschool` (`idschool`);

--
-- Indexes for table `daily_travel`
--
ALTER TABLE `daily_travel`
  ADD PRIMARY KEY (`idtravel`),
  ADD KEY `iddriver` (`iddriver`),
  ADD KEY `idchild` (`idchild`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`iddivision`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`iddriver`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`idparent`),
  ADD KEY `idresidence` (`idresidence`);

--
-- Indexes for table `residence`
--
ALTER TABLE `residence`
  ADD PRIMARY KEY (`idresidence`),
  ADD KEY `iddivision` (`iddivision`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`idschedule`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`idschool`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `idchild` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `daily_travel`
--
ALTER TABLE `daily_travel`
  MODIFY `idtravel` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `iddivision` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `iddriver` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `idparent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `residence`
--
ALTER TABLE `residence`
  MODIFY `idresidence` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `idschedule` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `idschool` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
