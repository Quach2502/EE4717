-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 02:05 AM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ee4717`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `feedback` text,
  PRIMARY KEY (`feedbackid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `name`, `email`, `feedback`) VALUES
(8, 'Long Nguyen', 'ndlong95@gmail.com', 'I love this!'),
(9, 'Long Nguyen', 'ndlong95@gmail.com', 'I love this!');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `foodid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `imagelink` char(200) NOT NULL,
  `description` text,
  `price` float unsigned NOT NULL,
  `restaurant` char(100) NOT NULL,
  `category` char(100) NOT NULL,
  PRIMARY KEY (`foodid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `name`, `imagelink`, `description`, `price`, `restaurant`, `category`) VALUES
(2, 'image1', 'image1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 1, 'Dunkin donuts', 'Beverage'),
(3, 'image2', 'image2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 2, 'Dunkin donuts', 'Beverage'),
(4, 'image3', 'image3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 3, 'Dunkin donuts', 'Beverage'),
(5, 'image4', 'image4.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 4, 'Dunkin donuts', 'Beverage'),
(6, 'image5', 'image5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 5, 'Dunkin donuts', 'Beverage'),
(7, 'image6', 'image6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 6, 'Dunkin donuts', 'Beverage'),
(8, 'image7', 'image7.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 7, 'McDonald', 'FastFood'),
(9, 'image8', 'image8.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 8, 'McDonald', 'FastFood'),
(10, 'image9', 'image9.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 9, 'McDonald', 'FastFood'),
(11, 'image10', 'image10.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 10, 'McDonald', 'FastFood'),
(12, 'image7', 'image11.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 11, 'McDonald', 'FastFood'),
(13, 'image12', 'image12.jpeg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nulla magna, vulputate eget hendrerit laoreet, dignissim non lacus. Cras id nunc scelerisque, volutpat elit sed, commodo ligula. Donec consequat convallis eros ac sodales. Suspendisse convallis felis mauris, efficitur vulputate urna lacinia eu. Nullam tincidunt viverra mi, et bibendum lorem accumsan vel. Nunc elementum lorem diam, sed imperdiet ante ullamcorper ut. Etiam libero dui, tincidunt sed efficitur mollis, feugiat id quam. Aenean fringilla justo at elit convallis ultrices. Nunc nec neque at massa accumsan tristique. Vivamus bibendum metus in consequat dictum. Morbi aliquet rhoncus mi, ac feugiat arcu placerat non. Ut massa ipsum, luctus id dignissim eget, laoreet in magna. Cras fermentum tristique diam, a posuere metus ornare eu.', 12, 'McDonald', 'FastFood');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `orderid` varchar(200) NOT NULL,
  `foodid` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `dateorder` datetime NOT NULL,
  `foodname` char(100) NOT NULL,
  PRIMARY KEY (`orderid`,`foodid`),
  KEY `foodid` (`foodid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`orderid`, `foodid`, `quantity`, `subtotal`, `dateorder`, `foodname`) VALUES
('admin5a007434dcec9', 2, 1, 2, '2017-11-06 15:39:48', 'image2'),
('admin5a007434dcec9', 10, 2, 20, '2017-11-06 15:39:48', 'image10'),
('longnguyen5a0135d56f4ee', 2, 5, 5, '2017-11-07 12:25:57', 'image1'),
('longnguyen5a01c341ef10e', 2, 7, 7, '2017-11-07 22:29:21', 'image1'),
('longnguyen5a01c341ef10e', 5, 5, 20, '2017-11-07 22:29:21', 'image4'),
('longnguyen5a01c341ef10e', 10, 2, 18, '2017-11-07 22:29:21', 'image9'),
('longnguyen5a02b5b1b8e6d', 9, 6, 48, '2017-11-08 15:43:45', 'image8'),
('longnguyen5a02e80b4b099', 3, 18, 36, '2017-11-08 19:18:35', 'image2'),
('longnguyen5a02eab685391', 3, 4, 8, '2017-11-08 19:29:58', 'image2'),
('longnguyen5a02eab685391', 4, 4, 12, '2017-11-08 19:29:58', 'image3'),
('longnguyen5a02eab685391', 5, 4, 16, '2017-11-08 19:29:58', 'image4'),
('longnguyen5a02eab685391', 6, 6, 30, '2017-11-08 19:29:58', 'image5'),
('longnguyen5a02eab685391', 10, 10, 90, '2017-11-08 19:29:58', 'image9'),
('longnguyen5a02eab685391', 11, 9, 90, '2017-11-08 19:29:58', 'image10'),
('longnguyen5a02eab685391', 12, 6, 66, '2017-11-08 19:29:58', 'image7'),
('longnguyen5a02eab685391', 13, 13, 156, '2017-11-08 19:29:58', 'image12'),
('longnguyen5a033bd0ad686', 5, 5, 20, '2017-11-09 01:16:00', 'image4'),
('ndlong955a012ae4e101b', 2, 21, 21, '2017-11-07 11:39:16', 'image1'),
('ndlong955a012b23113b5', 3, 4, 8, '2017-11-07 11:40:19', 'image2'),
('ndlong955a012ba71d51a', 3, 2, 4, '2017-11-07 11:42:31', 'image2'),
('ndlong955a012ba71d51a', 4, 3, 9, '2017-11-07 11:42:31', 'image3'),
('ndlong955a012ba71d51a', 8, 3, 21, '2017-11-07 11:42:31', 'image7'),
('ndlong955a013031d6d2e', 2, 4, 4, '2017-11-07 12:01:53', 'image1'),
('ndlong955a01320e2bf50', 2, 4, 4, '2017-11-07 12:09:50', 'image1'),
('ndlong955a0132b852660', 2, 3, 3, '2017-11-07 12:12:40', 'image1'),
('ndlong955a01348c9ede9', 2, 6, 6, '2017-11-07 12:20:28', 'image1');

-- --------------------------------------------------------

--
-- Table structure for table `orderhistory`
--

CREATE TABLE IF NOT EXISTS `orderhistory` (
  `orderid` varchar(200) NOT NULL,
  `username` char(100) DEFAULT NULL,
  `dateorder` datetime NOT NULL,
  `totalprice` double NOT NULL,
  `status` char(50) NOT NULL DEFAULT '"Processing"',
  `receiver` text NOT NULL,
  `address` text NOT NULL,
  `prefertime` datetime NOT NULL,
  PRIMARY KEY (`orderid`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderhistory`
--

INSERT INTO `orderhistory` (`orderid`, `username`, `dateorder`, `totalprice`, `status`, `receiver`, `address`, `prefertime`) VALUES
('admin5a007434dcec9', 'admin', '2017-11-06 15:39:48', 22, '"Processing"', 'Quach', 'NTU Hall 7', '2017-11-06 23:00:00'),
('longnguyen5a0135d56f4ee', 'longnguyen', '2017-11-07 12:25:57', 5, '"Processing"', 'Long Nguyen', '8 Nanyang Dr, Singapore 637719, Room 28-2-547, Block 28, Hall of Residence 5', '2017-11-17 11:11:00'),
('longnguyen5a01c341ef10e', 'longnguyen', '2017-11-07 22:29:21', 45, '"Processing"', 'Long Nguyen', '1, 2', '2017-11-09 04:11:00'),
('longnguyen5a02b5b1b8e6d', 'longnguyen', '2017-11-08 15:43:45', 48, '"Processing"', 'Long Nguyen', '1, 2afdaf', '2017-11-10 11:11:00'),
('longnguyen5a02e80b4b099', 'longnguyen', '2017-11-08 19:18:35', 36, '"Processing"', 'Long Nguyen', '1, 2', '1970-01-01 07:30:00'),
('longnguyen5a02eab685391', 'longnguyen', '2017-11-08 19:29:58', 468, '"Processing"', 'Long Nguyen', '1, 2', '2017-11-09 11:11:00'),
('longnguyen5a033bd0ad686', 'longnguyen', '2017-11-09 01:16:00', 20, '"Processing"', 'Long Nguyen', '1, 224ddd', '1970-01-01 07:30:00'),
('ndlong955a012ae4e101b', 'ndlong95', '2017-11-07 11:39:16', 21, '"Processing"', 'Long Nguyen', '1, 2', '2017-11-16 11:11:00'),
('ndlong955a012b23113b5', 'ndlong95', '2017-11-07 11:40:19', 8, '"Processing"', 'Long Nguyen', '1, 2', '2020-02-02 14:02:00'),
('ndlong955a012ba71d51a', 'ndlong95', '2017-11-07 11:42:31', 34, '"Processing"', 'Long Nguyen', '1, 2', '2017-11-09 11:11:00'),
('ndlong955a013031d6d2e', 'ndlong95', '2017-11-07 12:01:53', 4, '"Processing"', 'Long Nguyen', '1, 2', '2017-11-10 11:11:00'),
('ndlong955a01320e2bf50', 'ndlong95', '2017-11-07 12:09:50', 4, '"Processing"', 'Long Nguyen', '111', '2017-11-08 11:11:00'),
('ndlong955a0132b852660', 'ndlong95', '2017-11-07 12:12:40', 3, '"Processing"', 'Long Nguyen', '111', '2017-11-09 11:11:00'),
('ndlong955a01348c9ede9', 'ndlong95', '2017-11-07 12:20:28', 6, '"Processing"', 'Long Nguyen', '1232', '2017-11-09 16:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` char(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `handphone` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` text,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `fullname`, `email`, `handphone`, `password`, `address`) VALUES
('longnguyen', 'Long Nguyen', 'ndlong95@gmail.com', '83569216', '25d55ad283aa400af464c76d713c07ad', '1, 224ddd'),
('ndlong95', 'Long Nguyen', 'ndlong95@gmail.com', '83569217', 'e78582c7fa761cb9358009503f2810a9', '1232');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`foodid`) REFERENCES `food` (`foodid`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetails_ibfk_3` FOREIGN KEY (`orderid`) REFERENCES `orderhistory` (`orderid`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
