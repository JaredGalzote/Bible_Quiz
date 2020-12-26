-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 04:58 PM
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
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `high_scores`
--

CREATE TABLE `high_scores` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `score` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `high_scores`
--

INSERT INTO `high_scores` (`id`, `name`, `score`, `created_at`) VALUES
(27, 'Jared Galzote', 80, '2020-12-25 18:02:22'),
(31, 'jared', 60, '2020-12-26 04:52:01'),
(32, 'jared', 110, '2020-12-26 15:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `coption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `question_number`, `is_correct`, `coption`) VALUES
(1, 1, 0, 'Land of Manasseh'),
(2, 1, 1, 'Land of Dan'),
(3, 1, 0, 'Land of Sid dim'),
(4, 1, 0, 'Land of Ephraim'),
(5, 2, 0, 'Because they hate each other'),
(6, 2, 0, 'Because Lot wants to live in Sodom'),
(7, 2, 1, 'Because Abrams and Lots herdsmen are fighting in the land'),
(8, 2, 0, 'None of the above'),
(9, 3, 0, 'Titans\r\n'),
(10, 3, 1, 'Giants\r\n'),
(11, 3, 0, 'Cyclops\r\n'),
(12, 3, 0, 'Golems'),
(15, 4, 0, '3 years each'),
(16, 4, 0, '5 years each'),
(17, 4, 0, '12 years each'),
(18, 4, 1, '7 years each'),
(19, 5, 0, 'Because they defile the daughters of Israel\r\n'),
(20, 5, 0, 'Because they curse the name of the Lord\r\n'),
(21, 5, 1, 'Because they attack the people of Israel\r\n'),
(22, 5, 0, 'Because they murmur against Moses'),
(23, 6, 0, 'Israelites whispers against him and rebellion against him\r\n'),
(24, 6, 1, 'Israelites creation of the ‘golden calf’ and worshiped it as ‘god’\r\n'),
(25, 6, 0, 'Israelites defiance against the Lord\r\n'),
(26, 6, 0, 'None of the above'),
(31, 7, 0, 'Leviticus '),
(32, 7, 0, 'Liveticus '),
(33, 7, 1, 'Revelations '),
(34, 7, 0, 'Gospel of John '),
(35, 8, 1, 'Genesis '),
(36, 8, 0, 'Exodus '),
(37, 8, 0, 'Gospel of Matthew '),
(38, 8, 0, ' Numbers '),
(39, 9, 1, 'Old Testament '),
(40, 9, 0, 'New Testament '),
(41, 9, 0, 'Neither '),
(42, 9, 0, 'Both '),
(43, 10, 0, 'Genesis '),
(44, 10, 1, 'Exodus '),
(45, 10, 0, 'Numbers '),
(46, 10, 0, 'Duetronomy '),
(47, 11, 0, 'Chapters '),
(48, 11, 1, 'Testaments '),
(49, 11, 0, 'Halves '),
(50, 11, 0, 'Diocese '),
(51, 12, 1, 'Old Testament '),
(52, 12, 0, 'New Testament '),
(53, 12, 0, 'Neither '),
(54, 12, 0, 'same '),
(55, 13, 0, 'Matthew '),
(56, 13, 0, 'Mark '),
(57, 13, 0, 'Luke  '),
(58, 13, 1, 'John '),
(59, 14, 0, 'Happy News '),
(60, 14, 1, 'Good News '),
(61, 14, 0, 'God\'s News '),
(62, 14, 0, 'bible'),
(63, 15, 0, '64'),
(64, 15, 0, '65'),
(65, 15, 1, '66'),
(66, 15, 0, '67');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `question_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `question_text`) VALUES
(1, 'In what land did Abram (Abraham) fought against the four kings?'),
(2, 'Why did Abram and Lot separate in the land between Bethel and Hai?'),
(3, 'What are the children of Son of God and daughters of men called?'),
(4, 'Why did the Lord sworn to have war Amalek and his nation, generation to generation, to utter destruction?'),
(5, 'What made Moses anger against the people of Israel after he came down of the mountain of Sinai?'),
(6, 'How many years did the Israelite dwell in Egypt before they left to the Promised Land?'),
(7, 'The last book of the Bible is '),
(8, 'The first book of the Bible is '),
(9, 'Would you find the Book of Psalms in the Old Testament or the New Testament '),
(10, 'The book that tells about the deliverance of the Hebrew people from slavery in Egypt is '),
(11, 'The Bible has two main sections called '),
(12, 'Which has more book, the Old Testament or the New Testament. '),
(13, 'The last Gospel to be written is the Gospel of '),
(14, 'What does the word Gospel mean? '),
(15, 'how books are there in the bible? ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `high_scores`
--
ALTER TABLE `high_scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `high_scores`
--
ALTER TABLE `high_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
