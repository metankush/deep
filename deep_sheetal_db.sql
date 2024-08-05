-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2024 at 06:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deep_sheetal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_enq_tbl`
--

CREATE TABLE `contact_us_enq_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone_no` bigint(11) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` varchar(2222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us_enq_tbl`
--

INSERT INTO `contact_us_enq_tbl` (`id`, `name`, `email`, `phone_no`, `subject`, `message`, `date`) VALUES
(1, 'Abhinay Kumar Kumar', 'abhinaysrani@gmail.com', 8319765459, 'my change domain', 'Hi', '2024-08-02 09:57:47'),
(2, 'Abhinay Kumar Kumar', 'abhinaysrani@gmail.com', 7666235653, 'my change domain', 'gg', '2024-08-02 12:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `document_tbl`
--

CREATE TABLE `document_tbl` (
  `id` int(11) NOT NULL,
  `document_name` varchar(555) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `document_tbl`
--

INSERT INTO `document_tbl` (`id`, `document_name`, `photo`, `status`) VALUES
(1, 'Pan Card', '1722424358-4813-Order List.pdf', 1),
(2, 'ISO Certificate', '1722424380-7882-Order List.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_tbl`
--

CREATE TABLE `enquiry_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone_no` bigint(11) NOT NULL,
  `address` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry_tbl`
--

INSERT INTO `enquiry_tbl` (`id`, `name`, `email`, `phone_no`, `address`, `date`) VALUES
(1, 'Abhinay Kumar Kumar', 'abhinaysrani@gmail.com', 7666235653, 'Amarpur\r\nPatna', '2024-08-03 09:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_tbl`
--

CREATE TABLE `gallery_tbl` (
  `id` int(11) NOT NULL,
  `category_id` varchar(111) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_tbl`
--

INSERT INTO `gallery_tbl` (`id`, `category_id`, `photo`, `status`) VALUES
(1, '1', '1722493515-5386-featured-thumb-01.png', 1),
(2, '1', '1722493525-8998-featured-thumb-02.png', 1),
(3, '1', '1722493535-1012-featured-thumb-03.png', 1),
(4, '1', '1722493579-1437-featured-thumb-04.png', 1),
(5, '1', '1722493589-6070-featured-thumb-05.png', 1),
(6, '1', '1722493599-8244-featured-thumb-06.png', 1),
(7, '2', '1722493666-3122-featured-thumb-07.png', 1),
(8, '2', '1722493677-6663-featured-thumb-08.png', 1),
(9, '2', '1722493690-3915-featured-thumb-09.png', 1),
(10, '2', '1722493707-2598-featured-thumb-10.png', 1),
(11, '2', '1722493764-9736-featured-thumb-11.png', 1),
(12, '2', '1722493780-6870-featured-thumb-12.png', 1),
(13, '3', '1722493794-5828-featured-thumb-13.png', 1),
(14, '3', '1722493805-1347-featured-thumb-14.png', 1),
(15, '3', '1722493816-6353-featured-thumb-15.png', 1),
(16, '1', '1722598890-7895-banner-thumb-02.png', 1),
(17, '4', '1722598932-6970-banner-thumb-01.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photo_category_tbl`
--

CREATE TABLE `photo_category_tbl` (
  `id` int(11) NOT NULL,
  `category_name` varchar(222) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_category_tbl`
--

INSERT INTO `photo_category_tbl` (`id`, `category_name`, `photo`, `status`) VALUES
(1, 'Projects 1', '1722492336-8946-gallery-01.png', 1),
(2, 'Projects 2', '1722492395-3862-gallery-02.png', 1),
(3, 'Projects 3', '1722492417-3675-gallery-03.png', 1),
(4, 'Project 4', '1722598907-2129-banner-thumb-04.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_area_tbl`
--

CREATE TABLE `project_area_tbl` (
  `id` int(11) NOT NULL,
  `area_name` varchar(222) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_area_tbl`
--

INSERT INTO `project_area_tbl` (`id`, `area_name`, `status`) VALUES
(1, 'Patna', 1),
(2, 'Danapur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `project_category_tbl`
--

CREATE TABLE `project_category_tbl` (
  `id` int(11) NOT NULL,
  `project_cate_name` varchar(555) NOT NULL,
  `icon` varchar(222) NOT NULL,
  `description` varchar(2222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_category_tbl`
--

INSERT INTO `project_category_tbl` (`id`, `project_cate_name`, `icon`, `description`) VALUES
(1, 'Residential', 'icon-buy-home', 'Investing in residential property cabln be a great way to earn long-term gains.'),
(2, 'Commercial', 'icon-urban', 'Their ability to provide a large space for various business needs.');

-- --------------------------------------------------------

--
-- Table structure for table `project_certificate_tbl`
--

CREATE TABLE `project_certificate_tbl` (
  `id` int(11) NOT NULL,
  `category_id` int(222) NOT NULL,
  `subcategory_id` int(222) NOT NULL,
  `project_id` int(222) NOT NULL,
  `certificate_name` varchar(222) NOT NULL,
  `photo` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_certificate_tbl`
--

INSERT INTO `project_certificate_tbl` (`id`, `category_id`, `subcategory_id`, `project_id`, `certificate_name`, `photo`) VALUES
(1, 1, 1, 1, 'ISO Certificate	', '1722599760-6900-Order List.pdf'),
(2, 1, 1, 1, 'xy', '1722600064-7114-Order List.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `project_gallery_tbl`
--

CREATE TABLE `project_gallery_tbl` (
  `id` int(11) NOT NULL,
  `category_id` int(222) NOT NULL,
  `subcategory_id` int(222) NOT NULL,
  `project_id` int(222) NOT NULL,
  `photo` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_gallery_tbl`
--

INSERT INTO `project_gallery_tbl` (`id`, `category_id`, `subcategory_id`, `project_id`, `photo`) VALUES
(1, 1, 1, 1, '1722595726-6148-featured-thumb-14.png'),
(2, 1, 1, 1, '1722595734-9632-featured-thumb-08.png'),
(3, 1, 1, 1, '1722595739-2272-featured-thumb-01.png'),
(4, 1, 1, 1, '1722595745-1248-featured-thumb-03.png');

-- --------------------------------------------------------

--
-- Table structure for table `project_slider_tbl`
--

CREATE TABLE `project_slider_tbl` (
  `id` int(11) NOT NULL,
  `category_id` int(222) NOT NULL,
  `subcategory_id` int(222) NOT NULL,
  `project_id` int(222) NOT NULL,
  `photo` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_slider_tbl`
--

INSERT INTO `project_slider_tbl` (`id`, `category_id`, `subcategory_id`, `project_id`, `photo`) VALUES
(1, 1, 1, 1, '1722594253-6362-property-details-slider-thumb-01.png'),
(2, 1, 1, 1, '1722594268-7156-property-details-slider-thumb-02.png'),
(3, 1, 1, 1, '1722594273-4825-property-details-slider-thumb-03.png'),
(4, 1, 1, 1, '1722594279-9626-property-details-slider-thumb-04.png');

-- --------------------------------------------------------

--
-- Table structure for table `project_subcategory_tbl`
--

CREATE TABLE `project_subcategory_tbl` (
  `id` int(11) NOT NULL,
  `project_category_id` int(222) NOT NULL,
  `subcategory_name` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_subcategory_tbl`
--

INSERT INTO `project_subcategory_tbl` (`id`, `project_category_id`, `subcategory_name`) VALUES
(1, 1, 'Completed Projects'),
(2, 1, 'Ongoing Projects'),
(3, 1, 'Upcoming Projects'),
(4, 2, 'Completed Projects'),
(5, 2, 'Ongoing Projects'),
(6, 2, 'Upcoming Projects');

-- --------------------------------------------------------

--
-- Table structure for table `project_tbl`
--

CREATE TABLE `project_tbl` (
  `id` int(11) NOT NULL,
  `area_id` int(222) NOT NULL,
  `category_id` varchar(222) NOT NULL,
  `subcategory_id` varchar(222) NOT NULL,
  `project_name` varchar(222) NOT NULL,
  `product_description` varchar(5555) NOT NULL,
  `price` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `google_map` varchar(555) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `video` varchar(222) NOT NULL,
  `description` varchar(5555) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_tbl`
--

INSERT INTO `project_tbl` (`id`, `area_id`, `category_id`, `subcategory_id`, `project_name`, `product_description`, `price`, `address`, `google_map`, `photo`, `video`, `description`, `status`) VALUES
(1, 1, '1', '1', 'Dream Jewel', '<ul>\r\n	<li>Property ID:PT30</li>\r\n	<li>Home Area:150 sqft</li>\r\n	<li>Rooms:4</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Lot Area:PT30</li>\r\n	<li>Baths:2</li>\r\n	<li>Property Status:For Sale</li>\r\n</ul>\r\n', 'NA', 'Dream Jewel Apartment, Danapur - Khagaul Rd, behind Curis Hospital, RK Puram, Patna, Bihar 801503', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.6764319037857!2d85.0395437!3d25.6156661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed566878b48009%3A0x441a30ca6dac73b9!2sDream%20Jewel%20Apartment!5e0!3m2!1sen!2sin!4v1722582604241!5m2!1sen!2sin', '1722582253-1719-BLOCK D.JPG', '1722676336-7497-demo.mp4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ullam velit libero, quia a porro magni eaque asperiores corrupti autem quo ex nobis accusamus minus soluta iusto doloremque et quisquam quae ab, illo delectus hic culpa. Harum molestiae necessitatibus consequuntur esse. Dignissimos deleniti adipisci iusto consequuntur expedita fuga debitis consequatur.\r\n\r\n', 1),
(2, 2, '1', '1', 'Extension - E (Dream Jewel)', '<ul>\r\n	<li>Property ID:PT30</li>\r\n	<li>Home Area:150 sqft</li>\r\n	<li>Rooms:4</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Lot Area:PT30</li>\r\n	<li>Baths:2</li>\r\n	<li>Property Status:For Sale</li>\r\n</ul>\r\n', 'NA', 'Dream Jewel Apartment, Danapur - Khagaul Rd, behind Curis Hospital, RK Puram, Patna, Bihar 801503', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.6764319037857!2d85.0395437!3d25.6156661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed566878b48009%3A0x441a30ca6dac73b9!2sDream%20Jewel%20Apartment!5e0!3m2!1sen!2sin!4v1722582604241!5m2!1sen!2sin', '1722582591-7749-DREAM-JEWEL-EXTENSION.jpg', '1722676351-6620-demo.mp4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ullam velit libero, quia a porro magni eaque asperiores corrupti autem quo ex nobis accusamus minus soluta iusto doloremque et quisquam quae ab, illo delectus hic culpa. Harum molestiae necessitatibus consequuntur esse. Dignissimos deleniti adipisci iusto consequuntur expedita fuga debitis consequatur.', 1),
(3, 2, '1', '1', 'Park West', '<ul>\r\n	<li>Property ID:PT30</li>\r\n	<li>Home Area:150 sqft</li>\r\n	<li>Rooms:4</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Lot Area:PT30</li>\r\n	<li>Baths:2</li>\r\n	<li>Property Status:For Sale</li>\r\n</ul>\r\n', 'NA', 'PARK WEST, New A G Colony, Balaji Nagar, Danapur Nizamat, Danapur, Bihar 801503', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3597.7329774362884!2d85.0377646!3d25.613787799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed5757a1bb6933%3A0x5f83694a77343b39!2sPark%20West%20Apartment!5e0!3m2!1sen!2sin!4v1722582641403!5m2!1sen!2sin', '1722582782-4120-GS1.jpeg', '1722676357-7330-demo.mp4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ullam velit libero, quia a porro magni eaque asperiores corrupti autem quo ex nobis accusamus minus soluta iusto doloremque et quisquam quae ab, illo delectus hic culpa. Harum molestiae necessitatibus consequuntur esse. Dignissimos deleniti adipisci iusto consequuntur expedita fuga debitis consequatur.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `property_features_tbl`
--

CREATE TABLE `property_features_tbl` (
  `id` int(11) NOT NULL,
  `category_id` int(222) NOT NULL,
  `subcategory_id` int(222) NOT NULL,
  `project_id` int(222) NOT NULL,
  `features_name` varchar(5555) NOT NULL,
  `photo` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property_features_tbl`
--

INSERT INTO `property_features_tbl` (`id`, `category_id`, `subcategory_id`, `project_id`, `features_name`, `photo`) VALUES
(1, 1, 1, 1, 'Living Room', '1722665949-3587-1.png'),
(2, 1, 1, 1, 'Garage', '1722666007-6675-2.png'),
(3, 1, 1, 1, 'Dining Area', '1722666054-2319-3.png');

-- --------------------------------------------------------

--
-- Table structure for table `sliders_tbl`
--

CREATE TABLE `sliders_tbl` (
  `id` int(11) NOT NULL,
  `title_name` varchar(222) NOT NULL,
  `description` varchar(5555) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `status` varchar(222) NOT NULL,
  `multimedia_type` varchar(222) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sliders_tbl`
--

INSERT INTO `sliders_tbl` (`id`, `title_name`, `description`, `photo`, `status`, `multimedia_type`, `date`) VALUES
(19, 'Welcome to Deep Sheetal Engineers PVT.LTD.', 'Begin the next chapter of your life in a  home that fits your aspirations. our listings and find the perfect place to start your new adventure.', 'demo.mp4', '1', '2', '2024-07-31 10:06:26'),
(20, '  Begin Your Home Journey Today', 'Begin the next chapter of your life in a  home that fits your aspirations. our listings and find the perfect place to start your new adventure.', '1722422656-5008-banner-thumb-03.png', '1', '1', '2024-07-31 10:44:16'),
(21, 'Your Next Chapter Starts Here', 'Your journey to finding the perfect home starts here. our listings, get expert advice, and make informed decisions every step of the way.', '1722422701-8280-banner-thumb-04.png', '1', '1', '2024-07-31 10:45:01'),
(22, 'Welcome', 'DELIVERING Customised building<br>MOBILITY SOLUTIONS', '1722598471-9741-banner-thumb-02.png', '1', '1', '2024-08-02 11:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `user_role_id` varchar(222) DEFAULT NULL,
  `user_id` varchar(111) NOT NULL,
  `dealer_id` varchar(222) NOT NULL,
  `city_id` varchar(222) NOT NULL,
  `company_name` varchar(222) NOT NULL,
  `address` varchar(222) NOT NULL,
  `state_name` varchar(222) NOT NULL,
  `state_code` varchar(222) NOT NULL,
  `gstin_number` varchar(222) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fathers_name` varchar(222) NOT NULL,
  `age` varchar(222) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` bigint(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dateofjoin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `photo`, `user_role_id`, `user_id`, `dealer_id`, `city_id`, `company_name`, `address`, `state_name`, `state_code`, `gstin_number`, `name`, `fathers_name`, `age`, `email`, `mobile`, `password`, `dateofjoin`, `status`) VALUES
(1, 'tejashwi-yadav.webp', 'ADMIN', 'P3R123', '', '', 'SAPROSE', '', '', '', '', 'Glico Global', 'NA', 'NA', 'admin@gmail.com', 8319765459, 'admin', '2024-04-01 12:02:03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `team_tbl`
--

CREATE TABLE `team_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `mob_no` bigint(11) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team_tbl`
--

INSERT INTO `team_tbl` (`id`, `name`, `mob_no`, `photo`, `status`) VALUES
(1, 'Rahul Kumar', 0, '1722427540-1746-team.jpg', 1),
(2, 'Sonu Kumar', 0, '1722427560-4445-team.jpg', 1),
(3, 'Avinash Kumar', 0, '1722427576-5438-team.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_tbl`
--

CREATE TABLE `testimonial_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `description` varchar(2222) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial_tbl`
--

INSERT INTO `testimonial_tbl` (`id`, `name`, `photo`, `description`, `status`) VALUES
(1, 'Shivam Raj', '1722683159-4859-21104.png', '<p>&ldquo; Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, dolore dicta? Iure eligendi nulla architecto debitis vitae accusantium porro voluptates, illum eos deserunt quod id voluptate ipsam rem dignissimos veniam incidunt molestiae laudantium quam omnis unde? Nam ea, itaque velit quia sit quidem fugit magni dolor recusandae, sint animi! Pariatur illum, repellendus et fuga voluptate modi minima aspernatur est, animi natus porro, nesciunt mollitia excepturi dolore aliquam. Saepe aliquam sunt dolorem, inventore ducimus harum nam voluptate molestias nemo veritatis doloremque. &rdquo;</p>\r\n', 1),
(2, 'Raju Kumar', '1722683200-7773-21104.png', '<p>&ldquo; Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, dolore dicta? Iure eligendi nulla architecto debitis vitae accusantium porro voluptates, illum eos deserunt quod id voluptate ipsam rem dignissimos veniam incidunt molestiae laudantium quam omnis unde? Nam ea, itaque velit quia sit quidem fugit magni dolor recusandae, sint animi! Pariatur illum, repellendus et fuga voluptate modi minima aspernatur est, animi natus porro, nesciunt mollitia excepturi dolore aliquam. Saepe aliquam sunt dolorem, inventore ducimus harum nam voluptate molestias nemo veritatis doloremque. &rdquo;</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video_category_tbl`
--

CREATE TABLE `video_category_tbl` (
  `id` int(11) NOT NULL,
  `category_name` varchar(222) NOT NULL,
  `photo` varchar(222) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_category_tbl`
--

INSERT INTO `video_category_tbl` (`id`, `category_name`, `photo`, `status`) VALUES
(1, 'Projects 1', '1722497570-7926-gallery-01.png', 1),
(2, 'Projects 2', '1722497585-9169-gallery-02.png', 1),
(3, 'Projects 3', '1722497599-1505-gallery-03.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `youtube_tbl`
--

CREATE TABLE `youtube_tbl` (
  `id` int(11) NOT NULL,
  `category_id` int(222) NOT NULL,
  `youtube_link` varchar(555) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `youtube_tbl`
--

INSERT INTO `youtube_tbl` (`id`, `category_id`, `youtube_link`, `status`) VALUES
(1, 1, 'https://www.youtube.com/embed/mJVuZiK9a6I?si=r8T3Ibv3kkNEODT4', 1),
(2, 1, 'https://www.youtube.com/embed/4jnzf1yj48M?si=Ow_10esq_BHH-I1c', 1),
(3, 1, 'https://www.youtube.com/embed/y9j-BL5ocW8?si=dkNunCYwhzZt3-wk', 1),
(4, 2, 'https://www.youtube.com/embed/sQCVv47j9Pc?si=o1ILuYq0BAkyfY-C', 1),
(5, 2, 'https://www.youtube.com/embed/ec_fXMrD7Ow?si=QsUsXwuKN8h4N_oK', 1),
(6, 2, 'https://www.youtube.com/embed/1ovIKzSpNQk?si=S64ZbikQ5z2iIjME', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us_enq_tbl`
--
ALTER TABLE `contact_us_enq_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_tbl`
--
ALTER TABLE `document_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_tbl`
--
ALTER TABLE `enquiry_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_category_tbl`
--
ALTER TABLE `photo_category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_area_tbl`
--
ALTER TABLE `project_area_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_category_tbl`
--
ALTER TABLE `project_category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_certificate_tbl`
--
ALTER TABLE `project_certificate_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_gallery_tbl`
--
ALTER TABLE `project_gallery_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_slider_tbl`
--
ALTER TABLE `project_slider_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_subcategory_tbl`
--
ALTER TABLE `project_subcategory_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_tbl`
--
ALTER TABLE `project_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_features_tbl`
--
ALTER TABLE `property_features_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders_tbl`
--
ALTER TABLE `sliders_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_tbl`
--
ALTER TABLE `team_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial_tbl`
--
ALTER TABLE `testimonial_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_category_tbl`
--
ALTER TABLE `video_category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube_tbl`
--
ALTER TABLE `youtube_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us_enq_tbl`
--
ALTER TABLE `contact_us_enq_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document_tbl`
--
ALTER TABLE `document_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry_tbl`
--
ALTER TABLE `enquiry_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_tbl`
--
ALTER TABLE `gallery_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `photo_category_tbl`
--
ALTER TABLE `photo_category_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_area_tbl`
--
ALTER TABLE `project_area_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_category_tbl`
--
ALTER TABLE `project_category_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_certificate_tbl`
--
ALTER TABLE `project_certificate_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_gallery_tbl`
--
ALTER TABLE `project_gallery_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_slider_tbl`
--
ALTER TABLE `project_slider_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_subcategory_tbl`
--
ALTER TABLE `project_subcategory_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_tbl`
--
ALTER TABLE `project_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `property_features_tbl`
--
ALTER TABLE `property_features_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders_tbl`
--
ALTER TABLE `sliders_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `team_tbl`
--
ALTER TABLE `team_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial_tbl`
--
ALTER TABLE `testimonial_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video_category_tbl`
--
ALTER TABLE `video_category_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `youtube_tbl`
--
ALTER TABLE `youtube_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
