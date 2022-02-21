-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 21, 2022 at 08:42 AM
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
  `sdt_nguoi_nhan` char(20) NOT NULL,
  `dia_chi_nhan_hang` text NOT NULL,
  `tong_tien` double NOT NULL,
  `ghi_chu` text NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`ma`, `ma_khach_hang`, `ten_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nhan_hang`, `tong_tien`, `ghi_chu`, `trang_thai`) VALUES
(8, 17, 'Van Thang', '911', 'ngõ 39 - tôn đức thắng', 5000, '', 0),
(9, 17, 'Van Thang', '911', 'ngõ 39 - tôn đức thắng', 100000, '', 0);

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
(8, 1, 1),
(9, 7, 2),
(9, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `ma` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `gioi_tinh` varchar(20) NOT NULL DEFAULT 'nam',
  `email` varchar(200) NOT NULL,
  `mat_khau` varchar(200) NOT NULL,
  `token` varchar(100) DEFAULT NULL,
  `sdt` char(20) NOT NULL,
  `dia_chi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`ma`, `ten`, `gioi_tinh`, `email`, `mat_khau`, `token`, `sdt`, `dia_chi`) VALUES
(16, 'Hoang Thang', 'nam', 'asd@123', '12345678', NULL, '012345678', 'hn'),
(17, 'Van Thang', 'nam', 'vt@123', '12345678', NULL, '911', 'ngõ 39 - tôn đức thắng');

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
  `ngay_sinh` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `mat_khau` varchar(200) NOT NULL,
  `cap_do` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nha_san_xuat`
--

CREATE TABLE `nha_san_xuat` (
  `ma` varchar(15) NOT NULL DEFAULT 'TL',
  `ten` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nha_san_xuat`
--

INSERT INTO `nha_san_xuat` (`ma`, `ten`) VALUES
('CP', 'Campus'),
('CSO', 'Casio'),
('DA', 'Double A'),
('DL', 'Deli'),
('HH', 'Hồng Hà'),
('HT', 'Hải Tiến'),
('KL', 'KLONG'),
('PR', 'Primary'),
('TL', 'Thiên Long'),
('VNC', 'Vinacal');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `ma` int(11) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `mo_ta` varchar(200) NOT NULL,
  `anh` varchar(200) NOT NULL,
  `gia` int(11) NOT NULL,
  `ma_nha_san_xuat` varchar(15) NOT NULL,
  `danh_muc` varchar(50) NOT NULL DEFAULT 'Bút'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`ma`, `ten`, `mo_ta`, `anh`, `gia`, `ma_nha_san_xuat`, `danh_muc`) VALUES
(1, 'Bút TL00', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://th.bing.com/th/id/R.71a38dbe79c164b0897ab30f57a7391b?rik=rcww4B2B7NYzmw&pid=ImgRaw&r=0', 5000, 'TL', 'Bút'),
(2, 'Bút TL01', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://namcuongthinh.com/wp-content/uploads/2020/03/untitled-1-33a59802-fbe4-476a-8197-9da9a238b387-768x768.png', 6000, 'TL', 'Bút'),
(3, 'Bút TL02', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://www.thienlong.com.vn/vnt_upload/product/TL_097/thumbs/870_TL_097_01.jpg', 7000, 'TL', 'Bút'),
(4, 'Bút Deli', '- Bút có thiết kế đơn giản, toàn bộ thân bút làm từ nhựa trong, nút bấm bằng nhựa màu cùng màu với ruột bút.\r\n\r\n- Viết trơn, êm, mực ra đều, liên tục.\r\n\r\n- Sử dụng cơ chế bấm đóng mở.', 'https://cf.shopee.vn/file/7d51a801b69325ff1048640a46d3a6dd', 8000, 'DL', 'Bút'),
(6, 'Vở Hồng Hà', 'Thông tin chi tiết sản phẩm:\r\n- Kích thước: 175 x 250 (±2mm)\r\n- Số trang: 72 trang cả bìa\r\n- Định lượng: 58g/m²\r\n- Độ trắng: 82 - 84%ISO\r\n- Đóng gói: 10 quyển/lốc - 200 quyển/thùng', 'https://product.hstatic.net/1000362139/product/vo_1004-1_1b774cbc8f5546d0a3be87c21637940b.jpg', 8000, 'HH', 'Vở'),
(7, 'Vở Campus', 'Thông tin chi tiết sản phẩm\r\n\r\nKích thước: 179x252 mm\r\n\r\nSố trang: 200\r\n\r\nĐịnh lượng giấy: 70 gsm\r\n\r\nDòng kẻ: kẻ ngang có chấm', 'https://product.hstatic.net/1000362139/product/vo_earth1_e5858e2da0b541d585370f8011bb3a27.png', 15000, 'CP', 'Vở'),
(8, 'Vở Hải Tiến', 'Thông tin chi tiết sản phẩm\r\n\r\nKích thước: 179x252 mm\r\n\r\nSố trang: 200\r\n\r\nĐịnh lượng giấy: 70 gsm\r\n\r\nDòng kẻ: kẻ ngang có chấm', 'https://cf.shopee.vn/file/869578b95742d59000dcaa131a69d065', 7000, 'HT', 'Vở'),
(9, 'Máy tính Casio DX 12B', 'Nguồn hai chiều (Mặt trời + Pin)\r\n\r\nNhấn đồng thời phím\r\n\r\nCác phím dẻo\r\n	\r\nPhần trăm pin thông thường\r\n', 'https://cdn.fast.vn/tmp/20200721075742-2172002075725_1553584051.jpg', 403000, 'CSO', 'Máy tính bỏ túi'),
(10, 'Máy tính Deli 12 số 1239', 'Nguồn hai chiều (Mặt trời + Pin)\r\n\r\nNhấn đồng thời phím\r\n\r\nCác phím dẻo\r\n	\r\nPhần trăm pin thông thường\r\n', 'https://cdn.fast.vn/image/data/100419/32250m%C3%A1y%20t%C3%ADnh%20deli-M%C3%A1y%20T%C3%ADnh%2012%20S%E1%BB%91%20Deli%201239%20215000.jpg', 405000, 'DL', 'Máy tính bỏ túi'),
(11, 'Vinacal 570ES Plus II', 'Nguồn hai chiều (Mặt trời + Pin)\r\n\r\nNhấn đồng thời phím\r\n\r\nCác phím dẻo\r\n	\r\nPhần trăm pin thông thường\r\n', 'https://p.ipricegroup.com/uploaded_72ef8d4529ceed6fb49d5664181632ac.jpg', 630000, 'VNC', 'Máy tính bỏ túi'),
(12, 'Compa Deli 8601', '- Độ bền cao\r\n- Sử dụng ngòi thiết kế theo dạng ngòi rời \r\n- Sản xuất từ hợp kim nhôm an toàn cho người sử dụng', 'https://img.sosanhgia.com/images/500x0/46b0923dbf14479ba7bbecd8abebbcb2/compa-deli-8601.jpeg', 75000, 'DL', 'Khác'),
(13, 'Bộ eke Hồng Hà', '- Độ bền cao\r\n- Sử dụng ngòi thiết kế theo dạng ngòi rời \r\n- Sản xuất từ hợp kim nhôm an toàn cho người sử dụng', 'https://vanphongphambaoan.vn/wp-content/uploads/2020/08/bo-eke-4-san-pham-1579537908.jpg', 8000, 'HH', 'Khác'),
(14, 'Tẩy Campus', '- Độ bền cao\r\n- Sử dụng ngòi thiết kế theo dạng ngòi rời \r\n- Sản xuất từ hợp kim nhôm an toàn cho người sử dụng', 'http://tikicdn.com/media/catalog/product/e/r/er-sta-20.u634.d20160704.t143206.jpg', 4000, 'CP', 'Khác'),
(15, 'Giấy A4 Primary 80gsm', 'Loại giấy in cao cấp, trắng, đẹp,\r\n\r\n                        thích hợp với tất cả các loại Máy in phun, Máy in Laser,\r\n\r\n                        Máy Fax laser, Máy Photocopy.', 'https://cdn.fast.vn/tmp/20201001093550-5.PNG', 101000, 'PR', 'Giấy in ấn'),
(16, 'Giấy A4 Double A 70 Gsm', 'Loại giấy in cao cấp, trắng, đẹp,\r\n\r\n                        thích hợp với tất cả các loại Máy in phun, Máy in Laser,\r\n\r\n                        Máy Fax laser, Máy Photocopy.', 'https://cdn.fast.vn/tmp/20200716114157-3.jpg', 70000, 'DA', 'Giấy in ấn'),
(17, 'Giấy A4 Double A 80 Gsm', 'Loại giấy in cao cấp, trắng, đẹp,\r\n\r\n                        thích hợp với tất cả các loại Máy in phun, Máy in Laser,\r\n\r\n                        Máy Fax laser, Máy Photocopy.', 'https://cdn.fast.vn/tmp/20200718201248-6.jpg', 85000, 'DA', 'Giấy in ấn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`ma`);

--
-- Indexes for table `hoa_don_chi_tiet`
--
ALTER TABLE `hoa_don_chi_tiet`
  ADD PRIMARY KEY (`ma_hoa_don`,`ma_san_pham`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`ma`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

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
  ADD PRIMARY KEY (`ma`,`ma_nha_san_xuat`),
  ADD KEY `ma_nha_san_xuat` (`ma_nha_san_xuat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `ma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`ma_nha_san_xuat`) REFERENCES `nha_san_xuat` (`ma`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
