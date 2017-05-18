-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 10:46 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shahrzad`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `title` varchar(300) NOT NULL,
  `comment` text NOT NULL,
  `status` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `repTime` bigint(20) NOT NULL,
  `repText` longtext CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `title`, `comment`, `status`, `time`, `repTime`, `repText`) VALUES
(1, 'ثریا لطیفی', 'soraya_latifi@yahoo.com', 'کاندید برای سفیر زندگی', 'سلام .خسته نباشید باتوجه به اینکه ماتعدادی خواهان عضوشدن دربانک اهدای عضو هستیم جهت جذب افراد دیگر تقاضای  سفیر شدن را دارم\nشماره تلفن  کد0871----09181701191', 1, 1393788186, 0, ''),
(2, 'رضا توکلی', 'reza_tavakoli_m@yahoo.com', 'نام کاربری و رمز ورود', 'salam man chetor bayad name karbari besazam? ', 1, 1395096966, 0, ''),
(3, 'سعید جعفری', 'news.parsiansport@gmail.com', 'کمک به زن بیمار نون اور خونه اش', 'سلام خسته نباشی\nمن سعید جعری سفیر سابق شما هستم\nیه خواهشی دارم برای کمک به یک زن تهرانی که بسیار محترمه \nایشون مشگل ستون فقرات به علت کار زیاد برای در اوردن نون خونه بدست اورده و مهره های 4و 5 ستون فقراتش جابجا شده و باید جراحی بشه عملش رایگانه چون در بیمارستان میلاد دکتر فاخری انجام میده ولی مشگل اصلی نداشتن پول خرید پلاتین واسه مهره اش که حدود 4میلیون میشه تمام مدارکش هم هس و موجوده میخواستم ببینم میتونین کمک کنید؟\nممنون', 3, 1397186594, 0, ''),
(4, 'حسن حسنی', 'aimohammadi.saeedeh@gmail.com', 'متناهنا لیبیسب', 'نلاتنان فیبفی  غیبفقف  غفبیف م تنت خت تئ ت ئ ختن خت  قیفقب ختهعه خع غ ه 0هه0ه', 3, 1397286589, 0, ''),
(5, 'مریم مرادی', 'maryamsa63@yahoo.com', 'نام کاربری', 'سلام\nحال شما؟ من از کاربرهای این انجمن بودم و از طریق همین سایت کارت اهداء عضو از بیمارستان مسیح دانشوری گرفتم.چند وقتی نبودم و ایمیل های شما رو هم دریافت نکردم. لطفا راهنمایی ام کنید چون قصد دارم تا جایی که امکان داره در همایش ها شرکت کنم. بسیار سپاس\nمریم مرادی', 1, 1398532216, 0, ''),
(6, 'مریم حسین زاده ', 'm_hzt_2011@yahoo.com', 'فعالیت دوباره ', 'سلام از سفیران سابق هستم به دلیل زیاد شدن کار نتوانستم مدتی با سفیران و انجمن فعالیت کنم . اما دوست دارم اگر خدا یاری کند  باز هم در انجمن فعالیتم را شروع کنم اما رمز عبور و نام کاربریم انگار فعال نیست . \nلطفا راهنمایی بفرمایید که چگونه دوباره فعالیتم را  ادامه دهم ؟', 1, 1401900622, 0, ''),
(7, 'سقراط جهانداری', 'jahandarisoghrat@yahoo.com', 'همکاری', 'اینجانب با شماره عضویت in-422099 عضو سفیران زندگی میباشم اما شناسه و رمز عبورم را فراموش کردهام لطفا راهنمایی فرمایید.', 1, 1407650911, 0, ''),
(8, 'مهدی علیپور', 'M.A.KERMANI60@GMAIL.COM', 'آشنایی با گروه', 'روشهایموفقیت', 1, 1425469002, 0, ''),
(9, 'پریسا امامی', 'lostparadise08p@yahoo.com', 'سوال', 'سلام \nخدا قوت \nمیشه ما مبلغی که واریز میکنیم رو بگیم که مثلا صرف خرید نان یا خرما یا ماکارونی ( موارد مصرف کفاره ) کنید ؟\nچجوری ؟', 1, 1434627804, 0, ''),
(10, 'حمید توکلی پسند', 'hamidtavakoli7009@gmail.com', 'فروش نان های ارزان قیمت ', 'فروش انواع نان های ارزان قیمت ویژه پک افطار\nشماره تماس ۰۹۱۹۸۱۷۷۷۸۹', 1, 1464424332, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `title` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `catID` int(11) NOT NULL,
  `gForID` bigint(11) NOT NULL,
  `status` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `res1` varchar(10000) COLLATE utf8_persian_ci NOT NULL,
  `res2` varchar(10000) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `title`, `catID`, `gForID`, `status`, `time`, `res1`, `res2`) VALUES
(1, 'f1ef2d9c7bc913b83f5cb303cb25610e.jpg', 'عیدانه 1', 2, 2, 1, 1391536256, '', ''),
(2, 'a0b15f1bc4fe4323fcd91a38a02f2a91.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(3, 'c27e182417e62d317f9fac9039403e4a.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(4, 'e0467a8370dae07a908e48ebdc75218a.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(5, '323257f2e13c6533d7b9be7110a440c3.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(6, '860bef0de419dd91ee82f7693c3d10da.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(7, 'e8625c4a76f7ad9db2ea1dfae85fadf6.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(8, 'daea1378d33f39cc9c85b3a54001481e.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(9, '0d499fd4aca045f49e20a4c7cf6b0794.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(10, 'bb0819499b363117c43655e4f9ebab2d.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(11, '1d8c4af8f8180523ff802ccf17f95574.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(12, '5f815f3efbc18d254b3e830a1a4a87dc.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(13, 'd5c37ad3959e0fa986c5098f3bebab1c.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(14, 'a1af6e18d6cc762f710b91e0ebb043b2.jpg', 'عیدانه 1', 2, 2, 1, 1391536257, '', ''),
(15, 'f3d9fe2462bed032e791382ba6de9b50.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(16, 'a87d02bd11ab078ded52cbc9bd1e6410.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(17, '4654bde35c3c8a94d2032deb35c21935.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(18, 'a9233a03834e2ff8c59652cf04647af2.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(19, '2c62ecc97d5c5b4d81a913a0907aacca.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(20, '4caf3f4b4ff4841adf93bfd439a13c57.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(21, '0db68f5cc3b6e7fca0351e7b92fe325e.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(22, 'bbd791a32dca2bf55fc300e29f6f877a.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(23, '3953c5f7c645337305d3f62dcdb1d8f3.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(24, '51fc93ae9aad8cd8e2fb2db23912461f.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(25, '09f11fe7d33e941d2fa6ce9d67409124.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(26, 'ad4535d2bec04a091df9e7219f142840.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(27, '256584f932365f17dc957961f28db419.jpg', 'ضیافت', 2, 3, 2, 1391954751, '', ''),
(28, 'b56f6453cf41ff709230bf7002a8bad5.jpg', 'ضیافت', 2, 3, 2, 1391954752, '', ''),
(29, '4021ceb8cec5568b85a95d24edbb5426.jpg', 'ضیافت', 2, 3, 2, 1391954752, '', ''),
(30, 'f0d6c733ce48b7bf2d1823d8dca45cc6.jpg', 'ضیافت', 2, 3, 2, 1391954752, '', ''),
(31, '9beb5f4264720bb9e8bcc33d910f09fb.jpg', 'ضیافت', 2, 3, 2, 1391954752, '', ''),
(32, 'ab18ba3334be2578c341e22aa58ace40.jpg', 'ضیافت', 2, 3, 2, 1391954752, '', ''),
(33, '2fb30420cefb361ae6fa2e9af0e6a7ad.jpg', 'ضیافت', 2, 3, 2, 1391954752, '', ''),
(34, 'a2505b52ce7c6035fdbbe8bbe87a1b46.jpg', 'ضیافت', 2, 3, 2, 1391954752, '', ''),
(35, 'fae41d94d0c493c1251e613fe8b30e0b.jpg', 'ضیافت', 2, 3, 2, 1391955492, '', ''),
(36, 'f3b574ba45f3a19ffbe400919a3a9d3d.jpg', 'ضیافت', 2, 3, 2, 1391955492, '', ''),
(37, 'de35238c28627f0b34cdae49875910b3.jpg', 'ضیافت', 2, 3, 2, 1391955492, '', ''),
(38, 'c75b7ab9e27c39c7099b40335793e0fa.jpg', 'ضیافت', 2, 3, 2, 1391955492, '', ''),
(39, '7ab625e40d67dd46dc316dd890e01d73.jpg', 'ضیافت', 2, 3, 2, 1391955492, '', ''),
(40, '501908760a741dce7fccd66440e32f46.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(41, '0ea2f9efc1227f230ada87dd12e3a108.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(42, 'cb0954fa4aae54f1e7de34bee02eb5b7.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(43, '1bf2e88a3d383c57f82eedf5e7d08ff9.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(44, '236678e9bb5cf8870642f813377155d6.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(45, '4629ee5ee2e3156ec8dc432f20582c09.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(46, '6b9f0429c491c028abd51a77f060ecc0.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(47, 'fe6b07140869887983a77d543761b64a.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(48, '9bb374d76e4369b29632ef1e4da11e7c.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(49, '6c032871aff93af354de0656a3d67a83.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(50, 'b156d2a34120a551a6abbbf13466541d.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(51, '27a0956f826fb54350a197d0f29498b9.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(52, '27a4f002927a7c28093f944ef1b85ac9.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(53, 'b0a821acfb72221cc744beaeb848cf05.jpg', 'ضیافت', 2, 3, 2, 1391955493, '', ''),
(54, '76439ead561f0e4374b7131fad280eef.jpg', 'ضیافت', 2, 3, 2, 1391955494, '', ''),
(55, '1d1e62058230e0361f37999e04832a17.jpg', 'ضیافت', 2, 3, 2, 1391955617, '', ''),
(56, '1318a15ceaa5a1fa7a4b84761fd19eaa.jpg', 'ضیافت', 2, 3, 1, 1391955872, '', ''),
(57, 'ee08d859dd4093978e39937b2c4b2b5b.jpg', 'ضیافت', 2, 3, 1, 1391955872, '', ''),
(58, '28234703b4c87fa64315d0540208fadc.jpg', 'ضیافت', 2, 3, 1, 1391955872, '', ''),
(59, '3649743e32b25114dbc72f23cf6e3d74.jpg', 'ضیافت', 2, 3, 1, 1391955872, '', ''),
(60, '9e1f5485476c09f647f148481280461f.jpg', 'ضیافت', 2, 3, 1, 1391955872, '', ''),
(61, 'c5a5319f0c29ff67bda5246b2cea4707.jpg', 'ضیافت', 2, 3, 1, 1391955872, '', ''),
(62, 'fa41fb73a78dc3e1962309ab4e293e3e.jpg', 'ضیافت', 2, 3, 1, 1391955872, '', ''),
(63, '3852cf26fb1c3eafbd3cd2403ead4f70.jpg', 'ضیافت', 2, 3, 1, 1391955872, '', ''),
(64, '8351c43ec7bd9bd005c54e00826c1149.jpg', 'ضیافت', 2, 3, 1, 1391955872, '', ''),
(65, 'ea0161e68844d7219c606612b3429a32.jpg', 'ضیافت', 2, 3, 1, 1391955872, '', ''),
(66, '58c29d49222ff9e5a605a65404254e26.jpg', 'ضیافت', 2, 3, 1, 1391955873, '', ''),
(67, '2acda42a7a0f8828c5a5f846aa77c31a.jpg', 'ضیافت', 2, 3, 1, 1391955873, '', ''),
(68, '3aad6535d7ba4b0a7a93235022bdfef0.jpg', 'ضیافت', 2, 3, 1, 1391956000, '', ''),
(69, '02fee0d0e06ec93dad95d9aaa491503b.jpg', 'ضیافت', 2, 3, 1, 1391956000, '', ''),
(70, '33bbd00c77c1f202403c9719e422cdbf.jpg', 'ضیافت', 2, 3, 1, 1391956000, '', ''),
(71, '0536e193fb096b37447566641ba76576.jpg', 'ضیافت', 2, 3, 1, 1391956000, '', ''),
(72, '5e2fc54b03bcfee0d9b5e7abe0ff1e51.jpg', 'ضیافت', 2, 3, 1, 1391956000, '', ''),
(73, '93b7a1e03bd9c284204a89161edbc5fb.jpg', 'ضیافت', 2, 3, 1, 1391956000, '', ''),
(74, 'b6bd9f1f8318fc936c2876c762cccf99.jpg', 'ضیافت', 2, 3, 1, 1391956000, '', ''),
(75, '485f7d982a6eae7f4da71f297df9f6eb.jpg', 'ضیافت', 2, 3, 1, 1391956000, '', ''),
(76, '0c4e9666e24fd2463b22c53a671acdfe.jpg', 'ضیافت', 2, 3, 1, 1391956000, '', ''),
(77, 'b375590dc8becf6244685a529e3f1746.jpg', 'ضیافت', 2, 3, 1, 1391956000, '', ''),
(78, 'fae7deff9afd5bc497ed8d784ad05aa5.jpg', 'ضیافت', 2, 3, 1, 1391956001, '', ''),
(79, 'd3986fa15aa755b394b8d0875b10ff77.jpg', 'ضیافت', 2, 3, 1, 1391956001, '', ''),
(80, '79752ed873075909f1e3327b43c58a3d.jpg', 'ضیافت', 2, 3, 1, 1391956001, '', ''),
(81, '632846f2178101b59aa5a32701d37359.jpg', 'ضیافت', 2, 3, 1, 1391956001, '', ''),
(82, 'e07d6c7f524d10ec73bd6a3eba8fd107.jpg', 'ضیافت', 2, 3, 1, 1391956001, '', ''),
(83, '43c32a5ff45abe471bd66e90a2ed8fff.jpg', 'عیدانه 2', 2, 1, 1, 1395766575, '', ''),
(84, '79f81894ac3daa060119b2eb936c4864.jpg', 'عیدانه 2', 2, 1, 1, 1395766575, '', ''),
(85, 'e19cfc4177a2fc0bf7328b8accca59e1.jpg', 'عیدانه 2', 2, 1, 1, 1395766575, '', ''),
(86, 'bfba9853a082c8a952c2df4bf3ff9c77.jpg', 'عیدانه 2', 2, 1, 1, 1395766575, '', ''),
(87, 'b81921294389502dd023ab72f6d54ac4.jpg', 'عیدانه 2', 2, 1, 1, 1395766575, '', ''),
(88, 'f92b3d0ae3e44077ad72d1cadcd1bce2.jpg', 'عیدانه 2', 2, 1, 1, 1395766575, '', ''),
(89, '50de2bf143c3367d683d576537672e81.jpg', 'عیدانه 2', 2, 1, 1, 1395766575, '', ''),
(90, '72bc2eae64ce27f0b7922d4f68663122.jpg', 'عیدانه 2', 2, 1, 1, 1395766576, '', ''),
(91, '33a08f8230d86a1d8c09d46b3d37df0c.jpg', 'عیدانه 2', 2, 1, 1, 1395766576, '', ''),
(92, '84d62c007c7e19233e1492d9478a1aef.jpg', 'عیدانه 2', 2, 1, 1, 1395766576, '', ''),
(93, 'aaffd62cfa7ede6022a0f8b13b37bf83.jpg', 'عیدانه 2', 2, 1, 1, 1395766576, '', ''),
(94, 'dc908ce868a5bff625a6ac17d52fa393.jpg', 'عیدانه 2', 2, 1, 1, 1395766576, '', ''),
(95, '65ca6d4bcbfb181333b216c6f2e0a9e0.jpg', 'عیدانه 2', 2, 1, 1, 1395766576, '', ''),
(96, 'd924c69c8cd3d867e23e04aa777412ba.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569387, '', ''),
(97, '9276ea8a9a3a4a7b11254b774090e7d4.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569387, '', ''),
(98, 'd3cf15778b2da2b64b2298fca6ab85ef.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569387, '', ''),
(99, 'f630a8ac985b60a45f8c591b3e99d23f.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569387, '', ''),
(100, 'e80d06fb10eacfbbe05a7ba9505c9a1d.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569387, '', ''),
(101, '4ac97bbfb67c62879d883e01670f0cfe.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569387, '', ''),
(102, 'd9ddfa92365ce83624c60ea9ee5c5610.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569525, '', ''),
(103, '035c2abf97c2454b6adc4e507297d130.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569525, '', ''),
(104, 'e32863e3564486c18d43927a75af999f.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569525, '', ''),
(105, '473436371440582aae3cb3a61929d65a.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569525, '', ''),
(106, '2027bde1ea95f965552c2ecf1504525a.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569525, '', ''),
(107, '2bb746da1cbc5b2ca0d60f2b892caed8.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569525, '', ''),
(108, '2faee8fe42eff54f393f969e2afc892d.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569525, '', ''),
(109, 'aee83ab8f31355202ebbb123271539a4.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569525, '', ''),
(110, '0f9422cec33244cb0f81ad91baefca92.jpg', 'ضیافت2- ملک آباد', 2, 4, 2, 1406569525, '', ''),
(111, 'ca26a7fe8ad97b6307d37fcc8ee55758.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(112, 'b44ac14c2bd53505932f01df2de808d3.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(113, '77c02f1ae90ddd537a324ef2188a6b3f.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(114, '089b5684a8a6df098da4cee97a142bdc.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(115, 'd3a7315d09be2daeec890621ad22cdaf.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(116, '42523c269217994b6a06e72ef1cdd943.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(117, 'da6b8287d77abcb98b9925d117e1edbb.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(118, '9c4217617d160db299b5334f952b7520.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(119, 'e3d9f703fb90b810b7deb2ba17f8cfb5.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(120, '96ddefba6f49874193d99680bd93f7c1.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(121, '93b450453b97eba233644cef6d6ab30e.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(122, '19ad444c3d2acd6ebb0dd260402c8541.jpg', 'ضیافت2-ناصرخسرو', 2, 4, 2, 1406570456, '', ''),
(123, '11b93af981308bb9e003b7d3ee34e558.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(124, '7f0fdae22c75bc1b0a5b126492ce4159.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(125, 'c44df6da208c9fb0eeac113aec52ffca.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(126, '52ac09501497ccc00497deb09a01cf51.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(127, '6cdfe4607365db4135753c58d3f55a5c.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(128, '39601f2c8f693ac7766b82c5c2c4f48e.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(129, '5e8331cf44607083e6a7aadbbffe6b1a.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(130, '25b2b2342a1f01c832ba36c3f955041b.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(131, '745944d8fa2958cdf7622cffb8334461.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(132, 'b71dce4e5b3b60cbb1adfcfab4d53df2.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(133, '46bb99b533679628b353dd903bd9b8ce.jpg', 'ضیافت2', 2, 4, 2, 1406570660, '', ''),
(134, '5476a4647f207629209677c4464ed14e.jpg', 'ضیافت2', 2, 4, 2, 1406570661, '', ''),
(135, '1062d568f8acb5e97d24a44250b55fb1.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(136, '492621e316b482dbb3f92c6d4c696707.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(137, 'c4a996ade47b8c14f068a33eb6dcc4b4.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(138, '8f192ca567a3613f1a516f264b24db6c.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(139, '9d0a68fdf0a03b568f8ae4b6315c4e63.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(140, '6b767acb152148decdffc35cb61d7bda.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(141, '55467705f71be5a3504f353ccf4342b3.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(142, 'badb12a8fdfa57530fe58d3567435c32.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(143, '2edafca7332d3e3a226916ea3afad258.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(144, '783c442f5fcc24475ef46e39e5fc7091.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(145, 'e9f78eeba92ad10e56a723b0de097142.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(146, 'ea935b7f538f9c329d82e5373b198665.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(147, '3afb0478ba568f272cf2c352b4caaf63.jpg', 'ضیافت2', 2, 4, 2, 1406570710, '', ''),
(148, 'c79a8afed63f36b305c576454d18e2e7.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(149, '59742700c894a463ada8269704203022.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(150, '6127e6f00221e168b0cbb64e22c636ad.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(151, '9f344c6bd2db30c781170343213a57b3.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(152, '126721d487781db63890da117973745d.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(153, '27468fda6daaf879bcf813759bfa56ab.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(154, '376aa334de22553dbbda7f98eac0ac6c.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(155, '137021e5c73f12952681459fd56a16fc.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(156, '48b0ce349ec01d80189be9975b1a3df8.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(157, 'ac31908357821f4e2ba66d15e7acb509.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(158, 'f255f7a6d9967f449e9b623d9df8d382.jpg', 'ضیافت2', 2, 4, 2, 1406571526, '', ''),
(159, '050d69bd06b7231ed45a4221f7c8afff.jpg', 'ضیافت2', 2, 4, 2, 1406571527, '', ''),
(160, '5db90cb72975578eefe91ce03491feca.jpg', 'ضیافت2', 2, 4, 2, 1406571527, '', ''),
(161, '4e02afb1a47b7901406e2ba7ebf796ff.jpg', 'ضیافت 2', 2, 4, 2, 1407068648, '', ''),
(162, 'ce214a72d8be372e778065fba340a3b1.jpg', 'ضیافت 2', 2, 4, 2, 1407068648, '', ''),
(163, 'd4619017c72f2394b361300426f996c6.jpg', 'ضیافت 2', 2, 4, 2, 1407068648, '', ''),
(164, '1c798881f14888c2d29174e332c5df18.jpg', 'ضیافت 2', 2, 4, 2, 1407068649, '', ''),
(165, 'eb1a2f3ff5c984038db0a9eaa2fa9e25.jpg', 'ضیافت 2', 2, 4, 2, 1407068649, '', ''),
(166, '78d6fe7493df0216b6c5a828509bf7b3.jpg', 'ضیافت 2', 2, 4, 2, 1407068649, '', ''),
(167, '917b6ec8df0a03307d366967a0f0a478.jpg', 'ضیافت 2', 2, 4, 2, 1407068649, '', ''),
(168, 'ed063c5ad5e2298c55b14fb4e9724b6c.jpg', 'ضیافت 2', 2, 4, 2, 1407068649, '', ''),
(169, '5badf003218f4ac227b958a25179f932.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(170, '7d4daa123c205f2428199a69b0f46c2d.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(171, '24e50891adbb621487ddb1e7203fb0b9.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(172, '89c3c640bb16181ffff810f85b8e226f.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(173, '3310768e7e2788c3d6e130cc0036a969.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(174, 'a242c5a5520668e9fd411c505211875f.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(175, '9d097905d4a071b407ed1d52793c8a0d.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(176, '6e9a0a0450bb55b6f6eb761319aa738e.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(177, 'f02577fe892cbfec1f99750e2b94d879.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(178, '546f276bf8b0a1138e188b346e8fb887.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(179, '6b97a5bfc374646447f7081a00032a0e.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(180, 'c85779295d5f2a7a80a57e0a812a9df4.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(181, '88ee6af02d22ae7e0ba36f641b7d6163.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(182, '3d64e98383e7d39055ede4346f3c0344.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(183, 'c16500b23559f49ead5fc05696fe71fe.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(184, '908ade4aa31de13d8ff889d2ad72149e.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(185, '7b4780bac331e5623f05cab007b4e46c.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(186, 'd48116c49d142d139c0961f29ba022ae.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(187, 'b33810555e234fb53262092ec688c4d5.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(188, '5cb2a9add85c4590b524c4b5f4af8186.jpg', 'عیـــــــــــدانه 3', 2, 5, 1, 1426767305, '', ''),
(189, '08f4841dd954343e0f8cc617fd03a3a8.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(190, '7d6c638eef856373f6425a6f52f74e33.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(191, 'e32031469c88370c432552fd32eeb50f.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(192, 'fe30b22af1a4e5acae5faf1b23163b95.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(193, '03bd0f649f8fdfd97a7825838f243012.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(194, '3f5b65f53d013639847bc09f7f7d4bde.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(195, 'e303666f0343e0f2c14bf6824f516e55.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(196, '19a38d8f8bb4dbdc7b36be0b44022941.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(197, '350be929e8c8465ea90a34d86075c293.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(198, '468fe762d6f65b1f2fca597778caa2d7.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(199, '76321a64d104f9019d9c40649d1b7a41.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(200, '8761c81d264e6e0b6a5c611c265637c9.jpg', 'جشن نیمه شعبان', 3, 1506161442, 1, 1433744454, '', ''),
(201, '942bf9a75b49b0c767c35c058984c67c.jpg', 'ضیافت 3', 2, 6, 1, 1436879403, '', ''),
(202, '8d53bb78424bc71e5f69b4734b07ea01.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(203, 'c44c33a4340442c550dc4e2d48106b5f.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(204, '9caad6855f18bda3721d523dc119c565.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(205, '15c6b153aa96ffbc8555b5c465347bf0.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(206, '8eb88c7a1460a0059224cae818612ba4.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(207, '2d5e8e9e4f8017e99f1b9fe589affe4e.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(208, 'bdd75826704921b7e51237ee7a4cfc92.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(209, 'ad22bf9eb2ddda249bc0b7b9a42df724.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(210, '7ffb53c07021fcfa2d44f2082764b51d.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(211, '36f336d9bc12c9077c4dd368d16b5ed7.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(212, '3ba2cb53efdc69e623a1e7b1b2501164.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(213, 'c1956a08aee2b831a982f4bb5d318492.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(214, 'e1dc6d123358d2549d5b125d134b2cca.jpg', 'ضیافت 3', 2, 6, 1, 1436879404, '', ''),
(215, '8f7a0f5635cb431a029f234b24d68c60.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(216, '438c73786abf44ca5fe8c5ad1abda469.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(217, 'abf45e7a40559a357fd49f873f1453c9.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(218, 'f78a01705fc195372555730182b78d5d.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(219, '5e56ad24d4888974aa6bf3a54290e83e.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(220, '4665f22793f2781e3cb78f746d84147f.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(221, '5bc7c2c474cf4a90e51981118117a8fd.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(222, 'afc8ddc05b3a277af074e6f7ef5ceb5a.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(223, 'fd8119f0871df694fcf0bce452537189.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(224, 'ad7856d6798eb73281039a1a773ef512.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(225, '4777d512db4c57d871a6963d6c6c5c16.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(226, '8ba4efcf11e4b7d2d39ea4a4044933b3.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(227, '6632250623e97e298cd96c5dccc69063.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(228, '2dec22ae3ad0d769610ec52e5e7a4d8d.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(229, '5789127553c1a96762a6998a01c10818.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(230, '2224e3f26fb53707133e1852270cf487.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(231, '29c86868a76492c59b6fa292afbb129c.jpg', 'ضیافت4', 2, 9, 1, 1467741201, '', ''),
(232, 'cd90a8f3371a6590421a86e92c14e6f2.jpg', 'ضیافت4', 2, 9, 1, 1467741202, '', ''),
(233, '7fa310d6fad0eb7cebfefaeac1707cde.jpg', 'ضیافت4', 2, 9, 1, 1467741202, '', ''),
(234, '49770c17e9c0488dbe6f8c816cea8534.jpg', 'ضیافت4', 2, 9, 1, 1467741202, '', ''),
(235, '0f93c1e233e536b0474a8f7391864e22.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(236, '79d10d50278ac22dfabdde508ae82e0b.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(237, '92db6d4fb67052bcb486a8df3ef95d94.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(238, '8e42ec46133cb9d75c0527c125baa374.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(239, '99c069f1cec9f7b6488d071277c2e566.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(240, '9937b207b21d543a0b37c4d9cb5b8c1a.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(241, '12009ed055dfa4d21c5217543352e361.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(242, 'bf566d82c87b73a273d384d1c344d540.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(243, '36c78ab2cfe97c0e998caf92f58edca3.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(244, '3d91bc9bdfa29b98b2a8c2a7393a82e7.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(245, 'b0e6a679a086b84e0da15984f6feea04.jpg', 'همشاگردی سلام', 2, 11, 1, 1475318447, '', ''),
(246, '031e46122a6009d61521d58c1a29b1db.jpg', 'تهیه مواد غذایی دو ماه پایانی سال95 برای کودکان کار ملک آباد', 2, 12, 1, 1485350666, '', ''),
(247, '98853d2761b464c65efc99f0bebf8430.jpg', 'تهیه مواد غذایی دو ماه پایانی سال95 برای کودکان کار ملک آباد', 2, 12, 1, 1485350666, '', ''),
(248, 'a40f46e320ae169482505a49677ba49d.jpg', 'تهیه مواد غذایی دو ماه پایانی سال95 برای کودکان کار ملک آباد', 2, 12, 1, 1485350666, '', ''),
(249, '4c8c992afcdba42faef2831c59af8ea0.jpg', 'تهیه مواد غذایی دو ماه پایانی سال95 برای کودکان کار ملک آباد', 2, 12, 1, 1485350666, '', ''),
(250, 'd82a6b0dfaf5892e8ebf3d8e23179a4b.jpg', 'تهیه مواد غذایی دو ماه پایانی سال95 برای کودکان کار ملک آباد', 2, 12, 1, 1485350666, '', ''),
(251, 'f8231a57c58ff3672cc418d57a5f840a.jpg', 'تهیه مواد غذایی دو ماه پایانی سال95 برای کودکان کار ملک آباد', 2, 12, 1, 1485350666, '', ''),
(252, 'd53907ae21ec14c5fea55b5c9b9730c8.jpg', 'تهیه مواد غذایی دو ماه پایانی سال95 برای کودکان کار ملک آباد', 2, 12, 2, 1485350694, '', ''),
(253, '577e75e9a8931c3f39e97c145487eeae.jpg', 'عیدانه 4', 2, 8, 1, 1491296209, '', ''),
(254, '275953446c6a2f663c712207e9d8c0cf.jpg', 'عیدانه 4', 2, 8, 1, 1491296209, '', ''),
(255, 'eff559057bc31a777bea11cb3a8fe000.jpg', 'عیدانه 4', 2, 8, 1, 1491296209, '', ''),
(256, '6a0c57009d74cec0297378b6d0892061.jpg', 'عیـــــــدانه 5', 2, 13, 2, 1491297144, '', ''),
(257, '8e36eff98ba287110ae6dbb935f5685b.jpg', 'عیـــــــدانه 5', 2, 13, 2, 1491297144, '', ''),
(258, '3fb2cdd0a9db4a95d74e5d18079fdfd4.jpg', 'عیـــــــدانه 5', 2, 13, 2, 1491297144, '', ''),
(259, '0fa5cc483f8604a2caed190cc6ab76f4.jpg', 'عیـــــــدانه 5', 2, 13, 1, 1491297411, '', ''),
(260, '21cdf4a4581debafa6c00fc8639fadd7.jpg', 'عیـــــــدانه 5', 2, 13, 1, 1491297411, '', ''),
(261, 'd1f0fde24ee1a425d83630f4079c8ad3.jpg', 'عیـــــــدانه 5', 2, 13, 1, 1491297411, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `res3` varchar(5000) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `status`, `userIdWrite`, `view`, `date`, `modiDate`, `modiUserId`, `res1`, `res2`, `res3`) VALUES
(1, 'اولین غرفه ی اطلاع رسانی سفیران زندگی', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span dir=&quot;rtl&quot;&gt;انجمن سفیران زندگی روز 12 بهمن ماه 1392 میهمان پژوهشکده پلیمر و پتروشیمی ایران بود ...&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span dir=&quot;rtl&quot;&gt;در روز 12 بهمن جشن فارغ التحصیلی دانشجویان ارشد و دکترای دانشکده پلمیر و پتروشیمی ایران برگزار شد و در این برنامه انجمن سفیران زندگی با افتخار در کنار واحد پیوند بیمارستان دکتر مسیح دانشوری و بیمارستان محک غرفه داشت. و دانشجویان و اساتید بزرگ این عرصه را با فعالیت های خیریه در گذشته و برنامه های پیش رو آشنا کرد.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: center;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.safirezendegi.com/images/upload/495c4a7a8197eb472d0188cb1d63a8b7.jpg&quot; style=&quot;height:300px; width:600px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span dir=&quot;rtl&quot;&gt;این همراهی را به فال نیک میگیریم و خرسندیم از اینکه توانسته ایم اعتماد ساز هموطن های عزیزمان باشیم تا در کنار بزرگان خیریه ایران غرفه داشته باشیم .&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span dir=&quot;rtl&quot;&gt;انجمن سفیران زندگی&lt;br /&gt;\r\nبهمن ماه 1392&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n', 1, 30, 1791, 1391515009, 0, 0, '', '', ''),
(2, 'عیدانه ی دو تمام شد ...', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;عیدانه ی دو ...تمام شد ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک قدم دیگر در موسم نوروز به بلندای مهربانی...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و راستش را بخواهی حالا معنای خیلی چیزها را بهتر می دانیم ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;div class=&quot;text_exposed_show&quot; dir=&quot;rtl&quot;&gt;\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;معنای نگاه خسته ی یک پیرمرد خمیده را در کناردیوارهای کاه گلی که اسمشان شده بود خانه&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;وقتی نگاه به زمین و دل به آسمان سبد احتیاجاتش را می برد ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و ترجمه ی لبخند شیرین پیرزنی که وقتی بسته ی کالایش را می گرفت&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;به لحظه ی پیوستن به خانواده اش با دست پر فکر می کرد !&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;باید می دیدی زنی را که بر سر تپه ای از خاک در میانه ی روستا دست بر پیشانی در زاویه ی خورشید&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;به نظاره ی لطف خدا و مهربانی مردمش لبخند می زد ....&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;عیدانه ی دو تمام شد ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و ما لحظه لحظه در انجام آن از خیرین همراه و بزرگوارمان یاد کردیم&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و از سعادتی که خدا به همه ی ما داده بود ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;عیدانه دو تمام شد ....و ما با ز لبخندهایی واقعی بر لبها نشاندیم !&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;پایان&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.safirezendegi.com/images/upload/b2d15444c8f69148f22b3bff7f62740c.jpg&quot; style=&quot;height:702px; width:600px&quot; /&gt;&lt;br /&gt;\r\nانجمن سفیران زندگی&lt;br /&gt;\r\nزمستان 92 بهاران 93&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n', 1, 30, 1614, 1395766862, 0, 0, '', '', ''),
(3, 'بازدید از مادران و پدران آسمانی...', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;اینجا عطر بهشت شامه&amp;zwnj;ات را نوازش می&amp;zwnj;دهد... اینجایی فارغ از هر چیزی، مبهوت نگاه&amp;zwnj;شان می&amp;zwnj;شوی... نگاهی از جنس دلتنگی، چشم انتظاری، مهربانی، نا&amp;zwnj;امیدی و بی&amp;zwnj;قراری... کیلومتر&amp;zwnj;ها دور&amp;zwnj;تر از تهران... از شلوغی شهر خبری نیست...اینجا تنهایی به وجودت رسوخ می&amp;zwnj;کند... اغلب پدران و مادرانی را می&amp;zwnj;بینی که سال&amp;zwnj;های آخر زندگی شان را در یک اتاق می&amp;zwnj;گذارند.... در غربت و تنهایی به پنجره اتاقی تهی از معرفت و خالی از گرمای آغوشی گرم، خاطره بازی می&amp;zwnj;کنند... اینجا کهریزک است... بهشتِ قدمگاه مادران و خلوتگاه پدران فراموش شده سرزمین من و تو&lt;/span&gt;...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://safirezendegi.com/images/upload/d35cae73019779426660a560a2af2d17.jpg&quot; style=&quot;height:640px; width:640px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;بازدید نوروزی سفیران زندگی از تعدادی پدران و مادران تنهای کهریزک، در روز 5فروردین 1394 روایتی بود از آنها که فراموش شده اند و قطار زندگی شان به ایستگاه کهریزک رسیده است و در خلوت غم بارشان روزگار میگذرانند...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;جای فرزندان آنها که یادشان رفته بهشت اینجاست، خالی...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n', 1, 30, 1054, 1427484600, 1429965162, 30, '', '', ''),
(4, 'جشن نیمه شعبان- آسایشگاه جانبازان ثارالله', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;آسایشگاه جانبازان ثارالله،&amp;nbsp;میزبان جانبازان قطع نخاعی است که جان خود را بر کف نهاده بودند و برای دفاع از ناموس ملت از هیچ تلاشی دریغ نکرده&amp;zwnj;اند. اینان مردانی هستند که از قافله شهدا جا مانده&amp;zwnj;اند و در حسرت شهادت، بی&amp;zwnj;تابی می&amp;zwnj;کنند.&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;این مردان بی ادعا سالهاست که مأمن خویش را در شب میلاد با سعادت مهدی موعود (عج) چراغانی میکنند و بر روی ویلچرهایشان به انتظار او ایستاده اند!&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.safirezendegi.com/images/upload/f4e7cbdfcf3468d2a3bdbeec6584f056.jpg&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;انجمن سفیران زندگی برای دومین سال افتخار همراهی با این بزرگ مردان را در شب میلاد در کارنامه کاری خود به ثبت رساند و پذیرای هنرمندان و خانواده جمعی از جانبازان سرفراز میهن شد.&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.safirezendegi.com/images/upload/f63a8bb397d07b914e344897e1644cf2.jpg&quot; style=&quot;height:427px; width:640px&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;باشد که این کار نیز مقبول حق قرار گیرد...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;a href=&quot;http://www.safirezendegi.com/showGallery?gFromID=1506161442&amp;amp;catID=3&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;آلبوم تصاویر جشن&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n', 1, 30, 920, 1433705400, 1433745235, 30, '', '', ''),
(5, 'آتش نشان قهرمانِ گروه سفیران زندگی...', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;برای وصف برخی حال ها...بعضی آدمها یا رفتارها نمیشود به سادگی نوشت ...&lt;br /&gt;\r\nدر سطر و کلمات جا نمیشوند و در قامت چیزی مثل یک گزارشِ تلوزیونی هم حتی اگر از نوع ِ لحظه به لحظه اش باشد&lt;br /&gt;\r\nکه اشاره ی به جان ساده نیست&lt;br /&gt;\r\nوتوصیف ِ کسی که در راهش و شغلش&amp;nbsp; و برای کمک به مردم از جانش میگذرد .&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;اینان را که بخواهی وصف کنی باید زبان ِ تعریف از عشق را بلد باشی و لحن ایثار را بدانی ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;ما اما به صمیمانه ترین شکلش می گوییم که دست بر سینه و با احترام ایستاده ایم&lt;br /&gt;\r\nبه تشکر و سپاس که کمترین کار است، برای جانفشانی ِ آتش نشانان عزیز سرزمینمان در حادثه ی پلاسکو و غمگین و متاثریم دل به دل و همراه با خانواده های داغدار ِ این حادثه .&lt;br /&gt;\r\nدوست گرانقدر و قهرمان ِ آتش نشان ِ جمع سفیران زندگی &amp;quot;&lt;strong&gt;جناب آقای&amp;nbsp; حسین زرچینی&lt;/strong&gt;&amp;quot;&amp;nbsp; در همه ی لحظه هایی که صادقانه جان ِ مردم ِ این سرزمین را شیرین تر و عزیزتر از جان ِ خویش می بینید،&amp;nbsp; بدانید که قدردان ِ زحمات شبانه روزی شما هستیم&lt;br /&gt;\r\nو از خدای بزرگ برایتان آرزوی سلامتی و تقدیری زیبا داریم .&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://safirezendegi.com/images/upload/0dec47217d679b1a54a6c2be50b77b60.jpg&quot; style=&quot;height:700px; width:700px&quot; /&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n', 1, 30, 140, 1485374185, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `text` longtext COLLATE utf8_persian_ci NOT NULL,
  `status` int(11) NOT NULL,
  `date` bigint(20) NOT NULL,
  `res1` varchar(1000) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`, `status`, `date`, `res1`) VALUES
