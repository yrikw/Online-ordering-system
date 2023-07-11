-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 01, 2023 at 08:56 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarvello`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) NOT NULL,
  `family_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `family_name`, `last_name`, `phone_no`, `email`, `password`) VALUES
(1, 'Ikawa', 'Yuri', '0411530923', 'admin@gmail.com', '$2y$10$BoJV3N2TiqhZo4/cwaXW4OwNtldzjwABrnFkCqlaUSzU4HwGjD5RO');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `customer_id` int(10) DEFAULT NULL,
  `number_of_items` int(50) DEFAULT NULL,
  `quantity` int(50) DEFAULT 1,
  `product_id` int(10) DEFAULT NULL,
  `total_price` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `customer_id`, `number_of_items`, `quantity`, `product_id`, `total_price`) VALUES
(25, NULL, NULL, 1, 85, '12.00'),
(26, 5, NULL, 1, 85, '12.00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `images`) VALUES
(2, 'Fruit & Veg', ''),
(3, 'Meat, Seafood & Deli', ''),
(4, 'Bakery', ''),
(5, 'Dairy, Eggs & Fridge', ''),
(6, 'Snacks & Confectionery', ''),
(7, 'Freezer', ''),
(8, 'Drinks', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `family_name` varchar(50) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `phone_no` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `job_type_id` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `reset_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `family_name`, `first_name`, `phone_no`, `email`, `address`, `date_of_birth`, `job_type_id`, `password`, `reset_code`) VALUES
(2, 'Pandey', 'Saugat', '0452349613', 'saugatpandey098@gmail.com', '@8 king edward avenue albion vic 3020', '1999-11-24', 5, 'Saugat@23', NULL),
(3, 'Avila', 'Jose', '09876543210', 'abc@yahoo.com', 'Street no. 2', '2013-05-14', 7, '000abcd@1234', NULL),
(4, '', 'Joah', '00987654321', 'joah@yahoo.com', 'abcd', '1995-05-10', 6, '000bcd@123555', NULL),
(5, 'Adhikari', 'Laxman', '+9779865544017', 'jevayi7521@cutefier.com', 'Balaju,ktm Nepal', '2023-05-16', 5, '$2y$10$9rvcq7nr.qKEcTGrlPgXl.WGuldl7JwY7dAlbAG.vLBu4jVQ8i3c.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(10) NOT NULL,
  `images` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `images`) VALUES
(2, 'D:\\Sarvello\\images\\1.jpg'),
(3, 'D:\\Sarvello\\images\\2.jpg'),
(4, 'D:\\Sarvello\\images\\3.jpg'),
(5, 'D:\\Sarvello\\images\\category\\bakery.png'),
(6, 'D:\\Sarvello\\images\\category\\dairy.png'),
(7, 'D:\\Sarvello\\images\\category\\drinks.png'),
(8, 'D:\\Sarvello\\images\\category\\freezer.png'),
(9, 'D:\\Sarvello\\images\\category\\fruit_vege.png'),
(14, 'D:\\Sarvello\\images\\category\\snacks.png'),
(15, 'D:\\Sarvello\\images\\bg-1.png'),
(16, 'D:\\Sarvello\\images\\top1.jpg'),
(17, 'D:\\Sarvello\\images\\top3.jpg'),
(18, 'D:\\Sarvello\\images\\top3.jpg'),
(19, 'D:\\Sarvello\\images\\logo.png'),
(20, 'D:\\Sarvello\\images\\sarvello logo.png'),
(21, 'D:\\Sarvello\\images\\category\\meat.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `discount` double(10,2) NOT NULL DEFAULT 0.00,
  `delivery` tinyint(1) NOT NULL DEFAULT 0,
  `pickup_date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `staff_id` int(11) DEFAULT NULL,
  `status` varchar(226) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `order_date`, `discount`, `delivery`, `pickup_date`, `time`, `staff_id`, `status`) VALUES
(6, 5, '2023-05-26', 0.00, 0, '2023-05-03', '04:52:00', 2, 'completed'),
(7, 5, '2023-05-26', 0.00, 0, NULL, NULL, NULL, 'pending'),
(8, 5, '2023-05-26', 0.00, 0, NULL, NULL, NULL, 'pending'),
(9, 5, '2023-05-26', 0.00, 0, NULL, NULL, NULL, 'pending'),
(10, 5, '2023-05-26', 0.00, 0, NULL, NULL, NULL, 'pending'),
(11, 5, '2023-05-26', 0.00, 0, NULL, NULL, NULL, 'pending'),
(12, 5, '2023-05-26', 0.00, 0, NULL, NULL, NULL, 'pending'),
(13, 5, '2023-05-26', 0.00, 0, NULL, NULL, NULL, 'pending'),
(14, 5, '2023-05-26', 0.00, 0, NULL, NULL, NULL, 'pending'),
(15, 5, '2023-05-26', 0.00, 0, NULL, NULL, NULL, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `quantity`) VALUES
(2, 85, 6, 1),
(3, 85, 9, 1),
(4, 85, 11, 1),
(5, 88, 12, 1),
(6, 85, 13, 1),
(7, 87, 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(225) NOT NULL,
  `content` longtext NOT NULL,
  `slug` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `content`, `slug`) VALUES
(1, 'About Us', '<p>Welcome to Sarvello Fine Foods, your go-to destination for premium quality grocery shopping in Australia. At Sarvello, we pride ourselves on offering an extensive selection of high-quality food products that are sourced from the best producers around the world. Established in 2017, Sarvello Fine Foods has rapidly become one of the biggest competitors in the Australian grocery market. With both online and in-store shopping options available, we are committed to providing our customers with the most convenient and flexible shopping experience possible. At our store, you will find an extensive range of products, including fresh fruits and vegetables, premium meats, artisanal cheeses, baked goods, pantry essentials, and much more. Our team of experienced and knowledgeable staff is always on hand to help you find exactly what you need, whether you\'re looking for a specific ingredient for your favorite recipe or simply browsing for inspiration.</p><p><br></p><p>We believe that the quality of our products speaks for itself, and we are committed to sourcing only the finest ingredients to ensure that our customers can enjoy the very best in flavor and nutrition. We work closely with our suppliers to maintain the highest standards of quality and ethical sourcing practices, and we are proud to offer a range of organic, vegan, and gluten-free options for those with specific dietary requirements. At Sarvello, we understand that our customers lead busy lives, which is why we offer a range of convenient shopping options, including online ordering and home delivery services. We also offer catering services for events and special occasions, ensuring that you can enjoy our premium-quality products no matter what the occasion.</p><p><br></p><p>Thank you for choosing Sarvello Fine Foods as your trusted grocery supplier. We look forward to serving you and providing you with the very best in quality and convenience.</p>', 'about-us'),
(2, 'Contact Us', '<h2>We would like to hear from you!</h2><p><br></p><ul><li>customerservice@sarvello.com.au</li><li>+61 449 911 333</li><li>Melbourne Warehouse</li><li>8/3 Katz Way Somerton VIC 3062</li></ul>', 'Contact Us'),
(3, 'Sarvello Fine Foods Returns Policy', '<p>All products you buy in store at Sarcello Fine Foods, are covered by this Returns Policy.</p><p><br></p><p>Exchanges</p><p>We will happily provide an exchange where you have changed your mind about a product purchased from our store provided that the product:</p><p>is returned to us with a receipt within 30 days of purchase;is in its original condition, including with packaging; and has not been used and, if a perishable product, is not expired or within 2 days of expiry.</p><p><br></p><p>Faulty products</p><p>With Proof of Purchase:</p><p>If the product you buy is faulty then we will cheerfully refund the purchase price, exchange or repair the product.</p><p><br></p><p>Without Proof of Purchase</p><p>If you do not have proof of purchase and you wish to return a faulty or defective product, we will, at our option, provide you with a Sarvello fine foods returns card to the value of the purchase price. Where applicable, products may be returned to the manufacturer for repair or exchange, or we may reimburse you the purchase price in the original payment method. You will be required to provide identification showing your name, address and signature in the above instances and these details will be recorded for loss prevention purposes.</p>', 'Return Policy'),
(4, 'New to Online Shopping?', '<p>New to Online Shopping?</p>', 'New to Online Shopping?'),
(5, 'Why pick us?', '<p>Why pick us?</p>', 'Why pick us?'),
(6, 'Careers', '<p>Careers</p>', 'Careers');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount_paid` decimal(10,2) NOT NULL,
  `card_number` int(11) NOT NULL,
  `exp_date` date NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `mfg_date` date DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `weekly_sale` decimal(10,2) DEFAULT NULL,
  `quantity` int(50) DEFAULT NULL,
  `Featureed_product` tinyint(1) DEFAULT NULL,
  `image_pathlocation` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `price`, `description`, `expiry_date`, `mfg_date`, `supplier_id`, `category_id`, `weekly_sale`, `quantity`, `Featureed_product`, `image_pathlocation`) VALUES
(85, 'Tomato', '12', 'fadsf', '2023-05-31', '2023-05-10', 10, 2, '1.00', 1000, 1, 'uploads/646f6a854bea2.png'),
(87, 'Apple', '23', 'apple', '2023-07-21', '2023-05-15', 5, 2, '12.00', 1001, 1, 'uploads/646f6af81ed31.png'),
(88, 'Cheddar Cheese', '30', 'Cheese', '2023-06-10', '2023-05-01', 4, 3, '2.00', 200, 1, 'uploads/646f6b4c84fac.png'),
(89, 'Beef', '11', 'beef', '2023-06-10', '2023-05-24', 7, 3, '12.00', 1111, 1, 'uploads/646f6b761d94f.png'),
(90, 'Brownies', '30', 'Brownies', '2023-07-01', '2023-05-10', 6, 4, '50.00', 2002, 1, 'uploads/646f6ba381f46.png');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `qualification_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`qualification_id`, `name`) VALUES
(2, '	Certificate I'),
(3, '	Certificate II'),
(4, 'Certificate III'),
(5, '	Certificate IV'),
(6, '	Diploma'),
(7, '	Advanced Diploma'),
(8, '	Associate Degree'),
(9, 'Bachelor Degree'),
(10, 'Bachelor Honours Degree'),
(11, '	Graduate Certificate'),
(12, 'Graduate Diploma'),
(13, 'Masters Degree (Research)'),
(14, 'Masters Degree (Coursework)'),
(15, '	Doctoral Degree'),
(16, '	High Doctoral Degree');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `family_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification_id` int(11) NOT NULL,
  `password` varchar(25) NOT NULL,
  `working_hour` int(11) DEFAULT 0,
  `pay` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `family_name`, `first_name`, `phone_no`, `email`, `qualification_id`, `password`, `working_hour`, `pay`) VALUES
