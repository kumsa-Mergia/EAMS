-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 08:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `woliso_eams`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_record`
--

CREATE TABLE `attendance_record` (
  `id` int(11) NOT NULL,
  `employeename` varchar(200) NOT NULL,
  `department` varchar(200) NOT NULL,
  `shift` varchar(200) NOT NULL,
  `attendance_status` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_record`
--

INSERT INTO `attendance_record` (`id`, `employeename`, `department`, `shift`, `attendance_status`, `date`, `time`) VALUES
(1, 'lema Bolo', 'Computer Science', 'After Noon', 'Present', '2023-05-09', '18:28:42'),
(2, 'Mikiyas Mergia', 'Health', 'Morning', 'Late', '2023-05-09', '18:28:42'),
(3, 'Lamrot Mergia', 'Sales', 'After Noon', 'Absent', '2023-05-09', '18:28:42'),
(7, 'Mikiyas Mergia', 'Health', 'Morning', 'Present', '2023-05-09', '20:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `departmentname` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `departmentname`) VALUES
(1, 'Sales DE'),
(6, 'Computer Science'),
(8, 'Health');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `employeename` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `email` varchar(25) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `shift` varchar(15) NOT NULL,
  `Role` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `employeename`, `password`, `department`, `email`, `gender`, `shift`, `Role`) VALUES
(10, 'lema Bolo', '456', 'Computer Science', 'lema@gmail.com', 'Male', 'After Noon', 'employee'),
(11, 'Mikiyas Mergia', '123', 'Health', 'miki@gmail.com', 'Male', 'Morning', 'employee'),
(13, 'Lamrot Mergia', '456', 'Sales', 'lamri@gmail.com', 'Female', 'After Noon', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `permision`
--

CREATE TABLE `permision` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(200) NOT NULL,
  `permision_type` varchar(200) NOT NULL,
  `permision_from` varchar(200) NOT NULL,
  `permision_to` varchar(200) NOT NULL,
  `permision_description` varchar(500) NOT NULL,
  `permision_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permision`
--

INSERT INTO `permision` (`id`, `employee_name`, `permision_type`, `permision_from`, `permision_to`, `permision_description`, `permision_status`) VALUES
(6, 'Mikiyas Mergia', 'Anual', '2023-04-02', '2023-04-04', 'oh! my god', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `permisiontype`
--

CREATE TABLE `permisiontype` (
  `id` int(11) NOT NULL,
  `permisiontype` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permisiontype`
--

INSERT INTO `permisiontype` (`id`, `permisiontype`) VALUES
(1, 'Anual'),
(8, 'Casual');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `email`, `Password`, `Role`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin123', 'admin'),
(3, 'Human Resource', 'human@gmail.com', 'human123', 'hrm'),
(4, 'supervisor', 'supervisor@gmail.com', 'supervisor123', 'supervisor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_record`
--
ALTER TABLE `attendance_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permision`
--
ALTER TABLE `permision`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permisiontype`
--
ALTER TABLE `permisiontype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_record`
--
ALTER TABLE `attendance_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permision`
--
ALTER TABLE `permision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permisiontype`
--
ALTER TABLE `permisiontype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
