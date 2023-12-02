-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 12:50 PM
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
-- Database: `impulse101`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyerregistration`
--

CREATE TABLE `buyerregistration` (
  `buyer_id` int(255) NOT NULL,
  `buyer_name` varchar(30) NOT NULL,
  `buyer_phone` bigint(10) NOT NULL,
  `buyer_addr` text NOT NULL,
  `buyer_comp` varchar(100) NOT NULL,
  `buyer_license` varchar(100) NOT NULL,
  `buyer_bank` int(16) NOT NULL,
  `buyer_pan` varchar(10) NOT NULL,
  `buyer_mail` varchar(20) NOT NULL,
  `buyer_username` varchar(20) NOT NULL,
  `buyer_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `buyerregistration`
--

INSERT INTO `buyerregistration` (`buyer_id`, `buyer_name`, `buyer_phone`, `buyer_addr`, `buyer_comp`, `buyer_license`, `buyer_bank`, `buyer_pan`, `buyer_mail`, `buyer_username`, `buyer_password`) VALUES
(15, 'Esther', 2348036767890, ' Lagos', 'Esther Shops', '02082000', 2147483647, '1234567890', 'wow123@gmail.com', 'admin', 'm8bf5+Y='),
(16, 'Ronke', 2348032367890, 'Osun', 'Mafia Pvt Ltd', '99', 12345, '987', 'abcd@gmail.com', 'redhawk', 'm9HW6O8B'),
(17, 'Joy', 2348036767888, 'Ekiti', 'Joy to the world org', 'w3566908', 8947, '2436467897', 'rose21@gmail.com', 'melissa', 'nM7d+e0b41E='),
(18, 'Lateefat', 2348036767887, 'Abeokuta', '', 'wahala', 0, '1234567890', 'latee13@gmail.com', 'lateefat', 'yw=='),
(19, 'Abike', 2348036767812, 'Katsina', 'Esther Shops', 'wahala', 2147483647, '1234567890', 'abi@gmail.com', 'abiba', 'y5CB'),
(20, 'Tobiloba', 2348036763456, 'Gombe', 'Come company', 'just get off', 1, '1', 'xyz@domain.com', '501807', 'yw=='),
(21, 'David Akin', 2348000000000, 'Somewhere', 'AgroMart', '', 162407836, '', 'davaki123@gmail.com', 'davaki', 'isPB/f8GowU=');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(255) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `qty` int(10) NOT NULL DEFAULT 1,
  `subtotal` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `phonenumber`, `qty`, `subtotal`) VALUES
(32, 2348036767890, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Cattle'),
(2, 'Goat'),
(3, 'Chicken'),
(4, 'Pig'),
(5, 'Fish');

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE `consumer` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `consumer`
--

INSERT INTO `consumer` (`id`, `name`, `email`, `pincode`, `password`, `address`, `phone`) VALUES
(5, 'food123', 'babalola421@gmail', '421202', 'yw==', 'm', '2348036767'),
(6, 'hello world', 'hello@world.com', '421202', 'yw==', 'world', '2348087976'),
(7, 'Timothy Esther', 'timmesstt@gmail.com', '400705', 'm8bf5+Y=', 'Test', '2348112367'),
(8, 'int main', 'intmain@g.com', '400705', 'yw==', '704, One Plot, Niger Delta, Nigeria', '2348135567');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `password` varchar(10) NOT NULL,
  `clinicName` varchar(15) NOT NULL,
  `clinicAddress` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `startTime` varchar(8) NOT NULL,
  `endTime` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `email`, `pincode`, `password`, `clinicName`, `clinicAddress`, `phone`, `startTime`, `endTime`) VALUES
(4, 'sigh', 'teem145@gmail.com', '421202', 'yw==', 'xyz', 'xyz', '2348128071', '10:00', '12:00'),
(5, 'God abeg', 'abegmain1221@gmail.c', '421202', 'yw==', 'xyz', 'xyz', '2348169619', '10:00', '12:30'),
(6, 'excelsior', 'excelsior@dd.com', '421205', 'yw==', '1', '1', '2349023152', '10:00', '01:00');

