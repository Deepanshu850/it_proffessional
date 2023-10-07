-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 07, 2023 at 02:43 AM
-- Server version: 8.0.34
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training_deepanshu_assessment_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int NOT NULL,
  `description` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`) VALUES
(1, '<!-- ======= About Section ======= -->\r\n<h2>Anbout&nbsp;</h2>\r\n\r\n<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>\r\n\r\n<p><img alt=\"\" src=\"assets/img/about.jpg\" /></p>\r\n\r\n<h3>Illustrator &amp; UI/UX Designer</h3>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\r\n\r\n<ul>\r\n	<li><strong>Birthday:</strong> 1 May 1995</li>\r\n	<li><strong>Website:</strong> www.example.com</li>\r\n	<li><strong>Phone:</strong> +123 456 7890</li>\r\n	<li><strong>City:</strong> City : New York, USA</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li><strong>Age:</strong> 30</li>\r\n	<li><strong>Degree:</strong> Master</li>\r\n	<li><strong>PhEmailone:</strong> email@example.com</li>\r\n	<li><strong>Freelance:</strong> Available</li>\r\n</ul>\r\n\r\n<p>Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis. Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.</p>\r\n<!-- End About Section --><!-- ======= Skills Section ======= -->\r\n\r\n<h2>Skills</h2>\r\n\r\n<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>\r\n\r\n<p>HTML <em>100%</em></p>\r\n\r\n<p>CSS <em>90%</em></p>\r\n\r\n<p>JavaScript <em>75%</em></p>\r\n\r\n<p>PHP <em>80%</em></p>\r\n\r\n<p>WordPress/CMS <em>90%</em></p>\r\n\r\n<p>Photoshop <em>55%</em></p>\r\n<!-- End Skills Section --><!-- ======= Facts Section ======= -->\r\n\r\n<h2>Facts</h2>\r\n\r\n<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>\r\n\r\n<p>Clients</p>\r\n\r\n<p>Projects</p>\r\n\r\n<p>Hours Of Support</p>\r\n\r\n<p>Hard Workers</p>\r\n<!-- End Facts Section --><!-- ======= Testimonials Section ======= -->\r\n\r\n<h2>Testimonials</h2>\r\n\r\n<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>\r\n\r\n<p><img alt=\"\" src=\"assets/img/testimonials/testimonials-1.jpg\" /></p>\r\n\r\n<h3>Saul Goodman</h3>\r\n\r\n<p>Ceo &amp; Founder</p>\r\n\r\n<p>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.</p>\r\n<!-- End testimonial item -->\r\n\r\n<p><img alt=\"\" src=\"assets/img/testimonials/testimonials-2.jpg\" /></p>\r\n\r\n<h3>Sara Wilsson</h3>\r\n\r\n<p>Designer</p>\r\n\r\n<p>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</p>\r\n<!-- End testimonial item -->\r\n\r\n<p><img alt=\"\" src=\"assets/img/testimonials/testimonials-3.jpg\" /></p>\r\n\r\n<h3>Jena Karlis</h3>\r\n\r\n<p>Store Owner</p>\r\n\r\n<p>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.</p>\r\n<!-- End testimonial item -->\r\n\r\n<p><img alt=\"\" src=\"assets/img/testimonials/testimonials-4.jpg\" /></p>\r\n\r\n<h3>Matt Brandon</h3>\r\n\r\n<p>Freelancer</p>\r\n\r\n<p>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</p>\r\n<!-- End testimonial item -->\r\n\r\n<p><img alt=\"\" src=\"assets/img/testimonials/testimonials-5.jpg\" /></p>\r\n\r\n<h3>John Larson</h3>\r\n\r\n<p>Entrepreneur</p>\r\n\r\n<p>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</p>\r\n<!-- End testimonial item --><!-- End Testimonials Section -->');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int NOT NULL,
  `Page_type` tinyint DEFAULT NULL,
  `Image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Description` text COLLATE utf8mb4_general_ci,
  `Type` tinyint DEFAULT '1',
  `Status` tinyint DEFAULT '1',
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Is_deleted` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `Page_type`, `Image`, `Title`, `Description`, `Type`, `Status`, `Created_at`, `Updated_at`, `Is_deleted`) VALUES
(21, 0, '1689756753_8440.jpg', 'Deppanshu', 'uyg', 0, 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `status` tinyint DEFAULT '1' COMMENT '1: active; 0: inactive',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint DEFAULT '0' COMMENT '1: yes; 0: no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(1, ' deepanshu ', ' kujhfuy ', 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_general_ci,
  `phone` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` tinyint DEFAULT '1' COMMENT '1: active; 0: inactive',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint DEFAULT '0' COMMENT '1: yes; 0: no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `address`, `phone`, `status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(161, ' rzzr ', ' jhygchc ', '9599840723', 1, NULL, NULL, 0),
(166, ' deepanshu kumar ', ' harayana ', ' 09599840723 ', 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `con`
--

CREATE TABLE `con` (
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `header_settings`
--

CREATE TABLE `header_settings` (
  `id` int NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `contact` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Address` text COLLATE utf8mb4_general_ci,
  `Status` tinyint DEFAULT '1',
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Is_deleted` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header_settings`
--

INSERT INTO `header_settings` (`id`, `image`, `Title`, `email`, `contact`, `Address`, `Status`, `Created_at`, `Updated_at`, `Is_deleted`) VALUES
(2, '1688711508_7736.png', 'W3 care ', 'deepuanshu123as@gmail.com', '9599840723', 'jaipur(rajasthan) india', 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `category_id` int DEFAULT NULL,
  `client_id` int DEFAULT NULL,
  `hour` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` tinyint DEFAULT '1' COMMENT '1: active; 0: inactive',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint DEFAULT '0' COMMENT '1: yes; 0: no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `description`, `category_id`, `client_id`, `hour`, `image`, `status`, `created_at`, `updated_at`, `is_deleted`) VALUES
(10, 'project', 'hg', 1, 1, 1.00, '1688724667_9717.jpg', 1, NULL, NULL, 0),
(11, 'peoject', 'ytcyt', 1, 1, 1.00, '1688724711_2387.jpg', 1, NULL, NULL, 0),
(28, 'deepanshu', 'fdxfdx', 1, 1, 1.00, '1691386491_1292.jpg', 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `id` int NOT NULL,
  `description` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `description`) VALUES
(1, '<!-- ======= Resume Section ======= -->\n<h2>Reusume</h2>\n\n<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>\n\n<h3>Sumary</h3>\n\n<p>Alice Barkley</p>\n\n<p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li>Portland par 127,Orlando, FL</li>\n	<li>(123) 456-7891</li>\n	<li>alice.barkley@example.com</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<h3>Education</h3>\n\n<p>Master of Fine Arts &amp; Graphic Design</p>\n\n<p>2015 - 2016</p>\n\n<p><em>Rochester Institute of Technology, Rochester, NY</em></p>\n\n<p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>\n\n<p>Bachelor of Fine Arts &amp; Graphic Design</p>\n\n<p>2010 - 2014</p>\n\n<p><em>Rochester Institute of Technology, Rochester, NY</em></p>\n\n<p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>\n\n<h3>Professional Experience</h3>\n\n<p>Senior graphic design specialist</p>\n\n<p>2019 - Present</p>\n\n<p><em>Experion, New York, NY </em></p>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>\n	<li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.</li>\n	<li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>\n	<li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p>Graphic design specialist</p>\n\n<p>2017 - 2018</p>\n\n<p><em>Stepping Stone Advertising, New York, NY</em></p>\n\n<p>&nbsp;</p>\n\n<ul>\n	<li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>\n	<li>Managed up to 5 projects or tasks at a given time while under pressure</li>\n	<li>Recommended and consulted with clients on the most appropriate graphic design</li>\n	<li>Created 4+ design presentations and proposals a month for clients and account managers</li>\n</ul>\n\n<p>&nbsp;</p>\n<!-- End Resume Section --><!-- End #main -->'),
(2, '[ <!-- ======= Resume Section ======= -->\r\n    <section id=\"resume\" class=\"resume\">\r\n      <div class=\"container\" data-aos=\"fade-up\">\r\n\r\n        <div class=\"section-title\">\r\n          <h2>Resume</h2>\r\n          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>\r\n        </div>\r\n\r\n        <div class=\"row\">\r\n          <div class=\"col-lg-6\">\r\n            <h3 class=\"resume-title\">Sumary</h3>\r\n            <div class=\"resume-item pb-0\">\r\n              <h4>Alice Barkley</h4>\r\n              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>\r\n              <p>\r\n              <ul>\r\n                <li>Portland par 127,Orlando, FL</li>\r\n                <li>(123) 456-7891</li>\r\n                <li>alice.barkley@example.com</li>\r\n              </ul>\r\n              </p>\r\n            </div>\r\n\r\n            <h3 class=\"resume-title\">Education</h3>\r\n            <div class=\"resume-item\">\r\n              <h4>Master of Fine Arts &amp; Graphic Design</h4>\r\n              <h5>2015 - 2016</h5>\r\n              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>\r\n              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>\r\n            </div>\r\n            <div class=\"resume-item\">\r\n              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>\r\n              <h5>2010 - 2014</h5>\r\n              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>\r\n              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>\r\n            </div>\r\n          </div>\r\n          <div class=\"col-lg-6\">\r\n            <h3 class=\"resume-title\">Professional Experience</h3>\r\n            <div class=\"resume-item\">\r\n              <h4>Senior graphic design specialist</h4>\r\n              <h5>2019 - Present</h5>\r\n              <p><em>Experion, New York, NY </em></p>\r\n              <p>\r\n              <ul>\r\n                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>\r\n                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>\r\n                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>\r\n                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>\r\n              </ul>\r\n              </p>\r\n            </div>\r\n            <div class=\"resume-item\">\r\n              <h4>Graphic design specialist</h4>\r\n              <h5>2017 - 2018</h5>\r\n              <p><em>Stepping Stone Advertising, New York, NY</em></p>\r\n              <p>\r\n              <ul>\r\n                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>\r\n                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>\r\n                <li>Recommended and consulted with clients on the most appropriate graphic design</li>\r\n                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>\r\n              </ul>\r\n              </p>\r\n            </div>\r\n          </div>\r\n        </div>\r\n\r\n      </div>\r\n    </section><!-- End Resume Section -->]'),
(3, '[<h2>Resume</h2>\r\n          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>\r\n        </div>\r\n\r\n        <div class=\"row\">\r\n          <div class=\"col-lg-6\">\r\n            <h3 class=\"resume-title\">Sumary</h3>\r\n            <div class=\"resume-item pb-0\">\r\n              <h4>Alice Barkley</h4>\r\n              <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em></p>\r\n              <p>\r\n              <ul>\r\n                <li>Portland par 127,Orlando, FL</li>\r\n                <li>(123) 456-7891</li>\r\n                <li>alice.barkley@example.com</li>\r\n              </ul>\r\n              </p>\r\n            </div>\r\n\r\n            <h3 class=\"resume-title\">Education</h3>\r\n            <div class=\"resume-item\">\r\n              <h4>Master of Fine Arts &amp; Graphic Design</h4>\r\n              <h5>2015 - 2016</h5>\r\n              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>\r\n              <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>\r\n            </div>\r\n            <div class=\"resume-item\">\r\n              <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>\r\n              <h5>2010 - 2014</h5>\r\n              <p><em>Rochester Institute of Technology, Rochester, NY</em></p>\r\n              <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius vel ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae consequatur neque etlon sader mart dila</p>\r\n            </div>\r\n          </div>\r\n          <div class=\"col-lg-6\">\r\n            <h3 class=\"resume-title\">Professional Experience</h3>\r\n            <div class=\"resume-item\">\r\n              <h4>Senior graphic design specialist</h4>\r\n              <h5>2019 - Present</h5>\r\n              <p><em>Experion, New York, NY </em></p>\r\n              <p>\r\n              <ul>\r\n                <li>Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li>\r\n                <li>Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project. </li>\r\n                <li>Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li>\r\n                <li>Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li>\r\n              </ul>\r\n              </p>\r\n            </div>\r\n            <div class=\"resume-item\">\r\n              <h4>Graphic design specialist</h4>\r\n              <h5>2017 - 2018</h5>\r\n              <p><em>Stepping Stone Advertising, New York, NY</em></p>\r\n              <p>\r\n              <ul>\r\n                <li>Developed numerous marketing programs (logos, brochures,infographics, presentations, and advertisements).</li>\r\n                <li>Managed up to 5 projects or tasks at a given time while under pressure</li>\r\n                <li>Recommended and consulted with clients on the most appropriate graphic design</li>\r\n                <li>Created 4+ design presentations and proposals a month for clients and account managers</li>\r\n              </ul>]');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int NOT NULL,
  `description` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `description`) VALUES
(1, '<h2>Servvices</h2>\r\n\r\n<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"\">Lorem Ipsum</a></p>\r\n\r\n<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"\">Sed Perspiciatis</a></p>\r\n\r\n<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"\">Magni Dolores</a></p>\r\n\r\n<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"\">Nemo Enim</a></p>\r\n\r\n<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"\">Dele Cardo</a></p>\r\n\r\n<p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"\">Divera Don</a></p>\r\n\r\n<p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>\r\n<!-- End Services Section -->');

-- --------------------------------------------------------

--
-- Table structure for table `social_media_settings`
--

CREATE TABLE `social_media_settings` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Url` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Description` text COLLATE utf8mb4_general_ci,
  `Status` tinyint DEFAULT '1',
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Is_deleted` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social_media_settings`
--

INSERT INTO `social_media_settings` (`id`, `name`, `Url`, `image`, `Description`, `Status`, `Created_at`, `Updated_at`, `Is_deleted`) VALUES
(2, 'deepanshu', '', '1689066929_6536.jpg', 'hi', 1, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `static_pages`
--

CREATE TABLE `static_pages` (
  `id` int NOT NULL,
  `Page_type` tinyint DEFAULT NULL,
  `Title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `Description` text COLLATE utf8mb4_general_ci,
  `Status` tinyint DEFAULT '1',
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Is_deleted` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mobile` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text COLLATE utf8mb4_general_ci,
  `city` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pin_code` int DEFAULT NULL,
  `last_login_time` datetime DEFAULT NULL,
  `status` tinyint DEFAULT '1' COMMENT '1:active;0:inactive',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_deleted` tinyint DEFAULT '0' COMMENT '1:yes;0:no',
  `reset_token_hash` varchar(64) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `dob`, `address`, `city`, `state`, `country`, `pin_code`, `last_login_time`, `status`, `created_at`, `updated_at`, `is_deleted`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(1, 'Deepanshu', 'dipanshu23kumar@gmail.com', 'Dgpampgt@123', '9599840723', '0044-04-04', '444', 'jaipur', 'raj', 'india', 444444, NULL, 1, NULL, NULL, 0, 'b35b999c40d446e768b370ed2dec60c6dfc44e8917e19aef7531d5c1f9a15422', '2023-08-02 11:31:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `con`
--
ALTER TABLE `con`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_settings`
--
ALTER TABLE `header_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `social_media_settings`
--
ALTER TABLE `social_media_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `static_pages`
--
ALTER TABLE `static_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `con`
--
ALTER TABLE `con`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header_settings`
--
ALTER TABLE `header_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media_settings`
--
ALTER TABLE `social_media_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `static_pages`
--
ALTER TABLE `static_pages`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
