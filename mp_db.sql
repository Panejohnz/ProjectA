-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 03:25 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`) VALUES
(1, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(2, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(3, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(4, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(5, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(6, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(7, 'My title', 'My Name', 'My date', 0),
(8, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(9, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(10, 'A1', 'sometoplay111@gmail.com', 'A1', 827867702),
(11, 'A1', 'sometoplay111@gmail.com', 'A1', 827867702),
(12, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(13, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(14, 'Pitchakorn', 'sometoplay111@gmail.com', 'a1', 0),
(15, 'Pitchakorn', 'sometoplay111@gmail.com', 'a1', 0),
(16, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(17, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(18, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(19, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(20, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(21, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(22, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(23, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(24, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(25, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(26, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(27, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(28, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(29, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(30, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(31, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(32, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(33, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(34, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(35, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(36, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(37, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0),
(38, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(39, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(40, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(41, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(42, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(43, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(44, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(45, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(46, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(47, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(48, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(49, 'A1', 'sometoplay111@gmail.com', 'A1', 0),
(50, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(51, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(52, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(53, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(54, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(55, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(56, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(57, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(58, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(59, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(60, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(61, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(62, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(63, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(64, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(65, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(66, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(67, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(68, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(69, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(70, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(71, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(72, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0),
(73, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 31);

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_id` int(4) NOT NULL COMMENT 'รหัสรูปภาพ',
  `img_name` varchar(50) NOT NULL COMMENT 'ชื่อรูปภาพ',
  `img_detail` varchar(100) NOT NULL COMMENT 'รายละเอียดรูปภาพ	',
  `img_price` int(11) NOT NULL COMMENT 'ราคารูปภาพ	',
  `imgtype_id` int(10) NOT NULL COMMENT 'รหัสประเภทรูปภาพ	',
  `image` varchar(50) NOT NULL COMMENT 'รูปภาพ',
  `img_stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`img_id`, `img_name`, `img_detail`, `img_price`, `imgtype_id`, `image`, `img_stock`) VALUES
(51, '1', '', 999, 0, '1072495_14.jpg', 2),
(52, '2', '', 2000, 0, '1072495_15.jpg', 5),
(61, 'qwe', '', 123, 0, '1072495_111.jpg', 8),
(64, 'สว่าน', '', 2300, 7, '1072495_114.jpg', 0),
(65, 'พัดลม', '123', 7077, 7, 'S__30695426.jpg', 58);

-- --------------------------------------------------------

--
-- Table structure for table `imgtype`
--

CREATE TABLE `imgtype` (
  `imgtype_id` int(10) NOT NULL COMMENT 'รหัสประเภทรูปภาพ	',
  `imgtype_name` varchar(50) NOT NULL COMMENT 'ชื่อประเภทรูปภาพ	',
  `typeimg` varchar(200) NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `imgtype`
--

INSERT INTO `imgtype` (`imgtype_id`, `imgtype_name`, `typeimg`) VALUES
(3, 'ไฟ', 'feature2.jpg'),
(4, 'aaaaaaaaaaaa', 'tenor1.gif'),
(5, 'asd', 'feature8.jpg'),
(7, 'เครื่องใช้ไฟฟ้า', 'electric1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `status` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `customerid`, `name`, `email`, `address`, `phone`, `status`) VALUES
(1, '2019-09-26', 1, 'A1', 'sometoplay111@gmail.com', 'A1', 0, '1'),
(2, '2019-09-26', 2, 'A1', 'sometoplay111@gmail.com', 'A1', 0, '1'),
(3, '2019-09-26', 3, 'A1', 'sometoplay111@gmail.com', 'A1', 0, '1'),
(4, '2019-09-26', 4, 'A1', 'sometoplay111@gmail.com', 'A1', 0, '1'),
(5, '2019-09-26', 5, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(6, '2019-09-27', 6, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(7, '0000-00-00', 7, '', '', '', 0, ''),
(8, '2019-09-27', 8, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(9, '2019-09-27', 9, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(10, '2019-09-27', 10, 'A1', 'sometoplay111@gmail.com', 'A1', 827867702, ''),
(11, '2019-09-27', 11, 'A1', 'sometoplay111@gmail.com', 'A1', 827867702, ''),
(12, '2019-09-27', 12, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(13, '2019-09-27', 13, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(14, '2019-09-27', 15, 'Pitchakorn', 'sometoplay111@gmail.com', 'a1', 0, ''),
(15, '2019-09-27', 16, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(16, '2019-09-27', 17, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(17, '2019-09-27', 18, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(18, '2019-09-29', 19, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(19, '2019-09-29', 20, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(20, '2019-09-30', 21, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(21, '2019-09-30', 22, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(22, '2019-09-30', 23, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(23, '2019-09-30', 24, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(24, '2019-09-30', 25, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(25, '2019-09-30', 26, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(26, '2019-09-30', 27, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(27, '2019-09-30', 28, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(28, '2019-09-30', 29, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(29, '2019-09-30', 30, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(30, '2019-09-30', 31, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(31, '2019-09-30', 32, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(32, '2019-09-30', 33, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(33, '2019-09-30', 34, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(34, '2019-09-30', 35, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(35, '2019-09-30', 36, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(36, '2019-09-30', 37, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 0, ''),
(37, '2019-09-30', 38, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(38, '2019-09-30', 39, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(39, '2019-09-30', 40, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(40, '2019-09-30', 41, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(41, '2019-09-30', 42, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(42, '2019-09-30', 43, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(43, '2019-09-30', 44, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(44, '2019-09-30', 45, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(45, '2019-09-30', 46, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(46, '2019-09-30', 47, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(47, '2019-09-30', 48, 'A1', 'sometoplay111@gmail.com', 'A1', 0, ''),
(48, '2019-09-30', 49, '', '', '', 0, ''),
(49, '2019-09-30', 50, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(50, '2019-09-30', 51, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(51, '2019-09-30', 52, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(52, '2019-09-30', 53, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(53, '2019-09-30', 54, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(54, '2019-09-30', 55, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(55, '2019-09-30', 56, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(56, '2019-09-30', 57, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(57, '2019-09-30', 58, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(58, '2019-09-30', 59, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(59, '2019-09-30', 60, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(60, '2019-09-30', 61, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(61, '2019-09-30', 62, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(62, '2019-09-30', 63, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(63, '2019-09-30', 64, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(64, '2019-09-30', 65, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(65, '2019-09-30', 66, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(66, '2019-09-30', 67, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(67, '2019-09-30', 68, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(68, '2019-09-30', 69, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(69, '2019-09-30', 70, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(70, '2019-09-30', 71, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(71, '2019-09-30', 72, 'Pitchakorn', 'mildza_7702@hotmail.com', 'a1', 0, ''),
(72, '2019-09-30', 73, 'Pitchakorn', 'mildza_7702@hotmail.comq', 'a1', 31, '');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `orderid`, `productid`, `quantity`, `price`) VALUES
(1, 1, 0, 4, 404),
(2, 2, 0, 4, 404),
(3, 4, 0, 1, 2300),
(4, 5, 0, 4, 9200),
(5, 6, 0, 9, 20700),
(6, 8, 0, 2, 202),
(7, 8, 0, 1, 123),
(8, 9, 0, 1, 2300),
(9, 10, 0, 4, 404),
(10, 11, 0, 1, 101),
(11, 12, 0, 4, 404),
(12, 12, 0, 9, 1107),
(13, 13, 0, 12, 27600),
(14, 14, 0, 2, 4600),
(15, 15, 0, 1, 2300),
(16, 16, 0, 1, 2300),
(17, 18, 0, 1, 2300),
(18, 19, 1, 2, 1998),
(19, 20, 0, 1, 101),
(20, 22, 0, 1, 2300),
(21, 23, 0, 1, 2300),
(22, 24, 0, 1, 2300),
(23, 25, 0, 4, 404),
(24, 26, 0, 12, 27600),
(25, 27, 0, 12, 27600),
(26, 28, 2, 1, 2000),
(27, 29, 0, 1, 2300),
(28, 30, 0, 1, 2300),
(29, 31, 0, 12, 2300),
(30, 32, 0, 1, 2300),
(31, 33, 0, 1, 101),
(32, 34, 0, 1, 2300),
(33, 35, 0, 2, 2300),
(34, 36, 0, 1, 2300),
(35, 37, 0, 1, 2300),
(36, 38, 0, 4, 101),
(37, 39, 0, 1, 2300),
(38, 40, 0, 1, 2300),
(39, 43, 0, 3, 101),
(40, 44, 0, 1, 2300),
(41, 45, 0, 1, 2300),
(42, 46, 0, 1, 2300),
(43, 47, 0, 1, 2300),
(44, 48, 0, 1, 2300),
(45, 49, 0, 1, 101),
(46, 50, 0, 1, 2300),
(47, 51, 0, 1, 2300),
(48, 52, 0, 1, 2300),
(49, 53, 0, 1, 2300),
(50, 54, 0, 1, 2300),
(51, 55, 0, 1, 2300),
(52, 56, 0, 1, 2300),
(53, 57, 0, 1, 2300),
(54, 58, 0, 1, 2300),
(55, 60, 0, 12, 2300),
(56, 61, 0, 1, 2300),
(57, 62, 0, 1, 101),
(58, 63, 0, 1, 2300),
(59, 64, 0, 1, 2300),
(60, 65, 0, 1, 2300),
(61, 66, 0, 1, 101),
(62, 67, 0, 1, 2300),
(63, 68, 0, 1, 2300),
(64, 69, 0, 2, 2300),
(65, 70, 0, 3, 101),
(66, 71, 0, 8, 101),
(67, 71, 0, 2, 123),
(68, 71, 2, 2, 2000),
(69, 71, 1, 2, 999),
(70, 72, 0, 1, 2300);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` varchar(255) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
('1', 'รอการชำระเงิน'),
('2', 'ชำระเงินเรียบร้อย');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `admin_name`) VALUES
(3, 'tan', '698d51a19d8a121ce581499d7b701668', 'ttaaaa'),
(7, 'suriyakarn', 'a8f5f167f44f4964e6c998dee827110c', 'tannnnnnnnnnnnnnnnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `userdetail`
--

CREATE TABLE `userdetail` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `brithday` date NOT NULL,
  `gender` int(2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdetail`
--

INSERT INTO `userdetail` (`user_id`, `name`, `lastname`, `brithday`, `gender`, `address`, `email`, `username`, `password`, `tel`) VALUES
(1, 'aaaaaaaa', 'qwe', '1111-11-11', 2, '123', 'asdasd@gmail.com', 'aaaa', 'qwe', 1234567890),
(2, 'qwer', 'qwer', '2222-02-22', 2, 'qwrefdsw', 'asdasd@gmail.com', 'qaz', 'qaz', 1234567890),
(3, 'สุริ', 'สุขี', '1111-11-11', 1, '123', 'asdasd@gmail.com', 'sas', 'sas', 1234567890),
(4, 'aaa', 'aaa', '2222-02-22', 2, 'aaa', 'asdasd@gmail.com', 'aaa', 'aaa', 1234567890),
(5, 'suri', 'suri', '1998-02-11', 1, '125', 'suriyakarnsukkeepan@kookku.com', 'suri', 'suri', 111111111);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firsname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firsname`, `lastname`, `username`, `email`, `gender`, `password`, `status`) VALUES
(106, 'Pitchakorn', 'Pimpa', 'Panejohnz', 'mildza_7702@hotmail.com', 'male', 'qpal1010', 1),
(107, 'Suriyakarn', 'Sukheepan', 'tantan', 'tan@hotmail.com', 'male', '12345', 1),
(108, 'Pitchakorn', 'Pimpa', 'qq', 'mildza_7702@hotmail.comq', 'male', 'qq', 0),
(109, 'qwe', 'wer', 'root', 'mildza_7dd702@hotmail.com', 'male', 'ddd', 0),
(110, 'sss', 'sss', 'qwe', 'asdasd@gmail.com', 'male', 'qwe', 0),
(111, 'qqq', 'qqq', 'qqq', 'asdasd@gmail.com', 'male', 'qqq', 0),
(112, 'sad', 'asd', 'asd', 'asd@sad', 'male', '123', 0),
(113, 'asd', 'asd', 'asd', 'asd@asd', '1', 'asdasd', 0),
(115, 'sagkfjngdfogdg', 'lll', 'kk', 'll@ll', '2', 'kk', 0),
(116, 'asdasd', 'asd', 'asd', 'asdasa@asdqrfg', '1', 'asd', 0),
(118, 'qqqqwe', 'qweds', 'sadsd', 'asd@asd', 'male', '123', 0),
(120, 'ddd', 'ddd', 'ddd', 'ddd@ddd', 'male', 'ddd', 0),
(121, 'gg', 'gg', 'gg', 'gg@gg', 'male', 'gg', 0),
(122, 'aaa', 'aaa', 'aaa', 'asdasd@gmail.com', 'male', 'aaa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `imgtype`
--
ALTER TABLE `imgtype`
  ADD PRIMARY KEY (`imgtype_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdetail`
--
ALTER TABLE `userdetail`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `img_id` int(4) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรูปภาพ', AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `imgtype`
--
ALTER TABLE `imgtype`
  MODIFY `imgtype_id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประเภทรูปภาพ	', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userdetail`
--
ALTER TABLE `userdetail`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
