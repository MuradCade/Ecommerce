-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2022 at 02:14 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_quantity` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `subtotal` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `customer_id`, `product_id`, `product_img`, `product_name`, `product_price`, `product_quantity`, `subtotal`) VALUES
(3, '', '04101120', 'Mens-Standard-Fit-Sherpa-Fleece-Jacket01-600x764.jpg', 'Black Fashion Jacket', '50', '1', '50');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `userid` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pwd` longtext COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(50) NOT NULL,
  `order_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shipping_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `e_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `order_status`, `payment_method`, `shipping_status`, `email`, `e_status`) VALUES
(5, '101', 110, 'verified', 'zaad', 'delivers in 3 days', '', ''),
(8, '374', 77369152, 'verified', 'zaad', 'Deliver In 2 Days', 'king12murad@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `payment_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(255) NOT NULL,
  `f_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `l_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `payment_method` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` decimal(50,0) NOT NULL,
  `product_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `product_quantity` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `product_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_id`, `product_img`, `product_name`, `product_price`, `product_status`, `product_quantity`, `product_desc`, `category`) VALUES
(4, '04101120', 'Mens-Standard-Fit-Sherpa-Fleece-Jacket01-600x764.jpg', 'Black Fashion Jacket', '50', '', '1', 'Mens-Standard-Fit-Sherpa-Fleece-Jacket01-600x764.jpg', 'jaket'),
(5, '30014401', 'WDÂ·NY-Black-Mens-Palm-Burgundy-Jacket01-600x764.jpg', 'Casual Fashion Jacket', '86', '', '1', 'Qui, explicabo eius nisi fugit repudiandae, quos voluptates, beatae ullam consectetur ducimus itaque! Tempore provident eligendi sed ipsum ea. Reiciendis nulla neque sapiente, totam veritatis non? Odio, quaerat', 'jaket'),
(6, '30040123', 'Mens-Standard-Fit-Sweater-Fleece-Jacket01-600x764.jpg', 'Black Fashion Swether', '49', '', '1', 'Qui, explicabo eius nisi fugit repudiandae, quos voluptates, beatae ullam consectetur ducimus itaque! Tempore provident eligendi sed ipsum ea. Reiciendis nulla neque sapiente, totam veritatis non? Odio, quaerat', 'sweater'),
(7, '30434404', 'Mens-Standard-Fit-Deconstructed-Knit-Blazer01-600x764.jpg', 'Grey Men jacket', '68', '', '1', 'Qui, explicabo eius nisi fugit repudiandae, quos voluptates, beatae ullam consectetur ducimus itaque! Tempore provident eligendi sed ipsum ea. Reiciendis nulla neque sapiente, totam veritatis non? Odio, quaerat', 'blazer'),
(8, '02224424', 'Mens-Standard-Fit-Heathered-Short-Sleeve-V-Neck-T-Shirt01-600x764.jpg', 'T-shirt Fashion', '26', '', '1', 'Qui, explicabo eius nisi fugit repudiandae, quos voluptates, beatae ullam consectetur ducimus itaque! Tempore provident eligendi sed ipsum ea. Reiciendis nulla neque sapiente, totam veritatis non? Odio, quaerat', 't-shirt'),
(9, '04223231', 'Mens-Standard-Fit-Short-Sleeve-V-Neck-T-Shirt01-1-600x764.jpg', 'Gray T-shirt Fashion', '38', '', '1', 'Qui, explicabo eius nisi fugit repudiandae, quos voluptates, beatae ullam consectetur ducimus itaque! Tempore provident eligendi sed ipsum ea. Reiciendis nulla neque sapiente, totam veritatis non? Odio, quaerat', 't-shirt'),
(10, '40111402', 'Mens-Standard-Fit-Short-Sleeve-Crew-T-Shirt01-600x764.jpg', 'Green T-shirt Fashion', '25', '', '1', 'Qui, explicabo eius nisi fugit repudiandae, quos voluptates, beatae ullam consectetur ducimus itaque! Tempore provident eligendi sed ipsum ea. Reiciendis nulla neque sapiente, totam veritatis non? Odio, quaerat', 't-shirt'),
(13, '01420124', 'Mens-Standard-Fit-Crew-T-Shirt01-600x764.jpg', 'Grey T-shirt Fashion', '24', '', '1', 'Qui, explicabo eius nisi fugit repudiandae, quos voluptates, beatae ullam consectetur ducimus itaque! Tempore provident eligendi sed ipsum ea. Reiciendis nulla neque sapiente, totam veritatis non? Odio, quaerat', 't-shirt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD UNIQUE KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
