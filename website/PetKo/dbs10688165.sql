-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: db5012723904.hosting-data.io
-- Generation Time: Nov 17, 2023 at 01:47 AM
-- Server version: 8.0.32
-- PHP Version: 7.0.33-0+deb9u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs10688165`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int NOT NULL,
  `user_email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `user_pass` varchar(30) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `rating` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `shop` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `rating`, `shop`) VALUES
('catfood', '4', 'petshop'),
('catlitter', '2', 'petshop'),
('catnip', '1', 'petshop'),
('dogbiscuits', '3', 'petshop'),
('dogdisc', '2', 'petshop'),
('dogshampoo', '5', 'petshop'),
('dogtoy', '3', 'petshop'),
('petbed', '2', 'petshop'),
('petkit', '3', 'petshop'),
('petpads', '4', 'petshop'),
('googlepixel6a', '0', 'mobitos'),
('googlepixel7', '0', 'mobitos'),
('iphone11', '0', 'mobitos'),
('iphone14promax', '0', 'mobitos'),
('iphonex', '0', 'mobitos'),
('motog5g', '0', 'mobitos'),
('oneplus2', '3', 'mobitos'),
('redminote4', '1', 'mobitos'),
('samsunge1', '0', 'mobitos'),
('samsunggalaxy', '3', 'mobitos'),
('acetaminophen', '0', 'pharmacy'),
('bandaid', '0', 'pharmacy'),
('carnation', '3', 'pharmacy'),
('chloraseptic', '0', 'pharmacy'),
('culturelle', '0', 'pharmacy'),
('ibuprofen', '3', 'pharmacy'),
('natureMade', '0', 'pharmacy'),
('pedialyte', '0', 'pharmacy'),
('tylenol', '4', 'pharmacy'),
('vicks', '0', 'pharmacy'),
('apple', '0', 'farmfresh'),
('apricot', '0', 'farmfresh'),
('beet', '3', 'farmfresh'),
('carrot', '4', 'farmfresh'),
('cherry', '0', 'farmfresh'),
('jalapeno', '4', 'farmfresh'),
('orange', '0', 'farmfresh'),
('peppers', '0', 'farmfresh'),
('spinach', '5', 'farmfresh'),
('tomato', '4', 'farmfresh');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `productId` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `rating` varchar(2) COLLATE utf8mb4_general_ci NOT NULL,
  `review` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`productId`, `rating`, `review`) VALUES
