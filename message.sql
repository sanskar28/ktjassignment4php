-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 23, 2020 at 08:21 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `message`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(150) NOT NULL,
  `upvote` int(11) NOT NULL,
  `downvote` int(11) NOT NULL,
  `comment_user` varchar(30) NOT NULL,
  `topic` varchar(80) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `upvote`, `downvote`, `comment_user`, `topic`) VALUES
(1, 'a great Sport', 2, 1, 'sanskar_28', 'Football');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` tinyint(4) NOT NULL,
  `question` varchar(100) NOT NULL,
  `option1` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `option2` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `option3` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `option4` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `correct` tinyint(4) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct`) VALUES
(1, 'What is the Capital of India?', 'Mumbai', 'New Delhi', 'Kolkata', 'Ajmer', 2),
(2, 'Who is Jawahar Lal Nehru?', 'Father of Indra Gandhi', 'First PM of India', 'A Freedom Fighter', 'All Of These', 4),
(3, 'Who\'s the president of USA ?', 'Barack Obama', 'Donald Trump', 'Bill Gates', 'Elon Musk', 2),
(4, 'Why is Taj Mahal yellow?', 'It was built that way', 'Acid Rain', 'Modi ji ne kiya', 'None', 2),
(5, 'National Bird Of New zealand?', 'ostrich', 'crow', 'sparrow', 'kiwi', 4),
(6, 'Which of the following series stars Katherine Langford ?', '13 reasons why', 'cursed', 'both of the above', 'none of the above', 3),
(7, 'What\'s the worst season of Game of thrones according to imdb?', '7th', '8th', '1st', '4th', 2),
(8, 'Who\'s the captain of current Indian football team?', 'Virat Kohli', 'Sunil Chhetri', 'Jeje', 'Ms Dhoni', 2),
(9, 'Who directed \"Prestige\"?', 'Karan Johar', 'Nolan', 'Anurag Kashyap', 'Salman Bhai', 2),
(10, 'What is the normal body temperature?', '100 F', '98.6 F', '96.4 F', '92 F', 2),
(11, 'Which currency is used in Japan?', 'Yen', 'Dollar', 'Rupee', 'Pound', 1),
(12, 'Who won the second Battle of panipat?\r\n', 'Akbar', 'Babur', 'Himayun', 'Vikramaditya', 1),
(13, 'How many bits in a Byte?', '32', '16', '8', '4', 1),
(14, 'What was the day on which PM Modi announced demonetisation ?', '8 Nov', '8 Dec', '6 Nov', '8 Oct', 1),
(15, 'which celebrity was reported to have \'COVID19\' recently?', 'Virat Kohli', 'Abhishek Bachhan(If you think he is celebrity)', 'Amitabh Bachhan', 'None', 3),
(16, 'What\'s the full form of JEE?', 'Joint Entrance Examination', 'Joint Engineering Exam', 'Joint Entrance Engieering', 'Jam Entrance Examination', 1),
(17, 'What\'s better?', 'IIT', 'NIT', 'Manipal', 'BITS(isko click mat kardena site crash ho jayegi)', 1),
(18, 'Who invented Calculas?', 'Newton', 'Tesla', 'Edison', 'none of them', 4),
(19, 'What\'s the legal age to vote? ', '18', '21', '25', '12', 1),
(20, 'What fruit fall on newton?', 'Banana', 'Orange', 'Apple', 'Litchi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_name` varchar(80) NOT NULL,
  PRIMARY KEY (`topic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic_name`) VALUES
(1, 'Football'),
(2, 'Cricket');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `Score` int(11) NOT NULL DEFAULT '0',
  `current_ques` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `firstname`, `lastname`, `Score`, `current_ques`) VALUES
(8, 'ssmsdk', '1ad0d00c1ef18305b633cff9227c774e', 'ajay', 'sskd', 0, 1),
(10, 'kavya', 'e2fc714c4727ee9395f324cd2e7f331f', 'kavya ', 'patni', 0, 1),
(9, 'sans', '81dc9bdb52d04dc20036dbd8313ed055', 'Sanskar ', 'Patni', 50, 8),
(11, 'sanskar28', '202cb962ac59075b964b07152d234b70', 'Sanskar', 'Patni', 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
