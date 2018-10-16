-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 02:25 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geenertechnology`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
`about_id` int(11) NOT NULL,
  `about` text NOT NULL,
  `about_title` text NOT NULL,
  `photo` varchar(300) NOT NULL,
  `title1` varchar(200) NOT NULL,
  `about1` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`about_id`, `about`, `about_title`, `photo`, `title1`, `about1`) VALUES
(3, '                             Bootstrap is a free front-end framework for faster and easier web development Bootstrap includes HTML and CSS based design templates for typography, forms, buttons, tables, navigation, modals, image carousels and many other, as well as optional JavaScript plugins Bootstrap also gives you the ability to easily create responsive designs                                                                                                                                                                              ', 'We Are Greener Technology.                                                                           ', 'http://localhost/greenerTechnology/assets/user/images/small/indoor-plants-1.jpg', '         We are trusted partner                               ', '                Sed ultrices porta cursus. Aenean nec sagittis augue. Integer fringilla nunc non leo blandit efficitur. Aenean vel sodales felis. Nunc ac dignissim nunc. Aenean vel pellentesque lectus. Fusce nibh orci, porttitor nec odio sit amet.                 ');

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE IF NOT EXISTS `admin_account` (
`admin_accunt_id` int(11) NOT NULL,
  `balance` double(15,2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`admin_accunt_id`, `balance`) VALUES
(1, 76800.00);

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
`admin_user_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `dob` varchar(33) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `email` varchar(33) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(33) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_user_id`, `fullname`, `dob`, `phone`, `photo`, `email`, `username`, `password`, `gender`) VALUES
(7, 'rony', '17-07-1995', '01752474197', 'http://localhost/dokanHat/assets/user/images/small/user.png', 'saifulsaif5854@gmail.com', 'rony', 'admin', 'Male'),
(8, 'ronyrony', '17-07-1995', '01752474197', 'http://localhost/dokanHat/assets/user/images/small/user.png', 'saifulsaif5854@gmail.com', 'ronykhan', 'ronykhan', 'Male'),
(9, 'new', '17-07-1995', '01752474197', 'http://localhost/dokanHat/assets/user/images/small/user.png', 'saifulsaif5854@gmail.com', 'new', 'new', 'Male'),
(10, 'dd', '17-07-1995', '01752474197', 'http://localhost/greenerTechnology/assets/user/images/small/18620509_1242767719166989_3682628270978618592_o.jpg', 'saifulsaif5854@gmail.com', 'dd', 'dd', 'Male'),
(15, 'saiful', 'dsa', '01752474197', 'http://localhost/greenerTechnology/assets/user/images/small/30698468_1232015020268862_6561750308605912353_n.jpg', 'saifulsaif5854@gmail.com', 'admin', 'admin', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE IF NOT EXISTS `artists` (
`artists_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `facebook` varchar(111) NOT NULL,
  `twitter` varchar(25) NOT NULL,
  `linkin` varchar(200) NOT NULL,
  `gmail` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`artists_id`, `photo`, `name`, `category`, `facebook`, `twitter`, `linkin`, `gmail`) VALUES
(22, 'http://localhost/greenerTechnology/assets/user/images/small/www.png', 'Saiful Islam', 'Software Engineer', 'https://www.facebook.com/Saifulislam42', '#', '#', '#'),
(23, 'http://localhost/greenerTechnology/assets/user/images/small/team3_copy.png', 'Saiful Islam', 'Software Engineer', '0', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
`blog_id` int(11) NOT NULL,
  `athor` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(400) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `athor`, `date`, `title`, `details`, `photo`) VALUES
