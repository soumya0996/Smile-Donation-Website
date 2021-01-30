-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
-- Host: localhost
-- Generation Time: Nov 19, 2019 at 09:13 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version:  7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `donator`
--

CREATE TABLE `donor` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` int(50) NOT NULL,
  `items` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donator`
--

-- INSERT INTO `donator` (`id`, `name`, `contact`, `items`, `address`) VALUES
-- (1, 'zxcnz', 3847293, 'xn zck.', 'scnal'),
-- (2, 'jsaa', 48750423, 'sdkfh', 'scjn.kn'),
-- (3, 'vve', 71854, 'n,vkv', 'hlkh'),
-- (4, 'puja', 960, 'jajg', 'axtlg'),
-- (5, 'neha', 92730972, 'kcn;dsncksd', 'munger'),
-- (6, 'neha', 384639, 'kdhvcsdv', 'munger'),
-- (7, 'neha', 9734927, 'zxcjblb', 'munger');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(255) NOT NULL,
  `orderId` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `item` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rec`
--

-- CREATE TABLE `rec` (
--   `id` int(255) NOT NULL,
--   `user` varchar(255) NOT NULL,
--   `contact` int(50) NOT NULL,
--   `items` varchar(255) NOT NULL,
--   `address` varchar(255) NOT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rec`
--

-- INSERT INTO `rec` (`id`, `user`, `contact`, `items`, `address`) VALUES
-- (1, 'bkvk', 57844, 'hckhck', 'knvk, ');

-- --------------------------------------------------------

--
-- Table structure for table `Registered Users`
--
CREATE TABLE registered (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR NOT NULL,
    email VARCHAR NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    );
ENGINE = InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE registered 
ADD PRIMARY KEY (id);

--
-- Dumping data for table `Registered Users`
--

INSERT INTO `registered` (`id`, `username`, `email`, `password`) VALUES
(1, 'Shivam', 'shivam@gmail.com', 'shivam27');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `donator`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rec`
--
-- ALTER TABLE `rec`
--   ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Registered Users`
--

ALTER TABLE `registered` ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donator`
--
ALTER TABLE `donor`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rec`
--
-- ALTER TABLE `rec`
--   MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Registered Users`
--
-- AUTO_INCREMENT(id)=1;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
