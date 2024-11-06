-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 02:28 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` int(30) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Position` varchar(30) DEFAULT NULL,
  `RateType` varchar(30) DEFAULT NULL,
  `Rate` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `Name`, `Position`, `RateType`, `Rate`) VALUES
(1, 'Lovely Garcia', 'Web Designer', 'hourly', '230'),
(2, 'Aiden Martin', 'Mobile Developer', 'hourly', '55.00'),
(3, 'Chloe Cooper', 'HR Assistant', 'monthly', '4500.00'),
(4, 'Ryan Phillips', 'Data Engineer', 'monthly', '8500.00'),
(5, 'Grace Walker', 'Office Manager', 'monthly', '6000.00'),
(6, 'Benjamin Hughes', 'Junior Accountant', 'monthly', '5000.00'),
(7, 'Zoe Turner', 'Legal Advisor', 'monthly', '8500.00'),
(8, 'Hannah Wright', 'Recruitment Specialist', 'monthly', '6500.00'),
(9, 'Andrew King', 'Operations Specialist', 'monthly', '7800.00'),
(10, 'Madison Scott', 'Sales Representative', 'hourly', '45.00'),
(11, 'Wakwak', 'Web Designer', 'hourly', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `EmployeeID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
