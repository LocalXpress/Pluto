-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2016 at 09:07 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocated_leave`
--

CREATE TABLE `allocated_leave` (
  `emp_id` int(11) NOT NULL,
  `cl` int(11) NOT NULL DEFAULT '14',
  `el` int(11) NOT NULL DEFAULT '30',
  `sl` int(11) NOT NULL DEFAULT '15',
  `ml` int(11) NOT NULL DEFAULT '180',
  `ccl` int(11) NOT NULL DEFAULT '730'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allocated_leave`
--

INSERT INTO `allocated_leave` (`emp_id`, `cl`, `el`, `sl`, `ml`, `ccl`) VALUES
(8, 14, 30, 15, 180, 730),
(9, 14, 30, 15, 180, 730),
(10, 14, 30, 15, 180, 730);

-- --------------------------------------------------------

--
-- Table structure for table `emp_table`
--

CREATE TABLE `emp_table` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_table`
--

INSERT INTO `emp_table` (`emp_id`, `name`, `email`, `dept`, `type`, `password`) VALUES
(8, 'Swaroop Acharjee', 'meet.ripon@gmail.com', 'IT', 'staff', '123'),
(9, 'Kaushik Dey', 'kaushikdey@gmail.com', 'IT', 'hod', '123'),
(10, 'Debanjana Ghosh', 'debanjanaghosh94@gmail.com', 'IT', 'principal', '123');

-- --------------------------------------------------------

--
-- Table structure for table `leave_log`
--

CREATE TABLE `leave_log` (
  `leave_id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `ltype` varchar(10) NOT NULL,
  `date_now` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `days` int(11) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocated_leave`
--
ALTER TABLE `allocated_leave`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `emp_table`
--
ALTER TABLE `emp_table`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `leave_log`
--
ALTER TABLE `leave_log`
  ADD PRIMARY KEY (`leave_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_table`
--
ALTER TABLE `emp_table`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `leave_log`
--
ALTER TABLE `leave_log`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
