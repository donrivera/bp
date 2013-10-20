-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2013 at 11:39 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blue_phoenix`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `paddler_id` int(7) NOT NULL,
  `encoded_by` int(7) NOT NULL,
  `date_encoded` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `balances`
--

CREATE TABLE IF NOT EXISTS `balances` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `paddler_id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `balances`
--

INSERT INTO `balances` (`id`, `paddler_id`, `amount`, `date`) VALUES
(1, 1, 630, '2013-08-17');

-- --------------------------------------------------------

--
-- Table structure for table `civil_code`
--

CREATE TABLE IF NOT EXISTS `civil_code` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `civil_code`
--

INSERT INTO `civil_code` (`id`, `code`, `description`) VALUES
(1, 'SNG', 'Single'),
(2, 'OPN', 'Open'),
(3, 'IAR', 'In A Relationship'),
(4, 'ICM', 'It''s Complicated'),
(5, 'MRD', 'Married');

-- --------------------------------------------------------

--
-- Table structure for table `dues`
--

CREATE TABLE IF NOT EXISTS `dues` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `paddler_id` int(7) NOT NULL,
  `due_date` date NOT NULL,
  `amount` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dues`
--

INSERT INTO `dues` (`id`, `paddler_id`, `due_date`, `amount`) VALUES
(1, 1, '2013-09-01', 150),
(2, 1, '2013-10-01', 150);

-- --------------------------------------------------------

--
-- Table structure for table `gender_code`
--

CREATE TABLE IF NOT EXISTS `gender_code` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `gender_code`
--

INSERT INTO `gender_code` (`id`, `code`, `description`) VALUES
(1, 'M', 'Male'),
(2, 'F', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `paddlers`
--

CREATE TABLE IF NOT EXISTS `paddlers` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `tel_no` varchar(100) NOT NULL,
  `blood_type` varchar(10) NOT NULL,
  `address` longtext NOT NULL,
  `registration_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `paddler_type` varchar(100) NOT NULL,
  `civil_status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `paddlers`
--

INSERT INTO `paddlers` (`id`, `fname`, `lname`, `gender`, `tel_no`, `blood_type`, `address`, `registration_date`, `status`, `paddler_type`, `civil_status`) VALUES
(1, 'Don', 'Par', 'M', '1234567', 'A', 'Pandacan Manila', '2013-10-01', 'ACT', 'BOW', 'IAR'),
(2, 'don', 'rivera', 'M', '09084198702', 'A', 'Pandacan, Manila', '0000-00-00', 'ACT', 'BOW', 'IAR'),
(3, 'Don1', 'Rivera', 'F', '1234567', 'B', '1234567', '0000-00-00', 'IACT', 'STR', 'MRD'),
(4, 'don', 'rivera', 'M', '09084198702', 'A', '', '0000-00-00', 'ACT', 'BOW', 'SNG'),
(5, 'Rey', 'Munoz', 'M', '1234567', 'N', 'Manila', '0000-00-00', 'ACT', 'STK', 'ICM');

-- --------------------------------------------------------

--
-- Table structure for table `paddler_code`
--

CREATE TABLE IF NOT EXISTS `paddler_code` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `paddler_code`
--

INSERT INTO `paddler_code` (`id`, `code`, `description`) VALUES
(1, 'STK', 'Stroke'),
(2, 'BOW', 'Bow'),
(3, 'SGL', 'Signal'),
(4, 'STR', 'Steer');

-- --------------------------------------------------------

--
-- Table structure for table `paddler_status`
--

CREATE TABLE IF NOT EXISTS `paddler_status` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `paddler_id` int(7) NOT NULL,
  `status` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `paddler_id` int(7) NOT NULL,
  `date_of_payment` date NOT NULL,
  `amount` float NOT NULL,
  `outstanding` float NOT NULL,
  `received_by` varchar(100) NOT NULL,
  `payment_type` varchar(10) NOT NULL,
  `date_encoded` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `paddler_id`, `date_of_payment`, `amount`, `outstanding`, `received_by`, `payment_type`, `date_encoded`) VALUES
(1, 1, '2013-10-14', 150, 0, '1', 'TD', '2013-10-14'),
(2, 1, '2013-10-14', 150, 0, '1', 'TD', '2013-10-15'),
(3, 1, '2013-09-17', 20, 0, '1', 'TD', '2013-10-17'),
(5, 1, '2013-10-17', 120, 0, '1', 'TD', '2013-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `payment_type`
--

CREATE TABLE IF NOT EXISTS `payment_type` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `parent_id` int(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment_type`
--

INSERT INTO `payment_type` (`id`, `code`, `description`, `parent_id`) VALUES
(1, 'TD', 'Training Dues', 0),
(2, 'RF4L2013', 'Reg Fee 4th Leg 2013', 0);

-- --------------------------------------------------------

--
-- Table structure for table `status_code`
--

CREATE TABLE IF NOT EXISTS `status_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `status_code`
--

INSERT INTO `status_code` (`id`, `code`, `description`) VALUES
(1, 'ACT', 'Active'),
(2, 'IACT', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `lname`, `password`, `type`) VALUES
(1, 'don_rivera', 'Don', 'Rivera', 'e10adc3949ba59abbe56e057f20f883e', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `code` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
