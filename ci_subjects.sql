-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 04, 2014 at 09:56 AM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_subjects`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `teacher_id` (`teacher_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_code`, `name`, `teacher_id`, `created`, `modified`) VALUES
(1, '01418443', 'Web Technology and Web Services', 2, '2014-01-02 16:16:36', '2014-01-09 07:16:49'),
(2, '01418111', 'Computer Applications', 3, '2014-01-03 06:50:37', '2014-01-07 07:16:09'),
(3, '01418451', 'Network Design and Administration', 3, '2014-01-13 22:35:00', '2014-01-13 22:35:00'),
(4, '01418451', 'Network Design and Administration', 3, '2014-01-13 22:35:00', '2014-01-13 22:35:00'),
(5, '01418215', 'Object Oriented Programming', 4, '2014-01-13 22:41:24', '2014-01-13 22:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `firstname`, `lastname`, `created`, `modified`) VALUES
(2, 'Sukumal', 'Kitisin', '2014-01-01 09:20:14', '2014-01-01 09:20:14'),
(3, 'Chawalit', 'Srisathapornpat', '2014-01-01 09:20:37', '2014-01-01 09:20:37'),
(4, 'Chuleerat', 'Jaruskulchai', '2014-01-13 00:00:00', '2014-01-13 00:00:00'),
(5, 'Preecha', 'Ngamsaowaros', '2014-01-13 00:00:00', '2014-01-13 00:00:00'),
(6, 'Somchoke', 'Rueng-ittinun', '2014-01-13 20:00:00', '2014-01-13 20:00:00'),
(7, 'Anongnart', 'Srivihok', '2014-01-13 20:01:01', '2014-01-13 20:01:01'),
(8, 'Umaporn', 'Sirathranont', '2014-01-13 20:02:00', '2014-01-13 20:02:00'),
(9, 'Chakrit', 'Watcharopas', '2014-01-13 20:03:14', '2014-01-13 20:03:14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
