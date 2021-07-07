-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2020 at 09:38 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactnumber` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`, `email`, `contactnumber`) VALUES
(1, 'admin', 'admin', 'Dhruv Gandhi', 'admin@gmail.com', 7220817628);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` bigint(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contactnumber` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `name`, `contactnumber`, `email`, `address`, `city`, `pincode`, `state`, `country`) VALUES
(2, 'JODHPUR 1', 1111111111, 'JODHPUR1@GMAIL.COM', '123, SASTRI NAGAR', 'JODHPUR', 342802, 'RAJASTHAN', 'India'),
(3, 'JODHPUR 2', 2222222222, 'JODHPUR2@GMAIL.COM', '125, MAHAVEER NAGAR', 'JODHPUR', 342805, 'RAJASTHAN', 'India'),
(4, 'JAIPUR 1', 3333333333, 'JAIPUR1@GMAIL.COM', '125, MAHAVEER NAGAR', 'JAIPUR', 342807, 'RAJASTHAN', 'India'),
(5, 'JAIPUR 2', 4444444444, 'JAIPUR2@GMAIL.COM', '125, SASTRI NAGAR', 'JAIPUR', 342809, 'RAJASTHAN', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courier_id` bigint(10) NOT NULL,
  `courier_number` bigint(10) NOT NULL,
  `senderbranch` varchar(30) NOT NULL,
  `sendername` varchar(30) NOT NULL,
  `sendercontact` bigint(10) NOT NULL,
  `senderaddress` varchar(30) NOT NULL,
  `sendercity` varchar(20) NOT NULL,
  `senderpincode` int(6) NOT NULL,
  `senderstate` varchar(20) NOT NULL,
  `sendercountry` varchar(20) NOT NULL,
  `recipientbranch` varchar(30) NOT NULL,
  `recipientname` varchar(30) NOT NULL,
  `recipientcontact` bigint(10) NOT NULL,
  `recipientaddress` varchar(30) NOT NULL,
  `recipientcity` varchar(20) NOT NULL,
  `recipientpincode` int(6) NOT NULL,
  `recipientstate` varchar(20) NOT NULL,
  `recipientcountry` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courier`
--

INSERT INTO `courier` (`courier_id`, `courier_number`, `senderbranch`, `sendername`, `sendercontact`, `senderaddress`, `sendercity`, `senderpincode`, `senderstate`, `sendercountry`, `recipientbranch`, `recipientname`, `recipientcontact`, `recipientaddress`, `recipientcity`, `recipientpincode`, `recipientstate`, `recipientcountry`) VALUES
(4, 111111, 'JODHPUR 1', 'Dhruv Gandhi', 7220817628, '125, Sastrinagar', 'JODHPUR', 342802, 'RAJASTHAN', 'India', 'JODHPUR 2', 'Dhruv Gandhi', 7220817628, '123, SASTRI NAGAR', 'JODHPUR', 342802, 'RAJASTHAN', 'India'),
(5, 111112, 'JAIPUR 1', 'Dhruv Gandhi', 7220817628, '125, Sastrinagar', 'JODHPUR', 342802, 'RAJASTHAN', 'India', 'JAIPUR 2', 'Dhruv Gandhi', 7220817628, '123, SASTRI NAGAR', 'JODHPUR', 342802, 'RAJASTHAN', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contactnumber` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `username`, `name`, `contactnumber`, `email`, `branch`, `password`) VALUES
(1, 'employee', 'Dhruv Gandhi', 7220817628, '201951187@iiitvadodara.ac.in', 'JODHPUR 1', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` bigint(6) NOT NULL,
  `courier_number` bigint(9) NOT NULL,
  `mode` varchar(30) NOT NULL,
  `delivery_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `courier_number`, `mode`, `delivery_date`) VALUES
(1, 111111, 'Courier Delivered', '05/30/2020'),
(7, 111112, 'Courier Arrived at Destination', '05/23/2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courier_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `courier`
--
ALTER TABLE `courier`
  MODIFY `courier_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` bigint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
