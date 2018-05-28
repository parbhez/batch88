-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2017 at 11:53 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moonnight`
--

-- --------------------------------------------------------

--
-- Table structure for table `mn_blog`
--

CREATE TABLE IF NOT EXISTS `mn_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text,
  `tags` text,
  `category_id` int(11) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `mode_id` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `modified_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_blog_user_id` (`user_id`),
  KEY `fk_category_id` (`category_id`),
  KEY `fk_mode_id` (`mode_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mn_blog`
--

INSERT INTO `mn_blog` (`id`, `user_id`, `title`, `description`, `tags`, `category_id`, `banner_image`, `mode_id`, `created_time`, `modified_time`) VALUES
(1, 1, 'Web Development Course at IBCS-Primax final update', '<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">What it is about:-</h4>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Helvetica; font-size: 13px;" align="justify">Zend PHP Certification is an industry-wide standard that recognizes PHP expertise and is a measure of distinction that employers use to evaluate prospective employees.</p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Objective:-</h4>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Helvetica; font-size: 13px;" align="justify">This training is a complete guide for trainees who aim to be Zend Certified, or to gain advance knowledge of PHP. The basis PHP and MySql course is a prerequisite for this course.</p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Who should attend:-</h4>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Helvetica; font-size: 13px;" align="justify">This course is for those who want to be PHP experts, and also join the thousands of PHP professionals who have received official certifications and be recognized for their PHP expertise. We are currently offering the Zend Certified PHP Engineer Certification based on PHP 5.5</p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Price:-</h4>\r\n<p><span style="color: #333333; font-family: Helvetica; font-size: 13px;">Taka 30,000/-</span></p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Duration:-</h4>\r\n<p><span style="color: #333333; font-family: Helvetica; font-size: 13px;">90 Hours</span></p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Partner page at ZEND:-</h4>\r\n<p><span style="color: #333333; font-family: Helvetica; font-size: 13px;">http://www.zend.com/en/company/partners/training-partners</span></p>', 'hello', 6, 'sdfsdf', 2, 1508236175, 1508242091),
(2, 1, 'Web Development Course at IBCS-Primax final update', '<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">What it is about:-</h4>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Helvetica; font-size: 13px;" align="justify">Zend PHP Certification is an industry-wide standard that recognizes PHP expertise and is a measure of distinction that employers use to evaluate prospective employees.</p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Objective:-</h4>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Helvetica; font-size: 13px;" align="justify">This training is a complete guide for trainees who aim to be Zend Certified, or to gain advance knowledge of PHP. The basis PHP and MySql course is a prerequisite for this course.</p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Who should attend:-</h4>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Helvetica; font-size: 13px;" align="justify">This course is for those who want to be PHP experts, and also join the thousands of PHP professionals who have received official certifications and be recognized for their PHP expertise. We are currently offering the Zend Certified PHP Engineer Certification based on PHP 5.5</p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Price:-</h4>\r\n<p><span style="color: #333333; font-family: Helvetica; font-size: 13px;">Taka 30,000/-</span></p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Duration:-</h4>\r\n<p><span style="color: #333333; font-family: Helvetica; font-size: 13px;">90 Hours</span></p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Partner page at ZEND:-</h4>\r\n<p><span style="color: #333333; font-family: Helvetica; font-size: 13px;">http://www.zend.com/en/company/partners/training-partners</span></p>', 'hello', 6, 'sdfsdf', 2, 1508236989, 1508242091),
(3, 2, 'Web Development Course at IBCS-Primax created by Mahadi', '<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">What it is about:-</h4>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Helvetica; font-size: 13px;" align="justify">Zend PHP Certification is an industry-wide standard that recognizes PHP expertise and is a measure of distinction that employers use to evaluate prospective employees.</p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Objective:-</h4>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Helvetica; font-size: 13px;" align="justify">This training is a complete guide for trainees who aim to be Zend Certified, or to gain advance knowledge of PHP. The basis PHP and MySql course is a prerequisite for this course.</p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Who should attend:-</h4>\r\n<p style="box-sizing: border-box; margin: 0px 0px 10px; color: #333333; font-family: Helvetica; font-size: 13px;" align="justify">This course is for those who want to be PHP experts, and also join the thousands of PHP professionals who have received official certifications and be recognized for their PHP expertise. We are currently offering the Zend Certified PHP Engineer Certification based on PHP 5.5</p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Price:-</h4>\r\n<p><span style="color: #333333; font-family: Helvetica; font-size: 13px;">Taka 30,000/-</span></p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Duration:-</h4>\r\n<p><span style="color: #333333; font-family: Helvetica; font-size: 13px;">90 Hours</span></p>\r\n<h4 class=" align-default" style="box-sizing: border-box; font-family: Helvetica; line-height: 20px; margin-top: 10px; margin-bottom: 10px; font-size: 18px; text-rendering: optimizeLegibility;">Partner page at ZEND:-</h4>\r\n<p><span style="color: #333333; font-family: Helvetica; font-size: 13px;">http://www.zend.com/en/company/partners/training-partners</span></p>', 'hello', 6, 'sdfsdf', 2, 1508238522, 1508243305),
(4, 2, 'I want to get out from this Country', '<p>Do you want to marry me? I would like to get the citizenship of your country.</p>', NULL, 6, NULL, 2, 1508411133, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mn_category`
--

CREATE TABLE IF NOT EXISTS `mn_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mn_category`
--

INSERT INTO `mn_category` (`id`, `title`) VALUES
(1, 'Science'),
(2, 'Arts'),
(3, 'Economics'),
(4, 'Astronomy'),
(5, 'Literature'),
(6, 'General'),
(7, 'Politics');

-- --------------------------------------------------------

--
-- Table structure for table `mn_city`
--

CREATE TABLE IF NOT EXISTS `mn_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `mn_city`
--

INSERT INTO `mn_city` (`id`, `title`, `code`) VALUES
(1, 'Dhaka', 'DHK'),
(2, 'Chittagone', 'CTG'),
(3, 'Brahmanbaria', 'BHR'),
(4, 'Comilla', 'COM'),
(5, 'Feni', 'FENI');

-- --------------------------------------------------------

--
-- Table structure for table `mn_comment`
--

CREATE TABLE IF NOT EXISTS `mn_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `commented_by` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `created_time` int(11) NOT NULL,
  `modified_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_comment_user_id` (`commented_by`),
  KEY `fk_blog_comment_id` (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mn_comment`
--

INSERT INTO `mn_comment` (`id`, `comment`, `commented_by`, `blog_id`, `created_time`, `modified_time`) VALUES
(1, 'Amar desher name Bangladesh.', 2, 3, 1508672895, NULL),
(2, 'Tumi ami bhai bhai.', 2, 3, 1508672913, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mn_country`
--

CREATE TABLE IF NOT EXISTS `mn_country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mn_country`
--

INSERT INTO `mn_country` (`id`, `title`, `code`) VALUES
(1, 'Bangladesh', 'BGD'),
(2, 'India', 'IND'),
(3, 'Pakistan', 'PAK'),
(4, 'Canada', 'CAN'),
(5, 'Australia', 'AUS'),
(6, 'Germany', 'GER');

-- --------------------------------------------------------

--
-- Table structure for table `mn_mode`
--

CREATE TABLE IF NOT EXISTS `mn_mode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mn_mode`
--

INSERT INTO `mn_mode` (`id`, `title`) VALUES
(1, 'Draft'),
(2, 'Waiting to be published'),
(3, 'Published');

-- --------------------------------------------------------

--
-- Table structure for table `mn_personal_info`
--

CREATE TABLE IF NOT EXISTS `mn_personal_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `date_of_birth` int(11) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `about_me` text,
  `profile_picture` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `created_time` int(11) NOT NULL,
  `modified_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_id` (`user_id`),
  KEY `fk_country_id` (`country_id`),
  KEY `fk_city_id` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mn_personal_info`
--

INSERT INTO `mn_personal_info` (`id`, `user_id`, `first_name`, `last_name`, `date_of_birth`, `gender`, `occupation`, `organization`, `about_me`, `profile_picture`, `country_id`, `city_id`, `created_time`, `modified_time`) VALUES
(1, 1, 'Mithun Chandra', 'Bonik', -1773878400, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, 1507463691, NULL),
(2, 2, 'Mahadi', 'Hasan', 831686400, 'Male', 'Student', 'Faridpur Polytechnic Institute', '<p>Akash akti valo <span style="text-decoration: underline;"><strong>boy</strong></span>, kintu shudhu sara din ghumai. Ar ai jonno Raj oke name diyese <strong>"Ghum Babu"</strong>.</p>', 'http://localhost/batch88/moonnight.com/uploads/2_1508665418_rose_pankaj.jpg', 3, 5, 1508237388, 1508665418);

-- --------------------------------------------------------

--
-- Table structure for table `mn_role`
--

CREATE TABLE IF NOT EXISTS `mn_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mn_role`
--

INSERT INTO `mn_role` (`id`, `title`) VALUES
(1, 'Administrator'),
(2, 'Publisher');

-- --------------------------------------------------------

--
-- Table structure for table `mn_users`
--

CREATE TABLE IF NOT EXISTS `mn_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nick_name` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_time` int(11) NOT NULL,
  `modified_time` int(11) DEFAULT NULL,
  `last_logged_in` int(11) DEFAULT NULL,
  `auth_code` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_roll` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mn_users`
--

INSERT INTO `mn_users` (`id`, `email`, `password`, `nick_name`, `role_id`, `status`, `created_time`, `modified_time`, `last_logged_in`, `auth_code`) VALUES
(1, 'salma@baul.com', '4a02a085b6c0067605d1dc93834ace00', NULL, 2, 0, 1507463691, NULL, 1508672818, '900958'),
(2, 'mahadi737935@gmail.com', 'efe9634f0dc0ad3184a369a22be24d3d', 'Akash_Batash_Pani', 2, 0, 1508237388, 1508665418, 1508672818, '379519');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mn_blog`
--
ALTER TABLE `mn_blog`
  ADD CONSTRAINT `fk_blog_user_id` FOREIGN KEY (`user_id`) REFERENCES `mn_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_category_id` FOREIGN KEY (`category_id`) REFERENCES `mn_category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mode_id` FOREIGN KEY (`mode_id`) REFERENCES `mn_mode` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mn_comment`
--
ALTER TABLE `mn_comment`
  ADD CONSTRAINT `fk_blog_comment_id` FOREIGN KEY (`blog_id`) REFERENCES `mn_blog` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comment_user_id` FOREIGN KEY (`commented_by`) REFERENCES `mn_users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mn_personal_info`
--
ALTER TABLE `mn_personal_info`
  ADD CONSTRAINT `fk_city_id` FOREIGN KEY (`city_id`) REFERENCES `mn_city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_country_id` FOREIGN KEY (`country_id`) REFERENCES `mn_country` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `mn_users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `mn_users`
--
ALTER TABLE `mn_users`
  ADD CONSTRAINT `fk_roll` FOREIGN KEY (`role_id`) REFERENCES `mn_role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
