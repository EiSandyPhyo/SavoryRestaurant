-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2019 at 09:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savory_restaurant_esdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `orderitem_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderitem_id`, `order_id`, `submenu_id`, `order_qty`) VALUES
(1, 1, 6, 1),
(2, 1, 28, 1),
(3, 1, 37, 1),
(4, 2, 15, 1),
(5, 3, 15, 1),
(6, 4, 6, 1),
(7, 4, 28, 1),
(8, 4, 37, 1),
(9, 5, 5, 1),
(10, 6, 5, 1),
(11, 6, 6, 1),
(12, 7, 10, 1),
(13, 7, 6, 1),
(14, 7, 5, 1),
(15, 7, 15, 1),
(16, 0, 10, 1),
(17, 0, 6, 1),
(18, 0, 5, 1),
(19, 0, 15, 1),
(20, 0, 10, 1),
(21, 0, 6, 1),
(22, 0, 5, 1),
(23, 0, 15, 1),
(24, 0, 34, 1),
(25, 0, 30, 1),
(26, 0, 28, 1),
(27, 0, 28, 2),
(28, 0, 39, 2),
(29, 0, 16, 3),
(30, 0, 16, 3),
(31, 0, 6, 1),
(32, 8, 14, 1),
(33, 8, 20, 1),
(34, 9, 14, 1),
(35, 10, 22, 1),
(36, 11, 11, 1),
(37, 12, 5, 2),
(38, 13, 5, 1),
(39, 13, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_ID` int(11) NOT NULL,
  `a_Name` varchar(500) NOT NULL,
  `a_Email` varchar(500) NOT NULL,
  `a_Pw` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_ID`, `a_Name`, `a_Email`, `a_Pw`) VALUES
(1, 'Admin', 'adminsandy@m.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Admin2', 'adminei@m.com', '202cb962ac59075b964b07152d234b70'),
(3, 'PhyuSin', 'pp@m.com', '202cb962ac59075b964b07152d234b70');
(4, 'esdp', 'ei789@gmail.com', 'a6749e9c46d3039d3d21f703314c2caa'); --- pw-esdp789!


-- --------------------------------------------------------

--
-- Table structure for table `tbl_chef`
--

