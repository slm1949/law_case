-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 03 月 23 日 15:05
-- 服务器版本: 5.5.29
-- PHP 版本: 5.4.6-1ubuntu1.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `law_case`
--

-- --------------------------------------------------------

--
-- 表的结构 `think_article`
--

CREATE TABLE IF NOT EXISTS `think_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `case_id` int(11) NOT NULL,
  `article_name` varchar(50) NOT NULL,
  `sort` int(11) NOT NULL,
  `summary` varchar(500) NOT NULL,
  `content` text NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `think_article`
--

INSERT INTO `think_article` (`id`, `case_id`, `article_name`, `sort`, `summary`, `content`, `create_time`, `modify_time`) VALUES
(6, 6, 'thinkphp 自动传入的get 参数', 0, '你的', '', '2013-03-20 00:41:12', '2013-03-20 20:37:18'),
(7, 6, '的等等等等等等等等的', 0, '点点滴滴点点滴滴地', '', '2013-03-20 00:54:39', '2013-03-20 00:56:42'),
(8, 6, 'd d d d', 0, '飞飞哦哦', '', '2013-03-20 00:56:58', '0000-00-00 00:00:00'),
(9, 6, 'd d d d', 0, '凤飞飞', '', '2013-03-20 21:42:45', '0000-00-00 00:00:00'),
(10, 3, '是这样的', 0, '生活就是这个样子', '', '2013-03-20 22:08:31', '0000-00-00 00:00:00'),
(11, 6, 'd的等等等等等等等等', 0, '顶顶顶', '', '2013-03-20 22:20:26', '0000-00-00 00:00:00'),
(12, 2, 'ddd', 0, '顶顶顶顶顶顶顶顶顶顶顶', '<p>怎么设置默认为空</p>', '2013-03-20 22:21:36', '2013-03-22 00:11:09'),
(13, 2, '我的恶心情', 0, '无人知晓', '', '2013-03-20 22:22:47', '0000-00-00 00:00:00'),
(14, 3, '3', 0, '你的心思 我最懂', '', '2013-03-20 22:23:43', '0000-00-00 00:00:00'),
(15, 2, '我的', 0, '小情人', '<p>欢迎使用ueditor! &nbsp;你们的梦想<br /></p>', '2013-03-21 00:33:08', '0000-00-00 00:00:00'),
(16, 3, '都', 0, '对', '感到', '2013-03-22 23:48:46', '2013-03-22 23:54:16'),
(17, 3, '都', 0, '对', '顶顶顶顶顶顶顶', '2013-03-22 23:51:20', '0000-00-00 00:00:00'),
(18, 3, '得到', 0, '得到', '广告', '2013-03-22 23:51:45', '0000-00-00 00:00:00'),
(20, 4, '得到', 0, '小情人', '噩噩噩噩噩', '2013-03-23 00:21:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `think_case`
--

CREATE TABLE IF NOT EXISTS `think_case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture` blob NOT NULL,
  `create_time` datetime NOT NULL,
  `modify_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `think_case`
--

INSERT INTO `think_case` (`id`, `name`, `description`, `picture`, `create_time`, `modify_time`) VALUES
(4, 'slm1949', 'd的v', '', '0000-00-00 00:00:00', '2013-03-20 22:28:13'),
(6, 'slm1949', 'id\r\n 序号', '', '2013-03-19 21:31:36', '2013-03-20 20:58:30'),
(7, '我还是我', '你还是你', '', '2013-03-21 21:48:33', '2013-03-22 23:22:48');

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `user_name`, `password`) VALUES
(1, 'slm', '6515');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