-- --------------------------------------------------------

--
-- Table structure for table `farmerregistration`
--

CREATE TABLE `farmerregistration` (
  `farmer_id` int(255) NOT NULL,
  `farmer_name` varchar(255) NOT NULL,
  `farmer_phone` bigint(10) NOT NULL,
  `farmer_address` text NOT NULL,
  `farmer_state` varchar(50) NOT NULL,
  `farmer_district` varchar(50) NOT NULL,
  `farmer_pan` varchar(10) NOT NULL,
  `farmer_bank` int(16) NOT NULL,
  `farmer_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `farmerregistration`
--

INSERT INTO `farmerregistration` (`farmer_id`, `farmer_name`, `farmer_phone`, `farmer_address`, `farmer_state`, `farmer_district`, `farmer_pan`, `farmer_bank`, `farmer_password`) VALUES
(1, 'Akinwole', 2348022222222, 'Mars', 'Lagos', 'Mushin', '1234567890', 2147483647, 'apass'),
(3, 'Akin', 2348169193102, 'Olumo Rock', 'Ogun', 'Sagamu', '123ABC', 45745425, 'nMPb4g=='),
(4, 'David', 2348169193103, 'Moon', 'Katsina', 'Somewhere', '123ABC', 211324654, 'm8bf5+Y='),
(5, 'Mosope', 2348169193104, 'Olumo Rock', 'Ogun', 'Abeokuta', '1325355', 45745425, 'yw=='),
(6, 'Seun', 2348169193105, 'Address 1', 'Plateau', 'Someplace', '1234567899', 2147483647, 'yw=='),
(7, 'Uchenna', 2348169193106, 'Address 2', 'Plateau', 'Someplace', '5341874510', 2147483647, 'yw=='),
(8, 'Wisdom', 2348169193107, 'Address 3', 'Plateau', 'Someplace', '6846516843', 2147483647, 'yw=='),
(9, 'Obongyar', 2348169193108, 'add1', 'Gombe', 'Chamba', '3263062', 56878613, 'yw=='),
(10, 'Dave', 2348169193109, 'add2', 'Jigawa', 'Kalu', '2983473057', 2147483647, 'yw=='),
(93, 'Sophie James', 2348100000000, 'Somewhere', 'LAGOS', '', '', 82407846, 'nNfR5b1f');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `delivery` varchar(10) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `total` int(10) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `buyer_phonenumber` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `qty`, `address`, `delivery`, `phonenumber`, `total`, `payment`, `buyer_phonenumber`) VALUES
(55, 23, 1, ' E bin Pa Mi', 'Buyer', 234816919311, 56, 'cod', 2348036767890),
(56, 28, 1, ' Hunger111', 'Buyer', 234816919311, 45, 'cod', 2348036767890),
(57, 31, 1, 'I am Hungry', 'Buyer', 234816919311, 25, 'cod', 2348036767890),
(58, 3, 2, ' Omo mo fe ki', 'Farmer', 234816919311, 10, 'paytm', 2348036767890),
(60, 32, 1, 'Working', 'Buyer', 234816919311, 10, 'cod', 2348036767890),
(61, 24, 2, 'Somewhere', 'Farmer', 2348169193101, 202, 'paytm', 2348000000000),
(62, 28, 2, 'Somewhere', 'Farmer', 2348169193101, 90, 'paytm', 2348000000000),
(63, 27, 1, 'Somewhere', 'Farmer', 2348169193102, 200, 'paytm', 2348000000000),
(64, 17, 1, 'Somewhere', 'Farmer', 2348169193105, 30, 'cod', 2348000000000),
(65, 21, 2, 'Somewhere', 'Farmer', 2348169193101, 1400, 'cod', 2348000000000),
(66, 31, 2, 'Somewhere', 'Farmer', 2348169193101, 5000, 'cod', 2348000000000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `farmer_fk` int(255) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_cat` varchar(100) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_expiry` varchar(25) NOT NULL,
  `product_image` text NOT NULL,
  `product_stock` int(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_delivery` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `farmer_fk`, `product_title`, `product_cat`, `product_type`, `product_expiry`, `product_image`, `product_stock`, `product_price`, `product_desc`, `product_keywords`, `product_delivery`) VALUES
