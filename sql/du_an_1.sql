-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2023 lúc 05:49 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id_binh_luan` int(11) NOT NULL,
  `id_tai_khoan` varchar(50) NOT NULL,
  `id_khoa_hoc` int(11) NOT NULL,
  `noi_dung_binh_luan` varchar(225) NOT NULL,
  `ngay_binh_luan` date NOT NULL,
  `danh_gia` int(1) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_binh_luan`, `id_tai_khoan`, `id_khoa_hoc`, `noi_dung_binh_luan`, `ngay_binh_luan`, `danh_gia`) VALUES
(3, '1', 1, 'hjhj', '0000-00-00', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dang_ky_khoa_hoc`
--

CREATE TABLE `dang_ky_khoa_hoc` (
  `id_dang_ky_khoa_hoc` int(11) NOT NULL,
  `id_tai_khoan` int(11) NOT NULL,
  `id_khoa_hoc` int(11) NOT NULL,
  `id_giang_vien` int(11) NOT NULL,
  `ngay_dang_ky_hoc` date NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `id_khuyen_mai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_khoa_hoc`
--

CREATE TABLE `danh_muc_khoa_hoc` (
  `id_danh_muc` int(11) NOT NULL,
  `ten_danh_muc` varchar(50) NOT NULL,
  `mo_ta` varchar(225) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc_khoa_hoc`
--

INSERT INTO `danh_muc_khoa_hoc` (`id_danh_muc`, `ten_danh_muc`, `mo_ta`, `trang_thai`) VALUES
(1, 'Lập Trình Web Backend', 'Hướng học theo ngành backend', 'show'),
(29, 'Tự động hóa', 'xin chào1', 'show'),
(30, 'Tester12', 'xin chào12', 'none');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giang_vien`
--

CREATE TABLE `giang_vien` (
  `id_giang_vien` int(11) NOT NULL,
  `ten_giang_vien` varchar(50) NOT NULL,
  `ma_giang_vien` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `avt` varchar(225) NOT NULL,
  `so_dien_thoai` varchar(15) NOT NULL,
  `mo_ta` varchar(225) NOT NULL,
  `nam_sinh` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giang_vien`
--

INSERT INTO `giang_vien` (`id_giang_vien`, `ten_giang_vien`, `ma_giang_vien`, `email`, `avt`, `so_dien_thoai`, `mo_ta`, `nam_sinh`) VALUES
(4, 'Lê Quý Hiếu', 'hieulqph36904', 'hieulqph36904@fpt.edu.vn', 'gv.png', '0338475943', '10 năm làm việc cho FPTsoftware', '2004-02-10'),
(5, 'Hoàng Cao Huân', 'huanhcph123', 'huanhcph12345@fpt.edu.vn', 'gv.png', '777111222', 'Chưa có kinh nghiệm', '2004-12-12'),
(6, 'Nguyễn Sỹ Anh Tuấn', 'tuannsaph12332', 'tuannsaph12332@fpt.edu.vn', 'anhtuna.png', '111222333', '100 năm kinh nghiệm', '2004-12-12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_hoc`
--

CREATE TABLE `khoa_hoc` (
  `id_khoa_hoc` int(11) NOT NULL,
  `ten_khoa_hoc` varchar(50) NOT NULL,
  `avt` varchar(225) NOT NULL,
  `tien_hoc` int(11) NOT NULL,
  `mo_ta` text NOT NULL,
  `so_luot_xem` int(11) NOT NULL DEFAULT 0,
  `so_luot_dang_ky` int(11) NOT NULL DEFAULT 0,
  `lo_trinh_hoc` text NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `id_giang_vien` int(11) NOT NULL,
  `id_danh_muc` int(11) NOT NULL,
  `slideshow` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`id_khoa_hoc`, `ten_khoa_hoc`, `avt`, `tien_hoc`, `mo_ta`, `so_luot_xem`, `so_luot_dang_ky`, `lo_trinh_hoc`, `trang_thai`, `id_giang_vien`, `id_danh_muc`, `slideshow`) VALUES
(22, 'C#', 'cSharp.png', 100, 'Mô tả sản phẩm: Tivi (viết tắt của Television) là một thiết bị điện tử dùng để truyền hình và hiển thị hình ảnh chuyển động và âm thanh. Nó đã trở thành một phần quan trọng trong cuộc sống hàng ngày của mọi người trên khắp thế giới. Một số tivi mới hỗ trợ công nghệ tương tác, cho phép người dùng điều khiển bằng giọng nói hoặc cử chỉ. Tóm lại, tivi đã trở thành một phần không thể thiếu trong hầu hết các hộ gia đình và đóng vai trò quan trọng trong việc mang lại giải trí và thông tin cho mọi người.', 0, 0, '', 'yes', 4, 1, 'show'),
(23, 'PHP', 'php.png', 2000, 'PHP viết là viết tắt của Hypertext Preprocessor', 0, 0, '', 'yes', 4, 1, 'show');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id_khuyen_mai` int(11) NOT NULL,
  `ten_khuyen_mai` varchar(50) NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `noi_dung` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id_khuyen_mai`, `ten_khuyen_mai`, `ngay_bat_dau`, `ngay_ket_thuc`, `noi_dung`) VALUES
(3, 'sake', '2022-12-11', '2023-12-14', '-80'),
(4, 'Best sale', '2023-11-02', '2023-11-30', '30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lien_he`
--

CREATE TABLE `lien_he` (
  `id_lien_he` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_lien_he` date NOT NULL,
  `id_tai_khoan` int(50) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lien_he`
--

INSERT INTO `lien_he` (`id_lien_he`, `noi_dung`, `ngay_lien_he`, `id_tai_khoan`, `trang_thai`) VALUES
(10, 'hay', '2023-11-14', 0, ''),
(12, 'liên hệ mới', '2023-11-14', 0, 'Chưa phản hồi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id_role` int(3) NOT NULL,
  `name_role` varchar(25) NOT NULL,
  `mo_ta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id_role`, `name_role`, `mo_ta`) VALUES
(1, 'Học Viên', 'Đăng Nhập ,Đăng Ky khóa học. xem các khóa học,danh mục'),
(2, 'Nhân Viên', 'Có quyền xem thông tin quản trị.trả lời các liên hệ của học viên '),
(3, 'Admin', 'Có toàn quyền Quản trị website');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id_tai_khoan` int(11) NOT NULL,
  `ten_tai_khoan` varchar(50) NOT NULL,
  `ho_va_ten` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `nam_sinh` date NOT NULL,
  `mat_khau` varchar(50) NOT NULL,
  `avt` varchar(225) DEFAULT NULL,
  `so_dien_thoai` varchar(15) DEFAULT NULL,
  `id_role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id_tai_khoan`, `ten_tai_khoan`, `ho_va_ten`, `email`, `nam_sinh`, `mat_khau`, `avt`, `so_dien_thoai`, `id_role`) VALUES
(1, 'admin', 'Hiếu Huân Tuấn', 'codephpnguvl@gmail.com', '2004-02-10', 'admin', 'img.png', '0123456789', 1),
(12, 'hocvien', 'Le QUy Hieu', 'lehieu10022004@gmail.com', '2023-10-31', 'hocvien', 'gv.png', '0111222333', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id_binh_luan`);

--
-- Chỉ mục cho bảng `dang_ky_khoa_hoc`
--
ALTER TABLE `dang_ky_khoa_hoc`
  ADD PRIMARY KEY (`id_dang_ky_khoa_hoc`);

--
-- Chỉ mục cho bảng `danh_muc_khoa_hoc`
--
ALTER TABLE `danh_muc_khoa_hoc`
  ADD PRIMARY KEY (`id_danh_muc`);

--
-- Chỉ mục cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  ADD PRIMARY KEY (`id_giang_vien`);

--
-- Chỉ mục cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  ADD PRIMARY KEY (`id_khoa_hoc`);

--
-- Chỉ mục cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`id_khuyen_mai`);

--
-- Chỉ mục cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  ADD PRIMARY KEY (`id_lien_he`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id_tai_khoan`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `dang_ky_khoa_hoc`
--
ALTER TABLE `dang_ky_khoa_hoc`
  MODIFY `id_dang_ky_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danh_muc_khoa_hoc`
--
ALTER TABLE `danh_muc_khoa_hoc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  MODIFY `id_giang_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `id_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id_lien_he` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id_tai_khoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
