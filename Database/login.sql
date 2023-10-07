-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2023 at 08:06 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`name`, `price`, `description`, `image`) VALUES
('ADVANTAGE SHOES', 27000, 'These adidas tennis-inspired shoes combine a classic look with modern step-in comfort. Lace up in a soft yet snug fit that hugs your foot naturally. Step confidently with dependable traction on any surface. This product is made with Primegreen, a series of high-performance recycled materials. 50% of upper is recycled content. No virgin polyester.', 'img/ADVANTAGE.jpg'),
('MULTIX SHOES', 20100, 'Pulling off a casual look isn\'t easy. Luckily, all you have to do is lace up these adidas shoes and keep on moving. They have a soft and flexible mesh upper along with suede overlays for a textured look. Wear them for a walk around the neighbourhood, to meet friends for lunch or to casually go about your day. Made with a series of recycled materials, and at least 50% recycled content, this product represents just one of our solutions to help end plastic waste.', 'img/MULTIX.jpg'),
('PUREBOOST 22 SHOES\r\n', 32900, 'You don\'t have to run far to feel the benefits of training. Slip on these adidas shoes and you\'re only a few miles away from a good mood. They\'re designed for short runs, with a BOOST midsole that offers incredible energy return with every step and a Stretchweb outsole which flexes naturally for an energised ride.', 'img/PUREBOOST.jpg'),
('RACER TR21 SHOES', 21600, 'Bring the comfort and athletic style of running footwear to your everyday look in these adidas shoes. Step through your day confidently with a snug fit and a lightweight midsole that cushions your feet with every step. This product is made with Primegreen, a series of high-performance recycled materials. 50% of upper is recycled content. No virgin polyester.', 'img/RACER.jpg'),
('SAMBA OG SHOES', 40300, 'Born on the pitch, the Samba is a timeless icon of street style. This silhouette stays true to its legacy with a tasteful, low-profile, soft leather upper, suede overlays and gum sole, making it a staple in everyone\'s closet - on and off the pitch.', 'img/SAMBA.jpg'),
('ZX 2K BOOST 2.0 SHOES', 34800, 'The ZX line has always looked to the horizon — setting its sights beyond the known, to the next innovation in technology. That evolution never stopped, and today it looks like these adidas shoes. BOOST cushioning supplies endless energy to keep you comfortable on your feet, and the high-tech design keeps your style sharp.', 'img/ZX.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fname`, `lname`, `email`, `password`, `phone`, `type`) VALUES
('Januda', 'Bethmin', 'desilvabethmin@gmail.com', '202cb962ac59075b964b07152d234b70', 777772229, 'superadmin'),
('Vinuki', 'Hasithma', 'hasithmavinuki@gmail.com', '202cb962ac59075b964b07152d234b70', 777326409, 'user'),
('Vinumi', 'Senethma', 'senethmavinumi@gmail.com', '202cb962ac59075b964b07152d234b70', 777236409, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `phone` (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
