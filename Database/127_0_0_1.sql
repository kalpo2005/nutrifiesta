-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 01:39 PM
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
-- Database: `motiben`
--
CREATE DATABASE IF NOT EXISTS `motiben` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `motiben`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_card`
--

CREATE TABLE `admin_card` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_card`
--

INSERT INTO `admin_card` (`id`, `admin_name`, `email`, `password`) VALUES
(3, 'kalpo', 'kalpesh', '123123'),
(4, 'vanita', 'vanita@gamil.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `feature1` varchar(255) DEFAULT NULL,
  `feature2` varchar(255) DEFAULT NULL,
  `feature3` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `image`, `feature1`, `feature2`, `feature3`, `rating`) VALUES
(100, 'fdfd', 895.00, 'images/fruit\'s/apple.jpg', '44', '44', '455', 4),
(101, 'kal', 5000.00, '/nutrifiesta/uploads/1744283510_1688717575029.png', 'kal', 'od', 'jn', 4),
(102, 'kalpesh bavaliya', 10000.00, '/nutrifiesta/uploads/IMG_20241125_171823.jpg', 'FARM', 'NATURE', 'VADI', 5),
(103, 'bavaliya', 5252.00, '/nutrifiesta/uploads/kalpesh Passport.jpg', 'good', 'mahesh', 'kal', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `address`, `pincode`, `email`, `contact`, `password`) VALUES
(1, 'kalpo', 'j', '364710', 'kalpesh@gmail.com', '7096720915', '$2y$10$9KindpzmQTGiEoEnxTUy2e0rR5DKiSLy./o8tH56Em3hZqn.JuT8W'),
(32, 'vanita', 'hamapar', '364710', 'test@gmail.com', '7096720915', '$2y$10$ObwEwIoLZEaKLobuPh327uUjx61JJBpV.I/2XYpV4VuzyGE0ji1tS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_card`
--
ALTER TABLE `admin_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_card`
--
ALTER TABLE `admin_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
