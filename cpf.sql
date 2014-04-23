-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2014 at 11:13 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cpf`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_item`
--

CREATE TABLE IF NOT EXISTS `bill_item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `rate` int(11) NOT NULL,
  `bill_item_type` int(11) NOT NULL DEFAULT '2' COMMENT '1=invoice, 2=quotation',
  `ref_id` int(11) NOT NULL COMMENT 'quotation/invoice id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bill_item`
--


-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clent_id` int(11) NOT NULL,
  `stuff_id` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `chat_session` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `chat`
--


-- --------------------------------------------------------

--
-- Table structure for table `chat_data`
--

CREATE TABLE IF NOT EXISTS `chat_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chat_session_id` varchar(50) NOT NULL,
  `sender` varchar(30) NOT NULL,
  `send_to` varchar(30) NOT NULL,
  `msg` mediumtext NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `chat_data`
--

INSERT INTO `chat_data` (`id`, `chat_session_id`, `sender`, `send_to`, `msg`, `time`) VALUES
(1, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'hello', 1380841538),
(2, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', '', 1380841719),
(3, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', '', 1380841746),
(4, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', '0', 1380842228),
(5, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', '0', 1380842474),
(6, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', '0', 1380842785),
(7, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'Hello', 1380842920),
(8, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'Hello', 1380842923),
(9, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'hello', 1380842970),
(10, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'hello', 1380842973),
(11, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'asdfasd', 1380843347),
(12, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'adfdafdsfd', 1380843435),
(13, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'hello', 1380843484),
(14, '1380840542524df45ed482b', 'MAKSUDUR  RAHMAN', '', 'dfadsfadsfsdaf', 1380843746);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--


-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `message` text NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `country`, `subject`, `message`, `date`) VALUES
(1, 'Anowar Hossain Khan', 'anowar_khan2001@yahoo.com', '8801678705939', 'Bangladesh', 'Hello', 'Completely administrate emerging initiatives after leveraged communities. Synergistically administrate proactive expertise with backward-compatible technologies.', 1391586652);

-- --------------------------------------------------------

--
-- Table structure for table `coupon_code`
--

CREATE TABLE IF NOT EXISTS `coupon_code` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(20) NOT NULL,
  `discount` int(11) NOT NULL,
  `start` int(11) DEFAULT NULL,
  `end` int(11) DEFAULT NULL,
  `posted` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `coupon_code`
--

INSERT INTO `coupon_code` (`id`, `code`, `discount`, `start`, `end`, `posted`) VALUES
(1, 'newYear', 30, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `front_home`
--

CREATE TABLE IF NOT EXISTS `front_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content_type` int(11) NOT NULL COMMENT '1=after_slider, 2=3_col_iconic, 3=after_portfolio_iconic_title',
  `content_title` varchar(100) DEFAULT NULL,
  `content_body` text NOT NULL,
  `content_icon` varchar(20) DEFAULT NULL,
  `posted` int(11) NOT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `front_home`
--


-- --------------------------------------------------------

--
-- Table structure for table `front_menu`
--

CREATE TABLE IF NOT EXISTS `front_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `nav_order` int(11) NOT NULL DEFAULT '0',
  `posted` int(11) NOT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `front_menu`
--


-- --------------------------------------------------------

--
-- Table structure for table `front_pages`
--

CREATE TABLE IF NOT EXISTS `front_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `page_body` text,
  `page_type` int(11) DEFAULT NULL COMMENT '1=normal, 2=service_slider, 3=service_before_after, 4=service_banner',
  `seo_keyword` varchar(200) DEFAULT NULL,
  `seo_desc` varchar(160) DEFAULT NULL,
  `posted` int(11) NOT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `front_pages`
--


-- --------------------------------------------------------

--
-- Table structure for table `front_portfolio`
--

CREATE TABLE IF NOT EXISTS `front_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `before_img` varchar(100) NOT NULL,
  `after_img` varchar(100) DEFAULT NULL,
  `tags` varchar(100) NOT NULL,
  `posted` int(11) NOT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `front_portfolio`
--


-- --------------------------------------------------------

--
-- Table structure for table `front_slider`
--

CREATE TABLE IF NOT EXISTS `front_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slider_style` int(11) NOT NULL,
  `loading_animation` int(11) DEFAULT NULL,
  `unloading_animation` int(11) DEFAULT NULL,
  `posted` int(11) NOT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `front_slider`
--


-- --------------------------------------------------------

--
-- Table structure for table `front_slider_slide`
--

CREATE TABLE IF NOT EXISTS `front_slider_slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide_data` text NOT NULL,
  `slider_id` int(11) NOT NULL,
  `posted` int(11) NOT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `front_slider_slide`
--


-- --------------------------------------------------------

--
-- Table structure for table `front_testimonials`
--

CREATE TABLE IF NOT EXISTS `front_testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_name` varchar(100) NOT NULL,
  `author_desig` varchar(100) DEFAULT NULL,
  `author_web` varchar(100) DEFAULT NULL,
  `author_img` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `posted` int(11) NOT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `front_testimonials`
--


-- --------------------------------------------------------

--
-- Table structure for table `front_textblock`
--

