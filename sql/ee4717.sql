-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 11:55 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodid`, `name`, `imagelink`, `description`, `price`, `restaurant`, `category`) VALUES
(2, 'Breakfast set', 'image1.jpg', 'With bread, milk and salad.', 3.5, 'Dunkin donuts', 'Dessert'),
(3, 'Sweat buns', 'image2.jpg', 'With eggs, sugar and milk.', 2, 'Dunkin donuts', 'Dessert'),
(4, 'Bread lunch set', 'image3.jpg', 'Lunch set with black bread, cheese and ham.', 3, 'Chow', 'Main course'),
(5, 'Crab snack', 'image4.jpeg', 'Crab flavored snack. Milky spicy.', 1, 'Dunkin donuts', 'Dessert'),
(6, 'Italian Cheese Pizza', 'image5.jpg', 'Medium size pizza with Italian cheese, beef and tomato sauce.', 15, 'Dunkin donuts', 'Dessert'),
(7, 'Grilled beef', 'image6.jpg', 'Grilled beef steak with mash potato and pepper sauce.', 15.6, 'Chow', 'Main course'),
(8, 'Chocolate cake', 'chocolatecake.jpg', 'French gateau au chocolat', 7, 'Dunkin donuts', 'Dessert'),
(9, 'Seaweed Salad', '582_seaweed.jpg', 'Spicy seaweed salad', 8, 'JEFF', 'Salad'),
(10, 'Fries Potato', 'image9.jpeg', 'Big size fries', 4, 'KFC', 'Fast Food'),
(11, 'Egg Bread', 'image10.jpeg', 'With egg, meal and sugar. ', 10, 'Dunkin donuts', 'Dessert'),
(12, 'Sweet & Sour Chicken', '561_suantianji.jpg', 'Sweet & Sour Chicken with white rice.', 12.5, 'JEFF', 'Main course'),
(13, 'Stir Fried Fish', '536_huachaoyupian.jpg', 'Stir Fried Fish with white rice.', 12, 'JEFF', 'Main course'),
(14, 'Vietnamese rice paper rolls', '1175_Rice_Paper_Rolls.jpg', 'with vermicelli, mint and coriander. Dairy Free Vegan.', 12, 'Chow', 'Main course'),
(15, 'Popcorn Chicken Lunch', '662_Popcorn_Chicken_Lunch.jpg', '1 reg mini popcorn chicken\r\n1 reg potato & gravy\r\n1 reg chips\r\n1 reg drink', 7.8, 'KFC', 'Fast Food'),
(16, 'Cheese Snack Burger Combo', '8561_658_Cheese_Snack_Burger.png', 'Comes with the Colonel''s favourite mayo, fresh crisp lettuce and a slice of cheese. Upgrade to REG Combo come with reg chips and reg drink.', 8.3, 'KFC', 'Fast Food'),
(17, 'Ultimate Burger Combo', '8555_651_Ultimate-Burger-Meal.png', '1 Burger, 1 pc Original Recipe,1 reg Potato & Gravy,1 reg Chips,1 reg Drink.', 17, 'KFC', 'Fast Food'),
(18, 'Prawn summer rolls', '1176_Prawn_Summer_Rolls.jpg', 'with chives, coriander, lettuce and peanut nahm prick. Dairy Free.', 14, 'Chow', 'Main course'),
(19, 'Fresh market fish sashimi', '3991_Fresh_market_fish_sashimi_1.jpg', 'with fresh lemon and wasabi. Dairy Free', 17, 'Chow', 'Main course'),
(20, 'Pekin duck lettuce cups', '1177_Pekin_duck_lettuce_cups.jpg', 'with shiitake mushroom, garlic, lemongrass and spring onion. Dairy Free.', 18, 'Chow', 'Salad'),
(21, 'Grilled free range chicken salad', '1178_Grilled.jpg', 'with roasted cashews, red cabbage and coriander. Dairy Free Gluten Free.', 20, 'Chow', 'Salad'),
(22, 'Rare prime angus beef salad', '1196_Rare_prime.jpg', 'with mint, tomato, coriander, roasted peanuts and nahm prik. Dairy Free Gluten Free.', 20, 'Chow', 'Salad'),
(23, 'Asian Greens', '1209_Asian_Greens.jpg', 'with sesame oil and oyster sauce. Dairy Free. Gluten Free upon request.', 12, 'Chow', 'Salad'),
(24, 'Banana leaf tarakihi', '1212_Banana_leaf.jpg', 'with sweet and tangy coconut sauce. Dairy Free. Gluten Free.', 17, 'Chow', 'Salad'),
(25, 'Salmon parcels', '1213_Salmon_parcels.jpg', 'with spinach and cashew pesto, pickled ginger and soy sauce. Dairy Free.', 17, 'Chow', 'Main course'),
(26, 'Deluxe Quater Pack', '8554_650_Deluxe-Quarter-Pack.png', '3 pcs Original Recipe, 1 reg Coleslaw, 1 Moro Bar, 1 Bread Roll, Reg Potato & Gravy, reg Drink.', 18, 'KFC', 'Fast Food'),
(27, '3 Piece Quater Pack', '648_647_Quarter-Pack.png', '3 pcs Original Recipe, 1 Bread Roll, reg Chips, reg Potato & Gravy, reg Drink.', 15, 'KFC', 'Fast Food'),
(28, 'Colonel Burgers', '653_Colonel.png', 'Lettuce, tomato, zured onion and mayo.', 9.5, 'KFC', 'Fast Food'),
(29, 'Big Snack Burgers', '659_Big_Snack_Burger.png', 'two chicken patties with fresh crisp lettuce, cheese, gherkins and sweet mayo on a seeded bun.', 5.9, 'KFC', 'Fast Food'),
(30, 'Twisters combo', '2467_Picture20.png', 'Freshly made to order with lettuce, tomato, red onion and your choice of sauce below. Combo come with reg drink and reg chips', 12, 'KFC', 'Fast Food'),
(31, 'Popcorn Chicken Lunch', '662_Popcorn_Chicken_Lunch.jpg', '1 reg mini popcorn chicken\r\n1 reg potato & gravy\r\n1 reg chips\r\n1 reg drink', 7.8, 'KFC', 'Fast Food');

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
('longnguyen5a03571e7538a', 14, 4, 48, '2017-11-09 03:12:30', 'Vietnamese'),
('longnguyen5a03571e7538a', 16, 44, 365.2, '2017-11-09 03:12:30', 'Cheese'),
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
('longnguyen5a03571e7538a', 'longnguyen', '2017-11-09 03:12:30', 413.2, '"Processing"', 'Long Nguyen', '1, 224ddd', '1970-01-01 07:30:00'),
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
