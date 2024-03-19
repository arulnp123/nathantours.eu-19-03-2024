-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 19, 2024 at 12:59 PM
-- Server version: 10.5.24-MariaDB
-- PHP Version: 8.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allindi_nathantours`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `phone` int(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `name`, `email`, `cemail`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'face', 'admin@gmail.com', 'admin@gmail.com', 2147483647, 'hvgbv', '2023-05-08 15:22:04.000000', '2023-05-08 15:22:04.000000'),
(2, 'face2', 'fgadminfg@gmail.com', 'fgadminfg@gmail.com', 2147483647, 'ghjhggjg', '2023-05-08 15:33:46.000000', '2023-05-08 15:33:46.000000'),
(3, 'face2', 'fgadminfg@gmail.com', 'fgadminfg@gmail.com', 2147483647, 'fdxgdgdfdf hgh ', '2023-05-08 15:34:41.000000', '2023-05-08 15:34:41.000000'),
(4, 'Saranya', 'saran@gmail.com', 'saran@gmail.com', 1234567890, 'fwaerfw', '2023-05-08 16:27:46.000000', '2023-05-08 16:27:46.000000'),
(5, 'Dummy', 'adminjobk@gmail.com', 'adminjobk@gmail.com', 2147483647, 'asd', '2023-05-08 16:32:39.000000', '2023-05-08 16:32:39.000000'),
(6, 'Dummy', 'adminjobking@gmail.com', 'adminjobking@gmail.com', 2147483647, 'dfg', '2023-05-08 17:01:11.000000', '2023-05-08 17:01:11.000000'),
(7, 'ram', 'ram@gmail.com', 'ram@gmail.com', 2147483647, 'This is ram testing', '2023-05-09 17:38:45.000000', '2023-05-09 17:38:45.000000');

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touch`
--

CREATE TABLE `get_in_touch` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `confirm_email` varchar(100) NOT NULL,
  `phone` int(30) NOT NULL,
  `message` varchar(500) NOT NULL,
  `created_at` datetime(6) NOT NULL,
  `updated_at` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `get_in_touch`
--

