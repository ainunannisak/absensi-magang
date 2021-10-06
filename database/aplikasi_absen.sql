-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 07:44 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_absen`
--

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id_positions` int(11) NOT NULL,
  `position_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id_positions`, `position_name`) VALUES
(1, 'Siswa'),
(2, 'Mahasiswa');

-- --------------------------------------------------------

--
-- Table structure for table `presents`
--

CREATE TABLE `presents` (
  `id_presents` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `information` char(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presents`
--

INSERT INTO `presents` (`id_presents`, `user_id`, `date`, `time`, `information`, `status`) VALUES
(24, 'ayi.jayz13@gmail.com', '2021-10-01', '04:28:39', 'M', 0),
(25, 'ayi.jayz13@gmail.com', '2021-10-02', '06:02:26', 'I', 0),
(26, 'ayi.jayz13@gmail.com', '2021-10-02', '06:02:38', 'S', 0),
(27, 'ayi.jayz13@gmail.com', '2021-10-02', '12:04:47', 'M', 0),
(28, 'tamara@gmail.com', '2021-10-02', '13:04:42', 'S', 0),
(29, 'tamara@gmail.com', '2021-10-04', '13:16:01', 'S', 0),
(30, 'tamara@gmail.com', '2021-10-04', '13:17:45', 'M', 0),
(31, 'tamara@gmail.com', '2021-10-04', '13:18:28', 'I', 0);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_roles` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_roles`, `name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_users` int(11) NOT NULL,
  `name` varchar(18) NOT NULL,
  `asal` text NOT NULL,
  `durasi` int(11) NOT NULL,
  `jurusan` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(1) NOT NULL,
  `position_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_users`, `name`, `asal`, `durasi`, `jurusan`, `email`, `image`, `password`, `role_id`, `position_id`, `date_created`, `is_active`) VALUES
(1, 'Admin', 'Universitas Hasanuddin', 0, '', 'admin@gmail.com', NULL, '$2y$10$LaOTTUKAlVJ2g9SJ9yyauOcy4GMIMc8iHLP4DTEm8oQSVrQTraRQe', 1, 0, 1632482497, 1),
(2, 'Ainun Annisa K', 'Universitas Hasanuddin', 3, '', 'ayi.jayz13@gmail.com', '24330f9090192eae4800610b8a616bc8.jpg', '$2y$10$hk5nmRxOjRGrXC2eO1GUg.zZ6W0HsVIL1o6ueo1C/LiIR7Qd/LAha', 2, 2, 1632482515, 1),
(5, 'Tamara', 'Universitas Hasanuddin', 1, '', 'tamara@gmail.com', 'ae614b04055b0c9eda19bd5e5b86fe2c.jpg', '$2y$10$o9T2CJtUecYC8hROCnpj0.cG6wilyK8e6IYauk7Dhx.1W.oNqtEA2', 2, 1, 1633434690, 1),
(10, 'tes', 'SMA', 1, '', 'tes@gmail.com', 'e2b8c10720ac9b5b5ba99381601e689a.jpg', '$2y$10$t/J9bwrCA7cGYx1saDvm5eYct8LtzuaI5y17kgAd8I5R2KoxCMrKq', 2, 1, 1633439598, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id_positions`);

--
-- Indexes for table `presents`
--
ALTER TABLE `presents`
  ADD PRIMARY KEY (`id_presents`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_roles`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id_positions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `presents`
--
ALTER TABLE `presents`
  MODIFY `id_presents` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
