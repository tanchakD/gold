-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 11:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `countryname` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `countryname`) VALUES
(1, 'India'),
(2, 'Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `tbladdsalary`
--

CREATE TABLE `tbladdsalary` (
  `id` int(11) NOT NULL,
  `Department` varchar(45) DEFAULT NULL,
  `empid` varchar(45) DEFAULT NULL,
  `salary` varchar(45) DEFAULT NULL,
  `allowancesalary` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladdsalary`
--

INSERT INTO `tbladdsalary` (`id`, `Department`, `empid`, `salary`, `allowancesalary`, `total`, `create_date`) VALUES
(1, '2', 'Emp123456-badal', '1234', '212121', '213355', '2022-04-01 16:46:03'),
(2, '11', '125', '35000', '30000', '65000', '2023-04-14 11:17:12'),
(3, '5', '123455', '15000', '10000', '25000', '2023-04-14 11:21:11'),
(4, '6', 'Emp12345', '18000', '5000', '23000', '2023-04-14 11:21:32'),
(5, '8', 'Emp123456', '30000', '15000', '45000', '2023-04-14 11:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`id`, `name`, `email`, `mobile`, `password`, `create_date`) VALUES
(1, 'admin', 'admin@gmail.com', '99197896857', 'f925916e2754e5e03f75dd58a5733251', '2022-01-19 11:25:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `id` int(11) NOT NULL,
  `DepartmentName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`id`, `DepartmentName`) VALUES
(5, 'Cashier'),
(6, 'Assistant Manager'),
(8, 'Store Manager'),
(9, 'Quality Assurance Technician'),
(10, 'Peon'),
(11, 'Jewellery Designer'),
(12, 'Jewellery Maker'),
(14, 'Website Technician');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(45) DEFAULT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `department_name` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `country` varchar(45) DEFAULT NULL,
  `state` varchar(45) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `dob` varchar(45) DEFAULT NULL,
  `date_of_joining` varchar(45) DEFAULT NULL,
  `password` varchar(450) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`id`, `EmpId`, `fname`, `lname`, `department_name`, `email`, `mobile`, `country`, `state`, `city`, `address`, `photo`, `dob`, `date_of_joining`, `password`, `create_date`) VALUES
(1, 'Emp12345', 'Sarita', 'Shah', '6', 'sss@gmail.com', '9106245897', 'India', 'UP', 'Lucknow', 'hhhh\r\n                  ', '../uploads/1648876424-', '2022-04-03', '2022-03-26', 'abe33579e39180329215ea64030959bb', '2022-03-26 17:16:41'),
(2, 'Emp123456', 'badal', 'Kumar', '8', 'badal@gmail.com', '9998217894', 'India', 'UP', 'Noida', 'KKKKKK', '../uploads/1648318541-blog.jpg', '2022-03-26', '2022-03-27', '163db56062d850c78d7fc551ebcc793f', '2022-03-26 18:15:41'),
(3, '123455', 'daya', 'patel', '5', 'daya122@gmail.com', '7896541023', 'india', 'gujarat', 'surat', 'mkdf', '../uploads/1680802115-Screenshot (4).png', '2002-03-12', '2023-04-08', 'f4d610439d2975d13394fef14b2d3cc9', '2023-04-06 17:28:35'),
(4, '125', 'Tara', 'Patel', '11', 'Tara11@gmail.com', '6354875185', 'India', 'Gujarat', 'Surat', '12, Sai Society, Adajan, Surat,', '../uploads/1681384288-IMG-20201206-WA0001.jpg', '2000-04-12', '2023-04-14', '07c7bb1cb2717d1b8c3f0d3bc063d9e3', '2023-04-13 11:11:28');

-- --------------------------------------------------------

--
-- Table structure for table `tblleave`
--

CREATE TABLE `tblleave` (
  `id` int(11) NOT NULL,
  `userID` varchar(45) DEFAULT NULL,
  `EmpID` varchar(45) DEFAULT NULL,
  `LeaveType` varchar(45) DEFAULT NULL,
  `FromDate` varchar(45) DEFAULT NULL,
  `Todate` varchar(45) DEFAULT NULL,
  `Description` varchar(450) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `adminremarks` varchar(450) DEFAULT NULL,
  `Create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblleave`
--

INSERT INTO `tblleave` (`id`, `userID`, `EmpID`, `LeaveType`, `FromDate`, `Todate`, `Description`, `status`, `adminremarks`, `Create_date`) VALUES
(1, '1', 'Emp12345', '1', '2022-04-02', '2022-04-23', 'aaaaaaaaaaa', 'Approved', 'sssssssss', '2022-04-02 04:15:52'),
(2, '1', 'Emp12345', '1', '2022-04-02', '2022-04-24', 'mmmmmmmmmmmmmm', 'Pending', NULL, '2022-04-02 18:11:57'),
(3, '4', '125', '5', '2023-04-15', '2023-04-17', 'I am unwell and not in a state to go to the office for work.', 'Approved', 'ok', '2023-04-14 12:44:38'),
(5, '3', '123455', '6', '2023-05-01', '2023-06-30', 'I am pregnant.', 'Approved', 'ok,fine', '2023-04-14 12:52:17'),
(6, '2', 'Emp123456', '4', '2023-04-15', '2023-04-18', 'My father`s has been  accident today.', 'Approved', 'Done', '2023-04-14 12:59:28'),
(7, '1', 'Emp12345', '2', '2023-04-28', '2023-05-01', 'For Rest', 'Reject', 'No, Way', '2023-04-14 13:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `tblleavetype`
--

CREATE TABLE `tblleavetype` (
  `id` int(11) NOT NULL,
  `leaveType` varchar(45) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblleavetype`
--

INSERT INTO `tblleavetype` (`id`, `leaveType`, `create_date`) VALUES
(2, 'Privilege Leave (PL)', '2023-04-13 11:02:43'),
(3, 'Earned Leave (EL)', '2023-04-13 11:03:05'),
(4, 'Casual Leave (CL)', '2023-04-13 11:03:22'),
(5, 'Sick Leave (SL)', '2023-04-13 11:04:25'),
(6, 'Maternity Leave (ML)', '2023-04-13 11:04:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladdsalary`
--
ALTER TABLE `tbladdsalary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblleave`
--
ALTER TABLE `tblleave`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbladdsalary`
--
ALTER TABLE `tbladdsalary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblleave`
--
ALTER TABLE `tblleave`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
