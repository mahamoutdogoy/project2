-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2018 at 11:05 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `adpost`
--

CREATE TABLE `adpost` (
  `aid` int(100) NOT NULL,
  `atitle` varchar(50) NOT NULL,
  `afield` varchar(50) NOT NULL,
  `adesc` varchar(100) NOT NULL,
  `alocation` varchar(50) NOT NULL,
  `duedate` date NOT NULL,
  `datepost` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adpost`
--

INSERT INTO `adpost` (`aid`, `atitle`, `afield`, `adesc`, `alocation`, `duedate`, `datepost`, `username`) VALUES
(4, 'Fun n Fun', 'Freelancing', 'volunteer for the fun game show', 'Radisson Blu', '2018-09-21', '2018-08-24', 'Sam'),
(5, 'Beauty Spa', 'beauty care', 'avail offer from 3rd september till 6th september', 'koramangala', '2018-05-21', '2018-08-24', 'Sam'),
(6, 'Cooking', 'Other', 'Indian and Continental dishes', 'koramangala', '2018-09-01', '2018-08-24', 'Sam');

-- --------------------------------------------------------

--
-- Table structure for table `adregister`
--

CREATE TABLE `adregister` (
  `username` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `btype` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adregister`
--

INSERT INTO `adregister` (`username`, `cname`, `email`, `btype`, `password`, `mobile`, `location`) VALUES
('icespice123', 'Ice And Spice', 'is@gmail.com', 'Private', 'icespice45', 8298110057, 'Loardhi'),
('Sam', 'Food e lisious', 'food@gmail.com', 'Public', 'foodfood', 9431371152, 'Koramangala');

-- --------------------------------------------------------

--
-- Table structure for table `adv`
--

CREATE TABLE `adv` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `phoneno` bigint(12) NOT NULL,
  `location` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `password` varchar(8) NOT NULL,
  `cpassword` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adv`
--

INSERT INTO `adv` (`username`, `email`, `type`, `phoneno`, `location`, `description`, `password`, `cpassword`) VALUES
('Honda', 'hon@gmail.com', 'Bikes And Tyres', 9431391287, 'Phaser Town', 'Equipments', 'Honda222', 'Honda222'),
('Lenovo', 'leno@gmail.com', 'Laptop And Accessories', 9431391325, 'Bennerghetta', 'Electronics', 'LenoLeno', 'LenoLeno'),
('gv', 'amanprateek29jan@gmail.com', 'FUn AN FUn', 8297415563, 'SG ', 'bla blablablablablablablablablablablablablablablabla', 'mnmnmnmn', 'mnmnmnmn'),
('mahamat', 'mahamat@gmail.com', 'FUn AN FUn', 9090909090, 'S G Palaya', 'dfghgff', 'Mm123456', 'Mm123456'),
('Nanda', 'nandasb3@gmail.com', 'admin', 1234567890, 'earth', 'lfk;lakf;lak;lfkasd;lfk;laskf;lak;flksa;lfk;lfk;ladkf;lak;lfksa;lfk;lsadkf;lasdkf;laskdf;lka;lfka;lfk;ladkf;lakf;lak;lfk;lasfk;lskd;flksdlfkldkflsdkf;lsdkf;lskdfl;skdl;ssssssssssssssssssssssssssssssss', 'lmIqb@M2', 'lmIqb@M2'),
('Sam', 's@gmail.com', 'Food Catering', 6156132321, 'Koramangala', 'sjkenflkflkmfAEKfvl k eakfmdc ldkfm klseflks c, lkemv slk selk oeknflms dlek dlk seoflds lslsemnfolds lksmsefkln sv', 'Sam85296', 'Sam85296'),
('Sam', 'amanprateek29jan@gmail.com', 'FUn AN FUn', 6156132321, 'Koramangala', 'juyvhn', 'Sa874563', 'Sa874563');

-- --------------------------------------------------------

--
-- Table structure for table `smom`
--

CREATE TABLE `smom` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `phone` bigint(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `smom`
--

INSERT INTO `smom` (`name`, `email`, `dob`, `phone`, `username`, `password`, `cpassword`) VALUES
('Amrita', 'rao@gmail.com', '1988-06-20', 8596741239, 'amrao25', 'Amrita9638', 'Amrita9638'),
('Bipasha', 'bip@gmail.com', '1978-03-28', 8297415563, 'bip2398', 'Bipasha98', 'Bipasha98'),
('Lily', 'lil@gmail.com', '1985-06-25', 6843516834, 'lil345', 'Lil987456', 'Lil987456'),
('Mary', 'mary@gmail.com', '1980-12-21', 3352356352, 'mary123', 'Mary1234', 'Mary1234'),
('Nishmitha', 'nish@gmail.com', '1972-12-17', 9834723982, 'nish1234', 'Nish12345', 'Nish12345'),
('Priya', 'p@gmail.com', '1987-06-17', 6516516351, 'priya654', 'Priya985', 'Priya985');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adpost`
--
ALTER TABLE `adpost`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `adregister`
--
ALTER TABLE `adregister`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `smom`
--
ALTER TABLE `smom`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adpost`
--
ALTER TABLE `adpost`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adpost`
--
ALTER TABLE `adpost`
  ADD CONSTRAINT `adpost_ibfk_1` FOREIGN KEY (`username`) REFERENCES `adregister` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
