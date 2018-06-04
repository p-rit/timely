-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 09:36 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `fac_load`
--

CREATE TABLE `fac_load` (
  `fac_id` int(5) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `L_count` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fac_load`
--

INSERT INTO `fac_load` (`fac_id`, `faculty_name`, `L_count`) VALUES
(38, 'sdgfhfghfjhg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `semester_sub`
--

CREATE TABLE `semester_sub` (
  `subject_id` int(5) NOT NULL,
  `subject_name` varchar(25) NOT NULL,
  `semester` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_sub`
--

INSERT INTO `semester_sub` (`subject_id`, `subject_name`, `semester`) VALUES
(101, 'sub1_1', 1),
(102, 'sub2_1', 1),
(103, 'sub3_1', 1),
(104, 'sub4_1', 1),
(105, 'sub5_1', 1),
(201, 'sub1_2', 2),
(202, 'sub2_2', 2),
(301, 'sub1_3', 3),
(302, 'sub2_3', 3),
(401, 'sub1_4', 4),
(402, 'sub2_4', 4),
(501, 'sub1_5', 5),
(502, 'sub2_5', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sem_table_1`
--

CREATE TABLE `sem_table_1` (
  `fac_id` int(5) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `subject_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem_table_2`
--

CREATE TABLE `sem_table_2` (
  `fac_id` int(5) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `subject_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sem_table_3`
--

CREATE TABLE `sem_table_3` (
  `fac_id` int(5) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `subject_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temp_table`
--

CREATE TABLE `temp_table` (
  `fac_id` int(5) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `subject_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fac_load`
--
ALTER TABLE `fac_load`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `semester_sub`
--
ALTER TABLE `semester_sub`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `sem_table_1`
--
ALTER TABLE `sem_table_1`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `sem_table_2`
--
ALTER TABLE `sem_table_2`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `sem_table_3`
--
ALTER TABLE `sem_table_3`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `temp_table`
--
ALTER TABLE `temp_table`
  ADD PRIMARY KEY (`fac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fac_load`
--
ALTER TABLE `fac_load`
  MODIFY `fac_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `semester_sub`
--
ALTER TABLE `semester_sub`
  MODIFY `subject_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
