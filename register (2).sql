-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2023 at 02:51 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `template`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `emailicon` varchar(255) DEFAULT NULL,
  `callicon` varchar(255) DEFAULT NULL,
  `messageicon` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `Address1` varchar(255) DEFAULT NULL,
  `Address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `action` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `URL` varchar(255) DEFAULT NULL,
  `videolink` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedln` varchar(255) DEFAULT NULL,
  `Profile` text DEFAULT NULL,
  `Logo` text DEFAULT NULL,
  `imagepost` text DEFAULT NULL,
  `QRCodeImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `Designation`, `CompanyName`, `emailicon`, `callicon`, `messageicon`, `Email`, `phone`, `Address1`, `Address2`, `city`, `country`, `state`, `zip`, `action`, `google`, `title`, `URL`, `videolink`, `instagram`, `facebook`, `twitter`, `linkedln`, `Profile`, `Logo`, `imagepost`, `QRCodeImage`) VALUES
(3, 'swdfgb', 'defvgd', 'defcvsdcf', 'rahul@gmail.com', '123432232', '123432543', 'rahul@gmail.com', '123432', 'ds', 'wsdxcaqs', '', 'India', 'sdxswxd', '123456', 'NBVC', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'hrekk9i', 'http://google.com', 'https://www.youtube.com/watch?v=MsFopjWCFSI', 'DFCFDES', 'DFCDESD', 'DFCESD', 'dxv bvcdx', 'uploads/pexels-pixabay-220453.jpg ', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', 'qrcodes/user_data_qr_3.jpg'),
(5, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(6, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(7, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(8, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(9, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(10, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(11, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(12, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(13, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(14, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(15, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(16, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(17, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(18, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(19, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', ''),
(20, 'wsdxaq', 'asxda', 'asxdaq', 'sunil@gmail.com', '9876543', '98765432', 'rahul@gmail.com', '12343287654', 'ds', 'DCFVDXC', 'fcdc', 'India', 'fdsdxc', '123456', 'fcdxs', 'https://maps.app.goo.gl/6cvd17zCNzWcMPiS8', 'vfcdsdx', 'http://google.com', 'https://www.youtube.com/watch?v=3yQRMILtM2k', 'fdsc', 'edeswdx', 'dcwsdc', 'fvdesdcv', 'uploads/pexels-pixabay-220453.jpg', 'uploads/deltaview.png', 'uploads/pexels-pixabay-220453.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
