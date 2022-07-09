-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2022 at 09:41 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` char(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `postingdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `address`, `postingdate`) VALUES
(1, 'admin22', 'test9', 'admi888@1234.com', '09000999999', '1234/4567 มีสุข มีดี กรุงเทพ 1234576544', '2022-07-05 09:14:33'),
(2, 'monn', 'jedd', 'mon@jed.com', '123455667', '1233tgfadsjfdsdr', '2022-07-05 09:18:06'),
(3, 'Jedsada', 'Vongkhun', 'a@hotmail.com', '123467890', 'qwertkjhgfds', '2022-07-05 09:19:44'),
(4, 'Jedsada', 'Vongkhun', 'jedsada552@hotmail.com', '0987654321', '12341567890-=[poiuytrewsdfghjkl;lkjhgfd', '2022-07-05 09:22:19'),
(5, '21323r1', '123refrfwrgwrg', 'ewrwrte@fghj.com', '124567890', 'sertyul;lkjhgfdscvbnm', '2022-07-05 09:23:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