CREATE TABLE IF NOT EXISTS `front_textblock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text,
  `link` varchar(200) DEFAULT NULL COMMENT 'link to the targeted page',
  `type` int(11) NOT NULL COMMENT '1=single_row, 2=boxed, 3=home',
  `posted` int(11) NOT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `front_textblock`
--

INSERT INTO `front_textblock` (`id`, `icon`, `title`, `description`, `link`, `type`, `posted`, `modified`) VALUES
(2, 'fa-globe', 'this is second title', 'Holisticly orchestrate next-generation deliverables with best-of-breed models. Conveniently empower e-business communities vis-a-vis sticky products. Rapidiously productivate top-line.', NULL, 2, 0, NULL),
(3, 'fa-glass', 'A guide to HTML5 Fallback and Polyfills', 'Interactively deploy leveraged growth strategies before viral process improvements. Dramatically pontificate timely functionalities without e-business convergence. Synergistically.', NULL, 2, 1388094619, NULL),
(4, 'fa-glass', 'A guide to HTML5 Fallback and Polyfills', 'Interactively deploy leveraged growth strategies before viral process improvements. Dramatically pontificate timely functionalities without e-business convergence. Synergistically.', NULL, 2, 1388094619, NULL),
(5, 'fa-glass1', 'HTML5 Geolocation API – Specification and Usages', 'Rapidiously whiteboard world-class markets with fully tested networks. Objectively innovate enterprise methods of empowerment for backend leadership.', NULL, 1, 1388095785, 1388096684);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'website_editor', 'This group can add/edit/remove website content anytime');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(50) NOT NULL,
  `file_data` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `upload_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=310 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `file_data`, `user_id`, `job_id`, `upload_date`) VALUES
