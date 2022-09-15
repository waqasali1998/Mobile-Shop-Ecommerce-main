-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 08:06 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_name` text NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(100) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(100) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_pass`, `admin_email`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(1, 'waqas  ali', 'admin', 'waqas@gmail.com', 'inbound1189887520509362401-removebg-preview.png', '03322474092', 'karachi', 'Admin', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(14, 'Mobiles', 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.'),
(17, 'Power Bank', 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.'),
(19, 'Cases & Covers', 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.'),
(20, 'Handsfree', 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.');

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fir_no` varchar(255) NOT NULL,
  `cplc` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `despt` varchar(255) NOT NULL,
  `claim_no` varchar(255) NOT NULL,
  `c_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `imei_1` varchar(255) DEFAULT NULL,
  `imei_2` varchar(255) DEFAULT NULL,
  `customer_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_status` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `customer_email`, `customer_status`) VALUES
(67, 'waqas', '123', 'Lebanon', 'karachi', ' 03322474948', 'karachi', 'db17437cf6994337a1b7c5c81fa16d87.png', ' ::1', 'ab@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `payment_status` text NOT NULL,
  `order_status` text NOT NULL,
  `status` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `product_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `payment_status`, `order_status`, `status`) VALUES
(123, 67, 101, 999, 894625739, 1, 'select Option', '2022-09-11 18:00:17', 'Paid', 'Delete Order', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `invoice_id` int(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `reference_no` int(100) NOT NULL,
  `payment_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` text NOT NULL,
  `installment` varchar(255) NOT NULL,
  `cnic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_id`, `customer_id`, `amount`, `payment_mode`, `reference_no`, `payment_date`, `status`, `installment`, `cnic`) VALUES
(76, 894625739, 67, 999, 'paypal', 3, '2022-09-11 17:59:47', 'Recived', ' 6 -  166', '5656776655666');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `product_id` int(25) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`) VALUES
(80, 47, 14, '2022-09-08 16:56:20', 'Samsung Galaxy Fold 4 ', 's1.png', 's2.png', 's3.png', 52900, 'General Features:\r\n Release Date 2021-02-25\r\nSIM Support Dual SIM (Nano-SIM, dual stand-by) \r\nPhone Dimensions 158.9 x 73.6 x 8.4 mm\r\nPhone Weight 184 g\r\nOperating System Android 11, One UI 3.0', 'Sumsung'),
(81, 47, 14, '2022-09-08 16:56:29', 'Samsung Galaxy S22 Ultra', 's4.png', 's5.jpg', 's4.png', 29400, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0\r\n', 'Sumsung'),
(82, 47, 14, '2022-09-08 16:57:36', 'Samsung Galaxy A23', 's7.jpg', 's8.jpg', 's9.jpg', 45999, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'Sumsung'),
(83, 47, 14, '2022-09-08 16:56:44', 'Samsung Galaxy S21 FE', 's10.jpg', 's11.jpg', 's12.jpg', 14500, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'Sumsung'),
(84, 48, 14, '2022-09-08 16:57:24', 'Infinix Zero X Pro', 'i1.jpg', 'i1.jpg', 'i1.jpg', 47000, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'infinix'),
(85, 48, 14, '2022-09-08 16:57:20', 'Infinix Hot 12 ', 'i2.jpg', 'i3.jpg', 'i4.jpg', 31000, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'infinix'),
(86, 48, 14, '2022-09-08 16:57:16', 'Infinix Smart 6 HD', 'i5.gif', 'i6.gif', 'i7.gif', 21999, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'infinix'),
(87, 48, 14, '2022-09-08 16:57:44', 'Infinix Hot 11 Play', 'i8.png', '', 'i8.png', 2500, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'infinix'),
(88, 49, 14, '2022-09-08 16:57:52', 'Oppo A15', 'o1.jpg', 'o1.jpg', 'o1.jpg', 21999, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'oppo'),
(89, 49, 14, '2022-09-08 16:58:01', 'Oppo A54', 'o2.png', 'o2.png', 'o2.png', 36000, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'oppo'),
(90, 49, 14, '2022-09-08 16:58:05', 'Oppo A16', 'o3.png', 'o4.png', 'o3.png', 33000, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'oppo'),
(91, 49, 14, '2022-09-08 16:58:09', 'Oppo A96', 'o7.jpg', '', 'o7.jpg', 45000, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'oppo'),
(92, 52, 14, '2022-09-08 16:58:24', 'Apple iPhone 13 Pro', 'ip1.png', 'ip1.png', 'ip1.png', 34499, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'apple'),
(93, 52, 14, '2022-09-08 16:58:32', 'Apple iPhone 11', 'ip2.jpg', 'ip2.jpg', 'ip2.jpg', 184000, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'apple'),
(94, 50, 14, '2022-09-08 16:58:47', 'Oneplus 10 Pro', 'op1.jpg', 'op1.jpg', 'op1.jpg', 182000, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'one'),
(95, 50, 14, '2022-09-08 16:59:10', 'One Plus Ace Pro', 'op2.gif', 'op2.gif', 'op2.gif', 23499, 'General Features: Release Date 2021-02-25 SIM Support Dual SIM (Nano-SIM, dual stand-by) Phone Dimensions 158.9 x 73.6 x 8.4 mm Phone Weight 184 g Operating System Android 11, One UI 3.0', 'one'),
(96, 51, 17, '2022-09-08 16:59:21', 'Mi Power Bank 3', 'po1.jpg', 'po1.jpg', 'po1.jpg', 2200, 'Fast-Charging Technology\r\nExclusive to Anker, PowerIQ and VoltageBoost technologies combine to provide universal full speed charging for non-Quick Charge devices, up to 2.4 amps per port.\r\n\r\n\r\nQualcomm Quick Charge 3.0\r\nUsing Qualcomm’s advanced Quick Charge 3.0 technology, the PowerCore+ allows compatible devices to charge 85% faster. Get up to 8 hours of use from just 15 minutes of charging.\r\n\r\n\r\nMobile Shop.pk offers you the best Anker PowerCore+26800mAh price in Pakistan! What are you waiting for? Start carting and shopping only at Mobile Shop.pk !', 'powerbank'),
(97, 51, 17, '2022-09-08 16:59:26', 'Anker PowerCore+26800', 'po2.jpg', 'po2.jpg', 'po2.jpg', 2500, 'Fast-Charging Technology Exclusive to Anker, PowerIQ and VoltageBoost technologies combine to provide universal full speed charging for non-Quick Charge devices, up to 2.4 amps per port. Qualcomm Quick Charge 3.0 Using Qualcomm’s advanced Quick Charge 3.0 technology, the PowerCore+ allows compatible devices to charge 85% faster. Get up to 8 hours of use from just 15 minutes of charging. Mobile Shop.pk offers you the best Anker PowerCore+26800mAh price in Pakistan! What are you waiting for? Start carting and shopping only at Mobile Shop.pk !', 'one'),
(98, 51, 17, '2022-09-08 16:59:32', 'Dany SPIRO 5', 'po3.jpg', 'po3.jpg', 'po3.jpg', 3300, 'Fast-Charging Technology Exclusive to Anker, PowerIQ and VoltageBoost technologies combine to provide universal full speed charging for non-Quick Charge devices, up to 2.4 amps per port. Qualcomm Quick Charge 3.0 Using Qualcomm’s advanced Quick Charge 3.0 technology, the PowerCore+ allows compatible devices to charge 85% faster. Get up to 8 hours of use from just 15 minutes of charging. Mobile Shop.pk offers you the best Anker PowerCore+26800mAh price in Pakistan! What are you waiting for? Start carting and shopping only at Mobile Shop.pk !', 'realme'),
(99, 48, 19, '2022-09-08 16:59:46', 'Galaxy S21 Cover', 'c2.jpg', 'c2.jpg', 'c2.jpg', 3999, 'TORRAS Samsung Galaxy S21 Diamond - Clear', 'Sumsung'),
(100, 49, 19, '2022-09-08 17:00:31', 'Realme 6 Pro', 'cv2.jpg', 'cv2.jpg', 'cv2.jpg', 999, 'Rzants OPPO Realme 6 Pro Transparent Matte ShockProof Slim Thin Cover Phone at the best price in Pakistan | Online shopping in Pakistan\r\n\r\n', 'one'),
(101, 50, 19, '2022-09-08 17:00:35', 'Oppo Customized Case', 'dd.png', 'dd.png', 'dd.png', 999, 'Customized Mobile Case for Oppo Phones (Light-Floral Design)', 'oppo'),
(102, 51, 20, '2022-09-08 17:00:38', 'Z3 bluetooth headset', 'h1.jpg', 'h1.jpg', 'h1.jpg', 3000, 'Product Name: loca Z3 Model: Z3 Function: Call function Iris Purple Ceramic White Black Package Type: Official Standard Headphone Category: True Wireless Headphones Waterproof Performance: IPX5 Usage: In-ear Transmission Radius: 10m Whether it is single and binaural: Bilateral stereo Smart Type: Other Smart Time to market: 2020-07-21 The connection method between the left and right cavities of the earphone: wireless connection Dustproof performance: IP4X The connection method between the earphone and the playback device: Bluetooth connection', 'tecno'),
(103, 51, 20, '2022-09-08 11:37:22', 'Universal Earphone', 'h2.jpg', 'h2.jpg', 'h2.jpg', 450, 'Mobile Shop.pk offers you the best Stereo Universal Earphone+Android/iOS 2 in 1 USB Cable (Special Offer)  price in Pakistan! What are you waiting for? Start carting and shopping only at Mobile Shop.pk!', 'apple');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(47, 'Sumsung', 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.'),
(48, 'Infinix ', 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.'),
(49, 'Oppo', 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.'),
(50, 'One Plus', 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.'),
(51, 'Tecno', 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.'),
(52, 'Apple', 'Generate Lorem Ipsum placeholder text for use in your graphic, print and web layouts, and discover plugins for your favorite writing, design and blogging tools.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `slider_image`) VALUES
(39, 'Cover5', 'slider3.jpg'),
(40, 'Cover1r', 'c3.png'),
(42, 'sale', 'black-friday-1898114 (1).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `p_cat_id` (`p_cat_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `claim`
--
ALTER TABLE `claim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `claim`
--
ALTER TABLE `claim`
  ADD CONSTRAINT `claim_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD CONSTRAINT `customer_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_order_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD CONSTRAINT `pending_orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `pending_orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`p_cat_id`) REFERENCES `product_categories` (`p_cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
