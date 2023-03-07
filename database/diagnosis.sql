-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 04:55 PM
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
-- Database: `diagnosis`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `gettest` (IN `id` INT)   select * from test WHERE t_id=id$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('bhuvan', '123456'),
('gireesh', '123456'),
('manoja', 'manoj123'),
('manu', 'manu123');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `name`, `phonenumber`, `cname`, `tname`, `date`, `time`) VALUES
(16, 'manu', 7795278491, 'peoples care', 'dfsfs', '2023-03-05', '11:23:00.000'),
(17, 'manu', 7795278491, 'peoples care', 'dfsfs', '2023-03-05', '11:23:00.000'),
(18, 'manu', 7795278491, 'peoples care', 'dfsfs', '2023-03-05', '11:23:00.000'),
(23, 'guna', 9898781897, 'childs care', 'dfsfs', '2023-03-01', '22:38:00.000'),
(26, 'guna', 7795278491, 'lk jhgfd', 'dfsfs', '2023-03-09', '18:29:00.000');

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `id` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`id`, `cname`, `address`, `phonenumber`, `password`) VALUES
(17, 'manus', 'tmk', 4789798786, '987654');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `phone`, `msg`) VALUES
('hgfd', 'kjhg@lkj.lgfd', '6641878989', 'kjhgfdsdfhj');

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `action` varchar(20) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `t_id`, `action`, `cdate`) VALUES
(1, 6, 'Inserted', '2022-02-03 21:33:10'),
(2, 5, 'Updated', '2022-02-03 21:40:11'),
(3, 3, 'Deleted', '2022-02-03 21:45:27'),
(4, 2, 'Deleted', '2022-12-29 23:06:06'),
(5, 12121, 'Inserted', '2023-03-04 13:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `email`, `feedback`) VALUES
('roy', 'roy@gmail.com', 'good going');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `username` varchar(230) NOT NULL,
  `FileName` varchar(400) NOT NULL,
  `Location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `t_id` int(10) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `sample` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`t_id`, `tname`, `sample`, `duration`, `amount`) VALUES
(1, 'complete blood count', 'blood', '30', 250),
(4, 'Triglycerides', 'blood', '1', 1500),
(5, 'Blood Pressure', 'NA', '20', 300),
(6, 'cholestrol', 'blood', '30min', 700),
(12121, 'manads', 'sdasd', 'sadad', 0);

--
-- Triggers `test`
--
DELIMITER $$
CREATE TRIGGER `INSERTEXAMPLE` AFTER INSERT ON `test` FOR EACH ROW INSERT INTO example values(null, NEW.t_id, 'Inserted', NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `deleteexample` BEFORE DELETE ON `test` FOR EACH ROW INSERT INTO example VALUES(null, OLD.t_id, "Deleted", NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateexample` AFTER UPDATE ON `test` FOR EACH ROW INSERT INTO example VALUES(null, NEW.t_id, 'Updated', NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `c_id` varchar(40) NOT NULL,
  `t_name` varchar(250) NOT NULL,
  `t_desc` varchar(300) NOT NULL,
  `amount` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`c_id`, `t_name`, `t_desc`, `amount`) VALUES
('m_17', 'dfsfs', 'sdfsdf', 'sdsf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `age`, `phonenumber`, `password`) VALUES
(0, 'guna', 'gun-a@g.com', 19, 9876543214, 'guna123'),
(0, 'manu', 'manu@m.com', 20, 7795278491, 'manu123'),
(0, 'tp', 'likix89935@rolenot.com', 23, 2684771478, 'tp123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
