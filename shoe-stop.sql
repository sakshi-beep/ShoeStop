-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 26, 2023 at 08:43 AM
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
-- Database: `shoe-stop`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(128) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `password`, `fullname`) VALUES
(1, 'sanjay1khadka@gmail.com', '1234567', 'sanjay khadka'),
(50, 'srijankhadka@gmail.com', '1234567', 'srijankhadka'),
(53, 'sanjaykhadka@gmail.com', '1234567', 'https://static-01.daraz.com.np/p/d260994fe488afefc937aa9e4bd8e21d.jpg'),
(54, 'pompousdahal@gmail.com', '1234567', 'Nischal Dahal'),
(55, 'bmochanb@gmail.com', 'bimochan07', 'Bimochan Bajimaya');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `shipping_address` varchar(100) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `status`, `shipping_address`, `payment_method`, `total`) VALUES
(11, 1, 'pending', 'kathmandu', 'e-sewa', '6900.00'),
(12, 1, 'pending', 'kathmandu', '', '2450.00'),
(13, 1, 'pending', 'kathmandu', 'khalti', '4740.00'),
(14, 1, 'pending', 'kathmandu', 'khalti', '9560.00');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `price`, `size`) VALUES
(9, 12, 52, 1, '2450.00', 7),
(10, 13, 55, 1, '4740.00', 7),
(11, 14, 54, 1, '9560.00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `Shoes`
--

CREATE TABLE `Shoes` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_category` varchar(20) NOT NULL,
  `s_size` int(11) NOT NULL,
  `s_price` int(11) NOT NULL,
  `in_stock` tinyint(1) NOT NULL DEFAULT 1,
  `s_quantity` int(11) NOT NULL,
  `s_photo` varchar(255) NOT NULL,
  `isFeatured` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Shoes`
--

INSERT INTO `Shoes` (`s_id`, `s_name`, `s_category`, `s_size`, `s_price`, `in_stock`, `s_quantity`, `s_photo`, `isFeatured`) VALUES
(1, 'Nike runner', 'sports', 42, 7000, 1, 45, 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2hvZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60', 0),
(47, 'Converse chuck taylor', 'casual', 37, 12000, 1, 31, 'https://images.unsplash.com/photo-1463100099107-aa0980c362e6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fHNob2VzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 1),
(48, 'White adidas', 'casual', 39, 89999, 1, 56, 'https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80', 0),
(49, 'Nike Black ', 'sports', 45, 14999, 0, 23, 'https://images.unsplash.com/photo-1605408499391-6368c628ef42?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80', 0),
(50, 'Nike Air Max', 'sports', 43, 15689, 1, 34, 'https://images.unsplash.com/photo-1600185365926-3a2ce3cdb9eb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8c2hvZXN8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60', 0),
(52, 'Caliber Shoes Rush', 'sports', 34, 2450, 1, 53, 'https://calibershoes.sgp1.digitaloceanspaces.com/uploads/2021/07/18110611/882-GREY-SIDE-1-1.png', 1),
(53, 'Caliber Shoes FALCON', 'sports', 42, 3450, 1, 30, 'https://calibershoes.sgp1.digitaloceanspaces.com/uploads/2022/08/29181057/836-BLACK-1.jpg', 1),
(54, 'Club C 85 Vintage Shoes', 'casual', 43, 9560, 1, 12, 'https://assets.reebok.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/09a42ecf48904d0cb7c1aa8e016bae5f_9366/Club_C_85_Vintage_Shoes_White_DV6434_01_standard.jpg', 1),
(55, 'Chelsea Boot Republic Leather', 'formal', 45, 4740, 1, 63, 'https://www.goldstarshoes.com/MediaThumb/medium/Media/goldstar-055-1_2.jpg', 1),
(56, 'Republic Leather Loafer', 'formal', 43, 3260, 1, 13, 'https://www.goldstarshoes.com/MediaThumb/medium/Media/whatsapp_image_2022-05-06_at_2-24-43_pm.jpeg', 1),
(57, 'Oxford Republic Leather', 'formal', 43, 3260, 1, 34, 'https://www.goldstarshoes.com/MediaThumb/medium/Media/goldstar-177-1_1.jpg', 1),
(60, 'Arch Fit Orvan', 'sports', 22, 234, 1, 4, 'https://www.skechers.com/dw/image/v2/BDCN_PRD/on/demandware.static/-/Sites-skechers-master/default/dwb3239812/images/large/210434_TNBR.jpg?sw=800', 0),
(61, 'Gentlemans Oxford', 'formal', 34, 45990, 1, 45, 'https://images.unsplash.com/photo-1502780696253-46844b6bed5f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGZvcm1hbCUyMHNob2VzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60', 0),
(83, 'Goldstar Sports', 'sports', 9, 2900, 1, 12, 'https://www.goldstarshoes.com/MediaThumb/medium/Media/untitled_design_100.png', 1),
(90, 'Adidas Ultraboost ', 'sports', 34, 21000, 1, 34, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/4f225a0bbc3e43729858af0100006731_9366/Ultraboost_1.0_Shoes_White_HQ4207_01_standard.jpg', 0),
(92, 'Colin Oxford', 'formal', 34, 4500, 1, 34, 'https://media.gettyimages.com/id/172417586/photo/elegant-black-leather-shoes.jpg?s=612x612&w=0&k=20&c=c_tTljwbu2m0AGxwb27NxCgG0Y2Cv-C4v8q6V36RYbw=', 0),
(93, 'Rush Formals', 'formal', 45, 5500, 1, 45, 'https://media.gettyimages.com/id/183358151/photo/black-leather-men-shoe.jpg?s=612x612&w=0&k=20&c=qP0rfTw4O5gulnlrJ80vG-iB86y-Xi7TZtVVnlm9Vgs=', 0),
(94, 'Tan Brown Oxfords', 'formal', 45, 12000, 1, 12, 'https://media.gettyimages.com/id/185011763/photo/shoes.jpg?s=612x612&w=0&k=20&c=iyRgidzx3zqcF_XSS9kcrKam1iy0UX9lMFMIBKw7X2Y=', 0),
(95, 'Coffee leathers', 'formal', 34, 4500, 1, 45, 'https://media.gettyimages.com/id/1141134838/photo/brown-leather-shoes-oxfords-style.jpg?s=612x612&w=0&k=20&c=aLGTqIR2dljTRmC0-CUTddPJM1jpTBBtWaArpM7RpwQ=', 0),
(96, 'Shiners', 'formal', 42, 34563, 1, 59, 'https://media.gettyimages.com/id/110682186/photo/pair-of-black-brogue-shoes-with-copy-space.jpg?s=612x612&w=0&k=20&c=19nNHwqYkyrEFvk1N6rjvIUmB4L7NFdTG2e87bve7dY=', 0),
(97, 'Flat Office ', 'formal', 34, 1200, 1, 43, 'https://media.gettyimages.com/id/184361244/photo/shoes-for-daily-wear-for-working-men.jpg?s=612x612&w=0&k=20&c=sJn6X14FiXrmMP8lX4eOA16vWYa9PsTVmXCfchoWSkc=', 0),
(98, 'Bens Loafer', 'casual', 37, 3456, 1, 34, 'https://imgs.search.brave.com/jxKgnukp4KGUYn_u6TZip2kW0XkhISrOfVKJz8nqU2U/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5Q/NG9ZN09PeFJsSHMx/STdpS2VFQkRBSGFI/YSZwaWQ9QXBp', 0),
(99, 'Velvet Loafers', 'formal', 34, 4567, 1, 33, 'https://imgs.search.brave.com/2ZYaU6tDS33V1_YuRkqw9AaiGz3B36ROCg6qhc3YgM4/rs:fit:772:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5m/X2toN0VzZ2NSN3Vf/LTg4bldIckNnSGFF/aiZwaWQ9QXBp', 0),
(100, 'Tans Loafers', 'formal', 8, 6762, 1, 10, 'https://imgs.search.brave.com/b7ivwDYUaDM4Bw7guiJvyCJv560Zzsnm53Fy2Ixp5Cc/rs:fit:474:225:1/g:ce/aHR0cHM6Ly90c2Ux/Lm1tLmJpbmcubmV0/L3RoP2lkPU9JUC5f/MHg4ZGQyd2h6MmhV/LXVmY2dwTzFRSGFI/YSZwaWQ9QXBp', 0),
(101, 'Caliber Chelsea boots', 'formal', 56, 3850, 1, 16, 'https://calibershoes.sgp1.digitaloceanspaces.com/uploads/2023/01/18161220/B480C-CFR-2.jpg', 0),
(102, 'Caliber Shoes oxford', 'formal', 45, 4565, 1, 56, 'https://calibershoes.sgp1.digitaloceanspaces.com/uploads/2023/02/05174652/A518C-CFF-1.jpg', 0),
(103, 'Grey casual slip on', 'casual', 45, 2465, 1, 23, 'https://calibershoes.sgp1.digitaloceanspaces.com/uploads/2022/06/06134334/1-5.jpg', 0),
(104, 'Caliber lace up boot', 'formal', 34, 4567, 1, 4, 'https://calibershoes.sgp1.digitaloceanspaces.com/uploads/2023/01/05134410/A501C-Bk-1.jpg', 0),
(105, 'Timberland Hiking boots', 'sports', 54, 45000, 1, 34, 'https://s7d2.scene7.com/is/image/timberland/A5PUG991-HERO?wid=500&hei=500', 0),
(106, 'Timberland Redwoods', 'formal', 45, 34000, 1, 5, 'https://images.timberland.com/is/image/timberland/A2EDR220-HERO?$496x496$', 0),
(107, 'Tan Slanter', 'formal', 56, 45654, 1, 4, 'https://media.gettyimages.com/id/958442274/photo/brown-leather-male-shoe-isolated-on-the-white-background.jpg?s=612x612&w=0&k=20&c=Da6ks5iI44-HDbLQzVAxYaaOY2UT77eMdMkvwDXpXY8=', 0),
(108, 'Oxford Semi Formal', 'formal', 45, 3500, 1, 5, 'https://media.gettyimages.com/id/157770281/photo/black-leather-men-shoes.jpg?s=612x612&w=0&k=20&c=stssAJeAdOCDPSgGiDTka1lX0o4oyUbINCI89_CFSUk=', 0),
(109, 'Beige sleekster', 'formal', 45, 21000, 1, 4, 'https://media.gettyimages.com/id/1355953093/photo/beige-suede-boots-isolated-on-white-background.jpg?s=612x612&w=0&k=20&c=10E9LIC1R8X6UQiMyVYVxUdYD0CzFAWHKYU_ZlXRJXg=', 0),
(110, 'Three tone chelsea', 'formal', 9, 55000, 1, 3453, 'https://media.gettyimages.com/id/767978503/photo/close-up-of-shoe-over-white-background.jpg?s=612x612&w=0&k=20&c=cgbrBN2DDewyWyPE-WCU03DSbfYljEiS5reNQwyN828=', 0),
(111, 'Lace up yellow', 'casual', 34, 5632, 1, 5, 'https://media.gettyimages.com/id/1226111323/photo/woman-in-stylish-sneakers-near-color-wall-closeup-space-for-text.jpg?s=612x612&w=0&k=20&c=APlwzulKD2dfOL5ERpDGg_yc3lVxnyz9eKHhCPIN7Dc=', 0),
(112, 'Converse black white', 'casual', 54, 4500, 1, 3, 'https://media.gettyimages.com/id/175537625/photo/sneakers-with-clipping-path.jpg?s=612x612&w=0&k=20&c=jfv13YfaYpAIzNlLY0e1dxVeizWsacok3klJqT9_GeM=', 0),
(113, 'Drocs', 'casual', 25, 5690, 1, 5, 'https://media.gettyimages.com/id/1252333673/photo/rubber-sandals-isolated-on-the-white-background.jpg?s=612x612&w=0&k=20&c=5IAxzFRHFBAUWxhkI5pZ_MUHUtuMS43wMnmWfAAndd4=', 0),
(114, 'Converse Skyblue', 'casual', 7, 4567, 1, 6, 'https://media.gettyimages.com/id/1155453649/photo/aquamarine-sneakers.jpg?s=612x612&w=0&k=20&c=SXfq8P5GvxSWyPMRRLTCbgfmu6P_qmxeg3r44a2CnpA=', 0),
(115, 'Converse Orange', 'casual', 34, 8765, 1, 7, 'https://media.gettyimages.com/id/1202537340/photo/sneakers.jpg?s=612x612&w=0&k=20&c=FHIV6PssAUF5g38XlqItFoxRBYFhslH_LGC_yFABBEg=', 0),
(116, 'Laceon', 'casual', 7, 2500, 1, 13, 'https://media.gettyimages.com/id/185244173/photo/male-shoes.jpg?s=612x612&w=0&k=20&c=nUo2j3CpVK48lKAxAtfsKsg0vPsrIa7DAZ6s2nUNIuA=', 0),
(117, 'Offwhites', 'casual', 65, 3400, 1, 25, 'https://media.gettyimages.com/id/1359097757/photo/white-sport-sneakers-shoes-on-the-violet-background-fitness-background.jpg?s=612x612&w=0&k=20&c=A_f3wpRNyt382xGWUZimzzEefkG4weFiHrGFWlfIZBY=', 0),
(118, 'Zed goldstar', 'casual', 54, 1300, 1, 16, 'https://www.goldstarshoes.com/MediaThumb/medium/Media/untitled_design_18.png', 0),
(119, 'SkyOne goldstar', 'casual', 46, 1800, 1, 14, 'https://www.goldstarshoes.com/MediaThumb/medium/Media/sky_01_camel_social.jpg', 0),
(120, 'Goldstar skythree', 'casual', 6, 1700, 1, 14, 'https://www.goldstarshoes.com/MediaThumb/medium/Media/ef1966_4.jpg', 0),
(121, 'Adidas Stan smiths', 'casual', 43, 10500, 1, 9, 'https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/9590dc731c9a4979975faf5b00e49832_9366/stan-smith-shoes.jpg', 0),
(122, 'Stan smith black', 'casual', 65, 6432, 1, 11, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/08fc0ad2aef34cce8ac7ac3200a278a6_9366/Stan_Smith_Shoes_Black_FX5499_01_standard.jpg', 0),
(123, 'Samba OG shoes', 'casual', 46, 12000, 1, 11, 'https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/ec595635a2994adea094a8bf0117ef1a_9366/samba-og-shoes.jpg', 0),
(124, 'Samba manchester united', 'casual', 56, 20000, 1, 11, 'https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/ce364e8d4ef34eb4911bafb000c06376_9366/samba-manchester-united-shoes.jpg', 0),
(125, 'Adidas Superstars', 'casual', 45, 13000, 1, 5, 'https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/0dfe86c89f49455990e5af790091533b_9366/superstar-shoes.jpg', 0),
(126, 'Goldstar G10 G1902', 'sports', 54, 2100, 1, 19, 'https://www.goldstarshoes.com/MediaThumb/medium/Media/g10_g1902.jpg', 0),
(127, 'Goldstar sublime', 'sports', 43, 2400, 1, 39, 'https://www.goldstarshoes.com/MediaThumb/medium/Media/sublime_2a.png', 0),
(128, 'Adidas NMD', 'sports', 64, 6543, 1, 12, 'https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/e5dea1d3f00a4eb384c8af5601398fa7_9366/nmd_r1-shoes.jpg', 0),
(129, 'Adidas NMB R2', 'sports', 56, 5678, 1, 7, 'https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/ee20e57f685146eeadeaaf2d00ffde62_9366/nmd_r1-shoes.jpg', 0),
(130, 'Goldstar G202', 'sports', 76, 2476, 1, 30, 'https://www.goldstarshoes.com/MediaThumb/medium/Media/3_29.jpg', 0),
(131, 'Ultraboost Red', 'sports', 63, 24000, 1, 5, 'https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/c1ed2f661ef347cb80d2af7f00d9d08c_9366/ultraboost-light-running-shoes.jpg', 0),
(132, 'Adidas Duramo', 'sports', 67, 6743, 1, 17, 'https://assets.adidas.com/images/w_766,h_766,f_auto,q_auto,fl_lossy,c_fill,g_auto/ec925c3454f8485b924aad82012e90e4_9366/duramo-10-wide-running-shoes.jpg', 0),
(133, 'Nike Invincible', 'sports', 45, 18000, 1, 9, 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/1bb4cfb7-baec-4d3f-b998-23430fdd71a6/invincible-3-mens-road-running-shoes-CLdFjq.png', 0),
(134, 'Nike Pegasus', 'sports', 45, 7654, 1, 10, 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/092c245e-08c9-4c92-b45c-6d85c8f9059c/pegasus-39-womens-road-running-shoes-qdDh0D.png', 0),
(135, 'Nike React', 'sports', 56, 7876, 1, 30, 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/265aecb1-7419-4c98-ad1f-8c81ac5deb27/react-infinity-3-womens-road-running-shoes-XpNmlR.png', 0),
(136, 'Nike Vaporfly', 'sports', 56, 5634, 1, 5, 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/dad73e3e-0759-4c4d-8d75-7a50d87e5459/vaporfly-2-mens-road-racing-shoes-glWqfm.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `fk_orders_customers` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `order_id_2` (`order_id`);

--
-- Indexes for table `Shoes`
--
ALTER TABLE `Shoes`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Shoes`
--
ALTER TABLE `Shoes`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_customers` FOREIGN KEY (`user_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `Shoes` (`s_id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `Shoes` (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
