/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50730
Source Host           : localhost:3307
Source Database       : z0gravity_ht

Target Server Type    : MYSQL
Target Server Version : 50730
File Encoding         : 65001

Date: 2022-11-01 13:40:21
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_url` varchar(100) DEFAULT NULL,
  `user_role_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_role_key` (`user_role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for banners
-- ----------------------------
DROP TABLE IF EXISTS `banners`;
CREATE TABLE `banners` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text,
  `video_url` varchar(255) NOT NULL,
  `btn_content` varchar(99) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `background_color` varchar(255) DEFAULT NULL,
  `text_color` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_key` (`user_id`),
  CONSTRAINT `banners_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_url` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` text,
  `article_url` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_key` (`user_id`),
  CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tags
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(191) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Table structure for articles_tags
-- ----------------------------
DROP TABLE IF EXISTS `articles_tags`;
CREATE TABLE `articles_tags` (
  `article_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`tag_id`),
  KEY `tag_key` (`tag_id`),
  CONSTRAINT `articles_tags_ibfk_1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`),
  CONSTRAINT `articles_tags_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for testimonials
-- ----------------------------
DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo_url` varchar(255) NOT NULL,
  `description` text,
  `testimonial_author` varchar(255) DEFAULT NULL,
  `testimonial_author_position` varchar(255) DEFAULT NULL,
  `testimonial_url` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_key` (`user_id`),
  CONSTRAINT `testimonials_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for articles_i18n
