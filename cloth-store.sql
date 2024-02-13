-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2023 at 05:17 PM
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
-- Database: `cloth-store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(20) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_description`) VALUES
(1, 'Male', 'Introducing our latest collection in men\'s fashion, a harmonious blend of sophistication, style, and comfort. Elevate your wardrobe with our meticulously crafted pieces that cater to the modern gentleman\'s discerning taste'),
(2, 'Female', 'From enchanting dresses that capture the essence of femininity to versatile separates that empower you to mix and match, our clothing line celebrates the multifaceted nature of the modern woman. Immerse yourself in a range of designs that effortlessly balance sophistication and comfort, making a statement in every setting');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `quantity`, `date`) VALUES
(28, 9, 2, 1, '2023-08-17 18:40:33'),
(29, 9, 16, 1, '2023-08-17 18:40:33'),
(30, 9, 22, 1, '2023-08-17 18:40:33'),
(31, 9, 2, 1, '2023-08-17 18:47:22'),
(32, 9, 16, 1, '2023-08-17 18:47:22'),
(33, 9, 22, 1, '2023-08-17 18:47:22'),
(34, 9, 2, 1, '2023-08-17 18:47:27'),
(35, 9, 16, 1, '2023-08-17 18:47:27'),
(36, 9, 22, 1, '2023-08-17 18:47:27'),
(37, 9, 2, 1, '2023-08-17 18:47:31'),
(38, 9, 16, 1, '2023-08-17 18:47:31'),
(39, 9, 22, 1, '2023-08-17 18:47:31'),
(40, 9, 2, 1, '2023-08-17 18:47:34'),
(41, 9, 16, 1, '2023-08-17 18:47:34'),
(42, 9, 22, 1, '2023-08-17 18:47:34'),
(43, 9, 2, 1, '2023-08-17 22:05:14'),
(44, 9, 3, 1, '2023-08-17 22:05:14'),
(45, 9, 7, 1, '2023-08-17 22:05:15'),
(46, 9, 3, 1, '2023-08-17 23:59:17'),
(47, 9, 4, 1, '2023-08-17 23:59:17'),
(48, 9, 2, 1, '2023-08-17 23:59:17'),
(49, 9, 2, 1, '2023-08-17 23:59:17'),
(50, 9, 1, 1, '2023-08-17 23:59:17'),
(51, 9, 8, 1, '2023-08-17 23:59:17'),
(52, 9, 8, 3, '2023-08-18 23:53:41'),
(53, 9, 8, 3, '2023-08-18 23:59:59'),
(54, 9, 3, 1, '2023-08-19 10:34:44'),
(55, 9, 7, 1, '2023-08-19 10:34:44'),
(56, 9, 14, 1, '2023-08-19 15:00:45'),
(57, 9, 18, 4, '2023-08-19 15:00:45'),
(58, 9, 8, 1, '2023-08-19 15:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `image`, `description`, `category`) VALUES
(1, 'Brown Cargo Pants', '13', 'images/jogger1.jpg', 'Crafted from durable and high-quality cotton fabric, our Brown Cargo Pants offer both durability and comfort. The fabric is soft to the touch, ensuring a comfortable fit throughout the day. With their sturdy construction, these pants are ready to tackle any adventure or activity you have in mind', 1),
(2, 'Women\'s Dress Sale Clearance Casual black', '14', 'images/women-product1.jpg', 'The long black free gown is stylish and fits various outfits. It is perfect for for all weather seasons, perfect for summer, winter, spring and autumn. Absolute beauty.', 2),
(3, 'Men\'s Cargo Joggers', '19', 'images/jogger2.jpg', 'Designed with a relaxed fit and a straight leg, these cargo pants offer both comfort and a modern silhouette. The adjustable waistband ensures a personalized fit, while the sturdy belt loops allow you to accessorize with your favorite belts. Whether you wear them with sneakers, boots, or casual shoes, these pants will complete your look with a touch of rugged charm.', 1),
(4, 'Women\'s Dress Sale Clearance Casual white ', '20', 'images/women-blouse2.jpg', 'The sleeveless white top is stylish and fits various outfits. It is perfect for all weather seasons, perfect for summer, spring, and autumn. Absolute beauty.', 2),
(7, 'Men\'s Henley T-Shirts', '17', 'images/man\'s-shirt.jpg', 'Our Men\'s Henley T-Shirts feature a classic three-button placket at the neckline, adding a refined and timeless element to the traditional t-shirt design. This henley style offers a more elevated and polished look compared to a regular crew neck, making it a versatile choice for various occasions', 1),
(8, 'Women\'s Jennings Microfleece Jacket', '19', 'images/women-jacket2.jpg', 'The long sleeve dark red shirt with fur is stylish and fits various outfits. It is perfect for all weather seasons, perfect for summer, winter, spring, and autumn. Absolute beauty.', 2),
(9, 'Men\'s Brown Rope Short', '15', 'images/summer-short.jpg', 'Crafted from a high-quality cotton blend, our Men\'s Brown Rope Shorts offer superior comfort and breathability. The fabric is lightweight and soft, providing a cool and comfortable feel even on the hottest days. Whether you\'re strolling on the beach or running errands in the city, these shorts will keep you feeling fresh and at ease.', 1),
(10, 'Women Elastic Waist Drawstring Shorts', '21', 'images/women-short1.jpg', 'The Elastic Waist Drawstring Shorts is stylish and fits various outfits. It is perfect for for all weather seasons, perfect for summer, spring and autumn. Absolute beauty.', 2),
(11, 'Men\'s Summer Casual Short', '17', 'images/summer-short2.jpg', 'Designed with a relaxed and modern fit, these shorts provide both style and freedom of movement. The above-knee length offers a contemporary look, while the roomy leg openings allow for unrestricted mobility. Whether you\'re engaging in outdoor activities or simply enjoying a leisurely day, these shorts will keep you comfortable and looking great', 1),
(12, 'Jean Denim Jacket For Women', '27', 'images/women-jacket3.jpg', 'The denim Jacket is stylish and fits various outfits. It is perfect for for all weather seasons, perfect for summer, winter, spring and autumn. Absolute beauty.', 2),
(13, 'Boy\'s Y Challenger Training Pant', '16', 'images/joggers3.jpg', 'Designed with a relaxed fit and a straight leg, these cargo pants offer both comfort and a modern silhouette. The adjustable waistband ensures a personalized fit, while the sturdy belt loops allow you to accessorize with your favorite belts. Whether you wear them with sneakers, boots, or casual shoes, these pants will complete your look with a touch of rugged charm.', 1),
(14, 'Summer Sleeveless Printed Dress', '9', 'images/women-summer-dress.jpg', 'The sleeveless printed dress is stylish and fits various outfits. It is perfect for all weather seasons, perfect for summer, spring, and autumn. Absolute beauty.', 2),
(15, 'Blue Striped Casual Shirt Long Sleeve', '20', 'images/summer-shirt1.jpg', 'The classic blue and white striped pattern adds a touch of timeless elegance to this shirt. The vertical stripes create a flattering and elongating effect, enhancing your silhouette and providing a polished appearance. This shirt is a versatile choice that can be easily dressed up or down to suit various settings.', 1),
(16, 'Women Clearance Dresses', '17', 'images/women-summer-dress2.jpg', 'The short black dress is stylish and fits various outfits. It is perfect for for all weather seasons, perfect for summer, winter, spring and autumn. Absolute beauty.', 2),
(17, 'Men\'s Hawaiian Floral Shirt Button Down', '22', 'images/summer-shirt2.jpg', 'The eye-catching Hawaiian floral print showcases a lively and colorful design, featuring tropical flowers and foliage. This print adds a playful and energetic element to your outfit, making it a standout choice for vacations, beach parties, or simply adding a touch of vacation spirit to your everyday life.', 1),
(18, 'Floral Summer Dress for Women', '12', 'images/women-summer-dress3.jpg', 'The floral summer dress is stylish and fits various outfits. It is perfect for all weather seasons, perfect for summer, winter, spring, and autumn. Absolute beauty.', 2),
(19, 'Men\'s Summer Green Short', '8', 'images/green-short.jpg', 'Designed with a relaxed and modern fit, these shorts provide both style and freedom of movement. The above-knee length offers a contemporary look, while the roomy leg openings allow for unrestricted mobility. Whether you\'re engaging in outdoor activities or simply enjoying a leisurely day, these shorts will keep you comfortable and looking great.', 1),
(20, 'Red Poker-dot Dress', '15', 'images/women-clothes-img.png', 'The Red poker-dot dress is stylish and fits various outfits. It is perfect for all weather seasons, perfect for summer, winter, spring, and autumn. Absolute beauty.', 2),
(21, 'Men\'s Summer Dark Grey Short', '11', 'images/summer-shorts3.jpg', 'The above-knee length offers a contemporary look, while the roomy leg openings allow for unrestricted mobility. Whether you\'re engaging in outdoor activities or simply enjoying a leisurely day, these shorts will keep you comfortable and looking great.', 1),
(22, 'Women Patterned Top', '14', 'images/women-blouse1.jpg', 'The Patterned is stylish and fits various outfits. It is perfect for all weather seasons, perfect for summer, winter, spring, and autumn. Absolute beauty.', 2),
(23, 'Plain Tracksuit Bottoms for Men', '9', 'images/joggers6.jpg', 'Crafted from a high-quality blend of soft and durable fabrics, our Plain Tracksuit Bottoms offer superior comfort and long-lasting performance. The fabric is lightweight and breathable, providing a cozy feel while allowing for optimal airflow during workouts or everyday activities.', 1),
(24, 'Female Office Pant', '17', 'images/women-office-trouser.jpg', 'The office pants are stylish and fit various outfits. It is perfect for all weather seasons, perfect for summer, winter, spring, and autumn. Absolute beauty.', 2),
(25, 'Yellow T-Shirt', '10', 'images/tshirt-img.png', 'Designed with a classic crew neck and short sleeves, this t-shirt offers a timeless silhouette that flatters all body types. The regular fit provides a relaxed', 1),
(26, 'Female Cargo Pant', '16', 'images/women-cargo-pant.jpg', 'The cargo Pants is stylish and fits various outfits. It is perfect for for all weather seasons, perfect for summer, winter, spring and autumn. Absolute beauty.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mypassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `mypassword`) VALUES
(9, 'Emmanuel', 'Enobakhare', 'enobaks.emma@gmail.com', '$2y$10$D.R83i/20WOLaL1US1CqXOfmuUAZre93shgR1ulJbOZrYaMOfEyHq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category`) REFERENCES `categories` (`cat_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
