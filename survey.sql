-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2014 at 07:57 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `survey`
--
CREATE DATABASE IF NOT EXISTS `survey` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `survey`;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_question` int(11) NOT NULL,
  `is_other` int(11) NOT NULL DEFAULT '1',
  `answer` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `id_question`, `is_other`, `answer`) VALUES
(1, 1, 1, 'Education: K-12'),
(2, 1, 1, 'Education: College'),
(3, 1, 0, 'Education:University'),
(4, 1, 0, 'Government'),
(5, 1, 1, 'Other'),
(6, 2, 1, 'AAAA'),
(7, 2, 1, 'BBB'),
(8, 3, 1, 'test 1'),
(9, 3, 1, 'test2'),
(10, 4, 1, 'test 21'),
(11, 4, 1, 'tes42');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text NOT NULL,
  `multichoice` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `multichoice`) VALUES
(1, 'Where do you work and/or study?', 1),
(2, 'what do you do? (what is your occupation?)', 1),
(3, 'What type of computer are you using', 1),
(4, ' abc.....', 0);

-- --------------------------------------------------------

--
-- Table structure for table `surveys`
--

CREATE TABLE IF NOT EXISTS `surveys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titile` text NOT NULL,
  `isDisabled` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `surveys`
--

INSERT INTO `surveys` (`id`, `titile`, `isDisabled`) VALUES
(1, 'survey 1.....', 0),
(2, 'survey 2 ........', 0);

-- --------------------------------------------------------

--
-- Table structure for table `survey_questions`
--

CREATE TABLE IF NOT EXISTS `survey_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_survey` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `next_question` int(11) NOT NULL DEFAULT '0',
  `is_begin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `survey_questions`
--

INSERT INTO `survey_questions` (`id`, `id_survey`, `id_question`, `next_question`, `is_begin`) VALUES
(1, 1, 1, 2, 1),
(2, 1, 2, 3, 0),
(3, 1, 3, 4, 0),
(4, 1, 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_answers`
--

CREATE TABLE IF NOT EXISTS `user_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_survey` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `answer` text NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
