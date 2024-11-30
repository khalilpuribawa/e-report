-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2024 at 07:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-report`
--

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title`, `slug`, `content`, `thumbnail`, `status`, `user_id`, `created_at`) VALUES
(1, 'afas', '', '&amp;lt;p&amp;gt;&amp;lt;strong&amp;gt;asfas&amp;lt;/strong&amp;gt;&amp;lt;/p&amp;gt;', '', 0, 0, '2024-11-03 14:26:18'),
(2, 'masalah', 'masalah', '&amp;lt;p&amp;gt;masalah&amp;lt;/p&amp;gt;', '67498b35433d2.jpg', 1, 9, '2024-11-29 09:36:53'),
(3, 'Masalah sampah Indonesia', 'masalah-sampah-indonesia', '&amp;lt;p&amp;gt;masih banyak sekali sampah kita temukan di sekitar negara indonesia&amp;lt;/p&amp;gt;', '6749d1eb178fe.jpg', 0, 9, '2024-11-29 14:38:35'),
(4, 'oiashdoahsd', 'oiashdoahsd', '&amp;lt;p&amp;gt;adspajspd&amp;lt;/p&amp;gt;', '6749d3f94a965.png', 0, 9, '2024-11-29 14:47:21'),
(5, 'puyeng bet dh', 'puyeng-bet-dh', '&amp;lt;p&amp;gt;dpiasd9asjca&amp;lt;/p&amp;gt;', '674a6c6f217e4.png', 0, 9, '2024-11-30 01:37:51'),
(6, 'Masalah baru', 'masalah-baru', '&amp;lt;p&amp;gt;masalah baru&amp;lt;/p&amp;gt;', '674a9234f3dc4.png', 0, 10, '2024-11-30 04:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'superadmin'),
(2, 'petugas'),
(3, 'masyarakat');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nik`, `name`, `phone_number`, `password`, `role_id`) VALUES
(6, 'masteradmin', '111111', 'Master Admin', '111111', '$2y$10$nqlRUtTc2kZj6Rxn/L08HOTs6qeYcd..5szjF5eKskOutpvjRlSu6', 1),
(8, 'petugas', '222222', 'Petugas', '222222', '$2y$10$6w6UfBZ4Y.idavfLe.OxIuT5ke1AWv4EWrirkbo8t6wCdYi1gf8oW', 2),
(9, 'masyarakat', '121212', 'masyarakat', '123123', '$2y$10$noFpy2DaimYDUWbLK1uE7uzLsnB7h2nATB.9lDgp7PqgyhMEbnkO6', 3),
(10, 'agus', '12342', 'Bpk. Agus', '08415220124', '$2y$10$KqqlCTJaFIqjLQz6d2d1nuVuXdZyDEFi7a9jDoa7JVNTBuybPcmvS', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
