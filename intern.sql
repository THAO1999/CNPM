-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 05:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigned_table`
--

CREATE TABLE `assigned_table` (
  `organization_request_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assigned_table`
--

INSERT INTO `assigned_table` (`organization_request_id`, `student_id`, `start_date`, `end_date`, `status`, `create_date`) VALUES
(231, 15, NULL, NULL, 10, NULL),
(231, 17, '2021-04-13', NULL, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `capacity_dictionary`
--

CREATE TABLE `capacity_dictionary` (
  `id` int(11) NOT NULL,
  `ability_name` varchar(20) NOT NULL,
  `aibility_type` varchar(20) NOT NULL,
  `ability_note` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `capacity_dictionary`
--

INSERT INTO `capacity_dictionary` (`id`, `ability_name`, `aibility_type`, `ability_note`) VALUES
(2, 'JAVA', 'ngôn ngữ lập trinh', '10'),
(3, 'PHP', 'ngôn ngữ lập trinh', '10'),
(4, 'C++', 'ngôn ngữ lập trinh', '10'),
(7, 'Python', 'ngôn ngữ lập trinh', '10'),
(17, 'Ruby', '', ''),
(18, 'JavaScript', '', ''),
(19, 'C#', '', ''),
(20, 'Mysql', '', ''),
(21, 'SQL Sever', '', ''),
(22, 'Oracle', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `specialized` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `end_at` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `specialized`, `created_at`, `end_at`, `user_id`) VALUES
(1, 'Trường Đại Học Khoa Học Tự Nhiên', '\r\n<p>Khoa học máy tính</><p>- Sinh viên năm 4</p>\r\n<p>- Điểm tích luỹ: 2.7</p>\r\n<p>- Hệ chính quy</p>', 0, 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `request_id` int(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `submission_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `student_id`, `request_id`, `content`, `submission_date`) VALUES
(21, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(22, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(23, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(24, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(25, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(26, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(27, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(28, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(29, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(30, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(31, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(32, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(33, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL),
(34, 14, 231, 'Công ty rất ok  nhé, môi trường năng động', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enterprise`
--

CREATE TABLE `enterprise` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date_establish` date DEFAULT NULL,
  `employee_count` int(11) DEFAULT NULL,
  `imageFile` varchar(255) DEFAULT NULL,
  `cover_img` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `gross_revenue` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enterprise`
--

INSERT INTO `enterprise` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `date_establish`, `employee_count`, `imageFile`, `cover_img`, `description`, `gross_revenue`, `status`, `created_at`, `updated_at`, `address`, `name`) VALUES
(28, 'FPT', 'E8uHnUBexpoVTI2O1bsBBc4uLyeWlhDt', '$2y$13$CdnnjG2MmgcOLckygztkcOQUcqkoAGVo/e8iv12ysYU0vTP6OVq6O', 'v6HU6aZOWH5gBbRdfm0XAhZJ-5p8-OJj_1605951586', 'fpt@gmal.com', NULL, 10000, 'fpt.png', 'fpt.jpg', '<p>Cty1</p><p>1.Mô tả công việc&nbsp;</p><p>-Được đào tạo định hướng về Front-end và Back-end&nbsp;</p><p>-Tham gia các dự án nước ngoài theo hình thức training on-job dưới sự hướng dẫn trực tiếp của Leader&nbsp;</p><p>-Đọc hiểu tài liệu kỹ thuật, tìm hiểu và phân tích yêu cầu sản phẩm, thiết kế tính năng, nghiên cứu các công nghệ được phân công Phối hợp với các thành viên trong team để thiết kế, triển khai các tính năng mới theo yêu cầu dự án&nbsp;</p><p>-Thực hiên các công việc khác theo sự phân công của quản lý&nbsp;</p><p>-Chi tiết sẽ trao đổi cụ thể khi phỏng vấn&nbsp;</p><p>2.Yêu cầu công việc&nbsp; &nbsp;</p><p>-Sinh viên năm 3,4 hoặc tốt nghiệp cao đẳng/đại học chuyên ngành CNTT, Kỹ thuật phần mềm, Khoa học máy tính, ... hoặc các lĩnh vực liên quan Nắm vững các kiến thức về PHP Có kiến thức tốt về MySQL, viết và tối ưa hóa truy vấn SQL</p><p>-Kiến thức tốt về lập trình hướng đối tượng.</p><p>-Có kiến thức về lập trình web: HTML, CSS, Javascript, JQuery, ...</p><p>-Có kinh nghiệm làm việc với một trong các Framework: Laravel, CakePHP là lợi thế Kỹ năng làm việc nhóm và trao đổi thông tin tốt Chăm chỉ, có tinh thần học hỏi, chủ động trong công việc Đam mê lập trình, tư duy logic, sẵn sàng tìm hiểu và học hỏi cái mới</p><p>-Nhiệt tình và có trách nhiệm trong công việc&nbsp;</p><p>3.Các phúc lợi dành cho bạn&nbsp; Có hỗ trợ lương hàng tháng từ 1,000,000 – 5,000,000 tùy theo năng lực</p><p>-Có cơ hội trở thành nhân viên chính thức tại Adamo với mức lương hấp dẫn&nbsp;</p><p>-Lương T13 khi lên chính thức&nbsp; Review lương 2 lần 1 năm</p><p>-Thưởng các dịp lễ Tết, thưởng quý, thưởng thâm niên, thưởng lợi nhuận.</p><p>-Quà tặng dịp sinh nhật cá nhân Cơ hội được học hỏi, làm việc với công nghệ mới</p><p>-Được làm việc trong một môi trường chuyên nghiệp với các đối tác nước ngoài&nbsp;</p><p>-Du lịch, teambuilding 2 năm/lần Khám sức khỏe định kỳ cho nhân viên&nbsp;</p><p>-Hỗ trợ tham gia các khóa đào tạo nâng cao kiến thức và kỹ năng</p><div><br></div>', NULL, 10, '2020-11-21', NULL, '45 duy tan', 'FPT Software'),
(29, 'linxhq', 'GGm2gCIqF8cJY7WjrrpdQw7zyy2kh952', '$2y$13$ElLFEEGvY5jNQHnvEHH6IuoQmST07EKj2VUyPQ5kZXkl7Thh2cG7.', 'PZ4dXODZhjqipNid3iMpg7H9R52fI5ff_1605951662', 'linxhq@gmal.com', NULL, 555, 'toshiba.png', 'to.jpg', '<p><b>Overview about ITviec</b></p><p>Ít nhưng mà chất</p><p><br></p><p>ITviec.com is where \"Ít nhưng mà chất\" developers go to find great new jobs.</p><p><br></p><p>Our mission is to help IT people develop so they can build great products and change the world. We don\'t have the most jobs...but we do have the best ones.</p><p><br></p><p>We focus on building an awesome job website and providing IT people with tips and practical advice they can use to manage their IT career and find the job that\'s best for them.</p><p><br></p><p>We have a fun, young, no-bullshit culture. You have an idea? Just do it! No committees and no bureaucracy.</p><p><br></p><p><b>Are you \"Ít nhưng mà chất\"? </b>Join us right NOW!!</p><div><br></div>', NULL, 10, '2020-11-21', NULL, '4555 duy tan', 'Lixhq Software');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `enterprise_name` varchar(255) NOT NULL,
  `namejob` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `end_at` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `enterprise_name`, `namejob`, `created_at`, `end_at`, `user_id`) VALUES
(1, '2NF', '<h3>Thực Tập Sinh ASP.NET MVC</h3>\r\n<p>-Làm project website bán hàng</p>', 0, 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `id` int(11) NOT NULL,
  `hobby_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`id`, `hobby_name`, `user_id`) VALUES
(4, '<p style=\"color:white\">- Thích xem phim,thích học tiếng anh,chơi\r\nthể thao đặc biệt là đá bóng\r\n</p>', 14);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(11) NOT NULL,
  `personal_information` varchar(255) NOT NULL,
  `specialize` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `personal_information`, `specialize`, `user_id`) VALUES
(1, '<p>- Hoạt bát, nhiệt tình, thật thà và cẩn thận.</p>\r\n<p>- Thích tìm tòi, chinh phục những tri thức, công việc mà\r\nmình chưa biết đến.</p>', '<p>- Sử dụng Git cơ bản,</p>\r\n<p>- Cơ bản Mysql, OOP, SOLID</p>\r\n<p>-Đọc tài liệu chuyên ngành khá tốt</p>\r\n<p>- Khả năng làm việc nhóm tốt\r\n</p>', 14);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1602215405),
('m130524_201442_init', 1602215408),
('m190124_110200_add_verification_token_column_to_user_table', 1602215408),
('m201007_082621_create_news_table_student', 1602215408),
('m201007_082857_create_news_table_enterprise', 1602215409),
('m201007_083831_create_news_table_teachers', 1602215409),
('m201215_073327_create_news_experience', 1608186321),
('m201215_074619_create_news_colleges', 1608186322),
('m201215_074916_create_news_operation', 1608186322),
('m201215_075222_create_news_target', 1608186322),
('m201215_075446_create_news_hobby', 1608186322),
('m201217_064310_add_target_id_column_to_user_table', 1608188143),
('m201217_064830_create_information_table', 1608188143),
('m201217_065652_add_target_id_column_to_student_table', 1608188317),
('m201217_070726_add_student_id_for_student_table', 1608188966),
('m201217_070942_addForeignKey_for_student_table', 1608189505),
('m201217_072016_addForeignKey_for_colleges_table', 1608189759),
('m201217_072304_addForeignKey_for_enterprise_table', 1608190448),
('m201217_072435_addForeignKey_for_hobby_table', 1608190475),
('m201217_072533_addForeignKey_for_information_table', 1608190563),
('m201217_072614_addForeignKey_for_operation_table', 1608190587),
('m201217_072650_addForeignKey_for_target_table', 1608190587);

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `end_at` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`id`, `name`, `detail`, `created_at`, `end_at`, `user_id`) VALUES
(1, 'Hành trình đỏ về nguồn\r\n', '<p> CLB dành cho những bạn trẻ muốn cải thiện kĩ năng\r\nmềm. Ở đó tôi được học hỏi các kỹ năng: làm việc nhóm,\r\nkỹ năng thuyết trình ….</p>', 0, 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `organization_requests`
--

CREATE TABLE `organization_requests` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `short_description` mediumtext NOT NULL,
  `amount` int(11) NOT NULL,
  `date_submitted` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  `imageFile` varchar(50) DEFAULT NULL,
  `cancel` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization_requests`
--

INSERT INTO `organization_requests` (`id`, `organization_id`, `subject`, `short_description`, `amount`, `date_submitted`, `status`, `imageFile`, `cancel`) VALUES
(229, 28, 'Tuyển dụng Fresher PHP', '<p><b>1.Mô tả công việc&nbsp;</b><br></p><p>-Được đào tạo định hướng về Front-end và Back-end&nbsp;</p><p>-Tham gia các dự án nước ngoài theo hình thức training on-job dưới sự hướng dẫn trực tiếp của Leader&nbsp;</p><p>-Đọc hiểu tài liệu kỹ thuật, tìm hiểu và phân tích yêu cầu sản phẩm, thiết kế tính năng, nghiên cứu các công nghệ được phân công Phối hợp với các thành viên trong team để thiết kế, triển khai các tính năng mới theo yêu cầu dự án&nbsp;</p><p>-Thực hiên các công việc khác theo sự phân công của quản lý&nbsp;</p><p>-Chi tiết sẽ trao đổi cụ thể khi phỏng vấn&nbsp;</p><p><b>2.Yêu cầu công việc&nbsp; &nbsp;</b></p><p>-Sinh viên năm 3,4 hoặc tốt nghiệp cao đẳng/đại học chuyên ngành CNTT, Kỹ thuật phần mềm, Khoa học máy tính, ... hoặc các lĩnh vực liên quan Nắm vững các kiến thức về PHP Có kiến thức tốt về MySQL, viết và tối ưa hóa truy vấn SQL</p><p>-Kiến thức tốt về lập trình hướng đối tượng.</p><p>-Có kiến thức về lập trình web: HTML, CSS, Javascript, JQuery, ...</p><p>-Có kinh nghiệm làm việc với một trong các Framework: Laravel, CakePHP là lợi thế Kỹ năng làm việc nhóm và trao đổi thông tin tốt Chăm chỉ, có tinh thần học hỏi, chủ động trong công việc Đam mê lập trình, tư duy logic, sẵn sàng tìm hiểu và học hỏi cái mới</p><p>-Nhiệt tình và có trách nhiệm trong công việc&nbsp;</p><p><b>3.Các phúc lợi dành cho bạn&nbsp; </b></p><p>-Có hỗ trợ lương hàng tháng từ 1,000,000 – 5,000,000 tùy theo năng lực</p><p>-Có cơ hội trở thành nhân viên chính thức tại Adamo với mức lương hấp dẫn&nbsp;</p><p>-Lương T13 khi lên chính thức&nbsp; Review lương 2 lần 1 năm</p><p>-Thưởng các dịp lễ Tết, thưởng quý, thưởng thâm niên, thưởng lợi nhuận.</p><p>-Quà tặng dịp sinh nhật cá nhân Cơ hội được học hỏi, làm việc với công nghệ mới</p><p>-Được làm việc trong một môi trường chuyên nghiệp với các đối tác nước ngoài&nbsp;</p><p>-Du lịch, teambuilding 2 năm/lần Khám sức khỏe định kỳ cho nhân viên&nbsp;</p><p>-Hỗ trợ tham gia các khóa đào tạo nâng cao kiến thức và kỹ năng</p><div><br></div>', 3, '2022-06-26', 10, 'php.jpg', NULL),
(230, 28, 'đ', 'ssssssssss', 2, '2022-02-11', 10, 'toshiba.png', 'bố đéo thích mày thì hủy thôi'),
(231, 29, 'Tuyển dụng thực tâp Java', '<p>1. Mô tả công việc</p><p>- Tham gia phát triển hệ thống kết nối vận hành với các đối tác giao vận, cổng thanh toán, ứng dụng thanh toán di động…</p><p>- Thực hiện các công việc liên quan khác được giao</p><p><b>2. Yêu cầu</b></p><p>-Sinh viên năm 3, năm 4</p><p>- Đang theo học các trường đại học khoa Công nghệ thông tin</p><p>- Có hiểu biết hoặc kinh nghiệm với PHP (Laravel/Yii)</p><p>- Có kiến thức về html, css, ajax, jQuery, Bootstrap, AngularJS, VueJS, ReactJS</p><p>- Có kiến thức về phát triển hệ thống REST, API.</p><p><b>3. Quyền lợi</b></p><p>- Được hỗ trợ chi phí và dấu thực tập.</p><p>- Được trở thành nhân viên chính thức của công ty.&nbsp;</p><p>- Làm việc từ Thứ 2 – Thứ 6</p><p>- Làm việc trong môi trường trẻ trung, năng động, khoa học và được tạo mọi cơ hội để phát triển bản thân</p><p>- Được đào tạo các kiến thức, kỹ năng cần thiết cho công việc</p>', 2, '2021-11-28', 10, 'java.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `organization_request_abilities`
--

CREATE TABLE `organization_request_abilities` (
  `id` int(11) NOT NULL,
  `organization_request_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_required` int(11) DEFAULT NULL,
  `note` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organization_request_abilities`
--

INSERT INTO `organization_request_abilities` (`id`, `organization_request_id`, `ability_id`, `ability_required`, `note`) VALUES
(166, 229, 3, NULL, NULL),
(167, 229, 18, NULL, NULL),
(168, 229, 20, NULL, NULL),
(169, 230, 2, NULL, NULL),
(170, 231, 2, NULL, NULL),
(171, 231, 18, NULL, NULL),
(172, 231, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `class_name` varchar(255) DEFAULT NULL,
  `imageFile` varchar(255) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` int(15) DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `hobby_id` int(11) DEFAULT NULL,
  `operation_id` int(11) DEFAULT NULL,
  `experience_id` int(11) DEFAULT NULL,
  `information_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `date_of_birth`, `class_name`, `imageFile`, `status`, `created_at`, `updated_at`, `address`, `phone`, `college_id`, `target_id`, `hobby_id`, `operation_id`, `experience_id`, `information_id`, `name`) VALUES
(14, 'PhamThanhTung', 'MasWXaGWWc4F_7icDjfgslpkQTbnv4d1', '$2y$13$XzHkt0yiH3h8obj7sBDfyukQ58G2TcegQbOjgrLQgGLCRX72YH8Yu', '-sbtp1o3x-IGXOXov07Yx_s3fWUFlTon_1605925452', 'phamthanhtung@gmail.com', '1999-12-16', 'k62a3', 'user.png', 10, NULL, NULL, '334 Nguyễn Trãi , Thanh Xuân , Hà Nội', 585640443, NULL, NULL, NULL, NULL, NULL, NULL, 'Phạm Thanh Tùng'),
(15, 'taminhthao', 'hxZUPvDQcNAxsZscunZ-ErI73HpvzP2y', '$2y$13$9u.dMToq4NGkETJckTSQSuJXnoozKB.zvme6KSi4WDa14aCkDVvry', 'w1SwNFguI2sWkmrm2bbkivwIcjZda87m_1605925453', 'taminthao@gmail.com', NULL, 'k62a3', 'fpt.png', 10, NULL, NULL, '54 hus', 585640443, NULL, NULL, NULL, NULL, NULL, NULL, 'Ta Minh Thao'),
(16, 'nguyenducmanh', 'CcXxikDTBaHKlwI1EmCgHjShn6RwylSP', '$2y$13$3IqPmgdiEtI3A2TS4s7qQOGxfBhF.5zBl4tHnYzSGz4taLbtcvVmW', '27wsroSV-ffkBkdo-JEhN-Aw-RfI23hs_1605925454', 'nguyenducmanh@gmail.com', NULL, 'k62a3', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nguyễn Đức Mạnh'),
(17, 'quynh99', 'WkheneiqibxZPcVtoS0iVEnuxcbcfcXi', '$2y$13$y.Dg1uxDL6Qdp4gp6//Ueu44IFIIZW6x15LYq0BW3BUST.kPDEX3O', 'WV3ElG2pHg95iEuExJMU2GsV-jguV3o3_1605925455', 'quynh99@gmail.com', NULL, 'k62a3', NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nguyễn Như Quynh');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `student_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `enterprise_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`student_id`, `request_id`, `enterprise_id`) VALUES
(14, 229, 28);

-- --------------------------------------------------------

--
-- Table structure for table `student_skill_profile`
--

CREATE TABLE `student_skill_profile` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_skill_profile`
--

INSERT INTO `student_skill_profile` (`id`, `student_id`, `ability_id`, `ability_rate`) VALUES
(11, 14, 2, 10),
(12, 14, 4, 90);

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `id` int(11) NOT NULL,
  `short_time` varchar(255) NOT NULL,
  `long_time` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `end_at` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`id`, `short_time`, `long_time`, `created_at`, `end_at`, `user_id`) VALUES
(5, '\r\n+ Tốt nghiệp đại học loại khá\r\n+ Thành thạo Laravel', '+Sau 5 năm sẽ trở thành full-stack Web\r\nDeveloper', 0, 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(32) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `sex` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `img`, `sex`, `status`, `created_at`, `updated_at`, `name`) VALUES
(2, 'giaovien2', 'rqlrC6_Ov9nMgRVpZnKkV0KyRLKU6w35', '$2y$13$YMbmgdCSbrMCgliIiqXtWeZ9vI1okeEsTU/Gj2M7.DcfzQlETxnIC', '48cQScQr18vLwsPOayxMPAr8nqjb4F3s_1602216668', 'taminhthao99@gmail.com', NULL, 42, 10, '2020-10-09', NULL, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `colleges_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `hobby_id` int(11) DEFAULT NULL,
  `operation_id` int(11) DEFAULT NULL,
  `experience_id` int(11) DEFAULT NULL,
  `information_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigned_table`
--
ALTER TABLE `assigned_table`
  ADD PRIMARY KEY (`organization_request_id`,`student_id`) USING BTREE,
  ADD KEY `FK_assigned_student_skill` (`student_id`),
  ADD KEY `FK_assigned_enterprise_request` (`organization_request_id`);

--
-- Indexes for table `capacity_dictionary`
--
ALTER TABLE `capacity_dictionary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `fk-student` (`user_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`,`student_id`,`request_id`) USING BTREE,
  ADD KEY `student_id` (`student_id`),
  ADD KEY `request_id` (`request_id`);

--
-- Indexes for table `enterprise`
--
ALTER TABLE `enterprise`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `enterprise_name` (`enterprise_name`),
  ADD KEY `fk-experience-user_id` (`user_id`);

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-hobby-user_id` (`user_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-information-user_id` (`user_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `fk-operation-user_id` (`user_id`);

--
-- Indexes for table `organization_requests`
--
ALTER TABLE `organization_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organization_request_abilities`
--
ALTER TABLE `organization_request_abilities`
  ADD PRIMARY KEY (`id`,`organization_request_id`,`ability_id`),
  ADD KEY `FK_assigned_list` (`organization_request_id`),
  ADD KEY `ability_id` (`ability_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `fk-information` (`information_id`),
  ADD KEY `fk-colleges` (`college_id`),
  ADD KEY `fk-target` (`target_id`),
  ADD KEY `fk-hobby` (`hobby_id`),
  ADD KEY `fk-operation` (`operation_id`),
  ADD KEY `fk-experience` (`experience_id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`student_id`,`request_id`) USING BTREE,
  ADD KEY `FK_student_registration_skill` (`request_id`);

--
-- Indexes for table `student_skill_profile`
--
ALTER TABLE `student_skill_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ability_id` (`ability_id`),
  ADD KEY `student_skill_profile_ibfk_1` (`student_id`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-target-user_id` (`user_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capacity_dictionary`
--
ALTER TABLE `capacity_dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `enterprise`
--
ALTER TABLE `enterprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `operation`
--
ALTER TABLE `operation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `organization_requests`
--
ALTER TABLE `organization_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `organization_request_abilities`
--
ALTER TABLE `organization_request_abilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_skill_profile`
--
ALTER TABLE `student_skill_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigned_table`
--
ALTER TABLE `assigned_table`
  ADD CONSTRAINT `FK_assigned_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `assigned_table_ibfk_1` FOREIGN KEY (`organization_request_id`) REFERENCES `organization_requests` (`id`);

--
-- Constraints for table `colleges`
--
ALTER TABLE `colleges`
  ADD CONSTRAINT `fk-student` FOREIGN KEY (`user_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `organization_requests` (`id`);

--
-- Constraints for table `experience`
--
ALTER TABLE `experience`
  ADD CONSTRAINT `fk-experience-user_id` FOREIGN KEY (`user_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hobby`
--
ALTER TABLE `hobby`
  ADD CONSTRAINT `fk-hobby-user_id` FOREIGN KEY (`user_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `fk-information-user_id` FOREIGN KEY (`user_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `operation`
--
ALTER TABLE `operation`
  ADD CONSTRAINT `fk-operation-user_id` FOREIGN KEY (`user_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `organization_request_abilities`
--
ALTER TABLE `organization_request_abilities`
  ADD CONSTRAINT `FK_assigned_list` FOREIGN KEY (`organization_request_id`) REFERENCES `organization_requests` (`id`),
  ADD CONSTRAINT `organization_request_abilities_ibfk_1` FOREIGN KEY (`ability_id`) REFERENCES `capacity_dictionary` (`id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk-colleges` FOREIGN KEY (`college_id`) REFERENCES `colleges` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-experience` FOREIGN KEY (`experience_id`) REFERENCES `experience` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-hobby` FOREIGN KEY (`hobby_id`) REFERENCES `hobby` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-information` FOREIGN KEY (`information_id`) REFERENCES `information` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-operation` FOREIGN KEY (`operation_id`) REFERENCES `operation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk-target` FOREIGN KEY (`target_id`) REFERENCES `target` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD CONSTRAINT `student_registration_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `organization_requests` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `student_skill_profile`
--
ALTER TABLE `student_skill_profile`
  ADD CONSTRAINT `FK_student_skill_capacity` FOREIGN KEY (`ability_id`) REFERENCES `capacity_dictionary` (`id`),
  ADD CONSTRAINT `student_skill_profile_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `target`
--
ALTER TABLE `target`
  ADD CONSTRAINT `fk-target-user_id` FOREIGN KEY (`user_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
