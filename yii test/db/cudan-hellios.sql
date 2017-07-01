/*
Navicat MySQL Data Transfer

Source Server         : MY DATABASE
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : cudan-hellios

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-29 13:20:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for migration
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1498296171');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1498296209');

-- ----------------------------
-- Table structure for tbl_admin
-- ----------------------------
DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_admin
-- ----------------------------
INSERT INTO `tbl_admin` VALUES ('1', 'admin', '96e79218965eb72c92a549dd5a330112', 'quan tri vien chinh', null);
INSERT INTO `tbl_admin` VALUES ('2', 'hung', 'e10adc3949ba59abbe56e057f20f883e', 'hung ld', null);

-- ----------------------------
-- Table structure for tbl_cudan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cudan`;
CREATE TABLE `tbl_cudan` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `so_hd` varchar(100) DEFAULT NULL COMMENT 'so hop dong',
  `so_canho` varchar(20) NOT NULL,
  `chucanho` varchar(50) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `note` text,
  `message` varchar(255) DEFAULT NULL,
  `created` date DEFAULT NULL,
  `updated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_cudan
-- ----------------------------
INSERT INTO `tbl_cudan` VALUES ('1', 'HĐ số 28 ', '2607B', ' Ngô Xuân Trường', 'https://www.facebook.com/truong.ngoxuan.7?fref=ufi', '1', 'xuantruong@gmail.com', '123454', '0989898976', 'http://helios-member.vn/uploads/Anh%20cu%20dan/ngo%20xuan%20truong.jpg', '<p>Anh n&agrave;y được đấy</p>', null, '2017-06-28', '2017-06-28');
INSERT INTO `tbl_cudan` VALUES ('2', 'So hop dong 608', '1504B', ' Le Van Linh', 'https://www.facebook.com/le.linh.12914?fref=ufi', '1', '', '123454', '', 'http://helios-member.vn/uploads/Anh%20cu%20dan/Le%20Van%20Linh.jpg', '', null, '2017-06-28', '2017-06-28');
INSERT INTO `tbl_cudan` VALUES ('3', 'HD626', '3104B', 'Nguyễn Hữu Phẩm', 'https://www.facebook.com/nguyenthaithach?fref=ufi', '1', '', '123454', '', 'http://helios-member.vn/uploads/Anh%20cu%20dan/3003A.jpg', '', null, '2017-06-28', '2017-06-28');
INSERT INTO `tbl_cudan` VALUES ('4', 'HĐ662', '3104B', 'Bùi Mạnh Linh', 'https://www.facebook.com/linhbm?fref=ufi', '1', '', '123454', '', 'http://helios-member.vn/uploads/Anh%20cu%20dan/linh%20mini.jpg', '', null, '2017-06-28', '2017-06-28');
INSERT INTO `tbl_cudan` VALUES ('8', '', '3104B', 'Nguyễn Thị Hương Giang', 'https://www.facebook.com/linhnhi261002?fref=ufi', '1', '', '123454', '', 'http://helios-member.vn/uploads/Anh%20cu%20dan/linh%20nhi.jpg', '', '', '2017-06-28', '2017-06-28');
INSERT INTO `tbl_cudan` VALUES ('9', '', '3104B', 'Nguyễn Mạnh Hoàng', 'https://stackoverflow.com/questions/35245507/yii2-activeform-field-placeholder', '0', '', '123454', '', '', '', '', '2017-06-28', '2017-06-28');
INSERT INTO `tbl_cudan` VALUES ('10', '', '3104B', 'Hoàng Lão Tà123', 'https://www.facebook.com/ha.tran.5243817?fref=ufi', '1', '', '123454', '', '', '', '', '2017-06-28', '2017-06-28');

-- ----------------------------
-- Table structure for tbl_cudan_fail
-- ----------------------------
DROP TABLE IF EXISTS `tbl_cudan_fail`;
CREATE TABLE `tbl_cudan_fail` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `so_hd` varchar(100) DEFAULT NULL COMMENT 'so hop dong',
  `so_canho` varchar(20) NOT NULL,
  `chucanho` varchar(50) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `sdt` varchar(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `note` text,
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_cudan_fail
-- ----------------------------
INSERT INTO `tbl_cudan_fail` VALUES ('1', '1577', '1209', 'fsdfs', 'fsdfsf', '', '96e79218965eb72c92a549dd5a330112', '', '', '', '1483726512', null);
INSERT INTO `tbl_cudan_fail` VALUES ('17', '2805A', '2805A', 'Phạm Hiềna', 'https://www.facebook.com/pham.hien.90226', '', '96e79218965eb72c92a549dd5a330112', '', null, '', '1483808859', null);

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', 'BpzF52WEcDK7eRG9_paVfmAHK0ld_Dxx', '$2y$13$ObcMAptrjgLvsxeqhbc13eqBzJg2qh.xcMEY/vraWoeBjMuGY4W8u', null, '123@gmail.com', '10', '1498296226', '1498296226');
