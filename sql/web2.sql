-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 03, 2020 lúc 01:32 PM
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
(7, 'pepe', '123', 'pepe', '1214919', 'Portugal', 'Portugal', 'pepe@gm.com', 'Active'),
(8, 'men1', '123', 'Nguyễn Thương Mến', '345654', '7', '454343', 'menpro58@gmail.com', 'Active');

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
(11, 'NEW BALANCE'),
(13, 'FILA'),
(14, 'REEBOK');

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
('thephong', '123', 'Thế Phong', 'thephong@admin.com', 'Active', 1),
('vanj', '202cb962ac59075b964b07152d234b70', 'Nguyen Van J', 'Nguyen@g.com', 'Active', 2);

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
  `mieuTaSanPham` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `giaSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trangThaiSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `hinhAnhSanPham` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`maSanPham`, `maLoai`, `tenSanPham`, `sizeSanPham`, `soLuongSanPham`, `mieuTaSanPham`, `giaSanPham`, `trangThaiSanPham`, `hinhAnhSanPham`) VALUES
(1, 2, 'NIKE AIR FORCE 1 SHADOW AQUA PINK', '40', '2', 'Good', '4,600,000', '1', '1588063730.jpg'),
(2, 2, 'NIKE AIR MAX 90 ORANGE BLUE', '41', '2', 'Goood', '3,600,000', '1', '1588063932.jpg'),
(3, 1, 'ADIDAS CONTINENTAL 80 BLACK RED', '39', '2', 'Gooood', '2,290,000', '1', '1588063992.jpg'),
(4, 1, 'ADIDAS ALPHABOOST PARLEY BLACK', '39', '1', 'OKEYYs', '2,590,000', '1', '1588064018.jpg'),
(5, 3, 'CONVERSE CHUCK TAYLOR CLASSIC BLACK', '42', '2', 'Là một trong những thương hiệu giày hàng đầu thế giới về loại giày sneaker với nhiều tính năng phù hợp cho cả nam và nữ tại Việt Nam.', '1,500,000', '1', '1588064044.jpg'),
(6, 3, 'CONVERSE CHUCK TAYLOR CLASSIC NAVY', '41', '2', 'Okeyyy', '1,330,000', '1', '1588064069.jpg'),
(7, 4, 'VANS OLD SKOOL BLACK', '42', '2', 'Goood', '1,700,000', '1', '1588064102.jpg'),
(8, 4, 'VANS CLASSIC SLIP ON SKULLS BLACK', '42', '1', 'Gooood', '1,400,000', '1', '1588064130.jpg'),
(9, 7, 'BITIS HUNTER X 2019 JET BLACK', '41', '2', 'Nice', '800,000', '1', '1588064170.jpg'),
(10, 6, 'ASICS GEL-RESPECTOR BLACK GOLD', '42', '2', 'Okeeyy', '2,390,000', '1', '1588064196.jpg'),
(11, 2, 'NIKE LEGEND REACT 2 BLUE', '38', '2', 'Okey', '2,990,000', '1', '1588064219.jpg'),
(12, 8, 'PUMA CELL PHASE WHITE RED', '39', '1', 'Goood', '2,830,000', '1', '1588064243.jpg'),
(13, 11, 'NEW BALANCE 530 BLACK WHITE', '41', '2', 'Goood', '1,500,000', '1', '1588064283.jpg'),
(14, 8, 'Puma RS-X Hard Drive Mens White/Galaxy Blue', '42', '1', 'Giày Sneakers Puma RS-X Hard Drive Mens White/Galaxy Blue sở hữu kiểu dáng siêu phong cách, hiện đại với thiết kế các lớp TPU được sắp xếp hợp lý, giày Puma RS-X Hard Drive sẽ là mẫu giày mới nhất được đ', '2,400,000', '1', '1588446585.jpg'),
(15, 8, 'PUMA COURT STAR SUEDE PM34645', '41', '2', 'Với thiết kế thon gọn nhưng vẫn rất thời thượng, trẻ trung. Phần Upper phía trên được sử dụng là bằng vải mang lại sự sang chảnh, trẻ trung. Phong cách thiết kế khỏe khoắn tạo nên sự nam tính cho người đi.', '2,390,000', '1', '1588450980.jpg'),
(16, 8, 'PUMA CELL ALIEN OG SNEAKERS', '42', '1', 'CELL Alien chỉ cần chạm xuống từ không gian. Được tạo ra lần đầu tiên dưới dạng giày chạy bộ vào năm 1998, biểu tượng này trở lại thế giới ngày nay với công nghệ đệm CELL ban đầu, pha trộn màu sắc nổi bật và thiết kế siêu tươi.', '1,950,000', '1', '1588451424.jpg'),
(17, 8, 'PUMA NOVA 90S PINK/BLACK/WHITE', '40', '2', 'Okeeyyy', '1,750,000', '1', '1588451698.jpg'),
(18, 8, 'PUMA MUSE X-2 METALLIC', '42', '1', 'Okeyyy', '1,680,000', '1', '1588451768.jpg'),
(19, 8, 'PUMA RS-100 SOUND MEN\'S SNEAKERS', '40', '2', 'Okeyyy', '1,400,000', '1', '1588451925.jpg'),
(20, 8, 'PUMA RS-0 OPTIC BLACK WHITE', '40', '3', 'GIỐNG NHƯ HÌNH', '2,100,000', '1', '1588451994.jpg'),
(21, 8, 'PUMA THUNDER SPECTRA GREY & YELLOW', '42', '1', 'GIỐNG NHƯ HÌNH', '2,950,000', '1', '1588452048.jpg'),
(22, 8, 'PUMA TSUGI NETFIT V2 EVOKNIT SNEAKERS', '39', '1', 'Okeyyy', '1,750,000', '1', '1588453106.jpg'),
(23, 1, 'ADIDAS SUPERSTAR BLACK CHÍNH HÃNG', '41', '1', 'CHÍNH HÃNG', '1,700,000', '1', '1588453225.jpg'),
(24, 1, 'ADIDAS NEO LABEL CLOUDFOAM RACE', '40', '2', 'Giống hình', '1,660,000', '1', '1588453305.jpg'),
(25, 1, 'Adidas EQT Bask ADV Xám Gót Xanh', '38', '1', 'adidas', '1,950,000', '1', '1588453448.jpg'),
(26, 1, 'Adidas Ultraboost 19 Oreo 5.0', '41', '1', 'Nhẹ', '3,000,000', '1', '1588453533.jpg'),
(27, 1, 'Adidas AlphaBounce Beyond xám khói', '40', '2', 'xám khói', '2,000,000', '1', '1588453597.jpg'),
(28, 1, 'ADIDAS FALCON SHOES D96699', '41', '2', 'shoes', '1,950,000', '1', '1588453730.jpg'),
(29, 1, 'Adidas NMD Human Race Solarhu', '39', '1', 'Soloaa', '4,800,000', '1', '1588453836.jpg'),
(30, 1, 'Adidas Pharrell x NMD Human race', '39', '2', 'Chúng tôi cam kết chuyên cung cấp giày thể thao  chuẩn nhất với mức giá tốt nhất.', '4,900,000', '1', '1588453887.jpg'),
(31, 1, 'Adidas NMD Human Race yellow', '40', '2', 'Đầy đủ phụ kiện: túi, box… Bảo hàng 6 tháng bằng Bill mua hàng', '4,800,000', '1', '1588453930.jpg'),
(32, 2, 'NIKE AIR FORCE 1 SHADOW ', '38', '2', 'kạkjcakjc', '2,700,000', '1', '1588454749.jpg'),
(33, 2, 'Nike Air Max 98 \"University Red White\"', '39', '2', 'accacc', '2,200,000', '1', '1588454438.jpg'),
(34, 2, 'Nike Air Jordan 1 Mid 2019 \"Royal Blue\"', '41', '2', 'xcczczcxzcz', '3,500,000', '1', '1588454475.jpg'),
(35, 2, 'Nike React Presto \"Brutal Honey\"', '40', '1', 'xzccsâc', '3,000,000', '1', '1588454516.jpg'),
(36, 2, 'Nike React Presto \"Ghost\"', '40', '1', 'ácgfdgdfgdfg', '3,000,000', '1', '1588454562.jpg'),
(37, 2, 'Nike Air Zoom Pegasus 34 \"Black/Orange\"', '39', '1', 'Black/Orange', '2,500,000', '1', '1588454812.jpg'),
(38, 2, 'Nike Air Max 97 Ultra 17 PRM \"Navy/Obsidian\"', '38', '2', '\"Navy/Obsidian\"', '4,000,000', '1', '1588454855.jpg'),
(39, 2, 'Nike Air VRTX \"Black/White\"', '40', '2', 'cxvcxvbxb', '1,300,000', '1', '1588454908.jpg'),
(40, 2, 'Nike Air Zoom Pegasus 34 SHIELD', '40', '2', 'xcxcvxcvxcvxc', '2,500,000', '1', '1588454972.jpg'),
(41, 3, 'Converse Chuck Taylor All Star VLTG - Back to Earth', '41', '1', 'Mẫu giày cao cổ Chuck Taylor All Star VLTG giúp cho người sử dụng có vẻ ngoài siêu chất và cá tính. Điểm nhấn nổi bật khác của sản phẩm ngoài họa tiết chữ V xếp chồng đó chính là  icon hình ngôi sao được cách điệu ở phần foxing tạo điểm nhấn và sự khác biệt so với các sản phẩm khác.', '1,600,000', '1', '1588455426.png'),
(42, 3, 'Converse Chuck Taylor All Star Side Pocket', '40', '2', 'xcczczxc', '1,600,000', '1', '1588455551.jpg'),
(43, 3, 'Converse Chuck Taylor All Star Faux Leather Photon Dust', '43', '2', 'Thương hiệu Converse Xuất xứ thương hiệu Mỹ Sản xuất tại Việt Nam', '1,400,000', '1', '1588455642.jpg'),
(44, 3, 'Converse Chuck Taylor All Star Archival Camo', '38', '2', 'Nằm trong BST Converse Camo Connection, Giày Converse Chuck Taylor All Star Camo Patch trang bị đế OrthoLite® giúp người dùng có được sự thoải mái tối đa khi sử dụng. Chất liệu vải canvas thoáng mát. Phần vải lót bên trong của giày in hoạt tiết camo thời thượng ', '1,500,000', '1', '1588455701.jpg'),
(45, 3, 'Converse Chuck Taylor All Star Camo Connection', '40', '1', 'Thương hiệu Converse Xuất xứ thương hiệu Mỹ Sản xuất tại Việt Nam', '1,600,000', '1', '1588455772.jpg'),
(46, 3, 'Converse Chuck Taylor All Star Love Fearlessly', '39', '1', 'Fearlessly', '1,600,000', '1', '1588455898.png'),
(47, 3, 'Converse Chuck Taylor All Star Love Fearlessly', '38', '2', 'Fearlessly', '1,500,000', '1', '1588455966.png'),
(48, 3, 'Converse Chuck Taylor All Star Fearless', '41', '2', 'Fearless', '1,500,000', '1', '1588456020.png'),
(49, 4, 'Vans Old Skool 36 DX Anaheim Factory', '39', '2', 'Kiểu dáng Old Skool cổ điển với lót giày được nâng cấp công nghệ Đệm lót UltraCush mang đến một cảm nhận khác biệt với dòng giày cao cấp này của nhà Vans mang lại sự thoải mái & êm ái cho đôi chân. Anaheim Factory 36DX Vintage với chất liệu kết hợp giữa Suede và Canvas. Đặc biệt tông màu trắng ngà đặc biệt trendy được nhiều người tìm kiếm với khả năng phối đồ cực đỉnh. Đệm lót UltraCush mang đến một cảm nhận khác biệt với dòng giày cao cấp này của nhà Vans', '2,200,000', '1', '1588456223.jpg'),
(50, 4, 'Vans Old Skool V Sport', '40', '2', 'Dòng sản phẩm này hướng tới sự đơn giản nhưng vẫn có điểm nhấn, dải logo Flying V được đặt bên hông giày vừa mang dấu ấn thương hiệu vừa giúp cho những chiếc giày thêm sức hút. Ngoài ra, phần thân Vans Sport hiện nay cũng được bao bọc bởi chất liệu da lộn – chất liệu chủ đạo hay được sử dụng của thời trang những năm 90.', '2,000,000', '1', '1588456302.jpg'),
(51, 4, 'Vans Old Skool Alien Ghosts', '39', '2', 'Vans Old Skool Alien Ghosts đột phá với chi tiết phản quang trendy, sử dụng kết hợp chất liệu vải Canvas truyền thống, thoáng mát, kết hợp với da lộn được phối ở mũi giày và đế giày mang đến cho bạn sự thoải mái khi di chuyển.Vans old skool được thiết kế cho những môn thể thao mạo hiểm như trượt ván, xe đạp BMX, mô tô đua v.v... đảm bảo độ bền chắc và có độ bám tốt.', '1,850,000', '1', '1588456386.jpg'),
(52, 4, 'Vans SK8-Hi Alien Ghosts', '39', '1', 'Vans Sk8- Hi Alien Ghosts đột phá với chi tiết phản quang trendy, sử dụng kết hợp chất liệu vải Canvas truyền thống, thoáng mát, kết hợp với da lộn được phối ở mũi giày và đế giày mang đến cho bạn sự thoải mái khi di chuyển.giày Vans Sk8- Hi được thiết kế cho những môn thể thao mạo hiểm như trượt ván, xe đạp BMX, mô tô đua v.v... đảm bảo độ bền chắc và có độ bám tốt.', '2,050,000', '1', '1588456465.jpg'),
(53, 4, 'Vans Check Bess NI Shoes', '39', '2', 'ans Check Bess Ni với thiết kế khỏe khoắn, sự thoải mái của lót Ultra Cush cùng màu sắc trẻ trung mang lại cho khách hàng sự lựa chọn tuyệt vời', '1,900,000', '1', '1588456554.jpg'),
(54, 4, 'Vans Era Lady Vans', '42', '1', 'Vans Lady Vans có thiết kế là kiểu dáng Vans Era quen thuộc kết hợp những họa tiết lạ mắt và hình hoa hồng đen độc đáo phủ khắp thân giày tạo điểm nhấn cuốn hút cho sản phẩm.', '1,450,000', '1', '1588456628.png'),
(55, 6, 'Asics Gel-Bnd -1021', '40', '1', 'Công nghệ REARFOOT GEL TECHNOLOGY hỗ trợ tác động trợ lực, giúp nâng niu bàn chân trên mọi điều kiện địa hình.', '2,745,000', '1', '1588456743.png'),
(56, 6, 'Asics Gt-1000 9 -1011', '40', '2', 'Không đúng kích cỡ hoặc màu sắc? Quý khách có thể đổi size khác hay sản phẩm khác thật dễ dàng.', '3,400,000', '1', '1588456870.jpg'),
(57, 6, 'Asics Gel-Bnd -1022', '40', '2', 'Công nghệ REARFOOT GEL TECHNOLOGY hỗ trợ tác động trợ lực, giúp nâng niu bàn chân trên mọi điều kiện địa hình.', '2,745,000', '1', '1588456961.png'),
(58, 6, 'Asics Gel-Kayano 5 Og Running', '40', '2', 'Được tạo ra bởi việc kết hợp các thành phần tiên tiến với thiết kế mới nổi bật nhằm tôn vinh di sản của Tokyo. Sản phẩm này cho phép bạn giải quyết khoảng cách ở các chặng đường xa một cách thoải mái, nhờ vào công nghệ GEL® ở chân sau được thiết kế lại để cải thiện khả năng giảm xóc khi va chạm', '4,044,000', '1', '1588457009.jpg'),
(59, 6, 'Asics Gel-Quantum Lyte Running FW19', '39', '1', 'Công nghệ REARFOOT GEL TECHNOLOGY hỗ trợ tác động trợ lực, giúp nâng niu bàn chân trên mọi điều kiện địa hình.', '2,554,000', '1', '1588457076.jpg'),
(60, 6, 'Asics Gel-Pulse 11 Running FW19', '40', '1', 'Được tạo ra bởi việc kết hợp các thành phần tiên tiến với thiết kế mới nổi bật nhằm tôn vinh di sản của Tokyo. Sản phẩm này cho phép bạn giải quyết khoảng cách ở các chặng đường xa một cách thoải mái,', '3,144,000', '1', '1588457125.jpg'),
(61, 6, 'Asics Gel-Quantum Infinity Jin Running', '40', '1', 'Được tạo ra bởi việc kết hợp các thành phần tiên tiến với thiết kế mới nổi bật nhằm tôn vinh di sản của Tokyo.', '4,044,000', '1', '1588457171.jpg');

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
  MODIFY `maKhachHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_loaisanpham`
--
ALTER TABLE `tbl_loaisanpham`
  MODIFY `maLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `maSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `tbl_vaitro`
--
ALTER TABLE `tbl_vaitro`
  MODIFY `maVaiTro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
