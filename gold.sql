-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 11:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gold`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `createdBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`, `createdBy`) VALUES
(1, 'Necklace', 'A necklace is an article of jewellery that is worn around the neck. ', '2023-04-03 16:41:21', NULL, 1),
(2, 'Mangalsutra', ' Mangalsutra is an ornament that symbolizes marriage and is an Indian wedding chain. ', '2023-04-03 16:53:23', NULL, 1),
(3, 'Ring', 'A small circular band,made of precious metal and often set with jewels, worn on the finger. ', '2023-04-03 17:07:34', '2023-04-03 17:08:14', 1),
(4, 'Earrings', 'An earring is a piece of jewelry attached to the ear via a piercing in the earlobe.\r\n', '2023-04-03 17:16:06', '2023-04-03 17:30:48', 1),
(5, 'Maang Tikka', 'A maang tikka is a piece of jewellery typically worn by Indian women on the forehead.', '2023-04-03 17:30:10', NULL, 1),
(6, 'Bracelate', 'A bracelet is an article of jewellery that is worn around the wrist ,worn as an ornament.', '2023-04-03 17:35:26', '2023-04-03 17:38:37', 1),
(7, 'Anklet & Toe Ring', 'Most people wear their ring on the second toe-- in the mid-section of the toe. \r\n', '2023-04-03 17:46:01', '2023-04-05 10:30:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `PId` varchar(255) DEFAULT NULL,
  `Quantity` int(30) DEFAULT 1,
  `IsOrderPlaced` int(5) DEFAULT NULL,
  `OrderNumber` int(5) DEFAULT NULL,
  `PaymentMethod` varchar(200) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `UserId`, `PId`, `Quantity`, `IsOrderPlaced`, `OrderNumber`, `PaymentMethod`, `orderDate`) VALUES
(7, 5, '22', 0, 1, 424108694, 'Cash on Delivery', '2022-02-02 06:15:46'),
(8, 5, '21', 0, 1, 424108694, 'Cash on Delivery', '2022-02-02 06:38:17'),
(9, 5, '26', 0, 1, 424108694, 'Cash on Delivery', '2022-02-02 06:40:05'),
(11, 5, '28', 0, 1, 424108694, 'Cash on Delivery', '2022-02-02 07:14:31'),
(12, 5, '26', 0, 1, 624951460, 'Credit Card', '2022-02-03 04:11:12'),
(13, 5, '31', 0, 1, 260984104, 'Debit Card', '2022-02-03 05:30:21'),
(15, 5, '27', 0, 1, 849570981, 'E-Wallet', '2022-02-03 09:30:16'),
(16, 5, '26', 0, 1, 849570981, 'E-Wallet', '2022-02-04 08:38:39'),
(23, 5, '26', 0, NULL, NULL, NULL, '2022-02-07 09:32:35'),
(24, 5, '31', 0, NULL, NULL, NULL, '2022-02-09 11:57:42'),
(36, 7, '28', 0, 1, 819293354, 'Cash on Delivery', '2022-02-12 11:31:15'),
(37, 7, '29', 0, 1, 819293354, 'Cash on Delivery', '2022-02-12 11:31:20'),
(38, 7, '31', 0, 1, 819293354, 'Cash on Delivery', '2022-02-12 11:31:53'),
(54, 11, '28', 1, NULL, NULL, NULL, '2023-04-03 07:22:51'),
(55, 11, '27', 1, NULL, NULL, NULL, '2023-04-03 07:23:43'),
(59, 11, '28', 1, NULL, NULL, NULL, '2023-04-03 07:28:30'),
(60, 11, '1', 1, NULL, NULL, NULL, '2023-04-04 14:24:09'),
(61, 11, '2', 1, NULL, NULL, NULL, '2023-04-04 14:24:20'),
(62, 11, '2', 1, NULL, NULL, NULL, '2023-04-04 14:37:24'),
(66, 14, '2', 1, 1, 744676331, 'Online Payment', '2023-04-12 13:51:25'),
(67, 14, '2', 1, 1, 916381641, 'Cash on Delivery', '2023-04-12 17:43:44'),
(68, 14, '6', 1, NULL, NULL, NULL, '2023-04-12 17:55:10'),
(69, 14, '5', 1, NULL, NULL, NULL, '2023-04-12 17:55:19'),
(70, 14, '7', 1, NULL, NULL, NULL, '2023-04-12 18:02:12'),
(71, 15, '21', 1, 1, 977701653, 'Cash on Delivery', '2023-04-14 16:11:11');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productweight` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `productImage4` varchar(255) NOT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `addedBy` int(11) DEFAULT NULL,
  `lastUpdatedBy` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `type`, `productName`, `productweight`, `productPrice`, `gender`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `productImage4`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`, `addedBy`, `lastUpdatedBy`) VALUES
(1, 1, 3, 'Gold', 'Princess Glittering Jewellery Sets', '150gm', 110000, 'Female', 'Base Metal: Brass & Coppe\r\nPlating: Brass Plated Stone \r\nType: Artificial Stones Sizing: \r\nAdjustable Type: Necklace and Earrings Net Quantity (N): 1\r\nNew look antique set with minakari & stone Country of Origin: India', '43897c5fd0ade8fceaa65a33ee602fe3.jpg', '8b1e94ab51fe3d20c533beafbe3877a7.jpg', 'd783b56aadad8c78e09e36d718c96b0b.jpg', '3f3a1d5a25dabff18403c91ca1346055.jpg', 150, 'In Stock', '2023-04-04 06:49:00', '2023-04-04 11:30:07', 1, 1),
(2, 2, 12, 'Diamond', 'Elite Beautiful Daimond Mangalsutras with Earrings', '135gm', 50000, 'Female', 'Catalog Name:*Elite Chunky Mangalsutras* Base Metal: Alloy Plating: Gold Plated Stone Type: Cubic Zirconia/American Diamond Sizing: Adjustable Type: Single Strand Mangalsutra Net Quantity (N): 1 Sizes:Free Size', '53c1b3c3fe754d08e777051eb73ad9fc.jpg', '79dc66c8acdd3426438b2c83d531b2f5.jpg', 'b8bd5c6cec7791122842c50a22682e01.jpg', '6efb5e19ce1787266b7afaa84df10d80.jpg', 140, 'In Stock', '2023-04-04 11:03:57', '2023-04-04 11:31:09', 1, 1),
(3, 1, 5, 'Silver', 'Sizzling Chunky Women jewellery Necklace Set', '200gm', 26500, 'Female', 'Base Metal: Copper Plating: Gold Plated Stone Type: Cubic Zirconia/American Diamond Sizing: Adjustable Type: Necklace Earrings Bracelet Net Quantity (N): 1 NEW DESIGN STYLISH NECKLACE SET Country of Origin: India', '5e5fd22e26c988fec1883bc30f7d31ab.jpg', '37fd13d389825f873de1101157ac1f0e.jpg', '5b3ca1a6b11c04a1dbe21e4f9e63ecb9.jpg', 'f4c44f01de13e2367a554c092f5b4d8f.jpg', 130, 'In Stock', '2023-04-04 11:10:47', '2023-04-04 11:35:28', 1, 1),
(4, 6, 30, 'Diamond', 'New Design Rose Gold Daimond Bracelet & Bangles', '100gm', 20200, 'Female', ' Brass Plating: RoseGoldPlated \r\nStone Type: Cubic Zirconia/American Diamond Sizing: Adjustable \r\nType: Bracelet\r\n Net Quantity (N): 1 Sizes:Free Size', 'f3c699d9507f603c345eee1d8c69d3a5.jpg', 'a5063746ccadd59156f3d8c3b4d3054e.jpg', 'b452afbb5428d36a614c4aef9604c8a0.jpg', '918b891347f51ebdd7149ee9f2526dcf.jpg', 140, 'In Stock', '2023-04-04 11:16:24', '2023-04-04 11:23:32', 1, 1),
(5, 3, 21, 'Diamond', 'Glittering Queen Taaj Shape Silver Daimond Finger Ring for Women', '100gm', 7000, 'Female', 'Base Metal: Brass Plating: Silver Plated Stone Type: American Diamond Type: Finger Ring Net Quantity (N): 1 Sizes:Free Size Country of Origin: India', '157c282f20edb04797b88fa3850e1e63.jpg', 'ec53ce9c19bf1583ef361563fe27cd94.jpg', '157c282f20edb04797b88fa3850e1e63.jpg', 'd5627c7a717de266025269ab7d842046.jpg', 100, 'In Stock', '2023-04-04 12:02:25', '2023-04-04 12:04:52', 1, 1),
(6, 4, 23, 'Platinum', 'Twinkling Fancy silver Sunflower Jhumka For Girls and Women.', '200gm', 4000, 'Female', 'Base Metal : Alloy\r\nPlating : Brass Plated\r\nSizing : Adjustable\r\nStone Type : Artificial Stones\r\nType : Jhumkhas\r\nMultipack : 1\r\nCountry of Origin : India', 'a613eea8a0dac674b5ab376f8e55d513.jpg', '22ad747ab0b501229e640f2c5fbd03b9.jpg', 'f5518d610e8d81b710ed8e73130f7559.jpg', 'a613eea8a0dac674b5ab376f8e55d513.jpg', 150, 'In Stock', '2023-04-04 13:35:49', '2023-04-04 13:36:38', 1, 1),
(7, 2, 12, 'Diamond', 'Fusion Dailysious Mangalsutra For Woman', '300gm', 5000, 'Female', 'Base Metal: Alloy Plating: Gold Plated Stone Type: Cubic Zirconia/American Diamond Sizing: Adjustable Type: Mangalsutra Set Net Quantity (N): 1 Sizes:Free Size Country of Origin: India', 'f729927c9eda2785f193bee7636bc014.jpg', '2bfd8f1e5432fb178095434fce21e684.jpg', 'dfaca449a850b3e86548d26657078333.jpg', '7598973ab8196f02ac1d02a87d4fac1f.jpg', 150, 'In Stock', '2023-04-05 09:12:27', NULL, 1, NULL),
(8, 3, 21, 'Diamond', 'Glittering Queen Taaj Shape Finger Ring for Women', '140gm', 7000, 'Female', 'Base Metal: Brass Plating: Silver Plated Stone Type: American Diamond Type: Midi Ring Net Quantity (N): 1 Sizes:Free Size Queen finger ring made from brass. Oxidized silver plated and a good match for casual outfits.  Country of Origin: India', 'e78f2fe4e5c05d1b94c749e6cf712c8e.jpg', '5d7ad49ca5b94333c1a22a53a727f463.jpg', '98b1f2b7e00a8d6f1298537e284f26b8.jpg', 'e78f2fe4e5c05d1b94c749e6cf712c8e.jpg', 150, 'In Stock', '2023-04-05 09:26:15', NULL, 1, NULL),
(9, 6, 32, 'Platinum', 'New Design daimond silver Round shape chain bracelet jewellery for girls and women', '170gm1', 15000, 'Female', 'Base Metal: Brass Plating: Gold Plated Stone Type: Cubic Zirconia/American Diamond Sizing: Adjustable Type: Danglers Net Quantity (N): 1 Sizes:Free Size Country of Origin: India', '8d19ece9deae8006858a30dff32d54e1.jpg', '60889e9118fee6ebd948e5334178990d.jpg', 'ddc03355b5ed4d06c9a23cbda286e0d2.jpg', 'e8612a27ecfc98b52c3b7704ac966012.jpg', 150, 'Out of Stock', '2023-04-05 10:14:58', NULL, 1, NULL),
(10, 1, 7, 'Gold', 'New Fancy Unique Design Jewllery Set', '700gm', 200000, 'Female', 'Base Metal: Alloy Plating: Gold Plated Stone Type: No Stone Sizing: Adjustable Type: Necklace and Earrings Net Quantity (N): 2 Necklaces (For J-Set) New Fancy Unique Design Jewllery Set Country of Origin: India', '5f1e1015983d4b6515bdeef05dad5bdb.jpg', '6a7dccac6ee8966ea7794199037e02b8.jpg', '2317dcf5f4344fef26fb9f6f51181190.jpg', '86ed45f4caec4808db15ca2714da65d8.jpg', 200, 'In Stock', '2023-04-05 10:21:04', NULL, 1, NULL),
(11, 5, 28, 'Gold', 'Trendy Fancy New Design Maangtikka', '200gm', 5500, 'Female', 'Base Metal: Alloy Color: Multicolor Net Quantity (N): 1 Occasion: Ethnic Party Plating: Gold Plated Stone Type: Artificial Stones Trend: Gold Filigree Type: Single stranded tikkas Country of Origin: India', 'b21815bda65fe631957f8eb7b11c8004.jpg', 'f105e15bb8d2866f17a72c1e9d49acb7.jpg', '35dfbb6904f81e05b05d04a7dc81143c.jpg', '04a31c673c259cbae709178890a7cc14.jpg', 130, 'In Stock', '2023-04-05 10:27:25', NULL, 1, NULL),
(12, 7, 36, 'Silver', 'Chunky Women Silver Anklet', '200gm', 7700, 'Female', 'Base Metal: Alloy Plating: Silver Plated Stone Type: No Stone Sizing: Adjustable Type: Thick Anklet Net Quantity (N): 1 Sizes:Free Size. Country of Origin: India', '0220d021a0d9369ff377f6fa3197c61b.jpg', 'c822769d701326e108d492dfa997bcd8.jpg', '9c9b3b49758acb38219f5d7c7f7a9711.jpg', '255ecbb54d917cc102c9749c5bb35a19.jpg', 120, 'In Stock', '2023-04-05 10:34:55', NULL, 1, NULL),
(13, 1, 6, 'Gold', 'New Design Unique Beautiful Gold Necklace Jwellery Set with Earrings for Women and Girls', '500gm', 60000, 'Female', 'Base Metal: Alloy Plating: Gold Plated Stone Type: Kundan Sizing: Adjustable Type: Necklace and Earrings Net Quantity (N): 1 New Design Unique Beautiful Gold Necklace Jwellery Set with Earrings for Women and Girls Country of Origin: India', '119d5ca57771a4ed8ae380b5e160bebf.jpg', 'd5c585c7c7abd16f4fa504d8972fd116.jpg', '7548934c03e41c8cfef0fb5132de3bb6.jpg', 'acd5514424dc9dab375cd92e405f05a7.jpg', 160, 'In Stock', '2023-04-05 10:39:31', NULL, 1, NULL),
(14, 3, 22, 'Diamond', 'Sparkling Adjustable Finger Ring studded with American Diamond for Girls and Women Rings', '100gm', 3000, 'Female', 'Catalog Name:*Allure Charming Rings* Base Metal: Brass & Copper Plating: Silver Plated Stone Type: American Diamond Type: Finger Ring Net Quantity (N): 1 Sizes: Free', '5c2db3760158cdd3879257f12a7cdbf6.jpg', '46532d2284285362be3ff8a2641b8734.jpg', '2cbdac345f8176ccd23661c809c69988.jpg', 'c734f69480e492ed87ff1097cf2877aa.jpg', 120, 'In Stock', '2023-04-05 10:51:16', NULL, 1, NULL),
(15, 4, 25, 'Platinum', 'Trendy & Stylish Best Design Earrings for Women and Girls', '150gm', 1200, 'Female', 'Base Metal: Alloy Plating: Gold Plated Sizing: Adjustable Stone Type: Cubic Zirconia Type: Drop Net Quantity (N): 1  Country of Origin: India\r\n\r\n', '2ac201b94d10fa01e462c08f87db5046.jpg', '376918f4030bcc2aff1a17b946528f6f.jpg', '5f468d4e8639b896ccdb35b850ea1c7b.jpg', 'd91a422ea9ac1068b9bdf23a27386505.jpg', 120, 'In Stock', '2023-04-05 10:55:55', NULL, 1, NULL),
(16, 1, 2, 'Diamond', 'Sizzling Fancy Women Choker Jewerelly Set With Earrings', '300gm', 99900, 'Female', 'Base Metal : Alloy\r\nPlating : Silver Plated\r\nStone Type : Alexandrite\r\nSizing : Choker\r\nType : Necklace\r\nNet Quantity (N) : 1\r\nSizes : Free Size\r\nCountry of Origin : India', 'b17204f7e1ff1edd12dd390382d671be.jpg', '4fc28a00e0793f60a3d24516849e4705.jpg', '4fc28a00e0793f60a3d24516849e4705.jpg', 'b17204f7e1ff1edd12dd390382d671be.jpg', 130, 'In Stock', '2023-04-05 11:05:33', NULL, 1, NULL),
(17, 2, 10, 'Gold', 'Hand Bracelate Mangalsutra For Women', '100gm', 3500, 'Female', 'Base Metal : Alloy\r\n\r\nPlating : Gold Plated\r\nStone Type : Cubic Zirconia/American Diamond\r\nSizing : Adjustable\r\nNet Quantity (N) : 1\r\nSizes : Free Size (Length Size: 11 in)\r\nmangaslutra for women. hand mangalsutra.\r\nCountry of Origin : India', 'ed686369ca798822b58ce3ce014efbd5.jpg', 'c726fe5a87b17380e341ebd910873f08.jpg', 'ed686369ca798822b58ce3ce014efbd5.jpg', 'c726fe5a87b17380e341ebd910873f08.jpg', 140, 'In Stock', '2023-04-05 11:10:29', NULL, 1, NULL),
(18, 1, 1, 'Gold', 'Rose Gold Plated Heart Beat Chain Pedant For Women', '150gm', 8400, 'Female', 'Base Metal : Brass\r\n\r\nPlating : Rose Gold Plated\r\n\r\nStone Type : American Diamond\r\n\r\nType : Pendant with Chain\r\n\r\nNet Quantity (N) : 1\r\n\r\nSizes : Free Size\r\n\r\nCountry of Origin : India', '2a44cfbe479cfd872c500804f1f2407ejfif', 'f708792de4b92b85d34a4092615c4bd8.jpg', 'd55f984b2cccee90cf597479fc0213ab.jpg', 'd71087ba7fe80c1d82eb4cb61c6ac911.jpg', 150, 'In Stock', '2023-04-06 05:02:09', NULL, 1, NULL),
(19, 1, 2, 'Gold', 'Shimmering Glittering Jewellery Sets', '800gm', 100000, 'Female', 'Base Metal: Brass & Copper Plating: Gold Plated Stone Type: Cubic Zirconia/American Diamond Sizing: Adjustable Type: Necklace Earrings Bracelet Net Quantity (N): 1 Country of Origin: India', '8bcd859fa1fdd24c274e28b52c1ff0ed.jpg', '814f6fd9b6c2cd354b0e617087799be8.jpg', '665e8ace91d4f161577ab21d86c9c1f1.jpg', '070a561bf098d4d5ca5efa805e6a3fae.jpg', 150, 'In Stock', '2023-04-06 05:13:37', '2023-04-06 05:21:41', 1, 1),
(20, 2, 11, 'Gold', 'Elite Fusion Mangalsutra Combo For Women', '200gm', 45000, 'Female', 'Base Metal : Brass\r\n\r\nPlating : Gold Plated\r\n\r\nStone Type : No Stone\r\n\r\nSizing : Non-Adjustable\r\n\r\nType : Mangalsutra Set\r\n\r\nSizes : Free Size\r\n\r\nCountry of Origin : India', '164da80ecacb4aae3b4ba8c369b2406f.jpg', 'c8743a06fe144efb836d376868b6d4a9.jpg', 'e182ae43da5b7874415f88f119a5f967.jpg', 'a0acbd9c1571fcb767112cc86b93b3e4.jpg', 130, 'In Stock', '2023-04-06 05:31:50', '2023-04-06 05:32:39', 1, 1),
(21, 2, 8, 'Diamond', 'Allure Fancy Mangalsutras Set', '350gm', 30000, 'Female', 'Base Metal : Alloy\r\n\r\nPlating : Gold Plated\r\n\r\nStone Type : Cubic Zirconia/American Diamond\r\n\r\nSizing : Adjustable\r\n\r\nType : Mangalsutra Set\r\n\r\nNet Quantity (N) : 1\r\n\r\nSizes : Free Size (Length Size: 18 in)\r\n\r\nCountry of Origin : India', '7cc768bd159be32d4141bbc1ee00bfdf.jpg', '200207c87de55ce988348aa44bf353f4.jpg', '5be3faa8ddb55745c270f3ac35782db5.jpg', 'e438964c90d225f78697c427ef9033f1.jpg', 160, 'In Stock', '2023-04-06 16:05:39', NULL, 1, NULL),
(22, 3, 22, 'Platinum', 'Trending ring for girl and women', '150gm', 30000, 'Female', 'Base Metal : Alloy\r\n\r\nPlating : Rose Gold Plated\r\n\r\nStone Type : American Diamond\r\n\r\nType : Finger Ring\r\n\r\nNet Quantity (N) : 1\r\n\r\nSizes : Free Size\r\n\r\nVery light weighted, good quality\r\n\r\nCountry of Origin : India', '0ff8144c954721b5714051d166c57d4c.jpg', '9611efce3c5b6a58bb25a9e105a41ffc.jpg', '0ff8144c954721b5714051d166c57d4c.jpg', '9611efce3c5b6a58bb25a9e105a41ffc.jpg', 139, 'In Stock', '2023-04-06 16:11:31', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategoryName` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `createdBy` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategoryName`, `creationDate`, `updationDate`, `createdBy`) VALUES
(1, 1, 'Pendant', '2023-04-03 16:42:16', NULL, 1),
(2, 1, 'Choker', '2023-04-03 16:42:48', NULL, 1),
(3, 1, 'Princess', '2023-04-03 16:43:06', NULL, 1),
(4, 1, 'Locket', '2023-04-03 16:43:27', NULL, 1),
(5, 1, 'Charm', '2023-04-03 16:44:07', NULL, 1),
(6, 1, 'Collar', '2023-04-03 16:51:25', NULL, 1),
(7, 1, 'Raani Haar', '2023-04-03 16:51:47', NULL, 1),
(8, 2, 'Big pendant mangalsutra', '2023-04-03 16:55:23', NULL, 1),
(9, 2, 'Layered Mangalsutra', '2023-04-03 16:55:41', NULL, 1),
(10, 2, 'Bracelate Mangalsutra', '2023-04-03 16:56:15', NULL, 1),
(11, 2, 'Multi Strand Mangalsutra', '2023-04-03 16:56:47', NULL, 1),
(12, 2, 'Single Strand Mangalsutra', '2023-04-03 16:57:10', NULL, 1),
(13, 2, 'Mangalsutra Set', '2023-04-03 16:57:44', NULL, 1),
(14, 2, 'Tanmaniya Mangalsutra', '2023-04-03 16:58:48', NULL, 1),
(15, 2, 'Alphabet Mangalsutra', '2023-04-03 16:59:41', NULL, 1),
(16, 2, 'Meenakari Mangalsutra', '2023-04-03 17:00:19', NULL, 1),
(17, 2, 'Heart Mangalsutra', '2023-04-03 17:00:39', NULL, 1),
(18, 3, 'Engagement Ring', '2023-04-03 17:08:42', NULL, 1),
(19, 3, 'Thumb Ring', '2023-04-03 17:11:16', NULL, 1),
(20, 3, 'Couple Ring', '2023-04-03 17:11:49', NULL, 1),
(21, 3, 'Daimond Ring', '2023-04-03 17:12:54', NULL, 1),
(22, 3, 'Antique Ring', '2023-04-03 17:14:45', NULL, 1),
(23, 4, 'Stood Earrings', '2023-04-03 17:20:50', NULL, 1),
(24, 4, 'Hoop Earrings', '2023-04-03 17:21:01', NULL, 1),
(25, 4, 'Drop Earrings', '2023-04-03 17:23:03', NULL, 1),
(26, 4, 'Cluster Earrings', '2023-04-03 17:23:23', NULL, 1),
(27, 4, 'Huggie Earrings', '2023-04-03 17:23:44', NULL, 1),
(28, 5, 'Borla Mang Tikka ', '2023-04-03 17:32:55', NULL, 1),
(29, 5, 'Paasa Maang Tikka', '2023-04-03 17:33:53', NULL, 1),
(30, 6, 'Bangle Bracelets', '2023-04-03 17:39:46', NULL, 1),
(31, 6, 'Charm Bracelets', '2023-04-03 17:40:59', NULL, 1),
(32, 6, 'Gemstone Bracelate', '2023-04-03 17:41:39', NULL, 1),
(33, 6, 'Leather Bracelets', '2023-04-03 17:42:01', NULL, 1),
(34, 7, 'Thumb Toe Ring', '2023-04-03 17:49:20', NULL, 1),
(35, 7, 'Traditional Toe Ring', '2023-04-03 17:50:51', NULL, 1),
(36, 7, 'Oxidised Antique Toe Ring', '2023-04-03 17:51:25', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8979555558, 'admin@gmail.com', 'e6e061838856bf47e1de730719fb2609', '2022-02-02 04:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `Name`, `Email`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(1, 'Kiran', 'kran@gmail.com', 'cost of volvo place pritampura to dwarka', '2021-07-05 07:26:24', 1),
(2, 'Sarita Pandey', 'sar@gmail.com', 'huiyuihhjjkhkjvhknv iyi tuyvuoiup', '2021-07-09 12:48:40', 1),
(3, 'Test', 'test@gmail.com', 'Want to know price of forest cake', '2021-07-16 12:51:06', 1),
(4, 'Shanu', 'shanu@gmail.com', 'hkjhkjhk', '2021-07-17 07:32:14', 1),
(5, 'Taanu Sharma', 'tannu@gmail.com', 'ytjhdjguqwgyugjhbjdsuy\r\nkjhjkwhkd\r\nljkkljwq\r\nmlkjol ', '2021-07-28 12:09:22', 1),
(6, 'Harish Kumar', 'hari@gmail.com', 'rytweiuyeiouoipoipo[po\r\njknkjlkdsflkjflkdjslk;lsdkf;l\r\nn,mn,ncxm.,m.m.,.', '2021-07-31 16:34:16', NULL),
(7, 'test', 'test@gmail.com', 'Test', '2021-08-25 16:56:19', 1),
(8, 'Sarita Pandey', 'sar@gmail.com', 'ytgjq[prooaerh', '2022-02-07 11:38:47', NULL),
(9, 'Anuj', 'ak@gmail.com', 'This is for Testing.', '2022-02-12 11:49:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblorderaddresses`
--
-- Error reading structure for table gold.tblorderaddresses: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table gold.tblorderaddresses: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `gold`.`tblorderaddresses`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `tblotp`
--

