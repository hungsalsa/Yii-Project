/*
Navicat MySQL Data Transfer

Source Server         : MY DATABASE
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : phuongxa

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-06-29 14:55:26
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_provincial
-- ----------------------------
DROP TABLE IF EXISTS `tbl_provincial`;
CREATE TABLE `tbl_provincial` (
  `id_provincial` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `type` varchar(225) NOT NULL,
  PRIMARY KEY (`id_provincial`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_provincial
-- ----------------------------
INSERT INTO `tbl_provincial` VALUES ('1', 'Hà Nội', 'Thành Phố');
INSERT INTO `tbl_provincial` VALUES ('2', 'Hà Giang', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('4', 'Cao Bằng', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('6', 'Bắc Kạn', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('8', 'Tuyên Quang', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('10', 'Lào Cai', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('11', 'Điện Biên', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('12', 'Lai Châu', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('14', 'Sơn La', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('15', 'Yên Bái', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('17', 'Hòa Bình', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('19', 'Thái Nguyên', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('20', 'Lạng Sơn', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('22', 'Quảng Ninh', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('24', 'Bắc Giang', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('25', 'Phú Thọ', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('26', 'Vĩnh Phúc', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('27', 'Bắc Ninh', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('30', 'Hải Dương', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('31', 'Hải Phòng', 'Thành Phố');
INSERT INTO `tbl_provincial` VALUES ('33', 'Hưng Yên', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('34', 'Thái Bình', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('35', 'Hà Nam', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('36', 'Nam Định', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('37', 'Ninh Bình', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('38', 'Thanh Hóa', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('40', 'Nghệ An', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('42', 'Hà Tĩnh', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('44', 'Quảng Bình', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('45', 'Quảng Trị', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('46', 'Thừa Thiên Huế', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('48', 'Đà Nẵng', 'Thành Phố');
INSERT INTO `tbl_provincial` VALUES ('49', 'Quảng Nam', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('51', 'Quảng Ngãi', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('52', 'Bình Định', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('54', 'Phú Yên', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('56', 'Khánh Hòa', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('58', 'Ninh Thuận', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('60', 'Bình Thuận', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('62', 'Kon Tum', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('64', 'Gia Lai', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('66', 'Đắk Lắk', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('67', 'Đắk Nông', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('68', 'Lâm Đồng', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('70', 'Bình Phước', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('72', 'Tây Ninh', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('74', 'Bình Dương', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('75', 'Đồng Nai', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('77', 'Bà Rịa - Vũng Tàu', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('79', 'Hồ Chí Minh', 'Thành Phố');
INSERT INTO `tbl_provincial` VALUES ('80', 'Long An', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('82', 'Tiền Giang', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('83', 'Bến Tre', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('84', 'Trà Vinh', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('86', 'Vĩnh Long', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('87', 'Đồng Tháp', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('89', 'An Giang', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('91', 'Kiên Giang', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('92', 'Cần Thơ', 'Thành Phố');
INSERT INTO `tbl_provincial` VALUES ('93', 'Hậu Giang', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('94', 'Sóc Trăng', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('95', 'Bạc Liêu', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('96', 'Cà Mau', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('97', 'Cao Bằng ', 'Tỉnh');
INSERT INTO `tbl_provincial` VALUES ('98', 'New York', 'Thành Phố');
