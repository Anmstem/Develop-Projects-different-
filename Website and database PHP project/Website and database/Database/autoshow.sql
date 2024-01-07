-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2021 at 05:03 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoshow`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL COMMENT 'Car image',
  `brand` varchar(30) NOT NULL COMMENT 'Car brand',
  `model` varchar(30) NOT NULL COMMENT 'Car model',
  `release_date` varchar(10) NOT NULL COMMENT 'Release date',
  `engine_type` varchar(20) NOT NULL COMMENT 'Engine type',
  `transmission_type` varchar(20) NOT NULL COMMENT 'Transmission type',
  `drive_unit` varchar(20) NOT NULL COMMENT 'Drive unit',
  `mileage` mediumint(9) NOT NULL COMMENT 'Mileage',
  `price` int(11) NOT NULL COMMENT 'Price'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `image`, `brand`, `model`, `release_date`, `engine_type`, `transmission_type`, `drive_unit`, `mileage`, `price`) VALUES
(1, 'https://cdnimg.rg.ru/img/content/155/89/32/2_121_d_850.jpg', 'епкпр', 'керкер', '345345', 'керкр', 'керкр', 'керкр', 3535, 345346),
(4, 'https://s0.rbk.ru/v6_top_pics/media/img/4/99/756002734042994.jpg', 'MD', '222', '10.10.2021', 'Gas', 'automatic', 'RWD', 10, 100000),
(5, 'https://cdnimg.rg.ru/img/content/166/86/12/1_80b26bb0_d_850.jpg', 'ertet', 'erytert', 'ertet', 'etet', 'eertet', 'ertetet', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `subject` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `first_name`, `last_name`, `email`, `country`, `subject`) VALUES
(1, 'tutyu', 'tyurtyu', 'turtu', 'trurtu', 'turtutrughtr'),
(2, '5ty4ry', '54y4ey', 'fghrdth', 'rdthrdth', 'rdthrsthdrh');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_name` varchar(100) NOT NULL COMMENT 'News name',
  `news_description` text NOT NULL COMMENT 'News description',
  `news_image` varchar(100) NOT NULL COMMENT 'News image',
  `news_date` date DEFAULT current_timestamp(),
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_name`, `news_description`, `news_image`, `news_date`, `author`) VALUES
(1, 'ergergg', 'ergegegeg', 'https://s0.rbk.ru/v6_top_pics/media/img/0/68/755843616505680.jpg', '0000-00-00', 0),
(2, 'rthrh', 'rthrthrtrhd', 'https://autoreview.ru/images/Article/1719/Article_171981_860_575.jpg', '2021-12-17', 0),
(3, 'yuiygi', 'yguiogyuiog', '', '2021-12-17', 0),
(4, 'yuiygi', 'yguiogyuiog', '', '2021-12-17', 0),
(5, 'yuiygi', 'yguiogyuiog', '', '2021-12-17', 0),
(6, 'yuiygi', 'yguiogyuiog', '', '2021-12-17', 0),
(7, '5utyu5u', '7ur6urtru\r\nturturtu', 'https://autoreview.ru/images/Article/1719/Article_171981_860_575.jpg', '2021-12-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `rank_id` int(11) NOT NULL,
  `rank_name` varchar(20) NOT NULL COMMENT 'Rank name'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`rank_id`, `rank_name`) VALUES
(1, 'Simple User'),
(2, 'Manager'),
(3, 'Director');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL COMMENT 'Your username',
  `first_name` varchar(20) NOT NULL COMMENT 'First Name',
  `last_name` varchar(20) NOT NULL COMMENT 'Last Name',
  `email` varchar(50) NOT NULL COMMENT 'Your email',
  `phone_number` int(11) DEFAULT NULL COMMENT 'Your phone number',
  `password` varchar(32) NOT NULL COMMENT 'Your password',
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `rank` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user`, `first_name`, `last_name`, `email`, `phone_number`, `password`, `reg_date`, `rank`) VALUES
(1, 'Anmstem', 'Denis', 'Garaschuk', 'denisgaraschuk@gmail.com', 0, '7890e7b80c45e851d4076e0a2095513d', '2021-12-16 19:35:15', 3),
(2, 'Director', 'Artur', 'King', 'eoigrigri@gmail.com', 0, '512068287c5672eefd30013191fa5c4d', '2021-12-16 20:04:01', 3),
(3, 'Manager', 'Raze', 'Akil', 'tnekjtg@gmail.com', 2147483647, 'e81333711168191156185fe07e518269', '2021-12-16 20:04:54', 2),
(4, 'SimpUser', 'Darla', 'Mikky', 'gnregrug@gmail.com', 2147483647, '8f7e0f7e89689e5b2f1eac63bd8ce418', '2021-12-16 20:05:42', 1),
(5, 'iouio', 'uiouyio', 'uioyuo', 'yuoiuio', 789769, 'a7f699519e0a389a7d369abbdcd76c9f', '2021-12-17 00:03:07', 1),
(6, 'erghr', 'hrhrh', 'tyjtj', 'tyjtjt', 0, 'd584b93dde1d7cf316820aa796d3151a', '2021-12-17 13:43:57', 1),
(7, 'etetge', 'ertgestr', 'ertest', 'ertet', 0, '3346d90948cecd942cc149f299c45b10', '2021-12-17 17:28:55', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`rank_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `rank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
