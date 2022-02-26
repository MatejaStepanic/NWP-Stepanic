-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2013 at 07:58 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xmlapp`
--
CREATE DATABASE IF NOT EXISTS `xmlapp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `xmlapp`;

-- --------------------------------------------------------

--
-- Table structure for table `actions`
--

CREATE TABLE IF NOT EXISTS `actions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `actions`
--

INSERT INTO `actions` (`id`, `name`) VALUES
(1, 'see_admin_menu'),
(2, 'see_user_menu'),
(4, 'add_users'),
(5, 'remove_users'),
(6, 'edit_users'),
(7, 'list_users');

-- --------------------------------------------------------

--
-- Table structure for table `actions_roles`
--

CREATE TABLE IF NOT EXISTS `actions_roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `allowed` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `actions_roles`
--

INSERT INTO `actions_roles` (`id`, `role_id`, `action_id`, `allowed`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 0),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 6, 1),
(7, 2, 1, 0),
(8, 2, 2, 1),
(9, 2, 3, 1),
(10, 2, 4, 0),
(11, 2, 5, 0),
(12, 2, 6, 0),
(13, 1, 7, 1),
(14, 2, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `max_speed` int(11) DEFAULT NULL,
  `number_of_seats` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `color`, `max_speed`, `number_of_seats`) VALUES
(1, 'Jeep', 'Black', 230, NULL),
(2, 'BMW', 'White', 250, NULL),
(3, 'KIA', 'Blue', 210, NULL),
(4, 'test', 'test-color', 100, NULL),
(5, 'Jeep', 'Black', 230, NULL),
(6, 'BMW', 'White', 250, NULL),
(7, 'KIA', 'Blue', 210, NULL),
(8, 'test', 'test-color', 100, NULL),
(9, 'Jeep', 'Black', 230, NULL),
(10, 'BMW', 'White', 250, NULL),
(11, 'KIA', 'Blue', 210, NULL),
(12, 'test', 'test-color', 100, NULL),
(13, 'Jeep', 'Black', 230, NULL),
(14, 'BMW', 'White', 250, NULL),
(15, 'KIA', 'Blue', 210, NULL),
(16, 'test', 'test-color', 100, NULL),
(17, 'Jeep', 'Black', 230, NULL),
(18, 'BMW', 'White', 250, NULL),
(19, 'KIA', 'Blue', 210, NULL),
(20, 'test', 'test-color', 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Administrator'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `role_id`) VALUES
(3, 'guest', 'guest', 'Guest', 'Guest', 3),
(6, 'admin', 'admin', 'Davor', 'Lozic', 1),
(7, 'user', 'user', 'Alen', 'Simec', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
