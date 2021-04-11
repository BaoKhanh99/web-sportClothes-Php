-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2019 lúc 08:06 AM
-- Phiên bản máy phục vụ: 10.1.30-MariaDB
-- Phiên bản PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cuoiky`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `id_gh` int(10) NOT NULL,
  `id_sp` int(10) NOT NULL,
  `ten_sp` text COLLATE utf8_vietnamese_ci NOT NULL,
  `soluong` int(10) NOT NULL,
  `hinhanh` text COLLATE utf8_vietnamese_ci NOT NULL,
  `danhmuc` text COLLATE utf8_vietnamese_ci NOT NULL,
  `taikhoan` text COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`id_gh`, `id_sp`, `ten_sp`, `soluong`, `hinhanh`, `danhmuc`, `taikhoan`, `gia`) VALUES
(2, 32, 'MC cam', 10, '3.jpg', 'Mancity', 'tlbk', 140000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ID` int(100) NOT NULL,
  `hoten` text COLLATE utf8_vietnamese_ci NOT NULL,
  `namsinh` int(255) NOT NULL,
  `diachi` text COLLATE utf8_vietnamese_ci NOT NULL,
  `taikhoan` text COLLATE utf8_vietnamese_ci NOT NULL,
  `matkhau` text COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ID`, `hoten`, `namsinh`, `diachi`, `taikhoan`, `matkhau`) VALUES
(9, 'Bảo Khanh', 1999, 'Đắk Lăk', 'tlbk', '1'),
(11, 'Phương Bảo', 1999, 'Nha Trang', 'pb1999', '1'),
(12, 'Cao Thông', 1999, 'Quảng Bình', 'ct1999', '1'),
(35, 'Hồ Hoàng', 1999, 'Bình Định', 'hh1999', '1'),
(36, 'a', 1999, 'a', 'ad', 'ad');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sp` int(10) NOT NULL,
  `ten_sp` text COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` int(40) NOT NULL,
  `danhmuc` text COLLATE utf8_vietnamese_ci NOT NULL,
  `hinhanh` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `giamgia` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sp`, `ten_sp`, `gia`, `danhmuc`, `hinhanh`, `giamgia`) VALUES