CREATE TABLE `tblotp` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblotp`
--

INSERT INTO `tblotp` (`id`, `email`, `otp`) VALUES
(1, 'urviradadiya20@gmail.com', 8752),
(2, 'hkrupansi2112@gmail.com', 3764),
(3, 'hkrupansi2112@gmail.com', 4021),
(4, 'hkrupansi2112@gmail.com', 4917),
(5, 'hkrupansi2112@gmail.com', 2690);

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', 'About Us', '<div><font color=\"#202124\" face=\"arial, sans-serif\"><b>Our mission declares our purpose of existence as a company and our objectives.</b></font></div><div><font color=\"#202124\" face=\"arial, sans-serif\"><b><br></b></font></div><div><font color=\"#202124\" face=\"arial, sans-serif\"><b>To give every customer much more than what he/she asks for in terms of quality, selection, value for money and customer service, by understanding local tastes and preferences and innovating constantly to eventually provide an unmatched experience in jewellery shopping.</b></font></div>', NULL, NULL, NULL, ''),
(2, 'contactus', 'Contact Us', '890,Sector 62, Gyan Sarovar, GAIL Noida(Delhi/NCR)', 'info@gmail.com', 7896541239, NULL, '10:30 am to 8:30 pm');

-- --------------------------------------------------------

--
-- Table structure for table `tblreview`
--

CREATE TABLE `tblreview` (
  `ID` int(10) NOT NULL,
  `ProductID` int(10) DEFAULT NULL,
  `ReviewTitle` varchar(200) DEFAULT NULL,
  `Review` mediumtext DEFAULT NULL,
  `UserId` int(5) DEFAULT NULL,
  `DateofReview` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblreview`