('samsunggalaxy', '4', 'very nice product at cheap rate it is very afforda'),
('oneplus2', '5', 'best product'),
('tomato', '5', 'I recently had the opportunity to try the Tomato O'),
('beet', '3', ' It had an average taste and texture, lacking dept'),
('tylenol', '5', 'Excellent for headache'),
('tylenol', '5', 'Excellent for headache'),
('ibuprofen', '3', 'good for pain relief'),
('ibuprofen', '3', 'good for pain relief'),
('redminote4', '1', 'very nice product at cheap rate it is very afforda'),
('catlitter', '4', 'qwe'),
('samsunggalaxy', '3', 'good product'),
('samsunggalaxy', '2', 'short battery life'),
('samsunggalaxy', '2', 'short battery life'),
('dogshampoo', '5', 'good'),
('petbed', '2', 'Not good'),
('petbed', '2', 'Not good'),
('dogbiscuits', '5', 'good '),
('dogtoy', '3', 'very good'),
('petpads', '2', 'bad'),
('tomato', '4', 'Good quality produce by the Farm Fresh Company.'),
('ibuprofen', '4', 'good results'),
('spinach', '5', 'Good quality produce by the Farm Fresh Company.'),
('catlitter', '1', 'very nice product at cheap rate it is very afforda'),
('tomato', '5', 'I recently had the opportunity to try the Tomato O'),
('jalapeno', '4', 'Excellent flavor, the bell peppers are fresh.'),
('petkit', '5', 'Good quality '),
('petkit', '2', 'Battery not so good'),
('oneplus2', '1', 'affordable price product with good camera'),
('petkit', '3', 'nice'),
('dogdisc', '5', 'Good quality'),
('dogdisc', '1', 'broke in 1 day'),
('dogdisc', '2', 'poor quality'),
('petpads', '5', 'good results'),
('petpads', '5', 'nice product'),
('carrot', '4', 'very nice carrot it is cheap and very deicious'),
('catnip', '1', 'bad product'),
('catnip', '1', 'not useful'),
('catnip', '2', 'not recommended'),
('dogtoy', '5', 'my dog loved it'),
('dogtoy', '2', 'quality could have been better'),
('catfood', '5', 'qood quality product'),
('catfood', '5', 'qood'),
('catfood', '4', 'best'),
('dogbiscuits', '3', 'nice product'),
('dogbiscuits', '1', 'bad'),
('samsunggalaxy', '5', 'very good'),
('catlitter', '1', 'very nice product at cheap rate it is very afforda'),
('catlitter', '4', 'very good'),
('samsunggalaxy', '5', 'very nice camera'),
('tylenol', '4', 'good medicine'),
('tomato', '4', 'very fresh tomatoes');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `firstName` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `lastName` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(18) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`firstName`, `lastName`, `email`, `address`, `phone`, `password`) VALUES
('rutik', 'sangle', 'rutik@mail.com', 'san jose', '6692643166', 'test@1234'),
('john', 'doe', 'john@mail.com', 'home', '123', 'john@123'),
('user', 'name', 'user@mail.com', 'home', '1234', 'user@123'),
('john', 'doe', 'john1@mail.com', 'home', '123', 'john@123'),
('harry', 'peter', 'harry.peter@gmail.com', 'downtown san jose', '123445', 'harryli'),
('harry ', 'peter', 'harrypeter@mail.com', 'downtown', '123456', 'harrypeter'),
('peter', 'parker', 'peter.parker@gmail.com', 'san jose', '123456', '123456'),
('john', 'eden', 'johneden@gmail.com', 'san jose', '987654321', 'johneden'),
('john', 'li', 'johnli@gmail.com', 'san jose', '987654321', '1234'),
('diana', 'penty', 'dainapety@gmail.com', 'san jose', '123456', '1234'),
('sam', 'li', 'samli@gmail.com', 'san jose', '123456', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `lname` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `haddress` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `hphone` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `cphone` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `email`, `haddress`, `hphone`, `cphone`) VALUES
('', '', '', '', '', ''),
('Alia', 'Davis', 'alia@gmail.com', 'alia lane', '1234567', '1234567'),
('Batman', 'Robin', 'Batman@robin.com', 'Gotham', '123456789', '1234568'),
('Bill', 'Gates', 'bill@mail.com', 'tracy', '5976843512', '2351684972'),
('diana', 'ross', 'dianaross', 'san francico', '7777777', '12345667'),
('diana', 'ross', 'dianaross@gmal.com', 'san francisco', '9876543', '1234'),
('dolly', 'john', 'dolly@gmail.com', 'dolly lane', '1234567', '1234567'),
('Harika', 'Kolipaka', 'harika.kolipaka@sjsu.edu', '33rdS', '9876543210', ''),
('harry', 'shim', 'harryshim@gmail.com', 'san jose', '123456', '123456'),
('John', 'Doe', 'john@mail.com', 'dallas', '3578965215', '1548732659'),
('John', 'Snow', 'johnsnow@mail.com', 'florida', '9764312580', '2654789130'),
('Kyla', 'Harrell', 'kyla@gmail.com', 'kyla lane', '123456', '123456'),
('levi', 'peck', 'levi@gmail.com', 'levi lane', '1234567', '1234567'),
('Mansi', 'Thaker', 'mansitthaker8@gmail.com', '101E', '4562315698', '5648745632'),
('maren', 'webster', 'maren@gmail.com', 'maren lane', '1234567', '1234567'),
('test', 'user', 'pet@mail.com', 'san jose', '123', '345'),
('john', 'doe', 'prabh@duck.com', 'aaasss', '9872897927', '8y23923908'),
('Prabhat', 'Kumar', 'prabhat.kumar@sjsu.edu', '33rdS', '4086905663', '4086905663'),
('Rajat', 'Masurkar', 'rajat@mail.com', 'sunnyvale', '2222222222', '2222222222'),
('Sahib', 'Bhatia', 'sahib@mail.com', 'milpitas', '9876542156', '9876543215'),
('Saksham', 'Mahajan', 'saksham.mahajan@sjsu.edu', '33rdS', '6542136584', '9876543215'),
('sanjana', 'boragalli', 'sanjana@gmail.com', 'sanjana lane', '1234567', '1234567'),
('shreya', 'deshmukk', 'shreya@gmail.com', 'sa jose', '123456', '123456'),
('ss', 'ss', 'ss', 'ss', 'ss', 'ss'),
('ss', 'ss', 'sss', 'sss', 'sss', 'ssss'),
('tyree', 'gilmore', 'tyree@gmail.com', 'tyree lane', '123456', '123456'),
('Utkarsh', 'Pant', 'utkarsh@mail.com', 'Seattle', '3333333333', '3333333333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
