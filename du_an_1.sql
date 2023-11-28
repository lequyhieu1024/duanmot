-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 03:30 PM
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
  `ngay_binh_luan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_binh_luan`, `id_tai_khoan`, `id_khoa_hoc`, `noi_dung_binh_luan`, `ngay_binh_luan`) VALUES
(56, '1', 26, 'cũng ok', '2023-11-22'),
(65, '1', 38, 'quá toẹt vời', '2023-11-26'),
(66, '1', 38, 'thầy dạy hay quá ạ', '2023-11-26'),
(67, '1', 38, 'thầy hiếu số 1', '2023-11-26'),
(68, '1', 23, 'xịn', '2023-11-27'),
(69, '1', 23, 'xịn', '2023-11-27'),
(70, '1', 23, 'Xịn lắm', '2023-11-27'),
(71, '1', 23, 'được vờ lờ', '2023-11-27'),
(72, '1', 23, 'cũng ok', '2023-11-27'),
(73, '1', 23, 'được vờ lờ', '2023-11-27'),
(74, '1', 30, 'được vờ lờ', '2023-11-27'),
(75, '1', 30, 'Xịn lắm', '2023-11-27'),
(76, '1', 30, 'khét quá ', '2023-11-27'),
(77, '1', 37, 'được vờ lờ', '2023-11-27'),
(78, '1', 32, 'zzzzzzzzzz', '2023-11-28');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dang_ky_khoa_hoc`
--

CREATE TABLE `dang_ky_khoa_hoc` (
  `id_dang_ky_khoa_hoc` int(11) NOT NULL,
  `id_tai_khoan` int(11) NOT NULL,
  `id_khoa_hoc` int(11) NOT NULL,
  `id_giang_vien` int(11) NOT NULL,
  `thanh_tien` int(11) NOT NULL,
  `ngay_dang_ky_hoc` date NOT NULL,
  `trang_thai` varchar(50) NOT NULL,
  `id_khuyen_mai` int(11) NOT NULL,
  `ho_va_ten` varchar(50) DEFAULT NULL,
  `so_dien_thoai` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dang_ky_khoa_hoc`
--

