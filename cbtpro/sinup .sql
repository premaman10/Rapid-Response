-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 06:38 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sinup`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `serialNo` int(5) NOT NULL,
  `userID` bigint(20) DEFAULT NULL,
  `pickupoint` text DEFAULT NULL,
  `endpoint` text DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `cartype` varchar(64) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`serialNo`, `userID`, `pickupoint`, `endpoint`, `distance`, `price`, `cartype`, `date`) VALUES
(14, 1234567891, 'Ranchi, Jharkhand', 'Punjab Cricket Association Stadium, Phase 1, Sector 63, SAS Nagar, Sukhna Path, Sahibzada Ajit Singh Nagar, Mohali, Punjab, 160062', 1474, 17690, 'suv', '2022-10-29 23:42:31'),
(18, 1234567891, 'Mumbai, Maharashtra', 'Pune, Maharashtra', 164, 822, 'hatchback', '2022-11-09 00:29:05'),
(20, 1234567891, 'Chhatrapati Shivaji International Airport, Sahar Road, Sahar, Mumbai Suburban District, Mumbai, Maharashtra, 400099', 'Punjab, Punjab', 1571, 18852, 'suv', '2022-11-09 00:31:34'),
(21, 1234567891, 'Chhatrapati Shivaji International Airport, Sahar Road, Sahar, Mumbai Suburban District, Mumbai, Maharashtra, 400099', 'Phagwara, Punjab', 1670, 8349, 'hatchback', '2022-11-09 00:33:21'),
(22, 1234567891, 'Shivneri Fort, Junnar, Pune District, Maharashtra, 410502', 'Dr Babasaheb Ambedkar International Airport, Wardha Road, Sonegaon, MIHAN, Maharashtra, 440005', 697, 6271, 'sedan', '2022-11-09 22:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `serialNo` int(11) NOT NULL,
  `userID` bigint(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`serialNo`, `userID`, `password`) VALUES
(11, 9463469388, '756a6a77616c'),
(12, 1234567891, '313233343536'),
(13, 9911317318, '636f6e646f6d'),
(14, 9501813688, '756a6a77616c'),
(23, 1231231231, '75'),
(24, 7418529631, '556a6a77616c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`serialNo`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`serialNo`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  MODIFY `serialNo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `serialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
