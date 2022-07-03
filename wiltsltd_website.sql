-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 07:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiltsltd_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `about_banner_img` varchar(255) DEFAULT NULL,
  `about_heding` varchar(255) DEFAULT NULL,
  `about_us_title` varchar(500) DEFAULT NULL,
  `about_contant` varchar(1024) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `phone_icon` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `mission_heading` varchar(255) DEFAULT NULL,
  `mission_icon` varchar(255) DEFAULT NULL,
  `icon_contant` varchar(255) DEFAULT NULL,
  `mileston_banner_img` varchar(255) DEFAULT NULL,
  `mileston_heading` varchar(255) DEFAULT NULL,
  `year_icon` varchar(255) DEFAULT NULL,
  `year_title` varchar(255) DEFAULT NULL,
  `year_contant` varchar(255) DEFAULT NULL,
  `team_banner_img` varchar(255) DEFAULT NULL,
  `team_heading` varchar(255) DEFAULT NULL,
  `team_member_img` varchar(255) DEFAULT NULL,
  `member_name` varchar(255) DEFAULT NULL,
  `member_surname` varchar(255) DEFAULT NULL,
  `organogram_banner_img` varchar(255) DEFAULT NULL,
  `organogram_heading` varchar(255) DEFAULT NULL,
  `member_plan_img` varchar(255) DEFAULT NULL,
  `coverage_banner_img` varchar(255) DEFAULT NULL,
  `coverage_heading` varchar(255) DEFAULT NULL,
  `map_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `type`, `about_banner_img`, `about_heding`, `about_us_title`, `about_contant`, `video_link`, `phone_icon`, `phone_no`, `mission_heading`, `mission_icon`, `icon_contant`, `mileston_banner_img`, `mileston_heading`, `year_icon`, `year_title`, `year_contant`, `team_banner_img`, `team_heading`, `team_member_img`, `member_name`, `member_surname`, `organogram_banner_img`, `organogram_heading`, `member_plan_img`, `coverage_banner_img`, `coverage_heading`, `map_img`) VALUES
(1, 'about_banner', 'Contact-us.jpg', 'Bismillah', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'about_banner', 'our-company3.jpg', 'About Us', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'about_us', NULL, NULL, 'ABOUT US', 'Wilts Marketing Company Limited was established in the year of 2000 to provide the most competent and market demanding products for animal health care to all farmers, fisheries, hatcheries and feed mills all over the country. We are marketing world-class veterinary feed additives, feed supplements, vaccines and drugs from some of the reputed companies of the world.\r\n\r\nWe have prepared our goal to establish life communication between humans and animals by providing sanctioned health care and assuring intent services for the better promotion of livestock, poultry, companion animals, zoo animals and fisheries as well as uprising the economy of the country.\r\nA strong technical and marketing team leads by young, energetic, dedicated & experienced professionals are always available to provide efficient and cost-effective services and technical support within 4 hours (maximum) at any corner of Bangladesh.', 'https://www.youtube.com/embed/7p2Ex19HaKg', 'fas fa-phone-alt', '01755463304', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'mission', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Mission', 'fas fa-allergies', 'To be entrepreneurial \r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'mission', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Mission 2', 'fas fa-users', '\r\nTo develop leaders across the organization\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'milestone_banner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Azhari36.jpg', 'hello', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'milestone_banner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'our-company4.jpg', 'Our Milestone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'milestone_calender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fas fa-calendar-check', 'Year 2000', 'Introduction of “Yeast culture� as probiotic feed additive to the Bangladesh market.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'milestone_calender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fas fa-calendar-check', ' Year 2001', 'Introduction of growth promoter antibiotic feed premix “Vigirniamycin” to the Bangladesh market.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'team_banner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'our-company1.jpg', 'Our Team', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'team_member', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Azhari9.jpg', 'Mizanur Rahman', 'Chairman', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'team_member', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pexels-photo.jpg', 'Md. Razle R. Chowdhury ', 'Executive Director', NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'organogram_banner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aminoacids-extra-wiltsltd-600x6007.jpg', 'organogram', NULL, NULL, NULL, NULL),
(23, 'organogram_banner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'our-company.jpg', 'Team Organogram', NULL, NULL, NULL, NULL),
(25, 'plan_chart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Azhari28.jpg', NULL, NULL, NULL),
(28, 'plan_chart', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Team-Organogram-1200x584.png', NULL, NULL, NULL),
(29, 'coverage_banner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'our-company2.jpg', 'Our Coverage', NULL),
(31, 'coverage_map', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'chicken.jpg'),
(32, 'coverage_map', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Bangladesh-Coverage-Area.png'),
(35, 'mission', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Mission', 'fas fa-cogs', 'To be customer-focused through technology, innovation and operational efficiency\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'mission', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Mission', 'fas fa-hand-holding', 'To emphasize sustainable solutions\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'mission', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ur Mission', 'fas fa-heart-broken', 'To operate to the highest environmental, health, safety and quality standards\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'mission', NULL, NULL, NULL, NULL, NULL, NULL, NULL, ' Our Mission & Vision', 'fas fa-globe-americas', 'To be a socially responsible organization\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'milestone_calender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fas fa-calendar-check', 'Year 2003', 'Introducing “Apramycin” for the first time ever in Bangladesh for the Animal Health Market.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'milestone_calender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fas fa-calendar-check', 'Year 2006', ' Introducing “Vitaject ES in injection ” for the first time ever in Bangladesh for the Animal Health Market.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'milestone_calender', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'fas fa-calendar-check', ' Year 2007', ' Introducing “Closantel 10%” for the first time ever in Bangladesh for the Animal Health Market.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'team_member', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pexels-photo-1516680.jpeg', 'Ainuan Nishat   Tazwar ', 'Executive Director', NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'team_member', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'pexels-photo-1680175.jpeg', 'Shamsul Huda', ' Managing Director', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `contact_heading` varchar(100) DEFAULT NULL,
  `contact_banner` varchar(100) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `icon_heading` varchar(255) DEFAULT NULL,
  `icon_contant` varchar(255) DEFAULT NULL,
  `sub_contant` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `type`, `contact_heading`, `contact_banner`, `icon`, `icon_heading`, `icon_contant`, `sub_contant`) VALUES
(1, 'contact_banner', 'Contact Banner', 'Celebrating-21-years-1-400x4091.png', NULL, NULL, NULL, NULL),
(2, 'contact_banner', 'Contact Us', 'Contact-us1.jpg', NULL, NULL, NULL, NULL),
(4, 'contact', NULL, NULL, 'fas fa-clock', 'Opening Hours ', '9:30 AM – 8:00 PM', '(Saturday – Thursday)'),
(5, 'contact', NULL, NULL, 'fas fa-briefcase', 'Our Main Office', 'Rahmat Tower (8th Floor), 19, Dilkusha C/A,', 'Dhaka-1000, Bangladesh'),
(7, 'contact', NULL, NULL, 'fas fa-headset', 'Contact Us', 'Mobile : (+88)01755463304', 'Email : mzrahman075@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `corporate_buyers`
--

CREATE TABLE `corporate_buyers` (
  `id` int(100) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `corporate_heading` varchar(255) DEFAULT NULL,
  `corporate_banner` varchar(255) DEFAULT NULL,
  `corporate_img` varchar(255) DEFAULT NULL,
  `corporate_contant` varchar(512) DEFAULT NULL,
  `button` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `corporate_buyers`
--

INSERT INTO `corporate_buyers` (`id`, `type`, `corporate_heading`, `corporate_banner`, `corporate_img`, `corporate_contant`, `button`, `button_link`) VALUES
(1, 'corporate_banner', 'Corporate Banner', 'Nourish-Poultry-and-Hatcheery-wiltsltd.jpg', NULL, NULL, NULL, NULL),
(2, 'corporate_banner', 'Corporate Buyers', 'corporate-buyers.jpg', NULL, NULL, NULL, NULL),
(4, 'corporate', NULL, NULL, 'Nourish-Poultry-and-Hatcheery-wiltsltd1.jpg', 'In 1999, the founders of Khaled Group of Companies have introduced Nourish Poultry and Hatchery Ltd. with a dream for a society free from undernourished & underprivileged people. The major products of Nourish Poultry and Hatchery Ltd were Day Old Chicks (DOC) and poultry feeds. The initial motto of Nourish was “We Breed, We Feed, We Nourish”, which was focusing on the nourishment of individuals, households & society.', 'View More', 'Button Link'),
(5, 'corporate', NULL, NULL, 'CP-GROUP-wiltsltd1.jpg', 'C.P. Bangladesh Co. Ltd. is an agro-industrial and food conglomerate, which is operating since 1998. C.P. Bangladesh Co. Ltd. Started off with a small feed mill locating Savar and has expanded extensively across from feed to the food business.', 'View More', 'Button Link'),
(7, 'corporate', NULL, NULL, 'Aftab-Group-wiltsltd1.jpg', 'AFTAB GROUP is one of the leading enterprises with businesses in the banking sector, textile, food, readymade garments, agriculture, compressed natural gas, industrial pump manufacturing so on and Real Estate in New York USA. Aftab Group has well-established enterprises in these fields and most of its projects have been success stories.', 'View More', ' Button Link'),
(8, 'corporate', NULL, NULL, 'Lion-Feeds-Limited-wiltsltd.jpg', 'Established in 2002, Lion Feeds Limited has made a name for itself in the list of top suppliers in Bangladesh. The supplier company is located in Dhaka. Lion Feeds Limited offers the best quality product.', 'View More', 'Button Link'),
(9, 'corporate', NULL, NULL, 'Diamond-Egg-and-Chicks-Ltd-wiltsltd.jpg', 'Diamond Egg Ltd is the largest producer and marketer of shell eggs in Bangladesh. In fiscal 2014, we sold approximately 320.00 Million pcs shell eggs, which represented approximately 13% of domestic shell egg consumption', 'View More', 'Button Link');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `footer_img` varchar(255) DEFAULT NULL,
  `left_contant` varchar(255) DEFAULT NULL,
  `left_about_us` varchar(255) DEFAULT NULL,
  `fb_icon` varchar(255) DEFAULT NULL,
  `fb_icon_link` varchar(255) DEFAULT NULL,
  `twit_icon` varchar(255) DEFAULT NULL,
  `twit_icon_link` varchar(255) DEFAULT NULL,
  `insta_icon` varchar(255) DEFAULT NULL,
  `insta_icon_link` varchar(255) DEFAULT NULL,
  `ytube_icon` varchar(255) DEFAULT NULL,
  `ytube_icon_link` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `about_us` varchar(255) DEFAULT NULL,
  `team_organogram` varchar(255) DEFAULT NULL,
  `our_team` varchar(255) DEFAULT NULL,
  `our_milestone` varchar(255) DEFAULT NULL,
  `our_coverage` varchar(255) DEFAULT NULL,
  `contact_us` varchar(255) DEFAULT NULL,
  `right_contant` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `type`, `footer_img`, `left_contant`, `left_about_us`, `fb_icon`, `fb_icon_link`, `twit_icon`, `twit_icon_link`, `insta_icon`, `insta_icon_link`, `ytube_icon`, `ytube_icon_link`, `company`, `about_us`, `team_organogram`, `our_team`, `our_milestone`, `our_coverage`, `contact_us`, `right_contant`, `phone_no`, `mobile_no`, `email`) VALUES
(1, '', 'Azhari.jpg', 'sxc', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'hello', 'sc', 'hello', 'hello', 'szdgzsg@gmail.com'),
(2, '', 'download_(2)1.jpg', 'xzC', 'zxvz', 'xvxz', 'zcvZ', 'zxvcxz', 'xzvcxz', 'zxvcz', 'zxvc', 'xzvc', 'xzvc', 'xcvxz', 'xzcv', 'xzvc', 'xzcv', 'zxcv', 'zxcv', 'zxvc', 'zC', 'vcxz', 'zxcv', 'mizan@gmail.com'),
(4, '', 'Azhari4.jpg', 'fszdgvdx', 'xbc', 'xc', 'xcv', 'xcv', 'xczv', 'xcv', 'xcv', 'xcv', 'xzvc', 'zxvcx', 'xvcxz', 'zxvx', 'xvcxz', 'xvcxz', 'xvc', 'xzvxz', 'xvcx', 'xzvcx', 'xvcxz', 'xvc'),
(5, '', 'Azhari2.jpg', 'zvczdx', 'xvcxzvc', 'xvcxz', 'xzvx', 'xzcv', 'xcvxz', 'xzvc', 'xxcv', 'xzv', 'xvc', 'xzvxz', 'xvxz', 'xvc', 'xzvxz', 'xzvc', 'xzvc', 'xzvcx', 'xzvcx', 'xzcv', 'xvc', 'xzvc'),
(6, 'about', 'WIlts-Ltd-Logo-70px1.png', 'Wilts Marketing Company Limited was established in the year of 5000. ', 'Know More About Us', 'fab fa-facebook-f', 'cjnboidc', 'fab fa-twitter', 'zfdv', 'fab fa-instagram', 'aZfdv', 'fab fa-youtube', 'xzghfbn', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'company', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'COMPANY', '>About Us', '>Team Organogram ', '>Our Team ', '>Our Milestone ', '>Our Coverage ', NULL, NULL, NULL, NULL, NULL),
(8, 'contact', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CONTACT US', 'Rahmat Tower (8th Floor), 19, Dilkusha C/A, Dhaka-1000, Bangladesh', '02 47117025', '+8801755463304', ' mzrahman075@gmail.com ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `gallery_heading` varchar(100) DEFAULT NULL,
  `gallery_title` varchar(255) DEFAULT NULL,
  `image_heading` varchar(100) DEFAULT NULL,
  `gallery_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `type`, `gallery_heading`, `gallery_title`, `image_heading`, `gallery_img`) VALUES
