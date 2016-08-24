-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2016 at 02:57 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `ID` int(6) NOT NULL,
  `Usename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaKH` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `Usename`, `Password`, `MaKH`) VALUES
(1, 'admin', 'admin', 1),
(2, 'admin2', 'admin', 2);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `ID` int(11) NOT NULL,
  `MaKH` int(11) NOT NULL,
  `NgayDatHang` date NOT NULL,
  `NgayGiaoHang` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `giohang`
--

CREATE TABLE IF NOT EXISTS `giohang` (
  `GiohangID` int(6) NOT NULL,
  `MaSP` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `MKH` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE IF NOT EXISTS `khach_hang` (
  `MaKH` int(6) NOT NULL,
  `TenKH` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `E-mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SoDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`MaKH`, `TenKH`, `E-mail`, `DiaChi`, `SoDT`) VALUES
(1, 'admin', '', '', ''),
(2, 'admin2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE IF NOT EXISTS `loaisanpham` (
  `LoaiSP_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TenLoaiSP` varchar(56) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`LoaiSP_ID`, `TenLoaiSP`) VALUES
('01', 'Phụ Kiện Công Nghệ');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSP` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `TenSP` varchar(56) COLLATE utf8_unicode_ci NOT NULL,
  `GiaSP` decimal(11,0) NOT NULL,
  `Ngaynhap` date NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiSP_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `thongtinsp` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `GiaSP`, `Ngaynhap`, `Image`, `LoaiSP_ID`, `SoLuong`, `thongtinsp`) VALUES
('1', 'Phone Ovvan x1', '1200000', '2015-11-07', 'anh1.jpg', '', 0, '<p>+ Làm bằng chất liệu nhựa siêu bền, nhẹ với thiết kế thời thượng và gam màu nổi bật phong cách game thủ.</p><br>                            <p>+ Thiết kế phần gọng tai nghe vững chắc với đệm mềm mại giúp giảm áp lực trọng lượng lên đầu, tăng sự thoải mái khi đeo tai nghe.</p><br>                            <p>+ Chất lượng âm thanh trung thực cùng hiệu ứng cực sống động, tiếng bass rõ ràng, cho bạn những phút giây thưởng thức âm nhạc tuyệt vời nhất.</p><br>                            <p>+ Điều khiển gắn kèm đa chức năng với khả năng tinh chỉnh âm lượng và hiển thị trạng thái âm thanh nhanh chóng.</p><br>                            <p>+ Microphone chất lượng cao với khả năng lọc tiếng ồn và được tích hợp ngay bên tai trái và có thể gập lên xuống tiện lợi.</p><br>                            <p>+ Bảo hành: đổi mới trong 7 ngày đầu, bảo hành trong 6 tháng.</p><br>'),
('2', 'Bàn Phím Game', '1500000', '2015-11-07', 'anh2.jpg', '', 0, '<p>- Bàn phím chuyên game giả cơ Bosston 803 được thiết kế vô cùng tỉ mỉ, góc cạnh và sáng tạo.</p><br>                            <p>- Hệ thống đèn Led 3 màu cực kỳ đẹp tỏa khắp bàn phím, làm nổi bật các chữ và hình ảnh các logo, đường nét.</p><br>                            <p>- Phím được gia công tạo cảm giác bám tốt vào ngón tay, gõ chữ cực êm và được khắc laser chống bay chữ.</p><br>                            <p>- Các chữ trên bàn phím êm nhẹ, dễ dàng sử dụng.</p><br>                            <p>- Tương thích nhiều hệ điều hành: Win98/2000/ME/NT/XP/Visa/07/Mac.</p><br>                            <p>- Bàn phím có thể chịu được đến 10 triệu lần gõ mà không sợ bị liệt phím.</p><br>'),
('3', 'Chuột Game', '1300000', '2015-11-07', 'anh3.jpg', '', 0, '<p>Ban đầu, những nút phụ ở hông chuột bị cho là "thừa thãi" khi game thủ có thể bấm nhầm, tạo ra những pha xử lý không như mong muốn. Thế nhưng sau thời gian sử dụng, game thủ cuối cùng cũng đã chấp nhận và coi những mẫu chuột chơi game "nhiều nút" như một món đồ chơi cao cấp cho những game thủ MMO hay game MOBA.</p><br>                            <p>Roccat Tyon là một ví dụ điển hình, chú chuột chơi game cao cấp mới ra mắt của nhà sản xuất thiết bị gaming gear đến từ nước Đức.</p><br>                            <p>Nhìn thoáng qua, chúng ta có thể bị choáng vì hệ thống nút đồ sộ của Tyon. Không giống như Naga, Tyon có kết cấu gần giống với chú chuột MMO mà SteelSeries tạo ra cho cộng đồng game thủ hâm mộ tựa game World of Warcraft, với nút bấm phụ bố trí trên khắp mọi nơi trên chú chuột. Với 14 nút bấm (bao gồm hai nút dạng cần gạt), game thủ chắc chắn sẽ mất một khoảng thời gian để làm quen với món đồ chơi lạ mắt này.</p><br>'),
('4', 'Ba Lô Chống Sốc', '1300000', '2015-11-07', 'anh4.jpg', '', 0, '<p>Vừa vặn với máy tính xách tay 15,4 inch trở xuống.</p><br><p> Dây đeo lót đệm êm có thể điều chỉnh.</p><br> <p>Ngăn máy tính xách tay có đệm êm.</p><br> <p>Đa dạng các loại ngăn, túi.</p><br> <p>Có khả năng chống nước.</p><br>'),
('5', 'USB 3G', '1500000', '0000-00-00', 'anh5.jpg', '01', 0, '<p>Là thiết bị hỗ trợ giải trí số giúp mang các nội dung trực tuyến lên tivi nhà bạn. Không những vậy mới đây Google cũng đã hoàn thiện tính năng chiếu (mirror) thiết bị di động lên tivi để bạn có thể lướt điện thoại trên một màn hình cỡ lớn.</p><br><p>Để sử dụng tính năng mới nhất của Chromecast, chiếu (mirror) màn hình thiết bị di động lên màn hình tivi khổ lớn, hãy vào ứng dụng Chromecast trên điện thoại, kéo bảng điều khiển từ bên trái vào và chọn Cast Screen (mũi tên).</p><br>'),
('6', 'Ổ Cứng Di Động', '1500000', '0000-00-00', 'anh6.jpg', '01', 0, '<p>Ổ Cứng Di Động Sony USB3.0 2.5" - EG5 500GB có kích thước 80 x 16 x 126 mm, nặng 220 gram được trang bị bộ khung ngoài bằng kim loại siêu bền. Bên cạnh đó, ổ cứng Sony cũng được trang bị nhiều phần mềm như Password Protection Manager giúp tăng cường bảo mật dữ liệu và giảm nguy cơ rò rỉ các thông tin nhạy cảm, hay Data Transfer Accelerator giúp truyền tải dữ liệu nhanh hơn. Thông tin sản phẩm</p><br><p>Sony HD-EG5 có kích thước 80 x16 x 126 mm rất thuận tiện cho những người hay di chuyển. Vỏ ngoài được làm bằng hợp kim khả năng chống vân tay và hạn chế trầy xướt, đồng thời cũng mang lại vẻ sang trọng cho sản phẩm. Mặt sau  có thiết kế 4 nút đệm cao su nhỏ giúp ổ cứng nằm chắc chắn hơn trên hầu hết các bề mặt.</p><br><p>Ổ cứng HD-EG5 được trang bị công nghệ DNA bằng phần mềm Data Transfer Accelerator giúp tăng tốc độ truyền tải dữ liệu vượt hơn so với ổ cứng thông thường. Ngoài ra, phầm mềm Password Protection Manager giúp mã hóa những dữ liệu quan trọng và Backup Manager giúp sao lưu dữ liệu.</p><br>'),
('7', 'Webcame', '1500000', '0000-00-00', 'anh7.jpg', '01', 0, '<p>Wifi Smart Net Camera V380-1 Lắp đặt nhanh chóng dễ dàng sử dụng thích hợp cho hộ gia đình.</p><p> - Bạn ra ngoài nhưng vẫn chưa yên tâm về ngôi nhà của mình?.</p><p> - Cần biết con trẻ luôn an toàn khi bạn đang làm việc</p><p> - Cần biết rõ người giúp việc tại nhà có làm đúng phận sự</p><p> - Cần thấy hình ảnh cha/mẹ già khi bạn đi xa Hoặc chỉ đơn giản hơn bạn muốn nhìn được hình ảnh thân quen từ xa…</p><p> Wifi Smart Net Camera </p><p>- Sử dụng được với cả 2 kết nối Wifi hoặc cáp mạng RJ45 - Lắp đặt tiện lợi, dễ dàng, thẩm mỹ khi sử dụng kết nối Wifi - Có đèn hồng ngoại giúp xem vào ban đêm trong phạm vi 10m - Có thể xoay 360 độ mang đến tầm quan sát không giới hạn - Tương tác âm thanh 2 chiều qua Camera - Chụp hình khi phát hiện có chuyển động và gửi email cảnh báo - Lưu video vào PC, Cloudcam (cloud server), điện thoại, laptop.</p>'),
('8', 'Game Keyboar', '1500000', '0000-00-00', 'anh8.jpg', '01', 0, '<p>Thấy dân tình Review em E-Blue Commander 708 khá nhiều, mà mình cũng bị thích thiết kế của em nó, nhìn có vẻ hầm hố, chắc chắn. Có hẳn LED nền và chữ 3 màu xanh, đỏ, tím. Nghe kháo em này gõ êm và nhẹ lắm, không biết thực tình như thế nào. Được cái chống nước tốt, mà cũng có hẳn 2 chân chống, chắc mình chỉ sử dụng một cái là đủ. Chốt lại là có nên mua không mọi người. Tầm 550 thì mình thấy ổn, không biết mọi người thấy thế nào.</p><br>'),
('9', 'Game Mouse', '1700000', '0000-00-00', 'anh9.jpg', '01', 0, '<p>Ban đầu, những nút phụ ở hông chuột bị cho là "thừa thãi" khi game thủ có thể bấm nhầm, tạo ra những pha xử lý không như mong muốn. Thế nhưng sau thời gian sử dụng, game thủ cuối cùng cũng đã chấp nhận và coi những mẫu chuột chơi game "nhiều nút" như một món đồ chơi cao cấp cho những game thủ MMO hay game MOBA.</p><br>                            <p>Roccat Tyon là một ví dụ điển hình, chú chuột chơi game cao cấp mới ra mắt của nhà sản xuất thiết bị gaming gear đến từ nước Đức.</p><br>                            <p>Nhìn thoáng qua, chúng ta có thể bị choáng vì hệ thống nút đồ sộ của Tyon. Không giống như Naga, Tyon có kết cấu gần giống với chú chuột MMO mà SteelSeries tạo ra cho cộng đồng game thủ hâm mộ tựa game World of Warcraft, với nút bấm phụ bố trí trên khắp mọi nơi trên chú chuột. Với 14 nút bấm (bao gồm hai nút dạng cần gạt), game thủ chắc chắn sẽ mất một khoảng thời gian để làm quen với món đồ chơi lạ mắt này.</p><br>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MaKH` (`MaKH`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `MaKH` (`MaKH`);

--
-- Indexes for table `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`GiohangID`),
  ADD UNIQUE KEY `MKH` (`MKH`),
  ADD UNIQUE KEY `MaSP` (`MaSP`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`LoaiSP_ID`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `LoaiSP_ID` (`LoaiSP_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `giohang`
--
ALTER TABLE `giohang`
  MODIFY `GiohangID` int(6) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `MaKH` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`MaKH`) REFERENCES `khach_hang` (`MaKH`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `account` (`ID`);

--
-- Constraints for table `giohang`
--
ALTER TABLE `giohang`
  ADD CONSTRAINT `giohang_ibfk_1` FOREIGN KEY (`MKH`) REFERENCES `khach_hang` (`MaKH`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `giohang_ibfk_2` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
