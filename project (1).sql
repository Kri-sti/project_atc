-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2020 at 08:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(61) NOT NULL,
  `author` varchar(65) NOT NULL,
  `publisher` varchar(60) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `page_no` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `publisher`, `year`, `page_no`, `created_at`) VALUES
(10, 'eqrtger', 'terte', 'try11', 2021, NULL, '2020-09-17 07:04:34'),
(11, 'Tomka dhe shoket', 'Tomka', 'Tomka shpk', 0000, NULL, '2020-09-17 07:22:51'),
(12, 'Tomka dhe shoket 2', 'Tomka Jr', 'Tomka shpk', 0000, NULL, '2020-09-17 07:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `produced` varchar(32) NOT NULL,
  `directed` varchar(30) NOT NULL,
  `year` smallint(4) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `produced`, `directed`, `year`, `create_at`) VALUES
(3, 'Tomka dhe shoket', 'zxcv', 'asdf', 2020, '2020-09-18 06:35:55'),
(4, 'wesf', 'dsffdg', 'gfhgj', 1999, '2020-09-18 06:51:15'),
(8, 'Tomka dhe shoket', 'dsffdg', 'gfhgj', 2000, '2020-09-18 07:03:36'),
(10, 'Tomka dhe shoket', 'dsffdg', 'gfhgj', 1234, '2020-09-21 06:10:01'),
(11, 'Tomka dhe shoket', 'dsffdg', 'gfhgj', 1234, '2020-09-18 07:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `user-at`
--

CREATE TABLE `user-at` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user-at`
--

INSERT INTO `user-at` (`id`, `name`, `lastname`, `email`, `password`, `created_at`) VALUES
(1, 'wasdeqw', 'ewrwer', 'exp@live.com', '$2y$10$42U30M.i0dwC4zHA5sxHyeaUqmwofPYGwq2oYVU8xjP', '2020-09-04 07:31:50'),
(2, 'mikelli', 'cimit', 'mikucimit@live.com', '$2y$10$/9D2D4IlLstJkVaiUoMRRe2OJSfCQ0CF5mgZ2yKm2hU', '2020-09-07 06:51:27'),
(3, 'cimi', 'ing', 'cimka@gmail.com', '$2y$10$4AGs5s47mCsH.2oXhrUDkuHbpMk7uwtwievrpdSMXDW', '2020-09-07 07:17:40'),
(5, 'cimi', 'ing', 'cimka@hotmail.com', '$2y$10$bT2k5G60vW3AB6hTovOTeeAVn3pnfdg38iQ9bTLc3kW', '2020-09-07 07:18:57'),
(8, 'eqwqwe', 'qweeqw', 'exp1@live.com', '$2y$10$79Lgm/q5inOMpAOKtqZSj.x9YZ8aFF3pJw79kHMs/HAwa6qpA.FWa', '2020-09-09 06:21:12'),
(9, 'rimi', 'bosi', 'rb@gmail.com', '$2y$10$1ZmYVFaDkj5HgJBeYoxEJeZGVDq.W8uBwzIaRTPWdi8uedWwY8jE6', '2020-09-09 07:11:53'),
(10, 'cimi', 'cimit', 'cim@gmail.com', '$2y$10$7n/SAn6zsOJ5Eo61CmxzyufCDmju/2fYNksfhrRw2EsOiOFXPOqVC', '2020-09-18 07:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `create_at`) VALUES
(1, 'wasdeqw', 'ewrwer', 'ex@live.com', '$2y$10$CTn4G.73WFplentVhYH0cu2JS3xSD0we0vSXV6mO2H1uV7.6twb9C', '2020-09-21 06:08:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-at`
--
ALTER TABLE `user-at`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user-at`
--
ALTER TABLE `user-at`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
