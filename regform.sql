-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2023 at 08:50 AM
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
-- Database: `db2`
--

-- --------------------------------------------------------

--
-- Table structure for table `regform`
--

CREATE TABLE `regform` (
  `id` int(200) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regform`
--

INSERT INTO `regform` (`id`, `name`, `email`, `mobile`, `dob`, `gender`) VALUES
(1, 'Sruthi', 'sruthi@gmail.com', '879605432', '1997-06-19', 'Female'),
(2, 'Anjali Aravind', 'anjaliaravind@gmail.com', '8976092314', '2023-10-03', 'Female'),
(3, ' Aravind', 'aravind@gmail.com', '9876821342', '1994-10-17', 'Male'),
(4, ' Amrith', 'amr@gmail.com', '9876852314', '1992-11-17', 'Male'),
(5, 'Sheeja', 'shee@gmail.com', '9876852314', '2023-10-17', 'Female'),
(6, 'Akshay', 'akshyak@gmail.com', '8797807654', '1999-09-06', 'Male'),
(7, 'Athira', 'athu@gmail.com', '8796543219', '1998-05-25', 'Female'),
(8, 'Nithul', 'nithu@gmail.com', '9087654329', '2001-01-01', 'other'),
(9, 'Riya', 'ri@gmail.cpm', '8796543210', '2007-0-06', 'Other'),
(10, 'Dakshith', 'dk@gmail.com', '7567898760', '2011-02-22', 'Male'),
(11, 'Dakshith', 'dk@gmail.com', '7567898760', '2011-02-22', 'Male'),
(12, 'Malavika', 'malu@gmail.com', '8798765434', '2002-10-15', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regform`
--
ALTER TABLE `regform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regform`
--
ALTER TABLE `regform`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
