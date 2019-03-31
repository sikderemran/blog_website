-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2019 at 07:32 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cat`
--

CREATE TABLE `tbl_cat` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cat`
--

INSERT INTO `tbl_cat` (`id`, `name`) VALUES
(1, 'pharmacy'),
(2, 'medicine');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id` int(10) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `image`) VALUES
(1, 'upload/logoNav.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `author`, `tags`, `date`) VALUES
(2, 1, 'medicine', '<p><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span></p>', 'emran', 'medicine', '2019-03-31 05:23:03'),
(3, 1, 'medicine and helth', '<p><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span></p>', 'emran sikder', 'medicine', '2019-03-31 05:23:45'),
(4, 2, 'medicine for helth', '<p><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span><span>Medicine is the field of health and healing. It includes nurses, doctors, and various specialists. It covers diagnosis, treatment, and prevention of disease, medical research, and many other aspects of health.</span></p>', 'emran sikder', 'medicine', '2019-03-31 05:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'admin2', '123'),
(3, 'admin3', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cat`
--
ALTER TABLE `tbl_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
