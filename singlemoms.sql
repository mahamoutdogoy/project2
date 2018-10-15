-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2018 at 02:02 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `singlemoms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adpost`
--

CREATE TABLE `adpost` (
  `aid` int(100) NOT NULL,
  `atitle` varchar(50) NOT NULL,
  `afield` varchar(50) NOT NULL,
  `adesc` varchar(100) NOT NULL,
  `alocation` varchar(50) NOT NULL,
  `duedate` date NOT NULL,
  `datepost` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adpost`
--

INSERT INTO `adpost` (`aid`, `atitle`, `afield`, `adesc`, `alocation`, `duedate`, `datepost`, `username`) VALUES
(1, 'Fitness', 'Healthcare professional', 'Zumba and Cardio', 'Koramangala', '2018-09-12', '2018-09-03', 'mahamat'),
(2, 'Master Chef', 'Other', 'Good Homely Food', 'Faser Town', '2018-10-26', '2018-09-03', 'mahamat'),
(3, 'Style Up', 'Other', 'Manicure and Pedicure', 'Taverekere', '2018-10-31', '2018-09-03', 'mahamat'),
(4, '30% offers on desserts ', 'Other', 'Come have feast in our restaurant and get 30% off on desserts', 'Chennai', '2018-10-19', '2018-09-07', 'icenspice'),
(5, '50% offer on spa for moma', 'Saloon', 'Exciting offers on spa treatment ', 'Forum  mall', '2018-10-16', '2018-09-07', 'icenspice');

-- --------------------------------------------------------

--
-- Table structure for table `adregister`
--

CREATE TABLE `adregister` (
  `username` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `btype` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adregister`
--

INSERT INTO `adregister` (`username`, `cname`, `email`, `btype`, `password`, `mobile`, `location`) VALUES
('icenspice', 'Ice And Spice', 'ins@gmail.com', 'Private', '12345', 9034293849, 'Chennai'),
('mahamat', 'aliccom', 'mahamatabdallah98@gmail.com', 'Private', '12345', 8989908980, 'ban');

-- --------------------------------------------------------

--
-- Table structure for table `adv`
--

CREATE TABLE `adv` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `phoneno` bigint(12) NOT NULL,
  `location` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `password` varchar(8) NOT NULL,
  `cpassword` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(11) NOT NULL,
  `replied` int(11) NOT NULL,
  `question_id` varchar(50) NOT NULL,
  `answer_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `like` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `replied`, `question_id`, `answer_detail`, `datetime`, `user_id`, `like`) VALUES
(1, 0, '44', 'you are aman', '2018-07-02 03:48:21', 36, 0),
(2, 0, '43', 'ans', '2018-07-02 04:30:54', 35, 0),
(3, 0, '43', 'good', '2018-07-06 08:55:29', 35, 0),
(4, 0, '45', 'okay i understand', '2018-07-06 08:57:14', 35, 0),
(6, 0, '46', 'nsidnsi', '2018-07-27 09:51:51', 44, 3),
(7, 0, '47', 'you are i think', '2018-08-12 18:05:51', 52, 1),
(8, 0, '48', 'something\r\n', '2018-08-26 13:52:18', 34, 1),
(9, 0, '49', 'salut', '2018-09-06 10:19:29', 35, 0),
(10, 0, '56', 'i think there some recruiter they can help you', '2018-09-07 03:35:18', 38, 0),
(11, 0, '54', 'Hey, I understand. Just try taking legal actions because it is not right for your husband not letting you see your child. This is not right. So take a legal action and there are laws in the constitution to help you.   ', '2018-09-07 08:01:00', 52, 0),
(12, 0, '57', 'You need not worry about it. Give him pocket money and teach him on how to save money. That will be better.', '2018-09-07 08:04:00', 52, 2),
(13, 0, '57', 'something', '2018-09-07 09:13:23', 63, 1),
(14, 0, '57', 'whatere', '2018-09-24 04:57:26', 65, 0),
(15, 0, '58', 'Hey send them to school', '2018-09-28 09:24:09', 66, 0);

-- --------------------------------------------------------

--
-- Table structure for table `appdetails`
--

CREATE TABLE `appdetails` (
  `jid` int(50) NOT NULL,
  `jmail` varchar(50) NOT NULL,
  `resume` varchar(5) NOT NULL,
  `education` varchar(50) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `language` varchar(50) NOT NULL,
  `jduedate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appdetails`
--

INSERT INTO `appdetails` (`jid`, `jmail`, `resume`, `education`, `experience`, `language`, `jduedate`) VALUES
(28, 'nanda@gmail.com', '', 'BCA, BTech', '0', 'English ', '2018-11-17'),
(29, 'mahamatabdallah98@gmail.com', 'NO', 'BCA', '2 years', 'translaror', '2018-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `jid` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `apply` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`jid`, `username`, `status`, `apply`) VALUES
(25, 'Jasmi', 'shortlisted', '2018-09-17 06:17:41'),
(25, 'laksh', 'applied', '2018-09-16 21:39:26'),
(25, 'rebecca', 'applied', '2018-09-18 16:14:27'),
(26, 'Jasmi', 'shortlisted', '2018-09-17 06:31:20'),
(28, 'Jasmi', 'applied', '2018-09-17 06:45:58'),
(28, 'nene', 'applied', '2018-09-28 11:27:11'),
(29, 'nene', 'shortlisted', '2018-09-28 11:27:23'),
(30, 'jasmi', 'shortlisted', '2018-09-24 06:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chatdetail_id` int(11) NOT NULL,
  `cdatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message` varchar(1000) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatdetail_id`, `cdatetime`, `message`, `user_id`, `chat_id`) VALUES
(44, '2018-07-06 09:36:55', 'how are you', 38, 24),
(45, '2018-07-06 09:40:37', 'i am good', 35, 24),
(46, '2018-07-06 09:44:10', 'i am mahamat', 5, 25),
(47, '2018-07-13 09:03:14', 'hii aman im ali', 34, 26),
(48, '2018-07-13 09:04:11', 'hey', 35, 26),
(49, '2018-07-13 09:54:45', 'hey i am prateek', 39, 27),
(50, '2018-07-27 09:52:45', 'hii', 44, 28),
(51, '2018-07-27 09:53:14', 'hey', 35, 28),
(52, '2018-08-26 14:29:46', 'hello\r\n', 34, 29),
(53, '2018-08-31 08:36:59', 'hey ali', 35, 30),
(54, '2018-09-02 09:05:25', 'salut', 34, 31),
(55, '2018-09-02 09:06:57', 'salut', 34, 32),
(56, '2018-09-02 09:08:38', 'salut', 35, 25),
(57, '2018-09-02 10:16:36', 'salut', 5, 33),
(58, '2018-09-02 10:17:00', 'oui salut admin', 35, 25),
(59, '2018-09-07 07:58:13', 'Hey Shalini, Long time no see.', 38, 34),
(60, '2018-09-07 08:05:52', 'hey\r\n', 52, 35),
(61, '2018-09-07 09:15:41', 'hey shalini i am samita ', 63, 36),
(62, '2018-09-28 09:24:44', 'hii', 66, 37);

-- --------------------------------------------------------

--
-- Table structure for table `chatmaster`
--

CREATE TABLE `chatmaster` (
  `chat_id` int(11) NOT NULL,
  `user_id_from` int(11) NOT NULL,
  `user_id_to` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatmaster`
--

INSERT INTO `chatmaster` (`chat_id`, `user_id_from`, `user_id_to`) VALUES
(24, 38, 35),
(25, 5, 35),
(26, 34, 35),
(27, 39, 35),
(28, 44, 35),
(29, 34, 37),
(30, 35, 34),
(31, 34, 5),
(32, 34, 5),
(33, 5, 35),
(34, 38, 52),
(35, 52, 35),
(36, 63, 52),
(37, 66, 52);

-- --------------------------------------------------------

--
-- Table structure for table `gstartd`
--

CREATE TABLE `gstartd` (
  `jid` int(100) NOT NULL,
  `jtitle` varchar(100) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `jdatepost` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gstartd`
--

INSERT INTO `gstartd` (`jid`, `jtitle`, `cname`, `location`, `jdatepost`, `username`) VALUES
(28, 'Need people for Data Entry', 'Nano and Thecho', 'Chennai', '2018-09-16', 'Nano'),
(29, 'Need Managers', 'Monish Co', 'bangalore', '2018-09-24', 'monishandco');

-- --------------------------------------------------------

--
-- Table structure for table `jobdetails`
--

CREATE TABLE `jobdetails` (
  `jid` int(100) NOT NULL,
  `jtype` varchar(50) NOT NULL,
  `jfield` varchar(50) NOT NULL,
  `jsalary` int(10) NOT NULL,
  `jsalarytype` varchar(15) NOT NULL,
  `jdesc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobdetails`
--

INSERT INTO `jobdetails` (`jid`, `jtype`, `jfield`, `jsalary`, `jsalarytype`, `jdesc`) VALUES
(28, 'Work from home', 'Freelancing', 3000, 'Monthly', 'need to type data from a source to our website'),
(29, 'Part-Time', 'computer and Technology', 9000, 'Monthly', 'need to help our clients in managing events just from home');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `jid` int(100) NOT NULL,
  `jtitle` varchar(50) NOT NULL,
  `jtype` varchar(50) NOT NULL,
  `jfield` varchar(50) NOT NULL,
  `jdesc` varchar(100) NOT NULL,
  `jquali` varchar(50) NOT NULL,
  `jsalary` varchar(10) NOT NULL,
  `jlocation` varchar(50) NOT NULL,
  `duedate` date NOT NULL,
  `datepost` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`jid`, `jtitle`, `jtype`, `jfield`, `jdesc`, `jquali`, `jsalary`, `jlocation`, `duedate`, `datepost`, `username`) VALUES
(1, 'Need people for Data Entry', 'Work from home', 'computer and Technology', 'need to type data from a source to our website', 'basic knowledge in computer and internet usage', '7000', 'Anywhere in India', '2018-12-01', '2018-08-27', 'sams'),
(2, 'Work from home event managers', 'Part-Time', 'Management', 'need to help our clients in managing events just from home', 'Any bachelors degree with good English communicati', '14000', 'Anywhere in India', '2018-11-10', '2018-09-03', 'sams'),
(3, 'Need Managers', 'Full-Time', 'Management', 'MBA graduates with 2 years of experience as a manger', 'MBA graduates', '60000', 'Bangalore', '2017-10-12', '2018-09-03', 'sams'),
(4, 'need teachers for senior secondary school', 'Full-Time', 'Teacher', 'higher secondary school teacher', 'Mphil degree with 2 years experience', '45000', 'Pune', '2018-12-05', '2018-08-23', 'minimini');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost1`
--

CREATE TABLE `jobpost1` (
  `id` int(20) NOT NULL,
  `Jtitle` varchar(100) NOT NULL,
  `Jtype` varchar(50) NOT NULL,
  `Jdesc` varchar(100) NOT NULL,
  `Jquali` varchar(50) NOT NULL,
  `Jsalary` int(10) NOT NULL,
  `Jlocation` varchar(50) NOT NULL,
  `Jddate` date NOT NULL,
  `jdatepost` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobpost1`
--

INSERT INTO `jobpost1` (`id`, `Jtitle`, `Jtype`, `Jdesc`, `Jquali`, `Jsalary`, `Jlocation`, `Jddate`, `jdatepost`, `username`) VALUES
(1, 'women Testers', 'full time ', 'test the code of the developers', 'graduate in computer related field', 70000, 'Bangalore', '2018-09-17', '2018-08-21', 'mahacompany'),
(2, 'assistant managers', 'full time ', 'manage things around in company ', 'MBA from reputed university', 100000, 'Chennai', '2019-01-01', '2018-08-20', 'mahacompany'),
(3, 'tester', 'full time ', 'testing job in MNC', 'Bachelors of Engineering degree in CS', 70000, 'Pune', '2018-09-01', '0000-00-00', 'monishandco'),
(4, 'Developer', 'full time ', 'Developing Application in MNC', 'UG in field of computer science (BCA, Bsc, BE, MCA', 80000, 'Chennai', '2018-09-17', '0000-00-00', 'monishandco'),
(5, 'women who can code', 'full time ', 'create modules for our fund raising website', 'graduate in computer related field', 50000, 'Shilong', '2018-01-01', '2018-08-20', 'mahacompany'),
(7, 'musician', 'week end', 'need female musician to conduct week end classes to students', 'any degree is fine but experience matters', 10000, 'Lahore', '2018-09-17', '2018-08-02', 'tbe'),
(8, 'Professor in University', 'full time ', 'physics professor required in the university of Delhi', 'Phd in physics or any related field, 4 years of te', 89000, 'Delhi', '2019-04-30', '2018-08-21', 'mahacompany');

-- --------------------------------------------------------

--
-- Table structure for table `mompd`
--

CREATE TABLE `mompd` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mompd`
--

INSERT INTO `mompd` (`username`, `email`, `phone`, `city`, `education`, `reason`) VALUES
('Jasmi', 'jasmi@gmail.com', 8937482390, 'Pune', 'higher Secondary', 'I adopted my kid'),
('laksh', 'lakshmi@gmail.com', 3467856324, 'chennai', 'Btech', 'I\'m a divorcee'),
('nene', 'nene@gmail.com', 8964739023, 'bangalore', 'BCA', 'I\'m a divorcee'),
('rebecca', 'rebecca@gmail.com', 567834231, 'Bangalore', 'Btech', 'My partner passed away'),
('uma', 'uma@gmail.com', 8926374856, 'Chennai', 'Btech', 'My partner passed away');

-- --------------------------------------------------------

--
-- Table structure for table `momreg`
--

CREATE TABLE `momreg` (
  `username` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `momreg`
--

INSERT INTO `momreg` (`username`, `fname`, `lname`, `password`) VALUES
('1641034', 'mahamqt', 'abdallah', '909090'),
('Jasmi', 'Jasmine', 'Joseph', '12345'),
('laksh', 'Lakshmi', 'Nathan', '12345'),
('nene', 'Nenechan', 'Nene', '12345'),
('rebecca', 'Rebecca', 'John', '12345'),
('uma', 'Uma', 'Sathyan', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `question_detail` varchar(2000) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `subtopic_id` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `heading`, `question_detail`, `datetime`, `user_id`, `subtopic_id`, `views`) VALUES
(54, 'about child', 'Me and my husband got divorced few months back. The child is right now in my husband\'s custody. He is not letting me see my child. What should I do? should I take any legal action.', '2018-09-06 16:41:15', 52, 0, 5),
(55, 'financial issues?', 'i am not able take care of my children', '2018-09-06 16:44:07', 61, 0, 0),
(56, 'my chlidren education', 'i am not able to take care', '2018-09-06 16:50:52', 62, 0, 2),
(57, 'Pocket Money', 'My son is 12 years old. He is being influenced by his peers and have been asking me for pocket money. Should I give him pocket money or not? I do not want him to get spoiled :)', '2018-09-07 07:56:03', 38, 0, 12),
(58, 'Child Management', 'How do I manage my child?', '2018-09-07 09:11:53', 63, 0, 4),
(59, 'today', 'test', '2018-09-24 04:56:51', 65, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reclog`
--

CREATE TABLE `reclog` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reclog`
--

INSERT INTO `reclog` (`username`, `password`) VALUES
('infantcare', '12345'),
('mahaCompany', '12345'),
('monishandco', '12345'),
('tbe', '12345'),
('technoloies', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `recregister`
--

CREATE TABLE `recregister` (
  `username` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `btype` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recregister`
--

INSERT INTO `recregister` (`username`, `cname`, `email`, `btype`, `password`, `mobile`, `location`) VALUES
('abccompany', 'ABC Company ltd', 'monishmrw@yahoo.com', 'Others', '12345', '1234567891', 'chennai'),
('amanmusic', 'Aman Music school', 'aman@gmail.com', 'Private', '12345', '8124526367', 'bangalore'),
('mahacompany', 'Mahamat Company', 'kmonish0206@gmail.com', 'Public', '12345', '9094675493', 'bangalore'),
('minimini', 'Mini Mini techo', 'mini@gmail.com', 'Private', '12345', '9723190984', 'Pune'),
('monishandco', 'MoniandTech', 'monish@gmail.com', 'Public', '12345', '1287345768', 'pune'),
('nandagopal', 'nadagopal teaching groups', 'nanda@gmail.com', 'Private', '12345', '8987465882', 'Delhi'),
('sams', 'sams work from home', 'sams@gmail.com', 'Private', '12345', '9823674893', 'jaipur');

-- --------------------------------------------------------

--
-- Table structure for table `recregister2`
--

CREATE TABLE `recregister2` (
  `username` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `btype` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `csize` varchar(20) NOT NULL,
  `smom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recregister2`
--

INSERT INTO `recregister2` (`username`, `name`, `cname`, `email`, `btype`, `password`, `mobile`, `location`, `csize`, `smom`) VALUES
('ali', 'alicom', 'com', 'ali@gmail.com', 'Private', '12345', '78643353', 'Chennai', '500-1000', 'Friends'),
('mahamat', 'Mahamat', 'Mahamat Mahamat', 'maha@gmail.com', 'Private', '12345', '9836784059', 'Chennai', '100-500', 'Friends'),
('monishandco', 'Monish ', 'Monish Co', 'monishju02@gmail.com', 'Public', '12345', '909842783', 'Bangalore', 'more than 1000', 'Friends'),
('Nano', 'Nandagopal', 'Nano and Thecho', 'nanda@gmail.com', 'Private', '12345', '9846384950', 'Hosur', '100-500', 'Online Advertisement');

-- --------------------------------------------------------

--
-- Table structure for table `smom`
--

CREATE TABLE `smom` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `phone` bigint(12) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpassword` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subtopic`
--

CREATE TABLE `subtopic` (
  `subtopic_id` int(11) NOT NULL,
  `subtopic_name` varchar(50) NOT NULL,
  `subtopic_description` varchar(500) NOT NULL,
  `s_status` varchar(20) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subtopic`
--

INSERT INTO `subtopic` (`subtopic_id`, `subtopic_name`, `subtopic_description`, `s_status`, `topic_id`) VALUES
(22, 'mon', 'dddffgg', 'dxcgghh', 26),
(23, 'singles', 'i am someone', 'qwerty', 1);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(11) NOT NULL,
  `topic_name` varchar(50) NOT NULL,
  `topic_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`topic_id`, `topic_name`, `topic_type`) VALUES
(1, 'single moms', 'noneed');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_acc_active` tinyint(1) DEFAULT NULL,
  `dob` date NOT NULL,
  `e_mail` varchar(100) DEFAULT NULL,
  `gender` varchar(20) NOT NULL,
  `uimg` varchar(255) NOT NULL,
  `isuser` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `country`, `state`, `address`, `user_type`, `username`, `fullname`, `password`, `user_acc_active`, `dob`, `e_mail`, `gender`, `uimg`, `isuser`) VALUES
(5, 'india', 'karnataka', 'tavekere', 'admin', 'mahamat', 'administrator', '12345', NULL, '2012-04-17', 'mahamatabdallah98@gmail.com', 'on', '', 1),
(38, 'india', 'karnataka', 'tavereker', 'user', 'alia', 'alia k', '12345', NULL, '0000-00-00', 'john@gmail.com', '1', 'ups/download.jpg', 0),
(42, 'india', 'karnataka', 'arekere', 'user', 'angel', 'angel diablo', '12345', NULL, '0000-00-00', 'aaa@gmail.com', '1', 'ups/download.jpg', 0),
(50, 'india', 'karnataka', 'brigade road', 'user', 'halia', 'halia mht', '827ccb0eea8a706c4c34a16891f84e7b', NULL, '1977-02-12', 'halia@gmail.com', '', 'ups/wallpaper2you_105835.jpg', 0),
(52, 'India', 'Karnataka', 'Koramangala', 'user', 'shalini', 'shalini m', '12345', NULL, '0000-00-00', 'kalid@gmail.com', '2', 'ups/wallpaper2you_105839.jpg', 0),
(60, 'india', 'Karnataka', 'tavarekere', 'user', 'safia', 'aa', '12345', NULL, '1985-02-07', 'safia@gmail.com', '', 'ups/6.jpg', 0),
(61, 'india', 'Karnataka', 'sg palya', 'user', 'affaf', 'affaf m', '12345', NULL, '1986-03-15', 'affaf@gmail.com', '', 'ups/10.jpg', 0),
(62, 'india', 'Karnataka', 'arekere', 'user', 'amelia', 'amelia p', '12345', NULL, '1981-02-06', 'amelia@gmail.com', '1', 'ups/13.jpg', 0),
(63, 'india', 'Karnataka', 'tavarekere', 'user', 'samita', 'samita m', '12345', NULL, '1991-02-14', 'sumita@gmail.com', '', 'ups/10.jpg', 0),
(64, 'india', 'Karnataka', 'arekere', 'user', 'ache', 'ache m', '12345', NULL, '1974-06-11', 'ache@gmail.com', '', 'ups/download.jpg', 1),
(65, 'india', 'Karnataka', 'tavakere', 'user', 'smitha', 'smitha m', '12345', NULL, '1990-02-08', 'smitha@gmail.com', '', 'ups/download (2).jpg', 0),
(66, 'India', 'Karnataka', 'Kalyanagar', 'user', 'nene', 'Nene Lakshmi', '12345', NULL, '1997-09-28', 'nene@gmail.com', '', 'ups/download (2).jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adpost`
--
ALTER TABLE `adpost`
  ADD PRIMARY KEY (`aid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `adregister`
--
ALTER TABLE `adregister`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `appdetails`
--
ALTER TABLE `appdetails`
  ADD KEY `appdetails_ibfk_1` (`jid`);

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`jid`,`username`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chatdetail_id`);

--
-- Indexes for table `chatmaster`
--
ALTER TABLE `chatmaster`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `gstartd`
--
ALTER TABLE `gstartd`
  ADD PRIMARY KEY (`jid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `jobdetails`
--
ALTER TABLE `jobdetails`
  ADD KEY `jobdetails_ibfk_1` (`jid`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`jid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `jobpost1`
--
ALTER TABLE `jobpost1`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recusername` (`username`);

--
-- Indexes for table `mompd`
--
ALTER TABLE `mompd`
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `momreg`
--
ALTER TABLE `momreg`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `reclog`
--
ALTER TABLE `reclog`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `recregister`
--
ALTER TABLE `recregister`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `recregister2`
--
ALTER TABLE `recregister2`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `smom`
--
ALTER TABLE `smom`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `subtopic`
--
ALTER TABLE `subtopic`
  ADD PRIMARY KEY (`subtopic_id`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adpost`
--
ALTER TABLE `adpost`
  MODIFY `aid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chatdetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `chatmaster`
--
ALTER TABLE `chatmaster`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `gstartd`
--
ALTER TABLE `gstartd`
  MODIFY `jid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `jid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobpost1`
--
ALTER TABLE `jobpost1`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `subtopic`
--
ALTER TABLE `subtopic`
  MODIFY `subtopic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adpost`
--
ALTER TABLE `adpost`
  ADD CONSTRAINT `adpost_ibfk_1` FOREIGN KEY (`username`) REFERENCES `adregister` (`username`);

--
-- Constraints for table `appdetails`
--
ALTER TABLE `appdetails`
  ADD CONSTRAINT `appdetails_ibfk_1` FOREIGN KEY (`jid`) REFERENCES `gstartd` (`jid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gstartd`
--
ALTER TABLE `gstartd`
  ADD CONSTRAINT `gstartd_ibfk_1` FOREIGN KEY (`username`) REFERENCES `recregister2` (`username`);

--
-- Constraints for table `jobdetails`
--
ALTER TABLE `jobdetails`
  ADD CONSTRAINT `jobdetails_ibfk_1` FOREIGN KEY (`jid`) REFERENCES `gstartd` (`jid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD CONSTRAINT `jobpost_ibfk_1` FOREIGN KEY (`username`) REFERENCES `recregister` (`username`);

--
-- Constraints for table `jobpost1`
--
ALTER TABLE `jobpost1`
  ADD CONSTRAINT `recusername` FOREIGN KEY (`username`) REFERENCES `reclog` (`username`);

--
-- Constraints for table `mompd`
--
ALTER TABLE `mompd`
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `momreg` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
