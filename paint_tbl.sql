-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 12:31 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paint_tbl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) UNSIGNED NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `status`) VALUES
(4, 'masume', 'masume72@gmail.com', 'e1a864f0b77f6c89794827a9035355dc8d052622', 1),
(5, 'raheleh', 'raheleebrahimi@yahoo.com', '45b2afb1f1cf4d14987ce1dfb6dfb52281d8d288', 1),
(6, 'roya', 'roya_m73@yahoo.com', '123', 0),
(7, 'roya', 'reyhaneh84@yahoo.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE `tblgallery` (
  `id_gallery` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `type` int(2) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `prev_url` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`id_gallery`, `title`, `image_url`, `status`, `type`, `video_url`, `prev_url`, `date`) VALUES
(1, 'part1', '', 1, 1, 'index.png', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutme`
--

CREATE TABLE `tbl_aboutme` (
  `id` int(3) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `biog` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `twiter` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `telegram` varchar(255) NOT NULL,
  `aparat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `id_article` int(3) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `short_desc` varchar(255) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`id_article`, `title`, `short_desc`, `image_src`, `description`, `status`) VALUES
(1, 'نام مقاله1', 'توضیحات مربوط به مقاله', 'painting-niello8-e11.jpg', 'در قدیم “ذغال مِل” شیوه ای از طراحی با ترکیب مِل و ذغال و با استفاده از قلم مو و بروی بوم بوده است که عمدتا توسط بعضی از شاگردان استاد کمال الملک استفاده می شده است.\r\n\r\n \r\n\r\nشاید بتوان گفت که واژه سیاه قلم از آن دوره باب شده است. به هر حال آنچه مسلم است، امروزه، کشیدن طرح با ذغال و ر، که معنای سیاه قلم تصور می گردد، جزو هنر طراحی محسوب شده و در آموزشهای آکادمیک و سیستماتیک دانشگاهی، تعریفی برای واژه سیاه قلم وجود ندارد.', 1),
(2, 'نام مقاله2', 'توضیحات مربوط به مقاله', 'photo_2018-01-30_22-17-42.jpg', 'ترکیب رنگها در نقاشی به صورت RGB میشه انجام داد.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(3) NOT NULL,
  `name_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name_category`) VALUES
(1, 'طراحی چهره'),
(2, 'طراحی حیوانات'),
(6, 'طراحی چشم');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id_video` int(3) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `id_category` int(3) NOT NULL,
  `rate` int(5) NOT NULL,
  `image_prev` varchar(255) NOT NULL,
  `video` varchar(100) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`id_video`, `title`, `description`, `price`, `date`, `status`, `id_category`, `rate`, `image_prev`, `video`, `count`) VALUES
(13, 'video1', 'video play', '50000', '2018-02-03 06:39:12', 1, 1, 4, 'backVideo.jpg', 'Mah-Pishoni.mp4', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblgallery`
--
ALTER TABLE `tblgallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `tbl_aboutme`
--
ALTER TABLE `tbl_aboutme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id_video`),
  ADD KEY `id_category` (`id_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `id_gallery` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_aboutme`
--
ALTER TABLE `tbl_aboutme`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `id_article` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id_video` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD CONSTRAINT `fk_video_cat` FOREIGN KEY (`id_category`) REFERENCES `tbl_category` (`id_category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
