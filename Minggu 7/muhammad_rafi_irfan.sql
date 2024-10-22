-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2024 at 05:31 AM
-- Server version: 9.0.1
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muhammad_rafi_irfan`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `hobbies` varchar(255) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `birthDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `hobbies`, `gender`, `birthDate`) VALUES
(44, 'Ignatius Pruittt', 'xasy@mailinator.comm', 'menyanyi', 'male', '1990-07-18'),
(45, 'Cailin Velasquez', 'megobiw@mailinator.com', 'menyanyi, lari', 'male', '1972-06-08'),
(46, 'Drake Sharp', 'mibuce@mailinator.com', 'membaca, menyanyi, lari', 'female', '1975-05-02'),
(47, 'Idona Perez', 'deduzy@mailinator.com', 'lari', 'female', '2006-12-12'),
(48, 'Silas Henderson', 'bydorisew@mailinator.com', 'membaca, menyanyi', 'male', '1994-05-07'),
(49, 'Burton Bender', 'qucuwagy@mailinator.com', 'membaca, menyanyi, lari', 'female', '2022-04-30'),
(50, 'Lucy Duncan', 'jiguxudiqy@mailinator.com', 'lari', 'male', '2012-03-29'),
(51, 'Oleg Schultz', 'zasosyr@mailinator.com', 'menyanyi', 'female', '2005-05-25'),
(53, 'Keiko Deleon', 'jusagidyf@mailinator.com', 'menyanyi', 'male', '1992-02-25'),
(54, 'Kaseem Barker', 'zybic@mailinator.com', 'membaca, lari', 'male', '2000-02-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
