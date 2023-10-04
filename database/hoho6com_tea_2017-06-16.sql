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
	(1,'T.E.A Admin','The Entrepreneur Asia - Your Business Newsletter',0,'admin@tea','be4e5ec43257c4e574c9b956a49f91b0','','5649fe9cc98a66.61720547','2017-06-16','10:33 PM',10,'','','','','','','','','','','','','','','','admin','','');

/*!40000 ALTER TABLE `db_admin` ENABLE KEYS */;
UNLOCK TABLES;

# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_advert`;

CREATE TABLE `db_advert` (
  `advert_id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_name` text NOT NULL,
  `advert_url` text NOT NULL,
  `advert_image` text NOT NULL,
  `advert_stat` text NOT NULL,
  `advert_display` tinyint(1) NOT NULL,
  `advert_clicked` int(11) NOT NULL,
  `advert_sort` int(11) NOT NULL,
  `advert_type` varchar(60) NOT NULL,
  PRIMARY KEY (`advert_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `db_advert` WRITE;
/*!40000 ALTER TABLE `db_advert` DISABLE KEYS */;

INSERT INTO `db_advert` (`advert_id`, `advert_name`, `advert_url`, `advert_image`, `advert_stat`, `advert_display`, `advert_clicked`, `advert_sort`, `advert_type`)
VALUES
	(1,'Sample Ads','http://www.brandon.my','http://www.theentrepreneurasia/assets/img/sb-banner-img.jpg','',1,1,0,'aside_320x270'),
	(2,'Sample Ads','http://www.bcrasia.org','/assets/others/bcrasia-001.jpg','',1,1,0,'top_728x90');

/*!40000 ALTER TABLE `db_advert` ENABLE KEYS */;
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
  `post_view` int(11) NOT NULL,
  `editor_choice` int(11) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_blog_post` WRITE;
/*!40000 ALTER TABLE `db_blog_post` DISABLE KEYS */;

INSERT INTO `db_blog_post` (`post_id`, `post_date`, `post_time`, `post_pdate`, `post_ptime`, `post_title`, `post_slug`, `post_contents`, `post_stat`, `post_display`, `admin_id`, `post_cover`, `post_token`, `post_type`, `cate_id`, `post_view`, `editor_choice`)
VALUES
	(1,'2017-06-16','8:59 PM','2017-06-16','9:42 PM','Test ä»€éº¼éƒ½å€¼å¾—','test-ä»€éº¼éƒ½å€¼å¾—-1',X'3C6832207374796C653D226D617267696E3A203070782030707820313070783B2070616464696E673A203070783B20666F6E742D7765696768743A203430303B206C696E652D6865696768743A20323470783B20666F6E742D66616D696C793A204461757068696E506C61696E3B20666F6E742D73697A653A20323470783B20636F6C6F723A2072676228302C20302C2030293B223E0D0A0957686174206973204C6F72656D20497073756D3F3C2F68323E0D0A3C70207374796C653D226D617267696E3A203070782030707820313570783B2070616464696E673A203070783B20746578742D616C69676E3A206A7573746966793B20636F6C6F723A2072676228302C20302C2030293B20666F6E742D66616D696C793A202671756F743B4F70656E2053616E732671756F743B2C20417269616C2C2073616E732D73657269663B20666F6E742D73697A653A20313470783B223E0D0A093C7374726F6E67207374796C653D226D617267696E3A203070783B2070616464696E673A203070783B223E4C6F72656D20497073756D3C2F7374726F6E673E266E6273703B69732073696D706C792064756D6D792074657874206F6620746865207072696E74696E6720616E64207479706573657474696E6720696E6475737472792E204C6F72656D20497073756D20686173206265656E2074686520696E647573747279262333393B73207374616E646172642064756D6D79207465787420657665722073696E6365207468652031353030732C207768656E20616E20756E6B6E6F776E207072696E74657220746F6F6B20612067616C6C6579206F66207479706520616E6420736372616D626C656420697420746F206D616B65206120747970652073706563696D656E20626F6F6B2E20497420686173207375727669766564206E6F74206F6E6C7920666976652063656E7475726965732C2062757420616C736F20746865206C65617020696E746F20656C656374726F6E6963207479706573657474696E672C2072656D61696E696E6720657373656E7469616C6C7920756E6368616E6765642E2049742077617320706F70756C61726973656420696E207468652031393630732077697468207468652072656C65617365206F66204C657472617365742073686565747320636F6E7461696E696E67204C6F72656D20497073756D2070617373616765732C20616E64206D6F726520726563656E746C792077697468206465736B746F70207075626C697368696E6720736F667477617265206C696B6520416C64757320506167654D616B657220696E636C7564696E672076657273696F6E73206F66204C6F72656D20497073756D2E3C2F703E0D0A','',1,1,'https://s3-ap-southeast-1.amazonaws.com/bcrasia.org/events/2017-04-26/330-2.jpg','1746C60585','',1,0,0);

/*!40000 ALTER TABLE `db_blog_post` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table db_blog_post_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_blog_post_category`;

CREATE TABLE `db_blog_post_category` (
  `cate_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cate_name` text NOT NULL,
  `cate_stat` varchar(1) NOT NULL,
  `cate_slug_url` varchar(120) NOT NULL,
  `cate_feature` int(11) NOT NULL,
  `cate_sub` int(11) NOT NULL,
  `cate_display` int(11) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_blog_post_category` WRITE;
/*!40000 ALTER TABLE `db_blog_post_category` DISABLE KEYS */;

INSERT INTO `db_blog_post_category` (`cate_id`, `cate_name`, `cate_stat`, `cate_slug_url`, `cate_feature`, `cate_sub`, `cate_display`)
VALUES
	(1,'S.E.A Connect','','sea-connect',0,2,0),
	(2,'Lifestyle & Healthy Living','','lifestyle-healthy-living',0,2,0),
	(3,'Event & Activity','','event-activity',0,2,0),
	(4,'Business Library','','business-library',0,2,0),
	(5,'Social Media & Marketing','','social-media-marketing',0,2,0),
	(6,'Start-up & Funding','','start-up-funding',0,2,0),
	(7,'Opportunity & Strategy','','opportunity-strategy',0,2,0),
	(8,'Innovative & Technology','','innovative-technology',0,2,0),
	(9,'Logistic Knowledge Q&A','','logistic-knowledge',0,2,0),
	(10,'Investment & Estate Planning','','investment-estate-planning',0,2,0),
	(11,'Online Course & Training','','online-course-training',0,2,0),
	(12,'DR on CALL','','dr-on-call',0,2,0),
	(13,'Success Stories','','success-stories',0,1,0),
	(14,'Market Updates','','market-updates',0,1,0),
	(15,'SME Academy','','sme-academy',0,1,0),
	(16,'Economy','','economy',0,1,0),
	(17,'Policy & U','','policy-n-u',0,1,0),
	(18,'News','','news',0,0,0);

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


# Dump of table db_landing
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_landing`;

CREATE TABLE `db_landing` (
  `landing_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `landing_title` text NOT NULL,
  `landing_url` text NOT NULL,
  `landing_type` int(11) NOT NULL,
  `landing_display` int(11) NOT NULL,
  `landing_content` text NOT NULL,
  `landing_stat` text NOT NULL,
  `landing_menu` int(11) NOT NULL,
  `landing_menu_title` text NOT NULL,
  `landing_sort` int(11) NOT NULL,
  `landing_smo` int(11) NOT NULL,
  `landing_question` text NOT NULL,
  PRIMARY KEY (`landing_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


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


# Dump of table db_tinyURL
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_tinyURL`;

CREATE TABLE `db_tinyURL` (
  `tiny_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url_token` varchar(50) NOT NULL DEFAULT '',
  `url_page` varchar(35) NOT NULL,
  `url_cate` varchar(35) NOT NULL,
  `url_action` varchar(35) NOT NULL,
  `url_id` varchar(35) NOT NULL,
  `url_actual` text NOT NULL,
  `url_date` date NOT NULL,
  `url_click` int(11) NOT NULL,
  `url_stat` varchar(1) NOT NULL,
  `url_canonical` varchar(3) NOT NULL DEFAULT '',
  PRIMARY KEY (`tiny_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_tinyURL` WRITE;
/*!40000 ALTER TABLE `db_tinyURL` DISABLE KEYS */;

INSERT INTO `db_tinyURL` (`tiny_id`, `url_token`, `url_page`, `url_cate`, `url_action`, `url_id`, `url_actual`, `url_date`, `url_click`, `url_stat`, `url_canonical`)
VALUES
	(1,'sample','about-tea','','','','/about-tea','0000-00-00',0,'','yes'),
	(2,'subscribe-online','landing','1','','','/landing/1/Online-Subscribe.html','0000-00-00',0,'','yes'),
	(3,'subscribe-hardcopy','landing','2','','','/landing/1/Subscribe-Hardcopy.html','0000-00-00',0,'','yes');

/*!40000 ALTER TABLE `db_tinyURL` ENABLE KEYS */;
UNLOCK TABLES;


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

LOCK TABLES `db_token` WRITE;
/*!40000 ALTER TABLE `db_token` DISABLE KEYS */;

INSERT INTO `db_token` (`token_id`, `token_date`, `token_time`, `token_code`, `token_stat`)
VALUES
	(1,'2017-06-16','8:59 PM','1746c6058512485362aeea972d836261','');

/*!40000 ALTER TABLE `db_token` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table db_visitor_log
# ------------------------------------------------------------

DROP TABLE IF EXISTS `db_visitor_log`;

CREATE TABLE `db_visitor_log` (
  `log_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `log_date` date NOT NULL,
  `log_time` text NOT NULL,
  `log_stamp_date` date NOT NULL,
  `log_stamp_time` text NOT NULL,
  `log_desc` text NOT NULL,
  `log_stat` varchar(1) NOT NULL,
  `log_unique` text NOT NULL,
  PRIMARY KEY (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `db_visitor_log` WRITE;
/*!40000 ALTER TABLE `db_visitor_log` DISABLE KEYS */;

INSERT INTO `db_visitor_log` (`log_id`, `log_date`, `log_time`, `log_stamp_date`, `log_stamp_time`, `log_desc`, `log_stat`, `log_unique`)
VALUES
	(1,'2017-06-16','10:31 PM','0000-00-00','','','','5943ebdf1363d');

/*!40000 ALTER TABLE `db_visitor_log` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
