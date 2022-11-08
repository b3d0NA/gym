-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 11:17 AM
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
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(55) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `expire_date` varchar(55) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `reference` varchar(55) DEFAULT NULL,
  `teacher_asign` int(11) NOT NULL,
  `nid` int(55) DEFAULT NULL,
  `paid` varchar(55) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `due` varchar(55) DEFAULT NULL,
  `total` varchar(55) DEFAULT NULL,
  `mobile` varchar(55) NOT NULL,
  `weight` int(11) NOT NULL,
  `hight` varchar(55) NOT NULL,
  `blood_group` varchar(55) NOT NULL,
  `package_id` int(11) NOT NULL,
  `price` varchar(55) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL COMMENT '1=active, 2=deactive',
  `image_path` varchar(255) DEFAULT 'images/avatar.png',
  `gender` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `father_name`, `address`, `expire_date`, `profession`, `reference`, `teacher_asign`, `nid`, `paid`, `discount`, `due`, `total`, `mobile`, `weight`, `hight`, `blood_group`, `package_id`, `price`, `date`, `status`, `image_path`, `gender`) VALUES
(2, 'Freelancer Rakib', 'md.jahanggir alam', 'kanora,gouripur,daudkandi,cumilla', '2022-12-01', 'freelancer', 'Rakib vai', 1, 2147483647, NULL, NULL, '', NULL, '01757967432', 71, '5fit 3inc', 'A+', 1, '5000', '2022-11-03', 1, 'images/1876873387.jpg', NULL),
(3, 'Freelancer Rakib', 'md.jahanggir alam', 'kanora,gouripur,daudkandi,cumilla', '2022-11-04', 'freelancer', '', 1, 2147483647, NULL, NULL, '', NULL, '01757967432', 71, '5fit 3inc', 'A+', 1, '5000', '2022-11-03', 1, NULL, NULL),
(5, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '4000', NULL, '1000', '5000', '01757437432', 87, '5fit', 'B+', 0, '5000', '2022-11-03', 1, NULL, NULL),
(6, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '4000', NULL, '1000', '5000', '01757437432', 87, '5fit', 'B+', 0, '5000', '2022-11-03', 1, NULL, NULL),
(7, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '4000', NULL, '1000', '5000', '01757437432', 87, '5fit', 'B+', 0, '5000', '2022-11-03', 1, NULL, NULL),
(8, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '4000', NULL, '1000', '5000', '01757437432', 87, '5fit', 'B+', 0, '5000', '2022-11-03', 1, NULL, NULL),
(9, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '4000', NULL, '1000', '5000', '01757437432', 87, '5fit', 'B+', 0, '5000', '2022-11-03', 1, NULL, NULL),
(10, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '4000', NULL, '1000', '5000', '01757437432', 87, '5fit', 'B+', 0, '5000', '2022-11-03', 1, NULL, NULL),
(11, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '4000', NULL, '1000', '5000', '01757437432', 87, '5fit', 'B+', 0, '5000', '2022-11-03', 1, NULL, NULL),
(12, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '4000', NULL, '1000', '5000', '01757437432', 87, '5fit', 'B+', 0, '5000', '2022-11-03', 1, NULL, NULL),
(13, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '4000', NULL, '1000', '5000', '01757437432', 87, '5fit', 'B+', 0, '5000', '2022-11-03', 1, NULL, NULL),
(14, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '4000', NULL, '1000', '5000', '01757437432', 87, '5fit', 'B+', 0, '5000', '2022-11-03', 1, NULL, NULL),
(15, 'shakib khan', 'selim ahmed', 'kanora,gouripur,daudkandi,cumilla', '2022-12-03', 'student', 'Sajjad Hossain', 1, 208384934, '5000', 0, '0', '5000', '01757437432', 87, '5fit', 'B+', 1, '5000', '2022-11-03', 1, NULL, NULL),
(16, 'shakib khan', 'selim ahmed', 'gouripur,cumilla', '2023-02-03', 'student', 'Sajjad Hossain', 1, 208384934, '4500', 0, '500', '5000', '01754345363', 87, '5fit', 'A+', 1, '5000', '2022-11-03', 1, NULL, NULL),
(17, 'jahid hasan ', 'md. alam khan', 'hasanpur,cumilla', '2022-12-04', 'student', 'Sajjad Hossain', 1, 2147483647, '5000', 0, '0', '5000', '01754345363', 65, '5fit', 'B-', 1, '5000', '2022-11-04', 1, NULL, NULL),
(18, 'sabbir hossain', 'md jakir ahmed', 'gouripur,cumilla', '2022-12-04', 'student', 'sumon vaii', 1, 2147483647, '5000', 0, '0', '5000', '01754345363', 56, '5fit', 'A-', 1, '5000', '2022-11-04', 1, 'images/387413326.jpg', NULL),
(19, 'Rakib Mahmud', 'md. alam khan', 'gouripur,cumilla', '2022-12-04', '', 'JAHID', 1, 2147483647, '2000', 0, '3000', '5000', '01757967432', 87, '5fit', 'A+', 1, '5000', '2022-11-04', 1, 'images/1198969565.png', NULL),
(20, 'sabbir hossain', 'selim ahmed', 'gouripur,cumilla', '2023-01-04', 'student', 'Rakib vai', 1, 2147483647, '3000', 0, '2000', '5000', '01757967431', 87, '5fit', 'A+', 1, '5000', '2022-11-04', 1, NULL, NULL),
(21, 'Limon khan', 'md. abdul mannan', 'cumilla,bangladesh', '2022-12-05', 'student', 'Sajjad Hossain', 1, 2147483647, '4000', 0, '1000', '5000', '019900983433', 87, '5fit', 'A+', 1, '5000', '2022-11-05', 1, 'images/222858065.jpg', NULL),
(22, 'Limon khan', 'selim ahmed', 'gouripur,daudkandi,cumilla', '2023-01-05', 'student', 'Sajjad Hossain', 1, 2147483647, '5000', 0, '0', '5000', '019999883433', 87, '5fit', 'AB+', 1, '5000', '2022-11-05', 1, 'images/avatar.png', NULL),
(23, 'mkop[kl', 'lmkpk', 'gouripur,cumilla', '2022-12-05', '', 'Rakib vai', 1, 11111111, '4680', 10, '0', '4680', '01754345363', 56, '5fit', 'B-', 4, '5200', '2022-11-05', 1, 'images/avatar.png', NULL),
(24, 'Rabbi Ahmed', 'joynal ahmed', 'Raypur,gouripur,cumilla', '2022-12-07', 'student', 'Rakib vai', 1, 2147483647, '5200', 0, '0', '5200', '01876345363', 65, '5fit', 'O+', 4, '5200', '2022-11-07', 1, 'images/avatar.png', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `customer_recharge`
--

CREATE TABLE `customer_recharge` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `amount` varchar(55) NOT NULL,
  `recharge_until` varchar(55) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0=cash, 1=credit',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_recharge`
--

INSERT INTO `customer_recharge` (`id`, `customer_id`, `month`, `amount`, `recharge_until`, `type`, `date`) VALUES
(1, 16, 1, '1200', '2023-01-03', 0, '2022-11-04'),
(2, 16, 1, '1200', '2023-02-03', 0, '2022-11-04'),
(3, 20, 1, '1200', '2023-01-04', 0, '2022-11-04'),
(4, 22, 1, '1000', '2023-01-05', 0, '2022-11-05'),
(5, 2, 1, '1200', '2022-12-01', 0, '2022-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `title` varchar(55) NOT NULL,
  `description` varchar(55) NOT NULL,
  `amount` varchar(55) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `title`, `description`, `amount`, `date`) VALUES
(1, 'customer cost from privatesss', 'asdfasdfasdf', '509', '2022-11-03'),
(3, 'tea cost', 'asdfasdf', '500', '2022-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `inv`
--

CREATE TABLE `inv` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `add_money` int(55) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inv`
--

INSERT INTO `inv` (`id`, `customer_id`, `add_money`, `date`) VALUES
(1, 15, 500, '2022-11-06'),
(2, 15, 500, '2022-11-06'),
(3, 23, 2000, '2022-11-06'),
(4, 23, 680, '2022-11-06'),
(5, 23, 0, '2022-11-06'),
(6, 22, 2000, '2022-11-07'),
(7, 18, 1000, '2022-11-07'),
(8, 24, 200, '2022-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_price` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `package_price`) VALUES
(1, 'fat lose', '5000'),
(4, '1Month', '5200');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `reg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile_pic`
--

CREATE TABLE `profile_pic` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile_pic`
--

INSERT INTO `profile_pic` (`id`, `customer_id`, `path`, `date`) VALUES
(1, 0, '../images/1429895088.jpg', '2022-11-05'),
(2, 0, 'images/1523820594.jpg', '2022-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_inv_details`
--

CREATE TABLE `purchase_inv_details` (
  `id` int(11) NOT NULL,
  `inv_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_inv_master`
--

CREATE TABLE `purchase_inv_master` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sales_inv_details`
--

CREATE TABLE `sales_inv_details` (
  `id` int(11) NOT NULL,
  `inv_no` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sales_inv_master`
--

CREATE TABLE `sales_inv_master` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `company` varchar(55) NOT NULL,
  `mobile` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `reg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `fullname` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `fullname`, `email`, `address`) VALUES
(1, 'Rakib Mahmud', 'rakibas375@gmail.com', 'gouripur,dauakandi,cumilla');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL COMMENT '1=admin, 2=normal_user',
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `user_type`, `date`) VALUES
(3, 'Rakib Mahmud', 'rakibas375', 'rakibas375@gmail.com', 'iloverakib', 1, '2022-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `amount` int(55) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `withdraw`
--

INSERT INTO `withdraw` (`id`, `title`, `description`, `amount`, `date`) VALUES
(2, 'Test', 'asdfas', 500, '2022-11-03'),
(3, 'Trainer salary', 'trainer salary ', 15000, '2022-11-07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_recharge`
--
ALTER TABLE `customer_recharge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inv`
--
ALTER TABLE `inv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_pic`
--
ALTER TABLE `profile_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_inv_details`
--
ALTER TABLE `purchase_inv_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_inv_master`
--
ALTER TABLE `purchase_inv_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_inv_details`
--
ALTER TABLE `sales_inv_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_inv_master`
--
ALTER TABLE `sales_inv_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `customer_recharge`
--
ALTER TABLE `customer_recharge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inv`
--
ALTER TABLE `inv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile_pic`
--
ALTER TABLE `profile_pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase_inv_details`
--
ALTER TABLE `purchase_inv_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `purchase_inv_master`
--
ALTER TABLE `purchase_inv_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_inv_details`
--
ALTER TABLE `sales_inv_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_inv_master`
--
ALTER TABLE `sales_inv_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
