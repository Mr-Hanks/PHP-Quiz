-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 05:51 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tester`
--
CREATE DATABASE IF NOT EXISTS `tester` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tester`;

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `CID` int(11) NOT NULL,
  `QuestionNO` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `QText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`CID`, `QuestionNO`, `is_correct`, `QText`) VALUES
(1, 1, 1, 'PHP: Hypertext Preprocessor'),
(2, 1, 0, 'Private Home Page'),
(3, 1, 0, 'Personal Home Page'),
(4, 1, 0, 'Personal Hypertext Preprocessor'),
(5, 2, 0, '\"Hello World\";'),
(6, 2, 1, 'echo \"Hello World\";'),
(7, 2, 0, 'Document.Write(\"Hello World\");'),
(8, 2, 0, 'Hello World'),
(12, 3, 0, 'ASP'),
(13, 3, 0, 'Ruby'),
(14, 3, 1, 'PHP');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `QuestionNO` int(11) NOT NULL,
  `QText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`QuestionNO`, `QText`) VALUES
(1, 'What does PHP stand for?'),
(2, 'How do you write \"Hello World\" in PHP?'),
(3, 'What is the best server side language?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`CID`) USING BTREE;

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`QuestionNO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `CID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