(4, 'gallery_banner', 'Gallery Banner', 'Azhari14.jpg', NULL, NULL),
(5, 'gallery_banner', 'Gallery Banner 2', 'Azhari213.jpg', NULL, NULL),
(6, 'gallery_banner', 'Gallery', 'Gallery.jpg', NULL, NULL),
(9, 'gallery', NULL, NULL, 'Gallery', 'Azhari214.jpg'),
(10, 'gallery', NULL, NULL, 'Gallery 2', 'Azhari323.jpg'),
(11, 'gallery', NULL, NULL, 'Gallery 3', 'Azhari215.jpg'),
(13, 'gallery', NULL, NULL, 'Gallery ', 'breed-consulting1.png'),
(14, 'gallery', NULL, NULL, 'At a Glance Our Gallery', 'chicken1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `slide_img` varchar(255) DEFAULT NULL,
  `slide_heading_title` varchar(255) DEFAULT NULL,
  `slide_title` varchar(255) DEFAULT NULL,
  `celebrating_img` varchar(255) DEFAULT NULL,
  `celebrating_title` varchar(255) DEFAULT NULL,
  `celebrating_paragraph` varchar(1024) DEFAULT NULL,
  `celebrating_button` varchar(255) DEFAULT NULL,
  `celebrating_button_link` varchar(255) DEFAULT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `product_img` varchar(255) DEFAULT NULL,
  `product_img_title` varchar(255) DEFAULT NULL,
  `capabilities_title` varchar(255) DEFAULT NULL,
  `capabilities_icon` varchar(255) DEFAULT NULL,
  `capabilities_icon_paragraph` varchar(255) DEFAULT NULL,
  `current_title` varchar(255) DEFAULT NULL,
  `current_img` varchar(255) DEFAULT NULL,
  `current_img_paragraph` varchar(255) DEFAULT NULL,
  `partner_title` varchar(255) DEFAULT NULL,
  `partner_slide_img` varchar(255) DEFAULT NULL,
  `banner_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `type`, `slide_img`, `slide_heading_title`, `slide_title`, `celebrating_img`, `celebrating_title`, `celebrating_paragraph`, `celebrating_button`, `celebrating_button_link`, `product_title`, `product_img`, `product_img_title`, `capabilities_title`, `capabilities_icon`, `capabilities_icon_paragraph`, `current_title`, `current_img`, `current_img_paragraph`, `partner_title`, `partner_slide_img`, `banner_img`) VALUES
(9, 'celebrate', '', '', '', 'Azhari7.jpg', 'Celebrate Title', 'Celebrate contant', 'Celebrate Button', 'Celebrate Button link', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'celebrate', NULL, NULL, NULL, 'Celebrating-21-years-1-400x4092.png', 'WELCOME TO WILTS MARKETING CO. LTD.', 'Wilts Marketing Company Limited was established in the year of 2000 to provide the most competent and market demanding products for animal health care to all farmers, Wilts Marketing Company Limited was established in the year of 2000 to provide the most competent and market demanding products for animal health care to all farmers, fisheries, hatcheries and feed mills all over the country. We are marketing world-class veterinary feed additives, feed supplements, vaccines and drugs from some of the reputed companies of the world. We have prepared our goal to establish life… ', 'Know more About us', 'http://localhost/wiltsltd_dynamin_website/public/Fontend/home', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'slider', 'Cow1.jpg', 'From Start To Finish, We Make Your Animal Health & Cow', 'Wellness Our Top Priorities and health', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'production', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Production Line', 'Fish-wiltsltd1.png', 'Fish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'production', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Alhamdulillah', 'Antibiotic-wiltsltd5.png', 'Antibiotic', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'capabilities', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hello Capabil', 'fas fa-allergies', 'Product Innovation at the Core of our Business for Over a Decade\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'production', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test', 'Dairy-wiltsltd1.png', 'Dairy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'production', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'zfksh', 'Disinfectant-wiltsltd1.png', 'Disinfectant', NULL, NULL, NULL, 'heading hello  ', 'Disinfectant-wiltsltd.png', 'hello contant test', NULL, NULL, NULL),
(34, 'current_ffer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'heading hello', 'veterinary-pharmaceuticals.png', 'More than 8 veterinary pharmaceuticals', NULL, NULL, NULL),
(35, 'current_ffer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'test5', 'technical-support.png', 'Continuous technical support for the individual customer', NULL, NULL, NULL),
(39, 'banner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Azhari26.jpg'),
(41, 'banner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Home-page-banner-12.png'),
(43, 'capabilities', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Capabilities Title', 'fas fa-hand-holding', 'Engaged and Growing Customer Base Driven by Application Support\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'capabilities', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Capabilities 2', 'fas fa-cogs', 'Experience and Technical Prowess of Promoters and Senior Management\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'partner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Partner 2', 'Da-One-Chemical-co-Ltd-Seoul-Korea.png', NULL),
(46, 'partner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Partner 3', 'Partner-page-dongbangah.png', NULL),
(47, 'partner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Partner 4', 'Special-T-Products-Ltd-Liverpool-UK.png', NULL),
(48, 'partner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Partner5', 'nutrifarm-1.png', NULL),
(49, 'partner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Partner 6', 'Vamso-Biotec-Pvt-Ltd-India.png', NULL),
(51, 'slider', 'chicken3.jpg', ' We Are Offering World-class Veterinary Feed Additives,', 'Feed Supplements, Vaccines And Drugs.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'production', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Production', 'Feed-Premix-wiltsltd2.png', 'Feed Premix', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'production', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Production Line', 'Poultry-wiltsltd.png', 'Poultry', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'capabilities', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'fas fa-heart-broken', 'Flexible Manufacturing Setup\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'capabilities', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'fas fa-users', 'Focus on Green and Sustainable Products\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'capabilities', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Capabilities & Strengths', 'fas fa-globe-americas', 'Strong Global Network – Present Across 17 Countries\r\n\r\n', NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'current_ffer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Current Offer', 'Feed-additives1.png', 'Feed additives for feed-miller', NULL, NULL, NULL),
(60, 'current_ffer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Current Offer', 'breed-consulting2.png', 'Provide breeding consulting service in Bangladesh', NULL, NULL, NULL),
(61, 'partner', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Our Partners', 'Brookside-Agra-USA.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `menuName` varchar(100) DEFAULT NULL,
  `parentId` varchar(100) DEFAULT NULL,
  `active` varchar(100) NOT NULL,
  `logo` varchar(512) NOT NULL,
  `page_link` varchar(512) NOT NULL,
  `btn_txt` varchar(40) NOT NULL,
  `btn_icon` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menuName`, `parentId`, `active`, `logo`, `page_link`, `btn_txt`, `btn_icon`) VALUES