(1, 10, 'Beef', '1', 'Beef', '2023-12-19', 'Beef.jpg', 1000, 3200, 'Best Quality product guaranteed 100 percent', 'beef', 'yes'),
(3, 1, 'Milk', '1', 'Milk', '2023-12-15', 'Milk.jpg', 500, 300, 'Best Quality and fresh milk', 'milk , best quality milk , milk', 'no'),
(17, 6, 'Cow Hide', '1', 'Cow Hide', '2023-12-15', 'Hide.jpg', 250, 30, 'Best Quality Hide', 'ponmo, leather, hide, cow hide', 'yes'),
(18, 3, 'Cow Dung (Manure)', '1', 'Cow Dung (Manure)', '2023-12-25', 'Manure.jpg', 1500, 100, 'Manure for fertilizer', 'best manure', 'yes'),
(19, 5, 'Goat meat', '2', 'Goat meat', '2024-03-03', 'chevon.jpg', 1250, 3500, 'Big fat juicy best quality goat meat assured', 'meat, asun, goat meat', 'yes'),
(21, 1, 'Goat milk', '2', 'Goat milk', '2023-12-15', 'Milk.jpg', 750, 700, 'milked with love', 'goat milk, milk, goat', 'yes'),
(22, 3, 'Goat Fiber (Cashmere)', '2', 'Goat Fiber (Cashmere)', '2029-12-15', 'Cashmere.jpg', 450, 10000, 'Better than others, best quality, strong fibre', 'cashmere, best cashmere, fiber, goat fiber', 'no'),
(23, 9, 'Chicken Meat', '3', 'Chicken Meat', '2023-12-15', 'Chicken.jpg', 4560, 2600, 'Fat, high quality and organic chickens', 'chicken, raw chicken, chicken meat', 'yes'),
(24, 3, 'Eggs', '3', 'Eggs', '2023-12-15', 'Egg.jpg', 1500, 145, 'Big eggs', 'eggs, fresh eggs, fresh, chicken, chicken eggs, egg', 'no'),
(25, 5, ' Chicken Feathers', '3', ' Chicken Feathers', '2023-12-15', 'Feathers.jpg', 2000, 80, 'feathers!!!', 'feather, chicken, chicken feather', 'no'),
(27, 3, 'Chicken Feet', '3', 'Chicken Feet', '2023-12-15', 'Feet.jpg', 2000, 200, 'Fresh and skinny, chicken feet', 'feet, chicken feet, fresh', 'yes'),
(28, 7, 'Pork', '4', 'Pork', '2023-12-15', 'Pork.jpg', 500, 3000, 'Juicy pork', 'pig, pig meat, pork, pork meat, bacon', 'yes'),
(29, 5, 'Lard (Rendered pig fat)', '4', 'Lard (Rendered pig fat)', '2023-12-15', 'Lard.jpg', 1500, 50, 'Best Quality Lard', 'lard, best lard, fat, best fat, pig fat', 'yes'),
(30, 3, 'Pig Dung (Manure)', '4', 'Pig Dung (Manure)', '2023-12-15', 'Manure.jpg', 1500, 65, 'Healthy Shit!!', 'pig, pig dung, manure', 'no'),
(31, 1, 'Fresh Fish', '5', 'Fresh Fish', '2023-12-15', 'fish.jpg', 100, 2500, 'Freshest Fishes in Nigeria', 'fish, raw fish, fresh fish', 'yes'),
(32, 8, 'Dried Fish', '5', 'Dried Fish', '2026-12-19', 'driedfish.jpg', 1500, 1000, 'Dried  with love in Kano', 'fish, dried fish, dry, fish, dried', 'yes'),
(37, 1, 'Roe (Fish eggs)', '5', 'Roe (Fish eggs)', '2023-12-15', 'Roe.jpg', 1000, 500, 'Healthy and Viable Fish eggs', 'fish eggs, roe, fish, eggs', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `shopkeeper`
--

CREATE TABLE `shopkeeper` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pincode` varchar(6) NOT NULL,
  `password` varchar(10) NOT NULL,
  `shopName` varchar(20) NOT NULL,
  `shopAddress` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `startTime` varchar(8) NOT NULL,
  `endTime` varchar(8) NOT NULL,
  `slotInterval` int(11) NOT NULL,
  `slotUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `shopkeeper`
--

INSERT INTO `shopkeeper` (`id`, `name`, `email`, `pincode`, `password`, `shopName`, `shopAddress`, `phone`, `startTime`, `endTime`, `slotInterval`, `slotUser`) VALUES
(1, 'dami123', 'damilola123@gmail.co', '421202', 'yw==', 'Dami Farms', 'Ilishan Remo, Ogun State', '2348128071', '10:30', '12:30', 30, 5),
(3, 'nifemi123', 'nifemi123@gmail.com', '400705', 'yw==', 'Love Farm', 'Egbeda, Lagos State', '2348176878', '10:30', '11:30', 30, 7),
(4, 'morayo123', 'morayo123@gmail.com', '421200', 'yw==', 'Morayo Farms', 'Ilupeju, Lagos State', '2348069674', '10:00', '12:30', 60, 5),
(5, 'shelby123', 'shelby123@gmail.com', '400705', 'm8bf5+Y=', 'Shelby Farms', 'Rose Villa, Abuja State', '2348023456', '12:00', '22:00', 30, 5),
(6, 'emma123', 'emmanuel123@gmail.co', '400705', 'yw==', 'Emmanuel\"s Farm', 'Olumo Rock, Abeokuta, Ogun State', '2348023152', '10:30', '17:00', 30, 5),
(7, 'demi123', 'demilade123@gmail.co', '123456', 'm8bf5+Y=', 'Demilade Farms', 'Plot 1A, Babcock University, Ogun State', '2348134567', '10:00', '14:00', 30, 5);

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `slot_id` int(255) NOT NULL,
  `shop_id` int(255) NOT NULL,
  `slot` varchar(10) NOT NULL,
  `vacancy` int(255) NOT NULL,
  `date` varchar(12) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `passcode` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`slot_id`, `shop_id`, `slot`, `vacancy`, `date`, `phonenumber`, `passcode`) VALUES
