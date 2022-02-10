-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 11:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(20) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(12, 'Abhijeet Wani', 'wani.abhijeet@gmail.com', '9823153996', 'Room C, Flat 16, Jane Seymour Court, 255, Avery Hill Road, SE92ET\r\nPrabhat Road, Lane no 1', 'cards', 'BMW 5 Series(1)', '42000'),
(13, 'Abhijeet', 'abhijeet@gmail.com', '07735907594', 'Room D, Flat 54\r\nJane Seymour Court\r\n255, Avery Hill Road', 'netbanking', 'BMW 5 Series(1), Ford Fiesta(1)', '66000'),
(14, 'James', 'James@gmail.com', '07790690600', '123 Greenwich Park, Near University, SE9 2ET', 'netbanking', 'BMW 5 Series(1), Ford Fiesta(1), Volkswagen Polo(1)', '87000'),
(15, 'Adam', 'Adam@gmail.com', '0784290244', 'Room D, Flat 54\r\nJane Seymour Court\r\n255, Avery Hill Road', 'cards', 'BMW 5 Series(1), Ford Fiesta(1), Volkswagen Polo(1)', '87000');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_miles` varchar(100) NOT NULL,
  `product_fuel` varchar(100) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_miles`, `product_fuel`, `product_color`, `product_code`) VALUES
(1, 'BMW 5 Series', '42000', 1, 'images/Car1_BMW.jpg', '25000', 'Petrol', 'Grey', 'p001'),
(2, 'Ford Fiesta', '24000', 1, 'images/Car2_Ford.jpg', '5000', 'Diesel', 'White', 'p002'),
(3, 'Volkswagen Polo', '21000', 1, 'images/Car3_VW.jpg', '20000', 'Petrol', 'Blue', 'p003'),
(4, 'Volkswagen CEED', '11000', 1, 'images/Car4_VW.jpg', '51000', 'Petrol', 'Black', 'p004'),
(5, 'Renault Clio', '20000', 1, 'images/Car5_Renault.jpg', '25000', 'Diesel', 'Black', 'p005'),
(6, 'MG Gloster', '27000', 1, 'images/Car6_MG.jpg', '56000', 'Petrol', 'Red', 'p006'),
(7, 'MG MG5', '26995', 1, 'images/Car7_MG.jpg', '2000', 'Diesel', 'Silver', 'p007'),
(8, 'Kia Ceed', '34000', 1, 'images/Car8_Kia.jpg', '76000', 'Petrol', 'White', 'p008'),
(9, 'Fiat Panda', '6000', 1, 'images/Car9_Fiat.jpg', '100000', 'Petrol', 'Black', 'p009'),
(10, 'Dacia Sandero', '17000', 1, 'images/Car10_Dacia.jpg', '17000', 'Petrol', 'Orange', 'p010'),
(11, 'BMW 3 Series', '37000', 1, 'images/Car11_BMW.jpg', '7000', 'Hybrid', 'White', 'p011'),
(12, 'Range Rover Vogue', '42000', 1, 'images/Car12_RR.jpg', '12000', 'Petrol', 'Silver', 'p012');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(4, 'yugesh verma', 'yugeshverma32@gmail.com', '14e1b600b1fd579f47433b88e8d85291'),
(5, 'yugesh', 'yugeshverma@gmail.com', '14e1b600b1fd579f47433b88e8d85291'),
(6, 'Abhijeet Wani', 'wani.abhijeet@gmail.com', '57f231b1ec41dc6641270cb09a56f897');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `id` (`id`),
  ADD KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
