-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2020 at 03:03 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `mydb`
--
-- --------------------------------------------------------
--
-- Table structure for table `items`
--
CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `item_name` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
--
-- Table structure for table `makers`
--
CREATE TABLE `makers` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `tel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
--
-- Table structure for table `memos`
--
CREATE TABLE `memos` (
  `id` int(11) NOT NULL,
  `memo` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- --------------------------------------------------------
--
-- Table structure for table `my_items`
--
CREATE TABLE `my_items` (
  `id` int(11) NOT NULL,
  `maker_id` int(11) NOT NULL,
  `item_name` text,
  `price` int(11) DEFAULT NULL,
  `keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Dumping data for table `my_items`
--
INSERT INTO `my_items` (`id`, `maker_id`, `item_name`, `price`, `keyword`) VALUES
(1, 1, 'もも', 210, '缶詰,ピンク,甘い'),
(2, 1, 'みかん', 340, '缶詰,オレンジ,美味しい'),
(3, 3, 'パイナップル', 440, '美味しい,黄色');
--
-- Indexes for dumped tables
--
--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `makers`
--
ALTER TABLE `makers`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `memos`
--
ALTER TABLE `memos`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `my_items`
--
ALTER TABLE `my_items`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `makers`
--
ALTER TABLE `makers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `memos`
--
ALTER TABLE `memos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `my_items`
--
ALTER TABLE `my_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;