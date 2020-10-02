-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2020 at 08:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fulltrader`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `item_rating`
--

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_image` text COLLATE utf8_unicode_ci NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `item_rating`
--

INSERT INTO `item_rating` (`ratingId`, `itemId`, `userId`, `username`, `user_image`, `ratingNumber`, `title`, `comments`, `created`, `modified`, `status`) VALUES
(79, 1, 0, 'syaiful', 'syaiful.jpg', 3, 'test another review', 'test', '2020-09-15 06:15:27', '2020-09-15 06:15:27', 1),
(80, 1, 0, 'syaiful', 'syaiful.jpg', 5, 'yo yo yo', 'test', '2020-09-15 07:32:22', '2020-09-15 07:32:22', 1),
(81, 1, 0, 'syaiful', 'syaiful.jpg', 5, 'test', 'test', '2020-09-15 13:01:36', '2020-09-15 13:01:36', 1),
(82, 1, 0, 'syaiful', 'syaiful.jpg', 1, 'test', 'test', '2020-09-15 13:01:54', '2020-09-15 13:01:54', 1),
(83, 1, 0, 'syaiful', 'syaiful.jpg', 5, 'trest', 'test', '2020-09-16 17:30:53', '2020-09-16 17:30:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `konten_video`
--

CREATE TABLE `konten_video` (
  `id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `nama_video` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `durasi` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `video_type` varchar(255) NOT NULL,
  `visibility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konten_video`
--

INSERT INTO `konten_video` (`id`, `section_id`, `nama_video`, `link_video`, `durasi`, `role`, `video_type`, `visibility`) VALUES
(265, 65, 'how to deal with feeling lost in life', 'https://www.youtube.com/watch?v=q4wttzjki-4', 6, 'preview', '', 'auto'),
(266, 65, 'Little Devil Inside', 'https://www.youtube.com/watch?v=_FqsyNSYSKc', 4, 'locked', '', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `publish` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`id`, `title`, `author_id`, `image`, `author`, `author_image`, `deskripsi`, `harga`, `date_created`, `publish`) VALUES
(219, 'Photography Crash Course', 1, '0b3b7aaa1c62bada33f6d9c15d9a5771.png', ' Syaiful ', ' a79c03372803943ef323be886fb0e060.jpg ', '<h3>Description</h3>\r\n<p><strong>Hi! Welcome to Photography Crash Course for Photographer, the only course you need to become a BI Analyst.</strong></p>\r\n<p>Here are some more details of what you get with The Business Intelligence Analyst Course:</p>\r\n<ul class=\"description-features-list\">\r\n<li><strong>Introduction to Data and Data Science</strong> – Make sense of terms like business intelligence, traditional and big data, traditional statistical methods, machine learning, predictive analytics, supervised learning, unsupervised learning, reinforcement learning, and many more;</li>\r\n<li><strong>Database theory</strong> – Before you start using SQL, it is highly beneficial to learn about the underlying database theory and acquire an understanding of why databases are created and how they can help us manage data;</li>\r\n<li><strong>SQL</strong> – when you can work with SQL, it means you don’t have to rely on others sending you data and executing queries for you. You can do that on your own. This allows you to be independent and dig deeper into the data to obtain the answers to questions that might improve the way your company does its business;</li>\r\n</ul>\r\n<h3>What you\'ll learn</h3>\r\n<div class=\"why-you-learn\">\r\n<ul>\r\n<li>Become an expert in Statistics</li>\r\n<li>Boost your resume with skills</li>\r\n<li>Gather, organize, data</li>\r\n<li>Use data for improved</li>\r\n<li>Present information KPIs</li>\r\n<li>Perform quantitative</li>\r\n<li>Analyze current data</li>\r\n<li>Discover how to find trends</li>\r\n<li>Understand the fundamentals</li>\r\n<li>Use SQL to create, design</li>\r\n</ul>\r\n</div>\r\n<h3>Requirements</h3>\r\n<ul class=\"requirements-list\">\r\n<li>Contrary to popular belief, Lorem Ipsum is not simply random text.</li>\r\n<li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</li>\r\n<li>The standard Lorem Ipsum passage, used since the 1500s.</li>\r\n</ul>\r\n<h3>Who this course is for:</h3>\r\n<ul class=\"audience-list\">\r\n<li>Beginners to programming and data science</li>\r\n<li>Students eager to learn about job opportunities in the field of data science</li>\r\n<li>Candidates willing to boost their resume by learning how to combine the knowledge of Statistics, SQL, and Tableau in a real-world working environment</li>\r\n<li>People interested in a Business Intelligence Analyst career</li>\r\n</ul>', 150, '2020-10-01', 'No'),
(223, 'This is my first course', 74, '0b4c56a3c10b988e6be59178322fb31c.png', ' iqbal ', ' 994f4b082f87fdc822b4f0ecef4edd8a.png ', '<p>test</p>', 150, '2020-10-01', 'No'),
(224, 'This is my second course', 1, '6e87ac0fd8b919b5aa85e982335253fc.png', ' Syaiful ', ' a79c03372803943ef323be886fb0e060.jpg ', '<p>test</p>', 10, '2020-10-01', 'No'),
(225, 'Section 1 : Hello World!!', 1, 'bbd1162429746ae0d5a11d0122cd574e.png', ' Syaiful ', ' 99dfbe358b56e31932656b0817c15b50.jpg ', '<p>test</p>', 15, '2020-10-01', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menu_akses_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_akses_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin/dashboard', 'menu-icon fa fa-tachometer', 1),
(3, 1, 'Semua Kursus', 'admin/kursus', 'menu-icon fa fa-laptop', 1),
(4, 2, 'Kursusku', 'kursusku', 'menu-icon fa fa-laptop', 1),
(6, 2, 'Markets', 'markets', 'menu-icon fa fa-search', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section_kursus`
--

CREATE TABLE `section_kursus` (
  `id` int(11) NOT NULL,
  `kursus_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_kursus`
--

INSERT INTO `section_kursus` (`id`, `kursus_id`, `title`) VALUES
(65, 219, 'Section 1 : Hello World!!');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `post_id` int(11) NOT NULL,
  `post_setting` varchar(255) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`post_id`, `post_setting`, `post_title`, `post_content`) VALUES
(1, 'ABOUT', 'What background knowledge is necessary??', '<p>Nam egestas lorem ex, sit amet commodo tortor faucibus a. Suspendisse commodo, turpis a dapibus fermentum, turpis ipsum rhoncus massa, sed commodo nisi lectus id ipsum. Sed nec elit vehicula, aliquam neque euismod, porttitor ex. Nam consequat iaculis maximus. test test test</p>');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `sub_id` int(3) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`sub_id`, `email`) VALUES
(3, 'fauzi@1firstrent.com'),
(9, 'imamagusaolawi@gmail.com'),
(10, 'imamagusaolawi@gmail.com'),
(11, 'imamagusaolawi@gmail.com'),
(12, 'imamagusaolawi@gmail.com'),
(14, 'domstates.su'),
(17, ''),
(18, ''),
(19, ''),
(20, ''),
(21, ''),
(22, ''),
(23, ''),
(24, ''),
(25, ''),
(26, ''),
(27, ''),
(28, ''),
(29, ''),
(30, ''),
(31, ''),
(32, ''),
(33, ''),
(34, ''),
(35, ''),
(36, 'achlanberkarisma@gmail.com'),
(37, ''),
(38, ''),
(39, ''),
(40, 'cikalsetiawan69@gmail.com'),
(41, ''),
(42, ''),
(43, ''),
(44, ''),
(45, ''),
(46, ''),
(47, ''),
(48, ''),
(49, ''),
(50, 'ayu011072@gmail.com'),
(51, ''),
(52, ''),
(53, ''),
(54, ''),
(55, 'roykalbebvg@gmail.com'),
(56, 'septiandiki708@gmail.com'),
(57, ''),
(58, 'andiniws27@gmail.com'),
(59, ''),
(60, ''),
(61, 'tiganna78@gmail.com'),
(62, ''),
(63, ''),
(64, ''),
(65, 'suheni.lie1988@gmail.com'),
(66, ''),
(67, ''),
(68, ''),
(69, ''),
(70, ''),
(71, ''),
(72, 'alberta_rdk@yahoo.co.id'),
(73, 'sample@email.tst'),
(74, 'sample@email.tst'),
(75, 'sample@email.tst'),
(76, 'sample@email.tst'),
(77, 'sample@email.tst'),
(78, 'sample@email.tst'),
(79, 'sample@email.tst'),
(80, 'sample@email.tst'),
(81, 'sample@email.tst'),
(82, 'sample@email.tst'),
(83, 'sample@email.tst'),
(84, 'sample@email.tst'),
(85, 'sample@email.tst'),
(86, 'sample@email.tst'),
(87, 'sample@email.tst'),
(88, 'sample@email.tst'),
(89, 'sample@email.tst'),
(90, 'sample@email.tst'),
(91, 'sample@email.tst'),
(92, 'sample@email.tst'),
(93, 'sample@email.tst'),
(94, 'sample@email.tst'),
(95, 'sample@email.tst'),
(96, 'sample@email.tst'),
(97, 'sample@email.tst'),
(98, 'sample@email.tst'),
(99, 'sample@email.tst'),
(100, 'sample@email.tst'),
(101, 'sample@email.tst'),
(102, 'sample@email.tst'),
(103, 'sample@email.tst'),
(104, 'sample@email.tst'),
(105, 'sample@email.tst'),
(106, 'sample@email.tst'),
(107, 'sample@email.tst'),
(108, 'sample@email.tst'),
(109, 'sample@email.tst'),
(110, 'sample@email.tst'),
(111, 'sample@email.tst'),
(112, 'sample@email.tst'),
(113, 'sample@email.tst'),
(114, 'sample@email.tst'),
(115, 'sample@email.tst'),
(116, 'sample@email.tst'),
(117, 'sample@email.tst'),
(118, 'sample@email.tst'),
(119, 'sample@email.tst'),
(120, 'sample@email.tst'),
(121, 'sample@email.tst'),
(122, 'sample@email.tst'),
(123, 'sample@email.tst'),
(124, 'sample@email.tst'),
(125, 'sample@email.tst'),
(126, 'sample@email.tst'),
(127, 'sample@email.tst'),
(128, 'sample@email.tst'),
(129, 'sample@email.tst'),
(130, 'sample@email.tst'),
(131, 'sample@email.tst'),
(132, 'sample@email.tst'),
(133, 'sample@email.tst'),
(134, 'sample@email.tst'),
(135, 'sample@email.tst'),
(136, 'sample@email.tst'),
(137, ''),
(138, ''),
(139, ''),
(140, ''),
(141, 'azfarwisata.com@domstates.su'),
(142, ''),
(143, ''),
(144, ''),
(145, ''),
(146, ''),
(147, ''),
(148, 'azfarwisata.com@domstates.su'),
(149, ''),
(150, ''),
(151, ''),
(152, ''),
(153, ''),
(154, ''),
(155, 'echi7165@gmail.com'),
(156, 'echi7165@gmail.com'),
(157, ''),
(158, ''),
(159, 'azfarwisata.com@domstates.su'),
(160, ''),
(161, 'zerah 2212'),
(162, ''),
(163, ''),
(164, 'titien.supriyati@indofood.co.id'),
(165, 'titien.supriyati@indofood.co.id'),
(166, 'hardianwijaya2@gmail.com'),
(167, 'hardianwijaya2@gmail.com'),
(168, ''),
(169, ''),
(170, ''),
(171, ''),
(172, ''),
(173, ''),
(174, ''),
(175, ''),
(176, 'marulisagala@yahoo.com'),
(177, ''),
(178, ''),
(179, ''),
(180, ''),
(181, 'eksap_007@yahoo.co.id'),
(182, 'haryatiade3@gmail.com'),
(183, ''),
(184, ''),
(185, ''),
(186, ''),
(187, ''),
(188, ''),
(189, ''),
(190, 'ainurbaitillah123@gmail.com'),
(191, 'ainurbaitillah123@gmail.com'),
(192, 'rosyani.liauw@gmail.com'),
(193, ''),
(194, ''),
(195, ''),
(196, ''),
(197, ''),
(198, ''),
(199, ''),
(200, ''),
(201, ''),
(202, ''),
(203, ''),
(204, 'balotelyramly@gmail.com'),
(205, ''),
(206, ''),
(207, ''),
(208, ''),
(209, 'nadilaqonita19@gmail.com'),
(210, ''),
(211, ''),
(212, 'azfarwisata.com@domstat.su'),
(213, ''),
(214, 'azfarwisata.com@domstat.su'),
(215, ''),
(216, 'erma1703@gmail.com'),
(217, ''),
(218, 'amiruddin.wijaya@gmail.com'),
(219, 'azfarwisata.com@domstat.su'),
(220, 'harryghosaan@gmail.com'),
(221, ''),
(222, ''),
(223, 'azfarwisata.com@domstat.su'),
(224, 'azfarwisata.com@domstat.su'),
(225, ''),
(226, ''),
(227, ''),
(228, 'tazurun.thadie@gmail.com'),
(229, 'tazurun.thadie@gmail.com'),
(230, ''),
(231, ''),
(232, 'mslinaaje@gmail.com'),
(233, ''),
(234, ''),
(235, ''),
(236, ''),
(237, ''),
(238, ''),
(239, ''),
(240, ''),
(241, 'www.wkurniawan609@gmail.com'),
(242, 'www.wkurniawan609@gmail.com'),
(243, 'aniezraffa@gmail.com'),
(244, ''),
(245, ''),
(246, ''),
(247, ''),
(248, ''),
(249, ''),
(250, 'meichinchen27@gmail.com'),
(251, ''),
(252, 'hermantoasep45@gmail.com'),
(253, ''),
(254, ''),
(255, ''),
(256, ''),
(257, ''),
(258, ''),
(259, ''),
(260, 'mardiananurhaljmah@gmail.com'),
(261, 'mardiananurhalimah@gmail.com'),
(262, ''),
(263, 'azfarwisata.com@domstat.su'),
(264, ''),
(265, ''),
(266, ''),
(267, ''),
(268, ''),
(269, 'odevi4087@gmail.com'),
(270, ''),
(271, 'nnueathick.ela@gmail.com'),
(272, 'ririenriendriati191@gmail.com'),
(273, ''),
(274, ''),
(275, ''),
(276, 'fajarfardian1@gmail.com'),
(277, ''),
(278, 'rafael.matondang06@gmail.com'),
(279, ''),
(280, ''),
(281, ''),
(282, ''),
(283, 'amyankadjah5@gmail.com'),
(284, ''),
(285, ''),
(286, 'fitri@ms-aishah.com'),
(287, 'muhammadziqry117@gmail.com'),
(288, 'azfarwisata.com@domstat.su'),
(289, ''),
(290, ''),
(291, ''),
(292, ''),
(293, ''),
(294, 'dan@artaffects-ent.com'),
(295, ''),
(296, 'adamflinchbaugh@gmail.com'),
(297, 'honeybear6916@gmail.com'),
(298, ''),
(299, 'robertwillis@msn.com'),
(300, 'meganlori14@yahoo.com'),
(301, 'hm_bryan@yahoo.com'),
(302, 'hendikarang.hs@gmail.com'),
(303, ''),
(304, 'jan-michel03@outlook.de'),
(305, 'judahjams@yahoo.com'),
(306, 'srfetzer@gmail.com'),
(307, 'jabbs24@gmail.com'),
(308, 'amazon@globewarehouse.com'),
(309, 'csar.arteaga@gmail.com'),
(310, 'alainmas@yahoo.fr'),
(311, 'cyrus.slovek@gmail.com'),
(312, ''),
(313, ''),
(314, 'chanel.olagundoye@yahoo.com'),
(315, ''),
(316, 'smpfatahillahkebylama@yahoo.co.id'),
(317, 'smpfatahillahkebylama@yahoo.co.id'),
(318, 'pradyumna.gurusamy@gmail.com'),
(319, 'marcolengg@bluewin.ch'),
(320, ''),
(321, ''),
(322, 'danielfebrino2425@gmail.com'),
(323, ''),
(324, ''),
(325, ''),
(326, ''),
(327, 'jilllyelizabeth@yahoo.com'),
(328, 'greglong@cox.net'),
(329, 'tobyg4@aol.com'),
(330, 'kelliescholten@gmail.com'),
(331, ''),
(332, 'rachmawati17dwi@gmail.com'),
(333, 'wdwills@yahoo.com'),
(334, 'cogana1@gmail.com'),
(335, 'bjtillman1@yahoo.com'),
(336, 'kunal.h.shah@gmail.com'),
(337, 'gtuttle@tuttleinc.com'),
(338, 'matt@sparrowclubs.org'),
(339, 'shelleyerichardson@gmail.com'),
(340, 'ichavez@thermalin-inc.com'),
(341, 'theb00kreader@yahoo.com'),
(342, 'sales@creativesignworks.ca'),
(343, ''),
(344, 'jridefree@aol.com'),
(345, 'iconography_tyler@hotmail.com'),
(346, 'franz.gallenmiller@gmx.de'),
(347, 'ftcullen@yahoo.co.uk'),
(348, 'l.knobloch@freenet.de'),
(349, 'gcederlof@calvadafoods.com'),
(350, ''),
(351, 'basri82.hb40@gmail.com'),
(352, 'williamsni@bellsouth.net'),
(353, 'susanbmerlin@gmail.com'),
(354, 'rachelejanssen@aol.com'),
(355, 'reeves1945@comcast.net'),
(356, 'maddiecandy12345@gmail.com'),
(357, 'vernon.costa@me.com'),
(358, 'molzer77@hotmail.com'),
(359, ''),
(360, 'pkang0607@gmail.com'),
(361, 'deborah.phillips500@gmail.com'),
(362, 'schwartzremanagement@gmail.com'),
(363, 'zrealtors@aol.com'),
(364, 'deboraheverard@yahoo.co.uk'),
(365, 'amy@amycarey.biz'),
(366, 'orozcoedith@att.net'),
(367, 'orozcoedith@att.net'),
(368, 'stephanemswiler@yahoo.com'),
(369, 'johnmchomos@hotmail.com'),
(370, 'maki42@web.de'),
(371, 'feedback@thecaptainsboil.com'),
(372, 'jwoodhart16@hotmail.co.uk'),
(373, 'lakekoelling@gmail.com'),
(374, 'larry@larrydorman.com'),
(375, 'lars1meyer@web.de'),
(376, 'robdl@htc.net'),
(377, 'mgauzza1@yahoo.com'),
(378, 'coppeliahk@att.net'),
(379, 'jwang493@gmail.com'),
(380, 'clay-maggie@comcast.net'),
(381, 'rms@mcconnellsneed.com'),
(382, 'amandajmadison@gmail.com'),
(383, 'tom@tvdl.be'),
(384, 'arnoldwayne@bellsouth.net'),
(385, 'nan01@shaw.ca'),
(386, ''),
(387, 'shadee2125@yahoo.com'),
(388, 'grisel.gomez@meyersgroup.net'),
(389, 'tsaimond94@gmail.com'),
(390, 'smurphy@paulandperkins.com'),
(391, ''),
(392, ''),
(393, ''),
(394, 'gloriasantiago88@gmail.com'),
(395, 'indridcold20@rocketmail.com'),
(396, 'mikem345@me.com'),
(397, ''),
(398, 'macapagaljenn@yahoo.com'),
(399, 'azfarwisata.com@domstat.su'),
(400, 'eparker@foxcroft.org'),
(401, 'amir@grandisconstruction.com'),
(402, ''),
(403, 'pepito_muniz@yahoo.com'),
(404, 'azfarwisata.com@domstat.su'),
(405, 'em500825@gmail.com'),
(406, ''),
(407, ''),
(408, ''),
(409, 'amcshane_med@yahoo.com'),
(410, 'kristin@kidgearswap.com'),
(411, 'sozza2001uk@yahoo.co.uk'),
(412, ''),
(413, 'kbarkervettech@gmail.com'),
(414, ''),
(415, ''),
(416, 'moorejim2@yahoo.com'),
(417, 'melissagleyo@aol.com'),
(418, 'tthalv@farmerstel.net'),
(419, ''),
(420, 'yufang_z@hotmail.com'),
(421, ''),
(422, ''),
(423, ''),
(424, ''),
(425, 'breezio69@gmail.com'),
(426, 'mantis01@gmail.com'),
(427, 'azfarwisata.com@domstat.su'),
(428, 'usedcellphones.pay@protonmail.com'),
(429, ''),
(430, 'cywc@comcast.net'),
(431, ''),
(432, 'agsus67.1@gmail.com'),
(433, 'yudhamancung752@gmail.com'),
(434, 'yudhamancung752@gmail.com'),
(435, 'yudhamancung752@gmail.com'),
(436, ''),
(437, ''),
(438, ''),
(439, ''),
(440, ''),
(441, ''),
(442, 'bulkweedinbox@protonmail.com'),
(443, 'amiruddin.wijaya@gmail.com'),
(444, 'husnyslipi@gmail.com'),
(445, ''),
(446, ''),
(447, 'isabella.pacifico@outlook.it'),
(448, 'Henykha@gmail.com'),
(449, 'Henykha@gmail.com'),
(450, 'tisar@indopay.com'),
(451, 'azfarwisata.com@domstat.su'),
(452, ''),
(453, 'aeclbus@gmail.com'),
(454, ''),
(455, 'conniepancorbo@gmail.com'),
(456, 'azfarwisata.com@domstat.su'),
(457, 'info@thefreedomfactorytoronto.com'),
(458, 'ronprager@brinco.com'),
(459, 'mpayavla@aol.com'),
(460, 'jasen.covert@yahoo.com'),
(461, 'azfarwisata.com@domstat.su'),
(462, ''),
(463, 'dirtbike_04@hotmail.com'),
(464, ''),
(465, 'a.moik@t-online.de'),
(466, 'heartburn@california.com'),
(467, 'azfarwisata.com@domstat.su'),
(468, 'ncverenis@aol.com'),
(469, 'shannonwaugh@yahoo.com'),
(470, 'dsanjorge@gmail.com'),
(471, 'davepeskin@gmail.com'),
(472, 'lhbarrow@email.unc.edu'),
(473, 'lynn@fivepointscricketfarm.com'),
(474, 'dennis@sharkshock.net'),
(475, 'charlie_hannon@yahoo.com'),
(476, 'pauliac@yahoo.com'),
(477, 'arcatherman97@yahoo.com'),
(478, 'azfarwisata.com@domstat.su'),
(479, 'paul.luck16@yahoo.co.uk'),
(480, 'ajatdrajat83@gmail.com'),
(481, 'cathrinbunni@gmail.com'),
(482, ''),
(483, ''),
(484, 'sarimaryani50@gmail'),
(485, 'sarimaryani50@gmail'),
(486, ''),
(487, 'elias_galanis10@hotmail.com'),
(488, 'laurenm566@aol.com'),
(489, ''),
(490, ''),
(491, 'hbouskila7286@gmail.com'),
(492, 'felibrandt@hotmail.de'),
(493, ''),
(494, 'azfarwisata.com@domstat.su'),
(495, 'azfarwisata.com@domstat.su'),
(496, 'azfarwisata.com@domstat.su'),
(497, ''),
(498, ''),
(499, ''),
(500, ''),
(501, ''),
(502, ''),
(503, ''),
(504, ''),
(505, 'argonovi@yahoo.co.id'),
(506, 'argonovi@yahoo.co.id'),
(507, 'argonovi@yahoo.co.id'),
(508, 'solihinressy140914@gmail.com'),
(509, ''),
(510, ''),
(511, ''),
(512, ''),
(513, ''),
(514, ''),
(515, ''),
(516, 'brendacall123@yahoo.com'),
(517, ''),
(518, ''),
(519, ''),
(520, ''),
(521, 'azfarwisata.com@domstat.su'),
(522, ''),
(523, ''),
(524, 'azfarwisata.com@domstat.su'),
(525, ''),
(526, '');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`post_id`, `post_title`, `post_content`) VALUES
(1, 'Tentang', '<p><strong>Azfar Wisata</strong> adalah badan usaha <strong>Online Travel Agent</strong> yang menyediakan pra-sarana transportasi, akomodasi sampai dengan destinasi yang sudah bekerja sama dengan beberapa mitra penyedia jasa. Dengan jasa pelayanan yang sudah profesional dan bertanggung jawab.</p>'),
(2, 'Terms', '<p><strong>Terms and Conditions (Terms)</strong></p>\r\n<p>Silakan baca Syarat dan Ketentuan (Persyaratan, Syarat dan Ketentuan) dengan hati-hati sebelum menggunakan situs <strong>http://www.azfarwisata.com</strong> yang dioperasikan oleh kami.&nbsp;<br />Akses dan penggunaan Layanan dikondisikan pada penerimaan dan kepatuhan dengan Syarat. Ketentuan ini berlaku untuk semua pengunjung dan orang lain yang mengakses atau menggunakan Layanan.</p>\r\n<p>Dengan mengakses atau menggunakan Layanan Anda setuju untuk terikat oleh Syarat. Jika Anda tidak setuju dengan setiap bagian dari persyaratan maka Anda tidak dapat mengakses Layanan.</p>\r\n<p><strong>Pelayanan kami :</strong></p>\r\n<p>Situs kami berfungsi sebagai portal online untuk mitra yang mengulas mempromosikan/penyewaan hotel dan villa.</p>\r\n<p>Dengan menggunakan layanan kami melalui <strong>Azfar Wisata</strong>, Anda terikat secara hukum oleh hubungan kontrak dengan hotel dan villa mitra penyedia.</p>\r\n<p>Pada saat Anda memesan,&nbsp;<strong>Azfar Wisata,</strong> bertindak sebagai penghubung, menyampaikan rincian penyewaan dan konfirmasi antara Anda dan pihak hotel dan villa tersebut, serta peran untuk mewakili mereka.</p>\r\n<p><strong>Penawaran Harga Terbaik:</strong></p>\r\n<p>Di&nbsp;<strong>Azfar Wisata</strong>&nbsp;kami berusaha sebaik mungkin untuk memberikan harga yang paling kompetitif untuk semua jenis akomodasi, dari penginapan sederhana hingga mewah serta berbagai kategori.</p>\r\n<p><strong>Pembayaran:</strong></p>\r\n<p>Harga yang terlampir di <strong>Azfar Wisata </strong>sewaktu - waktu dapat berubah, tergantung yang ditetapkan oleh pihak hotel dan villa itu sendiri.</p>\r\n<p>Nominal down payment yang harus dibayarkan untuk satu pemesanan hotel atau villa adalah 50% dari total biaya.</p>\r\n<p>Repayment selambat-lambatnya dilakukan H-3 kegiatan.</p>\r\n<p>Reschedule dapat diproses, dan kami terima paling lambat H-45 kegiatan.</p>\r\n<p><strong>Pembatalan Pemesanan:</strong></p>\r\n<p>No refund, dengan alasan apa pun</p>\r\n<p><strong>Permintaan Khusus:</strong></p>\r\n<p>Jika Anda memiliki permintaan khusus, <strong>Azfar Wisata</strong> Kami akan menyampaikan atau kami akan mempertimbangkan permintaan yang wajar untuk penyedia layanan yang relevan. Namun, kami tidak dapat menjamin bahwa penyedia layanan akan memenuhi permintaan, karena layanan atau fasilitas yang bersangkutan mungkin tidak tersedia.</p>\r\n<p><strong>Azfar Wisata</strong>&nbsp;tidak bertanggung jawab atas kegagalan untuk memenuhi permintaan khusus ini, dan tidak diperbolehkan pembatalan apapun karena tidak terpenuhinya permintaan khusus ini.</p>\r\n<p><strong>Perubahan:</strong></p>\r\n<p>Kami berhak, atas kebijakan kami, untuk memodifikasi atau mengganti Syarat ini setiap saat. Jika revisi adalah material, kami akan mencoba untuk memberikan pemberitahuan minimal 30 hari sebelum istilah baru mengambil efek. Apa yang merupakan perubahan material akan ditentukan atas kebijakan kami.</p>\r\n<p><strong>Hubungi Kami:</strong></p>\r\n<p>Jika Anda memiliki pertanyaan tentang Ketentuan ini, silahkan Anda hubungi kami <a title=\"kontak\" href=\"../../kontak\">disini</a>.</p>'),
(3, 'policy', '<p>Privacy Policy</p>'),
(4, 'FAQS', 'test content faqs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `image` text NOT NULL,
  `password` varchar(300) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Syaiful', 'syaiful@gmail.com', '99dfbe358b56e31932656b0817c15b50.jpg', '$2y$10$T0301u20ncTgw8kSlRaCqeB9hwH2CvQtJhIvjU4jD/JugbBEmuHLG', 1, 1, '2020-09-27'),
(74, 'iqbal', 'iqbal@gmail.com', '994f4b082f87fdc822b4f0ecef4edd8a.png', '$2y$10$tJ9Y4UVhWeVcGky25/BYuOkzoeGJ5WeVKMNXI03V/lmcmzxbItTZu', 2, 1, '2020-09-27'),
(79, 'thalita', 'thalitarahma@gmail.com', 'a5ae550c68e210376d8cbe6cfd02d9ee.png', '$2y$10$YrFktGVfQ/KRsrJV1lqr/.4CgSxXpZ/HnjhJmEEAalJ/61mAED1me', 2, 1, '2020-09-26'),
(80, 'admin', 'admin@admin.com', 'default.png', '$2y$10$TGrynAG7hEOu0u0XemUYteqmNHrwDFP5HPr/BWLcdb0OakdrnBkP.', 2, 1, '2020-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_akses`
--

CREATE TABLE `user_akses` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `akses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_akses`
--

INSERT INTO `user_akses` (`id`, `role_id`, `akses_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_rating`
--
ALTER TABLE `item_rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `konten_video`
--
ALTER TABLE `konten_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`section_id`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_kursus`
--
ALTER TABLE `section_kursus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`kursus_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_akses`
--
ALTER TABLE `user_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `item_rating`
--
ALTER TABLE `item_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `konten_video`
--
ALTER TABLE `konten_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `section_kursus`
--
ALTER TABLE `section_kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `sub_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=527;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `user_akses`
--
ALTER TABLE `user_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konten_video`
--
ALTER TABLE `konten_video`
  ADD CONSTRAINT `konten_video_ibfk_1` FOREIGN KEY (`section_id`) REFERENCES `section_kursus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `section_kursus`
--
ALTER TABLE `section_kursus`
  ADD CONSTRAINT `section_kursus_ibfk_1` FOREIGN KEY (`kursus_id`) REFERENCES `kursus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