(1, 'Home', '', '', 'logo.png', 'public/Fontend/home', '', ''),
(2, 'Company', '', '', '', 'public/Fontend/our_milestone', '', ''),
(51, 'About Us', '2', '', '', 'about_us', '', ''),
(52, 'Our mileston', '2', '', '', 'our_milestone', '', ''),
(53, 'Our Team', '2', '', '', 'our_team', '', ''),
(54, 'Team Organogram', '2', '', '', 'team_organogram', '', ''),
(55, 'Our Coverage', '2', '', '', 'our_coverage', '', ''),
(56, 'Produtcs', ' ', '', '', '', '', ''),
(57, 'Poultry', '56', '', '', 'poultry', '', ''),
(58, 'Dairy', '56', '', '', 'dairy', '', ''),
(59, 'Our Partners', ' ', '', '', 'public/Fontend/our_partners', '', ''),
(60, 'Corporate', ' ', '', '', 'public/Fontend/corporate_buyers', '', ''),
(61, 'Gallery', ' ', '', '', 'public/Fontend/gallery', '', ''),
(62, 'Contact Us', ' ', '', '', 'public/Fontend/contact', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `our_partners`
--

CREATE TABLE `our_partners` (
  `id` int(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `partner_heading` varchar(255) DEFAULT NULL,
  `partner_banner` varchar(255) DEFAULT NULL,
  `contant_title` varchar(255) DEFAULT NULL,
  `contant` varchar(512) DEFAULT NULL,
  `contant_img` varchar(255) DEFAULT NULL,
  `button` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_partners`
--

INSERT INTO `our_partners` (`id`, `type`, `partner_heading`, `partner_banner`, `contant_title`, `contant`, `contant_img`, `button`, `button_link`) VALUES
(1, 'partner_banner', 'Partners Banner', 'man.jpg', NULL, NULL, NULL, NULL, NULL),
(2, 'partner_banner', 'Our Partners', 'Partners-Banner.jpg', NULL, NULL, NULL, NULL, NULL),
(4, 'contant', NULL, NULL, 'DONG BANG CO. LTD', 'We sincerely thank all of our customers who have always supported and visited Dongbang with deep interest. As a veterinary medicine manufacturing company, since its establishment in 1977, we have continuously devoted ourselves to the production and development of excellent veterinary medicines through accumulated technology and experience with an entrepreneurial spirit that prioritizes the dignity of human life.', 'Partner-page-dongbangah1.png', 'know more', 'Button Link'),
(5, 'contant', NULL, NULL, 'Example of vertical form using', 'Example of vertical form using', 'Azhari410.jpg', 'Button', 'Button Link');

-- --------------------------------------------------------

--
-- Table structure for table `produtcs`
--

CREATE TABLE `produtcs` (
  `id` int(100) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `poultry_heading` varchar(255) DEFAULT NULL,
  `poultry_img` varchar(255) DEFAULT NULL,
  `anti_heading` varchar(255) DEFAULT NULL,
  `anti_img` varchar(255) DEFAULT NULL,
  `anti_img_title` varchar(255) NOT NULL,
  `anti_button` varchar(255) NOT NULL,
  `anti_button_link` varchar(255) NOT NULL,
  `pro_heading` varchar(255) DEFAULT NULL,
  `pro_img` varchar(255) DEFAULT NULL,
  `pro_img_title` varchar(255) NOT NULL,
  `pro_button` varchar(255) NOT NULL,
  `pro_button_link` varchar(255) NOT NULL,
  `water_heading` varchar(255) DEFAULT NULL,
  `water_img` varchar(255) DEFAULT NULL,
  `water_img_title` varchar(100) NOT NULL,
  `water_img_button` varchar(255) NOT NULL,
  `water_button_link` varchar(255) NOT NULL,
  `nsaid_heading` varchar(255) DEFAULT NULL,
  `nsaid_img` varchar(255) DEFAULT NULL,
  `nsaid_img_title` varchar(100) NOT NULL,
  `nsaid_button` varchar(255) NOT NULL,
  `nsaid_button_link` varchar(255) NOT NULL,
  `premix_heading` varchar(255) DEFAULT NULL,
  `premix_img` varchar(255) DEFAULT NULL,
  `premix_img_title` varchar(255) NOT NULL,
  `premix_button` varchar(255) NOT NULL,
  `premix_button_link` varchar(255) NOT NULL,
  `disi_heading` varchar(255) DEFAULT NULL,
  `disi_img` varchar(255) DEFAULT NULL,
  `disi_img_title` varchar(255) NOT NULL,
  `disi_button` varchar(255) NOT NULL,
  `disi_button_link` varchar(255) NOT NULL,
  `dairy_heading` varchar(255) NOT NULL,
  `dairy_img` varchar(255) NOT NULL,
  `antiInjec_heading` varchar(255) DEFAULT NULL,
  `antiInjec_img` varchar(255) DEFAULT NULL,
  `antiInjec_img_title` varchar(255) NOT NULL,
  `antiInjec_button` varchar(255) NOT NULL,
  `antiInjec_button_link` varchar(255) NOT NULL,
  `hormone_heading` varchar(255) DEFAULT NULL,
  `hormone_img` varchar(255) DEFAULT NULL,
  `hormone_img_title` varchar(255) NOT NULL,
  `hormone_button` varchar(255) NOT NULL,
  `hormone_button_link` varchar(255) NOT NULL,
  `nsaidInjec_heading` varchar(255) NOT NULL,
  `nsaidInjec_img` varchar(255) DEFAULT NULL,
  `nsaidInjec_img_title` varchar(255) NOT NULL,
  `nsaidInjec_button` varchar(255) NOT NULL,
  `nsaidInjec_button_link` varchar(255) NOT NULL,
  `vitamin_heading` varchar(255) DEFAULT NULL,
  `vitamin_img` varchar(255) DEFAULT NULL,
  `vitamin_img_title` varchar(255) NOT NULL,
  `vitamin_button` varchar(255) NOT NULL,
  `vitamin_button_link` varchar(255) NOT NULL,
  `feedpre_heading` varchar(255) DEFAULT NULL,
  `feedpre_img` varchar(255) DEFAULT NULL,
  `feedpre_img_title` varchar(255) NOT NULL,
  `feedpre_button` varchar(255) NOT NULL,
  `feedpre_button_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produtcs`
--

INSERT INTO `produtcs` (`id`, `type`, `poultry_heading`, `poultry_img`, `anti_heading`, `anti_img`, `anti_img_title`, `anti_button`, `anti_button_link`, `pro_heading`, `pro_img`, `pro_img_title`, `pro_button`, `pro_button_link`, `water_heading`, `water_img`, `water_img_title`, `water_img_button`, `water_button_link`, `nsaid_heading`, `nsaid_img`, `nsaid_img_title`, `nsaid_button`, `nsaid_button_link`, `premix_heading`, `premix_img`, `premix_img_title`, `premix_button`, `premix_button_link`, `disi_heading`, `disi_img`, `disi_img_title`, `disi_button`, `disi_button_link`, `dairy_heading`, `dairy_img`, `antiInjec_heading`, `antiInjec_img`, `antiInjec_img_title`, `antiInjec_button`, `antiInjec_button_link`, `hormone_heading`, `hormone_img`, `hormone_img_title`, `hormone_button`, `hormone_button_link`, `nsaidInjec_heading`, `nsaidInjec_img`, `nsaidInjec_img_title`, `nsaidInjec_button`, `nsaidInjec_button_link`, `vitamin_heading`, `vitamin_img`, `vitamin_img_title`, `vitamin_button`, `vitamin_button_link`, `feedpre_heading`, `feedpre_img`, `feedpre_img_title`, `feedpre_button`, `feedpre_button_link`) VALUES
(1, 'poultry_banner', 'Bismillah', 'Azhari12.jpg', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(3, 'antibiotic', NULL, NULL, 'hello ', 'daone-tilmiro-solution1.jpg', 'DaOne Tilmiro Solution', 'Click – Brochure', 'button link', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(4, 'antibiotic', NULL, NULL, 'Antibiotic', 'CIPROXACIN-400x4001.jpg', 'Ciproxacin', 'Click – Brochure', 'dsg', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(6, 'probiotic', NULL, NULL, NULL, NULL, '', '', '', 'Probitic', 'fortis-inj-wiltsltd-400x4001.jpg', 'title', 'button', 'link', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(8, 'water', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Heading title', 'wiltz-ese-wiltsltd-600x600.jpg', 'Wiltz E+ Se', 'Click – Brochure', 'link', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(9, 'water', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'bismillah', 'ad3ec-forte-02-wiltsltd-600x600.jpg', 'AD3E+ C Forte', 'Click – Brochure', 'szd', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(11, 'nsaid', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'nsaid', 'guardizen-m-wiltsltd-1-400x400.jpg', 'image title', 'button', 'link ', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(12, 'nsaid', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'NSAID Solution', 'daone-pb-cough-wiltsltd-600x6001.jpg', 'DaOne PB Cough', 'Click – Brochure', 'zcz', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(14, 'premix', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Feed Premix', 'vitamin-gold-l-wiltsltd-600x600.jpg', 'Vitamin Gold-L', 'Click – Brochure', 'utton Link', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(15, 'premix', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Hello ', 'vitamin-gold-b-wiltsltd-600x600.jpg', 'Vitamin Gold-B', 'Click – Brochure', 'bbl', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(17, 'disi', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Disinfectant', 'daone-pb-cough-wiltsltd-600x600.jpg', 'Image Title', 'Button', 'Button Link', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(18, 'disi', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Disinfectant', 'quincide-powder-wiltsltd-600x600.jpg', 'Quincide Powder', 'Click – Brochure', 'ZSDAC', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(20, 'dairy_banner', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Dairy', 'Dairy-wiltsltd2.png', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(21, 'dairy_banner', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Our Dairy', 'Products-wiltsltd-01-11.jpg', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(24, 'antiInjec', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', 'Antibiotic Injection', 'penstrep-20-20-wiltsltd-400x400.jpg', 'Penstrep 400LA Inj.', 'Click – Brochure', 'button link', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(26, 'hormoniotic', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', 'Hormone Injection', 'gonadon-inj-wiltsltd-400x4003.jpg', 'Gonadon Inj.', 'Click – Brochure', 'Button Link', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(27, 'hormoniotic', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', 'Hormone Injection', 'dinorin-inj-wiltsltd-400x400.jpg', 'Dinorin Inj.', 'Click – Brochure', 'szdf', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(29, 'nsaidInjection', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'NSAID Injection', 'fortis-inj-wiltsltd-400x4002.jpg', 'Forits Inj.', 'Click – Brochure', 'Button Link', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(30, 'nsaidInjection', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'NSAID Injection', 'zinc-forte-wiltsltd-600x6001.jpg', 'Zinc Forte', 'Click – Brochure', 'zsdf', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(32, 'vitamin', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', 'vitamin', 'guardizen-m-wiltsltd-1-400x4001.jpg', 'Guardizen- M', 'Click – Brochure', 'Button Link', NULL, NULL, '', '', ''),
(33, 'vitamin', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', 'Prebiotic/Probiotic/Vitamin-Minerals', 'vidfokal-wiltsltd-400x400.jpg', 'Vidfokal Liquid', 'Click – Brochure', 'sdaf', NULL, NULL, '', '', ''),
(36, 'feedpre', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', 'Feed Premix', 'vital-tonic-wiltsltd-400x400.jpg', 'Vital Tonic', 'Click – Brochure', 'zsd'),
(38, 'probiotic', NULL, NULL, NULL, NULL, '', '', '', 'Probiotic 2', 'coxzuril-wiltsltd-400x4004.jpg', 'Image Title', 'Button', 'Button Link', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(39, 'probiotic', NULL, NULL, NULL, NULL, '', '', '', 'Probiotic', 'guardizen-m-wiltsltd-1-400x4002.jpg', 'Guardizen-M', 'Click – Brochure', 'zSC', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(40, 'water', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Water Solution', 'aminoacids-extra-wiltsltd-600x6009.jpg', 'Amino Acids Extra', 'Click – Brochure', 'Button Link', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(41, 'poultry_banner', 'Poultry', 'Products-wiltsltd-01-1.jpg', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(42, 'antibiotic', NULL, NULL, 'Antibiotic', 'coxzuril-wiltsltd-400x4001.jpg', 'Coxzuril', 'Click – Brochure', 'zfv', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(43, 'water', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Water Solution', 'zinc-forte-wiltsltd-600x600.jpg', 'Zinc Forte', 'Click – Brochure', 'zfd', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(44, 'water', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Water Solution', 'iron-ve-b-wiltsltd-600x6001.jpg', 'Iron Vet- B', 'Click – Brochure', 'xgfhcg', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(45, 'premix', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Feed Premix', 'vitamin-gold-f-wiltsltd-600x600.jpg', 'Vitamin Gold-F', 'Click – Brochure', 'rfzgfd', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(46, 'premix', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', 'Feed Premix', 'vitamin-gold-gs-wiltsltd-600x600.jpg', 'Vitamin Gold-GS', 'Click – Brochure', 'ghn', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', ''),
(48, 'vitamin', NULL, NULL, NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', '', NULL, NULL, '', '', '', NULL, NULL, '', '', '', '', NULL, '', '', '', 'Prebiotic/Probiotic/Vitamin-Minerals', 'uterotone-wiltsltd-400x400.jpg', 'Urerotone', 'Click – Brochure', 'DSff', NULL, NULL, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corporate_buyers`
--
ALTER TABLE `corporate_buyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_partners`
--
ALTER TABLE `our_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtcs`
--
ALTER TABLE `produtcs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `corporate_buyers`
--
ALTER TABLE `corporate_buyers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `our_partners`
--
ALTER TABLE `our_partners`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produtcs`
--
ALTER TABLE `produtcs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
