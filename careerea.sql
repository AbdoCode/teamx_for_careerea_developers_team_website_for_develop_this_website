-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 04:19 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careerea`
--
CREATE DATABASE IF NOT EXISTS `careerea` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `careerea`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `admin_ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(30) NOT NULL,
  `profile_photo` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `admins`:
--

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_ID`, `username`, `password`, `profile_photo`) VALUES
(1, 'abdo', 'y108', 'admin_control/profile_photos/osta_abdo.png'),
(2, 'maher', '183', 'admin_control/profile_photos/maher_me4_mohem.png'),
(3, 'saad', '1518', 'admin_control/profile_photos/saad_kabbo.png'),
(4, 'kamilia', '1012', 'admin_control/profile_photos/kamilia_gang.png'),
(5, 'mahmoud', '1001', 'admin_control/profile_photos/el7ag_mahmoud.png'),
(6, 'ibrahim', '1547', 'admin_control/profile_photos/toma_henedy.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_activity`
--

CREATE TABLE IF NOT EXISTS `admin_activity` (
  `admin_activity_ID` int(11) NOT NULL,
  `last_online` varchar(30) NOT NULL,
  `add_action` int(11) NOT NULL,
  `edit_action` int(11) NOT NULL,
  `delete_action` int(11) NOT NULL,
  `admin_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `admin_activity`:
--   `admin_ID`
--       `admins` -> `admin_ID`
--

--
-- Dumping data for table `admin_activity`
--

INSERT INTO `admin_activity` (`admin_activity_ID`, `last_online`, `add_action`, `edit_action`, `delete_action`, `admin_ID`) VALUES
(1, '20/6/2017', 1, 0, 0, 1),
(2, '18/6/2017', 0, 1, 0, 1),
(3, '17/6/2017', 1, 0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `applicant_ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `location` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth_date` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_photo` varchar(250) NOT NULL,
  `CV` varchar(250) NOT NULL,
  `bio` varchar(1500) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `git` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `applicants`:
--

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`applicant_ID`, `name`, `phone`, `location`, `gender`, `birth_date`, `email`, `password`, `profile_photo`, `CV`, `bio`, `facebook`, `linkedin`, `git`) VALUES
(1, 'Mohamed Hassan', '010248926', 'cairo', 'male', '17/9/1992', 'moahmed.hassan@gmail.com', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 'applicants/profile_pics/010010248926_profile.jpg', 'applicants/cv/010010248926_cv.pdf', 'I am an experienced PHP Developer with 5+ years working on website development and online application such as payroll, inventory and billing system. I use framework on all of the development made and practice object oriented in it. I am proficient in using wordpress , cakephp , code igniter and laravel also the conversion of PSD to HTML for the template used in the site. I do ensure that the entire system requirement is meet during the development.', 'facebook.com/mohamed.hassan', 'linkedin/in//mohamed.hassan', 'github.com//mohamed.hassan'),
(2, 'abdo code', '0115246875', 'cairo', 'male', '19/19/1919', 'abdo.code@gmail.com', '1c6637a8f2e1f75e06ff9984894d6bd16a3a36a9', 'applicants/profile_pics/0115246875_profile.jpg', 'applicants/cv/0115246875_cv.pdf', 'An obsessed software developer with a demonstrated history of working in the Software Development industry. Skilled in making scalable projects with a quite rate of readable and optimized code', 'facebook.com/abdo.code1', 'linkedin/in/abdo.code', 'github.com/abdocode'),
(3, 'Ibrahim Toma', '012457558', 'Faioum', 'male', '15/7/1994', 'ibrahimtoma04@gmail.com\n', 'afc97ea131fd7e2695a98ef34013608f97f34e1d', 'applicants/profile_pics/012457558_profile.jpg', 'applicants/cv/012457558_cv.pdf', 'hi,i am a react native developer skilled in making native apps with high performance', 'facebook.com/ibrahim.toma', 'linkedin/in/ibrahim', 'github.com/ibrahim'),
(4, 'Mahmoud Ibrahim', '011548658', 'Sohag', 'male', '1/8/1994', 'mahmoud.ibrahim033@gmail.com', '43814346e21444aaf4f70841bf7ed5ae93f55a9d', 'applicants/profile_pics/011548658_profile.jpg', 'applicants/cv/011548658_cv.pdf', 'hi,i am a back-end developer skilled in making web apps with high quality', 'facebook.com/mahmoud.ibrahim', 'linkedin/in/mahmoud.ibrahim', 'github.com/mahmoud.ibrahim'),
(5, 'Mohamed Maher', '010106589', 'Mansora', 'male', '5/9/1995', 'mohamedmaher005@gmail.com', 'c5f2486dc8a9ff70c8047c5d500cf9530ba8c1d3', 'applicants/profile_pics/010106589_profile.jpg', 'applicants/cv/010106589_cv.pdf', 'hi,i am a full-stack  web developer skilled in making websites with high performance', 'facebook.com/mohamed.maher', 'linkedin/in/mohamed.maher', 'github.com/mohamed.maher'),
(6, 'Kamilia Mostafa', '010157869', 'Monufia', 'female', '23/7/1994', 'kamilia.mostafaa@gmail.com', 'cfa1150f1787186742a9a884b73a43d8cf219f9b', 'applicants/profile_pics/010157869_profile.jpg', 'applicants/cv/010157869_cv.pdf', 'hi,i am a graphic designer skilled in making logos and wireframes for both apps and websites with high quality', 'facebook.com/kamilia.mostafa', 'linkedin/in/kamilia.mostafa', 'github.com/kamilia.mostafa'),
(7, 'Saad Yehia', '010145869', 'Faioum', 'male', '15/3/1995', 'saadyehia22@gmail.com', 'af06318c33c8e41c70083ee23dbe19426f1f9c5b', 'applicants/profile_pics/010145869_profile.jpg', 'applicants/cv/010145869_cv.pdf', 'hi,i am a full-stack web developer skilled in making CMS and websites with high performance', 'facebook.com/saad.yehia', 'linkedin/in/saad.yehia', 'github.com/saad.yehia');

