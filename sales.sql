-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 12:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `transaction_id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `store_id` int(11) NOT NULL COMMENT 'รหัสร้าน',
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `membership_number` varchar(100) NOT NULL,
  `prod_name` varchar(550) NOT NULL,
  `expected_date` date NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`store_id`, `customer_id`, `customer_name`, `address`, `contact`, `membership_number`, `prod_name`, `expected_date`, `note`) VALUES
(0, 16, 'นายนพพล อินศร', '120', '919968266', '112', 'Prd', '2022-11-23', 'Nte'),
(0, 17, 'ลูกค้าเงินสด', '-', '-', '-', '-', '2022-11-23', '-');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `store_id` int(11) NOT NULL COMMENT 'รหัสร้าน',
  `product_id` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `o_price` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `onhand_qty` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `qty_sold` int(10) NOT NULL,
  `expiry_date` date NOT NULL,
  `date_arrival` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`store_id`, `product_id`, `product_code`, `gen_name`, `product_name`, `cost`, `o_price`, `price`, `profit`, `supplier`, `onhand_qty`, `qty`, `qty_sold`, `expiry_date`, `date_arrival`) VALUES
(0, 58, '8850279783041', 'Bond Wipes', 'ทิชชูเปียก  ', '', '40', '50', '10', 'bond thailand', 0, 35, 50, '2023-06-30', '2022-11-23'),
(0, 59, '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '', '40', '60', '20', 'bond thailand', 0, -6, 55, '2023-10-23', '2022-11-23'),
(0, 60, '8850051006207', 'น้ำดื่มตรา เซเว่นซีเล็ค', ' น้ำดื่ม 600 มล. ', '', '5', '7', '2', '7-11', 0, 7, 12, '2023-10-22', '2022-11-23'),
(0, 61, '4549131069501', 'ถ่านอัลคาไลน์ขนาด AAA', ' ถ่านไฟฉาย', '', '50', '60', '10', 'บจก. ไดโซซังเกียว (ประเทศไทย)', 0, 37, 40, '2025-12-31', '2022-11-23'),
(0, 62, '8850273151303', 'อาท แร็ทคิลเลอร์1', ' เหยื่อล่อหนู', '', '25', '30', '5', '7-11', 0, 2, 2, '2022-11-27', '2022-11-24'),
(0, 63, '8850273147214', 'อาท แร็ท กลู', ' ถาดกาวดักหนูสำเร็จรูป ', '', '50', '60', '10', '7-11', 0, 20, 20, '2023-10-27', '2022-11-24'),
(0, 64, '8850039750047', 'กระดาษเช็ดหน้าสะก็อต', ' ทิชชู่ เช็ดหน้า 120 แผ่น', '', '20', '30', '10', '7-11', 0, 30, 30, '2023-11-24', '2022-11-24'),
(0, 65, '8859448901057', 'ดาวกาแฟ กาแฟสำเร็จรูปชนิดผงอราบิก้าปานกลาง(โกลด์)', ' กาแฟสำเร็จรูปชนิดผงอราบิก้าปานกลาง(โกลด์) น้ำหนักสุทธิ 30 กรัม', '', '50', '60', '10', '7-11', 0, 50, 50, '2024-09-06', '2022-11-24'),
(0, 66, '8850256100137', 'น้ำตาลทรายขาว มิตรผล', ' น้ำตาลทรายขาวบรรจุขวด มิตรผล น้ำหนักสุทธิ 220 กรัม', '', '20', '30', '10', '7-11', 0, 20, 20, '2027-10-23', '2022-11-24'),
(0, 67, '8859664700007', 'หน้ากากอนามัย 3 ชั้น ชนิดคล้องหู', ' หน้ากากอนามัย 3 ชั้น ชนิดคล้องหู บรรจุ 50 ชิ้น/กล่อง', '', '80', '100', '20', '7-11', 0, 50, 50, '2025-08-10', '2022-11-24'),
(0, 68, '1988032724509', 'ตะกร้าทรงกลมใส่ปากกา', ' ตะกร้าทรงกลมใส่ปากกา ', '', '20', '30', '10', 'บริษัท ไม๊กว่อเหย่น จำกัด', 0, 30, 30, '2023-11-24', '2022-11-24'),
(0, 69, '8850124034519', 'เนสกาแฟ ซองแดง', 'กาแฟปรุงสำเร็จผสมอาราบิก้าคั่วบดละเอียด (แดง) 17 กรัม', '', '5', '7', '2', '7-11', 0, 30, 30, '2023-09-09', '2022-11-24'),
(0, 70, '8850124012869', 'เนสกาแฟ ซองเขียว', 'กาแฟปรุงสำเร็จผสมอาราบิก้าคั่วบดละเอียด (เขียว) 17 กรัม', '', '5', '7', '2', '7-11', 0, 30, 30, '2023-09-18', '2022-11-24'),
(0, 71, '8850125078918', 'เนสกาแฟ ซองม่วง (น้ำตาลน้อย)', ' กาแฟปรุงสำเร็จผสมอาราบิก้าคั่วบดละเอียด (ม่วง) 15 กรัม  ', '', '5', '7', '2', '7-11', 0, 30, 30, '2023-11-24', '2022-11-24'),
(0, 72, '8850389301753', 'เพียว สูตร คลีออกซ์ลา', ' กาแฟปรุงสำเร็จชนิดผงผสมพรุน 12 กรัม', '', '5', '7', '2', '7-11', 0, 30, 30, '2027-12-17', '2022-11-24');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `suplier` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchases_item`
--

