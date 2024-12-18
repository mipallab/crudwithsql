-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2024 at 09:20 PM
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
(1, 'Majadul Islam Pallab', 'pallab.drive4842@gmail.com', 'React Developer', 'Monohardi', 'user.jpg', 1, 1, '2024-12-01 14:07:38', NULL),
(2, 'Rahimul Islam Showrav', 'showrav@gmail.com', 'lavara', 'Dhaka', 'user.jpg', 0, 1, '2024-12-01 14:41:16', NULL),
(3, 'Rashedul Mahfuz Biplob', 'biplob@gmail.com', 'React Developer', 'Rampura Dhaka', 'user.jpg', 1, 1, '2024-12-01 14:52:18', NULL),
(4, 'Amdadul Haque', 'amdadul@gmail.com', 'Monohardi', 'Monohardi', 'user.jpg', 0, 1, '2024-12-01 15:16:43', NULL),
(5, 'Amdadul Haque', 'pallab.drive4842@gmail.com', 'Laravel', 'Rampura Dhaka', 'user.jpg', 1, 1, '2024-12-01 15:28:04', NULL),
(7, 'Amdadul Haque', 'biplob@gmail.com', 'Laravel', 'Rampura Dhaka', 'user.jpg', 1, 1, '2024-12-01 15:36:42', NULL),
(8, 'Ananto Roy', 'roy@gmail.com', 'Python', 'Monohardi', 'user.jpg', 0, 1, '2024-12-01 15:53:01', NULL),
(9, 'Amdadul Haque', 'pallab.drive4842@gmail.com', 'Laravel', 'Monohardi', 'user.jpg', 1, 1, '2024-12-01 15:53:33', NULL),
(10, 'Amdadul Haque', 'srayashe@gmail.comq', 'Laravel', 'Monohardi', 'user.jpg', 0, 1, '2024-12-01 15:59:57', NULL),
(11, 'Roushonara Begum ', 'begum@gmail.com', 'Django', 'Monohardi', 'user.jpg', 1, 1, '2024-12-02 13:43:18', NULL),
(12, 'হিতৈশি সাহা', 'pallab@gmail.com', 'সোসাল ওয়ার্ক', 'ঢাকা, বাংলাদেশ', 'user.jpg', 0, 1, '2024-12-02 16:50:42', NULL),
(14, 'Asraful Islam ', 'asraful@gmail.com', 'HIER', 'Narshingdi', 'user.jpg', 0, 1, '2024-12-06 16:38:59', NULL),
(16, 'মজিবুর রহমান', 'biplob@gmail.com', 'Laravel', 'Monohardi', 'user.jpg', 0, 1, '2024-12-08 18:20:30', NULL),
(23, 'Ananto Roy', 'srayashe@gmailcomq', 'Python', 'Narshingdi', '1734545025_967191112_6974830521.jpg', 1, 0, '2024-12-08 18:52:29', NULL),
(25, 'Amdadul Haque', 'pallab.drive4842@gmail.com', 'React Developer', 'Rampura Dhaka', '1733684182_336987886_3026798145.png', 1, 0, '2024-12-08 18:56:22', NULL),
(26, 'Majadul Islam Pallab', 'amdadul@gmail.com', 'React Developer', 'Rampura Dhaka', '1734532735_699357801_4390156287.jpg', 1, 0, '2024-12-10 13:30:03', NULL),
(27, 'Majadul Islam Pallab', 'pallab.drive4842@gmail.com', 'Laravel', 'Monohardi', '1734538662_2113544711_0769281345.png', 1, 0, '2024-12-10 13:50:20', NULL),
(28, 'Majadul Islam Pallab', 'pallab.drive4842@gmail.com', 'Monohardi', 'Rampura Dhaka', '1734538795_1401826357_7890154623.jpg', 1, 0, '2024-12-10 13:51:11', NULL),
(29, 'Asraful Islam', 'asrafulhaque@gmail.com', 'Python', 'Rampura Dhaka', '1734538771_1018943058_2854176930.jpg', 1, 0, '2024-12-10 13:53:59', NULL),
(30, 'Srayashe Shaha', 'srayashe@gmail.com', 'AI Development', 'Rampura Dhaka', '1734538720_1083034436_2356940187.jpg', 1, 0, '2024-12-10 13:55:07', NULL),
(31, 'Rashedul Mahfuz Biplob', 'pallab.drive4842@gmail.com', 'Laravel', 'Monohardi', '1733840071_219453434_2701486953.jpg', 1, 0, '2024-12-10 14:14:31', NULL),
(32, 'Majadul Islam Pallab', 'srayashe@gmailcomq', 'Python', 'Rampura Dhaka', '1733840744_197165888_0478216953.png', 1, 0, '2024-12-10 14:25:44', NULL),
(33, 'Amdadul Haque', 'srayashe@gmailcomq', 'Monohardi', 'Rampura Dhaka', '1733841010_899494297_7930541826.jpg', 1, 0, '2024-12-10 14:30:10', NULL),
(34, 'Ananto Roy', 'srayashe@gmailcomq', 'React Developer', 'Rampura Dhaka', '1733841075_1046527920_1708643295.jpg', 1, 0, '2024-12-10 14:31:15', NULL),
(35, 'Majadul Islam Pallab', 'srayashe@gmailcomq', 'AI Development', 'Rampura Dhaka', '1733841138_1939207618_6784913520.jpg', 1, 0, '2024-12-10 14:32:18', NULL),
(36, 'Amdadul Haque', 'srayashe@gmailcomq', 'AI Development', 'Rampura Dhaka', '1733841369_465136235_9520487613.jpg', 1, 0, '2024-12-10 14:36:09', NULL),
(37, 'Asraful Islam', 'srayashe@gmailcomq', 'AI Development', 'Rampura Dhaka', '1733841414_1176795926_5176493028.jpg', 0, 0, '2024-12-10 14:36:54', NULL),
(38, 'Rashedul Mahfuz Biplob', 'srayashe@gmail.comq', 'Laravel', 'Narshingdi', '1733841760_1272288466_3741295608.jpg', 0, 0, '2024-12-10 14:42:40', NULL),
(39, 'Rashedul Mahfuz Biplob', 'srayashe@gmail.comq', 'Laravel', 'Narshingdi', '1733841833_2075479180_1538246790.jpg', 1, 0, '2024-12-10 14:43:53', NULL),
(40, 'Asraful Islam', 'srayashe@gmailcomq', 'React Developer', 'Monohardi', '1733841943_368439030_9784120653.jpg', 0, 0, '2024-12-10 14:45:43', NULL),
(41, 'মজিবুর রহমান', 'srayashe@gmailcomq', 'Monohardi', 'Monohardi', '1733841979_411971500_7523948601.jpg', 1, 0, '2024-12-10 14:46:19', NULL),
(42, 'Majadul Islam Pallab', 'amdadul@gmail.com', 'Laravel', 'Monohardi', '1733842428_144955960_4590718326.jpg', 0, 0, '2024-12-10 14:53:48', NULL),
(45, 'Majadul Islam Pallab', 'amdadul@gmail.com', 'Laravel', 'Monohardi', '1734539106_150408546_6823950174.jpg', 1, 0, '2024-12-12 05:54:05', NULL),
(48, 'Majadul Islam Pallab', 'pallab@gmail.com', 'Laravel', 'Rampura Dhaka', '1734532701_1219729061_9612783405.png', 1, 0, '2024-12-17 03:30:24', NULL),
(50, 'Amdadul Haque', 'amdadul@gmail.com', 'ISO Developer', 'Monohardi', '1734532001_650851175_2643087159.jpg', 1, 0, '2024-12-17 05:02:12', NULL),
(52, 'Amdadul Haque', 'pallab.drive4842@gmail.com', 'React Developer', 'Monohardi', '1734539777_689329240_5703142968.jpg', 1, 0, '2024-12-18 16:36:17', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
