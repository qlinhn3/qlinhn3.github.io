-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2018 lúc 02:08 PM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qliban_sua`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_hoa_don`
--

CREATE TABLE `chi_tiet_hoa_don` (
  `soHD` int(11) NOT NULL,
  `maSua` varchar(5) NOT NULL,
  `soLuong` int(11) NOT NULL,
  `donGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_sua`
--

CREATE TABLE `hang_sua` (
  `maHS` varchar(5) NOT NULL,
  `tenHS` varchar(50) NOT NULL,
  `diaChi` varchar(100) NOT NULL,
  `dienThoai` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hang_sua`
--

INSERT INTO `hang_sua` (`maHS`, `tenHS`, `diaChi`, `dienThoai`, `email`) VALUES
('AB', 'Abbott', 'Công ty nhập khẩu Việt Nam', '8741258', 'abbott@ab.com'),
('DL', 'Dutch Lady', 'Khu công nghiệp Biên Hòa - Đồng Nai', '7826451', 'dutchlady@dl.com'),
('DM', 'Dumex', 'Khu công nghiệp Sóng Thần Bình Dương', '6258943', 'dumex@dm.com'),
('DS', 'Daisy', 'Khu công nghiệp Sóng Thần Bình Dương', '5789321', 'daisy@ds.com'),
('MJ', 'Mead Johnson', 'Công ty nhập khẩu Việt Nam', '8741258', 'meadjohn@mj.com'),
('NTF', 'Nutifood', 'Khu công nghiệp Sóng Thần Bình Dương', '7895632', 'nutifood@ntf.com'),
('VNM', 'Vinamilk', '123 Nguyễn Du - Quận 1 - TP.HCM', '8794561', 'vinamilk@vnm.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `soHD` int(11) NOT NULL,
  `ngayHD` date NOT NULL,
  `maKH` varchar(5) NOT NULL,
  `triGia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `maKH` varchar(5) NOT NULL,
  `tenKH` varchar(50) NOT NULL,
  `phai` varchar(5) NOT NULL,
  `diaChi` varchar(100) NOT NULL,
  `dienThoai` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`maKH`, `tenKH`, `phai`, `diaChi`, `dienThoai`, `email`) VALUES
('kh001', 'Khuất Thùy Phương', 'Nữ', 'A21 Nguyễn Oanh quận Gò Vấp', '9874125', 'ktphuong@hcmus.edu.vn'),
('kh002', 'Đỗ Lâm Thiên', 'Nam', '357 Lê Hồng Phong Q.10', '9745698', 'dlthien@hcmus.edu.vn'),
('kh003', 'Phạm Thị Nhung', 'Nữ', '56 Đinh Tiên Hoàng Quận 1', '9745698', 'ptnhung@hcmus.edu.vn'),
('kh004', 'Nguyễn Khắc Thiện', 'Nam', '12 Đường 3 -2 Quận 10', '8769128', 'nkthien@hcmus.edu.vn'),
('kh005', 'Tô Trần Hồ Giáng', 'Nam', '75 Nguyễn Kiệm quận Gò Vấp', '5792564', 'tthgiang@hcmus.edu.vn'),
('kh006', 'Nguyễn Kiến Thi', 'Nữ', '357 Lê Hồng Phong Quận 10', '9874125', 'nkthi@hcmus.edu.vn'),
('kh008', 'Nguyễn Anh Tuấn', 'Nam', '1/2 Nơ Trang Long Q.BT TP.HCM', '8753159', 'natuan@hcmus.edu.vn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sua`
--

CREATE TABLE `loai_sua` (
  `maLS` varchar(5) NOT NULL,
  `tenLS` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sua`
--

CREATE TABLE `sua` (
  `maSua` varchar(5) NOT NULL,
  `tenSua` varchar(50) NOT NULL,
  `maHangSua` varchar(5) NOT NULL,
  `maLoaiSua` varchar(5) NOT NULL,
  `trongLuong` int(11) NOT NULL,
  `donGia` int(11) NOT NULL,
  `tpDinhDuong` text NOT NULL,
  `loiIch` text NOT NULL,
  `hinh` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD PRIMARY KEY (`soHD`),
  ADD KEY `MA_SUA` (`maSua`);

--
-- Chỉ mục cho bảng `hang_sua`
--
ALTER TABLE `hang_sua`
  ADD PRIMARY KEY (`maHS`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`soHD`),
  ADD KEY `MA_KH` (`maKH`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`maKH`);

--
-- Chỉ mục cho bảng `loai_sua`
--
ALTER TABLE `loai_sua`
  ADD PRIMARY KEY (`maLS`);

--
-- Chỉ mục cho bảng `sua`
--
ALTER TABLE `sua`
  ADD PRIMARY KEY (`maSua`),
  ADD KEY `MA_HANG_SUA` (`maHangSua`),
  ADD KEY `MA_LOAI_SUA` (`maLoaiSua`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  MODIFY `soHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_hoa_don`
--
ALTER TABLE `chi_tiet_hoa_don`
  ADD CONSTRAINT `MA_SUA` FOREIGN KEY (`maSua`) REFERENCES `sua` (`maSua`),
  ADD CONSTRAINT `SO_HD` FOREIGN KEY (`soHD`) REFERENCES `hoa_don` (`soHD`);

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `MA_KH` FOREIGN KEY (`maKH`) REFERENCES `khach_hang` (`maKH`);

--
-- Các ràng buộc cho bảng `sua`
--
ALTER TABLE `sua`
  ADD CONSTRAINT `MA_HANG_SUA` FOREIGN KEY (`maHangSua`) REFERENCES `hang_sua` (`maHS`),
  ADD CONSTRAINT `MA_LOAI_SUA` FOREIGN KEY (`maLoaiSua`) REFERENCES `loai_sua` (`maLS`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
