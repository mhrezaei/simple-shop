# MySQL-Front 3.2  (Build 6.25)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES 'utf8' */;

# Host: localhost    Database: ehda
# ------------------------------------------------------
# Server version 4.1.7-nt

#
# Table structure for table members
#

CREATE TABLE `members` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `DateApply` int(11) unsigned default NULL,
  `NameFirst` varchar(200) collate utf8_persian_ci default NULL,
  `NameLast` varchar(200) collate utf8_persian_ci default NULL,
  `NameFather` varchar(200) collate utf8_persian_ci default NULL,
  `GenderM` tinyint(1) NOT NULL default '1',
  `DateBirth` decimal(14,6) unsigned default NULL,
  `NationalCode` varchar(50) collate utf8_persian_ci default NULL,
  `Tel1` varchar(200) collate utf8_persian_ci default NULL,
  `Tel2` varchar(200) collate utf8_persian_ci default NULL,
  `AdProvienceID` int(2) default NULL,
  `AdCity` varchar(200) collate utf8_persian_ci default NULL,
  `AdRest` varchar(200) collate utf8_persian_ci default NULL,
  `AdCode` varchar(50) collate utf8_persian_ci default NULL,
  `Email` varchar(200) collate utf8_persian_ci default NULL,
  `Q1` longtext collate utf8_persian_ci,
  `Q2` longtext collate utf8_persian_ci,
  `Q3` longtext collate utf8_persian_ci,
  `SubjectIDs` longtext collate utf8_persian_ci,
  `MiscExperties` longtext collate utf8_persian_ci,
  `Approval` tinyint(1) NOT NULL default '1' COMMENT '0:Removed 1:Waiting 2:Approved',
  `Active` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

#
# Dumping data for table members
#

INSERT INTO `members` VALUES (1,1315546996,'طه','کامکار','علیرضا',1,13610707,'۰۰۷','2145342','12321313',13,'لاوان','خ لاوان دوازدهم، پ ۱۲','۰۲۱','chieftaha@gmail.com','از طریق دوستان','اینترنت','سوء استفاده',' 00000000001  00000000010  00000000015 ','ندارم',2,1);
INSERT INTO `members` VALUES (2,1315607008,'اردلان','عطاپور','ارسلان',1,13591205,'۰۰۷۷۷','234234234','13123312',9,'یاسوج','میدان امام، پلاک ۱۲','۲۳۴۲۳۴','aliasghar@yahoo.com','','','',' 00000000005  00000000017 ','',2,1);
INSERT INTO `members` VALUES (3,1315646897,'سمیرا','خدابنده','قربان',0,13700105,'۱۲۳۴','۲۲۶۸۳۰۶۵','۰۹۳۶۵۱۸۱۶۱۸',8,'تهران','صندوق پستی ۱۲۳۲۳۴','۱۲۳۴۲۳۴۳','alidoost@yahoo.com','معرفی دوستان و آشنایان','هنوز آشنا نشده‌‏ام.','انگیزه‌‏ی مادی',' 00000000003  00000000011  00000000015 ','',2,1);

#
# Table structure for table subjects
#

