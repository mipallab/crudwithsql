-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 01:41 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `devs`
--

CREATE TABLE `devs` (
  `id` int(11) NOT NULL,
  `dev_name` varchar(225) NOT NULL,
  `dev_email` varchar(225) NOT NULL,
  `Skill` varchar(20) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL DEFAULT 'user.jpg',
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devs`
--

INSERT INTO `devs` (`id`, `dev_name`, `dev_email`, `Skill`, `Location`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(29, 'Asraful Islam', 'asrafulhaque@gmail.com', 'Python', 'Rampura Dhaka', '1734538771_1018943058_2854176930.jpg', 0, 0, '2024-12-10 13:53:59', NULL),
(52, 'Amdadul Haque', 'pallab.drive4842@gmail.com', 'React Developer', 'Monohardi', '1734539777_689329240_5703142968.jpg', 0, 0, '2024-12-18 16:36:17', NULL),
(57, 'Sharif Uddin Bhuiya', 'sarif@gmail.com', 'React Developer', 'Dhaka', '1734611753_1625460096_2076895314.jpg', 1, 0, '2024-12-19 12:34:39', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devs`
--
ALTER TABLE `devs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devs`
--
ALTER TABLE `devs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
