-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2022 at 06:14 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(30) NOT NULL,
  `schedule_id` int(30) NOT NULL,
  `ref_no` text NOT NULL,
  `name` varchar(250) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT 0 COMMENT '1=Paid, 0- Unpaid',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `schedule_id`, `ref_no`, `name`, `qty`, `status`, `date_updated`) VALUES
(2, 1, '202009091626', 'Sample', 2, 0, '2020-09-09 09:34:28'),
(4, 2, '202202247025', 'Kavindu Lakshitha', 5, 0, '2022-02-24 10:14:06');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `bus_number` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0 = inactive, 1 = active',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `name`, `bus_number`, `status`, `date_updated`) VALUES
(1, 'ගාල්ල - යාපනය ', 'ND - 9619', 1, '2022-02-24 09:34:48'),
(2, 'ලග්ගල - මහරගම අපේක්ෂා රෝහල ', 'ND – 6652', 1, '2022-02-24 09:34:48'),
(3, 'තන්තතිරිමලය - මහරගම', 'NC – 7712', 1, '2022-02-24 09:36:59'),
(4, 'පොළොන්නරුව - මහරගම අපේක්ෂා රෝහල ', 'NC – 1688', 1, '2022-02-24 09:37:53'),
(5, 'මාතර - මුතූර්', 'ND – 9522', 1, '2022-02-24 09:38:32'),
(6, 'ගාල්ල - යාපනය', 'NC – 0772', 1, '2022-02-24 09:38:32'),
(7, 'මාතර - මන්තනාරම', 'NB – 9937', 1, '2022-02-24 09:39:15'),
(8, 'නුවරඑළිය - මහරගම අපේක්ෂා රෝහල ', 'ND – 9976', 1, '2022-02-24 09:39:15'),
(9, 'ගාල්ල - යාපනය', 'NB – 8413', 1, '2022-02-24 09:39:58'),
(10, 'යාපනය - මහරගම - ගාල්ල', 'ND – 9943', 1, '2022-02-24 09:39:58'),
(11, 'මන්තනාරම - මහරගම - මාතර', 'ND – 9732', 1, '2022-02-24 09:40:35'),
(12, 'ගාල්ල - මහරගම - යාපනය - කන්තකසන්තුපර් ', 'NB – 8391', 1, '2022-02-24 09:40:35'),
(13, 'අනුරාධපුර - මහරගම ', 'NC – 1225', 1, '2022-02-24 09:41:14'),
(14, 'කාත්තන්තකුඩි - මහරගම - අළුත්ගම', 'ND – 9894', 1, '2022-02-24 09:41:14'),
(15, 'මඩකලපුව - මහරගම - පෙහිවල ', 'NC – 0277', 1, '2022-02-24 09:52:50'),
(16, 'හලාවත - මහරගම ', 'NA – 4073', 1, '2022-02-24 09:53:23'),
(17, 'මුලතිව් සම්පත් නුවර - මහරගම', 'NC-1635', 1, '2022-02-24 09:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(30) NOT NULL,
  `terminal_name` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0= inactive , 1= active',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `terminal_name`, `city`, `state`, `status`, `date_updated`) VALUES
(1, 'කුලියාපිටිය', 'කුරුණෑගල දිස්ත්‍රික්කය', 'වයඹ පළාත', 1, '2022-02-24 10:13:13'),
(2, 'නාවින්න', 'මහරගම', 'කොළඹ', 1, '2022-02-24 10:12:10'),
(3, 'නාවින්න', 'මහරගම', 'කොළඹ', 1, '2022-02-24 00:09:12'),
(4, 'මහනුවර', 'නුවර', 'මධ්යම පළාත', 1, '2022-02-24 00:08:41'),
(5, 'ඇඹිලිපිටිය', 'රත්නපුරය', 'සබරගමුව පළාත', 1, '2022-02-24 00:18:41'),
(6, 'නුවරඑළිය', 'මධ්යම පළාත', '', 1, '2022-02-24 08:50:11'),
(7, 'කුරුණෑගල', 'වයඹ පළාත', '', 1, '2022-02-24 08:51:28'),
(8, 'කුලියාපිටිය', 'කුරුණෑගල දිස්ත්‍රික්කය', 'වයඹ පළාත', 1, '2022-02-24 08:52:37'),
(9, 'නිකවැරටිය', 'වයඹ පළාත', '', 1, '2022-02-24 08:53:19'),
(10, 'අනුරාධපුර', 'උතුරු මැද පළාත', '', 1, '2022-02-24 08:54:21'),
(11, 'මුලතිව්', 'උතුරු පළාත', '', 1, '2022-02-24 08:55:29'),
(12, 'ගල්ගමුව', 'වයඹ පළාත', '', 1, '2022-02-24 08:56:13');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_list`
--

CREATE TABLE `schedule_list` (
  `id` int(30) NOT NULL,
  `bus_id` int(30) NOT NULL,
  `from_location` int(30) NOT NULL,
  `to_location` int(30) NOT NULL,
  `departure_time` datetime NOT NULL,
  `eta` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `availability` int(11) NOT NULL,
  `price` text NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule_list`
--

INSERT INTO `schedule_list` (`id`, `bus_id`, `from_location`, `to_location`, `departure_time`, `eta`, `status`, `availability`, `price`, `date_updated`) VALUES
(1, 3, 1, 1, '2022-02-24 16:00:00', '2020-02-24 02:00:00', 1, 30, '250', '2022-02-24 03:53:20'),
(2, 3, 2, 1, '2022-02-24 02:45:00', '2020-02-24 05:00:00', 1, 30, '250', '2022-02-24 03:53:36'),
(3, 6652, 4, 3, '2022-02-24 06:50:00', '2022-02-24 12:40:00', 1, 30, '280', '2022-02-24 04:33:51'),
(4, 6652, 3, 4, '2022-02-24 12:40:00', '2022-02-24 16:00:00', 1, 36, '280', '2022-02-24 04:33:59'),
(5, 567, 5, 3, '2022-02-24 07:00:00', '2022-02-24 12:40:00', 1, 40, '380', '2022-02-24 04:33:36'),
(6, 983, 6, 3, '2022-02-24 03:20:00', '2022-02-24 01:00:00', 1, 39, '420', '2022-02-24 04:34:09'),
(7, 893, 7, 3, '2022-02-24 05:40:00', '2022-02-24 01:15:00', 1, 40, '270', '2022-02-24 04:34:16'),
(8, 388, 8, 3, '2022-02-24 04:30:00', '2022-02-24 01:30:00', 1, 38, '380', '2022-02-24 04:34:23'),
(9, 348, 9, 3, '2022-02-24 04:30:30', '2022-02-24 01:15:00', 1, 43, '190', '2022-02-24 04:34:30'),
(10, 1254, 10, 3, '2022-02-24 04:30:00', '2022-02-24 01:30:00', 1, 42, '550', '2022-02-24 04:39:54'),
(11, 897, 11, 3, '2022-02-24 06:00:00', '2022-02-24 01:45:00', 1, 38, '645', '2022-02-24 03:57:51'),
(12, 389, 12, 3, '2022-02-24 06:30:00', '2022-02-24 13:45:00', 1, 32, '320', '2022-02-24 03:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(150) NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = admin, 2= faculty , 3 = student',
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT ' 0 = incative , 1 = active',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `username`, `password`, `status`, `date_updated`) VALUES
(1, 'Kavindu', 1, 'kavindulakshitha84', 'admin123', 1, '2022-02-24 10:15:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_list`
--
ALTER TABLE `schedule_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schedule_list`
--
ALTER TABLE `schedule_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