(1, 'درباره سفیران زندگی', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;به نام او که سرآغاز همه خوبیهاست&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در جامعه ی متمدن امروزی، گاه ما انسان ها به حدی درگیر روزمرگی ها و مشغله های دنیای شلوغ مدرنمان میشویم که از حقایق وجودیمان روزبه روز دورتر و دورتر می شویم .و گاه یادمان میرود شاکر نعمت هایی باشیم که شاید برای دیگری یک آرزوست... شب ها با چنان آرامش و اطمینانی سر بر بالین می نهیم که گویی گردونه ی زندگی هماره بر وفق مراد خواهد گشت... اما بیایید نگاهی متفاوت تر به زندگی داشته باشیم،به سادگی از کنار آدم ها عبور نکنیم. ما همانیم که شعر بزرگ شاعر سرزمینمان نوازشگر چشمان مردم سراسر جهان است بر سر در سازمان ملل متحد&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;بنی آدم اعضای یک پیکرند ............ که در آفرینش زیک گوهرند&lt;br /&gt;\r\nچو عضوی به درد آورد روزگار............. دگر عضو ها را نماند قرار&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;از این رو ، باری دیگر جمعی از جوانان این مرز و بوم جمع شده اند که دغدغه ای فراتر از روزمرگی های اطرافشان دارند. ایستاده اند تا دستی بگیرند نه تنها برای برخاستن دیگری، بلکه برای تعالی روح خویش... برای آنکه در دعاهای نماز مادری جای گیرند و دعای خیری بدرقه جوانی خود کنند... تا همچنان سفیری باشند برای بشارت زندگی...&lt;br /&gt;\r\nاکنون که توفیق رفیقشان شده کنار هم و دست به دست هم ،همراه بزرگ مردمی از این سرزمین کهن شده اند تا طرحی نو از عاشقی رقم بزنند.&lt;br /&gt;\r\nگروه سفیران زندگی نخستین بار در سال 1384با همت دکتر مسعود شیعه مرتضی به منظور ارتقا فرهنگ اهدا عضو در جامعه و کمک به واحد فراهم آوری اعضای پیوندی بیمارستان دکتر مسیح دانشوری شکل گرفت و هدف این تشکل مردمی که اعضای آن افراد داوطلب بودند چیزی جز تنومند شدن نهال نوپای اهدای عضو نبود.&lt;br /&gt;\r\nاز این روی با نظارت واحد پیوند همواره در مراسم ها و نمایشگاه های کشوری در غرفه هایی جهت فرهنگ سازی اهدای عضو ،اموزش و پاسخ گویی به سوالات مراجعان و ثبت نام کارت های اهدای عضو حضور فعال داشتند.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;نمونه هایی از فعالیت های سفیران زندگی در واحد پیوند بیمارستان دکتر مسیح دانشوری&lt;br /&gt;\r\nحضور هرساله در غرفه ی واحد پیوند 30 شب ماه مبارک رمضان&lt;br /&gt;\r\nحضور هر ساله در غرفه ی واحد پیوند در 10 روز نمایشگاه کتاب&lt;br /&gt;\r\nحضور هر ساله در جشن نفس (بزرگداشت پیوند اعضا)&lt;br /&gt;\r\nبرگزاری غرفه در پارک ها، اردو های راهیان نور، فرهنگسراها&lt;br /&gt;\r\nبرگزاری جشن نفس 1390 به صورت مستقل از سایر ارگان ها تحت نظارت واحد پیوند&lt;br /&gt;\r\nهمکاری در برگزاری اولین دوره آموزشی بین المللی اهدای عضو در مرکز همایشات رایزن تیرماه1390&lt;br /&gt;\r\nمدیریت سایت قبلی سفیران زندگی جهت فرهنگسازی اهدای عضو با 2500 کاربر&lt;br /&gt;\r\nآخرین فعالیت این گروه در این راستا در سال 1390 اولین همایش سراسری سفیران زندگی بود که با حضور تعداد قریب به هزار سفیرزندگی از اقصی نقاط کشور در تهران برگزار شد.&lt;br /&gt;\r\nهسته مرکزی این انجمن با اطمینان از تناوری نهال اهدای عضودر مهرماه 1390، واحد پیوند را به نیروهای تازه نفس سپرد ودر راستای اهداف انسانی خود قدم در راهی بس سنگین تر نهاد .&lt;br /&gt;\r\nاین بار اراده خادمان هسته مرکزی بر پایه ی یاری رساندن به انجمن احیاء ارزشها و انجمن توانیاب متمرکز گردید&lt;br /&gt;\r\nانجمن سفیران زندگی در سال 1390 همکاری با انجمن حمایت و یاری اسیب دیدگان اجتماعی و انجمن توانیاب را اغاز کرد و درامور زیر همراه و هم قدم این مردم نیک اندیش شد.&lt;br /&gt;\r\nهمراهی در برگزاری مراسم چهارشنبه سوری برای کودکان انجمن و خانواده های تحت پوشش&lt;br /&gt;\r\nکمک در تهیه سبد کالای خانوار جهت عید نوروز&lt;br /&gt;\r\nهمراهی در برگزاری مراسم 7 می (روز جهانی ایتام ایدز)&lt;br /&gt;\r\nهمراهی در برگزاری مراسم افطاری درماه مبارک رمضان 1391&lt;br /&gt;\r\nهمراهی و جمع آوری و بسته بندی کمک های مردمی ارسال شده به دفتر انجمن جهت زلزله زدگان اذربایجان تابستان 1391&lt;br /&gt;\r\nهمراهی در برگزاری مراسم چهلم درگذشتگان زلزله اذربایجان&lt;br /&gt;\r\nهمراهی در برگزاری مراسم روز جهانی کودک&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و...&lt;br /&gt;\r\nپس از گذشت یکسال و حضور در تمامی مراسم های این انجمن؛ سفیران زندگی به دنبال هدفی والاتر و یاری رساندن به جمعی دیگر، تصمیم گرفتند تا منتشر کننده عشق و مهر در سایر مراکز و موسساتی باشند که مهر میبخشند و عشق را متجلی میکنند تا یادگاری بگذارند از لحظات سرشار از زندگی&lt;br /&gt;\r\nبازدید نوروزی از آسایشگاه سالمندان کهریزک فروردین 1392&lt;br /&gt;\r\nبا اجرای طرح عیدانه گامی دیگر در جهت خدمت به همنوعان برداشتیم:&lt;br /&gt;\r\nاجرای طرح عیدانه به منظور تامین سبد غذایی سال نو برای خانواده های محروم&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;گزارش مختصری از اولین طرح عیدانه در زمستان 1391&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;کل مبلغ واریز شده از تاریخ91/11/1 تا تاریخ 91/12/12 برابر است با 5.422.500 تومان&lt;br /&gt;\r\nپس از برآورد قیمت و بررسی های انجام شده اقلام زیر جهت سبد کالای نوروزی خریداری شد:&lt;br /&gt;\r\nیک کیلو گوشت چرخ کرده، دو عدد مرغ (2.400گرم)،یک کیلو عدس،یک کیلو لوبیا،یک کیلوقند ، یک کیلو شکر ، پنج کیلو برنج ،یک عدد روغن مایع ،یک قوطی رب،یک بسته سویا ،یک بسته شکلات ،یک بسته ماکارانی و یک پاکت حاوی 5000تومان وجه نقد که در مجموع تعداد 78سبد غذایی با بذل محبت های مردم عزیزمان تهیه گردید.&lt;br /&gt;\r\nتوزیع سبد کالا بین خانواده های نیازمند شناسایی شده و معرفی شده از تاریخ 16/12/91 آغاز ودر روز 27اسفند مقارن با میلاد حضرت زینب (س) پایان یافت.&lt;br /&gt;\r\nسبدها در مناطق زیر به دست نیازمندان معرفی شده از سوی تیم سفیران زندگی، خانواده های معرفی شده از سوی جمعیت دانشجویی امام علی (ع) و موسسه خیریه اباصالح المهدی(عج) رسید:&lt;br /&gt;\r\n10 سبد استان آذربایجان شرقی (ورزقان)،11سبد استان قم، 41 سبد شهر ری و حومه، 16 سبد شهر تهران&lt;br /&gt;\r\nدر آخر انجمن سفیران زندگی همواره پذیرای نیک اندیشان و انسان های وارسته ای هست که دغدغه ای جز روزمرگی های زندگی خود دارند.&lt;br /&gt;\r\nهمراهی در برگزاری مراسم افطاری آسایشگاه جانبازان ثارالله ماه مبارک رمضان 1392&lt;br /&gt;\r\nهمراهی در برگزاری مراسم افطاری ایتام در محل آسایشگاه جانبازان و تهیه پک افطاری مدعوین رمضان 1392&lt;br /&gt;\r\nبرگزاری مراسم اطعام کودکان کار منطقه ناصرخسرودر قالب طرح ضیافت رمضان 1392&lt;br /&gt;\r\nگزارش فعالیت های ماه مبارک رمضان 1392&lt;br /&gt;\r\nانجمن سفیران زندگی با افتخار گزارش سه شب نورانی در ماه مبارک رمضان را تقدیم حضورتان میکند&lt;br /&gt;\r\nدوم مرداد ماه 1392 مصادف با 15 رمضان المبارک 1434&lt;br /&gt;\r\nافتخار در همراهی و کمک در برگزاری برنامه افطاری جانبازان آسایشگاه ثارالله و خانواده های معظم ایشان&lt;br /&gt;\r\nسوم مرداد ماه 1392 مصادف با 16 رمضان المبارک 1434&lt;br /&gt;\r\nبا کمک پروردگار و پشتیبانی خیرین گرانقدر انجمن سفیران زندگی وسایل و اقلام لازم جهت افطاری کودکان کار در روز های قبل را خریداری نمود .با توجه به شرایط منطقه و عدم امنیت لازم جهت کودکان برای بازگشت از برنامه افطاری پس از رایزنی ها و جلسات متعدد با دوستان عزیزمان در خانه کودک مقرر گشت تا پک افطاری وغذای تهیه شده قبل از تاریکی هوا به کودکان مدعو تحویل داده شود تا راهی منزل گردند&lt;br /&gt;\r\nبراین اساس روز سوم مرداد ساعت 6 بعد ازظهر تدارک برنامه ای شاد جهت کودکان عزیزمان توسط دوستان مسئول خانه کودک دیده شد و پس از آن تحویل 150 پرس غذا و نوشابه و پک افطاری آغاز گردید و به صورت منسجم و منظم پایان یافت&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;چهارم مرداد ماه 1392 مصادف با رمضان المبارک 1434&lt;br /&gt;\r\nآماده سازی 250 پک افطاری جهت ایتام تحت پوشش موسسه خیریه مهر کوثر کرج به دعوت جانباران آسایشگاه ثارالله جهت افطاری&lt;br /&gt;\r\nبرگزاری مراسم و پذیرایی از ایتام موسسه مهر کوثر در محل آسایشگاه جانبازان&lt;br /&gt;\r\nجهت اطلاع خیرین بزرگوار&lt;br /&gt;\r\nغذای تهیه شده جهت خانه کودک منطقه ناصر خسرو: قیمه + نوشابه&lt;br /&gt;\r\nپک افطاری خانه کودک منطقه ناصرخسرو: شیر+ خرما+ بامیه + قند+ حلوا+ شله زرد + نان +پنیر+ گردو&lt;br /&gt;\r\nپک افطاری ایتام موسسه مهر کوثر : شیر + شله زرد + قند + بامیه + خرما+ نان+پنیر&lt;br /&gt;\r\n31 شهریور ماه 1392 جشن شکوفه ها (طرح همشاگردی سلام )&lt;br /&gt;\r\nتهیه 150 پک لوازم التحریر برای دانش آموزان اول ابتدایی مدرسه 12 بهمن و شهید فهمیده منطقه قوچ حصار&lt;br /&gt;\r\nشامل : یک دفتر نقاشی &amp;ndash; دو دفتر 40 برگ &amp;ndash; یک دفتر 80 برگ &amp;ndash; دوعدد پا ک کن &amp;ndash; دو عدد تراش &amp;ndash; یک بسته مداد رنگی 12 رنگ &amp;ndash; یک عدد خط کش شابلون &amp;ndash; 6 عدد مداد قرمز &amp;ndash; 6 عدد مداد مشکی&lt;br /&gt;\r\nطرح جانبی&lt;br /&gt;\r\nتهیه دو سبد کالا جهت دو خانواده ی شناسایی شده و نیازمند منطقه قوچ حصار&lt;br /&gt;\r\nیک بسته گوشت چرخ کرده &amp;ndash; یک بسته گوشت خورشتی- دو بسته سویای گیاهی &amp;ndash; 5 کیلو برنج &amp;ndash; یک عدد مرغ &amp;ndash; یک قوطی رب گوجه فرنگی- یک عدد روغن سرخ کردنی &amp;ndash; یک عدد روغن مایع &amp;ndash; یک بسته لوبیا چیتی &amp;ndash; یک بسته عدس &amp;ndash; یک بسته لپه - یک بسته قند &amp;ndash; یک بسته ماکارانی&lt;br /&gt;\r\nطرح عطر سیب محرم الحرام 1435 &amp;ndash; آبان 1392&lt;br /&gt;\r\nگروه سفیران زندگی هم زمان با نوای عزاداری حسینی در اقدامی نو همراه و هم نفس جانبازان آسایشگاه ثارالله نذر خود را ادا کردند ...&lt;br /&gt;\r\nکاسه ای مهربانی هدیه به کودکان دبستان پسرانه شهید فهمیده منطقه قوچ حصار (380نفر)&lt;br /&gt;\r\nکاسه ای از برکت خداوندی پیشکش مردان بزرگ و ایثارگر این خاک مقدس (40 نفر)&lt;br /&gt;\r\nظرفی از نور و عشق هدیه به معلولین ساکن اسایشگاه معلولین عمل (30 نفر)&lt;br /&gt;\r\nدر این راه پر فراز و نشیب همراهان بسیاری در کنار ما بوده اند&lt;br /&gt;\r\nکه اکنون افتخار همراهیشان را نداریم .&lt;br /&gt;\r\nباشد که این راه با ما و یا بدون ما همواره مستدام باشند.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;انجمن سفیران زندگی&lt;br /&gt;\r\n1392&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n', 1, 1494323329, ''),
(2, 'تماس با سفيران زندگي', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;جهت برقراري تماس با سفيران زندگي از فرم زير استفاده نمائيد.&lt;/span&gt;&lt;/p&gt;\r\n', 1, 1390239420, ''),
(3, 'خلاصه در باره سفيران', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در جامعه ي متمدن امروزي، گاه ما انسان ها به حدي درگير روزمرگي ها و مشغله هاي دنياي شلوغ مدرنمان ميشويم که از حقايق وجوديمان روزبه روز دورتر و دورتر مي شويم و گاه يادمان ميرود شاکر نعمت هايي باشيم که شايد براي ديگري يک آرزوست... شب ها با چنان آرامش و اطميناني سر بر بالين مي نهيم که گويي گردونه ي زندگي هماره بر وفق مراد خواهد گشت... اما بياييد نگاهي متفاوت تر به زندگي داشته باشيم،به سادگي از کنار آدم ها عبور نکنيم...&lt;/span&gt;&lt;/p&gt;\r\n', 1, 1390238722, '');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `res3` varchar(1000) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `text`, `miniPic`, `bigPic`, `dateStart`, `dateGift`, `dateEnd`, `userIdWrite`, `dateAdd`, `dateModi`, `userIdModi`, `status`, `view`, `res1`, `res2`, `res3`) VALUES
(1, 'عیـــــــــــدانه 2', '&lt;div class=&quot;_5wj- mbs _5pbx userContent&quot; dir=&quot;rtl&quot;&gt;\r\n&lt;div class=&quot;text_exposed_root text_exposed&quot; id=&quot;id_5331b22f77a043c81312315&quot;&gt;\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;وقتی می رفتیم بر فراز خانه ها، قالی شسته ای ندیدیم ...&lt;br /&gt;\r\nشاید نبود ...&lt;br /&gt;\r\nیا دیوارهای زندگی این مردم آنقدر کوتاه بود که نمی دیدیم&lt;br /&gt;\r\nبا این وجود ...&lt;br /&gt;\r\nمادر ... خانه را با عشق بتکان ...&lt;br /&gt;\r\nو تو پدر ... سرت را بالا بگیر ...&lt;br /&gt;\r\nسفره ای رنگین تر مهیا شد و لحظه هایی نزدیک تر به روشنی&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;div class=&quot;text_exposed_show&quot;&gt;\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;و تو نیکوکار ارجمند که هم قدم ما در این خیر شدی...&lt;br /&gt;\r\nوعده ی محقق خداوند بزرگ تقدیم به تو ...که فرمود :&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#000000&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;کسانی که دارایی های خود را در شب و روز،&lt;br /&gt;\r\nو نهان و آشکارا، انفاق می کنند،&lt;br /&gt;\r\nپاداش آنان نزد پروردگارشان خواهد بود، نه بیمی بر آنان است و نه اندوهگین می شوند...(سوره ی مبارکه ی بقره)&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;دگر بار صدای گام های بهار، طنین انداز کوچه کوچه ی دیارمان شد... انجمن سفیران زندگی با یاری شما که دستان همتتان، شیرازه ی کتاب مهروزی است، عیدانه 2 را رقم زد...&lt;br /&gt;\r\nبذل رحمت خیرین بزرگوار از اول دی ماه تا پایان 13 اسفند 1392 به مبلغ 62.130.000 ریال به دستمان رسید...&lt;br /&gt;\r\nاین مسیر از آغاز تا پایان با مشارکت 23 سفیر زندگی و بیش از 60 خیر بزرگوار طی شد...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;عیدانه 2 با پخش 93 بسته سبد کالا شامل: 5 کیلو برنج &amp;ndash; یک کیلو لوبیا- یک کیلو عدس- یک کیلو قند &amp;ndash; یک کیلو شکر &amp;ndash; یک بطری روغن مایع &amp;ndash; یک قوطی رب- 500 گرم سویا &amp;ndash; یک بسته250گرمی شکلات &amp;ndash; یک بسته ماکارانی- 3کیلو مرغ - یک کیلو گوشت چرخکرده، 5 کارت هدیه 50 هزارتومانی و 4 کارت هدیه ی25 هزار تومانی (برای افراد بیمار نیازمند) در مناطق محروم تهران- ورزقان &amp;ndash; ورامین- حاجی آباد ( امین آباد) به پایان رسید...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;گزارش تصویری عیدانه 2&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;iframe height=&quot;360&quot; src=&quot;http://www.aparat.com/video/video/embed/videohash/OxiFL/vt/frame&quot; width=&quot;640&quot;&gt;&lt;/iframe&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;زمستان 1392- بهار 1393&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:justify&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n', 'tarh.png', '0', 1388435400, 1393878600, 1394656200, 1, 1388684707, 1424771037, 30, 2, '1639', '', '', ''),
(2, 'عیـــــــــــدانه 1', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;اولین قدم مستقل گروه عیدانه ی یک اسفند 1390 بود &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;که غمی دل هایمان را گرفت از جنس نیاز مردم در سرزمینمان شب عید است نکند پدری شرمنده شود...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شب عید است نکند مادری بغض کند...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شب عیداست نکند اشکی گوشه ی چشم کودکی لانه کند ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شب عیداست سفره ی هموطنم خالی نباشد ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شب عید است ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;از این رو برآن شدیم تا سبد کالای خوراکی ناچیزی تهیه کنیم و شعله ای بیفروزیم هرچند کوچک ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;وقتی اولین قدم را برداشتیم اندک مبلغی در حساب مشترک سفیران به نام آقای محمد هادی رضایی بود.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;تا به حال مهر این مردم را اینگونه نظاره گر نبودیم که اینگونه مارا همراهی کنند&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.safirezendegi.com/images/upload/fbbaec62c33a157237119e1f9b06eae2.jpg&quot; style=&quot;height:300px; width:750px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;با عنایت پروردگار و کمک مردم عزیزمان 78 سبد کالا تهیه کردیم شامل اقلام زیر: &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;ul dir=&quot;rtl&quot;&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک کیلو گوشت چرخ کرده&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;دو عدد مرغ&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک کیلو عدس&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک کیلو لوبیا&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک کیلو قند&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک کیلو شکر&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;پنج کیلو برنج&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک قوطی روغن مایع&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک قوطی رب&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک بسته سویا&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک بسته شکلات&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک بسته ماکارانی &lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; و 5 هزار تومان وجه نقد جهت عیدی کودک خانواده&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;برکت این سبد ها متحیرمان کرده بود &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;زیرا این 78 سبد در شهرهای زیر به دست نیازمندان شناسایی شده توسط (سفیران زندگی و جمعیت امداد دانشجویی امام علی (ع) و موسسه خیریه ابا صالح المهدی (عج) )رسید.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;ul dir=&quot;rtl&quot;&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;تهران&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شهر ری و حومه&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;قم&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;ورزقان&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;عیدانه اولین قدم ما برای تکیه بر همت گروه و کمک و یاری خداوند و مردم عزیزمان بود &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و الحق که به زیبایی رقم خورد &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در اولین طرح عیدانه 60 خیر بزرگوار و 23 سفیر زندگی مشارکت داشتند &lt;/span&gt;&lt;/span&gt;...&lt;/p&gt;\r\n', 'da202c4931fc44b5fad4a8c973b7e1b7.png', '-', 1358627400, 1362169800, 1363465800, 30, 1391514088, 1391515675, 30, 2, '3279', '', '', ''),
(3, 'ضیافت', '&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;مگر نه اینکه کودک است ؟&lt;br /&gt;\r\nمگر نه اینکه رسالت عظیم بزرگسالی اش را&lt;br /&gt;\r\nبه ناچار در کودکی به دوش می کشدبه خاطر خرج خانواده ؟؟&lt;br /&gt;\r\nپس چه فرقی می کند کجایی ست ؟ کجای این زمین ؟؟&lt;br /&gt;\r\nچه تفاوتی می کند ...مال کجاست !؟&lt;br /&gt;\r\nو یا پدر و مادرش اهل کجا هستند ....!؟&lt;br /&gt;\r\nمهم آنست که کودک است ....و کار می کند ...وظیفه ای زود هنگام !!!!&lt;br /&gt;\r\nمهم آنست که من و تو دست در دست هم.....&lt;br /&gt;\r\nو شانه به شانه لبخندی روی لبهایش نقاشی کنیم ....&lt;br /&gt;\r\nبه قدر ساعاتی به اندازه ی یک ضیافت !&lt;br /&gt;\r\nیک مهمانی که شایسته ی کودکی اش و پاکی اش باشد ....&lt;br /&gt;\r\nمهربانی را دریغ نکردیم ...&lt;br /&gt;\r\nسوم مرداد به بهانه ی ولادت امام حسن مجتبی کریم اهل بیت (ع)&lt;br /&gt;\r\nاعضای انجمن سفیران زندگی به همت خیرین نیکوکار، در خانه ی کودک ناصرخسرو، کودکان کار شهرمان را مهمان سفره افطار و شام رمضان کردند...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و این شد برگ زرین دیگری از طرح های سفیران زندگی...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.safirezendegi.com/images/upload/a4847461f3a6063b2ccd72cdaaddbe48.jpg&quot; style=&quot;height:375px; width:750px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;رمضـــــــان... ماه مبارکی که با سایر ماه ها برای ما فرق داشت &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;از برکت مهر مردمانمان سفره ای گستردیم به وسعت مهر...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;برای همان کودک هایی که پشت چراغ قرمز های دنیا شیشه های ماشین من و تو را پاک میکنند&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;که زیبا تر و شفاف تر زندگی کنیم&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;همان هایی که گل می آورند به زندگیمان تا شاید رنگی بدهند به زندگی سیاه و سفید ما&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;طرح ضیافت اینگونه رقم خورد:&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;تحویل 150 پک افطاری (شیر+ خرما+ بامیه + قند+ حلوا+ شله زرد + نان +پنیر+ گردو) +غذا(قیمه) و نوشابه به کودکان کار منطقه که تحت پوشش خانه کودک آموزش های لازم و سواد آموزی را سپری میکردند. &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;خدا را شاکریم که روز زیبایی در تقویم خدمات انجمن سفیران زندگی رقم خورد ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;خنده ی کودکان زحمت کش این سرزمین و برق امید چشمانشان در قاب دلهایمان نقش بست و به یادگار ماند...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n', 'e90175ec9c627d57fac7106ca259fe1d.png', '-', 1371843000, 1374521400, 1374694200, 30, 1391954319, 1391954512, 30, 2, '2326', '', '', ''),
(4, 'ضیافت 2', '&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در طرح ضیافت 1 همراه و هم قدم شما بودیم...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;کودکان کار شهرمان میهمان سفره های ما و شما شدند...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;طرح ضیافت اینگونه رقم خورد:&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;تحویل 150 پک افطاری (شیر + خرما + بامیه + قند + حلوا + شله زرد + نان + پنیر + گردو) + غذا (قیمه) و نوشابه به کودکان کار منطقه ناصرخسرو ... برای همان کودک هایی که پشت چراغ قرمز های دنیا شیشه های ماشین من و تو را پاک میکنند...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;که زیبا تر و شفاف تر زندگی کنیم...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;همان هایی که گل می آورند به زندگیمان تا شاید رنگی بدهند به زندگی سیاه و سفید ما...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#006400&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و اکنون اجرای طراح ضیافت 2...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://safirezendegi.com/images/upload/e553ad026b0973090ab71069e8e6525f.jpg&quot; style=&quot;height:200px; width:696px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;جمع آوری کمکهای مردمی جهت تهیه پک های افطاری برای مناطق محروم ...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;اعضای انجمن سفیران زندگی به همت شما خیرین نیکوکار، افراد مناطق محروم شهرمان را مهمان سفره افطار رمضان &amp;nbsp;خواهند کرد&lt;span dir=&quot;LTR&quot;&gt;...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;مهربانی را دریغ نکنیم&lt;span dir=&quot;LTR&quot;&gt; ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;RTL&quot; style=&quot;text-align:justify&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: right;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;با همراهی شما، ضیافت 2 اینگونه پایان یافت&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: right;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;تهیه 100 پک افطار برای کودکان کار ملک آباد&lt;br /&gt;\r\nغذای تهیه شده جهت خانه علم ملک آباد: جوجه کباب+ نوشابه&lt;br /&gt;\r\nپک افطاری خانه علم ملک آباد: شیر+ خرما+ بامیه + قند+حلوا+حلیم+ شله زرد + نان +پنیر+ گردو&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: right;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;تهیه 150 پک افطار برای کودکان کار ناصرخسرو&lt;br /&gt;\r\nغذای تهیه شده جهت خانه کودک ناصرخسرو: جوجه کباب+ نوشابه&lt;br /&gt;\r\nپک افطاری خانه کودک ناصر: شیر+ خرما+ بامیه + قند+ شله زرد + نان +پنیر+ گردو&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: right;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;خدای بزرگ را شاکریم که توفیق خدمت به کودکان معصوم و محروم این سرزمین را نصیبمان کرد و از شما خیرین بزرگوار که مثل همیشه حامی و پشتیبان انجمن سفیران زندگی بودید سپاسگزاریم&lt;/span&gt;&lt;/p&gt;\r\n', '873ae6e6eb1aafef0b1a9637dc6cf783.png', '-', 1402774200, 1405539000, 1406143800, 30, 1402729941, 1433073192, 30, 2, '1537', '', '', ''),
(5, 'عیـــــــــــدانه 3', '&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;دائم گل این بستان، شاداب نمی ماند&lt;br /&gt;\r\nدریاب ضعیفان را در وقت توانایی...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در این راه پرفراز و نشیب فقط آنانی همراه میشوند که دستی دارند بر مهر ...&lt;br /&gt;\r\nبر عشق... بر ایثار ...&lt;br /&gt;\r\nکسانی که دعای یک کودک ، دعای مادری دل شکسته ، دعای پدری درمانده در شب عید ، بیمه ی زندگی اشان میشود...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;ما منتظر آنهایی هستیم که به دنبال عشق اند...&lt;br /&gt;\r\nمحبتمان را دریغ نکنیم... دست ها منتظر یاری ما هستند...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;عیـــــــــــدانه3...&lt;br /&gt;\r\nسومین طرح جمع آوری کمکهای مردمی برای نوروز کودکان شهر...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شماره کارت 2598 0581 8610 6219&lt;br /&gt;\r\nشماره حساب 2-1538666-800-879&lt;br /&gt;\r\nبانک سامان-محمدهادی رضایی&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;www.safirezendegi.com&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;انجمن سفیران زندگی&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;a href=&quot;http://www.safirezendegi.com/showPlan?pid=2&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;طرح عیدانه 1&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;a href=&quot;http://www.safirezendegi.com/showPlan?pid=1&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;طرح عیدانه 2&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;a href=&quot;http://www.safirezendegi.com/plans&quot;&gt;سایر طرحها&lt;/a&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;iframe height=&quot;360&quot; src=&quot;http://www.aparat.com/video/video/embed/videohash/mlYKZ/vt/frame&quot; width=&quot;640&quot;&gt;&lt;/iframe&gt;&lt;/p&gt;\r\n', '8adb957a0d0ff15105a763d54fc4ce72.jpg', '-', 1424377800, 1426019400, 1426451400, 30, 1424711384, 1430121957, 30, 2, '991', '', '', ''),
(6, 'ضیـــــافت 3', '&lt;h3 dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;رمضـــــــان... &lt;/span&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;h3 dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;از برکت مهر مردمانمان سفره ای گستردیم به وسعت مهر...&lt;/span&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;h3 dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;برای همان کودک هایی که پشت چراغ قرمز های دنیا شیشه های ماشین من و تو را پاک میکنند&lt;/span&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;h3 dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;که زیبا تر و شفاف تر زندگی کنیم&lt;/span&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;h3 dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;همان هایی که گل می آورند به زندگیمان تا شاید رنگی بدهند به زندگی سیاه و سفید ما&lt;/span&gt;&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;h3 dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و اکنون برای سومین سال پیاپی، انجمن سفیران زندگی طرح ضیافت 3 را برگزار میکند...&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;h3 dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;کودکان کار و مردم نیازمند شهرمان سفره ی افطار من و شما خواهند شد...&lt;/span&gt;&lt;/h3&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یازدهم تیر به بهانه ی ولادت امام حسن مجتبی کریم اهل بیت (ع) به همت شما خیرین نیکوکار سفره ای از مهر گسترده خواهد شد...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.safirezendegi.com/images/upload/392c76e84191453713e5b149c2ea234b.jpg&quot; style=&quot;height:189px; width:661px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;کوچه کوچه های این شهر را که بگردی، به آرزوهای خاک خورده ای میرسی که زخمی عمیق بر روح و جانت میگذارد...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;آرزوهای کوچک و غیرقابل باوری که برای کودکان معصوم از جمله آرزوهای بزرگ و شاید دست نیافتنی است...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;سفیران زندگی برای سومین سال پیاپی آئین &amp;quot;ضیافت&amp;quot; را در روزهای 15 و 25 ماه مبارک رمضان با هدف ارتقای فرهنگ نوع دوستی، اجرا نمودند.&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&amp;quot;ضیافت 3&amp;quot; از پنجم خرداد ماه شروع شد و پس از جمع آوری کمکهای نقدی و غیر نقدی خیرین بزرگوار تا 15 تیرماه94، به مبلغ 19.150.000 ریال، فاز نهایی طرح اجرا گردید.&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;طرح اول: 15 ماه مبارک رمضان هدیه های خیرین راهی خانه علم ملک آباد شد:&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;100 کیلو برنج - 3کیلو لوبیا قرمز - 4کیلو عدس - 2 کیلو لپه - 10قوطی رب 800گرمی - 12 بسته ماکارونی - 2قوطی روغن سرخ کردنی3 لیتری، 3 قوطی روغن مایع 1350گرمی ، 2کیلو کشمش پلویی و گوشت یک گوسفند که قربانی شب عروسی یک زوج مهربان بود...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;طرح دوم: 21 ماه رمضان با همراهی سفیران زندگی و خیر بزرگواری که تهیه غذا را بر عهده گرفت،150 سبد افطاری برای خانواده های محروم منطقه حاجی آباد تهیه گردید:&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;غذای تهیه شده: جوجه کباب + دوغ&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;پک افطاری: 1شیر 1 لیتری - خرما - بامیه&amp;nbsp; گردو - پنیر - یک تکه نان سنگک- یک ظرف شله زرد- موز- کیک خرمایی- قند و چای&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;بسیار سپاسگزاریم از خیرین همیشه همراه که برای لحظاتی عشق و امید را راهی خانه های فقیر شهرمان کردند...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;خداوند توفیق این خدمت علی وار را از ما دریغ نفرماید...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;پایان- تیرماه1394&lt;/span&gt;&lt;/p&gt;\r\n', 'cf39b6fe3961eedf6ac00fd7c5974e72.jpg', '-', 1432582200, 1436124600, 1436383800, 30, 1432798248, 1436880211, 30, 2, '754', '', '', ''),
(7, 'ضیافت', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;کودکان معصوم و خانواده های محروم این شهر ، رمضان امسال نیز با همراهی خیرین بزرگوار ، عشق و امید را در دلشان حس کردند...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;a href=&quot;http://www.safirezendegi.com/showPlan?pid=6&quot;&gt;ضیافت3&lt;/a&gt; با افتخار به پایان رسید&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;امسال هم با دست پر به دیدنشان خواهیم رفت...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;خرید برنج و ماکارونی برای کودکان معصوم و فقیر شهرمان...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;ما دست همت به زانو زدیم، تا به یاری آنکه نفس میبخشد بتوانیم گوشه ای از راه مولایمان علی (ع) را ادامه دهیم و سفره ی محرومان را اندکی صفا ببخشیم...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در این طرح هزینه فطریه و کفاره جمع آوری و در هفته اول مرداد با مبالغ جمع آوری شده برنج و ماکارونی خریداری شده و به دست کودکان محروم خواهد رسید...&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;دستانتان پرتوان&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;قدمهایتان استوار&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;h1 dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#2F4F4F&quot;&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;ای که دستت میرسد&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/h1&gt;\r\n\r\n&lt;h1 dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#2F4F4F&quot;&gt;&lt;span style=&quot;font-size:16px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;کاری بکن...&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/h1&gt;\r\n', '6a19b1b979d11b9a70d046945e5850b2.png', '-', 1436902200, 1437507000, 1438198200, 30, 1436951908, 1446303838, 30, 2, '706', '', '', ''),
(8, 'عیـــــــــــدانه 4', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;اولین قدم مستقل گروه عیدانه ی یک اسفند 1390 بود &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;که غمی دل هایمان را گرفت از جنس نیاز مردم در سرزمینمان شب عید است نکند پدری شرمنده شود...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;شب عید است نکند مادری بغض کند...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;شب عیداست نکند اشکی گوشه ی چشم کودکی لانه کند ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;شب عیداست سفره ی هموطنم خالی نباشد ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;شب عید است ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;از این رو برآن شدیم تا سبد کالای خوراکی ناچیزی تهیه کنیم و شعله ای بیفروزیم هرچند کوچک ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;وقتی اولین قدم را برداشتیم اندک مبلغی در حساب مشترک سفیران به نام آقای محمد هادی رضایی بود.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;تا به حال مهر این مردم را اینگونه نظاره گر نبودیم که اینگونه مارا همراهی کنند&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.safirezendegi.com/images/upload/fbbaec62c33a157237119e1f9b06eae2.jpg&quot; style=&quot;height:300px; width:750px&quot; /&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;با عنایت پروردگار و کمک مردم عزیزمان 78 سبد کالا تهیه کردیم شامل اقلام زیر: &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;ul dir=&quot;rtl&quot;&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;یک کیلو گوشت چرخ کرده&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;دو عدد مرغ&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;یک کیلو عدس&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;یک کیلو لوبیا&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;یک کیلو قند&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;یک کیلو شکر&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;پنج کیلو برنج&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;یک قوطی روغن مایع&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;یک قوطی رب&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;یک بسته سویا&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;یک بسته شکلات&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;یک بسته ماکارانی &lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; و 5 هزار تومان وجه نقد جهت عیدی کودک خانواده&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;برکت این سبد ها متحیرمان کرده بود &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;زیرا این 78 سبد در شهرهای زیر به دست نیازمندان شناسایی شده توسط (سفیران زندگی و جمعیت امداد دانشجویی امام علی (ع) و موسسه خیریه ابا صالح المهدی (عج) )رسید.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;ul dir=&quot;rtl&quot;&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;تهران&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;شهر ری و حومه&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;قم&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n	&lt;li style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;ورزقان&lt;/span&gt;&lt;/span&gt;&lt;/li&gt;\r\n&lt;/ul&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;عیدانه اولین قدم ما برای تکیه بر همت گروه و کمک و یاری خداوند و مردم عزیزمان بود &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;و الحق که به زیبایی رقم خورد &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#B22222&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در طرح عیدانه4، برای 95 کودک و نوجوان کار لباس نو (شامل: تیشرت و شلوار لی برای پسران و بلوز و شلوار و شال برای دختران) به مبلغ 4.150.000 تومان تهیه گردید و در خانه ی علم ملک آباد تحویل عزیزان شد.&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&lt;span style=&quot;color:#B22222&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;این طرح با کمک بیش از 45 خیر بزرگوار و 20 سفیر زندگی به پایان رسید...&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:justify&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;span style=&quot;color:#800000&quot;&gt;عیدانه 4 به روایت تصویر&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;iframe height=&quot;360&quot; src=&quot;https://www.aparat.com/video/video/embed/videohash/NFAJo/vt/frame&quot; width=&quot;640&quot;&gt;&lt;/iframe&gt;&lt;/p&gt;\r\n', 'db3bcef55e427de7b78b4c2112233a88.png', '-', 1455913800, 1457555400, 1457814600, 30, 1456045003, 1491296135, 30, 2, '543', '', '', ''),
(9, 'ضیـــــــافت 4', '&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در هیچ کجای دنیا ...&lt;br /&gt;\r\nوسیله ای و کاری در ابعاد کوچک برای تو درست نشده ...&lt;br /&gt;\r\nبه جایش تا دلت بخواهد&lt;br /&gt;\r\nاسباب بازی هست ..&lt;br /&gt;\r\nچون همه ی عالم میدانند&lt;br /&gt;\r\nاکنون وقت ِ کار کردن تو نیست&lt;br /&gt;\r\nکه باید بیاموزی ... کتاب بخوانی .. بازی کنی و بلند بخندی ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://safirezendegi.com/images/upload/2196ea318979e99af42f96968b7deaae.jpg&quot; style=&quot;height:201px; width:700px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;حالا که تقدیر تا این حد سختگیر است&lt;br /&gt;\r\nما دست در دست هم تلاش می کنیم&lt;br /&gt;\r\nتا در حد توانمان&lt;br /&gt;\r\nلبخندی بر لبهایت بنشانیم&amp;nbsp; ...&lt;br /&gt;\r\nبه قدرِ یک مهمان شدن&lt;br /&gt;\r\nبر سر سفره ی پروردگار&lt;br /&gt;\r\nتا یادت بماند مهربانی هنوز جاری ست&lt;br /&gt;\r\nتا نگاهت را از آسمان نگیری ...&lt;br /&gt;\r\nو امیدوارتر زندگی کنی ...&lt;br /&gt;\r\n.&lt;br /&gt;\r\n.&lt;br /&gt;\r\nبرای چهارمین سال پیاپی&lt;br /&gt;\r\nسفره ای از مهر می گسترانیم&lt;br /&gt;\r\nپیش پاهای خسته ی کودکان کار ...&lt;br /&gt;\r\nو در محضر نگاههای پر معنا و دستهای کوچکشان ...&lt;br /&gt;\r\nمیزبان خداست ...&lt;br /&gt;\r\nو این مهمانی اوست ..&lt;br /&gt;\r\nما خدمتگزاران این ضیافتیم ...&lt;br /&gt;\r\nنیت خیر کنید و با هر مقدار که میتوانید همراه ما باشید ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;br /&gt;\r\n&lt;br /&gt;\r\n&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;گزارش طرح های پیشین را میتوانید در سایت سفیران زندگی ببینید.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;&lt;a href=&quot;http://safirezendegi.com/showPlan?pid=3&quot;&gt;ضیافت1&amp;nbsp;&lt;/a&gt;&amp;nbsp;&amp;nbsp; -&amp;nbsp; &lt;a href=&quot;http://safirezendegi.com/showPlan?pid=4&quot;&gt;ضیافت2&amp;nbsp; &lt;/a&gt;- &lt;a href=&quot;http://safirezendegi.com/showPlan?pid=6&quot;&gt;ضیافت 3&amp;nbsp; &lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;a href=&quot;http://safirezendegi.com/showPlan?pid=7&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;ضیافت 3 طرح دوم&lt;/span&gt;&lt;/span&gt;&lt;/a&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;br /&gt;\r\n&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شماره کارت 2418 2254 8610 6219&lt;br /&gt;\r\nشماره حساب 2-1538666-800-879&lt;br /&gt;\r\nبانک سامان-محمدهادی رضایی&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;www.safirezendegi.com&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#008000&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;انجمن سفیران زندگی&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n', '0bf421f0fc3d1071b27924570ec2005b.jpg', '-', 1465241400, 1466451000, 1466623800, 30, 1465458147, 1467741391, 30, 2, '402', '', '', '');
INSERT INTO `plans` (`id`, `title`, `text`, `miniPic`, `bigPic`, `dateStart`, `dateGift`, `dateEnd`, `userIdWrite`, `dateAdd`, `dateModi`, `userIdModi`, `status`, `view`, `res1`, `res2`, `res3`) VALUES
(10, 'ضیـــــــافت 4 (فطریه و کفاره)', '&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یک ماه سعادت داشتیم&lt;br /&gt;\r\nو روزه دار خدا بودیم ...&lt;br /&gt;\r\nو بر سفره ی پر برکت و رحمتش میهمان ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://safirezendegi.com/images/upload/6f8b367207fe9725d9fa059d76bf0b02.jpg&quot; style=&quot;height:280px; width:600px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و چون سالهای گذشته&lt;br /&gt;\r\nدست در دست هم&lt;br /&gt;\r\nو شانه به شانه&lt;br /&gt;\r\nبه کمک خیرین بزرگوار و خوشدل&lt;br /&gt;\r\nبرای خوشحالی فرزندان خسته ی این روزگار (کودکان کار)&lt;br /&gt;\r\nقدمهایی به وسعمان برداشتیم ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;طرح ضیافت4 به لطف خدای مهربان&amp;nbsp; امسال نیز&lt;br /&gt;\r\nدر خانه علم ملک آباد کرج و قرچک ورامین برگزار شد ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و در کنار آن دختران و پسران گل فروش شهرمان نیز یک افطار&amp;nbsp; میهمان خدا شدند ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;br /&gt;\r\n&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در ادامه ی آن گامها و همراهی ها&lt;br /&gt;\r\nقصد داریم برای غذای گرمی که برای کودکان کار در خانه های علم&lt;br /&gt;\r\nهر روز فراهم میشود&lt;br /&gt;\r\nتا بهانه ی باشد برای آموزش آنها و یادگیری فن و هنر در آن فضا&lt;br /&gt;\r\nمایحتاجی را خریداری و تقدیم لحظه هایشان کنیم ...&lt;br /&gt;\r\nچه چیزی زیباتر از آنکه&lt;br /&gt;\r\nفطریه ی ماه رمضان من و شما&lt;br /&gt;\r\nروزهای متمادی غذای گرم نیازمندان باشد ...&lt;br /&gt;\r\nآن هم کودکان خسته ای&lt;br /&gt;\r\nکه سهمشان زودتر از شناسنامه هایشان شده است دویدن .&lt;br /&gt;\r\nشما هم میتوانید با پرداخت فطریه مستقیما این مبلغ را به نیازمندان برسانید ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شماره کارت 2418 2254 8610 6219&lt;br /&gt;\r\nشماره حساب 2-1538666-800-879&lt;br /&gt;\r\nبانک سامان-محمدهادی رضایی&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;www.safirezendegi.com&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#008000&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;انجمن سفیران زندگی&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;a href=&quot;http://www.safirezendegi.com/showGallery?gFromID=9&amp;amp;catID=2&quot;&gt;&lt;strong&gt;&lt;span style=&quot;color:#008000&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;مشاهده عکسهای ضیافت 4&lt;/span&gt;&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/a&gt;&lt;/p&gt;\r\n', 'd9d5f9c0358f4442ccacfa93a2ee2503.png', '-', 1467660600, 1467919800, 1468006200, 30, 1467738388, 1468773179, 30, 2, '243', '', '', ''),
(11, 'همشاگردی سلام', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;در جهانی خالی از رویا&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;کودکان&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: center;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;یاد آور پروانه ها و رنگین کمان هستند....&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: center;&quot;&gt; &lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: center;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://safirezendegi.com/images/upload/d3484a4dcbde94d6bf3ce8ac1a967da0.png&quot; style=&quot;height:165px; width:574px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;باز هم شور و شوق اول مهر...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;رویای مدادهای رنگی و دفترهای نو...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;حس خوب پشت نیمکت نشستنها... &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;ورق زدن کتابهای خوشرنگ و زیبای دبستان...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;بوی خوب پاییز... سایه ی رنگها بر روی لباسهای کودکانه ی دبستان...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;ولی اکنون...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;رویای رنگ پریده و خاکستری کودکان کار... حسرت داشتن سقفی مهربان که در سایه سار آن بخوانند و بنویسند...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;بنویسند بر روی برگه های سفیدی که من و تو با عشق به او رساندیم... ورق بزنند کتابهای رنگی دبستان را با شوق...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;بنویسیم با عشق...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;بخوانیم با محبت...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شادی را به دلهای کودکان کار هدیه کنیم...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt; &lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شرکت در طرح همشاگردی سلام...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;تهیه لوازم التحریر برای کودکان کار...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;بیست الی سی شهریور 1395&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt; &lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;انجمن سفیران زندگی&lt;/span&gt;&lt;/span&gt;&lt;br /&gt;\r\n &lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شماره کارت 2418 2254 8610 6219&lt;br /&gt;\r\nشماره حساب 2-1538666-800-879&lt;br /&gt;\r\nبانک سامان-محمدهادی رضایی&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;www.safirezendegi.com&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt; &lt;/p&gt;\r\n', '108f04b47ab16fa2e45ecc925c1b9e8f.png', '-', 1473449400, 1474313400, 1474662600, 30, 1473589068, 1475317668, 30, 2, '229', '', '', ''),
(12, 'تهیه مواد غذایی دو ماه پایانی سال95 برای کودکان کار ملک آباد', '&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;بعضی لذت ها&lt;br /&gt;\r\nقابل وصف نیستند&lt;br /&gt;\r\nنمیشود درباره شان نوشت&lt;br /&gt;\r\nیا برای یک نفر دیگر تعریف کرد&lt;br /&gt;\r\nمثل اینکه زمستان باشد&lt;br /&gt;\r\nدر خانه ات نشسته باشی یا سر کارو شغلت مشغول باشی&lt;br /&gt;\r\nو جایی آنسوی دیگر ِ شهر و کشورت&lt;br /&gt;\r\nبا کمک تو&lt;br /&gt;\r\nکودکی خسته و فقیر&lt;br /&gt;\r\nچشمهایش از لذت و شوق ِ وعده ای غذای گرم برق بزند&lt;br /&gt;\r\nو یا با یک کفش نو ...پیراهن نو&lt;br /&gt;\r\nبتواند پر امیدتر از همیشه کار کند&lt;br /&gt;\r\nاز این تصاویر نمیشود حتی فیلم ساخت&lt;br /&gt;\r\nنمیشود وصفشان کرد&lt;br /&gt;\r\nچرا که لذتش و احساس بی مانندش چشیدنی ست&lt;br /&gt;\r\n....&lt;br /&gt;\r\nما گروه خیرین سفیران زندگی&lt;br /&gt;\r\nپس از پنج سال سعادت ِ خدمت به نیازمندان و کودکان کار&lt;br /&gt;\r\nشما را به تجربه ی این احساس خوشایند در کمک به تامین مایحتاج ِ غذای گرم و پوشاک ِکودکان کار در خانه ی علمشان دعوت می کنیم .&lt;br /&gt;\r\nما مهربانی ِ شما را به نیازمندان میرسانیم .&lt;br /&gt;\r\nبا هر اندازه میتوانید نیت کنید و همراه ما باشید .&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شماره کارت&lt;br /&gt;\r\n6219861022542418&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;شماره حساب&lt;br /&gt;\r\n879-800-1538666-2&lt;br /&gt;\r\nبانک سامان-محمدهادی رضایی&lt;br /&gt;\r\n&lt;br /&gt;\r\nمنتظر حمایت و خیراندیشی شماییم&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;http://www.safirezendegi.com/images/upload/515a852d83be48e3e05201e67ac495fd.jpg&quot; style=&quot;height:525px; width:700px&quot; /&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;این طرح نیز با همراهی و همدلی شما خیرین گرامی که همواره یار و یاور کودکان کار بوده اید، پایان یافت.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;موارد تهیه شده برای این طرح به شرح زیر میباشد:&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;وسایل زیر توسط یک دوست عزیز ساکن در آلمان تهیه شد که زحمت رساندن این وساییل به دست ما بر عهده خانواده محترمشان در تهران بود:&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;- 100 قوطی شیر (فرادما)&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;- 10 بسته کیسه فریزر&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;- 12 بسته خرما&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;- 24 قوطی رب&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;- 24 بسته 250 گرمی سویا&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;- 80 کیلو برنج&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;سایر موارد تهیه شده که هزینه آن توسط خیرین دیگری تامین شد:&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;- 30 عدد مرغ(45 کیلو)&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;- 60 بسته کره 100 گرمی&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;- 20 قوطی پنیر 400 گرمی&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;- 100 عدد موز&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot;&gt;&amp;nbsp;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align:center&quot;&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;گزارش تصویری طرح تهیه مواد غذایی برای کودکان کار ملک آباد&lt;/span&gt;&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n\r\n&lt;p style=&quot;text-align: center;&quot;&gt;&lt;iframe height=&quot;360&quot; src=&quot;https://www.aparat.com/video/video/embed/videohash/fqPcF/vt/frame&quot; width=&quot;640&quot;&gt;&lt;/iframe&gt;&lt;/p&gt;\r\n\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n', '3695b1f9f7bb363f6835951cceedc0d5.jpg', '-', 1484857800, 1485030600, 1485289800, 30, 1485349575, 1491371184, 30, 2, '153', '', '', ''),
(13, 'عیـــــــدانه 5', '&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;تمام دنیا را هم که بگردی&lt;br /&gt;\r\nمی بینی آدمهایی هستند گوشه و کنار.&lt;br /&gt;\r\nکه زندگی ساده و محقرشان&lt;br /&gt;\r\nدر خیال من و تو نمی گنجد ...&lt;br /&gt;\r\nو درست در روزهای نزدیک به عید&lt;br /&gt;\r\nو در هیاهوی خرید و آراستن زندگی ها&lt;br /&gt;\r\nچشمهای کم فروغشان به سمت آسمان است &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;و شبها با این امید به خواب میروند که فردا روز شرمنده ی خانواده و کودکانشان نشوند ...&lt;br /&gt;\r\nآدمهایی عزیز با چشمهایی خسته که ماهی ِ دلهایشان مضطرب ِ روزگار است و سبزی ِ روزهایشان به زرد رویی رسیده .&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;.&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;ما هر سال عید&lt;br /&gt;\r\nدست در دست هم به شکرانه ی&lt;br /&gt;\r\nداشتن و سلامت و رسیدنهایمان&lt;br /&gt;\r\nبرکتی به زندگی شان هدیه میدهیم&lt;br /&gt;\r\nتا روزهای فصل بهار&lt;br /&gt;\r\nشکوفه ی امیدی&lt;br /&gt;\r\nبر شاخسار ِ دل هایشان بروید ..&lt;br /&gt;\r\nو سفره ای رنگین بر زندگی محقرشان پهن شود ...&lt;br /&gt;\r\nما سفیر لبخندیم ...&lt;br /&gt;\r\nسفیر ِ شاد کردن ِ دلها ...&lt;br /&gt;\r\nوشما را به این خیراندیشی بزرگ&lt;br /&gt;\r\nدر آستانه ی سال نو دعوت می کنیم&lt;br /&gt;\r\n.&lt;br /&gt;\r\nانجمن سفیران زندگی&lt;br /&gt;\r\nدر آستانه ی سال جدید و با همراهی شما همچون سالهای گذشته&lt;br /&gt;\r\nسبدهای کالا را به درب خانه های روستاهای محروممان میرساند ...&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;\r\n\r\n&lt;p dir=&quot;rtl&quot; style=&quot;text-align: justify;&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;span style=&quot;font-family:tahoma,geneva,sans-serif&quot;&gt;', '468a4e3b61548e35b38fc67ef6ca045d.png', '-', 1487449800, 1489609800, 1489696200, 30, 1491296721, 0, 0, 1, '59', '', '', ''),
(14, 'تست', '&lt;p&gt;تست&lt;/p&gt;\r\n', 'e151fdb516239cd1ec2c1f11e48bc3d9.jpg', '-', 1494271800, 1494444600, 1494531000, 30, 1494323009, 0, 0, 3, '4', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(10) UNSIGNED NOT NULL,
  `picture` varchar(1024) DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slideshow`
--

INSERT INTO `slideshow` (`id`, `picture`, `title`) VALUES
(3, '/images/upload/c060288f5774a386301409ff2b943926.jpg', 'راه اندازی فروشگاه');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'آذربايجان شرقي'),
(2, 'آذربايجان غربي'),
(3, 'اردبيل'),
(4, 'اصفهان'),
(5, 'البرز'),
(6, 'ايلام'),
(7, 'بوشهر'),
(8, 'تهران'),
(9, 'چهارمحال و بختياري'),
(10, 'خراسان جنوبي'),
(11, 'خراسان رضوي'),
(12, 'خراسان شمالي'),
(13, 'خوزستان'),
(14, 'زنجان'),
(15, 'سمنان'),
(16, 'سيستان و بلوچستان'),
(17, 'فارس'),
(18, 'قزوين'),
(19, 'قم'),
(20, 'کردستان'),
(21, 'کرمان'),
(22, 'کرمانشاه'),
(23, 'کهگيلويه و بويراحمد'),
(24, 'گلستان'),
(25, 'گيلان'),
(26, 'لرستان'),
(27, 'مازندران'),
(28, 'مرکزي'),
(29, 'هرمزگان'),
(30, 'همدان'),
(31, 'يزد');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `res3` varchar(1000) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `name`, `tel`, `email`, `price`, `pid`, `randomCode`, `refId`, `paymentStatus`, `transStatus`, `time`, `res1`, `res2`, `res3`) VALUES
(17, 'محمد هادی رضایی', '09361112030', 'mr.mhrezaei@gmail.com', '50000', 1, '140154000920', 'qAh6kWOVxYQne8A8CyxPnW+8ZOu8i4', 2, 2, 1389389074, '', '', ''),
(15, 'فریبا نوری اعتماد', '09351303767', 'fariba.etemad@gmail.com', '50000', 1, '140169112366', 'qAh6kWOVxYQw7gNULnPCFAj9CRTYRo', 2, 2, 1389190355, '', '', ''),
(16, 'عاطفه شکری', '', 'atefe@shokri.net', '300000', 1, '140135556487', 'qAh6kWOVxYRDcihbsBTO8mbECt7Wxo', 2, 2, 1389195342, '', '', ''),
(23, 'مژگان مظلوم ', '09123066562', 'mojgan.mazloom@hotmail.com', '300000', 1, '140116949411', '3UnhNjGRT2zoVPw3syrWuEDAkOovPy', 2, 2, 1390043593, '', '', ''),
(21, 'سینا دلیری', '09361804006', 'sina_daliri@znu.ac.ir', '750000', 1, '140100314617', 'qAh6kWOVxYSIR5cGOMNCK6cpmNQP+m', 2, 2, 1389707321, '', '', ''),
(29, 'نسترن نصرالهی', '09372364167', 'nastaran.nasrollahi@gmail.com', '500000', 1, '140161655782', '3UnhNjGRT2wiRGy3jzR4x/0zappdLn', 2, 2, 1391098982, '', '', ''),
(25, 'مینو طالب زاده ', '09192058941', '', '100000', 1, '140129856697', '3UnhNjGRT2wkNWkld8LuSrGWJq4nwd', 2, 2, 1390043988, '', '', ''),
(28, 'نيما سيمين پور', '09359419626', '', '500000', 1, '140142754634', '3UnhNjGRT2yrc40vuiC/aXEfitXLjr', 2, 2, 1391062606, '', '', ''),
(30, 'محمد هادی رضایی', '09361112030', 'narmafzar_tehran@yahoo.com', '50000', 1, '1402501904', 'MJerwoKypoiS5C0CMneIvIagAkkMdt', 2, 2, 1391289129, '', '', ''),
(33, '', '', '', '10000000', 1, '1402605493', '0', 1, 4, 1391509083, '', '', ''),
(32, 'زهره فرازي', '09124989227', '', '100000', 1, '1402458037', 'MJerwoKypoixUFv6tCL4eRuvJcpjOi', 2, 2, 1391342764, '', '', ''),
(34, 'هومان', '09354101326', 'hooman.mahdavi@yahoo.com', '1000000', 1, '1402645327', '0', 3, 4, 1391666816, '', '', ''),
(35, 'هومان', '09354101326', 'hooman.mahdavi@yahoo.com', '100000', 1, '1402475152', 'MJerwoKypoi7eV8pm+GG/vf3gA3WIV', 2, 2, 1391666947, '', '', ''),
(36, 'آزاده ذوالفقاری', '09122707441', 'azadezolfaghari@yahoo.com', '500000', 1, '1402167113', 'MJerwoKypoh31AZq0KWSZR7ylFkSuN', 2, 2, 1391937827, '', '', ''),
(37, 'فریبا نوری اعتماد', '09351303767', 'fariba.etemad@gmail.com', '150000', 1, '1402331946', 'MJerwoKypogp0nFtP62uaww15MPHfj', 2, 2, 1392112688, '', '', ''),
(38, 'زهرا صفیاری', '9123960476', 'z.safyari@hotmail.com', '150000', 1, '1402597961', 'MJerwoKypoja55/v4vKkA4v/uxS2Bl', 2, 2, 1392138709, '', '', ''),
(39, 'زهرا صفیاری', '09123960476', 'z.safyari@hotmail.com', '450000', 1, '1402615182', 'MJerwoKypoiKPxVYEim4RHgd1UMarY', 2, 2, 1392141551, '', '', ''),
(40, '', '', '', '3000000', 1, '1402244529', 'aZn73e554NGZQgmOigYQqM9uZD7dU+', 2, 2, 1392329425, '', '', ''),
(41, '', '', '', '1500000', 1, '1402886783', 'aZn73e554NHurPBHIQIf+ylQp7J9qM', 2, 2, 1392368468, '', '', ''),
(42, '', '', '', '4000000', 1, '1402304231', '0', 1, 4, 1392549110, '', '', ''),
(43, '', '', '', '400000', 1, '1402747650', 'aZn73e554NFgBSdz1Cm7qbp/vbVupo', 2, 2, 1392549142, '', '', ''),
(44, 'محمد هادی رضایی', '09361112030', 'mr.mhrezaei@gmail.com', '150000', 1, '1402011274', 'aZn73e554NGuM07ZqXa4V/Q2+tKaaR', 2, 2, 1392555337, '', '', ''),
(45, '', '', '', '10000', 1, '1402080101', '0', 3, 4, 1392623191, '', '', ''),
(46, 'آزاده نوری اعتماد', '09371177141', '', '1000000', 1, '1402954256', 'aZn73e554NFaswLG6j1gJDpUC2S/IK', 2, 2, 1392659735, '', '', ''),
(47, 'لیلا صمدی', '۰۹۱۲۲۴۷۱۹۸۰', 'leylasam@yahoo.com', '3000000', 1, '1402450944', 'aZn73e554NHPibkQ2yvTGXQoXCr6s9', 2, 2, 1392813894, '', '', ''),
(48, 'golfam', '', '', '150000', 1, '1402791090', '0', 1, 4, 1392832197, '', '', ''),
(49, 'زهرا مومنی پور', '09127307209', 'stern_1367@yahoo,com', '1500000', 1, '1402839794', 'aZn73e554NFG5OOT8eMaYUeTAN/27+', 2, 2, 1392837125, '', '', ''),
(50, 'زهرا مومنی پور', '09127307209', 'stern_1367@yahoo,com', '150000', 1, '1402937665', 'aZn73e554NFI06m6ldTAWl4No4pzEU', 2, 2, 1392837310, '', '', ''),
(51, '', '', '', '300000', 1, '1402776358', 'aZn73e554NHq0MVVl52T8NfFQYaGh9', 2, 2, 1392965667, '', '', ''),
(52, 'فاطمه یعقوبی', '', 'fatemeyaghoobi1987@yahoo.com', '600000', 1, '1402520401', '0', 1, 4, 1393143995, '', '', ''),
(53, 'tyrth', '09353561253', 'fghf@yahoo.com', '52152120', 1, '1402055679', '0', 1, 4, 1393145475, '', '', ''),
(54, 'بلقیس احمدبیگی', '09127221252', 'azadezolfaghari@yahoo.com', '1000000', 1, '1402072926', 'aZn73e554NGqB4EYvP0UKgVOENmw4I', 2, 2, 1393170901, '', '', ''),
(55, 'لبابلا', '09353561253', 'askdj@yahoo.com', '5645560', 1, '1402492602', '0', 1, 4, 1393220670, '', '', ''),
(56, '', '', '', '10000', 1, '1402478218', '0', 3, 4, 1393268098, '', '', ''),
(57, 'محمد هادی رضایی', '', '', '10000', 1, '1402336690', 'HmbGqQDsPZHb80jWRwl0oO1MilZgis', 1, 4, 1393325564, '', '', ''),
(58, '', '', '', '10000', 1, '1402389943', 'HmbGqQDsPZH21sdjXyFAvnMuZW9pZ+', 1, 4, 1393326379, '', '', ''),
(59, '', '', '', '10000', 1, '1402546349', 'HmbGqQDsPZGvcdVvY+PCAHrA6jpwca', 2, 2, 1393327417, '', '', ''),
(60, 'حمید زاغری', '09125887855', 'ahefati@gmail.com', '800000', 1, '1403394737', '0', 3, 3, 1393629934, '', '', ''),
(61, 'محمد', '', '', '10000', 4, '1406101545', '0', 3, 4, 1402749871, '', '', ''),
(62, 'محمد هادی رضایی', '09361112030', 'mr.mhrezaei@gmail.com', '50000', 4, '1406429332', 'JLZhJe4oCly6UemHW6ysuUW5NeYsqN', 2, 2, 1402749953, '', '', ''),
(63, '', '', '', '200000', 4, '1406865053', '0', 1, 4, 1402933922, '', '', ''),
(64, 'محمد هادی رضایی', '09361112030', 'mr.mhrezaei@gmail.com', '760000', 4, '1406706292', 'h5UgZlOGmqNuptJE+NQUFKtiDndAb4', 2, 2, 1403089952, '', '', ''),
(65, 'محمد هادی رضایی', '09361112030', 'mr.mhrezaei@gmail.com', '260000', 4, '1406642187', 'h5UgZlOGmqMFELGMOMLUYqpKcFVucN', 2, 2, 1403091710, '', '', ''),
(66, 'فریبا', '09351303767', '', '500000', 4, '1406785438', 'hsPkLGwWKzhKEZeLpT5oT34pQiqUHh', 2, 2, 1403354296, '', '', ''),
(67, '', '', '', '500000', 4, '1406194562', '0', 1, 4, 1403427869, '', '', ''),
(68, '', '', '', '500000', 4, '1406940663', '1OOZl9eRNB7iqfyfTIQjHEAk0aYJZa', 2, 2, 1403428003, '', '', ''),
(69, 'پریسا امامی', '09354026604', 'lostparadise08p@yahoo.com', '300000', 4, '1406131072', 'g53Es4wJD7qksoyOO0E82Q/qhSjRmf', 2, 2, 1403455524, '', '', ''),
(70, 'يگانه قاسمي ', '٠٩٣٦٢٧٤٤٥٤٨', 'Yeganeh_ghasemi12@yahoo.com', '300000', 4, '1406848166', '0', 1, 4, 1403460641, '', '', ''),
(71, 'يگانه قاسمي', '٠٩٣٦٢٧٤٤٥٤٨', 'Yeganeh_ghasemi12@yahoo.com', '300000', 4, '1406267124', 'g53Es4wJD7pMdx2LQaTGpO2gTRexnJ', 2, 2, 1403461004, '', '', ''),
(72, 'امیر متقیان', '09123371064', 'mottaghian.amir@gmail.com', '500000', 4, '1406368110', 'g53Es4wJD7rA9m6nwu73klFW7Lqy8p', 2, 2, 1403525496, '', '', ''),
(73, 'نسیم السادات حسینی', '09198187350', 'negy_2@yahoo.com', '500000', 4, '1406281969', 'Sgcroy0az6pYuyNRFzX4wnkUvT1gHH', 2, 2, 1403537007, '', '', ''),
(74, 'غزل ستاره', '09122634497', 'stern_1367@yahoo.com', '5000000', 4, '1406805324', 'Sgcroy0az6rKf8iUGDxitsIGBPFsHE', 2, 2, 1403601341, '', '', ''),
(75, 'زينب تجلّى', '٠٠٩٦٥٩٧٩٧٧٢', 'Shakhenabat20@yahoo.com', '1000000', 4, '1406467069', '0', 1, 4, 1403684838, '', '', ''),
(76, 'فاطمه یعقوبی', '09360703876', 'fatemeyaghoobi1987@yahoo.com', '600000', 4, '1406411106', 'uypRQiEAw1G16iHPyzE24m/+vEcicV', 2, 2, 1403716816, '', '', ''),
(77, 'احمد عظیمی-موید', '09363888786', 'azimiashkan@yahoo.co.uk', '1000000', 4, '1406459946', 'uypRQiEAw1HVFNqBPlIOaaHShwX2io', 2, 2, 1403795499, '', '', ''),
(78, 'آزاده نوری اعتماد', '09371177141', 'azadeh.nourietemad@yahoo.com', '500000', 4, '1406739561', 'm5/11xBE1Cf9eJPv8/4S+pwIatEqDU', 2, 2, 1403941994, '', '', ''),
(79, '', '۰۹۳۶۰۷۰۳۸۷۶', 'fatemeyaghoobi1987@yahoo.com', '400000', 4, '1406770644', 'm5/11xBE1Cf5apPzng+CIUyB9dQIR3', 2, 2, 1404013886, '', '', ''),
(80, '', '', '', '200000', 4, '1406415206', 'lyle23Zxx82FX+ZBl7f2Camh9RDzZY', 2, 2, 1404068926, '', '', ''),
(81, 'مهدی اشعریون', '09125171841', 'm_asharion@yahoo.com', '500000', 4, '1406260756', 'mhRGaZD4J4dd1M4K6xYQf6HHktxOwY', 2, 2, 1404129848, '', '', ''),
(82, 'سید حسین رهجو', '', '', '1000000', 4, '1407150774', '0', 1, 4, 1404157654, '', '', ''),
(83, 'حمید سلیمی', '09126906623', 'hamidsallimi59@yahoo.com', '300000', 4, '1407478087', 'mhRGaZD4J4el8S75teL29LDwVK/s4N', 2, 2, 1404157715, '', '', ''),
(84, 'مرجان نادري فر', '09128056934', 'Marjan_6991@yahoo.com', '300000', 4, '1407859292', 'mhRGaZD4J4dSuM6VXj54rhw1Nv0Yby', 2, 2, 1404195900, '', '', ''),
(85, 'سید حسین رهجو', '', '', '1000000', 4, '1407213665', '0', 1, 4, 1404204139, '', '', ''),
(86, 'سید حسین رهجو', '', '', '1000000', 4, '1407598922', '0', 1, 4, 1404204381, '', '', ''),
(87, 'سید حسین رهجو', '', '', '1000000', 4, '1407763934', '0', 1, 4, 1404204802, '', '', ''),
(88, 'سید حسین رهجو', '', '', '1000000', 4, '1407119022', '0', 1, 4, 1404211911, '', '', ''),
(89, 'سینا دلیری', '09127875780', 'sina_daliri@znu.ac.ir', '500000', 4, '1407055428', 'GiSRayLUEYJgISMMw1UeqeCKb0xPv7', 2, 2, 1404369881, '', '', ''),
(90, '', '', '', '500000', 4, '1407754913', '0', 3, 4, 1404675694, '', '', ''),
(91, '', '', '', '50000', 4, '1407832775', '0', 1, 4, 1404675811, '', '', ''),
(92, '', '', '', '5000000', 4, '1407982161', '0', 3, 4, 1404709719, '', '', ''),
(93, '', '', '', '500000', 4, '1407217453', 'd25r7KrH+k1dWWkgmw++jwcMCwXmEg', 2, 2, 1404709859, '', '', ''),
(94, '', '', '', '1500000', 4, '1407405170', 'j35am+1SQGwMFy9rV16786diM8hT1J', 2, 2, 1404768781, '', '', ''),
(95, '', '', '', '200000', 4, '1407216921', '0', 1, 1, 1405437063, '', '', ''),
(96, 'آزاده ذوالفقاری', '09122707441', 'azadezolfaghari@yahoo.com', '100000', 4, '1407051506', 'ofxhEwBAopEdO2PSj8y0fCbhFSbwKY', 2, 2, 1405536125, '', '', ''),
(97, 'زهرا مومنی پور', '09359307908', 'sterm_1367@yahoo.com', '1800000', 4, '1407955478', 'ofxhEwBAopHnHXrCP/j/1XIFysnXm6', 2, 2, 1405542027, '', '', ''),
(98, 'فریبا نوری اعتماد', '09351303767', 'fariba.etemad@gmail.com', '100000', 5, '1502694400', 'Zc1xsBeU4T9ybeY09XfbLXoKCk6UuE', 2, 2, 1424711440, '', '', ''),
(99, 'محمد هادی رضایی', '09351303767', 'mr.mhrezaei@gmail.com', '200000', 5, '1502505932', '3gf92VrFtPRZLt9n3zgFBfTneBvX1d', 2, 2, 1424760899, '', '', ''),
(100, '', '', '', '7000000', 5, '1502471665', '0', 1, 4, 1425104259, '', '', ''),
(101, '', '', '', '50000', 5, '1503414076', 'G+6iJ8BF/w3i0Nk+VM/jw0OEaN+OP4', 2, 2, 1425286947, '', '', ''),
(102, 'پرداخت بابت 100دلار', '', '', '3500000', 5, '1503240855', 'W9yFlmAoDBgidLMQuqekkLRWodKOzS', 2, 2, 1425454679, '', '', ''),
(103, '', '', '', '500000', 5, '1503654498', 'W9yFlmAoDBjb1py3YBX5eKGWQjex35', 2, 2, 1425467091, '', '', ''),
(104, 'فاطمه', '۰۹۱۲۴۱۷۱۴۰۶', '', '1000000', 5, '1503195114', '2Ulu5jRLfAcXkZLd9TSMsje7R7MCaD', 2, 2, 1425875536, '', '', ''),
(105, '', '', '', '2000000', 5, '1503106536', '0', 1, 4, 1425999821, '', '', ''),
(106, 'محمد هادی رضایی', '09361112030', 'mr.mhrezaei@gmail.com', '250000', 6, '1505061373', '+DSEIUWENeLLqKZlNvAGc1X7umPDYC', 2, 2, 1433071171, '', '', ''),
(107, 'فریبا نوری اعتماد', '09351303767', '', '500000', 6, '1505315381', '+DSEIUWENeLgzHJlNLol3fIoO148U/', 1, 4, 1433073408, '', '', ''),
(108, 'فریبا', '', '', '500000', 6, '1505472768', '+DSEIUWENeLy0cJAITnrS4eKHYwqEf', 3, 4, 1433077584, '', '', ''),
(109, 'فریبا نوری اعتماد', '09351303767', '', '500000', 6, '1505007950', '+DSEIUWENeKV9dS9rzEBRUbllGqDuD', 2, 2, 1433078414, '', '', ''),
(110, 'پریسا امامی', '09354026604', 'lostparadise08p@yahoo.com', '200000', 6, '1506294224', '0', 1, 4, 1434549382, '', '', ''),
(111, 'پریسا امامی', '09354026604', 'lostparadise08p@yahoo.com', '200000', 6, '1506784611', 'ZaMAcqt9doB5zNEd0GeaTFxtUA5RAk', 1, 4, 1434561819, '', '', ''),
(112, 'زهرا صفیاری', '', '', '3600000', 6, '1506604341', 'BTPMhxjyZiSZXWELnUZ5NVyG2yznKl', 2, 2, 1434626839, '', '', ''),
(113, 'پریسا امامی', '09354026604', 'lostparadise08p@yahoocom', '200000', 6, '1506704220', 'BTPMhxjyZiSetL09BhehTaaGq+jhet', 2, 2, 1434627537, '', '', ''),
(114, 'فاطمه یعقوبی', '09124171406', '', '7000000', 6, '1506726296', '0', 1, 4, 1435030822, '', '', ''),
(115, 'فاطمه یعقوبی', '۰۹۱۲۴۱۷۱۴۰۶', '', '7000000', 6, '1506170326', '0', 1, 4, 1435030929, '', '', ''),
(116, 'فاطمه یعقوبی', '۰۹۱۲۴۱۷۱۴۰۶', '', '700000', 6, '1506390709', 'VJR7F1ozt/4ulcp8/7MS8i5FlfIgE2', 2, 2, 1435030969, '', '', ''),
(117, '', '', '', '200000', 6, '1506640466', 'wA9Ue1NfnmqfmAL0ppcQyKDnYwNnyQ', 2, 2, 1435141657, '', '', ''),
(118, 'جهت هزینه در مایحتاج غذایی ملک آباد', '09125887855', 'Ahefati@gmail.com', '2000000', 6, '1506204283', '0', 1, 4, 1435146743, '', '', ''),
(119, 'هزینه جهت مایحتاج غذایی ملک آباد', '09125887855', 'Ahefati@gmail', '2000000', 6, '1506292256', 'TZ1lKS346fukH387cfGoSmFvRM8uA0', 2, 2, 1435147020, '', '', ''),
(120, '', '', '', '1000000', 6, '1506194606', 'X2Ete9DDsi0sE6iNO8j09Q/YzDyoMF', 1, 4, 1435162581, '', '', ''),
(121, 'زهرا صفیاری', '', '', '4000000', 6, '1506284065', '0', 1, 4, 1435495100, '', '', ''),
(122, 'زهرا صفیاری', '', '', '3900000', 6, '1506630477', 'BGpKb3EcFHia5pCWWjsOec/CFMFjFi', 2, 2, 1435500333, '', '', ''),
(123, '', '', '', '500000', 6, '1507341654', 'Atpa29aQt8OSx0zWj6/Iay838n0zCe', 2, 2, 1436078102, '', '', ''),
(124, 'امیر جورابچی', '09121496561', '', '300000', 7, '1507257667', '0', 1, 4, 1437209375, '', '', ''),
(125, '', '', '', '600000', 7, '1507620195', 'P6EayZm7WnKHhTInqTy4T88a5lT6pe', 1, 4, 1437474485, '', '', ''),
(126, '', '', '', '600000', 7, '1507004863', 'P6EayZm7WnIsqWZEABonvVwaHSepgC', 1, 4, 1437474709, '', '', ''),
(127, '', '', '', '600000', 7, '1507761437', 'P6EayZm7WnJ5GKqY02XabpPmKl2zeW', 1, 4, 1437475250, '', '', ''),
(128, '', '', '', '600000', 7, '1507721148', 'P6EayZm7WnJtirgzqJZ5YvYKI8wUvB', 1, 4, 1437475388, '', '', ''),
(129, '', '', '', '10000', 7, '1507627376', 'P6EayZm7WnLXNGT0Opg6S6AAxJSpZ0', 1, 4, 1437475512, '', '', ''),
(130, '', '', '', '600000', 7, '1507216441', 'P6EayZm7WnLQ33QJfZvGP8aj3MeVpk', 2, 2, 1437476896, '', '', ''),
(131, 'محمدهادی رضایی', '09361112030', '', '1500000', 8, '1602052252', '0', 1, 4, 1456045142, '', '', ''),
(132, 'محمدهادی رضایی', '09361112030', '', '1500000', 8, '1602147715', '0', 1, 4, 1456046088, '', '', ''),
(133, 'محمدهادی رضایی', '09361112030', '', '1500000', 8, '1602367571', 'kzsfEZUjObp+nwCbDaHpSy/tzUgKcr', 2, 2, 1456297192, '', '', ''),
(134, 'نوری اعتماد', '09371177141', 'a.noorietemad@yahoo.com', '400000', 8, '1602551488', 'j45Cs5nz+sIiT7kT3sdkt6UEAPv+Vg', 1, 4, 1456676268, '', '', ''),
(135, 'فریبا نوری اعتماد', '09351303767', '', '500000', 8, '1602926226', 'j45Cs5nz+sLSjkW5QRx/nDObCpL9Yw', 2, 2, 1456682333, '', '', ''),
(136, 'آزاده نوری اعتماد', '', '', '400000', 8, '1602349097', 'j45Cs5nz+sLbFt8p1UVPu/hwK8CK/q', 2, 2, 1456682449, '', '', ''),
(137, '', '09124171406', 'fatemeyaghoobi1987@yahoo.com', '1000000', 8, '1603992977', 'pTO8j31X6dDysspR6iz8/OWuezcp2r', 1, 1, 1456823021, '', '', ''),
(138, '', '', '', '2352353560', 8, '1603157939', '0', 1, 4, 1456834757, '', '', ''),
(139, '', '', '', '300000', 8, '1603676037', '0', 1, 4, 1456945798, '', '', ''),
(140, '', '', '', '300000', 8, '1603833696', '0', 1, 4, 1456945843, '', '', ''),
(141, '', '', '', '300000', 8, '1603146845', '1hoZQ6YScoHbdWhmfwOa+1FyjBlVB1', 1, 4, 1456946612, '', '', ''),
(142, 'عزیز', '', '', '300000', 8, '1603574454', '0', 1, 4, 1457112803, '', '', ''),
(143, '', '', '', '300000', 8, '1603482029', '0', 1, 4, 1457112867, '', '', ''),
(144, '', '', '', '300000', 8, '1603988274', '0', 1, 4, 1457112919, '', '', ''),
(145, '', '', '', '50000', 8, '1603569469', '0', 1, 4, 1457113127, '', '', ''),
(146, '', '', '', '300000', 8, '1603308755', 'ekLVXVdOEWWBc35IqKNEjBXQK7pgvl', 2, 2, 1457113444, '', '', ''),
(147, 'زیبا احمدبیگی', '09127307209', '', '500000', 8, '1603931881', 'ekLVXVdOEWWGzHravfcuIF2w5Bl3Fz', 1, 4, 1457114612, '', '', ''),
(148, 'زهرا مومونی پور تفرشی', '09127307209', '', '500000', 8, '1603535717', 'ekLVXVdOEWVzam8J0sK5UhPM3t67DT', 2, 2, 1457114802, '', '', ''),
(149, 'فرنگیس احمدبیگی', '09102005482', 'azadezolfaghari@yahoo.com', '300000', 8, '1603420053', 'ihg/f8KVbDcDcIrhCoWJH6coG6xSnw', 2, 2, 1457160999, '', '', ''),
(150, '', '', '', '50000', 8, '1603730071', 'cl3P9I4QVKS9O0AzUotijKkFSYVzan', 2, 2, 1457339590, '', '', ''),
(151, '', '', '', '500000', 9, '1606199312', '0', 1, 4, 1465565276, '', '', ''),
(152, 'آزاده نوری اعتماد ', '09371177141', 'azadeh.nourietemad@yahoo.com', '400000', 9, '1606996026', 'SsIjqjR4F4/q7zsAfPLL0Sp1kTsY9b', 2, 2, 1465648388, '', '', ''),
(153, 'من', '', '', '100000', 9, '1606243083', 'QW98ZkGWK02yYnHD8crXjLXzOOyyGx', 2, 2, 1465671205, '', '', ''),
(154, '', '', '', '1000000', 9, '1606601643', 'QW98ZkGWK01Xtqg5PESC35GvdTs8M1', 2, 2, 1465673034, '', '', ''),
(155, '', '', '', '100000', 9, '1606229807', '0', 1, 4, 1465673738, '', '', ''),
(156, 'رضایی', '', '', '100000', 9, '1606259215', 'QW98ZkGWK00yv8W4R3aH/Y8eHPbtb9', 2, 2, 1465673767, '', '', ''),
(157, '', '', '', '200000', 9, '1606495159', 'QW98ZkGWK02sPreMQNHu8Hh+5RC0g0', 2, 2, 1465673832, '', '', ''),
(158, '', '', '', '100000', 9, '1606488407', '0', 1, 4, 1465674346, '', '', ''),
(159, '', '', '', '200000', 9, '1606678144', 'QW98ZkGWK02Mvw/fqIkkoEi3vQkiKN', 2, 2, 1465674431, '', '', ''),
(160, '', '', '', '100000', 9, '1606288936', 'QW98ZkGWK02NqdGsSU/b/tXtwRlu0i', 2, 2, 1465674629, '', '', ''),
(161, 'مریم زالی', '09124502804', '', '1000000', 9, '1606731536', 'vHQ5klzzvkNEPk4oxeHN5LR/y41xK5', 2, 2, 1465756405, '', '', ''),
(162, 'محسن مهدوی پروداکشن :D', '09391368608', 'mohsen.moochan@gmail.com', '100000', 9, '1606713825', 'vHQ5klzzvkMRtcP5l3ZIp/CEhfqWJX', 2, 2, 1465757830, '', '', ''),
(163, '', '', '', '100000', 9, '1606633163', '0', 1, 4, 1465759542, '', '', ''),
(164, '', '', '', '100000', 9, '1606340365', 'vHQ5klzzvkN14DoqnktIIw86nf0fAy', 2, 2, 1465764359, '', '', ''),
(165, '', '', '', '1000000', 9, '1606235987', '0', 3, 4, 1465918561, '', '', ''),
(166, '', '', '', '1000000', 9, '1606268363', 'QN/xzdcFKTc0zZIG3ngKkszYlhh6ex', 2, 2, 1465918679, '', '', ''),
(167, 'عزیز', '', '', '370000', 9, '1606176622', 'byzYH7PS20tfL+yczjIOwlBLjyi60G', 1, 4, 1466019431, '', '', ''),
(168, 'عزیز', '', '', '370000', 9, '1606668492', 'byzYH7PS20tqEi5cZ8x5W6VOneH5z5', 2, 2, 1466019583, '', '', ''),
(169, 'کفاره', '', '', '560000', 10, '1607046838', 'ylC9cKep+OiCmgS2+3BigoESA8dIP0', 2, 2, 1467744679, '', '', ''),
(170, '', '', '', '1500000', 10, '1607794084', '0', 3, 4, 1467790778, '', '', ''),
(171, '', '', '', '150000', 10, '1607138074', 'ylC9cKep+Ojo9FM/IPPkYzvzvZ2UcM', 2, 2, 1467790922, '', '', ''),
(172, '', '', '', '300000', 10, '1607357296', 'jkBBmDx+3TC5tAbwISi5OqIzzQtTo2', 2, 2, 1467794740, '', '', ''),
(173, '', '', '', '100000', 11, '1609872357', 'QubqYPKDISCz1MFpuRJaQEGRW9cZss', 2, 2, 1473928222, '', '', ''),
(174, 'رضوان بیرجندی نژاد ', '09195519312', 'Rez1nejad2000@yahoo.com ', '200000', 11, '1609941308', 'Lq8z4CgC3WLqdOXIt+Usb0EWcwTYMX', 1, 1, 1474106722, '', '', ''),
(175, '', '', '', '9000', 11, '1609714184', '0', 3, 3, 1474215838, '', '', ''),
(176, 'اتاق عمل', '09126617301', 'site@site.com', '10000', 14, '1705230350', '76iNAIimOweXjzAXecnRnr4Qxj9qZ/', 2, 2, 1494323091, '', '', ''),
(177, 'آزاده مرادی', '09160325302', 'test@test.com', '20000', 14, '1705855838', '0', 3, 3, 1494323180, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `useraccess`
--

CREATE TABLE `useraccess` (
  `id` int(10) UNSIGNED NOT NULL,
  `uID` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8_persian_ci NOT NULL,
  `accessTime` bigint(20) NOT NULL,
  `status` int(11) NOT NULL,
  `res1` varchar(1000) COLLATE utf8_persian_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `useraccess`
--

INSERT INTO `useraccess` (`id`, `uID`, `title`, `accessTime`, `status`, `res1`) VALUES
(1, 30, 'admin', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='user safiran table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `fatherName`, `nationalCode`, `sex`, `birthDay`, `tel`, `mobile`, `state`, `city`, `address`, `postalCode`, `job`, `education`, `cours`, `email`, `userName`, `passWord`, `status`) VALUES
(30, 'محمد هادي رضايي 1', 'نم', '0012071110', 1, '1349647200', '02122324472', '09361112030', 8, 'تهران', 'تهران', '1111111111', '121212', '', '', 'mr.mhrezaei@gmail.com', 'admin', '562f56792bbef1816fe725a6719380137b963ca1', 1),
(31, 'فريبا نوري اعتماد', 'حسن', '0084782439', 2, '596493000', '02122324472', '09351303767', 8, 'واوان', 'خ رجايي کوچه سي و دو غربي پلاک 6', '3317648115', 'کارمند بيمارستان', 'ديپلم', 'تجربي', 'fariba.etemad@gmail.com', 'nourietemad', 'fe703d258c7ef5f50b71e06565a65aa07194907f', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccess`
--
ALTER TABLE `useraccess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=178;
--
-- AUTO_INCREMENT for table `useraccess`
--
ALTER TABLE `useraccess`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