INSERT INTO `dang_ky_khoa_hoc` (`id_dang_ky_khoa_hoc`, `id_tai_khoan`, `id_khoa_hoc`, `id_giang_vien`, `thanh_tien`, `ngay_dang_ky_hoc`, `trang_thai`, `id_khuyen_mai`, `ho_va_ten`, `so_dien_thoai`, `email`) VALUES
(12, 1, 23, 4, 2000, '2023-11-02', '3', 1, NULL, NULL, NULL),
(14, 1, 30, 4, 123, '2023-11-02', '3', 0, NULL, NULL, NULL),
(35, 1, 38, 4, 419300, '2023-11-28', '2', 4, 'Hiếu Huân Tuấn', '0338475943', 'codephpnguvl@gmail.com'),
(38, 1, 34, 4, 86186, '2023-11-28', '1', 4, 'Hiếu Huân Tuấn', '0338475943', 'codephpnguvl@gmail.com'),
(39, 1, 32, 4, 369600, '2023-11-28', '1', 7, 'Hiếu Huân Tuấn', '0338475943', 'codephpnguvl@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_gia`
--

CREATE TABLE `danh_gia` (
  `id_danh_gia` int(11) NOT NULL,
  `id_tai_khoan` int(11) NOT NULL,
  `id_khoa_hoc` int(11) NOT NULL,
  `danh_gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_gia`
--

INSERT INTO `danh_gia` (`id_danh_gia`, `id_tai_khoan`, `id_khoa_hoc`, `danh_gia`) VALUES
(4, 1, 23, 5),
(5, 1, 30, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc_khoa_hoc`
--

CREATE TABLE `danh_muc_khoa_hoc` (
  `id_danh_muc` int(11) NOT NULL,
  `ten_danh_muc` varchar(50) NOT NULL,
  `mo_ta` varchar(225) NOT NULL,
  `avt` varchar(225) NOT NULL,
  `trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc_khoa_hoc`
--

INSERT INTO `danh_muc_khoa_hoc` (`id_danh_muc`, `ten_danh_muc`, `mo_ta`, `avt`, `trang_thai`) VALUES
(54, 'Ngôn ngữ lập trình', ' Ngôn ngữ lập trình là một phương tiện giao tiếp giữa con người và máy tính, xác định cách chúng ta diễn đạt ý tưởng và hướng dẫn máy tính để thực hiện công việc cụ thể. Các ngôn ngữ này có cú pháp và ngữ nghĩa đặc trưng, từ ', 'Ngon-ngu-lap-trinh.jpg', 'show'),
(57, 'Lập Trình Web Back-end', ' Back-end là phần của một ứng dụng hay trang web không thể nhìn thấy trực tiếp bởi người dùng, nhưng đóng vai trò quan trọng trong việc xử lý dữ liệu và logic của hệ thống. Back-end thường bao gồm máy chủ, cơ sở dữ liệu, và c', 'back-end.png', 'show'),
(58, 'Lập Trình Web FrontEnd', 'Front-end là phần của một ứng dụng hoặc trang web mà người dùng có thể nhìn thấy và tương tác trực tiếp. Nó bao gồm giao diện người dùng, các thành phần thị giác như nút, biểu đồ, và trường nhập liệu. Front-end thường được xâ', 'font-end.png', 'show'),
(59, 'Phát triển Game', ' Phát triển game là quá trình sáng tạo trò chơi điện tử từ ý tưởng đến sản phẩm hoàn chỉnh, bao gồm thiết kế, lập trình, kiểm thử, và phát hành. Đòi hỏi sự hợp tác của nhiều chuyên gia và liên quan đến nhiều bước từ kế hoạch ', 'ngon-ngu-lap-trinh-game.jpg', 'show'),
(60, 'HQT Cơ Sở         Dữ Liệu', ' Cơ sở dữ liệu (Database) là một hệ thống tổ chức và lưu trữ dữ liệu một cách có tổ chức để truy cập và quản lý dễ dàng. Nó đóng vai trò quan trọng trong việc lưu trữ thông tin, từ dữ liệu người dùng đến thông tin hệ thống. C', 'Database.png', 'show'),
(61, 'Học DevOps vàTools', ' DevOps Tools là bộ công cụ được sử dụng trong quá trình triển khai và quản lý quy trình DevOps, nhằm cải thiện tích hợp và giao tiếp giữa đội ngũ phát triển và quản lý hệ thống. Các công cụ này giúp tự động hóa các công việc', 'DevOps-Tools.png', 'show'),
(62, 'Học Lập trình Mobile', ' Lập trình di động là quá trình sáng tạo và triển khai ứng dụng trên các thiết bị di động, như điện thoại thông minh và máy tính bảng. Với hai hệ điều hành chính là Android và iOS, người phát triển sử dụng các ngôn ngữ như Ja', 'mobile.png', 'show');

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
(4, 'Lê Quý Hiếu', 'hieulqph36904', 'hieulqph36904@fpt.edu.vn', 'gv.png', '0338475943', 'Giảng viên là một người có kiến thức sâu rộng, một người có kỹ năng chuyên nghiệp, một người có thái độ tích cực, một người có phương pháp dạy học hiệu quả, một người có kinh nghiệm thực tiễn, một người có đóng góp khoa học, ', '2004-02-10'),
(5, 'Hoàng Cao Huân', 'huanhcph123', 'huanhcph12345@fpt.edu.vn', 'gv1.jpg', '077887111222', ' Giảng viên là một người thầy, một người hướng dẫn, một người cố vấn, một người đồng hành, một người bạn, một người đánh giá, một người nghiên cứu, một người phát triển, một người lãnh đạo, một người đi đầu, một người đổi mới', '2004-12-12'),
(6, 'Nguyễn Sỹ Anh Tuấn', 'tuannsaph12332', 'tuannsaph38615@fpt.edu.vn', 'gv2.jpg', '0111222333', 'Giảng viên là một người nhiệt tình, một người kiên nhẫn, một người hài hước, một người nghiêm túc, một người thân thiện, một người khắt khe, một người công bằng, một người tôn trọng, một người quan tâm, một người chia sẻ, một', '2004-11-15'),
(8, 'lê thị vy', 'vylt27322', 'vilt36904@fpt.edu.vn', 'gv3.jpg', '111222333444', 'viên là một người yêu thích môn học mình dạy, một người yêu thích công việc mình làm, một người yêu thích sinh viên mình dạy, một người yêu thích học hỏi mọi lúc mọi nơi, một người yêu thích đọc sách, một người yêu thích du l', '2004-12-12'),
(9, 'lê thị lan anh ', 'anhltlph13132', 'anhltl@fpt.edu.vn', 'gv4.jpg', '0987654345', ' Giảng viên là một người yêu thích môn học mình dạy, một người yêu thích công việc mình làm, một người yêu thích sinh viên mình dạy, một người yêu thích học hỏi mọi lúc mọi nơi, một người yêu thích đọc sách, một người yêu thí', '2000-02-12'),
(10, 'lê văn tú', 'tulvph13131', 'tulvph13131@fpt.edu.vn', 'gv5.jpg', '0192922231', ' Giảng viên là một người vui vẻ, hòa đồng, thân thiện, khi dạy học luôn tỏ ra nhiệt tình, hài hước, khi giao tiếp luôn tỏ ra quan tâm, lắng nghe, khi đối mặt với khó khăn luôn tỏ ra bình tĩnh, kiên cường.', '1997-12-12'),
(11, 'lê bá anh', 'anhlbph17217', 'anhlbph17217@fpt.edu.vn', 'gv6.jpg', '087543456', ' Giảng viên  có giọng nói trầm ấm, to rõ, trong trẻo, nói chậm rãi, sử dụng tiếng Việt chuẩn, cách diễn đạt rõ ràng và sinh động.', '2000-12-12'),
(12, ' Đỗ Thành văn', 'vandtph18121', 'vandtph18121@fpt.edu.vn', 'gv7.jpg', '07653455', 'Giảng viên là một người cao ráo, gầy gò, da trắng, tóc đen, mắt xanh, khuôn mặt tròn, hình dáng cân đối, phong cách ăn mặc lịch sự và thanh lịch.', '1996-12-12'),
(13, 'Ngô Kim phúc', 'phucnkph18211', 'phucnkph18211@fpt.edu.vn', 'gv8.jpg', '0876544567', 'Giảng viên là có giọng nói trầm ấm, to rõ, trong trẻo, nói chậm rãi, sử dụng tiếng Việt chuẩn, cách diễn đạt rõ ràng và sinh động.', '1972-03-12'),
(14, 'Bùi Xuân Huấn', 'huanph81721', 'huanph81721@fpt.edu.vn', 'gv8.jpg', '076567654', 'Huấn Hoa hồng (tên gọi khác: Huấn ', '1982-12-12'),
(15, 'Đặng Hữu Giang', 'gianghdph12121', 'gianghdph12121@fpt.edu.vn', 'gv10.jpg', '087654567', 'Giảng viên là một người vui vẻ, hòa đồng, thân thiện, khi dạy học luôn tỏ ra nhiệt tình, hài hước, khi giao tiếp luôn tỏ ra quan tâm, lắng nghe, khi đối mặt với khó khăn luôn tỏ ra bình tĩnh, kiên cường.', '1972-02-12'),
(16, ' Vũ Thị lan', 'lanvtph12121', 'lanvtph12121@fpt.edu.vn', 'gv12.jpg', '087678876', 'giảng viên là một người có Tri thức và kỹ năng chuyên môn: Giảng viên là người có kiến thức sâu rộng về lĩnh vực mình giảng dạy, và có khả năng truyền đạt thông tin một cách hiệu quả. Họ có kỹ năng giảng dạy, nắm vững các phư', '1972-02-12'),
(17, 'Huỳnh Minh chi', 'chihmph12711', 'chihmph12711@fpt.edu.vn', 'gv13.jpg', '087655678', 'Giảng viên không chỉ cung cấp kiến thức, mà còn truyền đạt và truyền cảm hứng cho sinh viên. Họ có khả năng tạo ra môi trường học tập tích cực, khuyến khích sự tò mò, sáng tạo và phát triển cá nhân của sinh viên.', '2000-12-12'),
(18, 'lê đức đạt', 'dạtdlph18212', 'dạtdlph18212@fpt.edu.vn', 'gv7.jpg', '087655678', 'Giảng viên có thể được coi như một đồng nghiệp và người hướng dẫn đối với sinh viên. Họ có thể cung cấp ý kiến, gợi ý và hướng dẫn trong việc tiến bộ trong học tập và nghiên cứu.', '1987-12-12'),
(19, 'nguyễn mai chi', 'chinmph12712', 'chinmph12712@fpt.edu.vn', 'gv.png', '0876787332', 'iảng viên thường có vai trò lãnh đạo và quản lý lớp học, dự án nghiên cứu hoặc các hoạt động học thuật khác. Họ có khả năng tổ chức, lập kế hoạch và quản lý tài nguyên để đạt được mục tiêu học tập.', '1987-02-12'),
(20, ' Vũ Thị tú', 'tuvtph18212', 'tuvtph18212@fpt.edu.vn', 'profile-4.png', '08765676', 'Giảng viên có thể đóng vai trò như một người hướng dẫn và người tư vấn cho sinh viên. Họ sẽ có thể cung cấp lời khuyên, hỗ trợ và chia sẻ kinh nghiệm để giúp sinh viên phát triển và đạt được mục tiêu cá nhân', '1983-02-12'),
(21, 'Nguyễn Văn Anh', 'anhnvph17212', 'anhnvph17212@fpt.edu.vn', 'gv13.jpg', '056743212', ' Giảng viên của tôi có giọng nói trầm ấm, to rõ, trong trẻo, nói chậm rãi, sử dụng tiếng Việt chuẩn, cách diễn đạt rõ ràng và sinh động.', '1212-12-12'),
(22, 'đoàn thị huyền chi', 'chidthph12121', 'chidthph12121@fpt.edu.vn', 't-1.jpg', '08654211', ', giảng viên thường có vai trò lãnh đạo và quản lý lớp học, dự án nghiên cứu hoặc các hoạt động học thuật khác. Họ có khả năng tổ chức, lập kế hoạch và quản lý tài nguyên để đạt được mục tiêu học tập.', '1982-12-12'),
(23, 'Đặng Hữu nam', 'namdhph12121', 'namdhph12121@fpt.edu.vn', 'admin.jpg', '091212111', ' Giảng viên là người có kiến thức sâu rộng về lĩnh vực mình giảng dạy, và có khả năng truyền đạt thông tin một cách hiệu quả. Họ có kỹ năng giảng dạy, nắm vững các phương pháp, công cụ và nguồn tài liệu thích hợp.', '1997-12-12'),
(24, 'Huỳnh Minh tuấn ', 'tuanmhph12121', 'tuanmhph12121@fpt.edu.vn', 'img.png', '034554322', 'Anh ấy sở hữu kiến thức chuyên môn rộng và giàu kinh nghiệm trong quá trình giảng dạy. King Nghiệm có khả năng truyền đạt thông tin một cách rõ ràng và sinh động, giúp học sinh dễ dàng hiểu và tiếp thu kiến thức. Anh ấy cũng ', '1212-12-12');

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
  `trang_thai` varchar(50) NOT NULL,
  `id_giang_vien` int(11) NOT NULL,
  `id_danh_muc` int(11) NOT NULL,
  `slideshow` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa_hoc`
--

INSERT INTO `khoa_hoc` (`id_khoa_hoc`, `ten_khoa_hoc`, `avt`, `tien_hoc`, `mo_ta`, `so_luot_xem`, `trang_thai`, `id_giang_vien`, `id_danh_muc`, `slideshow`) VALUES
(23, 'PHP Nâng Cao', 'php nâng cao.png', 299000, 'PHP nâng cao là một ngành học trong lĩnh vực lập trình web, tập trung vào việc nâng cao kiến thức và kỹ năng về ngôn ngữ lập trình PHP. Kỹ thuật này được áp dụng rộng rãi trong phát triển các trang web động, trang web thương mại điện tử và các ứng dụng web khác.  Trong khóa học PHP nâng cao cho trang bán khóa học, bạn sẽ học được:  1. Kiến thức sâu về ngôn ngữ PHP: Bạn sẽ tìm hiểu về các khái niệm nâng cao trong PHP như hướng đối tượng, lập trình cơ sở dữ liệu, xử lý form, xử lý lỗi, mã hóa và bảo mật.  2. Framework PHP phổ biến: Bạn sẽ được giới thiệu với các framework PHP như Laravel, Symfony, CodeIgniter,... và học cách sử dụng chúng để phát triển các ứng dụng web mạnh mẽ và dễ bảo trì.  3. Tối ưu hóa và tăng hiệu suất: Bạn sẽ học cách tối ưu mã nguồn PHP và cơ sở dữ liệu để đảm bảo trang web hoạt động nhanh chóng và tiết kiệm tài nguyên máy chủ.  4. Tương tác với API và dịch vụ web: Bạn sẽ được hướng dẫn cách tương tác với các API của bên thứ ba, như thanh toán, xác thực người dùng, gửi email và các tích hợp khác trong trang web bán khóa học.  5. Quản lý phiên và đăng nhập người dùng: Bạn sẽ học cách quản lý phiên làm việc của người dùng, xác thực và quản lý quyền truy cập để bảo vệ dữ liệu của họ.', 422, 'yes', 4, 54, 'show'),
(25, 'CTGL & GT', 'ctglgt.jpg', 350000, 'Tên khóa học: Bootstrap for Web Development  Mục tiêu khóa học:  Hiểu biết về Bootstrap: Học viên sẽ được giới thiệu về Bootstrap là gì, lịch sử phát triển của nó, và tại sao nó quan trọng trong phát triển web hiện đại.  Cơ bản về HTML và CSS: Nắm vững kiến thức cơ bản về HTML và CSS là quan trọng để hiểu rõ cách Bootstrap tương tác và làm việc với mã nguồn HTML và CSS.  Grid System: Hiểu về cách Bootstrap sử dụng grid system để tạo bố cục cho trang web, giúp làm cho trang web trở nên linh hoạt và đáp ứng.  Components và Utilities: Học cách sử dụng các thành phần và tiện ích có sẵn trong Bootstrap như buttons, forms, navigation bars, và các utilities để tối ưu hóa quá trình phát triển.  Responsive Design: Bootstrap được thiết kế để hỗ trợ phát triển giao diện đáp ứng trên nhiều thiết bị và kích thước màn hình. Khóa học sẽ giải thích cách Bootstrap giúp làm cho trang web trở nên đáp ứng.  Customization: Học cách tùy chỉnh Bootstrap để phù hợp với yêu cầu cụ thể của dự án.  Phương pháp học:  Bài giảng trực tuyế', 102, 'yes', 4, 54, 'show'),
(26, 'Javascrip NângCao', 'Ảnh chụp màn hình 2023-11-26 150245.png', 289000, 'Môn Javascrip Nâng Cao là một môn học trong lĩnh vực lập trình web, tập trung vào việc nâng cao kỹ năng sử dụng ngôn ngữ lập trình JavaScript. Trong môn này, bạn sẽ học về các khái niệm và kỹ thuật nâng cao của JavaScript nhằm xây dựng các ứng dụng web phức tạp.  Các nội dung chính mà môn Javascrip Nâng Cao tập trung bao gồm:  1. Closure và Scope: Hiểu rõ về cách hoạt động của scope, biến toàn cục và biến cục bộ trong JavaScript, cùng với cơ chế closure để quản lý biến.  2. Đối tượng và lập trình hướng đối tượng: Học cách sử dụng các đối tượng, phương thức và thuộc tính trong JavaScript để xây dựng ứng dụng web theo hướng lập trình hướng đối tượng.  3. Asynchronous Programming: Tìm hiểu về cơ chế bất đồng bộ trong JavaScript, bao gồm sử dụng callbacks, Promises và async/await để xử lý các tác vụ không đồng bộ và tăng hiệu suất ứng dụng.  4. Modules và Packaging: Sử dụng các module để tổ chức và quản lý mã nguồn. Học cách sử dụng công cụ như NPM (Node Package Manager) để quản lý các gói thư viện.  5. Error Handling: Hiểu về xử lý lỗi và exception trong JavaScript, cách sử dụng try-catch để đảm bảo ứng dụng hoạt động một cách an toàn và ổn định.  6. Optimizing Performance: Tìm hiểu cách tối ưu mã nguồn JavaScript để tăng hiệu suất và tốc độ của ứng dụng web.  Môn Javascrip Nâng Cao giúp bạn trở thành một lập trình viên JavaScript thạo, có khả năng xây dựng ứng dụng web phức tạp và hiệu quả.', 52, 'no', 4, 54, 'show'),
(30, 'React Native', 'React Native.png', 899000, 'Tên khóa học: React Native Mobile App Development  Mục tiêu khóa học:  Giới Thiệu về React Native:  Hiểu biết về React Native là gì và lý do nó trở thành một lựa chọn phổ biến để phát triển ứng dụng di động. So sánh ưu điểm của React Native so với phát triển truyền thống cho iOS và Android. Cài đặt và Môi Trường Phát Triển:  Hướng dẫn cài đặt môi trường phát triển cho React Native. Tìm hiểu về các công cụ hỗ trợ như Expo để giảm bớt sự phức tạp trong việc phát triển ứng dụng React Native. Components và JSX:  Học cách sử dụng components để tái sử dụng mã và xây dựng cấu trúc ứng dụng. Hiểu biết về JSX, ngôn ngữ mở rộng của JavaScript, được sử dụng trong React Native. State và Props:  Hiểu cách quản lý trạng thái (state) của ứng dụng và cách truyền dữ liệu giữa các components thông qua props. Navigation và Routing:  Học cách thực hiện điều hướng giữa các màn hình và cách xử lý định tuyến trong ứng dụng React Native. API và Thư Viện Bên Thứ Ba:  Tìm hiểu cách sử dụng các API tích hợp sẵn trong React Native cho việc truy cập cấu trúc điện thoại thông minh. Sử dụng thư viện bên thứ ba như Axios để thực hiện các yêu cầu mạng. Redux và Quản Lý Trạng Thái:  Hiểu cách sử dụng Redux để quản lý trạng thái ứng dụng và tối ưu hóa quá trình quản lý dữ liệu. Testing và Debugging:  Tìm hiểu về các kỹ thuật kiểm thử và gỡ lỗi trong ứng dụng React Native. Phương pháp học:  Bài giảng trực tuyến: Cung cấp video bài giảng để giới thiệu kiến thức và hướng dẫn thực hành. Dự án thực tế: Yêu cầu học viên xây dựng một ứng dụng thực tế để áp dụng kiến thức vào môi trường phát triển thực tế. Thảo luận và Hỗ trợ: Cung cấp diễn đàn hoặc cơ hội thảo luận để học viên có thể tương tác và hỗ trợ lẫn nhau. Yêu cầu tiên quyết:  Kiến thức cơ bản về JavaScript và React. Mục tiêu sau khi hoàn thành khóa học:  Có khả năng phát triển ứng dụng di động sử dụng React Native. Hiểu biết về cách quản lý trạng thái ứng dụng và tương tác với API. Thành thạo việc sử dụng Redux để quản lý trạng thái lớn trong ứng dụng. Có khả năng sử dụng công cụ và thư viện hỗ trợ để tối ưu hóa quá trình phát triển và kiểm thử.', 168, 'yes', 4, 62, 'show'),
(32, 'Python Nâng Cao', 'python.png', 420000, 'Tên khóa học: Python Programming Fundamentals  Mục tiêu khóa học:  Giới Thiệu về Python:  Tìm hiểu về ngôn ngữ lập trình Python, lịch sử, và tại sao nó trở thành một trong những ngôn ngữ phổ biến nhất hiện nay. Cài Đặt và Môi Trường Phát Triển:  Hướng dẫn cách cài đặt Python và môi trường phát triển (IDE) như PyCharm hoặc Jupyter Notebook. Tìm hiểu cách sử dụng công cụ quản lý gói như pip để cài đặt thư viện và module. Cú Pháp Cơ Bản:  Học cú pháp Python cơ bản bao gồm biến, kiểu dữ liệu, toán tử, điều kiện, vòng lặp, và hàm. Cấu Trúc Dữ Liệu và Collections:  Hiểu cách sử dụng các cấu trúc dữ liệu như danh sách (lists), bộ (sets), và từ điển (dictionaries). Học cách làm việc với các collections module và thư viện như NumPy cho xử lý dữ liệu. Hàm và Module:  Hiểu cách định nghĩa và sử dụng hàm trong Python để tái sử dụng mã nguồn. Tìm hiểu về module và cách tổ chức mã nguồn thành các file và thư mục. Xử Lý Lỗi và Ngoại Lệ:  Học cách xử lý lỗi và ngoại lệ để tăng tính ổn định của chương trình. Lập Trình Hướng Đối Tượng (OOP):  Tìm hiểu về lập trình hướng đối tượng trong Python, bao gồm các khái niệm như class, object, inheritance, và encapsulation. Xử Lý Tệp Tin và Thư mục:  Hiểu cách đọc và ghi dữ liệu từ và vào tệp tin. Tìm hiểu cách thao tác với thư mục và các thư viện như os và shutil. Phương pháp học:  Bài giảng trực tuyến: Cung cấp video bài giảng để giới thiệu kiến thức và hướng dẫn thực hành. Bài thực hành: Yêu cầu học viên thực hành qua các bài tập và dự án nhỏ. Dự án Thực Tế: Xây dựng một dự án thực tế để học viên có thể áp dụng kiến thức vào môi trường phát triển thực tế. Thảo luận và Hỗ trợ: Cung cấp diễn đàn hoặc cơ hội thảo luận để học viên có thể tương tác và hỗ trợ lẫn nhau. Yêu cầu tiên quyết:  Không yêu cầu kiến thức lập trình trước đây. Mục tiêu sau khi hoàn thành khóa học:  Có khả năng viết mã Python cơ bản và hiểu cú pháp cơ bản của ngôn ngữ. Hiểu cách sử dụng cấu trúc dữ liệu và collections trong Python. Có khả năng áp dụng lập trình hướng đối tượng vào dự án của mình. Thành thạo việc xử lý lỗi, ngoại lệ, và thao tác với tệp tin và thư mục.', 30, 'yes', 4, 59, 'show'),
(33, 'SASS(Cơ bản)', 'sass.png', 200000, 'Sass (Syntactically Awesome Stylesheets) là một ngôn ngữ mở rộng của CSS, giúp làm cho mã CSS trở nên dễ đọc hơn, linh hoạt hơn và dễ bảo trì hơn. Sass cung cấp một số tính năng mạnh mẽ mà CSS không có, bao gồm biến, nesting, mixins, và nhiều hơn nữa. Dưới đây là mô tả chi tiết về các tính năng quan trọng của Sass:', 18, 'yes', 4, 58, 'show'),
(34, 'Chip-Vi Mạch', 'Ảnh chụp màn hình 2023-11-26 153632.png', 123123, 'Trong lĩnh vực tự động hóa, chip điện tử chơi một vai trò quan trọng, đóng vai trò như bộ não của các hệ thống tự động hóa. Dưới đây là một số ứng dụng cụ thể của chip điện tử trong tự động hóa:  PLC (Programmable Logic Controller):  PLCs là các thiết bị điều khiển chương trình có thể lập trình để kiểm soát quy trình sản xuất, hệ thống máy móc, và các hệ thống tự động hóa khác. Chúng sử dụng chip điện tử để thực hiện các chương trình logic và kiểm soát các thiết bị đầu ra. Vi xử lý (Microcontrollers):  Các vi xử lý nhỏ như Arduino, Raspberry Pi, hay ESP32 thường được sử dụng để kiểm soát và giám sát các thiết bị trong các ứng dụng tự động hóa nhỏ và phức tạp. Chúng có khả năng xử lý tác vụ điều khiển và thu thập dữ liệu từ các cảm biến. Cảm Biến và Giao Tiếp:  Chip điện tử thường được tích hợp vào cảm biến để thu thập thông tin về môi trường xung quanh. Các giao tiếp như I2C, SPI, hay UART giúp chúng tương tác với các thiết bị khác như vi xử lý, máy tính, hoặc PLC. Hệ Thống Điều Khiển Tự Động (ACS):  Các hệ thống điều khiển tự động sử dụng chip điện tử để thực hiện các thuật toán điều khiển và kiểm soát quá trình sản xuất hoặc hệ thống tự động hóa khác. Chúng có thể điều khiển động cơ, van, cảm biến, và các thành phần khác của hệ thống. HMI (Human-Machine Interface):  Các màn hình HMI thường sử dụng chip điện tử để hiển thị thông tin và tương tác với người điều khiển. Chúng có thể bao gồm màn hình cảm ứng và các chức năng giao tiếp để người điều khiển có thể tương tác với hệ thống tự động hóa. Mạch Điều Khiển Động Cơ:  Chip điện tử được tích hợp vào các mạch điều khiển động cơ để điều khiển tốc độ, hướng, và vị trí của động cơ trong các ứng dụng như hệ thống máy móc tự động, robot công nghiệp, và máy in 3D. Mạch Điều Khiển Nhiệt Độ và Điều Hòa:  Trong các hệ thống điều khiển nhiệt độ và điều hòa, chip điện tử được sử dụng để kiểm soát các thiết bị như van, quạt, và cảm biến nhiệt độ để duy trì điều kiện nhiệt độ ổn định. Các chip điện tử trong lĩnh vực tự động hóa chủ yếu tập trung vào việc thực hiện các nhiệm vụ điều khiển, thu thập dữ liệu và giao tiếp, giúp tăng cường hiệu suất, đồng thời giảm chi phí và tăng tính linh hoạt trong quá trình sản xuất và quy trình tự động hóa.', 78, 'yes', 4, 61, 'show'),
(37, 'C#', 'Ảnh chụp màn hình 2023-11-26 154635.png', 470000, 'C# là một ngôn ngữ lập trình hướng đối tượng được phát triển bởi Microsoft. Được giới thiệu lần đầu vào năm 2000, C# được thiết kế để xây dựng ứng dụng đa nền tảng chạy trên hệ điều hành Windows. C# có cú pháp tương tự với ngôn ngữ C++ nhưng có thêm nhiều tính năng tiện ích và an toàn hơn.  C# được sử dụng rộng rãi trong phát triển ứng dụng desktop, ứng dụng di động (bao gồm cả Windows Phone và Xamarin), ứng dụng web và phần mềm dựa trên nền tảng .NET. Với C#, bạn có thể xây dựng các ứng dụng Windows, trò chơi, ứng dụng web, dịch vụ web, ứng dụng di động và nhiều loại ứng dụng khác.  Một số đặc điểm và tính năng chính của C# bao gồm: hướng đối tượng, thuộc tính, quản lý bộ nhớ tự động, xử lý ngoại lệ, sự kiện và delegate, LINQ (Language Integrated Query), đa luồng, và nhiều hơn nữa. C# có một cộng đồng lớn và mạnh mẽ, cung cấp nhiều tài liệu, thư viện và công cụ hỗ trợ cho việc phát triển.', 46, 'yes', 11, 57, 'show'),
(38, 'PHP Cơ Bản', 'php.avif', 599000, 'PHP (Hypertext Preprocessor) là một ngôn ngữ lập trình phía máy chủ mã nguồn mở được sử dụng phổ biến để phát triển các ứng dụng web động và tương tác. PHP chủ yếu được sử dụng để xử lý và tạo ra nội dung động trên các trang web, cho phép tương tác với cơ sở dữ liệu và thực hiện các tác vụ phức tạp khác như đăng nhập, đăng ký, xử lý biểu mẫu và quản lý phiên.  PHP có thể được nhúng vào mã HTML hoặc được sử dụng như một ngôn ngữ độc lập để tạo ra nội dung động. Với cú pháp dễ hiểu và cấu trúc linh hoạt, PHP cho phép lập trình viên tạo ra các trang web mạnh mẽ và đáng tin cậy.  Một số tính năng nổi bật của PHP bao gồm: 1. Hỗ trợ đa nền tảng: PHP có thể chạy trên nhiều hệ điều hành như Windows, Linux, macOS, v.v. 2. Sự tích hợp với cơ sở dữ liệu: PHP hỗ trợ các loại cơ sở dữ liệu phổ biến như MySQL, PostgreSQL, và Oracle. 3. Thư viện đa dạng: PHP đi kèm với một số thư viện mạnh mẽ để hỗ trợ phát triển nhanh chóng và dễ dàng, như PDO, GD, và XML. 4. Khả năng mở rộng: PHP có thể mở rộng thông qua các module và extension để tăng tính năng của nó. 5. Cộng đồng phát triển mạnh mẽ: PHP có một cộng đồng lớn và chuyên nghiệp, luôn cung cấp tài liệu và hỗ trợ trong việc phát triển ứng dụng.  PHP là một công nghệ phổ biến và được sử dụng rộng rãi trong ngành phát triển web, với khả năng mạnh mẽ để xây dựng các ứng dụng web động và tương tác. search ', 85, 'yes', 4, 57, 'show');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoa_hoc_yeu_thich`
--

CREATE TABLE `khoa_hoc_yeu_thich` (
  `id_khoa_hoc_yeu_thich` int(11) NOT NULL,
  `id_khoa_hoc` int(11) NOT NULL,
  `id_tai_khoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khoa_hoc_yeu_thich`
--

INSERT INTO `khoa_hoc_yeu_thich` (`id_khoa_hoc_yeu_thich`, `id_khoa_hoc`, `id_tai_khoan`) VALUES
(1, 23, 1),
(5, 38, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `id_khuyen_mai` int(11) NOT NULL,
  `ten_khuyen_mai` varchar(50) NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL,
  `noi_dung` varchar(225) NOT NULL,
  `avt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`id_khuyen_mai`, `ten_khuyen_mai`, `ngay_bat_dau`, `ngay_ket_thuc`, `noi_dung`, `avt`) VALUES
(4, 'Best sale', '2023-11-02', '2023-11-30', '30', 'voucher.jpg'),
(5, 'Kh sao', '2023-11-17', '2023-12-17', '50', 'voucher50.jpg'),
(6, 'Kh sao113', '2022-12-12', '2023-12-12', '10', 'voucher.jpg'),
(7, 'sale black friday', '2023-11-03', '2023-12-26', '12', 'voucher50.jpg'),
(8, 'Sale 10%', '2023-11-23', '2024-01-30', '10', 'voucher.jpg'),
(9, 'sale 15%', '2023-11-21', '2024-01-19', '15', 'voucher.jpg'),
(10, 'sale 20%', '2023-11-11', '2024-02-21', '20', 'voucher.jpg');

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
(15, 'chả ra cái đéo gì', '2023-11-18', 1, 'Chưa phản hồi'),
(16, 'liên hệ 1', '2023-11-18', 1, 'Chưa phản hồi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lo_trinh_hoc`
--

CREATE TABLE `lo_trinh_hoc` (
  `id_lo_trinh` int(11) NOT NULL,
  `thoi_gian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lo_trinh_hoc`
--

INSERT INTO `lo_trinh_hoc` (`id_lo_trinh`, `thoi_gian`) VALUES
(1, '3 tháng'),
(2, '6 tháng'),
(3, '9 tháng'),
(5, '12 tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lo_trinh_khoa_hoc`
--

CREATE TABLE `lo_trinh_khoa_hoc` (
  `id_lo_trinh_khoa_hoc` int(11) NOT NULL,
  `id_lo_trinh` int(11) NOT NULL,
  `id_khoa_hoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lo_trinh_khoa_hoc`
--

INSERT INTO `lo_trinh_khoa_hoc` (`id_lo_trinh_khoa_hoc`, `id_lo_trinh`, `id_khoa_hoc`) VALUES
(15, 2, 32),
(16, 1, 32),
(17, 5, 32),
(19, 1, 30),
(20, 1, 33),
(21, 1, 37),
(22, 3, 37),
(23, 1, 23),
(24, 1, 26),
(27, 1, 34),
(29, 2, 37),
(30, 5, 37),
(31, 1, 38),
(34, 2, 38),
(35, 2, 23);

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
(1, 'Học Viên', 'Đăng Nhập ,Đăng Ky khóa học. xem các khóa học,danh mục '),
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
(1, 'admin', 'Hiếu Huân Tuấn', 'codephpnguvl@gmail.com', '2004-02-10', 'admin', 'img.png', '0338475943', 3),
(12, 'hocvien', 'Le QUy Hieu', 'lehieu10022004@gmail.com', '2023-10-31', 'hocvien', 'ooott.jpg', '0111222333', 1),
(13, 'nhanvien', 'le hiếu1', 'hieulqph36904@fpt.edu.vn', '2004-12-12', 'nhanvien', 'anhtuna.png', '0111222333', 2),
(57, 'hiu', NULL, 'hieulqph36904@fpt.edu.vn', '0000-00-00', 'hiu', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai`
--

CREATE TABLE `trang_thai` (
  `id_trang_thai` int(11) NOT NULL,
  `ten_trang_thai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trang_thai`
--

INSERT INTO `trang_thai` (`id_trang_thai`, `ten_trang_thai`) VALUES
(1, 'Chờ Xác  Nhận'),
(2, 'Đang Chờ Xử Lý'),
(3, 'Đăng Ký Thành Công');

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
-- Chỉ mục cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD PRIMARY KEY (`id_danh_gia`);

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
-- Chỉ mục cho bảng `khoa_hoc_yeu_thich`
--
ALTER TABLE `khoa_hoc_yeu_thich`
  ADD PRIMARY KEY (`id_khoa_hoc_yeu_thich`);

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
-- Chỉ mục cho bảng `lo_trinh_hoc`
--
ALTER TABLE `lo_trinh_hoc`
  ADD PRIMARY KEY (`id_lo_trinh`);

--
-- Chỉ mục cho bảng `lo_trinh_khoa_hoc`
--
ALTER TABLE `lo_trinh_khoa_hoc`
  ADD PRIMARY KEY (`id_lo_trinh_khoa_hoc`);

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
-- Chỉ mục cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  ADD PRIMARY KEY (`id_trang_thai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `dang_ky_khoa_hoc`
--
ALTER TABLE `dang_ky_khoa_hoc`
  MODIFY `id_dang_ky_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `danh_gia`
--
ALTER TABLE `danh_gia`
  MODIFY `id_danh_gia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `danh_muc_khoa_hoc`
--
ALTER TABLE `danh_muc_khoa_hoc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  MODIFY `id_giang_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `id_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `khoa_hoc_yeu_thich`
--
ALTER TABLE `khoa_hoc_yeu_thich`
  MODIFY `id_khoa_hoc_yeu_thich` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id_lien_he` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `lo_trinh_hoc`
--
ALTER TABLE `lo_trinh_hoc`
  MODIFY `id_lo_trinh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `lo_trinh_khoa_hoc`
--
ALTER TABLE `lo_trinh_khoa_hoc`
  MODIFY `id_lo_trinh_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id_tai_khoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `trang_thai`
--
ALTER TABLE `trang_thai`
  MODIFY `id_trang_thai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
