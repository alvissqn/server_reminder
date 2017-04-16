-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 10:45 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `android`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `email`, `password`) VALUES
(1, 'admin@yahoo.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `list_task`
--

CREATE TABLE `list_task` (
  `taskid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `titletask` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content_task` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_task` date NOT NULL,
  `time_task` time NOT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list_task`
--

INSERT INTO `list_task` (`taskid`, `userid`, `titletask`, `content_task`, `date_task`, `time_task`, `status`) VALUES
(4, 1, 'task 1', 'noi dung task 1', '2017-04-17', '02:35:00', 1),
(5, 1, 'task 2', 'Noi dung task 2', '2017-04-17', '02:38:00', 0),
(6, 1, 'task 3', 'Noi dung task 3', '2017-04-17', '02:40:00', 0),
(7, 1, 'task 4', 'noi dung task 4', '2017-04-17', '03:11:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `user`, `pass`) VALUES
(1, 'admin', 'admin'),
(12, 'ngochoi100', 'admin'),
(13, 'ngochoiabc', 'admin'),
(14, 'thienvi', 'ngochoi'),
(15, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `list_task`
--
ALTER TABLE `list_task`
  ADD PRIMARY KEY (`taskid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `list_task`
--
ALTER TABLE `list_task`
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
