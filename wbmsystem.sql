-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 06:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wbmsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `logid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `idcard` text NOT NULL,
  `contactnumber` text NOT NULL,
  `address` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`logid`, `fname`, `mname`, `lname`, `email`, `password`, `idcard`, `contactnumber`, `address`, `position`, `status`) VALUES
(1000003, 'Jose', 'Cruz', 'Santos', 'admin@wbmsystem.com', 'password', 'images/admin@wbmsystem.com/id1.png', '09123456789', '123 Sampaloc St. Concepcion Tarlac', 'Admin', 1),
(1000004, 'Virginia Marie', 'S', 'Alanas', 'staff@wbmsystem.com', 'password', 'images/staff@wbmsystem.com/id2.jpg', '09321654987', '214 Howmart Road, Brgy. Baesa, Quezon City, Metro Manila', 'Staff', 1);

-- --------------------------------------------------------

--
-- Table structure for table `officials`
--

CREATE TABLE `officials` (
  `officialid` int(11) NOT NULL,
  `position` text NOT NULL,
  `lastname` text NOT NULL,
  `middlename` text NOT NULL,
  `firstname` text NOT NULL,
  `gender` text NOT NULL,
  `birthdate` text NOT NULL,
  `civilstatus` text NOT NULL,
  `address` text NOT NULL,
  `idcard` text NOT NULL,
  `contact` text NOT NULL,
  `termyears` text NOT NULL,
  `yearstarted` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officials`
--

INSERT INTO `officials` (`officialid`, `position`, `lastname`, `middlename`, `firstname`, `gender`, `birthdate`, `civilstatus`, `address`, `idcard`, `contact`, `termyears`, `yearstarted`, `status`) VALUES
(1000000, 'Chairman', 'Smith', 'Fret', 'John', 'Male', '1998-12-01', 'Single', '123 Zone 1 Sorsogon', '../images/Smith Fret John/id123.png', '09321528419', '4', '2020', 0);

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `residentid` int(11) NOT NULL,
  `lastname` text NOT NULL,
  `middlename` text NOT NULL,
  `firstname` text NOT NULL,
  `gender` text NOT NULL,
  `birthdate` text NOT NULL,
  `civilstatus` text NOT NULL,
  `address` text NOT NULL,
  `idcard` text NOT NULL,
  `contact` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`residentid`, `lastname`, `middlename`, `firstname`, `gender`, `birthdate`, `civilstatus`, `address`, `idcard`, `contact`, `status`) VALUES
(202200003, 'Santos', 'Cruz', 'Jose', 'Male', '1998-03-25', 'Single', '123 Zone 1 Bulan Sorsogon', '../images/Santos Cruz Jose/id123.png', '09321456987', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `officials`
--
ALTER TABLE `officials`
  ADD PRIMARY KEY (`officialid`);

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`residentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `logid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000012;

--
-- AUTO_INCREMENT for table `officials`
--
ALTER TABLE `officials`
  MODIFY `officialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000001;

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `residentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202200008;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
