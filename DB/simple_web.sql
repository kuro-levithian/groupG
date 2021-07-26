-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 26, 2021 lúc 02:00 PM
-- Phiên bản máy phục vụ: 5.7.31
-- Phiên bản PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `simple_web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'duykuro241', 'abcd@gmail.com', '123456'),
(11, 'admin', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(2, 'Nguyá»…n HoÃ ng Duy', '0963818720', 'duykuro24012000@gmail.com', 'Opinion about web page', 'Your website is not very hard to use. I appreciate that. However, I want to discuss with the group for further problems in the future');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `foreign_student`
--

DROP TABLE IF EXISTS `foreign_student`;
CREATE TABLE IF NOT EXISTS `foreign_student` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` int(255) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `travel_from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symptom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_with_infected` text COLLATE utf8_unicode_ci NOT NULL,
  `vaccine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `foreign_student`
--

INSERT INTO `foreign_student` (`id`, `full_name`, `nation`, `student_id`, `subject`, `email`, `phone_number`, `address`, `birthday`, `gender`, `travel_from`, `symptom`, `contact_with_infected`, `vaccine`) VALUES
(13, 'David Carrager', 'Brazil', 134557, 'IT', 'david@gmail.com', '0976167890', '51 To Hien Thanh district 10 HCM city', '1999-02-03', 'male', 'no', 'none', 'no', 'none'),
(14, 'Jane Foster', 'England', 122453, 'IT', 'jane255@gmail.com', '0934123456', '51/15 To Hien Thanh District 10 TPCHM', '1998-05-25', 'female', 'yes', 'cough', 'no', 'none');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vn_student`
--

DROP TABLE IF EXISTS `vn_student`;
CREATE TABLE IF NOT EXISTS `vn_student` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ho_ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MSSV` int(255) NOT NULL,
  `khoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioi_tinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `dia_chi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngay_sinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `du_lich_14ngay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dau_hieu_14ngay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tiep_xuc_gan_14ngay` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `da_tiem_vaccine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vn_student`
--

INSERT INTO `vn_student` (`id`, `ho_ten`, `MSSV`, `khoa`, `gioi_tinh`, `email`, `phone`, `dia_chi`, `ngay_sinh`, `du_lich_14ngay`, `dau_hieu_14ngay`, `tiep_xuc_gan_14ngay`, `da_tiem_vaccine`) VALUES
(28, 'Nguyen Thi B', 134571, 'Business', 'nu', 'az@gmail.com', '0896789646', '15/68 Nguyen Thi Minh Khai Q10 TPHCM', '24/10/1999', 'khong', 'khong', 'khong', '1 mui'),
(32, 'Nguyen Van A', 134570, 'Business', 'nam', 'abc@gmail.com', '0236489750', '15/68 Nguyen Thi Minh Khai Q10 TPHCM', '24/01/1990', 'khong', 'khong', 'khong', 'khong'),
(30, 'Nguyen Van C', 134569, 'Business', 'nam', 'abcdc@gmail.com', '0125478563', '14/10 To Hien Thanh Q10 TPHCM', '24/10/1998', 'khong', 'khong', 'khong', 'khong'),
(31, 'Nguyen Thi E', 134577, 'Business', 'nu', 'eddie@gmail.com', '0963817870', '51 Thanh Thai p14 quan 10 TPHCM', '24/05/1997', 'khong', 'khong', 'khong', '1 mui'),
(36, 'Nguyen Van An', 144568, 'Business', 'nam', 'andehiy@gmail.com', '0912345341', 'District 10 TPCHM', '24/05/1997', 'khong', 'khong', 'khong', 'khong'),
(40, 'Tran Van Phuong', 155912, 'IT', 'nam', 'phuongz@gmail.com', '0987121876', '30 Nguyen Tri Phuong Quan 5 TPHCM', '2000-02-04', 'khong', 'khong', 'khong', '1 mui'),
(41, 'Tran Dang Khoi', 123444, 'IT', 'nam', 'khoitran@gmail.com', '0976777546', '51 Nguyen Trai quan 1 TPHCM', '2000-04-15', 'khong', 'met moi', 'co', '1 mui');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
