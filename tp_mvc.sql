/*
Navicat MySQL Data Transfer

Source Server         : koneksi01
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tp_mvc

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-05-06 14:28:12
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `guilds`
-- ----------------------------
DROP TABLE IF EXISTS `guilds`;
CREATE TABLE `guilds` (
  `id_guilds` int(11) NOT NULL AUTO_INCREMENT,
  `name_guilds` varchar(255) DEFAULT NULL,
  `country_guilds` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_guilds`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of guilds
-- ----------------------------
INSERT INTO `guilds` VALUES ('1', 'Ahjin', 'Korea');
INSERT INTO `guilds` VALUES ('2', 'Scavenger', 'USA');
INSERT INTO `guilds` VALUES ('3', 'Draw Sword', 'Japan');
INSERT INTO `guilds` VALUES ('4', 'The Fame', 'Korea');

-- ----------------------------
-- Table structure for `members`
-- ----------------------------
DROP TABLE IF EXISTS `members`;
CREATE TABLE `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `joinning_date` date DEFAULT NULL,
  `id_guilds` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_guilds` (`id_guilds`),
  CONSTRAINT `id_guilds` FOREIGN KEY (`id_guilds`) REFERENCES `guilds` (`id_guilds`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ----------------------------
-- Records of members
-- ----------------------------
INSERT INTO `members` VALUES ('1', 'Sung Jin Woo', 'sungjinwoo@gmail.com', '08123456789', '2024-05-15', '1');
INSERT INTO `members` VALUES ('2', 'Ma Dong Wok', 'madongwok', '08972315612', '2024-05-01', '4');
INSERT INTO `members` VALUES ('3', 'Hwang Dong Soo', 'hwangdongsoo@gmail.com', '08329132123', '2024-05-03', '2');
