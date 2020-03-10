-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 10, 2020 at 08:55 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voluntaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `organization_name` varchar(50) NOT NULL,
  `organization_type` varchar(30) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `organization_id` int(10) NOT NULL AUTO_INCREMENT,
  `phone` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `image` blob,
  PRIMARY KEY (`organization_id`),
  UNIQUE KEY `organization_name` (`organization_name`),
  UNIQUE KEY `phone` (`phone`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=1871124 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`organization_name`, `organization_type`, `admin_name`, `gender`, `username`, `pass`, `organization_id`, `phone`, `email`, `image`) VALUES
('DopeCoder', 'School', 'Ashutosh', 'f', 'dskvkn', 'abc', 1, 9883623156, 'royashutsoh104@gmail.com', NULL),
('HEHE', 'School', 'Ashutosh', 'f', 'hee', 'biruashu13', 2, 7044269401, 'royashutsoh109@gmail.com', NULL),
('abc', 'NGO', 'prerana', 'f', 'abcngo', '123', 3, 9600661910, 'abc@gmail.com', NULL),
('DBP', 'University', 'Hehe', 'm', 'shashank69', '12345', 4, 9883623145, 'royashutosh104@gmail.com', NULL),
('HeadOut', 'School', 'Prerna', 'f', 'christ@123', '12345', 1871108, 123456789, 'amitnair21@gmail.com', NULL),
('JDS', 'School', 'Ashutosh', 'm', 'jds', 'jds', 1871109, 123456700, 'jds@gmail.com', 0x61646d696e2070696374757265732f313538333639313235385f),
('ABCD', 'School', 'Ashutosh', 'm', 'hehe', 'hehe', 1871110, 123456701, 'jds1@gmail.com', 0x61646d696e2070696374757265732f313538333639313334395f),
('DBMS', 'School', 'Beaulah', 'm', 'bs', 'bs', 1871111, 1212121212, 'bs@gmail.com', 0x61646d696e2070696374757265732f313538333639333539305f),
('ABCDE', 'School', 'Beaulah', 'f', 'bs', '', 1871112, 1212121213, 'bs1@gmail.com', 0x61646d696e2070696374757265732f313538333639343030395f),
('Micorsoft', 'School', 'Samkit', 'm', 'ms', 'ms', 1871113, 0, 'ms@gmail.com', 0x61646d696e2070696374757265732f313538333639353335335f),
('S', 'School', 'S', 'm', 's', 's', 1871114, 9999999999, 's@gmail.com', 0x61646d696e2070696374757265732f313538333639353535305f),
('J', 'School', 'J', 'm', 'j', 'j', 1871115, 9999899999, 'j@gmail.com', 0x61646d696e2070696374757265732f313538333639353737375f),
('H', 'School', 'h', 'm', 'h', 'h', 1871116, 9999809999, 'h@gmail.com', 0x61646d696e2070696374757265732f313538333639353933375f),
('K', 'School', 'K', 'm', 'K', 'k', 1871117, 9999800999, 'k@gmail.com', 0x61646d696e2070696374757265732f),
('kk', 'School', 'Kk', 'm', 'l', 'l', 1871118, 9999801999, 'kk@gmail.com', 0x61646d696e2070696374757265732f),
('l', 'School', 'j', 'm', 'an', '123', 1871119, 1000000000, 'jd111@gmail.com', 0x61646d696e2070696374757265732f313538333639363830385f),
('hehehh', 'School', 'l', 'm', 'kkk', 'kkk', 1871120, 1000000090, 'def@gmail.com', 0x61646d696e2070696374757265732f313538333639373433375f),
('jjjjj', 'School', 'KKK', 'm', 'MF', 'M', 1871121, 6290766590, 'm@gmail.com', 0x61646d696e706963732f5f),
('F', 'School', 'F', 'm', 'joker', 'joker', 1871122, 12121214, 'joker@gmail.com', 0x61646d696e706963732f313538333639383430355f),
('Shady', 'School', 'SLim', 'm', 'slim', '1234', 1871123, 121212199, 'slim@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `committe`
--

DROP TABLE IF EXISTS `committe`;
CREATE TABLE IF NOT EXISTS `committe` (
  `com_id` int(10) NOT NULL,
  `event_id` int(10) DEFAULT NULL,
  `no_of_vol` int(10) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  KEY `event_id` (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `committe`
--

INSERT INTO `committe` (`com_id`, `event_id`, `no_of_vol`, `event_name`) VALUES
(10, 100, 2, ''),
(9, 100, 2, ''),
(8, 100, 2, ''),
(7, 100, 2, ''),
(6, 100, 2, ''),
(5, 100, 2, ''),
(4, 100, 2, ''),
(3, 100, 2, ''),
(2, 100, 2, ''),
(1, 100, 2, ''),
(10, 100, 2, ''),
(9, 100, 2, ''),
(8, 100, 2, ''),
(7, 100, 2, ''),
(6, 100, 2, ''),
(5, 100, 2, ''),
(4, 100, 2, ''),
(3, 100, 2, ''),
(2, 100, 2, ''),
(1, 100, 2, ''),
(10, 100, 2, ''),
(9, 100, 2, ''),
(8, 100, 2, ''),
(7, 100, 2, ''),
(6, 100, 2, ''),
(5, 100, 2, ''),
(4, 100, 2, ''),
(3, 100, 2, ''),
(2, 100, 2, ''),
(1, 100, 2, ''),
(10, 100, 2, ''),
(9, 100, 2, ''),
(8, 100, 2, ''),
(7, 100, 2, ''),
(6, 100, 2, ''),
(5, 100, 2, ''),
(4, 100, 2, ''),
(3, 100, 2, ''),
(2, 100, 2, ''),
(1, 100, 2, ''),
(1, 104, 3, ''),
(2, 105, 2, ''),
(1, 105, 2, ''),
(1, 106, 3, ''),
(0, 107, 2, 'vatsla'),
(1, 108, 1, 'Hehee'),
(1, 109, 1, 'keskfkj'),
(1, 110, 1, 'HEheh'),
(1, 111, 1, 'Stand Up Comedy'),
(1, 112, 1, 'Writing '),
(1, 113, 1, 'yj'),
(1, 114, 12, 'Cake MAking');

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

DROP TABLE IF EXISTS `event_info`;
CREATE TABLE IF NOT EXISTS `event_info` (
  `event_name` varchar(50) NOT NULL,
  `event_type` varchar(20) NOT NULL,
  `event_time` time NOT NULL,
  `event_date` date NOT NULL,
  `location` varchar(30) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_phone` bigint(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `event_id` int(10) NOT NULL AUTO_INCREMENT,
  `event_status` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'on',
  `organization_id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`event_id`),
  KEY `organization_id` (`organization_id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`event_name`, `event_type`, `event_time`, `event_date`, `location`, `admin_name`, `admin_email`, `admin_phone`, `address`, `event_id`, `event_status`, `organization_id`, `username`) VALUES
('kdzf', '', '10:00:00', '2020-02-25', 'ldknkldns', 'lksclksnc', 'royashutosh1011@gmail.com', 6290766525, 'klnsflakn', 100, NULL, 0, NULL),
('kdzf', '', '10:00:00', '2020-02-25', 'ldknkldns', 'lksclksnc', 'royashutosh1011@gmail.com', 6290766525, 'klnsflakn', 101, NULL, 0, NULL),
('kdzf', '', '10:00:00', '2020-02-25', 'ldknkldns', 'lksclksnc', 'royashutosh1011@gmail.com', 6290766525, 'klnsflakn', 102, NULL, 0, NULL),
('kdzf', '', '10:00:00', '2020-02-25', 'ldknkldns', 'lksclksnc', 'royashutosh1011@gmail.com', 6290766525, 'klnsflakn', 103, NULL, 0, NULL),
('Laila', 'FundRaiser', '10:00:00', '2020-02-25', 'ksbfk', 'Askjn', 'royashutosh1011@gmail.com', 6290766525, 'lksd', 104, NULL, 0, NULL),
('hhe', 'Food Drive', '10:00:00', '2020-03-11', 'hydrabad', 'vat', 'fg@g.com', 9898989898, 'jifeoiahnc', 105, 'on', 0, NULL),
('hhe', 'Entertainment Progra', '10:00:00', '2020-03-03', 'kdjsjbf', 'v', 'fnvfjdj@gfc.com', 9898989898, 'nwjc', 106, 'on', 0, NULL),
('vatsla', 'Entertainment Progra', '10:00:00', '2020-03-04', 'fsd', 'v', 'fg@g.com', 9898989898, 'jnsd', 107, 'on', 0, NULL),
('Hehee', 'FundRaiser', '12:00:00', '2020-03-05', 'kHehe', 'Jyotika', 'hehe@gmail.com', 9007477633, 'kskn', 108, 'on', 0, 'shashank69'),
('keskfkj', 'Food Drive', '12:00:00', '2020-03-05', 'kas', 'Ashutosh', 'royashutosh1040@gmail.com', 9007477633, 'ewgh', 109, 'on', 0, 'shashank69'),
('HEheh', 'FundRaiser', '12:00:00', '2020-03-05', 'ksdnf', 'skfak', 'ask@gmail.com', 7988836181, 'kasjflk', 110, 'on', 0, 'shashank69'),
('Stand Up Comedy', 'Food Drive', '14:00:00', '2020-03-06', 'Kolkata', 'Vatsla', 'vat69@hotmail.com', 6290766525, 'hehehe', 111, 'on', 0, 'shashank69'),
('Writing ', 'FundRaiser', '14:00:00', '2020-03-08', 'Bangalore', 'Vijaylakshmi', 'vij@gmail.com', 9883623156, 'Bangalore', 112, 'on', 0, 'shashank69'),
('yj', 'Food Drive', '09:00:00', '2020-03-08', 'Lucknow', 'Jyotika', 'none@gmail.com', 9007477633, 'Joker', 113, 'on', 0, 'slim'),
('Cake MAking', 'FundRaiser', '15:00:00', '2020-03-09', 'Bengalruru', 'Ashutosh', 'abc123@gmail.com', 9001217721, 'Kolkata', 114, 'on', 0, 'shashank69');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `event_id` int(11) NOT NULL,
  `pic1` blob NOT NULL,
  `pic2` blob,
  `pic3` blob,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

DROP TABLE IF EXISTS `volunteers`;
CREATE TABLE IF NOT EXISTS `volunteers` (
  `email_ID` varchar(100) NOT NULL,
  `vname` varchar(50) NOT NULL,
  `event_id` int(11) NOT NULL,
  `attendance` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'absent',
  PRIMARY KEY (`email_ID`,`event_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`email_ID`, `vname`, `event_id`, `attendance`) VALUES
('royashutsoh10@gmail.com', 'Debmalya', 105, NULL),
('royashutosh109@gmail.com', 'Amit', 111, 'present'),
('royashutosh109@gmail.com', 'Amit', 109, 'present'),
('royashutosh109@gmail.com', 'Amit', 110, 'present'),
('royashutosh109@gmail.com', 'Amit', 105, 'absent'),
('royashutosh109@gmail.com', 'Amit', 112, 'present'),
('royashutosh109@gmail.com', 'Amit', 114, 'present');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_info`
--

DROP TABLE IF EXISTS `volunteer_info`;
CREATE TABLE IF NOT EXISTS `volunteer_info` (
  `vname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email_ID` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `bloodgrp` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `image` blob,
  UNIQUE KEY `email_ID` (`email_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `volunteer_info`
--

INSERT INTO `volunteer_info` (`vname`, `dob`, `gender`, `email_ID`, `phone`, `state`, `city`, `profession`, `bloodgrp`, `pass`, `image`) VALUES
('', '2000-01-31', 'Male', 'royashutsoh104@gmail.com', 9883623156, 'Himachal Pradesh', 'Lahaul & Spiti', 'Developer', '', 'ashutsoh', NULL),
('', '2000-01-31', 'Other', 'royashutsoh190@gmail.com', 9883623156, 'Gujarat', 'Ahmedabad', 'Developer', '', 'biruashu13', NULL),
('Debmalya', '2000-01-31', 'Other', 'royashutsoh10@gmail.com', 9883623156, 'Himachal Pradesh', 'Baddi', 'Developer', 'B+', '1234', NULL),
('Amit', '2000-01-01', 'Female', 'dopecoder007@gmail.com', 7044269401, 'Manipur', 'Bishnupur', 'Developer', 'O+', '12345', NULL),
('Amit', '2000-02-29', 'Female', 'royashutosh104@gmail.com', 7044269401, 'Dadra and Nagar Have', 'Amal', 'Developer', 'AB+', '1234', NULL),
('Prerna', '2000-01-01', 'Male', 'royashutosh2020@gmail.com', 6290766525, 'Jammu and Kashmir', 'Jammu', 'Developer', 'AB+', '12345', NULL),
('Jyotika', '2000-01-01', 'Male', 'amitnair21@gmail.com', 9883623516, 'Chhattisgarh', 'Korba', 'Developer', 'B+', '12345', NULL),
('Amit', '2000-01-01', 'Male', 'royashutosh109@gmail.com', 6290766525, 'Madhya Pradesh', 'Indore', 'Developer', 'AB+', '12345', 0x70726f66696c652070696374757265732f313538333439343939325f6d616e2e706e67),
('Debmalyadas', '2000-01-01', 'Male', 'deb@gmail.com', 9874945652, 'Andhra Pradesh', 'Vizianagaram', 'Developer', 'AB+', '123', 0x70726f66696c652070696374757265732f313538333733303432305f6d616e202831292e706e67);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