(2, 'Admin', '13-05-2018', 'Why Nakshi kotir is not exsit', '                                                       It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose\r\n\r\nAliquam tincidunt mauris eu risus.\r\nVestibulum auctor dapibus neque.\r\nNunc dignissim risus id metus.\r\nCras ornare tristique elit.\r\nVivamus vestibulum nulla nec ante.\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour,or randomised words which dont look even slightly believable. If you are goi                            ', 'http://localhost/greenerTechnology/assets/user/images/small/indoor-plants-11.jpg'),
(3, 'Admin', '30-05-2018', 'Jamdani warehouse', '                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose Aliquam tincidunt mauris eu risus. Vestibulum auctor dapibus neque. Nunc dignissim risus id metus. Cras ornare tristique elit. Vivamus vestibulum nulla nec ante. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour,or randomised words which dont look even slightly believable. If you are goi   It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using ''Content here, content here'', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for ''lorem ipsum'' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose Aliquam tincidunt mauris eu risus. Vestibulum auctor dapibus neque. Nunc dignissim risus id metus. Cras ornare tristique elit. Vivamus vestibulum nulla nec ante. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour,or randomised words which dont look even slightly believable. If you are goi                            ', 'http://localhost/greenerTechnology/assets/user/images/small/home-no-fuss-plants-sill-today-150804-tease_8aad0b93c3e2d7b25ab129e8d97c5958.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
`contact_id` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `number` varchar(22) NOT NULL,
  `email` varchar(34) NOT NULL,
  `details` text NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `youtube` varchar(200) NOT NULL,
  `instagram` varchar(229) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `address`, `number`, `email`, `details`, `facebook`, `twitter`, `youtube`, `instagram`) VALUES
(3, '#32, Sector 98 Panthapath', '01759998001', 'saifulsaif5854@gmail.com', '                                                                                                                                                                                                                                                                                                                                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s,                                                                                                                                                                                                                                                                                                                  ', '#', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
`counter_id` int(11) NOT NULL,
  `project` int(22) NOT NULL,
  `client` int(200) NOT NULL,
  `member` int(229) NOT NULL,
  `award` int(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter_id`, `project`, `client`, `member`, `award`) VALUES
(1, 53, 63, 8, 30);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
`gallery_id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `photo`, `title`) VALUES
(19, 'http://localhost/greenerTechnology/assets/user/images/small/17622851_1192841687492926_1339503335_o.png', ''),
(21, 'http://localhost/greenerTechnology/assets/user/images/small/17838400_1204374566339638_555707742_o.png', ''),
(22, 'http://localhost/greenerTechnology/assets/user/images/small/nakshikotir.png', ''),
(23, 'http://localhost/greenerTechnology/assets/user/images/small/Screenshot_2017-08-18_02.30_.06_.png', ''),
(29, 'http://localhost/greenerTechnology/assets/user/images/small/Untitled.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
`logo_id` int(11) NOT NULL,
  `logo` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`logo_id`, `logo`) VALUES
(4, 'http://localhost/greenerTechnology/assets/user/images/small/33851505_1714724135307370_8043ddd68914078236672_n.png');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
`partner_id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`partner_id`, `photo`, `link`) VALUES
(2, 'http://localhost/greenerTechnology/assets/user/images/small/L1_copy.png', 'http://estore.4ksoftltd.com/1'),
(3, 'http://localhost/greenerTechnology/assets/user/images/small/logo_header.png', 'http://estore.4ksoftltd.com/'),
(4, 'http://localhost/greenerTechnology/assets/user/images/small/logo3.png', 'http://estore.4ksoftltd.com/');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE IF NOT EXISTS `portfolio` (
`id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `name` varchar(50) NOT NULL,
  `artiest` varchar(34) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `photo`, `name`, `artiest`, `link`) VALUES
(14, 'http://localhost/greenerTechnology/assets/user/images/small/project-3.jpg', 'ERP', '0', 'Modern designed and developed websites using the latest techniques.                                                                                       '),
(21, 'http://localhost/greenerTechnology/assets/user/images/small/30698468_1232015020268862_6561750308605912353_n.jpg', 'software', '0', '                      Modern designed and developed websites using the latest techniques.	\r\n       '),
(22, 'http://localhost/greenerTechnology/assets/user/images/small/project-1.jpg', 'software', '0', '                    Modern designed and developed websites using the latest techniques.	\r\n         '),
(23, 'http://localhost/greenerTechnology/assets/user/images/small/project-5.jpg', 'software', '0', '                    Modern designed and developed websites using the latest techniques.	\r\n         ');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
`slider_id` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `title` varchar(111) NOT NULL,
  `details` text NOT NULL,
  `details1` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `photo`, `title`, `details`, `details1`) VALUES
