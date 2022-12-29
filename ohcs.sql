-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 01:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ohcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(200) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `contact_number` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `postal_code` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `register_date` date NOT NULL,
  `register_time` time NOT NULL,
  `admin_status` int(1) NOT NULL DEFAULT 1,
  `profile_pic_status` int(1) NOT NULL DEFAULT 0,
  `profile_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_id`, `admin_name`, `age`, `gender`, `contact_number`, `email`, `password`, `address`, `city`, `postal_code`, `dob`, `register_date`, `register_time`, `admin_status`, `profile_pic_status`, `profile_image`) VALUES
(4, 'ADM1002', 'Admin', 34, 'Male', '0789866554', 'admin@mail.com', '$2y$10$Kw.ZB5XOZ8TsTuV8K3Otz.mggwBKix6Z/BUjzJKT19Mj0Nr04L9G.', 'Address Address', 'City', 'P.O BOX 000000', '1987-09-29', '2022-12-29', '12:12:57', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_id` bigint(11) NOT NULL,
  `appointment_type` varchar(200) NOT NULL,
  `patient_id` varchar(200) NOT NULL,
  `room_id` varchar(200) NOT NULL,
  `department_id` varchar(200) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `doctor_id` varchar(200) NOT NULL,
  `appointment_status` varchar(100) NOT NULL DEFAULT '0',
  `appointment_reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`appointment_id`, `appointment_type`, `patient_id`, `room_id`, `department_id`, `appointment_date`, `appointment_time`, `doctor_id`, `appointment_status`, `appointment_reason`) VALUES
(1, 'Regular', 'PT1001', 'RM1234', 'RAD192', '2022-11-14', '10:09:00', 'DOC1001', '0', 'Feeling back pain'),
(2, 'Regular', 'PT1002', 'RM12345', 'MED123', '2022-12-09', '10:11:00', 'DOC1002', '1', 'Feeling nausea'),
(3, 'VIP', 'PT1001', 'RM1234', 'RAD192', '2022-11-11', '10:13:00', 'DOC1001', '0', 'Back Pain'),
(4, 'Regular', 'PT1001', 'RM12345', 'MED123', '2022-11-11', '13:58:00', 'DOC1002', '1', 'Nose Bleeding'),
(5, 'Regular', 'PT1002', 'RM1234', 'RAD192', '2022-11-12', '15:02:00', 'DOC1001', '2', 'Stomach ache'),
(6, 'Premium', 'PT1001', 'RM1234', 'MED123', '2022-11-11', '15:27:00', 'DOC1002', '0', 'Head Ache'),
(10, 'VIP', 'PT1001', 'RM1234', 'RAD192', '2022-11-12', '17:43:00', 'DOC1001', '1', 'Back Pain'),
(11, 'VIP', 'PT1002', 'RM1234', 'RAD192', '2022-12-10', '13:12:00', 'DOC1001', '0', 'Flu'),
(12, 'Premium', 'PT1002', 'RM1234', 'MED123', '2022-12-10', '16:51:00', 'DOC1002', '1', 'Headache'),
(18, 'VIP', 'PT1005', 'RM1234', 'MED123', '2023-02-17', '13:40:00', 'DOC1004', '0', 'legs'),
(19, 'Premium', 'PT1008', 'RM1003', 'ONC101', '2022-12-09', '14:43:00', 'DOC1005', '0', 'Butts Pain'),
(20, 'Premium', 'ADM1002', 'RM12345', 'ONC101', '2022-12-09', '19:13:00', 'DOC1005', '2', 'better now'),
(21, 'Regular', 'DOC1005', 'RM1001', 'MED123', '2022-12-10', '09:16:00', 'DOC1001', '1', 'bandana oooh'),
(22, 'Select', 'ADM1002', 'RM1234', 'ONC101', '2022-12-02', '21:22:00', 'DOC1005', '2', 'ears pain'),
(23, 'VIP', 'DOC1004', 'RM12345', 'ONC101', '2022-12-09', '09:42:00', 'DOC1005', '0', 'head pain'),
(25, 'Regular', 'PT1008', 'RM1002', 'ONC101', '2022-12-10', '18:57:00', 'DOC1005', '2', 'naumwa'),
(26, 'Regular', 'PT1009', 'RM1234', 'ONC101', '2022-11-27', '01:13:00', 'DOC1005', '2', 'naumwa kifua'),
(27, 'VIP', 'PT1010', 'RM1234', 'ONC101', '2022-12-08', '07:08:00', 'DOC1005', '0', 'siumwi'),
(28, 'Regular', 'PT1011', 'RM1234', 'ONC101', '2022-12-21', '05:21:00', 'DOC1005', '1', 'Maumivu ya kichwa'),
(33, 'VIP', 'ADM1001', 'RM1001', 'ONC101', '2022-12-29', '18:47:00', 'DOC1005', '0', 'sick'),
(41, 'Regular', 'ADM1001', 'RM1002', 'ONC101', '2022-12-23', '16:24:00', 'DOC1005', '1', 'You will note from my enclosed resume that I have a strong background in financial and data analytics and customer services, reinforced by several related courses at The University of Dodoma. I am seeking a position leading towards a managerial career in the lending/credit industry.'),
(45, 'Regular', 'PT1008', 'RM1001', 'ONC101', '2022-12-23', '09:53:00', 'DOC1005', '0', 'mmmmmmmmmm'),
(46, 'Premium', 'PT1008', 'RM1002', 'ONC101', '2022-12-22', '09:01:00', 'DOC1005', '0', 'mmmmmmmm'),
(47, 'Regular', 'PT1008', 'RM1001', 'ONC101', '2022-12-23', '22:15:00', 'DOC1005', '1', 'bbbbbbbbbbbbbbbbbbbbbbbbbb'),
(48, 'VIP', 'DOC1005', 'RM1002', 'RAD192', '2022-12-20', '20:42:00', 'DOC1003', '0', 'mmmmmmmnbdnndh'),
(49, 'Premium', 'PT1008', 'RM1003', 'ONC101', '2022-12-29', '02:36:00', 'DOC1005', '0', 'demo demo demo '),
(50, 'VIP', 'PT1008', 'RM1002', 'ONC101', '2022-12-30', '01:49:00', 'DOC1005', '0', 'demos mifano'),
(51, 'Regular', 'PT1008', 'RM1002', 'ONC101', '2022-12-22', '23:14:00', 'DOC1005', '0', 'hhhhhhhhhhhhhhhhhhhhhhhhhh'),
(52, 'Premium', 'PT1008', 'RM1002', 'ONC101', '2023-01-05', '16:24:00', 'DOC1005', '2', 'qqqqqqqqqqqqqqqqq'),
(53, 'VIP', 'DOC1005', 'RM1002', 'HAE110', '2022-12-30', '15:32:00', 'DOC1006', '0', 'gggggggggggggggg'),
(54, 'VIP', 'PT1008', 'RM1001', 'ONC101', '2022-12-17', '13:44:00', 'DOC1005', '0', 'aaaaaaaaaaaaaaaaaaa'),
(55, 'VIP', 'ADM1001', 'RM1002', 'ONC101', '2022-12-31', '17:32:00', 'DOC1005', '1', 'oooooooooooooooo');

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `billing_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `patient_id` varchar(200) NOT NULL,
  `doctor_id` varchar(200) NOT NULL,
  `billing_date` date NOT NULL,
  `billing_time` time NOT NULL,
  `discount_amount` int(11) NOT NULL DEFAULT 0,
  `tax_amount` int(11) NOT NULL,
  `discount_reason` text NOT NULL,
  `discharge_date` date NOT NULL,
  `discharge_time` time NOT NULL,
  `billing_status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`billing_id`, `appointment_id`, `patient_id`, `doctor_id`, `billing_date`, `billing_time`, `discount_amount`, `tax_amount`, `discount_reason`, `discharge_date`, `discharge_time`, `billing_status`) VALUES
