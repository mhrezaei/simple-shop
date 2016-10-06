-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2013 at 08:34 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `title`, `comment`, `status`) VALUES
(3, 'wsdfwsdfsdf', 'example@domain.com', 'eeeeeeeeeesdfsdfsdf', 'sdfsdfsdfeeeeeeeeeeeeeeeeeeeeeeeeee', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'آذربایجان شرقی'),
(2, 'آذربایجان غربی'),
(3, 'اردبیل'),
(4, 'اصفهان'),
(5, 'البرز'),
(6, 'ایلام'),
(7, 'بوشهر'),
(8, 'تهران'),
(9, 'چهارمحال و بختیاری'),
(10, 'خراسان جنوبی'),
(11, 'خراسان رضوی'),
(12, 'خراسان شمالی'),
(13, 'خوزستان'),
(14, 'زنجان'),
(15, 'سمنان'),
(16, 'سیستان و بلوچستان'),
(17, 'فارس'),
(18, 'قزوین'),
(19, 'قم'),
(20, 'کردستان'),
(21, 'کرمان'),
(22, 'کرمانشاه'),
(23, 'کهگیلویه و بویراحمد'),
(24, 'گلستان'),
(25, 'گیلان'),
(26, 'لرستان'),
(27, 'مازندران'),
(28, 'مرکزی'),
(29, 'هرمزگان'),
(30, 'همدان'),
(31, 'یزد');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `fatherName` varchar(300) NOT NULL,
  `nationalCode` varchar(10) NOT NULL,
  `sex` int(11) NOT NULL,
  `birthDay` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `postalCode` varchar(10) NOT NULL,
  `job` varchar(500) DEFAULT NULL,
  `education` varchar(500) DEFAULT NULL,
  `cours` varchar(500) DEFAULT NULL,
  `email` varchar(300) NOT NULL,
  `userName` varchar(300) NOT NULL,
  `passWord` char(60) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='user safiran table' AUTO_INCREMENT=32 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fatherName`, `nationalCode`, `sex`, `birthDay`, `tel`, `mobile`, `state`, `city`, `address`, `postalCode`, `job`, `education`, `cours`, `email`, `userName`, `passWord`, `status`) VALUES
(30, 'محمد هادی رضایی 1', 'نم', '0012071110', 1, '1349647200', '02122324472', '09361112030', 8, 'تهران', 'تهران', '1111111111', '121212', '', '', 'mr.mhrezaei@gmail.com', 'admin', '562f56792bbef1816fe725a6719380137b963ca1', 1),
(31, 'فریبا نوری اعتماد', 'حسن', '0084782439', 2, '596493000', '02122324472', '09351303767', 8, 'واوان', 'خ رجایی کوچه سی و دو غربی پلاک 6', '3317648115', 'کارمند بیمارستان', 'دیپلم', 'تجربی', 'fariba.etemad@gmail.com', 'nourietemad', '079be8f6ef06cef13da5cf03a0f59a80a1042cb5', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
