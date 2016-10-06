-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2014 at 10:05 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `safiran`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `repTime` bigint(20) NOT NULL,
  `repText` longtext CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `title`, `comment`, `status`, `time`, `repTime`, `repText`) VALUES
(29, 'محمد', 'aaa@ssss.com', 'خهطعظیاملتظتیبن', 'کهخاطیبل طیبلا تطیبلنتا طیبلا طیبلنات بیل', 1, 1390336576, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `catID` int(11) NOT NULL,
  `gForID` bigint(11) NOT NULL,
  `status` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `res1` varchar(10000) COLLATE utf8_persian_ci NOT NULL,
  `res2` varchar(10000) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=118 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `title`, `catID`, `gForID`, `status`, `time`, `res1`, `res2`) VALUES
(1, 'img1.jpg', 'طرح عیدانه 2', 2, 1, 2, 0, '', ''),
(2, 'img2.jpg', 'طرح عیدانه 2', 2, 1, 2, 0, '', ''),
(3, 'img3.jpg', 'طرح عیدانه 2', 2, 1, 2, 0, '', ''),
(4, 'img4.jpg', 'طرح عیدانه 2', 2, 1, 2, 0, '', ''),
(5, 'img5.jpg', 'طرح عیدانه 2', 2, 1, 2, 0, '', ''),
(6, 'img6.jpg', 'طرح عیدانه 2', 2, 1, 2, 0, '', ''),
(47, 'e8709a741227b3fba1067a490f14c341.jpg', 'آلبوم متفرقه جدید', 3, 1401628702, 2, 1390318488, '', ''),
(46, 'a5ec11f8675b0c648f2117aabeb45b65.jpg', 'آلبوم متفرقه جدید', 3, 1401628702, 2, 1390318488, '', ''),
(45, '035a1e25ca9ccd117b53aa9151af62ec.jpg', 'آلبوم متفرقه جدید', 3, 1401628702, 2, 1390318487, '', ''),
(44, 'd7ebd1df272b0e335728a0cbc228c8d1.jpg', 'آلبوم متفرقه جدید', 3, 1401628702, 2, 1390318487, '', ''),
(43, 'f9ae1a24ebef75a6871a33f5c0947d47.jpg', 'آلبوم متفرقه جدید', 3, 1401628702, 2, 1390318487, '', ''),
(42, 'a4622fc5a822adb8f9749decd0d1770b.jpg', 'آلبوم متفرقه جدید', 3, 1401628702, 2, 1390318487, '', ''),
(34, '1b0f3e6dfa57a42839cc9ebccf71919f.jpg', 'این آلبوم جدید است', 1, 12, 2, 1390317506, '', ''),
(35, '0b97e8d972b47f0857274ffa14c779ee.jpg', 'این آلبوم جدید است', 1, 12, 2, 1390317506, '', ''),
(36, '5cb8a6ba4906ed32842adb38ad7978f5.jpg', 'این آلبوم جدید است', 1, 12, 2, 1390317507, '', ''),
(37, '20c2a1d3b748657e4570f1ee6c577aa4.jpg', 'این آلبوم جدید است', 1, 12, 2, 1390317507, '', ''),
(38, '908cacfbf897c2b2a23a06348fc1c107.jpg', 'این آلبوم جدید است', 1, 12, 2, 1390317507, '', ''),
(39, '3a668e7a7a962f0b8fd2d96dd8bcb068.jpg', 'این آلبوم جدید است', 1, 12, 2, 1390317507, '', ''),
(40, '9853e0fe75e93e3153ea19535d0b886a.jpg', 'این آلبوم جدید است', 1, 12, 2, 1390317507, '', ''),
(41, '13b90d9d3aaa55999afe4b3cbf0ea2d7.jpg', 'این آلبوم جدید است', 1, 12, 2, 1390317508, '', ''),
(48, '5076555d87b03b0a9e300b52689f279f.jpg', 'آلبوم متفرقه جدید', 3, 1401628702, 2, 1390318488, '', ''),
(49, '5411f6f166dc3c13dc37b285b8663184.jpg', 'آلبوم متفرقه جدید', 3, 1401628702, 2, 1390318488, '', ''),
(50, 'ef275311ba18541d65d5348600d2cfa4.jpg', 'سلام آلبوم', 1, 13, 2, 1390324361, '', ''),
(51, '9bf10de2cafb46a09faa9ff44ac5ea96.jpg', 'سلام آلبوم', 1, 13, 2, 1390324361, '', ''),
(52, 'c0da2022be4ab89bb92679b16e2a7916.jpg', 'سلام آلبوم', 1, 13, 2, 1390324362, '', ''),
(53, 'e4397b964a112223ab4728b51238bfae.jpg', 'سلام آلبوم', 1, 13, 2, 1390324362, '', ''),
(54, '511da7a62e9fa4ac4f0856cdbdee8e7d.jpg', 'سلام آلبوم', 1, 13, 2, 1390324362, '', ''),
(55, '35e5f87c7739bc8070b4b42d7a71122e.jpg', 'سلام آلبوم', 1, 13, 2, 1390324362, '', ''),
(56, '08b736b2d5b6a524b32b6ec6b287043c.jpg', 'سلام آلبوم', 1, 13, 2, 1390324362, '', ''),
(57, 'a55208118c3061bc77385d971ae2db9d.jpg', 'سلام آلبوم', 1, 13, 2, 1390324362, '', ''),
(115, 'e6f030409b4b7724e42821d8f6611a00.jpg', 'متفرقه 1', 3, 1402218456, 2, 1391273223, '', ''),
(114, '014508ef0690a1dd82e3cd7fe41437f0.jpg', 'متفرقه 1', 3, 1402218456, 2, 1391273223, '', ''),
(113, 'be0fd699c32ae7630a95b49e8ed66e3f.jpg', 'متفرقه 1', 3, 1402218456, 2, 1391273223, '', ''),
(112, '0bf5cde979b85af8bb1c320fd9e39dee.jpg', 'متفرقه 1', 3, 1402218456, 2, 1391273223, '', ''),
(111, 'ffe4d2a6208b436d21d01a461c8d9eeb.jpg', 'متفرقه 1', 3, 1402218456, 2, 1391273223, '', ''),
(110, '32ec8b87059d442463c68b7885947c2c.jpg', 'متفرقه 1', 3, 1402218456, 2, 1391273223, '', ''),
(109, '27ae34ec740de2ac1096cb2645ef013b.jpg', 'متفرقه 1', 3, 1402218456, 2, 1391273223, '', ''),
(108, 'd7af4a41765e3f9d9aff287c158116a0.jpg', 'متفرقه 1', 3, 1402218456, 2, 1391273222, '', ''),
(107, '17534722681750689249edf01e38eb91.jpg', 'عیدانه 2', 2, 1, 2, 1391273071, '', ''),
(106, '886ba393763b0a7ccce4154e75977e0f.jpg', 'عیدانه 2', 2, 1, 2, 1391273071, '', ''),
(105, '0e4a6e4254e1fae72c00b3b813b85c34.jpg', 'عیدانه 2', 2, 1, 2, 1391273071, '', ''),
(104, 'ce9db4c6cd3d08ca2a75d904a6c90154.jpg', 'عیدانه 2', 2, 1, 2, 1391273070, '', ''),
(103, '8135e7e7615568f3af2be321022150b9.jpg', 'عیدانه 2', 2, 1, 2, 1391273070, '', ''),
(102, 'f7763307003ab17f67e994553305044f.jpg', 'عیدانه 2', 2, 1, 2, 1391273070, '', ''),
(101, '0740a826564eaabee50ceb0ddffca362.jpg', 'عیدانه 2', 2, 1, 2, 1391273070, '', ''),
(100, '8101f34ad3649fd115c766a5e087ab56.jpg', 'عیدانه 2', 2, 1, 2, 1391273070, '', ''),
(116, 'd1334f75b0a572de427eae3baba84289.jpg', 'متفرقه 1', 3, 1402218456, 2, 1391273526, '', ''),
(117, 'adec48d339f4857b5b8f80541bd9240d.jpg', 'متفرقه 1', 3, 1402218456, 2, 1391273526, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `text` longtext COLLATE utf8_persian_ci NOT NULL,
  `status` int(11) NOT NULL,
  `userIdWrite` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `date` bigint(20) NOT NULL,
  `modiDate` bigint(20) NOT NULL,
  `modiUserId` int(11) NOT NULL,
  `res1` varchar(5000) COLLATE utf8_persian_ci NOT NULL,
  `res2` varchar(5000) COLLATE utf8_persian_ci NOT NULL,
  `res3` varchar(5000) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `status`, `userIdWrite`, `view`, `date`, `modiDate`, `modiUserId`, `res1`, `res2`, `res3`) VALUES
