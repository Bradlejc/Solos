# Solos

### Technology stack required to run: (MAMP, LAMP, WAMP)
## (Linux, Windows, Mac) Apache, PHP, MySQL

## To Run: 
Install PHP Server on local machine, I am using MAMP for Mac
MySQL is the database used, if another is used then the utils/config.php file will need to be modified accordingly

### Database Name: 
## vault

## more tables will be added as the project develops

### Create important documents table 
CREATE TABLE `important_documents` (
  `id` int(11) NOT NULL,
  `filename` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

### Create medical conditions table
CREATE TABLE `medical_conditions` (
  `id` int(11) NOT NULL,
  `medical_condition` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

### Create medical information table 
CREATE TABLE `medical_information` (
  `id` int(11) NOT NULL,
  `medical_advocate` varchar(250) DEFAULT NULL,
  `blood_type` varchar(250) DEFAULT NULL,
  `primary_care_physician` varchar(250) DEFAULT NULL,
  `primary_care_physician_number` varchar(100) DEFAULT NULL,
  `preferred_hospital` varchar(250) DEFAULT NULL,
  `preferred_hospital_address` varchar(200) DEFAULT NULL,
  `preferred_pharmacy` varchar(250) DEFAULT NULL,
  `preferred_pharmacy_number` varchar(100) DEFAULT NULL,
  `preferred_pharmacy_address` varchar(200) DEFAULT NULL,
  `family_health_history` varchar(250) DEFAULT NULL,
  `organ_donation` varchar(250) DEFAULT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

### Create personal information table
CREATE TABLE `personal_information` (
  `id` int(11) NOT NULL,
  `legal_name` varchar(100) DEFAULT NULL,
  `maiden_name` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `place_of_birth` varchar(300) DEFAULT NULL,
  `SSN` varchar(30) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `passport_number` varchar(250) DEFAULT NULL,
  `drivers_license_number` varchar(30) DEFAULT NULL,
  `PO_number` varchar(30) DEFAULT NULL,
  `church_affiliation` varchar(100) DEFAULT NULL,
  `military_service` varchar(30) DEFAULT NULL,
  `education` varchar(200) DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `citizenship_information` varchar(200) DEFAULT NULL,
  `spouse_other` varchar(200) DEFAULT NULL,
  `phone_code` varchar(30) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `email_password` varchar(250) DEFAULT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

### Create personal information for spouse table 
CREATE TABLE `personal_information_spouse` (
  `id` int(11) NOT NULL,
  `legal_name` varchar(100) DEFAULT NULL,
  `maiden_name` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `place_of_birth` varchar(300) DEFAULT NULL,
  `SSN` varchar(30) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `drivers_license_number` varchar(30) DEFAULT NULL,
  `PO_number` varchar(30) DEFAULT NULL,
  `church_affiliation` varchar(100) DEFAULT NULL,
  `military_service` varchar(30) DEFAULT NULL,
  `education` varchar(200) DEFAULT NULL,
  `occupation` varchar(200) DEFAULT NULL,
  `citizenship_information` varchar(200) DEFAULT NULL,
  `spouse_other` varchar(200) DEFAULT NULL,
  `phone_code` varchar(30) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

### Create pets table
CREATE TABLE `pets` (
  `id` int(11) NOT NULL,
  `pet_name` varchar(250) NOT NULL,
  `breed` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `vet_name` varchar(100) NOT NULL,
  `vet_number` varchar(100) NOT NULL,
  `pet_policy` varchar(100) NOT NULL,
  `policy_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

### Create siblings table
CREATE TABLE `siblings` (
  `id` int(11) NOT NULL,
  `sibling_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

### Create parents table
CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `parent_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

### Create users table 
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email_address` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8

### Create who to notify table
CREATE TABLE `who_to_notify` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

### Create siblings for spouse table
CREATE TABLE `siblings_spouse` (
  `id` int(11) NOT NULL,
  `sibling_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

### Create parents for spouse table
CREATE TABLE `parents_spouse` (
  `id` int(11) NOT NULL,
  `parent_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8

