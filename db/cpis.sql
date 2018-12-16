-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2018 at 02:43 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpis`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_detail`
--

CREATE TABLE `app_detail` (
  `ad_id` int(11) NOT NULL COMMENT 'รหัสผู้เกี่ยวข้องนัดหมาย',
  `app_id` int(11) NOT NULL COMMENT 'รหัสนัดหมาย',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `ad_appdate` date NOT NULL COMMENT 'วันที่บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `his_address`
--

CREATE TABLE `his_address` (
  `ha_id` int(11) NOT NULL COMMENT 'รหัสที่อยู่',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `ha_address` varchar(100) NOT NULL COMMENT 'ข้อมูลที่อยู่',
  `ha_tambol` varchar(100) NOT NULL COMMENT 'ตำบล',
  `ha_amphur` varchar(100) NOT NULL COMMENT 'อำเภอ',
  `ha_province` varchar(100) NOT NULL COMMENT 'จังหวัด',
  `ha_zipcode` varchar(5) NOT NULL COMMENT 'รหัสไปรษณีย์',
  `ha_status` varchar(1) NOT NULL COMMENT 'สถานะ',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึก',
  `ha_appdate` date NOT NULL COMMENT 'วันที่บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `his_address`
--

INSERT INTO `his_address` (`ha_id`, `emp_num`, `ha_address`, `ha_tambol`, `ha_amphur`, `ha_province`, `ha_zipcode`, `ha_status`, `user_upd`, `ha_appdate`) VALUES
(1, '0000014', '557/846 แมเนอร์สนามบินน้ำ', 'บางกระสอ', 'เมืองนนทบุรี', 'นนทบุรี', '11000', '2', '9999999', '2018-12-15'),
(2, '0000014', '129 ม.6', 'ชมพู', 'เมือง', 'ลำปาง', '52100', '1', '9999999', '2018-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `his_children`
--

CREATE TABLE `his_children` (
  `hc_id` int(11) NOT NULL COMMENT 'รหัสข้อมูลบุตร',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `hc_num` int(11) NOT NULL COMMENT 'ลำดับ',
  `hc_name` varchar(200) NOT NULL COMMENT 'ชื่อสกุล',
  `hc_birthdate` date NOT NULL COMMENT 'วันเกิด',
  `hc_appdate` date NOT NULL COMMENT 'วันที่บันทึก',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `his_discipline`
--

CREATE TABLE `his_discipline` (
  `hdi_id` int(11) NOT NULL COMMENT 'รหัสการรับโทษ',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `hdi_year` varchar(5) NOT NULL COMMENT 'ปีที่โดนโทษ',
  `hdi_title` varchar(200) NOT NULL COMMENT 'โทษทางวินัย',
  `hdi_doc` date NOT NULL COMMENT 'เอกสารอ้างอิง',
  `hdi_date` date NOT NULL COMMENT 'ลงวันที่',
  `hdi_appdate` date NOT NULL COMMENT 'วันที่ขึ้นทะเบียน',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `his_doccer`
--

CREATE TABLE `his_doccer` (
  `hd_id` int(11) NOT NULL COMMENT 'รหัสใบอนุญาต',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `hd_num` int(11) NOT NULL COMMENT 'ลำดับ',
  `hd_school` varchar(100) NOT NULL COMMENT 'หน่วยงานที่ออกใบอนุญาต',
  `hd_type` varchar(100) NOT NULL COMMENT 'ประเภทวิชาชีพ',
  `hd_expd` date NOT NULL COMMENT 'วันที่หมดอายุ',
  `hd_incdate` date NOT NULL COMMENT 'วันที่ขึ้นทะเบียน',
  `hd_appdate` date NOT NULL COMMENT 'วันที่บันทึก',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `his_doccer`
--

INSERT INTO `his_doccer` (`hd_id`, `emp_num`, `hd_num`, `hd_school`, `hd_type`, `hd_expd`, `hd_incdate`, `hd_appdate`, `user_upd`) VALUES
(1, '0000014', 1, 'ddddddd', 'ddddd', '2019-07-18', '2016-07-01', '2018-12-14', '0000014');

-- --------------------------------------------------------

--
-- Table structure for table `his_education`
--

CREATE TABLE `his_education` (
  `he_id` int(11) NOT NULL COMMENT 'รหัสประวัติการศึกษา',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `he_num` int(11) NOT NULL COMMENT 'ลำดับ',
  `he_school` varchar(200) NOT NULL COMMENT 'สถานศึกษา',
  `he_faculty` varchar(200) NOT NULL COMMENT 'คณะ',
  `he_faculty2` varchar(200) NOT NULL COMMENT 'สาขา',
  `he_level` varchar(200) NOT NULL COMMENT 'วุฒิการศึกษา',
  `he_date` date NOT NULL COMMENT 'วันที่ได้รับวุฒิ',
  `he_top` varchar(100) NOT NULL COMMENT 'เกียรตินิยม',
  `he_doc` varchar(100) NOT NULL COMMENT 'เอกสารประกอบ',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึก',
  `he_appdate` date NOT NULL COMMENT 'วันที่บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `his_education`
--

INSERT INTO `his_education` (`he_id`, `emp_num`, `he_num`, `he_school`, `he_faculty`, `he_faculty2`, `he_level`, `he_date`, `he_top`, `he_doc`, `user_upd`, `he_appdate`) VALUES
(2, '0000014', 1, 'มหาวิทยาลัยแม่โจ้', 'บริหารธุรกิจ', 'เทคโนโลยีสารสนเทศทางธุรกิจ', 'บธ.บ', '2011-03-14', '', '', '9999999', '2018-12-14');

-- --------------------------------------------------------

--
-- Table structure for table `his_leave`
--

CREATE TABLE `his_leave` (
  `hl_id` int(11) NOT NULL COMMENT 'รหัสการลา',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `hl_type` varchar(1) NOT NULL COMMENT 'ประเภทการลา',
  `hl_title` varchar(100) NOT NULL COMMENT 'สาเหตุการลา',
  `hl_sdate` date NOT NULL COMMENT 'วันที่เริ่มลา',
  `hl_date` date NOT NULL COMMENT 'สิ้นสุดการลา',
  `boss_1` varchar(7) NOT NULL COMMENT 'หัวหน้างานระดับที่ 1',
  `boss_2` varchar(7) NOT NULL COMMENT 'หัวหน้างานระดับที่ 2',
  `boss_3` varchar(7) NOT NULL COMMENT 'หัวหน้างานระดับที่ 3',
  `boss1_approve` date NOT NULL COMMENT 'หัวหน้า 1 อนุมัติ',
  `boss2_approve` date NOT NULL COMMENT 'หัวหน้า 2 อนุมัติ',
  `boss3_approve` date NOT NULL COMMENT 'หัวหน้า 3 อนุมัติ',
  `boss1_status` varchar(1) NOT NULL COMMENT 'สถานะการอนุมัติ',
  `boss2_status` varchar(1) NOT NULL COMMENT 'สถานะการอนุมัติ',
  `boss3_status` varchar(1) NOT NULL COMMENT 'สถานะการอนุมัติ',
  `boss1_remark` longtext NOT NULL COMMENT 'หมายเหตุ หัวหน้า 1',
  `boss2_remark` longtext NOT NULL COMMENT 'หมายเหตุ หัวหน้า 2',
  `boss3_remark` longtext NOT NULL COMMENT 'หมายเหตุ หัวหน้า 3',
  `hl_appdate` date NOT NULL COMMENT 'วันที่ยื่นใบลา',
  `hl_remark` longtext NOT NULL COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `his_leave`
--

INSERT INTO `his_leave` (`hl_id`, `emp_num`, `hl_type`, `hl_title`, `hl_sdate`, `hl_date`, `boss_1`, `boss_2`, `boss_3`, `boss1_approve`, `boss2_approve`, `boss3_approve`, `boss1_status`, `boss2_status`, `boss3_status`, `boss1_remark`, `boss2_remark`, `boss3_remark`, `hl_appdate`, `hl_remark`) VALUES
(1, '0000014', '1', 'ทดสอบ111', '2018-12-17', '2018-12-17', '0000044', '0000052', '0000066', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '2018-12-16', ''),
(2, '0000014', '2', 'xxxxxxxxxxxxxxxxxxxxxxx', '2018-12-26', '2018-12-28', '0000044', '0000052', '0000066', '2018-12-16', '0000-00-00', '0000-00-00', 'Y', '', '', '', '', '', '2018-12-16', '');

-- --------------------------------------------------------

--
-- Table structure for table `his_marry`
--

CREATE TABLE `his_marry` (
  `hm_id` int(11) NOT NULL COMMENT 'รหัสคู่สมรส',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `hm_num` int(11) NOT NULL COMMENT 'ลำดับ',
  `hm_title` varchar(3) NOT NULL COMMENT 'คำนำหน้าชื่อ',
  `hm_fname` varchar(100) NOT NULL COMMENT 'ชื่อ',
  `hm_sname` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `hm_birthdate` date NOT NULL COMMENT 'วันเกิด',
  `hm_incdate` date NOT NULL COMMENT 'วันที่แจ้ง',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึ',
  `hm_appdate` date NOT NULL COMMENT 'วันที่บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `his_name`
--

CREATE TABLE `his_name` (
  `hn_id` int(11) NOT NULL COMMENT 'รหัสการเปลี่ยนชื่อ',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `hn_num` int(11) NOT NULL COMMENT 'ลำดับ',
  `hn_title` varchar(3) NOT NULL COMMENT 'คำนำหน้าชื่อ',
  `hn_fname` varchar(100) NOT NULL COMMENT 'ชื่อ',
  `hn_sname` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `hn_change` date NOT NULL COMMENT 'วันที่เปลี่ยน',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึก',
  `hn_appdate` date NOT NULL COMMENT 'วันที่บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `his_position`
--

CREATE TABLE `his_position` (
  `hp_id` int(11) NOT NULL COMMENT 'รหัสการดำรงตำแหน่ง',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `hp_date` date NOT NULL COMMENT 'วันที่ได้เลื่อน',
  `hp_step` int(11) NOT NULL COMMENT 'ลำดับของประวัติ',
  `hp_pos` varchar(5) NOT NULL COMMENT 'รหัสตำแหน่ง',
  `hp_ponum` varchar(5) NOT NULL COMMENT 'เลขที่ตำแหน่ง',
  `hp_level` varchar(3) NOT NULL COMMENT 'รหัสระดับ',
  `hp_salary` decimal(10,2) NOT NULL COMMENT 'เงินเดือน',
  `hp_doc` varchar(200) NOT NULL COMMENT 'เลขที่หนังสืออ้างอิง',
  `hp_doc_date` date NOT NULL COMMENT 'เอกสารอ้างอิงวันที่',
  `hp_depcode` varchar(7) NOT NULL COMMENT 'สังกัด',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึก',
  `hp_appdate` date NOT NULL COMMENT 'วันที่บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `his_position`
--

INSERT INTO `his_position` (`hp_id`, `emp_num`, `hp_date`, `hp_step`, `hp_pos`, `hp_ponum`, `hp_level`, `hp_salary`, `hp_doc`, `hp_doc_date`, `hp_depcode`, `user_upd`, `hp_appdate`) VALUES
(1, '0000014', '2017-06-01', 1, '30112', '2609', '501', '17500.00', 'ศย. 300.002/123', '2017-06-05', '1080000', '9999999', '2018-12-13'),
(4, '0000014', '2018-10-01', 2, '30112', '2609', '502', '20000.00', 'xxxxxxx', '2018-10-01', '1080000', '0000000', '2018-12-14'),
(5, '0000014', '2018-11-01', 3, '30112', '2609', '502', '20500.00', 'ggggggg', '2018-11-02', '1080000', '0000000', '2018-12-14'),
(6, '0000044', '2018-09-03', 1, '30101', '1021', '401', '11200.00', 'กก 2300', '2018-08-29', '1080000', '9999999', '2018-12-14'),
(7, '0000044', '2018-10-10', 2, '30101', '1021', '401', '11500.00', 'ดกเหกด', '2018-10-10', '1080000', '9999999', '2018-12-14'),
(8, '0000044', '2018-10-31', 3, '30101', '1021', '402', '15000.00', 'กด30023', '2018-10-31', '1080000', '9999999', '2018-12-14'),
(9, '0000052', '2017-02-01', 1, '30102', '2301', '401', '11000.00', 'vfvvf', '2017-02-01', '1010000', '9999999', '2018-12-15'),
(10, '0000052', '2018-12-14', 2, '30102', '2301', '401', '11500.00', 'gggggg', '2018-12-14', '1010000', '9999999', '2018-12-15'),
(11, '0000066', '1986-02-12', 1, '20101', '1111', '602', '40000.00', 'ทดสอบ', '1986-02-12', '1000000', '9999999', '2018-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `his_training`
--

CREATE TABLE `his_training` (
  `ht_id` int(11) NOT NULL COMMENT 'รหัสฝึกอบรม',
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `ht_num` int(11) NOT NULL COMMENT 'ลำดับ',
  `ht_title` varchar(200) NOT NULL COMMENT 'หัวข้อฝึกอบรม',
  `ht_school` varchar(200) NOT NULL COMMENT 'สถาบัน',
  `ht_date` varchar(100) NOT NULL COMMENT 'วันที่อบรม',
  `ht_doc` date NOT NULL COMMENT 'เอกสารประกอบ',
  `ht_appdate` date NOT NULL COMMENT 'วันที่บันทึก',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `his_training`
--

INSERT INTO `his_training` (`ht_id`, `emp_num`, `ht_num`, `ht_title`, `ht_school`, `ht_date`, `ht_doc`, `ht_appdate`, `user_upd`) VALUES
(1, '0000014', 1, 'อบรมการใช้งานโปแกรม', 'ศาลอาญา', '14 ธ.ค. 61 (3 ชม.)', '0000-00-00', '2018-12-14', '0000014');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE `offices` (
  `off_code` varchar(7) NOT NULL COMMENT 'รหัสสังกัด',
  `off_name` varchar(300) NOT NULL COMMENT 'ชื่อสังกัด',
  `off_active` varchar(1) NOT NULL COMMENT 'สถานะการใช้งาน',
  `off_appdate` date NOT NULL COMMENT 'วันที่บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`off_code`, `off_name`, `off_active`, `off_appdate`) VALUES
('1000000', 'สำนักอำนวยการประจำศาลอาญา', '1', '2018-12-01'),
('1010000', 'ส่วนช่วยอำนวยการ', '1', '2018-12-01'),
('1010100', 'ฝ่ายบริหารทั่วไป ส่วนช่วยอำนวยการ', '1', '2018-12-01'),
('1010101', 'งานสารบรรณ ฝ่ายบริหารทั่วไป ส่วนช่วยอำนวยการ', '1', '2018-12-01'),
('1020000', 'ส่วนช่วยพิจารณาคดี', '1', '2018-12-01'),
('1030000', 'ส่วนจัดการงานคดี', '1', '2018-12-01'),
('1040000', 'ส่วนคลัง', '1', '2018-12-01'),
('1050000', 'ส่วนบริการประชาชน', '1', '2018-12-01'),
('1060000', 'ส่วนไกล่เกลี่ยและประนอมข้อพิพาท', '1', '2018-12-01'),
('1070000', 'ส่วนบังคับคดีนายประกัน', '1', '2018-12-01'),
('1080000', 'ส่วนเทคโนโลยีสารสนเทศ', '1', '2018-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `postline`
--

CREATE TABLE `postline` (
  `PL_CODE` char(5) NOT NULL,
  `PW_CODE` char(2) DEFAULT NULL,
  `PL_NAME` varchar(50) NOT NULL,
  `PL_SH_NAME` varchar(50) DEFAULT NULL,
  `PL_ACTIVE` char(1) NOT NULL,
  `UPD_USER` char(7) DEFAULT NULL,
  `UPD_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postline`
--

INSERT INTO `postline` (`PL_CODE`, `PW_CODE`, `PL_NAME`, `PL_SH_NAME`, `PL_ACTIVE`, `UPD_USER`, `UPD_DATE`) VALUES
('10101', '01', 'นักบริหาร', 'นักบริหาร', '1', '9999', '2018-11-20 10:00:00'),
('10102', '01', 'ผู้ตรวจราชการ', 'ผู้ตรวจราชการ', '1', '9999', '2018-11-20 10:00:00'),
('10103', '01', 'ผู้ช่วยเลขาธิการสำนักงานศาลยุติธรรม', 'ผู้ช่วยเลขาธิการสำนักงานศาลยุติธรรม', '1', '9999', '2018-11-20 10:00:00'),
('20101', '02', 'ผู้อำนวยการ', 'ผู้อำนวยการ', '1', '9999', '2018-11-20 10:00:00'),
('30101', '03', 'เจ้าพนักงานศาลยุติธรรม', 'จพ.ศาลยุติธรรม', '1', '9999', '2018-11-20 10:00:00'),
('30102', '03', 'เจ้าพนักงานคดี', 'จพ.คดี', '1', '9999', '2018-11-20 10:00:00'),
('30103', '03', 'นักวิเทศสัมพันธ์', 'นักวิเทศสัมพันธ์', '1', '9999', '2018-11-20 10:00:00'),
('30104', '03', 'นักวิชาการพัสดุ', 'นวช.พัสดุ', '1', '9999', '2018-11-20 10:00:00'),
('30105', '03', 'นักวิเคราะห์นโยบายและแผน', 'นวค.นโยบายและแผน', '1', '9999', '2018-11-20 10:00:00'),
('30106', '03', 'บรรณารักษ์', 'บรรณารักษ์', '1', '9999', '2018-11-20 10:00:00'),
('30107', '03', 'นักวิชาการเงินและบัญชี', 'นวช.การเงินและบัญชี', '1', '9999', '2018-11-20 10:00:00'),
('30108', '03', 'นักทรัพยากรบุคคล', 'นทก.บุคคล', '1', '9999', '2018-11-20 10:00:00'),
('30109', '03', 'นักประชาสัมพันธ์', 'นักประชาสัมพันธ์', '1', '9999', '2018-11-20 10:00:00'),
('30110', '03', 'นักวิชาการตรวจสอบภายใน', 'นวช.ตรวจสอบภายใน', '1', '9999', '2018-11-20 10:00:00'),
('30112', '03', 'นักวิชาการคอมพิวเตอร์', 'นวช.คอมพิวเตอร์', '1', '9999', '2018-11-20 10:00:00'),
('30113', '03', 'นิติกร', 'นิติกร', '1', '9999', '2018-11-20 10:00:00'),
('30114', '03', 'สถาปนิก', 'สถาปนิก', '1', '9999', '2018-11-20 10:00:00'),
('30115', '03', 'วิศวกรโยธา', 'วิศวกรโยธา', '1', '9999', '2018-11-20 10:00:00'),
('30116', '03', 'นักจัดการงานทั่วไป', 'นักจัดการงานทั่วไป', '1', '9999', '2018-11-20 10:00:00'),
('30117', '03', 'นักจิตวิทยา', 'นักจิตวิทยา', '1', '9999', '2018-11-20 10:00:00'),
('30118', '03', 'วิศวกรไฟฟ้า', 'วิศวกรไฟฟ้า', '1', '9999', '2018-11-20 10:00:00'),
('30119', '03', 'วิศวกรเครื่องกล', 'วิศวกรเครื่องกล', '1', '9999', '2018-11-20 10:00:00'),
('30120', '03', 'มัณฑนากร', 'มัณฑนากร', '1', '9999', '2018-11-20 10:00:00'),
('40101', '04', 'เจ้าหน้าที่ศาลยุติธรรม', 'จท.ศาลยุติธรรม', '1', '9999', '2018-11-20 10:00:00'),
('40102', '04', 'นายช่างศิลป์', 'นายช่างศิลป์', '1', '9999', '2018-11-20 10:00:00'),
('40103', '04', 'เจ้าพนักงานธุรการ', 'จพ.ธุรการ', '1', '9999', '2018-11-20 10:00:00'),
('40104', '04', 'นายช่างโยธา', 'นายช่างโยธา', '1', '9999', '2018-11-20 10:00:00'),
('40105', '04', 'เจ้าพนักงานโสตทัศนศึกษา', 'จพ.โสตทัศนศึกษา', '1', '9999', '2018-11-20 10:00:00'),
('40106', '04', 'เจ้าพนักงานการเงินและบัญชี', 'จพ.การเงินและบัญชี', '1', '9999', '2018-11-20 10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `postmgt`
--

CREATE TABLE `postmgt` (
  `PM_CODE` char(3) NOT NULL,
  `PM_NAME` varchar(50) NOT NULL,
  `PM_SH_NAME` varchar(50) DEFAULT NULL,
  `PM_ACTIVE` char(1) NOT NULL,
  `UPD_USER` char(7) DEFAULT NULL,
  `UPD_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `postmgt`
--

INSERT INTO `postmgt` (`PM_CODE`, `PM_NAME`, `PM_SH_NAME`, `PM_ACTIVE`, `UPD_USER`, `UPD_DATE`) VALUES
('000', 'ยกเว้นคุณสมบัติ', 'ยกเว้นคุณสมบัติ', '0', '0000000', '2018-11-21 07:09:28'),
('101', 'อธิบดี', 'อธิบดี', '1', '', '2018-11-21 07:09:49'),
('201', 'ผู้อำนวยการสำนัก', 'ผู้อำนวยการสำนัก', '1', '', '2018-11-21 07:09:55'),
('301', 'หัวหน้าส่วน', 'หัวหน้าส่วน', '1', '', '2018-11-21 07:10:05'),
('302', 'หัวหน้างาน', 'หัวหน้างาน', '1', '', '2018-11-21 07:10:09'),
('303', 'หัวหน้าฝ่าย', 'หัวหน้าฝ่าย', '1', '', '2018-11-21 07:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `posttype`
--

CREATE TABLE `posttype` (
  `PG_CODE` char(1) NOT NULL,
  `PT_CODE` char(3) NOT NULL,
  `PT_NAME` varchar(30) NOT NULL,
  `PT_SH_NAME` varchar(30) DEFAULT NULL,
  `PT_ACTIVE` char(1) NOT NULL,
  `UPD_USER` char(7) DEFAULT NULL,
  `UPD_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posttype`
--

INSERT INTO `posttype` (`PG_CODE`, `PT_CODE`, `PT_NAME`, `PT_SH_NAME`, `PT_ACTIVE`, `UPD_USER`, `UPD_DATE`) VALUES
('1', '101', 'ทั่วไปแบบธรรมดา', '', '1', '0000000', '2009-03-30 01:31:31'),
('1', '102', 'ทั่วไปแบบใช้ประสบการณ์', 'ว', '1', '0000003', '2009-03-30 01:31:31'),
('1', '103', 'ทั่วไป(3-5)', '', '1', '0000000', '2009-03-30 01:31:31'),
('2', '201', 'วิชาชีพเฉพาะ', 'วช.', '1', '0000000', '2009-03-30 01:31:31'),
('2', '202', 'เชี่ยวชาญเฉพาะ', 'ชช.', '1', '0000000', '2009-03-30 01:31:31'),
('2', '203', 'ผู้ชำนาญการ', 'ผู้ชำนาญการ', '1', '0000003', '2009-03-30 01:31:31'),
('2', '204', 'ผู้ชำนาญการพิเศษ', 'ผู้ชำนาญการพิเศษ', '1', '0000003', '2009-03-30 01:31:31'),
('3', '301', 'บริหารระดับกลาง', 'บก.', '1', '0000000', '2009-03-30 01:31:31'),
('3', '302', 'บริหารระดับสูง', 'บส.', '1', '0000000', '2009-03-30 01:31:31'),
('4', '401', 'ปฏิบัติงาน', 'ปฏิบัติงาน', '1', '0000000', '2009-03-30 01:31:31'),
('4', '402', 'ชำนาญงาน', 'ชำนาญงาน', '1', '0000000', '2009-03-30 01:31:31'),
('4', '403', 'อาวุโส', 'อาวุโส', '1', '0000000', '2009-03-30 01:31:31'),
('4', '404', 'ทักษะพิเศษ', 'ทักษะพิเศษ', '1', '0000000', '2009-03-30 01:31:31'),
('5', '501', 'ปฏิบัติการ', 'ปฏิบัติการ', '1', '0000000', '2009-03-30 01:31:31'),
('5', '502', 'ชำนาญการ', 'ชำนาญการ', '1', '0000000', '2009-03-30 01:31:31'),
('5', '503', 'ชำนาญการพิเศษ', 'ชำนาญการพิเศษ', '1', '0000000', '2009-03-30 01:31:31'),
('5', '504', 'เชียวชาญ', 'เชี่ยวชาญ', '1', '0000003', '2009-03-30 01:31:31'),
('5', '505', 'ทรงคุณวุฒิ', 'ทรงคุณวุฒิ', '1', '0000003', '2009-03-30 01:31:31'),
('6', '601', 'อำนวยการต้น', 'ต้น', '1', '0000003', '2018-12-13 20:09:36'),
('6', '602', 'อำนวยการสูง', 'สูง', '1', '0000003', '2018-12-13 20:09:45'),
('7', '701', 'บริหารต้น', 'ต้น', '1', '0000003', '2018-12-13 20:09:51'),
('7', '702', 'บริหารสูง', 'สูง', '1', '0000003', '2018-12-13 20:09:55'),
('8', '801', 'พนักงานราชการ', 'พนง.', '1', '000001', '2017-10-06 07:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `tb_appointment`
--

CREATE TABLE `tb_appointment` (
  `app_id` int(11) NOT NULL COMMENT 'รหัสการนัดหมาย',
  `app_title` varchar(100) NOT NULL COMMENT 'หัวข้อนัดหมาย',
  `app_sdate` date NOT NULL COMMENT 'วันที่เริ่มนัด',
  `app_stime` varchar(5) NOT NULL COMMENT 'เวลาที่เริ่มนัด',
  `app_edate` date NOT NULL COMMENT 'สิ้นสุดวันนัด',
  `app_etime` varchar(5) NOT NULL COMMENT 'สิ้นสุดเวลานัด',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้สร้างนัดหมาย',
  `app_appdate` date NOT NULL COMMENT 'วันที่สร้างนัดหมาย',
  `app_detail` longtext NOT NULL COMMENT 'หมายเหตุการนัด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_employee`
--

CREATE TABLE `tb_employee` (
  `emp_num` varchar(7) NOT NULL COMMENT 'รหัสเจ้าหน้าที่',
  `emp_login` varchar(20) NOT NULL COMMENT 'username',
  `emp_psw` tinytext NOT NULL COMMENT 'password',
  `emp_title` varchar(3) NOT NULL COMMENT 'คำนำหน้าชื่อ',
  `emp_fname` varchar(100) NOT NULL COMMENT 'ชื่อ',
  `emp_sname` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `emp_birthdate` date NOT NULL COMMENT 'วันเกิด',
  `emp_phone` varchar(20) NOT NULL COMMENT 'เบอร์โทรส่วนตัว',
  `emp_mail` varchar(100) NOT NULL COMMENT 'E-mail ส่วนตัว',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึก',
  `emp_depcode` varchar(7) NOT NULL COMMENT 'สังกัด',
  `emp_incdate` date NOT NULL COMMENT 'วันที่บรรจุ',
  `emp_appdate` date NOT NULL COMMENT 'วันที่บันทึก'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_employee`
--

INSERT INTO `tb_employee` (`emp_num`, `emp_login`, `emp_psw`, `emp_title`, `emp_fname`, `emp_sname`, `emp_birthdate`, `emp_phone`, `emp_mail`, `user_upd`, `emp_depcode`, `emp_incdate`, `emp_appdate`) VALUES
('0000014', '1529900311845', '4b406f1769ad26ad4a893d2ee0431f17', '037', 'สุทธนิต', 'ชัยขุนพล', '1988-08-16', '821856934', 'appbit74@gmail.com', '9999999', '1080000', '2017-06-01', '2018-12-13'),
('0000044', '11', '2825da7d9d7fff4de2dc224781a63e63', '001', 'เอกวิทย์', 'นาโสก', '1988-11-16', '864114789', 'namwon74@hotmail.com', '9999999', '1080000', '2018-09-03', '2018-12-14'),
('0000052', '1111111111111', '9dcbf642c78137f656ba7c24381ac25b', '001', 'ทดสอบ', 'ลองดู', '1987-06-04', '908976515', 'aaa@ccc.com', '9999999', '1010000', '2017-02-01', '2018-12-15'),
('0000066', '1412200332214', 'd57d2d90f2e10dd499bddd909c953429', '001', 'บอส', 'สูงสุด', '1968-07-18', '', '', '9999999', '1000000', '1986-02-12', '2018-12-16'),
('9999999', 'admin', 'b975117dfb0c19dad5191b7864c6b0d8', '001', 'Administrator', 'System', '2018-12-12', '', 'crimc@coj.go.th', '9999999', '1080000', '2018-12-12', '2018-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_genempnum`
--

CREATE TABLE `tb_genempnum` (
  `geid` int(11) NOT NULL,
  `last_num` int(6) NOT NULL COMMENT 'รหัสประจำตัวสุดท้าย',
  `user_upd` varchar(7) NOT NULL COMMENT 'ผู้บันทึก',
  `upd_date` date NOT NULL COMMENT 'วันที่อัพเดทล่าสุด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_genempnum`
--

INSERT INTO `tb_genempnum` (`geid`, `last_num`, `user_upd`, `upd_date`) VALUES
(1, 6, '9999999', '2018-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `tb_privileges`
--

CREATE TABLE `tb_privileges` (
  `prid` int(11) NOT NULL,
  `emp_code` varchar(7) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `user_upd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_privileges`
--

INSERT INTO `tb_privileges` (`prid`, `emp_code`, `menu_id`, `user_upd`) VALUES
(1, '9999999', 1, '2018-12-16'),
(3, '0000014', 1, '2018-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `titlename`
--

CREATE TABLE `titlename` (
  `TN_CODE` char(3) NOT NULL,
  `TN_SH_NAME` varchar(30) DEFAULT NULL,
  `TN_NAME` varchar(100) NOT NULL,
  `TN_ENG_NAME` varchar(100) DEFAULT NULL,
  `TN_ACTIVE` char(1) NOT NULL,
  `UPD_USER` char(7) DEFAULT NULL,
  `UPD_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `PS_SEX` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `titlename`
--

INSERT INTO `titlename` (`TN_CODE`, `TN_SH_NAME`, `TN_NAME`, `TN_ENG_NAME`, `TN_ACTIVE`, `UPD_USER`, `UPD_DATE`, `PS_SEX`) VALUES
('001', 'นาย', 'นาย', 'Mr.', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('002', 'นาง', 'นาง', 'Mrs.', '1', '0000003', '2009-03-11 01:02:18', 'F'),
('003', 'น.ส.', 'นางสาว', 'Miss', '1', '0000003', '2009-03-11 01:02:18', 'F'),
('004', 'ม.ล.', 'หม่อมหลวง', '', '1', '', '2009-03-11 01:02:18', 'M'),
('005', 'ม.ร.ว.', 'หม่อมราชวงศ์', '', '1', '', '2009-03-11 01:02:18', 'M'),
('006', 'ม.จ.', 'หม่อมเจ้า', '', '1', '', '2009-03-11 01:02:18', 'M'),
('010', 'พลฯ', 'พลตำรวจ', 'Police Constable', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('011', 'ส.ต.ต.', 'สิบตำรวจตรี', 'Police Lance Corporal', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('012', 'ส.ต.ท.', 'สิบตำรวจโท', 'Police Corporal', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('013', 'ส.ต.อ.', 'สิบตำรวจเอก', 'Police Sergeant', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('014', 'จ.ส.ต.', 'จ่าสิบตำรวจ', 'Police Sergeant Major', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('015', 'ด.ต.', 'ดาบตำรวจ', 'Police Senior Sergeant Major', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('016', 'ร.ต.ต.', 'ร้อยตำรวจตรี', 'Police Sub-Lieutenant', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('017', 'ร.ต.ท.', 'ร้อยตำรวจโท', 'Police Lieutenant', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('018', 'ร.ต.อ.', 'ร้อยตำรวจเอก', 'Police Captain', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('019', 'พ.ต.ต.', 'พันตำรวจตรี', 'Police Major', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('020', 'พ.ต.ท.', 'พันตำรวจโท', 'Police Lieutenant Colonel', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('021', 'พ.ต.อ.', 'พันตำรวจเอก', 'Police Colonel', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('022', 'พล.ต.ต.', 'พลตำรวจตรี', 'Police Major General', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('023', 'พล.ต.ท.', 'พลตำรวจโท', 'Police Lieutenant General', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('024', 'พล.ต.อ.', 'พลตำรวจเอก', 'Police General', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('031', 'ส.ต.', 'สิบตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('032', 'ส.ท.', 'สิบโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('033', 'ส.อ.', 'สิบเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('034', 'จ.ส.ต.', 'จ่าสิบตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('035', 'จ.ส.ท.', 'จ่าสิบโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('036', 'จ.ส.อ.', 'จ่าสิบเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('037', 'ว่าที่ ร.ต.', 'ว่าที่ร้อยตรี', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('038', 'ร.ต.', 'ร้อยตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('039', 'ร.ท.', 'ร้อยโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('040', 'ร.อ.', 'ร้อยเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('041', 'พ.ต.', 'พันตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('042', 'พ.ท.', 'พันโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('043', 'พ.อ.', 'พันเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('044', 'พล.จ.', 'พล.จ.', '', '1', '', '2009-03-11 01:02:18', 'M'),
('045', 'พล.ต.', 'พลตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('046', 'พล.ท.', 'พลโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('047', 'พล.อ.', 'พลเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('052', 'จ.ต.', 'จ่าตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('053', 'จ.ท.', 'จ่าโท', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('054', 'จ.อ.', 'จ่าเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('055', 'พ.จ.ต.', 'พันจ่าอากาศตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('056', 'พ.จ.ท.', 'พันจ่าอากาศโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('057', 'พ.อ.อ.', 'พันจ่าอากาศเอก', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('061', 'น.ต.-ร.น.', 'นาวาตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('062', 'น.ท.-ร.น.', 'นาวาโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('063', 'น.อ.-ร.น.', 'นาวาเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('064', 'พลเรือ จ.', 'พลเรือจัตวา', '', '1', '', '2009-03-11 01:02:18', 'M'),
('065', 'พลเรือ ต.', 'พลเรือตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('066', 'พลเรือ ท.', 'พลเรือโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('067', 'พลเรือ อ.', 'พลเรือเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('072', 'จ.อ.ต.', 'จ่าอากาศตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('073', 'จ.อ.ท.', 'จ่าอากาศโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('074', 'จ.อ.อ.', 'จ่าอากาศเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('075', 'พ.อ.ต.', 'พันอากาศตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('076', 'พ.อ.ท.', 'พันอากาศโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('077', 'พ.อ.อ.', 'พันอากาศเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('083', 'น.อ.', 'นาวาเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('084', 'พล.อ.จ.', 'พลอากาศจัตวา', '', '1', '', '2009-03-11 01:02:18', 'M'),
('085', 'พล.อ.ต.', 'พลอากาศตรี', '', '1', '', '2009-03-11 01:02:18', 'M'),
('086', 'พล.อ.ท.', 'พลอากาศโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('087', 'พล.อ.อ.', 'พลอากาศเอก', '', '1', '', '2009-03-11 01:02:18', 'M'),
('088', 'ว่าที่ ร.ต.หญิง', 'ว่าที่ร้อยตรีหญิง', '', '1', '', '2017-09-27 20:10:36', 'F'),
('089', 'ส.ท.หญิง', 'สิบโทหญิง', '', '1', '', '2009-03-11 01:02:18', 'F'),
('090', 'ว่าที่ ร.ท.', 'ว่าที่ร้อยโท', '', '1', '', '2009-03-11 01:02:18', 'M'),
('091', 'ร.ต.ต.หญิง', 'ร้อยตำรวจตรีหญิง', '', '1', '', '2009-03-11 01:02:18', 'F'),
('092', 'ส.ต.อ.หญิง', 'สิบตำรวจเอกหญิง', '', '1', '', '2009-03-11 01:02:18', 'F'),
('094', 'ด.ช.', 'เด็กชาย', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('095', 'ด.ญ.', 'เด็กหญิง', '', '1', '0000003', '2009-03-11 01:02:18', 'F'),
('096', 'ร.อ.อ.', 'เรืออากาศเอก', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('098', 'ด.ต.ญ.', 'ดาบตำรวจหญิง', '', '1', '0000003', '2009-03-11 01:02:18', 'F'),
('099', 'ร.ต.', 'เรืออากาศตรี', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('100', 'ร.ท.', 'เรืออากาศโท', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('101', 'น.ต.', 'นาวาอากาศตรี', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('102', 'น.ท.', 'นาวาอากาศโท', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('103', 'น.อ.', 'นาวาอากาศเอก', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('104', 'พล.อ.จ.', 'พลอากาศจัตวา', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('105', 'น.อ.', 'นาวาเอกพิเศษ', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('106', 'พ.จ.อ.', 'พันจ่าเอก', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('107', 'พ.จ.ท.', 'พันจ่าโท', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('108', 'พ.จ.ต.', 'พันจ่าตรี', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('109', 'ร.ต.', 'เรือตรี', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('110', 'ร.ท.', 'เรือโท', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('111', 'ร.อ.', 'เรือเอก', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('112', 'ร.ต.อ.หญิง', 'ร้อยตำรวจเอกหญิง', '', '1', '0000003', '2009-03-11 01:02:18', 'F'),
('113', 'ร.ต.ท.หญิง', 'ร้อยตำรวจโทหญิง', '', '1', '0000003', '2009-03-11 01:02:18', 'F'),
('114', 'ส.ต.ท.หญิง', 'สิบตำรวจโทหญิง', '', '1', '0000003', '2009-03-11 01:02:18', 'F'),
('115', 'ว่าที่ ร.อ.', 'ว่าที่ร้อยเอก', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('116', 'ว่าที่ ร.ต.', 'ว่าที่เรือตรี', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('117', 'ร.อ.หญิง', 'ร้อยเอกหญิง', '', '1', '0000003', '2009-03-11 01:02:18', 'F'),
('118', 'พลฯ', 'พลทหาร', '', '1', '0000003', '2009-03-11 01:02:18', 'M'),
('119', 'จ่าโทหญิง', 'จ่าโทหญิง', '', '1', '0000003', '2009-03-11 01:02:18', 'F'),
('120', 'พ.อ.พิเศษ', 'พันเอกพิเศษ', '', '1', '0000003', '2009-03-11 01:02:18', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_detail`
--
ALTER TABLE `app_detail`
  ADD PRIMARY KEY (`ad_id`),
  ADD KEY `tb_appDetail` (`app_id`),
  ADD KEY `tb_empApp` (`emp_num`);

--
-- Indexes for table `his_address`
--
ALTER TABLE `his_address`
  ADD PRIMARY KEY (`ha_id`),
  ADD KEY `tb_empAddress` (`emp_num`);

--
-- Indexes for table `his_children`
--
ALTER TABLE `his_children`
  ADD PRIMARY KEY (`hc_id`),
  ADD KEY `tb_empChildren` (`emp_num`);

--
-- Indexes for table `his_discipline`
--
ALTER TABLE `his_discipline`
  ADD PRIMARY KEY (`hdi_id`),
  ADD KEY `tb_empDiscipline` (`emp_num`);

--
-- Indexes for table `his_doccer`
--
ALTER TABLE `his_doccer`
  ADD PRIMARY KEY (`hd_id`),
  ADD KEY `tb_empDoccer` (`emp_num`);

--
-- Indexes for table `his_education`
--
ALTER TABLE `his_education`
  ADD PRIMARY KEY (`he_id`),
  ADD KEY `tb_empEdu` (`emp_num`);

--
-- Indexes for table `his_leave`
--
ALTER TABLE `his_leave`
  ADD PRIMARY KEY (`hl_id`),
  ADD KEY `tb_empLeave` (`emp_num`),
  ADD KEY `tb_empBoss1` (`boss_1`),
  ADD KEY `tb_empBoss2` (`boss_2`),
  ADD KEY `tb_empBoss3` (`boss_3`);

--
-- Indexes for table `his_marry`
--
ALTER TABLE `his_marry`
  ADD PRIMARY KEY (`hm_id`),
  ADD KEY `tb_empMarry` (`emp_num`);

--
-- Indexes for table `his_name`
--
ALTER TABLE `his_name`
  ADD PRIMARY KEY (`hn_id`),
  ADD KEY `tb_empName` (`emp_num`);

--
-- Indexes for table `his_position`
--
ALTER TABLE `his_position`
  ADD PRIMARY KEY (`hp_id`),
  ADD KEY `tb_empPosition` (`emp_num`),
  ADD KEY `his_empPostline` (`hp_pos`),
  ADD KEY `his_empLevel` (`hp_level`),
  ADD KEY `้his_empOffice` (`hp_depcode`);

--
-- Indexes for table `his_training`
--
ALTER TABLE `his_training`
  ADD PRIMARY KEY (`ht_id`),
  ADD KEY `tb_empTrain` (`emp_num`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`off_code`);

--
-- Indexes for table `postline`
--
ALTER TABLE `postline`
  ADD PRIMARY KEY (`PL_CODE`);

--
-- Indexes for table `postmgt`
--
ALTER TABLE `postmgt`
  ADD PRIMARY KEY (`PM_CODE`);

--
-- Indexes for table `posttype`
--
ALTER TABLE `posttype`
  ADD PRIMARY KEY (`PT_CODE`);

--
-- Indexes for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD PRIMARY KEY (`emp_num`),
  ADD KEY `tb_empOffice` (`emp_depcode`),
  ADD KEY `tb_empTitlename` (`emp_title`);

--
-- Indexes for table `tb_genempnum`
--
ALTER TABLE `tb_genempnum`
  ADD PRIMARY KEY (`geid`);

--
-- Indexes for table `tb_privileges`
--
ALTER TABLE `tb_privileges`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `titlename`
--
ALTER TABLE `titlename`
  ADD PRIMARY KEY (`TN_CODE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_detail`
--
ALTER TABLE `app_detail`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้เกี่ยวข้องนัดหมาย';
--
-- AUTO_INCREMENT for table `his_address`
--
ALTER TABLE `his_address`
  MODIFY `ha_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสที่อยู่', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `his_children`
--
ALTER TABLE `his_children`
  MODIFY `hc_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสข้อมูลบุตร';
--
-- AUTO_INCREMENT for table `his_discipline`
--
ALTER TABLE `his_discipline`
  MODIFY `hdi_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการรับโทษ';
--
-- AUTO_INCREMENT for table `his_doccer`
--
ALTER TABLE `his_doccer`
  MODIFY `hd_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสใบอนุญาต', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `his_education`
--
ALTER TABLE `his_education`
  MODIFY `he_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสประวัติการศึกษา', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `his_leave`
--
ALTER TABLE `his_leave`
  MODIFY `hl_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการลา', AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `his_marry`
--
ALTER TABLE `his_marry`
  MODIFY `hm_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสคู่สมรส';
--
-- AUTO_INCREMENT for table `his_name`
--
ALTER TABLE `his_name`
  MODIFY `hn_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการเปลี่ยนชื่อ';
--
-- AUTO_INCREMENT for table `his_position`
--
ALTER TABLE `his_position`
  MODIFY `hp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการดำรงตำแหน่ง', AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `his_training`
--
ALTER TABLE `his_training`
  MODIFY `ht_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสฝึกอบรม', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการนัดหมาย';
--
-- AUTO_INCREMENT for table `tb_genempnum`
--
ALTER TABLE `tb_genempnum`
  MODIFY `geid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_privileges`
--
ALTER TABLE `tb_privileges`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `app_detail`
--
ALTER TABLE `app_detail`
  ADD CONSTRAINT `tb_appDetail` FOREIGN KEY (`app_id`) REFERENCES `tb_appointment` (`app_id`),
  ADD CONSTRAINT `tb_empApp` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`);

--
-- Constraints for table `his_address`
--
ALTER TABLE `his_address`
  ADD CONSTRAINT `tb_empAddress` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`);

--
-- Constraints for table `his_children`
--
ALTER TABLE `his_children`
  ADD CONSTRAINT `tb_empChildren` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`);

--
-- Constraints for table `his_discipline`
--
ALTER TABLE `his_discipline`
  ADD CONSTRAINT `tb_empDiscipline` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`);

--
-- Constraints for table `his_doccer`
--
ALTER TABLE `his_doccer`
  ADD CONSTRAINT `tb_empDoccer` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`);

--
-- Constraints for table `his_education`
--
ALTER TABLE `his_education`
  ADD CONSTRAINT `tb_empEdu` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`);

--
-- Constraints for table `his_leave`
--
ALTER TABLE `his_leave`
  ADD CONSTRAINT `tb_empBoss1` FOREIGN KEY (`boss_1`) REFERENCES `tb_employee` (`emp_num`),
  ADD CONSTRAINT `tb_empBoss2` FOREIGN KEY (`boss_2`) REFERENCES `tb_employee` (`emp_num`),
  ADD CONSTRAINT `tb_empBoss3` FOREIGN KEY (`boss_3`) REFERENCES `tb_employee` (`emp_num`),
  ADD CONSTRAINT `tb_empLeave` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`);

--
-- Constraints for table `his_marry`
--
ALTER TABLE `his_marry`
  ADD CONSTRAINT `tb_empMarry` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`);

--
-- Constraints for table `his_name`
--
ALTER TABLE `his_name`
  ADD CONSTRAINT `tb_empName` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`);

--
-- Constraints for table `his_position`
--
ALTER TABLE `his_position`
  ADD CONSTRAINT `his_empLevel` FOREIGN KEY (`hp_level`) REFERENCES `posttype` (`PT_CODE`),
  ADD CONSTRAINT `his_empPostline` FOREIGN KEY (`hp_pos`) REFERENCES `postline` (`PL_CODE`),
  ADD CONSTRAINT `tb_empPosition` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`),
  ADD CONSTRAINT `้his_empOffice` FOREIGN KEY (`hp_depcode`) REFERENCES `offices` (`off_code`);

--
-- Constraints for table `his_training`
--
ALTER TABLE `his_training`
  ADD CONSTRAINT `tb_empTrain` FOREIGN KEY (`emp_num`) REFERENCES `tb_employee` (`emp_num`);

--
-- Constraints for table `tb_employee`
--
ALTER TABLE `tb_employee`
  ADD CONSTRAINT `tb_empOffice` FOREIGN KEY (`emp_depcode`) REFERENCES `offices` (`off_code`),
  ADD CONSTRAINT `tb_empTitlename` FOREIGN KEY (`emp_title`) REFERENCES `titlename` (`TN_CODE`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