(12, 'تیتر خبر واسه فریبا', '&lt;p dir=&quot;rtl&quot;&gt;سلام فریبا جوونم چطوری؟&lt;/p&gt;\r\n', 2, 30, 3, 1389817172, 0, 0, '', '', ''),
(11, 'تیتر خبر دوم سایت', '&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;سلام سایت جدید حالت چطوره تو؟&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://localhost/safiran/images/upload/d5d7d822731b96fca495449c0494b186.jpg&quot; style=&quot;height:427px; width:570px&quot; /&gt;&lt;/p&gt;\r\n', 1, 30, 1, 1389729639, 0, 0, '', '', ''),
(13, 'سلام این یه خبر جدیده', '&lt;p&gt;سلام این یه خبر جدیده که الان دارم ثبت می کنم&lt;/p&gt;\r\n', 1, 30, 4, 1389900910, 0, 0, '', '', ''),
(10, 'تیتر خبر اول سایت بعد از ویرایش', '&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;سلام سایت جدید حالت چطوره تو؟&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://localhost/safiran/images/upload/d5d7d822731b96fca495449c0494b186.jpg&quot; style=&quot;height:427px; width:570px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;اینم متن بعد از ویرایش&lt;/p&gt;\r\n', 1, 30, 2, 1388435400, 1389903354, 30, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `text` longtext COLLATE utf8_persian_ci NOT NULL,
  `status` int(11) NOT NULL,
  `date` bigint(20) NOT NULL,
  `res1` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`, `status`, `date`, `res1`) VALUES
(1, 'درباره سفیران زندگی', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;به نام او که سرآغاز همه خوبیهاست&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در جامعه ی متمدن امروزی، گاه ما انسان ها به حدی درگیر روزمرگی ها و مشغله های دنیای شلوغ مدرنمان میشویم که از حقایق وجودیمان روزبه روز دورتر و دورتر می شویم .و گاه یادمان میرود شاکر نعمت هایی باشیم که شاید برای دیگری یک آرزوست... شب ها با چنان آرامش و اطمینانی سر بر بالین می نهیم که گویی گردونه ی زندگی هماره بر وفق مراد خواهد گشت... اما بیایید نگاهی متفاوت تر به زندگی داشته باشیم،به سادگی از کنار آدم ها عبور نکنیم. ما همانیم که شعر بزرگ شاعر سرزمینمان نوازشگر چشمان مردم سراسر جهان است بر سر در سازمان ملل متحد&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;بنی آدم اعضای یک پیکرند ............ که در آفرینش زیک گوهرند&lt;br /&gt;\r\nچو عضوی به درد آورد روزگار............. دگر عضو ها را نماند قرار&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;از این رو ، باری دیگر جمعی از جوانان این مرز و بوم جمع شده اند که دغدغه ای فراتر از روزمرگی های اطرافشان دارند. ایستاده اند تا دستی بگیرند نه تنها برای برخاستن دیگری، بلکه برای تعالی روح خویش... برای آنکه در دعاهای نماز مادری جای گیرند و دعای خیری بدرقه جوانی خود کنند... تا همچنان سفیری باشند برای بشارت زندگی...&lt;br /&gt;\r\nاکنون که توفیق رفیقشان شده کنار هم و دست به دست هم ،همراه بزرگ مردمی از این سرزمین کهن شده اند تا طرحی نو از عاشقی رقم بزنند.&lt;br /&gt;\r\nگروه سفیران زندگی نخستین بار در سال 1384با همت دکتر مسعود شیعه مرتضی به منظور ارتقا فرهنگ اهدا عضو در جامعه و کمک به واحد فراهم آوری اعضای پیوندی بیمارستان دکتر مسیح دانشوری شکل گرفت و هدف این تشکل مردمی که اعضای آن افراد داوطلب بودند چیزی جز تنومند شدن نهال نوپای اهدای عضو نبود.&lt;br /&gt;\r\nاز این روی با نظارت واحد پیوند همواره در مراسم ها و نمایشگاه های کشوری در غرفه هایی جهت فرهنگ سازی اهدای عضو ،اموزش و پاسخ گویی به سوالات مراجعان و ثبت نام کارت های اهدای عضو حضور فعال داشتند.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;نمونه هایی از فعالیت های سفیران زندگی در واحد پیوند بیمارستان دکتر مسیح دانشوری&lt;br /&gt;\r\nحضور هرساله در غرفه ی واحد پیوند 30 شب ماه مبارک رمضان&lt;br /&gt;\r\nحضور هر ساله در غرفه ی واحد پیوند در 10 روز نمایشگاه کتاب&lt;br /&gt;\r\nحضور هر ساله در جشن نفس (بزرگداشت پیوند اعضا)&lt;br /&gt;\r\nبرگزاری غرفه در پارک ها، اردو های راهیان نور، فرهنگسراها&lt;br /&gt;\r\nبرگزاری جشن نفس 1390 به صورت مستقل از سایر ارگان ها تحت نظارت واحد پیوند&lt;br /&gt;\r\nهمکاری در برگزاری اولین دوره آموزشی بین المللی اهدای عضو در مرکز همایشات رایزن تیرماه1390&lt;br /&gt;\r\nمدیریت سایت قبلی سفیران زندگی جهت فرهنگسازی اهدای عضو با 2500 کاربر&lt;br /&gt;\r\nآخرین فعالیت این گروه در این راستا در سال 1390 اولین همایش سراسری سفیران زندگی بود که با حضور تعداد قریب به هزار سفیرزندگی از اقصی نقاط کشور در تهران برگزار شد.&lt;br /&gt;\r\nهسته مرکزی این انجمن با اطمینان از تناوری نهال اهدای عضودر مهرماه 1390، واحد پیوند را به نیروهای تازه نفس سپرد ودر راستای اهداف انسانی خود قدم در راهی بس سنگین تر نهاد .&lt;br /&gt;\r\nاین بار اراده خادمان هسته مرکزی بر پایه ی یاری رساندن به انجمن احیاء ارزشها و انجمن توانیاب متمرکز گردید&lt;br /&gt;\r\nانجمن سفیران زندگی در سال 1390 همکاری با انجمن حمایت و یاری اسیب دیدگان اجتماعی و انجمن توانیاب را اغاز کرد و درامور زیر همراه و هم قدم این مردم نیک اندیش شد.&lt;br /&gt;\r\nهمراهی در برگزاری مراسم چهارشنبه سوری برای کودکان انجمن و خانواده های تحت پوشش&lt;br /&gt;\r\nکمک در تهیه سبد کالای خانوار جهت عید نوروز&lt;br /&gt;\r\nهمراهی در برگزاری مراسم 7 می (روز جهانی ایتام ایدز)&lt;br /&gt;\r\nهمراهی در برگزاری مراسم افطاری درماه مبارک رمضان 1391&lt;br /&gt;\r\nهمراهی و جمع آوری و بسته بندی کمک های مردمی ارسال شده به دفتر انجمن جهت زلزله زدگان اذربایجان تابستان 1391&lt;br /&gt;\r\nهمراهی در برگزاری مراسم چهلم درگذشتگان زلزله اذربایجان&lt;br /&gt;\r\nهمراهی در برگزاری مراسم روز جهانی کودک&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و...&lt;br /&gt;\r\nپس از گذشت یکسال و حضور در تمامی مراسم های این انجمن؛ سفیران زندگی به دنبال هدفی والاتر و یاری رساندن به جمعی دیگر، تصمیم گرفتند تا منتشر کننده عشق و مهر در سایر مراکز و موسساتی باشند که مهر میبخشند و عشق را متجلی میکنند تا یادگاری بگذارند از لحظات سرشار از زندگی&lt;br /&gt;\r\nبازدید نوروزی از آسایشگاه سالمندان کهریزک فروردین 1392&lt;br /&gt;\r\nبا اجرای طرح عیدانه گامی دیگر در جهت خدمت به همنوعان برداشتیم:&lt;br /&gt;\r\nاجرای طرح عیدانه به منظور تامین سبد غذایی سال نو برای خانواده های محروم&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;گزارش مختصری از اولین طرح عیدانه در زمستان 1391&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;کل مبلغ واریز شده از تاریخ91/11/1 تا تاریخ 91/12/12 برابر است با 5.422.500 تومان&lt;br /&gt;\r\nپس از برآورد قیمت و بررسی های انجام شده اقلام زیر جهت سبد کالای نوروزی خریداری شد:&lt;br /&gt;\r\nیک کیلو گوشت چرخ کرده، دو عدد مرغ (2.400گرم)،یک کیلو عدس،یک کیلو لوبیا،یک کیلوقند ، یک کیلو شکر ، پنج کیلو برنج ،یک عدد روغن مایع ،یک قوطی رب،یک بسته سویا ،یک بسته شکلات ،یک بسته ماکارانی و یک پاکت حاوی 5000تومان وجه نقد که در مجموع تعداد 78سبد غذایی با بذل محبت های مردم عزیزمان تهیه گردید.&lt;br /&gt;\r\nتوزیع سبد کالا بین خانواده های نیازمند شناسایی شده و معرفی شده از تاریخ 16/12/91 آغاز ودر روز 27اسفند مقارن با میلاد حضرت زینب (س) پایان یافت.&lt;br /&gt;\r\nسبدها در مناطق زیر به دست نیازمندان معرفی شده از سوی تیم سفیران زندگی، خانواده های معرفی شده از سوی جمعیت دانشجویی امام علی (ع) و موسسه خیریه اباصالح المهدی(عج) رسید:&lt;br /&gt;\r\n10 سبد استان آذربایجان شرقی (ورزقان)،11سبد استان قم، 41 سبد شهر ری و حومه، 16 سبد شهر تهران&lt;br /&gt;\r\nدر آخر انجمن سفیران زندگی همواره پذیرای نیک اندیشان و انسان های وارسته ای هست که دغدغه ای جز روزمرگی های زندگی خود دارند.&lt;br /&gt;\r\nهمراهی در برگزاری مراسم افطاری آسایشگاه جانبازان ثارالله ماه مبارک رمضان 1392&lt;br /&gt;\r\nهمراهی در برگزاری مراسم افطاری ایتام در محل آسایشگاه جانبازان و تهیه پک افطاری مدعوین رمضان 1392&lt;br /&gt;\r\nبرگزاری مراسم اطعام کودکان کار منطقه ناصرخسرودر قالب طرح ضیافت رمضان 1392&lt;br /&gt;\r\nگزارش فعالیت های ماه مبارک رمضان 1392&lt;br /&gt;\r\nانجمن سفیران زندگی با افتخار گزارش سه شب نورانی در ماه مبارک رمضان را تقدیم حضورتان میکند&lt;br /&gt;\r\nدوم مرداد ماه 1392 مصادف با 15 رمضان المبارک 1434&lt;br /&gt;\r\nافتخار در همراهی و کمک در برگزاری برنامه افطاری جانبازان آسایشگاه ثارالله و خانواده های معظم ایشان&lt;br /&gt;\r\nسوم مرداد ماه 1392 مصادف با 16 رمضان المبارک 1434&lt;br /&gt;\r\nبا کمک پروردگار و پشتیبانی خیرین گرانقدر انجمن سفیران زندگی وسایل و اقلام لازم جهت افطاری کودکان کار در روز های قبل را خریداری نمود .با توجه به شرایط منطقه و عدم امنیت لازم جهت کودکان برای بازگشت از برنامه افطاری پس از رایزنی ها و جلسات متعدد با دوستان عزیزمان در خانه کودک مقرر گشت تا پک افطاری وغذای تهیه شده قبل از تاریکی هوا به کودکان مدعو تحویل داده شود تا راهی منزل گردند&lt;br /&gt;\r\nبراین اساس روز سوم مرداد ساعت 6 بعد ازظهر تدارک برنامه ای شاد جهت کودکان عزیزمان توسط دوستان مسئول خانه کودک دیده شد و پس از آن تحویل 150 پرس غذا و نوشابه و پک افطاری آغاز گردید و به صورت منسجم و منظم پایان یافت&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;چهارم مرداد ماه 1392 مصادف با رمضان المبارک 1434&lt;br /&gt;\r\nآماده سازی 250 پک افطاری جهت ایتام تحت پوشش موسسه خیریه مهر کوثر کرج به دعوت جانباران آسایشگاه ثارالله جهت افطاری&lt;br /&gt;\r\nبرگزاری مراسم و پذیرایی از ایتام موسسه مهر کوثر در محل آسایشگاه جانبازان&lt;br /&gt;\r\nجهت اطلاع خیرین بزرگوار&lt;br /&gt;\r\nغذای تهیه شده جهت خانه کودک منطقه ناصر خسرو: قیمه + نوشابه&lt;br /&gt;\r\nپک افطاری خانه کودک منطقه ناصرخسرو: شیر+ خرما+ بامیه + قند+ حلوا+ شله زرد + نان +پنیر+ گردو&lt;br /&gt;\r\nپک افطاری ایتام موسسه مهر کوثر : شیر + شله زرد + قند + بامیه + خرما+ نان+پنیر&lt;br /&gt;\r\n31 شهریور ماه 1392 جشن شکوفه ها (طرح همشاگردی سلام )&lt;br /&gt;\r\nتهیه 150 پک لوازم التحریر برای دانش آموزان اول ابتدایی مدرسه 12 بهمن و شهید فهمیده منطقه قوچ حصار&lt;br /&gt;\r\nشامل : یک دفتر نقاشی &amp;ndash; دو دفتر 40 برگ &amp;ndash; یک دفتر 80 برگ &amp;ndash; دوعدد پا ک کن &amp;ndash; دو عدد تراش &amp;ndash; یک بسته مداد رنگی 12 رنگ &amp;ndash; یک عدد خط کش شابلون &amp;ndash; 6 عدد مداد قرمز &amp;ndash; 6 عدد مداد مشکی&lt;br /&gt;\r\nطرح جانبی&lt;br /&gt;\r\nتهیه دو سبد کالا جهت دو خانواده ی شناسایی شده و نیازمند منطقه قوچ حصار&lt;br /&gt;\r\nیک بسته گوشت چرخ کرده &amp;ndash; یک بسته گوشت خورشتی- دو بسته سویای گیاهی &amp;ndash; 5 کیلو برنج &amp;ndash; یک عدد مرغ &amp;ndash; یک قوطی رب گوجه فرنگی- یک عدد روغن سرخ کردنی &amp;ndash; یک عدد روغن مایع &amp;ndash; یک بسته لوبیا چیتی &amp;ndash; یک بسته عدس &amp;ndash; یک بسته لپه - یک بسته قند &amp;ndash; یک بسته ماکارانی&lt;br /&gt;\r\nطرح عطر سیب محرم الحرام 1435 &amp;ndash; آبان 1392&lt;br /&gt;\r\nگروه سفیران زندگی هم زمان با نوای عزاداری حسینی در اقدامی نو همراه و هم نفس جانبازان آسایشگاه ثارالله نذر خود را ادا کردند ...&lt;br /&gt;\r\nکاسه ای مهربانی هدیه به کودکان دبستان پسرانه شهید فهمیده منطقه قوچ حصار (380نفر)&lt;br /&gt;\r\nکاسه ای از برکت خداوندی پیشکش مردان بزرگ و ایثارگر این خاک مقدس (40 نفر)&lt;br /&gt;\r\nظرفی از نور و عشق هدیه به معلولین ساکن اسایشگاه معلولین عمل (30 نفر)&lt;br /&gt;\r\nدر این راه پر فراز و نشیب همراهان بسیاری در کنار ما بوده اند&lt;br /&gt;\r\nکه اکنون افتخار همراهیشان را نداریم .&lt;br /&gt;\r\nباشد که این راه با ما و یا بدون ما همواره مستدام باشند.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;انجمن سفیران زندگی&lt;br /&gt;\r\n1392&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n', 1, 1390238029, ''),
(2, 'تماس با سفیران زندگی', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;جهت برقراری تماس با سفیران زندگی از فرم زیر استفاده نمائید.&lt;/span&gt;&lt;/p&gt;\r\n', 1, 1390239420, ''),
(3, 'خلاصه در باره سفیران', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در جامعه ی متمدن امروزی، گاه ما انسان ها به حدی درگیر روزمرگی ها و مشغله های دنیای شلوغ مدرنمان میشویم که از حقایق وجودیمان روزبه روز دورتر و دورتر می شویم و گاه یادمان میرود شاکر نعمت هایی باشیم که شاید برای دیگری یک آرزوست... شب ها با چنان آرامش و اطمینانی سر بر بالین می نهیم که گویی گردونه ی زندگی هماره بر وفق مراد خواهد گشت... اما بیایید نگاهی متفاوت تر به زندگی داشته باشیم،به سادگی از کنار آدم ها عبور نکنیم...&lt;/span&gt;&lt;/p&gt;\r\n', 1, 1390238722, '');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE IF NOT EXISTS `plans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `text` longtext COLLATE utf8_persian_ci NOT NULL,
  `miniPic` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `bigPic` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `dateStart` bigint(20) NOT NULL,
  `dateGift` bigint(20) NOT NULL,
  `dateEnd` bigint(20) NOT NULL,
  `userIdWrite` int(11) NOT NULL,
  `dateAdd` bigint(20) NOT NULL,
  `dateModi` bigint(20) NOT NULL,
  `userIdModi` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `view` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `res1` text COLLATE utf8_persian_ci NOT NULL,
  `res2` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `res3` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `text`, `miniPic`, `bigPic`, `dateStart`, `dateGift`, `dateEnd`, `userIdWrite`, `dateAdd`, `dateModi`, `userIdModi`, `status`, `view`, `res1`, `res2`, `res3`) VALUES
