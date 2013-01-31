/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50523
Source Host           : localhost:3306
Source Database       : phpcms

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2012-11-20 17:20:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `v9_keywords`
-- ----------------------------
DROP TABLE IF EXISTS `phpcms_keywords`;
CREATE TABLE `phpcms_keywords` (
  `kid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) DEFAULT NULL,
  `sid` int(10) DEFAULT NULL,
  `keywords` varchar(100) DEFAULT NULL,
  `kstatus` tinyint(4) DEFAULT '0',
  `fee` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v9_keywords
-- ----------------------------
INSERT INTO `phpcms_keywords` VALUES ('1', '1', '1', '重庆网站建设', '1', '0');
INSERT INTO `phpcms_keywords` VALUES ('2', '1', '1', '重庆网站优化公司', '1', '0');
INSERT INTO `phpcms_keywords` VALUES ('3', '1', '1', '重庆网站建设公司', '1', '0');
INSERT INTO `phpcms_keywords` VALUES ('4', '1', '2', '百度娱乐', '0', '0');
INSERT INTO `phpcms_keywords` VALUES ('5', '1', '2', '百度新闻', '0', '0');
INSERT INTO `phpcms_keywords` VALUES ('6', '1', '2', '百度音乐', '1', '0');
INSERT INTO `phpcms_keywords` VALUES ('7', '1', '2', '百度图片', '0', '0');
INSERT INTO `phpcms_keywords` VALUES ('8', '1', '2', '百度科技', '1', '0');
INSERT INTO `phpcms_keywords` VALUES ('9', '1', '3', '新浪新闻', '0', '0');
INSERT INTO `phpcms_keywords` VALUES ('10', '1', '3', '新浪图片', '0', '0');
INSERT INTO `phpcms_keywords` VALUES ('11', '1', '3', '新浪科技', '0', '0');
