-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 08:14 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951060600_university`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` int(10) UNSIGNED NOT NULL,
  `hovaten` varchar(50) NOT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` varchar(20) DEFAULT NULL,
  `trinhdo` varchar(50) NOT NULL,
  `chuyenmon` varchar(50) NOT NULL,
  `hocham` varchar(50) NOT NULL,
  `hocvi` varchar(50) NOT NULL,
  `coquan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
(1, 'Janine Fouracres', '0000-00-00', 'Male', 'Pontifica Università Gregoriana', 'Sales Representative', 'MQC', 'Senior Cost Accountant', '1 Northridge Center'),
(2, 'Olga Stairs', '0000-00-00', 'Female', 'Notre Dame College of Ohio', 'Operator', 'Applied Kinesiology', 'Paralegal', '44 Oriole Alley'),
(3, 'Yelena Camilio', '0000-00-00', 'Polygender', 'Conservatoire National des Arts et Métiers', 'Internal Auditor', 'International Shipping', 'Analyst Programmer', '0 Dottie Alley'),
(4, 'Coreen Hanratty', '0000-00-00', 'Male', 'Nagoya University of Arts', 'VP Accounting', 'UltraTax', 'Mechanical Systems Engineer', '09 Lotheville Road'),
(5, 'Sascha Sybe', '0000-00-00', 'Female', 'Hanoi University of Mining and Geology', 'Sales Representative', 'Call Centers', 'Statistician IV', '05388 Melrose Trail');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
