-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2023 at 02:36 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

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
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Pizza', 2000),
(2, 'Pasta', 1500),
(3, 'Avacado Toast', 1000),
(4, 'Sushi', 2000),
(5, 'Acai bowls', 1500),
(6, 'Laksa', 1000),
(7, 'Tacos', 1000),
(8, 'Burger', 1800),
(9, 'Fries', 500),
(10, 'Cofee', 300),
(11, 'Matcha Latte', 500),
(12, 'Kombucha', 2000),
(13, 'Smoothies', 1300),
(14, 'Fruit Infused water', 900),
(15, 'Coconut water', 300),
(16, 'Tea', 100),
(17, 'Vegitable Juice', 300),
(18, 'Sparkling water', 200),
(19, 'Milk', 100),
(20, 'Margarita', 400);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Nimal', 'nimal99@gmail.com', '57f231b1ec41dc6641270cb09a56f897', '0774759501', 'Panadura', 'no 9 ,Hirana,panadura'),
(2, 'Kamal', 'kamal19@gmail.com', '57f231b1ec41dc6641270cb09a56f897', '0774759502', 'Horana', 'no 8,Midellamulla,horana'),
(3, 'Amal', 'Amal1@gmail.com', '57f231b1ec41dc6641270cb09a56f897', '0774759503', 'Kottawa', 'no 11,Hokandara,kottawa'),
(4, 'Muditha', '66@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '0774759500', 'Homagama', 'no 6,Diyagama,homagama');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`item_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 3, 3, 'Added to cart'),
(23, 4, 7, 'Confirmed'),
(24, 4, 10, 'Confirmed'),
(28, 4, 6, 'Added to cart'),
(29, 4, 4, 'Added to cart'),
(30, 4, 16, 'Added to cart'),
(31, 1, 2, 'Added to cart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
