-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2023 at 01:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_thebois`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_category` varchar(30) NOT NULL,
  `product_status` varchar(30) NOT NULL DEFAULT 'ACTIVE',
  `product_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_image`, `product_name`, `product_description`, `product_price`, `product_category`, `product_status`, `product_date`) VALUES
(1, '1.png', '1', 'Hapsdsds11', 31, 'Real Grade', 'DISABLE', '2023-03-10 15:11:36'),
(2, '', '2', '2', 2, 'Real Grade', 'ACTIVE', '2023-03-10 15:13:47');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table`
--

CREATE TABLE `transaction_table` (
  `transaction_id` int(11) NOT NULL,
  `shipment_id` int(11) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `transaction_balance` int(11) NOT NULL,
  `transaction_status` varchar(30) NOT NULL,
  `transaction_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_firstname` varchar(30) NOT NULL,
  `user_lastname` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_status` varchar(30) NOT NULL DEFAULT 'INACTIVE',
  `user_wallet` int(11) NOT NULL DEFAULT 0,
  `user_birthday` varchar(30) NOT NULL,
  `user_contact` varchar(30) DEFAULT NULL,
  `user_address` varchar(250) NOT NULL,
  `user_billing` varchar(250) NOT NULL,
  `user_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_username`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_status`, `user_wallet`, `user_birthday`, `user_contact`, `user_address`, `user_billing`, `user_date`) VALUES
(1, 'RamTheGreata', 'RamTheGreata', 'RamTheGreata', 'ramemersongoria.13.versus@gmai', 'RamTheGreata', 'DISABLE', 0, '', NULL, '', '', '2023-03-08 20:57:22'),
(2, 'Anonymous', 'Anonymous1112121', 'Anonymous1', 'anonymous@email.com', 'Anonymous', 'DISABLE', 0, '', NULL, '', '', '2023-03-08 20:58:14'),
(3, 'RamTheGreat1', 'RamTheGreat1', 'RamTheGreat1', 'pokemon@email.com', 'RamTheGreat1', 'USER', 0, '', NULL, '', '', '2023-03-08 20:58:49'),
(4, 'RamTheGreat', 'RamTheGreat', 'RamTheGreat', 'ramemersongoria@yahoo.com', 'RamTheGreat', 'USER', 0, '', NULL, '', '', '2023-03-10 14:28:57'),
(5, 'RamTheGreata1', 'RamTheGreata1', 'RamTheGreata1', 'ramemerson111goria@yahoo.com', 'RamTheGreata1', 'COURIER', 0, '', NULL, '', '', '2023-03-10 14:30:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
