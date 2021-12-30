-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2021 at 06:26 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Scl`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `bangla_first` varchar(100) NOT NULL,
  `bangla_sec` varchar(100) NOT NULL,
  `english_first` varchar(255) NOT NULL,
  `english_sec` varchar(100) NOT NULL,
  `math` varchar(255) NOT NULL,
  `bngs` varchar(255) NOT NULL,
  `physics` varchar(255) NOT NULL,
  `chemistry` varchar(255) NOT NULL,
  `biology` varchar(255) NOT NULL,
  `ict` varchar(255) NOT NULL,
  `hmath` varchar(255) NOT NULL,
  `physical_edu` varchar(255) NOT NULL,
  `GPA` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `name`, `roll`, `class`, `bangla_first`, `bangla_sec`, `english_first`, `english_sec`, `math`, `bngs`, `physics`, `chemistry`, `biology`, `ict`, `hmath`, `physical_edu`, `GPA`) VALUES
(1, 'Mithun ', '399', '10', '90', '85', '90', '95', '100', '83', '81', '89', '97', '99', '89', '79', '5.00'),
(2, 'Juwel', '382', '9', '90', '90', '90', '90', '90', '90', '90', '90', '90', '90', '90', '90', '90'),
(3, 'Kazi Maruf', '397', '8', '85', '75', '66', '75', '60', '75', '', '', '', '85', '', '90', '4.50'),
(4, 'Sadnan', '130', '7', '90', '96', '95', '93', '99', '88', '', '', '', '90', '', '94', '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(3, 'Mithun', 'msovik399@gmail.com', 'db413d6fbb1d9d0ced3e178e8adbcd97'),
(4, 'mithun_ovik', 'msovik@gmail.com', 'c6f7058b2dd382eaebeec99b6924e38e'),
(5, 'mithun', 'msovik399@gmail.com', '10493aa88605cad5ab4752b04a63d172'),
(6, 'juwel', 'juwel@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'mithun_ovik', 'msovik399@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'mithun_ovik', 'msovik399@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'mithun', 'msovik399@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'ovik', 'mithun.sutradhar.1481', '289dff07669d7a23de0ef88d2f7129e7'),
(11, 'mithun_ovik', 'msovik399@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `user`, `email`, `mobile`, `comments`) VALUES
(1, 'mithun', 'ms@gmail.com', '555', '                   good'),
(2, 'Sadnan', 'sadnan@gmail.com', '018888', 'ei trimester fee koto?/                   ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