(1, 49, 'PT1008', 'DOC1005', '2022-12-29', '02:36:00', 0, 20, '', '0000-00-00', '00:00:00', 0),
(2, 50, 'PT1008', 'DOC1005', '2022-12-30', '01:49:00', 0, 15, '', '0000-00-00', '00:00:00', 0),
(3, 51, 'PT1008', 'DOC1005', '2022-12-22', '23:14:00', 0, 10, '', '0000-00-00', '00:00:00', 0),
(4, 52, 'PT1008', 'DOC1005', '2023-01-05', '16:24:00', 5000, 20, 'reason', '0000-00-00', '00:00:00', 1),
(5, 53, 'DOC1005', 'DOC1006', '2022-12-30', '15:32:00', 0, 15, '', '0000-00-00', '00:00:00', 0),
(6, 54, 'PT1008', 'DOC1005', '2022-12-17', '13:44:00', 0, 15, 'default', '0000-00-00', '00:00:00', 0),
(7, 55, 'ADM1001', 'DOC1005', '2022-12-31', '17:32:00', 0, 15, '', '0000-00-00', '00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `billing_records`
--

CREATE TABLE `billing_records` (
  `billing_records_id` int(11) NOT NULL,
  `billing_id` int(11) NOT NULL,
  `bill_type_id` int(11) NOT NULL,
  `bill_type` varchar(200) NOT NULL,
  `bill_amount` int(11) NOT NULL,
  `bill_date` date NOT NULL,
  `bill_status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_records`
--

INSERT INTO `billing_records` (`billing_records_id`, `billing_id`, `bill_type_id`, `bill_type`, `bill_amount`, `bill_date`, `bill_status`) VALUES
(1, 2, 1, 'Consultancy Charge', 22000, '2022-12-30', 0),
(2, 2, 2, 'Nuclear cardiology', 19500, '2022-12-10', 0),
(3, 2, 2, 'Chest XRay', 54000, '2022-12-10', 0),
(4, 2, 2, '(Treatment) - .Blood Test', 12000, '2022-12-10', 0),
(5, 2, 0, '(Treatment) - Ultrasound of the Abdomen', 70000, '2022-12-10', 0),
(6, 2, 9, '(Treatment) - Diagnostic Tests', 29000, '2022-12-10', 0),
(7, 3, 1, 'Consultancy Charge for (DOC1005)', 22000, '2022-12-22', 0),
(8, 3, 9, '(Treatment) - Diagnostic Tests', 29000, '2022-12-10', 0),
(9, 3, 1, '(Prescription) - Paracetamol', 18000, '2022-12-10', 0),
(10, 4, 1, 'Consultancy Charge for Dr. (Johaness Samwel)', 22000, '2023-01-05', 0),
(11, 4, 5, '(Treatment) - Nuclear cardiology', 19500, '2022-12-10', 0),
(12, 4, 7, '(Prescription) - Lovenox', 20000, '2022-12-10', 0),
(13, 4, 3, '(Prescription) - Miconazole', 21000, '2022-12-10', 0),
(14, 4, 11, '(Prescription) - Enalapril', 58200, '2022-12-11', 0),
(15, 4, 6, '(Prescription) - Cozaan', 325000, '2022-12-11', 0),
(16, 4, 6, '(Prescription) - Cozaan', 6500000, '2022-12-11', 0),
(17, 5, 1, 'Consultancy Charge - Dr. Max Mad', 500, '2022-12-30', 0),
(18, 6, 1, 'Consultancy Charge - Dr. Johaness Samwel', 500, '2022-12-17', 0),
(19, 7, 1, 'Consultancy Charge - Dr. Johaness Samwel', 500, '2022-12-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_id` varchar(200) NOT NULL,
  `department_name` varchar(200) NOT NULL,
  `dept_description` varchar(255) NOT NULL,
  `dept_status` varchar(200) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_id`, `department_name`, `dept_description`, `dept_status`) VALUES
(1, 'MED123', 'Medicine', 'Medicine', '1'),
(2, 'CAD746', 'Cardiology', 'Provides medical care to patients who have problems with their heart or circulation.', '1'),
(3, 'GYN102', 'Gynecology', 'Investigates and treats problems relating to the female urinary tract and reproductive organs, such as Endometriosis, infertility and incontinence', '1'),
(4, 'HAE110', 'Haematology', 'These hospital services work with the laboratory. In addition doctors treat blood diseases and malignancies related to the blood', '1'),
(5, 'MAT156', 'Maternity', 'Maternity wards provide antenatal care, delivery of babies and care during childbirth, and postnatal support', '1'),
(6, 'NEP111', 'Nephrology', 'Monitors and assesses patients with various kidney (renal) problems and conditions', '1'),
(7, 'ONC101', 'Oncology', 'A branch of medicine that deals with cancer and tumors. A medical professional who practices oncology is an oncologist. The Oncology department provides treatments, including radiotherapy and chemotherapy, for cancerous tumors and blood disorders', '1'),
(8, 'ORT012', 'Orthopaedics', 'Treats conditions related to the musculoskeletal system, including joints, ligaments, bones, muscles, tendons and nerves', '1'),
(9, 'RAD192', 'Radiology', 'Deals with the study and application of imaging technology like XRay', '1');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `doctor_id` varchar(200) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `department_id` varchar(200) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `postal_code` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `doc_status` varchar(200) NOT NULL DEFAULT '1',
  `education` varchar(200) NOT NULL,
  `experience` float NOT NULL,
  `consultancy_charge` float NOT NULL,
  `profile_pic_status` int(1) NOT NULL DEFAULT 0,
  `profile_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctor_id`, `doctor_name`, `age`, `gender`, `department_id`, `contact_number`, `Address`, `city`, `postal_code`, `password`, `doc_status`, `education`, `experience`, `consultancy_charge`, `profile_pic_status`, `profile_image`) VALUES
(2, 'DOC1001', 'Aneth Alisen', 20, 'Female', 'MED123', '0655534224', 'Ubungo, Mwenge', 'Dar es salaam', 'P.O BOX 63552', '123456', '1', 'Clinical Officer (CO)', 1, 38000, 0, ''),
(33, 'DOC1003', 'Baguma Baguma', 65, 'Male', 'RAD192', '0753657052', 'Kanyigo', 'Kagera', 'P.O BOX 05', '$2y$10$26htxN3Cevkciqh2nobqJuIOCD/3H7ayDxN/zpjZlptcsf6h/XjQC', '1', 'Doctrate (PHD)', 3, 23000, 0, ''),
(34, 'DOC1004', 'Jackson John', 64, 'Male', 'MED123', '0765664776', 'Nyegezi', 'Mwanza', 'P. O BOX 6645', '$2y$10$AJhIJY2SlqCDqBpbjoJ.ieUB0/VEFltDL8WvQ2zmTVDbyFDjIrux6', '1', 'Doctrate (PHD)', 11, 150000, 0, ''),
(35, 'DOC1005', 'Johaness Samwel', 34, 'Male', 'ONC101', '0977653535', 'Segerezi, Kinyerea', 'Dar es salaam', 'P. O BOX 33333', '$2y$10$DXop070sSECT11IklAUWNejIV8B9.JUPVXIH78B7lXAtkExrZPb2e', '1', 'Medical Doctor (MD)', 1, 500, 0, 'DOC1005.jpg'),
(36, 'DOC1006', 'Max Mad', 24, 'Male', 'HAE110', '098876654', 'UDOM', 'Dodoma', 'P. O BOX 33432', '$2y$10$6Btv/.GvGGu7Q3XQeGItPeA4K9jiickf1Pb7w.tn.lwMIUbdWwZ.y', '1', 'Doctrate (PHD)', 0, 500, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_timings`
--

CREATE TABLE `doctor_timings` (
  `doctor_timing_id` int(11) NOT NULL,
  `doctor_id` varchar(200) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `available_day` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(200) NOT NULL,
  `medicine_cost` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medicine_id`, `medicine_name`, `medicine_cost`, `description`, `status`) VALUES
(1, 'Paracetamol', 6000, 'For fever per day 1 pc', 1),
(2, 'Clotrimazole', 23000, 'Clotrimazole is an antifungal, prescribed for local fungal infections', 1),
(3, 'Miconazole', 7000, 'Prescribed for various skin infections such as jockitch and also for vaginal yeast infections', 1),
(4, 'Nystatin', 35400, 'Antifungal drug, prescribed for fungal infections of the skin mouth vagina and intestinal tract', 1),
(5, 'Lotensin', 8000, 'prevent your body from forming angiotensin', 1),
(6, 'Cozaan', 65000, 'ARBs block the effects of angiotensin on your heart.', 1),
(7, 'Lovenox', 5000, 'may prescribe an anticoagulant to prevent heart attack, stroke, or other serious health problems', 1),
(8, 'Abemaciclib', 4000, 'drug for the treatment of advanced or metastatic breast cancers.', 1),
(9, 'Cyclophosphamide', 2500, ' to treat lymphoma, multiple myeloma, leukemia, ovarian cancer, breast cancer, small cell lung cancer', 1),
(10, 'Captopril', 1000, 'used alone or in combination with other medications to treat high blood pressure and heart failure.', 1),
(11, 'Enalapril', 9700, 'to treat high blood pressure, diabetic kidney disease, and heart failure', 1),
(12, 'Ramipril', 7500, 'to treat high blood pressure, diabetic kidney disease', 1),
(13, 'Hydroxyurea', 1900, 'used in sickle-cell disease, essential thrombocythemia, chronic myelogenous leukemia and cervical cancer', 1),
(14, 'Phenprocoumon', 18000, 'Used for prevention of thrombosis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `patient_id` varchar(200) NOT NULL,
  `patient_name` varchar(255) NOT NULL,
  `admission_date` date NOT NULL,
  `admission_time` time NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_number` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `pincode` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `age` int(3) NOT NULL,
  `dob` date NOT NULL,
  `pat_status` int(1) NOT NULL DEFAULT 1,
  `profile_pic_status` int(1) NOT NULL DEFAULT 0,
  `profile_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `patient_id`, `patient_name`, `admission_date`, `admission_time`, `address`, `contact_number`, `city`, `pincode`, `password`, `blood_group`, `gender`, `age`, `dob`, `pat_status`, `profile_pic_status`, `profile_image`) VALUES
(2, 'PT1001', 'Janeth Alisen', '2022-12-11', '21:28:00', 'Ubungo, Shekilango', '0654009881', 'Dar es salaam', 'P.O BOX 9222222', '', 'AB+', 'Female', 0, '2012-02-05', 1, 0, ''),
(10, 'PT1003', 'Allen Alisen', '2022-11-23', '07:41:56', 'Kanyigo', '0753657052', 'Kagera', 'P. O BOX 05', '$2y$10$6On5PCq1/c3MFY2omnwbNuicbgVbULgHrw1J0/ma1.5R0OF6BaKuK', 'O', 'Male', 23, '0000-00-00', 1, 0, ''),
(14, 'PT1005', 'Bill Joe', '2022-11-25', '09:31:07', 'Kkoo', '098876654', 'Dar', 'Pobox 665', '......', 'B', 'Male', 24, '1978-10-26', 1, 0, ''),
(16, 'PT1008', 'Mtoto wa Joh', '2022-11-25', '10:42:00', 'Segerezi, Kinyerea', '0786666655', 'Dar es salaam', 'P.O BOX 0975', '$2y$10$PWiZROl5.c/xdqdAMneOLew4yhyRCPggJ3UGpLPES5qNTSi7AHAdy', 'AB', 'Female', 0, '2022-11-03', 1, 0, 'PT1008.jpg'),
(17, 'PT1009', 'Charles Kasanda', '2022-11-27', '08:52:52', 'UDOM', '0988887656', 'Dodoma', 'P.O BOX 088755', '$2y$10$G2YiAUFhv1ZA4bwH.JgSZODQbTbLpjWnxRVeTo3rQibVv0pb/TA/K', 'B', '', 21, '2000-11-11', 1, 0, ''),
(18, 'PT1010', 'MsuyaTz', '2022-11-29', '01:18:47', 'UDOM', '0988776576', 'Dodoma', 'P. O BOX 276465', '$2y$10$jXKgTrTLYxIcn2v0mpcQHuAxfxztD6dss42/dN8r9M0Pua7xxd5Be', 'A', '', 24, '1976-06-17', 1, 0, ''),
(21, 'PT1011', 'Nickson Geofrey', '2022-12-05', '10:17:27', 'Kinondoni', '0788654665', 'Dar es salaam', 'P. O. BOX 200947', '$2y$10$0izLJgE2m/YKU3iAR.GZ6esCFifIg6Atswrqzt6bg5aMhUADgURLu', 'AB', 'Male', 0, '1993-10-21', 1, 1, 'PT1011.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `prescription_id` int(11) NOT NULL,
  `doctor_id` varchar(200) NOT NULL,
  `patient_id` varchar(200) NOT NULL,
  `prescription_date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `appointment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`prescription_id`, `doctor_id`, `patient_id`, `prescription_date`, `status`, `appointment_id`) VALUES
(2, 'DOC1001', 'PT1002', '2022-11-12', 1, 2),
(3, 'DOC1002', 'PT1001', '2022-11-12', 1, 3),
(4, 'DOC1001', 'PT1001', '2022-11-12', 1, 2),
(5, 'DOC1002', 'PT1002', '2022-11-12', 1, 3),
(6, 'DOC1001', 'PT1001', '2022-11-12', 1, 1),
(7, 'DOC1001', 'PT1001', '2022-11-16', 1, 3),
(9, 'DOC1001', 'PT1002', '2022-11-16', 1, 11),
(11, 'DOC1001', 'PT1001', '2022-11-16', 1, 10),
(12, 'DOC1001', 'PT1002', '2022-11-16', 1, 5),
(13, 'DOC1001', 'PT1002', '2022-11-16', 1, 5),
(16, 'DOC1001', 'PT1002', '2022-11-16', 1, 11),
(17, 'DOC1002', 'PT1002', '2022-11-16', 1, 2),
(18, 'DOC1002', 'PT1002', '2022-11-16', 1, 12),
(19, 'DOC1001', 'PT1001', '2022-11-17', 1, 3),
(20, 'DOC1002', 'PT1001', '2022-11-17', 1, 4),
(21, 'DOC1005', 'PT1008', '2022-11-25', 1, 19),
(23, 'DOC1005', 'PT1008', '2022-11-26', 1, 19),
(24, 'DOC1005', 'PT1008', '2022-11-27', 1, 25),
(25, 'DOC1005', 'PT1009', '2022-11-27', 1, 26),
(26, 'DOC1005', 'DOC1004', '2022-12-07', 1, 23),
(27, 'DOC1005', 'PT1008', '2022-12-07', 1, 19),
(28, 'DOC1005', 'PT1008', '2022-12-07', 1, 45),
(29, 'DOC1005', 'PT1008', '2022-12-08', 1, 47),
(30, 'DOC1005', 'PT1008', '2022-12-09', 1, 45),
(31, 'DOC1005', 'PT1008', '2022-12-10', 1, 51),
(32, 'DOC1005', 'PT1008', '2022-12-10', 1, 52),
(33, 'DOC1005', 'PT1008', '2022-12-11', 1, 52);

-- --------------------------------------------------------

--
-- Table structure for table `prescription_records`
--

CREATE TABLE `prescription_records` (
  `prescription_records_id` int(11) NOT NULL,
  `prescription_id` int(11) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `cost` float NOT NULL,
  `total_cost` float NOT NULL,
  `unit` int(11) NOT NULL,
  `dosage` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription_records`
--

INSERT INTO `prescription_records` (`prescription_records_id`, `prescription_id`, `medicine_name`, `cost`, `total_cost`, `unit`, `dosage`, `status`) VALUES
(1, 11, 'Cyclophosphamide', 2500, 5000, 2, '1-0-1', 1),
(2, 11, 'Cozaan', 65000, 195000, 3, '0-1-0', 1),
(3, 11, 'Captopril', 1000, 4000, 4, '0-1-1', 1),
(6, 9, 'Lovenox', 5000, 5000, 1, '1-1-1', 1),
(10, 16, 'Abemaciclib', 4000, 12000, 3, '1-0-1', 1),
(12, 17, 'Captopril', 1000, 5000, 5, '0-1-0', 1),
(13, 18, 'Lovenox', 5000, 15000, 3, '1-0-0', 1),
(14, 13, 'Nystatin', 35400, 35400, 1, '0-0-1', 1),
(15, 19, 'Miconazole', 7000, 14000, 2, '0-1-0', 1),
(18, 21, 'Lovenox', 5000, 15000, 3, '0-1-1', 1),
(21, 23, 'Cozaan', 65000, 455000, 7, '1-0-1', 1),
(22, 23, 'Captopril', 1000, 6000, 6, '1-0-1', 1),
(24, 24, 'Lotensin', 8000, 48000, 6, '0-1-1', 1),
(25, 25, 'Lovenox', 5000, 10000, 2, '1-1-1', 1),
(26, 25, 'Abemaciclib', 4000, 20000, 5, '0-1-1', 1),
(27, 30, 'Paracetamol', 6000, 24000, 4, '1-0-1', 1),
(28, 30, 'Captopril', 1000, 6000, 6, '0-0-1', 1),
(34, 31, 'Paracetamol', 6000, 18000, 3, '1-0-1', 1),
(35, 32, 'Lovenox', 5000, 20000, 4, '0-1-0', 1),
(36, 32, 'Miconazole', 7000, 21000, 3, '0-1-1', 1),
(37, 33, 'Enalapril', 9700, 58200, 6, '1-1-1', 1),
(38, 33, 'Cozaan', 65000, 325000, 5, '1-1-1', 1),
(39, 33, 'Cozaan', 65000, 6500000, 100, '0-1-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_id` varchar(200) NOT NULL,
  `room_number` varchar(200) NOT NULL,
  `room_type` varchar(200) NOT NULL,
  `room_size` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `room_availability` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_id`, `room_number`, `room_type`, `room_size`, `status`, `room_availability`) VALUES
(1, 'RM1001', 'DEP1232', 'Regular', 'Extra Large Room', 1, 0),
(4, 'RM1002', 'DEP874', 'Premium', 'Big Room', 1, 0),
(5, 'RM1003', 'DEP874', 'Premium', 'Big Room', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatments`
--

CREATE TABLE `treatments` (
  `treatment_id` int(11) NOT NULL,
  `treatment_records_id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `doctor_id` varchar(200) NOT NULL,
  `patient_id` varchar(200) NOT NULL,
  `treatment_description` text NOT NULL,
  `uploads` varchar(255) NOT NULL,
  `treatment_date` date NOT NULL,
  `treatment_time` time NOT NULL,
  `treatment_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatments`
--

INSERT INTO `treatments` (`treatment_id`, `treatment_records_id`, `appointment_id`, `doctor_id`, `patient_id`, `treatment_description`, `uploads`, `treatment_date`, `treatment_time`, `treatment_status`) VALUES
(1, 2, 4, 'DOC1001', 'PT1001', 'Treatment description', 'Treatment uploads', '2022-11-12', '12:54:00', 0),
(2, 5, 2, 'DOC1001', 'PT1002', 'Treatment description 02', 'Treatment uploads 02', '2022-11-12', '13:04:00', 1),
(3, 9, 8, 'DOC1001', 'PT1001', 'Treatment description 03', 'Treatment uploads 03', '2022-11-12', '12:54:00', 0),
(4, 4, 1, 'DOC1001', 'PT1002', 'Treatment description 04', 'Treatment uploads 04', '2022-11-12', '12:54:00', 1),
(5, 5, 5, 'DOC1001', 'PT1002', 'treatment description demo oneeee', 'Blue and Red Books Clean Graphic Sales and Promos Business and Retail Back to School Poster.png', '2022-11-29', '16:46:00', 0),
(6, 8, 5, 'DOC1001', 'PT1002', 'treatment description demo twoooo', 'Screenshot 2022-09-06 220510.png', '2022-12-10', '16:52:00', 0),
(7, 12, 5, 'DOC1001', 'PT1002', 'oiuytrewasdfghjk', '20211019_075746.jpg', '2022-11-30', '07:04:00', 0),
(8, 14, 11, 'DOC1001', 'PT1002', 'demo demo', '1199649.jpg', '2023-01-27', '23:54:00', 0),
(9, 2, 3, 'DOC1001', 'PT1001', 'demo demo demo', '1199649.jpg', '2022-12-13', '12:59:00', 0),
(10, 7, 11, 'DOC1001', 'PT1002', 'demo again', '2413563.jpg', '2022-11-16', '12:11:16', 0),
(11, 6, 2, 'DOC1002', 'PT1002', 'demos', '806427.jpg', '2022-11-16', '01:17:24', 0),
(12, 1, 12, 'DOC1002', 'PT1002', 'headache treatment', '1199649.jpg', '2022-11-16', '02:50:54', 0),
(13, 4, 6, 'DOC1002', 'PT1001', 'demos demos menu', '1199649.jpg', '2022-11-17', '06:44:22', 0),
(14, 9, 4, 'DOC1002', 'PT1001', 'Homa kali', '1199649.jpg', '2022-11-22', '06:29:54', 0),
(15, 5, 19, 'DOC1005', 'PT1008', 'butts treatments', '1199649.jpg', '2022-11-25', '10:46:14', 0),
(16, 4, 23, 'DOC1005', 'DOC1004', 'This allows browsers to ensure that resources hosted on third-party servers have not been tampered with. Use of SRI is recommended as a best-practice, whenever libraries are loaded from a third-party source.', '2022_11_27_08_16_50_1669576610.png', '2022-11-27', '06:53:56', 0),
(17, 5, 23, 'DOC1005', 'DOC1004', 'This allows browsers to ensure that\r\nresources hosted on third-party servers\r\nhave not been tampered with. Use of SRI\r\nis recommended as a best-practice,\r\nwhenever libraries are loaded from a\r\nthird-party source.', '2022_11_27_08_16_59_1669576619.png', '2022-11-27', '07:09:55', 1),
(18, 3, 22, 'DOC1005', 'ADM1002', 'meeen', '1199649.jpg', '2022-11-27', '08:34:45', 0),
(19, 11, 25, 'DOC1005', 'PT1008', 'nimempa dawa', '1199649.jpg', '2022-11-27', '05:04:08', 0),
(20, 7, 26, 'DOC1005', 'PT1009', 'nimemtibu mgongo', 'Screenshot (73).png', '2022-11-27', '08:58:21', 1),
(21, 6, 0, 'DOC1005', '', 'nnnnnnmmmmmmmmmmbbbbbbbbbbb', 'Yellow and Green Minimalist Online Courses Poster Lanscape.png', '2022-12-09', '06:10:47', 0),
(22, 8, 45, 'DOC1005', 'PT1008', 'nimemtibu treatment', '2022_12_09_04_40_02_1670600402.jpg', '2022-12-09', '04:39:39', 0),
(23, 5, 50, 'DOC1005', 'PT1008', 'demo treatment', 'Red Black Digital Marketing Agency Instagram Post (1).png', '2022-12-10', '09:59:31', 0),
(24, 10, 50, 'DOC1005', 'PT1008', 'demo treatmemnt 22', 'procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpg', '2022-12-10', '10:04:22', 0),
(25, 1, 50, 'DOC1005', 'PT1008', 'demo two', 'procreator-ux-design-studio-VzJjPuk53sk-unsplash.jpg', '2022-12-10', '10:06:11', 0),
(26, 11, 50, 'DOC1005', 'PT1008', 'mmmmmmmmmnnnnnnn', '20211019_075746.jpg', '2022-12-10', '10:07:49', 0),
(27, 9, 50, 'DOC1005', 'PT1008', 'bbbbbbbbb', 'christopher-gower-m_HRfLhgABo-unsplash.jpg', '2022-12-10', '10:08:54', 0),
(28, 9, 51, 'DOC1005', 'PT1008', 'hhhhhhhhhhhhhhh', '20211019_075746.jpg', '2022-12-10', '10:11:51', 0),
(29, 5, 52, 'DOC1005', 'PT1008', 'qqqqqqqqqqqqqqq', 'Red Black Digital Marketing Agency Instagram Post.png', '2022-12-10', '11:21:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `treatment_records`
--

CREATE TABLE `treatment_records` (
  `treatment_records_id` int(11) NOT NULL,
  `treatment_type` varchar(200) NOT NULL,
  `treatment_cost` float NOT NULL,
  `treatment_notes` varchar(255) NOT NULL,
  `treatment_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `treatment_records`
--

INSERT INTO `treatment_records` (`treatment_records_id`, `treatment_type`, `treatment_cost`, `treatment_notes`, `treatment_status`) VALUES
(1, 'Blood Test', 12000, 'test checks for levels of 10 different components of every major cell in your blood', 1),
(2, 'Electrocardiogram', 80000, 'Records the electrical activity of the heart', 1),
(3, 'Echocardiogram', 10900, 'Provides an ultrasound picture that shows the structure of the heart chambers and surrounding areas, and it can show how well the heart is working.', 1),
(4, 'Colporrhaphy', 76500, 'surgical procedure in humans that repairs a defect in the wall of the vagina.', 1),
(5, 'Nuclear cardiology', 19500, 'Nuclear imaging techniques use radioactive materials to study cardiovascular disorders and diseases in a noninvasive way.', 1),
(6, 'Colposcopy', 62500, 'procedure to visually examine the cervix as well as the vagina and vulva using a colposcope.', 1),
(7, 'Spine Surgery', 87000, 'This entails opening the operative site with a long incision so the surgeon can view and access the spinal anatomy', 1),
(8, 'Trauma surgery', 73000, 'surgical specialty that utilizes both operative and non-operative management to treat traumatic injuries, typically in an acute setting', 1),
(9, 'Diagnostic Tests', 29000, 'may include MRI, CT, Bone Scan, Ultra sound, blood tests', 1),
(10, 'Chest XRay', 54000, ' projection radiograph of the chest used to diagnose conditions affecting the chest, its contents, and nearby structures', 1),
(11, 'Ultrasound of the Abdomen', 70000, 'noninvasive procedure used to assess the organs and structures within the abdomen', 1),
(12, 'Exercise Stress Test', 22000, 'This test is good for evaluating chest pain to see if your heart is the cause.', 1),
(13, 'Ultrasound of the Pelvis', 43000, 'noninvasive diagnostic exam that produces images that are used to assess organs and structures within the female pelvis', 1),
(14, 'Chemotherapy and Radiatio', 15200, 'Most common types of cancer treatment. They work by destroying these fast-growing cells.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_role` varchar(200) NOT NULL DEFAULT 'patient',
  `user_role_id` varchar(200) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullname`, `age`, `gender`, `email`, `password`, `user_role`, `user_role_id`, `status`) VALUES
(2, 'Janeth Alisen', 10, 'Female', 'janethalisen01@gmail.com', '123456', 'patient', 'PT1001', 0),
(3, 'Aneth Alisen', 20, 'Female', 'anethalisen01@gmail.com', '$2y$10$g3HneGDJsLEmVcLaGMeBdegOl7NNir.OMNuq6A/YTis6yrg2iHoY61', 'doctor', 'DOC1001', 1),
(79, 'Allen Alisen', 23, 'Male', 'allenalisen01@gmail.coml', '$2y$10$6On5PCq1/c3MFY2omnwbNuicbgVbULgHrw1J0/ma1.5R0OF6BaKuK', 'patient', 'PT1003', 1),
(88, 'Baguma Baguma', 65, 'Male', 'baguma@hotmail.com', '$2y$10$26htxN3Cevkciqh2nobqJuIOCD/3H7ayDxN/zpjZlptcsf6h/XjQC', 'doctor', 'DOC1003', 1),
(89, 'Jackson John', 64, 'Male', 'jackson.john@outlook.mail', '$2y$10$AJhIJY2SlqCDqBpbjoJ.ieUB0/VEFltDL8WvQ2zmTVDbyFDjIrux6', 'doctor', 'DOC1004', 1),
(92, 'Bill Joe', 24, '', 'billjoe@outlook.com', '......', 'patient', 'PT1005', 0),
(94, 'mfano two', 60, '', 'mfano2@mfano.com', '$2y$10$ymHD6lmC7iNRgRrSsOSKRuGlcBrVlrXwT7v4Dv9MGnKdoW4fV044W', 'patient', 'PT1007', 0),
(96, 'Johaness Samwel', 23, 'Male', 'johannesssamwel@gmail.com', '$2y$10$DXop070sSECT11IklAUWNejIV8B9.JUPVXIH78B7lXAtkExrZPb2e', 'doctor', 'DOC1005', 1),
(97, 'Mtoto wa Joh', 0, 'Female', 'mtotowajoh@gmail.com', '$2y$10$PWiZROl5.c/xdqdAMneOLew4yhyRCPggJ3UGpLPES5qNTSi7AHAdy', 'patient', 'PT1008', 0),
(98, 'Max Mad', 24, 'Male', 'maxmax@gmail.com', '$2y$10$6Btv/.GvGGu7Q3XQeGItPeA4K9jiickf1Pb7w.tn.lwMIUbdWwZ.y', 'doctor', 'DOC1006', 1),
(99, 'Charles Kasanda', 21, '', 'charleskasanda002@gmail.tz.ac', '$2y$10$G2YiAUFhv1ZA4bwH.JgSZODQbTbLpjWnxRVeTo3rQibVv0pb/TA/K', 'patient', 'PT1009', 0),
(100, 'MsuyaTz', 24, '', 'msuyatz@gmail.com', '$2y$10$jXKgTrTLYxIcn2v0mpcQHuAxfxztD6dss42/dN8r9M0Pua7xxd5Be', 'patient', 'PT1010', 0),
(103, 'Nickson Geofrey', 25, '', 'nickgeofrey@gmail.com', '$2y$10$0izLJgE2m/YKU3iAR.GZ6esCFifIg6Atswrqzt6bg5aMhUADgURLu', 'patient', 'PT1011', 0),
(106, 'Admin', 34, 'Male', 'admin@mail.com', '$2y$10$Kw.ZB5XOZ8TsTuV8K3Otz.mggwBKix6Z/BUjzJKT19Mj0Nr04L9G.', 'admin', 'ADM1002', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`billing_id`);

--
-- Indexes for table `billing_records`
--
ALTER TABLE `billing_records`
  ADD PRIMARY KEY (`billing_records_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_timings`
--
ALTER TABLE `doctor_timings`
  ADD PRIMARY KEY (`doctor_timing_id`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `prescription_records`
--
ALTER TABLE `prescription_records`
  ADD PRIMARY KEY (`prescription_records_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatments`
--
ALTER TABLE `treatments`
  ADD PRIMARY KEY (`treatment_id`);

--
-- Indexes for table `treatment_records`
--
ALTER TABLE `treatment_records`
  ADD PRIMARY KEY (`treatment_records_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_role_id` (`user_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `billing_records`
--
ALTER TABLE `billing_records`
  MODIFY `billing_records_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `doctor_timings`
--
ALTER TABLE `doctor_timings`
  MODIFY `doctor_timing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `prescription_records`
--
ALTER TABLE `prescription_records`
  MODIFY `prescription_records_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `treatments`
--
ALTER TABLE `treatments`
  MODIFY `treatment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `treatment_records`
--
ALTER TABLE `treatment_records`
  MODIFY `treatment_records_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
