-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 04:58 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `festhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `boost`
--

CREATE TABLE IF NOT EXISTS `boost` (
  `user_id` int(20) NOT NULL,
  `fest_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boost`
--

INSERT INTO `boost` (`user_id`, `fest_id`) VALUES
(1, 1),
(1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `col_id` int(20) NOT NULL AUTO_INCREMENT,
  `col_name` varchar(200) NOT NULL,
  `col_priority` float NOT NULL,
  `follow` int(20) NOT NULL,
  `col_add` varchar(200) NOT NULL,
  `col_contact` bigint(11) NOT NULL,
  `col_link` varchar(100) NOT NULL,
  `col_img` varchar(500) NOT NULL,
  PRIMARY KEY (`col_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`col_id`, `col_name`, `col_priority`, `follow`, `col_add`, `col_contact`, `col_link`, `col_img`) VALUES
(1, 'G. B. Pant Govt. Engg. College', 16, 10, 'Okhla Industrial Estate, Okhla Phase III, New Delhi, Delhi 110020', 112686620, 'http://www.gbpec.edu.in/index.php', 'college_img/Gbpec.jpg'),
(7, 'Maharaja Surajmal Institute of Technology', 19, 10, 'C-4, Lal Sain Mandir Marg, Janak Puri, New Delhi, Delhi 110058', 1125528116, 'http://www.msit.in/', 'college_img/msit.jpg'),
(8, 'Maharaja Agrasen Institute of Technology', 20, 9, ' Plot No. 1, Sector-22, PSP Area, Rohini, Delhi, 110086', 1165647742, 'https://www.mait.ac.in/', 'college_img/mait.png'),
(9, 'Ambedkar Institute of Advanced Communication Technologies and Research', 14, 9, ' Geeta Colony, Delhi, 110031', 1121210161, 'http://aiactr.ac.in/', 'college_img/ambdkar.jpg'),
(10, 'Bhagwan Parshuram Institute of Technology', 16, 5, ' PSP-4, Dr KN Katju Marg, Sector 17, Rohini, Delhi, 110089', 1127572900, 'http://aiactr.ac.in/', 'college_img/bpit.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fest`
--

CREATE TABLE IF NOT EXISTS `fest` (
  `fest_id` int(20) NOT NULL AUTO_INCREMENT,
  `fest_name` varchar(80) NOT NULL,
  `fest_type` varchar(50) NOT NULL,
  `fest_desc` mediumtext NOT NULL,
  `col_id` int(20) NOT NULL,
  `boost` float NOT NULL,
  `fest_priority` float NOT NULL,
  `fest_loc` varchar(200) NOT NULL,
  `fest_date` date NOT NULL,
  `fest_org_name` varchar(100) NOT NULL,
  `fest_org_contact` varchar(50) NOT NULL,
  `reg_link` varchar(100) NOT NULL,
  `fest_img` varchar(500) NOT NULL,
  PRIMARY KEY (`fest_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fest`
--

INSERT INTO `fest` (`fest_id`, `fest_name`, `fest_type`, `fest_desc`, `col_id`, `boost`, `fest_priority`, `fest_loc`, `fest_date`, `fest_org_name`, `fest_org_contact`, `reg_link`, `fest_img`) VALUES
(1, 'Inceptum', 'Technical Fest', 'INCEPTUM is the Techno-Cultural Festival of G.B.Pant Engineering College, Delhi. The aim of INCEPTUM has always been, to foster scientific temperament among students through different means and to cater to all kinds of talent. This year we go bigger and better! We are here with the vision of bringing science and technology to the masses and to inspire the youth to achieve the unexpected by providing them with an exceptional opportunity, to showcase their talents. Making INCEPTUM merrier and jolly, we present the plethora of cultural events to make your journey incredible and indelible.  Come one, Come all!', 1, 1, 15, 'Okhla Industrial Estate, Okhla Phase III, New Delhi', '2017-04-04', 'Kartik Singh, Vishal Pandey', '9658745110', 'http://gbpec.org/users/sign_up', 'fest_img/inceptum.jpg'),
(2, 'Inceptum', 'Cultural Fest', 'INCEPTUM is the Techno-Cultural Festival of G.B.Pant Engineering College, Delhi. The aim of INCEPTUM has always been, to foster scientific temperament among students through different means and to cater to all kinds of talent. This year we go bigger and better! We are here with the vision of bringing science and technology to the masses and to inspire the youth to achieve the unexpected by providing them with an exceptional opportunity, to showcase their talents. Making INCEPTUM merrier and jolly, we present the plethora of cultural events to make you Come one, Come all!', 7, 5, 9, 'Okhla Industrial Estate, Okhla Phase III, New Delhi', '2017-04-04', 'Abhishek Singh', '965874511', 'http://gbpec.org/users/sign_up', 'fest_img/inceptum.jpg'),
(3, 'Avensis', 'Workshop', 'AVENSIS is the Annual Techno-Cultural festival of Maharaja Surajmal Institute Of Technology.The word ‘Avensis’ is derived from Latin and was chosen as the scientific name for Skylark-the male bird that flies very high, reaching apparently to the heavens. Going by its name, Avensis has achieved heights over the years in terms of popularity, grandeur and eminence, witnessing a footfall of over 7,000 students each year, with participation from around 50 colleges.The fest hosts a range of enthralling, challenging yet attractive events that offer a great variety in terms of content and the required skill sets, ensuring that you get plenty to choose from.', 7, 10, 18, '-4, Lal Sain Mandir Marg, Janak Puri, New Delhi', '2017-04-12', 'Pragati Sharma', '9965542210', 'https://www.eventshigh.com/delhi/avensis+-+the+annual+fest+of+msit', 'fest_img/avensis.jpg'),
(4, 'Genesis ', 'Management Fest', 'GENESIS is the Annual Cultural festival of Maharaja Surajmal Institute Of Technology.\r\n Going by its name, Genesis has achieved heights over the years in terms of popularity, grandeur and eminence, witnessing a footfall of over 7,000 students each year, with participation from around 50 colleges.\r\nThe fest hosts a range of enthralling, challenging yet attractive events that offer a great variety in terms of content and the required skill sets, ensuring that you get plenty to choose from.', 7, 1, 8, 'C-4, Lal Sain Mandir Marg, Janak Puri, New Delhi', '2017-04-29', 'Sakshi Sharma', '8875446602', 'https://www.eventshigh.com/delhi/avensis+-+the+annual+fest+of+msit', 'fest_img/genesis.jpg'),
(5, 'Techsurge and Mridang', 'Technical Fest ', 'Techsurge conjures up a vivid spectrum of science and technology adding fervor and zest to our everyday lives.\r\nHaving innovative and exciting competitions in myriad fields of technology and academia, TECHSURGE fosters in students the exuberance and zeal toy of students.', 8, 5, 20, ' Geeta Colony, Delhi, 110031', '2017-04-19', 'Kartik Vyas', '8854129564', 'http://maitlive.com/index', 'fest_img/t&m.jpg'),
(6, 'Corona ', 'Seminar', 'CORONA is the annual techno-cultural fest organized by the students of BHAGAWAN PARSHURAM INSTITUTE OF TECHNOLOGY in the month of March. This is a two day long extravaganza that comprises of events like choreography, rock night, star night and many other competitions which will bring out the hidden talents of college students.\r\n\r\nLoud music, tapping feet, excitement and an enthusiastic crowd is the general scene at CORONA. \r\nIt will have competitions modeled to test the technical acumen, programming skills, flair for business management, dancing and other cultural abilities of the participants. It is a festival that commences weeks before the actual dates, in the form of online contests and various other social initiatives.', 10, 4, 14, ' PSP-4, Dr KN Katju Marg, Sector 17, Rohini, Delhi, 110089', '2017-05-06', 'Devanshu Khanna', '9999629058', 'http://corona2k17.com/', 'fest_img/corona.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fest_eve`
--

CREATE TABLE IF NOT EXISTS `fest_eve` (
  `eve_id` int(20) NOT NULL AUTO_INCREMENT,
  `eve_name` varchar(50) NOT NULL,
  `eve_type` mediumtext NOT NULL,
  `fest_id` int(20) NOT NULL,
  PRIMARY KEY (`eve_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fest_eve`
--

INSERT INTO `fest_eve` (`eve_id`, `eve_name`, `eve_type`, `fest_id`) VALUES
(1, 'Code-Decode', 'Coding\r\n', 1),
(2, 'Dumb Charades', 'Cultural', 1),
(3, 'Robocon', 'ELECTRONICS- Robot making', 3),
(4, 'MOVE YOUR BODY', 'DANCE', 6);

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
  `user_id` int(20) NOT NULL,
  `col_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`user_id`, `col_id`) VALUES
(1, 9),
(1, 7),
(1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin_id`, `email`, `password`) VALUES
(1, 'abhishekjain.vs', '4563');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE IF NOT EXISTS `society` (
  `soc_id` int(20) NOT NULL AUTO_INCREMENT,
  `soc_name` varchar(50) NOT NULL,
  `soc_desc` mediumtext NOT NULL,
  `contact` varchar(50) NOT NULL,
  `organizer_name` varchar(50) NOT NULL,
  `soc_img` varchar(100) NOT NULL,
  `col_id` int(20) NOT NULL,
  PRIMARY KEY (`soc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`soc_id`, `soc_name`, `soc_desc`, `contact`, `organizer_name`, `soc_img`, `col_id`) VALUES
(1, 'Buniyaad', 'It is the Drama society of GBPEC.', '9716690880', 'Parth', 'society_img/buniyad.jpg', 1),
(2, 'Quizzine', 'It is the technical society of GBPEC', '9654485123', 'Prakhar', 'society_img/quizzine.jpg', 1),
(3, 'TECHNOCRATZ', 'Technocratz, the technical club of MSIT is an initiative to provide the students an open platform to share, discuss and gain knowledge about all that encapsulates the realm of technology. It beholds the ideology of learning together and growing together.', '9990955609', 'Vikas Singh', 'society_img/buniyad.jpg', 7),
(4, 'PRAKRITI', 'Prakriti, the eco club of MSIT, was founded on 3rd March ,2010, in the wake of need for a college society that aims at promoting and increasing environmental consciousness, awareness and responsibility amongst the college youth and the populace.\r\n\r\nAs a non profitable society, Prakriti is committed to the belief that solutions are more effective and enduring when they involve mass local participation in planning and implementing projects.', '8746496665', 'Kirti', 'society_img/prakriti.jpg', 7),
(5, 'GDG MSIT', 'Google Developers Group (GDG) at Maharaja Surajmal Institute of Technology, a subchapter of GDG New Delhi is a developer’s community that provides programmers an opportunity to hone their programming skills through an interactive format. The chapter was founded by Rahul Rajpal (IT 4th yr) in the year 2014 under aegis of Dr. Prabhjot Kaur (HOD , IT Department).\r\n\r\nSince its inception, GDG MSIT has hosted various events and workshops in the past for students to learn, share and discuss in a unique manner. The society organized a Cyber Security Workshop in November 2015 in association with i3India.', '9654328745', 'Rahul Kashyap', 'society_img/GDG.jpg', 7),
(6, 'AYAAM', 'Aayaam, the dramatics society of MAIT, is one of the well known names in the theatric circle of Delhi. Through the years, Aayaam has made its name as one of the most dedicated college-level societies and has won numerous events because of the sheer devotion and talent of all of its members.', ' 9178382278', 'RISHABH CHANGRA', 'society_img/ayyam.jpg', 8),
(7, 'AURA', 'Uplifting the glory of its name , meet Aura Western Dance Society of Maharaja Agrasen Institute of Technology. Founded in 2007, AURA has been a consistant part of cultural society of MAIT for the last 7 years. They have won plenty of prizes till date, but winning 3rd prize at IIT Delhi', '9810296176', 'vivek dixit', 'society_img/Aura.jpg', 8),
(8, 'BPIT-CSI', 'The mission of the CSI is to facilitate research, knowledge sharing, learning and career enhancement for all categories of IT professionals, while simultaneously inspiring and nurturing new entrants into the industry and helping them to integrate into the IT community. The CSI is also working closely with other industrial associations, government bodies and academia to ensure that the benefits of IT advancement ultimately percolate down to every single citizen of India. To help achieve these goals, the CSI has several Special Interest Groups (SIG’s) and various initiatives pertaining to affordable computing and the spread of computer literacy. An industrial trip was also organized for the students of CSE and IT department to Network Bulls, Gurgaon by the CSI Society.', '1125684479', 'Professor R.K. Vyas', 'society_img/bpit-csi.jpg', 10),
(9, 'ISO', 'PIT has adopted the Systems, Procedures and statutory and regulatory requirements as per ISO9001:2008 and has been certified for the same. The ISO 9001:2008 standards related to quality systems is designed to help BPIT to ensure that they meet the needs of Students, Industry and the Society in General. ISO 9001 in BPIT deals with the fundamentals of quality management systems and • Involves Top management in the improvement of the Quality management System practiced in BPIT • Facilitates the organization to become a student and Industry focused organization. • Ensures students and Employees satisfaction by delivering quality teaching and providing support functions that meet the needs and expectations of all concerned. • Increases the effectiveness and the efficiency of the organization through continual improvement in quality of systems and services.', '1128856479', 'Professor Kiran. Kaur', 'society_img/bit-iso.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `soc_eve`
--

CREATE TABLE IF NOT EXISTS `soc_eve` (
  `eve_id` int(20) NOT NULL AUTO_INCREMENT,
  `eve_name` varchar(50) NOT NULL,
  `eve_img` varchar(100) NOT NULL,
  `soc_id` int(20) NOT NULL,
  PRIMARY KEY (`eve_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `soc_eve`
--

INSERT INTO `soc_eve` (`eve_id`, `eve_name`, `eve_img`, `soc_id`) VALUES
(1, 'Riwayyat', 'soceve_img/riwaayat.jpg', 1),
(2, 'HackTime', 'soceve_img/riwaayat.jpg', 3),
(3, 'Make Green', 'soceve_img/makegreen.jpg', 4),
(4, 'ActShow', 'soceve_img/riwaayat.jpg', 6),
(5, 'Technical Symposium', 'soceve_img/technical_symposium.jpg', 8),
(6, 'Chakravyuh', 'soceve_img/riwaayat.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `college` varchar(50) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `user_img` varchar(100) NOT NULL,
  `interests` varchar(500) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_id`, `first_name`, `last_name`, `email`, `password`, `college`, `mobile_no`, `user_img`, `interests`) VALUES
(1, 'Abhishek', 'Jain', 'jain.abhishek@11', '4563', 'G.B Pant Govt. Engineering College', 8896541232, '10000683.jpg', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
