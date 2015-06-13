-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015-06-02 13:35:33
-- 服务器版本: 5.5.40-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `sedb`
--

-- --------------------------------------------------------

--
-- 表的结构 `manager_info`
--

CREATE TABLE IF NOT EXISTS `manager_info` (
  `real_name` varchar(50) NOT NULL,
  `id_card` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_auth` tinyint(1) NOT NULL,
  `auditor_auth` tinyint(1) NOT NULL,
  `book_auth` tinyint(1) NOT NULL,
  `intro` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `manager_info`
--

INSERT INTO `manager_info` (`real_name`, `id_card`, `user_id`, `password`, `user_auth`, `auditor_auth`, `book_auth`, `intro`) VALUES
('陈泽闽', '123123199401010001', 'Bpuck', '8b8ab5069cd7bd92a0a1cf6d5c47dd32', 1, 1, 0, 'test'),
('陈泽闽', '123123199401010001', 'Lpuck', '521545424917bb31f5ff988094aa162e', 1, 0, 0, '我陈泽闽，成绩从小优良，团结友爱，积极向上。遇到困难从不退缩，小学就是学校少先队员大队长五道杠，作风端正，长大后更是众人学习的好榜样！');

-- --------------------------------------------------------

--
-- 表的结构 `real_name`
--

CREATE TABLE IF NOT EXISTS `real_name` (
  `id_card` varchar(50) NOT NULL,
  `real_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_card`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `real_name`
--

INSERT INTO `real_name` (`id_card`, `real_name`) VALUES
('123123199401010001', '陈泽闽'),
('123123199401010002', '可托米'),
('123123199401010003', '欧文');

-- --------------------------------------------------------

--
-- 表的结构 `super_manager`
--

CREATE TABLE IF NOT EXISTS `super_manager` (
  `user_id` char(50) NOT NULL DEFAULT '',
  `user_pwd` char(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `super_manager`
--

INSERT INTO `super_manager` (`user_id`, `user_pwd`) VALUES
('test', '098f6bcd4621d373cade4e832627b4f6');

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `real_name` varchar(50) NOT NULL,
  `id_card` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vip_auth` tinyint(1) NOT NULL,
  `intro` text,
  `black_list` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user_info`
--

INSERT INTO `user_info` (`real_name`, `id_card`, `user_id`, `password`, `vip_auth`, `intro`, `black_list`) VALUES
('陈泽闽', '123123199401010001', 'MrZhang', 'c4ca4238a0b923820dcc509a6f75849b', 1, '我是张三，我为自己带眼a ', 0),
('可托米', '123123199401010002', 'qwe', '76d80224611fc919a5d54f0ff9fba446', 0, 'test', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