(1, 'دومین طرح جمع آوری کمک های مردمی جهت تهیه سبد کالا', '&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span dir=&quot;rtl&quot;&gt;با امید و توکل به خدای بی همتایمان ..&lt;br /&gt;\r\nآنکه نعمت می بخشد و روزی می دهد ...&lt;br /&gt;\r\nیکبار دیگه شانه به شانه ....&lt;br /&gt;\r\nقدمی دیگر برای خدمت به هموطنانمان بر می داریم ...&lt;br /&gt;\r\nگروه سفیران زندگی ...&lt;br /&gt;\r\nگروهی از جوانان این سرزمین هستند که به صورت کاملا مستقل و بدون وابستگی به هیچ نهاد و سازمانی چندین سال است به انجام طرح های خیریه اهتمام می ورزند ...&lt;br /&gt;\r\nچند سالی از همراهی این دستها می گذرد و این قدمها همچنان مصمم و&lt;br /&gt;\r\nموفق به سمت و سوی نیت خیرشان درسایه سعادت خدای بزرگ پای در راهند ...&lt;br /&gt;\r\nتمامی طرح ها را خود گروه برنامه ریزی ...جمعیت هدف را انتخاب و پس از جلسات و جمع آوری وجه نقد مورد نیاز برای انجام طرح آن را آماده و به اجرا می رسانند ...و تحویل تمامی خیرات و برکات توسط خود اعضا انجام می پذیرد ..&lt;br /&gt;\r\nپس از طرح اول عیدانه سال گذشته و تقدیم سبدهای کالا به خانواده های نیازمند در بهمن ماه سال 91&lt;br /&gt;\r\nهمچنین افطاری کودکان کار در ماه مبارک رمضان&lt;br /&gt;\r\nو ضیافت ایام محرم برای مدارس مناطق محروم .آسایشگاه جانبازان و معلولین&lt;br /&gt;\r\nو همشاگردی سلام و تحویل بسته های لوازم التحریر به دانش آموزان نیازمند&lt;br /&gt;\r\nطرح عیدانه ی دو به این شرح آغاز می شود :&lt;br /&gt;\r\nاینبار جمعیت هدف دو روستای محروم هستند که گروه در صدد آماده کردن سبد کالابرای تمامی ساکنین نیازمند و آبرو دار روستا و تحویل به آنها در اسفند ماه است ...&lt;br /&gt;\r\nو از هم اکنون جمع آوری کمک های مردمی آغاز شده است ...&lt;br /&gt;\r\nنیت کنید و در این دق الباب زیبا و این نورافشانی خانه های نیازمندان در ایام نزدیک به عید نوروز شریک باشید ...&lt;br /&gt;\r\nبیا سفیر زندگی باشیم در زندگی سخت ادم های این روزگار...&lt;br /&gt;\r\nدست ها منتظر یاری ما هستند...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n', 'e56355b24de1b99c12cdbaf890c95fe9.png', '0', 1388435400, 1393619400, 1394656200, 1, 1388684707, 1390333996, 30, 1, '142', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'آذربایجان شرقی'),
(2, 'آذربایجان غربی'),
(3, 'اردبیل'),
(4, 'اصفهان'),
(5, 'البرز'),
(6, 'ایلام'),
(7, 'بوشهر'),
(8, 'تهران'),
(9, 'چهارمحال و بختیاری'),
(10, 'خراسان جنوبی'),
(11, 'خراسان رضوی'),
(12, 'خراسان شمالی'),
(13, 'خوزستان'),
(14, 'زنجان'),
(15, 'سمنان'),
(16, 'سیستان و بلوچستان'),
(17, 'فارس'),
(18, 'قزوین'),
(19, 'قم'),
(20, 'کردستان'),
(21, 'کرمان'),
(22, 'کرمانشاه'),
(23, 'کهگیلویه و بویراحمد'),
(24, 'گلستان'),
(25, 'گیلان'),
(26, 'لرستان'),
(27, 'مازندران'),
(28, 'مرکزی'),
(29, 'هرمزگان'),
(30, 'همدان'),
(31, 'یزد');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `pid` int(11) NOT NULL,
  `randomCode` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `refId` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `paymentStatus` int(11) NOT NULL,
  `transStatus` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `res1` text COLLATE utf8_persian_ci NOT NULL,
  `res2` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `res3` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `name`, `tel`, `email`, `price`, `pid`, `randomCode`, `refId`, `paymentStatus`, `transStatus`, `time`, `res1`, `res2`, `res3`) VALUES
