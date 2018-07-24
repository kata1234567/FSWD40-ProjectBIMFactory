-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 11:39 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cia`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `courseId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `capacity` int(12) NOT NULL,
  `cost` int(12) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `type` enum('frontend','backend','front-end and back-end','IT','graphic design') NOT NULL,
  `totalHours` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`courseId`, `name`, `description`, `img`, `capacity`, `cost`, `startDate`, `endDate`, `type`, `totalHours`) VALUES
(1, 'HTML5\r\n', 'HTML is a computer language devised to allow website creation. These websites can then be viewed by anyone else connected to the Internet. It is relatively easy to learn, with the basics being accessible to most people in one sitting; and quite powerful in what it allows you to create.\r\n', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaS0etOUi3zjl-KrVy7BAwJs-n5H14LV9d3zGxH2UyaOI5T7A_', 20, 150, '2018-01-11', '2018-07-11', 'frontend', 20),
(2, 'CSS', 'Stands for \"Cascading Style Sheet.\" Cascading style sheets are used to format the layout of web pages. They can be used to define text styles, table sizes, and other aspects of Web pages that previously could only be defined in a page\'s html.\r\n', ' https://image.freepik.com/free-icon/css-3-logo_318-41978.jpg \r\n', 20, 150, '2018-01-11', '2018-07-11', 'frontend', 12),
(3, ' javascript', 'JavaScript is a programming languages commonly used in web development. It was originally developed by Netscape as a means to add dynamic and interactive elements to websites. While JavaScript is influenced by java the syntax is more similar to C and is based on ECMAScript, a scripting language developed by Sun Microsystems', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSaBbYDM6lidHcU85igiboYZBlqXai4Z3y1I-gM2dz2OVMR22O-Mg  \r\n', 20, 300, '2018-11-07', '2018-11-20', 'frontend', 48),
(4, ' jQuery\r\n', ':jQuery is a concise and fast JavaScript library that can be used to simplify event handling, HTML document traversing, Ajax interactions and animation for speedy website development. jQuery simplifies the HTML\'s client-side scripting, thus simplifying Web 2.0 applications development.', ' https://i.pinimg.com/originals/c0/26/1a/c0261af0418d8ad72fdd8a7f4379d7db.png   ', 20, 150, '2018-11-20', '2018-11-25', 'frontend', 10),
(5, 'Typescript', 'TypeScript is designed for development of large applications and trans compiles  to JavaScript. As TypeScript is a superset of JavaScript, existing JavaScript programs are also valid TypeScript programs. TypeScript may be used to develop JavaScript applications for both client-side and server-side (Node) execution.', ' https://www.sitepen.com/images/masthead/solutions/typescript.svg \r\n', 20, 300, '2018-11-25', '2018-11-30', 'front-end and back-end', 48),
(6, ' AngularJS', 'is a Java-based open-source front-end web application framework mainly maintained by Google and by a community of individuals and corporations to address many of the challenges encountered in developing single-page application .', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/250px-Angular_full_color_logo.svg.png\r\n', 20, 300, '2018-12-01', '2018-12-07', 'front-end and back-end', 48),
(7, 'SASS', 'SASS(Syntactically awesome style sheets) is style sheet initially designed by Hampton Catlin and developed by Natalie Weizenbaum .\r\n', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2XiPpeisLaaCqz4t1uc_8jIQ5LWzhoDC3eUIrtTsA_ZjlvcmK\r\n', 20, 150, '2018-11-07', '2018-11-14', 'frontend', 10),
(8, 'MySQL', 'MySQL is an open source relational database management system (RDBMS) based on Structured Query Language (SQL). \r\n', 'https://andreyex.ru/wp-content/uploads/2016/10/Kak-ustanovit-MySQL-na-Ubuntu-16.04-logo-1.png\r\n', 20, 150, '2018-11-07', '2018-11-14', 'backend', 10),
(9, 'PHP', 'Stands for \"Hypertext Preprocessor.\" (It is a recursive acronym, if you can understand what that means.) PHP is an HTML-embedded Web scripting language. This means PHP code can be inserted into the HTML of a Web page.', 'https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/0015/1781/brand.gif?itok=iqZZjVCY\r\n', 20, 300, '2018-12-12', '2018-12-22', 'backend', 48),
(10, 'WordPress', ':WordPress allows you to build any kind of site you want: business site, blog, portfolio, the sky is the limit!\r\n', 'https://icon-icons.com/icons2/790/PNG/512/wordpress_icon-icons.com_65448.png', 20, 150, '2018-12-25', '2018-12-30', 'front-end and back-end', 24);

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_courses`
--

CREATE TABLE `enrolled_courses` (
  `enrolledmentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `coursesId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNumber` bigint(255) NOT NULL,
  `type` varchar(100) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  ADD UNIQUE KEY `userId` (`userId`),
  ADD UNIQUE KEY `coursesId` (`coursesId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