CREATE TABLE `tbl_chef` (
  `chef_id` int(11) NOT NULL,
  `chef_name` varchar(100) NOT NULL,
  `chef_image` varchar(100) NOT NULL,
  `chef_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_chef`
--

INSERT INTO `tbl_chef` (`chef_id`, `chef_name`, `chef_image`, `chef_desc`) VALUES
(3, 'Walter Adler', '3.png', 'Executive Chef'),
(4, 'James Carter', '4.png', 'Master Chef'),
(5, 'Michael Luke', '5.png', 'Chicken Master Chef'),
(6, 'Mastafa Admin', '6.png', 'Chef Assistant'),
(7, 'John Arax', '7.png', 'Kitchen Care'),
(8, 'Anthony Kevin', '8.png', 'Chef Assistant');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_delivery`
--

CREATE TABLE `tbl_delivery` (
  `delivery_id` int(11) NOT NULL,
  `delivery_name` varchar(100) NOT NULL,
  `delivery_cost` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_delivery`
--

INSERT INTO `tbl_delivery` (`delivery_id`, `delivery_name`, `delivery_cost`) VALUES
(1, 'Food2U', '2000'),
(2, 'DoortoDoor', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int(11) NOT NULL,
  `faq_question` varchar(300) NOT NULL,
  `faq_answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_question`, `faq_answer`) VALUES
(2, '																				Who is the owner of Savory Restaurant?																				', '																				Savory Restaurant was established by four the Ting brothers.ðŸ‘¬																		'),
(3, '					When did Savory Restaurant Established? 					', '					Savory Restaurant was established in 1950.ðŸ˜´					'),
(4, '					Can I have a reservation on Savory Restaurant? 					', '					Yes, you can. ðŸ’ªðŸ»					'),
(5, 'Can I pay in cash? ', 'You can pay by cash if the restaurant accepts cash payments. This option is displayed on the checkout page. '),
(6, 'What type of credit card can I use? ', 'We accept all Visa, Master Card, American Express and Discover cards. '),
(7, 'Is it faster to order by phone or online? ', 'Usually, it is faster by phone to order. '),
(8, 'Can I cancel my order or booking online? ', 'Yes, you can cancel order during 1hours. '),
(9, 'Do you have private dinning room? ', ' Yes, We have only private dinning room. '),
(10, 'What kinds of payment method more secure with us? ', 'Almost payment method are secure. '),
(11, 'Do you like providing flowers or music? ', 'Yes. We work closely the with many prominent speical event planners in the area. Florists will bill directly to the client. We can also suggest a wide range of musicians and disc jockeys available in the area. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_name`) VALUES
(2, 'Breakfast'),
(3, 'Launch'),
(4, 'Dinner'),
(5, 'Drink'),
(6, 'Dessert');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `order_deliverydate` varchar(100) NOT NULL,
  `order_deliverytime` varchar(100) NOT NULL,
  `order_deliveryaddress` varchar(300) NOT NULL,
  `order_totalamountt` varchar(1000) NOT NULL,
  `order_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `order_date`, `user_id`, `user_name`, `order_deliverydate`, `order_deliverytime`, `order_deliveryaddress`, `order_totalamountt`, `order_status`) VALUES
(2, '2019-03-22', 11, 'EiSandy', '3/3/2018', '1:30 PM', 'MDY', '5500', 0),
(3, '2019-03-22', 11, 'EiSandy', '3/3/2018', '1:30 PM', 'MDY', '5500', 0),
(5, '2019-03-22', 11, 'eisandy', '1', '3:30', 'Yangon', '8000', 0),
(7, '2019-05-20', 15, 'ddd', '3/4/12', '12:00 PM', 'aaa', '23500', 0),
(8, '2019-05-20', 15, 'zz', '1/2/12', '1:00 PM', 'qwe', '11000', 0),
(9, '2019-05-20', 15, 'qqq', '1/2/12', '1:00 PM', 'aaa', '5000', 0),
(10, '2019-05-20', 15, 'uuu', '1/1/11', '1:00 PM', 'zzz', '5000', 0),
(11, '2019-05-20', 15, 'ggg', '1/1/11', '1:00 PM', 'hhh', '4000', 0),
(12, '2019-05-20', 15, 'www', '1/1/11', '1:00 PM', 'qqq', '16000', 0),
(13, '2019-05-31', 18, 'KKKK', '1/1/19', '1:00 PM', 'Hlaing', '10000', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promotion`
--

CREATE TABLE `tbl_promotion` (
  `promotion_id` int(11) NOT NULL,
  `promotion_name` varchar(100) NOT NULL,
  `promotion_percent` varchar(100) NOT NULL,
  `promotion_desc` varchar(1000) NOT NULL,
  `promotion_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_promotion`
--

INSERT INTO `tbl_promotion` (`promotion_id`, `promotion_name`, `promotion_percent`, `promotion_desc`, `promotion_image`) VALUES
(1, 'Birthday Package', 'Up To 30%', 'If you order our restaurant menu.', '1.jpg'),
(3, 'Staff Package', 'Up To 20%', 'If you order other menu that does not exit in our restaurant menu.', '3.jpg'),
(5, 'Student Package', '30% Off', 'Launch Only', '5.png'),
(6, 'Family Package', 'Up To 50%', '10 people - limited', '6.jpg'),
(7, 'Christmas Package', '30% Off', 'Only Dinner (Buffet)', '7.jpg'),
(8, 'Valentine Day Package', 'Up To 25% ', 'Couple with couple clothes (Dinner)', '8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_register`
--

CREATE TABLE `tbl_register` (
  `u_ID` int(11) NOT NULL,
  `u_Name` varchar(500) NOT NULL,
  `u_Email` varchar(500) NOT NULL,
  `u_Pw` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_register`
--

INSERT INTO `tbl_register` (`u_ID`, `u_Name`, `u_Email`, `u_Pw`) VALUES
(11, 'A', 'a@m.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(13, 'Eilay', 'ei@m.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(15, 'ei', 'eiuser@m.com', '202cb962ac59075b964b07152d234b70'),
(16, 'eee', 'eiadmin@m.com', '698d51a19d8a121ce581499d7b701668'),
(17, 'zwel', 'zwel@m.com', '202cb962ac59075b964b07152d234b70'),
(18, 'kk', 'kk@m.com', '202cb962ac59075b964b07152d234b70');
(19, 'didi', 'di789@gmail.com', '0e291e184cf3a111e7a574c6da15b024'); ---di789!

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `reservation_id` int(50) NOT NULL,
  `reservation_name` varchar(500) NOT NULL,
  `u_email` varchar(500) NOT NULL,
  `reservation_phone` varchar(500) NOT NULL,
  `reservation_date` varchar(100) NOT NULL,
  `reservation_time` varchar(100) NOT NULL,
  `reservation_person` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_reservation`
--

INSERT INTO `tbl_reservation` (`reservation_id`, `reservation_name`, `u_email`, `reservation_phone`, `reservation_date`, `reservation_time`, `reservation_person`) VALUES
(3, 'Eisandy', 'ei@m.com', '9876567', '0000-00-00', '12:00:00.00000', '2'),
(4, 'ei', 'ei@m.com', '87654567', '0000-00-00', '01:30:00.00000', '3'),
(5, 'Eee', 'ei@m.com', '8765456', '0000-00-00', '12:30:00.00000', '5'),
(6, 'aa', 'a@m.com', '98765', '0000-00-00', '12:00:00.00000', '5'),
(7, 'eeeeee', 'eiuser@m.com', '98765456', '5/8/2019', '01:00:00.00000', '8');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_image` varchar(100) NOT NULL,
  `service_desc` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`service_id`, `service_name`, `service_image`, `service_desc`) VALUES
(21, 'Birthday Party', '21.jpg', '					- Birthday cake\r\n- Standart Decoration (20 Balloons, 1 Souvenir, 10 Candle )\r\n- Up to 20% discount\r\n- 3 hours Party\r\n- Free Water\r\n- Sound system										'),
(22, 'Private Dinning', '22.JPG', '- Offer a unique private dinning experience brought direct to you\r\n- Minimum 8 persons in private dinning room\r\n- Offer a wide range of cuisine\r\n- Launch Buffet \r\n- Free WiFi\r\n- Affordable price for anyone'),
(23, 'Flim Shots', '23.jpg', '- Offer a private room for the actor, when feel so tired\r\n- Offer a wide range of cuisine\r\n- Allow drink just one person\r\n- Free wifi\r\n- Up to 25%'),
(27, 'Chariy Events', '27.png', '- Restaurant one year anniversary\r\n- Offer any kinds of food and beverage\r\n- within 8 hours'),
(28, 'Plans', '28.jpg', 'Mon to Friday $20 per hour\r\nSat & Sunday  $30 per hour\r\n- Banquet Party\r\n- Anniversary Party	\r\n- Ladies or Men Night Party					\r\n- Comedy Night Party\r\n- VIP Plan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_submenu`
--

CREATE TABLE `tbl_submenu` (
  `submenu_id` int(11) NOT NULL,
  `submenu_name` varchar(100) NOT NULL,
  `submenu_image` varchar(100) NOT NULL,
  `submenu_price` decimal(11,0) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_submenu`
--

INSERT INTO `tbl_submenu` (`submenu_id`, `submenu_name`, `submenu_image`, `submenu_price`, `menu_id`) VALUES
(5, 'Fried egg', '5.png', '8000', 2),
(6, 'Breads', '6.png', '2000', 2),
(9, 'American Brunch', '9.png', '5000', 2),
(10, 'Salmon Sandwich', '10.png', '8000', 2),
(11, 'Smoked Meat Sandwich', '11.png', '4000', 2),
(12, 'Breakfast Set', '12.png', '10000', 2),
(13, 'Blueberry Sweet Rolls', '13.png', '6000', 2),
(14, 'Traditional Pancakes', '14.png', '5000', 2),
(15, 'Chocolate Cherry Cake', '15.png', '5500', 2),
(16, 'Grilled Fillet', '16.png', '6000', 3),
(17, 'Fried Chicken Salad', '17.png', '5000', 3),
(18, 'Chicken Breast', '18.png', '7000', 3),
(19, 'Sea Trout', '19.png', '8000', 3),
(20, 'Smoked Paprika Hummus', '20.png', '6000', 3),
(21, 'Roasted Steak Roulade', '21.png', '9000', 3),
(22, 'Baked Fish Dressing', '22.png', '5000', 4),
(23, 'Alder Grilled Seafood Paella', '23.png', '7000', 4),
(24, 'Chicken Crispy', '24.png', '7000', 4),
(25, 'Mixed Salad of Fish', '25.png', '8000', 4),
(26, 'Smoked Paprika Hummus', '26.png', '7000', 4),
(27, 'Grilled Chicken Caesar', '27.png', '10000', 4),
(28, 'Cappuccino Coffee', '28.png', '5000', 5),
(29, 'Coffee Macchiato', '29.png', '4000', 5),
(30, 'Dark Coffee', '30.png', '3000', 5),
(31, 'Expresso Coffee', '31.png', '5000', 5),
(34, 'Coffee Latte', '34.png', '7000', 5),
(35, 'Coffee & Stawberry Jam', '35.png', '5000', 5),
(36, 'Grilled Chicken Fillet', '36.jpg', '10000', 6),
(37, 'Fried Fish Fillet', '37.jpg', '7000', 6),
(38, 'Grilled Egyption Kebabs', '38.jpg', '12000', 6),
(39, 'Fish Fillet', '39.jpg', '9000', 6),
(40, 'Fried Chicken Nuggets', '40.jpg', '11000', 6),
(41, 'Chandler Lasagna', '41.jpg', '6000', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`orderitem_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_ID`);

--
-- Indexes for table `tbl_chef`
--
ALTER TABLE `tbl_chef`
  ADD PRIMARY KEY (`chef_id`);

--
-- Indexes for table `tbl_delivery`
--
ALTER TABLE `tbl_delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  ADD PRIMARY KEY (`promotion_id`);

--
-- Indexes for table `tbl_register`
--
ALTER TABLE `tbl_register`
  ADD PRIMARY KEY (`u_ID`);

--
-- Indexes for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `tbl_submenu`
--
ALTER TABLE `tbl_submenu`
  ADD PRIMARY KEY (`submenu_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `orderitem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_chef`
--
ALTER TABLE `tbl_chef`
  MODIFY `chef_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_delivery`
--
ALTER TABLE `tbl_delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_promotion`
--
ALTER TABLE `tbl_promotion`
  MODIFY `promotion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_register`
--
ALTER TABLE `tbl_register`
  MODIFY `u_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `reservation_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_submenu`
--
ALTER TABLE `tbl_submenu`
  MODIFY `submenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_register` (`u_ID`);

--
-- Constraints for table `tbl_submenu`
--
ALTER TABLE `tbl_submenu`
  ADD CONSTRAINT `tbl_submenu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `tbl_menu` (`menu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
