-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 05:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firm`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(15) NOT NULL,
  `title` varchar(500) NOT NULL,
  `sub_title` varchar(500) NOT NULL,
  `slugun` varchar(500) NOT NULL,
  `paragraph` varchar(2000) NOT NULL,
  `type` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `sub_title`, `slugun`, `paragraph`, `type`) VALUES
(3, ' Criminal Laws', 'bad', 'fdsf', ' gdfgdfgdfgdfg           ', 'laws'),
(7, 'The 1945 Constitution of the Republic of Indonesia ', 'As amended by the First Amendment of 1999, the Second Amendment of 2000, the Third Amendment of 2001 and the Fourth Amendment of 2002', 'THE PREAMBLE TO THE CONSTITUTION ', 'Article 1\r\n(1) The State of Indonesia shall be a unitary state in the form of a republic.\r\n(2) Sovereignty is in the hands of the people and is implemented according to\r\nthis Constitution.\r\n(3) The State of Indonesia shall be a state based on the rule of law.', 'constitution'),
(9, 'Jurisdiction the Supreme Court', 'Issue and execution of processes of Appellate Division: ', 'Justice', ' Under article 104, the Appellate Division shall have power to issue such directions, orders, decrees or writs as may be necessary for doing complete justice in any cause or matter pending before it, including orders for the purpose of securing the attendance of any person or the discovery or production of any document.', 'court'),
(10, 'Reforming Legal Education in Bangladesh', 'Journal Information', 'education', 'The quarterly Journal of Legal Education, published since 1948, is made available without cost to full-time faculty at member schools through the courtesy of West and Foundation Press, which print the Journal. The Journal is edited for a term of years by faculty at a member school or schools. Currently, Southwestern Law School and Northeastern University School of Law are providing the editorial leadership, as well as administrative and financial support. The AALS provides some financial and mailing support. An editorial board of 12 faculty members reviews submissions and provides policy advice. The Journal addresses issues confronting legal educators, including curriculum development, teaching methods and scholarship, and serves as an outlet for emerging areas of scholarship and teaching.', 'law edu'),
(11, 'Career in Law', 'Career Talk on', 'Legal career', 'Law students have multiple career options to choose from once they graduate. This, however, can become a daunting task for many in the absence of proper guidelines or assistance. With this in view, Career Club of Department of Law, University of Dhaka undertook the initiative to host a Career Talk on ‘Career in Law’ on Thursday, November 9, 2017 at the premises of Law Faculty. Students from honors and master’s level were participants at the event', 'law career');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `chamber_address` varchar(40) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `experience` varchar(40) NOT NULL,
  `qualification` varchar(40) NOT NULL,
  `total_sol_case` int(20) NOT NULL,
  `avaibility` varchar(25) NOT NULL,
  `fees` int(20) NOT NULL,
  `bio` varchar(30) NOT NULL,
  `type` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `designation`, `email`, `photo`, `chamber_address`, `phone`, `experience`, `qualification`, `total_sol_case`, `avaibility`, `fees`, `bio`, `type`, `password`, `status`) VALUES
(3, 'admin', '', 'admin@gmail.com', '', '', '0171111111', '', '', 0, '', 0, '', 'admin', '12345', 0),
(9, 'Tutul', 'cr', 'tutul30@gmail.com', '', 'gdfghdfghdfh', '456547', 'fhdghdfhdfhdfh', 'dfhdfhd', 44, 'gg', 5656, 'dgdfgdfghdfhd 	            		 ', 'user', '12345', 1),
(10, 'Hridoy', 'Devorse Specialist', 'hridoyanik@gmaill.com', 'me.JPG', 'gdfghdfghdfh', '45634563463', 'fgdfgdfgd', ' dfhdfhd', 44, 'gg', 500, 'dfsdfsdf', 'user', '12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
