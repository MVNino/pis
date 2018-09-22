-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 05:30 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tbl`
--

CREATE TABLE `appointment_tbl` (
  `appointment_id` int(11) NOT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `time` time NOT NULL,
  `day` varchar(15) NOT NULL,
  `appointment_date` date NOT NULL,
  `status` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `banner_tbl`
--

CREATE TABLE `banner_tbl` (
  `banner_id` int(11) NOT NULL,
  `banner_picture` varchar(160) NOT NULL,
  `banner_order` int(11) NOT NULL,
  `banner_status` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `banner_tbl`
--

INSERT INTO `banner_tbl` (`banner_id`, `banner_picture`, `banner_order`, `banner_status`, `status`) VALUES
(1, '_bannerImage_1537016297.jpg', 1, 1, 0),
(2, '_bannerImage_1537086326.png', 2, 1, 0),
(3, '_bannerImage_1537109766.PNG', 3, 1, 0),
(4, '_bannerImage_1537515420.jpeg', 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `billing_details_tbl`
--

CREATE TABLE `billing_details_tbl` (
  `billing_details_id` int(11) NOT NULL,
  `spec_service_id` int(11) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `billing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `billing_tbl`
--

CREATE TABLE `billing_tbl` (
  `billing_id` int(11) NOT NULL,
  `billing_date` date NOT NULL,
  `total_amount` decimal(8,2) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `discounted` decimal(8,2) NOT NULL,
  `balance` decimal(8,2) NOT NULL,
  `isPaid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `clinic_contact_tbl`
--

CREATE TABLE `clinic_contact_tbl` (
  `clinic_contact_id` int(11) NOT NULL,
  `clinic_contact` varchar(15) NOT NULL,
  `clinic_location` varchar(250) NOT NULL,
  `clinic_days` varchar(15) NOT NULL,
  `clinic_open_time` time NOT NULL,
  `clinic_close_time` time NOT NULL,
  `clinic_email` varchar(80) NOT NULL,
  `clinic_places` text NOT NULL,
  `clinic_telephone` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `clinic_contact_tbl`
--

INSERT INTO `clinic_contact_tbl` (`clinic_contact_id`, `clinic_contact`, `clinic_location`, `clinic_days`, `clinic_open_time`, `clinic_close_time`, `clinic_email`, `clinic_places`, `clinic_telephone`, `status`) VALUES
(1, '09123733941', 'Quezon City', 'Monday-Friday', '00:00:00', '00:00:00', 'clinic@gmail.com', '', '', 0),
(2, '09123739520', 'Marikina City', 'Monday-Saturday', '00:00:00', '00:00:00', 'clinicc@gmail.com', '', '', 0),
(3, '09123739520', 'Makati City', 'Monday-Saturday', '00:00:00', '00:00:00', 'clinicc@gmail.com', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `company_tbl`
--

CREATE TABLE `company_tbl` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(160) DEFAULT NULL,
  `company_desc` text,
  `company_clinic_logo` varchar(150) NOT NULL,
  `company_map` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `company_tbl`
--

INSERT INTO `company_tbl` (`company_id`, `company_name`, `company_desc`, `company_clinic_logo`, `company_map`, `status`) VALUES
(1, 'Romero Company', 'Romero Company Description', 'romero logo wow', 'Google map haha', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_tbl`
--

CREATE TABLE `contact_us_tbl` (
  `contact_us_id` int(11) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_email` varchar(80) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_inquiry` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `contact_us_tbl`
--

INSERT INTO `contact_us_tbl` (`contact_us_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_inquiry`, `status`) VALUES
(1, 'Leki', 'leki.romero@gmail.com', '949429789', 'Sample inquiry', 0),
(2, 'Archie Causaren', 'archie.causaren@gmail.com', '09151648513', 'Inquiry Example', 0),
(3, 'Marlon Villa Niño', 'ninomarlonvilla@gmail.com', '09123733947', 'HEHEH inquiry', 0),
(4, 'Pyke Bio', 'pyke.bio@gmail.com', '09487521456', 'INQUIRY!', 0),
(5, 'Edgardo Cubian', 'ed.cubian@gmail.com', '09194579647', 'Wow inquiry', 0),
(6, 'Edgardo Cubian', 'ed.cubian@gmail.com', '09194579647', 'Ano oras kayo pwede bukas', 0),
(7, 'Edgardo Cubiannn', 'ed.cubian@gmail.com', '09194579647', 'Ano oras kayo pwede bukas', 0);

-- --------------------------------------------------------

--
-- Table structure for table `expense_tbl`
--

CREATE TABLE `expense_tbl` (
  `expense_id` int(11) NOT NULL,
  `name` varchar(160) NOT NULL,
  `cost` decimal(8,2) NOT NULL,
  `expense_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `faq_tbl`
--

CREATE TABLE `faq_tbl` (
  `faq_id` int(11) NOT NULL,
  `faq_question` text NOT NULL,
  `faq_answer` text NOT NULL,
  `faq_category` varchar(60) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `faq_tbl`
--

INSERT INTO `faq_tbl` (`faq_id`, `faq_question`, `faq_answer`, `faq_category`, `status`) VALUES
(1, 'How to be u po?', 'Just be yourself.', 'surgery', 0),
(2, 'How to be superman', 'It\'s impossible', 'service', 0),
(3, 'How to be u Leki', 'walwal lang', 'recovery', 0),
(4, 'My question to you', 'My answer to you', 'appointment', 0),
(5, 'What is love', 'Love is what', 'payment', 0),
(6, 'How to smoke in a healthier way?', 'Smoke 3x in the morning, 4x in the afternoon, and 5x before going to bed. :)', 'others', 0),
(7, 'What is the success rate of a heart transplant?', 'The success rate of a heart transplant depends on the patient, doctor\'s skill, and prayer.', 'surgery', 0),
(8, 'Can you do reappointments?', 'It is possible. We\'ll work into that.', 'appointment', 0);

-- --------------------------------------------------------

--
-- Table structure for table `features_tbl`
--

CREATE TABLE `features_tbl` (
  `features_id` int(11) NOT NULL,
  `feature_title` varchar(80) NOT NULL,
  `feature_description` text NOT NULL,
  `feature_image` varchar(150) DEFAULT NULL,
  `feature_video` text,
  `feature_order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `features_tbl`
--

INSERT INTO `features_tbl` (`features_id`, `feature_title`, `feature_description`, `feature_image`, `feature_video`, `feature_order`, `status`) VALUES
(1, 'feature title', 'description of feature', 'feature title_FeatureImg_1536316439.PNG', NULL, 0, 0),
(2, 'featureee', 'hehe', 'featureee_FeatureImg_1536316483.jpg', NULL, 0, 0),
(3, 'Sample Feature', 'feature description', 'Sample Feature_FeatureImg_1536366747.png', NULL, 0, 0),
(4, 'Ganda ni Tonet', 'sabi ni karl', 'Ganda ni Tonet_FeatureImg_1536369167.png', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `holiday_tbl`
--

CREATE TABLE `holiday_tbl` (
  `holiday_id` int(11) NOT NULL,
  `holiday_date` date NOT NULL,
  `day` varchar(15) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `medical_file_record_tbl`
--

CREATE TABLE `medical_file_record_tbl` (
  `medical_file_record_id` int(11) NOT NULL,
  `file_title` varchar(160) NOT NULL,
  `file` text NOT NULL,
  `medical_record_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_records_tbl`
--

CREATE TABLE `medical_records_tbl` (
  `medical_record_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `med_hist_date` date NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `height` varchar(6) NOT NULL,
  `med_hist_procedure` text NOT NULL,
  `temperature` decimal(3,1) NOT NULL,
  `treatment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `news_tbl`
--

CREATE TABLE `news_tbl` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(160) NOT NULL,
  `news_desc` text NOT NULL,
  `news_picture` varchar(190) NOT NULL,
  `news_order` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`news_id`, `news_title`, `news_desc`, `news_picture`, `news_order`, `isActive`, `status`) VALUES
(1, 'Ed Sheeran to release his latest song, Thinking Out Loud.', '\"This is one of my favorite songs...\" -- Ed Sheeran', 'sda_NewsImg_1536312652.png', 6, 1, 0),
(2, 'Sample news title45', 'News Description', 'Sample news title45_NewsImg_1536367233.png', 5, 1, 0),
(3, 'Land Fall of Typhoon Ompong', 'Binabagyo ng bagyong Ompong ang mga bayan ng Cagayan.', 'Land Fall of Bagyong Ompong._NewsImg_1536939688.jpg', 1, 1, 0),
(4, 'National Rabies Awareness Month', 'Annual activity relative to the prevention of having rabies', 'National Rabies Awareness Month_NewsImg_1536940499.jpg', 3, 1, 0),
(5, 'Downloadable Human Memory', 'This section was made to describe a news with a title of \"Downloadable Human Memory\"', 'Downloadable Human Memory_NewsImg_1537355547.jpg', 2, 1, 0),
(6, 'Ganda mo Tea yiieeh', 'Advertisement for Nestea.', 'Ganda mo Tea yiieeh_NewsImg_1537371357.png', 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `official_receipt_tbl`
--

CREATE TABLE `official_receipt_tbl` (
  `or_id` int(11) NOT NULL,
  `or_number` int(11) NOT NULL,
  `or_date` date NOT NULL,
  `billing_id` int(11) NOT NULL,
  `amount_paid` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `other_services_tbl`
--

CREATE TABLE `other_services_tbl` (
  `other_services_id` int(11) NOT NULL,
  `other_image` varchar(190) DEFAULT NULL,
  `other_title` varchar(160) NOT NULL,
  `other_desc` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `other_services_tbl`
--

INSERT INTO `other_services_tbl` (`other_services_id`, `other_image`, `other_title`, `other_desc`, `status`) VALUES
(1, '_OtherServiceImg_1537458623.jpg', 'Patent Service', 'Service description for Patent.', 0),
(2, '_OtherServiceImg_1537511505.png', 'Law service title', 'Law is a system of rules that are created and enforced through social or governmental institutions to regulate behavior. Law is a system that regulates and ensures that individuals or a community adhere to the will of the state.', 0),
(3, '_OtherServiceImg_1537511865.png', 'CAFA Service Title', 'The College of Architecture and Fine Arts of the Polytechnic University of the Philippines is defined as a supportive and complementing academic unit in this institution  contributory to its aspirations of offering varied and quality academic programs available to deserving youths whose families come from the lower income bracket in our society.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `other_service_vid_tbl`
--

CREATE TABLE `other_service_vid_tbl` (
  `video_id` int(11) NOT NULL,
  `other_service_id` int(11) NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_information_tbl`
--

CREATE TABLE `patient_information_tbl` (
  `patient_info_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `barangay` varchar(160) NOT NULL,
  `city` varchar(160) NOT NULL,
  `zip_code` varchar(5) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `patient_tbl`
--

CREATE TABLE `patient_tbl` (
  `patient_id` int(11) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `email` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `profile_tbl`
--

CREATE TABLE `profile_tbl` (
  `profile_id` int(11) NOT NULL,
  `introduction` text NOT NULL,
  `skills` text NOT NULL,
  `picture` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialty_service_tbl`
--

CREATE TABLE `specialty_service_tbl` (
  `spec_service_id` int(11) NOT NULL,
  `spec_image_icon` varchar(190) DEFAULT NULL,
  `spec_title` varchar(160) NOT NULL,
  `spec_desc` text NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `specialty_service_tbl`
--

INSERT INTO `specialty_service_tbl` (`spec_service_id`, `spec_image_icon`, `spec_title`, `spec_desc`, `price`, `status`) VALUES
(1, '_SpecialtyServiceImg_1537458116.jpg', 'Copyright Service', 'This is to describe copyright service.', NULL, 0),
(2, '_SpecialtyServiceImg_1537458547.jpg', 'Patent Service', 'Other description for Patent', NULL, 0),
(3, '_SpecialtyServiceImg_1537501797.jpg', 'CCIS Title', 'CCIS Service Description', NULL, 0),
(4, '_SpecialtyServiceImg_1537505645.png', 'PUP Service Title', 'Polytechnic University of the Philippines is a research and coeducational state university in the Philippines. It was founded on October 19, 1904 as the Manila Business School and as part of Manila\'s public school system.', NULL, 0),
(5, '_SpecialtyServiceImg_1537511605.png', 'COC Service Title', 'Clash of Clans is a freemium mobile strategy video game developed and published by Finnish game developer Supercell. The game was released for iOS platforms on August 2, 2012, and on Google Play for Android on October 7, 2013.', NULL, 0),
(6, '_SpecialtyServiceImg_1537517185.PNG', 'Car Service', 'Car Service Description', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `specialty_service_vid_tbl`
--

CREATE TABLE `specialty_service_vid_tbl` (
  `video_id` int(11) NOT NULL,
  `specialty_service_id` int(11) NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(15) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `billing_details_tbl`
--
ALTER TABLE `billing_details_tbl`
  ADD PRIMARY KEY (`billing_details_id`),
  ADD KEY `billing_id` (`billing_id`),
  ADD KEY `spec_service_id` (`spec_service_id`);

--
-- Indexes for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `clinic_contact_tbl`
--
ALTER TABLE `clinic_contact_tbl`
  ADD PRIMARY KEY (`clinic_contact_id`);

--
-- Indexes for table `company_tbl`
--
ALTER TABLE `company_tbl`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact_us_tbl`
--
ALTER TABLE `contact_us_tbl`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `expense_tbl`
--
ALTER TABLE `expense_tbl`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `faq_tbl`
--
ALTER TABLE `faq_tbl`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `features_tbl`
--
ALTER TABLE `features_tbl`
  ADD PRIMARY KEY (`features_id`);

--
-- Indexes for table `holiday_tbl`
--
ALTER TABLE `holiday_tbl`
  ADD PRIMARY KEY (`holiday_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `medical_file_record_tbl`
--
ALTER TABLE `medical_file_record_tbl`
  ADD PRIMARY KEY (`medical_file_record_id`),
  ADD KEY `medical_record_id` (`medical_record_id`);

--
-- Indexes for table `medical_records_tbl`
--
ALTER TABLE `medical_records_tbl`
  ADD PRIMARY KEY (`medical_record_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `news_tbl`
--
ALTER TABLE `news_tbl`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `official_receipt_tbl`
--
ALTER TABLE `official_receipt_tbl`
  ADD PRIMARY KEY (`or_id`),
  ADD KEY `patiend_id` (`billing_id`);

--
-- Indexes for table `other_services_tbl`
--
ALTER TABLE `other_services_tbl`
  ADD PRIMARY KEY (`other_services_id`);

--
-- Indexes for table `other_service_vid_tbl`
--
ALTER TABLE `other_service_vid_tbl`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `other_service_id` (`other_service_id`);

--
-- Indexes for table `patient_information_tbl`
--
ALTER TABLE `patient_information_tbl`
  ADD PRIMARY KEY (`patient_info_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `profile_tbl`
--
ALTER TABLE `profile_tbl`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `specialty_service_tbl`
--
ALTER TABLE `specialty_service_tbl`
  ADD PRIMARY KEY (`spec_service_id`);

--
-- Indexes for table `specialty_service_vid_tbl`
--
ALTER TABLE `specialty_service_vid_tbl`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `specialty_service_id` (`specialty_service_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `billing_details_tbl`
--
ALTER TABLE `billing_details_tbl`
  MODIFY `billing_details_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `clinic_contact_tbl`
--
ALTER TABLE `clinic_contact_tbl`
  MODIFY `clinic_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `company_tbl`
--
ALTER TABLE `company_tbl`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us_tbl`
--
ALTER TABLE `contact_us_tbl`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `expense_tbl`
--
ALTER TABLE `expense_tbl`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faq_tbl`
--
ALTER TABLE `faq_tbl`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `features_tbl`
--
ALTER TABLE `features_tbl`
  MODIFY `features_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `holiday_tbl`
--
ALTER TABLE `holiday_tbl`
  MODIFY `holiday_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medical_file_record_tbl`
--
ALTER TABLE `medical_file_record_tbl`
  MODIFY `medical_file_record_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medical_records_tbl`
--
ALTER TABLE `medical_records_tbl`
  MODIFY `medical_record_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `official_receipt_tbl`
--
ALTER TABLE `official_receipt_tbl`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other_services_tbl`
--
ALTER TABLE `other_services_tbl`
  MODIFY `other_services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `other_service_vid_tbl`
--
ALTER TABLE `other_service_vid_tbl`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_information_tbl`
--
ALTER TABLE `patient_information_tbl`
  MODIFY `patient_info_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient_tbl`
--
ALTER TABLE `patient_tbl`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile_tbl`
--
ALTER TABLE `profile_tbl`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `specialty_service_tbl`
--
ALTER TABLE `specialty_service_tbl`
  MODIFY `spec_service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  ADD CONSTRAINT `appointment_tbl_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointment_tbl_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `user_tbl` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `billing_details_tbl`
--
ALTER TABLE `billing_details_tbl`
  ADD CONSTRAINT `billing_details_tbl_ibfk_1` FOREIGN KEY (`billing_id`) REFERENCES `billing_tbl` (`billing_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `billing_details_tbl_ibfk_2` FOREIGN KEY (`spec_service_id`) REFERENCES `specialty_service_tbl` (`spec_service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  ADD CONSTRAINT `billing_tbl_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `holiday_tbl`
--
ALTER TABLE `holiday_tbl`
  ADD CONSTRAINT `holiday_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_tbl` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medical_file_record_tbl`
--
ALTER TABLE `medical_file_record_tbl`
  ADD CONSTRAINT `medical_file_record_tbl_ibfk_1` FOREIGN KEY (`medical_record_id`) REFERENCES `medical_records_tbl` (`medical_record_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medical_records_tbl`
--
ALTER TABLE `medical_records_tbl`
  ADD CONSTRAINT `medical_records_tbl_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `official_receipt_tbl`
--
ALTER TABLE `official_receipt_tbl`
  ADD CONSTRAINT `official_receipt_tbl_ibfk_1` FOREIGN KEY (`billing_id`) REFERENCES `billing_tbl` (`billing_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `other_service_vid_tbl`
--
ALTER TABLE `other_service_vid_tbl`
  ADD CONSTRAINT `other_service_vid_tbl_ibfk_1` FOREIGN KEY (`other_service_id`) REFERENCES `other_services_tbl` (`other_services_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patient_information_tbl`
--
ALTER TABLE `patient_information_tbl`
  ADD CONSTRAINT `patient_information_tbl_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `specialty_service_vid_tbl`
--
ALTER TABLE `specialty_service_vid_tbl`
  ADD CONSTRAINT `specialty_service_vid_tbl_ibfk_1` FOREIGN KEY (`specialty_service_id`) REFERENCES `specialty_service_tbl` (`spec_service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
