-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 24, 2019 lúc 06:07 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thanhqltv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `masach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tensach` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tentacgia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `namxb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `anh` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`masach`, `tensach`, `tentacgia`, `namxb`, `anh`) VALUES
('004', 'toan cao cap 4', 'dh xay dung', '2000', '60294946_2336972569700424_3411905196555501568_o.jpg'),
('100', 'Toan cao cap 2', 'dh bach khoa', '2001', '60294946_2336972569700424_3411905196555501568_o.jpg'),
('101', 'Toan cao cap 6', 'dh bach khoa', '2000', '60294946_2336972569700424_3411905196555501568_o.jpg'),
('102', 'Toan cao cap 7', 'dh bach khoa', '2001', 'phutbandau.jpg'),
('110', 'Toan cao cap 8', 'dh bach khoa', '2005', 'phutbandau.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`masach`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