-- --------------------------------------------------------

--
-- Table structure for table `applicants_notifications`
--

CREATE TABLE IF NOT EXISTS `applicants_notifications` (
  `applicant_notification_ID` int(11) NOT NULL,
  `notification_content` varchar(600) NOT NULL,
  `content_link` varchar(300) NOT NULL,
  `notification_date` varchar(50) NOT NULL,
  `applicant_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `applicants_notifications`:
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--

--
-- Dumping data for table `applicants_notifications`
--

INSERT INTO `applicants_notifications` (`applicant_notification_ID`, `notification_content`, `content_link`, `notification_date`, `applicant_ID`) VALUES
(1, 'Your account has beed logged in from Cairo Egypt. Please, confirm that it was you', 'careerea.com/settings#securityTab', '17/8/2016', 1),
(2, 'A new job suits most of your skills added today.view from here', 'careerea.com/jobs.php?id=55', '11/9/2019', 2),
(3, 'A course that you were enrolled in, had been updated today. view from here', 'careerea.com/courses.php?id=24', '17/8/2016', 1),
(4, 'A new job near to your location is added today.view from here', 'careerea.com/jobs.php?id=21', '17/8/2016', 2);

-- --------------------------------------------------------

--
-- Table structure for table `applicant_activity`
--

CREATE TABLE IF NOT EXISTS `applicant_activity` (
  `applicant_activity_ID` int(11) NOT NULL,
  `activity_date` varchar(30) NOT NULL,
  `activity_link` varchar(200) NOT NULL,
  `applicant_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `applicant_activity`:
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_favorites`
--

CREATE TABLE IF NOT EXISTS `applicant_favorites` (
  `applicant_favorites_ID` int(11) NOT NULL,
  `favorite_date` varchar(30) NOT NULL,
  `favorite_link` varchar(200) NOT NULL,
  `applicant_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `applicant_favorites`:
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_interests`
--

CREATE TABLE IF NOT EXISTS `applicant_interests` (
  `applicant_interests_ID` int(11) NOT NULL,
  `Interests_ID` int(11) NOT NULL,
  `applicant_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `applicant_interests`:
--   `Interests_ID`
--       `interests` -> `interests_ID`
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--

--
-- Dumping data for table `applicant_interests`
--

INSERT INTO `applicant_interests` (`applicant_interests_ID`, `Interests_ID`, `applicant_ID`) VALUES
(1, 2, 2),
(2, 3, 2),
(3, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `applicant_skills`
--

CREATE TABLE IF NOT EXISTS `applicant_skills` (
  `applicant_Skills_ID` int(11) NOT NULL,
  `applicant_ID` int(11) NOT NULL,
  `skill_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `applicant_skills`:
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--   `skill_ID`
--       `skills` -> `skill_ID`
--

--
-- Dumping data for table `applicant_skills`
--

INSERT INTO `applicant_skills` (`applicant_Skills_ID`, `applicant_ID`, `skill_ID`) VALUES
(1, 4, 2),
(2, 4, 5),
(3, 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs`
--

CREATE TABLE IF NOT EXISTS `applied_jobs` (
  `applied_jobs_ID` int(11) NOT NULL,
  `job_ID` int(11) NOT NULL,
  `applicant_ID` int(11) NOT NULL,
  `date_applied` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `applied_jobs`:
--   `job_ID`
--       `jobs` -> `job_ID`
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`applied_jobs_ID`, `job_ID`, `applicant_ID`, `date_applied`) VALUES
(1, 2, 1, '17/8/2014'),
(2, 3, 2, '11/7/2015'),
(3, 1, 5, '17/8/2016'),
(4, 1, 2, '12/6/2015');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE IF NOT EXISTS `companies` (
  `company_ID` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `location` varchar(200) NOT NULL,
  `followers` int(11) NOT NULL,
  `logo` varchar(400) NOT NULL,
  `bio` varchar(2000) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `admin_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `companies`:
--   `admin_ID`
--       `admins` -> `admin_ID`
--

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_ID`, `name`, `location`, `followers`, `logo`, `bio`, `facebook`, `linkedin`, `admin_ID`) VALUES
(1, 'e-finance', 'smart village', 57, 'companies/pics/logo.png', 'e-finance is operating the Egyptian government financial network. Being a national company, e-finance’s shareholders are National Investment Bank (70%), National Bank of Egypt (10%), Banque Misr (10%), and Egyptian Banks Company-EBC (10%).  With a paid capital of 175 million LE.', 'facebook.com/e-finance', 'linkedin/in/e-finance', 1),
(2, 'google', 'America', 10000, 'companies/pics/logo2.png', 'Google is an American multinational technology company specializing in Internet-related services and products. These include online advertising technologies, search, cloud computing, software, and hardware. Google was founded in 1998 by Larry Page and Sergey Brin while they were Ph.D. students at Stanford University, in California. Together, they own about 14 percent of its shares, and control 56 percent of the stockholder voting power through supervoting stock. They incorporated Google as a privately held company on September 4, 1998. An initial public offering (IPO) took place on August 19, 2004, and Google moved to its new headquarters in Mountain View, California, nicknamed the Googleplex. In August 2015, Google announced plans to reorganize its various interests as a conglomerate called Alphabet Inc. Google, Alphabet''s leading subsidiary, will continue to be the umbrella company for Alphabet''s Internet interests. Upon completion of the restructure, Sundar Pichai became CEO of Google, replacing Larry Page, who became CEO of Alphabet.', 'facebook.com/google', 'linkedin/in/google', 1),
(3, 'Juhaina', 'cairo', 130, 'companies/pics/logo3.png', 'Juhayna Food Industries is a leading Egypt-based manufacturer specialized in the production, processing and packaging of dairy, juice, and cooking products. Since its founding in 1983, it has secured a frontrunner position in the dairy and juice industries in Egypt and has expanded its presence in the Middle East, a feat made possible through its firm commitment to delivering a wide range of high-quality, healthy, and safe products that have become trusted household names.', 'facebook.com/juhaina', 'linkedin/in/juhaina', 2);

-- --------------------------------------------------------

--
-- Table structure for table `company_followers`
--

CREATE TABLE IF NOT EXISTS `company_followers` (
  `company_followers_ID` int(11) NOT NULL,
  `company_ID` int(11) NOT NULL,
  `applicant_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `company_followers`:
--   `company_ID`
--       `companies` -> `company_ID`
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--

--
-- Dumping data for table `company_followers`
--

INSERT INTO `company_followers` (`company_followers_ID`, `company_ID`, `applicant_ID`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_ID` int(11) NOT NULL,
  `course_title` varchar(150) NOT NULL,
  `course_logo` varchar(150) NOT NULL,
  `published_date` varchar(100) NOT NULL,
  `course_hours` varchar(20) NOT NULL,
  `course_description` varchar(255) NOT NULL,
  `course_rate` float NOT NULL,
  `admin_ID` int(11) NOT NULL,
  `instructor_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `courses`:
--   `admin_ID`
--       `admins` -> `admin_ID`
--   `instructor_ID`
--       `instructors` -> `instructor_ID`
--

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_ID`, `course_title`, `course_logo`, `published_date`, `course_hours`, `course_description`, `course_rate`, `admin_ID`, `instructor_ID`) VALUES
(1, 'Codeigniter Complete Course for Beginners', 'logo.png', '12/04/2016', '15:45', 'in this course you will learn all about Codeigniter framework', 3.5, 2, 1),
(2, 'Learn Javascript Bom', 'logo.png', '17/8/2068', '18', 'Learn everything about Javascript Browser Object Model', 4.5, 2, 1),
(3, 'Learn PHP 5 In Arabic', 'logo.png', '12/6/2023', '13', 'learn PHP 5 & MySQL From Scratch In Arabic', 2, 2, 2),
(4, 'Learn Bootstrap', 'logo.png', '16/3/2016', '10', 'learn PHP 5 & MySQL From Scratch In Arabic', 5, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `courses_content`
--

CREATE TABLE IF NOT EXISTS `courses_content` (
  `courses_content_ID` int(11) NOT NULL,
  `video_link` varchar(400) NOT NULL,
  `course_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `courses_content`:
--   `course_ID`
--       `courses` -> `course_ID`
--

--
-- Dumping data for table `courses_content`
--

INSERT INTO `courses_content` (`courses_content_ID`, `video_link`, `course_ID`) VALUES
(1, 'https://www.youtube.com/watch?v=ctEAYHFcbHk&list=PLDoPjvoNmBAwCNR-UIRft5YuVlZKrYh20&index=1', 1),
(2, 'https://www.youtube.com/watch?v=hPB7VDcwEnE&index=2&list=PLDoPjvoNmBAwCNR-UIRft5YuVlZKrYh20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE IF NOT EXISTS `course_categories` (
  `course_category_ID` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `course_categories`:
--

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`course_category_ID`, `category_name`) VALUES
(1, 'date_added');

-- --------------------------------------------------------

--
-- Table structure for table `course_in_categories`
--

CREATE TABLE IF NOT EXISTS `course_in_categories` (
  `course_in_categories_ID` int(11) NOT NULL,
  `course_ID` int(11) NOT NULL,
  `course_category_ID` int(11) NOT NULL,
  `subcategory_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `course_in_categories`:
--   `course_ID`
--       `courses` -> `course_ID`
--   `course_category_ID`
--       `course_categories` -> `course_category_ID`
--   `subcategory_ID`
--       `course_subcategories` -> `subcategory_ID`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_plans`
--

CREATE TABLE IF NOT EXISTS `course_plans` (
  `course_plan_ID` int(11) NOT NULL,
  `course_ID` int(11) NOT NULL,
  `plan_type` char(10) NOT NULL,
  `plan_duration_in_days` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `course_plans`:
--   `course_ID`
--       `courses` -> `course_ID`
--

--
-- Dumping data for table `course_plans`
--

INSERT INTO `course_plans` (`course_plan_ID`, `course_ID`, `plan_type`, `plan_duration_in_days`) VALUES
(1, 1, 'A', '60'),
(2, 1, 'B', '30');

-- --------------------------------------------------------

--
-- Table structure for table `course_prerequisites`
--

CREATE TABLE IF NOT EXISTS `course_prerequisites` (
  `course_prerequisite_ID` int(11) NOT NULL,
  `course_ID` int(11) NOT NULL,
  `prerequisite_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `course_prerequisites`:
--   `course_ID`
--       `courses` -> `course_ID`
--   `prerequisite_ID`
--       `prerequisites` -> `prerequisite_ID`
--

--
-- Dumping data for table `course_prerequisites`
--

INSERT INTO `course_prerequisites` (`course_prerequisite_ID`, `course_ID`, `prerequisite_ID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `course_subcategories`
--

CREATE TABLE IF NOT EXISTS `course_subcategories` (
  `subcategory_ID` int(11) NOT NULL,
  `subcategory_name` varchar(250) NOT NULL,
  `course_category_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `course_subcategories`:
--   `course_category_ID`
--       `course_categories` -> `course_category_ID`
--

--
-- Dumping data for table `course_subcategories`
--

INSERT INTO `course_subcategories` (`subcategory_ID`, `subcategory_name`, `course_category_ID`) VALUES
(1, 'this_month', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_courses`
--

CREATE TABLE IF NOT EXISTS `enrolled_courses` (
  `enrolled_course_ID` int(11) NOT NULL,
  `applicant_rate` float NOT NULL,
  `applicant_question` varchar(255) NOT NULL,
  `date_enrolled` varchar(20) NOT NULL,
  `applicant_feedback` varchar(300) NOT NULL,
  `course_ID` int(11) NOT NULL,
  `applicant_ID` int(11) NOT NULL,
  `course_plan_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `enrolled_courses`:
--   `course_ID`
--       `courses` -> `course_ID`
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--   `course_plan_ID`
--       `course_plans` -> `course_plan_ID`
--

--
-- Dumping data for table `enrolled_courses`
--

INSERT INTO `enrolled_courses` (`enrolled_course_ID`, `applicant_rate`, `applicant_question`, `date_enrolled`, `applicant_feedback`, `course_ID`, `applicant_ID`, `course_plan_ID`) VALUES
(1, 4.5, 'none', '16/8/2018', 'none', 1, 2, 1),
(2, 3, 'none', '10/6/2017', 'none', 2, 2, 2),
(3, 2, 'none', '10/6/2085', 'none', 4, 3, 1),
(4, 2, 'none', '12/6/2061', 'none', 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE IF NOT EXISTS `instructors` (
  `instructor_ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `admin_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `instructors`:
--   `admin_ID`
--       `admins` -> `admin_ID`
--

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructor_ID`, `name`, `job_title`, `bio`, `facebook`, `linkedin`, `youtube`, `admin_ID`) VALUES
(1, 'Muhammad Talha', 'php developer', 'Hi, my name is mohamed.i''m a developer obssesed with php all the time', 'facebook.com/mohamed_talha', 'none', 'https://www.youtube.com/channel/UCz13L0tjHkyL2W597M9jxeg', 2),
(2, 'Osama ELzero', 'Full-stack web developer', 'I am osama elzero', 'facebook.com/osama', 'linkedin.com/osama', 'youtube.com/osama', 3),
(3, 'Ahmed Mohamed', 'Java Developer', 'I am Ahmed Mohamed', 'facebook.com/ahmed_mohamed', 'linkedin.com/ahmed_mohamed', 'youtube.com/ahmed_mohamed', 2);

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE IF NOT EXISTS `interests` (
  `interests_ID` int(11) NOT NULL,
  `Interests_name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `interests`:
--

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`interests_ID`, `Interests_name`) VALUES
(1, 'MYSQL'),
(2, 'PHP'),
(3, 'Java EE'),
(4, 'Software Development'),
(5, 'Software Engineering'),
(6, 'Web Development'),
(7, 'Web Design');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `job_ID` int(11) NOT NULL,
  `job_title` varchar(60) NOT NULL,
  `job_requirments` varchar(2000) NOT NULL,
  `job_description` varchar(2500) NOT NULL,
  `salary` int(11) NOT NULL,
  `seniority_level` varchar(30) NOT NULL,
  `date_posted` varchar(30) NOT NULL,
  `viewed` varchar(10) NOT NULL,
  `admin_ID` int(11) NOT NULL,
  `company_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `jobs`:
--   `admin_ID`
--       `admins` -> `admin_ID`
--   `company_ID`
--       `companies` -> `company_ID`
--

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_ID`, `job_title`, `job_requirments`, `job_description`, `salary`, `seniority_level`, `date_posted`, `viewed`, `admin_ID`, `company_ID`) VALUES
(1, 'Senior PHP Developer', 'Proven software development experience in PHP-Understanding of open source projects like Joomla, Drupal, Wikis, osCommerce, etc-Demonstrable knowledge of web technologies including HTML, CSS, Javascript, AJAX etc\nGoo-knowledge of relational databases, version control tools and of developing web services-Experience in common third-party APIs (Google, Facebook, Ebay etc)-Passion for best design and coding practices and a desire to develop new bold ideas-BS/MS degree in Computer Science, Engineering or a related subject', 'Writing clean, fast PHP to a high standard in a timely and scalable way-Producing detailed specifications-Troubleshooting, testing and maintaining the core product software and databases-Contribute in all phases of the development lifecycle-Follow industry best practices-Develop and deploy new features to facilitate related procedures and tools if necessary', 5000, 'senior', '18/8/2017', '197', 1, 1),
(2, 'Junior Java Developer', '1 + years of Java development experience-Previous Linux experience-Experience with web technologies and architecture: micro-services, distributed cloud services, distributed data, caching, Restful APIs, etc-Experience with SaaS scalable technologies-Desirable: Experience with CI tools and technologies such as Jenkins, Puppet or Chef', 'Design and develop scalable, back-end, data services using SaaS based technology-Create standard Restful APIs to expose all functionality-Leverage existing open source technology where appropriate-Solve tough design and architectural problems-Work well on product teams with Quality Engineers and Product Owners', 3000, 'junior', '12/9/2016', '123', 2, 2),
(3, 'Junior Java EE Developer', 'Bachelor''s degree or equivalent-Master''s degree in Computer Science or Engineering preferred-5+ years in Java EE/Full Stack application development-Must be fully proficient with Java programming language and various Java EE technologies-Must have Full Stack development experience-Experience in XML/Web Services technologies (SOAP, REST) is required-Experience in HTML5/ReactJS/ECMAScript 6 is required-Must have Experience with Spring Core, Spring boot frame work-Experience with IntelliJ IDEA highly preferred', 'Privately held financial services company is seeking a Junior level Java / J2EE Developer for their growing team in the Sandy Springs area.  You will work closely with the Business Analyst''s and Senior Developers to understand design and development requirements for the existing mission critical financial services web applications.  You will own responsibility for developing and support this mission critical app including defect fixes, enhancements and providing production level support.', 2000, 'junior', '12/9/2026', '168', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `jobs_categories`
--

CREATE TABLE IF NOT EXISTS `jobs_categories` (
  `job_category_ID` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `jobs_categories`:
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs_subcategories`
--

CREATE TABLE IF NOT EXISTS `jobs_subcategories` (
  `subcategory_ID` int(11) NOT NULL,
  `subcategory_name` varchar(250) NOT NULL,
  `job_category_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `jobs_subcategories`:
--   `job_category_ID`
--       `jobs_categories` -> `job_category_ID`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_in_categories`
--

CREATE TABLE IF NOT EXISTS `job_in_categories` (
  `Job_in_categories_ID` int(11) NOT NULL,
  `job_ID` int(11) NOT NULL,
  `job_category_ID` int(11) NOT NULL,
  `subcategory_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `job_in_categories`:
--   `job_ID`
--       `jobs` -> `job_ID`
--   `job_category_ID`
--       `jobs_categories` -> `job_category_ID`
--   `subcategory_ID`
--       `jobs_subcategories` -> `subcategory_ID`
--

-- --------------------------------------------------------

--
-- Table structure for table `job_main_skills`
--

CREATE TABLE IF NOT EXISTS `job_main_skills` (
  `job_main_skills_ID` int(11) NOT NULL,
  `job_ID` int(11) NOT NULL,
  `skill_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `job_main_skills`:
--   `job_ID`
--       `jobs` -> `job_ID`
--   `skill_ID`
--       `skills` -> `skill_ID`
--

--
-- Dumping data for table `job_main_skills`
--

INSERT INTO `job_main_skills` (`job_main_skills_ID`, `job_ID`, `skill_ID`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 1, 7),
(4, 1, 8),
(5, 1, 15),
(6, 2, 16),
(7, 2, 1),
(8, 2, 4),
(9, 3, 17);

-- --------------------------------------------------------

--
-- Table structure for table `login_history`
--

CREATE TABLE IF NOT EXISTS `login_history` (
  `login_history_ID` int(11) NOT NULL,
  `device_type` varchar(80) NOT NULL,
  `location` varchar(200) NOT NULL,
  `time` varchar(100) NOT NULL,
  `applicant_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `login_history`:
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--

--
-- Dumping data for table `login_history`
--

INSERT INTO `login_history` (`login_history_ID`, `device_type`, `location`, `time`, `applicant_ID`) VALUES
(1, 'motorella', 'Cairo', '17/8/2017', 2),
(2, 'HTC', 'Cairo', '17/8/2017', 2),
(3, 'Dell', 'Giza', '16/8/2017', 1),
(4, 'lenovo', 'Ismailia', '17/8/2017', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications_panel`
--

CREATE TABLE IF NOT EXISTS `notifications_panel` (
  `applicant_notifications_ID` int(11) NOT NULL,
  `interested_jobs` int(11) NOT NULL,
  `company_following_jobs` int(11) NOT NULL,
  `near_jobs` int(11) NOT NULL,
  `interested_near_jobs` int(11) NOT NULL,
  `suits_skills_jobs` int(11) NOT NULL,
  `interested_salary_jobs` int(11) NOT NULL,
  `interested_courses` int(11) NOT NULL,
  `skills_related_courses` int(11) NOT NULL,
  `update_enrolled_courses` int(11) NOT NULL,
  `course_plan_reminder` int(11) NOT NULL,
  `job_accepted_reminder` int(11) NOT NULL,
  `careerea_login_notification` int(11) NOT NULL,
  `email_login_notification` int(11) NOT NULL,
  `applicant_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `notifications_panel`:
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--

--
-- Dumping data for table `notifications_panel`
--

INSERT INTO `notifications_panel` (`applicant_notifications_ID`, `interested_jobs`, `company_following_jobs`, `near_jobs`, `interested_near_jobs`, `suits_skills_jobs`, `interested_salary_jobs`, `interested_courses`, `skills_related_courses`, `update_enrolled_courses`, `course_plan_reminder`, `job_accepted_reminder`, `careerea_login_notification`, `email_login_notification`, `applicant_ID`) VALUES
(1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `prerequisites`
--

CREATE TABLE IF NOT EXISTS `prerequisites` (
  `prerequisite_ID` int(11) NOT NULL,
  `prerequisite_name` varchar(60) NOT NULL,
  `prerequisite_course_link` varchar(400) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `prerequisites`:
--

--
-- Dumping data for table `prerequisites`
--

INSERT INTO `prerequisites` (`prerequisite_ID`, `prerequisite_name`, `prerequisite_course_link`) VALUES
(1, 'php', 'mfos'),
(2, 'java', 'mfos'),
(3, 'python', 'mfos'),
(4, 'network', 'mfos');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `skill_ID` int(11) NOT NULL,
  `skill_name` varchar(150) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `skills`:
--

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_ID`, `skill_name`) VALUES
(1, 'Java'),
(2, 'PHP'),
(3, 'SQL'),
(4, 'MYSQL'),
(5, 'C++'),
(6, 'Python'),
(7, 'Clean Code'),
(8, 'OOP'),
(9, 'OOAD'),
(10, 'DBMS'),
(11, 'SQL Server'),
(12, 'CCNA'),
(13, 'CCNA Security'),
(14, 'N+'),
(15, 'HTML5'),
(16, 'CSS3'),
(17, 'Java EE');

-- --------------------------------------------------------

--
-- Table structure for table `skills_compared_jobs`
--

CREATE TABLE IF NOT EXISTS `skills_compared_jobs` (
  `skills_compared_jobs_ID` int(11) NOT NULL,
  `date_compared` varchar(20) NOT NULL,
  `percentage` varchar(30) NOT NULL,
  `applicant_ID` int(11) NOT NULL,
  `job_ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- RELATIONS FOR TABLE `skills_compared_jobs`:
--   `applicant_ID`
--       `applicants` -> `applicant_ID`
--   `job_ID`
--       `jobs` -> `job_ID`
--

--
-- Dumping data for table `skills_compared_jobs`
--

INSERT INTO `skills_compared_jobs` (`skills_compared_jobs_ID`, `date_compared`, `percentage`, `applicant_ID`, `job_ID`) VALUES
(1, '1/8/2015', '60 %', 2, 1),
(2, '5/11/2017', '76 %', 2, 3),
(3, '15/8/2016', '62 %', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `admin_activity`
--
ALTER TABLE `admin_activity`
  ADD PRIMARY KEY (`admin_activity_ID`),
  ADD KEY `admin_activity_ibfk_1` (`admin_ID`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`applicant_ID`);

--
-- Indexes for table `applicants_notifications`
--
ALTER TABLE `applicants_notifications`
  ADD PRIMARY KEY (`applicant_notification_ID`),
  ADD KEY `applicants_notifications_ibfk_2` (`applicant_ID`);

--
-- Indexes for table `applicant_activity`
--
ALTER TABLE `applicant_activity`
  ADD PRIMARY KEY (`applicant_activity_ID`),
  ADD KEY `applicant_activity_ibfk_1` (`applicant_ID`);

--
-- Indexes for table `applicant_favorites`
--
ALTER TABLE `applicant_favorites`
  ADD PRIMARY KEY (`applicant_favorites_ID`),
  ADD KEY `applicant_favorites_ibfk_1` (`applicant_ID`);

--
-- Indexes for table `applicant_interests`
--
ALTER TABLE `applicant_interests`
  ADD PRIMARY KEY (`applicant_interests_ID`),
  ADD KEY `applicant_interests_ibfk_1` (`Interests_ID`),
  ADD KEY `applicant_interests_ibfk_2` (`applicant_ID`);

--
-- Indexes for table `applicant_skills`
--
ALTER TABLE `applicant_skills`
  ADD PRIMARY KEY (`applicant_Skills_ID`),
  ADD KEY `applicant_skills_ibfk_1` (`applicant_ID`),
  ADD KEY `applicant_skills_ibfk_2` (`skill_ID`);

--
-- Indexes for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD PRIMARY KEY (`applied_jobs_ID`),
  ADD KEY `applied_jobs_ibfk_1` (`job_ID`),
  ADD KEY `applied_jobs_ibfk_2` (`applicant_ID`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_ID`),
  ADD KEY `companies_ibfk_1` (`admin_ID`);

--
-- Indexes for table `company_followers`
--
ALTER TABLE `company_followers`
  ADD PRIMARY KEY (`company_followers_ID`),
  ADD KEY `company_followers_ibfk_1` (`company_ID`),
  ADD KEY `company_followers_ibfk_2` (`applicant_ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_ID`),
  ADD KEY `courses_ibfk_1` (`admin_ID`),
  ADD KEY `courses_ibfk_2` (`instructor_ID`);

--
-- Indexes for table `courses_content`
--
ALTER TABLE `courses_content`
  ADD PRIMARY KEY (`courses_content_ID`),
  ADD KEY `courses_content_ibfk_1` (`course_ID`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`course_category_ID`);

--
-- Indexes for table `course_in_categories`
--
ALTER TABLE `course_in_categories`
  ADD PRIMARY KEY (`course_in_categories_ID`),
  ADD KEY `course_in_categories_ibfk_1` (`course_ID`),
  ADD KEY `course_in_categories_ibfk_2` (`course_category_ID`),
  ADD KEY `course_in_categories_ibfk_3` (`subcategory_ID`);

--
-- Indexes for table `course_plans`
--
ALTER TABLE `course_plans`
  ADD PRIMARY KEY (`course_plan_ID`),
  ADD KEY `course_plans_ibfk_1` (`course_ID`);

--
-- Indexes for table `course_prerequisites`
--
ALTER TABLE `course_prerequisites`
  ADD PRIMARY KEY (`course_prerequisite_ID`),
  ADD KEY `course_prerequisites_ibfk_1` (`course_ID`),
  ADD KEY `course_prerequisites_ibfk_2` (`prerequisite_ID`);

--
-- Indexes for table `course_subcategories`
--
ALTER TABLE `course_subcategories`
  ADD PRIMARY KEY (`subcategory_ID`),
  ADD KEY `course_subcategories_ibfk_2` (`course_category_ID`);

--
-- Indexes for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  ADD PRIMARY KEY (`enrolled_course_ID`),
  ADD KEY `enrolled_courses_ibfk_1` (`course_ID`),
  ADD KEY `enrolled_courses_ibfk_2` (`applicant_ID`),
  ADD KEY `enrolled_courses_ibfk_3` (`course_plan_ID`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructor_ID`),
  ADD KEY `instructors_ibfk_1` (`admin_ID`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`interests_ID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_ID`),
  ADD KEY `jobs_ibfk_1` (`admin_ID`),
  ADD KEY `jobs_ibfk_2` (`company_ID`) USING BTREE;

--
-- Indexes for table `jobs_categories`
--
ALTER TABLE `jobs_categories`
  ADD PRIMARY KEY (`job_category_ID`);

--
-- Indexes for table `jobs_subcategories`
--
ALTER TABLE `jobs_subcategories`
  ADD PRIMARY KEY (`subcategory_ID`),
  ADD KEY `jobs_subcategories_ibfk_2` (`job_category_ID`);

--
-- Indexes for table `job_in_categories`
--
ALTER TABLE `job_in_categories`
  ADD PRIMARY KEY (`Job_in_categories_ID`),
  ADD KEY `job_in_categories_ibfk_1` (`job_ID`),
  ADD KEY `job_in_categories_ibfk_2` (`job_category_ID`),
  ADD KEY `job_in_categories_ibfk_3` (`subcategory_ID`);

--
-- Indexes for table `job_main_skills`
--
ALTER TABLE `job_main_skills`
  ADD PRIMARY KEY (`job_main_skills_ID`),
  ADD KEY `job_main_skills_ibfk_1` (`job_ID`),
  ADD KEY `job_main_skills_ibfk_2` (`skill_ID`);

--
-- Indexes for table `login_history`
--
ALTER TABLE `login_history`
  ADD PRIMARY KEY (`login_history_ID`),
  ADD KEY `login_history_ibfk_1` (`applicant_ID`);

--
-- Indexes for table `notifications_panel`
--
ALTER TABLE `notifications_panel`
  ADD PRIMARY KEY (`applicant_notifications_ID`),
  ADD KEY `notifications_panel_ibfk_1` (`applicant_ID`);

--
-- Indexes for table `prerequisites`
--
ALTER TABLE `prerequisites`
  ADD PRIMARY KEY (`prerequisite_ID`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_ID`);

--
-- Indexes for table `skills_compared_jobs`
--
ALTER TABLE `skills_compared_jobs`
  ADD PRIMARY KEY (`skills_compared_jobs_ID`),
  ADD KEY `skills_compared_jobs_ibfk_1` (`applicant_ID`),
  ADD KEY `skills_compared_jobs_ibfk_2` (`job_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admin_activity`
--
ALTER TABLE `admin_activity`
  MODIFY `admin_activity_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `applicant_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `applicants_notifications`
--
ALTER TABLE `applicants_notifications`
  MODIFY `applicant_notification_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `applicant_activity`
--
ALTER TABLE `applicant_activity`
  MODIFY `applicant_activity_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `applicant_favorites`
--
ALTER TABLE `applicant_favorites`
  MODIFY `applicant_favorites_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `applicant_interests`
--
ALTER TABLE `applicant_interests`
  MODIFY `applicant_interests_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `applicant_skills`
--
ALTER TABLE `applicant_skills`
  MODIFY `applicant_Skills_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  MODIFY `applied_jobs_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company_followers`
--
ALTER TABLE `company_followers`
  MODIFY `company_followers_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `courses_content`
--
ALTER TABLE `courses_content`
  MODIFY `courses_content_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `course_category_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course_in_categories`
--
ALTER TABLE `course_in_categories`
  MODIFY `course_in_categories_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_plans`
--
ALTER TABLE `course_plans`
  MODIFY `course_plan_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course_prerequisites`
--
ALTER TABLE `course_prerequisites`
  MODIFY `course_prerequisite_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `course_subcategories`
--
ALTER TABLE `course_subcategories`
  MODIFY `subcategory_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  MODIFY `enrolled_course_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `instructor_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `interests_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jobs_categories`
--
ALTER TABLE `jobs_categories`
  MODIFY `job_category_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs_subcategories`
--
ALTER TABLE `jobs_subcategories`
  MODIFY `subcategory_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_in_categories`
--
ALTER TABLE `job_in_categories`
  MODIFY `Job_in_categories_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `job_main_skills`
--
ALTER TABLE `job_main_skills`
  MODIFY `job_main_skills_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `login_history`
--
ALTER TABLE `login_history`
  MODIFY `login_history_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `notifications_panel`
--
ALTER TABLE `notifications_panel`
  MODIFY `applicant_notifications_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prerequisites`
--
ALTER TABLE `prerequisites`
  MODIFY `prerequisite_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `skills_compared_jobs`
--
ALTER TABLE `skills_compared_jobs`
  MODIFY `skills_compared_jobs_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_activity`
--
ALTER TABLE `admin_activity`
  ADD CONSTRAINT `admin_activity_ibfk_1` FOREIGN KEY (`admin_ID`) REFERENCES `admins` (`admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicants_notifications`
--
ALTER TABLE `applicants_notifications`
  ADD CONSTRAINT `applicants_notifications_ibfk_2` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_activity`
--
ALTER TABLE `applicant_activity`
  ADD CONSTRAINT `applicant_activity_ibfk_1` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_favorites`
--
ALTER TABLE `applicant_favorites`
  ADD CONSTRAINT `applicant_favorites_ibfk_1` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_interests`
--
ALTER TABLE `applicant_interests`
  ADD CONSTRAINT `applicant_interests_ibfk_1` FOREIGN KEY (`Interests_ID`) REFERENCES `interests` (`interests_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_interests_ibfk_2` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applicant_skills`
--
ALTER TABLE `applicant_skills`
  ADD CONSTRAINT `applicant_skills_ibfk_1` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applicant_skills_ibfk_2` FOREIGN KEY (`skill_ID`) REFERENCES `skills` (`skill_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD CONSTRAINT `applied_jobs_ibfk_1` FOREIGN KEY (`job_ID`) REFERENCES `jobs` (`job_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `applied_jobs_ibfk_2` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`admin_ID`) REFERENCES `admins` (`admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `company_followers`
--
ALTER TABLE `company_followers`
  ADD CONSTRAINT `company_followers_ibfk_1` FOREIGN KEY (`company_ID`) REFERENCES `companies` (`company_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `company_followers_ibfk_2` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`admin_ID`) REFERENCES `admins` (`admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`instructor_ID`) REFERENCES `instructors` (`instructor_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `courses_content`
--
ALTER TABLE `courses_content`
  ADD CONSTRAINT `courses_content_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `courses` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_in_categories`
--
ALTER TABLE `course_in_categories`
  ADD CONSTRAINT `course_in_categories_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `courses` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_in_categories_ibfk_2` FOREIGN KEY (`course_category_ID`) REFERENCES `course_categories` (`course_category_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_in_categories_ibfk_3` FOREIGN KEY (`subcategory_ID`) REFERENCES `course_subcategories` (`subcategory_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_plans`
--
ALTER TABLE `course_plans`
  ADD CONSTRAINT `course_plans_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `courses` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_prerequisites`
--
ALTER TABLE `course_prerequisites`
  ADD CONSTRAINT `course_prerequisites_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `courses` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_prerequisites_ibfk_2` FOREIGN KEY (`prerequisite_ID`) REFERENCES `prerequisites` (`prerequisite_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_subcategories`
--
ALTER TABLE `course_subcategories`
  ADD CONSTRAINT `course_subcategories_ibfk_2` FOREIGN KEY (`course_category_ID`) REFERENCES `course_categories` (`course_category_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  ADD CONSTRAINT `enrolled_courses_ibfk_1` FOREIGN KEY (`course_ID`) REFERENCES `courses` (`course_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrolled_courses_ibfk_2` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrolled_courses_ibfk_3` FOREIGN KEY (`course_plan_ID`) REFERENCES `course_plans` (`course_plan_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `instructors`
--
ALTER TABLE `instructors`
  ADD CONSTRAINT `instructors_ibfk_1` FOREIGN KEY (`admin_ID`) REFERENCES `admins` (`admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_ibfk_1` FOREIGN KEY (`admin_ID`) REFERENCES `admins` (`admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jobs_ibfk_2` FOREIGN KEY (`company_ID`) REFERENCES `companies` (`company_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobs_subcategories`
--
ALTER TABLE `jobs_subcategories`
  ADD CONSTRAINT `jobs_subcategories_ibfk_2` FOREIGN KEY (`job_category_ID`) REFERENCES `jobs_categories` (`job_category_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_in_categories`
--
ALTER TABLE `job_in_categories`
  ADD CONSTRAINT `job_in_categories_ibfk_1` FOREIGN KEY (`job_ID`) REFERENCES `jobs` (`job_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `job_in_categories_ibfk_2` FOREIGN KEY (`job_category_ID`) REFERENCES `jobs_categories` (`job_category_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `job_in_categories_ibfk_3` FOREIGN KEY (`subcategory_ID`) REFERENCES `jobs_subcategories` (`subcategory_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `job_main_skills`
--
ALTER TABLE `job_main_skills`
  ADD CONSTRAINT `job_main_skills_ibfk_1` FOREIGN KEY (`job_ID`) REFERENCES `jobs` (`job_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `job_main_skills_ibfk_2` FOREIGN KEY (`skill_ID`) REFERENCES `skills` (`skill_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login_history`
--
ALTER TABLE `login_history`
  ADD CONSTRAINT `login_history_ibfk_1` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications_panel`
--
ALTER TABLE `notifications_panel`
  ADD CONSTRAINT `notifications_panel_ibfk_1` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills_compared_jobs`
--
ALTER TABLE `skills_compared_jobs`
  ADD CONSTRAINT `skills_compared_jobs_ibfk_1` FOREIGN KEY (`applicant_ID`) REFERENCES `applicants` (`applicant_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `skills_compared_jobs_ibfk_2` FOREIGN KEY (`job_ID`) REFERENCES `jobs` (`job_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
