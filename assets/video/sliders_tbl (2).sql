-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 12:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modern_rugs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `sliders_tbl`
--

CREATE TABLE `sliders_tbl` (
  `id` int(11) NOT NULL,
  `title_name` varchar(222) NOT NULL,
  `description` varchar(5555) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `status` varchar(222) NOT NULL,
  `multimedia_type` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders_tbl`
--

INSERT INTO `sliders_tbl` (`id`, `title_name`, `description`, `photo`, `status`, `multimedia_type`, `date`) VALUES
(17, 'Home Is More Important Than Ever', '', 'Cover Page Room-2.webp', '1', '1', '2024-02-23 05:55:37'),
(18, 'Branding', 'NA', 'demo.mp4', '1', '2', '2024-07-31 07:48:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sliders_tbl`
--
ALTER TABLE `sliders_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sliders_tbl`
--
ALTER TABLE `sliders_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