INSERT INTO `get_in_touch` (`id`, `name`, `email`, `confirm_email`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(1, 'felin', 'admin@gmail.com', 'admin@gmail.com', 2147483647, 'dfgfh', '2023-05-08 16:59:45.000000', '2023-05-08 16:59:45.000000'),
(2, 'reverse', 'reverse@gmail.com', 'reverse@gmail.com', 2147483647, 'ghgjhghjj', '2023-05-08 17:00:44.000000', '2023-05-08 17:00:44.000000'),
(3, 'Saranya', 'saran@gmail.com', 'saran@gmail.com', 2147483647, 'tgrdgtd', '2023-05-08 17:07:29.000000', '2023-05-08 17:07:29.000000'),
(4, '', '', '', 0, '', '2023-05-08 17:07:33.000000', '2023-05-08 17:07:33.000000');

-- --------------------------------------------------------

--
-- Table structure for table `hot_tours`
--

CREATE TABLE `hot_tours` (
  `id` int(200) NOT NULL,
  `Trip_ID` int(200) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `packages_name` varchar(50) DEFAULT NULL,
  `packages_description` varchar(500) DEFAULT NULL,
  `price` int(50) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hot_tours`
--

INSERT INTO `hot_tours` (`id`, `Trip_ID`, `status`, `packages_name`, `packages_description`, `price`, `photo`) VALUES
(16, 1, 'Active', 'Swizerland + blackforest', 'One day trip to Swizerland + blackforest Starts from', 45, '16.jpg'),
(17, 2, 'Active', 'Paris + disney land', 'One day trip to Paris + disney land Starts from', 55, '17.jpg'),
(18, 3, 'Active', 'Austria', 'One day trip to Austria Starts from', 55, '18.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hot_tours_booking`
--

CREATE TABLE `hot_tours_booking` (
  `id` int(200) NOT NULL,
  `packages_name` varchar(200) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `confirm_email` varchar(80) DEFAULT NULL,
  `select_date` varchar(50) DEFAULT NULL,
  `no_of_days` int(30) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `adult_over_12` int(50) DEFAULT NULL,
  `kid_4_to_12_years` int(50) DEFAULT NULL,
  `kid_below_4` int(50) DEFAULT NULL,
  `message` varchar(500) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hot_tours_booking`
--

INSERT INTO `hot_tours_booking` (`id`, `packages_name`, `price`, `name`, `email`, `confirm_email`, `select_date`, `no_of_days`, `phone`, `adult_over_12`, `kid_4_to_12_years`, `kid_below_4`, `message`, `created_at`) VALUES
(1, 'Austria\r\n', '20', 'face', 'admin@gmail.com', 'admin@gmail.com', '2023-05-17', 4, '55422223658', 12, 14, 0, 'dfdfg', '2023-05-08 16:49:56.000000'),
(2, 'Austria\r\n', '20', 'Saranya', 'saran@gmail.com', 'saran@gmail.com', '2023-05-10', 7, '2346789457', 15, 8, 2, 'safwae', '2023-05-08 16:50:43.000000'),
(3, 'Swizerland + blackforest', '45', 'restaurant', 'god@gmail.com', 'god@gmail.com', '2023-09-30', 5, '55422223658', 14, 15, 15, 'frwwgtwre', '2023-09-29 10:42:00.000000'),
(4, 'Paris + disney land', '55', 'felin', 'admin@gmail.com', 'admin@gmail.com', NULL, 3, '0759816555', 2, 4, 7, 'zdvxdg', '2023-10-02 11:54:57.000000'),
(5, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', NULL, 3, '0759816555', 13, 13, 12, 'zcczc', '2023-10-02 12:01:41.000000'),
(6, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-10-12', 3, '0759816555', 13, 13, 12, 'zcczc', '2023-10-02 12:03:28.000000'),
(7, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-10-12', 3, '0759816555', 13, 13, 12, 'zcczc', '2023-10-02 12:04:25.000000'),
(8, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-10-12', 3, '0759816555', 13, 13, 12, 'zcczc', '2023-10-02 12:06:22.000000'),
(9, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-10-12', 3, '0759816555', 13, 13, 12, 'zcczc', '2023-10-02 12:07:23.000000'),
(10, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-10-12', 6, '0759816555', 13, 15, 15, 'sfdgd', '2023-10-02 12:12:19.000000'),
(11, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', NULL, 6, '0759816555', 13, 15, 15, 'sfdgd', '2023-10-02 12:13:04.000000'),
(12, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', NULL, 6, '0759816555', 13, 15, 15, 'sfdgd', '2023-10-02 12:13:42.000000'),
(13, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', NULL, 6, '0759816555', 13, 15, 15, 'sfdgd', '2023-10-02 12:15:30.000000'),
(14, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', NULL, 6, '0759816555', 13, 15, 15, 'sfdgd', '2023-10-02 12:17:42.000000'),
(15, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-10-12', 1, '0759816555', 14, 15, 17, 'dfdg', '2023-10-02 12:18:36.000000');

-- --------------------------------------------------------

--
-- Table structure for table `populartours_dates`
--

CREATE TABLE `populartours_dates` (
  `id` int(20) NOT NULL,
  `tour_id` int(10) DEFAULT NULL,
  `tour_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `populartours_dates`
--

INSERT INTO `populartours_dates` (`id`, `tour_id`, `tour_date`) VALUES
(4, 24, '2023-10-24'),
(5, 24, '2023-10-11'),
(6, 24, '2023-10-15'),
(146, 23, '2023-10-03'),
(151, 31, '2023-10-01'),
(152, 30, '2023-10-03'),
(154, 25, '2023-10-31'),
(155, 29, '2023-10-18');

-- --------------------------------------------------------

--
-- Table structure for table `popular_tours`
--

CREATE TABLE `popular_tours` (
  `id` int(11) NOT NULL,
  `Trip_ID` varchar(200) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `packages_name` varchar(200) DEFAULT NULL,
  `packages_description` varchar(500) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `popular_tours`
--

INSERT INTO `popular_tours` (`id`, `Trip_ID`, `status`, `packages_name`, `packages_description`, `price`, `photo`) VALUES
(23, '4565', 'Active', 'Amsterdam + zaanse schans', 'One day trip to Amsterdam + zaanse schans Starts from', '30', '23.jpg'),
(24, '45654', 'Active', 'Giethroon', 'One day trip to Giethroon  Starts from', '55', '24.jpg'),
(25, '456556', 'Active', 'Paris', 'One day trip to Paris Starts from', '565', '25.jpg'),
(29, 'ass', NULL, 'sas', 'asas', '112313213', '29.'),
(30, 'aa', NULL, 'aaa', 'aa', '22', NULL),
(31, 'aa', NULL, 'aaa', 'aa', '22', '31.docx');

-- --------------------------------------------------------

--
-- Table structure for table `popular_tours_booking`
--

CREATE TABLE `popular_tours_booking` (
  `id` int(11) NOT NULL,
  `packages_name` varchar(200) DEFAULT NULL,
  `price` varchar(200) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `confirm_email` varchar(50) DEFAULT NULL,
  `select_date` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `adult_over_12` int(2) DEFAULT NULL,
  `kid_4_to_12_years` int(2) DEFAULT NULL,
  `kid_below_4` int(2) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular_tours_booking`
--

INSERT INTO `popular_tours_booking` (`id`, `packages_name`, `price`, `name`, `email`, `confirm_email`, `select_date`, `phone`, `adult_over_12`, `kid_4_to_12_years`, `kid_below_4`, `message`, `created_at`) VALUES
(1, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-28', '55422223658', 4, 8, 8, 'trtrtrtrt', '2023-09-29 10:39:16.000000'),
(2, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-28', '0759816555', 14, 12, 15, 'dvgdfh', '2023-09-29 11:32:03.000000'),
(3, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-28', '0759816555', 13, 10, 13, 'fvgdfgfdg', '2023-09-29 11:35:26.000000'),
(4, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-28', '0759816555', 13, 10, 13, 'fvgdfgfdg', '2023-09-29 11:37:45.000000'),
(5, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-01', '55422223658', 12, 14, 14, 'scsfs', '2023-09-30 15:11:38.000000'),
(6, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-01', '55422223658', 12, 14, 14, 'scsfs', '2023-09-30 15:14:54.000000'),
(7, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-01', '0759816555', 14, 13, 15, 'xcssdfdg', '2023-09-30 16:24:26.000000'),
(8, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-01', '55422223658', 12, 14, 13, 'cfbfhcfh', '2023-09-30 18:23:51.000000'),
(9, 'london', '30', 'restaurant', 'admin@gmail.com', 'admin@gmail.com', '2023-09-28', '55422223658', 7, 5, 6, 'cvbcncn', '2023-09-30 18:28:44.000000'),
(10, 'london', '30', 'restaurant', 'admin@gmail.com', 'admin@gmail.com', '2023-09-01', '07598165404', 12, 16, 12, 'hjbhkghk', '2023-09-30 18:30:28.000000'),
(11, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-28', '075981654047896', 15, 14, 16, 'xcxcxc', '2023-09-30 18:31:57.000000'),
(12, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-01', '0759816555', 6, 6, 7, 'ghvjghj', '2023-09-30 18:33:20.000000'),
(13, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-01', '55422223658', 15, 15, 13, 'fbdfghdfh', '2023-09-30 18:37:46.000000'),
(14, 'Swizerland + blackforest', '45', 'restaurant', 'admin@gmail.com', 'admin@gmail.com', NULL, '0759816555', 13, 15, 12, 'gdfdfhdg', '2023-09-30 18:44:01.000000'),
(15, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-01', '55422223658', 12, 13, 15, 'sfgdfhdgh', '2023-10-02 11:23:18.000000'),
(16, 'Swizerland + blackforest', '45', 'admin@32gmail.com', 'admin@32gmail.com', 'admin@32gmail.com', NULL, '5334343434', 14, 14, 12, 'cvbcvbvbb', '2023-10-02 11:24:36.000000'),
(17, 'Swizerland + blackforest', '45', 'restaurant', 'god@gmail.com', 'god@gmail.com', NULL, '55422223658', 14, 13, 10, 'dfbcghgh', '2023-10-02 11:39:28.000000'),
(18, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', NULL, '55422223658', 13, 13, 12, 'xbxvxdv', '2023-10-02 11:41:39.000000'),
(19, 'Swizerland + blackforest', '45', 'felin', 'admin@gmail.com', 'admin@gmail.com', NULL, '55422223658', 4, 6, 8, 'cvbxvcb', '2023-10-02 11:43:20.000000'),
(20, 'Paris + disney land', '55', 'felin', 'admin@gmail.com', 'admin@gmail.com', NULL, '55422223658', 16, 12, 16, 'cvbcgn', '2023-10-02 11:49:15.000000'),
(21, 'Paris + disney land', '55', 'felin', 'admin@gmail.com', 'admin@gmail.com', NULL, '55422223658', 11, 12, 9, 'zxz', '2023-10-02 11:51:35.000000'),
(22, 'london', '30', 'felin', 'admin@gmail.com', 'admin@gmail.com', '2023-09-01', '55422223658', 4, 6, 5, 'vvbnvb', '2023-10-02 11:56:59.000000'),
(23, 'london', '30', 'restaurant', 'god@gmail.com', 'god@gmail.com', '2023-09-28', '55422223658', 15, 13, 8, 'xcdgg', '2023-10-02 11:59:36.000000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` int(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `gender`, `image`, `city`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'superadmin@gmail.com', '$2y$10$gMKkB0s2IF/iUDcIhThk9esA0QKrU/g3/yQqv4lOtqN/trTrhjOwq', NULL, NULL, NULL, 'nagercoil', '2023-04-13 01:38:27', '2023-04-13 01:38:27'),
(2, 'School1', 'admin@gmail.com', '$2y$10$a2prhHQO0pkVhJtV..JWMu1XpVFZ8de0rbHYiA9ooWydz4T4NX5EW', NULL, NULL, NULL, NULL, '2023-04-13 01:57:04', '2023-04-13 01:57:04'),
(3, 'School 2', 'admin1@gmail.com', '$2y$10$5FKqkcf9OSiBT2TFFvda.umNtKjVCy1twojSd7IPdrQmx1cBTkEvK', NULL, NULL, NULL, NULL, '2023-04-13 04:35:10', '2023-04-13 04:35:10'),
(4, 'School 3', 'admin2@gmail.com', '$2y$10$ElTt0rSh5lqa7UjthLANsOrudw8I8y9TtwDBSG4sUKaMJfNuzPf2S', NULL, NULL, NULL, NULL, '2023-04-13 04:35:47', '2023-04-13 04:35:47'),
(14, 'Jino', '1@gmail.com', '$2y$10$m5oDZDyKXJnZ5HvC9Yl/F.3YZxwg4xPn1kYipip8bCKkX0m2mkpNe', 2147483647, 'Male', NULL, NULL, '2023-04-17 01:54:51', '2023-04-17 02:14:40'),
(15, 'Sanjay', 'jino04652@gmail.com', '$2y$10$EcemhhZ8BKgzos6ltHWOH.c6j0UewlMwuUC65Ohz7.43C9wQEXOMq', 2147483647, 'Male', NULL, NULL, '2023-04-17 01:55:22', '2023-04-25 00:01:09'),
(16, 'Michael', 'admin@gmail.com2323', '$2y$10$yh8QJmBKny3OPxxKB5sccetAW6oNSjx/z17pSzOYCiH6QuqJnvOlS', 2147483647, 'Male', NULL, NULL, '2023-04-25 01:49:15', NULL),
(18, 'felinsdsd', 'admindfdgf@gmail.com', '12345678', NULL, 'Male', NULL, 'nagercoilf', NULL, NULL),
(19, 'raja', 'raja@gmail.com', '454545', NULL, 'Male', NULL, 'london', NULL, NULL),
(20, 'felins', 'fsss@gmail.com', '12345678', 655461328, 'Male', NULL, 'kerala', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `usertype_name` varchar(20) DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `usertype_name`, `status`) VALUES
(1, 'Superadmin', 1),
(2, 'Admin', 1),
(3, 'Staff', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_tours`
--
ALTER TABLE `hot_tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hot_tours_booking`
--
ALTER TABLE `hot_tours_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `populartours_dates`
--
ALTER TABLE `populartours_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_tours`
--
ALTER TABLE `popular_tours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_tours_booking`
--
ALTER TABLE `popular_tours_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hot_tours`
--
ALTER TABLE `hot_tours`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hot_tours_booking`
--
ALTER TABLE `hot_tours_booking`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `populartours_dates`
--
ALTER TABLE `populartours_dates`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `popular_tours`
--
ALTER TABLE `popular_tours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `popular_tours_booking`
--
ALTER TABLE `popular_tours_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
