-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 22, 2020 lúc 01:23 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web2`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(255) NOT NULL,
  `adminUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminPass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`, `adminName`) VALUES
(0, 'admin', 'admin', 'Admin'),
(1, 'menadmin', '123', 'Mến Admin'),
(2, 'nhungadmin', '123', 'Nhung Admin'),
(3, 'thephongadmin', '123', 'Thế Phong Admin'),
(4, 'thanhphongadmin', '123', 'Thanh Phong Admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catID` int(255) NOT NULL,
  `catName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catNumberProducts` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catID`, `catName`, `catNumberProducts`) VALUES
(1, 'ADIDAS', 2),
(2, 'NIKE', 3),
(3, 'CONVERSE', 2),
(4, 'VANS', 2),
(5, 'NEW BALANCE', 1),
(6, 'BITIS', 1),
(7, 'ASICS', 1),
(8, 'PUMA', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productID` int(11) NOT NULL,
  `catID` int(11) NOT NULL,
  `productName` tinytext COLLATE utf8mb4_unicode_ci NOT NULL,
  `productSize` int(11) NOT NULL,
  `productDesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `productPrice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productID`, `catID`, `productName`, `productSize`, `productDesc`, `productPrice`, `productImage`) VALUES
(1, 2, 'AIR FORCE 1 SHADOW AQUA PINK', 42, 'Okelaaaaaaaaaaaa', '4,500,000', '1587554293.jpg'),
(2, 2, 'NIKE AIR MAX 90 ORANGE BLUE', 42, 'Okeyy', '3,600,000', '1587539114.jpg'),
(3, 1, 'ADIDAS CONTINENTAL 80 BLACK RED', 38, 'OKEYY', '2,290,000', '1587539212.jpg'),
(4, 1, 'ADIDAS ALPHABOOST PARLEY BLACK', 38, 'OKEYYs', '2,590,000', '1587539264.jpg'),
(5, 3, 'CONVERSE CHUCK TAYLOR CLASSIC BLACK', 39, 'OKEYY', '1,500,000', '1587539318.jpg'),
(6, 3, 'CONVERSE CHUCK TAYLOR CLASSIC NAVY', 42, 'OKEYY', '1,330,000', '1587539359.jpg'),
(7, 4, 'VANS OLD SKOOL BLACK', 38, 'OKEYY', '1,700,000', '1587539425.jpg'),
(8, 4, 'VANS CLASSIC SLIP ON SKULLS BLACK', 41, 'OKEYY', '1,400,000', '1587539479.jpg'),
(9, 6, 'BITIS HUNTER X 2019 JET BLACK', 40, 'OKEYY', '800,000', '1587539574.jpg'),
(10, 7, 'ASICS GEL-RESPECTOR BLACK GOLD', 40, 'OKEYY', '2,390,000', '1587539622.jpg'),
(11, 2, 'NIKE LEGEND REACT 2 BLUE', 39, 'OKEYY', '2,990,000', '1587539692.jpg'),
(12, 8, 'PUMA CELL PHASE WHITE RED', 42, 'OKEYY', '2,830,000', '1587539772.jpg'),
(13, 5, 'NEW BALANCE 530 BLACK WHITE', 40, 'OKEYY', '1,500,000', '1587539819.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catID`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
