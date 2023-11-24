-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 23, 2023 lúc 12:41 PM
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
  `danh_gia` float NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id_binh_luan`, `id_tai_khoan`, `id_khoa_hoc`, `noi_dung_binh_luan`, `ngay_binh_luan`, `danh_gia`) VALUES
(5, '1', 23, 'hay', '2023-11-16', 4),
(13, '1', 27, 'cũng ok', '2023-11-19', 5),
(14, '1', 27, 'được vờ lờ', '2023-11-19', 5),
(15, '1', 30, 'cũng ok', '2023-11-19', 5),
(16, '1', 30, 'được vờ lờ', '2023-11-19', 4),
(19, '1', 31, 'Xịn lắm', '2023-11-20', 5),
(20, '1', 30, 'được vờ lờ', '2023-11-20', 1),
(21, '1', 27, 'khét quá ', '2023-11-20', 4),
(28, '1', 25, 'ee', '2023-11-20', 5),
(29, '1', 25, 'rrr', '2023-11-20', 4),
(30, '1', 27, 'sịn', '2023-11-20', 5),
(37, '1', 23, 'khét quá ', '2023-11-20', 5),
(45, '1', 23, 'Xịn lắm', '2023-11-20', 4),
(53, '1', 23, '22222222222222', '2023-11-21', 5),
(54, '1', 23, '1111', '2023-11-21', 4),
(55, '1', 33, 'được vờ lờ', '2023-11-21', 5),
(56, '1', 26, 'cũng ok', '2023-11-22', 5),
(57, '1', 37, 'ee', '2023-11-23', 4);

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
  `id_khuyen_mai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dang_ky_khoa_hoc`
--

INSERT INTO `dang_ky_khoa_hoc` (`id_dang_ky_khoa_hoc`, `id_tai_khoan`, `id_khoa_hoc`, `id_giang_vien`, `thanh_tien`, `ngay_dang_ky_hoc`, `trang_thai`, `id_khuyen_mai`) VALUES
(6, 1, 27, 4, 123, '2023-11-21', 'Thanh toán thành công', 0);

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
(52, 'Tự động hóa', 'xin chào', 'web.jpg', 'show'),
(53, 'Tự động hóa', 'xin chào', 'abc.png', 'show');

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
(5, 'Hoàng Cao Huân', 'huanhcph123', 'huanhcph12345@fpt.edu.vn', 'gv.png', '077887111222', 'Chưa có kinh nghiệm', '2004-12-12'),
(6, 'Nguyễn Sỹ Anh Tuấn', 'tuannsaph12332', 'tuannsaph12332@fpt.edu.vn', 'anhtuna.png', '0111222333', '100 năm kinh nghiệm', '2004-12-12');

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
(23, 'PHP Nâng Cao', 'php.png', 2000, 'PHP viết là viết tắt của Hypertext Preprocessor', 231, 0, '6', 'yes', 4, 52, 'show'),
(25, 'CTGL & GT', 'ctglgt.jpg', 123, 'Tên khóa học: Bootstrap for Web Development  Mục tiêu khóa học:  Hiểu biết về Bootstrap: Học viên sẽ được giới thiệu về Bootstrap là gì, lịch sử phát triển của nó, và tại sao nó quan trọng trong phát triển web hiện đại.  Cơ bản về HTML và CSS: Nắm vững kiến thức cơ bản về HTML và CSS là quan trọng để hiểu rõ cách Bootstrap tương tác và làm việc với mã nguồn HTML và CSS.  Grid System: Hiểu về cách Bootstrap sử dụng grid system để tạo bố cục cho trang web, giúp làm cho trang web trở nên linh hoạt và đáp ứng.  Components và Utilities: Học cách sử dụng các thành phần và tiện ích có sẵn trong Bootstrap như buttons, forms, navigation bars, và các utilities để tối ưu hóa quá trình phát triển.  Responsive Design: Bootstrap được thiết kế để hỗ trợ phát triển giao diện đáp ứng trên nhiều thiết bị và kích thước màn hình. Khóa học sẽ giải thích cách Bootstrap giúp làm cho trang web trở nên đáp ứng.  Customization: Học cách tùy chỉnh Bootstrap để phù hợp với yêu cầu cụ thể của dự án.  Phương pháp học:  Bài giảng trực tuyế', 46, 0, '2', 'yes', 4, 53, 'show'),
(26, 'Javascrip NângCao', 'gv.png', 123, 'Bột giặt Omo là một thương hiệu nổi tiếng về sản phẩm giặt đồ. Được ra mắt vào những năm 1950, Omo thuộc sở hữu của tập đoàn Unilever, một trong những tập đoàn hàng tiêu dùng lớn nhất thế giới.', 24, 0, '2', 'no', 4, 52, 'show'),
(30, 'React Native', 'download5.png', 12213, 'Tên khóa học: React Native Mobile App Development  Mục tiêu khóa học:  Giới Thiệu về React Native:  Hiểu biết về React Native là gì và lý do nó trở thành một lựa chọn phổ biến để phát triển ứng dụng di động. So sánh ưu điểm của React Native so với phát triển truyền thống cho iOS và Android. Cài đặt và Môi Trường Phát Triển:  Hướng dẫn cài đặt môi trường phát triển cho React Native. Tìm hiểu về các công cụ hỗ trợ như Expo để giảm bớt sự phức tạp trong việc phát triển ứng dụng React Native. Components và JSX:  Học cách sử dụng components để tái sử dụng mã và xây dựng cấu trúc ứng dụng. Hiểu biết về JSX, ngôn ngữ mở rộng của JavaScript, được sử dụng trong React Native. State và Props:  Hiểu cách quản lý trạng thái (state) của ứng dụng và cách truyền dữ liệu giữa các components thông qua props. Navigation và Routing:  Học cách thực hiện điều hướng giữa các màn hình và cách xử lý định tuyến trong ứng dụng React Native. API và Thư Viện Bên Thứ Ba:  Tìm hiểu cách sử dụng các API tích hợp sẵn trong React Native cho việc truy cập cấu trúc điện thoại thông minh. Sử dụng thư viện bên thứ ba như Axios để thực hiện các yêu cầu mạng. Redux và Quản Lý Trạng Thái:  Hiểu cách sử dụng Redux để quản lý trạng thái ứng dụng và tối ưu hóa quá trình quản lý dữ liệu. Testing và Debugging:  Tìm hiểu về các kỹ thuật kiểm thử và gỡ lỗi trong ứng dụng React Native. Phương pháp học:  Bài giảng trực tuyến: Cung cấp video bài giảng để giới thiệu kiến thức và hướng dẫn thực hành. Dự án thực tế: Yêu cầu học viên xây dựng một ứng dụng thực tế để áp dụng kiến thức vào môi trường phát triển thực tế. Thảo luận và Hỗ trợ: Cung cấp diễn đàn hoặc cơ hội thảo luận để học viên có thể tương tác và hỗ trợ lẫn nhau. Yêu cầu tiên quyết:  Kiến thức cơ bản về JavaScript và React. Mục tiêu sau khi hoàn thành khóa học:  Có khả năng phát triển ứng dụng di động sử dụng React Native. Hiểu biết về cách quản lý trạng thái ứng dụng và tương tác với API. Thành thạo việc sử dụng Redux để quản lý trạng thái lớn trong ứng dụng. Có khả năng sử dụng công cụ và thư viện hỗ trợ để tối ưu hóa quá trình phát triển và kiểm thử.', 87, 0, '4', 'yes', 4, 53, 'show'),
(32, 'Python Nâng Cao', 'download7.png', 321, 'Tên khóa học: Python Programming Fundamentals  Mục tiêu khóa học:  Giới Thiệu về Python:  Tìm hiểu về ngôn ngữ lập trình Python, lịch sử, và tại sao nó trở thành một trong những ngôn ngữ phổ biến nhất hiện nay. Cài Đặt và Môi Trường Phát Triển:  Hướng dẫn cách cài đặt Python và môi trường phát triển (IDE) như PyCharm hoặc Jupyter Notebook. Tìm hiểu cách sử dụng công cụ quản lý gói như pip để cài đặt thư viện và module. Cú Pháp Cơ Bản:  Học cú pháp Python cơ bản bao gồm biến, kiểu dữ liệu, toán tử, điều kiện, vòng lặp, và hàm. Cấu Trúc Dữ Liệu và Collections:  Hiểu cách sử dụng các cấu trúc dữ liệu như danh sách (lists), bộ (sets), và từ điển (dictionaries). Học cách làm việc với các collections module và thư viện như NumPy cho xử lý dữ liệu. Hàm và Module:  Hiểu cách định nghĩa và sử dụng hàm trong Python để tái sử dụng mã nguồn. Tìm hiểu về module và cách tổ chức mã nguồn thành các file và thư mục. Xử Lý Lỗi và Ngoại Lệ:  Học cách xử lý lỗi và ngoại lệ để tăng tính ổn định của chương trình. Lập Trình Hướng Đối Tượng (OOP):  Tìm hiểu về lập trình hướng đối tượng trong Python, bao gồm các khái niệm như class, object, inheritance, và encapsulation. Xử Lý Tệp Tin và Thư mục:  Hiểu cách đọc và ghi dữ liệu từ và vào tệp tin. Tìm hiểu cách thao tác với thư mục và các thư viện như os và shutil. Phương pháp học:  Bài giảng trực tuyến: Cung cấp video bài giảng để giới thiệu kiến thức và hướng dẫn thực hành. Bài thực hành: Yêu cầu học viên thực hành qua các bài tập và dự án nhỏ. Dự án Thực Tế: Xây dựng một dự án thực tế để học viên có thể áp dụng kiến thức vào môi trường phát triển thực tế. Thảo luận và Hỗ trợ: Cung cấp diễn đàn hoặc cơ hội thảo luận để học viên có thể tương tác và hỗ trợ lẫn nhau. Yêu cầu tiên quyết:  Không yêu cầu kiến thức lập trình trước đây. Mục tiêu sau khi hoàn thành khóa học:  Có khả năng viết mã Python cơ bản và hiểu cú pháp cơ bản của ngôn ngữ. Hiểu cách sử dụng cấu trúc dữ liệu và collections trong Python. Có khả năng áp dụng lập trình hướng đối tượng vào dự án của mình. Thành thạo việc xử lý lỗi, ngoại lệ, và thao tác với tệp tin và thư mục.', 6, 0, '5', 'yes', 4, 52, 'show'),
(33, 'SASS(Cơ bản)', 'download4.png', 433, 'Sass (Syntactically Awesome Stylesheets) là một ngôn ngữ mở rộng của CSS, giúp làm cho mã CSS trở nên dễ đọc hơn, linh hoạt hơn và dễ bảo trì hơn. Sass cung cấp một số tính năng mạnh mẽ mà CSS không có, bao gồm biến, nesting, mixins, và nhiều hơn nữa. Dưới đây là mô tả chi tiết về các tính năng quan trọng của Sass:', 7, 0, '3', 'yes', 4, 53, 'show'),
(34, 'Chip-Vi Mạch', 'chip.png', 123123, 'Trong lĩnh vực tự động hóa, chip điện tử chơi một vai trò quan trọng, đóng vai trò như bộ não của các hệ thống tự động hóa. Dưới đây là một số ứng dụng cụ thể của chip điện tử trong tự động hóa:  PLC (Programmable Logic Controller):  PLCs là các thiết bị điều khiển chương trình có thể lập trình để kiểm soát quy trình sản xuất, hệ thống máy móc, và các hệ thống tự động hóa khác. Chúng sử dụng chip điện tử để thực hiện các chương trình logic và kiểm soát các thiết bị đầu ra. Vi xử lý (Microcontrollers):  Các vi xử lý nhỏ như Arduino, Raspberry Pi, hay ESP32 thường được sử dụng để kiểm soát và giám sát các thiết bị trong các ứng dụng tự động hóa nhỏ và phức tạp. Chúng có khả năng xử lý tác vụ điều khiển và thu thập dữ liệu từ các cảm biến. Cảm Biến và Giao Tiếp:  Chip điện tử thường được tích hợp vào cảm biến để thu thập thông tin về môi trường xung quanh. Các giao tiếp như I2C, SPI, hay UART giúp chúng tương tác với các thiết bị khác như vi xử lý, máy tính, hoặc PLC. Hệ Thống Điều Khiển Tự Động (ACS):  Các hệ thống điều khiển tự động sử dụng chip điện tử để thực hiện các thuật toán điều khiển và kiểm soát quá trình sản xuất hoặc hệ thống tự động hóa khác. Chúng có thể điều khiển động cơ, van, cảm biến, và các thành phần khác của hệ thống. HMI (Human-Machine Interface):  Các màn hình HMI thường sử dụng chip điện tử để hiển thị thông tin và tương tác với người điều khiển. Chúng có thể bao gồm màn hình cảm ứng và các chức năng giao tiếp để người điều khiển có thể tương tác với hệ thống tự động hóa. Mạch Điều Khiển Động Cơ:  Chip điện tử được tích hợp vào các mạch điều khiển động cơ để điều khiển tốc độ, hướng, và vị trí của động cơ trong các ứng dụng như hệ thống máy móc tự động, robot công nghiệp, và máy in 3D. Mạch Điều Khiển Nhiệt Độ và Điều Hòa:  Trong các hệ thống điều khiển nhiệt độ và điều hòa, chip điện tử được sử dụng để kiểm soát các thiết bị như van, quạt, và cảm biến nhiệt độ để duy trì điều kiện nhiệt độ ổn định. Các chip điện tử trong lĩnh vực tự động hóa chủ yếu tập trung vào việc thực hiện các nhiệm vụ điều khiển, thu thập dữ liệu và giao tiếp, giúp tăng cường hiệu suất, đồng thời giảm chi phí và tăng tính linh hoạt trong quá trình sản xuất và quy trình tự động hóa.', 34, 0, '12', 'yes', 4, 52, 'show'),
(37, 'C#', 'abc.png', 123123, 'xin chào', 3, 0, '5', 'yes', 4, 53, 'show');

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
(4, 'Best sale', '2023-11-02', '2023-11-30', '30'),
(5, 'Kh sao', '2023-11-17', '2023-12-17', '50');

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
(16, 'liên hệ 1', '2023-11-18', 1, 'Chưa phản hồi'),
(17, 'liên hệ 2', '2023-11-18', 1, 'Chưa phản hồi');

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
(1, 'admin', 'Hiếu Huân Tuấn', 'codephpnguvl@gmail.com', '2004-02-10', 'admin', 'img.png', '012345678911', 3),
(12, 'hocvien', 'Le QUy Hieu', 'lehieu10022004@gmail.com', '2023-10-31', 'hocvien', 'gv.png', '0111222333', 1),
(13, 'nhanvien', 'le hiếu1', 'hieulqph36904@fpt.edu.vn', '2004-12-12', 'nhanvien', 'anhtuna.png', '0111222333', 2);

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
  MODIFY `id_binh_luan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `dang_ky_khoa_hoc`
--
ALTER TABLE `dang_ky_khoa_hoc`
  MODIFY `id_dang_ky_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `danh_muc_khoa_hoc`
--
ALTER TABLE `danh_muc_khoa_hoc`
  MODIFY `id_danh_muc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `giang_vien`
--
ALTER TABLE `giang_vien`
  MODIFY `id_giang_vien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `khoa_hoc`
--
ALTER TABLE `khoa_hoc`
  MODIFY `id_khoa_hoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  MODIFY `id_khuyen_mai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `lien_he`
--
ALTER TABLE `lien_he`
  MODIFY `id_lien_he` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id_tai_khoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;