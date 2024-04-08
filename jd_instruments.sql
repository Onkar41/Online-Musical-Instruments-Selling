-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Oct 17, 2023 at 06:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jd_instruments`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `price` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `quantity`, `price`, `uname`) VALUES
(55, 1, 0, 'onkar41'),
(51, 1, 0, 'swapnil01'),
(48, 1, 0, 'swapnil01');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(25) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `pno` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(50) NOT NULL,
  `exp` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fname`, `lname`, `pno`, `email`, `message`, `exp`) VALUES
(9, 'suyash', 'dange', '8795642568', 'suyash00@g', 'Good Experience with this site', ''),
(10, 'swapnil', 'kadam', '589756894', 'swapnil@gmail.com', 'The UI of this website is good bro', 'Very Good');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `traking no` varchar(255) NOT NULL,
  `uname` varchar(191) NOT NULL,
  `fname` varchar(191) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pno` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dist` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL,
  `total` int(255) NOT NULL,
  `paymode` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `oid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`traking no`, `uname`, `fname`, `lname`, `email`, `pno`, `address`, `dist`, `pin`, `total`, `paymode`, `created_at`, `oid`) VALUES
('480021', 'swapnil01', 'Swapnil', 'Kadam', 'swapni@gmail.com', '9132315151', 'khetmalis wadi no 1 pargon su', 'A.nagar', '413702', 87800, 'COD', '2023-09-29', 6),
('748005', 'suyash01', 'Suyash', 'Dange', 'suyash00@gmail.com', '91323100102', 'Bhadali post phaltan', 'satara', '417125', 45500, 'COD', '2023-09-29', 8),
('834141', 'onkar41', 'Onkar', 'Jagtap', 'ojagtap954@gmail.com', '9132314141', 'khetmalis wadi no 1 pargon su', 'A.nagar', '413102', 31600, 'COD', '2023-09-29', 10),
('474831', 'sham', 'sham', 'xyz', 'abc@gmail.com', '1234567891', 'baramati', 'pune', '417125', 19640, 'COD', '2023-10-07', 16),
('483222', 'swapnil01', 'Swapnil', 'Kadam', 'swapni@gmail.com', '2222222222', 'zirapvadi phaltan ', 'satara', '123', 9600, 'COD', '2023-10-07', 17),
('231515', 'onkar41', 'Onkar', 'Jagtap', 'abc@gmail.com', '9132315151', 'khetmalis wadi no 1 pargon su', 'A.nagar', '417125', 7760, 'COD', '2023-10-17', 20),
('545626', 'suyash01', 'Suyash', 'Dange', 'suyash00@gmail.com', ' 9132314545', 'baramati', 'pune', '413102', 52200, 'COD', '2023-10-17', 23);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `o_id` int(100) NOT NULL,
  `uname` varchar(191) NOT NULL,
  `p_id` int(191) NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`o_id`, `uname`, `p_id`, `qty`, `price`, `create_at`) VALUES
(6, 'swapnil01', 44, 2, 40000, '2023-09-29 05:40:01'),
(6, 'swapnil01', 48, 2, 380, '2023-09-29 05:40:01'),
(6, 'swapnil01', 49, 2, 3520, '2023-09-29 05:40:01'),
(8, 'suyash01', 44, 1, 40000, '2023-09-29 05:49:43'),
(8, 'suyash01', 53, 1, 5500, '2023-09-29 05:49:43'),
(10, 'onkar41', 53, 1, 5500, '2023-09-29 06:36:55'),
(10, 'onkar41', 54, 1, 26100, '2023-09-29 06:36:55'),
(16, 'sham', 46, 2, 6300, '2023-10-07 04:36:13'),
(16, 'sham', 49, 2, 3520, '2023-10-07 04:36:13'),
(17, 'swapnil01', 52, 3, 3200, '2023-10-07 05:11:17'),
(18, 'suyash01', 44, 1, 40000, '2023-10-11 09:33:17'),
(18, 'suyash01', 51, 1, 3500, '2023-10-11 09:33:17'),
(18, 'suyash01', 54, 1, 26100, '2023-10-11 09:33:17'),
(19, 'onkar41', 44, 2, 40000, '2023-10-17 09:33:17'),
(19, 'onkar41', 48, 1, 0, '2023-10-17 09:33:17'),
(20, 'onkar41', 51, 2, 3500, '2023-10-17 09:55:42'),
(20, 'onkar41', 48, 2, 380, '2023-10-17 09:55:42'),
(23, 'suyash01', 54, 2, 26100, '2023-10-17 10:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `discription` varchar(200) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `quantiti` int(100) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `productname`, `category`, `discription`, `price`, `discount`, `quantiti`, `product_image`) VALUES
(44, 'piano', 'simple', 'Stylish Acoustic Piano,, Stylish Acoustic Piano offers quality tested Stylish Acoustic Piano .', 42000, 40000, 1, 'uploads/piano.png'),
(46, 'Earphonic', 'Electric', 'Electric and MIDI Violin equipped with the new ISSP2 System', 8500, 6300, 1, 'uploads/Earphonic.jpg'),
(47, 'Digital Piano.jpg', 'Electric', 'Kadence DP02W Digital Piano Set with 88 Heavy Weighted Keys, Triple Pedals, Indian Musical Electronic Tones, Wooden Music Stand and 2 Headphone Jack/Midi..', 29000, 28200, 1, 'uploads/Digital Piano.jpg'),
(48, 'Flute', 'simple', 'Foxit Professional Flutes C Sharp Medium Right Hand Bansuri Size 18.5 inches', 500, 380, 1, 'uploads/Flute.png'),
(49, 'violin', 'simple', 'ARCTIC AR-PVK-01 Neo Violin Kit - Violin 4/4 with case, bow & Rosin', 4000, 3520, 1, 'uploads/violin.png'),
(50, 'trumpet', 'simple', 'Stylish Acoustic trumpet,, Stylish Acoustic trumpet offers quality tested Stylish Acoustic trumpet', 6000, 5000, 1, 'uploads/trumpet.jpg'),
(51, 'Tabla', 'simple', 'MUSIQAA JAHAN® SPL. Iron Tabla Drum Set, Iron Bayan, Sheesham Wood Daya With Free Gatta, Hammer And Carry Bag', 4000, 3500, 1, 'uploads/Tabla.png'),
(52, 'Saxophone', 'simple', 'Mini Portable Saxophone Little Saxophone with Carrying Bag Woodwind Instrument Alto Saxophone  (Black)', 3499, 3200, 1, 'uploads/Saxophone.png'),
(53, 'electric guitar', 'Electric', 'JUAREZ JRZ-ST01, 6 Strings Linden Wood Electric Guitar, Right Handed with Bag/Case, 2 x Picks (3TS Sunburst)', 5749, 5500, 1, 'uploads/electric guitar.png'),
(54, 'electric drums', 'Electric', 'Yamaha DD75 Portable Digital Drums Package with 2 Pedals, Drumsticks - Power Supply Included', 26900, 26100, 1, 'uploads/electric drums.jpg'),
(55, 'drums', 'simple', 'AMBITION Basic Drum Kit 7 Pcs (brown)', 5000, 4561, 1, 'uploads/drums.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`) VALUES
(9, 'Dhende Bhushan', 'bhushan07', 'abc@gmail.com', '1111'),
(4, 'Onkar Jagtap', 'onkar41', 'om@gmail.com', '4141'),
(6, 'Suyash dange', 'suyash01', 'suyash00@gmail.com', '2222'),
(3, 'swapnil krushna kadam', 'swapnil01', 'mjagadale032@gmail.com', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
