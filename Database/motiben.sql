-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 09:07 AM
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
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pay_mode` varchar(50) DEFAULT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `full_name`, `phone_number`, `address`, `pay_mode`, `order_date`) VALUES
(1, 'kal', '454545', 'HAMAPAR', 'COD', '2025-04-11 06:01:19'),
(2, 'anil', '466', 'kaniyad', 'Online', '2025-04-11 06:04:26'),
(3, 'kalpesh', '54545', 'dhamapar', 'COD', '2025-04-11 06:05:14'),
(5, 'kala', '555', '34534', 'Online', '2025-04-11 07:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `item_name`, `price`, `quantity`) VALUES
(1, 1, 'Straw Berry', 100.00, 1),
(2, 1, 'Black Grapes', 115.00, 1),
(3, 2, 'Carrot', 60.00, 100),
(4, 3, 'Straw Berry', 100.00, 5),
(6, 5, 'Black Grapes', 115.00, 1);

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
(118, 'Straw Berry', 100.00, '/nutrifiesta/uploads/1744327765_Straw Berry.jpg', 'Fresh Straw Berry', 'Stock Available', 'Your Favourite', 5),
(119, 'Black Grapes', 115.00, '/nutrifiesta/uploads/black grapes.jpg', 'Fresh Grapes', 'Stock Available', 'Healthy For Health', 5),
(120, 'Apple', 150.00, '/nutrifiesta/uploads/1744327847_Apple.jpg', 'Fresh Apple', 'Stock Available', 'Good For Health', 5),
(121, 'Peas', 80.00, '/nutrifiesta/uploads/InShot_20250411_035436622.jpg', 'Fresh Peas', 'Stock Available', 'Organic', 5),
(122, 'Carrot', 60.00, '/nutrifiesta/uploads/InShot_20250411_035656280.jpg', 'Fresh Carrot', 'Stock Available', 'Healthy For Health', 5),
(123, 'Ginger Root', 59.00, '/nutrifiesta/uploads/InShot_20250411_035613904.jpg', 'Fresh Ginger Root', 'Stock Available', 'Organic', 5),
(124, 'Banana', 60.00, '/nutrifiesta/uploads/1744327887_Banana.jpg', 'Fresh Banana', 'Stock Available', 'Your Favourite', 5),
(125, 'Pomegranate', 70.00, '/nutrifiesta/uploads/1744327929_Pomegranate.jpg', 'Fresh Pomegranate', 'Stock Available', 'Organic', 5),
(127, 'Pear', 60.00, '/nutrifiesta/uploads/1744327975_Pear.jpg', 'Fresh Peas', 'Stock Available', 'Good For Health', 5),
(130, 'Potato', 58.00, '/nutrifiesta/uploads/InShot_20250411_035903922.jpg', 'Fresh Potato', 'Organic', 'Your Favourite', 5),
(131, 'Tomato', 30.00, '/nutrifiesta/uploads/InShot_20250411_035456393.jpg', 'Fresh Tomato', 'Stock Available', 'Organic', 5),
(132, 'Brinjal', 40.00, '/nutrifiesta/uploads/1744328871_Brinjal.jpg', 'Fresh Brinjal', 'Stock Available', 'Healthy For Health', 5),
(133, 'Blue Plum', 100.00, '/nutrifiesta/uploads/1744328890_Blue Plum.jpg', 'Fresh Blue Plum', 'Stock Available', 'Your Favourite', 5),
(134, 'Nectarines', 158.00, '/nutrifiesta/uploads/1744328966_Nectarines.jpg', 'Fresh Nectarines', 'Organic', 'Healthy', 5),
(135, 'Green Grapes', 115.00, '/nutrifiesta/uploads/1744328983_Green Grapes.jpg', 'Fresh Green Grapes', 'Stock Available', 'Organic', 5),
(136, 'Green Beans', 65.00, '/nutrifiesta/uploads/Green Beans.jpg', 'Fresh Green Beans', 'Stock Available', 'Organic', 5),
(137, 'Green Capsicum', 54.00, '/nutrifiesta/uploads/Green Capsicum.jpg', 'Fresh  Capsicum', 'Stock Available', 'Organic', 5),
(138, 'Corn', 54.00, '/nutrifiesta/uploads/Corn.jpg', 'Fresh Corn', 'Stock Available', 'Good For Health', 5),
(139, 'Watermelon', 20.00, '/nutrifiesta/uploads/Watermelon.jpg', 'Fresh Watermelon', 'Stock Available', 'Good For Health', 5),
(140, 'Kiwi', 89.00, '/nutrifiesta/uploads/Kiwi.jpg', 'Fresh Kiwi', 'Stock Available', 'Healthy For Health', 5),
(141, 'Cantaloupe', 25.00, '/nutrifiesta/uploads/Cantaloupe.jpg', 'Fresh Cantaloupe', 'Stock Available', 'Organic', 5),
(142, 'Red Capsicum', 69.00, '/nutrifiesta/uploads/Red Capsicum.jpg', 'Fresh  Capsicum', 'Stock Available', 'Organic', 5),
(143, 'Coriander', 158.00, '/nutrifiesta/uploads/Coriander.jpg', 'Fresh  Coriander', 'Stock Available', 'Healthy For Health', 5),
(144, 'Cauliflower', 60.00, '/nutrifiesta/uploads/Cauliflower.jpg', 'Fresh Cauliflower', 'Stock Available', 'Organic', 5),
(145, 'Mango', 250.00, '/nutrifiesta/uploads/Mango.jpg', 'Fresh Mango', 'Stock Available', 'Your Favourite', 5),
(146, 'Figs', 200.00, '/nutrifiesta/uploads/Figs.jpg', 'Fresh Figs', 'Organic', 'Good For Health', 5),
(147, 'Dragon Fruit', 255.00, '/nutrifiesta/uploads/Dragon Fruit.jpg', 'Fresh Dragon Fruit', 'Stock Available', 'Healthy For Health', 5),
(148, 'Garlic', 180.00, '/nutrifiesta/uploads/Garlic.jpg', 'Fresh Garlic', 'Stock Available', 'Organic', 5),
(149, 'Beet Root', 45.00, '/nutrifiesta/uploads/Beet Root.jpg', 'Fresh Beet Root', 'Stock Available', 'Good For Health', 5),
(150, 'Ridged Gourd', 68.00, '/nutrifiesta/uploads/Ridged Gourd.jpg', 'Fresh Ridged Gourd', 'Stock Available', 'Organic', 5),
(151, 'Avocado', 190.00, '/nutrifiesta/uploads/Avocado.jpg', 'Fresh Avocado', 'Stock Available', 'Healthy For Health', 5),
(152, 'Coconut', 120.00, '/nutrifiesta/uploads/Coconut.jpg', 'Fresh Coconut', 'Organic', 'Good For Health', 5),
(153, 'Lemon', 255.00, '/nutrifiesta/uploads/Lemon.jpg', 'Fresh Lemon', 'Stock Available', 'Organic', 5),
(154, 'Onion', 140.00, '/nutrifiesta/uploads/Onion.jpg', 'Fresh Onion', 'Stock Available', 'Organic', 5),
(155, 'Broccoli', 135.00, '/nutrifiesta/uploads/Broccoli.jpg', 'Fresh Broccoli', 'Stock Available', 'Good For Health', 5),
(156, 'Cucumber', 145.00, '/nutrifiesta/uploads/Cucumber.jpg', 'Fresh Cucumber', 'Stock Available', 'Good For Health', 5),
(157, 'Guava', 57.00, '/nutrifiesta/uploads/Guava.jpg', 'Fresh Guava', 'Stock Available', 'Organic', 5),
(158, 'Orange', 70.00, '/nutrifiesta/uploads/Orange.jpg', 'Fresh Orange', 'Stock Available', 'Good For Health', 5),
(159, 'Blue Berry', 78.00, '/nutrifiesta/uploads/Blue Berry.jpg', 'Fresh Blue Berry', 'Stock Available', 'Good For Health', 5),
(160, 'Mushroom', 150.00, '/nutrifiesta/uploads/Mushroom.jpg', 'Fresh Mushroom', 'Stock Available', 'Healthy For Health', 5),
(161, 'Pumpkin', 50.00, '/nutrifiesta/uploads/Pumpkin.jpg', 'Fresh Pumpkin', 'Stock Available', 'Good For Health', 5),
(162, 'Daikon', 120.00, '/nutrifiesta/uploads/Daikon.jpg', 'Fresh Daikon', 'Stock Available', 'Organic', 5),
(163, 'Pineapple', 250.00, '/nutrifiesta/uploads/Pineapple.jpg', 'Fresh Pineapple', 'Stock Available', 'Good For Health', 5),
(164, 'Avocado', 100.00, '/nutrifiesta/uploads/Avocado.jpg', 'Fresh Avocado', 'Stock Available', 'Good For Health', 5),
(165, 'Figs', 200.00, '/nutrifiesta/uploads/Figs.jpg', 'Fresh Figs', 'Stock Available', 'Good For Health', 5);

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
(1, 'Vanita Solanki ', 'sardarnagar bhavnagar', '34001', 'vanita@gmail.com', '9012345678', '$2y$10$//7edmksBfuMWmE61F/fauzCBhMwx8iRpAFq35DBC0VNjakp/hbWe'),
(2, 'Bhumi Makwana', 'Bhavnagar,Rupani Circle', '34001', 'bhumi@123.com', '9012333678', '$2y$10$dMSNoTT2fTYAjqqL0rituuD59isZDJFlZRkdPGkCBZK9SsoVp84Si'),
(3, 'Vanshita Kankiya', 'Bhavnagar,sardar Nagar', '34001', 'vanshi12@gmail.com', '9035213456', '$2y$10$gBmsLR7HmPFeVqgUJQV.peA0sivQHxCWIOwwKlPtjCl2.C5hC25MW'),
(555, 'kalpo', 'hamapar', '64545', 'kalpo@gmail.com', '343', '$2y$10$8cCTyGbGHkdBZb3svqQ23eXSusUDP9hnLo6EpsTVXbbnXmQ3qE5ky'),
(5553, '43', 'hamapar', '364710', 'k@gmail.com', '343', '$2y$10$PY..qruvlQNmHmToAGzVQOReU/CufX6fwf46z3Tle3LWr6OdxsEwW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_card`
--
ALTER TABLE `admin_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

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
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
