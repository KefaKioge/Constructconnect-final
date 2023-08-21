-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2023 at 09:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(11) NOT NULL,
  `code_body` text NOT NULL,
  `code_main` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`designation_id`, `designation_name`) VALUES
(1, 'ARCHITECT'),
(2, 'SUPPLIER'),
(3, 'TRUCK'),
(4, 'OTHER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_title` text NOT NULL,
  `faq_content` text NOT NULL,
  `faq_show` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_title`, `faq_content`, `faq_show`) VALUES
(1, 'How can ConstructConnect benefit me as a client?', '<p>ConstructConnect connects you with skilled architects, reliable suppliers, efficient transporters, and expert builders, streamlining your construction journey. We make it easier for you to find the right professionals and materials, manage projects, and ensure secure payments.</p>', 'On Home and FAQ Page'),
(2, 'How do I find the right architect for my project?', '<p>You can browse through our architect profiles, view their previous projects, and read client reviews. Once you find a match, you can directly communicate with them through our platform to discuss your project needs and vision.<br></p>', 'On Home and FAQ Page'),
(3, 'Are my payments on ConstructConnect secure?', '<p>Absolutely. We integrate secure payment options, including mobile money and card payments, to ensure your financial transactions are protected. Your peace of mind is our priority.<br></p>', 'On Home and FAQ Page'),
(4, 'Mangani ConstructConnect inaweza kunipatia connection kwa ground?', '<p>ConstructConnect inakuskuma na ma-archi who anazidi job, mabuda wa material, na fundis wa kazi. Tunafacilitate connection zote hizi kukuwezesha kuvuta form na kushona sheng ya construction.<br></p>', 'On Home and FAQ Page'),
(6, 'Nifanyeje kupata mchongaji sahihi kwa mradi wangu?', '<p>Unaweza kuvinjari kupitia profaili za wachongaji wetu, kuona miradi yao ya awali, na kusoma mapitio ya wateja. Mara unapopata mahadhi unaoulingana nayo, unaweza kuwasiliana nao moja kwa moja kupitia jukwaa letu kujadili mahitaji ya mradi wako na mtazamo.<br></p>', 'On Home and FAQ Page'),
(7, 'Hii platform inasaidia nini kwa kucheki kazi?', '<p><font color=\"#d1d5db\" face=\"Söhne, ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Ubuntu, Cantarell, Noto Sans, sans-serif, Helvetica Neue, Arial, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji\"><span style=\"font-size: 16px; white-space-collapse: preserve;\">Konnect inakuwezesha ku-find contractors na suppliers wasafi za job. Unaweza ku-navigate kwa kazi wanafanya na kusoma comment za wateja. Hio way, unaweza ku-decide kama uko in kazi au la.</span></font><br></p>', 'On FAQ Page'),
(9, 'How can I get in touch with a contact person for more information?', '<p>For inquiries and further assistance, you can contact our representative, Mr. Kefa Kioge, at +254 725 247100. He\'ll be more than happy to provide you with the information you need to kickstart your construction journey.<br></p>', 'On Home Page');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq_photo`
--

CREATE TABLE `tbl_faq_photo` (
  `id` int(11) NOT NULL,
  `main_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_faq_photo`
--

INSERT INTO `tbl_faq_photo` (`id`, `main_photo`) VALUES
(1, 'faq-main-photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `name`, `value`) VALUES
(1, 'HOME', 'Home'),
(2, 'PAGE', 'Page'),
(3, 'ABOUT', 'About'),
(4, 'GALLERY', 'Gallery'),
(5, 'FAQ', 'FAQ'),
(6, 'SERVICE', 'Service'),
(7, 'PORTFOLIO', 'Portfolio'),
(8, 'TESTIMONIAL', 'Testimonial'),
(9, 'NEWS', 'News'),
(10, 'CONTACT', 'Contact'),
(11, 'ADDRESS', 'Address'),
(12, 'CALL_US', 'Call Us'),
(13, 'WORKING_HOURS', 'Working Hours'),
(14, 'ABOUT_US', 'About Us'),
(15, 'LATEST_NEWS', 'Latest News'),
(16, 'POPULAR_NEWS', 'Popular News'),
(17, 'QUICK_LINKS', 'Quick Links'),
(18, 'TERMS_AND_CONDITIONS', 'Terms and Conditions'),
(19, 'PRIVACY_POLICY', 'Privacy Policy'),
(20, 'READ_MORE', 'Read More'),
(21, 'POSTED_ON', 'Posted On:'),
(22, 'ADMIN', 'Admin'),
(23, 'SERVICES', 'Services'),
(24, 'ALL', 'All'),
(26, 'PROJECTS', 'Projects'),
(27, 'DESCRIPTION', 'Description'),
(28, 'CLIENT_NAME', 'Client Name'),
(29, 'CLIENT_COMPANY', 'Client Company'),
(30, 'PROJECT_START_DATE', 'Project Start Date'),
(31, 'PROJECT_END_DATE', 'Project End Date'),
(33, 'CLIENT_COMMENT', 'Client\'s Comment'),
(34, 'SEARCH_NEWS', 'Search News'),
(35, 'CATEGORY', 'Category'),
(36, 'SHARE_THIS', 'Share This'),
(37, 'COMMENTS', 'Comments'),
(38, 'SEARCH_BY', 'Search By:'),
(39, 'NO_RESULT_FOUND', 'No Result Found'),
(40, 'CONTACT_US_PAGE_FORM_HEADING_TEXT', 'Contact us through the following form:'),
(41, 'PREVIOUS', 'Previous'),
(42, 'NEXT', 'Next'),
(43, 'FIND_US_ON_MAP', 'Find Us on Map:'),
(44, 'NAME', 'Name'),
(45, 'EMAIL_ADDRESS', 'Email Address'),
(46, 'PHONE', 'Phone Number'),
(47, 'MESSAGE', 'Message'),
(48, 'SEND_MESSAGE', 'Send Message'),
(49, 'EMPTY_ERROR_NAME', 'Name can not be empty'),
(50, 'EMPTY_ERROR_PHONE', 'Phone number can not be empty'),
(51, 'EMPTY_ERROR_EMAIL', 'Email address can not be empty'),
(52, 'VALID_ERROR_EMAIL', 'Email address is invalid'),
(53, 'EMPTY_ERROR_COMMENT', 'Comment can not be empty'),
(54, 'CONTACT_FORM_EMAIL_SUBJECT', 'Contact Form Email - YourWebsite.com'),
(55, 'CONTACT_FORM_EMAIL_SUCCESS_MESSAGE', 'Thank you for sending us the email. We will contact you shortly.'),
(56, 'PASSWORD_REQUEST_EMAIL_SUBJECT', 'Password Request - yourwebsite.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `home_status` int(11) NOT NULL,
  `about_status` tinyint(4) NOT NULL,
  `gallery_status` tinyint(4) NOT NULL,
  `faq_status` tinyint(4) NOT NULL,
  `service_status` tinyint(4) NOT NULL,
  `portfolio_status` tinyint(4) NOT NULL,
  `testimonial_status` tinyint(4) NOT NULL,
  `news_status` tinyint(4) NOT NULL,
  `contact_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `home_status`, `about_status`, `gallery_status`, `faq_status`, `service_status`, `portfolio_status`, `testimonial_status`, `news_status`, `contact_status`) VALUES
(1, 1, 1, 1, 1, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `news_title` text NOT NULL,
  `news_content` text NOT NULL,
  `news_short_content` text NOT NULL,
  `news_date` text NOT NULL,
  `photo` text NOT NULL,
  `banner` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `total_view` int(11) NOT NULL,
  `comment` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_category`
--

CREATE TABLE `tbl_news_category` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `mt_home` text NOT NULL,
  `mk_home` text NOT NULL,
  `md_home` text NOT NULL,
  `about_photo` text NOT NULL,
  `about_heading` text NOT NULL,
  `about_content` text NOT NULL,
  `mission_heading` text NOT NULL,
  `mission_content` text NOT NULL,
  `vision_heading` text NOT NULL,
  `vision_content` text NOT NULL,
  `mt_about` text NOT NULL,
  `mk_about` text NOT NULL,
  `md_about` text NOT NULL,
  `gallery_heading` text NOT NULL,
  `mt_gallery` text NOT NULL,
  `mk_gallery` text NOT NULL,
  `md_gallery` text NOT NULL,
  `faq_heading` text NOT NULL,
  `mt_faq` text NOT NULL,
  `mk_faq` text NOT NULL,
  `md_faq` text NOT NULL,
  `service_heading` text NOT NULL,
  `mt_service` text NOT NULL,
  `mk_service` text NOT NULL,
  `md_service` text NOT NULL,
  `portfolio_heading` text NOT NULL,
  `mt_portfolio` text NOT NULL,
  `mk_portfolio` text NOT NULL,
  `md_portfolio` text NOT NULL,
  `testimonial_heading` text NOT NULL,
  `mt_testimonial` text NOT NULL,
  `mk_testimonial` text NOT NULL,
  `md_testimonial` text NOT NULL,
  `news_heading` text NOT NULL,
  `mt_news` text NOT NULL,
  `mk_news` text NOT NULL,
  `md_news` text NOT NULL,
  `contact_heading` text NOT NULL,
  `mt_contact` text NOT NULL,
  `mk_contact` text NOT NULL,
  `md_contact` text NOT NULL,
  `search_heading` text NOT NULL,
  `mt_search` text NOT NULL,
  `mk_search` text NOT NULL,
  `md_search` text NOT NULL,
  `term_heading` text NOT NULL,
  `term_content` text NOT NULL,
  `mt_term` text NOT NULL,
  `mk_term` text NOT NULL,
  `md_term` text NOT NULL,
  `privacy_heading` text NOT NULL,
  `privacy_content` text NOT NULL,
  `mt_privacy` text NOT NULL,
  `mk_privacy` text NOT NULL,
  `md_privacy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `mt_home`, `mk_home`, `md_home`, `about_photo`, `about_heading`, `about_content`, `mission_heading`, `mission_content`, `vision_heading`, `vision_content`, `mt_about`, `mk_about`, `md_about`, `gallery_heading`, `mt_gallery`, `mk_gallery`, `md_gallery`, `faq_heading`, `mt_faq`, `mk_faq`, `md_faq`, `service_heading`, `mt_service`, `mk_service`, `md_service`, `portfolio_heading`, `mt_portfolio`, `mk_portfolio`, `md_portfolio`, `testimonial_heading`, `mt_testimonial`, `mk_testimonial`, `md_testimonial`, `news_heading`, `mt_news`, `mk_news`, `md_news`, `contact_heading`, `mt_contact`, `mk_contact`, `md_contact`, `search_heading`, `mt_search`, `mk_search`, `md_search`, `term_heading`, `term_content`, `mt_term`, `mk_term`, `md_term`, `privacy_heading`, `privacy_content`, `mt_privacy`, `mk_privacy`, `md_privacy`) VALUES
(1, 'ConstructConnect', '', '', '', 'ABOUT US', '<p> Connecting Vision to Reality</p><p>We understand the challenges of finding reliable builders, skilled architects, top-notch material suppliers, and efficient transport contractors. With ConstructConnect, you can now bridge the gap between your dreams and reality by effortlessly connecting with the finest building professionals who will bring your vision to life.</p><p><br></p><p> Simplify Your Construction Experience</p><p>Gone are the days of endless searches and daunting choices. Our platform streamlines the process of discovering and hiring quality professionals. Whether it\'s a residential haven or a commercial masterpiece, we have the right experts for every project. Say goodbye to construction complexities and hello to simplicity.</p><p><br></p><p> Seamless Material Procurement</p><p>No more running around for construction materials. ConstructConnect lets you explore a wide array of trusted material suppliers, making your procurement process a breeze. Your project deserves nothing but the best, and we\'re here to ensure you have access to superior materials with just a few clicks.</p><p><br></p><p>???? Efficient Project Management</p><p>Construction logistics can be overwhelming, but not anymore. Our platform empowers you to manage your construction projects with ease. From timelines to milestones, stay in control every step of the way. We\'re not just building structures; we\'re building confidence in your project management capabilities.</p><p><br></p><p> Secure and Hassle-Free Payments</p><p>Your peace of mind matters to us. That\'s why we\'ve integrated secure payment options, including mobile money and card payments. With ConstructConnect, your financial transactions are as safe as your construction projects. A seamless payment experience is just another way we\'re working to build trust.</p><p><br></p><p> Crafting Nairobi\'s Future, Together</p><p>ConstructConnect is proud to kickstart this journey in the heart of Kenya. As we begin by serving Nairobi and its surroundings, we\'re excited to witness the transformation of this vibrant city. Let\'s collaborate to shape a future where construction is innovative, reliable, and exciting.</p>', 'Mission', 'Your ALL-IN-ONE Building Solution in Nairobi!', 'Vision', 'Make Nairobi Work', 'ConstructConnect', ' ', '', 'GALLERY', 'ConstructConnect', '', '', 'FAQ', 'ConstructConnect', '', '', 'CONNECT TO', 'ConstructConnect', '', '', 'PORTFOLIO', 'ConstructConnect', '', '', 'TESTIMONIAL', 'ConstructConnect', '', '', '', 'ConstructConnect', '', '', 'CONTACT', 'ConstructConnect', '', '', 'SEARCH BY:', 'ConstructConnect', '', '', 'TERMS & CONDITIONS', '<p>Terms and Conditions</p><p><br></p><p>Please read these Terms and Conditions carefully before using the ConstructConnect platform. By accessing or using the platform, you agree to comply with and be bound by these terms. If you do not agree with any part of these terms, please refrain from using the platform.</p><p><br></p><p>1. User Conduct</p><p><br></p><p>1.1. ConstructConnect is intended for use by individuals who are at least 18 years old or the legal age of majority in their jurisdiction.</p><p><br></p><p>1.2. You agree not to use the platform for any unlawful or prohibited purpose. You will not engage in any activity that interferes with or disrupts the functionality of the platform.</p><p><br></p><p>1.3. You are solely responsible for any information or content you provide on the platform. Any use of false, inaccurate, or misleading information may result in account suspension or termination.</p><p><br></p><p>2. User Accounts</p><p><br></p><p>2.1. To access certain features of the platform, you may need to create a user account. You agree to provide accurate and complete information during the registration process.</p><p><br></p><p>2.2. You are responsible for maintaining the confidentiality of your account credentials and for all activities that occur under your account.</p><p><br></p><p>2.3. ConstructConnect reserves the right to suspend or terminate any user account at its sole discretion, without prior notice, if a user violates these terms or engages in any inappropriate behavior.</p><p><br></p><p>3. Content and Intellectual Property</p><p><br></p><p>3.1. The content on the ConstructConnect platform, including text, graphics, images, and logos, is protected by copyright and other intellectual property laws.</p><p><br></p><p>3.2. You may not use, reproduce, modify, or distribute any content from the platform without prior written consent from ConstructConnect.</p><p><br></p><p>4. Third-Party Links</p><p><br></p><p>4.1. The platform may contain links to third-party websites. ConstructConnect does not endorse or control the content of these websites and is not responsible for their availability or accuracy.</p><p><br></p><p>4.2. Any interactions you have with third-party websites are solely between you and the third party.</p><p><br></p><p>5. Disclaimers and Limitation of Liability</p><p><br></p><p>5.1. ConstructConnect provides the platform on an \"as is\" and \"as available\" basis. We make no warranties or representations regarding the accuracy, completeness, or reliability of the content.</p><p><br></p><p>5.2. In no event shall ConstructConnect be liable for any direct, indirect, incidental, special, or consequential damages arising from the use or inability to use the platform.</p><p><br></p><p>6. Privacy</p><p><br></p><p>6.1. Your use of the platform is subject to ConstructConnect\'s Privacy Policy, which can be found here.</p><p><br></p><p>7. Modifications to Terms and Platform</p><p><br></p><p>7.1. ConstructConnect reserves the right to modify, suspend, or terminate the platform or these terms at any time without notice.</p><p><br></p><p>7.2. Continued use of the platform after any changes to these terms constitutes your acceptance of the revised terms.</p><p><br></p><p>8. Governing Law and Jurisdiction</p><p><br></p><p>8.1. These terms are governed by and construed in accordance with the laws of Kenya. Any disputes arising from the use of the platform shall be subject to the exclusive jurisdiction of the courts in Kenya.</p><p><br></p><p>By using the ConstructConnect platform, you acknowledge that you have read and understood these Terms and Conditions and agree to be bound by them.</p><p><br></p><p>Last updated: August 20, 2023</p>', 'ConstructConnect', '', '', 'PRIVACY POLICY', '', 'ConstructConnect', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_partner`
--

CREATE TABLE `tbl_partner` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `photo_id` int(11) NOT NULL,
  `photo_caption` text NOT NULL,
  `photo_name` text NOT NULL,
  `photo_show_home` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_photo`
--

INSERT INTO `tbl_photo` (`photo_id`, `photo_caption`, `photo_name`, `photo_show_home`) VALUES
(9, 'Site', 'photo-9.jpg', 'Yes'),
(10, 'Site 2', 'photo-10.jpg', 'Yes'),
(11, 'Site 3', 'photo-11.jpg', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `client_name` text NOT NULL,
  `client_company` text NOT NULL,
  `start_date` text NOT NULL,
  `end_date` text NOT NULL,
  `website` text NOT NULL,
  `cost` text NOT NULL,
  `client_comment` text NOT NULL,
  `category_id` text NOT NULL,
  `photo` text NOT NULL,
  `banner` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `name`, `short_content`, `content`, `client_name`, `client_company`, `start_date`, `end_date`, `website`, `cost`, `client_comment`, `category_id`, `photo`, `banner`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'SAMUEL KEFA -TOP RATED ARCHITECT 1', 'Experience visionary design with our top-rated architect. Renowned for blending creativity and functionality, they have a proven track record of transforming dreams into architectural marvels.', '<p>Immerse yourself in the world of architectural excellence with our top-rated architect. With years of experience and a penchant for innovation, they have crafted an impressive portfolio that showcases their ability to turn the ordinary into the extraordinary. Known for their attention to detail and mastery in spatial arrangement, they effortlessly balance aesthetics with practicality. Their dedication to understanding your vision and translating it into structures that inspire is evident in each project they undertake. By collaborating with them, you\'re not just building a space – you\'re crafting a legacy.<br></p>', 'Samuel Kefa', 'ConstructConnect', '7-01-10', '2025-03-31', 'http://wwwconstructconnect.com', 'Ksh. 79,000', '\"Working with Kefa was an absolute pleasure. Their ability to capture my ideas and weave them into a stunning design was impressive. The attention to detail and their professionalism throughout the project made the journey smooth and enjoyable.\" - George', '1', 'portfolio-1.JPG', 'portfolio-banner-1.jpg', 'SAMUEL KEFA -TOP RATED ARCHITECT 1', '', ''),
(2, 'KENKIRI SUPPLIERS', 'Discover reliability and quality with Kenkiri, your go-to supplier for construction materials. Their diverse range and commitment to excellence ensure your project gets the materials it deserves.', '<p>Elevate your construction experience with Kenkiri, a leading supplier known for their unwavering dedication to sourcing and delivering top-quality materials. With an extensive catalog encompassing everything from foundational essentials to finishing touches, Kenkiri simplifies the procurement process by providing a one-stop solution for your material needs. Their strict quality control measures and emphasis on sustainability guarantee that your project is backed by nothing but the best. By choosing Kenkiri, you\'re not just acquiring materials – you\'re gaining a partner in construction success.<br></p>', 'KENKIRI', 'KENKIRI LTD', '2019-01-30', '', 'http://www.kenkiri.com', 'Ksh.1,000,000', '\"Kenkiri has been my preferred supplier for years. Their materials are consistently of the highest quality, and their team\'s responsiveness and professionalism make them a pleasure to work with. I wouldn\'t trust anyone else for my construction needs.\" - JohnStones', '2', 'portfolio-2.JPG', 'portfolio-banner-2.jpg', 'Kenkiri Suppliers', '', ''),
(3, 'BACHU TRANSPORT SERVICES', 'Experience efficiency in motion with Bachu Transport Services. Their punctuality, reliability, and expertise ensure that your construction materials reach the right place at the right time.', '<p>Navigate the complex logistics of construction with Bachu Transport Services, a name synonymous with seamless transportation. Whether it\'s hauling heavy machinery or delicate materials, their experienced team ensures safe and timely delivery, saving you the headache of supply chain challenges. With a commitment to optimizing routes and maintaining constant communication, Bachu Transport Services makes the journey of your materials as smooth as the structures they contribute to. Collaborate with them to elevate your construction process, knowing that your resources are in capable hands.<br></p>', 'Drivers', 'Bachu T. Services', '2023-08-20', '', 'http://www.bachu.com', 'Ksh.800,000', '\"Bachu Transport Services has been an integral part of our projects. Their attention to detail, transparent communication, and timely deliveries have made them our trusted transport partners. Their professionalism has been a game-changer for us.\" - Leon', '3', 'portfolio-3.JPG', 'portfolio-banner-3.jpg', 'Machu Transport Services', '', ''),
(4, 'CROWN PAINTS SUPPLIERS', 'Unleash creativity with Crown Paints, the preferred choice for premium paint solutions. From vivid colors to lasting finishes, they transform spaces into works of art.', '<p>Experience the magic of color and innovation with Crown Paints, a leading name in the world of paint solutions. With a history of excellence and a commitment to pushing the boundaries of paint technology, Crown Paints offers a wide array of shades and finishes that cater to your every design whim. From eco-friendly options that respect the environment to durable formulations that stand the test of time, their paints are not just about aesthetics but about creating an ambiance that speaks volumes. Choosing Crown Paints means you\'re not just painting walls – you\'re adding life and personality to your spaces.<br></p>', 'CP', 'Crown Paints', '2023-08-20', '', 'http://www.abc.com', 'Ksh. 2,000,000', '\"Crown Paints has been my go-to for all my painting projects. Their range of colors and finishes is unmatched, and the quality of their paints is superb. My spaces always come alive with Crown Paints, and their customer service is exceptional.\" - RosaMystica', '2', 'portfolio-4.jpg', 'portfolio-banner-4.jpg', 'CROWN PAINTS SUPPLIERS', '', ''),
(5, 'JAMES MUCHIRI - SECOND RATED ARCHITECTURE 2', 'Elevate your project with our top-rated architect. Their unique design approach and commitment to innovation will bring your vision to life in ways you never imagined.', '<p>Step into the world of architectural transformation with our top-rated architect. Their signature design philosophy revolves around pushing boundaries and exploring the uncharted territory of architectural expression. With a portfolio that boasts bold and unconventional designs, they have consistently amazed clients by translating their abstract ideas into tangible, awe-inspiring structures. From sustainable designs that blend seamlessly with the environment to contemporary creations that challenge conventions, their portfolio reflects a deep-rooted passion for design evolution. By collaborating with them, you\'re not just building a structure – you\'re initiating a conversation between space and art.</p><p><br></p><p><br></p><p><br></p><p><br></p>', 'James Muchiri', 'ConstructConnect', '2023-08-20', '1912-01-29', 'http://www.constructconnect.com', 'Ksh. 69,000', '\"I was blown away by James\'s innovative design for my project. They listened attentively to my vision and added their unique touch to create something truly extraordinary. The result exceeded my expectations.\" - Chair NMS', '1', 'portfolio-5.JPG', 'portfolio-banner-5.jpg', 'JAMES MUCHIRI - SECOND RATED ARCHITECTURE 2', '', ''),
(6, 'SPEEDY MOVERS', 'Embrace efficiency with Speedy Movers, your ally in construction logistics. Their streamlined approach and commitment to on-time deliveries keep your projects moving forward.', '<p>Embodying their name, Speedy Movers transforms construction logistics into a well-orchestrated dance. With a dedication to rapid and reliable transportation, they ensure that your materials and equipment reach their destination with minimal delays. Their fleet of modern vehicles and experienced drivers navigate urban challenges and rural terrains with equal ease, offering you a partner who understands the importance of momentum in construction. By choosing Speedy Movers, you\'re not just transporting goods – you\'re expediting your project\'s progress.<br></p>', 'XDrivers', 'Movers', '10-08-13', '', 'http://www.tesla.com', 'Ksh. 400,000', '\"Speedy Movers lives up to their name. They have consistently delivered materials promptly, allowing us to maintain our project timelines. Their commitment to punctuality and professionalism has made them an essential part of our construction process.\" - XTeam', '3', 'portfolio-6.JPG', 'portfolio-banner-6.jpg', 'SPEEDY MOVERS', '', ''),
(7, 'NAIROBI HARDWARE', 'We are located in Nairobi only for now till Dec 2023.', '<p>Contact details: phone 07111111111</p><p>Email: nai@gmail.com</p>', 'NaiHardware', 'NaiHardware', '2023-08-21', '', '', '', '', '1', 'portfolio-7.JPG', 'portfolio-banner-7.JPG', 'Suppliers', '', ''),
(8, 'Eng. SAMUEL', 'bbsxbusbxubaubxuiab', '<p>iubb</p><p>contacts&nbsp;</p><p>emails</p><p>located</p>', 'Constructconnect', 'Constructconnect', '2023-08-21', '', '', '', 'I know his work is good. - John', '4', 'portfolio-8.JPG', 'portfolio-banner-8.JPG', 'Engineers', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_category`
--

CREATE TABLE `tbl_portfolio_category` (
  `category_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_portfolio_category`
--

INSERT INTO `tbl_portfolio_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Architects', 'Active'),
(2, 'Suppliers', 'Active'),
(3, 'Transporters', 'Active'),
(4, 'Engineers', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_photo`
--

CREATE TABLE `tbl_portfolio_photo` (
  `id` int(11) NOT NULL,
  `portfolio_id` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_portfolio_photo`
--

INSERT INTO `tbl_portfolio_photo` (`id`, `portfolio_id`, `photo`) VALUES
(18, 4, '18.jpg'),
(19, 7, '19.JPG'),
(20, 8, '20.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `heading` text NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `photo` text NOT NULL,
  `banner` text NOT NULL,
  `meta_title` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `heading`, `short_content`, `content`, `photo`, `banner`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'ARCHITECTS', 'Visionaries of space and design, our architects craft innovative blueprints that turn your dreams into architectural reality.', '<p>Immerse yourself in the world of architectural creativity. Our team of architects doesn\'t just design structures; they craft narratives through space, blending aesthetics with functionality. With an eye for detail and a passion for innovation, our architects listen to your aspirations and transform them into blueprints that captivate the imagination. Learn more about their portfolio of visionary projects and discover how they can bring your dream space to life.<br></p>', 'service-1.JPG', 'service-banner-1.jpg', 'Architect', '', ''),
(2, 'SUPPLIER', 'Reliability meets variety – our trusted suppliers provide a diverse range of construction materials, ensuring quality and choice for your projects.', '<p>Diving deeper into construction materials, our network of suppliers forms the backbone of quality assurance. From foundational elements to finishing touches, they curate a comprehensive range of materials to suit your unique project requirements. Explore their offerings and gain insights into the sourcing, quality control, and sustainability measures they undertake, ensuring your construction journey is backed by the best in the industry.<br></p>', 'service-2.JPG', 'service-banner-2.JPG', 'Industry Training', '', ''),
(3, 'TRANSPORTER', 'Efficiency in motion – our skilled transporters ensure seamless logistics, delivering materials and equipment precisely where they\'re needed.', '<p>Uncover the logistics mastery behind every successful construction project. Our transporters are the unsung heroes who ensure the timely and precise movement of essential resources. Delve into their strategies for optimizing routes, handling delicate cargo, and maintaining reliability, as they keep your project on track through the intricate dance of supply and demand.<br></p>', 'service-3.JPG', 'service-banner-3.JPG', 'Transporter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `logo_admin` text NOT NULL,
  `favicon` text NOT NULL,
  `counter_bg` text NOT NULL,
  `login_bg` text NOT NULL,
  `footer_copyright` text NOT NULL,
  `footer_address` text NOT NULL,
  `footer_phone` text NOT NULL,
  `footer_working_hour` text NOT NULL,
  `footer_address_icon` text NOT NULL,
  `footer_phone_icon` text NOT NULL,
  `footer_working_hour_icon` text NOT NULL,
  `footer_about` text NOT NULL,
  `top_bar_email` text NOT NULL,
  `top_bar_phone` text NOT NULL,
  `contact_map_iframe` text NOT NULL,
  `send_email_from` text NOT NULL,
  `receive_email_to` text NOT NULL,
  `smtp_host` text NOT NULL,
  `smtp_port` text NOT NULL,
  `smtp_username` text NOT NULL,
  `smtp_password` text NOT NULL,
  `total_recent_post` int(11) NOT NULL,
  `total_popular_post` int(11) NOT NULL,
  `total_recent_post_home` int(11) NOT NULL,
  `theme_color_1` text NOT NULL,
  `theme_color_2` text NOT NULL,
  `counter1_text` text NOT NULL,
  `counter1_value` int(11) NOT NULL,
  `counter2_text` text NOT NULL,
  `counter2_value` int(11) NOT NULL,
  `counter3_text` text NOT NULL,
  `counter3_value` int(11) NOT NULL,
  `counter4_text` text NOT NULL,
  `counter4_value` int(11) NOT NULL,
  `counter_status` text NOT NULL,
  `banner_about` text NOT NULL,
  `banner_faq` text NOT NULL,
  `banner_gallery` text NOT NULL,
  `banner_service` text NOT NULL,
  `banner_portfolio` text NOT NULL,
  `banner_testimonial` text NOT NULL,
  `banner_news` text NOT NULL,
  `banner_contact` text NOT NULL,
  `banner_search` text NOT NULL,
  `banner_category` text NOT NULL,
  `banner_terms` text NOT NULL,
  `banner_privacy` text NOT NULL,
  `why_choose_title` text NOT NULL,
  `why_choose_subtitle` text NOT NULL,
  `why_choose_status` text NOT NULL,
  `service_title` text NOT NULL,
  `service_subtitle` text NOT NULL,
  `service_status` text NOT NULL,
  `portfolio_title` text NOT NULL,
  `portfolio_subtitle` text NOT NULL,
  `portfolio_status` text NOT NULL,
  `team_title` text NOT NULL,
  `team_subtitle` text NOT NULL,
  `team_status` text NOT NULL,
  `testimonial_title` text NOT NULL,
  `testimonial_subtitle` text NOT NULL,
  `testimonial_status` text NOT NULL,
  `faq_title` text NOT NULL,
  `faq_subtitle` text NOT NULL,
  `faq_status` text NOT NULL,
  `gallery_title` text NOT NULL,
  `gallery_subtitle` text NOT NULL,
  `gallery_status` text NOT NULL,
  `recent_post_title` text NOT NULL,
  `recent_post_subtitle` text NOT NULL,
  `recent_post_status` text NOT NULL,
  `partner_title` text NOT NULL,
  `partner_subtitle` text NOT NULL,
  `partner_status` text NOT NULL,
  `preloader_status` text NOT NULL,
  `tawk_live_chat_code` text NOT NULL,
  `tawk_live_chat_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `logo_admin`, `favicon`, `counter_bg`, `login_bg`, `footer_copyright`, `footer_address`, `footer_phone`, `footer_working_hour`, `footer_address_icon`, `footer_phone_icon`, `footer_working_hour_icon`, `footer_about`, `top_bar_email`, `top_bar_phone`, `contact_map_iframe`, `send_email_from`, `receive_email_to`, `smtp_host`, `smtp_port`, `smtp_username`, `smtp_password`, `total_recent_post`, `total_popular_post`, `total_recent_post_home`, `theme_color_1`, `theme_color_2`, `counter1_text`, `counter1_value`, `counter2_text`, `counter2_value`, `counter3_text`, `counter3_value`, `counter4_text`, `counter4_value`, `counter_status`, `banner_about`, `banner_faq`, `banner_gallery`, `banner_service`, `banner_portfolio`, `banner_testimonial`, `banner_news`, `banner_contact`, `banner_search`, `banner_category`, `banner_terms`, `banner_privacy`, `why_choose_title`, `why_choose_subtitle`, `why_choose_status`, `service_title`, `service_subtitle`, `service_status`, `portfolio_title`, `portfolio_subtitle`, `portfolio_status`, `team_title`, `team_subtitle`, `team_status`, `testimonial_title`, `testimonial_subtitle`, `testimonial_status`, `faq_title`, `faq_subtitle`, `faq_status`, `gallery_title`, `gallery_subtitle`, `gallery_status`, `recent_post_title`, `recent_post_subtitle`, `recent_post_status`, `partner_title`, `partner_subtitle`, `partner_status`, `preloader_status`, `tawk_live_chat_code`, `tawk_live_chat_status`) VALUES
(1, 'logo.png', 'logo_admin.png', 'favicon.png', 'counter_bg.jpg', 'login_bg.jpg', 'All Rights Reserved. ConstructConnect 2023', 'Nairobi', '+254 725 247100', 'Monday-Friday (8:00 AM - 5:00 PM)', 'footer_address_icon.png', 'footer_phone_icon.png', 'footer_working_hour_icon.png', '', 'Kefa.Kioge@ke.ey.com', '+254 725 247100', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84040262736!2d-74.25819605476612!3d40.70583158628177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1485712851643\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'Kefa.Kioge@ke.ey.com', 'Kefa.Kioge@ke.ey.com', 'sandbox.smtp.mailtrap.io', '2525', 'kioge', 'kioge123', 0, 0, 0, '13233B', '007BFF', 'Working Persons', 15, 'Projects Completed', 100, 'Happy Clients', 100, 'Awards Achieved', 100, 'Show', 'banner_about.jpg', 'banner_faq.jpg', 'banner_gallery.jpg', 'banner_service.jpg', 'banner_portfolio.jpg', 'banner_testimonial.jpg', 'banner_news.jpg', 'banner_contact.jpg', 'banner_search.jpg', 'banner_category.jpg', 'banner_terms.jpg', 'banner_privacy.jpg', 'WHY CHOOSE US', '', 'Hide', 'SERVICES', 'Will be available to keep you connected', 'Show', 'CONSTRUCTCONNECT NETWORK', 'Stay in touch with your team', 'Show', 'EXPERIENCED TEAM', '', 'Hide', 'WHAT OUR CLIENTS SAY', '', 'Hide', 'Have Some Questions?', 'Click on the Frequently asked Question to see response', 'Show', 'PHOTO GALLERY', '', 'Hide', 'RECENT POSTS', '', 'Hide', 'OUR PARTNERS', '', 'Hide', 'Off', '', 'Off');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `heading` text NOT NULL,
  `content` text NOT NULL,
  `button1_text` text NOT NULL,
  `button1_url` text NOT NULL,
  `button2_text` text NOT NULL,
  `button2_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `photo`, `heading`, `content`, `button1_text`, `button1_url`, `button2_text`, `button2_url`) VALUES
(1, 'slider-1.jpg', 'WELCOME TO CONSTRUCTCONNECT – YOUR ULTIMATE BUILDING SOLUTION IN NAIROBI!', 'Embarking on a construction journey? Looking to renovate your space? You\'ve come to the right place! ConstructConnect is your one-stop platform designed to revolutionize the way you build and transform properties in Nairobi and its surroundings.', 'Contact Mr. Kefa', 'https://wa.me/254725247100', '', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int(11) NOT NULL,
  `social_name` text NOT NULL,
  `social_url` text NOT NULL,
  `social_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member`
--

CREATE TABLE `tbl_team_member` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation_id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `linkedin` text NOT NULL,
  `youtube` text NOT NULL,
  `google_plus` text NOT NULL,
  `instagram` text NOT NULL,
  `flickr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `designation` text NOT NULL,
  `company` text NOT NULL,
  `photo` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial_photo`
--

CREATE TABLE `tbl_testimonial_photo` (
  `id` int(11) NOT NULL,
  `main_photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_testimonial_photo`
--

INSERT INTO `tbl_testimonial_photo` (`id`, `main_photo`) VALUES
(1, 'testimonial-main-photo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `full_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `photo` text NOT NULL,
  `role` text NOT NULL,
  `status` text NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `email`, `phone`, `password`, `photo`, `role`, `status`, `token`) VALUES
(1, 'Mr Kefa Kioge', 'kefa@gmail.com', '+254 725 247100', 'fa2ef5fd204593be0e4bec977fb593e8', 'user-1.JPG', 'Admin', 'Active', '6efb2bd15e40687ec2afedec43dffdd1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_why_choose`
--

CREATE TABLE `tbl_why_choose` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `heading` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_why_choose_photo`
--

CREATE TABLE `tbl_why_choose_photo` (
  `id` int(11) NOT NULL,
  `main_photo` text NOT NULL,
  `item_bg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_why_choose_photo`
--

INSERT INTO `tbl_why_choose_photo` (`id`, `main_photo`, `item_bg`) VALUES
(1, 'why-choose-main-photo.JPG', 'why-choose-item-bg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_faq_photo`
--
ALTER TABLE `tbl_faq_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_news_category`
--
ALTER TABLE `tbl_news_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_portfolio_category`
--
ALTER TABLE `tbl_portfolio_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_portfolio_photo`
--
ALTER TABLE `tbl_portfolio_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial_photo`
--
ALTER TABLE `tbl_testimonial_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_why_choose`
--
ALTER TABLE `tbl_why_choose`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_why_choose_photo`
--
ALTER TABLE `tbl_why_choose_photo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_faq_photo`
--
ALTER TABLE `tbl_faq_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_news_category`
--
ALTER TABLE `tbl_news_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_partner`
--
ALTER TABLE `tbl_partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_portfolio_category`
--
ALTER TABLE `tbl_portfolio_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_portfolio_photo`
--
ALTER TABLE `tbl_portfolio_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_testimonial_photo`
--
ALTER TABLE `tbl_testimonial_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_why_choose`
--
ALTER TABLE `tbl_why_choose`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_why_choose_photo`
--
ALTER TABLE `tbl_why_choose_photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
