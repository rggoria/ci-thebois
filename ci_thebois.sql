-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 09:23 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_thebois`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_username` varchar(250) NOT NULL,
  `user_address` varchar(250) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `order_reserved_id` int(11) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `product_image`, `product_name`, `user_id`, `user_username`, `user_address`, `product_id`, `product_price`, `order_reserved_id`, `order_status`, `order_date`) VALUES
(1, '1.png', 'Sprigatito', 1, 'RamTheGreata', 'pokemon', 1, 250, 5, 'CANCELLED', '2023-03-13 22:22:55'),
(2, '2.png', 'Turkey', 1, 'r', 'Bulacan', 1, 123, 5, 'DELIVERED', '2023-03-14 11:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_table`
--

CREATE TABLE `product_table` (
  `product_id` int(11) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_category` varchar(30) NOT NULL,
  `product_status` varchar(30) NOT NULL DEFAULT 'ACTIVE',
  `product_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_table`
--

INSERT INTO `product_table` (`product_id`, `product_image`, `product_name`, `product_description`, `product_price`, `product_category`, `product_status`, `product_date`) VALUES
(1, '1144_RG_God_Gundam.jpg', '1/144 RG God Gundam', 'God Gundam from Mobile Fighter G Gundam.', 1735, 'Real Grade', 'ACTIVE', '2023-03-14 14:41:53'),
(2, '1144_RG_Hi-Nu_Gundam.jpg', '1/144 RG Hi-Nu Gundam', 'The Hi-Nu is equipped with a multi-link gimmick that slides the armor with the movement of its joints.', 2230, 'Real Grade', 'ACTIVE', '2023-03-14 14:42:54'),
(3, '1144_RG_Wing_Gundam.jpg', '1/144 RG Wing Gundam', 'This huge figure of the Wing Gundam Zero (EW) immortalizes the classic mobile suit!', 1585, 'Real Grade', 'ACTIVE', '2023-03-14 14:43:42'),
(4, '1144_RG_Last_Shooting_Zeong_Effect_Set.jpg', '1/144 RG Last Shooting Zeong Effect Set', 'The final secret weapon used by the Principality of Zeon in the Mobile Suit Gundam TV Anime.', 4460, 'Real Grade', 'ACTIVE', '2023-03-14 14:44:31'),
(5, '1144_RG_MSN-02_Zeong.jpg', '1/144 RG MSN-02 Zeong', 'The Real Grade (RG) MSN-02 Zeong is a 1/144 Scale kit released in 2021.', 2725, 'Real Grade', 'ACTIVE', '2023-03-14 14:45:22'),
(6, '1144_RG_Force_Impulse_Gundam.jpg', '1/144 RG Force Impulse Gundam', 'The Real Grade version of the Force Impulse Gundam from \"Gundam SEED Destiny\" features a new Advanced MS Joint system in the Core Splendor and chest assembly.', 1486, 'Real Grade', 'ACTIVE', '2023-03-14 14:46:19'),
(7, '1144_RG_Nu_Gundam_Fin_Funnel_Effect_Set.jpg', '1/144 RG Nu Gundam Fin Funnel ', 'The Real Grade (RG) RX-93 ν Gundam Fin Funnel Effect Set is a limited edition 1/144 scale kit released in 2019.', 2973, 'Real Grade', 'ACTIVE', '2023-03-14 14:47:27'),
(8, '1144_RG_NU_Gundam.jpg', '1/144 RG NU Gundam', 'It includes a multi-link gimmick that allows armor parts to slide simultaneously with the articulation of the leg, as well as armor unfolding gimmick.', 2090, 'Real Grade', 'ACTIVE', '2023-03-14 14:48:17'),
(9, '1144_RG_Crossbone_Gundam_X1.jpg', '1/144 RG Crossbone Gundam X1', 'The Real Grade (RG) XM-X1 Crossbone Gundam X-1 is a 1/144 scale kit released in 2019.', 1239, 'Real Grade', 'ACTIVE', '2023-03-14 14:49:04'),
(10, 'MGSD_Freedom_Gundam_(Gundam_Seed).jpg', 'MGSD Freedom Gundam (Gundam Se', 'This is a posable, Master-Grade injection-plastic kit of an item from the Gundam universe.', 1932, 'Master Grade', 'ACTIVE', '2023-03-14 15:13:39'),
(11, '1100_MGEX_Strike_Freedom_(Gundam_Seed_Destiny).jpg', '1/100 MGEX Strike Freedom (Gun', 'Based on the Gundam Seed Destiny anime, the Strike Freedom Gundam model kit is in 1/100 scale and becomes a fully articulated figure once complete.', 6930, 'Master Grade', 'ACTIVE', '2023-03-14 15:15:13'),
(12, '1100_MG_Gundam_Virtue.jpg', '1/100 MG Gundam Virtue', 'This heavy armored Gundam from \"Gundam 00\" features a hidden a secret: the ability to purge its armor to reveal a hidden form!', 3963, 'Master Grade', 'ACTIVE', '2023-03-14 15:17:06'),
(13, '1100_MG_Eclipse_Gundam.jpg', '1/100 MG Eclipse Gundam', 'Eclipse Gundam, which is characterized by its sharp form, is the leading MS of this work.', 2479, 'Master Grade', 'ACTIVE', '2023-03-14 15:18:45'),
(14, '160_PG_Perfect_Strike_Gundam.jpg', '1/60 PG Perfect Strike Gundam', 'The impressive (and beautiful) Strike Gundam, from Gundam Seed, in Perfect Grade with its PERFECT equipment!', 12390, 'Perfect Grade', 'ACTIVE', '2023-03-14 15:35:10'),
(15, '160_PG_Gundam_Exia_(Lighting_Model).jpg', '1/60 PG Gundam Exia (Lighting  Model)', 'Featuring a carefully engineered inner frame, it\'s fully posable after assembly and is loaded with weapons; a special base is included as well..', 15859, 'Perfect Grade', 'ACTIVE', '2023-03-14 15:36:00'),
(16, '160_PG_Unicorn_Gundam_2_Banshee_Norn.jpg', '1/60 PG Unicorn Gundam 2 Bansh', 'This is a posable, Perfect-Grade injection-plastic kit of an item from the Gundam universe.', 10903, 'Perfect Grade', 'ACTIVE', '2023-03-14 15:36:43'),
(17, '1144_ENTRY_GRADE_NU_Gundam.jpg', '1/144 ENTRY GRADE NU Gundam', 'This is a posable, injection-plastic kit of a character or mobile suit from the Gundam universe.', 499, 'Entry Grade', 'ACTIVE', '2023-03-14 15:39:14'),
(18, '1144_ENTRY_GRADE_RX-78-2_Gundam_(Full_Weapon_Set).jpg', '1/144 ENTRY GRADE RX-78-2 Gundam', 'The Entry Grade RX-78-2 Gundam, based on the anime series Mobile Suit Gundam, is the ultimate introduction item for GunPla.', 499, 'Entry Grade', 'ACTIVE', '2023-03-14 15:42:23'),
(19, '1144_HG_Dilanza_Sol.jpg', '1/144 HG Dilanza Sol', 'Jeturk Heavy Machinery\'s combat mobile suit, the Dilanza Sol, gets a 1/144-scale HG model kit from Bandai!', 799, 'High Grade', 'ACTIVE', '2023-03-14 15:47:18'),
(20, '1144_HG_Zowort_Heavy.jpg', '1/144 HG Zowort Heavy', 'Jeturk Heavy Machinery\'s combat mobile suit, the Dilanza Sol, gets a 1/144-scale HG model kit from Bandai!', 792, 'High Grade', 'ACTIVE', '2023-03-14 15:48:23'),
(21, '1144_HG_Demi_Barding.jpg', '1/144 HG Demi Barding', 'The Demi Barding, as seen in \"Mobile Suit Gundam: The Witch from Mercury,\" gets a new 1/144-scale HG model kit from Bandai!', 995, 'High Grade', 'ACTIVE', '2023-03-14 15:49:02'),
(22, '1144_HG_Gundam_Schwarzette.jpg', '1/144 HG Gundam Schwarzette', 'The High Grade the Witch from Mercury, or HGTWFM, is a line of 1/144 scale Gunpla kits for the 2022 anime Mobile Suit Gundam the Witch from Mercury.', 950, 'High Grade', 'ACTIVE', '2023-03-14 15:49:41'),
(23, 'SD_Sangoku_Soketsuden_Sun_Jian_Gundam_Astray.jpg', 'SD Sangoku Soketsuden Sun Jian Gundam Astray', 'Sun Jian Gundam Astray is equipped with his large Kai no Shinki backpack for an intimidating silhouette!', 376, 'Super Deformed', 'ACTIVE', '2023-03-14 16:04:33'),
(24, 'SD_Sangoku_Soketsuden_Liu_Bei_Unicorn_Gundam.jpg', 'SD Sangoku Soketsuden Liu Bei Unicorn Gundam', 'Long Xian Liu Bei Unicorn Gundam. A form in which Liu Bei has awakened due to his heart of justice. ', 321, 'Super Deformed', 'ACTIVE', '2023-03-14 16:05:06'),
(25, 'SD_Sangoku_Soketsuden_Sun_Ceremony_Gundam_Astray.jpg', 'SD Sangoku Soketsuden Sun Ceremony Gundam Astray', 'Reproduce Sun Quan Gundam Astray\'s characteristic coloring by combining clear parts!', 323, 'Super Deformed', 'ACTIVE', '2023-03-14 16:05:37');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_table`
--

CREATE TABLE `transaction_table` (
  `transaction_id` int(11) NOT NULL,
  `shipment_id` int(11) NOT NULL,
  `order_status` varchar(30) NOT NULL,
  `transaction_balance` int(11) NOT NULL,
  `transaction_status` varchar(30) NOT NULL,
  `transaction_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_firstname` varchar(30) NOT NULL,
  `user_lastname` varchar(30) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(30) NOT NULL,
  `user_status` varchar(30) NOT NULL DEFAULT 'INACTIVE',
  `user_wallet` int(11) NOT NULL DEFAULT 0,
  `user_birthday` varchar(30) NOT NULL,
  `user_contact` varchar(30) DEFAULT NULL,
  `user_address` varchar(250) NOT NULL,
  `user_billing` varchar(250) NOT NULL,
  `user_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_username`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_status`, `user_wallet`, `user_birthday`, `user_contact`, `user_address`, `user_billing`, `user_date`) VALUES
(1, 'RamTheGreata', 'RamTheGreata', 'RamTheGreata', 'ramemersongoria.13.versus@gmai', 'RamTheGreata', 'DISABLE', 0, '', NULL, '', '', '2023-03-08 20:57:22'),
(2, 'Anonymous', 'Anonymous1112121', 'Anonymous1', 'anonymous@email.com', 'Anonymous', 'ADMIN', 0, '', NULL, '', '', '2023-03-08 20:58:14'),
(3, 'RamTheGreat1', 'RamTheGreat1', 'RamTheGreat1', 'pokemon@email.com', 'RamTheGreat1', 'USER', 0, '', NULL, '', '', '2023-03-08 20:58:49'),
(4, 'RamTheGreat', 'RamTheGreat', 'RamTheGreat', 'ramemersongoria@yahoo.com', 'RamTheGreat', 'USER', 0, '', NULL, '', '', '2023-03-10 14:28:57'),
(5, 'RamTheGreata1', 'hotdog1', 'hotdog1', 'ramemerson111goria@yahoo.com', 'RamTheGreata1', 'COURIER', 0, '', '1', 'RamTheGreata11', '', '2023-03-10 14:30:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product_table`
--
ALTER TABLE `product_table`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_table`
--
ALTER TABLE `product_table`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
