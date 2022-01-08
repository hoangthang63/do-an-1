-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th1 08, 2022 lúc 12:25 PM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `doan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `ma` int(12) NOT NULL,
  `ten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`ma`, `ten`) VALUES
(1, 'ffafd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma` int(11) NOT NULL,
  `ma_nhan_vien` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ten_nguoi_dat` varchar(200) NOT NULL,
  `thoi_gian_dat` date NOT NULL,
  `sdt_nguoi_dat` varchar(20) NOT NULL,
  `ghi_chu` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `gioi_tinh` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ma` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `dia_chi` int(11) NOT NULL,
  `gioi_tinh` varchar(20) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `mat_khau` varchar(200) NOT NULL,
  `cap_do` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nha_san_xuat`
--

CREATE TABLE `nha_san_xuat` (
  `ma` varchar(20) NOT NULL,
  `ten` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nha_san_xuat`
--

INSERT INTO `nha_san_xuat` (`ma`, `ten`) VALUES
('24', '234'),
('2432', '432432'),
('24342', '24243');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `ma` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `mo_ta` varchar(200) NOT NULL,
  `anh` varchar(200) NOT NULL,
  `gia` int(18) NOT NULL,
  `nha_san_xuat` varchar(15) NOT NULL,
  `danh_muc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`ma`, `ten`, `mo_ta`, `anh`, `gia`, `nha_san_xuat`, `danh_muc`) VALUES
(1, 'Bút TL00', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://th.bing.com/th/id/R.71a38dbe79c164b0897ab30f57a7391b?rik=rcww4B2B7NYzmw&pid=ImgRaw&r=0', 5000, 'TL', 'Bút'),
(2, 'Bút TL01', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://namcuongthinh.com/wp-content/uploads/2020/03/untitled-1-33a59802-fbe4-476a-8197-9da9a238b387-768x768.png', 6000, 'TL', 'Bút'),
(3, 'Bút TL02', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://www.thienlong.com.vn/vnt_upload/product/TL_097/thumbs/870_TL_097_01.jpg', 7000, 'TL', 'Bút'),
(4, 'Bút Deli', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://cf.shopee.vn/file/7d51a801b69325ff1048640a46d3a6dd', 8000, 'DL', 'Bút');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ma`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma`),
  ADD KEY `ma_nhan_vien` (`ma_nhan_vien`),
  ADD KEY `ma_khach_hang` (`ma_khach_hang`);

--
-- Chỉ mục cho bảng `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`ma_hoa_don`,`ma_san_pham`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma`);

--
-- Chỉ mục cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ma`);

--
-- Chỉ mục cho bảng `nha_san_xuat`
--
ALTER TABLE `nha_san_xuat`
  ADD PRIMARY KEY (`ma`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma`,`nha_san_xuat`),
  ADD KEY `ma_nha_san_xuat` (`nha_san_xuat`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `ma` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `hoa_don_ibfk_1` FOREIGN KEY (`ma_nhan_vien`) REFERENCES `nhan_vien` (`ma`),
  ADD CONSTRAINT `hoa_don_ibfk_2` FOREIGN KEY (`ma_khach_hang`) REFERENCES `khach_hang` (`ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
