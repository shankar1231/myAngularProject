-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2017 at 10:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aagro_dbs_cdntr`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_branchdetails`
--

CREATE TABLE `add_branchdetails` (
  `id` int(11) NOT NULL,
  `add_contact_details` varchar(500) NOT NULL,
  `brnch_nam` varchar(250) NOT NULL,
  `land_lne_num` varchar(250) NOT NULL,
  `mob_num` bigint(11) NOT NULL,
  `first_email` varchar(250) NOT NULL,
  `secnd_email` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `latitude` varchar(250) NOT NULL,
  `logni_tude` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_branchdetails`
--

INSERT INTO `add_branchdetails` (`id`, `add_contact_details`, `brnch_nam`, `land_lne_num`, `mob_num`, `first_email`, `secnd_email`, `address`, `latitude`, `logni_tude`, `date`, `ip`) VALUES
(1, 'Contact Details', '', '', 9999999999, 'agro@gmail.com', '', '', '', '', '2017-11-22 06:59:51', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `add_sliderimages`
--

CREATE TABLE `add_sliderimages` (
  `id` int(11) NOT NULL,
  `add_slider_contact_details` varchar(250) NOT NULL,
  `slider_img_title` text NOT NULL,
  `slider_img_desc` text NOT NULL,
  `slider_image` blob NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_sliderimages`
--

INSERT INTO `add_sliderimages` (`id`, `add_slider_contact_details`, `slider_img_title`, `slider_img_desc`, `slider_image`, `date`, `ip`) VALUES
(1, 'Slider Images', 'Industrialized Agriculture', 'Industrialized agriculture is the type of agriculture where large quantities of crops and livestock are produced through industrialized techniques for the purpose of sal', 0x6167726963756c747572652d726563727569746d656e742e6a7067, '2017-11-22 07:21:22', '::1'),
(2, 'Slider Images', 'Subsistence Agriculture', 'Although industrialized agriculture is necessary to feed the growing human population', 0x4167726963756c747572652e6a7067, '2017-11-22 07:22:45', '::1'),
(3, 'Slider Images', 'Kinds of Subsistence Agriculture', 'Although industrialized agriculture has replaced a large amount of subsistence agriculture', 0x62616e6e6572312e6a7067, '2017-11-22 07:23:39', '::1'),
(4, 'Slider Images', 'Subsistence Agriculture', 'Although industrialized agriculture is necessary to feed the growing human population', 0x6675747572652d6f662d666f6f642d6175746f6d617465642d6167726963756c747572652d79616d6168612d666561747572652e6a7067, '2017-11-22 07:32:19', '::1'),
(5, 'About Deatails', 'Subsistence Agriculture', 'Although industrialized agriculture is necessary to feed the growing human population, there is another type of agriculture that is regularly practiced today. Subsistence agriculture is when a farmer lives on a small amount of land and produces enough food to feed his or her household and have a small cash crop. The goal of subsistence agriculture is to produce enough food to ensure the survival of the individual family. If there is excess food produced, it is sold locally to other families or individuals.', 0x30314167726963756c747572652e6a7067, '2017-11-22 08:20:29', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_tabl`
--

CREATE TABLE `admin_tabl` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tabl`
--

INSERT INTO `admin_tabl` (`id`, `email`, `password`) VALUES
(1, 'YXZyLnNhc0BnbWFpbC5jb20=', 'NjU0MzIxQEFh'),
(3, 'YWdyb0BhZG1pbi5jb20=', 'YWdybw==');

-- --------------------------------------------------------

--
-- Table structure for table `business_add_tbl`
--

CREATE TABLE `business_add_tbl` (
  `business_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `business_title_url` varchar(250) NOT NULL,
  `busniess_categry` int(11) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `file_upload` blob NOT NULL,
  `descrptn` varchar(500) NOT NULL,
  `business_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_add_tbl`
--

INSERT INTO `business_add_tbl` (`business_id`, `title`, `business_title_url`, `busniess_categry`, `keywords`, `file_upload`, `descrptn`, `business_date`, `ip`) VALUES
(1, 'Farmer''s Market Vending', 'farmer-s-market-vending', 1, 'keywords, aggriculture', 0x30314736353737392d6d61696e2d30312e6a7067, '  Subsistence agriculture varies a great deal from industrialized agriculture in terms of the farming methods used. This type of agriculture is very labor-intensive because all of the work is done by humans and animals and only hand tools and simple machines are used to work the land.', '2017-11-22 08:45:57', '::1'),
(2, 'Herb Growing', 'herb-growing', 2, 'herdb', 0x73617665312e6a7067, 'Although industrialized agriculture is necessary to feed the growing human population, there is another type of agriculture that is regularly practiced today. Subsistence agriculture is when a farmer lives on a small amount of land and produces enough food to feed his or her household and have a small cash crop. ', '2017-11-22 08:47:40', '::1'),
(3, 'Vegetable Farming', 'vegetable-farming', 3, 'Vegetable , Farming', 0x30326167726963756c747572652e6a7067, 'Although industrialized agriculture is necessary to feed the growing human population, there is another type of agriculture that is regularly practiced today. Subsistence agriculture is when a farmer lives on a small amount of land and produces enough food to feed his or her household and have a small cash crop. ', '2017-11-22 08:49:40', '::1'),
(4, 'jkbkjbkbk', 'jkbkjbkbk', 3, 'b', 0x636f6c6f7266756c2d6561737465722d656767732d686f6c696461792d68642d77616c6c70617065722d3139323078313230302d31303831312e6a7067, 'b  ', '2017-11-22 10:38:35', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `business_categories`
--

CREATE TABLE `business_categories` (
  `business_catid` int(11) NOT NULL,
  `business_catname` varchar(250) NOT NULL,
  `business_caturl` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business_categories`
--

INSERT INTO `business_categories` (`business_catid`, `business_catname`, `business_caturl`, `status`) VALUES
(1, 'Parboiled Ricemill', 'parboiled-ricemill', 1),
(2, 'Bio Chemicals', 'bio-chemicals', 1),
(3, 'Agro Form', 'agro-form', 1),
(4, 'Trading', 'trading', 1),
(5, 'Ginning Mill', 'ginning-mill', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `phn_num` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `ip` varchar(250) NOT NULL,
  `browser` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`id`, `name`, `email`, `company_name`, `phn_num`, `message`, `date`, `ip`, `browser`) VALUES
(1, 'bhjb', 'b@gmail.com', 'jbh', '8686059096', 'jhb                        ', '2017-11-23', '::1', 'Chrome'),
(2, 'mani', 'mani@gmail.com', 'ichapps', '86860059086', 'bcnvbdbvkd            ', '2017-11-23', '::1', 'Chrome'),
(3, 'vgjvj', 'j@gmail.vom', 'bjhb', '6789', 'b            ', '2017-11-23', '::1', 'Chrome');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_branchdetails`
--
ALTER TABLE `add_branchdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_sliderimages`
--
ALTER TABLE `add_sliderimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_tabl`
--
ALTER TABLE `admin_tabl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_add_tbl`
--
ALTER TABLE `business_add_tbl`
  ADD PRIMARY KEY (`business_id`);

--
-- Indexes for table `business_categories`
--
ALTER TABLE `business_categories`
  ADD PRIMARY KEY (`business_catid`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_branchdetails`
--
ALTER TABLE `add_branchdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `add_sliderimages`
--
ALTER TABLE `add_sliderimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admin_tabl`
--
ALTER TABLE `admin_tabl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `business_add_tbl`
--
ALTER TABLE `business_add_tbl`
  MODIFY `business_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
