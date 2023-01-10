-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2023 at 10:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(40) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_username`, `admin_email`, `admin_image`, `admin_password`) VALUES
(1, 'me2', 'me2@gmail.com', ' adminProfileimages/gallery2.jpg', ' 1234');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_tittle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_tittle`) VALUES
(1, 'swiggy'),
(2, 'zamatto'),
(3, 'Nike'),
(4, 'Amazone'),
(5, 'Made In Rwanda'),
(6, 'Gucci'),
(7, 'On The Rock'),
(8, 'Adidas'),
(9, 'Sean John'),
(10, 'Alibaba'),
(11, 'SAMSUNG'),
(12, 'APPLE'),
(13, 'YE24');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`product_id`, `ip_address`, `quantity`) VALUES
(2, '::1', 0),
(14, '::1', 0),
(15, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_header` text NOT NULL,
  `category_header_image` text NOT NULL,
  `sub_category_title_1` text NOT NULL,
  `sub_category_title_2` text NOT NULL,
  `sub_category_title_3` text NOT NULL,
  `sub_category_title_4` text NOT NULL,
  `sub_category_title_5` text NOT NULL,
  `sub_category_title_6` text NOT NULL,
  `sub_category_title_7` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_header`, `category_header_image`, `sub_category_title_1`, `sub_category_title_2`, `sub_category_title_3`, `sub_category_title_4`, `sub_category_title_5`, `sub_category_title_6`, `sub_category_title_7`) VALUES
