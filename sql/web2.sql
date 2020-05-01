-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 25, 2020 lúc 05:04 PM
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
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catID` int(255) NOT NULL,
  `catName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`catID`, `catName`) VALUES
(1, 'ADIDAS'),
(2, 'NIKE'),
(3, 'CONVERSE'),
(4, 'VANS'),
(6, 'BITIS'),
(7, 'ASICS'),
(8, 'PUMA'),
(9, 'ANANAS'),
(10, 'NEW BALANCE');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `productID` int(11) NOT NULL,
  `catID` int(11) NOT NULL,
  `productName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `productSize` int(11) NOT NULL,
  `productAmount` int(11) NOT NULL,
  `productDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `productPrice` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `productStatus` int(11) NOT NULL DEFAULT 1,
  `productImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`productID`, `catID`, `productName`, `productSize`, `productAmount`, `productDesc`, `productPrice`, `productStatus`, `productImage`) VALUES
(1, 2, 'AIR FORCE 1 SHADOW AQUA PINK', 42, 5, 'Okelaaaaaaaaaaaa', '4,500,000', 1, '1587554293.jpg'),
(2, 2, 'NIKE AIR MAX 90 ORANGE BLUE', 38, 1, 'Okeyy', '3,600,000', 1, '1587539114.jpg'),
(3, 1, 'ADIDAS CONTINENTAL 80 BLACK RED', 38, 1, 'OKEYY', '2,290,000', 1, '1587539212.jpg'),
(4, 1, 'ADIDAS ALPHABOOST PARLEY BLACK', 38, 3, 'OKEYYs', '2,590,000', 1, '1587539264.jpg'),
(5, 3, 'CONVERSE CHUCK TAYLOR CLASSIC BLACK', 39, 1, 'OKEYY', '1,500,000', 1, '1587539318.jpg'),
(6, 3, 'CONVERSE CHUCK TAYLOR CLASSIC NAVY', 42, 1, 'OKEYY', '1,330,000', 1, '1587539359.jpg'),
(7, 4, 'VANS OLD SKOOL BLACK', 38, 1, 'OKEYY', '1,700,000', 1, '1587539425.jpg'),
(8, 4, 'VANS CLASSIC SLIP ON SKULLS BLACK', 41, 1, 'OKEYY', '1,400,000', 1, '1587539479.jpg'),
(9, 6, 'BITIS HUNTER X 2019 JET BLACK', 40, 1, 'OKEYY', '800,000', 1, '1587539574.jpg'),
(10, 7, 'ASICS GEL-RESPECTOR BLACK GOLD', 40, 1, 'OKEYY', '2,390,000', 1, '1587539622.jpg'),
(11, 2, 'NIKE LEGEND REACT 2 BLUE', 39, 1, 'OKEYY', '2,990,000', 1, '1587539692.jpg'),
(12, 8, 'PUMA CELL PHASE WHITE RED', 42, 1, 'OKEYY', '2,830,000', 1, '1587539772.jpg'),
(29, 2, 'fsdf', 38, 2, 'áđá', 'sd', 1, '1587826950.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_type`
--

CREATE TABLE `tbl_type` (
  `ID` int(11) NOT NULL,
  `userType` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_type`
--

INSERT INTO `tbl_type` (`ID`, `userType`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'user');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userID` int(11) NOT NULL,
  `userName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userPass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userFullName` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `userEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active',
  `userType` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`userID`, `userName`, `userPass`, `userFullName`, `userEmail`, `userStatus`, `userType`) VALUES
(1, 'admin', 'admin', 'Admin', 'admin@admin.com', 'Active', 'admin'),
(2, 'men', '123', 'Mến', '123@gmail.com', 'Active', 'manager'),
(3, 'nhung', '123', 'Nhung', '123@gmail.com', 'Active', 'manager'),
(4, 'thanhphong', '123', 'Thanh Phong', '123@gmail.com', 'Active', 'manager'),
(5, 'thephong', '123', 'Thế Phong', '123@gmail.com', 'Active', 'manager'),
(6, 'user1', 'user1', 'User 1', '123@gmail.com', 'Active', 'user'),
(7, 'user2', 'user2', 'User 2', '123@gmail.com', 'Inactive', 'user'),
(9, 'admin3', 'admin3', 'Admin 3', 'Admin3@gmail.com', 'Inactive', 'admin'),
(10, 'manager1', '123', 'Manager 1', 'manager1@manager.com', 'Active', 'manager'),
(11, 'redvelvet', '1234', 'Redvelvet', 'redvelvet@gmail.co', 'Inactive', 'admin'),
(12, 'joyie', '1234', 'joyie', 'joyie@admin.co', 'Inactive', 'manager'),
(13, 'admin2', 'admin2', 'Admin 2', 'admin@admin.co', 'Active', 'admin'),
(19, 'mia', 'mia', 'mia', 'mia@gmail.co', 'Active', 'admin'),
(20, 'mia', 'mia', 'mia', 'mia@gmail.com', 'Active', 'admin'),
(21, 'mia', 'mia', 'mia', 'mia@gmail.co', 'Inactive', 'manager'),
(22, 'mia', 'mia', 'mia', 'mia@gmail.com', 'Active', 'admin');

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- Chỉ mục cho bảng `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
