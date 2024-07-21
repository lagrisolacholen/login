-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 11:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, '@Belljonson', '$2y$10$a.uplFAv9uhijhsVXd73nOXpEMh8kgPWwr2X.WBiQLp'),
(2, 'joyjonson', '$2y$10$J9tsvGroXsvnAbw5qGYJyukZxYEYy9rHjdkV0DYT5e5'),
(3, '@hailey', '$2y$10$xIrCN9OWw1LGVYzkDE2YbuXzVSFEQvrpzTZBqC7sRz6'),
(4, 'Julius Jonson', '$2y$10$lQBztZKDdRlNLajssFS4R.iuBqmmLZO5aWI3DxuyYjK'),
(6, 'joybeljonson7@gmail.com', '$2y$10$1UToJooMqfw1V9jmlfvuBe2oQ50ZCpmTG.fo7dL0y1HOyyMHkSdXS'),
(7, 'joybeljonson01@gmail.com', '$2y$10$.8kgp7ELrsPGwZhJuLE3PuqaTkYZ35b.5yNSwCIfcD4RFdpD4nwza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
