-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2020 at 03:15 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ogbsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(200) DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Test', 'admin', 5689784586, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-02-17 12:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `ID` int(10) NOT NULL,
  `UserID` int(5) NOT NULL,
  `ConnectionNumber` varchar(200) DEFAULT NULL,
  `BookingNumber` varchar(200) DEFAULT NULL,
  `RefillCylinder` varchar(120) DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `RefflingCost` int(10) NOT NULL,
  `DeliveryBoy` varchar(200) NOT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`ID`, `UserID`, `ConnectionNumber`, `BookingNumber`, `RefillCylinder`, `BookingDate`, `Remark`, `Status`, `RefflingCost`, `DeliveryBoy`, `UpdationDate`) VALUES
(1, 3, '246696604', '163728139', '14.2 Kg', '2020-02-20 11:50:51', 'Delivery Boy on the way', 'On The Way', 0, 'Raghav', '2020-02-26 12:04:07'),
(2, 3, '246696604', '401214893', '14.2 Kg', '2020-02-21 06:15:52', 'Cylindered has been delivered', 'Delivered', 750, 'Harish Kumar', '2020-02-21 07:37:17'),
(3, 3, '246696604', '636035578', '5 Kg', '2020-02-21 06:16:02', 'Delivery Boy is on the way', 'On The Way', 750, 'Govardhan', '2020-02-21 07:35:55'),
(4, 3, '246696604', '488243744', '30 Kg', '2020-02-21 06:16:12', 'Cancelled', 'Cancellled', 0, 'Raghav', '2020-02-21 06:47:58'),
(5, 1, '561572442', '323890461', '14.2 Kg', '2020-02-21 06:24:15', 'Delivered', 'Delivered', 750, 'Raghav', '2020-03-16 05:57:33'),
(6, 1, '561572442', '698368256', '5 Kg', '2020-02-21 06:24:25', 'Approved', 'Confirmed', 800, 'Test1', '2020-03-16 05:48:02'),
(7, 2, '301747871', '256017349', '14.2 Kg', '2020-02-26 12:52:50', NULL, NULL, 0, '', NULL),
(8, 6, '947553256', '433622394', '14.2 Kg', '2020-03-18 16:19:05', 'Delivery boy on the way', 'On The Way', 500, 'Raghav', '2020-03-18 16:22:27'),
(9, 7, '835727101', '967723341', '14.2 Kg', '2020-03-22 10:30:42', 'Delivered to customer', 'Delivered', 300, 'Joginder', '2020-03-22 10:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `tblconnection`
--

CREATE TABLE `tblconnection` (
  `ID` int(10) NOT NULL,
  `UserID` int(10) DEFAULT NULL,
  `ConnectionNumber` varchar(50) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `DOB` varchar(120) DEFAULT NULL,
  `Nationality` varchar(100) DEFAULT NULL,
  `MaritalStatus` varchar(120) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `SelectRelated` varchar(100) DEFAULT NULL,
  `FirstName` varchar(100) DEFAULT NULL,
  `LastName` varchar(100) DEFAULT NULL,
  `SORFAddress` mediumtext DEFAULT NULL,
  `Citytownvillage` varchar(200) DEFAULT NULL,
  `ZipCode` int(10) DEFAULT NULL,
  `Documents` varchar(200) DEFAULT NULL,
  `AppliedDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(120) DEFAULT NULL,
  `ConnectionCharge` int(10) NOT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblconnection`
--

INSERT INTO `tblconnection` (`ID`, `UserID`, `ConnectionNumber`, `Name`, `Email`, `MobileNumber`, `Gender`, `DOB`, `Nationality`, `MaritalStatus`, `Address`, `SelectRelated`, `FirstName`, `LastName`, `SORFAddress`, `Citytownvillage`, `ZipCode`, `Documents`, `AppliedDate`, `Remark`, `Status`, `ConnectionCharge`, `UpdationDate`) VALUES
(1, 6, '947553256', 'Anuj Kumar', 'testuser@gmail.com', 1234567890, 'male', '1995-02-03', 'Indian', 'Married', 'New Delhi India', 'Father', 'Test', 'Test', 'New Delhi ', 'delhi', 110001, 'e5ae438fff201f6357f21d6124bf534a1584546012.jpg', '2020-03-18 15:40:12', 'Connection approved', 'Approved', 1800, '2020-03-18 16:18:22'),
(2, 7, '835727101', ' Test user', 'phpgurukulofficial@gmail.com', 1234567899, 'Male', '2020-04-04', 'India', 'Single', 'New Delhi', 'Father', 'ABC', 'XYZ', 'New Delhi India', 'New Delhi', 110001, '3a62d2066090e04fde624dca3c6be2b01584872927.jpg', '2020-03-22 10:28:47', 'Connection approved', 'Approved', 2000, '2020-03-22 10:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblhistory`
--

CREATE TABLE `tblhistory` (
  `ID` int(10) NOT NULL,
  `RequestNumber` varchar(50) DEFAULT NULL,
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhistory`
--

INSERT INTO `tblhistory` (`ID`, `RequestNumber`, `Remark`, `Status`, `UpdationDate`) VALUES
(10, '947553256', 'Connection approved', 'Approved', '2020-03-18 16:18:22'),
(11, '835727101', 'Connection approved', 'Approved', '2020-03-22 10:30:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `ID` int(10) NOT NULL,
  `StaffID` varchar(120) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `JoiningDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`ID`, `StaffID`, `Name`, `MobileNumber`, `Email`, `Address`, `Password`, `JoiningDate`) VALUES
(2, 'ogbs124', 'Raghav', 6563342432, 'rag@gmail.com', 'h-897,Moolchand New Delhi', '202cb962ac59075b964b07152d234b70', '2020-02-18 05:51:46'),
(3, 'ogbs125', 'Govardhan', 8898980809, 'dhan@gmail.com', 'Y-456, Gyanvapi godowalia Varanasi', '202cb962ac59075b964b07152d234b70', '2020-02-18 05:53:02'),
(4, 'ogbs123', 'Harish Kumar', 7979878979, 'harish@gmail.com', 'hgjhkjkjlkjl', '202cb962ac59075b964b07152d234b70', '2020-02-18 06:57:15'),
(5, 'ogbs126', 'Joginder', 878987675, 'jog@gmail.com', 'hghgftyfsdwapewr', '202cb962ac59075b964b07152d234b70', '2020-02-18 06:58:03'),
(6, 'ogbs2659', 'Girish Kumar', 4644546468, 'gir@gmail.com', 'j-89 Gulshan garden maharani bagh Jaipur', '202cb962ac59075b964b07152d234b70', '2020-02-26 11:31:20'),
(7, 'ogbs1234', 'Test1', 9798779877, 'test@gmail.com', 'H-8090 , Panckula New Delhi', '202cb962ac59075b964b07152d234b70', '2020-03-16 05:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbltracking`
--

CREATE TABLE `tbltracking` (
  `ID` int(10) NOT NULL,
  `BookingNumber` varchar(200) DEFAULT NULL,
  `Remark` varchar(120) DEFAULT NULL,
  `Status` varchar(120) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltracking`
--

INSERT INTO `tbltracking` (`ID`, `BookingNumber`, `Remark`, `Status`, `UpdationDate`) VALUES
(14, '433622394', 'Booked successfully', 'Confirmed', '2020-03-17 18:30:00'),
(15, '433622394', 'Delivery boy on the way', 'On The Way', '2020-03-18 16:22:27'),
(16, '967723341', 'Booking Confirmed', 'Confirmed', '2020-03-22 10:31:36'),
(17, '967723341', 'Delivery boy on the way', 'On The Way', '2020-03-22 10:35:26'),
(18, '967723341', 'Delivered to customer', 'Delivered', '2020-03-22 10:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(6, 'Anuj Kumar', 1234567890, 'testuser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-03-18 15:36:04'),
(7, ' Test user', 1234567899, 'phpgurukulofficial@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2020-03-22 10:25:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `BookingNumber` (`BookingNumber`);

--
-- Indexes for table `tblconnection`
--
ALTER TABLE `tblconnection`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ConnectionNumber` (`ConnectionNumber`);

--
-- Indexes for table `tblhistory`
--
ALTER TABLE `tblhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltracking`
--
ALTER TABLE `tbltracking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblconnection`
--
ALTER TABLE `tblconnection`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblhistory`
--
ALTER TABLE `tblhistory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbltracking`
--
ALTER TABLE `tbltracking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