--

INSERT INTO `tblreview` (`ID`, `ProductID`, `ReviewTitle`, `Review`, `UserId`, `DateofReview`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 1, 'Great Product', 'nice product I have great expierince', 2, '2022-02-07 10:01:12', 'Review Accept', 'Review Accept', '2021-08-12 07:15:07'),
(2, 3, 'Great Expierence', 'nice product', 1, '2022-02-07 10:01:07', 'Review Reject', 'Review Reject', '2021-08-12 07:15:07'),
(5, 26, 'test', 'Value for Money. Excellent Product', 5, '2022-02-12 09:02:31', 'Review Accept', 'Review Accept', '2021-08-25 16:54:56'),
(6, 26, 'Nice Product', 'Nice Prodouct', 5, '2022-02-12 09:02:09', 'Review Accept', 'Review Accept', '2022-02-05 10:05:11'),
(10, 5, 'Amazing Nice Product', 'hkrupansi2112@gmail.com', 11, '2023-04-06 04:15:00', NULL, NULL, '2023-04-06 04:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubscriber`
--

CREATE TABLE `tblsubscriber` (
  `ID` int(5) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `DateofSub` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblsubscriber`
--

INSERT INTO `tblsubscriber` (`ID`, `Email`, `DateofSub`) VALUES
(1, 'ani@gmail.com', '2021-07-16 07:32:33'),
(2, 'rahul@gmail.com', '2021-07-16 07:32:33'),
(6, 'j@gmail.com', '2021-08-16 15:00:59'),
(7, 'cfsdf@gmail.com', '2021-08-25 16:57:34'),
(8, 'money@gmail.com', '2022-02-09 11:19:40'),
(9, 'anujk@gmail.com', '2022-02-12 10:53:53'),
(10, 'jh@gmail.com', '2022-02-12 11:50:52'),
(11, 'hkrupansi2112@gmail.com', '2023-03-31 14:13:35'),
(12, 'krupansi2112@gmail.com', '2023-03-31 14:15:11'),
(13, 'urviradadiya20@gmail.com', '2023-04-08 16:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `tbltracking`
--
-- Error reading structure for table gold.tbltracking: #1030 - Got error 194 &quot;Tablespace is missing for a table&quot; from storage engine InnoDB
-- Error reading data for table gold.tbltracking: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `gold`.`tbltracking`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:18:50', '', 1),
(2, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:29:33', '', 1),
(3, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 11:30:11', '', 1),
(4, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 15:00:23', '26-02-2017 11:12:06 PM', 1),
(5, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:08:58', '', 0),
(6, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:09:41', '', 0),
(7, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:10:04', '', 0),
(8, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:10:31', '', 0),
(9, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-26 18:13:43', '', 1),
(10, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-27 18:52:58', '', 0),
(11, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-02-27 18:53:07', '', 1),
(12, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-03 18:00:09', '', 0),
(13, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-03 18:00:15', '', 1),
(14, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-06 18:10:26', '', 1),
(15, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 12:28:16', '', 1),
(16, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 18:43:27', '', 1),
(17, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 18:55:33', '', 1),
(18, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-07 19:44:29', '', 1),
(19, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-08 19:21:15', '', 1),
(20, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-15 17:19:38', '', 1),
(21, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-15 17:20:36', '15-03-2017 10:50:39 PM', 1),
(22, 'anuj.lpu1@gmail.com', 0x3a3a3100000000000000000000000000, '2017-03-16 01:13:57', '', 1),
(23, 'hgfhgf@gmass.com', 0x3a3a3100000000000000000000000000, '2018-04-29 09:30:40', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `MobileNumber` bigint(11) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FirstName`, `LastName`, `Email`, `MobileNumber`, `Password`, `regDate`) VALUES
(1, 'Anuj Kumar', NULL, 'anuj.lpu1@gmail.com', 9009857868, 'f925916e2754e5e03f75dd58a5733251', '2017-02-04 19:30:50'),
(2, 'Amit ', NULL, 'amit@gmail.com', 8285703355, '5c428d8875d2948607f3e3fe134d71b4', '2017-03-15 17:21:22'),
(3, 'hg', NULL, 'hgfhgf@gmass.com', 1121312312, '827ccb0eea8a706c4c34a16891f84e7b', '2018-04-29 09:30:32'),
(4, 'hhkhj', 'jkh', 'g@gmail.com', 9089879765, '202cb962ac59075b964b07152d234b70', '2022-02-01 10:05:17'),
(5, 'sarita', 'pandey', 'sar@gmail.com', 7987979797, '202cb962ac59075b964b07152d234b70', '2022-02-02 06:12:53'),
(6, 'Manish ', 'Sisodia', 'manish@gmail.com', 8979898989, '202cb962ac59075b964b07152d234b70', '2022-02-05 09:49:18'),
(7, 'John', 'Doe', 'johdoe@gmail.com', 1478523690, 'f925916e2754e5e03f75dd58a5733251', '2022-02-12 11:30:45'),
(8, 'Krupansi', 'Hirpara', 'hkrupansi2112@gmail.com', 7893782374, '8842227955199eb463d3bd6ec4e82470', '2023-03-25 08:27:20'),
(9, 'daya', 'bhjbb', 'dayadesai5151@gmail.com', 4746756756, '81dc9bdb52d04dc20036dbd8313ed055', '2023-03-25 08:28:59'),
(11, 'mantr', 'Hirpara', 'mantr26@gmail.com', 2324343434, '459021ae561afd746aa8b7326aa3b692', '2023-03-31 12:51:19'),
(14, 'urvi', 'radadiya', 'urviradadiya20@gmail.com', 1121212121, 'bf9e358c17901dcdf227ef561b0efacf', '2023-04-08 17:46:07'),
(15, 'Bansi', 'Patel', 'bansi11@gmail.com', 9856321471, 'c1d15e46b1c5b00062cf05c525fcddad', '2023-04-14 16:08:49');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `UserId` int(11) DEFAULT NULL,
  `ProductId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `UserId`, `ProductId`, `postingDate`) VALUES
(6, 5, 27, '2022-02-07 09:32:46'),
(10, 7, 28, '2022-02-12 11:31:28'),
(14, 8, 26, '2023-03-30 05:45:02'),
(16, 11, 5, '2023-04-04 12:04:59'),
(17, 11, 5, '2023-04-05 09:27:15'),
(24, 14, 5, '2023-04-10 18:10:06'),
(25, 14, 12, '2023-04-10 18:10:20'),
(26, 14, 8, '2023-04-10 18:12:18'),
(27, 14, 2, '2023-04-12 14:18:40'),
(28, 14, 5, '2023-04-12 14:54:53'),
(30, 14, 3, '2023-04-12 16:52:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblotp`
--
ALTER TABLE `tblotp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblreview`
--
ALTER TABLE `tblreview`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubscriber`
--
ALTER TABLE `tblsubscriber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblotp`
--
ALTER TABLE `tblotp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblreview`
--
ALTER TABLE `tblreview`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tblsubscriber`
--
ALTER TABLE `tblsubscriber`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
