# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.38)
# Database: hoho6com_tea
# Generation Time: 2020-04-21 11:53:23 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table db_admin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_admin`;

CREATE TABLE `db_admin` (
  `admin_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` text NOT NULL,
  `website_title` text NOT NULL,
  `nav_options` int(11) NOT NULL,
  `admin_email` text NOT NULL,
  `admin_password` varchar(120) NOT NULL DEFAULT '',
  `admin_stat` varchar(1) NOT NULL,
  `admin_unique` varchar(60) NOT NULL,
  `admin_log_date` date NOT NULL,
  `admin_log_time` text NOT NULL,
  `admin_log_count` int(11) NOT NULL,
  `system_error` text NOT NULL,
  `front_email` text NOT NULL,
  `front_phone` text NOT NULL,
  `front_google_map_embed` text NOT NULL,
  `front_bhour_mon` text NOT NULL,
  `front_bhour_tue` text NOT NULL,
  `front_bhour_wed` text NOT NULL,
  `front_bhour_thu` text NOT NULL,
  `front_bhour_fri` text NOT NULL,
  `front_bhour_sat` text NOT NULL,
  `front_bhour_sun` text NOT NULL,
  `founder_name` text NOT NULL,
  `founder_tag` text NOT NULL,
  `founder_desc` text NOT NULL,
  `founder_cover` text NOT NULL,
  `admin_post` varchar(10) NOT NULL,
  `meta_placeNAME` text NOT NULL,
  `header_body_addon` text NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_admin` WRITE;
/*!40000 ALTER TABLE `db_admin` DISABLE KEYS */;

INSERT INTO `db_admin` (`admin_id`, `admin_name`, `website_title`, `nav_options`, `admin_email`, `admin_password`, `admin_stat`, `admin_unique`, `admin_log_date`, `admin_log_time`, `admin_log_count`, `system_error`, `front_email`, `front_phone`, `front_google_map_embed`, `front_bhour_mon`, `front_bhour_tue`, `front_bhour_wed`, `front_bhour_thu`, `front_bhour_fri`, `front_bhour_sat`, `front_bhour_sun`, `founder_name`, `founder_tag`, `founder_desc`, `founder_cover`, `admin_post`, `meta_placeNAME`, `header_body_addon`)
VALUES
	(1,'BCRAsia','BCRAsia Biznet',0,'info@bcrasia.org','be4e5ec43257c4e574c9b956a49f91b0','','5649fe9cc98a66.61720547','2017-06-15','4:27 PM',9,'','','','','','','','','','','','','','','','admin','','');

/*!40000 ALTER TABLE `db_admin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table db_annoucement_post
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_annoucement_post`;

CREATE TABLE `db_annoucement_post` (
  `post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `post_time` text NOT NULL,
  `post_pdate` date NOT NULL,
  `post_ptime` text NOT NULL,
  `post_title` text NOT NULL,
  `post_slug` varchar(120) NOT NULL,
  `post_contents` blob NOT NULL,
  `post_stat` varchar(1) NOT NULL,
  `post_display` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `post_cover` text NOT NULL,
  `post_token` varchar(120) NOT NULL DEFAULT '',
  `post_type` text NOT NULL,
  `cate_id` int(11) NOT NULL,
  `event_venue` text NOT NULL,
  `event_address` text NOT NULL,
  `event_date` date NOT NULL,
  `event_time` text NOT NULL,
  `event_speaker_id` int(11) NOT NULL,
  `event_profile_first_id` int(11) NOT NULL,
  `event_profile_second_id` int(11) NOT NULL,
  `event_emcee` int(11) NOT NULL,
  `event_fees_early` decimal(19,2) NOT NULL,
  `event_fees_early_before` date NOT NULL,
  `event_fees` decimal(19,2) NOT NULL,
  `event_agenda` text NOT NULL,
  `event_details` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_annoucement_post_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_annoucement_post_category`;

CREATE TABLE `db_annoucement_post_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` text NOT NULL,
  `cate_stat` varchar(1) NOT NULL,
  `cate_slug_url` varchar(120) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_annoucement_post_comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_annoucement_post_comments`;

CREATE TABLE `db_annoucement_post_comments` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_date` date NOT NULL,
  `comment_time` text NOT NULL,
  `visitor_token` text NOT NULL,
  `comment_contents` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_email` text NOT NULL,
  `blog_id` int(11) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `comment_stat` varchar(1) NOT NULL,
  `comment_display` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `comment_token` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_blog_post
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_blog_post`;

CREATE TABLE `db_blog_post` (
  `post_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_date` date NOT NULL,
  `post_time` text NOT NULL,
  `post_pdate` date NOT NULL,
  `post_ptime` text NOT NULL,
  `post_title` text NOT NULL,
  `post_slug` varchar(120) NOT NULL,
  `post_contents` blob NOT NULL,
  `post_stat` varchar(1) NOT NULL,
  `post_display` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `post_cover` text NOT NULL,
  `post_token` varchar(120) NOT NULL DEFAULT '',
  `post_type` text NOT NULL,
  `cate_id` int(11) NOT NULL,
  `event_venue` text NOT NULL,
  `event_address` text NOT NULL,
  `event_date` date NOT NULL,
  `event_time` text NOT NULL,
  `event_speaker_id` int(11) NOT NULL,
  `event_profile_first_id` int(11) NOT NULL,
  `event_profile_second_id` int(11) NOT NULL,
  `event_emcee` int(11) NOT NULL,
  `event_fees_early` decimal(19,2) NOT NULL,
  `event_fees_early_before` date NOT NULL,
  `event_fees` decimal(19,2) NOT NULL,
  `event_agenda` text NOT NULL,
  `event_details` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_blog_post_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_blog_post_category`;

CREATE TABLE `db_blog_post_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` text NOT NULL,
  `cate_stat` varchar(1) NOT NULL,
  `cate_slug_url` varchar(120) NOT NULL,
  `cate_feature` int(11) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_blog_post_category` WRITE;
/*!40000 ALTER TABLE `db_blog_post_category` DISABLE KEYS */;

INSERT INTO `db_blog_post_category` (`cate_id`, `cate_name`, `cate_stat`, `cate_slug_url`, `cate_feature`)
VALUES
	(1,'S.E.A Connect','','sea-connect',0),
	(2,'Lifestyle & Healthy Living','','lifestyle-healthy-living',0),
	(3,'Event & Activity','','event-activity',0),
	(4,'Business Library','','business-library',0),
	(5,'Social Media & Marketing','','social-media-marketing',0),
	(6,'Start-up & Funding','','start-up-funding',0),
	(7,'Opportunity & Strategy','','opportunity-strategy',0),
	(8,'Innovative & Technology','','innovative-technology',0),
	(9,'Logistic Knowledge Q&A','','logistic-knowledge',0),
	(10,'Investment & Estate Planning','','investment-estate-planning',0),
	(11,'Online Course & Training','','online-course-training',0),
	(12,'DR on CALL','','dr-on-call',0);

/*!40000 ALTER TABLE `db_blog_post_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table db_blog_post_comments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_blog_post_comments`;

CREATE TABLE `db_blog_post_comments` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `comment_date` date NOT NULL,
  `comment_time` text NOT NULL,
  `visitor_token` text NOT NULL,
  `comment_contents` text NOT NULL,
  `comment_name` text NOT NULL,
  `comment_email` text NOT NULL,
  `blog_id` int(11) NOT NULL,
  `reply_id` int(11) NOT NULL,
  `comment_stat` varchar(1) NOT NULL,
  `comment_display` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `comment_token` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_events`;

CREATE TABLE `db_events` (
  `event_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `event_stat` varchar(1) NOT NULL,
  `event_token` varchar(120) NOT NULL,
  `event_type` varchar(120) NOT NULL,
  `event_venue` text NOT NULL,
  `event_address` text NOT NULL,
  `event_date` date NOT NULL,
  `event_time` varchar(50) NOT NULL,
  `event_speaker_id` int(11) NOT NULL,
  `event_profile_first_id` int(11) NOT NULL,
  `event_profile_second_id` int(11) NOT NULL,
  `event_emcee` int(11) NOT NULL,
  `event_fees_early` decimal(19,2) NOT NULL,
  `event_fees_early_before` date NOT NULL,
  `event_fees` decimal(19,2) NOT NULL,
  `event_agenda` text NOT NULL,
  `event_details` text NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_events_log
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_events_log`;

CREATE TABLE `db_events_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_date` date NOT NULL,
  `log_time` varchar(30) NOT NULL,
  `log_stat` varchar(1) NOT NULL,
  `member_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `log_name` text NOT NULL,
  `log_email` text NOT NULL,
  `log_phone` text NOT NULL,
  `log_company` text NOT NULL,
  `log_area` text NOT NULL,
  `log_meal` varchar(20) NOT NULL,
  `log_status` int(11) NOT NULL,
  `log_checkin` int(11) NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_gallery`;

CREATE TABLE `db_gallery` (
  `image_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `image_name` text NOT NULL,
  `image_url` text NOT NULL,
  `image_thumb` text NOT NULL,
  `image_stat` varchar(1) NOT NULL,
  `page_slug` varchar(120) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `image_display` int(11) NOT NULL,
  `image_sort` int(11) NOT NULL,
  `image_link` text NOT NULL,
  `image_target` varchar(50) NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_member
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_member`;

CREATE TABLE `db_member` (
  `member_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `member_token` varchar(30) NOT NULL,
  `member_date` date NOT NULL,
  `member_time` varchar(30) NOT NULL,
  `member_name` text NOT NULL,
  `member_description` text NOT NULL,
  `member_email` text NOT NULL,
  `member_username` varchar(10) NOT NULL DEFAULT '',
  `member_phone` text NOT NULL,
  `member_password` varchar(120) NOT NULL,
  `member_wechat` varchar(120) NOT NULL,
  `member_whatsapp` int(11) NOT NULL,
  `member_gender` int(11) NOT NULL,
  `member_post` varchar(60) NOT NULL,
  `member_area` text NOT NULL,
  `member_company` text NOT NULL,
  `member_meal` text NOT NULL,
  `member_first_event_date` date NOT NULL,
  `member_first_event_id` int(11) NOT NULL,
  `member_stat` varchar(1) NOT NULL,
  `member_display` int(11) NOT NULL,
  `member_event_times` int(11) NOT NULL,
  `member_cover` text NOT NULL,
  `member_website` text NOT NULL,
  `member_comp_logo` text NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table db_token
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_token`;

CREATE TABLE `db_token` (
  `token_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `token_date` text NOT NULL,
  `token_time` text NOT NULL,
  `token_code` text NOT NULL,
  `token_stat` varchar(1) NOT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
