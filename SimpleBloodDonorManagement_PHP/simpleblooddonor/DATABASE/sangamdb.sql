-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 12:57 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sangamdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blooddonor`
--

CREATE TABLE IF NOT EXISTS `blooddonor` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `weight` int(5) NOT NULL,
  `contact` int(10) NOT NULL,
  `bloodtype` varchar(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blooddonor`
--

INSERT INTO `blooddonor` (`id`, `name`, `gender`, `dob`, `weight`, `contact`, `bloodtype`) VALUES
(1, 'bibek g', 'm', '1999-05-02', 98, 2147483647, 'b+'),
(4, 'asd', 'm', '2222-02-02', 22, 2147483647, 'b+');

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE IF NOT EXISTS `campaign` (
`id` int(11) NOT NULL,
  `campaignname` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `campaignname`, `organizer`, `date`, `location`, `description`) VALUES
(1, 'demo', 'demo', '2222-08-02', 'demo', 'demo demo demo'),
(2, 'Donate Camp', 'Red Sky Org', '2018-02-02', 'central park', 'this is a demo text. this is a demo text. this is a demo text. this is a demo text. this is a demo t'),
(8, 'lhh', 'asddsd', '5550-05-05', 'sad', 'asdasda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blooddonor`
--
ALTER TABLE `blooddonor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blooddonor`
--
ALTER TABLE `blooddonor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