(3, 'http://localhost/greenerTechnology/assets/user/images/small/slider-3.jpg', 'We are working in', '                             Greener Technology                                                        ', '                                       Sister concern of Greener Banglades                          '),
(4, 'http://localhost/greenerTechnology/assets/user/images/small/home-no-fuss-plants-sill-today-150804-tease_8aad0b93c3e2d7b25ab129e8d97c5958.jpg', 'We are working in', '                  Greener Technology           ', '                     Sister concern of Greener Bangladesh        ');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
`testimonial_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `name`, `designation`, `details`) VALUES
(2, 'Jhon', 'Engineer', '                                                \r\n                           There are many variations of passages of available, but the majority have suffered alteration in some form..\r\n                                                            '),
(3, 'Mark', 'Engineer', '           here are many variations of passages of available, but the majority have suffered alteration in some form..                  '),
(4, 'Max', 'Designer', '                         here are many variations of passages of available, but the majority have suffered alteration in some form..    '),
(5, 'Maxual', 'Designer', '                         here are many variations of passages of available, but the majority have suffered alteration in some form..    ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`admin_id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL,
  `user_status` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`admin_id`, `email`, `password`, `status`, `user_status`, `user_id`) VALUES
(1, 'adminn', 'admin', 'admin', '', 2),
(2, 'saif', 'saif', 'admin', '', 3),
(3, 'ifty', 'ifty', 'user', 'active', 4),
(4, 'sajib', 'sajib', 'user', 'deactive', 5),
(5, 'saiful', 'saiful', 'user', 'active', 6),
(7, 'robin', 'admin', 'user', 'active', 8),
(8, 'mohin', 'admin', 'user', 'active', 9),
(9, 'saifulsaif', 'admin', 'user', 'active', 10),
(10, 'rana', 'admin', 'user', 'deactive', 11),
(11, 'kamrul', 'admin', 'user', 'deactive', 12),
(12, '0', 'admin', 'user', 'deactive', 13),
(13, '0', 'admin', 'user', 'active', 14),
(14, '                    ', '               ', 'user', 'active', 15),
(15, '                    ', '               ', 'user', 'active', 16),
(16, '                    ', '               ', 'user', 'deactive', 17),
(17, '                    ', '               ', 'user', 'active', 18),
(18, '                    ', '               ', 'user', 'active', 19),
(19, 'sagor', 'sagor', 'user', 'active', 20),
(20, '                    ', '               ', 'user', 'active', 21),
(21, '                    ', '               ', 'user', 'active', 22),
(22, 'admin', 'admin', 'user', 'active', 23),
(23, 'somon', 'admin', 'user', 'active', 24),
(24, 'ronyt', 'admin', 'user', 'active', 25),
(25, 'saifulisalm', 'admin', 'user', 'active', 26),
(26, 'saifulisalm', 'admin', 'user', 'active', 27),
(27, 'saifulisalm', 'admin', 'user', 'active', 28),
(28, 'saifulisalm', 'admin', 'user', 'active', 29),
(29, 'admin', 'admin', 'user', 'active', 30),
(30, 'admin', 'admin', 'user', 'active', 31),
(31, 'admin', 'admin', 'user', 'active', 32),
(32, 'admin', 'admin', 'user', 'active', 33),
(33, 'admin', 'admin', 'user', 'active', 34),
(34, 'admin', 'admin', 'user', 'active', 35),
(35, 'saifulsaif', 'admin', 'user', 'active', 100031),
(36, 'rony', 'rony', 'admin', 'active', 2),
(37, 'rony', 'admin', 'admin', 'active', 3),
(38, 'rony', 'admins', 'admin', 'active', 4),
(39, 'rony', 'dfdsf', 'admin', 'active', 5),
(41, 'ron', 'admin', 'admin', 'active', 7),
(42, 'ronykhan', 'ronykhan', 'admin', 'active', 8),
(43, 'admin', 'admin', 'admin', 'active', 9),
(44, 'sumon', 'sumon', 'user', 'active', 100032),
(45, 'jak', 'jak', 'user', 'active', 100033),
(46, 'jak1', 'jak1', 'user', 'active', 100034),
(47, 'jak2', 'jak2', 'user', 'active', 100035),
(48, 'dd', 'dd', 'admin', 'active', 10),
(49, 'ddd', 'ddd', 'admin', 'active', 11),
(50, 'dddd', 'dddd', 'admin', 'active', 12),
(51, 'ddddd', 'ddddd', 'admin', 'active', 13),
(52, 'tt', 'tt', 'admin', 'active', 14),
(53, 'admin', 'admin', 'admin', 'active', 15),
(54, 'admin', 'admin', 'admin', 'active', 16),
(55, 'admin', 'admin', 'admin', 'active', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE IF NOT EXISTS `user_contact` (
`user_contact_id` int(11) NOT NULL,
  `name` varchar(33) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`user_contact_id`, `name`, `email`, `date`, `message`) VALUES
(2, 'saiful', 'saifulsaif5854@gmail.com', 'texting', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled i'),
(5, 'rony', 'saifulsaif5854@gmail.com', '11-05-2018', 'dfsf');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `type` varchar(22) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `referid` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100036 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `username`, `fullname`, `dob`, `gender`, `phone`, `email`, `address`, `type`, `photo`, `password`, `referid`) VALUES
(0, 'saifulisalm', 'mohin', '17-07-1995', 'female', '01752474197', 'admin@admin.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/img-4.jpg', 'admin', '10'),
(1, 'saifulisalm', 'Admin', '17-07-1995', 'male', '01752474197', 'saifulsaif5854@gmail.com', '', '', '', 'admin', '1111'),
(2, 'admin', 'Saifulsaif', '17-07-1995', 'male', '01752474197', 'admin@admin.com', '', '', 'http://localhost/bazarHat/assets/user/images/small', 'admin', '6'),
(4, 'ifty', 'ifty ', '17-07-1995', 'male', '01752474197', 'saifulislam5854@gamil.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/ww.png', 'ifty', '5'),
(5, 'sajib', 'sajib', '17-07-1995', 'male', '01752474197', 'saifulislam5854@gamil.com', '', '', 'http://localhost/bazarHat/assets/user/images/small/img-7.jpg', 'sajib', '6'),
(6, 'saiful', 'saiful', '17-07-1995', 'male', '01752474197', 'saifulislam5854@gamil.com', '', 'star', 'http://localhost/dokanHat/assets/user/images/small/IMG_8311.jpg', 'saiful', '9'),
(7, 'ss', 'saiful', '17-07-1995', 'male', '01752474197', 'admin@admin.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/IMG_8311.jpg', 'admin', '6'),
(8, 'robin', 'robinkhan', '17-07-1995', 'male', '01752474197', 'admin@example.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/Untitled-1.jpg', 'admin', '12'),
(9, 'mohin', 'mohin', '17-07-1995', 'male', '01752474197', 'admin@admin.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/img-7.jpg', 'admin', '7'),
(10, 'saifulsaif', 'saifulsaif', '17-07-1995', 'Male', '01752474197', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/img-3.jpg', 'admin', '6'),
(11, 'rana', 'saifulsaif', '17-07-1995', 'Male', '01752474197', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/img-6.jpg', 'admin', '12'),
(12, 'kamrul', 'kamrul', '17-07-1995', 'Male', '01752474197', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/img-2.jpg', 'admin', '6'),
(13, '0', 'sagor', '17-07-1995', 'Fale', '1234567', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/5.jpg', 'admin', '7'),
(14, '0', 'roton', '17-07-1995', 'Male', '01752474197', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/Untitled-1.jpg', 'admin', '7'),
(15, '                                   admin          ', '                                  mohin           ', '                    ', '          ', '               ', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/Untitled-1.jpg', '                    ', '7'),
(16, '                                   admin          ', '                                  mohin           ', '                    ', '          ', '               ', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/img-7.jpg', '                    ', '8'),
(17, '                                   admin          ', '                                  saiful          ', '                    ', '          ', '               ', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/Untitled-1.jpg', '                    ', '7'),
(18, '                                   admin          ', '                                  mohin           ', '                    ', '          ', '               ', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/Untitled-1.jpg', '                    ', '7'),
(19, '                                   admin          ', '                                  mohin           ', '                    ', '          ', '               ', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/ww.png', '                    ', '7'),
(20, 'sagor', 'sagor', '17-07-1995', 'male', '01752474197', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/4.jpg', 'sagor', '8'),
(21, '                                   admin          ', '                                  mohin           ', '                    ', '          ', '               ', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/img-1.jpg', '                    ', '10'),
(22, '                                   admin          ', '                                  mohin           ', '                    ', '          ', '               ', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/ww.png', '                    ', '10'),
(23, 'adminn', 'mohin', '17-07-1995', 'female', '01752474197', 'admin@example.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/Untitled-1.jpg', 'admin', '8'),
(25, 'rony', 'rony', '17-07-1995', 'female', '01752474197', 'admin@example.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/ww.png', 'admin', '5'),
(29, 'saifulisalm', 'mohin', '17-07-1995', 'female', '01752474197', 'admin@admin.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/img-4.jpg', 'admin', '10'),
(31, 'admin', 'sad', '17-07-1995', 'Male', '01752474197', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/57dc767a57b808403493035a05bb2990.jpg', 'admin', '9'),
(32, 'admin', 'red', '17-07-1995', 'Male', '01752474197', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/25642e4ac2ee5f264e14ca1024f73838.jpg', 'admin', '9'),
(33, 'admin', 'saiful89', '17-07-1995', 'Male', '01752474197', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/3866d4aad6dc7945bec115057c68c29f--indian-models-hot-male-models.jpg', 'admin', '9'),
(34, 'admin', 'saiful', '17-07-1995', 'Male', '01752474197', 'admin@admin.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/25642e4ac2ee5f264e14ca1024f73838.jpg', 'admin', '25'),
(35, 'admin', 'saiful', '17-07-1995', 'Male', '01752474197', 'admin@admin.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/57dc767a57b808403493035a05bb2990.jpg', 'admin', '25'),
(100030, 'admin', 'saifuldfdsf', '17-07-1995', 'Male', '01752474197', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/WIN_20171129_13_46_14_Pro.jpg', 'admin', '9'),
(100031, 'saifulsaif', 'saiful', '17-07-1995', 'Male', '3444444', 'saifulsaif5854@gmail.com', '', '', 'http://localhost/dokanHat/assets/user/images/small/1501415086h3.jpg', 'admin', '17'),
(100032, 'sumon', 'sumun', '17-07-1995', 'male', '01752474197', 'rabinkhan5854@gmail.com', '', 'gold', 'http://localhost/dokanHat/assets/user/images/small/user.png', 'sumon', '25'),
(100033, 'jak', 'jak', '17-07-1995', 'male', '01752474197', 'saifulsaif5854@gmail.com', '', 'star', 'http://localhost/dokanHat/assets/user/images/small/user.png', 'jak', '8'),
(100034, 'jak1', 'jak1', '17-07-1995', 'Male', '01752474197', 'saifulsaif5854@gmail.com', '', 'star', 'http://localhost/dokanHat/assets/user/images/small/user.png', 'jak1', '100033'),
(100035, 'jak2', 'jak2', '17-07-1995', 'Male', '01752474197', 'saifulsaif5854@gmail.com', '', 'star', 'http://localhost/dokanHat/assets/user/images/small/1501415086h3.jpg', 'jak2', '100034');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
 ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
 ADD PRIMARY KEY (`admin_accunt_id`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
 ADD PRIMARY KEY (`admin_user_id`);

--
-- Indexes for table `artists`
--
ALTER TABLE `artists`
 ADD PRIMARY KEY (`artists_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
 ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
 ADD PRIMARY KEY (`counter_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
 ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
 ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
 ADD PRIMARY KEY (`partner_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
 ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
 ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
 ADD PRIMARY KEY (`user_contact_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
MODIFY `admin_accunt_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
MODIFY `admin_user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `artists`
--
ALTER TABLE `artists`
MODIFY `artists_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
MODIFY `counter_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
MODIFY `partner_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
MODIFY `user_contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100036;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
