-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 28, 2020 lúc 01:46 PM
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
-- Cấu trúc bảng cho bảng `tbl_chitiethoadon`
--

CREATE TABLE `tbl_chitiethoadon` (
  `maHoaDon` int(11) NOT NULL,
  `donGia` int(11) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `maSanPham` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hoadon`
--

CREATE TABLE `tbl_hoadon` (
  `maHoaDon` int(11) NOT NULL,
  `maKhachHang` int(11) NOT NULL,
  `ngayDat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giaTriDonHang` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `maKhachHang` int(11) NOT NULL,
  `tenDangNhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hoTenKhachHang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diaChiGiaoHang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thuDienTuKH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangThai` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`maKhachHang`, `tenDangNhap`, `matKhau`, `hoTenKhachHang`, `SDT`, `diaChi`, `diaChiGiaoHang`, `thuDienTuKH`, `trangThai`) VALUES
(1, 'user1', '123', 'Nguyễn Văn A', '01234', 'TPHCM', 'TPHCM', 'user1@gmail.com', 'Active'),
(2, 'user2', '123', 'Nguyễn Văn B', '4793224185', 'Hcm', 'Hcm', 'user@yahoo.com', 'Inactive'),
(6, 'ronaldo', '1234', 'Ronaldo', '02393249', 'Portugal', 'Portugal', 'ronaldo@gmail.com', 'Active'),
(7, 'pepe', '123', 'pepe', '1214919', 'Portugal', 'Portugal', 'pepe@gm.com', 'Active');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaisanpham`
--

CREATE TABLE `tbl_loaisanpham` (
  `maLoai` int(11) NOT NULL,
  `tenLoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_loaisanpham`
--

INSERT INTO `tbl_loaisanpham` (`maLoai`, `tenLoai`) VALUES
(1, 'ADIDAS'),
(2, 'NIKE'),
(3, 'CONVERSE'),
(4, 'VANS'),
(6, 'ASICS'),
(7, 'BITIS'),
(8, 'PUMA'),
(10, 'ANANAS'),
(11, 'NEW BALANCE');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_quantri`
--

CREATE TABLE `tbl_quantri` (
  `tenDangNhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tenNguoiQuanTri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thuDienTuQT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangThai` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Active',
  `maVaiTro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_quantri`
--

INSERT INTO `tbl_quantri` (`tenDangNhap`, `matKhau`, `tenNguoiQuanTri`, `thuDienTuQT`, `trangThai`, `maVaiTro`) VALUES
('admin', 'admin', 'Admin', 'admin@admin.com', 'Active', 1),
('joyie', '123', 'joyie', 'joyie@ma.com', 'Inactive', 2),
('manager1', '123', 'Quản lý 1', 'quanly1@manager.com', 'Active', 2),
('manager2', '123', 'Quản lý 2', 'quanly2@manager.com', 'Inactive', 2),
('men', '123', 'Mến', 'men@admin.com', 'Active', 1),
('nhung', '123', 'Nhung', 'nhung@admin.com', 'Active', 1),
('thanhphong', '123', 'Thanh Phong', 'thanhphong@admin.com', 'Active', 1),
('thephong', '123', 'Thế Phong', 'thephong@admin.com', 'Active', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `maSanPham` int(11) NOT NULL,
  `maLoai` int(11) NOT NULL,
  `tenSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sizeSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soLuongSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mieuTaSanPham` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `giaSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangThaiSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `hinhAnhSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`maSanPham`, `maLoai`, `tenSanPham`, `sizeSanPham`, `soLuongSanPham`, `mieuTaSanPham`, `giaSanPham`, `trangThaiSanPham`, `hinhAnhSanPham`) VALUES
(1, 1, 'AIR FORCE 1 SHADOW AQUA PINK', '40', '2', 'Good', '4,600,000', '1', '1588063730.jpg'),
(2, 2, 'NIKE AIR MAX 90 ORANGE BLUE', '41', '2', 'Goood', '3,600,000', '1', '1588063932.jpg'),
(3, 1, 'ADIDAS CONTINENTAL 80 BLACK RED', '39', '2', 'Gooood', '2,290,000', '1', '1588063992.jpg'),
(4, 1, 'ADIDAS ALPHABOOST PARLEY BLACK', '39', '1', 'OKEYYs', '2,590,000', '1', '1588064018.jpg'),
(5, 3, 'CONVERSE CHUCK TAYLOR CLASSIC BLACK', '42', '2', 'Okeyy', '1,500,000', '1', '1588064044.jpg'),
(6, 3, 'CONVERSE CHUCK TAYLOR CLASSIC NAVY', '41', '2', 'Okeyyy', '1,330,000', '1', '1588064069.jpg'),
(7, 4, 'VANS OLD SKOOL BLACK', '42', '2', 'Goood', '1,700,000', '1', '1588064102.jpg'),
(8, 4, 'VANS CLASSIC SLIP ON SKULLS BLACK', '42', '1', 'Gooood', '1,400,000', '1', '1588064130.jpg'),
(9, 7, 'BITIS HUNTER X 2019 JET BLACK', '41', '2', 'Nice', '800,000', '1', '1588064170.jpg'),
(10, 6, 'ASICS GEL-RESPECTOR BLACK GOLD', '42', '2', 'Okeeyy', '2,390,000', '1', '1588064196.jpg'),
(11, 2, 'NIKE LEGEND REACT 2 BLUE', '38', '2', 'Okey', '2,990,000', '1', '1588064219.jpg'),
(12, 8, 'PUMA CELL PHASE WHITE RED', '39', '1', 'Goood', '2,830,000', '1', '1588064243.jpg'),
(13, 11, 'NEW BALANCE 530 BLACK WHITE', '39', '2', 'Goood', '1,500,000', '1', '1588064283.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_vaitro`
--

CREATE TABLE `tbl_vaitro` (
  `maVaiTro` int(11) NOT NULL,
  `tenVaiTro` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_vaitro`
--

INSERT INTO `tbl_vaitro` (`maVaiTro`, `tenVaiTro`) VALUES
(1, 'admin'),
(2, 'manager');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  ADD PRIMARY KEY (`maHoaDon`);

--
-- Chỉ mục cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  ADD PRIMARY KEY (`maHoaDon`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`maKhachHang`);

--
-- Chỉ mục cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  ADD PRIMARY KEY (`maLoai`);

--
-- Chỉ mục cho bảng `tbl_quantri`
--
ALTER TABLE `tbl_quantri`
  ADD PRIMARY KEY (`tenDangNhap`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`maSanPham`);

--
-- Chỉ mục cho bảng `tbl_vaitro`
--
ALTER TABLE `tbl_vaitro`
  ADD PRIMARY KEY (`maVaiTro`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_chitiethoadon`
--
ALTER TABLE `tbl_chitiethoadon`
  MODIFY `maHoaDon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_hoadon`
--
ALTER TABLE `tbl_hoadon`
  MODIFY `maHoaDon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `maKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  MODIFY `maLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `maSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_vaitro`
--
ALTER TABLE `tbl_vaitro`
  MODIFY `maVaiTro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