(2, 'Pandey', 'Saugat', '0452349613', 'k210031@student.kent.edu.au', 7, 'Saugat@23', 0, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `stock_history`
--

CREATE TABLE `stock_history` (
  `history_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `stock_date` date NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_history`
--

INSERT INTO `stock_history` (`history_id`, `supplier_id`, `product_id`, `stock_date`, `amount`) VALUES
(4, 8, 85, '2023-05-13', 100);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `subscription_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `registration_no` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `name`, `phone_no`, `registration_no`, `email`, `address`) VALUES
(4, 'morco_fresh', '03 9362 000', '13', 'orders.vic@morcofresh.com.au', '49 Market Road Sunshine Victoria Australia 3020'),
(5, 'fresh_fruit_box', ' 0451 916 9', '14', 'freshfruit@melbourne.com.au', '56-62 Bakehouse Rd,\r\nKensington VIC 3031'),
(6, 'food_bomb', '+61 451 562', '15', 'support@foodbomb.com.au', 'Level/5/111 Cecil St, South Melbourne VIC 3205'),
(7, 'melbourne_food_distributor', '(03) 8512 0', '16', 'orders@mfdfood.com.au', '41 McNaughton Road, Clayton'),
(8, 'glenroy_bakery', '(03) 9306 6', '17', 'info@glenroybakery.com.au', '17 Blenheim Street, Glenroy VIC 3046'),
(9, 'munchees_wholesale', '(07) 3216 9', '18', 'info@munchees.com.au', '2/871 Boundary Road\r\nCoopers Plains, QLD 4108'),
(10, 'yellow_pages', '(03) 9671 4', '19', 'info@yellowpages.com.au', '\r\nMelbourne Central Shop 209A Swanston St, Melbourne VIC 3000'),
(11, 'b&e _foods', '(03) 5971 1', '20', 'info@b&efoods.com.au', '490 Warrandyte Rd,\r\nLangwarrin South VIC 3911');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `job_type_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`job_type_id`, `name`) VALUES
(5, 'Doctor'),
(6, 'Engineer'),
(7, 'Student'),
(8, 'teacher'),
(9, 'nurse'),
(10, 'builder'),
(11, 'painter'),
(12, 'carpenter'),
(13, 'office_manager'),
(14, 'lawyer');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `wishlist_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `number_of_items` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `Customer id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `Job type id` (`job_type_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `Order id` (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `Customer id` (`customer_id`) USING BTREE,
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`qualification_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `qualification_id` (`qualification_id`);

--
-- Indexes for table `stock_history`
--
ALTER TABLE `stock_history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`subscription_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`job_type_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`wishlist_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `qualification_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `stock_history`
--
ALTER TABLE `stock_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `subscription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `job_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `wishlist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`job_type_id`) REFERENCES `type` (`job_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`qualification_id`) REFERENCES `qualification` (`qualification_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `stock_history`
--
ALTER TABLE `stock_history`
  ADD CONSTRAINT `stock_history_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stock_history_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlists_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
