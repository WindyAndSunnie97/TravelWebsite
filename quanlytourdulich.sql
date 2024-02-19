-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 15, 2023 lúc 02:20 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlytourdulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(2, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethopdong`
--

CREATE TABLE `chitiethopdong` (
  `id` int(10) NOT NULL,
  `tenNguoiDi` varchar(255) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `chiTiet` varchar(255) NOT NULL,
  `idHopDong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethopdong`
--

INSERT INTO `chitiethopdong` (`id`, `tenNguoiDi`, `gioitinh`, `chiTiet`, `idHopDong`) VALUES
(1, 'hihi', 'nam', 'hihi', 10),
(2, 'hihiHAHAHAH', 'nam', 'hihi', 10),
(3, 'huhu', 'nữ', 'hihi', 11),
(4, 'hihi', 'nữ', 'hihi', 11),
(5, 'hihi', 'nữ', 'hihi', 11),
(6, 'huhuhuhuhuh', 'nữ', 'hihi', 12),
(7, 'hic', 'nữ', 'hihi', 13),
(8, 'huhuhu', 'nam', 'hihi', 14),
(9, 'a', '', 'hihi', 17),
(10, 'a', 'nam', 'hihi', 18),
(11, 'b', 'nữ', 'hihi', 18),
(12, 'c', 'nam', 'hihi', 18),
(13, '22', 'nam', 'hihi', 25),
(14, 'a', 'nam', 'hihi', 34),
(15, 'b', 'nữ', 'hihi', 34),
(16, 'nhi', 'nữ', 'hihi', 36),
(17, 'tiên', 'nữ', 'hihi', 36),
(18, 'tâm', 'nữ', 'hihi', 37),
(19, 'phúc', 'nam', 'hihi', 37);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dattour`
--

CREATE TABLE `dattour` (
  `id` int(10) NOT NULL,
  `idKhachHang` int(10) NOT NULL,
  `ngayDat` date NOT NULL,
  `trangThai` enum('dangXuLy','daHuy') NOT NULL DEFAULT 'dangXuLy',
  `idHopDong` int(10) NOT NULL,
  `idlichtrinhtour` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dattour`
--

INSERT INTO `dattour` (`id`, `idKhachHang`, `ngayDat`, `trangThai`, `idHopDong`, `idlichtrinhtour`) VALUES
(2, 1, '2023-06-25', 'dangXuLy', 10, 10),
(3, 1, '2023-06-25', 'dangXuLy', 11, 6),
(4, 1, '2023-06-25', 'dangXuLy', 12, 9),
(5, 1, '2023-06-25', 'dangXuLy', 13, 9),
(6, 1, '2023-06-25', 'dangXuLy', 14, 9),
(7, 3, '2023-07-09', 'daHuy', 17, 1),
(8, 3, '2023-07-09', 'daHuy', 18, 9),
(9, 3, '2023-07-10', 'dangXuLy', 19, 1),
(10, 3, '2023-07-10', 'dangXuLy', 20, 1),
(11, 3, '2023-07-10', 'dangXuLy', 21, 1),
(12, 3, '2023-07-10', 'daHuy', 22, 1),
(13, 3, '2023-07-10', 'daHuy', 23, 1),
(14, 3, '2023-07-10', 'daHuy', 24, 1),
(15, 3, '2023-07-10', 'daHuy', 25, 1),
(16, 3, '2023-07-10', 'daHuy', 26, 1),
(17, 3, '2023-07-10', 'dangXuLy', 27, 1),
(18, 3, '2023-07-10', 'dangXuLy', 28, 1),
(19, 3, '2023-07-10', 'dangXuLy', 29, 1),
(20, 3, '2023-07-10', 'daHuy', 30, 1),
(21, 3, '2023-07-10', 'daHuy', 31, 1),
(22, 3, '2023-07-10', 'daHuy', 32, 1),
(23, 3, '2023-07-10', 'daHuy', 33, 1),
(24, 4, '2023-07-12', 'dangXuLy', 34, 1),
(25, 3, '2023-07-14', 'daHuy', 35, 1),
(26, 3, '2023-07-14', 'dangXuLy', 36, 17),
(27, 3, '2023-07-14', 'dangXuLy', 37, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diadanh`
--

CREATE TABLE `diadanh` (
  `id` int(25) NOT NULL,
  `tenDiaDanh` varchar(55) NOT NULL,
  `idDiaDiem` int(10) NOT NULL,
  `moTaDiaDanh` varchar(255) NOT NULL,
  `hinhanh` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diadanh`
--

INSERT INTO `diadanh` (`id`, `tenDiaDanh`, `idDiaDiem`, `moTaDiaDanh`, `hinhanh`) VALUES
(1, 'Đảo Hòn Thơm', 1, 'Đảo Hòn Thơm tọa lạc ở phía Nam của Phú Quốc, là địa điểm thu hút hàng ngàn khách du lịch với vẻ đẹp hoang sơ và thiên nhiên kì vĩ.', 'DaoHonThom.jpg'),
(2, 'Đèo Mã Pì Lèng - Fansipan', 3, '+ Tận mắt ngắm nhìn đèo Mã Pì Lèng hùng vỹ.\r\n+ Chinh phục Fansipan bằng hệ thống cáp treo 3 dây hiện đại nhất thế giới.', 'DeoMaPiLeng.jpg'),
(3, 'Khu du lịch Thủy Châu - Hồ Trị An', 5, '+ KDL Thủy Châu là một khu đất xanh thỏa sức check-in tại những khung cảnh khác nhau, hùng vĩ hay lãng mạn thơ mộng thì đều đáp ứng được.\r\n+ Hồ Trị An là hồ nước nhân tạo nằm trên sông Đồng Nai và Trảng Bom được mệnh danh là \"Hồ xanh nắng vàng\".', 'KhuDuLichThuyChau.jpg'),
(4, 'Bãi Trũ', 6, 'Bãi Trũ Nha Trang nằm trên đảo Hòn Tre, phường Vĩnh Nguyên, thành phố Nha Trang, tỉnh Khánh Hòa. Đây là một trong những bãi tắm tự nhiên đẹp nhất khu vực, nước biển có độ tinh khiết cao, nhiều phong cảnh đẹp, nên thơ.', 'BaiTru.jpg'),
(5, 'Bán đảo Sơn Trà - Cù Lao Tràm - Bà Nà', 4, '+ Bán đảo Sơn Trà – bán đảo mang vẻ đẹp nguyên sơ, hữu tình và được mệnh danh “lá phổi xanh của Đà Nẵng.\r\n+ Cù Lao Tràm – khu dự trữ sinh quyển thế giới, nơi mọi nhà không sử dụng bao nilon duy nhất tại Việt Nam.\r\n+ Bà Nà - thiên đường với nhiều điểm tham', 'BanDaoSonTra.jpg'),
(6, 'Tà Đùng - Thác Dray Nur', 2, '+ Tà Đùng - Vịnh Hạ Long Tây Nguyên thu hút du khách nhờ mặt nước trong xanh, phẳng lặng điểm xuyết bởi vô số hòn đảo nhỏ nổi lên.\r\n+ Thác Dray Nur là một trong những dòng thác hùng vỹ và gắn liền với nhiều huyền thoại nhất Tây Nguyên.', 'TaDung.jpg'),
(7, 'Phố cổ Hội An -  Lăng Khải Định', 7, '+ Đến với phố cổ Hội An du khách sẽ được chiêm ngưỡng những vẻ đẹp lôi cuốn khác nhau của những khu phố cổ kính được bảo tồn qua hàng trăm năm, những mảng tường vàng rêu phong và cuộc sống bình dị bên dòng sông Hoài.\r\n+ Lăng Khải Định là công trình lăng t', 'PhoCoHoiAn.jpg'),
(8, 'Hồ Tràm - Đồng Cừu Suối Nghệ  - Chùa Bún Riêu', 8, '+ Hồ Tràm không ồn ào, náo nhiệt nhưng lại quyến rũ bởi mặt nước xanh trong và bờ cát trắng mịn màng tạo nên một vẻ đẹp dịu dàng, hoang dã.\r\n+ Đồng Cừu Suối Nghệ - là một trong những địa điểm rất hot với các bạn trẻ yêu thích chụp ảnh gần đây, quý khách c', 'HoTram.jpg'),
(9, 'Đảo Kỳ Co - Eo Gió Nhơn Lý', 9, '+ Đảo Kỳ Co – được mệnh danh là Maldives của Việt Nam với nước biển trong vắt, bãi cắt trắng trải dài đẹp như mộng, với con đường cầu gỗ bắc ra bến tàu đẹp và ảo diệu. Quý khách tắm biển và lặn ngắm san hô ở đảo bé.\r\n+ Eo gió Nhơn Lý – nơi đất trời, thiên', 'DaoKyCo.jpg'),
(10, 'Hạ Long Park - Bãi Cháy', 10, 'Bãi Cháy - một bãi biển nhân tạo lớn nhất và đẹp nhất Hạ Long. Công viên Hạ Long  bao gồm nhiều hạng mục giải trí hấp dẫn du khách ngay lần đầu đến thăm như thế giới trò chơi mạo hiểm cùng tàu lượn siêu tốc dài nhất Việt Nam, công viên nước, Làng biển với', 'HaLongPark.jpg'),
(11, 'Vườn Quốc gia Nam Cát Tiên', 11, 'Vườn Quốc gia Cát Tiên (hay còn được biết là Khu du lịch Nam Cát Tiên) là một vùng đất xanh mướt với hệ thống động thực vật vô cùng đa dạng. Nơi đây được UNESCO công nhận là “Khu dự trữ sinh quyển thế giới”.\r\n', 'VuonQuocGiaNamCatTien.jpg'),
(12, 'Hang Pygmy', 12, 'Hang Pygmy (Quảng Bình) được hiệp hội Hang động Hoàng gia Anh (BCRA) công nhận là hang động lớn thứ 4 trên thế giới. Nằm trong hệ thống hang Tiger (hang Hổ), đây chính là cung đường trekking tuyệt đẹp dành cho những người yêu.', 'HangPygmy.jpg'),
(13, 'Du thuyền Cần Thơ - Mũi Cà Mau', 13, '+ Đến với du thuyền Cần Thơ bạn sẽ được thưởng thức các món ăn đặc sản nơi đây, ngắm bến Ninh Kiểu, hay thưởng thức đờn ca tài tử.\r\n+ Mũi Cà Mau là vùng đất liền cuối cùng của trời Phương Nam, điểm đến thiêng liêng nhất cuối cùng của Việt Nam trên đất liề', 'DuThuyenCanTho.jpg'),
(14, 'Bãi tắm Quy Nhơn', 14, 'Bãi tắm Quy Nhơn được thiên nhiên cực ưu ái với bãi cát vàng dài lấp lánh dọc bờ biển cùng những rặng núi thấp bao xung quanh. Trước đây, bãi tắm này là nơi nuôi trồng thủy - hải sản của người dân địa phương.', 'BaiTamQuyNhon.jpg'),
(15, 'Vịnh Triều Dương', 15, 'Khám phá vịnh Triều Dương với bãi biển cát trắng phau chạy dài cả cây số, rặng dương xanh mát, những hàng dừa rủ bóng khi chiều về cùng với bãi đá đen, hòn Tranh hoang sơ nằm đối diện…Tất cả tạo nên một bức tranh thơ mộng và đẹp được mẹ thiên nhiên ưu ái.', 'VinhTrieuDuong.jpg'),
(16, 'Cầu Vàng', 16, 'Cầu Vàng Đà Nẵng là công trình nằm trong quần thể du lịch Sun World Bà Nà Hills Đà Nẵng. Cây cầu này tọa lạc ở vị trí lưng chừng núi và ở độ cao hơn 1400m so với mực nước biển. Cầu Vàng gây “chấn động” không chỉ bởi vị trí độc đáo mà còn bởi thiết kế vô c', 'CauVang.jpg'),
(17, 'Chùa Vĩnh Tràng - Cù lao Thới Sơn - Chợ nổi Cái Răng', 17, '+ Chùa Vĩnh Tràng - ngôi chùa độc đáo có nét giao thoa văn hóa phương Đông và phương Tây cùng hội tụ. Không chỉ có kiến trúc độc đáo, chùa cũng có quy mô cực lớn và cảnh quan bên ngoài tuyệt đẹp đã tồn tại xuyên suốt 3 thế kỉ.\r\n+ Cù lao Thới Sơn - còn gọi', 'ChuaVinhTrang.jpg'),
(18, 'Ninh Chữ - Vịnh Vĩnh Hy', 18, '+ Ninh Chữ một bờ biển bằng phẳng hình vòng cung, cùng với làn nước trong xanh & cát trắng mịn; nơi đây nổi tiếng với không khí trong lành, rì rào sóng vỗ quanh năm. Ninh Chữ là một trong những bãi biển đẹp nhất Việt Nam, được chọn là nơi nghỉ dưỡng tuyệt', 'NinhChu.jpg'),
(19, 'Làng hoa Vạn Thành', 19, 'Nói đến Đà Lạt, chúng ta không thể không nhắc đến làng hoa Vạn Thành – một làng trồng hoa truyền thống đã làm rạng danh thương hiệu hoa Đà Lạt. Làng hoa đã được hình thành từ rất lâu, là nơi cung cấp hoa uy tín và chất lượng hàng đầu ở Đà Lạt, và trở thàn', 'LangHoaVanThanh.jpg'),
(20, 'Núi Cao Cát', 20, 'Núi Cao Cát được người dân đảo gọi là núi thiêng do có tượng Phật Quán Thế Âm Bồ Tát nằm ngay trên đỉnh núi.', 'NuiCaoCat.jpg'),
(21, 'Vịnh Hạ Long', 10, 'abcxyz', 'url hinh anh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diadiem`
--

CREATE TABLE `diadiem` (
  `id` int(10) NOT NULL,
  `tenDiaDiem` varchar(255) NOT NULL,
  `moTa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diadiem`
--

INSERT INTO `diadiem` (`id`, `tenDiaDiem`, `moTa`) VALUES
(1, 'Kiên Giang', 'Xe và hướng dẫn viên sẽ đón quý khách tại bến tàu Bãi Vòng hoặc Sân bay quốc tế Phú Quốc.'),
(2, 'Tây Nguyên', 'Xe và hướng dẫn viên đón đoàn rời TP Hồ Chí Minh theo QL14 đi Buôn Mê Thuột qua Sóc Bombo, Bù Đăng, đường mòn Hồ Chí Minh.'),
(3, 'Hà Giang', ' Nhân viên công ty đón quý khách tại sân bay Nội Bài  hỗ trợ làm thủ tục check-in , quý khách khởi hành đi Hà Giang.'),
(4, 'Đà Nẵng', 'Nhân viên hoặc hướng dẫn viên sẽ đón quý khách  tại Đà Nẵng (Sân bay, Ga, điểm hẹn trung tâm).'),
(5, 'Đồng Nai', 'Xe và hướng dẫn viên sẽ đón quý khách tại điểm hẹn. Khởi hành đi Hồ Trị An cách TP Hồ Chí Minh 70km.'),
(6, 'Khánh Hòa', 'Xe và nhân viên sẽ đón quý khách tại khu vực Cam Ranh. Đoàn tiếp tục di chuyển về Tp.Nha Trang để khám phá hành trình du ngoạn'),
(7, 'Huế', 'Xe và hướng dẫn viên của công ty sẽ đón quý du khách tại điểm hẹn trung tâm Hội An để khởi hành  đến với Tour tham quan Huế.'),
(8, 'Bà Rịa-Vũng Tàu', ' Xe và hướng dẫn viên đón quý khách tại điểm hẹn, khởi hành đi Hồ Tràm.'),
(9, 'Phú Yên', 'Hướng dẫn viên đón khách tại sân bay Tân Sơn Nhất làm thủ tục bay Quy Nhơn. Đến nơi Xe và HDV ở Quy Nhơn sẽ đón quý khách tại sân bay làm thủ tục nhận hành lý.'),
(10, 'Quảng Ninh', 'Xe và hướng dẫn viên đón Quý khách tại các khách sạn khu vực trung tâm phố Cổ và Nhà hát lớn khởi hành cho chuyến đi thăm Vịnh Hạ Long. Đến cảng tàu Hạ Long, Đoàn tập trung tại nhà chờ theo sự hướng dẫn của hướng dẫn viên đợi mua vé và phát vé cho quý khá'),
(11, 'Đồng Nai', 'Sáng Xe và Hướng dẫn viên đón khách tại điểm hẹn khởi hành đi Nam Cát Tiên. Trên đường đoàn nghe thuyết minh về các địa danh nổi tiếng cũng như giá trị kinh tế của vùng đất đi qua.'),
(12, 'Quảng Bình', 'Xe và hướng dẫn viên đón khách tại điểm hẹn khởi hành đi Nam Cát Tiên. Trên đường đoàn nghe thuyết minh về các địa danh nổi tiếng cũng như giá trị kinh tế của vùng đất đi qua.'),
(13, 'Cần Thơ - Cà Mau', 'Xe và hướng dẫn viên đón đoàn tại điểm hẹn tại TP. HCM. Khởi hành đi Đất Mũi, đoàn sẽ hành trình qua các tỉnh miền Tây Nam bộ, quý khách nghỉ đêm trên xe.'),
(14, 'Bình Định', 'Xe đón Quý khách tại ga đi trong nước, sân bay Tân Sơn Nhất làm thủ tục chuyến bay sáng khởi hành đến sân bay Phù Cát, Bình Định.'),
(15, 'Bình Thuận', 'Hướng dẫn viên du lịch đón Quý khách tại điểm hẹn, khởi hành đi Phan Thiết. Quý khách nghĩ ngơi trên xe.Đến bến cảng Phan Thiết, quý khách dùng điểm tâm và caffe sớm chào một ngày mới năng động.\nĐoàn làm thủ tục nhận vé, lên tàu khởi hành đi Phú Quý.'),
(16, 'Đà Nẵng - Quảng Nam - Huế', 'Đón quý khách tại Đà Nẵng (Sân bay, Ga, điểm hẹn trung tâm), làm thủ tục và di chuyển đến những địa điểm du lịch. '),
(17, 'Mỹ Tho - Bến Tre - Cần  ', 'Chương trình tour miền tây  Mỹ Tho – Bến Tre – Cần Thơ khởi hành từ Hồ Chí Minh. Bắt đầu chuyến du lịch đi Mỹ Tho và các địa điểm khác.'),
(18, 'Khánh Hòa', 'Xe và HDV đón khách tại điểm hẹn, Đoàn khởi hành đi Ninh Chữ - Vịnh Vĩnh Hy, trên đường đi được giao lưu, hát với nhau cùng HDV vui nhộn. Những clip hài, nhạc nhẹ sẽ giúp quý khách xóa tan sự căng thẳng trong công việc hằng ngày. Nghỉ đêm trên xe.'),
(19, 'Lâm Đồng', 'Xe đón khách sân bay Liên Khương hoặc bến xe. Sau đó xe đưa quý khách về thành phố, quý khách nhập đoàn hướng dẫn viên đưa quý khách tham quan Đà Lạt.'),
(20, 'Bình Thuận', 'Xe và hướng dẫn viên công ty đón khách tại điểm hẹn, đoàn rời thành phố Hồ Chí Minh đi Phan Thiết, quý khách sinh hoạt giao lưu cùng Hướng Dẫn Viên và cùng tìm hiểu văn hóa, nếp sống của người dân trên đảo Phú Quý.'),
(21, 'Tp.Hồ Chí Minh', 'Xuất phát từ Sân bay Tân Sân Nhất đến điểm du lịch.'),
(22, 'Hà Nội', 'Xuất phát từ sân bay Nội Bài đến điểm du lịch.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hopdong`
--

CREATE TABLE `hopdong` (
  `id` int(10) NOT NULL,
  `tenHopDong` varchar(225) NOT NULL,
  `ngayHoanThanh` date NOT NULL,
  `Noidung` varchar(255) NOT NULL,
  `tongGia` int(25) NOT NULL,
  `hinhThucThanhToan` enum('cash','banking') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hopdong`
--

INSERT INTO `hopdong` (`id`, `tenHopDong`, `ngayHoanThanh`, `Noidung`, `tongGia`, `hinhThucThanhToan`) VALUES
(1, '', '0000-00-00', '', 0, 'banking'),
(2, 'tenhopdong', '2023-12-03', 'hihihi', 1900000, 'cash'),
(3, 'tenhopdong', '2023-12-03', 'hihihi', 1900000, 'cash'),
(4, 'tenhopdong', '2023-12-03', 'hihihi', 1900000, 'cash'),
(5, 'tenhopdong', '2023-12-03', 'hihihi', 3800000, 'cash'),
(6, 'tenhopdong', '2023-12-03', 'hihihi', 3800000, 'cash'),
(7, 'tenhopdong', '2023-12-03', 'hihihi', 3800000, 'cash'),
(8, 'tenhopdong', '2023-12-03', 'hihihi', 3800000, 'cash'),
(9, 'tenhopdong', '2023-12-03', 'hihihi', 3800000, 'cash'),
(10, 'tenhopdong', '2023-12-03', 'hihihi', 3000000, 'cash'),
(11, 'tenhopdong', '2023-12-03', 'hihihi', 12000000, 'cash'),
(12, 'tenhopdong', '2023-12-03', 'hihihi', 1500000, 'cash'),
(13, 'tenhopdong', '2023-12-03', 'hihihi', 1500000, 'cash'),
(14, 'tenhopdong', '2023-12-03', 'hihihi', 1500000, 'cash'),
(15, 'tenhopdong', '2023-12-03', 'hihihi', 3000000, 'cash'),
(16, 'tenhopdong', '2023-12-03', 'hihihi', 2500000, 'cash'),
(17, 'tenhopdong', '2023-12-03', 'hihihi', 3200000, 'cash'),
(18, 'tenhopdong', '2023-12-03', 'hihihi', 4500000, 'cash'),
(19, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(20, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(21, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(22, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(23, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(24, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(25, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(26, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(27, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(28, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(29, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(30, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(31, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(32, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(33, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 3040000, 'cash'),
(34, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 9120000, 'cash'),
(35, 'Tour Đà Nẵng - Quảng Nam - Huế - Cầu Vàng (4N3Đ)', '2023-12-03', 'Tour Đà Nẵng - Quảng Nam - Huế - Cầu Vàng (4N3Đ)', 4050000, 'cash'),
(36, 'Tour Đà Nẵng - Bãi Trũ (3N2Đ)', '2023-12-03', 'Tour Đà Nẵng - Bãi Trũ (3N2Đ)', 8265000, 'cash'),
(37, 'Tour Tây Nguyên - Đèo Mã Pì Lèng - Fansipan (3N3Đ)', '2023-12-03', 'Tour Tây Nguyên - Đèo Mã Pì Lèng - Fansipan (3N3Đ)', 10200000, 'cash'),
(38, 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', '2023-12-03', 'Tour Kiên Giang - Đảo Hòn Thơm (3N2Đ)', 6080000, 'cash');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `id` int(10) NOT NULL,
  `tenKhacHhang` varchar(55) NOT NULL,
  `gioiTinh` varchar(2) NOT NULL,
  `namSinh` date NOT NULL,
  `sdt` int(55) NOT NULL,
  `cccd/cmnd` int(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `tenDangNhap` varchar(55) NOT NULL,
  `passWord` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`id`, `tenKhacHhang`, `gioiTinh`, `namSinh`, `sdt`, `cccd/cmnd`, `email`, `tenDangNhap`, `passWord`) VALUES
(1, 'hihi', 'na', '0000-00-00', 3030, 0, '0120120', 'gioimtg2003', 'gioimtg2003'),
(2, '22', 'nữ', '0000-00-00', 1243274849, 0, 'ttathu0907@gmail.com', '22', '123456'),
(3, '22', 'nữ', '0000-00-00', 12345, 0, 'ttathu0907@gmail.com', '22', '22'),
(4, 'tiên', 'nữ', '0000-00-00', 123456, 0, 'tien@gmail.com', 'tientienne', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtrinh`
--

CREATE TABLE `lichtrinh` (
  `id` int(10) NOT NULL,
  `ngayDi` date NOT NULL,
  `khachToiDa` int(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichtrinh`
--

INSERT INTO `lichtrinh` (`id`, `ngayDi`, `khachToiDa`) VALUES
(1, '2023-06-01', 46),
(2, '2023-05-02', 30),
(3, '2023-05-05', 25),
(4, '2023-05-24', 38),
(5, '2023-05-22', 30),
(6, '2023-06-11', 45),
(7, '2023-05-20', 45),
(8, '2023-05-30', 50),
(9, '2023-04-30', 29),
(10, '2023-05-16', 34),
(11, '2023-06-03', 50),
(12, '2023-05-23', 35),
(13, '2023-05-15', 25),
(14, '2023-06-10', 25),
(15, '2023-05-21', 30),
(16, '2023-05-27', 28),
(17, '2023-04-18', 40),
(18, '2023-04-15', 40),
(19, '2023-03-31', 36),
(20, '2023-06-12', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichtrinhtour`
--

CREATE TABLE `lichtrinhtour` (
  `id` int(10) NOT NULL,
  `idlichTrinh` int(10) NOT NULL,
  `idTour` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichtrinhtour`
--

INSERT INTO `lichtrinhtour` (`id`, `idlichTrinh`, `idTour`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 2),
(6, 6, 2),
(7, 7, 2),
(8, 8, 2),
(9, 9, 3),
(10, 10, 3),
(11, 11, 3),
(12, 12, 3),
(13, 13, 4),
(14, 14, 4),
(15, 15, 4),
(16, 16, 4),
(17, 17, 5),
(18, 18, 5),
(19, 19, 5),
(20, 20, 5),
(21, 1, 6),
(22, 2, 6),
(23, 3, 6),
(24, 4, 6),
(25, 5, 7),
(26, 6, 7),
(27, 7, 7),
(28, 8, 7),
(29, 9, 8),
(30, 10, 8),
(31, 11, 8),
(32, 12, 8),
(33, 13, 9),
(34, 14, 9),
(35, 15, 9),
(36, 16, 9),
(37, 17, 10),
(38, 18, 10),
(39, 19, 10),
(40, 20, 10),
(41, 1, 11),
(42, 2, 11),
(43, 3, 11),
(44, 4, 11),
(45, 5, 12),
(46, 6, 12),
(47, 7, 12),
(48, 8, 12),
(49, 9, 13),
(50, 10, 13),
(51, 11, 13),
(52, 12, 13),
(53, 13, 14),
(54, 14, 14),
(55, 15, 14),
(56, 16, 14),
(57, 17, 15),
(58, 18, 15),
(59, 19, 15),
(60, 20, 15),
(61, 1, 16),
(62, 2, 16),
(63, 3, 16),
(64, 4, 16),
(65, 5, 17),
(66, 6, 17),
(67, 7, 17),
(68, 8, 17),
(69, 9, 18),
(70, 10, 18),
(71, 11, 18),
(72, 12, 18),
(73, 13, 19),
(74, 14, 19),
(75, 15, 19),
(76, 16, 19),
(77, 17, 20),
(78, 18, 20),
(79, 19, 20),
(80, 20, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idTheLoai` int(1) NOT NULL,
  `tenTheLoai` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`idTheLoai`, `tenTheLoai`) VALUES
(1, 'Tour miền Bắc'),
(2, 'Tour miền Trung'),
(3, 'Tour miền Nam'),
(6, 'Tour Miền Tây');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `id` int(10) NOT NULL,
  `donGia` int(55) NOT NULL,
  `idDiaDiemDi` int(10) NOT NULL,
  `idDiaDiemDen` int(10) NOT NULL,
  `maLichTrinh` int(10) DEFAULT NULL,
  `maTheLoai` int(1) NOT NULL,
  `thoiHan` varchar(10) NOT NULL,
  `hinhAnh` varchar(55) NOT NULL,
  `giamGia` int(10) DEFAULT NULL,
  `noibat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`id`, `donGia`, `idDiaDiemDi`, `idDiaDiemDen`, `maLichTrinh`, `maTheLoai`, `thoiHan`, `hinhAnh`, `giamGia`, `noibat`) VALUES
(1, 3200000, 21, 1, 1, 3, '(3N2Đ)', '2023_phuquoc.jpg', 5, 0),
(2, 4000000, 22, 3, 2, 1, ' (4N3Đ)', 'Sapa.jpg', 10, 0),
(3, 1500000, 21, 5, 3, 3, '(2N1Đ)', 'ThuyChau.jpg', 0, 0),
(4, 1900000, 22, 6, 4, 2, '(2N1Đ)', 'NhaTrang.jpg', 0, 1),
(5, 2900000, 21, 4, 5, 2, '(3N2Đ)', 'DaNang2.jpg', 5, 1),
(6, 4000000, 21, 2, 6, 2, '(3N3Đ)', 'TayNguyen.jpg', 15, 0),
(7, 2500000, 22, 7, 7, 2, '(2N1Đ)', 'Hue.jpg', 0, 1),
(8, 3200000, 21, 8, 8, 3, '(2N1Đ)', 'vungtau.jpg', 10, 0),
(9, 3350000, 21, 9, 9, 2, '(3N2Đ)', 'MienTrung.jpg', 0, 0),
(10, 2100000, 21, 10, 10, 1, '(2N1Đ)', 'HaLong.jpg', 0, 1),
(11, 1500000, 22, 11, 11, 3, '(2N1Đ)', 'CatTien.jpg', 0, 0),
(12, 2900000, 22, 12, 12, 2, '(2N1Đ)', 'phongnhakebang.jpg', 5, 1),
(13, 2850000, 21, 13, 13, 3, '(3N3Đ)', 'MienTay.jpg', 0, 0),
(14, 3900000, 22, 14, 14, 2, '(3N2Đ)', 'QuyNhon.jpg', 15, 0),
(15, 3650000, 21, 15, 15, 3, '(3N2Đ)', 'DaoPhuQuy.jpg', 10, 0),
(16, 4500000, 21, 16, 16, 2, '(4N3Đ)', 'DaNang.jpg', 10, 0),
(17, 3345000, 21, 17, 17, 3, '(2N1Đ)', 'mientay2.jpg', 5, 1),
(18, 5500000, 22, 18, 18, 2, '(2N2Đ)', 'BinhHung.jpg', 15, 0),
(19, 4900000, 21, 19, 19, 2, '(3N2Đ)', '2023_dalat-08312793.jpg', 10, 0),
(20, 5750000, 22, 20, 20, 3, '(3N2Đ)', 'PhuQuy.jpg', 0, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Chỉ mục cho bảng `chitiethopdong`
--
ALTER TABLE `chitiethopdong`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_HopDong` (`idHopDong`);

--
-- Chỉ mục cho bảng `dattour`
--
ALTER TABLE `dattour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_KhachHang` (`idKhachHang`),
  ADD KEY `fk_lichtrinhtour` (`idlichtrinhtour`);

--
-- Chỉ mục cho bảng `diadanh`
--
ALTER TABLE `diadanh`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_DiaDiem` (`idDiaDiem`);

--
-- Chỉ mục cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lichtrinh`
--
ALTER TABLE `lichtrinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lichtrinhtour`
--
ALTER TABLE `lichtrinhtour`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTheLoai`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_DiemDi` (`idDiaDiemDi`),
  ADD KEY `fk_DiemDen` (`idDiaDiemDen`),
  ADD KEY `fk_TheLoai` (`maTheLoai`),
  ADD KEY `fk_LichTrinh` (`maLichTrinh`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chitiethopdong`
--
ALTER TABLE `chitiethopdong`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `dattour`
--
ALTER TABLE `dattour`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `diadanh`
--
ALTER TABLE `diadanh`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `diadiem`
--
ALTER TABLE `diadiem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `lichtrinh`
--
ALTER TABLE `lichtrinh`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `lichtrinhtour`
--
ALTER TABLE `lichtrinhtour`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idTheLoai` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethopdong`
--
ALTER TABLE `chitiethopdong`
  ADD CONSTRAINT `fk_HopDong` FOREIGN KEY (`idHopDong`) REFERENCES `hopdong` (`id`);

--
-- Các ràng buộc cho bảng `dattour`
--
ALTER TABLE `dattour`
  ADD CONSTRAINT `fk_KhachHang` FOREIGN KEY (`idKhachHang`) REFERENCES `khachhang` (`id`),
  ADD CONSTRAINT `fk_lichtrinhtour` FOREIGN KEY (`idlichtrinhtour`) REFERENCES `lichtrinhtour` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
