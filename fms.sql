-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 31, 2020 at 04:27 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `dance`
--

CREATE TABLE `dance` (
  `full_name` varchar(50) NOT NULL,
  `roll_no` varchar(7) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `video_upload` varchar(100) NOT NULL,
  `strengths` varchar(30) NOT NULL,
  `selected` varchar(3) DEFAULT NULL,
  `rate` int(1) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` varchar(255) NOT NULL,
  `time_1` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `day`, `name`, `description`, `time_1`, `image`) VALUES
(1, 'day1', 'kenny sebastian', 'Comedian', '9am-12pm', 'image_uploads/kenny-sebastian.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hosting`
--

CREATE TABLE `hosting` (
  `full_name` varchar(50) NOT NULL,
  `roll_no` varchar(7) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `day_1` varchar(3) NOT NULL DEFAULT 'no',
  `day_2` varchar(3) NOT NULL DEFAULT 'no',
  `day_3` varchar(3) NOT NULL DEFAULT 'no',
  `event_associated_1` varchar(20) DEFAULT NULL,
  `event_associated_2` varchar(20) DEFAULT NULL,
  `event_associated_3` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `full_name` varchar(50) NOT NULL,
  `roll_no` varchar(7) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `video_upload` varchar(100) NOT NULL,
  `strengths` varchar(30) NOT NULL,
  `selected` varchar(3) DEFAULT NULL,
  `rate` int(1) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `full_name` varchar(50) NOT NULL,
  `roll_no` varchar(7) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mob_no` varchar(10) NOT NULL,
  `day_1` varchar(3) NOT NULL,
  `day_2` varchar(3) NOT NULL,
  `day_3` varchar(3) NOT NULL,
  `event_associated_1` varchar(20) DEFAULT NULL,
  `event_associated_2` varchar(20) DEFAULT NULL,
  `event_associated_3` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_head`
--

CREATE TABLE `student_head` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `audition_date` varchar(8) DEFAULT NULL,
  `branch` varchar(20) NOT NULL,
  `event` varchar(20) NOT NULL,
  `rate_q` int(1) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password_e` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_head`
--

INSERT INTO `student_head` (`username`, `password`, `audition_date`, `branch`, `event`, `rate_q`, `email`, `password_e`) VALUES
('dancecomp', '1234', '', 'Computers', 'dance', 7, 'csneh4@gmail.com', 'mygoal$$200'),
('danceElec', '1234', NULL, 'Electronics', 'dance', NULL, '', ''),
('danceEXTC', '1234', NULL, 'EXTC', 'dance', NULL, '', ''),
('danceIT', '1234', NULL, 'IT', 'dance', NULL, '', ''),
('danceMech', '1234', NULL, 'Mechanical', 'dance', NULL, '', ''),
('hostingcomp', '1234', NULL, 'Computers', 'hosting', 0, 'csneh4@gmail.com', 'mygoal$$200'),
('securitycomp', '1234', NULL, 'Computers', 'security', NULL, 'csneh4@gmail.com', 'mygoal$$200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dance`
--
ALTER TABLE `dance`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hosting`
--
ALTER TABLE `hosting`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`roll_no`);

--
-- Indexes for table `student_head`
--
ALTER TABLE `student_head`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
