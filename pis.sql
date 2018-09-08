-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2018 at 03:36 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `about_table`
--

CREATE TABLE `about_table` (
  `about_id` int(11) NOT NULL,
  `about_title` varchar(30) NOT NULL,
  `about_desc` varchar(60) NOT NULL,
  `about_image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_table`
--

INSERT INTO `about_table` (`about_id`, `about_title`, `about_desc`, `about_image`) VALUES
(1, 'about title', 'about description', 'wow.png'),
(2, 'about title 50', 'about desc 50', '_aboutImage_1536367462.png'),
(3, 'About', 'aboout ka', '_aboutImage_1536368307.png');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `time` time NOT NULL,
  `day` varchar(10) NOT NULL,
  `appointment_date` date NOT NULL,
  `status` varchar(1) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner_table`
--

CREATE TABLE `banner_table` (
  `banner_id` int(11) NOT NULL,
  `banner_picture` varchar(30) NOT NULL,
  `banner_order` varchar(30) NOT NULL,
  `banner_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `billing_date` date NOT NULL,
  `services` int(11) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clinic_contact_table`
--

CREATE TABLE `clinic_contact_table` (
  `clinic_contact_id` int(11) NOT NULL,
  `clinic_contact` varchar(11) NOT NULL,
  `clinic_location` varchar(80) NOT NULL,
  `clinic_hours` varchar(5) NOT NULL,
  `clinic_days` varchar(55) NOT NULL,
  `clinic_email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clinic_contact_table`
--

INSERT INTO `clinic_contact_table` (`clinic_contact_id`, `clinic_contact`, `clinic_location`, `clinic_hours`, `clinic_days`, `clinic_email`) VALUES
(1, '09123733941', 'Quezon City', '9-5PM', 'Monday-Friday', 'clinic@gmail.com'),
(2, '09123739520', 'Marikina City', '8-4PM', 'Monday-Saturday', 'clinicc@gmail.com'),
(3, '09123739520', 'Makati City', '8-4PM', 'Monday-Saturday', 'clinicc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `company_table`
--

CREATE TABLE `company_table` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(60) NOT NULL,
  `company_desc` varchar(60) NOT NULL,
  `company_clinic_logo` varchar(30) NOT NULL,
  `company_map` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_table`
--

INSERT INTO `company_table` (`company_id`, `company_name`, `company_desc`, `company_clinic_logo`, `company_map`) VALUES
(1, 'Romero Company', 'Romero Company Description', 'romero logo wow', 'Google map haha');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_table`
--

CREATE TABLE `contact_us_table` (
  `contact_us_id` int(11) NOT NULL,
  `contact_name` varchar(80) NOT NULL,
  `contact_email` varchar(80) NOT NULL,
  `contact_phone` varchar(11) NOT NULL,
  `contact_inquiry` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us_table`
--

INSERT INTO `contact_us_table` (`contact_us_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_inquiry`) VALUES
(1, 'Leki', 'leki.romero@gmail.com', '949429789', 'Sample inquiry'),
(2, 'Archie Causaren', 'archie.causaren@gmail.com', '09151648513', 'Inquiry Example'),
(3, 'Marlon Villa Niño', 'ninomarlonvilla@gmail.com', '09123733947', 'HEHEH inquiry'),
(4, 'Pyke Bio', 'pyke.bio@gmail.com', '09487521456', 'INQUIRY!'),
(5, 'Edgardo Cubian', 'ed.cubian@gmail.com', '09194579647', 'Wow inquiry'),
(6, 'Edgardo Cubian', 'ed.cubian@gmail.com', '09194579647', 'Ano oras kayo pwede bukas');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `expense_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `cost` decimal(8,2) NOT NULL,
  `expense_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq_table`
--

CREATE TABLE `faq_table` (
  `faq_id` int(11) NOT NULL,
  `faq_question` varchar(60) NOT NULL,
  `faq_answer` varchar(60) NOT NULL,
  `faq_category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq_table`
--

INSERT INTO `faq_table` (`faq_id`, `faq_question`, `faq_answer`, `faq_category`) VALUES
(1, 'How to be u po?', 'Just be yourself.', 'class A'),
(2, 'How to be superman', 'It\'s impossible', 'Wow'),
(3, 'How to be u Leki', 'walwal lang', 'HEHE'),
(4, 'My question to you', 'My answer to you', 'Category 1');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `features_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(80) NOT NULL,
  `image` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`features_id`, `title`, `description`, `image`) VALUES
(1, 'feature title', 'description of feature', 'feature title_FeatureImg_1536316439.PNG'),
(2, 'featureee', 'hehe', 'featureee_FeatureImg_1536316483.jpg'),
(3, 'Sample Feature', 'feature description', 'Sample Feature_FeatureImg_1536366747.png'),
(4, 'Ganda ni Tonet', 'sabi ni karl', 'Ganda ni Tonet_FeatureImg_1536369167.png');

-- --------------------------------------------------------

--
-- Table structure for table `holliday_tbl`
--

