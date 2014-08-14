-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2014 at 11:33 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ftfl_mgt_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_courses`
--

CREATE TABLE IF NOT EXISTS `assign_courses` (
  `assign_courses_id` int(255) NOT NULL AUTO_INCREMENT,
  `students_id` int(255) NOT NULL,
  `courses_id` int(255) NOT NULL,
  `assign_courses_modified` datetime NOT NULL,
  PRIMARY KEY (`assign_courses_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `courses_id` int(255) NOT NULL AUTO_INCREMENT,
  `courses_code` varchar(255) NOT NULL,
  `courses_name` varchar(255) NOT NULL,
  `courses_modified` datetime NOT NULL,
  PRIMARY KEY (`courses_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `students_id` int(255) NOT NULL AUTO_INCREMENT,
  `students_name` varchar(255) NOT NULL,
  `students_email` varchar(255) NOT NULL,
  `students_modified` datetime NOT NULL,
  PRIMARY KEY (`students_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