-- ----------------------------
DROP TABLE IF EXISTS `articles_i18n`;
CREATE TABLE `articles_i18n` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  KEY `I18N_FIELD` (`model`,`foreign_key`,`field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles_i18n
-- ----------------------------

-- ----------------------------
-- Records of articles_tags
-- ----------------------------

-- ----------------------------
-- Table structure for banners_i18n
-- ----------------------------
DROP TABLE IF EXISTS `banners_i18n`;
CREATE TABLE `banners_i18n` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  KEY `I18N_FIELD` (`model`,`foreign_key`,`field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of banners_i18n
-- ----------------------------

-- ----------------------------
-- Records of tags
-- ----------------------------

-- ----------------------------
-- Table structure for testimonials_i18n
-- ----------------------------
DROP TABLE IF EXISTS `testimonials_i18n`;
CREATE TABLE `testimonials_i18n` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `I18N_LOCALE_FIELD` (`locale`,`model`,`foreign_key`,`field`),
  KEY `I18N_FIELD` (`model`,`foreign_key`,`field`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of testimonials_i18n
-- ----------------------------

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Administrator', '2022-10-27 10:41:12', '2022-10-27 10:41:19');
INSERT INTO `roles` VALUES ('2', 'Translator', '2022-10-27 10:43:01', '2022-10-27 10:43:03');
INSERT INTO `roles` VALUES ('3', 'Subcribers', '2022-10-27 03:50:44', '2022-10-27 03:50:44');

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'administrator', '$2y$10$r1iXqqrLg6fEGGPCYlKUR.oxxzS5c79jcT4USjBIzgx4V9../jngm', '', '1', '2022-10-27 10:44:11', '2022-10-28 04:43:34');
INSERT INTO `users` VALUES ('2', 'translator', '123456789', null, '2', '2022-10-27 10:44:43', '2022-10-27 10:44:45');
INSERT INTO `users` VALUES ('3', 'subcriber', '123456789', null, '3', '2022-10-27 10:45:07', '2022-10-27 10:45:13');
INSERT INTO `users` VALUES ('7', 'ad1@gmail.com', '$2y$10$eejE2w9POwFrAn0xPiWCLe7PpgEu03nk3OS1LtDSMQM6YTDa4Fmx6', '', '1', '2022-10-28 04:14:23', '2022-10-30 10:30:35');
INSERT INTO `users` VALUES ('8', 'ad2@gmail.com', '$2y$10$b0pwF43nhUQAT6ABDfOba.yK6WkLROAQb8lF.ruJndEAAX2esFF8q', '', '1', '2022-10-30 10:32:56', '2022-10-30 10:32:56');
INSERT INTO `users` VALUES ('9', 'us1@gmail.com', '$2y$10$tRfZKUpOcopxKJN0zjEvdOCKF4kvKS3f6.az2sw5mA4DjOI.5SFQ.', '', '3', '2022-10-30 10:33:33', '2022-10-30 10:33:50');

-- ----------------------------
-- Records of banners
-- ----------------------------
INSERT INTO `banners` VALUES ('1', 'Fédérateur. Personnalisé. Souple & adapté.', 'Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.', 'https://player.vimeo.com/video/298952841?byline=0&portrait=0&autoplay=1', 'Découvrez z0 Gravity', 'ZG_HomeHeader_v2@2x.png', '#F1F6FA', '#041839', '1', '2022-10-27 03:58:04', '2022-10-31 07:16:50');
INSERT INTO `banners` VALUES ('2', 'Fédérateur. Personnalisé. Souple & adapté.', 'Avec z0 Gravity, découvrez la simplicité et la performance d’une gestion de projet collaborative.', 'https://player.vimeo.com/video/656204074?autoplay=1', 'Découvrez z0 Gravity', 'ZG_HomeVideo_2x-768x799.png', '#041839', '#049BF7', '1', '2022-10-27 04:03:57', '2022-10-31 07:32:34');

-- ----------------------------
-- Records of testimonials
-- ----------------------------
INSERT INTO `testimonials` VALUES ('1', '/img/logo_forbes.jpg', 'First of all, there was security, the z0 Gravity tool was quickly validated by the Orange Cyberdefense teams.', 'Stéphane Touchet', 'PMO service client Orange Sud-Ouest', 'https://www.forbes.com/', '1', '2022-10-27 04:36:16', '2022-10-27 04:36:16');
INSERT INTO `testimonials` VALUES ('2', '/img/logo_forbes.jpg', 'First of all there was security, the z0 Gravity tool was quickly validated by the Orange Cyberdefense teams.', 'Stéphane Touchet', 'PMO service client Orange Sud-Ouest', 'https://www.forbes.com/', '1', '2022-10-27 04:37:34', '2022-10-27 04:37:34');
INSERT INTO `testimonials` VALUES ('3', '/img/logo_forbes.jpg', 'First of all there was security, the z0 Gravity tool was quickly validated by the Orange Cyberdefense teams.', 'Stéphane Touchet', 'PMO service client Orange Sud-Ouest', 'https://www.forbes.com/', '1', '2022-10-27 04:37:48', '2022-10-27 04:37:48');

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', 'image-6-16.9-285x240.jpg', 'How to choose your project management software', 'COMPANIES', 'Choosing the right project management software or project management tool is a crucial question for companies.', 'https://www.z0gravity.com/leblog/mieux-gerer-ses-projets/', '1', '2022-10-27 08:49:42', '2022-10-27 08:49:42');
INSERT INTO `articles` VALUES ('2', 'VISUEL-1-FB-09-03@2x-285x240.png', 'Public sector project management software', 'PUBLIC SECTOR', 'z0 Gravity is a project management software developed with and for local authorities. Thanks to its simple interface and on-board dashboard, this public sector project management software makes it possible to respond effectively to the time and budget constraints of local authorities.', 'https://www.z0gravity.com/leblog/logiciel-de-gestion-de-projet/', '1', '2022-10-27 08:51:03', '2022-10-27 08:51:03');
INSERT INTO `articles` VALUES ('3', 'zOG-portefeuille-de-projet-V3-4-285x240.jpg', 'SaaS online project management software', 'PMO', 'Managing a project actually involves carrying out a succession of very different tasks for the company and which must often be carried out simultaneously: planning, distribution of resources, tasks, reporting activities, monitoring of the progress of projects, budget consumption, etc.', 'https://www.z0gravity.com/leblog/logiciel-gestion-portefeuille-projets-pour-optimiser-votre-activite/', '1', '2022-10-27 08:52:02', '2022-10-27 08:52:02');
INSERT INTO `articles` VALUES ('4', 'ballons-dirigables-285x240.jpg', '7 key tips for properly equipping yourself with a project management tool', 'CUSTOMER', 'Decided it\'s time to invest in a project management tool for your business? Do you want to increase productivity and efficiency in the management of your day-to-day business and, at the same time, benefit all departments? It\'s a very good idea.', 'https://www.z0gravity.com/leblog/choisir-le-meilleur-outil-de-gestion-de-projet-pour-faire-decoller-son-activite/', '1', '2022-10-27 08:52:53', '2022-10-27 08:52:53');
