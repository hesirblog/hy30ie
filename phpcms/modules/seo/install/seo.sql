/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50523
Source Host           : localhost:3306
Source Database       : phpcms

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2012-11-20 17:19:07
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `v9_seo`
-- ----------------------------
DROP TABLE IF EXISTS `phpcms_seo`;
CREATE TABLE `phpcms_seo` (
  `sid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` mediumint(8) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `typetop` char(100) DEFAULT NULL,
  `typeson` char(100) DEFAULT NULL,
  `ftp_ip` char(50) DEFAULT NULL,
  `ftp_port` char(10) DEFAULT '21',
  `ftp_user` char(50) DEFAULT NULL,
  `ftp_pwd` char(50) DEFAULT NULL,
  `searchtype` char(50) DEFAULT NULL,
  `remark` mediumtext,
  `status` tinyint(4) DEFAULT NULL,
  `adddate` int(10) DEFAULT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of v9_seo
-- ----------------------------
INSERT INTO `phpcms_seo` VALUES ('1', '1', '重庆圣矢网络', 'http://www.30ie.com', '3362', '3390', '192.168.1.108', '21', 'test', '123456', '1,2,3', '重庆圣矢网络', '1', '1352697257');
INSERT INTO `phpcms_seo` VALUES ('2', '1', '百度', 'http://www.baidu.com', '3362', '3390', '192.168.1.108', '6543', 'test', '123456', '1,2,3', '重庆圣矢网络', '0', '1352697446');
INSERT INTO `phpcms_seo` VALUES ('3', '1', '新浪', 'http://www.sina.com', '3362', '3390', '192.168.1.108', '3327', 'test', '123456', '1,2,3', '重庆圣矢网络SEO系统', '1', '1352698726');
INSERT INTO `v9_seo` VALUES ('4', '1', '腾讯', 'http://www.qq.com', '3362', '3390', '192.168.1.108', '6035', 'test', '123456', '1,2,3', '重庆圣矢网络快速排名', '0', '1352699068');
INSERT INTO `phpcms_seo` VALUES ('5', '1', '淘宝', 'http://www.taobao.com', '3362', '3390', '192.168.1.108', '2626', 'taobao', '123456', '1,2', '淘宝SEO排名', '0', '1352699482');
INSERT INTO `phpcms_seo` VALUES ('6', '1', '网易', 'http://www.163.com', '3362', '3390', '192.168.1.108', '3215', '163', '163', '1,2,3', '网易SEO排名', '1', '1352699761');
INSERT INTO `phpcms_seo` VALUES ('7', '1', 'MSN', 'http://www.msn.cn', '3362', '3390', '192.168.1.108', '5858', 'msn', 'msn', '1,2,3', 'MSN SEO排名', '0', '1352699897');
INSERT INTO `phpcms_seo` VALUES ('8', '1', 'Google', 'http://www.google.cn', '3362', '3390', '192.168.1.108', '3235', 'google', 'google', '1,2,3', 'MSN SEO排名', '1', '1352700022');
INSERT INTO `phpcms_seo` VALUES ('9', '1', '搜狐', 'http://www.sohu.com', '3362', '3390', '192.168.1.108', '6565', 'souhu', '123456', '1,2,3', '搜狐 SEO 优化', '0', '1352702378');