(37, 6, '12:0', 5, '05/05/2023', 1234567890, 82047),
(38, 6, '12:0', 5, '13/10/2023', 1234567890, 95127),
(39, 6, '10:30', 5, '21/11/2023', 1234567890, 40661),
(40, 6, '12:0', 5, '07/09/2023', 1234567890, 27560),
(41, 6, '10:30', 5, '22/07/2023', 1234567890, 67549);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyerregistration`
--
ALTER TABLE `buyerregistration`
  ADD PRIMARY KEY (`buyer_id`),
  ADD UNIQUE KEY `buyer_username` (`buyer_username`),
  ADD UNIQUE KEY `buyer_phone` (`buyer_phone`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `consumer`
--
ALTER TABLE `consumer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
  ADD UNIQUE KEY `farmer_id` (`farmer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `phonenumber` (`phonenumber`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `farmer_fk` (`farmer_fk`);

--
-- Indexes for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`slot_id`),
  ADD UNIQUE KEY `passcode` (`passcode`),
  ADD KEY `slot_ibfk_1` (`shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyerregistration`
--
ALTER TABLE `buyerregistration`
  MODIFY `buyer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `consumer`
--
ALTER TABLE `consumer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `farmerregistration`
--
ALTER TABLE `farmerregistration`
  MODIFY `farmer_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `shopkeeper`
--
ALTER TABLE `shopkeeper`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `slot_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `slot`
--
ALTER TABLE `slot`
  ADD CONSTRAINT `slot_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shopkeeper` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
