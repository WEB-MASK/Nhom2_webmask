-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 12, 2020 lúc 02:57 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlkt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthd`
--

CREATE TABLE `cthd` (
  `IDCTHD` int(11) NOT NULL,
  `IDHoaDon` int(11) DEFAULT NULL,
  `KhauTrangID` varchar(10) DEFAULT NULL,
  `SoLuong` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cthd`
--

INSERT INTO `cthd` (`IDCTHD`, `IDHoaDon`, `KhauTrangID`, `SoLuong`) VALUES
(1, 1, 'KT2', 3),
(2, 2, 'KT4', 6),
(3, 2, 'KT4', 7),
(4, 3, 'KT5', 3),
(5, 4, 'KT6', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hieukhautrang`
--

CREATE TABLE `hieukhautrang` (
  `HieuKhauTrangID` varchar(10) NOT NULL,
  `TenHieuKT` varchar(100) NOT NULL DEFAULT 'Chưa đặt tên'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hieukhautrang`
--

INSERT INTO `hieukhautrang` (`HieuKhauTrangID`, `TenHieuKT`) VALUES
('3M', '3M'),
('CM', 'Cambridge Mask'),
('NM', 'NeoMask'),
('PIT', 'PITTA'),
('UCharm', 'Unicharm'),
('VOGM', 'VogMask'),
('XM', 'Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `IDHoaDon` int(11) NOT NULL,
  `NGHD` date DEFAULT NULL,
  `KHID` int(11) DEFAULT NULL,
  `NhanVienID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`IDHoaDon`, `NGHD`, `KHID`, `NhanVienID`) VALUES
(1, '2020-10-04', 1, 2),
(2, '2019-10-29', 2, 1),
(3, '2019-10-10', 3, 3),
(4, '2019-10-10', 2, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `KHID` int(11) NOT NULL,
  `HoTen` varchar(40) DEFAULT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SoDT` varchar(20) DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`KHID`, `HoTen`, `DiaChi`, `SoDT`, `NgaySinh`) VALUES
(1, 'Lưu Bá ÔN', '19 Trần Hưng Đạo,Ninh Bình', '099093932', '2020-03-10'),
(2, 'Thái Hiểu Minh', '110 Phú Viên ,Hà Nội', '082373633', '1999-09-27'),
(3, 'John Trí', '128 Ba Đình,Hà Nội', '09377337', '2001-10-10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khautrang`
--

CREATE TABLE `khautrang` (
  `KhauTrangID` varchar(10) NOT NULL,
  `TenKhauTrang` varchar(100) NOT NULL DEFAULT 'Chưa có tên',
  `HieuKhauTrangID` varchar(10) NOT NULL,
  `NUOCSX` varchar(255) DEFAULT NULL,
  `Gia` float NOT NULL DEFAULT 0,
  `SoLuong` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khautrang`
--

INSERT INTO `khautrang` (`KhauTrangID`, `TenKhauTrang`, `HieuKhauTrangID`, `NUOCSX`, `Gia`, `SoLuong`) VALUES
('KT1', 'N95', 'CM', 'Anh Quốc', 33000, 1500),
('KT2', 'Vogmass N99', 'VOGM', 'Mỹ', 200000, 2000),
('KT3', 'Vogmass N99 CV', 'VOGM', 'Mỹ', 300000, 3296),
('KT4', 'Vogmass N99 C2V', 'VOGM', 'Mỹ', 250000, 500),
('KT5', '3M', '3M', 'Trung Quốc', 50000, 100),
('KT6', 'Unicharm 3D Mask Virus Block', 'UCharm', 'Nhật Bản', 100000, 900);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `NhanVienID` int(11) NOT NULL,
  `HoTen` varchar(40) DEFAULT NULL,
  `SoDT` varchar(20) DEFAULT NULL,
  `NGVL` date DEFAULT NULL,
  `LUONG` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`NhanVienID`, `HoTen`, `SoDT`, `NGVL`, `LUONG`) VALUES
(1, 'Trần Chí Công', '098448884', '2017-10-10', 7800000),
(2, 'Lại Phúc', '088488489', '2017-03-10', 6700000),
(3, 'Tiêu Nhược Hy', '038374747', '2018-10-12', 10200000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(40) NOT NULL,
  `Password` varchar(1000) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Registration_date` datetime NOT NULL,
  `User_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`userid`, `First_name`, `Last_name`, `Password`, `Email`, `Registration_date`, `User_level`) VALUES
(1, 'Jully', 'Vui', '123', 'Vuitrannb@gmail.com', '2020-04-08 03:00:00', 'Admin'),
(2, 'Tuan', 'Minh', 'TuanMinh', 'TuanMinh72@wru.vn', '2020-04-08 05:08:00', 'NhanVien');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`IDCTHD`),
  ADD KEY `IDHoaDon` (`IDHoaDon`),
  ADD KEY `KhauTrangID` (`KhauTrangID`);

--
-- Chỉ mục cho bảng `hieukhautrang`
--
ALTER TABLE `hieukhautrang`
  ADD PRIMARY KEY (`HieuKhauTrangID`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`IDHoaDon`),
  ADD KEY `KHID` (`KHID`),
  ADD KEY `NhanVienID` (`NhanVienID`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`KHID`);

--
-- Chỉ mục cho bảng `khautrang`
--
ALTER TABLE `khautrang`
  ADD PRIMARY KEY (`KhauTrangID`),
  ADD KEY `HieuKhauTrangID` (`HieuKhauTrangID`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`NhanVienID`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cthd`
--
ALTER TABLE `cthd`
  MODIFY `IDCTHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `IDHoaDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `KHID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `NhanVienID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD CONSTRAINT `cthd_ibfk_1` FOREIGN KEY (`IDHoaDon`) REFERENCES `hoadon` (`IDHoaDon`),
  ADD CONSTRAINT `cthd_ibfk_2` FOREIGN KEY (`KhauTrangID`) REFERENCES `khautrang` (`KhauTrangID`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`KHID`) REFERENCES `khachhang` (`KHID`),
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`NhanVienID`) REFERENCES `nhanvien` (`NhanVienID`);

--
-- Các ràng buộc cho bảng `khautrang`
--
ALTER TABLE `khautrang`
  ADD CONSTRAINT `khautrang_ibfk_1` FOREIGN KEY (`HieuKhauTrangID`) REFERENCES `hieukhautrang` (`HieuKhauTrangID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
