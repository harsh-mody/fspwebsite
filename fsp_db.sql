-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jul 09, 2020 at 11:18 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `distributors`
--

CREATE TABLE `distributors` (
  `Id` int(11) NOT NULL,
  `cname` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Cemail` varchar(100) DEFAULT NULL,
  `descrip` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `interest` varchar(20) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `location` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `instituitonalpartners`
--

CREATE TABLE `instituitonalpartners` (
  `Id` int(11) NOT NULL,
  `cname` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Cemail` varchar(100) DEFAULT NULL,
  `descrip` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `interest` varchar(20) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `location` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(11) NOT NULL,
  `cname` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Cemail` varchar(100) NOT NULL,
  `descrip` varchar(300) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `linkedin` varchar(300) NOT NULL,
  `interest` varchar(300) NOT NULL,
  `phno` varchar(300) NOT NULL,
  `location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `cname`, `email`, `Cemail`, `descrip`, `facebook`, `linkedin`, `interest`, `phno`, `location`) VALUES
(2, 'Anjali Works part 3', 'anjalikapoor@gmail.com', 'anjalikapoor@gmail.com', 'abc', 'none', 'none', 'abc', '0', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `registeredusers`
--

CREATE TABLE `registeredusers` (
  `Id` int(11) NOT NULL,
  `username` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `category` varchar(40) DEFAULT NULL,
  `profilecreated` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registeredusers`
--

INSERT INTO `registeredusers` (`Id`, `username`, `email`, `password`, `category`, `profilecreated`) VALUES
(3, 'anjali kapoor', 'anjalikapoor@gmail.com', 'anjali', 'man', 1),
(4, 'sakshi', 'sakshi@gmail.com', 'sakshi', 'stock', 0),
(5, 'aryan', 'aryan@gmail.com', 'aryan', 'serv', 1),
(6, 'shubhra', 'shubhra@gmail.com', 'shubhra', 'dis', 0),
(7, 'alisha', 'alisha@gmail.com', 'alisha', 'trad', 0),
(8, 'raman', 'raman@gmail.com', 'raman', 'ret', 0),
(9, 'simar', 'simar@gmail.com', 'simar', 'serv', 0),
(10, 'sanchit', 'sanchit@gmail.com', 'sanchit', 'man', 0),
(11, 'amit', 'amit@gmail.com', 'amit', 'man', 0),
(12, 'salman', 'salman@yahoo.com', 'salman', 'stock', 0),
(13, 'amitabh', 'bachchan@gmail.com', 'bachan', 'trad', 0),
(14, 'sushant', 'sushant@rajput.com', 'sushant', 'InsP', 0),
(15, 'komal', 'komalpandey@official.com', 'komal', 'trad', 0),
(16, 'ragini', 'rag@gmail.com', 'ragini', 'serv', 0),
(17, 'bobby', 'bobby@gmail.com', 'bobby', 'InsP', 0),
(18, 'rohan', 'rohan@gmail.com', 'rohan', 'stock', 0),
(19, 'shubh', 'shubh@hotmail.com', 'shubh', 'ret', 1),
(20, 'manvi', 'manvi@gmail.com', 'manvi', 'trad', 0),
(21, 'Ashutosh', 'pandey@gmail.com', 'ashutosh', 'dis', 0),
(22, 'mansi jain', 'mansi@gmail.com', 'mansi', 'ret', 1);

-- --------------------------------------------------------

--
-- Table structure for table `retailers`
--

CREATE TABLE `retailers` (
  `Id` int(11) NOT NULL,
  `cname` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Cemail` varchar(100) DEFAULT NULL,
  `descrip` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `interest` varchar(20) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `location` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `retailers`
--

INSERT INTO `retailers` (`Id`, `cname`, `email`, `Cemail`, `descrip`, `facebook`, `linkedin`, `interest`, `phno`, `location`) VALUES
(6, 'abc', 'shubh@hotmail.com', 'abc', 'abc', 'none', 'none', 'abc', '0', 'abc'),
(7, 'MJ WORKS 2', 'mansi@gmail.com', 'MJ@gmail.com', 'abc', 'none', 'none', 'abc', '0', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `serviceproviders`
--

CREATE TABLE `serviceproviders` (
  `Id` int(11) NOT NULL,
  `cname` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Cemail` varchar(100) DEFAULT NULL,
  `descrip` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `interest` varchar(20) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `location` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `serviceproviders`
--

INSERT INTO `serviceproviders` (`Id`, `cname`, `email`, `Cemail`, `descrip`, `facebook`, `linkedin`, `interest`, `phno`, `location`) VALUES
(4, 'Universal Enterprises', 'aryan@gmail.com', 'Universalenterprises@gmail.com', 'Paint Manufacturer', 'none', 'none', 'Lubricants', '0', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `stockist`
--

CREATE TABLE `stockist` (
  `Id` int(11) NOT NULL,
  `cname` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Cemail` varchar(100) DEFAULT NULL,
  `descrip` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `interest` varchar(20) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `location` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `traders`
--

CREATE TABLE `traders` (
  `Id` int(11) NOT NULL,
  `cname` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Cemail` varchar(100) DEFAULT NULL,
  `descrip` varchar(300) DEFAULT NULL,
  `facebook` varchar(300) DEFAULT NULL,
  `linkedin` varchar(300) DEFAULT NULL,
  `interest` varchar(20) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `location` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distributors`
--
ALTER TABLE `distributors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `instituitonalpartners`
--
ALTER TABLE `instituitonalpartners`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeredusers`
--
ALTER TABLE `registeredusers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `retailers`
--
ALTER TABLE `retailers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `stockist`
--
ALTER TABLE `stockist`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `traders`
--
ALTER TABLE `traders`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distributors`
--
ALTER TABLE `distributors`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `instituitonalpartners`
--
ALTER TABLE `instituitonalpartners`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registeredusers`
--
ALTER TABLE `registeredusers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `retailers`
--
ALTER TABLE `retailers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `serviceproviders`
--
ALTER TABLE `serviceproviders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stockist`
--
ALTER TABLE `stockist`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `traders`
--
ALTER TABLE `traders`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