(14, 'محمد هادی رضایی', '09361112030', 'mr.mhrezaei@gmail.com', '2500', 1, '140161229488', '0', 3, 1, 1389046470, '', '', ''),
(15, 'محمد هادی رضایی', '09125068903', 'narmafzar_tehran@yahoo.com', '50000', 1, '140108741951', '3UnhNjGRT2w9hBgXAM2GctcanpjlWk', 1, 4, 1390253358, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `useraccess`
--

CREATE TABLE IF NOT EXISTS `useraccess` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uID` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `accessTime` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `res1` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `useraccess`
--

INSERT INTO `useraccess` (`id`, `uID`, `title`, `accessTime`, `status`, `res1`) VALUES
(1, 30, 'admin', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `fatherName` varchar(300) NOT NULL,
  `nationalCode` varchar(10) NOT NULL,
  `sex` int(11) NOT NULL,
  `birthDay` varchar(50) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `postalCode` varchar(10) NOT NULL,
  `job` varchar(500) DEFAULT NULL,
  `education` varchar(500) DEFAULT NULL,
  `cours` varchar(500) DEFAULT NULL,
  `email` varchar(300) NOT NULL,
  `userName` varchar(300) NOT NULL,
  `passWord` char(60) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='user safiran table' AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fatherName`, `nationalCode`, `sex`, `birthDay`, `tel`, `mobile`, `state`, `city`, `address`, `postalCode`, `job`, `education`, `cours`, `email`, `userName`, `passWord`, `status`) VALUES
(30, 'محمد هادی رضایی 1', 'نم', '0012071110', 1, '1349647200', '02122324472', '09361112030', 8, 'تهران', 'تهران', '1111111111', '121212', '', '', 'mr.mhrezaei@gmail.com', 'admin', '562f56792bbef1816fe725a6719380137b963ca1', 1),
(31, 'فریبا نوری اعتماد', 'حسن', '0084782439', 2, '596493000', '02122324472', '09351303767', 8, 'واوان', 'خ رجایی کوچه سی و دو غربی پلاک 6', '3317648115', 'کارمند بیمارستان', 'دیپلم', 'تجربی', 'fariba.etemad@gmail.com', 'nourietemad', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
