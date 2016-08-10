/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50615
Source Host           : localhost:3306
Source Database       : yunpan

Target Server Type    : MYSQL
Target Server Version : 50615
File Encoding         : 65001

Date: 2016-08-10 23:52:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tp_cast
-- ----------------------------
DROP TABLE IF EXISTS `tp_cast`;
CREATE TABLE `tp_cast` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `sitename` varchar(255) DEFAULT NULL COMMENT '站点名称',
  `siteurl` varchar(255) DEFAULT NULL COMMENT '站点网址',
  `siteimg` text COMMENT '站点图片',
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_cast
-- ----------------------------
INSERT INTO `tp_cast` VALUES ('1', '美国Bellevue市政府', 'http://bellevuecn.com', 'images/case/case1.png', '1');
INSERT INTO `tp_cast` VALUES ('2', '老板电器', 'http://www.robam.com/', 'images/case/case2.png', null);
INSERT INTO `tp_cast` VALUES ('3', 'IT桔子', 'http://itjuzi.com/', 'images/case/case3.png', null);
INSERT INTO `tp_cast` VALUES ('4', '中关村管委会', 'http://www.zgc.gov.cn/', 'images/case/case4.png', null);
INSERT INTO `tp_cast` VALUES ('5', '易观智库', 'http://www.enfodesk.com/', 'images/case/case5.png', null);
INSERT INTO `tp_cast` VALUES ('6', '纷享销客', 'http://www.fxiaoke.com/', 'images/case/case6.png', null);
INSERT INTO `tp_cast` VALUES ('7', '中国企业家', 'http://www.iceo.com.cn/', 'images/case/case7.png', null);
INSERT INTO `tp_cast` VALUES ('8', 'CSDN', 'http://csdn.net', 'images/case/case8.png', null);
INSERT INTO `tp_cast` VALUES ('9', '51CTO技术博客', 'http://blog.51cto.com/', 'images/case/case9.png', null);
INSERT INTO `tp_cast` VALUES ('10', '快鲤鱼', 'http://kuailiyu.cyzone.cn/', 'images/case/case10.png', null);
INSERT INTO `tp_cast` VALUES ('11', '中青在线', 'http://www.cyol.net/', 'images/case/case11.png', null);
INSERT INTO `tp_cast` VALUES ('12', '创业邦', 'http://www.cyzone.cn', 'images/case/case12.png', null);
INSERT INTO `tp_cast` VALUES ('13', '12', '12', 'images/2016-08-10/57ab3d252de60.sql', '1');
INSERT INTO `tp_cast` VALUES ('14', '1', '1', 'images/2016-08-10/57ab3eb1dac00.sql', '1');
INSERT INTO `tp_cast` VALUES ('15', '123', '123', 'images/2016-08-10/yunshipei.sql', '1');
INSERT INTO `tp_cast` VALUES ('16', '31', '31', 'images/2016-08-10/index.php', '1');

-- ----------------------------
-- Table structure for tp_file
-- ----------------------------
DROP TABLE IF EXISTS `tp_file`;
CREATE TABLE `tp_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) DEFAULT NULL,
  `uploadtime` datetime DEFAULT NULL,
  `size` double DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_file
-- ----------------------------

-- ----------------------------
-- Table structure for tp_user
-- ----------------------------
DROP TABLE IF EXISTS `tp_user`;
CREATE TABLE `tp_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tp_user
-- ----------------------------
INSERT INTO `tp_user` VALUES ('1', 'admin', '123456');
