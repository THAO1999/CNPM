-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 03, 2020 lúc 03:28 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `intern`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `assigned_table`
--

CREATE TABLE `assigned_table` (
  `id` int(11) NOT NULL,
  `organization_request_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `assigned_table`
--

INSERT INTO `assigned_table` (`id`, `organization_request_id`, `student_id`, `start_date`, `end_date`, `status`, `create_date`) VALUES
(5, 185, 2, NULL, NULL, NULL, NULL),
(6, 195, 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `capacity_dictionary`
--

CREATE TABLE `capacity_dictionary` (
  `id` int(11) NOT NULL,
  `ability_name` varchar(20) NOT NULL,
  `aibility_type` varchar(20) NOT NULL,
  `ability_note` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `capacity_dictionary`
--

INSERT INTO `capacity_dictionary` (`id`, `ability_name`, `aibility_type`, `ability_note`) VALUES
(2, 'JAVA', 'ngôn ngữ lập trinh', '10'),
(3, 'PHP', 'ngôn ngữ lập trinh', '10'),
(4, 'C++', 'ngôn ngữ lập trinh', '10'),
(7, 'Python', 'ngôn ngữ lập trinh', '10'),
(8, '.NET', 'Framework', '10'),
(9, 'Laravel', 'Framework', '10'),
(10, 'Yii2', 'Framework', '10'),
(11, 'ReactJS', 'Framework', '10'),
(12, 'Angular', 'Framework', '10'),
(13, 'VueJS', 'Framework', '10'),
(14, 'Android', '', '10'),
(15, 'Ios', 'mobile', '10'),
(16, 'React Native', 'Framework', '10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `request_id` int(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `submission_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `student_id`, `request_id`, `content`, `submission_date`) VALUES
(1, 2, 187, 'thuddđss', NULL),
(3, 3, 187, 'cc', NULL),
(4, 2, 187, 'ss', NULL),
(5, 2, 187, 'ss44', NULL),
(6, 2, 187, 'ss44', NULL),
(7, 2, 187, 'ss44', NULL),
(8, 2, 187, 'ss', NULL),
(9, 2, 187, 'ss', NULL),
(10, 2, 187, 'ss', NULL),
(11, 2, 187, 'hihi', NULL),
(12, 2, 187, 'hihi', NULL),
(13, 2, 187, 'hihi', NULL),
(14, 2, 187, 'hih', NULL),
(15, 2, 195, 'tao đéo thích mày', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `enterprise`
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
  `description` varchar(10000) DEFAULT NULL,
  `gross_revenue` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `enterprise`
--

INSERT INTO `enterprise` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `date_establish`, `employee_count`, `imageFile`, `cover_img`, `description`, `gross_revenue`, `status`, `created_at`, `updated_at`, `address`) VALUES
(7, 'DN', 'OAhvxe6ZAfH_wm6UV65KeTcRUxP1iL9H', '$2y$13$TetBQEsjKbTki6TKBrZQuuwv8R.e..TTylQKl4cBoXDcgqyGhPs3C', 'tk3zo50I7hw75fJT1K3YipCxvPZAfhUH_1602250935', 'dn@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 10, '2020-10-09', NULL, NULL),
(8, 'DN2', 'kr7YQ3xDie0lzkVSBAIVIflXltGhCQNf', '$2y$13$/ryCmxd1aD1hYuu3lRlE9.zKx5fSw2tRpMLbz1BsFJicf8kdomVbe', 'AEjfROvbH_jqTBmiCEYa1IYycI0-oEV0_1602250951', 'dn2@gmail.com', NULL, 12, 'anhbiafb.jpg', 'anhbiafb.jpg', ' FPT Software is part of FPT Corporation (FPT – HoSE) – the global leading technology, outsourcing and IT services group headquartered in Vietnam with nearly US$2 billion in revenue and more than 13,000 employees. Qualified with CMMI Level 5 & ISO 27001:2013, ASPICE LEVEL 3, FPT Software delivers world-class services in Smart factory, Digital platform, RPA, AI, IoT, Enterprise Mobilization, Cloud, AR/VR, Embedded System, Managed service, Testing, Platform modernization, Business Applications, Application Service, BPO and more services globally from delivery centers across the United States, Japan, Europe, Korea, China, Australia, Vietnam and the Asia Pacific. \"', NULL, 10, '2020-10-09', NULL, '310 TrầnDuy Hưng,Hà Nội'),
(9, 'dn3', 'Z5ly4_BjOknRvu_X1d1nBcG0vdkduayx', '$2y$13$SceAkzBZmvYP07wR/vrX/u5FtOthBepjHRFAi2po0cHufoi4xpgX6', 'w83sDzOzE8Izr_dLyjn8UCH6wVBSammU_1603010904', 'dn@gmal.com', NULL, NULL, NULL, NULL, NULL, NULL, 10, '2020-10-18', NULL, NULL),
(10, 'dn4', 'BJfJ1VCfmjZa2GghSmHGPnH3hcA4WL64', '$2y$13$VnveNusCqkmu2xo0e2olc.WlbXmDVC1CMZmjtQEHbU.MsXqmyf4qy', 'MRgoqd_VC1EzVS2crngKft5fbI1TlMti_1604298364', 'd33n@gmal.com', NULL, NULL, NULL, NULL, NULL, NULL, 10, '2020-11-02', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1602215405),
('m130524_201442_init', 1602215408),
('m190124_110200_add_verification_token_column_to_user_table', 1602215408),
('m201007_082621_create_news_table_student', 1602215408),
('m201007_082857_create_news_table_enterprise', 1602215409),
('m201007_083831_create_news_table_teachers', 1602215409);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `organization_requests`
--

CREATE TABLE `organization_requests` (
  `id` int(11) NOT NULL,
  `organization_id` int(11) NOT NULL,
  `subject` varchar(40) NOT NULL,
  `short_description` varchar(40) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_submitted` date DEFAULT NULL,
  `status` int(11) NOT NULL,
  `imageFile` varchar(50) DEFAULT NULL,
  `cancel` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `organization_requests`
--

INSERT INTO `organization_requests` (`id`, `organization_id`, `subject`, `short_description`, `amount`, `date_submitted`, `status`, `imageFile`, `cancel`) VALUES
(183, 8, 'Tuyen dung PHP', 'hong can ', 1111, '2020-10-14', 0, 'anhbiafb.jpg', 'vì tao đéo thích mày'),
(184, 8, 'Tuyen dung C', 'hong can ', 1111, NULL, 10, 'toshiba.png', NULL),
(185, 8, 'Tuyen Dung .NET', '222', 12, NULL, 10, 'net.jpg', NULL),
(186, 8, 'Tuyen dung JS', '233', 1111, NULL, 0, 'js.jpg', NULL),
(187, 8, 'Tuyen dung C++', 'wwwww', 11, NULL, 10, 'java.jpg', NULL),
(188, 8, 'Tuyển dụng 45', 'jhihi', 12, NULL, 2, 'c#.jpg', NULL),
(189, 8, 'Tuyển dụng 45', 'jhihi', 12, NULL, 0, 'c#.jpg', NULL),
(190, 8, 'Tuyển dụng 45', 'jhihi', 12, NULL, 2, 'c#.jpg', NULL),
(191, 8, 'Tuyển dụng 45', 'jhihi', 12, NULL, 2, 'java.jpg', NULL),
(192, 8, 'Tuyển dụng 45', 'jhihi', 12, NULL, 2, 'java.jpg', NULL),
(193, 8, 'Tuyển dụng thực tập PHP', 'jhihi', 2, NULL, 0, 'php.jpg', NULL),
(194, 8, 'Tuyển dụng thực tập C', 'không có gì', 3, NULL, 10, 'java.jpg', NULL),
(195, 8, 'Tuyển dụng senior PHP', 'đéo có gì để mo tả cả', 12, NULL, 10, 'php.jpg', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `organization_request_abilities`
--

CREATE TABLE `organization_request_abilities` (
  `id` int(11) NOT NULL,
  `organization_request_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_required` int(11) DEFAULT NULL,
  `note` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `organization_request_abilities`
--

INSERT INTO `organization_request_abilities` (`id`, `organization_request_id`, `ability_id`, `ability_required`, `note`) VALUES
(95, 183, 2, NULL, NULL),
(96, 183, 3, NULL, NULL),
(97, 183, 4, NULL, NULL),
(98, 184, 2, NULL, NULL),
(99, 185, 2, NULL, NULL),
(100, 185, 3, NULL, NULL),
(102, 185, 7, NULL, NULL),
(103, 185, 8, NULL, NULL),
(104, 185, 9, NULL, NULL),
(105, 186, 11, NULL, NULL),
(106, 186, 12, NULL, NULL),
(107, 187, 2, NULL, NULL),
(108, 187, 3, NULL, NULL),
(109, 188, 4, NULL, NULL),
(110, 189, 4, NULL, NULL),
(111, 190, 4, NULL, NULL),
(112, 191, 3, NULL, NULL),
(113, 192, 3, NULL, NULL),
(114, 193, 3, NULL, NULL),
(115, 194, 4, NULL, NULL),
(116, 195, 3, NULL, NULL),
(117, 195, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
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
  `phone` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `date_of_birth`, `class_name`, `imageFile`, `status`, `created_at`, `updated_at`, `address`, `phone`) VALUES
(1, 'sinhvien1', '2H5i41B73dCNh7xcg-doAFZMKU52aExX', '$2y$13$cpKhcMgVuwdOD/Eivf8YAOf8CtDK4R0Cf6TxGUCKi0w/Mhl/rbcV.', 'e-1Bz1MrfaCt3nQT8ifH-t0pEswo-2qx_1603339800', 'tathao@gmail.com', NULL, 'k62A4', '', 10, '2020-10-09', NULL, '87 hus', 939393),
(2, 'sinhvien2', '1ENdeOQLbsXIehBY8C5rlU2IzKTNf7-L', '$2y$13$Faq7AVkfMvbxF3MuyrIaxOOyClloUsVaOVDQL3zdnQ5eLx8lSAQGu', 'VVmM51cEOG-WbHj-XJlLAyPJoAwe4ePn_1602224862', 'tathao99@gmail.com', NULL, 'k62A43', 'logo.png', 10, '2020-10-09', NULL, '63 duy tan', 585640443),
(3, 'sinhvien3', '_aR6cHHVQs_1q-EWKb8P0r5zGwxT_MoF', '$2y$13$uRwbkU6Iw1l71Co4HjkMhuw/vwQDsz0mwoDg387KyIn6KgiEYsqbK', 'VVPMWd18z3pay3dnKakYlmmenbHBPNop_1604045137', 'tathaoee@gmail.com', NULL, 'k62A5', NULL, 10, '2020-10-30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `submit_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student_skill_profile`
--

CREATE TABLE `student_skill_profile` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `ability_id` int(11) NOT NULL,
  `ability_rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `student_skill_profile`
--

INSERT INTO `student_skill_profile` (`id`, `student_id`, `ability_id`, `ability_rate`) VALUES
(4, 2, 12, 10),
(5, 2, 7, 10),
(6, 2, 4, 10),
(7, 2, 2, 90),
(8, 2, 7, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachers`
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
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `teachers`
--

INSERT INTO `teachers` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `img`, `sex`, `status`, `created_at`, `updated_at`) VALUES
(1, 'giaovien1', 'U8qc01y0abdg8r09UY7RbQI67ZIHPyl2', '$2y$13$cnV8CoNOPM0oHVQCvzm7feD2IgC8fn9Xt4Ei3zKay8Un2p2ThrKcq', 'Dq7NcjQ_3F-rVLy4g90XjLdqITSkJOI5_1602219551', 'taminhthao@gmail.com', NULL, 4, 10, NULL, '2020-10-09'),
(2, 'giaovien2', 'rqlrC6_Ov9nMgRVpZnKkV0KyRLKU6w35', '$2y$13$YMbmgdCSbrMCgliIiqXtWeZ9vI1okeEsTU/Gj2M7.DcfzQlETxnIC', '48cQScQr18vLwsPOayxMPAr8nqjb4F3s_1602216668', 'taminhthao99@gmail.com', NULL, 42, 10, '2020-10-09', NULL),
(4, 'giaovien4', 'ZQVy7GSiTYo2yu_gqKmUSN_4YwVYjRo2', '$2y$13$PwZHtNDxF0WAa0mu36s9Guw6Nq46zdNkRQFg8CQcGoP7A1MxQQz3.', 'hX6zcBtpLl-k_07RYHEztAiH4qAVdOZT_1602218469', 'taminhthao22@gmail.com', NULL, 4, 10, '2020-10-09', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
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
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `assigned_table`
--
ALTER TABLE `assigned_table`
  ADD PRIMARY KEY (`id`,`organization_request_id`,`student_id`) USING BTREE,
  ADD KEY `FK_assigned_student_skill` (`student_id`),
  ADD KEY `FK_assigned_enterprise_request` (`organization_request_id`);

--
-- Chỉ mục cho bảng `capacity_dictionary`
--
ALTER TABLE `capacity_dictionary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`,`student_id`,`request_id`) USING BTREE,
  ADD KEY `student_id` (`student_id`),
  ADD KEY `request_id` (`request_id`);

--
-- Chỉ mục cho bảng `enterprise`
--
ALTER TABLE `enterprise`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Chỉ mục cho bảng `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Chỉ mục cho bảng `organization_requests`
--
ALTER TABLE `organization_requests`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `organization_request_abilities`
--
ALTER TABLE `organization_request_abilities`
  ADD PRIMARY KEY (`id`,`organization_request_id`,`ability_id`),
  ADD KEY `FK_assigned_list` (`organization_request_id`),
  ADD KEY `ability_id` (`ability_id`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Chỉ mục cho bảng `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`,`student_id`,`request_id`) USING BTREE,
  ADD KEY `FK_student_registration_skill` (`request_id`),
  ADD KEY `student_registration_ibfk_2` (`student_id`);

--
-- Chỉ mục cho bảng `student_skill_profile`
--
ALTER TABLE `student_skill_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ability_id` (`ability_id`),
  ADD KEY `student_skill_profile_ibfk_1` (`student_id`);

--
-- Chỉ mục cho bảng `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `assigned_table`
--
ALTER TABLE `assigned_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `capacity_dictionary`
--
ALTER TABLE `capacity_dictionary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `enterprise`
--
ALTER TABLE `enterprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `organization_requests`
--
ALTER TABLE `organization_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT cho bảng `organization_request_abilities`
--
ALTER TABLE `organization_request_abilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `student_skill_profile`
--
ALTER TABLE `student_skill_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `assigned_table`
--
ALTER TABLE `assigned_table`
  ADD CONSTRAINT `FK_assigned_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `assigned_table_ibfk_1` FOREIGN KEY (`organization_request_id`) REFERENCES `organization_requests` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`request_id`) REFERENCES `organization_requests` (`id`);

--
-- Các ràng buộc cho bảng `organization_request_abilities`
--
ALTER TABLE `organization_request_abilities`
  ADD CONSTRAINT `FK_assigned_list` FOREIGN KEY (`organization_request_id`) REFERENCES `organization_requests` (`id`),
  ADD CONSTRAINT `organization_request_abilities_ibfk_1` FOREIGN KEY (`ability_id`) REFERENCES `capacity_dictionary` (`id`);

--
-- Các ràng buộc cho bảng `student_registration`
--
ALTER TABLE `student_registration`
  ADD CONSTRAINT `student_registration_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `organization_requests` (`id`),
  ADD CONSTRAINT `student_registration_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Các ràng buộc cho bảng `student_skill_profile`
--
ALTER TABLE `student_skill_profile`
  ADD CONSTRAINT `FK_student_skill_capacity` FOREIGN KEY (`ability_id`) REFERENCES `capacity_dictionary` (`id`),
  ADD CONSTRAINT `student_skill_profile_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
