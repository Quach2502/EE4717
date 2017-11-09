-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 09, 2017 at 11:54 AM
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
