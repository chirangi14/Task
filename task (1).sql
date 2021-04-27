-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Apr 27, 2021 at 08:33 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(10) NOT NULL,
  `stud_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mob_no` int(10) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `stud_name`, `email`, `mob_no`, `state`, `city`, `address`) VALUES
(6, 'Chirangi', 'cks@gmail.com', 2147483647, 'Gujarat', 'Surat', '111/113 shah ratilal tulsidas ghariwala opp, central bus stand, surat'),
(7, 'Juhi', 'juhi@gmail.com', 2147483647, 'Maharastra', 'Pune', '16,sonia house rambaug colony kothrud,pune'),
(8, 'Juhi', 'juhi@gmail.com', 2147483647, 'Maharastra', 'Pune', '16,sonia house rambaug colony kothrud,pune');

-- --------------------------------------------------------

--
-- Table structure for table `stud_state`
--

CREATE TABLE `stud_state` (
  `state` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_state`
--

INSERT INTO `stud_state` (`state`) VALUES
('Gujarat'),
('Maharastra');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`),
  ADD KEY `state` (`state`);

--
-- Indexes for table `stud_state`
--
ALTER TABLE `stud_state`
  ADD PRIMARY KEY (`state`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`state`) REFERENCES `stud_state` (`state`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
