-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 08:50 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carsale`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `feedback`) VALUES
(1, 'sajeesan', 'sajeesans@gmail.com', 'Nice looking'),
(2, 'sajeesan2', 'sajeesan2@gmail.com', 'best'),
(3, 'apple', 'apple@gmail.com', 'apple'),
(5, 'abc', 'sajeesans@gmail.com', 'abc'),
(9, 's', 'sajeesans@gmail.com', 'sas'),
(10, 'aa', 'nilojan1998@gmail.com', 'aaaa'),
(11, 'vv', 'vv', 'dd'),
(12, 'aa', 's1as', '1\r\n@'),
(13, 'sajeesan', 'sajeesanss@gmail.com', 'sajeesan isa good boy'),
(14, 'aa', 'nilojan1998@gmail.com', 'sasas'),
(15, 'sajeesan', 'nilojan1998@gmail.com', 'sass'),
(16, 'aa', 'nilojan1998@gmail.com', 's');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `emails` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller_ads`
--

CREATE TABLE `seller_ads` (
  `id` int(11) NOT NULL,
  `brand` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `edition` varchar(200) NOT NULL,
  `model_year` varchar(200) NOT NULL,
  `conditions` varchar(200) NOT NULL,
  `mileage` varchar(200) NOT NULL,
  `transmission` varchar(200) NOT NULL,
  `fuel_type` varchar(200) NOT NULL,
  `engine_capacity` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `phone` int(40) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `status` varchar(40) NOT NULL,
  `comments` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_ads`
--

INSERT INTO `seller_ads` (`id`, `brand`, `model`, `edition`, `model_year`, `conditions`, `mileage`, `transmission`, `fuel_type`, `engine_capacity`, `price`, `phone`, `description`, `image1`, `image2`, `image3`, `status`, `comments`) VALUES
(12, 'ford', 'car', 'car', '2020', 'new', '15000km', 'fuel', 'petrol', '1200cc', 'Rs.50,00,000', 768314375, 'best coondition', 'car.jpg', 'audi.png', 'benz.png', 'Accept', 'good looking'),
(13, 'audi', 'car', 'car', '2020', 'new', '15000km', 'fuel', 'petrol', '1200cc', 'Rs.50,00,000', 768314375, 'best coondition', 'audi.png', 'audi.png', 'audi.png', 'Accept', 'good looking'),
(14, 'benz', 'car', 'car', '2020', 'new', '15000km', 'fuel', 'petrol', '1200cc', 'Rs.50,00,000', 768314375, 'best coondition', 'ford.png', 'audi.png', 'benz.png', 'Accept', 'good looking'),
(15, 'bmw', 'vitz', 'car', '2020', 'new', '15000km', 'fuel', 'petrol', '1200cc', 'Rs.50,00,000', 768314375, 'best coondition', 'bmw.png', 'bmw.png', 'bmw.png', 'Accept', 'good looking'),
(16, 'audi', 'Q1', 'limited', '2020', 'brand new', '30km', 'Auto', 'petrol', '1200cc', 'Rs.5,00,000', 768314375, 'Good condition with the bad owner', 'audi_q1.png', 'audi_q1.png', 'audi_q1.png', 'Accept', 'good'),
(17, 'audi', 'Q1', 'limited', '2020', 'brand new', '30km', 'Auto', 'petrol', '1200cc', 'Rs.5,00,000', 768314375, 'Good condition with the bad owner', '910602979bda92b9f88144d313f52725.png', '910602979bda92b9f88144d313f52725.png', '910602979bda92b9f88144d313f52725.png', 'Accept', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `usertype`) VALUES
(2, 'seller', 'seller', 'seller', 'seller@gmail.com', 'seller', 'seller'),
(4, 'admin', 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin'),
(5, 'aa', 'aa', 'user', 'nilo@gmail.com', '123', 'customer'),
(6, 'vi', 'pa', 'vis', 'a@gmail.com', '123', 'seller');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_ads`
--
ALTER TABLE `seller_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_ads`
--
ALTER TABLE `seller_ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
