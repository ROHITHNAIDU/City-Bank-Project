-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 10:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `accountnumber` int(50) NOT NULL,
  `balance` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `accountnumber`, `balance`) VALUES
(1, 'Rohith', 'rohith@gmail.com', 12310011, 40900),
(2, 'Balaji', 'balaji@gmail.com', 12310012, 30100),
(3, 'Suresh', 'suresh@gmail.com', 12310013, 13300),
(4, 'James', 'james@gmail.com', 12310014, 20200),
(5, 'Robert', 'robert@gmail.com', 12310015, 34800),
(6, 'Seema', 'semma@gmail.com', 12310016, 44900),
(7, 'Smitha', 'smitha@gmail.com', 12310017, 25200),
(8, 'Amar', 'amar@gmail.com', 12310018, 59400),
(9, 'Ganesh', 'ganesh@gmail.com', 12310019, 97350),
(10, 'Kiran', 'kiran@gmail.com', 12310020, 73850);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `slno` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`slno`, `sender`, `receiver`, `amount`, `date`) VALUES
(1, 'Ganesh', 'Suresh', 250, '2021-01-09 14:26:19'),
(2, 'Rohith', 'Balaji', 100, '2021-01-09 14:38:17'),
(3, 'Rohith', 'Suresh', 100, '2021-01-10 07:22:02'),
(4, 'Ganesh', 'Suresh', 100, '2021-01-10 07:45:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
