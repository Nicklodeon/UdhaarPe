-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2020 at 02:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UdhaarPe`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` text NOT NULL,
  `city` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `rent` int(10) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `city`, `name`, `rent`, `photo`) VALUES
(1, 'Books', 'Delhi', 'Origin', 100, 'origin.jpg'),
(2, 'Camera And Accessories', 'Delhi', 'DJI Mavic Pro', 5000, 'djimavicpro.jpg'),
(3, 'Camera And Accessories', 'Delhi', 'DJI Osmo', 800, 'djiosmo2.jpg'),
(4, 'Books', 'Delhi', 'Murder On The Orient Express', 100, 'murderontheorientexpress.jpg'),
(5, 'Camera And Accessories', 'Delhi', 'Nikon D3500', 3000, 'nikond3500.jpg'),
(6, 'Books', 'Delhi', 'Rich Dad Poor Dad', 100, 'richdadpoordad.jpg'),
(7, 'Camera And Accessories', 'Delhi', 'Sony a7riii', 10000, 'sonya7riii.jpg'),
(8, 'Books', 'Delhi', 'The alchemist', 100, 'thealchemist.jpg'),
(9, 'Furniture', 'Delhi', 'Office Chair', 500, 'chair.jpg'),
(10, 'Furniture', 'Delhi', 'Dining Table', 1000, 'diningtable.jpg'),
(11, 'Electronic Appliances', 'Delhi', 'LG Washing Machine', 1000, 'lgwashingmachine.jpg'),
(12, 'Electronic Appliances', 'Delhi', 'Samsung Refrigerator', 1000, 'samsungfridge.jpg'),
(13, 'Electronic Appliances', 'Delhi', 'Samsung microwave', 500, 'samsungmicrowave.jpg'),
(14, 'Furniture', 'Delhi', 'Sofa Set', 1000, 'sofa.jpg'),
(15, 'Electronic Appliances', 'Delhi', 'Sony Bravia', 500, 'sonybravia.jpg'),
(16, 'Furniture', 'Delhi', 'Recliner', 500, 'recliner.jpg'),
(17, 'Gaming', 'Delhi', 'Play Station 4', 400, 'ps4.jpg'),
(18, 'Gaming', 'Delhi', 'XBox One', 400, 'xboxone.jpg'),
(19, 'Gaming', 'Delhi', 'Controller', 100, 'extracontroller.jpg'),
(20, 'Sports Equipments', 'Delhi', 'Cricket Kit', 1000, 'cricketkit.jpg'),
(21, 'Gaming', 'Delhi', 'Game CDs', 500, 'gamecds.jpg'),
(22, 'Books', 'Mumbai', 'Origin', 100, 'origin.jpg'),
(23, 'Camera And Accessories', 'Mumbai', 'DJI Mavic Pro', 5000, 'djimavicpro.jpg'),
(24, 'Camera And Accessories', 'Mumbai', 'DJI Osmo', 800, 'djiosmo2.jpg'),
(25, 'Books', 'Mumbai', 'Murder On The Orient Express', 100, 'murderontheorientexpress.jpg'),
(26, 'Camera And Accessories', 'Mumbai', 'Nikon D3500', 3000, 'nikond3500.jpg'),
(27, 'Books', 'Mumbai', 'Rich Dad Poor Dad', 100, 'richdadpoordad.jpg'),
(28, 'Camera And Accessories', 'Mumbai', 'Sony a7riii', 10000, 'sonya7riii.jpg'),
(29, 'Books', 'Mumbai', 'The alchemist', 100, 'thealchemist.jpg'),
(30, 'Furniture', 'Mumbai', 'Office Chair', 500, 'chair.jpg'),
(31, 'Furniture', 'Mumbai', 'Dining Table', 1000, 'diningtable.jpg'),
(32, 'Electronic Appliances', 'Mumbai', 'LG Washing Machine', 1000, 'lgwashingmachine.jpg'),
(33, 'Electronic Appliances', 'Mumbai', 'Samsung Refrigerator', 1000, 'samsungfridge.jpg'),
(34, 'Electronic Appliances', 'Mumbai', 'Samsung microwave', 500, 'samsungmicrowave.jpg'),
(35, 'Furniture', 'Mumbai', 'Sofa Set', 1000, 'sofa.jpg'),
(36, 'Electronic Appliances', 'Mumbai', 'Sony Bravia', 500, 'sonybravia.jpg'),
(37, 'Furniture', 'Mumbai', 'Recliner', 500, 'recliner.jpg'),
(38, 'Gaming', 'Mumbai', 'Play Station 4', 400, 'ps4.jpg'),
(39, 'Gaming', 'Mumbai', 'XBox One', 400, 'xboxone.jpg'),
(40, 'Gaming', 'Mumbai', 'Controller', 100, 'extracontroller.jpg'),
(41, 'Sports Equipments', 'Mumbai', 'Cricket Kit', 1000, 'cricketkit.jpg'),
(42, 'Gaming', 'Mumbai', 'Game CDs', 500, 'gamecds.jpg'),
(43, 'Books', 'Kolkata', 'Origin', 100, 'origin.jpg'),
(44, 'Camera And Accessories', 'Kolkata', 'DJI Mavic Pro', 5000, 'djimavicpro.jpg'),
(45, 'Camera And Accessories', 'Kolkata', 'DJI Osmo', 800, 'djiosmo2.jpg'),
(46, 'Books', 'Kolkata', 'Murder On The Orient Express', 100, 'murderontheorientexpress.jpg'),
(47, 'Camera And Accessories', 'Kolkata', 'Nikon D3500', 3000, 'nikond3500.jpg'),
(48, 'Books', 'Kolkata', 'Rich Dad Poor Dad', 100, 'richdadpoordad.jpg'),
(49, 'Camera And Accessories', 'Kolkata', 'Sony a7riii', 10000, 'sonya7riii.jpg'),
(50, 'Books', 'Kolkata', 'The alchemist', 100, 'thealchemist.jpg'),
(51, 'Furniture', 'Kolkata', 'Office Chair', 500, 'chair.jpg'),
(52, 'Furniture', 'Kolkata', 'Dining Table', 1000, 'diningtable.jpg'),
(53, 'Electronic Appliances', 'Kolkata', 'LG Washing Machine', 1000, 'lgwashingmachine.jpg'),
(54, 'Electronic Appliances', 'Kolkata', 'Samsung Refrigerator', 1000, 'samsungfridge.jpg'),
(55, 'Electronic Appliances', 'Kolkata', 'Samsung microwave', 500, 'samsungmicrowave.jpg'),
(56, 'Furniture', 'Kolkata', 'Sofa Set', 1000, 'sofa.jpg'),
(57, 'Electronic Appliances', 'Kolkata', 'Sony Bravia', 500, 'sonybravia.jpg'),
(58, 'Furniture', 'Kolkata', 'Recliner', 500, 'recliner.jpg'),
(59, 'Gaming', 'Kolkata', 'Play Station 4', 400, 'ps4.jpg'),
(60, 'Gaming', 'Kolkata', 'XBox One', 400, 'xboxone.jpg'),
(61, 'Gaming', 'Kolkata', 'Controller', 100, 'extracontroller.jpg'),
(62, 'Sports Equipments', 'Kolkata', 'Cricket Kit', 1000, 'cricketkit.jpg'),
(63, 'Gaming', 'Kolkata', 'Game CDs', 500, 'gamecds.jpg'),
(64, 'Books', 'Chennai', 'Origin', 100, 'origin.jpg'),
(65, 'Camera And Accessories', 'Chennai', 'DJI Mavic Pro', 5000, 'djimavicpro.jpg'),
(66, 'Camera And Accessories', 'Chennai', 'DJI Osmo', 800, 'djiosmo2.jpg'),
(67, 'Books', 'Chennai', 'Murder On The Orient Express', 100, 'murderontheorientexpress.jpg'),
(68, 'Camera And Accessories', 'Chennai', 'Nikon D3500', 3000, 'nikond3500.jpg'),
(69, 'Books', 'Chennai', 'Rich Dad Poor Dad', 100, 'richdadpoordad.jpg'),
(70, 'Camera And Accessories', 'Chennai', 'Sony a7riii', 10000, 'sonya7riii.jpg'),
(71, 'Books', 'Chennai', 'The alchemist', 100, 'thealchemist.jpg'),
(72, 'Furniture', 'Chennai', 'Office Chair', 500, 'chair.jpg'),
(73, 'Furniture', 'Chennai', 'Dining Table', 1000, 'diningtable.jpg'),
(74, 'Electronic Appliances', 'Chennai', 'LG Washing Machine', 1000, 'lgwashingmachine.jpg'),
(75, 'Electronic Appliances', 'Chennai', 'Samsung Refrigerator', 1000, 'samsungfridge.jpg'),
(76, 'Electronic Appliances', 'Chennai', 'Samsung microwave', 500, 'samsungmicrowave.jpg'),
(77, 'Furniture', 'Chennai', 'Sofa Set', 1000, 'sofa.jpg'),
(78, 'Electronic Appliances', 'Chennai', 'Sony Bravia', 500, 'sonybravia.jpg'),
(79, 'Furniture', 'Chennai', 'Recliner', 500, 'recliner.jpg'),
(80, 'Gaming', 'Chennai', 'Play Station 4', 400, 'ps4.jpg'),
(81, 'Gaming', 'Chennai', 'XBox One', 400, 'xboxone.jpg'),
(82, 'Gaming', 'Chennai', 'Controller', 100, 'extracontroller.jpg'),
(83, 'Sports Equipments', 'Chennai', 'Cricket Kit', 1000, 'cricketkit.jpg'),
(84, 'Gaming', 'Chennai', 'Game CDs', 500, 'gamecds.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