CREATE TABLE `holliday_tbl` (
  `holliday_id` int(11) NOT NULL,
  `holliday_date` date NOT NULL,
  `day` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_records`
--

CREATE TABLE `medical_records` (
  `medical_record_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `med_hist_date` date NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `height` varchar(4) NOT NULL,
  `med_hist_procedure` varchar(60) NOT NULL,
  `temperature` decimal(3,1) NOT NULL,
  `treatment` varchar(160) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news_table`
--

CREATE TABLE `news_table` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(30) NOT NULL,
  `news_desc` varchar(60) NOT NULL,
  `news_picture` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_table`
--

INSERT INTO `news_table` (`news_id`, `news_title`, `news_desc`, `news_picture`) VALUES
(1, 'sda', 'dska', 'sda_NewsImg_1536312652.png'),
(2, 'Sample news title45', 'News Description', 'Sample news title45_NewsImg_1536367233.png');

-- --------------------------------------------------------

--
-- Table structure for table `official_receipt`
--

CREATE TABLE `official_receipt` (
  `or_id` int(11) NOT NULL,
  `or_number` int(11) NOT NULL,
  `or_date` date NOT NULL,
  `patiend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `other_services_table`
--

CREATE TABLE `other_services_table` (
  `other_services_id` int(11) NOT NULL,
  `other_image` varchar(30) NOT NULL,
  `other_title` varchar(30) NOT NULL,
  `other_desc` varchar(60) NOT NULL,
  `other_vidlink` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patient_id` int(11) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email` varchar(160) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_information`
--

CREATE TABLE `patient_information` (
  `patient_info_id` int(11) NOT NULL,
  `address` varchar(160) NOT NULL,
  `barangay` varchar(80) NOT NULL,
  `city` varchar(80) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `blood_type` varchar(5) NOT NULL,
  `patient_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `description` varchar(160) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `specialty_service_table`
--

CREATE TABLE `specialty_service_table` (
  `spec_service_id` int(11) NOT NULL,
  `spec_image_icon` varchar(30) NOT NULL,
  `spec_title` varchar(30) NOT NULL,
  `spec_desc` varchar(60) NOT NULL,
  `spec_vidlink` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(8) NOT NULL,
  `lname` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_table`
--
ALTER TABLE `about_table`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `banner_table`
--
ALTER TABLE `banner_table`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `services` (`services`);

--
-- Indexes for table `clinic_contact_table`
--
ALTER TABLE `clinic_contact_table`
  ADD PRIMARY KEY (`clinic_contact_id`);

--
-- Indexes for table `company_table`
--
ALTER TABLE `company_table`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `contact_us_table`
--
ALTER TABLE `contact_us_table`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`expense_id`);

--
-- Indexes for table `faq_table`
--
ALTER TABLE `faq_table`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`features_id`);

--
-- Indexes for table `holliday_tbl`
--
ALTER TABLE `holliday_tbl`
  ADD PRIMARY KEY (`holliday_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD PRIMARY KEY (`medical_record_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `news_table`
--
ALTER TABLE `news_table`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `official_receipt`
--
ALTER TABLE `official_receipt`
  ADD PRIMARY KEY (`or_id`),
  ADD KEY `patiend_id` (`patiend_id`);

--
-- Indexes for table `other_services_table`
--
ALTER TABLE `other_services_table`
  ADD PRIMARY KEY (`other_services_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_information`
--
ALTER TABLE `patient_information`
  ADD PRIMARY KEY (`patient_info_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `specialty_service_table`
--
ALTER TABLE `specialty_service_table`
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
-- AUTO_INCREMENT for table `about_table`
--
ALTER TABLE `about_table`
  MODIFY `about_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner_table`
--
ALTER TABLE `banner_table`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clinic_contact_table`
--
ALTER TABLE `clinic_contact_table`
  MODIFY `clinic_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `company_table`
--
ALTER TABLE `company_table`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us_table`
--
ALTER TABLE `contact_us_table`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `expense_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_table`
--
ALTER TABLE `faq_table`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `features_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `holliday_tbl`
--
ALTER TABLE `holliday_tbl`
  MODIFY `holliday_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_records`
--
ALTER TABLE `medical_records`
  MODIFY `medical_record_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_table`
--
ALTER TABLE `news_table`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `official_receipt`
--
ALTER TABLE `official_receipt`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other_services_table`
--
ALTER TABLE `other_services_table`
  MODIFY `other_services_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `patient_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_information`
--
ALTER TABLE `patient_information`
  MODIFY `patient_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specialty_service_table`
--
ALTER TABLE `specialty_service_table`
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
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `user_tbl` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `billing`
--
ALTER TABLE `billing`
  ADD CONSTRAINT `billing_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `billing_ibfk_3` FOREIGN KEY (`services`) REFERENCES `services` (`service_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `holliday_tbl`
--
ALTER TABLE `holliday_tbl`
  ADD CONSTRAINT `holliday_tbl_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_tbl` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `medical_records`
--
ALTER TABLE `medical_records`
  ADD CONSTRAINT `medical_records_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `official_receipt`
--
ALTER TABLE `official_receipt`
  ADD CONSTRAINT `official_receipt_ibfk_1` FOREIGN KEY (`patiend_id`) REFERENCES `patient` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patient_information`
--
ALTER TABLE `patient_information`
  ADD CONSTRAINT `patient_information_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
