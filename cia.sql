-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 09:19 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

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
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `img` text NOT NULL,
  `capacity` int(12) NOT NULL,
  `cost` int(12) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `totalHours` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `img`, `capacity`, `cost`, `startDate`, `endDate`, `type`, `totalHours`) VALUES
(1, 'HTML5\r\n', 'HTML is a computer language devised to allow website creation. These websites can then be viewed by anyone else connected to the Internet. It is relatively easy to learn, with the basics being accessible to most people in one sitting; and quite powerful in what it allows you to create.\r\n', 'http://www.stickpng.com/assets/images/5847f5bdcef1014c0b5e489c.png', 20, 150, '2018-01-11', '2018-07-11', 'frontend', 20),
(2, 'CSS', 'Stands for \"Cascading Style Sheet.\" Cascading style sheets are used to format the layout of web pages. They can be used to define text styles, table sizes, and other aspects of Web pages that previously could only be defined in a page\'s html.\r\n', 'http://www.visionesweb.com/images/aside/css3.jpg', 20, 150, '2018-01-11', '2018-07-11', 'frontend', 12),
(3, ' javascript', 'JavaScript is a programming languages commonly used in web development. It was originally developed by Netscape as a means to add dynamic and interactive elements to websites. While JavaScript is influenced by java the syntax is more similar to C and is based on ECMAScript, a scripting language developed by Sun Microsystems', 'data:image/png;base64,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 \r\n', 20, 300, '2018-11-07', '2018-11-20', 'frontend', 48),
(4, ' jQuery\r\n', ':jQuery is a concise and fast JavaScript library that can be used to simplify event handling, HTML document traversing, Ajax interactions and animation for speedy website development. jQuery simplifies the HTML\'s client-side scripting, thus simplifying Web 2.0 applications development.', ' https://i.pinimg.com/originals/c0/26/1a/c0261af0418d8ad72fdd8a7f4379d7db.png   ', 20, 150, '2018-11-20', '2018-11-25', 'frontend', 10),
(5, 'Typescript', 'TypeScript is designed for development of large applications and trans compiles  to JavaScript. As TypeScript is a superset of JavaScript, existing JavaScript programs are also valid TypeScript programs. TypeScript may be used to develop JavaScript applications for both client-side and server-side (Node) execution.', ' https://www.sitepen.com/images/masthead/solutions/typescript.svg \r\n', 20, 300, '2018-11-25', '2018-11-30', 'frontend', 48),
(6, ' AngularJS', 'is a Java-based open-source front-end web application framework mainly maintained by Google and by a community of individuals and corporations to address many of the challenges encountered in developing single-page application .', 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cf/Angular_full_color_logo.svg/250px-Angular_full_color_logo.svg.png\r\n', 20, 300, '2018-12-01', '2018-12-07', 'frontend', 48),
(7, 'SASS', 'SASS(Syntactically awesome style sheets) is style sheet initially designed by Hampton Catlin and developed by Natalie Weizenbaum .\r\n', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2XiPpeisLaaCqz4t1uc_8jIQ5LWzhoDC3eUIrtTsA_ZjlvcmK\r\n', 20, 150, '2018-11-07', '2018-11-14', 'frontend', 10),
(8, 'MySQL', 'MySQL is an open source relational database management system (RDBMS) based on Structured Query Language (SQL). \r\n', 'https://andreyex.ru/wp-content/uploads/2016/10/Kak-ustanovit-MySQL-na-Ubuntu-16.04-logo-1.png\r\n', 20, 150, '2018-11-07', '2018-11-14', 'backend', 10),
(9, 'PHP', 'Stands for \"Hypertext Preprocessor.\" (It is a recursive acronym, if you can understand what that means.) PHP is an HTML-embedded Web scripting language. This means PHP code can be inserted into the HTML of a Web page.', 'https://botw-pd.s3.amazonaws.com/styles/logo-thumbnail/s3/0015/1781/brand.gif?itok=iqZZjVCY\r\n', 20, 300, '2018-12-12', '2018-12-22', 'backend', 48),
(10, 'WordPress', ':WordPress allows you to build any kind of site you want: business site, blog, portfolio, the sky is the limit!\r\n', 'https://icon-icons.com/icons2/790/PNG/512/wordpress_icon-icons.com_65448.png', 20, 150, '2018-12-25', '2018-12-30', '', 24);

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_courses`
--

CREATE TABLE `enrolled_courses` (
  `enrolledmentId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `coursesId` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `courseName` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `name` varchar(55) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(55) COLLATE utf8_bin DEFAULT NULL,
  `message` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `type` varchar(100) NOT NULL DEFAULT '"user"'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `email`, `password`, `phoneNumber`, `type`) VALUES
(1, 'hassan', 'momen@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 624115625, '\"user\"'),
(2, 'hassan', 'momen@hotmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 123456789, '\"user\"'),
(3, 'hassan', 'hassan@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 154684816, 'admin'),
(4, 'basel', 'basel@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 123456882, '\"user\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled_courses`
--
ALTER TABLE `enrolled_courses`
  ADD UNIQUE KEY `userId` (`userId`),
  ADD UNIQUE KEY `coursesId` (`coursesId`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD CONSTRAINT `newsletter_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