(1, 'Clothes', 'categoryheaderimages/dress.svg', '  Shirt', '  Short & Jeans', '  Jacket', '  Dress& Fork', ' T-shirt', '', ''),
(2, 'Footwear', 'categoryheaderimages/shoes.svg', 'Sport', 'Formal', 'Casual', 'Safety Shoes', '', '', ''),
(3, 'Jewelry', 'categoryheaderimages/jewelry.svg', 'Earrings', 'Couple Rings', 'Necklace', '', '', '', ''),
(4, 'Perfume', 'categoryheaderimages/perfume.svg', 'Clothes', 'Perfume', 'Deodorant', 'Jacket', 'Dress & Frock', '', ''),
(5, ' Cosmetics', 'categoryheaderimages/cosmetics.svg', 'Shampoo', 'Sunscreen', 'Body Wash', 'Makeup Kit', '', '', ''),
(6, 'Glasses', 'categoryheaderimages/glasses.svg', 'Sunglasses', 'Lenses', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `combined_categories`
--

CREATE TABLE `combined_categories` (
  `combined_categories_id` int(11) NOT NULL,
  `combined_categories_sub_tittle` varchar(255) NOT NULL,
  `combined_categories_sub_min_tittle_1` text NOT NULL,
  `combined_categories_sub_min_tittle_2` text NOT NULL,
  `combined_categories_sub_min_tittle_3` text NOT NULL,
  `combined_categories_sub_min_tittle_4` text NOT NULL,
  `combined_categories_sub_min_tittle_5` text NOT NULL,
  `combined_categories_sub_min_tittle_6` text NOT NULL,
  `combined_categories_banner_image` text NOT NULL,
  `combined_categories_image_banner_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `combined_categories`
--

INSERT INTO `combined_categories` (`combined_categories_id`, `combined_categories_sub_tittle`, `combined_categories_sub_min_tittle_1`, `combined_categories_sub_min_tittle_2`, `combined_categories_sub_min_tittle_3`, `combined_categories_sub_min_tittle_4`, `combined_categories_sub_min_tittle_5`, `combined_categories_sub_min_tittle_6`, `combined_categories_banner_image`, `combined_categories_image_banner_link`) VALUES
(1, 'Electronc', ' Desktop', ' Laptop', ' Camera', ' Tablet', 'scaner', 'Mobile', 'bannerimages/electronics-banner-1.jpg', ''),
(2, 'Mens', ' Formal', ' Casual', ' Sports', ' Jacket', ' Sunglasses', '', ' bannerimages/mens-banner.jpg', ''),
(3, 'Womens', ' Formal', ' Casual', ' Perfume', ' Cosmetics', ' Bags', ' ', 'bannerimages/womens-banner.jpg', ''),
(5, 'Electronics', ' Smart TV', ' Keyboard	', ' Mouse', ' Microphone', ' Smart Watch', ' ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `custom_products_tittles_types`
--

CREATE TABLE `custom_products_tittles_types` (
  `custom_product_tittle_type_id` int(11) NOT NULL,
  `custom_product_tittle_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom_products_tittles_types`
--

INSERT INTO `custom_products_tittles_types` (`custom_product_tittle_type_id`, `custom_product_tittle_type`) VALUES
(1, '  Clothes'),
(3, 'Sports'),
(4, 'Watches'),
(5, 'Jewelry'),
(6, 'Perfume'),
(7, 'Belt'),
(8, 'JACKET'),
(9, 'SHIRT'),
(10, 'SKIRT'),
(11, 'CASUAL'),
(12, 'PARTY WEAR'),
(13, 'FORMAL'),
(14, 'SHORTS'),
(16, 'Men\'s Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `orders_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_number`, `product_id`, `quantity`, `orders_status`) VALUES
(1, 1, '224284021', 2, 1, 'pending'),
(2, 1, '224336466', 6, 1, 'pending'),
(3, 1, '1719546358', 20, 1, 'pending'),
(4, 1, '1770034369', 1, 1, 'pending'),
(5, 1, '26710839', 8, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_tittle` varchar(255) NOT NULL,
  `custom_product_tittle` varchar(255) NOT NULL,
  `product_fam_type` text NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `custom_product_tittle_id` int(11) NOT NULL,
  `product_image1` text NOT NULL,
  `product_image2` text NOT NULL,
  `product_image3` text NOT NULL,
  `product_image4` text NOT NULL,
  `product_price` text NOT NULL,
  `product_removed_price` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_tittle`, `custom_product_tittle`, `product_fam_type`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `custom_product_tittle_id`, `product_image1`, `product_image2`, `product_image3`, `product_image4`, `product_price`, `product_removed_price`, `date`, `status`) VALUES
(1, 'Mens Winter Leathers Jacketssssss', 'JACKET', ' featured-product', 'Mens Winter Leathers Jackets This  Jackets Warms Whole Body Softy And It Is Portable So Stylish ', 'Jacket,Men\'s Winter Jacket,winter,Jacket, Best Jacket, Stylish', 1, 2, 8, 'jacket-1.jpg', 'jacket-4.jpg', 'jacket-3.jpg', 'jacket-2.jpg', '37000', '62.00', '2023-01-07 09:19:35', 'true'),
(2, 'Pure Garment Dyed Cotton Shirt', 'SHIRT', 'new arrivals', 'Pure Garment Dyed Cotton Shirt This Can Be Weared On Ceremony Or Your Special Day Cuz Its  Looks So  Beautiful On Everyone', 'Dyed Cotton Shirt,  Cotton Shirt, Dyed Cotton, Shirt, Speacials day Shirt, Black Shirt, Ceremony Shirt', 1, 5, 9, 'shirt-1.jpg', 'shirt-2.jpg', 'shirt-1.jpg', 'shirt-2.jpg', '45000', '58.00', '2023-01-07 08:22:56', 'true'),
(3, 'MEN Yarn Fleece Full-Zip Jacket', 'JACKET', 'new arrivals', 'MEN Yarn Fleece Full-Zip Jacket This Yarn Jacket It Can Warm You While You In Cold Times/Winter Sometime This Jacket It Can Be Styled On Suits Yeah It Depends On Your Wishes', 'MEN Jacket, Full-Zip Jacket, MEN Yarn Fleece Full-Zip Jacket,  Yarn Fleece Full-Zip Jacket, Jacket, Chocolate Jacket, Winter Jacket, Warm Jacket, Suits Jacket', 1, 4, 8, 'jacket-5.jpg', 'jacket-6.jpg', 'jacket-6.jpg', 'jacket-5.jpg', '58000', '85.00', '2023-01-07 08:23:32', 'true'),
(4, 'Black Floral Wrap Midi Skirt', 'SKIRT', '	\r\nnew arrivals', 'Black Floral Wrap Midi Skirt is So Softly Skirt And Easy In Portable It Can Be Weared On Daylight', ' Dress, Skirt, Midi Skirt, Black Floral Wrap Midi Skirt, Black Floral Wrap ', 1, 4, 10, 'clothes-3.jpg', 'clothes-4.jpg', 'clothes-3.jpg', 'clothes-4.jpg', '25000', '35.00', '2023-01-07 08:24:12', 'true'),
(5, 'Casual Men\'s Brown Shoes', 'CASUAL', 'featured-product', 'Casual Men\'s Brown Shoes You Wear This At The Ceremony Day And On Your  Office Day Work And You Can Wear It while You Have Long Foot Walker Journey', 'Casual  Shoes, Casual Men\'s Shoes, Men\'s Shoes, Casual Men\'s Brown, Shoes,Casual Men\'s Brown Shoes, Brown Shoes ', 2, 5, 11, 'shoe-2_1.jpg', 'shoe-2.jpg', 'shoe-1_1.jpg', 'shoe-3.jpg', '50000', '105.00', '2023-01-07 08:24:38', 'true'),
(6, 'Pocket Watch Leather Pouch', 'Watches', 'top rated', 'Pocket Watch Leather Pouch beautiful silver and Gold Watches It Is So Portable It Is Water Stainless', 'Leather Pouch Watches, Pocket Watch, Watches, Watch, ', 6, 10, 4, 'watch-3.jpg', 'watch-4.jpg', 'watch-4.jpg', 'watch-3.jpg', '150000', '170.000', '2023-01-07 08:25:09', 'true'),
(7, 'Smart Watche Vital Plus', 'Watches', 'featured-product', 'Smart Watche Vital Plus Can Be Used In Counting Time And As An Wake Up Alarm', 'back Watches, Smart Watches, Watches, Smart, Nice Watches, Blue Watches', 2, 9, 4, 'watch-1.jpg', 'watch-2.jpg', 'watch-1.jpg', 'watch-2.jpg', '92000', '25.000', '2023-01-07 08:25:32', 'true'),
(8, 'Womens Party Wear Shoes', 'PARTY WEAR', 'trending', 'Womens Party Wear Shoes party drip shoes on short skirts or bickni', 'Womens Shoes, black Shoes, Chocolate Shoes,  Womens Party Shoes, Party Shoes', 2, 5, 12, 'party-wear-1.jpg', 'party-wear-2.jpg', 'party-wear-1.jpg', 'party-wear-2.jpg', '24000', '30.00', '2023-01-07 08:25:59', 'true'),
(9, 'Mens Winter Leathers Jackets', 'JACKET', 'featured-product', 'Mens Winter Leathers Jackets This  Jackets Warms Whole Body Softy And It Is Portable So Stylish ', 'Jacket,Men\'s Winter Jacket,winter,Jacket, Best Jacket, Stylish', 1, 4, 8, 'jacket-1.jpg', 'jacket-2.jpg', 'jacket-3.jpg', 'jacket-4.jpg', '32000', '45.00', '2023-01-07 08:26:21', 'true'),
(10, 'Trekking & Running Shoes - Black', 'Sports', 'top rated', 'Trekking & Running Shoes - Black This Sport Shoes Is So Cool You Feel It When You Are Running Through It', 'Black-Shoes, Mens Shoes, Trekking Shoes, Running Shoes, White Shoes , Football, Football Shoes', 2, 3, 3, 'sports-2.jpg', 'sports-1.jpg', 'sports-4.jpg', 'sports-5.jpg', '30000', '64.00', '2023-01-07 08:26:41', 'true'),
(11, 'Men\'s Leather Formal Wear Shoes', 'FORMAL', 'featured-product', 'Men\'s Leather Formal Wear Shoes , l Men\'s Brown Shoes You Wear This At The Ceremony Day And On Your  Office Day Work And You Can Wear It while You Have Long Foot Walker Journey', 'Casual  Shoes, Casual Men\'s Shoes, Men\'s Shoes, Casual Men\'s Brown, Shoes,Casual Men\'s Brown Shoes, Brown Shoes ', 2, 4, 13, 'shoe-1_1.jpg', 'shoe-1.jpg', 'shoe-2_1.jpg', 'shoe-3.jpg', '50000', '65.00', '2023-01-07 08:27:06', 'true'),
(12, 'Better Basics French Terry Sweatshorts', 'SHORTS', 'featured-product', 'Better Basics French Terry Sweatshorts Sport And Style Short Clothes', 'French Terry Sweatshorts, , Better Basics French Terry Sweatshorts, Terry Sweatshorts', 1, 2, 14, 'shorts-1.jpg', 'shorts-2.jpg', 'shorts-1.jpg', 'shorts-2.jpg', '20000', '12.00', '2023-01-07 08:28:18', 'true'),
(13, 'Relaxed Short Full Sleeve T-Shirt', 'Clothes', 'new arrivals', 'Relaxed Short Full Sleeve T-Shirt Can Be Weable At The DayLight And At The Night', 'Sleeve T-Shirt, Relaxed Short Full Sleeve . Short Full Sleeve  Relaxed Short Full Sleeve T-Shirt, T-Shirt, White T-Shirt, Black T-Shirt', 1, 1, 1, 'clothes-1.jpg', '3.jpg', 'clothes-1.jpg', '3.jpg', '20000', '16.00', '2023-01-07 08:28:42', 'true'),
(14, 'Girls Pnk Embro Design Top', 'Clothes', 'new arrivals', 'Girls Pnk Embro Design Top Best For Sisters And Women\'s Stylish', 'Girls Pink Embro, Girls Pink Embro Design Top,  Design Top, Girls, T-shirt, Shirts, Drip, Free Clothes', 1, 1, 1, 'clothes-2.jpg', '2.jpg', 'clothes-1.jpg', 'clothes-2.jpg', '34000', '9.00', '2023-01-07 08:29:04', 'true'),
(15, 'Girls Pnk Embro Design Top', 'Clothes', 'new arrivals', 'Girls Pnk Embro Design Top Best For Sisters And Women\'s Stylish', 'Girls Pink Embro, Girls Pink Embro Design Top,  Design Top, Girls, T-shirt, Shirts, Drip, Free Clothes', 1, 1, 1, 'clothes-2.jpg', '2.jpg', 'clothes-1.jpg', 'clothes-2.jpg', '34000', '9.00', '2023-01-07 08:29:26', 'true'),
(16, 'Running & Trekking Shoes - White', 'Sports', 'Trending', 'Running & Trekking Shoes - White Fit Sport Shoes That Can Protect You Small Difficult Injuries While You In doing Your Favourite Sports', 'Black Shoes, White Shoes, Sports , Sport Shoes, Running Shoes , Shoes  Running , Trekking Shoes , Running & Trekking Shoes - White, Shoes - White', 2, 3, 3, 'sports-1.jpg', 'sports-3.jpg', 'sports-5.jpg', 'sports-4.jpg', '49000', '36.00', '2023-01-07 08:29:59', 'true'),
(17, 'Trekking & Running Shoes - Black', 'Sports', 'trending', 'Trekking Shoes - White Fit Sport Shoes That Can Protect You Small Difficult Injuries While You In doing Your Favourite Sports', 'Black Shoes, White Shoes, Sports , Sport Shoes, Running Shoes , Shoes  Running , Trekking Shoes , Running & Trekking Shoes - White, Shoes - White', 2, 3, 3, 'sports-4.jpg', 'sports-2.jpg', 'sports-6.jpg', 'sports-5.jpg', '78000', '40.00', '2023-01-07 08:30:19', 'true'),
(18, 'Womens Party Wear Shoes', 'PARTY WEAR', 'trending', 'Womens Party Wear Shoes party drip shoes on short skirts or bickni', 'Womens Shoes, black Shoes, Chocolate Shoes,  Womens Party Shoes, Party Shoes', 2, 7, 12, 'party-wear-1.jpg', 'party-wear-2.jpg', 'party-wear-1.jpg', 'party-wear-2.jpg', '94000', '42.00', '2023-01-07 08:30:43', 'true'),
(19, 'Sports Claw Women\'s Shoes Sports', 'Sports', 'trending', 'Sports Claw Women\'s Shoes Sports, ', 'Sports Claw Women\'s Shoes Sports, Black-Shoes, Mens Shoes, Trekking Shoes, Running Shoes, White Shoes , Football, Football Shoes', 2, 4, 3, 'sports-3.jpg', 'sports-6.jpg', 'sports-1.jpg', 'sports-5.jpg', '54000', '65.00', '2023-01-07 08:31:07', 'true'),
(20, 'Titan 100 ml womens perfume Titan 100 Ml Womens Perfume', 'Perfume', 'top rated', 'titan 100 ml womens perfume Titan 100 Ml Womens Perfume This Is Something That Can Make YouSmell Good Than How The People Thing This Products Its Available On Everyone Who Want It  ', 'titan 100 ml womens perfume Titan 100 Ml Womens Perfume, perfume, ', 4, 1, 6, 'perfume.jpg', 'shampoo.jpg', 'perfume.jpg', 'shampoo.jpg', '42000', '10.00', '2023-01-07 08:31:29', 'true'),
(21, 'Men\'s Leather Reversible Belt', 'Belt', 'top rated', 'Men\'s Leather Reversible Belt Can Catches Your Pants In Nicely Way Approved By Us This Belt Can Be Weared With On Everyone Who Need It', 'Men\'s Leather Reversible Belt, belt , men\'s belt, women\'s belt , best belt , chocolate belt', 2, 5, 7, 'belt.jpg', 'belt.jpg', 'belt.jpg', 'belt.jpg', '24000', '15.00', '2023-01-07 08:31:51', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `users_order`
--

CREATE TABLE `users_order` (
  `order_id` int(11) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_due` varchar(255) NOT NULL,
  `invoice_number` varchar(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_image` text NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_order`
--

INSERT INTO `users_order` (`order_id`, `product_title`, `user_id`, `amount_due`, `invoice_number`, `total_products`, `order_date`, `user_image`, `user_username`, `order_status`) VALUES
(1, 'Pure Garment Dyed Cotton Shirt', 1, '45000', '224284021', 1, '2023-01-06 17:20:47', 'usersProfileUpdatedimages/blog-3.jpg ', 'weego', 'pending'),
(2, 'Pocket Watch Leather Pouch', 1, '150000', '224336466', 1, '2023-01-06 17:22:28', 'usersProfileUpdatedimages/blog-3.jpg ', 'weego', 'complete'),
(3, 'Titan 100 ml womens perfume Titan 100 Ml Womens Perfume', 1, '42000', '1719546358', 1, '2023-01-06 17:21:19', 'usersProfileUpdatedimages/blog-3.jpg ', 'weego', 'pending'),
(4, 'Mens Winter Leathers Jackets', 1, '34000', '1770034369', 1, '2023-01-06 17:21:47', 'usersProfileUpdatedimages/blog-3.jpg ', 'weego', 'pending'),
(5, 'Womens Party Wear Shoes', 1, '24000', '26710839', 1, '2023-01-06 17:22:04', 'usersProfileUpdatedimages/blog-3.jpg ', 'weego', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'weego', 'weego@gmail.com', ' 1234', 'usersProfileUpdatedimages/blog-3.jpg', ' ::1 ', 'gudaro', ' 098765432'),
(2, 'yelo', 'yelo@gmail.com', ' 1234', 'usersProfileUpdatedimages/1.jpg', ' ::1 ', 'gudaro', ' 098765432');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--

CREATE TABLE `user_payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_method` text NOT NULL,
  `user_address` text NOT NULL,
  `user_mobile` varchar(20) NOT NULL,
  `user_email_address` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payments`
--

INSERT INTO `user_payments` (`payment_id`, `order_id`, `user_id`, `invoice_number`, `amount`, `payment_method`, `user_address`, `user_mobile`, `user_email_address`, `date`) VALUES
(1, 2, 1, 224336466, 150000, 'Cash On Delivery', 'gudaro', ' 098765432', ' weego@gmail.com', '2023-01-06 17:22:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `combined_categories`
--
ALTER TABLE `combined_categories`
  ADD PRIMARY KEY (`combined_categories_id`);

--
-- Indexes for table `custom_products_tittles_types`
--
ALTER TABLE `custom_products_tittles_types`
  ADD PRIMARY KEY (`custom_product_tittle_type_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users_order`
--
ALTER TABLE `users_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_payments`
--
ALTER TABLE `user_payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `combined_categories`
--
ALTER TABLE `combined_categories`
  MODIFY `combined_categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `custom_products_tittles_types`
--
ALTER TABLE `custom_products_tittles_types`
  MODIFY `custom_product_tittle_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_order`
--
ALTER TABLE `users_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_payments`
--
ALTER TABLE `user_payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