(1, 'Arsenal truyền thống', 150000, 'Arsenal', '1.jpg', 0),
(2, 'Arsenal đen tím', 120000, 'Arsenal', '2.jpg', 1),
(3, 'Arsenal đỏ đen', 100000, 'Arsenal', '3.jpg', 0),
(4, 'Arsenal xanh ngọc', 200000, 'Arsenal', '4.jpg', 1),
(5, 'Arsenal vàng', 90000, 'Arsenal', '5.jpg', 0),
(6, 'Arsenal đỏ sọc trắng', 130000, 'Arsenal', '6.jpg', 1),
(7, 'Arsenal xanh chuối', 95000, 'Arsenal', '7.jpg', 1),
(8, 'Arsenal hồng', 150000, 'Arsenal', '8.jpg', 0),
(9, 'Arsenal trắng', 1450000, 'Arsenal', '9.jpg', 0),
(10, 'Arsenal tím sọc đen', 132000, 'Arsenal', '10.jpg', 0),
(11, 'Barca sân khách', 170000, 'Barca', '1.jpg', 1),
(12, 'Barca tím', 150000, 'Barca', '2.jpg', 0),
(13, 'Barca xanh rêu', 130000, 'Barca', '3.jpg', 1),
(14, 'Barca xanh đỏ', 160000, 'Barca', '4.jpg', 1),
(15, 'Barca đen', 1800000, 'Barca', '5.jpg', 0),
(16, 'Barca đen cam', 140000, 'Barca', '6.jpg', 0),
(17, 'Barca sọc đỏ xanh', 120000, 'Barca', '7.jpg', 1),
(18, 'Barca xanh gradient', 155000, 'Barca', '8.jpg', 0),
(19, 'Barca truyền thống', 175000, 'Barca', '9.jpg', 0),
(20, 'Barca xanh dạ quang', 120000, 'Barca', '10.jpg', 1),
(21, 'Juventus truyền thống', 154000, 'Juventus', '1.jpg', 0),
(22, 'Juventus đen', 170000, 'Juventus', '2.jpg', 0),
(23, 'Juventus xanh ri', 140000, 'Juventus', '3.jpg', 1),
(24, 'Juventus vàng ', 150000, 'Juventus', '4.jpg', 0),
(25, 'Juventus hồng', 1350000, 'Juventus', '5.jpg', 0),
(26, 'Juventus xanh dương', 120000, 'Juventus', '6.jpg', 1),
(27, 'Juventus cam', 100000, 'Juventus', '7.jpg', 0),
(28, 'Juventus xanh star', 145000, 'Juventus', '8.jpg', 0),
(29, 'Juventus vàng xanh', 120000, 'Juventus', '9.jpg', 1),
(30, 'MC truyền thống', 120000, 'Mancity', '1.jpg', 0),
(31, 'MC xanh cỏ', 160000, 'Mancity', '2.jpg', 0),
(32, 'MC cam', 140000, 'Mancity', '3.jpg', 1),
(33, 'MC xanh cây', 120000, 'Mancity', '4.jpg', 0),
(34, 'MC đen', 100000, 'Mancity', '5.jpg', 0),
(35, 'MC hồng', 150000, 'Mancity', '6.jpg', 0),
(36, 'MC hồng đen', 150000, 'Mancity', '7.jpg', 0),
(37, 'MC xanh đen', 95000, 'Mancity', '8.jpg', 1),
(38, 'MC sọc đỏ đen', 130000, 'Mancity', '9.jpg', 0),
(39, 'MU truyền thống', 140000, 'ManUnited', '1.jpg', 0),
(40, 'MU hồng', 90000, 'ManUnited', '2.jpg', 1),
(41, 'MU đen rằn', 123000, 'ManUnited', '3.jpg', 0),
(42, 'MU áo khoác', 123000, 'ManUnited', '4.jpg', 0),
(43, 'MU xám', 129000, 'ManUnited', '5.jpg', 1),
(44, 'MU xanh dương', 150000, 'ManUnited', '6.jpg', 0),
(45, 'MU xám đen', 149000, 'ManUnited', '7.jpg', 0),
(46, 'MU đen cam', 135000, 'ManUnited', '8.jpg', 1),
(47, 'MU trắng', 125000, 'ManUnited', '9.jpg', 0),
(48, 'PSG truyền thống', 135000, 'PSG', '1.jpg', 0),
(49, 'PSG đen', 99000, 'PSG', '2.jpg', 1),
(50, 'PSG xanh nâu', 150000, 'PSG', '3.jpg', 0),
(51, 'PSG trắng', 149000, 'PSG', '4.jpg', 0),
(52, 'PSG vàng', 135000, 'PSG', '5.jpg', 1),
(53, 'PSG áo khoác', 110000, 'PSG', '6.jpg', 0),
(54, 'PSG đen trắng', 125000, 'PSG', '7.jpg', 0),
(55, 'PSG sọc nâu', 100000, 'PSG', '8.jpg', 1),
(56, 'PSG đỏ', 99000, 'PSG', '9.jpg', 0),
(57, 'Real truyền thông', 150000, 'Real', '1.jpg', 0),
(58, 'Real xanh đen', 145000, 'Real', '2.jpg', 1),
(59, 'Real xanh dương', 115000, 'Real', '3.jpg', 0),
(60, 'Real tím', 169000, 'Real', '4.jpg', 0),
(61, 'Real đen', 139000, 'Real', '5.jpg', 1),
(62, 'Real xám', 125000, 'Real', '6.jpg', 0),
(63, 'Real đỏ', 115000, 'Real', '7.jpg', 0),
(64, 'Real áo khoác', 160000, 'Real', '8.jpg', 1),
(65, 'Real gradient', 120000, 'Real', '9.jpg', 0),
(66, 'Real xanh cây', 139000, 'Real', '10.jpg', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`id_gh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `id_gh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