CREATE TABLE `subjects` (
  `ID` int(11) unsigned zerofill NOT NULL auto_increment,
  `Caption` varchar(200) collate utf8_persian_ci NOT NULL default '',
  `Active` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

#
# Dumping data for table subjects
#

INSERT INTO `subjects` VALUES (1,'شرکت در غرفه‌های اهدای عضو',1);
INSERT INTO `subjects` VALUES (2,'کمک در آماده‌سازی و صدور کارت‌های اهدای عضو',1);
INSERT INTO `subjects` VALUES (3,'کمک در برگزاری مراسم و همایش‌های مربوط به اهدای عضو',1);
INSERT INTO `subjects` VALUES (4,'کمک در ورود اطلاعات به برنامه‌های کامپیوتری',1);
INSERT INTO `subjects` VALUES (5,'برنامه‌نویسی کامپیوتری',1);
INSERT INTO `subjects` VALUES (6,'امور گرافیکی (طراحی پوستر و پمفلت و...)',1);
INSERT INTO `subjects` VALUES (7,'برگزاری کارگاه‌های آموزشی و ارائه‌ی سخنرانی در راستای ارتقای فرهنگ عمومی اهدای عضو',1);
INSERT INTO `subjects` VALUES (8,'تولید و تدوین تیزر',1);
INSERT INTO `subjects` VALUES (9,'تولید و تدوین مستندهای اهدای عضو',1);
INSERT INTO `subjects` VALUES (10,'تولید فیلم و سریال با موضوع اهدای عضو',1);
INSERT INTO `subjects` VALUES (11,'برپایی غرفه در مناطق مربوط و نمایشگاه‌ها',1);
INSERT INTO `subjects` VALUES (12,'پر کردن فرم اهدای عضو در محل‌های خاص',1);
INSERT INTO `subjects` VALUES (13,'تعامل با سازمان‌ها و ارگان‌های مختلف جهت ارتقای فرهنگ اهدای عضو',1);
INSERT INTO `subjects` VALUES (14,'تعامل با مدارس و دانشگاه‌ها جهت ارتقای فرهنگ اهدای عضو',1);
INSERT INTO `subjects` VALUES (15,'ارتباط با رسانه‌ها، جراید، و نشریات محلی در راستای فرهنگ‌‌سازی اهدای عضو',1);
INSERT INTO `subjects` VALUES (16,'تهیه، جمع‌آوری، و ترجمه‌ی مطالب علمی در رابطه با اهدای عضو و پیوند اعضا',1);
INSERT INTO `subjects` VALUES (17,'ایجاد گروه‌های حمایتی برای کمک به خانواده‌های اهداکننده‌ی عضو و بیماران پیوندشونده (مانند شغل‌یابی و...)',1);

#
# Table structure for table proviences
#

CREATE TABLE `proviences` (
  `ID` int(11) unsigned NOT NULL auto_increment,
  `Caption` varchar(200) collate utf8_persian_ci default NULL,
  `Active` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

#
# Dumping data for table proviences
#

INSERT INTO `proviences` VALUES (1,'آذربایجان شرقی',1);
INSERT INTO `proviences` VALUES (2,'آذربایجان غربی',1);
INSERT INTO `proviences` VALUES (3,'اردبیل',1);
INSERT INTO `proviences` VALUES (4,'اصفهان',1);
INSERT INTO `proviences` VALUES (5,'البرز',1);
INSERT INTO `proviences` VALUES (6,'ایلام',1);
INSERT INTO `proviences` VALUES (7,'بوشهر',1);
INSERT INTO `proviences` VALUES (8,'تهران',1);
INSERT INTO `proviences` VALUES (9,'چهارمحال و بختیاری',1);
INSERT INTO `proviences` VALUES (10,'خراسان رضوی',1);
INSERT INTO `proviences` VALUES (11,'خراسان جنوبی',1);
INSERT INTO `proviences` VALUES (12,'خراسان شمالی',1);
INSERT INTO `proviences` VALUES (13,'خوزستان',1);
INSERT INTO `proviences` VALUES (14,'زنجان',1);
INSERT INTO `proviences` VALUES (15,'سمنان',1);
INSERT INTO `proviences` VALUES (16,'سیستان و بلوچستان',1);
INSERT INTO `proviences` VALUES (17,'فارس',1);
INSERT INTO `proviences` VALUES (18,'قزوین',1);
INSERT INTO `proviences` VALUES (19,'قم',1);
INSERT INTO `proviences` VALUES (20,'کردستان',1);
INSERT INTO `proviences` VALUES (21,'کرمان',1);
INSERT INTO `proviences` VALUES (22,'کرمانشاه',1);
INSERT INTO `proviences` VALUES (23,'کهگیلویه و بویراحمد',1);
INSERT INTO `proviences` VALUES (24,'گلستان',1);
INSERT INTO `proviences` VALUES (25,'گیلان',1);
INSERT INTO `proviences` VALUES (26,'لرستان',1);
INSERT INTO `proviences` VALUES (27,'مازندران',1);
INSERT INTO `proviences` VALUES (28,'مرکزی',1);
INSERT INTO `proviences` VALUES (29,'هرمزگان',1);
INSERT INTO `proviences` VALUES (30,'همدان',1);
INSERT INTO `proviences` VALUES (31,'یزد',1);

#
# Table structure for table settings
#

CREATE TABLE `settings` (
  `ID` int(11) NOT NULL auto_increment,
  `Serial` varchar(200) collate utf8_persian_ci NOT NULL default '',
  `Hint` varchar(250) collate utf8_persian_ci default NULL,
  `Value` varchar(250) collate utf8_persian_ci default NULL,
  `Value2` mediumtext collate utf8_persian_ci,
  `AutoStyle` varchar(200) collate utf8_persian_ci default NULL,
  `Auto` tinyint(1) NOT NULL default '0',
  `Active` tinyint(1) NOT NULL default '1',
  `Priority` int(11) NOT NULL default '0',
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

#
# Dumping data for table settings
#

INSERT INTO `settings` VALUES (1,'AdminPass',NULL,'c4ca4238a0b923820dcc509a6f75849b',NULL,'PE',0,1,0);
INSERT INTO `settings` VALUES (2,'ServiceActive',NULL,'1',NULL,'N',0,1,0);
INSERT INTO `settings` VALUES (3,'ServiceTitle',NULL,'سامانه ثبت نام',NULL,NULL,0,1,0);
INSERT INTO `settings` VALUES (4,'AllowedDomain',NULL,NULL,NULL,'E',0,1,0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
