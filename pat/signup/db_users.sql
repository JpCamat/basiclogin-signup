/*
MySQL Data Transfer
Source Host: localhost
Source Database: db_users
Target Host: localhost
Target Database: db_users
Date: 9/23/2017 12:17:35 PM
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for uuser
-- ----------------------------
DROP TABLE IF EXISTS `uuser`;
CREATE TABLE `uuser` (
  `uname` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records 
-- ----------------------------
