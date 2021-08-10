/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50724
Source Host           : localhost:3306
Source Database       : socialnetworking

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2019-03-28 19:05:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `c_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `c_author_id` bigint(11) DEFAULT NULL,
  `c_post_id` bigint(11) DEFAULT NULL,
  `c_content` varchar(10000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `c_edited` int(11) DEFAULT '0',
  `c_time_edited` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `c_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1561413055 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('1559410189', '217523107525290', '1562709215', 'dsfhdsfkhskdjf', '0', null, '1553779742');
INSERT INTO `comments` VALUES ('1561413054', '217523107525290', '1556037730', 'ertertert', '0', null, '1553762717');

-- ----------------------------
-- Table structure for `follow`
-- ----------------------------
DROP TABLE IF EXISTS `follow`;
CREATE TABLE `follow` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `uf_one` bigint(11) NOT NULL,
  `uf_two` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of follow
-- ----------------------------

-- ----------------------------
-- Table structure for `likes`
-- ----------------------------
DROP TABLE IF EXISTS `likes`;
CREATE TABLE `likes` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `liker` bigint(11) NOT NULL,
  `post_id` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of likes
-- ----------------------------
INSERT INTO `likes` VALUES ('1', '217523107525290', '1556037730');
INSERT INTO `likes` VALUES ('2', '217523107525290', '1562709215');

-- ----------------------------
-- Table structure for `messages`
-- ----------------------------
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` bigint(11) NOT NULL,
  `message` varchar(1538) CHARACTER SET utf8mb4 NOT NULL,
  `m_from` bigint(11) NOT NULL,
  `m_to` bigint(11) NOT NULL,
  `m_time` int(11) NOT NULL,
  `m_seen` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of messages
-- ----------------------------

-- ----------------------------
-- Table structure for `mynotepad`
-- ----------------------------
DROP TABLE IF EXISTS `mynotepad`;
CREATE TABLE `mynotepad` (
  `main_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `author_id` bigint(11) NOT NULL,
  `note_title` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `note_content` varchar(10000) CHARACTER SET utf8mb4 NOT NULL,
  `note_time` int(11) NOT NULL,
  PRIMARY KEY (`main_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of mynotepad
-- ----------------------------

-- ----------------------------
-- Table structure for `notifications`
-- ----------------------------
DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `n_id` bigint(11) NOT NULL,
  `from_id` bigint(11) NOT NULL,
  `for_id` bigint(11) NOT NULL,
  `notifyType_id` bigint(11) NOT NULL,
  `notifyType` varchar(100) NOT NULL,
  `seen` int(11) NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of notifications
-- ----------------------------

-- ----------------------------
-- Table structure for `r_star`
-- ----------------------------
DROP TABLE IF EXISTS `r_star`;
CREATE TABLE `r_star` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `u_id` bigint(11) NOT NULL,
  `p_id` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of r_star
-- ----------------------------

-- ----------------------------
-- Table structure for `saved`
-- ----------------------------
DROP TABLE IF EXISTS `saved`;
CREATE TABLE `saved` (
  `main_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` bigint(20) NOT NULL,
  `post_id` bigint(11) NOT NULL,
  `user_saved_id` bigint(11) NOT NULL,
  `saved_time` int(11) NOT NULL,
  PRIMARY KEY (`main_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of saved
-- ----------------------------

-- ----------------------------
-- Table structure for `signup`
-- ----------------------------
DROP TABLE IF EXISTS `signup`;
CREATE TABLE `signup` (
  `main_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` bigint(50) NOT NULL,
  `Fullname` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `Username` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `Password` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `followers` int(100) NOT NULL DEFAULT '0',
  `Userphoto` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `user_cover_photo` varchar(300) CHARACTER SET utf8mb4 DEFAULT NULL,
  `school` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `work` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `work0` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `country` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `birthday` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `verify` int(11) DEFAULT NULL,
  `website` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `bio` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `admin` varchar(50) CHARACTER SET utf8mb4 DEFAULT NULL,
  `gender` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `login_attempts` int(11) DEFAULT NULL,
  `language` varchar(100) CHARACTER SET utf8mb4 DEFAULT NULL,
  `aSetup` int(11) DEFAULT '0',
  `online` int(100) DEFAULT '0',
  PRIMARY KEY (`main_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of signup
-- ----------------------------
INSERT INTO `signup` VALUES ('12', '217523107525290', 'sharad', 'sharad', 'tu.ria@hotmail.com', '$2y$12$6KIL9oLziyQIRVNp6DY2we/0EYRN1GrhMQ9KlyxoLrtEBlWUV8t8u', '0', 'user-male.png', null, null, null, null, null, null, null, null, null, '1', 'Male', null, 'English', '0', '1');

-- ----------------------------
-- Table structure for `supportbox`
-- ----------------------------
DROP TABLE IF EXISTS `supportbox`;
CREATE TABLE `supportbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `r_id` bigint(11) NOT NULL,
  `from_id` bigint(11) NOT NULL,
  `for_id` bigint(11) NOT NULL,
  `r_type` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `subject` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `report` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `r_time` int(11) NOT NULL,
  `r_replay` varchar(1000) CHARACTER SET utf8mb4 NOT NULL,
  `r_replay_time` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of supportbox
-- ----------------------------

-- ----------------------------
-- Table structure for `typing_m`
-- ----------------------------
DROP TABLE IF EXISTS `typing_m`;
CREATE TABLE `typing_m` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `t_from` bigint(11) NOT NULL,
  `t_to` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of typing_m
-- ----------------------------

-- ----------------------------
-- Table structure for `wpost`
-- ----------------------------
DROP TABLE IF EXISTS `wpost`;
CREATE TABLE `wpost` (
  `post_id` bigint(50) NOT NULL,
  `author_id` bigint(11) DEFAULT NULL,
  `post_img` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `post_time` int(11) DEFAULT NULL,
  `post_content` mediumtext CHARACTER SET utf8mb4,
  `p_title` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `p_likes` int(100) DEFAULT '0',
  `p_privacy` int(11) DEFAULT '0',
  `shared` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of wpost
-- ----------------------------
INSERT INTO `wpost` VALUES ('1556037730', '217523107525290', 'user_post_img/15537626901018442802.jpg', '1553762690', 'fdgdfg', '', '1', '0', null);
INSERT INTO `wpost` VALUES ('1562709215', '217523107525290', null, '1553779735', 'jkdsfknsd fdm,nldfk.sdfl,sdf', '', '1', '0', null);