CREATE TABLE `purchases_item` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `store_id` int(11) NOT NULL COMMENT 'รหัสร้าน',
  `transaction_id` int(11) NOT NULL,
  `invoice_number` varchar(100) NOT NULL,
  `cashier` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `due_date` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`store_id`, `transaction_id`, `invoice_number`, `cashier`, `date`, `type`, `amount`, `profit`, `due_date`, `name`, `balance`) VALUES
(0, 142, 'RS-033327', 'Admin', '11/23/22', 'cash', '67', '22', '100', 'noppol', ''),
(0, 143, 'RS-9226332', 'Admin', '11/23/22', 'cash', '120', '30', '200', 'ลูกค้าเงินสด', '');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `transaction_id` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `product` varchar(100) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `profit` varchar(100) NOT NULL,
  `product_code` varchar(150) NOT NULL,
  `gen_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `discount` varchar(100) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`transaction_id`, `invoice`, `product`, `qty`, `amount`, `profit`, `product_code`, `gen_name`, `name`, `price`, `discount`, `date`) VALUES
(315, 'RS-6220020', '58', '1', '50', '10', 'บอนด์', 'Bond Wipes', 'ทิชชูเปียก ', '50', '', '11/23/22'),
(316, 'RS-025323', '58', '1', '50', '10', 'บอนด์', 'Bond Wipes', 'ทิชชูเปียก ', '50', '', '11/23/22'),
(317, 'RS-025323', '59', '1', '60', '20', 'บอนด์', 'Bond Ginseng', ' สบู่เหลว  ', '60', '', '11/23/22'),
(319, 'RS-60542830', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(320, 'RS-60542830', '58', '1', '50', '10', '8850279783041', 'Bond Wipes', 'ทิชชูเปียก  ', '50', '', '11/23/22'),
(321, 'RS-60542830', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(322, 'RS-60542830', '58', '1', '50', '10', '8850279783041', 'Bond Wipes', 'ทิชชูเปียก  ', '50', '', '11/23/22'),
(323, 'RS-60542830', '58', '1', '50', '10', '8850279783041', 'Bond Wipes', 'ทิชชูเปียก  ', '50', '', '11/23/22'),
(326, 'RS-60542830', '59', '2', '120', '40', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(327, 'RS-22532', '58', '1', '50', '10', '8850279783041', 'Bond Wipes', 'ทิชชูเปียก  ', '50', '', '11/23/22'),
(328, 'RS-22532', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(329, 'RS-22532', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(330, 'RS-22532', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(331, 'RS-22532', '58', '1', '50', '10', '8850279783041', 'Bond Wipes', 'ทิชชูเปียก  ', '50', '', '11/23/22'),
(332, 'RS-20352242', '61', '1', '60', '10', '4549131069501', 'ถ่านอัลคาไลน์ขนาด AAA', ' ถ่านไฟฉาย', '60', '', '11/23/22'),
(333, 'RS-20352242', '60', '1', '7', '2', '8850051006207', 'น้ำดื่มตรา เซเว่นซีเล็ค', ' น้ำดื่ม 600 มล. ', '7', '', '11/23/22'),
(334, 'RS-20352242', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(335, 'RS-868220', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(336, 'RS-868220', '60', '1', '7', '2', '8850051006207', 'น้ำดื่มตรา เซเว่นซีเล็ค', ' น้ำดื่ม 600 มล. ', '7', '', '11/23/22'),
(337, 'RS-033327', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(338, 'RS-033327', '60', '1', '7', '2', '8850051006207', 'น้ำดื่มตรา เซเว่นซีเล็ค', ' น้ำดื่ม 600 มล. ', '7', '', '11/23/22'),
(339, 'RS-328830', '60', '1', '7', '2', '8850051006207', 'น้ำดื่มตรา เซเว่นซีเล็ค', ' น้ำดื่ม 600 มล. ', '7', '', '11/23/22'),
(340, 'RS-328830', '60', '1', '7', '2', '8850051006207', 'น้ำดื่มตรา เซเว่นซีเล็ค', ' น้ำดื่ม 600 มล. ', '7', '', '11/23/22'),
(341, 'RS-3232520', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(342, 'RS-3232520', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(343, 'RS-3232520', '61', '1', '60', '10', '4549131069501', 'ถ่านอัลคาไลน์ขนาด AAA', ' ถ่านไฟฉาย', '60', '', '11/23/22'),
(344, 'RS-3232520', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(345, 'RS-9226332', '59', '1', '60', '20', '8859444166665', 'Bond Ginseng', ' สบู่เหลว   ', '60', '', '11/23/22'),
(346, 'RS-9226332', '61', '1', '60', '10', '4549131069501', 'ถ่านอัลคาไลน์ขนาด AAA', ' ถ่านไฟฉาย', '60', '', '11/23/22');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL COMMENT 'รหัสร้าน',
  `name` varchar(100) NOT NULL COMMENT 'ชื่อร้าน',
  `sub_name` varchar(100) DEFAULT NULL COMMENT 'ชื่อย่อ',
  `tax_id` varchar(100) NOT NULL COMMENT 'เลขประจำตัวผู้เสีภาษี',
  `logo` int(11) DEFAULT NULL COMMENT 'สัญลักษณ์ของร้าน',
  `branch` varchar(100) NOT NULL DEFAULT 'สำนักงานใหญ่' COMMENT 'ชื่อสาขา',
  `phone` varchar(100) NOT NULL COMMENT 'หมายเลขโทรศัพท์',
  `fax` varchar(100) DEFAULT NULL COMMENT 'หมายเลขโทรสาร',
  `register_time` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่ลงทะเบียน',
  `status` enum('discontinuation','operated') NOT NULL DEFAULT 'operated'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `name`, `sub_name`, `tax_id`, `logo`, `branch`, `phone`, `fax`, `register_time`, `status`) VALUES
(1, 'ธ.ยิ่งเจริญอะไหล่ยนต์', 'TY', '1000000000000', NULL, 'สำนักงานใหญ่', '087-854-5601', NULL, '2022-12-06 12:50:03', 'operated'),
(2, 'แมวบินคาเฟต์', 'CF', '1000000000000', NULL, 'สำนักงานใหญ่', '091-996-8266', NULL, '2022-12-06 12:51:42', 'operated');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `store_id` int(11) NOT NULL COMMENT 'รหัสร้าน',
  `suplier_id` int(11) NOT NULL,
  `suplier_name` varchar(100) NOT NULL,
  `suplier_address` varchar(100) NOT NULL,
  `suplier_contact` varchar(100) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`store_id`, `suplier_id`, `suplier_name`, `suplier_address`, `suplier_contact`, `contact_person`, `note`) VALUES
(0, 5, 'bond thailand', '116 หมู่ 5', '919968266', 'บอนด์', 'บอนด์ไทยแลนด์'),
(0, 6, '7-11', '711', '711', '24378888', '711'),
(0, 7, 'บจก. ไดโซซังเกียว (ประเทศไทย)', '1/7-9 โกดัง F,G,H คลองสองต้นนุ่น ลาดกระบัง กทม. 10520', '021389611-3', 'ไดโซ', ''),
(0, 8, 'บริษัท ไม๊กว่อเหย่น จำกัด', '2/11 หมู่ 6 ตำบลหน้าไม้ อำเภอลาดหลุมแก้ว จังหวัดปทุมธานีๅ 12140', '-', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `store_id` int(11) NOT NULL COMMENT 'รหัสร้าน',
  `username` varchar(100) NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `store_id`, `username`, `password`, `name`, `position`) VALUES
(1, 1, 'admin', 'admin', 'Admin', 'admin'),
(2, 1, 'cashier', 'cashier', 'Cashier Pharmacy', 'Cashier'),
(3, 1, 'sale', 'sale', 'Saller', 'Cashier');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `purchases_item`
--
ALTER TABLE `purchases_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `store_id` (`store_id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `purchases_item`
--
ALTER TABLE `purchases_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสร้าน', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
