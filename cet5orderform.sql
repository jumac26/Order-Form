-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 10:16 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cet5orderform`
--

-- --------------------------------------------------------

--
-- Table structure for table `current_order`
--

CREATE TABLE `current_order` (
  `order_id` int(10) DEFAULT NULL,
  `variant` varchar(10) NOT NULL,
  `price` int(30) NOT NULL,
  `total_payment` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `orderDate` date NOT NULL,
  `fullName` varchar(30) NOT NULL,
  `emailAddress` varchar(50) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `cityAddress` varchar(100) NOT NULL,
  `orderType` varchar(30) NOT NULL,
  `pickupDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `variant` varchar(10) NOT NULL,
  `stocks_left` int(10) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`variant`, `stocks_left`, `price`) VALUES
('Variant A', 23, 19930),
('Variant B', 48, 17880),
('Variant C', 26, 66520),
('Variant D', 29, 45970);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `current_order`
--
ALTER TABLE `current_order`
  ADD UNIQUE KEY `order_id` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
