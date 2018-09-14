-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 02:43 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pis`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tbl`
--

CREATE TABLE `about_tbl` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(80) NOT NULL,
  `about_desc` text NOT NULL,
  `about_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `about_tbl`
--

INSERT INTO `about_tbl` (`about_id`, `about_title`, `about_desc`, `about_image`) VALUES
(1, 'about title', 'about description', 'wow.png'),
(2, 'about title 50', 'about desc 50', '_aboutImage_1536367462.png'),
(3, 'About', 'aboout ka', '_aboutImage_1536368307.png');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tbl`
--

CREATE TABLE `appointment_tbl` (
  `appointment_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
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
  `banner_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `billing_tbl`
--

CREATE TABLE `billing_tbl` (
  `billing_id` int(11) NOT NULL,
  `billing_date` date NOT NULL,
  `services` int(11) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `patient_id` int(11) NOT NULL
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
  `clinic_email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `clinic_contact_tbl`
--

INSERT INTO `clinic_contact_tbl` (`clinic_contact_id`, `clinic_contact`, `clinic_location`, `clinic_days`, `clinic_open_time`, `clinic_close_time`, `clinic_email`) VALUES
(1, '09123733941', 'Quezon City', 'Monday-Friday', '00:00:00', '00:00:00', 'clinic@gmail.com'),
(2, '09123739520', 'Marikina City', 'Monday-Saturday', '00:00:00', '00:00:00', 'clinicc@gmail.com'),
(3, '09123739520', 'Makati City', 'Monday-Saturday', '00:00:00', '00:00:00', 'clinicc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `company_tbl`
--

CREATE TABLE `company_tbl` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(160) DEFAULT NULL,
  `company_desc` text,
  `company_clinic_logo` varchar(150) NOT NULL,
  `company_map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `company_tbl`
--

INSERT INTO `company_tbl` (`company_id`, `company_name`, `company_desc`, `company_clinic_logo`, `company_map`) VALUES
(1, 'Romero Company', 'Romero Company Description', 'romero logo wow', 'Google map haha');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_tbl`
--

CREATE TABLE `contact_us_tbl` (
  `contact_us_id` int(11) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_email` varchar(80) NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_inquiry` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `contact_us_tbl`
--

INSERT INTO `contact_us_tbl` (`contact_us_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_inquiry`) VALUES
(1, 'Leki', 'leki.romero@gmail.com', '949429789', 'Sample inquiry'),
(2, 'Archie Causaren', 'archie.causaren@gmail.com', '09151648513', 'Inquiry Example'),
(3, 'Marlon Villa Niño', 'ninomarlonvilla@gmail.com', '09123733947', 'HEHEH inquiry'),
(4, 'Pyke Bio', 'pyke.bio@gmail.com', '09487521456', 'INQUIRY!'),
(5, 'Edgardo Cubian', 'ed.cubian@gmail.com', '09194579647', 'Wow inquiry'),
(6, 'Edgardo Cubian', 'ed.cubian@gmail.com', '09194579647', 'Ano oras kayo pwede bukas');

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
  `faq_category` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `faq_tbl`
--

INSERT INTO `faq_tbl` (`faq_id`, `faq_question`, `faq_answer`, `faq_category`) VALUES
(1, 'How to be u po?', 'Just be yourself.', 'class A'),
(2, 'How to be superman', 'It\'s impossible', 'Wow'),
(3, 'How to be u Leki', 'walwal lang', 'HEHE'),
(4, 'My question to you', 'My answer to you', 'Category 1');

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
  `feature_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `features_tbl`
--

INSERT INTO `features_tbl` (`features_id`, `feature_title`, `feature_description`, `feature_image`, `feature_video`, `feature_order`) VALUES
(1, 'feature title', 'description of feature', 'feature title_FeatureImg_1536316439.PNG', NULL, 0),
(2, 'featureee', 'hehe', 'featureee_FeatureImg_1536316483.jpg', NULL, 0),
(3, 'Sample Feature', 'feature description', 'Sample Feature_FeatureImg_1536366747.png', NULL, 0),
(4, 'Ganda ni Tonet', 'sabi ni karl', 'Ganda ni Tonet_FeatureImg_1536369167.png', NULL, 0);

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
  `treatment` text NOT NULL,
  `file` text NOT NULL
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
  `news_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `news_tbl`
--

INSERT INTO `news_tbl` (`news_id`, `news_title`, `news_desc`, `news_picture`, `news_order`) VALUES
(1, 'sda', 'dska', 'sda_NewsImg_1536312652.png', 0),
(2, 'Sample news title45', 'News Description', 'Sample news title45_NewsImg_1536367233.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `official_receipt_tbl`
--

CREATE TABLE `official_receipt_tbl` (
  `or_id` int(11) NOT NULL,
  `or_number` int(11) NOT NULL,
  `or_date` date NOT NULL,
  `patiend_id` int(11) NOT NULL
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
  `other_vidlink` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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
  `patient_id` int(11) NOT NULL
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
-- Table structure for table `services_tbl`
--

CREATE TABLE `services_tbl` (
  `service_id` int(11) NOT NULL,
  `name` varchar(240) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `level` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `specialty_service_tbl`
--

CREATE TABLE `specialty_service_tbl` (
  `spec_service_id` int(11) NOT NULL,
  `spec_image_icon` varchar(190) DEFAULT NULL,
  `spec_title` varchar(160) NOT NULL,
  `spec_desc` text NOT NULL,
  `spec_vidlink` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

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
-- Indexes for table `about_tbl`
--
ALTER TABLE `about_tbl`
  ADD PRIMARY KEY (`about_id`);

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
-- Indexes for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `services` (`services`);

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
  ADD KEY `patiend_id` (`patiend_id`);

--
-- Indexes for table `other_services_tbl`
--
ALTER TABLE `other_services_tbl`
  ADD PRIMARY KEY (`other_services_id`);

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
-- Indexes for table `services_tbl`
--
ALTER TABLE `services_tbl`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `specialty_service_tbl`
--
ALTER TABLE `specialty_service_tbl`
  ADD PRIMARY KEY (`spec_service_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_tbl`
--
ALTER TABLE `about_tbl`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `banner_tbl`
--
ALTER TABLE `banner_tbl`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `expense_tbl`
--
ALTER TABLE `expense_tbl`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faq_tbl`
--
ALTER TABLE `faq_tbl`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
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
-- AUTO_INCREMENT for table `medical_records_tbl`
--
ALTER TABLE `medical_records_tbl`
  MODIFY `medical_record_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news_tbl`
--
ALTER TABLE `news_tbl`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `official_receipt_tbl`
--
ALTER TABLE `official_receipt_tbl`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `other_services_tbl`
--
ALTER TABLE `other_services_tbl`
  MODIFY `other_services_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `services_tbl`
--
ALTER TABLE `services_tbl`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `specialty_service_tbl`
--
ALTER TABLE `specialty_service_tbl`
  MODIFY `spec_service_id` int(11) NOT NULL AUTO_INCREMENT;
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
-- Constraints for table `billing_tbl`
--
ALTER TABLE `billing_tbl`
  ADD CONSTRAINT `billing_tbl_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `billing_tbl_ibfk_3` FOREIGN KEY (`services`) REFERENCES `services_tbl` (`service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `holiday_tbl`
--
ALTER TABLE `holiday_tbl`
  ADD CONSTRAINT `holiday_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_tbl` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medical_records_tbl`
--
ALTER TABLE `medical_records_tbl`
  ADD CONSTRAINT `medical_records_tbl_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `official_receipt_tbl`
--
ALTER TABLE `official_receipt_tbl`
  ADD CONSTRAINT `official_receipt_tbl_ibfk_1` FOREIGN KEY (`patiend_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patient_information_tbl`
--
ALTER TABLE `patient_information_tbl`
  ADD CONSTRAINT `patient_information_tbl_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient_tbl` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;