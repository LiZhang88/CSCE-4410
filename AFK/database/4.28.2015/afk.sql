-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-04-28 22:12:25
-- 服务器版本： 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `afk`
--

-- --------------------------------------------------------

--
-- 表的结构 `securequestions`
--

CREATE TABLE IF NOT EXISTS `securequestions` (
`id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `term`
--

CREATE TABLE IF NOT EXISTS `term` (
  `PAGENAME` varchar(30) CHARACTER SET latin1 NOT NULL,
  `TERMNAME` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `term`
--

INSERT INTO `term` (`PAGENAME`, `TERMNAME`) VALUES
('logpage', 'Email Address'),
('logpage', 'password'),
('login', 'Document Collection'),
('login', 'TREC/NTCIR TOPICS'),
('login', 'A list of Keywords'),
('logpage', 'username'),
('logpage', 'password'),
('login', 'Document Collection'),
('login', 'TREC/NTCIR TOPICS'),
('login', 'A list of Keywords'),
('logpage', 'username'),
('logpage', 'password'),
('login', 'Document Collection'),
('login', 'TREC/NTCIR TOPICS'),
('login', 'A list of Keywords');

-- --------------------------------------------------------

--
-- 表的结构 `terms`
--

CREATE TABLE IF NOT EXISTS `terms` (
  `PAGENAME` varchar(30) NOT NULL,
  `TERMNAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `terms`
--

INSERT INTO `terms` (`PAGENAME`, `TERMNAME`) VALUES
('logpage', 'Email Address'),
('logpage', 'password'),
('login', 'Document Collection'),
('login', 'TREC/NTCIR TOPICS'),
('login', 'A list of Keywords'),
('logpage', 'username'),
('logpage', 'password'),
('login', 'Document Collection'),
('login', 'TREC/NTCIR TOPICS'),
('login', 'A list of Keywords'),
('logpage', 'username'),
('logpage', 'password'),
('login', 'Document Collection'),
('login', 'TREC/NTCIR TOPICS'),
('login', 'A list of Keywords');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `USER_ID` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `LASTLOG` date NOT NULL,
  `ifAnswer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`USER_ID`, `PASSWORD`, `LASTLOG`, `ifAnswer`) VALUES
('user1', '1234', '2015-03-01', 0),
('user1', '1234', '2015-03-01', 0),
('user1', '1234', '2015-03-01', 0);

-- --------------------------------------------------------

--
-- 表的结构 `userback`
--

CREATE TABLE IF NOT EXISTS `userback` (
  `USER_ID` varchar(30) CHARACTER SET latin1 NOT NULL,
  `PASSWORD` varchar(30) CHARACTER SET latin1 NOT NULL,
  `LASTLOG` date NOT NULL,
  `ifAnswer` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `userback`
--

INSERT INTO `userback` (`USER_ID`, `PASSWORD`, `LASTLOG`, `ifAnswer`) VALUES
('user1', '1234', '2015-03-01', 0),
('user1', '1234', '2015-03-01', 0),
('user1', '1234', '2015-03-01', 0);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL COMMENT 'useraddress',
  `password` varchar(32) NOT NULL COMMENT 'password',
  `securequestion` varchar(50) DEFAULT NULL,
  `secureAnswer` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `regtime` int(10) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `securequestion`, `secureAnswer`, `status`, `regtime`) VALUES
(1, 'guest@my.unt.edu', 'defaultpassword', 'What is your favourite color', 'Red', 1, 20141221),
(3, 'class@gmail.com', '1111111', 'number', '0', 1, 20150310);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `securequestions`
--
ALTER TABLE `securequestions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `securequestions`
--
ALTER TABLE `securequestions`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