(117, 'imac.jpg', '{"file_name":"imac.jpg","file_type":"image\\/jpeg","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/imac.jpg","raw_name":"imac","orig_name":"imac.jpg","client_name":"imac.jpg","file_ext":".jpg","file_size":56.82,"is_image":true,"image_width":800,"image_height":600,"image_type":"jpeg","image_size_str":"width=\\"800\\" height=\\"600\\""}', 1, 0, 0),
(118, 'htc-one-review.jpg', '{"file_name":"htc-one-review.jpg","file_type":"image\\/jpeg","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/htc-one-review.jpg","raw_name":"htc-one-review","orig_name":"htc-one-review.jpg","client_name":"htc-one-review.jpg","file_ext":".jpg","file_size":135.58,"is_image":true,"image_width":1200,"image_height":800,"image_type":"jpeg","image_size_str":"width=\\"1200\\" height=\\"800\\""}', 1, 0, 0),
(119, 'ipad.jpg', '{"file_name":"ipad.jpg","file_type":"image\\/jpeg","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/ipad.jpg","raw_name":"ipad","orig_name":"ipad.jpg","client_name":"ipad.jpg","file_ext":".jpg","file_size":67.22,"is_image":true,"image_width":672,"image_height":553,"image_type":"jpeg","image_size_str":"width=\\"672\\" height=\\"553\\""}', 1, 0, 0),
(120, 'ipad-5.jpg', '{"file_name":"ipad-5.jpg","file_type":"image\\/jpeg","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/ipad-5.jpg","raw_name":"ipad-5","orig_name":"ipad-5.jpg","client_name":"ipad-5.jpg","file_ext":".jpg","file_size":21.3,"is_image":true,"image_width":600,"image_height":440,"image_type":"jpeg","image_size_str":"width=\\"600\\" height=\\"440\\""}', 1, 0, 0),
(121, 'social-bg.psd', '{"file_name":"social-bg.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/social-bg.psd","raw_name":"social-bg","orig_name":"social-bg.psd","client_name":"social-bg.psd","file_ext":".psd","file_size":971.58,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(122, 'social-bg1.psd', '{"file_name":"social-bg1.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/social-bg1.psd","raw_name":"social-bg1","orig_name":"social-bg.psd","client_name":"social-bg.psd","file_ext":".psd","file_size":971.58,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(123, 'home-final.psd', '{"file_name":"home-final.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/home-final.psd","raw_name":"home-final","orig_name":"home-final.psd","client_name":"home-final.psd","file_ext":".psd","file_size":12942.17,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(124, 'about.psd', '{"file_name":"about.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/about.psd","raw_name":"about","orig_name":"about.psd","client_name":"about.psd","file_ext":".psd","file_size":45435.32,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(125, 'about1.psd', '{"file_name":"about1.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/about1.psd","raw_name":"about1","orig_name":"about.psd","client_name":"about.psd","file_ext":".psd","file_size":51819.32,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(126, 'contact.psd', '{"file_name":"contact.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/contact.psd","raw_name":"contact","orig_name":"contact.psd","client_name":"contact.psd","file_ext":".psd","file_size":31130.81,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(127, 'srvices.psd', '{"file_name":"srvices.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/srvices.psd","raw_name":"srvices","orig_name":"srvices.psd","client_name":"srvices.psd","file_ext":".psd","file_size":29007.29,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(128, '320_template.psd', '{"file_name":"320_template.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/320_template.psd","raw_name":"320_template","orig_name":"320_template.psd","client_name":"320 template.psd","file_ext":".psd","file_size":28837.98,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(129, '320_404.psd', '{"file_name":"320_404.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/320_404.psd","raw_name":"320_404","orig_name":"320_404.psd","client_name":"320 404.psd","file_ext":".psd","file_size":5458.26,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(130, '320_contact.psd', '{"file_name":"320_contact.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/320_contact.psd","raw_name":"320_contact","orig_name":"320_contact.psd","client_name":"320 contact.psd","file_ext":".psd","file_size":2364.63,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(131, '320_about.psd', '{"file_name":"320_about.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/320_about.psd","raw_name":"320_about","orig_name":"320_about.psd","client_name":"320 about.psd","file_ext":".psd","file_size":5457.94,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(132, '320_home.psd', '{"file_name":"320_home.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/320_home.psd","raw_name":"320_home","orig_name":"320_home.psd","client_name":"320 home.psd","file_ext":".psd","file_size":28831.43,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(133, 'fontawesome.psd', '{"file_name":"fontawesome.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/fontawesome.psd","raw_name":"fontawesome","orig_name":"fontawesome.psd","client_name":"fontawesome.psd","file_ext":".psd","file_size":610.51,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(134, 'blog_standard_bothsidebar.psd', '{"file_name":"blog_standard_bothsidebar.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/blog_standard_bothsidebar.psd","raw_name":"blog_standard_bothsidebar","orig_name":"blog_standard_bothsidebar.psd","client_name":"blog_standard_bothsidebar.psd","file_ext":".psd","file_size":31732.23,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(135, 'blog_standard_rightsidebar.psd', '{"file_name":"blog_standard_rightsidebar.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/blog_standard_rightsidebar.psd","raw_name":"blog_standard_rightsidebar","orig_name":"blog_standard_rightsidebar.psd","client_name":"blog_standard_rightsidebar.psd","file_ext":".psd","file_size":33155.48,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(136, 'contact1.psd', '{"file_name":"contact1.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/contact1.psd","raw_name":"contact1","orig_name":"contact.psd","client_name":"contact.psd","file_ext":".psd","file_size":31130.81,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(137, 'Footer.psd', '{"file_name":"Footer.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/Footer.psd","raw_name":"Footer","orig_name":"Footer.psd","client_name":"Footer.psd","file_ext":".psd","file_size":33413.99,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(138, 'features.psd', '{"file_name":"features.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/features.psd","raw_name":"features","orig_name":"features.psd","client_name":"features.psd","file_ext":".psd","file_size":38978.79,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(139, 'about2.psd', '{"file_name":"about2.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/about2.psd","raw_name":"about2","orig_name":"about.psd","client_name":"about.psd","file_ext":".psd","file_size":51819.32,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(140, 'Header.psd', '{"file_name":"Header.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/Header.psd","raw_name":"Header","orig_name":"Header.psd","client_name":"Header.psd","file_ext":".psd","file_size":30080.53,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(141, 'home_business.psd', '{"file_name":"home_business.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/home_business.psd","raw_name":"home_business","orig_name":"home_business.psd","client_name":"home business.psd","file_ext":".psd","file_size":32835.58,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(142, 'home_800.psd', '{"file_name":"home_800.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/home_800.psd","raw_name":"home_800","orig_name":"home_800.psd","client_name":"home 800.psd","file_ext":".psd","file_size":36755.07,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(143, 'home_business_1.psd', '{"file_name":"home_business_1.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/home_business_1.psd","raw_name":"home_business_1","orig_name":"home_business_1.psd","client_name":"home business_1.psd","file_ext":".psd","file_size":37896.27,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(144, 'home_portfolio.psd', '{"file_name":"home_portfolio.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/home_portfolio.psd","raw_name":"home_portfolio","orig_name":"home_portfolio.psd","client_name":"home portfolio.psd","file_ext":".psd","file_size":42233.46,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(145, 'home_grid.psd', '{"file_name":"home_grid.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/home_grid.psd","raw_name":"home_grid","orig_name":"home_grid.psd","client_name":"home grid.psd","file_ext":".psd","file_size":37989.12,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(146, 'left_sidebar.psd', '{"file_name":"left_sidebar.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/left_sidebar.psd","raw_name":"left_sidebar","orig_name":"left_sidebar.psd","client_name":"left sidebar.psd","file_ext":".psd","file_size":26666.31,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(147, 'home_business_fullwidth.psd', '{"file_name":"home_business_fullwidth.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/home_business_fullwidth.psd","raw_name":"home_business_fullwidth","orig_name":"home_business_fullwidth.psd","client_name":"home_business_fullwidth.psd","file_ext":".psd","file_size":37467.97,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(148, 'portfolio_masonry_default_3col.psd', '{"file_name":"portfolio_masonry_default_3col.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/portfolio_masonry_default_3col.psd","raw_name":"portfolio_masonry_default_3col","orig_name":"portfolio_masonry_default_3col.psd","client_name":"portfolio_masonry_default_3col.psd","file_ext":".psd","file_size":27929.1,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(149, 'portfolio_fullwidth.psd', '{"file_name":"portfolio_fullwidth.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/portfolio_fullwidth.psd","raw_name":"portfolio_fullwidth","orig_name":"portfolio_fullwidth.psd","client_name":"portfolio_fullwidth.psd","file_ext":".psd","file_size":43261.66,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(150, 'portfolio_masonry_default_4col.psd', '{"file_name":"portfolio_masonry_default_4col.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/portfolio_masonry_default_4col.psd","raw_name":"portfolio_masonry_default_4col","orig_name":"portfolio_masonry_default_4col.psd","client_name":"portfolio_masonry_default_4col.psd","file_ext":".psd","file_size":37314.21,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(151, 'portfolio_masonry_default_2col.psd', '{"file_name":"portfolio_masonry_default_2col.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/portfolio_masonry_default_2col.psd","raw_name":"portfolio_masonry_default_2col","orig_name":"portfolio_masonry_default_2col.psd","client_name":"portfolio_masonry_default_2col.psd","file_ext":".psd","file_size":40446.19,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(152, 'portfolio_or_blogitem.psd', '{"file_name":"portfolio_or_blogitem.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/portfolio_or_blogitem.psd","raw_name":"portfolio_or_blogitem","orig_name":"portfolio_or_blogitem.psd","client_name":"portfolio_or_blogitem.psd","file_ext":".psd","file_size":45385.67,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(153, 'fontawesome.ai', '{"file_name":"fontawesome.ai","file_type":"application\\/postscript","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/fontawesome.ai","raw_name":"fontawesome","orig_name":"fontawesome.ai","client_name":"fontawesome.ai","file_ext":".ai","file_size":430.91,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(154, 'fontawesome1.ai', '{"file_name":"fontawesome1.ai","file_type":"application\\/postscript","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/fontawesome1.ai","raw_name":"fontawesome1","orig_name":"fontawesome.ai","client_name":"fontawesome.ai","file_ext":".ai","file_size":430.91,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(155, 'about.jpg', '{"file_name":"about.jpg","file_type":"image\\/jpeg","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/about.jpg","raw_name":"about","orig_name":"about.jpg","client_name":"about.jpg","file_ext":".jpg","file_size":1947.84,"is_image":true,"image_width":1280,"image_height":6096,"image_type":"jpeg","image_size_str":"width=\\"1280\\" height=\\"6096\\""}', 1, 0, 0),
(156, 'contact.jpg', '{"file_name":"contact.jpg","file_type":"image\\/jpeg","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/contact.jpg","raw_name":"contact","orig_name":"contact.jpg","client_name":"contact.jpg","file_ext":".jpg","file_size":1278.39,"is_image":true,"image_width":1280,"image_height":3596,"image_type":"jpeg","image_size_str":"width=\\"1280\\" height=\\"3596\\""}', 1, 0, 0),
(157, 'fontawesome.ai', '{"file_name":"fontawesome.ai","file_type":"application\\/postscript","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/fontawesome.ai","raw_name":"fontawesome","orig_name":"fontawesome.ai","client_name":"fontawesome.ai","file_ext":".ai","file_size":430.91,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(158, 'feed.jpg', '{"file_name":"feed.jpg","file_type":"image\\/jpeg","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/feed.jpg","raw_name":"feed","orig_name":"feed.jpg","client_name":"feed.jpg","file_ext":".jpg","file_size":1112.27,"is_image":true,"image_width":1280,"image_height":3596,"image_type":"jpeg","image_size_str":"width=\\"1280\\" height=\\"3596\\""}', 1, 0, 0),
(159, 'feed.psd', '{"file_name":"feed.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/feed.psd","raw_name":"feed","orig_name":"feed.psd","client_name":"feed.psd","file_ext":".psd","file_size":15746.2,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(160, 'contact.psd', '{"file_name":"contact.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/contact.psd","raw_name":"contact","orig_name":"contact.psd","client_name":"contact.psd","file_ext":".psd","file_size":15912.56,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(161, 'error_404.psd', '{"file_name":"error_404.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/error_404.psd","raw_name":"error_404","orig_name":"error_404.psd","client_name":"error 404.psd","file_ext":".psd","file_size":10222.01,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(162, 'about.psd', '{"file_name":"about.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/about.psd","raw_name":"about","orig_name":"about.psd","client_name":"about.psd","file_ext":".psd","file_size":35431.19,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(163, 'error_404.psd', '{"file_name":"error_404.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/error_404.psd","raw_name":"error_404","orig_name":"error_404.psd","client_name":"error 404.psd","file_ext":".psd","file_size":10222.01,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(164, 'fontawesome.ai', '{"file_name":"fontawesome.ai","file_type":"application\\/postscript","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/fontawesome.ai","raw_name":"fontawesome","orig_name":"fontawesome.ai","client_name":"fontawesome.ai","file_ext":".ai","file_size":430.91,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(165, 'feed.jpg', '{"file_name":"feed.jpg","file_type":"image\\/jpeg","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/feed.jpg","raw_name":"feed","orig_name":"feed.jpg","client_name":"feed.jpg","file_ext":".jpg","file_size":1112.27,"is_image":true,"image_width":1280,"image_height":3596,"image_type":"jpeg","image_size_str":"width=\\"1280\\" height=\\"3596\\""}', 1, 0, 0),
(166, 'feed.psd', '{"file_name":"feed.psd","file_type":"application\\/octet-stream","file_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/","full_path":"F:\\/Server\\/xampp\\/htdocs\\/project\\/50.62.79.233\\/new\\/uploads\\/1\\/input\\/feed.psd","raw_name":"feed","orig_name":"feed.psd","client_name":"feed.psd","file_ext":".psd","file_size":15746.2,"is_image":false,"image_width":"","image_height":"","image_type":"","image_size_str":""}', 1, 0, 0),
(167, '1391685213_87176920_d8418c74a9_o.jpg', '{"name":"1391685213_87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391685213),
(168, '1391685213_279754943_b8927407bb_o.jpg', '{"name":"1391685213_279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391685213),
(169, '1391685213_3379390105_90e1e48b56_o.jpg', '{"name":"1391685213_3379390105_90e1e48b56_o.jpg","org_name":"3379390105_90e1e48b56_o.jpg","size":532929,"type":"image\\/jpeg"}', 9, 0, 1391685213),
(170, '1391685214_3380206470_b4cc910838_o.jpg', '{"name":"1391685214_3380206470_b4cc910838_o.jpg","org_name":"3380206470_b4cc910838_o.jpg","size":794787,"type":"image\\/jpeg"}', 9, 0, 1391685214),
(171, '1391685214_3067415839_68cc07574e_o.jpg', '{"name":"1391685214_3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391685214),
(172, '1391685214_3494893387_c757c25a43_o.jpg', '{"name":"1391685214_3494893387_c757c25a43_o.jpg","org_name":"3494893387_c757c25a43_o.jpg","size":1865191,"type":"image\\/jpeg"}', 9, 0, 1391685214),
(173, '1391685215_505167457_c4c6b627c0_o.jpg', '{"name":"1391685215_505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391685215),
(174, '1391685215_3674096603_752db53560_o.jpg', '{"name":"1391685215_3674096603_752db53560_o.jpg","org_name":"3674096603_752db53560_o.jpg","size":4676490,"type":"image\\/jpeg"}', 9, 0, 1391685215),
(175, '1391685215_3674097301_ef073234f0_o.jpg', '{"name":"1391685215_3674097301_ef073234f0_o.jpg","org_name":"3674097301_ef073234f0_o.jpg","size":3798341,"type":"image\\/jpeg"}', 9, 0, 1391685215),
(176, '1391685216_4443714955_8be4318fb2_o.jpg', '{"name":"1391685216_4443714955_8be4318fb2_o.jpg","org_name":"4443714955_8be4318fb2_o.jpg","size":232331,"type":"image\\/jpeg"}', 9, 0, 1391685216),
(177, '1391685216_3685927412_7c1c266353_o.jpg', '{"name":"1391685216_3685927412_7c1c266353_o.jpg","org_name":"3685927412_7c1c266353_o.jpg","size":4881580,"type":"image\\/jpeg"}', 9, 0, 1391685216),
(178, '1391685216_4494981839_073ae07da0_o.jpg', '{"name":"1391685216_4494981839_073ae07da0_o.jpg","org_name":"4494981839_073ae07da0_o.jpg","size":3694006,"type":"image\\/jpeg"}', 9, 0, 1391685216),
(179, '1391685358_87176920_d8418c74a9_o.jpg', '{"name":"1391685358_87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391685358),
(180, '1391685358_279754943_b8927407bb_o.jpg', '{"name":"1391685358_279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391685358),
(181, '1391685358_3067415839_68cc07574e_o.jpg', '{"name":"1391685358_3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391685358),
(182, '1391685358_3494893387_c757c25a43_o.jpg', '{"name":"1391685358_3494893387_c757c25a43_o.jpg","org_name":"3494893387_c757c25a43_o.jpg","size":1865191,"type":"image\\/jpeg"}', 9, 0, 1391685358),
(183, '1391685359_3685927412_7c1c266353_o.jpg', '{"name":"1391685359_3685927412_7c1c266353_o.jpg","org_name":"3685927412_7c1c266353_o.jpg","size":4881580,"type":"image\\/jpeg"}', 9, 0, 1391685359),
(184, '1391685359_4443714955_8be4318fb2_o.jpg', '{"name":"1391685359_4443714955_8be4318fb2_o.jpg","org_name":"4443714955_8be4318fb2_o.jpg","size":232331,"type":"image\\/jpeg"}', 9, 0, 1391685359),
(185, '1391685360_4494981839_073ae07da0_o.jpg', '{"name":"1391685360_4494981839_073ae07da0_o.jpg","org_name":"4494981839_073ae07da0_o.jpg","size":3694006,"type":"image\\/jpeg"}', 9, 0, 1391685360),
(186, '1391685360_4965330699_31658ed2cf_o.jpg', '{"name":"1391685360_4965330699_31658ed2cf_o.jpg","org_name":"4965330699_31658ed2cf_o.jpg","size":159610,"type":"image\\/jpeg"}', 9, 0, 1391685360),
(187, '1391685361_5459499712_b410761fc4_b.jpg', '{"name":"1391685361_5459499712_b410761fc4_b.jpg","org_name":"5459499712_b410761fc4_b.jpg","size":205419,"type":"image\\/jpeg"}', 9, 0, 1391685361),
(188, '1391685373_3674096603_752db53560_o.jpg', '{"name":"1391685373_3674096603_752db53560_o.jpg","org_name":"3674096603_752db53560_o.jpg","size":0,"type":""}', 9, 0, 1391685373),
(189, '1391685373_3379390105_90e1e48b56_o.jpg', '{"name":"1391685373_3379390105_90e1e48b56_o.jpg","org_name":"3379390105_90e1e48b56_o.jpg","size":0,"type":""}', 9, 0, 1391685373),
(190, '1391685373_505167457_c4c6b627c0_o.jpg', '{"name":"1391685373_505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":0,"type":""}', 9, 0, 1391685373),
(191, '1391685373_3674097301_ef073234f0_o.jpg', '{"name":"1391685373_3674097301_ef073234f0_o.jpg","org_name":"3674097301_ef073234f0_o.jpg","size":3028293,"type":"image\\/jpeg"}', 9, 0, 1391685373),
(192, '1391685394_87176920_d8418c74a9_o.jpg', '{"name":"1391685394_87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391685394),
(193, '1391685394_505167457_c4c6b627c0_o.jpg', '{"name":"1391685394_505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391685394),
(194, '1391685394_3380206470_b4cc910838_o.jpg', '{"name":"1391685394_3380206470_b4cc910838_o.jpg","org_name":"3380206470_b4cc910838_o.jpg","size":794787,"type":"image\\/jpeg"}', 9, 0, 1391685394),
(195, '1391685394_3379390105_90e1e48b56_o.jpg', '{"name":"1391685394_3379390105_90e1e48b56_o.jpg","org_name":"3379390105_90e1e48b56_o.jpg","size":532929,"type":"image\\/jpeg"}', 9, 0, 1391685395),
(196, '1391685395_279754943_b8927407bb_o.jpg', '{"name":"1391685395_279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391685395),
(197, '1391685395_3067415839_68cc07574e_o.jpg', '{"name":"1391685395_3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391685395),
(198, '1391685395_3494893387_c757c25a43_o.jpg', '{"name":"1391685395_3494893387_c757c25a43_o.jpg","org_name":"3494893387_c757c25a43_o.jpg","size":1865191,"type":"image\\/jpeg"}', 9, 0, 1391685395),
(199, '1391685395_4494981839_073ae07da0_o.jpg', '{"name":"1391685395_4494981839_073ae07da0_o.jpg","org_name":"4494981839_073ae07da0_o.jpg","size":3694006,"type":"image\\/jpeg"}', 9, 0, 1391685395),
(200, '4443714955_8be4318fb2_o.jpg', '{"name":"4443714955_8be4318fb2_o.jpg","org_name":"4443714955_8be4318fb2_o.jpg","size":166795,"type":"image\\/jpeg"}', 9, 0, 1391686595),
(201, '3685927412_7c1c266353_o.jpg', '{"name":"3685927412_7c1c266353_o.jpg","org_name":"3685927412_7c1c266353_o.jpg","size":0,"type":""}', 9, 0, 1391686595),
(202, '3674097301_ef073234f0_o.jpg', '{"name":"3674097301_ef073234f0_o.jpg","org_name":"3674097301_ef073234f0_o.jpg","size":3126597,"type":"image\\/jpeg"}', 9, 0, 1391686595),
(203, '3674096603_752db53560_o.jpg', '{"name":"3674096603_752db53560_o.jpg","org_name":"3674096603_752db53560_o.jpg","size":4299658,"type":"image\\/jpeg"}', 9, 0, 1391686595),
(204, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391693873),
(205, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391693873),
(206, '3380206470_b4cc910838_o.jpg', '{"name":"3380206470_b4cc910838_o.jpg","org_name":"3380206470_b4cc910838_o.jpg","size":794787,"type":"image\\/jpeg"}', 9, 0, 1391693873),
(207, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391693873),
(208, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391693873),
(209, '3379390105_90e1e48b56_o.jpg', '{"name":"3379390105_90e1e48b56_o.jpg","org_name":"3379390105_90e1e48b56_o.jpg","size":532929,"type":"image\\/jpeg"}', 9, 0, 1391693873),
(210, '3494893387_c757c25a43_o.jpg', '{"name":"3494893387_c757c25a43_o.jpg","org_name":"3494893387_c757c25a43_o.jpg","size":1865191,"type":"image\\/jpeg"}', 9, 0, 1391693874),
(211, '3674096603_752db53560_o.jpg', '{"name":"3674096603_752db53560_o.jpg","org_name":"3674096603_752db53560_o.jpg","size":4676490,"type":"image\\/jpeg"}', 9, 0, 1391693874),
(212, '3685927412_7c1c266353_o.jpg', '{"name":"3685927412_7c1c266353_o.jpg","org_name":"3685927412_7c1c266353_o.jpg","size":4881580,"type":"image\\/jpeg"}', 9, 0, 1391693874),
(213, '4443714955_8be4318fb2_o.jpg', '{"name":"4443714955_8be4318fb2_o.jpg","org_name":"4443714955_8be4318fb2_o.jpg","size":232331,"type":"image\\/jpeg"}', 9, 0, 1391693874),
(214, '3674097301_ef073234f0_o.jpg', '{"name":"3674097301_ef073234f0_o.jpg","org_name":"3674097301_ef073234f0_o.jpg","size":3798341,"type":"image\\/jpeg"}', 9, 0, 1391693874),
(215, '4494981839_073ae07da0_o.jpg', '{"name":"4494981839_073ae07da0_o.jpg","org_name":"4494981839_073ae07da0_o.jpg","size":3694006,"type":"image\\/jpeg"}', 9, 0, 1391693874),
(216, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391693925),
(217, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391693925),
(218, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391693925),
(219, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391693926),
(220, '3379390105_90e1e48b56_o.jpg', '{"name":"3379390105_90e1e48b56_o.jpg","org_name":"3379390105_90e1e48b56_o.jpg","size":532929,"type":"image\\/jpeg"}', 9, 0, 1391693926),
(221, '3380206470_b4cc910838_o.jpg', '{"name":"3380206470_b4cc910838_o.jpg","org_name":"3380206470_b4cc910838_o.jpg","size":794787,"type":"image\\/jpeg"}', 9, 0, 1391693926),
(222, '3494893387_c757c25a43_o.jpg', '{"name":"3494893387_c757c25a43_o.jpg","org_name":"3494893387_c757c25a43_o.jpg","size":1865191,"type":"image\\/jpeg"}', 9, 0, 1391693926),
(223, '3674096603_752db53560_o.jpg', '{"name":"3674096603_752db53560_o.jpg","org_name":"3674096603_752db53560_o.jpg","size":4676490,"type":"image\\/jpeg"}', 9, 0, 1391693926),
(224, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391694007),
(225, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391694007),
(226, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391694007),
(227, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391694007),
(228, '3379390105_90e1e48b56_o.jpg', '{"name":"3379390105_90e1e48b56_o.jpg","org_name":"3379390105_90e1e48b56_o.jpg","size":532929,"type":"image\\/jpeg"}', 9, 0, 1391694007),
(229, '3380206470_b4cc910838_o.jpg', '{"name":"3380206470_b4cc910838_o.jpg","org_name":"3380206470_b4cc910838_o.jpg","size":794787,"type":"image\\/jpeg"}', 9, 0, 1391694007),
(230, '3494893387_c757c25a43_o.jpg', '{"name":"3494893387_c757c25a43_o.jpg","org_name":"3494893387_c757c25a43_o.jpg","size":1865191,"type":"image\\/jpeg"}', 9, 0, 1391694008),
(231, '3674096603_752db53560_o.jpg', '{"name":"3674096603_752db53560_o.jpg","org_name":"3674096603_752db53560_o.jpg","size":4676490,"type":"image\\/jpeg"}', 9, 0, 1391694008),
(232, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391694325),
(233, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391694325),
(234, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391694325),
(235, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391694325),
(236, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391694344),
(237, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391694344),
(238, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391694344),
(239, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391694344),
(240, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391694452),
(241, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391694452),
(242, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391694452),
(243, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391694452),
(244, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391694542),
(245, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391694542),
(246, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391694542),
(247, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391694542),
(248, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391694583),
(249, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391694584),
(250, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391694584),
(251, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391694584),
(252, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3216647,"type":"image\\/jpeg"}', 9, 0, 1391694890),
(253, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":907877,"type":"image\\/jpeg"}', 9, 0, 1391694890),
(254, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391694902),
(255, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391694902),
(256, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391694902),
(257, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391694902),
(258, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391696012),
(259, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391696012),
(260, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391696012),
(261, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":2872583,"type":"image\\/jpeg"}', 9, 0, 1391700256),
(262, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391700355),
(263, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391700355),
(264, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391700355),
(265, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391700355),
(266, '279754943_b8927407bb_o.jpg', '{"name":"279754943_b8927407bb_o.jpg","org_name":"279754943_b8927407bb_o.jpg","size":2080561,"type":"image\\/jpeg"}', 9, 0, 1391708962),
(267, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391708962),
(268, '3067415839_68cc07574e_o.jpg', '{"name":"3067415839_68cc07574e_o.jpg","org_name":"3067415839_68cc07574e_o.jpg","size":1022565,"type":"image\\/jpeg"}', 9, 0, 1391708962),
(269, '505167457_c4c6b627c0_o.jpg', '{"name":"505167457_c4c6b627c0_o.jpg","org_name":"505167457_c4c6b627c0_o.jpg","size":3462407,"type":"image\\/jpeg"}', 9, 0, 1391708962),
(270, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391709359),
(271, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391709472),
(272, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391709604),
(273, '87176920_d8418c74a9_o.jpg', '{"name":"87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 0, 1391709821),
(274, '3380206470_b4cc910838_o.jpg', '{"name":"3380206470_b4cc910838_o.jpg","org_name":"3380206470_b4cc910838_o.jpg","size":794787,"type":"image\\/jpeg"}', 9, 0, 1391710334),
(275, '1391710601_3674097301_ef073234f0_o.jpg', '{"name":"1391710601_3674097301_ef073234f0_o.jpg","org_name":"3674097301_ef073234f0_o.jpg","size":3798341,"type":"image\\/jpeg"}', 9, 0, 1391710601),
(276, '1391714838_87176920_d8418c74a9_o.jpg', '{"name":"1391714838_87176920_d8418c74a9_o.jpg","org_name":"87176920_d8418c74a9_o.jpg","size":134822,"type":"image\\/jpeg"}', 9, 15, 1391714838),
(292, '1395989483_footer-logo.png', '{"name":"1395989483_footer-logo.png","org_name":"footer-logo.png","size":21702,"type":"image\\/png"}', 9, 16, 1395989483),
(293, '1395989483_banner.jpg', '{"name":"1395989483_banner.jpg","org_name":"banner.jpg","size":776676,"type":"image\\/jpeg"}', 9, 16, 1395989483),
(294, '1395989483_good-in-img.jpg', '{"name":"1395989483_good-in-img.jpg","org_name":"good-in-img.jpg","size":603769,"type":"image\\/jpeg"}', 9, 16, 1395989483),
(295, '1395989483_light-footer-logo.png', '{"name":"1395989483_light-footer-logo.png","org_name":"light-footer-logo.png","size":4295,"type":"image\\/png"}', 9, 16, 1395989483),
(296, '1395989483_light-good-in-img.png', '{"name":"1395989483_light-good-in-img.png","org_name":"light-good-in-img.png","size":435768,"type":"image\\/png"}', 9, 16, 1395989483),
(297, '1395989483_light-logo.png', '{"name":"1395989483_light-logo.png","org_name":"light-logo.png","size":2247,"type":"image\\/png"}', 9, 16, 1395989483),
(298, '1395989484_light-logo1.png', '{"name":"1395989484_light-logo1.png","org_name":"light-logo1.png","size":2345,"type":"image\\/png"}', 9, 16, 1395989484),
(299, '1395989484_light-portfolio-bg-img.png', '{"name":"1395989484_light-portfolio-bg-img.png","org_name":"light-portfolio-bg-img.png","size":301088,"type":"image\\/png"}', 9, 16, 1395989484),
(300, '1395989484_logo.png', '{"name":"1395989484_logo.png","org_name":"logo.png","size":20005,"type":"image\\/png"}', 9, 16, 1395989484),
(301, '1395989484_pattern.png', '{"name":"1395989484_pattern.png","org_name":"pattern.png","size":2796,"type":"image\\/png"}', 9, 16, 1395989484),
(303, '1395989484_pricing-img.jpg', '{"name":"1395989484_pricing-img.jpg","org_name":"pricing-img.jpg","size":660582,"type":"image\\/jpeg"}', 9, 16, 1395989484),
(304, '1396020383_banner.jpg', '{"name":"1396020383_banner.jpg","org_name":"banner.jpg","size":776676,"type":"image\\/jpeg"}', 9, 16, 1396020383),
(305, '1397263286_crown-logo-tm-160x42.png', '{"name":"1397263286_crown-logo-tm-160x42.png","org_name":"crown-logo-tm-160x42.png","size":8093,"type":"image\\/png"}', 9, 18, 1397263286),
(306, '1397263286_crown-logo-tm.png', '{"name":"1397263286_crown-logo-tm.png","org_name":"crown-logo-tm.png","size":21845,"type":"image\\/png"}', 9, 18, 1397263286),
(307, '1397311820_crown-logo-tm-160x42.png', '{"name":"1397311820_crown-logo-tm-160x42.png","org_name":"crown-logo-tm-160x42.png","size":8093,"type":"image\\/png"}', 9, 20, 1397311820),
(308, '1397311820_crown-logo-tm.png', '{"name":"1397311820_crown-logo-tm.png","org_name":"crown-logo-tm.png","size":21845,"type":"image\\/png"}', 9, 20, 1397311820),
(309, '1397311832_crown-logo-tm.png', '{"name":"1397311832_crown-logo-tm.png","org_name":"crown-logo-tm.png","size":21845,"type":"image\\/png"}', 9, 20, 1397311832);

-- --------------------------------------------------------

--
-- Table structure for table `image_comments`
--

CREATE TABLE IF NOT EXISTS `image_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `image_comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `item_details` text NOT NULL,
  `total` int(11) NOT NULL,
  `pay_status` int(11) NOT NULL COMMENT 'payment status',
  `date` int(11) NOT NULL,
  `invoice_note` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `invoices`
--


-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `service_type` int(11) DEFAULT '0' COMMENT 'link to services',
  `created` int(11) DEFAULT NULL,
  `completed` int(11) DEFAULT NULL,
  `no_of_image` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `todo` text,
  `status` int(11) DEFAULT '2' COMMENT '0=deleted, 1=archive, 2=new, 3=posted, 4=completed, 5=paid',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `service_type`, `created`, `completed`, `no_of_image`, `user_id`, `modified`, `todo`, `status`) VALUES
(15, '#15', 0, 1391716323, 1391716323, 1, 9, 0, '', 3),
(16, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(17, 'editing', 0, 1397263223, NULL, 0, 9, 0, 'Progressively envisioneer open-source data through client-centric manufactured products. Assertively build front-end portals for collaborative catalysts for change. Distinctively syndicate backend strategic theme areas via bricks-and-clicks portals. Proactively aggregate reliable. hghfg', 3),
(18, '#18', 0, 1397273425, NULL, 2, 9, 0, '', 3),
(19, 'Job Name', 0, 1397311797, NULL, 0, 9, 0, 'Progressively envisioneer open-source data through client-centric manufactured products. Assertively build front-end portals for collaborative catalysts for change. Distinctively syndicate backend strategic theme areas asdkflsdf', 3),
(20, NULL, 0, NULL, NULL, NULL, 9, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `job_assigned`
--

CREATE TABLE IF NOT EXISTS `job_assigned` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `assign_by` int(11) NOT NULL,
  `assign_to` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '3' COMMENT '0=deleted, 1=active/working, 2=completed, 3=pending for quotation, 4=closed, 5=mistake post, 6=spam',
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `job_assigned`
--


-- --------------------------------------------------------

--
-- Table structure for table `job_instructions`
--

CREATE TABLE IF NOT EXISTS `job_instructions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `instruction` text NOT NULL,
  `date` int(11) NOT NULL,
  `default` int(11) NOT NULL DEFAULT '0' COMMENT '0=not default, 1=default',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `job_instructions`
--

INSERT INTO `job_instructions` (`id`, `user_id`, `instruction`, `date`, `default`) VALUES
(1, 9, 'Progressively envisioneer open-source data through client-centric manufactured products. Assertively build front-end portals for collaborative catalysts for change. Distinctively syndicate backend strategic theme areas via bricks-and-clicks portals. Proactively aggregate reliable.', 1391686595, 0),
(2, 9, 'on', 1391691750, 0),
(3, 9, 'Progressively envisioneer open-source data through client-centric manufactured products. Assertively build front-end portals for collaborative catalysts for change. Distinctively syndicate backend strategic theme areas via bricks-and-clicks portals. Proactively aggregate reliable. sdfsdaf', 1391691793, 0),
(4, 9, 'Progressively envisioneer open-source data through client-centric manufactured products. Assertively build front-end portals for collaborative catalysts for change. Distinctively syndicate backend strategic theme areas via bricks-and-clicks portals. Proactively aggregate reliable. hghfg', 1397263223, 0),
(5, 9, 'Progressively envisioneer open-source data through client-centric manufactured products. Assertively build front-end portals for collaborative catalysts for change. Distinctively syndicate backend strategic theme areas asdkflsdf', 1397311797, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `login_attempts`
--


-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `payment_type` int(11) NOT NULL COMMENT 'one_time, daily, weekly, monthly, 3months, 6months, yearly',
  `paid_amount` int(11) NOT NULL,
  `payment_gateway` int(11) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `payments`
--


-- --------------------------------------------------------

--
-- Table structure for table `quotations`
--

CREATE TABLE IF NOT EXISTS `quotations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `given_by` int(11) NOT NULL COMMENT 'admin/stuff user id',
  `job_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `revised_id` int(11) NOT NULL COMMENT 'previous quotation id',
  `invoice_cycle` int(11) NOT NULL COMMENT 'daily, weekly, monthly, 3month, 6month, yearly(if the payment is recursive)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `quotations`
--


-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'Clipping path'),
(2, 'Layer Masking'),
(3, 'Alpha Masking'),
(4, 'Color Masking'),
(5, 'Retouch'),
(6, 'Drop shadow'),
(7, 'Retouch'),
(8, 'Neck Joint/ Composition'),
(9, 'Reflection'),
(10, 'Cropping and resize'),
(11, 'Old Photo Restoration');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(9, '\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0', 'itsmeka', 'ae275b658be3695b62a28353f831ec0b7d8c5108', NULL, 'itskawsar41@gmail.com', NULL, NULL, NULL, 'b628e8e655ea39e5a9fda0f6c2b0d10950b315f6', 1390989702, 1398162554, 1, NULL, NULL, NULL, NULL),
(10, '::1', 'test', '0eLNrNVOVBb49ef4f36a63c584bd5127218a96a6', NULL, 'test@gmail.com', NULL, NULL, NULL, '.NpUqKb2fK', 1398162783, 1398162784, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(18, 9, 2),
(19, 10, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
