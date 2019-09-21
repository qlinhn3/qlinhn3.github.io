-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2018 at 03:51 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


--
-- Database: `ql_ban_sua`
--

-- --------------------------------------------------------

--
-- Table structure for table `thông tin hãng sữa`

--

CREATE TABLE IF NOT EXISTS `thông tin hãng sữa` (
  `Mã HS` char(3) NOT NULL,
  `Tên hãng sữa` varchar(15) NOT NULL,
  `Địa chỉ` varchar(100) NOT NULL,
  `Điện thoại` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thông tin hãng sữa`

--

INSERT INTO `thông tin hãng sữa` (`Mã HS`, `Tên hãng sữa`, `Địa chỉ`, `Điện thoại`, `Email`) 
VALUES	
('AB', 'Abbott', 'Công ty nhập khẩu Việt Nam', '8741258', 'abbott@ab.com'),
	
('DL', 'Dutch Lady', 'Khu công nghiệp Biên Hòa - Đồng Nai', '7826451', 'dutchlady@dl.com'),
	
('DM', 'Dumex', 'Khu công nghiệp Sóng Thần Bình Dương', '6258943', 'dumex@dm.com'),

	('MJ', 'Mead Johnson', 'Công ty nhập khẩu Việt Nam', '8741258', 'meadjohn@mj.com'),
	
('NTF', 'Nutifood', 'Khu công nghiệp sóng thần Bình Dương', '7895632', 'nutifood@ntf.com'),

	('VNM', 'Vinamilk', '123 Nguyễn Du - Quận 1 - TP.HCM', '8794561', 'vinamilk@vnm.com');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `thông tin hãng sữa`
--
ALTER TABLE `thông tin hãng sữa`
 ADD PRIMARY KEY (`Mã HS`);

