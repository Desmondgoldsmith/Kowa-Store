-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 12:37 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kowa`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(8, 'Laptop'),
(26, 'Headphones'),
(28, 'Electronics'),
(31, 'kumi brand'),
(32, 'Phones');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `ip_add` varchar(50) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `c_id`, `qty`) VALUES
(1, '77777', 0, 1),
(1, '77777', NULL, 1),
(1, '::1', NULL, 20),
(1, '::1', NULL, 20),
(56, '::1', NULL, 1),
(55, '::1', NULL, 1),
(57, '::1', NULL, 1),
(59, '::1', NULL, 1),
(59, '::1', NULL, 1),
(56, '::1', NULL, 1),
(55, '::1', NULL, 1),
(56, '::1', NULL, 1),
(55, '::1', NULL, 1),
(58, '::1', NULL, 1),
(58, '::1', NULL, 1),
(58, '::1', NULL, 1),
(58, '::1', NULL, 1),
(58, '::1', NULL, 1),
(58, '::1', NULL, 1),
(58, '::1', NULL, 1),
(56, '::1', NULL, 1),
(55, '::1', NULL, 1),
(56, '::1', NULL, 1),
(56, '::1', NULL, 1),
(59, '::1', NULL, 1),
(59, '::1', NULL, 1),
(59, '::1', NULL, 1),
(56, '::1', NULL, 1),
(59, '::1', NULL, 1),
(55, '::1', NULL, 1),
(59, '::1', NULL, 1),
(56, '::1', NULL, 1),
(56, '::1', NULL, 1),
(59, '::1', NULL, 1),
(56, '::1', NULL, 1),
(59, '::1', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(16, 'iTel'),
(18, 'Samsung'),
(19, 'Blackberry');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_fname` varchar(600) NOT NULL,
  `customer_lname` varchar(500) NOT NULL,
  `customer_email` varchar(500) NOT NULL,
  `customer_pass` varchar(600) NOT NULL,
  `customer_contact` varchar(500) DEFAULT NULL,
  `customer_image` varchar(200) DEFAULT NULL,
  `user_role` int(11) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_fname`, `customer_lname`, `customer_email`, `customer_pass`, `customer_contact`, `customer_image`, `user_role`, `created_at`) VALUES
(1, 'Desmond', 'Goldsmith', 'desmondgoldsmith07@gmail.com', '$2y$10$OoIJ3EhH6wmTn5I78KoCIO0eBeyh8swFtC9hucsWx9d5tPYy.mQrm', NULL, NULL, NULL, '2021-07-20'),
(2, 'Isaac', 'Kumi', 'kumi@gmail.com', '$2y$10$F4/sDN9UNr4a2dW51U0DC.okP4CXpPGcOTBI.A.yGA3khGKTDNZEe', NULL, NULL, NULL, '2021-07-20'),
(3, 'Urielle Barber', 'Joan Wilson', 'jymodav@mailinator.com', '$2y$10$iKUG0GvxBCn/e.pGrGi.euIHFGZGCAR41v/IRB4eVefI08Tk32o1e', NULL, NULL, NULL, '2021-07-20'),
(4, 'Nana', 'desmond', 'nana@gmail.com', '$2y$10$ulQh4tqVty6.ziIaXM98ZueFCL/WJB2anLjp0x.XMlf5tfHPSXCaK', NULL, NULL, NULL, '2021-07-20'),
(5, 'Adam', 'Goldsmith', 'adam@gmail.com', '$2y$10$Tom3VpP1DIgxPKCOAQciyOr/2evUsu9F7cDaJ76UUm54ZnWx0Qwkq', NULL, NULL, NULL, '2021-07-21'),
(6, 'Eva', 'Goldsmith', 'eva@gmail.com', '$2y$10$d0EUbU7fGebIWF1r5KYJLe3YbKXuFkTGU8.cxGy0zysvLM4I.uWiO', NULL, NULL, NULL, '2021-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_no` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES
(1, 14, 1956904336, '2020-11-30', 'paid'),
(2, 14, 1856006716, '2020-11-30', 'paid'),
(3, 14, 132400480, '2020-11-30', 'paid'),
(4, 14, 585914798, '2020-11-30', 'paid'),
(5, 14, 2042592145, '2020-11-30', 'paid'),
(6, 14, 1333392565, '2020-11-30', 'paid'),
(7, 14, 1982141494, '2020-12-15', 'paid'),
(8, 14, 1422823702, '2020-12-15', 'paid'),
(9, 14, 246129925, '2020-12-15', 'paid'),
(10, 14, 2103085250, '2020-12-15', 'paid'),
(11, 14, 1342326359, '2020-12-15', 'paid'),
(12, 14, 2005729903, '2020-12-15', 'paid'),
(13, 14, 210010059, '2020-12-15', 'paid'),
(14, 14, 1350527818, '2020-12-15', 'paid'),
(15, 14, 673336874, '2020-12-15', 'paid'),
(16, 14, 1832493798, '2020-12-15', 'paid'),
(17, 14, 1309909510, '2020-12-15', 'paid'),
(18, 14, 337705969, '2020-12-15', 'paid'),
(19, 14, 387807642, '2020-12-15', 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` int(11) NOT NULL,
  `amt` double NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `currency` text NOT NULL,
  `payment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_cat` varchar(200) NOT NULL,
  `product_brand` varchar(200) NOT NULL,
  `product_title` varchar(200) NOT NULL,
  `product_price` double NOT NULL,
  `product_desc` varchar(500) DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `product_keywords` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(55, 'Select The Product Category ^', 'Neat Foods', 'Egg', 20, 'Sexy Eggs', './images/uploads/ki5.jpg', NULL),
(56, 'Select The Product Category ^', 'Neat Foods', 'iphone X', 30, 'the besttttttttttt', './images/uploads/of15.png', NULL),
(57, 'Select The Product Category ^', 'Accessories', 'Pegs', 30, 'nice pegs', './images/uploads/ki8.jpg', NULL),
(58, 'Select The Product Category ^', 'Boutique', 'Picture', 90, 'Sexy pic', './images/uploads/of59.png', NULL),
(59, 'Select The Product Category ^', 'Hard Disk', 'Tummeric', 424, 'Nulla enim magnam es', './images/uploads/co1.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `p_id` (`p_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
