-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2022 at 08:41 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `ma` int(12) NOT NULL,
  `ten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`ma`, `ten`) VALUES
(2, 'Bút'),
(3, 'Máy tính'),
(4, 'Giấy'),
(5, 'Mực '),
(6, 'TIến gà');

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `ma` int(11) NOT NULL,
  `ma_khach_hang` int(11) NOT NULL,
  `ten_nguoi_nhan` varchar(50) NOT NULL,
  `sdt_nguoi_nhan` int(20) NOT NULL,
  `dia_chi_nhan_hang` varchar(50) NOT NULL,
  `tong_tien` double NOT NULL,
  `ghi_chu` text NOT NULL,
  `trang_thai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma`, `ma_khach_hang`, `ten_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nhan_hang`, `tong_tien`, `ghi_chu`, `trang_thai`) VALUES
(8, 6, 'h', 23, 'g', 128, 'df', 2),
(9, 6, 'h', 23, 'g', 128, 'df', 0),
(10, 6, 'h', 23, 'g', 128, 'df', 0),
(11, 6, 'h', 23, 'g', 128, 'df', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don_chi_tiet`
--

CREATE TABLE `hoa_don_chi_tiet` (
  `ma_hoa_don` int(11) NOT NULL,
  `ma_san_pham` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoa_don_chi_tiet`
--

INSERT INTO `hoa_don_chi_tiet` (`ma_hoa_don`, `ma_san_pham`, `so_luong`) VALUES
(10, 5, 4),
(11, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `dia_chi` varchar(100) NOT NULL,
  `sdt` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma`, `ten`, `email`, `mat_khau`, `dia_chi`, `sdt`) VALUES
(6, 'Huỳnh Nhật Linh', '52100815@student.tdtu.edu.vn', '12345', '', 0),
(7, 'Linh', 'qfd@gmail.com', '1234', 'uuu', 123213213);

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `ma` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `sdt` varchar(20) NOT NULL,
  `dia_chi` int(11) NOT NULL,
  `gioi_tinh` varchar(20) NOT NULL,
  `ngay_sinh` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `mat_khau` varchar(200) NOT NULL,
  `cap_do` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nhan_vien`
--

INSERT INTO `nhan_vien` (`ma`, `ten`, `sdt`, `dia_chi`, `gioi_tinh`, `ngay_sinh`, `email`, `mat_khau`, `cap_do`) VALUES
(1, '13', '13', 132, 'Nam', '123', '123@fa', '132', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nha_san_xuat`
--

CREATE TABLE `nha_san_xuat` (
  `ma` varchar(20) NOT NULL,
  `ten` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nha_san_xuat`
--

INSERT INTO `nha_san_xuat` (`ma`, `ten`) VALUES
('24', '234'),
('2432', '432432'),
('24342', '24243');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
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
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma`, `ten`, `mo_ta`, `anh`, `gia`, `nha_san_xuat`, `danh_muc`) VALUES
(1, 'Bút TL00', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://th.bing.com/th/id/R.71a38dbe79c164b0897ab30f57a7391b?rik=rcww4B2B7NYzmw&pid=ImgRaw&r=0', 5000, 'TL', 'Bút'),
(2, 'Bút TL01', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://namcuongthinh.com/wp-content/uploads/2020/03/untitled-1-33a59802-fbe4-476a-8197-9da9a238b387-768x768.png', 6000, 'TL', 'Bút'),
(3, 'Bút TL02', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://www.thienlong.com.vn/vnt_upload/product/TL_097/thumbs/870_TL_097_01.jpg', 7000, 'TL', 'Bút'),
(4, 'Bút Deli', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://cf.shopee.vn/file/7d51a801b69325ff1048640a46d3a6dd', 8000, 'DL', 'Bút'),
(5, '12', '32', '../photo/1643529267.jpg', 32, '432432', 'ffafd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD KEY `ma_san_pham` (`ma_san_pham`),
  ADD KEY `hoa_don_chi_tiet_ibfk_1` (`ma_hoa_don`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `nha_san_xuat`
--
ALTER TABLE `nha_san_xuat`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`ma`,`nha_san_xuat`),
  ADD KEY `ma_nha_san_xuat` (`nha_san_xuat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `ma` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_1` FOREIGN KEY (`ma_hoa_don`) REFERENCES `hoa_don` (`ma`),
  ADD CONSTRAINT `hoa_don_chi_tiet_ibfk_2` FOREIGN KEY (`ma_san_pham`) REFERENCES `san_pham` (`ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
